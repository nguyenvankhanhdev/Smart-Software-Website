<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourDetail;
use Illuminate\Support\Facades\Validator;
class TourDetailController extends Controller
{
    public function index()
    {
        $tourDetails = TourDetail::with('tour', 'tourPlace')->get();

        $formattedTourDetails = $tourDetails->map(function ($tourDetail) {
            return [
                'id' => $tourDetail->id,
                'title'=> $tourDetail->title,
                'description' => $tourDetail->description,
                'price' => $tourDetail->price,
                'tour' => $tourDetail->tour,
                'tour_place' => $tourDetail->tourPlace
            ];
        });
        return response()->json([
            'message' => count($tourDetails) . ' tour details found',
            'status' => true,
            'data' => $formattedTourDetails
        ]);
    }
    public function show($id)
    {
        $tourDetail = TourDetail::with('tour', 'tourPlace')->find($id);
        if ($tourDetail) {
            return response()->json([
                'message' => 'Tour detail found',
                'status' => true,
                'data' => $tourDetail
            ]);
        } else {
            return response()->json([
                'message' => 'Tour detail not found',
                'status' => false
            ]);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'tour_id' => 'required|integer',
            'tour_place_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'status' => false,
                'data' => $validator->errors()
            ]);
        }

        $tourDetail = new TourDetail();
        $tourDetail->title = $request->title;
        $tourDetail->description = $request->description;
        $tourDetail->price = $request->price;
        $tourDetail->tour_id = $request->tour_id;
        $tourDetail->tour_place_id = $request->tour_place_id;
        $tourDetail->save();

        return response()->json([
            'message' => 'Tour detail created',
            'status' => true,
            'data' => $tourDetail
        ]);
    }
}
