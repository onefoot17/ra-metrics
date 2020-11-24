# RA-METRICS System

This tutorial has been developed to help everyone who needs new features for RA-METRICS system.

## Requirements for Laravel

It is requested to install the below software list in order to run the website as well as it runs on the web server.

* [Laravel 8.x](https://laravel.com/docs/8.x) - Built over Laravel framework
* [PHP](http://www.php.net/) - PHP >= 7.3
* [Nginx](https://www.nginx.com/) ou Apache 2.2
* [PostgreSQL](https://www.postgresql.org/) - PostgreSQL >= 12.0
* [Composer](https://getcomposer.org/) - Composer
* [GIT](https://git-scm.com/) - GIT
* [VSCode](https://code.visualstudio.com/) - Microsoft Visual Studio Code
* OpenSSL PHP Extension
* PDO PHP Extension
* CURL PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* Ctype PHP Extension
* JSON PHP Extension
* BCMath PHP Extension
* Fileinfo PHP Extension

## Web servers

Set up Nginx in order to run Laravel correctly. To do so, just go into Nginx config file at **/var/nginx/sites-available/default**, and add the follow source code snippet inside the **server** TAG:

```
location /rametrics {
    alias /var/www/html/rametrics/public;
    try_files $uri $uri/ @rametrics;

    location ~ \.php$ {
            include snippets/fastcgi-php.conf;
            fastcgi_param SCRIPT_FILENAME $request_filename;
            fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
    }
}

location @bimstation {
        rewrite /rametrics/(.*)$ /rametrics/index.php?/$1 last;
}
```

Just in case the Apache was used to supply the web server, use the code snippet below on the Apache config file at **C:\xampp\apache\conf\httpd.conf**

```
LoadModule rewrite_module modules/mod_rewrite.so

Alias /rametrics "C:/xampp/htodocs/rametrics/public"
<Directory "C:/xampp/htodocs/rametrics/public">
   Options +FollowSymlinks +Indexes
   AllowOverride All
</Directory>

```

Still in Apache case, open up the file at **app_root/app/public/.htaccess** and add underneath the variable RewriteEngine On:

```
RewriteBase /rametrics
```

## Setting up RA-METRICS to run locally

Now the local environment is duly configured, the code only needs to be cloned from Bitbucket into the local machine. Note: It has been using terminal command lines to clone and commit through GIT.

```
git clone git@bitbucket.org:vcomp/rametrics.git
```
or
```
git clone https://vcompdev@bitbucket.org/vcomp/rametrics.git
```

* Inside root project folder, run the follow command lines in order to update Laravel Dependencies and built the local database as well
```
composer update
php artisan migrate:refresh --seed
```
* Still at root project folder, copy the **.env.exemple** file content into a new file called **.env** (Whether there is no .env file at your project root folder, just make up a brand new)

## Systems running on Linux

* It is necessary provide writting permission for some directories, such as, app_root/bootstrap and app_root/storage

```
sudo chmod 775 -R storage/ bootstrap/
sudo chown -R www-data:localuser app_root/storage/ app_root/bootstrap/ 
```

Now the environment is settled down. Go and build a amazing thing!
