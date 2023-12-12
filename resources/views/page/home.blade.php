@extends('masterPr')
@section('contentPr')
<div class="banner">
        <div class="img-banner" style=" background: url(source/image/bannerhome.webp) center/cover; background: linear-gradient(0deg, rgba(0, 0, 0, 0.20) 0%, rgba(0, 0, 0, 0.20) 100%), url(source/image/bannerhome.webp), lightgray 50% / cover no-repeat;">
            <p>welcome to</p>
            <b class="text-summer">iMPRiNT</b><br><br>
            <span>Unique product floors created by independent designers</span> <br>
            <div class="button-banner">
                <a href="{{route('categoryopr')}}"><b>Design Now</b></a>
                <span>or</span>
                <a href="{{route('product')}}"><b>Shop Now</b></a>
            </div>
        </div>
    </div>
    
    <div class="video grid">
        <h1>THE JOI OF SUMMER</h1>
        <div class="intro">
            <video preload="auto" autoplay loop controls>
            <source src="source/img/summer23_video.webm">
            </video>
            <div class="intro-box">
                <div class="intro-pr mb-4">
                    <div class="">
                        <a href="#"><img src="source/img/home-product.jpg" alt="product"></a>
                    </div> <br>
                    <div class="">
                        <a href="#"><img src="source/img/home-product2.jpg" alt="product"></a>
                    </div>
                </div>
                <div class="intro-pr">
                    <div class="">
                        <a href="#"><img src="source/img/home-product3.jpg" alt="product"></a>
                    </div> <br>
                    <div class="">
                        <a href="#"><img src="source/img/product4.jpg" alt="product"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bestseller grid">
        <h1>BESTSELLER</h1>
        <div class="row justify-content-center w-100">
            <div class="column col-xl-2">
                <div class="product_img">
                    <i class="product_icon fa-regular fa-heart"></i>
                    <img class="first-img" src="source/img/product3.jpg" alt="phone">
                    <img class="last-img" src="source/img/hover-product.jpg" alt="phone">
                </div>
                <div class="product_name">
                    <span><b>men's and women's t-shirts </b>...</span>
                </div>
                <p>By Sunny</p>
                <div class="product_price">
                    <b class="price">$ 32.20 - $ 55.00</b>
                    <i class="fa-solid fa-cart-plus"></i>
                </div>
            </div>
            <div class="column col-xl-2">
                <div class="product_img">
                    <i class="product_icon fa-regular fa-heart"></i>
                    <img class="first-img" src="source/img/homepp1.jpg" alt="phone">
                    <img class="last-img" src="source/img/homep1.jpg" alt="phone">
                </div>
                <div class="product_name">
                    <span><b>men's and women's t-shirts </b>...</span>
                </div>
                <p>By Sunny</p>
                <div class="product_price">
                    <b class="price">$ 32.20 - $ 55.00</b>
                    <i class="fa-solid fa-cart-plus"></i>
                </div>
            </div>
            <div class="column col-xl-2">
                <div class="product_img">
                    <i class="product_icon fa-regular fa-heart"></i>
                    <img class="first-img" src="source/img/homepp2.jpg" alt="phone">
                    <img class="last-img" src="source/img/homep2.jpg" alt="phone">
                </div>
                <div class="product_name">
                    <span><b>men's and women's t-shirts </b>...</span>
                </div>
                <p>By Sunny</p>
                <div class="product_price">
                    <b class="price">$ 32.20 - $ 55.00</b>
                    <i class="fa-solid fa-cart-plus"></i>
                </div>
            </div>
            <div class="column col-xl-2">
                <div class="product_img">
                    <i class="product_icon fa-regular fa-heart"></i>
                    <img class="first-img" src="source/img/homepp3.jpg" alt="phone">
                    <img class="last-img" src="source/img/homep3.jpg" alt="phone">
                </div>
                <div class="product_name">
                    <span><b>men's and women's t-shirts </b>...</span>
                </div>
                <p>By Sunny</p>
                <div class="product_price">
                    <b class="price">$ 32.20 - $ 55.00</b>
                    <i class="fa-solid fa-cart-plus"></i>
                </div>
            </div>
            <div class="column col-xl-2">
                <div class="product_img">
                    <i class="product_icon fa-regular fa-heart"></i>
                    <img class="first-img" src="source/img/homepp4.jpg" alt="phone">
                    <img class="last-img" src="source/img/homep4.jpg" alt="phone">
                </div>
                <div class="product_name">
                    <span><b>men's and women's t-shirts </b>...</span>
                </div>
                <p>By Sunny</p>
                <div class="product_price">
                    <b class="price">$ 32.20 - $ 55.00</b>
                    <i class="fa-solid fa-cart-plus"></i>
                </div>
            </div>
            <div class="column col-xl-2">
                <div class="product_img">
                    <i class="product_icon fa-regular fa-heart"></i>
                    <img class="first-img" src="source/img/homepp5.jpg" alt="phone">
                    <img class="last-img" src="source/img/homep5.jpg" alt="phone">
                </div>
                <div class="product_name">
                    <span><b>men's and women's t-shirts </b>...</span>
                </div>
                <p>By Sunny</p>
                <div class="product_price">
                    <b class="price">$ 32.20 - $ 55.00</b>
                    <i class="fa-solid fa-cart-plus"></i>
                </div>
            </div>
            <div class="column col-xl-2">
                <div class="product_img">
                    <i class="product_icon fa-regular fa-heart"></i>
                    <img class="first-img" src="source/img/product3.jpg" alt="phone">
                    <img class="last-img" src="source/img/hover-product.jpg" alt="phone">
                </div>
                <div class="product_name">
                    <span><b>men's and women's t-shirts </b>...</span>
                </div>
                <p>By Sunny</p>
                <div class="product_price">
                    <b class="price">$ 32.20 - $ 55.00</b>
                    <i class="fa-solid fa-cart-plus"></i>
                </div>
            </div>
            <div class="column col-xl-2">
                <div class="product_img">
                    <i class="product_icon fa-regular fa-heart"></i>
                    <img class="first-img" src="source/img/homepp1.jpg" alt="phone">
                    <img class="last-img" src="source/img/homep1.jpg" alt="phone">
                </div>
                <div class="product_name">
                    <span><b>men's and women's t-shirts </b>...</span>
                </div>
                <p>By Sunny</p>
                <div class="product_price">
                    <b class="price">$ 32.20 - $ 55.00</b>
                    <i class="fa-solid fa-cart-plus"></i>
                </div>
            </div>
            <div class="column col-xl-2">
                <div class="product_img">
                    <i class="product_icon fa-regular fa-heart"></i>
                    <img class="first-img" src="source/img/homepp2.jpg" alt="phone">
                    <img class="last-img" src="source/img/homep2.jpg" alt="phone">
                </div>
                <div class="product_name">
                    <span><b>men's and women's t-shirts </b>...</span>
                </div>
                <p>By Sunny</p>
                <div class="product_price">
                    <b class="price">$ 32.20 - $ 55.00</b>
                    <i class="fa-solid fa-cart-plus"></i>
                </div>
            </div>
            <div class="column col-xl-2">
                <div class="product_img">
                    <i class="product_icon fa-regular fa-heart"></i>
                    <img class="first-img" src="source/img/homepp3.jpg" alt="phone">
                    <img class="last-img" src="source/img/homep3.jpg" alt="phone">
                </div>
                <div class="product_name">
                    <span><b>men's and women's t-shirts </b>...</span>
                </div>
                <p>By Sunny</p>
                <div class="product_price">
                    <b class="price">$ 32.20 - $ 55.00</b>
                    <i class="fa-solid fa-cart-plus"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="featureArtist grid">
        <h1>FEATURED ARTIST</h1>
        <div class="row_artist">
            <i class="fa-solid fa-circle-chevron-left"></i>
                <div class="col_artist">
                    <img class="cover-img" src="source/img/backgroundAV1.jpg" alt="backgroundAV">
                    <div class="avatar">
                        <img src="source/img/AV1.jpg" alt="avatar">
                    </div>
                    <h2 class="nameArtist">Alja Horvat</h2>
                    <button>See Shop</button>
                </div>
                <div class="col_artist">
                    <img class="cover-img" src="source/img/backgroundAV1.jpg" alt="backgroundAV">
                    <div class="avatar">
                        <img src="source/img/AV1.jpg" alt="avatar">
                    </div>
                    <h2 class="nameArtist">Alja Horvat</h2>
                    <button>See Shop</button>
                </div>
                <div class="col_artist disnone">
                    <img class="cover-img" src="source/img/backgroundAV1.jpg" alt="backgroundAV">
                    <div class="avatar">
                        <img src="source/img/AV1.jpg" alt="avatar">
                    </div>
                    <h2 class="nameArtist">Alja Horvat</h2>
                    <button>See Shop</button>
                </div>
                <div class="col_artist disnone">
                    <img class="cover-img" src="source/img/backgroundAV1.jpg" alt="backgroundAV">
                    <div class="avatar">
                        <img src="source/img/AV1.jpg" alt="avatar">
                    </div>
                    <h2 class="nameArtist">Alja Horvat</h2>
                    <button>See Shop</button>
                </div>
                <div class="col_artist disnone-xs">
                <img class="cover-img" src="source/img/backgroundAV1.jpg" alt="backgroundAV">
                <div class="avatar">
                    <img src="source/img/AV1.jpg" alt="avatar">
                </div>
                <h2 class="nameArtist">Alja Horvat</h2>
                <button>See Shop</button>
            
            </div>
            <i class="fa-solid fa-circle-chevron-right"></i>
        </div>
</div>
@endsection