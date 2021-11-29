<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Test extends Model {

   public static function insertData($data){

      $value=DB::table('users')->where('username', $data['username'])->get();
      if($value->count() == 0){
         DB::table('users')->insert($data);
      }
   }

}