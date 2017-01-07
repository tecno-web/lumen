<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    function home()
    {
        $array = ['prduct'=>'HD77','price'=>'160'];
        return response()->json($array);
    }
}
