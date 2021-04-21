<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\File;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }

    public function get_form(){
        $forms = Form::all();

        return view('form.get_forms')->with(['forms'=>$forms]);
    }

    public function store(Request $request){
        $form = new Form();
        $filemodel = new File();

        $form->name = $request->input('name');
        $form->surname = $request->input('surname');
        $form->email = $request->input('email');

        if($request->hasfile('file')){
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/form/', $filename);
            $filemodel->file = $filename;
        } else {
            return $request;
            $filemodel->file = '';
        }
        $filemodel->save();
        $form->save();
        return view('form')->with('form',$form);
    }
}
