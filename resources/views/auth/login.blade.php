<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>اعمدة الشموخ</title>
    <link rel="stylesheet" href="/assets/css/log.css" />
  </head>
  <body>
    <div class="logo"></div>
    <div class="box bg-img">
      <div class="content">
        <h2>Sign<span> In</span></h2>

        <div class="forms">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="user-input">
              <input
                type="text"
                class="login-input @error('email') is-invalid @enderror"
                placeholder="email"
                name="email"
                id="name"
                required
              />
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
              <i class="fas fa-user"></i>
            </div>

            <div class="pass-input">
              <input
                type="password"
                class="login-input @error('password') is-invalid @enderror"
                placeholder="password"
                id="my-password"
                name="password"
                required
              />
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror

              <span class="eye" onclick="myFunction()">
                <i id="hide-1" class="fas fa-eye-slash"></i>
                <i id="hide-2" class="fas fa-eye"></i>
              </span>
            </div>
            <button type="submit" class="login-btn">Sign In</button>
          </form>
        </div>

        <!-- <p class="new-account">Not a member? <a href="#">Sign Up now!</a></p>
     -->
        <br />

        <p class="f-pass">
          <a href="#">forgget password?</a>
        </p>
      </div>
    </div>

    <script
      src="https://kit.fontawesome.com/c0078485ae.js"
      crossorigin="anonymous"
    ></script>
    <script>
      function myFunction() {
        var x = document.getElementById("my-password");
        var y = document.getElementById("hide-1");
        var z = document.getElementById("hide-2");

        if (x.type === "password") {
          x.type = "text";
          y.style.display = "block";
          z.style.display = "none";
        } else {
          x.type = "password";
          y.style.display = "none";
          z.style.display = "block";
        }
      }
    </script>
  </body>
</html>
