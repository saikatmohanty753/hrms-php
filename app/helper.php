<?php
use Illuminate\Support\Facades\Crypt;

if(!function_exists('encrypt'))
{
    function encrypt($str)
    {
        return Crypt::encryptString($str);
    }
}

if(!function_exists('decrypt'))
{
    function decrypt($str)
    {
         try {
            return $decrypted = Crypt::decryptString($str);
        } catch (\Exception $e) {
            return '';
        }
    }
}
