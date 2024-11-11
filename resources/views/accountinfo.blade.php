@extends('layout')

@section('title')
    <title>Account Info - Huisartsen De Poort</title>
    <link rel="stylesheet" href="{{ env('app_url') }}/resources/css/account.css">
@endsection

@section('content')
@if (session('success'))
<x-success-msg message="{{ session('message') }}" color="green" />
@elseif (session('error'))
<x-success-msg message="{{ session('message') }}" color="red" />
@endif

<form action="{{ url('/account/update') }}" method="POST" class="main">
    @method('PUT')
    @csrf
    <div id="account-info" class="info-section">
        <h1>Account Info</h1>
        <div style="display: flex; justify-content: space-between;">
            <div>
                <div style="display: flex; align-items: center;">
                    <label>Naam:</label>
                    <input type="text" name="naam" style="flex: 1; margin-right: 10px;" value="{{ $user->naam }}">
                </div>
                <div style="display: flex; align-items: center;">
                    <label>Telefoonnummer:</label>
                <input type="text" name="telnummer" style="flex: 1; margin-right: 10px;" value="{{ $user->telnummer }}">
            </div>
            <div style="display: flex; align-items: center;">
                <label>Email:</label>
                <input type="text" name="email" style="flex: 1; margin-right: 10px;" value="{{ $user->email }}">
            </div>
        </div>
        <div>
            <img style="width: 100px; height: 100px; border: 1px solid black; float: left" src="../../Storage/App/{{ $user->image }}">
        </div>
        </div>
        <!-- Additional fields here -->
    </div>

    <!-- Login Methods Section -->
    <div id="login-methods" class="info-section">
        <h1>Login</h1>
        <div style="display: flex; align-items: center;">
            <label>Wachtwoord:</label>
            <input type="password" name="password" id="password" style="flex: 1; margin-right: 10px;" value="{{ $user->password }}">
        </div>
    </div>

    <!-- Personal Information Section -->
    <div id="personal" class="info-section">
        <h1>Persoonlijk</h1>
        <div style="display: flex; align-items: center;">
            <label>Geboortedatum:</label>
            <input type="text" name="geboortedatum" style="flex: 1; margin-right: 10px;" value="{{ $user->geboortedatum }}">
        </div>
    </div>

    <!-- Gender Selection -->
    <div id="gender" class="info-section">
        <label>Geslacht:</label><br>
        <div class="gender-option">
            <input type="radio" id="male" name="gender" value="male" {{ $user->gender == 'male' ? 'checked' : '' }}>
            <label for="male"><p>man</p></label>
        </div>
        <div class="gender-option">
            <input type="radio" id="female" name="gender" value="female" {{ $user->gender == 'female' ? 'checked' : '' }}>
            <label for="female"><p>vrouw</p></label>
        </div>
    </div>  

    <!-- Permissions Section (Doctor Only) -->
    @if(Auth::user()->role == 'doctor')
        <div id="permissions" class="info-section">
            <h1>Toestemming voor Consultatieteksten</h1>
            <p>Sta de administratie toe om consultatieteksten te bekijken.</p>
            <div style="display: flex; align-items: center;">
                <label>Geef toestemming:</label>
                <input type="checkbox" name="view_permission_for_admin" style="margin-left: 10px;" 
                    {{ $user->view_permission_for_admin ? 'checked' : '' }}>
            </div>
        </div>
    @endif

    <!-- Submit Button -->
    <button type="submit" style="width: 100%;">Wijzigingen Opslaan</button>
</form>
@endsection
