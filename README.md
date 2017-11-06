<<<<<<< HEAD
# php-lumen-101

[![StyleCI](https://styleci.io/repos/104204338/shield?branch=master)](https://styleci.io/repos/104204338)

## installation

1. Install dependencies
=======
# opencpemis

## Installation

1. Copy `.env.example` to `.env`

2. Create database named `opencpemis`

3. Run composer install
>>>>>>> c4c3c7c58d240c004efa36e79375916c9f859ed0

```
php composer.phar install
```

<<<<<<< HEAD
2. Create a config file, just copy from `.env.example` then rename it to `.env`

3. Create a database named `blog`

4. Migrate and seed the database
=======
4. Run data migration and seeding
>>>>>>> c4c3c7c58d240c004efa36e79375916c9f859ed0

```
php artisan migrate:refresh --seed
```

<<<<<<< HEAD
## Running on your local machine
=======
## How to run your application
>>>>>>> c4c3c7c58d240c004efa36e79375916c9f859ed0

```
php -S localhost:8000 -t public
```

<<<<<<< HEAD
##DATABASE 
#Prison

## References

* [Lumen framework](https://lumen.laravel.com)
* [Eloquent ORM](https://laravel.com/docs/5.5/eloquent)
* [Database migrations](https://laravel.com/docs/5.5/migrations)
* [Database seedings](https://laravel.com/docs/5.5/seeding)
* [Blade template engine](https://laravel.com/docs/5.5/blade)

## Troubleshoots

* Call to undefined function bcrypt(): use `crypt()` instead.  

- collaborator accepted
=======
## Goal

* นักศึกษาหนึ่งคน จะทำโปรเจคหนึ่งโปรเจค; หนึ่งโปรเจค สามารถมีนักศึกษาได้หลายคน
* หนึ่งโปรเจค มีอาจารย์ที่ปรึกษาหนึ่งคน; อาจารย์หนึ่งคนเป็นที่ปรึกษาได้หลายโปรเจค
* หนึ่งโปรเจค มีกรรมการได้หลายคน
* หนึ่งโปรเจค ต้องมีการบันทีกรหัสวิชา, ตอน, ภาคการศึกษา, ปีการศึกษา
* หนึ่งโปรเจค มีการสอบสองครั้ง: กลางภาค และปลายภาค ทั้งสองครั้งต้องมีการบันทึกคะแนน

## Troubleshooting

* [ReflectionException or data seeding misbehavior](https://stackoverflow.com/questions/26143315/laravel-5-artisan-seed-reflectionexception-class-songstableseeder-does-not-e)
>>>>>>> c4c3c7c58d240c004efa36e79375916c9f859ed0
