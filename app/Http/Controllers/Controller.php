<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp\Exception\RequestException;

use GuzzleHttp\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function builderHttp($endpoint, $method, $headers = [], $form = [], $query = [])
    {
       
        $client = new Client();

        $base_url = env('API_URL', 'http://localhost:8000');
        $response = $client->request($method, $base_url.$endpoint, [
            'headers' => $headers,
            'form_params' => $form,
            'query' => $query,
        ]); 

        // Convert JSON response to array
        $data = json_decode($response->getBody(), true);

        return $data;

    }
}
