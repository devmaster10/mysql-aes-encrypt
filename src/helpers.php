<?php

namespace AESEncrypt;

if (!function_exists('AESEncrypt\mysqldecrypt')) {
    /**
     * Creates a Stringy object and returns it on success.
     *
     * @param  string  $column The character encoding
     * @return Stringy column with decrypt function
     */
    function mysqldecrypt($column, $alias = null)
    {
        return "AES_DECRYPT(`{$column}`, '" . config('services.aesEncrypt.key') ."') as `" . ($alias ? $alias : $column) . "`";
    }
}

if (!function_exists('AESEncrypt\mysqlencrypt')) {
    /**
     * Creates a Stringy object and returns it on success.
     *
     * @param  string  $column The character encoding
     * @return Stringy column with decrypt function
     */
    function mysqlencrypt($column, $alias = null)
    {
        return "AES_ENCRYPT(`{$column}`, '" . config('services.aesEncrypt.key') ."') as `" . ($alias ? $alias : $column) . "`";
    }
}
