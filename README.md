* [Installation](#1install-the-package-via-composer)
* [Configure Provider](#2configure-provider)
* [Updating your Eloquent Models](#updating-your-eloquent-odels)


# Laravel MySql AES Encrypt/Decrypt
Laravel 5.x Database Encryption in mysql side, use native mysql function AES_DECRYPT and AES_ENCRYPT<br>
Auto encrypt and decrypt signed fields/columns in your Model<br>
Can use all functions of Eloquent/Model<br>
You can perform the operations "=>, <',' between ',' LIKE ' in encrypted columns<br>


## 1.Install the package via Composer:

```php
$ composer require devmaster10/aesencrypt:^0.8-dev
```
## 2.Configure provider
If you're on Laravel 5.4 or earlier, you'll need to add and comment line on config/app.php:

```php
'providers' => array(
    // Illuminate\Database\DatabaseServiceProvider::class,
    DevMaster10\\AESEncrypt\\Database\\DatabaseServiceProviderEncrypt::class
)
```
## Updating your Eloquent Models

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
