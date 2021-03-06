<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RakuAir</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        
        
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="{{ secure_asset('css/stylesheet.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/css.css') }}">
    </head>
    
    <body>
        


        <div class="container">

            
            @include('commons.error_messages')

            @yield('content')
       

    </body>
  
    <footer>
            &copy; 2018 KEMKOW All Rights Reserved.
    </footer>
</html>  

