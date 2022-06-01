<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $query = Customer::query()->create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        if (in_array('1', $request->get('conditions'))) {
            CustomerCondition::query()->create([
                'customer_id' => $query->id,
                'condition_id' => 1,
            ]);
        }

        if (in_array('2', $request->get('conditions'))) {
            CustomerCondition::query()->create([
                'customer_id' => $query->id,
                'condition_id' => 2,
            ]);
        }

        if (in_array('3', $request->get('conditions'))) {
            CustomerCondition::query()->create([
                'customer_id' => $query->id,
                'condition_id' => 3,
            ]);
        }

        if (in_array('4', $request->get('conditions'))) {
            CustomerCondition::query()->create([
                'customer_id' => $query->id,
                'condition_id' => 4,
            ]);
        }

        $customer = Customer::with('conditions')->where('id', '=', $query->id)->first();
        Session::put('formdata', $customer);

        return redirect()->to('/#menu')->with(['customer' => $customer]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
