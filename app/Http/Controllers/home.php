<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\php_content;

class home extends Controller
{
    public function home()
    {
        $content = php_content::all();
        $data = compact('content');
        toast('php content open Success ', 'success');
        return view('home')->with($data);
    }
}