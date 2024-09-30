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
        <img src="isala.png" alt="De Poort Logo">

        <!-- Large Text with Custom Font -->
        <h1 style="font-family: 'Montserrat', sans-serif; font-size: 60px; font-weight: bold; color: #333; margin-top: 20px;">
            Huisartsen De Poort
        </h1>

        <!-- Information about Isala Hospital Zwolle -->
        <p style="font-family: 'Montserrat', sans-serif; font-size: 18px; color: #666; margin-top: 20px;">
           De Poort in Zwolle is one of the largest hospitals in the Netherlands, offering a wide range of medical services and specialized care. With a focus on innovation and patient-centered care, Isala has become a leading healthcare provider in the region.
        </p>

        <!-- Container for the two images with text -->
        <div style="display: flex; justify-content: space-around; align-items: center; margin-top: 40px;">
            <!-- Left Image and Text -->
            <div style="text-align: center; width: 40%;">
                <img src="isala-building.jpg" alt="Isala Hospital Building" style="width: 100%; height: auto;">
                <p style="font-family: 'Montserrat', sans-serif; font-size: 16px; color: #666; margin-top: 10px;">
                    The modern architecture of De Poort in Zwolle, providing state-of-the-art facilities for patient care.
                </p>
            </div>

            <!-- Right Image and Text -->
            <div style="text-align: center; width: 40%;">
                <img src="isala-staff.jpg" alt="Isala Hospital Staff" style="width: 100%; height: auto;">
                <p style="font-family: 'Montserrat', sans-serif; font-size: 16px; color: #666; margin-top: 10px;">
                    Dedicated healthcare professionals at De Poort, committed to delivering excellent patient care and medical services.
                </p>
            </div>
        </div>
    </div>
@endsection
