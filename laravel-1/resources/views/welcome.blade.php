<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
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
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">

                <form method="POST" action="/kamar/save">
                    {{ csrf_field() }}
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Kamar</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="nama">
                        </div>
                      </div>
                      <fieldset class="form-group">
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preference</label>
                      <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="type">
                        <option selected disabled="">Choose...</option>
                        <option value="standard">standard</option>
                        <option value="suite">suite</option>
                        <option value="vip">vip</option>
                      </select>
                      </fieldset>
                      <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Tambah Kamar</button>
                        </div>
                      </div>
                </form>

            </div>


            <div class="container">
                <form method="POST" action="/order/save">
                    {{ csrf_field() }}
                      <div class="form-group row">
                      <fieldset class="form-group">
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Order Kamar : </label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="type">
                                <option selected disabled="">Choose...</option>
                                <option value="standard">standard</option>
                                <option value="suite">suite</option>
                                <option value="vip">vip</option>
                            </select>
                      </fieldset>
                      <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Tambah Kamar</button>
                        </div>
                      </div>
                </form>
                </div>
    </body>
</html>
