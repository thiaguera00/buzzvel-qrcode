<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserInformationRequest;

class UserInformationsController extends Controller
{
    public function action(Request $request)
    {
        $data = [
         'name' => $request->query('name'),
         'linkedin' => $request->query('linkedin'),
         'github' =>  $request->query('github')
        ];
         
        return view('qrcode/userinformations', $data);
    }
}
