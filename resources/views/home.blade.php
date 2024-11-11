@extends('layout')

@section('title')
    <title>Home - Huisartsen De Poort</title>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="main-header">Huisartsen De Poort</h1>
            <p class="hero-paragraph">
                Uw zorg, onze prioriteit. Innovatieve en patiëntgerichte zorg in het hart van Zwolle.
            </p>
            <a href="#" class="btn-primary">Onze Diensten</a>
        </div>
        <img class="hero-image" src="https://www.optisport.nl/sites/default/files/images/map%20Zwolle.JPG" alt="Locatie van De Poort in Zwolle">
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <h2 class="section-title">Over De Poort</h2>
            <p class="section-description">
                De Poort in Zwolle is een van de grootste huisartsen in Nederland en biedt een breed scala aan medische diensten en specialistische zorg. Met een focus op innovatie en patiëntgerichte zorg is De Poort uitgegroeid tot een toonaangevende zorgaanbieder in de regio.
            </p>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="flex-container">
                <!-- Feature 1 -->
                <div class="feature">
                    <img src="https://th.bing.com/th/id/OIP.TYgR-i1tJvHGz-5ScrpOnwHaEJ?w=281&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Isala Hospital Building">
                    <h3 class="feature-title">Moderne Faciliteiten</h3>
                    <p class="feature-description">
                        De moderne architectuur van De Poort in Zwolle biedt ultramoderne faciliteiten voor patiëntenzorg.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="feature">
                    <img src="https://th.bing.com/th/id/OIP.af-nqdoIoknzxz2QbpCOjAHaE8?w=303&h=203&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Isala Hospital Staff">
                    <h3 class="feature-title">Toegewijde Zorg</h3>
                    <p class="feature-description">
                        Toegewijde zorgprofessionals bij De Poort streven ernaar uitstekende patiëntenzorg en medische diensten te leveren.
                    </p>
                </div>
            </div>
        </div>
    </section>

<!-- New Over Ons Section -->
<section class="over-ons-section">
        <div class="container">
            <h2 class="section-title">Over Ons</h2>
            <p class="section-description">
                Bij Huisartsen De Poort geloven we in de kracht van zorg op maat, ondersteund door een hecht team van ervaren zorgprofessionals. Onze missie is om elke patiënt niet alleen te behandelen, maar ook te begeleiden en te ondersteunen op weg naar gezondheid en welzijn.
            </p>
            <p class="section-description">
                We zetten ons in om hoogwaardige zorg te leveren met aandacht voor de nieuwste medische inzichten en technieken. Bij De Poort wordt u gehoord, begrepen en met respect behandeld.
            </p>
        </div>
    </section>



    <!-- Contact and Opening Hours Section -->
    <section class="contact-opening-hours">
        <div class="container">
            <h2 class="section-title">Contact Gegevens en Openingstijden</h2>
            <div class="flex-container">
                <!-- Contact Information -->
                <div class="contact-info">
                    <h3>Contact Gegevens</h3>
                    <p><strong>Adres:</strong> De Poort, Zwolle, Nederland</p>
                    <p><strong>Telefoon:</strong> +31 123 456 789</p>
                    <p><strong>Email:</strong> info@depoort.nl</p>
                </div>

                <!-- Opening Hours -->
                <div class="opening-hours">
                    <h3>Openingstijden</h3>
                    <ul>
                        <li>Maandag - Vrijdag: 08:00 - 17:00</li>
                        <li>Zaterdag: 09:00 - 13:00</li>
                        <li>Zondag: Gesloten</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
