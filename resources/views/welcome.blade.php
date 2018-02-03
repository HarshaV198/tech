{{-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/admin/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Wism
                </div>
            </div>
        </div>
    </body>
</html> --}}



@extends('layouts.app')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2">
                <ul class="list-inline">
                    <li>
                        <input type="text" class="form-control" placeholder="Search for anything">
                    </li>
                    <li>
                        <select class="form-control">
                            <option value="health">Health</option>
                        </select>
                    </li>
                    <li>
                        <select class="form-control">
                            <option value="india">Within 5kms</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="category-section">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2">
                <div class="row category-row">

                    @if (count($categories) !== 0)
                        @foreach ($categories as $category)
                            <div class="col-md-4 category-single">
                                <a href="javascript:void(0)">{{ $category->name }}</a>
                                <ul class="list-unstyled">
                                    @if (count($category->subcategories) !== 0)
                                        @foreach ($category->subcategories as $subcategory)
                                            <li><a href="javascript:void(0)">{{ $subcategory->name }}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
