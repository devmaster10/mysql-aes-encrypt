# Laravel MySql AES Encrypt/Decrypt
Laravel 5.x Database Encryption in mysql side, use native mysql function AES_DECRYPT and AES_ENCRYPT<br>
Auto encrypt and decrypt signed fields/columns in your Model<br>
Can use all functions of Eloquent/Model<br>
You can perform the operations "=>, <',' between ',' LIKE ' in encrypted columns<br>


##1. Install the package via Composer:

```php
$ composer require devmaster10/aesencrypt:^0.8-dev
```
##2. Configure provider
If you're on Laravel 5.4 or earlier, you'll need to add and comment line on config/app.php:

```php
'providers' => array(
    // Illuminate\Database\DatabaseServiceProvider::class,
    DevMaster10\\AESEncrypt\\Database\\DatabaseServiceProviderEncrypt::class
)
```
