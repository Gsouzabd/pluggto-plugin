<?php
namespace Inc_PP\Base;


class Activate{
    public static function activate(){

        flush_rewrite_rules();
    }


}