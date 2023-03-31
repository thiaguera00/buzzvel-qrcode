{{-- Second page on this page we generate the Qr Code with the data that the user filled in --}}
@php
  $url = route('informations', [
    'name' => $name, 
    'linkedin' => $linkedin,
    'github' => $github
    ]);   
@endphp

@extends('layout.generate')

@section('title', 'Qr Code Generated')

@section('content')

    <div class="py-8 mx-5 min-h-screen grid place-content-center">
        <div class="bg-gradient-to-r from-blue-400 to-indigo-500 rounded-2xl text-white p-8 text-center h-72 max-w-sm mx-auto">
          <h1 class="text-3xl mb-3">Hey {{$name}}</h1>
          <p class="text-lg">Your links have been generated. Please scan the qr code to view your business card!</p>
        </div>
        <div class="bg-white py-8 px-10 text-center rounded-md shadow-lg transform -translate-y-20 sm:-translate-y-24 max-w-xs mx-auto">
          <h2 class="font-semibold text-2xl mb-6">Scan me</h2>
          <div class=" m-auto px-10">
            {!! QrCode::generate($url); !!}
          </div>
        </div>
        <div class="py-50">
          <h6 class="mt-0 mb-2 text-base font-medium leading-tight text-primary text-center">Thank you for using our services</h6>
      </div>
    </div>
@endsection
