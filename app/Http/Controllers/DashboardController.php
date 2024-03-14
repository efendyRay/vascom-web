<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(Request $request)
    {    
        try {
            $headers = [
                'Authorization' => 'Bearer '.$request->session()->get('api-auth')['token']
            ];
            $query = [
                'search'    => $request->search,
                'skip'      => $request->skip,
                'take'      => $request->take,
            ];
            $data = $this->builderHttp('/dashboard_product', 'GET', $headers, [], $query);

            $results = $data['data'];

            return view('dashboard', compact('results'));

        } catch (\Exception $e) {
            return view('error', ['message' => $e->getResponse()->getStatusCode() .' '. $e->getResponse()->getReasonPhrase()]);
        }
    }
}
