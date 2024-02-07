<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/syncoauthentication.css" />
    <title>Welcome | Sync-o</title>
  </head>

  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="{{route('register')}}" class="sign-in-form" method="post">
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
            <h2 class="title">Register</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Firstname" name="firstname" required/>
              <!--<span class="text-danger">@error('firstname') {{$message}} @enderror</span>-->
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Lastname" name="lastname" required/>
              <!--<span class="text-danger">@error('lastname') {{$message}} @enderror</span>-->
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" required/>
              <!--<span class="text-danger">@error('username') {{$message}} @enderror</span>-->
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" placeholder="Email" name="email" required/>
              <!--<span class="text-danger">@error('email') {{$message}} @enderror</span>-->
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required/>
              <!--<span class="text-danger">@error('password') {{$message}} @enderror</span>-->
            </div>
            <input type="submit" value="Register" class="btn solid" />
            </form>
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>One of Us?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <a href="login">
              <button class="btn transparent" id="sign-up-btn">
                Sign In
              </button>
            </a>
          </div>
          <img src="#" class="image" alt="" />
        </div>
      </div>
    </div>
  </body>
</html>