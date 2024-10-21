<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(){
        $customer = Customers::with('users')->get();
        $format = $customer->map(function($customer){
            return [
                'id' => $customer->id,
                'ranking' => $customer->ranking,
                'user_id    ' => $customer->users
            ];
        });
        return response()->json([
            'message' => 'success',
            'data' => $format,
            'status'=>true
        ],200);
    }
    public function show($id){
        $customer = Customers::with('users')->find($id);
        if($customer){
            return response()->json([
                'message' => 'Customer found',
                'data' => $customer,
                'status' => true,
            ], 200);
        }else{
            return response()->json([
                'message' => 'Customer not found',
                'status' => false,
            ], 404);
        }
    }

    public function store(Request $request){

        if ($request->has('customers')) {
            $customerData = $request->customers;
        } elseif ($request->isJson() && array_keys($request->json()->all()) === range(0, count($request->json()->all()) - 1)) {
            $customerData = $request->all();
        } else {
            $customerData = [$request->all()];
        }

        foreach($customerData as $customer){
            $validator = Validator::make($customer, [
                'ranking' => 'required|string',
                'user_id' => 'required|integer',
            ], [
                'ranking.required' => 'Please enter a ranking for each customer.',
                'user_id.required' => 'Please provide a user_id for each customer.',
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
        try{

            $Data = [];
            foreach($customerData as $customer){
                $customers = new Customers();
                $customers->ranking = $customer['ranking'];
                $customers->user_id = $customer['user_id'];
                $customers->save();
                $Data[] = $customers;
            }
            DB::commit();
            return response()->json([
                'message' => 'Customers created successfully',
                'data'=>$Data,
                'status' => true,
            ], 201);
        }
        catch(\Exception $ex){

        }

        return response()->json([
            'message' => 'Customers created successfully',
            'status' => true,
        ], 201);



    }

}
