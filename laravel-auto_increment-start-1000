#Set Auto Increment field start form 1000 in migration laravel 

```php
//Your migrations here:
Schema::create('users', function (Blueprint $table) {
    $table->bigIncrements('id')->unsigned();
    $table->integer('qualification_id')->nullable();
    $table->integer('experience_id')->nullable();
});

//then set autoincrement to 1000
DB::update("ALTER TABLE users AUTO_INCREMENT = 1000;");
```
