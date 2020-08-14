<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('property.index', ['properties' => Property::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo1' => 'required|file',
            'photo2' => 'nullable',
            'photo3' => 'nullable',
            'name' => 'required|string',
            'phone' => 'required',
            'title' => 'required',
            'price' => 'required|integer',
            'size' => 'required|integer',
            'location' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'rooms' => 'required|integer',
            'bathrooms' => 'required|integer',
        ]);


        if ($request->hasFile('photo1')) {
            $name1 = $request->photo1->getClientOriginalName();
            $request->photo1->storeAs('properties', $name1, 'public');
        };

        $name2 = "default.jpg";
        $name3 = "default.jpg";

        if ($request->hasFile('photo2')) {
            $name2 = $request->photo2->getClientOriginalName();
            $request->photo2->storeAs('properties', $name2, 'public');
        };

        if ($request->hasFile('photo3')) {
            $name3 = $request->photo3->getClientOriginalName();
            $request->photo3->storeAs('properties', $name3, 'public');

            // DB::table('properties')->insert([
            //     'photo3' => $name3,
            // ]);
        };


        Property::create([

            'photo1' => $name1,
            'photo2' => $name2,
            'photo3' => $name3,
            'name' => $request->name,
            'phone' => $request->phone,
            'title' => $request->title,
            'price' => $request->price,
            'size' => $request->size,
            'location' => $request->location,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'rooms' => $request->rooms,
            'bathrooms' => $request->bathrooms,
            'garages' => $request->garages,

            'f1' => $request->f1,
            'f2' => $request->f2,
            'f3' => $request->f3,
            'f4' => $request->f4,
            'f5' => $request->f5,
            'f6' => $request->f6,
            'f7' => $request->f7,
            'f8' => $request->f8,
            'f9' => $request->f9,
            'f10' => $request->f10,
        ]);


        return redirect('thankyou');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        return view('property.show', ['property' => $property]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        return view('property.edit', ['property' => $property]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        $request->validate([
            'photo1' => 'required|file',
            'photo2' => 'nullable',
            'photo3' => 'nullable',
            'name' => 'required|string',
            'phone' => 'required',
            'title' => 'required',
            'price' => 'required|integer',
            'size' => 'required|integer',
            'location' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'rooms' => 'required|integer',
            'bathrooms' => 'required|integer',
        ]);


        if ($request->hasFile('photo1')) {
            $name1 = $request->photo1->getClientOriginalName();
            //-- delete old image
            if (DB::table('properties')->where('photo1', $property->photo1)->exists()) {
                Storage::delete('/public/properties/'. $property->photo1);
            }
            //-- (i did it!!!:))
            $request->photo1->storeAs('properties', $name1, 'public');
        };

        $name2 = "default.jpg";
        $name3 = "default.jpg";

        if ($request->hasFile('photo2')) {
            $name2 = $request->photo2->getClientOriginalName();
            if (DB::table('properties')->where('photo2', $property->photo2)->exists()) {
                Storage::delete('/public/properties/'. $property->photo2);
            }
            $request->photo2->storeAs('properties', $name2, 'public');
        };

        if ($request->hasFile('photo3')) {
            $name3 = $request->photo3->getClientOriginalName();
            if (DB::table('properties')->where('photo3', $property->photo3)->exists()) {
                Storage::delete('/public/properties/'. $property->photo3);
            }
            $request->photo3->storeAs('properties', $name3, 'public');
        };


        $property->update([

            'photo1' => $name1,
            'photo2' => $name2,
            'photo3' => $name3,
            'name' => $request->name,
            'phone' => $request->phone,
            'title' => $request->title,
            'price' => $request->price,
            'size' => $request->size,
            'location' => $request->location,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'rooms' => $request->rooms,
            'bathrooms' => $request->bathrooms,
            'garages' => $request->garages,

            'f1' => $request->f1,
            'f2' => $request->f2,
            'f3' => $request->f3,
            'f4' => $request->f4,
            'f5' => $request->f5,
            'f6' => $request->f6,
            'f7' => $request->f7,
            'f8' => $request->f8,
            'f9' => $request->f9,
            'f10' => $request->f10,

        ]);

        return redirect(route('properties.show', ['property' => $property->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        $property->delete();

        Storage::delete('public/properties/'.$property->photo1);

        if (DB::table('properties')->where('photo2', $property->photo2)->exists()) {
            Storage::delete('/public/properties/'. $property->photo2);
        }

        if (DB::table('properties')->where('photo3', $property->photo3)->exists()) {
            Storage::delete('/public/properties/'. $property->photo3);
        }
        
        return redirect('thankyou');
    }
}
