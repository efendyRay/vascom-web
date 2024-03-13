<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function index(){

        return view('login');
    }

    public function login(Request $request){

        try {
            
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
            ];
            $form_params = [
                'email'    => $request->email,
                'password' => $request->password,
            ];
            $data = $this->builderHttp('/auth/login', 'POST', $headers, $form_params);

            if($data['code'] === 200){
                $credentials = [
                    'token' => $data['data']['token'],
                ];
                $request->session()->put('api-auth', $credentials);
            } else {
                return redirect('/auth/login');
            }
    
            return redirect('/dashboard');
            
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // Handle request exceptions
            echo "Error: " . $e->getMessage();
        }

    }

    public function register(Request $request){
        
        $client = new Client();

        try {
            $base_url = env('API_URL', 'http://localhost:8000');
            $response = $client->request('POST', $base_url.'/auth/register', [
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'form_params' => [
                    'name'                  => $request->name,
                    'email'                 => $request->email,
                    'password'              => $request->password,
                    'password_confirmation' => $request->password_confirmation,
                ],
            ]);

            $data = json_decode($response->getBody()->getContents(), true);

            if($data['code'] === 200){
               return $data;
            } else {
                return redirect('/auth/register');
            }
            
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // Handle request exceptions
            echo "Error: " . $e->getMessage();
        }

    }

    public function logout(Request $request)
    {
        $request->session()->forget('api-auth');

        return redirect('/');
    }
}
