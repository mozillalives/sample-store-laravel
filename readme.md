What is it?
===========

Just a sample project written with the Laravel framework. I've left the database in (app/database/production.sqlite) for easy startup. 

To get up and running, first install all the project dependencies with [composer](https://getcomposer.org)

    composer install

Then simply start the application up by running

    php artisan serve
    

What does it do?
================

This simple app allows you to list, add, edit and delete products from your sample store. When you navigate to the root index you'll be taken to a product listing. From there you will be able to add a new product, edit existing ones or even delete ones you don't need any more. 


What does it not do?
====================

It doesn't do any type of authentication. It doesn't scale or paginate. It's primary purpose is to be a demo, so there's a lot that it doesn't do.


Does it do anything notable?
===================================

* The call to delete a product is performed via ajax using jquery (see app/views/list.blade.php).
* While the database is supplied (I wouldn't include it normally) it can be reloaded using the migrations and seeds I created.


What should it do next?
=======================

* Unit Tests
* Use AngularJs/EmberJs/ReactJs for the whole interface
