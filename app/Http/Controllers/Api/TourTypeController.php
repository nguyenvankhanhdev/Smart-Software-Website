<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourTypes;

class TourTypeController extends Controller
{
    public function index()
    {
        $tourTypes = TourTypes::all();

        return response()->json([
            'message' => count($tourTypes) . ' tour types found',
            'data' => $tourTypes,
            'status' => true,
        ], 200);
    }
    public function show($id){
        $tourType = TourTypes::find($id);
        if($tourType){
            return response()->json([
                'message' => 'Tour type found',
                'data' => $tourType,
                'status' => true,
            ], 200);
        }else{
            return response()->json([
                'message' => 'Tour type not found',
                'status' => false,
            ], 404);
        }
    }
    public function store(Request $request)
    {
        $tourType = new TourTypes();
        $tourType->name = $request->name;
        $tourType->save();
        return response()->json([
            'message' => 'Tour type created',
            'data' => $tourType,
            'status' => true,
        ], 201);
    }
    public function update(Request $request, $id)
    {
        $tourType = TourTypes::find($id);
        if($tourType){
            $tourType->name = $request->name;
            $tourType->save();
            return response()->json([
                'message' => 'Tour type updated',
                'data' => $tourType,
                'status' => true,
            ], 200);
        }else{
            return response()->json([
                'message' => 'Tour type not found',
                'status' => false,
            ], 404);
        }
    }
    public function destroy($id)
    {
        $tourType = TourTypes::find($id);
        if($tourType){
            $tourType->delete();
            return response()->json([
                'message' => 'Tour type deleted',
                'status' => true,
            ], 200);
        }else{
            return response()->json([
                'message' => 'Tour type not found',
                'status' => false,
            ], 404);
        }
    }
    public function getTourByType($id){
        $tourType = TourTypes::find($id);
        if($tourType){
            $tours = $tourType->tours;
            return response()->json([
                'message' => count($tours) . ' tours found',
                'data' => $tours,
                'status' => true,
            ], 200);
        }else{
            return response()->json([
                'message' => 'Tour type not found',
                'status' => false,
            ], 404);
        }
    }
}
