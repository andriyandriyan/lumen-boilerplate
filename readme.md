# Rest API Boilerplate Using Lumen

A RESTful API boilerplate for Lumen micro-framework. Features included:

- [JWT Auth](https://github.com/tymondesigns/jwt-auth) for Lumen
- [Laravel CORS](https://github.com/barryvdh/laravel-cors)
- [Lumen Generator](https://github.com/flipboxstudio/lumen-generator) to using Laravel generator command

## Getting Started
First, clone the repo:
```bash
$ git clone git@github.com:andriyandriyan/lumen-boilerplate.git
```

#### Install dependencies
```bash
$ cd lumen-boilerplate
$ composer install
```

#### Configure the Environment
Create `.env` file:
```bash
$ cat .env.example > .env
```

#### Generate App Key and JWT Key
```bash
$ php artisan key:generate
$ php artisan jwt:secret
```

#### Start Development
You can start development using artisan command
```bash
$ php artisan serve
```