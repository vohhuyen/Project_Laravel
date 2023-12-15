@extends('masterPr')
@section('contentPr')
   
    <div class="content">

        <div class="cover_image">
            <img src="image/{{$shop->coverImageShop}}" alt="cover image">
        </div>
        <div class="content-person">
       
            <div class="avatar_image">
                <img src="image/{{$shop->avataShop}}" alt="avatar image">
            </div>
            <div class="d-flex justify-content-between">
           
                <div class="infor_design">
               
                    <b class="name_design">{{ $shop->nameShop }}</b>
                    <p class="location_design"><i class="fa-solid fa-location-dot"></i>{{ $shop->locationShop }} </p>
                    <p class="icon-link">
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-linkedin"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </p>
                    <p class="description_design">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <span>Work with images</span>
                    </p>
               
                </div>
                @if(Session::has('user') && Session::get('user')->idUser == $shop->idShop)
                <div class="btn-right">
                    <button class="bg-danger-subtle"><b>Manager your product</b></button>
                    <br>
                    <button class="bg-danger-subtle"><b><i class="fa-solid fa-share-nodes"></i> Share</b></button>
                </div>
                @endif
            </div>
            <h1 class="title">All Design from {{ $shop->nameShop }}</h1>
          
            <div class="row w-100 justify-content-between">
           
                <div class="column col-xl-2">
               
                    <div class="product_img">
                        <i class="product_icon fa-regular fa-heart"></i>
                        <img class="first-img" src="source/imageOPr/{{$product->imagePr}}" alt="phone">
                    </div>
                    <div class="product_name">
                        <span>{{ $product->namePr }}</span>
                    </div>
                    <p class="description_Pr mb-0">{{ $product->descriptionDesign }}</p>
                    <div class="product_price">
                        <b class="price">$ {{ $product->pricePr }}</b>
                        <i class="fa-solid fa-cart-plus pt-1"></i>
                    </div>
               
                </div>
                
                <div class="column col-xl-2"></div>
                <div class="column col-xl-2"></div>
                <div class="column col-xl-2"></div>
                <div class="column col-xl-2"></div>
            </div>
        </div>
    </div>
    
    <script>
        var Listbar = document.getElementById("listbar");
        function openListbar(){
            Listbar.style = "display: block";
        }
        function closeListbar(){
            Listbar.style = "display: none";
        }
    </script>
@endsection