{{-- Third page on this page is the business card that the user read in Qr Code --}}
@extends('layout.informations')

@section('title', 'Qr Code Informations')

@section('content')
    <div class="py-8 mx-5 min-h-screen grid place-content-center">
        <div class="bg-white py-8 px-10 text-center rounded-md shadow-lg transform -translate-y-20 sm:-translate-y-24 max-w-xs mx-auto">
          <h2 class="font-semibold text-2xl mb-6">Hey {{$name}}</h2>
          <div class=" m-auto px-10">
            <p class="text-lg">This is your business card!</p>
          </div>
          <div class="py-8">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
               <a href="{{$linkedin}}">Linkedin</a> 
              </button>
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
               <a href="{{$github}}">GitHub</a> 
              </button>
          </div>
        </div>
        <div class="py-50">
          <h6 class="mt-0 mb-2 text-base font-medium leading-tight text-primary text-center">Thank you for using our services</h6>
      </div>
    </div>
@endsection
