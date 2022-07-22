<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
    <style>
      body{
        background-color: black;
      }
    </style>
</head>
<body>
    <section class="vh-100 " style="background-color:white">
  <div class="container h-100">


        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror




    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5 bg-dark">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 text-white">Sign up</p>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="input-group mb-3">
                            <span class="input-group-text border-dark" style="background-color: transparent    "><i style="color: white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg></i></span>
                            <input type="text" class="form-control  @error('name') is-invalid @enderror bg-dark text-white" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="name" name="name">
                            
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>  
                    
                   
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  
                    <div class="input-group mb-3">
                            <span class="input-group-text border-dark" style="background-color: transparent"><i style="color: white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                          </svg></i></span>
                            <input type="email" class="form-control @error('email') is-invalid @enderror text-white bg-dark" placeholder="Email  " aria-label="Username" aria-describedby="basic-addon1" id="email" name="email">
                             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>

                   <div class="d-flex flex-row align-items-center mb-">
                    <div class="input-group mb-3">
                            <span class="input-group-text border-dark" style="background-color: transparent"><i style="color: white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                              <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                              <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg></i></span>
                            
                            <input type="password" class="form-control  @error('password') is-invalid @enderror text-white bg-dark" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" id="password" name="password" >
                           
                             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    </div>
                  <input type="checkbox"onclick="myFunction()"class="mb-3 ms-5 text-light"> Show Password
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
                    <div class="d-flex flex-row align-items-center mb-4 mt-3">
                    <div class="input-group mb-3">
                            <span class="input-group-text border-dark" style="background-color: transparent"><i style="color: white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                              <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg></i></span>
                            <input type="password" class="form-control text-white bg-dark" placeholder="Konfirmasi Password" aria-label="Username" aria-describedby="basic-addon1" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    </div>
                    <input type="checkbox"onclick="myFunction()"class="mb-3 ms-5 text-light"> Show Password
                    <script>
                    function myFunction() {
                    var x = document.getElementById("password_confirmation");
                    if (x.type === "password") {
                   x.type = "text";
                   } else {
                   x.type = "password";
                    }
                  }
                </script> 
                  

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>
                  <p style="text-align: center;font-weight: bold; color:white;">Sudah Punya Akun?<a href="{{route('login')}}" style="text-decoration: none">Login</a></p>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://asset.kompas.com/crops/FP4yz3nX6X_3wjKvz4lb3CTZXQY=/124x0:1622x999/750x500/data/photo/2019/12/16/5df735db5ae62.jpg"
                  class="img-fluid" alt="Sample image" style="border-radius: 12%">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>