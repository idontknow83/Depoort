@extends ('layout')

@section ('title')
    <title>Register</title>
@endsection
@section ('content')
    <div>
        <form action="/action_page.php" class="register-form" method="POST">
            <label for="fname">Naam:</label>
            <div>
                <input type="text" id="vnaam" name="vnaam" placeholder="voornaam" required>
                <input type="text" id="tv" name="tv" size="10" placeholder="tv" required>
                <input type="text" id="anaam" name="anaam" placeholder="achternaam" required>
            </div>
            
            <label for="telnummer">Telefoon:</label>
            <input type="tel" id="telnummer" name="telnummer" placeholder="telefoon" pattern="[0-9]{10}" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="email" required>
            
            <label for="adres">Adres:</label>
            <input type="text" id="adres" name="adres" placeholder="adres" required>
            
            <label for="wp">Woonplaats:</label>
            <input type="text" id="wp" name="wp" placeholder="woonplaats" required>
        
            <label for="postcode">Postcode:</label>
            <input type="text" id="postcode" name="postcode" placeholder="postcode" pattern="^[1-9][0-9]{3}\s?[A-Za-z]{2}$" required>
        
            <label for="land">Land:</label>
            <input type="text" id="land" name="land" placeholder="land" required>
        
            <label for="ww">Wachtwoord:</label>
            <input type="password" id="ww" name="ww" placeholder="wachtwoord" required minlength="8">
            
            <label id="geslacht">Geslacht:</label>
            <div class="gender-group">      
                <input type="radio" id="man" name="geslacht" value="man" required>
                <label for="man">Man</label>
                <input type="radio" id="vrouw" name="geslacht" value="vrouw" required>
                <label for="vrouw">Vrouw</label>
            </div>
            
            <label for="geboortedatum">Geboortedatum:</label>
            <input type="date" id="gb" name="geboortedatum" value="1950-01-01" min="1950-01-01" max="2024-12-31" required/>
            
            <input type="submit" value="Register">
        </form>
        
@endsection