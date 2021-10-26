<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use App\Http\Resources\Customers as CustomersResources;

use Illuminate\Http\Request;
use Validator;

class CustomersController extends Controller
{
    private $customer;

    public function __construct(customer $customer){
        $this->customer = $customer;
    }
    public function index(){
        // return response()->json(Customer::get(),200);
        return response()->json(Customer::paginate(5),200);
    }
    public function show($id){
        // $customers = Customer::find($id);
        // if (is_null($customers)) {
        //     return response()->json(null,404);
        // }
        // return response()->json(Customer::findOrFail($id),200);
        // $response = new customersResources(Customer::findOrFail($id),200);
        $customers = Customer::with('addresses')->findOrFail($id);
        $response['customers'] = $customers;
        $response['addresses'] = $customers->addresses;
        // $response = new customersResources($response,200);
        return response()->json($response,200);

    }

    public function store(Request $request){

        $rules=[
            'firstname' =>  'required | max:255',
            'lastname' =>  'required | max:255',
            'gender' =>  'required | max:255',
            'age' =>  'required | max:3'
        ];
        $validator= Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors() ,400);
        }
        $customers = Customer::create($request->all());
        return response()->json($customers ,201);
    }

    public function update(Request $request,Customer $customers){
        // $customers= $this->customer->find($customers);
        // $customers->firstname = $request->get('firstname');
        // $customers->lastname = $request->get('lastname');
        // $customers->gender = $request->get('gender');
        // $customers->age = $request->get('age');
        // $customers->save();
        $customers->update($request->all());
        return response()->json($customers ,200);
    }
    public function delete($id){
        // $customers->delete();
        $customers= $this->customer->find($id);
        $customers->delete();
        return response()->json($customers ,204);
    }

    public function addresses(Request $request,Customer $customers){
        $addresses = $customers->addresses;
        return response()->json($addresses ,200);
    }
    
}