<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list(){
        
        return view('users.list');
    }

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
            return $data = $this->builderHttp('/user/index', 'GET', $headers, [], $query);

        } catch (\Exception $e) {
            return view('error', ['message' => $e->getResponse()->getStatusCode() .' '. $e->getResponse()->getReasonPhrase()]);
        }
    }

    public function show(Request $request, $id)
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
            return $data = $this->builderHttp('/user/detail/'.$id, 'GET', $headers, [], $query);

        } catch (\Exception $e) {
            return view('error', ['message' => $e->getResponse()->getStatusCode() .' '. $e->getResponse()->getReasonPhrase()]);
        }
    }

    public function store(Request $request)
    {    
        try {
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Authorization' => 'Bearer '.$request->session()->get('api-auth')['token']
            ];
            $form_params = [
                'name'    => $request->name,
                'email'   => $request->email,
                'phone'   => $request->phone,
            ];
            return $data = $this->builderHttp('/user/store', 'POST', $headers, $form_params);

        } catch (\Exception $e) {
            return view('error', ['message' => $e->getResponse()->getStatusCode() .' '. $e->getResponse()->getReasonPhrase()]);
        }
    }

    public function update(Request $request, $id)
    {    
        try {
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Authorization' => 'Bearer '.$request->session()->get('api-auth')['token']
            ];
            $form = [
                'name'    => $request->name,
                'email'   => $request->email,
                'phone'   => $request->phone,
            ];
            return $data = $this->builderHttp('/user/update/'.$id, 'PUT', $headers, $form);

        } catch (\Exception $e) {
            return view('error', ['message' => $e->getResponse()->getStatusCode() .' '. $e->getResponse()->getReasonPhrase()]);
        }
    }

    public function destroy(Request $request, $id)
    {    
        try {
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Authorization' => 'Bearer '.$request->session()->get('api-auth')['token']
            ];
           return  $data = $this->builderHttp('/user/delete/'.$id, 'DELETE', $headers);
           
        } catch (\Exception $e) {
            return view('error', ['message' => $e->getResponse()->getStatusCode() .' '. $e->getResponse()->getReasonPhrase()]);
        }
    }
}
