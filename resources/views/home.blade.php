<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body> 
    <div class="container p-5">
        <div class="row justify-content-center mb-5">
            <div class="col-12 text-center">
                <h1 style="font-size: 64px;">SPK Puskesmas Maju Jaya</h1>
                <h2 style="font-size: 30px;">Membantu penatalaksanaan lansia dengan keluhan tertentu</h2>
            </div>
        </div>
        <div class="row justify-content-around mt-5">
            <div class="col-6 text-center">
                <a href="{{ route('bidan.index') }}">  
                    <img src="img/hospital-1706646_1280.png" alt="Bidan" width="200px" height="250px">
                    <p>Bidan</p>
                </a>
            </div>
            <div class="col-6 text-center">
                <a href="{{ route('kms.index') }}">
                    <img src="img/laptop-40935_1280.png" alt="Kader" width="200px" height="250px">   
                    <p>Kader</p>
                </a>
            </div> 
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>