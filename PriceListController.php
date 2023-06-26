<?php 

namespace Job\Http;

use Job\PriceList;
use Illuminate\Http\Request;


class PriceListsController extends Controller
{
    public function index()
    {
        // Retrieve all price lists
        $priceLists = PriceList::all();

        // Return the price lists as a response
        return response()->json($priceLists);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'service_id' => 'required',
            'price' => 'required',
            // Add validation rules for other attributes
        ]);

        // Create a new price list
        $priceList = PriceList::create($validatedData);

        // Return the created price list as a response
        return response()->json($priceList, 201);
    }

    public function show(PriceList $priceList)
    {
        // Return the specified price list as a response
        return response()->json($priceList);
    }

    public function update(Request $request, PriceList $priceList)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'service_id' => 'required',
            'price' => 'required',
            // Add validation rules for other attributes
        ]);

        // Update the price list with the validated data
        $priceList->update($validatedData);

        // Return the updated price list as a response
        return response()->json($priceList);
    }

    public function destroy(PriceList $priceList)
    {
        // Delete the price list
        $priceList->delete();

        // Return a success message as a response
        return response()->json(['message' => 'Price list deleted']);
    }
}
