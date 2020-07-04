<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Takayyz</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- css -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">

        <!-- js -->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- stules -->
        <style>
            html, body {
                height:100%;
            }

            body {
                position:relative;
                background: #112 url('../img/main.jpg') center no-repeat;
                background-size:cover;
                margin:0;
            }
            body::before {
                position:absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                content: '';
                background-color: rgba(0,0,0,.6);
            }

            .yaer {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <neon-component></neon-component>
            <div class="yaer">
                <nixie-component>2</nixie-component>
                <nixie-component>0</nixie-component>
                <nixie-component>2</nixie-component>
                <nixie-component>0</nixie-component>
            </div>
        </div>
    </body>
</html>
