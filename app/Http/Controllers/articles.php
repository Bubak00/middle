<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articles extends Controller
{
    public function index()
    {
        return view('articles.index', [
            $order = articles::where('is_published' == True)->orderby('likes')->pagination('likes')
        ]);


    }
    public function destroy($id){
        Subjects::destroy($id);
        Session::flash('message', 'Delete successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('articles');
    }
};
