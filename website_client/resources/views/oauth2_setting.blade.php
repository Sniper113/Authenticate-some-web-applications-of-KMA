<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OAuth2 Setting</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/coming-soon.min.css') }}" rel="stylesheet">

    <style type="text/css">
        @media (min-width:320px)  {
            .custom-css {
                min-width: 280px !important;
            }
        }
        @media (min-width:480px)  {
            .custom-css {
                min-width: 380px !important;
            }
            @media (min-width:600px)  {
                .custom-css {
                    min-width: 380px !important;
                }
            }
            @media (min-width:801px)  {
                .custom-css {
                    min-width: 420px !important;
                }
            }
            @media (min-width:1025px) {
                .custom-css {
                    min-width: 420px !important;
                }
            }
            @media (min-width:1281px) {
                .custom-css {
                    min-width:420px !important;
                }
            }
            .oauth2{
                font-weight: 200;
                font-size: 25px;
                font-family: 'Merriweather';
                color: white;
                padding: 10px 10px 50px 3px;
                width: 300px;
                height: 60px;
                margin: 0px;
                border-radius: 5px;
                background-image: linear-gradient(to right, rgb(24, 24, 231), rgb(98, 98, 180));


            }

    </style>
</head>

<body>
<div style="text-align: center; color: black;"> <h1>/h1>

</div>
<div class="overlay"></div>
<div class="masthead" style="margin-left: 50px">
    <div class="masthead-bg"></div>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 my-auto">
                <div class="masthead-content text-white py-5 py-md-0">
                    <h1 class="mb-3">OAuth2</h1>
                    <p class="mb-5">Single Sign On
                        <strong>2021</strong>! Let's Go</p>
                    <div class="input-group input-group-newsletter">
                        <div class="input-group-append" >
                            <button class="btn btn-success" type="button" onclick="window.open('{{ route('connection') }}', '_self')" style="border-top-left-radius: 3px; border-bottom-left-radius: 3px; margin-left: 50px;">Kết nối!</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- facebook start --}}

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('js/coming-soon.min.js') }}"></script>

</body>

</html>
