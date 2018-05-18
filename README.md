* [Installation](#1install-the-package-via-composer)
* [Configure Provider](#2configure-provider)
* [Updating your Eloquent Models](#updating-your-eloquent-models)
* [Creating tables to support encrypt columns](#creating-tables-to-support-encrypt-columns)
* [Set encryption key in .env file](#set-encryption-key-in-env-file)


# Laravel MySql AES Encrypt/Decrypt
Laravel 5.x Database Encryption in mysql side, use native mysql function AES_DECRYPT and AES_ENCRYPT<br>
Auto encrypt and decrypt signed fields/columns in your Model<br>
Can use all functions of Eloquent/Model<br>
You can perform the operations "=>, <',' between ',' LIKE ' in encrypted columns<br>


## 1.Install the package via Composer:

```php
$ composer require devmaster10/aesencrypt:dev-master
```
## 2.Configure provider
If you're on Laravel 5.4 or earlier, you'll need to add and comment line on config/app.php:

```php
'providers' => array(
    // Illuminate\Database\DatabaseServiceProvider::class,
    DevMaster10\\AESEncrypt\\Database\\DatabaseServiceProviderEncrypt::class
)
```
## Updating Your Eloquent Models

Your models that have encrypted columns, should extend from ModelEncrypt:

```php
namespace App\Models;

use DevMaster10\AESEncrypt\Database\Eloquent;

class Persons extends ModelEncrypt
{    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tb_persons';

    /**
     * The attributes that are encrypted.
     *
     * @var array
     */
    protected $fillableEncrypt = [
        'name'
    ];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                'name',
                'description',
                ];
}
```

## Creating tables to support encrypt columns
It adds new features to Schema which you can use in your migrations:

```php
    Schema::create('tb_persons', function (Blueprint $table) {
        // here you do all columns supported by the schema builder
        $table->increments('id')->unsigned;
        $table->string('description', 250);
        $table ->unsignedInteger('created_by')->nullable();
        $table ->unsignedInteger('updated_by')->nullable();
    });
    
    // once the table is created use a raw query to ALTER it and add the BLOB, MEDIUMBLOB or LONGBLOB
    DB::statement("ALTER TABLE tb_persons ADD name MEDIUMBLOB after id");  
```


});

## Set encryption key in .env file

```php
APP_AESENCRYPT_KEY=yourencryptedkey
```
