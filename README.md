# laravel-job-tracker
Job tracker built on Laravel Headless-API and Vue Front-end

Back-end and Front-end are separated into 2 different repositories and run in different enviroments and are connected to each other through API HTTP communication

To navigate the website through the project use navigation up top.

To setup the back-end, I've used XAMPP, depending on your preffered method to start the backend, you might want to edit the src/constant.js file to edit the Back-End address used

Setting up the back-end, edit the .env.example and rename to the .env file, and according to it, create the database table

To run migrations and seeder use according commands of "php artisan migrate" and "php artisan db:seed" 
