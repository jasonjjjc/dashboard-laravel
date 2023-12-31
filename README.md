# JobStack

## Timeline

I created this project to learn laravel. I spent 3 weeks on it, mostly by myself but with huge help from my POD teammates whenever I was stuck.

## The 4 L's

### Loved 
<p>Laravel and MVC - I enjoyed learning a real all-in-one stack where all the tools are engrained in the framework to make short work of routes, database, storage, authentication and environment variables. I loved being able to use OOP and MVC to organise everything in my project. It is the greatest gift to code that I have experienced. For the first time I was able to see the complexity of my project increase without becoming overwhelmed by the code.</p>

### Longed For 
<p>Laravel Breeze - I found out, half way through doing the project, that it was possible to create most of the login pages using a simple laravel tool called Breeze that would have implemented all the auth paths, controllers and views for the login, register and home pages. A part of me wishes I had used Breeze from the beginning to automate those steps, so that I could focus elsewhere, because in the future I will always default to using it. The only advantage to ceating everything from scratch was that I successfully obtained a deeper understanding of everything that was happening and spending that time becoming fluent in all the laravel methods will make me a better developer in the future.</p>


### Loathed
<p>Documentation - Honestly, the only thing I loathed about this project was once again struggling with documentation and being reliant on chatGPT as a lifeline. The instructions within the video guides on laracasts almost always failed due to being deprecated or due to some omission that I had to find a workaround for with chatGPT.</p>


### Learned
<p>OOP - Once again I learned that it takes two weeks to get to grips with a new skill. Two weeks ago I did not understand the merits of OOP, but now I can't imagine coding without it. </p>



## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

## Docs

### Restarting the project

<p>git clone it</p> 
<p>npm i</p> 
<p>composer install</p>
<p>cp .env.example .env</p>
<p>php artisan key:generate</p>
<p>Open terminal and run "npm run dev"</p>
<p>Open another terminal and run "php artisan serve"</p>
<p>Open <a href="localhost:8000">localhost:8000</a> in browser</p>
<p>Start coding!</p>

### Deploying on cPanel
<p>Edit .env APP_ENV to production</p>
<p>Edit .env APP_URL to deployment site</p>
<p>Edit DB_DATABASE, DB_USERNAME and DB_PASSWORD to cPanel database information AND change APP_DEBUG to false</p>
<p>Run "npm run build" in Terminal</p>
<p>Extract everything inside the root folder to ZIP</p>
<p>Upload the ZIP file into cPanel root directory and extract</p>
<p>Go to browser and navigate to <a href="https://laravel-project.jason-chalangary.netmatters-scs.co.uk">https://laravel-project.jason-chalangary.netmatters-scs.co.uk/</a></p>

### Editing code

<p>Edit .env APP_ENV to local </p>
<p>Edit .env APP_URL to http://127.0.0.1:8000</p>
<p>Edit DB_DATABASE, DB_USERNAME and DB_PASSWORD to database name, root for username and blank for password and change APP_DEBUG to true</p>

