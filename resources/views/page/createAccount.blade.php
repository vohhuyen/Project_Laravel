<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="source/css/SIGNIN_UP.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="source/fontawesome-free-6.4.0-web/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>
</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-container">
            <div class="auth-action-left">
                <div class="auth-form-outer">
                    <h2 class="auth-form-title">
                        Create Account
                    </h2>
                    <div class="auth-external-container">
                        <div class="auth-external-list">
                            <ul>
                                <li><a data-toggle="modal" data-target="#error"><i class="fa-brands fa-google"></i></a>
                                </li>
                                <li><a data-toggle="modal" data-target="#error"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a data-toggle="modal" data-target="#error"><i class="fa-brands fa-twitter"></i></a>
                                </li>
                                <li><a data-toggle="modal" data-target="#error"><i
                                            class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <p class="auth-sgt">or use your email for registration:</p>
                    </div>
                    <form action="createAccount" method="post" class="login-form">
                        @csrf
                        <input type="text" class="auth-form-input" placeholder="Name" id="Name" name="Name">
                        @error('Name')
                            @if ($message == 'The name field is required.')
                                <div style="margin-top: -15px; color: #fe5454; margin-bottom: 15px;">Required</div>
                            @endif
                        @enderror
                        <input type="email" class="auth-form-input" placeholder="Email" id="Email" name="Email">
                        @error('Email')
                            @if ($message == 'The email field is required.')
                                <div style="margin-top: -15px; color: #fe5454; margin-bottom: 15px;">Required</div>
                            @endif
                        @enderror
                        <div class="input-icon">
                            <input type="password" id="passwordInput" class="auth-form-input" placeholder="Password"
                                id="password" name="password">
                            <i class="fa fa-eye show-password" onclick="togglePasswordVisibility()"></i>
                        </div>
                        @error('password')
                            @if ($message == 'The password field is required.')
                                <div style="margin-top: -15px; color: #fe5454; margin-bottom: 15px;">Required</div>
                            @endif
                        @enderror
                        <input type="password" class="auth-form-input" placeholder="Confirm Password" id="c_password"
                            name="c_password">
                        @error('c_password')
                            @if ($message == 'The c password field is required.')
                                <div style="margin-top: -15px; color: #fe5454; margin-bottom: 15px;">Required</div>
                            @endif
                        @enderror
                        <label class="active">
                            <input type="checkbox" name='email1' checked>
                            <i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i>
                            <span> I agree to the <a data-toggle="modal" data-target="#error">Terms</a> and <a
                                    data-toggle="modal" data-target="#error">Privacy Policy</a>.</span>
                        </label>
                        <div class="footer-action">
                            <a href="{{ route('login') }}" class="auth-btn-direct me-1">Sign In</a>
                            <input type="submit" value="Sign Up" class="auth-submit">
                        </div>
                    </form>

                </div>
            </div>
            <div class="auth-action-right">
                <div class="auth-image"
                    style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.20) 0%, rgba(0, 0, 0, 0.20) 100%), url('{{ asset('source/img/vector.jpg') }}'), white 50% / cover no-repeat;">
                    <div class="bg_logo">

                        <a href="{{ route('index') }}"><img src="source/img-project/logofull.png" alt="logo"
                                class="logo"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer_left">
                <div class="follow">
                    <b>Subscribe to our newsletter !</b>
                    <input type="email" class="footer_email" placeholder="Email">
                    <input type="submit" value="Send" class="send">
                </div>

                <div class="language">
                    <b>language / currency</b>
                    <br>
                    <div class="language_select">
                        <input type="email" class="footer_language" placeholder="Vietnamese | VND">
                    </div>
                </div>
            </div>
            <div class="down-line">
                <div class="footer_middle1">
                    <b>Service</b>
                    <table class="service">
                        <tr class="service_item">
                            <td class="fa-solid fa-cart-shopping"></td>
                            <td>Your order</td>
                        </tr>
                        <tr class="service_item">
                            <td class="fa-light fa-question"></td>
                            <td>Help</td>
                        </tr>
                        <tr class="service_item">
                            <td class="fa-regular fa-envelope"></td>
                            <td>Contact</td>
                        </tr>
                    </table>
                    <b>
                        <span>More</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </b>
                </div>
                <div class="footer_middle2">
                    <b>Company</b>
                    <table class="service">
                        <tr class="service_item">
                            <td>About Us</td>
                        </tr>
                        <tr class="service_item">
                            <td>Sustainability</td>
                        </tr>
                        <tr class="service_item">
                            <td>History</td>
                        </tr>
                    </table>
                    <b>
                        <span>More</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </b>
                </div>
                <div class="footer_right">
                    <b>Follow us on:</b>
                    <table class="service">
                        <tr class="service_item">
                            <td class="fa-brands fa-square-facebook"></td>
                            <td>Facebook</td>
                        </tr>
                        <tr class="service_item">
                            <td class="fa-brands fa-twitter"></td>
                            <td>Twitter</td>
                        </tr>
                        <tr class="service_item">
                            <td class="fa-brands fa-instagram"></td>
                            <td>Instagram</td>
                        </tr>
                    </table>
                    <b>
                        <span>More</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </b>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="error"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4>Sorry ! <span style="color: #fe5454">ImPrint</span> team has not yet developed this
                        functionality <i class="fa-solid fa-heart" style="color: #fe5454;"></i></h4>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("passwordInput");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
</script>
