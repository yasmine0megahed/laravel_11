<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return 'welcome to api v1';
    }
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'mohamed',
                'email' => 'mohamed@.com',
                'password' => 'mohamed'
            ],
            [
                'id' => 2,
                'name' => 'ahmed',
                'email' => 'ahmed@.com',
                'password' => 'ahmed'
            ]
        ];
        return response()->json($users, 200);
    }
    public function checkId($id)
    {
        if ($id > 10) {
            return response()->json(['message'=>'grater than 10'], 400);
        }else{
            return response()->json(['me'=>$id], 200);
        }
    }
}
