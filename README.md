Novus Test
=======================

Novus Test


Requirements
============

* Laravel 5.8

Installation
============
Clone the project to your machine

    git clone https://github.com/Teethedev/novus.git

Update the database details in .env

Run the migrations and seeders

    php artisan migrate
    php artisan db:seed --class=RowTableSeeder
    php artisan db:seed --class=CabinetTableSeeder
    php artisan db:seed --class=BookTableSeeder
  
 Generate app key
 
    php artisan key:generate

  Access the Application
 
    The Books can be accessed on yourURL/public/books

