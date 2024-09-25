@extends('layout')

@section ('title')
<title>Home</title>
@endsection


@section('head')
    <!-- Google Fonts Import -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
@endsection

@section('content')
    <div style="text-align: center;">
        <!-- Image -->
        <img src="{{ asset('images/isala.png') }}" alt="Isala Image">

        <!-- Large Text with Custom Font -->
        <h1 style="font-family: 'Montserrat', sans-serif; font-size: 60px; font-weight: bold; color: #333; margin-top: 20px;">
            Huisartsen De Poort
        </h1>
    </div>

@endsection

