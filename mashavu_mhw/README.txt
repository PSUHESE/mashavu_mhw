---------------------------------
Mashavu MHW v 0.0.1
---------------------------------

Overview

Mashavu MHW is a Drupal application (http://drupal.org) that can be used to aggregate community health data by offering Mashavu's Health Workers an interface to upload their data.

System Requirements 

Disk space

15 Megabytes for a minimum base installation, 60 MB with many contributed modules and themes, and more for database content, media, backups and other files.

Web server

Apache, Nginx, or Microsoft IIS
Unfortunately Drupal still does not work properly on some systems running Ubuntu.

Database server

MySQL 5.0.15 and SQLite 3.3.7

PHP

Drupal 7: PHP 5.2.5 or higher (5.3 recommended)--some of the modules require 5.3

Install Process

This is three steps:

1. Copy mashavu_mhw-X.X.X.zip to your server. Extract to wherever you would like the application to live.
2. Upload mashavu_mhw-X.X.X.sql to your database
3. Go to /sites/settings.php and edit the database information:

Find:

$databases = array (
  'default' => 
  array (
    'default' => 
    array (
      'database' => 'mghen_mashavu',
      'username' => 'mghen_mashavu',
      'password' => 'mikegg123',
      'host' => 'localhost',
      'port' => '',
      'driver' => 'mysql',
      'prefix' => '',
    ),
  ),
);

Replace with:

$databases = array (
  'default' => 
  array (
    'default' => 
    array (
      'database' => 'YOUR_DBNAME',
      'username' => 'YOUR_DBUSERNAME',
      'password' => 'YOUR_PASSWORD',
      'host' => 'YOUR_HOST',
      'port' => '',                    
      'driver' => 'mysql',
      'prefix' => '',
    ),
  ),
);
