<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function createLocation (Request $request) {
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'description' => 'string|max:100'
        ]);

        Location::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'description' => $request->description
        ]);
    } 
}
