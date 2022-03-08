<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Http\Resources\Subscriber as SubscriberResource;
use App\Http\Resources\SubscriberCollection;
use Illuminate\Support\Facades\Validator;


class SubscriberController extends Controller
{
    public function index() {
        return new SubscriberCollection(Subscriber::all());
    }

    public function show($id) {
        return new SubscriberResource(Subscriber::findOrFail($id));
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [ 
            'email' => 'required|unique:subscribers|email',
        ]);

        if ($validator->fails()) {    
            return response()->json($validator->messages())->setStatusCode(509);
        }
        $subscriber = new Subscriber;
        $subscriber->email = $request->email;
        $subscriber->save();

        return (new SubscriberResource($subscriber))
            ->response()
            ->setStatusCode(201);
    }
}
