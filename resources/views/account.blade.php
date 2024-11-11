@extends('layout')

@section('title')
    <title>Login - Huisartsen De Poort</title>
@endsection

@section('content')
    <section class="login-section">
        <div class="login-container">
            <h2>Login bij Huisartsen De Poort</h2>
            
            <!-- Error Messages for Incorrect Credentials -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <!-- Phone Number Input -->
                <label for="number">Telefoonnummer</label>
                <input type="text" id="number" name="number" pattern="[0-9]{10}" placeholder="Vul uw 10-cijferige nummer in" required>

                <!-- Password Input -->
                <label for="password">Wachtwoord</label>
                <input type="password" id="password" name="password" placeholder="Vul uw wachtwoord in" required minlength="8">

                <!-- Login Button -->
                <button type="submit" class="btn-primary">Inloggen</button>

                <!-- Registration Link -->
                <p class="register-link">
                    Heb je nog geen account? <a href="{{ route('register') }}">Meld je hier aan</a>
                </p>
            </form>
        </div>
    </section> 
@endsection