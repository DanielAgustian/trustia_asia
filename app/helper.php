<?php


use Illuminate\Support\Facades\Route;


function set_active_sidebar($uri, $output = ' active')
{
 if( is_array($uri) ) {
   foreach ($uri as $u) {
     if (Route::is($u)) {
       return $output;
     }
   }
 } else {
   if (Route::is($uri)){
     return $output;
   }
 }
}

function versioning(){
    return '?v=1.1.0';
}