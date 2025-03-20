<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
        }
        .h-custom {
        height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
        .h-custom {
        height: 100%;
        }
        }
    </style>
</head>
<body>
   <!--  <?php
   require 'loginaction.php';
    ?> -->
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100 ">
        <!-- Logo -->
      <div class="col-md-9 col-lg-6 col-xl-5 pd-0" >
        <img src="../Papalucas/logo.svg"
          class="img-fluid" alt="Sample image">
      </div>

      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 ">
        <!-- identify whether user or admin -->
        <div class="choice" id="choice">
            <p>Login as a?</p>
            <button class="btn btn-primary" onclick="document.getElementById('Admin-login').style.display='block'; document.getElementById('choice').style.display='none'">Admin</button>
            <button class="btn btn-primary" onclick="document.getElementById('User-Login').style.display='block'; document.getElementById('choice').style.display='none'">User</button>
        </div>
    <!-- User login form -->
         <form id="User-Login" class="border border-light p-5" style="display: none;" method="POST" action="#!">
          <div class="d-flex flex-row align-items-center  ">
            <p class="lead fw-normal mb-0 me-3 center">User Login</p>
          </div>

          <div class="divider d-flex align-items-center my-4">
          </div>

          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
          <label class="form-label" for="form3Example3">Username</label>
          <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid username" />
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-3">
          <label class="form-label" for="form3Example4">Password</label>
          <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2 row">
            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-success"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Register</a></p>
          </div>

        </form> 
        <!-- Admin login form -->
        <form id="Admin-login" class="border border-light p-5" style="display: none;" action="loginaction.php" method="POST">
          <div class="d-flex flex-row align-items-center  ">
            <p class="lead fw-normal mb-0 me-3">Admin Login</p>
          </div>

          <div class="divider d-flex align-items-center my-4">
          </div>

          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
          <label class="form-label" for="Username">Username</label>
          <input type="username" name="Username" id="" class="form-control form-control-lg" placeholder="Enter a valid username" />
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-3">
          <label class="form-label" for="Username">Password</label>
          <input type="password" name="Password" id="" class="form-control form-control-lg" placeholder="Enter password" />
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2 row">
            <button  type="submit" name="submit" class="btn btn-success">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Register</a></p>
          </div>

        </form> 
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-success">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0 align-items-center">
      Copyright © 2020. All rights reserved.
    </div>
    <!-- Copyright -->
  </div>
</section>
</body>
</html>
