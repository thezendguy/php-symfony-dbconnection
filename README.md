# php-symfony-dbconnection
A basic and lean recipe for connecting to MySQL in Symfony3.

This application will connect to the local mysql server, create a new database
called <strong><code>psd</code></strong> and a new table inside this called
<strong><code>product</code></strong>. When the application is loaded in the
browser, a Product object will be inserted into the database, and the details of
this will be displayed on the page.

Dependencies
-
git  
php v5.5.9  
composer  
MySQL

To install
-
```
$ mkdir -vp php-symfony-dbconnection  
$ cd php-symfony-dbconnection  
$ git clone https://github.com/benjaminvickers/php-symfony-dbconnection.git .  
$ composer install
```
Enter the database connection details when prompted by composer. Otherwise you
can edit the details in the app/config/parameters.yml file. Remember the database
name should be set to <strong><code>psd</code></strong>.

To setup
-
```
$ sudo service mysql start
$ php bin/console doctrine:database:create  
$ php bin/console doctrine:schema:update --force
```

To run in dev mode
-
```
$ php bin/console server:run
```

To test in a browser
-
http://localhost:8000
