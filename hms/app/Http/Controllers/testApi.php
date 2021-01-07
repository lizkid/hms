<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testApi extends Controller
{
    //

    function getData()
    {
        return ['name'=>'luksford', 'age'=>'26', 'tel'=>'0759155015'];
    }
}
