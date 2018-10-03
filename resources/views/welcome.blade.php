<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel & Vue</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

       
    </head>
    <body>

        <div id="main" class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h1>Vue Js</h1>
                    <ul class="list-group">
                        <li v-for="item in lists" class="list-group-item">
                        @{{ item.name }}
                        </li>
                    </ul>
                </div>
                <div class="col-sm-8">
                    <h1>JSON</h1>
                    <pre>@{{$data}}</pre>
                </div>  
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
