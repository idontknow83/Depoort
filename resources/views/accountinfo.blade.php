@extends('layout')

@section('title')
    <title>Account Info</title> 
    <link rel="stylesheet" href="{{ config('app.url') }}/resources/css/account.css">
@endsection

@section('content')
<div class="vnavbar">
    <ul class="vnavbar-list">
        <li class="vnavbar-item"><a href="#account-info">Account Info</a></li>
        <li class="vnavbar-item"><a href="#security">Security</a></li>
        <li class="vnavbar-item"><a href="#privacy">Privacy</a></li>
    </ul>
</div>
@endsection

