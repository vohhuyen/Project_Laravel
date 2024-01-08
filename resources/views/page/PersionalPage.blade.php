@extends('masterPr')
@section('contentPr')
   
    <div class="contentPersionalPage">

        <div class="cover_image">
            <img src="image/{{$shop->coverImageShop}}" alt="cover image">
        </div>
        <div class="content-person grid">
       
            <div class="avatar_image">
                <img src="image/{{$shop->avataShop}}" alt="avatar image">
            </div>
            <div class="d-flex justify-content-between">
           
                <div class="infor_design">
               
                    <b class="name_design my-2">{{ $shop1->nameShop }}</b>
                    <p class="location_design my-2"><i class="fa-solid fa-location-dot"></i>{{ $shop1->locationShop }} </p>
                    <p class="icon-link my-2">
                        <i class="fa-brands fa-twitter mx-1"></i>
                        <i class="fa-brands fa-facebook mx-1"></i>
                        <i class="fa-brands fa-linkedin mx-1"></i>
                        <i class="fa-brands fa-instagram mx-1"></i>
                    </p>
                    <p class="description_design">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <span>Work with images</span>
                    </p>
               
                </div>
                @if(Session::has('user') && Session::get('user')->idUser == $shop1->idShop)
                <div class="btn-right">
                    <button class="bg-danger-subtle"><b>Create</b></button>
                    <br>
                    <button class="bg-danger-subtle"><b><i class="fa-solid fa-share-nodes"></i> Share</b></button>
                </div>
                @endif
            </div>
            <h1 class="title">All Design from {{ $shop1->nameShop }}</h1>
            @php
        $savedProductIds = Session::has('user') ? $save->pluck('idProduct')->toArray() : [];
    @endphp
            <div class="row w-100 justify-content-between">
           @foreach($product as $product)
                <div class="column col-xl-2">
                    <div class="product_img">
                    @if(Session::has('user'))
                    @if(in_array($product->idProduct, $savedProductIds))
                        <form method="POST" action="{{ route('deletelikePr', $product->idProduct) }}" enctype="multipart/form-data" style="width: 0px; height: 0px;">
                            @csrf
                            <button type="submit"><i class="product_icon fa-solid fa-heart" style="color: red;"></i></button>
                        </form>
                    @else
                        <form method="POST" action="{{ route('likePr', $product->idProduct) }}" enctype="multipart/form-data" style="width: 0px; height: 0px;">
                            @csrf
                            <button type="submit"><i class="product_icon fa-regular fa-heart"></i></button>
                        </form>
                    @endif
                @endif
                        <a href="product-detail/{{$product->idProduct}}">
                            <img class="first-img" src="source/imageOPr/{{$product->imagePr}}" alt="phone">
                        </a>
                    </div>
                    <a href="product-detail/{{$product->idProduct}}" style="text-decoration: none;">
                    <div class="product_name">
                        <span>{{ $product->namePr }}</span>
                    </div>
                    </a>
                    <p class="description_Pr mb-0">{{ $product->descriptionDesign }}</p>
                    <div class="product_price d-block">
                        <b class="price">$ {{ $product->pricePr }}</b>
                        @if(Session::has('user') && Session::get('user')->idUser == $shop1->idShop)
                        <div class="d-flex">
                            <button data-toggle="modal" data-target="#btnupdate{{ $product->idProduct }}" class="btn-login" style="background-color: white; color: black; border:1px solid grey;">Update</button>
                            <form role="form" action="{{ route('personal-product-delete', $product->idProduct) }}" method="post">
                            @csrf
                                <button type="submit" class="btn-login">Delete</button>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
           
            <div class="modal fade" id="btnupdate{{ $product->idProduct }}" tabindex="-1" role="dialog" aria-labelledby="btn1Title" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Create Shop</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        @include('error')
                            <form action="{{ route('updateProductPP') }}" method="post" class="login-form w-100" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for='avatar'>ID: </label>
                                    <input type="text" class="inputAddUser" id="idProduct" name="idProduct" value="{{ $product->idProduct }}" readonly>
                                </div>
                                <div class="d-flex">
                                    <div class="form-group">
                                        <label for="productImage">Image product:</label>
                                        <br>
                                        <img class="first-img" src="source/imageOPr/{{$product->imagePr}}" alt="phone">
                                        <input type="hidden" class="form-control-file inputAddUser" id="productImage" name="productImage" value="{{ $product->imagePr }}" required>
                                    </div>
                                    <pre></pre>
                                    <div class="form-group">
                                        <label for="designImage">Image design:</label>
                                        <br>
                                        <img class="first-img" src="source/imageOPr/{{$product->imageDesign}}" alt="phone" style="width: 160px; height: 90px;">
                                        <input type="hidden" class="inputAddUser" id="designImage" name="designImage" value="{{ $product->imageDesign }}" required>
                                    </div>
                                </div>
                                <pre></pre>
                                <div class="form-group">
                                    <label for='avatar'>Name design: </label>
                                    <input type="text" class="inputAddUser" placeholder="Description" id="nameDesign" name="nameDesign" value="{{ $product->nameDesign }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="productPrice">Price:</label>
                                    <br>
                                    <input type="number" class="inputAddUser" id="productPrice" name="productPrice" placeholder="Price product >= price original product" value="{{ $product->pricePr }}">
                                </div>
                                <pre></pre>
                                <div class="form-group">
                                    <label for="description">Descriptiton design:</label>
                                    <br>
                                    <textarea id="description" class="inputAddUser" name="description" placeholder="Enter description...">{{ $product->descriptionDesign }}</textarea>
                                </div>
                                <pre></pre>
                                <div class="form-group">
                                    <label for="note">Note:</label>
                                    <br>
                                    <textarea id="note" class="inputAddUser" name="note" placeholder="Enter your note...." >{{ $product->note }}</textarea>
                                </div>
                                <pre></pre>	
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>	
                                    <button type="submit" class="btn btn-danger">Save</button>	
                                </div>				
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @if(Session::has('user') && Session::get('user')->idUser == $shop1->idShop)
            @foreach($design as $design)
                <div class="column col-xl-2">
                    <div class="product_img">
                        <img class="first-img" src="source/imageOPr/{{$design->imagePr}}" alt="phone">
                    </div>
                    <div class="product_name">
                        <span>{{ $design->namePr }}</span>
                    </div>
                    <p class="description_Pr mb-0">{{ $design->descriptionDesign }}</p>
                    <div class="product_price d-block">
                        <b class="price">$ {{ $design->pricePr }}</b>
                    </div>
                    <button class="btn-login" style="width: 100%; font-size: 1.5rem;">Product is awaiting approval</button>
                </div>
            @endforeach
            @endif
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