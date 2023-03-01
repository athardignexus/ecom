<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600;700;800&family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />

    <link rel="stylesheet" href="login_css/style.css" />
    <link rel="stylesheet" href="login_css/resetpw_media.css" />

    <title>reset password</title>
</head>

<body>
    <section>
        <div class="total_page">
            <!---image part start here-->
            <div class="img_part none">
                <img src="login_images/reset_pass2/new_password.png" alt="" />
            </div>

            <!-----input part here-->
            <div class="input_part">
                <div class="icon none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 320 512">
                        <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                    </svg>
                </div>

                <div class="icon_part">
                    <div class="img_one_rp">
                        <img src="login_images/reset_pss/logo.png" alt="" />
                    </div>
                    <div class="head">
                        <h2>Reset Password</h2>
                    </div>
                    <div class="text_part2">
                        <p>Enter new password and confirm.</p>
                    </div>
                    <!----new password section-->
                    <div class="mail_input2">
                        <div class="input_group2">
                            <div class="top_level">
                                <p>NEW PASSWORD</p>
                            </div>
                            <!-- this is here to give power to the :checked css selector -->
                            <!--                     
                              <label for="password"
                                     class="Control-label Control-label--password"
                              >Password</label> -->

                            <input type="checkbox" id="show-password" class="show-password" checked />
                            <label for="show-password" class="Control-label Control-label--showPassword">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25" height="25" class="svg-toggle-password" title="Toggle Password Security">

                                    <title>Hide/Show Password</title>
                                    <path d="M24,9A23.654,23.654,0,0,0,2,24a23.633,23.633,0,0,0,44,0A23.643,23.643,0,0,0,24,9Zm0,25A10,10,0,1,1,34,24,10,10,0,0,1,24,34Zm0-16a6,6,0,1,0,6,6A6,6,0,0,0,24,18Z" />
                                    <rect x="20.133" y="2.117" height="44" transform="translate(23.536 -8.587) rotate(45)" class="closed-eye" />
                                    <rect x="22" y="3.984" width="4" height="44" transform="translate(25.403 -9.36) rotate(45)" style="fill: #fff" class="closed-eye" />
                                </svg>
                            </label>

                            <input type="text" id="password" placeholder=" " autocomplete="off" autocapitalize="off" autocorrect="off" required pattern=".{6,}" class="ControlInput ControlInput--password form-control" />
                        </div>
                    </div>
                    <!----confirm password section-->
                    <div class="mail_input2">
                        <div class="input_group2">
                            <div class="top_level">
                                <p>CONFIRM PASSWORD</p>
                            </div>
                            <!-- this is here to give power to the :checked css selector -->
                            <!--                     
                            <label for="password"
                                   class="Control-label Control-label--password"
                            >Password</label> -->

                            <input type="checkbox" id="show-password" class="show-password" checked />
                            <label for="show-password" class="Control-label Control-label--showPassword">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25" height="25" class="svg-toggle-password" title="Toggle Password Security">
                                    <title>Hide/Show Password</title>
                                    <path d="M24,9A23.654,23.654,0,0,0,2,24a23.633,23.633,0,0,0,44,0A23.643,23.643,0,0,0,24,9Zm0,25A10,10,0,1,1,34,24,10,10,0,0,1,24,34Zm0-16a6,6,0,1,0,6,6A6,6,0,0,0,24,18Z" />
                                    <rect x="20.133" y="2.117" height="44" transform="translate(23.536 -8.587) rotate(45)" class="closed-eye" />
                                    <rect x="22" y="3.984" width="4" height="44" transform="translate(25.403 -9.36) rotate(45)" style="fill: #fff" class="closed-eye" />
                                </svg>
                            </label>

                            <input type="text" id="password" placeholder=" " autocomplete="off" autocapitalize="off" autocorrect="off" required pattern=".{6,}" class="ControlInput ControlInput--password form-control" />
                        </div>
                    </div>
                    <div class="change_btn">
                        <button type="button" class="btn btn-dark">
                            Change password
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script>
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            input = $(this).parent().find("input");
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
</body>

</html>