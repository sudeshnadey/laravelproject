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

<body>
    
     <section>
      <div class=" contentbx">
        <div class="container">
         <div class="formbxverify ">
        <div class="fea-box4">
           <img src="/images/Group 302.svg">
          </div>
        <h6 class="start3">
            {{ __('We have sent a verification link to 
            abc@gmail.com.') }}
        </h6>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div class="right2">
                 
                </div>
                <div>
                    <button type="submit" class="btnlog3"><a href="https://mailtrap.io/inboxes/1932937/messages">{{ __('Open email app') }}</a></button><br>
                   
                </div>
            </form>

            <form method="POST" action="{{ route('login') }}">
                @csrf

               
                <div class=" sdlinks">
                    Didn’t receive the link?<a href=""> Click to resend</a>
                  </div>
                  
            </div>
            <div class="backlinks">
                <a href="{{ route('register') }}"> Back to Login</a>
            </div>
            </form>
        </div>
    </body>
</html>
