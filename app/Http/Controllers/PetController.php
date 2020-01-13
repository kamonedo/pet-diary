<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PetController extends Controller
{
    public function index(Request $request){
        $items = Pet::all();
        return view('pet.index', ['items' => $items]);
    }
    
    public function post(Request $request){
    }
    
    public function find(Request $request){
        return view('pet.find', ['input' => '']);
    }
    
    public function search(Request $request){
        $items = Pet::nameLike($request->input)->get();
        $param = ['input' => $request->input, 'items' => $items];
        return view('pet.find', $param);
    }
    
    public function add(Request $request){
        return view('pet.add');
    }
    
    public function create(Request $request){
        $this->validate($request, Pet::$rules);
        $pet = new Pet;
        $form = $request->all();
        unset($form['_token']);
        $pet->fill($form)->save();
        return redirect('/pet');
    }
    
    public function edit(Request $request){
        $pet = Pet::find($request->id);
        return view('pet.edit', ['form' => $pet]);
    }
    
    public function update(Request $request){
        $this->validate($request, Pet::$rules);
        $pet = Pet::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $pet->fill($form)->save();
        return redirect('/pet');
    }
    
    public function delete(Request $request){
        $pet = Pet::find($request->id);
        return view('pet.del', ['form' => $pet]);
    }
    
    public function remove(Request $request){
        Pet::find($request->id)->delete;
        return redirect('/pet');
    }
}