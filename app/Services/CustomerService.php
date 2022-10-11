<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use View;

class CustomerService
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return View
     */
    public function list(Request $request)
    {
        $response = Http::get(config('api.api_url'), $this->setApiHeader());
        
        return $response->json();
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(Request $request): array
    {
        $data = [
            "email" => $request->get('email'),
            "firstname" => $request->get('firstname'),
            "lastname"  => $request->get('lastname'),
            "address"   => $request->get('address'),
            "zipcode"   => $request->get('zipcode'),
            "city"      => $request->get('city'),
            "phone"     => $request->get('phone')
        ];

        $response = Http::acceptJson()->withHeaders(
            $this->setApiHeader()
        )->asForm()->post(config('api.api_url'), 
            $data
        );
        
        return $response->json();
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function show(Request $request): array
    {
        $id = $request->get('id');
        $url = config('api.api_url') . "/$id";
        
        $response = Http::acceptJson()->withHeaders(
            $this->setApiHeader()
        )->get($url);
        
        return $response->json();
    }


    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function destroy(Request $request): array
    {
        $id = $request->get('id');
        $url = config('api.api_url') . "/$id";
        
        $response = Http::acceptJson()->withHeaders(
            $this->setApiHeader()
        )->delete($url);
        
        return $response->json();
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function update(Request $request): array
    {
        $id = $request->get('id');
        $url = config('api.api_url') . "/$id";

        $data = [
            "email" => $request->get('email'),
            "firstname" => $request->get('firstname'),
            "lastname"  => $request->get('lastname'),
            "address"   => $request->get('address'),
            "zipcode"   => $request->get('zipcode'),
            "city"      => $request->get('city'),
            "phone"     => $request->get('phone')
        ];

        $response = Http::acceptJson()->withHeaders(
            $this->setApiHeader()
        )->asForm()->put($url, 
            $data
        );
        
        return $response->json();
    }


    /**
     * Api header information.
     *
     * @return array
     */
    public function setApiHeader(): array
    {
        return [
            "Content-Type"  => "application/x-www-form-urlencoded",
            "token"         => config('api.api_token'),              
        ];
    }


}
