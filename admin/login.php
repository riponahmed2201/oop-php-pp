<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="../assets/css/admin/login.css">
    </head>
    <body>

    <div class="container">
        <!-- Admin Login Form Start-->
        <div class="row justify-content-center lh-100vh" id="login-form-box">
            <div class="col-lg-10 " style="margin-top: 200px">
                <div class="card-group">
                    <div class="card p-4">
                        <h2 class="text-center text-primary font-weight-bold">Login to your account</h2>
                        <hr class="my-3">
                        <form action="#" method="post" class="px-3" id="login-form">
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                            </div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-key"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                            </div>
                            <div class="form-group">
                                <div class="float-left custom-checkbox custom-control">
                                    <input type="checkbox" id="remember_me" class="custom-control-input">
                                    <label for="" class="custom-control-label">Remember me</label>
                                </div>
                                <div class="float-right">
                                    <a href="javascript:" class="text-decoration-none">Forget Password ?</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Sign in" class="btn btn-block btn-primary">
                            </div>
                        </form>
                    </div>
                    <div class="card p-4 justify-content-center" style="background: #363C43">
                        <h2 class="text-center text-primary font-weight-bold">Welcome back!</h2>
                        <hr class="my-3 bg-light">
                        <p class="text-center text-light">
                            Please log in using your email and password. If you haven't registered yet, you can register for free.
                        </p>
                        <button class="btn btn-outline-light btn-lg align-self-center mt-4">Sign up</button>
                    </div>
                </div>
            </div>

        </div>
        <!-- Admin Login Form End-->

        <!-- Admin Login Form Start-->
        <div class="row justify-content-center lh-100vh" id="login-form-box">
            <div class="col-lg-10 " style="margin-top: 200px">
                <div class="card-group">
                    <div class="card p-4">
                        <h2 class="text-center text-primary font-weight-bold">Reset your password</h2>
                        <hr class="my-3">
                        <form action="#" method="post" class="px-3" id="login-form">
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Reset Password" class="btn btn-block btn-primary">
                            </div>
                        </form>
                    </div>
                    <div class="card p-4 justify-content-center" style="background: #363C43">
                        <h2 class="text-center text-primary font-weight-bold">Welcome back!</h2>
                        <hr class="my-3 bg-light">
                        <p class="text-center text-light">
                            Enter your email and check your inbox for instructions. Please also check your spam folder.
                        </p>
                        <button class="btn btn-outline-light btn-lg align-self-center mt-4">Sign in</button>
                    </div>
                </div>
            </div>

        </div>
        <!-- Admin Login Form End-->
    </div>
        
    <script src="../assets/js/jquery-3.5.1.min.js" async defer></script>
    <script src="../assets/js/popper.min.js" async defer></script>
    <script src="../assets/js/bootstrap.bundle.min.js" async defer></script>
    <script src="../assets/js/admin/login.js" async defer></script>
    </body>
</html>