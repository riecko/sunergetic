<?php

namespace App\Http\Controllers\Customers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerStoreRequest;
use App\Services\CustomerService;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use View;

class CustomerController extends Controller
{
    private CustomerService $customerService;
    
    /**
     * @param CustomerService $customerService
     */
    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }
    
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return View
     */
    public function list(Request $request)
    {
        $customers = $this->customerService->list($request);
        return View::make('customers', array("data" => $customers));
    }

    /**
     * Handle the incoming request.
     * 
     * @return View
     */
    public function create()
    {
        return View::make('customers.create');
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Illuminate\Support\Facades\Redirect
     */
    public function store(Request $request)
    {  
        $response = $this->customerService->store($request);
        
        if(isset($response['errors'])) {
            $msg = "Customer failed";
        } else {
            $msg = "Customer created";
        }
        return Redirect::route('customer')->with('success', $msg);
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Illuminate\Support\Facades\Redirect
     */
    public function destroy(Request $request)
    {
        $response = $this->customerService->destroy($request);
        return Redirect::route('customer')->with('success', "Customer deleted!");    
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return View
     */
    public function edit(Request $request)
    {
        $response = $this->customerService->show($request);
        return View::make('customers.edit', array("data" => $response));
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Illuminate\Support\Facades\Redirect
     */
    public function update(Request $request)
    {
        $response = $this->customerService->update($request);
        return Redirect::route('customer')->with('success', "Customer updated!");    
    }
}
