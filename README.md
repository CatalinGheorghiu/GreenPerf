<h1>How to Setup a Laravel Project</h1>

<h2>1. Install Composer Dependencies</h2>	
	<p>
	Whenever you clone a new Laravel project you must now install all of the project dependencies. This is what actually installs Laravel itself, among other necessary packages to get started.

When we run composer, it checks the <strong>composer.json</strong> file which is submitted to the github repo and lists all of the composer (PHP) packages that your repo requires. Because these packages are constantly changing, the source code is generally not submitted to github, but instead we let composer handle these updates. So to install all this source code we run composer with the following command.

    composer install

</p>

<h2>2. Install NPM Dependencies</h2>	
	<p>
	Just like how we must install composer packages to move forward, we must also install necessary NPM packages to move forward. This will install Vue.js, Bootstrap.css, Lodash, and Laravel Mix.

This is just like step 4, where we installed the composer PHP packages, but this is installing the Javascript (or Node) packages required. The list of packages that a repo requires is listed in the <strong>composer.json</strong> file which is submitted to the github repo. Just like in step 4, we do not commit the source code for these packages to version control (github) and instead we let NPM handle it.

    npm install

</p>

<h2>3. Create a copy of  .env file</h2>	
	<p>
    <strong>.env </strong> files are not generally committed to source control for security reasons. But there is a <strong>.env.example </strong> which is a template of the <strong>.env </strong> file that the project expects us to have. So we will make a copy of the <strong>.env.example </strong> file and create a <strong>.env </strong> file that we can start to fill out to do things like database configuration in the next few steps.

    cp .env.example .env

</p>

<h2>4. Generate an app encryption key</h2>	
	<p>
    Laravel requires you to have an app encryption key which is generally randomly generated and stored in your <strong>.env </strong>  file. The app will use this encryption key to encode various elements of your application from cookies to password hashes and more.

    php artisan key:generate

</p>

<h2>5. Create an empty database for our application</h2>	
	<p>
    Create an empty database for your project using the database tools you prefer (My favorite is SequelPro for mac). 
</p>

<h2>6. In the .env file, add database information to allow Laravel to connect to the database</h2>	
	<p>
   We will want to allow Laravel to connect to the database that you just created in the previous step. To do this, we must add the connection credentials in the <strong>.env </strong> file and Laravel will handle the connection from there.
       
   In the .env file fill in the <strong>DB_HOST</strong>, <strong>DB_PORT</strong>, <strong>DB_DATABASE</strong>, <strong>DB_USERNAME</strong>, and <strong>DB_PASSWORD</strong> options to match the credentials of the database you just created. This will allow us to run migrations and seed the database in the next step.
</p>

<h2>7. Migrate the database</h2>	
	<p>
    Once your credentials are in the .env file, now you can migrate your database.
    
        php artisan migrate
</p>

<h2>9. [Optional]: Seed the database</h2>	
	<p>
    After the migrations are complete and you have the database structure required, then you can seed the database (which means add dummy data to it).
    
        php artisan db:seed
</p>

<h2>10. Start a local server</h2>	
	<p>
    Typically, you may use a web server such as Apache or Nginx to serve your Laravel applications. If you  would like to use PHP's built-in development server, you may use the serve Artisan command:
    
        php artisan serve
        
By default the HTTP-server will listen to port 8000.
</p>
