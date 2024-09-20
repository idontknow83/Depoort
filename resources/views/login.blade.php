@extends ('layout')

@section ('title')
    <title>login</title>
@endsection
@section ('content')
    <div class="login-container">
        
        <h2>Login</h2>
        <form action="" method="post">
            <label for="number">Telefoonnummer</label>
            <input type="text" id="number" name="number" pattern="[0-9]{10}" required>

            <label for="password">Wachtwoord</label>
            <input type="password" id="password" name="password" required minlength="8">

            <button type="submit">Inloggen</button>
            Heb je nog geen account? <a href="register"> Meld je hier aan</a>
        </form>
    </div>
    @endsection

</html>