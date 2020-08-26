<?php
namespace App\Tools;

class StringHelper 
{
    //md5 加密 生成 一个 32 位 字符串
    public function md5($str){
        return md5($str);
    }
    //哈希加密
    public function hash($str){
        return Hash::make($str);
    }
    //哈希 检查
    public function hash_check($str){
        $hash = Hash::make($str);
        return Hash::check($str , $hash);
    }
    // crypt 加密
    public function crypt($str){
        return Crypt::encrypt($str);
    }
    //crypt 解密
    public function crypt_check($str){
        return Crypt::decrypt($str);
    }
}