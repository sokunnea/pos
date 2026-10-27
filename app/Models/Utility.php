<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    public static function settings(){
        $lol = Setting::selectRaw('name,_value')->get()->toArray();
        // dd($lol);
    }

}