<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\php_content;

class phpContentController extends Controller
{
    public function phpcontent(Request $request)
    {
        return view('phpContent');
    }

    public function view(Request $request)
    {


        // echo "<pre>";
        // print_r($request['sub_code']);
        // exit;
        $request->validate(
            [
                'sub_code' => 'required',
                'headline' => 'required',
                'summary' => 'required',
            ]
        );
        $content = new php_content;
        $content->sub_code = $request['sub_code'];
        $content->headline = $request['headline'];
        $content->summary = $request['summary'];
        $content->save();
        return redirect('/php')->with('success', 'Content Uploaded Successful!');
    }

}