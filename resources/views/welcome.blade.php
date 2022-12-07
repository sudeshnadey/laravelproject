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
      <div class="contentbx">
        <nav class="navbar2">
          <div class="container">
            <a class="navbar-brand2" href="#">
             <h5> GS DOKANIA <br>& ASSOCIATES</h5>
            </a>
            <form action="{{ url('login') }}" method="post" autocomplete="off">
                @csrf
            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{Session::get('success')}}
            </div>
        @elseif(Session::has('failed'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{Session::get('failed')}}
            </div>
        @endif
            <div class="formbx ">
              <h2 class="create8">Welcome Back!</h2>
              <h6 class="start8">Please Enter your Login Details.</h6><br>
                <div class="right2">
                    
                      <div class="form-group1">
                        
                        <label> Email </label>
                        <input type="email" name="email" class="form-control {{$errors->first('email') ? 'is-invalid' : ''}}" value="{{ old('email') }}" placeholder="Your Email">
                            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}  
                    </div>
                      <div class="form-group1">
                        <label for="password" class="cols-sm-2 control-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" />
                        {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
                         
                      </div><br>
          
                      <div class="form-group1 text-end">
                        <a href="{{ url('forgot-password') }}" class=""> Forgot Password?</a>
                    </div>
                      </div>
                    <button type="submit" class="btnlog2">Log In</button>
                    <div class="footer2">
                      <div class="d-flex justify-content-center links">
                        Already have an account? <a href="{{ url('register') }}">Sign up</a>
                      </div>
                     
                    </div>
                  </div>
                 </form>
                </div>
                
      </div>
      <div class="d-flex justify-content-center d-flex align-items-center col-sm-6 pt-4 mb-5 ">
        <img src="/images/Frame 328.png" class="imagelog">
      </div>
      
     </section>