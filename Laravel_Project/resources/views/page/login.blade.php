<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="source/css/SIGNIN_UP.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="source/fontawesome-free-6.4.0-web/css/all.min.css">
</head>
<body>
    <!-- Form without bootstrap -->
    <div class="auth-wrapper">
        <div class="auth-container">
            <div class="auth-action-left">
                <div class="auth-form-outer">
                    <h2 class="auth-form-title">
                        Sign In
                    </h2>
                    <div class="auth-external-container">
                        <div class="auth-external-list">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-google"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <p class="auth-sgt">or sign in with:</p>
                    </div>
                    <form class="login-form">
                        <input type="email" class="auth-form-input" placeholder="Email">
                        <div class="input-icon">
                            <input type="password" class="auth-form-input" placeholder="Password">
                            <i class="fa fa-eye show-password"></i>
                        </div>
                        <label class="btn active">
                            <input type="checkbox" name='email1' checked>
                            <i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i> 
                            <span> Remember password.</span>
                        </label>
                        <div class="footer-action">
                            <input type="submit" value="Sign In" class="auth-submit">
                            <a href="/html/SIGNUP.html" class="auth-btn-direct">Sign Up</a>
                        </div>
                    </form>
                    <div class="auth-forgot-password">
                        <a href="#">Forgot Password</a>
                    </div>
                </div>
            </div>
            <div class="auth-action-right">
                <div class="auth-image" style="background-image: url('{{ asset('source/img/vector.jpg')}}');">
                    <div class="bg_logo">
                        <a href="/html/HOME.html"><img src="source/img/PRINT-removebg-preview.png" alt="logo" class="logo"></a>
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
</body>
</html>