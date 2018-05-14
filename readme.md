MySQL xdevapi-php 
=================

[![Build Status](https://travis-ci.org/nexilo/xdevapi-php.svg?branch=master)](https://travis-ci.org/nexilo/xdevapi-php)

Simple wrapper for xdevapi getSession function in PHP pecl extension

 Installation via Composer
 -------------------------
 The recommended method to install NEXILO _XDevAPI-PHP_ is through [Composer](http://getcomposer.org).
 
 1. Add `nexilo/xdevapi-php` as a dependency in your project's `composer.json` file:
 
     ```json
         {
             "require": {
                 "nexilo/xdevapi-php": "~1.1"
             }
         }
     ```
 
 2. Download and install Composer:
 
     ```bash
         curl -s http://getcomposer.org/installer | php
     ```
 
 3. Install your dependencies:
 
     ```bash
         php composer.phar install
     ```
 
 4. Require Composer's autoloader
 
     Composer also prepares an autoload file that's capable of autoloading all the classes in any of the libraries that it downloads. To use it, just add the following line to your code's bootstrap process:
 
     ```php
         <?php
 
         use Nexilo\XdevApiClientBuilder;
 
         require 'vendor/autoload.php';
 
         $client = XdevApiClientBuilder::getInstance('yourDsnHere')->getSession();
     ```
 You can find out more on how to install Composer, configure autoloading, and other best-practices for defining dependencies at [getcomposer.org](http://getcomposer.org).
 
![Web Applications](https://nexilo.uk/static/nexilo_new.svg =250x)
 