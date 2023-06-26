<?php

namespace Job\Http\Controllers;

use Job\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function productsByLocation(Request $request, $location)
    {
        // Retrieve the services available for the given location
        $services = Service::where('location', $location)->get();

        // Return the services as a response
        return response()->json($services);
    }

    // Other controller methods...
}
