<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Resources\Item as ItemResource;
use App\Http\Resources\ItemCollection;

class ItemsController extends Controller
{
    public function index() {
        return new ItemCollection(Item::all());
    }

    public function show($id) {
        return new ItemResource(Item::findOrFail($id));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $item = Item::create($request->all());

        return (new ItemResource($item))
            ->response()
            ->setStatusCode(201);
    }

    public function delete($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return response()->json([
            'message' => 'Success'
        ]);
    }
}
