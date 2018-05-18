<?php

namespace AESEncrypt;

if (!function_exists('AESEncrypt\decrypt')) {
    /**
     * Creates a Stringy object and returns it on success.
     *
     * @param  string  $column The character encoding
     * @return Stringy column with decrypt function
     */
    function decrypt($column, $encoding = null)
    {
        // return "AES_DECRYPT({$column}, '" . env('APP_AESENCRYPT_KEY') ."')";

        return "AES_DECRYPT({$column}, 'TESTE')";
    }
}