<?php
namespace App\Http\Controllers;

use Illuninate\Http\Request;

clss Form extends Controller
{
    function Index(Request $Request){
        $_REQUEST->validate({
            'name'=> 'required|min:3|max:20',
            'email'=> 'required|email',
            'doc'=> 'required|mimes:doc|max:1024',
        }

    );
    echo $_REQUEST->file('pdf')->store(media);
    echo "hello your file save succesfully";
    }
}