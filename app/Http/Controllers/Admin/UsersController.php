<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::all();
        // $projects =  Project::all();
        $users = User::with('project')->get();
        return view('admin.users.index')->with([
            'users' => $users,
        ]);
    }


    public function create(User $user)
    {
        $roles = Role::with('users')->where('name', '!=', 'super_admin')->get();
        $projects = Project::all();
        return view('admin.users.create')->with([
            'user' => $user,
            'roles' => $roles,
            'projects' => $projects,
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'project' => 'required'
        ]);


        $user = User::create([
            'project_id' => $data['project'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $user->roles()->sync($request->roles);

        return redirect(route('admin.users.index'))
            ->with('success', "L'utilisateur $user->name a été créé avec succès!");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, User $user)
    {
        // dd($user);
        $projects = Project::all();

        if (Gate::denies('edit-users')) {
            return redirect(route('admin.users.index'));
        }

        if ($request->user()->hasRole('admin_eiffage') && !$request->user()->hasRole('super_admin')) {
            $roles = Role::with('users')->where('name', '!=', 'super_admin')->get();
        } else {
            $roles = Role::all();
        }


        if (($request->user()->hasRole('admin_eiffage') && !$request->user()->hasRole('super_admin')) && $user->hasRole('super_admin')) {
            return redirect()->route('admin.users.index')->with('error', 'Vous ne pouvez pas modifier cet utilisateur!');
        }

        if ($request->user()->hasRole('admin_eiffage') && !$request->user()->hasRole('super_admin') && $user->hasRole('admin_eiffage') && $user != Auth::user()) {
            return redirect()->route('admin.users.index')->with('error', 'Vous ne pouvez pas modifier cet utilisateur!');
        }


        return view('admin.users.edit')->with([
            'user' => $user,
            'roles' => $roles,
            'projects' => $projects
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->project_id = $request->project;

        if ($user->save()) {
            $request->session()->flash("success",  " L'utilisateur $user->name a été mis à jour");
        } else {
            $request->session()->flash("error", "Une erreur s'est produite lors de la mise à jour de l'utilisateur");
        }

        return redirect()->route('admin.users.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // $roles = Role::all();

        if (Gate::denies('delete-users')) {
            return redirect(route('admin.users.index'));
        }
        $currentUser = $request->user();
        $requestedUser  = User::findOrFail($request->user_id);

        if (($currentUser->hasRole('admin_eiffage') && !$currentUser->hasRole('super_admin')) && $requestedUser->hasRole('super_admin')) {
            return redirect()->route('admin.users.index')->with('error', 'Vous ne pouvez pas effacer cet utilisateur!');
        }

        if (($currentUser->hasRole('admin_eiffage') && !$currentUser->hasRole('super_admin')) && $requestedUser->hasRole('admin_eiffage')) {
            return redirect()->route('admin.users.index')->with('error', 'Vous ne pouvez pas effacer votre compte!');
        }

        if (($currentUser->hasRole('admin_eiffage') && !$currentUser->hasRole('super_admin')) && $requestedUser->hasRole('admin_eiffage') && Auth::user() == $requestedUser) {
            return redirect()->route('admin.users.index')->with('error', 'Vous ne pouvez pas effacer votre compte!');
        }

        $requestedUser->roles()->detach();
        $requestedUser->delete();
        return redirect()->route('admin.users.index')->with("warning", "L'utilisateur $requestedUser->name a été supprimé! ");
    }
}
