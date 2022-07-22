<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{asset('storage/web-material/skanida.png')}}" >
        <title>Welcome</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Edu+QLD+Beginner&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <style>
            body {
                background-image: url("/storage/web-material/avatar.jpg");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
               
                background
            }
            
           
        </style>
    </head>
    <body >
        {{-- navbar --}}
      <nav class="navbar navbar-expand-lg navbar-light  d-flex">
  <div class="container-fluid bg-light">
    <h1 class="navbar-brand " style="font-size: 25px;font-family: 'Ubuntu', sans-serif;font-weight:bold">Welcome to</h1>  
    <h1 class="navbar-brand "style="font-size: 25px;font-family: 'Ubuntu', sans-serif;font-weight:bold;color:#2a7414">Siswa Register
    </h1>
        <h1 class="navbar-brand " style="font-size: 25px;font-family: 'Ubuntu', sans-serif;font-weight:bold;color:#2d2b87;">SMK NEGERI 2 SEMARANG</h1>  

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav "> 
         @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block  ">

                    
                    @auth

                        <a href="{{ url('/home') }}" class="btn btn-warning text-sm text-gray-700 dark:text-gray-500 " >Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 btn btn-outline-warning me-3"style="text-decoration: none;color:black " >Log in</a>
                       

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 btn btn-outline-danger   " style="text-decoration: none;color:black">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
      </div>
      
    </div>
  </div>
</nav>  
    {{--akhir navbar  --}}
    <section >
        
        <h1 style="color: white;text-align:center;margin-top:100px;font-weight:bold;font-size:60px">Tujuan Website</h1>
        <p style="color: white;text-align:center;margin-top:100px;font-weight:bold;"    >Tujuan website ini adalah untuk memasukkan data para murid smkn 2 semarang </p>
        
    </section>

            
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>

