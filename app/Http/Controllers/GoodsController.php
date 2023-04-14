<?php

namespace App\Http\Controllers;

use App\Models\goods;
use Illuminate\Http\Request;


class GoodsController extends Controller
{
    //Cara untuk menggunakan variable controlller index 
    public function index (){
            
        $goods = Goods::all();
        return view('goods.index',compact(['goods']));
    }

    public function search(Request $request){
        if ($request->has('search')) {
            $goods = Goods::where('goods_name','LIKE','%'.$request->search.'%')->get();
        }
        else {
            $goods = Goods::all();
        }
        return view('goods.index', ['goods' => $goods]);
    }

    public function create(){
        return view('goods.create');
    }

    public function store(Request $request){
        //dd($request->except(['_token', 'submit']));
        Goods::create($request->except(['_token', 'submit']));
        return redirect('/goods');
    }

    public function edit($id_goods){
        $goods = Goods::find($id_goods);
        return view('goods.edit', compact(['goods']));
    }

    public function update($id_goods, Request $request){
        $goods = Goods::find($id_goods);
        $goods->update($request->except(['_token', 'submit']));
        return redirect('/goods');
    }

    public function destroy($id_goods){
        $goods = Goods::find($id_goods);
        $goods->delete();  
        return redirect('/goods');
    }
}
