<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\php_content;

class home extends Controller
{
    public function home()
    {
        $content = php_content::all();
        $dummyy_data = [
            ['name' => 'alawa', 'email' => 'alawa@gmail.com', 'age' => 23],
            ["name" => "Ram", "email" => "ram@gmail.com", "age" => 23],
            ["name" => "Shyam", "email" => "shyam23@gmail.com", "age" => 28],
            ["name" => "John", "email" => "john@gmail.com", "age" => 33],
            ["name" => "Bob", "email" => "bob32@gmail.com", "age" => 41]
        ];
        $data = compact('content');
        $dummy_data=compact('dummyy_data');
        toast('php content open Success ', 'success');
        return view('home')->with($data,$dummy_data);
    }
}