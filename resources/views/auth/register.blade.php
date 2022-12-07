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
            <div class="formbx ">
              <h2 class="create">Create Account</h2>
              <h6 class="start">Hello! Please enter your details and Start your 
                journey with us!</h6>
                <div class="right2">
                <form action="{{url('register')}}" method="POST">
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
                                
                        <div class="card-body">
                          <div class="form-group">
                              <label for="name"> Name <span class="text-danger"> * </span> </label>
                                  <input type="text" name="name" class="form-control" value="{{old('name')}}" />
                                  {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!}
                          </div>

                          <div class="form-group">
                              <label for="email"> Email <span class="text-danger"> * </span> </label>
                                  <input type="text" name="email" class="form-control" value="{{old('email')}}" />
                                  {!!$errors->first("email", "<span class='text-danger'>:message</span>")!!}
                          </div>

                          <div class="form-group">
                              <label for="phone"> Phone <span class="text-danger"> * </span></label>
                                  <input type="text" max="10" name="phone" class="form-control" value="{{old('phone')}}" />
                                  {!!$errors->first("phone", "<span class='text-danger'>:message</span>")!!}
                          </div>

                          <div class="form-group">
                              <label for="password"> Password <span class="text-danger"> * </span></label>
                                  <input type="password" name="password" class="form-control" value="{{old('password')}}" />
                                  {!!$errors->first("password", "<span class='text-danger'>:message</span>")!!}
                          </div>

                          <div class="form-group">
                            <label for="password">Confirm Password <span class="text-danger"> * </span></label>
                            <input type="password" name="password_confirmation" class="form-control" />
                          
                        </div>

                         
                      </div>

                      <button type="submit" class="btnlog">Sign Up</button>
                      <div class="footer">
                        <div class="d-flex justify-content-center links">
                          Already have an account? <a href="{{ url('login') }}">Sign in</a>
                        </div>
                       
                      </div>
                    </div>
                   </form>
                  </div>
                  
        </div>
    </div>
    <div class="d-flex justify-content-center d-flex align-items-center col-sm-6 pt-4 mb-5 ">
      <img src="/images/Frame 328.png" class="imagelog">
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>