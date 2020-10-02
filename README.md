<p align="center">
  <br>
  <b>Laravel Blog</b>
  <br>
  <a href="localhost:8000">
    <img src="https://www.designbust.com/download/168/png/laravel_icon512.png" width=350>
  </a>
</p>

## Introduction

LaravelBlog is a blog project written in Laravel 5.2.23

## Screenshots

### Main Page

![lara](https://user-images.githubusercontent.com/53239920/94927877-70bf0e80-04f5-11eb-87ab-108d71a64926.PNG)

### Posts Page

![lara2](https://user-images.githubusercontent.com/53239920/94928034-a49a3400-04f5-11eb-959f-6529ed6a0c35.PNG)

### Comments Page

![comments](https://user-images.githubusercontent.com/53239920/94927925-816f8480-04f5-11eb-8310-e9d1ef9a63f1.PNG)

### Admin Panel

![adminpanel](https://user-images.githubusercontent.com/53239920/94929173-51c17c00-04f7-11eb-8c63-dee004113b3c.PNG)


## Features

* Support multiple user;
* Admin Interface;
* Comment section
* Pagination
* Uses laracast for easy notifications


## Installation

Recommended using Homestead

### 1. Clone the repo

    git clone https://https://github.com/MishalAreef/LaravelBlog

### 2. Composer install

    cd laravelBlog
    composer install
    npm install / yarn
    
### 3. Database stuff

Ajust the database information, then: 

    php artisan migrate

Seed the database if you want: 

    php artisan db:seed

### 4. Info

* Register: http://localhost:8000/auth/register
* Login: http://localhost:8000/auth/login


## License

Copyright (c) 2014 CJ.

The MIT License (MIT). Please see [Opensource MIT License](http://www.opensource.org/licenses/MIT) for more information.
