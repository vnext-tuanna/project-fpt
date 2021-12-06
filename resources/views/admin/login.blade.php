<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('admin')}}/font/iconsmind/style.css" />
    <link rel="stylesheet" href="{{asset('admin')}}/font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="{{asset('admin')}}/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('admin')}}/css/vendor/bootstrap-float-label.min.css" />
    <link rel="stylesheet" href="{{asset('admin')}}/css/main.css" />
</head>

<body class="background show-spinner">
<div class="fixed-background"></div>
<main>
    <div class="container">
        <div class="row h-100">
            <div class="col-12 col-md-10 mx-auto my-auto">
                <div class="card auth-card">
                    <div class="position-relative image-side ">

                        <p class=" text-white h2">MAGIC IS IN THE DETAILS</p>

                        <p class="white mb-0">
                            Please use your credentials to login.
                            <br>If you are not a member, please
                            <a href="#" class="white">register</a>.
                        </p>
                    </div>
                    <div class="form-side">
                        <h6 class="mb-4">Login</h6>
                        <form action="" method="POST">
                            @csrf
                            @if(session('msg'))
                                <p class="text-danger text-center">{{session('msg')}}</p>
                            @endif
                            <label class="form-group has-float-label mb-4">
                                <input class="form-control" name="email" type="email" />
                                <span>E-mail</span>
                            </label>

                            <label class="form-group has-float-label mb-4">
                                <input class="form-control" type="password" placeholder="" name="password"/>
                                <span>Password</span>
                            </label>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-primary btn-lg btn-shadow" type="submit">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="{{asset('admin')}}/js/vendor/jquery-3.3.1.min.js"></script>
<script src="{{asset('admin')}}/js/vendor/bootstrap.bundle.min.js"></script>
<script src="{{asset('admin')}}/js/dore.script.js"></script>
<script src="{{asset('admin')}}/js/scripts.js"></script>
</body>
</html>
