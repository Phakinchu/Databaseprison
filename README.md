# opencpemis

## Installation

1. Copy `.env.example` to `.env`

2. Create database named `opencpemis`

3. Run composer install

```
php composer.phar install
```

4. Run data migration and seeding

```
php artisan migrate:refresh --seed
```

## How to run your application

```
php -S localhost:8000 -t public
```

## Goal

* นักศึกษาหนึ่งคน จะทำโปรเจคหนึ่งโปรเจค; หนึ่งโปรเจค สามารถมีนักศึกษาได้หลายคน
* หนึ่งโปรเจค มีอาจารย์ที่ปรึกษาหนึ่งคน; อาจารย์หนึ่งคนเป็นที่ปรึกษาได้หลายโปรเจค
* หนึ่งโปรเจค มีกรรมการได้หลายคน
* หนึ่งโปรเจค ต้องมีการบันทีกรหัสวิชา, ตอน, ภาคการศึกษา, ปีการศึกษา
* หนึ่งโปรเจค มีการสอบสองครั้ง: กลางภาค และปลายภาค ทั้งสองครั้งต้องมีการบันทึกคะแนน

## Troubleshooting

* [ReflectionException or data seeding misbehavior](https://stackoverflow.com/questions/26143315/laravel-5-artisan-seed-reflectionexception-class-songstableseeder-does-not-e)