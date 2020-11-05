@if (session('success'))
    <div class="alert alert-success text-center" role="alert">
        <strong>{{ session('success') }}</strong>
    </div>
@endif

@if (session('warning'))
    <div class="alert alert-warning text-center" role="alert">
        <strong>{{ session('warning') }}</strong>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger text-center" role="alert">
        <strong>{{ session('error') }}</strong>
    </div>
@endif
