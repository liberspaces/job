<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        // Retrieve all services
        $services = Service::all();

        // Return the services as a response
        return response()->json($services);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            // Add validation rules for other attributes
        ]);

        // Create a new service
        $service = Service::create($validatedData);

        // Return the created service as a response
        return response()->json($service, 201);
    }

    public function show(Service $service)
    {
        // Return the specified service as a response
        return response()->json($service);
    }

    public function update(Request $request, Service $service)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            // Add validation rules for other attributes
        ]);

        // Update the service with the validated data
        $service->update($validatedData);

        // Return the updated service as a response
        return response()->json($service);
    }

    public function destroy(Service $service)
    {
        // Delete the service
        $service->delete();

        // Return a success message as a response
        return response()->json(['message' => 'Service deleted']);
    }
}
