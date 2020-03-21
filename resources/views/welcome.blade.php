<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>mySite</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Bellota+Text&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    </head>

    <body>

{{--        <div class="header">--}}
{{--            <span id="header-text">LET THE JOURNEY BEGIN</span>--}}
{{--        </div>--}}

        <div class="navbar">
            <a href="#">About me</a>
            <a href="#">Switch language (RUS|ENG)</a>
        </div>

        <div class="main" id = "main-div">
            <div id="main-text">
                This is my life now
            </div>
            <div id="main-bg"></div>
        </div>

        <div class="footer">
{{--            <div id="scroll-top">--}}
{{--                <span><a href="#header-text">Back to top</a></span>--}}
{{--            </div>--}}

{{--            <div id="author-text">--}}
{{--                <span><i>Made by <a href="#">cyst</a></i></span>--}}
{{--            </div>--}}
            <a href="#">Back to top</a>
            <span>Made by Michael Nosenko</span>
        </div>
    <script type="text/javascript" src = "{{ URL::asset('js/main.js') }}"></script>
    </body>
</html>

