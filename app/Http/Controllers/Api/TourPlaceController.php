<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourPlaces;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class TourPlaceController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'page' => 'min:1|max:1000|integer',
            'size' => 'min:1|max:2000|integer'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
                'status' => false
            ], 403);
        }
        $query = TourPlaces::query();
        $page = $request->page ?? 1;
        $size = $request->size ?? 12;
        $data = $query->paginate($size, ['*'], 'page', $page);

        return response()->json([
            'data' => $data->items(),
            'paginate' => [
                'per_page' => $size,
                'current_page' => $page,
                'total' => $data->total(),
                'total_pages' => $data->lastPage(),
            ],
            'message' => 'Successfully request',
            'status' => true,
        ], 200);
    }


    public function show($id)
    {
        $tourPlace = TourPlaces::find($id);
        if ($tourPlace) {
            return response()->json([
                'message' => 'Tour place found',
                'data' => $tourPlace,
                'status' => true,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Tour place not found',
                'status' => false,
            ], 404);
        }
    }
    public function store(Request $request)
    {

        if ($request->has('tour_places')) {
            $tourPlacesData = $request->tour_places;
        } elseif ($request->isJson() && array_keys($request->json()->all()) === range(0, count($request->json()->all()) - 1)) {
            $tourPlacesData = $request->all();
        } else {
            $tourPlacesData = [$request->all()];
        }

        foreach ($tourPlacesData as $placeData) {
            $validator = Validator::make($placeData, [
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'address' => 'required|string',
            ], [
                'name.required' => 'Please enter a name for each tour place.',
                'description.required' => 'Please provide a description for each tour place.',
                'address.required' => 'Please specify the address for each tour place.',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Validation failed',
                    'data' => $validator->errors(),
                    'status' => false,
                ], 403);
            }
        }
        DB::beginTransaction();

        try {
            $tourPlaces = [];
            foreach ($tourPlacesData as $placeData) {
                $tourPlace = new TourPlaces();
                $tourPlace->name = $placeData['name'];
                $tourPlace->address = $placeData['address'];
                $tourPlace->description = $placeData['description'];
                $tourPlace->save();
                $tourPlaces[] = $tourPlace;
            }

            DB::commit();

            return response()->json([
                'message' => count($tourPlaces) . ' tour places created',
                'data' => $tourPlaces,
                'status' => true,
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Failed to create tour places',
                'error' => $e->getMessage(),
                'status' => false,
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $tourPlace = TourPlaces::find($id);
        if ($tourPlace) {
            $tourPlace->address = $request->address;
            $tourPlace->description = $request->description;
            $tourPlace->name = $request->name;
            $tourPlace->save();
            return response()->json([
                'message' => 'Tour place updated',
                'data' => $tourPlace,
                'status' => true,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Tour place not found',
                'status' => false,
            ], 404);
        }
    }
    public function destroy($id)
    {
        $tourPlace = TourPlaces::find($id);
        if ($tourPlace) {
            $tourPlace->delete();
            return response()->json([
                'message' => 'Tour place deleted',
                'status' => true,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Tour place not found',
                'status' => false,
            ], 404);
        }
    }
}
