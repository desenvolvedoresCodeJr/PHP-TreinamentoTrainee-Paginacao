<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ExampleController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');
        
        return view('admin/index', compact('users'));
    }
}

?>