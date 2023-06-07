<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use ValidatesRequests;

    public function index()
    {
        $my_name = "Ibrahim";

        $view_data = [
            'myname' => $my_name
        ];
        return view("posts.index", $view_data);
    }
}
