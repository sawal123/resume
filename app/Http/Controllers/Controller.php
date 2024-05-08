<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){

        // image/svg/html.svg
        // image/svg/css.svg
        // image/svg/javascript.svg
        // image/svg/php.svg
        // image/svg/mysql.svg
        // image/svg/bootstrap.svg
        // image/svg/laravel.svg
        // image/svg/photoshop.svg
        // image/svg/wordpress.svg
        // image/svg/canva.svg
        // image/svg/ai.svg
        // image/svg/arduino.svg
        // image/svg/blender.svg

        

        return view('index');
    }


}
