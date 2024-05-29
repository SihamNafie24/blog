<?php

namespace App\Http\Controllers;
use App\Models\product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = product::all();
        return view('listproduct',compact('products'));
    }

    public function create(){
        return view('createproduct');
    }

    public function store(Request $requset){

        $requset->validate([
            'title'=>"required",
            'description'=>"required",
            'prix'=>"required"

        ]);
        product::create($requset->all());
        return redirect('listproduct');
    }

    public function edit(string $id){
        $product=product::findorfail($id);
        return view('editproduct',compact('product'));
    }
    public function show(string $id){
        $product=product::findorfail($id);
        return view('show',compact('product'));
    }

    public function update(Request $request, string $id){
        $validdata = $request->validate([
            'title'=>"required",
            'description'=>"required",
            'prix'=>"required"
        ]);
        $product=product::findorfail($id);
        $product->update($validdata);
        return redirect('listproduct');
    }

    public function delete(string $id){
        $product=product::findorfail($id);
        $product->delete();
        return redirect('listproduct');

    }
}
