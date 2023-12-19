@extends('masterPr')
@section('contentPr')

<div class="grid mt-5 pt-5">
        <div class="d-flex justify-content-between">
        
            <div class="sile-images-left">
                <div class="chev">
                    <i class="fa-solid fa-chevron-up icon-chev"></i>
                </div>
                <div class="small-img">
                    <img class="img1" src="source/imageOPr/{{$pro->imageOPr}}" oneclick="showImg(this.src)">
                </div>
                @if(!empty($pro->image2))
                <div class="small-img">
                    <img class="img1" src="source/imageOPr/{{$pro->imageOPr}}" oneclick="showImg(this.src)">
                </div>
                @endif
                @if(!empty($pro->image3))
                <div class="small-img">
                    <img class="img1" src="source/imageOPr/{{$pro->imageOPr}}" oneclick="showImg(this.src)">
                </div>
                @endif
                @if(!empty($pro->image4))
                <div class="small-img">
                    <img class="img1" src="source/imageOPr/{{$pro->imageOPr}}" oneclick="showImg(this.src)">
                </div>
                @endif
                @if(!empty($pro->image5))
                <div class="small-img">
                    <img class="img1" src="source/imageOPr/{{$pro->image5}}" oneclick="showImg(this.src)">
                </div>
                @endif
                @if(!empty($pro->image6))
                <div class="small-img">
                    <img class="img1" src="source/imageOPr/{{$pro->image6}}" oneclick="showImg(this.src)">
                </div>
                @endif
                @if(!empty($pro->image7))
                <div class="small-img">
                    <img class="img1" src="source/imageOPr/{{$pro->image7}}" oneclick="showImg(this.src)">
                </div>
                @endif
                @if(!empty($pro->image8))
                <div class="small-img">
                    <img class="img1" src="source/imageOPr/{{$pro->image8}}" oneclick="showImg(this.src)">
                </div>
                @endif
                @if(!empty($pro->image9))
                <div class="small-img">
                    <img class="img1" src="source/imageOPr/{{$pro->image9}}" oneclick="showImg(this.src)">
                </div>
                @endif
                @if(!empty($pro->image10))
                <div class="small-img">
                    <img class="img1" src="source/imageOPr/{{$pro->image10}}" oneclick="showImg(this.src)">
                </div>
                @endif
                @if(!empty($pro->image11))
                <div class="small-img">
                    <img class="img1" src="source/imageOPr/{{$pro->image11}}" oneclick="showImg(this.src)">
                </div>
                @endif
                @if(!empty($pro->image12))
                <div class="small-img">
                    <img class="img1" src="source/imageOPr/{{$pro->image12}}" oneclick="showImg(this.src)">
                </div>
                @endif
                @if(!empty($pro->image13))
                <div class="small-img">
                    <img class="img1" src="source/imageOPr/{{$pro->image13}}" oneclick="showImg(this.src)">
                </div>
                @endif
                @if(!empty($pro->image14))
                <div class="small-img">
                    <img class="img1" src="source/imageOPr/{{$pro->image14}}" oneclick="showImg(this.src)">
                </div>
                @endif
                @if(!empty($pro->image15))
                <div class="small-img">
                    <img class="img1" src="source/imageOPr/{{$pro->image15}}" oneclick="showImg(this.src)">
                </div>
                @endif
                
                <div class="chev1">
                    <i class="fa-solid fa-chevron-up fa-rotate-180 icon-chev"></i>
                </div>
                
            </div>
            <div class="big-img">
                    <img src="source/imageOPr/{{$pro->imageOPr}}">
            </div>
            <div class="infor-right">
                    <div class="pname">{{$pro->nameOPr}}</div> 
                    <div class="product-name-and-details d-flex">
                        <div>Gildan 18500 | </div>
                        <div  style="color: #FE5959;"> Product details</div>
                    </div>
                    <div class="Infor_OProducts">
                        <div class="head_Infor_Pr align-items-center justify-content-between ">
                            <div class="my-1 d-flex justify-content-between">
                                <p class="paintChoice">Imprint Choice</p>
                                <button class="btn_ProviderInfor"  data-toggle="modal" data-target="#btnimprintchoice">Provider infor</button>
                            </div>
                            <div class="modal fade" id="btnimprintchoice" tabindex="-1" role="dialog" aria-labelledby="btn1Title" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Imprint Choice how it works</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body desProvider">
                                            <b>Maximize your profits with Printify Choice</b>
                                            <p>
                                                Printify Choice automatically selects the best print provider in our network based on price,
                                                 quality, and location of your end customer. Our system checks stock levels, reprint rates, 
                                                 delivery location, prices, and more to make sure you and your customer get the lowest price and fastest delivery possible with every order.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="color-text2">The best available option based on price, quality, and speed.</p>
                            <div class="d-flex btn_box">
                                <div class="box">
                                    <p>Branded Inserts</p>
                                </div>
                                <div class="gift box">
                                    <p>Gift Messages</p>
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="d-flex justify-content-between">
                            <div class="priceOPr">
                                <p class="color-text2">Price</p>
                                <p class="color-text3">From USD {{$pricePrmin}} - USD {{$pricePrmax}}</p>
                            </div>
                            <div class="shippingOPr pe-5">
                                <p class="color-text2">Standard shipping</p>
                                <p class="color-text3">From USD {{$shippingmin}} - USD {{$shippingmax}}</p>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="AvgTime_PrintAreas_Color d-flex">
                            <div class="Pr_avgtime me-5">
                                <p class="color-text2">Avg. production time</p>
                                <p>{{$AvgPrTime}} business days</p>
                            </div>
                            <div class="Pr_printAreas me-5">
                                <p class="color-text2">Print areas</p>
                                <p>{{$printArea}}</p>
                            </div>
                            <div class="Pr_color">
                                <div class="color-text2">Colors • {{$Color}}</div>
                                <div class="Prcolor13 color-circle-all">
                                @foreach($colorall as $colorall)
                                    <img src="image/{{$colorall->imageColor}}" alt="#">
                                @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="btn-box">
                        <a href="{{ route('design', ['idProvider' => $provider1->idProvider, 'idOPr' => $pro->idOPr]) }}"><button class="startdesignOPr">Start designing</button></a><br>
                        </div>
                    </div> 
                    <button class="showProvider" onclick="toggleProvider()">Show additional providers</button>              
            </div>
        </div>
        <div class="showPro h-100" id="additionalProviders" style="display:none">
            <div class="Additional_Provider d-flex justify-content-between">
                <p class="additionalProvider">Additional providers:</p>
                <div class="d-flex align-items-center">
                    <p class="my-0 mx-3">Sort by</p>
                    <button class="btn-ranking">Imprint Ranking <i class="fa fa-chevron-down"></i></button>
                </div>
            </div> 

            <div class="line my-5"></div>

            @foreach($provider as $provider)
            <div class="Provider my-5 py-3">
                <div class="Provider_header justify-content-between d-flex px-5 align-items-center">
                    <div class="text5 d-flex align-items-center">
                        <p class="nameProvider_OPrDetail">{{$provider->Name}}</p>
                        <div class="Provider_evalua d-flex ">
                            <i class="fa fa-star" aria-hidden="true"></i>  
                            <p class="m-0"> {{$provider->evalue}} </p>                
                        </div>
                        <p class="saleProvider">Bulk discount eligible</p>
                        <p class="saleProvider">Bulk discount eligible</p>
                    </div>
                    <div>
                        <button class="btn-provider-infor" data-toggle="modal" data-target="#btn{{$provider->idProvider}}">Provider info</button>
                        <a href="{{ route('design', ['idProvider' => $provider->idProvider, 'idOPr' => $pro->idOPr]) }}"><button class="btn-provider-startdesign">Start designing</button></a>
                    </div>
                    <div class="modal fade" id="btn{{$provider->idProvider}}" tabindex="-1" role="dialog" aria-labelledby="btn1Title" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$provider->Name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body desProvider">
                                        <b>Technology & Inks</b>
                                        <p>{{$provider->description}}</p>
                                        <table class="desProviderdetail table table-White table-hover">
                                            <tr>
                                                <th class="size1">Color</th>
                                                <th class="size1">Size</th>
                                                <th class="size1">Inventory</th>
                                            </tr>
                                            @foreach($colorProvider as $color)
                                                @if($color->idProvider == $provider->idProvider && $color->idOPrDetail == $color->idOPrDetail)
                                            <tr>
                                                <td class="color-circle-all"><img src="image/{{$color->imageColor}}" alt="#"><span> {{$color->NameColor}}</span>  </td>
                                                <td>@if($color->idSize1 != 0) S @endif • @if($color->idSize2 != 0) M @endif • @if($color->idSize3 != 0) L @endif • @if($color->idSize4 != 0) XL @endif • 
                                                    @if($color->idSize5 != 0) 2XL @endif • @if($color->idSize6 != 0) 3XL @endif • @if($color->idSize7 != 0) 4XL @endif • @if($color->idSize8 != 0) 5XL @endif</td>
                                                <td>All in stock</td>
                                            </tr>
                                                @endif
                                            @endforeach
                                        </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>

                <div class="line"></div>
                <div class="d-flex px-5 pb-4 row">
                    <div class="Provider_location text-center col-1">
                        <p class="pname9">Location</p>
                        @if($provider->location == "Germany")
                        <img src="source/img-project/germany.gif" alt="american logo">
                        @elseif($provider->location == "US")
                        <img src="source/img-project/US.png" alt="american logo">
                        @elseif($provider->location == "UK")
                        <img src="source/img-project/UK.png" alt="american logo">
                        @elseif($provider->location == "Poland")
                        <img src="source/img-project/Poland.png" alt="american logo">
                        @elseif($provider->location == "Australia")
                        <img src="source/img-project/australia.png" alt="american logo">
                        @elseif($provider->location == "Canada")
                        <img src="source/img-project/canada.jpg" alt="american logo">
                        @else
                        @endif
                    </div>
                    <div class="Provider_pricePr col-1">
                        <p class="pname9">Price</p>
                        <p class="Provider_list">USD {{$provider->priceOPr}} </p>
                    </div>
                    <div class="Provider_shippingPr col-2">
                        <p class="pname9">Shipping</p>
                        <p class="Provider_list">Standard USD {{$provider->shippingCost}}</p>
                    </div>  
                    <div class="Provider_AvgPrTime col-2">
                        <p class="pname9">Avg . production time</p>
                        <p class="Provider_list">{{$provider->productTime}} business days</p>
                    </div>
                    <div class="Provider_PrintAreas col-2">
                        <p class="pname9">Print areas</p>
                        <p class="Provider_list">{{$provider->printAreaOPr}}</p>
                    </div>
                    <div class="Provider_sizePr col-2">
                        <p class="pname9">Sizes</p>
                        @foreach($colorProvider as $color)
                        @if($color->idProvider == $provider->idProvider && $color->idOPrDetail == $color->idOPrDetail)
                            <p class="Provider_list">@if($color->idSize1 != 0) S @endif • @if($color->idSize2 != 0) M @endif • @if($color->idSize3 != 0) L @endif • @if($color->idSize4 != 0) XL @endif • 
                                @if($color->idSize5 != 0) 2XL @endif • @if($color->idSize6 != 0) 3XL @endif • @if($color->idSize7 != 0) 4XL @endif • @if($color->idSize8 != 0) 5XL @endif </p>
                            @break
                        @endif
                        @endforeach
                    </div>
                    <div class="Provider_ColorPr col-2">
                        <p class="pname9">Colors</p>
                        <div class="color-circle-all">
                        @foreach($colorProvider as $color)
                        @if($color->idProvider == $provider->idProvider && $color->idOPrDetail == $color->idOPrDetail)
                            <img src="image/{{$color->imageColor}}" alt="#">
                        @endif
                        @endforeach
                        </div>
                    </div>
                </div>
                
            </div>
            @endforeach 
        </div>


        <div class="mt-5 pt-5">
            <div class="d-flex justify-content-center row">
                <b class="col-4 name-Infor">About</b>
                <p class="col-8 Infor-OPr">{{$pro->aboutOPr}}</p>
            </div>
            <div class="line my-5"></div>
            <div class="keyFeatures d-flex justify-content-center row">
                <b class="col-4 name-Infor">Key Features</b>
                <div class="col-8 Infor-OPr">
                    <div class="d-flex row">
                    @foreach($infor as $KF)
                        <div class="col-6">
                            <img class="imageKF" src="source/imageKF/{{$KF->imageKF}}">
                            <p>{{$KF->nameKF}}</p>
                            <p class="SP1">{{$KF->descriptionKF}}</hp>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
            <div class="line my-5"></div>
            <div class="d-flex justify-content-center row">
                <b class="col-4 name-Infor">Care instructions</b>
                <div class="Infor-OPr col-8">
                
                    <img class="imageKF" src="source/imageCI/imgCI/{{$pro->imageCI1}}">
                    <img class="imageKF" src="source/imageCI/imgCI/{{$pro->imageCI2}}">
                    <img class="imageKF" src="source/imageCI/imgCI/{{$pro->imageCI3}}">
                    <img class="imageKF" src="source/imageCI/imgCI/{{$pro->imageCI4}}">
                    <img class="imageKF" src="source/imageCI/imgCI/{{$pro->imageCI5}}">
                    <br><br>
                    <p>{{$pro->description}}</p>
                
                </div>
            </div>

            <div class="line my-5"></div>
            <div class="Size_Guide d-flex justify-content-center">
                <b class="col-4 name-Infor">Size guide</b>
                <div class="Infor-OPr col-8">
                    <p>All measurements in the table refer to product dimensions.</p>
                    <table class="tablesize">
                                <tr>
                                    <th class="size size1"></th>
                                    <th class="size1">S</th>
                                    <th class="size1">M</th>
                                    <th class="size1">L</th>
                                    <th class="size1">XL</th>
                                    <th class="size1">2XL</th>
                                    <th class="size1">3XL</th>
                                    <th class="size1">4XL</th>
                                    <th class="size1">5XL</th>
                                  </tr>
                                  <tr>
                                    <th class="size"> Width, in</th>
                                    <td>{{$sizewidth->S}}</td>
                                    <td>{{$sizewidth->M}}</td>
                                    <td>{{$sizewidth->L}}</td>
                                    <td>{{$sizewidth->XL}}</td>
                                    <td>{{$sizewidth->size2XL}}</td>
                                    <td>{{$sizewidth->size3XL}}</td>
                                    <td>{{$sizewidth->size4XL}}</td>
                                    <td>{{$sizewidth->size5XL}}</td>
                                  </tr>
                                  <tr>
                                    <th class="size"> Length, in</th>
                                    <td>{{$sizelength->S}}</td>
                                    <td>{{$sizelength->M}}</td>
                                    <td>{{$sizelength->L}}</td>
                                    <td>{{$sizelength->XL}}</td>
                                    <td>{{$sizelength->size2XL}}</td>
                                    <td>{{$sizelength->size3XL}}</td>
                                    <td>{{$sizelength->size4XL}}</td>
                                    <td>{{$sizelength->size5XL}}</td>
                                  </tr>
                                  <tr>
                                    <th class="size">Sleeve length from center back, in</th>
                                    <td>{{$sizesleeveLength->S}}</td>
                                    <td>{{$sizesleeveLength->M}}</td>
                                    <td>{{$sizesleeveLength->L}}</td>
                                    <td>{{$sizesleeveLength->XL}}</td>
                                    <td>{{$sizesleeveLength->size2XL}}</td>
                                    <td>{{$sizesleeveLength->size3XL}}</td>
                                    <td>{{$sizesleeveLength->size4XL}}</td>
                                    <td>{{$sizesleeveLength->size5XL}}</td>
                                  </tr>
                    </table>
                </div>
                    
            </div>
            <div class="line my-5"></div>
        </div>
        <div class="alsoLike">
            <h1 class="alsolikeh1">You may also like</h1>
            <div class="alsolikeDetail d-flex text-center align-items-center justify-content-center w-100">
                <div class="chevleft">
                    <i class="fa-solid fa-chevron-left" style="color: #fe5959;font-size: 30px;"></i>
                </div>
                @foreach($alsoLike as $also)
                <a href="opr-detail/{{$also->idOPr}}" class="link-alsoLike">
                    <div class="alsolikeImg1" style="margin-top: 15px;">
                        <img src="source/imageOPr/{{$also->image}}" alt="#">
                        <p class="nameOPr">{{$also->nameOPr}}</p>
                        <p class="nameProvider">{{$also->aboutOPr}}</p>
                        <p class="priceOPr">{{$also->descriptionOPr}}</p>
                    </div>
                </a>
                @endforeach
                <div class="chevright">
                <i class="fa-solid fa-chevron-right" style="color: #fe5959;font-size: 30px;"></i>
                </div>
            </div>
        </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const smallImages = document.querySelectorAll('.small-img');
    const chevronUp = document.querySelector('.chev');
    const chevronDown = document.querySelector('.chev1');
    const bigImage = document.querySelector('.big-img img');

    let currentIndex = 0;

    // Function to show images based on currentIndex
    function showImages() {
        smallImages.forEach((img, index) => {
            if (index >= currentIndex && index < currentIndex + 4) {
                img.classList.add('show');
            } else {
                img.classList.remove('show');
            }
        });
    }
    // Initial display
    showImages();
    // Event listener for chevron up
    chevronUp.addEventListener('click', function () {
        if (currentIndex > 0) {
            currentIndex--;
            showImages();
        }
    });
    // Event listener for chevron down
    chevronDown.addEventListener('click', function () {
        if (currentIndex < smallImages.length - 4) {
            currentIndex++;
            showImages();
        }
    });
    // Event listener for clicking on small images
    smallImages.forEach((img) => {
        img.addEventListener('click', function () {
            const src = this.querySelector('img').src;
            bigImage.src = src;
        });
    });
    });

    
    document.addEventListener('DOMContentLoaded', function () {
    const alsolikeContainer = document.querySelector('.alsolikeDetail');
    const alsolikeItems = document.querySelectorAll('.alsolikeImg1');
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
<script>
    function toggleProvider() {
    var additionalProviders = document.getElementById('additionalProviders');
    var button = document.querySelector('.showProvider');

    if (additionalProviders.style.display === 'none') {
        additionalProviders.style.display = 'block';
        button.innerHTML = 'Hide additional providers';
    } else {
        additionalProviders.style.display = 'none';
        button.innerHTML = 'Show additional providers';
    }
}
</script>


@endsection