<?php

namespace App\Http\Controllers;

use App\Podniz;
use Illuminate\Http\Request;

class PodnizController extends Controller
{
    public function index(Podniz $podniz){
         $podnizs=Podniz::all();
        return view('podniz.index', compact('podnizs'));
    }

    public function edit($id){
        $podniz = Podniz::find($id);
     return view('/podniz/edit', compact('podniz'));
    }

    public function show(Podniz $podniz){
        $podniz = $podniz -> id;
     return view('/podniz/show', compact('podniz'));
    }

    public function create(Podniz $podniz){

        return view('podniz.create', compact('podniz'));
    }

    public function store(Request $request){
            $rules = [
        'niz_a'=>'required|max:100',
        'niz_b'=>'required|max:100',

            ];

             return $this->validate($request, $rules);


            $podnizs = Podniz::create($request->all());
            $podnizs->save();


             return redirect('/podniz');
    }

    public function provjera_niza(){

$mystring='niz_a';
$findme='niz_b';
$pos = strpos($mystring, $findme);

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
}
    }
}
