<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateQrcodeFormRequest;

class FormsQrCodeController extends Controller
{
    public function store(StoreUpdateQrcodeFormRequest $request)
    {
        $data = [
            'name' => $request->input('name'),
            'linkedin' => $request->input('linkedin'),
            'github' => $request->input('github'),
        ];

        return view('qrcode/qrcode', $data); 
    }
}
