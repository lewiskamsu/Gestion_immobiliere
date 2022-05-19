@extends('layouts.app')
@section('title')
About Us |  {{config('app.name')}}
@endsection

{{-- autres methode --}}
{{-- @extends('app',['title' => 'About Us']) --}}

@section('content')
    <img src="{{asset('/images/image.jpeg')}}" alt="Image Nature" width="180px" heigth="150px"
    class="mt-10 rounded shadow-md">
    <h2 class="text-lg text-gray-700 mt-3 font-bold ">
        Ce site a ete realise par LewisKamsu <span class="text-pink-500">&hearts;</span> !!!
    </h2>
    <p>
        <a href="{{route('home')}}"  class="text-indigo-500 hover:text-indigo-600 underline">
            Revenir a la page d'accueil
        </a>
    </p>

@endsection
