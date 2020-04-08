<?php
    class Helper
    {
       public static function clearString() {
            return trim(strip_tags($str)); 
       } 
       public static function clearInt($str) {
            return (int)$str;
       } 
    }
    