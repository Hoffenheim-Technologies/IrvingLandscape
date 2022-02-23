<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Http\Resources\Testimonial as TestimonialResource;
use App\Http\Resources\TestimonialCollection;

class TestimonialController extends Controller
{
    public function index() {
        return new TestimonialCollection(Testimonial::all());
    }

    public function show($id) {
        return new TestimonialResource(Testimonial::findOrFail($id));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $testimonial = Testimonial::create($request->all());

        return (new TestimonialResource($testimonial))
            ->response()
            ->setStatusCode(201);
    }

    public function delete($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return response()->json([
            'message' => 'Success'
        ]);
    }
}
