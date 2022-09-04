<!DOCTYPE html>
 <html lang="en"> 
 <head> 
 <meta charset="UTF-8"> 
    {{-- Title untuk halaman --}}
  <title>@yield('title')</title>
   <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
</head> 
   <body style="background-color:LemonChiffon;"> {{-- Konten untuk halaman --}} 
   
<div class="container"> 
<!—Bagian Header 
        <div class="row">
            <div class="col-md-12 header" id="site-header">
            @yield('head') 
            </div>
        </div>
  
     
<div class="container">  
        <div class="row"> 
            <div class="col-md-10 articles" id="site-content">
                @yield('body')   
            </div> 
        </div> 
 </div>
 </body> 
 </html>		