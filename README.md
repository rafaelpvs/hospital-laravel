# Hospital System in laravel



## About the application

<p>This project is to improve my programing skills, both in data modeling and in laravel development. The idea is to create a system where the users (nurses and doctors) can register their patients, medicaments prescribed and aplied, can control the usage of beds and to make several reports.
</p>

Take a look at the modeling

[Data Modeling](https://drive.google.com/file/d/1DeMAY-7ap5vFe5fGTNrPM_5452s6nnnX/view?usp=sharing)

<i>I am open to suggestions for changes and corrections about the modeling</i>
## Requirements

Composer - 2.0.9

PHP - 8.0

Laravel - 8.35.1

## Steps to run
<br />
First, take a look and make the installation of composer

[Composer installation](https://getcomposer.org/download/)

Then, install PHP
````bash
sudo apt install php8.0 
````
Now you should install most required PHP modules from the list.
````bash
sudo apt install php7.3-cli php8.0-xml php8.0-mysql php8.0-curl php8.0-gd php8.0-json php8.0-mbstring php8.0-mcrypt
````

Do a clone of the repository
````bash
git clone https://github.com/rafaelpvs/...
````

Open the folder
````bash
cd {nameproject}
````

Install the laravel dependencies
````bash
composer install
````

Install node dependencies
````bash
npm install
````
or
````bash
yarn install
````
To finish, run the server to test if is ok
````bash
php artisan serve
````
Create a database and put the data accesses in the env file

Run migration

````bash
php artisan migrate
````

Open your browser in localhost:8000 and be ready to collaborate

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

