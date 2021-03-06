# Contact us Form Package
[![Issues](https://img.shields.io/github/issues/garsteaa/laravel-test-pkg)](https://github.com/garsteaa/laravel-test-pkg)
[![Github Forks](https://img.shields.io/github/forks/garsteaa/laravel-test-pkg)](https://github.com/garsteaa/laravel-test-pkg/network/members)
[![Github Stars](https://img.shields.io/github/stars/garsteaa/laravel-test-pkg)](https://github.com/garsteaa/laravel-test-pkg/stargazers)

A simple Contact us Form package with a view and logic to store information from contact page to DataBase and also to send and email notification to admin

## Instalation
- First require package
```sh
$ composer require garstea/contact
```

>It has build in auto discovery package and no needed to add to App providers in config app.php

- Then migrate files
``` sh
$ php artisan migrate
```

##### Important
In .env file set up credentials for database and mail.

>In your aplication now is set a new route named "garstea-contact"
```url('/contact')``` which can be used for accesing contact page view

## Settings
- To publish config files run command

```sh
$ php artisan vendor:publish --provider="Garstea\Contact\ContactServiceProvider"
```

>Will publish `config.php` file and also assets files and necesary views

in config/contact.php are folow variables

- ``` "send_email_to" ``` - on which email address to be send emails
- ``` "redirect_to" ``` - after succesufully sent email and stored to DB user will be redirected to, default is form contact page.

Blade views are located in `resource/view/vendor/contact` and can be styled or changed how will be liked to you.



License
----

MIT
