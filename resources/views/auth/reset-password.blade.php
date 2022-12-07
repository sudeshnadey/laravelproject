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
    <!-- Navigation bar -->
    
     <section>
      <div class=" contentbx">
          <div class="container">
            <div class="formbxverify ">
              <div class="fea-box4">
                <img src="/images/Group 302.svg">
              </div>
              <h2 class="text-center create4">Set new password</h2>
              <h6 class="start3">Your new password must be different to
                previouslt used passwords.</h6><br>
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="right2">
            <div class="form-group3">
            <label> Email </label>
            <input type="email" name="email" class="form-control {{$errors->first('email') ? 'is-invalid' : ''}}" value="{{ old('email') }}" placeholder="Your Email">
                {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}  
        </div>
                 
                <div class="form-group3">
                  <label for="password" class="cols-sm-2 control-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password" />
                   
                </div>
    
                <div class="form-group3">
                    <label for="password">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" />
                  
                </div>
                <button type="submit" class="btnlog3">Reset Password</button>
                
              
            </div>
            <div class="backlinks mt-5">
                <a href="{{ route('login') }}" class="nav-link"> Back to Login</a>
              </div>
            
  </div>
        </form>

</section>
