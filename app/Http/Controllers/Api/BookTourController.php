<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookTours;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class BookTourController extends Controller
{
    public function index()
    {
        $query = BookTours::query();
        $query->with(['tours', 'customers']);
        $data = $query->get();
        return response()->json([
            'message' => 'Successfully request',
            'data' => $data,
            'status' => true,
        ], 200);
    }
    public function store(Request $request)
    {
        if ($request->has('book_tours')) {
            $bookTourData = $request->book_tours;
        } else if ($request->isJson() && array_keys($request->json()->all()) === range(0, count($request->json()->all()) - 1)) {
            $bookTourData = $request->all();
        } else {
            $bookTourData = [$request->all()];
        }


        foreach ($bookTourData as $bookTour) {
            $validator = Validator::make($bookTour, [
                'tour_id' => 'required|integer',
                'quantity' => 'required|integer',
                'booking_date' => 'required|date',
                'customer_id' => 'required|integer',
                'total_amount' => 'required',
                'status' => 'required|boolean',
            ], [
                'tour_id.required' => 'Please enter a tour_id for each book tour.',
                'customer_id.required' => 'Please provide a customer_id for each book tour.',
                'book_date.required' => 'Please provide a book_date for each book tour.',
                'book_price.required' => 'Please provide a book_price for each book tour.',
                'book_qty.required' => 'Please provide a book_qty for each book tour.',
                'book_total.required' => 'Please provide a book_total for each book tour.',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Validation failed',
                    'errors' => $validator->errors(),
                    'status' => false,
                ], 400);
            }
        }
        DB::beginTransaction();

        return response()->json([
            'message' => 'Book tour created',
            'data' => $bookTour,
            'status' => true,
        ], 201);
    }
}
