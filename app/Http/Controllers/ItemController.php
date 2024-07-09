<?php

namespace App\Http\Controllers;

use App\Models\ItemModel;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = ItemModel::all();
        return view("index", compact("items"));
    }
    public function show($id)
    {
        $item = ItemModel::findOrFail($id);
        return view("details", compact('item'));
    }
    public function add()
    {
        return view("add");
    }
    public function update($id)
    {
        $item = ItemModel::findOrFail($id);
        return view("update", compact('item'));
    }


    public function addItem(Request $request, ItemModel $item)
    {
        $request->validate([
            "name" => "required",
            "desc" => "required|max:200",
            "price" => "required|numeric",
            "quantity" => "required|integer"
        ]);
        $item->fill($request->all());
        if ($item->save()) {
            $response = ['success' => 'Item Added Successfully'];
        } else {
            $response = ['error' => 'Item Could not be Added'];
        }
        return redirect()->route('index')->with($response);
    }
    public function updateItem(Request $request, $id)
    {

        $request->validate([
            "name" => "required",
            "desc" => "required|max:200",
            "price" => "required|numeric",
            "quantity" => "required|integer"
        ]);
        $item = ItemModel::findOrFail($id);
        $item->fill($request->all());
        $item->save();
        return redirect()->route('show',['id'=>$id])->with('success', 'Item updated successfully');
    }
}
