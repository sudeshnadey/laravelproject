<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('/cssfile/login.css')}}">
    <link rel="stylesheet" href="{{asset('/cssfile/mobile.css')}}">
</head>

<!------ Include the above in your HEAD tag ---------->
<body>
   
        <section>
            <div class=" contentbx">
                <div class="container">
                  <div class="formbxverify ">
                    <div class="fea-box4">
                      <img src="images/Group 307.svg">
                    </div>
                    <h2 class="text-center create4">Forgot Password?</h2>
                    <h6 class="start3">No worries we will send you reset instruction</h6><br>
          <form method="POST" action="{{ route('password.email') }}">
            @csrf
                <div class="right2">
                <div class="form-group3">
        
                    <label> Email </label>
                    <input type="email" name="email" class="form-control {{$errors->first('email') ? 'is-invalid' : ''}}" value="{{ old('email') }}" placeholder="Your Email">
                        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}  
                </div><br>
                     
                    </div>
                  <button type="submit" class="btnlog3">Reset Password</button>
                  
                
              </div>
              <div class="backlinks mt-5">
                <a href="{{ route('login') }}" class="nav-link"> Back to Login</a>
              </div>
            </form> 
    </div>
   
   </section>


                           
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
