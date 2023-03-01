<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600;700;800&family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="login_css/style.css">
    <link rel="stylesheet" href="login_css/sign_media.css">

    <title>Sign in</title>
</head>

<body>
    <main>
        <section>
            <form action="{{ route('registered_form') }}" method="POST">
                @csrf
                <div class="total_div">
                    <!-----left image-->
                    <div class="img_part none">
                        <img src="images/sign_in/img_1.png" alt="" />
                    </div>

                    <!-----right signin-->
                    <div class="signin_part">
                        <div class="head_text">
                            <h3>Sign in</h3>
                            <div class="icon_signin none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 320 512">
                                    <path
                                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                                </svg>
                            </div>
                        </div>

                        <div class="logo_part">
                            <img src="images/sign_in/logo.png" alt="" />
                        </div>
                        <div class="signin_input">
                            <h5>Sign in to continue</h5>
                            @if (session('status'))
                                {{ session('msg') }}
                            @endif
                            <div class="mail_input_signin">
                                <div class="input_group2 flex-nowrap">
                                    <input type="text" name="email" class="form-control"
                                        placeholder="abc@gmail.com" aria-label="Username"
                                        aria-describedby="addon-wrapping" />
                                    <div class="top_level2">
                                        <p>EMAIL</p>
                                    </div>
                                    <div class="tick">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            fill="black" viewBox="0 0 512 512">
                                            <path
                                                d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                        </svg>
                                    </div>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="text-denger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <!----password input  section-->
                            <div class="mail_input_signin">
                                <div class="input_group2">
                                    <div class="top_level">
                                        <p>PASSWORD</p>
                                    </div>
                                    <input type="checkbox" id="show-password" class="show-password" checked />
                                    <label for="show-password" class="Control-label Control-label--showPassword">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25"
                                            height="25" class="svg-toggle-password" title="Toggle Password Security">
                                            <title>Hide/Show Password</title>
                                            <path
                                                d="M24,9A23.654,23.654,0,0,0,2,24a23.633,23.633,0,0,0,44,0A23.643,23.643,0,0,0,24,9Zm0,25A10,10,0,1,1,34,24,10,10,0,0,1,24,34Zm0-16a6,6,0,1,0,6,6A6,6,0,0,0,24,18Z" />
                                            <rect x="20.133" y="2.117" height="44"
                                                transform="translate(23.536 -8.587) rotate(45)" class="closed-eye" />
                                            <rect x="22" y="3.984" width="4" height="44"
                                                transform="translate(25.403 -9.36) rotate(45)" style="fill: #fff"
                                                class="closed-eye" />
                                        </svg>
                                    </label>

                                    <input type="text" name="password" id="password" placeholder=" "
                                        autocomplete="off" autocapitalize="off" autocorrect="off" required
                                        pattern=".{6,}" class="ControlInput ControlInput--password form-control" />
                                </div>
                                @if ($errors->has('password'))
                                    <span class="text-denger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <!---option section-->
                            <div class="option_signin">
                                <div class="remember_me">
                                    <input class="form-check-input" type="checkbox" name="remember" value="true"
                                        id="flexCheckDefault">
                                    <h4>Remerber me</h4>
                                </div>
                                <div class="forgot">
                                    <a href="#">Forgot password?</a>
                                </div>
                            </div>
                            <div class="sign_btn">
                                <input type="submit" class="btn btn-dark" value="Sign In" name="submit">


                            </div>

                            <div class="option_signup">
                                <div class="qustion">
                                    <h4>Don't have an account?</h4>
                                </div>
                                <div class="forgot">
                                    <a href="{{ route('signup') }}">Sign up</a>
                                </div>
                            </div>
                            <div class="social_media">
                                <div class="media1">
                                    <a href="#">
                                        <img src="images/sign_in/facebook.png" alt="">
                                    </a>
                                </div>
                                <div class="media1">
                                    <a href="#">
                                        <img src="images/sign_in/insta.png" alt="">
                                    </a>
                                </div>
                                <div class="media1">
                                    <a href="#">
                                        <img src="images/sign_in/twitter.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
