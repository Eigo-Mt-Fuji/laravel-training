<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@if (! Request::is('/')){{ $title }} | @endif{{ env('APP_NAME') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div id="app">
        <h1>ハイスコア</h1>

        <div class="container flex-center position-ref full-height">

            <table id="items" class="table table-striped table-light">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ユーザ</th>
                    <th scope="col">スコア</th>
                </tr>
                </thead>
                <tbody>
                <tr id="item-10">
                    <td scope="row">1</td>
                    <td>John, No1(ID: 10)</td>
                    <td>1,000</td>
                </tr>
                <tr id="item-5">
                    <td scope="row">2</td>
                    <td>ボブ, No2(ID: 5)</td>
                    <td>900</td>
                </tr>
                <tr id="item-29">
                    <td scope="row">3</td>
                    <td>一郎, No3(ID: 29)</td>
                    <td>900</td>
                </tr>
                <tr id="item-12029">
                    <td scope="row">4</td>
                    <td>一郎, No3(ID: 12029)</td>
                    <td>900</td>
                </tr>
                <tr id="item-3">
                    <td scope="row">5</td>
                    <td>甘栗太郎(ID: 3)</td>
                    <td>40</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
