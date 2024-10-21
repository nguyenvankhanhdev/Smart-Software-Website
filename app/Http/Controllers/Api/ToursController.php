<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tours;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ToursController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'page' => 'min:1|max:1000|integer',
            'size' => 'min:1|max:2000|integer'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'data' => $validator->errors(),
                'status' => false,

            ], 400);
        }
        $query = Tours::query();
        $query->with(['tourType']);
        $page = $request->page ?? 1;
        $size = $request->size ?? 12;
        $data = $query->paginate($size, ['*'], 'page', $page);
        return response()->json([
            'message' => 'Successfully request',
            'data' => $data->items(),
            'paginate' => [
                'per_page' => $size,
                'current_page' => $page,
                'total' => $data->total(),
                'total_pages' => $data->lastPage(),
            ],
            'status' => true,

        ], 200);
    }
    public function store(Request $request)
    {
        if ($request->has('tours')) {
            $tourData = $request->tours;
        } else if ($request->isJson() && array_keys($request->json()->all()) === range(0, count($request->json()->all()) - 1)) {
            $tourData = $request->all();
        } else {
            $tourData = [$request->all()];
        }
        foreach ($tourData as $tour) {
            $validator = Validator::make($tour, [
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'start_date' => 'required|date',
                'status' => 'required|integer',
                'image' => 'required|string',
                'time_go' => 'required|string',
                'start_place' => 'required|string',
                'type_id' => 'required|integer',
            ], [

                'name.required' => 'Please enter a name for each tour.',
                'description.required' => 'Please provide a description for each tour.',
                'start_date.required' => 'Please specify the start date for each tour.',
                'status.required' => 'Please specify the status for each tour.',
                'image.required' => 'Please specify the image for each tour.',
                'time_go.required' => 'Please specify the time go for each tour.',
                'start_place.required' => 'Please specify the start place for each tour.',
                'type_id.required' => 'Please specify the type id for each tour.',
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
            foreach ($tourData as $tour) {
                $tour = new Tours();
                $tour->name = $tour['name'];
                $tour->description = $tour['description'];
                $tour->start_date = $tour['start_date'];
                $tour->status = $tour['status'];
                $tour->image = $tour['image'];
                $tour->time_go = $tour['time_go'];
                $tour->start_place = $tour['start_place'];
                $tour->type_id = $tour['type_id'];
                $tour->save();
            }
            DB::commit();
            return response()->json([
                'message' => 'Tour created successfully',
                'data' => $tourData,
                'status' => true,

            ], 201);
        } catch (\Exception $ex) {
            DB::rollBack();
            return response()->json([
                'message' => 'An error occurred',
                'data' => $ex->getMessage(),
                'status' => false,

            ], 500);
        }
    }
    public function show($id)
    {
        $tour = Tours::with('tourType')->find($id);
        if (!$tour) {
            return response()->json([
                'message' => 'Tour not found',
                'status' => false,

            ], 404);
        }
        return response()->json([
            'message' => 'Tour found',
            'data' => $tour,
            'status' => true,

        ], 200);
    }

    public function update(Request $request, $id)
    {
        $tour = Tours::find($id);
        if (!$tour) {
            return response()->json([
                'message' => 'Tour not found',
                'status' => false,

            ], 404);
        }
        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'status' => 'required|integer',
            'image' => 'required|string',
            'time_go' => 'required|date',
            'start_place' => 'required|string',
            'type_id' => 'required|integer',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'data' => $validator->errors(),
                'status' => false,

            ], 403);
        }
        $tour->name = $request->name;
        $tour->description = $request->description;
        $tour->start_date = $request->start_date;
        $tour->status = $request->status;
        $tour->image = $request->image;
        $tour->time_go = $request->time_go;
        $tour->start_place = $request->start_place;
        $tour->type_id = $request->type_id;
        $tour->save();
        return response()->json([
            'message' => 'Tour updated successfully',
            'data' => $tour,
            'status' => true,

        ], 200);
    }
    public function destroy($id)
    {
        $tour = Tours::find($id);
        if (!$tour) {
            return response()->json([
                'message' => 'Tour not found',
                'status' => false,

            ], 404);
        }
        $tour->delete();
        return response()->json([
            'message' => 'Tour deleted successfully',
            'status' => true,

        ], 200);
    }
    public function changeStatus($id)
    {
        $tour = Tours::find($id);
        if (!$tour) {
            return response()->json([
                'message' => 'Tour not found',
                'status' => false,

            ], 404);
        }
        $tour->status = !$tour->status;
        $tour->save();
        return response()->json([
            'message' => 'Tour status changed successfully',
            'data' => $tour,
            'status' => true,

        ], 200);
    }
    public function uploadImage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'data' => $validator->errors(),
                'status' => false,

            ], 403);
        }
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        return response()->json([
            'message' => 'Image uploaded successfully',
            'data' => $imageName,
            'status' => true,

        ], 200);
    }
}
