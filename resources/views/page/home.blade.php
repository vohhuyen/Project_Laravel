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
        @foreach($products as $product )
            <div class="column col-xl-2">
            <a href="product-detail/{{$product->idProduct}}"><div class="product_img">
                    <i class="product_icon fa-regular fa-heart"></i>
                    <img class="first-img" src="source/imageOPr/{{$product->imagePr}}" alt="phone">
                </div></a>
                <a href="product-detail/{{$product->idProduct}}"><div class="product_name">
                    <span><b>{{ $product->namePr }}</b>...</span>
                </div></a>
                <p>{{ $product->nameShop }}</p>
                <div class="product_price">
                    <b class="price">{{ $product->pricePr }}</b>
                    <i class="fa-solid fa-cart-plus"></i>
                </div>
            </div>
 @endforeach
        </div>
       
       
    </div>
    <div class="featureArtist grid">
        <h1>FEATURED ARTIST</h1>
        <div class="row_artist">
            <div class="chevleft">
                <i class="fa-solid fa-circle-chevron-left"></i>
            </div>
            @foreach($shop as $sh )
            <div class="col_artist">
                <img class="cover-img" src="image/{{$sh->coverImageShop}}" alt="backgroundAV">
                <div class="avatar">
                    <img src="image/{{$sh->avataShop}}" alt="avatar">
                </div>
                <h2 class="nameArtist">{{ $sh->nameShop }}</h2>
                <a href="{{route('PersionalPage',$sh->idShop)}}"><button>See Shop</button></a>
            </div>
            @endforeach
            <div class="chevright">
                <i class="fa-solid fa-circle-chevron-right"></i>
            </div>
        </div>
</div>
<script>
       
       document.addEventListener('DOMContentLoaded', function () {
    const alsolikeContainer = document.querySelector('row_artist');
    const alsolikeItems = document.querySelectorAll('.col_artist');
    let currentIndex = 0;

    function showItems() {
        alsolikeItems.forEach((item, index) => {
            const isVisible = index >= currentIndex && index < currentIndex + 5;
            item.style.display = isVisible ? 'inline-block' : 'none';
        });
    }

    function updateIndex(direction) {
        const maxIndex = alsolikeItems.length - 5;
        currentIndex = Math.max(0, Math.min(currentIndex + direction, maxIndex));
        showItems();
    }

    document.querySelector('.chevleft').addEventListener('click', function () {
        updateIndex(-1);
    });

    document.querySelector('.chevright').addEventListener('click', function () {
        updateIndex(1);
    });

    showItems();
    });
</script>
@endsection