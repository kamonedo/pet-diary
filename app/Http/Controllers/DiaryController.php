<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;
use Illuminate\Support\Facades\DB;

class DiaryController extends Controller
{
    public function index(Request $request){
        $items = diary::all();
        return view('diary.index', ['items' => $items]);
    }
    
    public function post(Request $request){
    }
    
    public function find(Request $request){
        return view('diary.find', ['input' => '']);
    }
    
    public function search(Request $request){
        $items = diary::nameLike($request->input)->get();
        $param = ['input' => $request->input, 'items' => $items];
        return view('diary.find', $param);
    }
    
    public function add(Request $request){
        return view('diary.add');
    }
    
    public function create(Request $request){
        $this->validate($request, diary::$rules);
        $diary = new diary;
        $form = $request->all();
        unset($form['_token']);
        $diary->fill($form)->save();
        return redirect('/diary');
    }
    
    public function edit(Request $request){
        $diary = diary::find($request->id);
        return view('diary.edit', ['form' => $diary]);
    }
    
    public function update(Request $request){
        $this->validate($request, diary::$rules);
        $diary = diary::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $diary->fill($form)->save();
        return redirect('/diary');
    }
    
    public function delete(Request $request){
        $diary = diary::find($request->id);
        return view('diary.del', ['form' => $diary]);
    }
    
    public function remove(Request $request){
        diary::find($request->id)->delete;
        return redirect('/diary');
    }
}
