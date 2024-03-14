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

            $data = array (
                'results' => $data['data']['product'],
                'user_get' => $request->session()->get('api-auth')['user'],
                'total_user' => $data['data']['total_user'],
                'total_user_aktif' => $data['data']['total_user_aktif'],
                'total_produk' => $data['data']['total_produk'],
                'total_produk_aktif' => $data['data']['total_produk_aktif'],
            );

            return view('dashboard', $data);

        } catch (\Exception $e) {
            return view('error', ['message' => $e->getResponse()->getStatusCode() .' '. $e->getResponse()->getReasonPhrase()]);
        }
    }
}
