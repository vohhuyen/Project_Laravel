@extends('masterPr')
@section('contentPr')
<div class="content-PrDetail grid">
    <div class="Product_detail grid">
      <div class="dis-flex-all">
        <div class="image_bar disnone-xs">
          <div class="chev ms-5 ps-2">
            <i class="fa-solid fa-chevron-up icon-chev"></i>
          </div>
          <div class="small-img">
            <img src="source/imageOPr/{{$productinfor->imagePr}}" onclick="showImg(this.src)">
          </div>
          @foreach($images as $image)
          <div class="small-img">
            <img src="source/imageOPr/{{$image->imageProduct}}" onclick="showImg(this.src)"><br>
          </div>
          @endforeach
          <div class="chev1 ms-5 ps-2">
            <i class="fa-solid fa-chevron-up fa-rotate-180 icon-chev"></i>
          </div>
        </div>
        <div class="image_Detail_Pr">
          <img src="source/imageOPr/{{$productinfor->imagePr}}">
        </div>
        <div class="image_bar dis-flex-xs">
          <div class="chev ms-5 ps-2">
            <i class="fa-solid fa-chevron-up icon-chev"></i>
          </div>
          <div class="small-img">
            <img src="source/imageOPr/{{$productinfor->imagePr}}" onclick="showImg(this.src)">
          </div>
          @foreach($images as $image)
          <div class="small-img">
            <img src="source/imageOPr/{{$image->imageProduct}}" onclick="showImg(this.src)"><br>
          </div>
          @endforeach
          <div class="chev1 ms-5 ps-2">
            <i class="fa-solid fa-chevron-up fa-rotate-180 icon-chev"></i>
          </div>
        </div>
      </div>
      <div class="infor_Detail_Pr">
        <b class="name_Deatil_Pr" >{{ $productinfor->namePr }} </b>
        <p class="namedesign_DPr">
          Designed by 
          <a href="#"  class="text-danger">{{ $productinfor->nameShop }}</a>
        </p>
        <b class="price_DPr">${{$productinfor->pricePr }}</b>

          <div class="color_DPr">
            <p><b>Color:</b>{{ $productinfor->NameColor }}</p>
            <div class="color_Detail_Pr">
              <div class="rounded-circle"><img class="rounded-circle" src="image/{{$productinfor->imageColor}}"></img></div>
            </div>
          </div>
          <form action="{{ route('add-to-cart', $productinfor->idProduct) }}">
          @csrf
          <div class="chooseSizePr" id="chooseSizePr">
              <b>Choose size:</b><br>
              <div class="sizeDetailPr">
                @foreach ($NameSizes as $fieldName => $NameSize)
                  <span class="size-option">
                      <input type="radio" id="{{ $fieldName }}" name="selectedSize" value="{{ $NameSize }}" hidden>
                      <button type="button" onclick="selectSize('{{ $fieldName }}')">{{ $NameSize }}</button>
                  </span>
                @endforeach
              </div>
          </div>

        <div class="Slimfit_Detail_Pr">
          <b>Slim fit</b>
          <p>|</p>
          <a id="sizeTableLink">Size table</a>
        </div>
        <button type="submit" id="addToCartBtn" class="btn-add-cart_DPr"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
</form>
        <div class="Other_Pr_Infor">
          <div class="d-flex">
            <i class="fa-solid fa-truck-fast"></i>
            <b>Shipping: </b>
            <p>International Standard</p>
          </div>
          <div class="d-flex">
            <i class="fa-sharp fa-solid fa-clock-rotate-left"></i>
            <b>30 days</b>
            <p>return guarantee</p>
          </div>
          <div class="d-flex">
            <i class="fa-solid fa-p"></i>
            <b>Customer reviews</b>
            <p class="evalue_DPr">
            @for($i = 0; $i < intval($productinfor->evalue); $i++)
              <i class="fa-solid fa-star"></i>
            @endfor
            </p>
            <b>{{ $productinfor->evalue}}</b>
            <p>({{ $reviews}} comment)</p>
          </div>
        </div>
      </div>
    </div>
    <div class="infor_product grid">
      <!-- inf 1 -->
      <div class="infor_product-item">
        <div class="infor_product-item-name">
          <b>Product detail</b>
          <button class="btn-minus" id="btn-minus1" data-toggle="collapse" data-target="#myCollapse1" aria-expanded="true" aria-controls="myCollapse1"><i class="fa-solid fa-plus"></i></button>
        </div>
        <div class="infor_product-item-content1"  id="myCollapse1" class="collapse">
          <div class="word">
            <b>Men's Organic T-Shirt</b>
            <p>
            {{ $opr->aboutOPr }}
            </p>
            <ul>
              <li>Brand: {{ $productinfor->Name }}</li>
              
              <li>
              {{ $opr->descriptionOPr }}
              </li>
              
            </ul>
          </div>
          <div class="inf_pr-item-image1">
            <img src="source/img-project/imprintrutgon.png" class="img-infor-pr1" alt="">
            <div class="box-product-detail">
              <b>Custom-printed for you</b>
              <div class="d-flex my-2 ms-5">
                <div class="rounded-circle"><i class="fa-solid fa-handshake-simple"></i></div>
                <p>You support independent designers width every purchase</p>
              </div>
              <div class="d-flex my-2 ms-5">
                <div class="rounded-circle"><i class="fa-solid fa-layer-group"></i></div>
                <p class="ms-5 ps-3">Huge variety of products to customize</p>
              </div>
              <div class="d-flex my-2 ms-5">
                <div class="rounded-circle"><i class="fa-sharp fa-solid fa-clock-rotate-left"></i></div>
                <p class="ms-5 ps-3">Reliable shipping and easy returns</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="cart_separate"></div>

      <!-- inf 2 -->
      <div class="infor_product-item" id="sizeTableSection">
        <div class="infor_product-item-name">
          <b>Size table</b>
          <button class="btn-minus" id="btn-minus2" data-toggle="collapse" data-target="#myCollapsePrDetail2" aria-expanded="false" aria-controls="myCollapsePrDetail2"><i class="fa-solid fa-plus"></i></button>
        </div>
        <div id="myCollapsePrDetail2" class="collapse">
          <p><b>Fit: </b>Slim fit</p>
          <p><b>Find the right size: </b>Compare these measurements with a similar product you have at home. Place the product on a flat surface to get the best results</p>
          <div class="infor_product-item-content2" >
              <div class="img-size-clothes d-block">
                <img src="source/image/size.png" alt="size">
                <div>
                  <p>A - Length in inch</p>
                  <p>B - Width in inch</p>
                  <p>C - Length in inch</p>
                </div>
              </div>
              <div class="table-size">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Size</th>
                      <th scope="col">A (inch)</th>
                      <th scope="col">B (inch)</th>
                      <th scope="col">C (inch)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">S</th>
                      <td>{{$sizewidth->S}}</td>
                      <td>{{$sizelength->S}}</td>
                      @if(!empty($sizesleeveLength->S))
                      <td>{{$sizesleeveLength->S}}</td>
                      @endif
                    </tr>
                    <tr>
                      <th scope="row">M</th>
                      <td>{{$sizewidth->M}}</td>
                      <td>{{$sizelength->M}}</td>
                      @if(!empty($sizesleeveLength->M))
                      <td>{{$sizesleeveLength->M}}</td>
                      @endif
                    </tr>
                    <tr>
                      <th scope="row">L</th>
                      <td>{{$sizewidth->L}}</td>
                      <td>{{$sizelength->L}}</td>
                      @if(!empty($eveLength->L))
                      <td>{{$eveLength->L}}</td>
                      @endif
                    </tr>
                    <tr>
                      <th scope="row">XL</th>
                      <td>{{$sizewidth->XL}}</td>
                      <td>{{$sizelength->XL}}</td>
                      @if(!empty($sizesleeveLength->XL))
                      <td>{{$sizesleeveLength->XL}}</td>
                      @endif
                    </tr>
                   
                    <tr>
                      <th scope="row">2XL</th>
                      @if(!empty($sizewidth->size2XL))
                      <td>{{$sizewidth->size2XL}}</td>
                      @endif
                      @if(!empty($sizelength->size2XL))
                      <td>{{$sizelength->size2XL}}</td>
                      @endif
                      @if(!empty($sizesleeveLength->size2XL))
                      <td>{{$sizesleeveLength->size2XL}}</td>
                      @endif
                    </tr>
                    <tr>
                      <th scope="row">3XL</th>
                      @if(!empty($sizewidth->size3XL))
                      <td>{{$sizewidth->size3XL}}</td>
                      @endif
                      @if(!empty($sizelength->size3XL))
                      <td>{{$sizelength->size3XL}}</td>
                      @endif
                      @if(!empty($sizesleeveLength->size3XL))
                      <td>{{$sizesleeveLength->size3XL}}</td>
                      @endif
                    </tr>
                    <tr>
                      <th scope="row">4XL</th>
                      @if(!empty($sizewidth->size4XL))
                      <td>{{$sizewidth->size4XL}}</td>
                      @endif
                      @if(!empty($sizelength->size4XL))
                      <td>{{$sizelength->size4XL}}</td>
                      @endif
                      @if(!empty($sizesleeveLength->size4XL))
                      <td>{{$sizesleeveLength->size4XL}}</td>
                      @endif
                    </tr>
                    <tr>
                      <th scope="row">5XL</th>
                      @if(!empty($sizewidth->size5XL))
                      <td>{{$sizewidth->size5XL}}</td>
                      @endif
                      @if(!empty($sizelength->size5XL))
                      <td>{{$sizelength->size5XL}}</td>
                      @endif
                      @if(!empty($sizesleeveLength->size5XL))
                      <td>{{$sizesleeveLength->size5XL}}</td>
                      @endif
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>

      <div class="cart_separate"></div>

      <!-- inf 3 -->
      <div class="infor_product-item">
        <div class="infor_product-item-name">
          <div>
            <b>Customer reviews</b> 
            <span class="evalue_DPr">
              <i class="fa-solid fa-star">{{$evalue}}</i>
            </span>
            <span>({{ $reviews}}) reviews</span>
          </div>
          <button class="btn-minus" id="btn-minus3" data-toggle="collapse" data-target="#myCollapse3" aria-expanded="false" aria-controls="myCollapse3"><i class="fa-solid fa-plus"></i></button>
        </div>
        <div class="infor_product-item-content3 collapse"  id="myCollapse3">
          @foreach($comment as $comment)
          <div class="item_cmt">
            <div class="item_cmt-header">
              <span class="evalue_DPr">
                @for($i = 0; $i < intval($comment->evalue); $i++)
                  <i class="fa-solid fa-star"></i>
                @endfor
              </span>
              <!-- <span><b>Color:</b> </span>
              <span><b>Size: </b>  </span> -->
            </div>
            <div class="item_cmt-body">
              <p>{{$comment->cmt}}
              </p>
            </div>
          </div>
          @endforeach
        </div>
      </div>

      <div class="cart_separate"></div>

      <!-- inf 4 -->
      <div class="infor_product-item">
        <div class="infor_product-item-name">
          <b>Design details</b> 
          <button class="btn-minus" id="btn-minus4" data-toggle="collapse" data-target="#myCollapse4" aria-expanded="false" aria-controls="myCollapse4"><i class="fa-solid fa-plus"></i></button>
        </div>
        <div class="infor_product-item-content4 collapse"  id="myCollapse4" >
          <div class="d-block">
            <div class="d-flex">
              <img src="source/imageOPr/{{$productinfor->imageDesign}}" style="border: 1px solid grey" class="img-design-detail" alt="">
              <div class="name_design-detail">
                <p>DESIGN</p>
                <b>{{$productinfor->nameDesign}}</b><br>
                <span>Designed by <a href="#" class="text-danger">{{ $productinfor->nameShop }}</a></span>
              </div>
            </div>
            <div class="word">
            {{$productinfor->descriptionDesign}}
            </div>
            <p class="report_design">Do you find the design problematic? <button class="btn-report"><i class="fa-solid fa-flag"></i> Report design </button></p>
          </div>
        </div>
      </div>

      <div class="cart_separate"></div>
    </div>
    <div class="Other_design">
      <b>More designs from tshirtcare</b>
      <div class="d-flex align-items-center w-100 justify-content-center">
        <i class="fa-solid fa-chevron-left icon-chevron"></i>
        <div class="row justify-content-center w-100">
          @foreach($otherProductShop as $other)
          <div class="column col-xl-2">
           <div class="product_img">
           @if(Session::has('user'))
           <form method="POST" action="{{ route('likePr',$other->idProduct) }}" enctype="multipart/form-data" style="width: 0px; height: 0px;">
            @csrf
                   <button type="submit"><i class="product_icon fa-regular fa-heart" style="margin-top: -10px;"></i></button>
            </form>
            @endif
                   <a href="product-detail/{{$other->idProduct}}">
                    <img class="first-img" src="source/imageOPr/{{$other->imagePr}}" alt="phone"></a>
                </div>
                <a href="product-detail/{{$other->idProduct}}" class="product_namePrDetail"><div class="product_name">
                    <span><b>{{ $other->namePr }}</b></span>
                </div></a>
                <p>{{ $other->nameShop }}</p>
                <div class="product_price">
                    <b class="price">{{ $other->pricePr }}</b>
                </div>
            </div>
          @endforeach
        </div>
        <i class="fa-solid fa-chevron-right icon-chevron"></i>
      </div>
      <div class="text-center">
        <button class="btn-showshop">All designs from tshirtcare</button>
      </div>
    </div>
    <div class="Other_design">
      <b>Customer also liked</b>
      <div class="alsolikeDetail d-flex align-items-center w-100 justify-content-center">
        <div class="chevleft">
            <i class="fa-solid fa-chevron-left" style="color: #fe5959;font-size: 30px;"></i>
        </div>
        <div class="row justify-content-center w-100">
          @foreach($otherproducts as $product )
            <div class="column col-xl-2 alsolikeImg1">
              <div class="product_imgPrDetail">
                @if(Session::has('user'))
                  <form method="POST" action="{{ route('likePr',$product->idProduct) }}" enctype="multipart/form-data" style="width: 0px; height: 0px;">
                    @csrf
                   <button type="submit"><i class="fa-regular fa-heart product_iconPrDetail product_icon"></i></button>
                  </form>
                @endif
                <a href="product-detail/{{$product->idProduct}}">
                <img class="first-img" src="source/imageOPr/{{$product->imagePr}}" alt="phone"></a>
              </div>
              <a href="product-detail/{{$product->idProduct}}" class="product_namePrDetail">
                <div class="product_name">
                  <span><b>{{ $product->namePr }}</b></span>
                </div>
              </a>
              <p style="font-size: 1.3rem">{{ $product->nameShop }}</p>
              <div class="product_price">
                <b class="price">{{ $product->pricePr }}</b>
              </div>
            </div>
          @endforeach
        </div>
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
    const bigImage = document.querySelector('.image_Detail_Pr img');

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
</script>
<script>
    // Sự kiện click cho thẻ <a> với id="sizeTableLink"
    document.getElementById('sizeTableLink').addEventListener('click', function (event) {
        // Ngăn chặn hành động mặc định của thẻ <a>
        event.preventDefault();

        // Mở collapse trước khi cuộn đến
        var collapseElement = document.getElementById('myCollapsePrDetail2');
        var isCollapsed = collapseElement.classList.contains('collapse');
        if (isCollapsed) {
            // Mở collapse nếu đang đóng
            collapseElement.classList.remove('collapse');
        }

        // Cuộn đến phần có id="sizeTableSection"
        document.getElementById('sizeTableSection').scrollIntoView({ behavior: 'smooth' });
    });
</script>
<script>
    function selectSize(fieldName) {
        // Bỏ chọn tất cả các ô radio
        document.querySelectorAll('input[name="selectedSize"]').forEach(function (radio) {
            radio.checked = false;
        });

        // Chọn ô radio tương ứng
        document.getElementById(fieldName).checked = true;
    }
   
    document.addEventListener("DOMContentLoaded", function () {
        var sizeInputs = document.querySelectorAll('input[name="selectedSize"]');
      
        sizeInputs.forEach(function (input) {
            input.addEventListener("change", function () {
                var selectedSize = document.querySelector('input[name="selectedSize"]:checked');
                var addToCartBtn = document.getElementById('addToCartBtn');
                var divChooseSize = document.getElementById('chooseSizePr');
                if (selectedSize) {
                    addToCartBtn.disabled = false;
                } else {
                    addToCartBtn.disabled = true;
                }
            });
        });   
    });

    
    document.addEventListener('DOMContentLoaded', function () {
    const alsolikeContainer = document.querySelector('.alsolikeDetail');
    const alsolikeItems = document.querySelectorAll('.alsolikeImg1');
    let currentIndex = 0;

    function showItems() {
        alsolikeItems.forEach((item, index) => {
            const isVisible = index >= currentIndex && index < currentIndex + 4;
            item.style.display = isVisible ? 'inline-block' : 'none';
        });
    }

    function updateIndex(direction) {
        const maxIndex = alsolikeItems.length - 4;
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