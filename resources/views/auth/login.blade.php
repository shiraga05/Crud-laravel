<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        h1{
            font-family: 'Edu NSW ACT Foundation', cursive;
        }
        .email:hover{
          background-color: white
        }
    </style>
</head>
<body>
    <section class="vh-100 mb-1 ">
        <h1 style="text-align: center" class="mb-5 text-primary">Login</h1>
  <div class="container-fluid h-custom ">
    <div class="row d-flex justify-content-center align-items-center h-100">



@if($message =  Session::get('success'))
    <div class="alert alert-success">{{$message}}</div>
@endif
@if($message =  Session::get('error'))
    <div class="alert alert-danger">{{$message}}</div>
@endif









      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://c4.wallpaperflare.com/wallpaper/924/708/965/sakura-saber-smiling-black-scarf-katana-wallpaper-preview.jpg"
          class="img-fluid ms-3" alt="Sample image" width="800" height="700">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <form method="POST" action="{{ route('login') }}">
                        @csrf

          

          <!-- Email input -->
          <div class="form-outline mb-4 mt-5">
            <label class="form-label" for="email">Email address</label>
            <input type="email" id="email" name="email" class="form-control form-control-lg"
              placeholder="Masukan Email" />  
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
           <label class="form-label" for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control form-control-lg mb-2 "
              placeholder="Masukan Password " />
              <input type="checkbox"    onclick="myFunction()">Show Password
             <script>
              function myFunction() {
              var x = document.getElementById("password");
             if (x.type === "password") {
               x.type = "text";
               } else {
              x.type = "password";
                 }
}
</script> 
            
          </div>


          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p style="font-weight: bold" class="mt-2">Belum Punya Akun?<a href="{{route('register')}}" style="text-decoration: none">Buat Akun</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div class="fixed-bottom">
  <div
    class="d-flex flex-column flex-md-row text-center  justify-content-between py-4 px-4 px-xl-5 bg-primary ">
    <!-- Copyright -->
    <div class="text-white text-center">

    </div>
    <!-- Copyright -->

    <!-- Right -->
  
    <!-- Right -->
  </div>
  </div>
</section>
</body>
</html>