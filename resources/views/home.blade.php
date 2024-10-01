@extends('layout')

@section('title')
    <title>Home</title>
@endsection



@section('content')
    <div class="centered-container">
      <!-- Large Text with Custom Font -->
        <h1 class="main-header">Huisartsen De Poort</h1> 
       
        <img class="location-image" src="https://www.optisport.nl/sites/default/files/images/map%20Zwolle.JPG" alt="Locatie van De Poort in Zwolle">

        

        <!-- Information about Isala Hospital Zwolle -->
       
        <p class="info-paragraph">
       
       
        De Poort in Zwolle is een van de grootste huisartsen in Nederland en biedt een breed scala aan medische diensten en specialistische zorg. Met een focus op innovatie en patiëntgerichte zorg is Isala uitgegroeid tot een toonaangevende zorgaanbieder in de regio.
        </p>

        <!-- Container for the two images with text -->
       
       
        <div class="flex-container">
            <!-- Left Image and Text -->
            <div class="image-text-container">
                <img src="https://th.bing.com/th/id/OIP.TYgR-i1tJvHGz-5ScrpOnwHaEJ?w=281&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Isala Hospital Building">
                <p class="image-caption">
                De moderne architectuur van De Poort in Zwolle biedt ultramoderne faciliteiten voor patiëntenzorg.
                </p>
            </div>

            <!-- Right Image and Text -->
            <div class="image-text-container">
                <img src="https://th.bing.com/th/id/OIP.af-nqdoIoknzxz2QbpCOjAHaE8?w=303&h=203&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Isala Hospital Staff">
                <p class="image-caption">
                Toegewijde zorgprofessionals bij De Poort streven ernaar uitstekende patiëntenzorg en medische diensten te leveren.
                </p>
            </div>
        </div>
    </div>
@endsection
