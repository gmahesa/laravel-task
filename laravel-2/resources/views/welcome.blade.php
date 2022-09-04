<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Beranda</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
<head> 
 <meta charset="UTF-8"> 
 {{-- Title untuk halaman --}}
 
   <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
   </head> 
   <body> 
   <div class="container"> <div class="row"> 
   <h1 style ="margin-top:20px" >Rrose News - kabar burung</h1> 
<table class="table table-hover table-striped  table-sm" >
<thead width="300px"> 
    <tr> 
        <th >Artikel</th> 
        
    </tr> 
    </thead> 
<tbody > 
    <?php $no=0 ?> 
    @foreach ($posts as $post) 
    <?php $no++ ?> 
    <tr> 
    <td>
    <h4 style="color:blue"> <b>{{ $post->title }} </h4>
    <i><b>{{ $post->created_at->format('M d, Y') }}</i> </b><br>
     {{ $post->content }} <br>
     
    <td>
    </tr> @endforeach 
    </tbody> 
    </table>  
    <p style= "padding-right:800px">
    {!! $posts->links() !!}
    </p>
 </div> 
 </div> 

 </body>

</html>
