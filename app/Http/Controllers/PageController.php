<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    // PAGES
    public function home()
    {
        return view('home', ['properties' => Property::latest()->get()]);
    }

    public function about()
    {
        return view('about', ['properties' => Property::latest()->take(3)->get()]);
    }
   
    public function contact()
    {
        return view('contact');
    }
    
    public function thankyou()
    {
        return view('thankyou');
    }

    public function store(Property $property, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        DB::table('contact')->insert(
            [
            'name' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message,
            ]
        );

        return redirect('thankyou');
    }


    // Resource
    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
