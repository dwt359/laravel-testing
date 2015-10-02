<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 10/1/2015
 * Time: 7:29 PM
 */

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Http\Controllers\Controller;

class test extends Controller{

    public function showTestPage(){
        $var = DB::table('item')->get();
        return view('page', ['val'=>$var]);
    }
}