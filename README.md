# ![laravel-blog-neumorphia ](logo.png)



> ### Blog with neumorphia design useing Laravel ,Mysql ,Html,Js,Css  (CRUD, auth and more).



----------

# Getting started

## Installation



Clone the repository

    git clone https://github.com/muntazar77/laravel-blog-neumorphia.git

Switch to the repo folder

    cd  laravel-blog-neumorphia 

Install all the dependencies using composer

    composer install
    
    npm install && npm run dev


Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env


Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate:fresh --seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

     git clone https://github.com/muntazar77/laravel-blog-neumorphia.git
     cd laravel-blog-neumorphia 
    composer install
    npm install 
    cp .env.example .env
    php artisan migrate:fresh --seed
    php artisan serve
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

   

