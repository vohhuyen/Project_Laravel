@extends('masterPr')
@section('contentPr')
<div class="content grid">

    <div class="Product_detail grid">
      <div class="dis-flex-all">
        <div class="image_bar disnone-xs">
        @if(!empty($images->image1))
       <img src="source/imageOPr/{{$images->image1}}"><br>
       @endif
       @if(!empty($images->image2))
          <img src="source/imageOPr/{{$images->image2}}"><br>
          @endif
          @if(!empty($images->image3))
          <img src="source/imageOPr/{{$images->image3}}">
          @endif
          @if(!empty($images->image4))
          <img src="source/imageOPr/{{$images->image4}}">
          @endif
          @if(!empty($images->image5))
          <img src="source/imageOPr/{{$images->image5}}">
          @endif
          @if(!empty($images->image6))
          <img src="source/imageOPr/{{$images->image6}}">
          @endif
          @if(!empty($images->image7))
          <img src="source/imageOPr/{{$images->image7}}">
          @endif
          @if(!empty($images->image8))
          <img src="source/imageOPr/{{$images->image8}}">
          @endif
          @if(!empty($images->image9))
          <img src="source/imageOPr/{{$images->image9}}">
          @endif
          @if(!empty($images->image10))
          <img src="source/imageOPr/{{$images->image10}}">
          @endif

        </div>
        <div class="image_Detail_Pr">
          <img src="source/imageOPr/{{$productinfor->imagePr}}">
        </div>
        <div class="image_bar dis-flex-xs">
        @if(!empty($images->image1))
       <img src="source/imageOPr/{{$images->image1}}"><br>
       @endif
       @if(!empty($images->image2))
          <img src="source/imageOPr/{{$images->image2}}"><br>
          @endif
          @if(!empty($images->image3))
          <img src="source/imageOPr/{{$images->image3}}">
          @endif
          @if(!empty($images->image4))
          <img src="source/imageOPr/{{$images->image4}}">
          @endif
          @if(!empty($images->image5))
          <img src="source/imageOPr/{{$images->image5}}">
          @endif
          @if(!empty($images->image6))
          <img src="source/imageOPr/{{$images->image6}}">
          @endif
          @if(!empty($images->image7))
          <img src="source/imageOPr/{{$images->image7}}">
          @endif
          @if(!empty($images->image8))
          <img src="source/imageOPr/{{$images->image8}}">
          @endif
          @if(!empty($images->image9))
          <img src="source/imageOPr/{{$images->image9}}">
          @endif
          @if(!empty($images->image10))
          <img src="source/imageOPr/{{$images->image10}}">
          @endif
        </div>
      </div>
      <div class="infor_Detail_Pr">
        <b class="name_Deatil_Pr" >{{ $productinfor->namePr }} </b>
        <p class="namedesign_DPr">
          Designed by 
          <a href="#"  class="text-info">{{ $productinfor->nameShop }}</a>
        </p>
        <b class="price_DPr">${{$productinfor->pricePr }}</b>

          <div class="color_DPr">
            <p><b>Color:</b>{{ $productinfor->NameColor }}</p>
            <div class="color_Detail_Pr">
              <div class="rounded-circle"><img class="rounded-circle" src="image/{{$productinfor->imageColor}}"></img></div>
            </div>
          </div>
          <div class="chooseSizePr">
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
          <a href="#">Size table</a>
        </div>
        <button class="btn-add-cart_DPr"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
        <div class="Other_Pr_Infor">
          <div class="d-flex">
            <i class="fa-solid fa-truck-fast"></i>
            <b>Shipping time: </b>
            <p>International Standard Oct. 23 - Oct. 28</p>
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
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </p>
            <b>{{ $productinfor->evalue}}</b>
            <p>(66 review)</p>
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
            <img src="source/image/PRINT-removebg-preview.png" class="img-infor-pr1" alt="">
            <div class="box-product-detail">
              <b>Custom-printed for you</b>
              <div class="d-flex my-2 ms-5">
                <div class="rounded-circle"><i class="fa-solid fa-handshake-simple"></i></div>
                <p>You support independent designers width every purchase</p>
              </div>
              <div class="d-flex my-2 ms-5">
                <div class="rounded-circle"><i class="fa-solid fa-layer-group"></i></div>
                <p>Huge variety of products to customize</p>
              </div>
              <div class="d-flex my-2 ms-5">
                <div class="rounded-circle"><i class="fa-sharp fa-solid fa-clock-rotate-left"></i></div>
                <p>Reliable shipping and easy returns</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="cart_separate"></div>

      <!-- inf 2 -->
      <div class="infor_product-item">
        <div class="infor_product-item-name">
          <b>Size table</b>
          <button class="btn-minus" id="btn-minus2" data-toggle="collapse" data-target="#myCollapse2" aria-expanded="false" aria-controls="myCollapse2"><i class="fa-solid fa-plus"></i></button>
        </div>
        <div id="myCollapse2" class="collapse d-block">
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
            <span>{{ $reviews}} reviews</span>
          </div>
          <button class="btn-minus" id="btn-minus3" data-toggle="collapse" data-target="#myCollapse3" aria-expanded="false" aria-controls="myCollapse3"><i class="fa-solid fa-plus"></i></button>
        </div>
        <div class="infor_product-item-content3 collapse"  id="myCollapse3">
          @foreach($comment as $comment)
          <div class="item_cmt">
            <div class="item_cmt-header">
              <span class="evalue_DPr">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </span>
              <span><b>Color:</b> black</span>
              <span><b>Size: </b> L </span>
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
        <div class="infor_product-item-content4 collapse d-block"  id="myCollapse4" >
          <div class="d-flex">
            <img src="source/imageOPr/{{$productinfor->imageDesign}}" class="img-design-detail" alt="">
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

      <div class="cart_separate"></div>
    </div>
    <div class="Other_design">
      <b>More designs from tshirtcare</b>
      <div class="d-flex align-items-center w-100 justify-content-center">
        <i class="fa-solid fa-chevron-left icon-chevron"></i>
        <div class="row justify-content-center w-100">
          <div class="column col-xl-2">
              <div class="product_img">
                  <i class="product_icon fa-regular fa-heart"></i>
                  <img class="first-img" src="/img/product3.jpg" alt="phone">
                  <img class="last-img" src="/img/hover-product.jpg" alt="phone">
              </div>
              <div class="product_name">
                  <span>men's and women's t-shirts ...</span>
              </div>
          </div>
          <div class="column col-xl-2">
            <div class="product_img">
                <i class="product_icon fa-regular fa-heart"></i>
                <img class="first-img" src="/img/product3.jpg" alt="phone">
                <img class="last-img" src="/img/hover-product.jpg" alt="phone">
            </div>
            <div class="product_name">
                <span>men's and women's t-shirts ...</span>
            </div>
          </div>
          <div class="column col-xl-2">
            <div class="product_img">
                <i class="product_icon fa-regular fa-heart"></i>
                <img class="first-img" src="/img/product3.jpg" alt="phone">
                <img class="last-img" src="/img/hover-product.jpg" alt="phone">
            </div>
            <div class="product_name">
                <span>men's and women's t-shirts ...</span>
            </div>
          </div>
          <div class="column col-xl-2 disnone-md">
            <div class="product_img">
                <i class="product_icon fa-regular fa-heart"></i>
                <img class="first-img" src="/img/product3.jpg" alt="phone">
                <img class="last-img" src="/img/hover-product.jpg" alt="phone">
            </div>
            <div class="product_name">
                <span>men's and women's t-shirts ...</span>
            </div>
          </div>
          <div class="column col-xl-2 disnone-md">
            <div class="product_img">
                <i class="product_icon fa-regular fa-heart"></i>
                <img class="first-img" src="/img/product3.jpg" alt="phone">
                <img class="last-img" src="/img/hover-product.jpg" alt="phone">
            </div>
            <div class="product_name">
                <span>men's and women's t-shirts ...</span>
            </div>
          </div>
        </div>
        <i class="fa-solid fa-chevron-right icon-chevron"></i>
      </div>
      <div class="text-center">
        <button class="btn-showshop">All designs from tshirtcare</button>
      </div>
    </div>
    <div class="Other_design">
      <b>Similar designs</b>
      <div class="d-flex align-items-center w-100 justify-content-center">
        <i class="fa-solid fa-chevron-left icon-chevron"></i>
        <div class="row justify-content-center w-100">
          <div class="column col-xl-2">
              <div class="product_img">
                  <i class="product_icon fa-regular fa-heart"></i>
                  <img class="first-img" src="/img/product3.jpg" alt="phone">
                  <img class="last-img" src="/img/hover-product.jpg" alt="phone">
              </div>
              <div class="product_name">
                  <span>men's and women's t-shirts ...</span>
              </div>
          </div>
          <div class="column col-xl-2">
            <div class="product_img">
                <i class="product_icon fa-regular fa-heart"></i>
                <img class="first-img" src="/img/product3.jpg" alt="phone">
                <img class="last-img" src="/img/hover-product.jpg" alt="phone">
            </div>
            <div class="product_name">
                <span>men's and women's t-shirts ...</span>
            </div>
          </div>
          <div class="column col-xl-2">
            <div class="product_img">
                <i class="product_icon fa-regular fa-heart"></i>
                <img class="first-img" src="/img/product3.jpg" alt="phone">
                <img class="last-img" src="/img/hover-product.jpg" alt="phone">
            </div>
            <div class="product_name">
                <span>men's and women's t-shirts ...</span>
            </div>
          </div>
          <div class="column col-xl-2 disnone-md">
            <div class="product_img">
                <i class="product_icon fa-regular fa-heart"></i>
                <img class="first-img" src="/img/product3.jpg" alt="phone">
                <img class="last-img" src="/img/hover-product.jpg" alt="phone">
            </div>
            <div class="product_name">
                <span>men's and women's t-shirts ...</span>
            </div>
          </div>
          <div class="column col-xl-2 disnone-md">
            <div class="product_img">
                <i class="product_icon fa-regular fa-heart"></i>
                <img class="first-img" src="/img/product3.jpg" alt="phone">
                <img class="last-img" src="/img/hover-product.jpg" alt="phone">
            </div>
            <div class="product_name">
                <span>men's and women's t-shirts ...</span>
            </div>
          </div>
        </div>
        <i class="fa-solid fa-chevron-right icon-chevron"></i>
      </div>
    </div>
    <div class="Other_design">
      <b>Customer also liked</b>
      <div class="d-flex align-items-center w-100 justify-content-center">
        <i class="fa-solid fa-chevron-left icon-chevron"></i>
        <div class="row justify-content-center w-100">
          <div class="column col-xl-2">
              <div class="product_img">
                  <i class="product_icon fa-regular fa-heart"></i>
                  <img class="first-img" src="/img/product3.jpg" alt="phone">
                  <img class="last-img" src="/img/hover-product.jpg" alt="phone">
              </div>
              <div class="product_name">
                  <span>men's and women's t-shirts ...</span>
              </div>
          </div>
          <div class="column col-xl-2">
            <div class="product_img">
                <i class="product_icon fa-regular fa-heart"></i>
                <img class="first-img" src="/img/product3.jpg" alt="phone">
                <img class="last-img" src="/img/hover-product.jpg" alt="phone">
            </div>
            <div class="product_name">
                <span>men's and women's t-shirts ...</span>
            </div>
          </div>
          <div class="column col-xl-2">
            <div class="product_img">
                <i class="product_icon fa-regular fa-heart"></i>
                <img class="first-img" src="/img/product3.jpg" alt="phone">
                <img class="last-img" src="/img/hover-product.jpg" alt="phone">
            </div>
            <div class="product_name">
                <span>men's and women's t-shirts ...</span>
            </div>
          </div>
          <div class="column col-xl-2 disnone-md">
            <div class="product_img">
                <i class="product_icon fa-regular fa-heart"></i>
                <img class="first-img" src="/img/product3.jpg" alt="phone">
                <img class="last-img" src="/img/hover-product.jpg" alt="phone">
            </div>
            <div class="product_name">
                <span>men's and women's t-shirts ...</span>
            </div>
          </div>
          <div class="column col-xl-2 disnone-md">
            <div class="product_img">
                <i class="product_icon fa-regular fa-heart"></i>
                <img class="first-img" src="/img/product3.jpg" alt="phone">
                <img class="last-img" src="/img/hover-product.jpg" alt="phone">
            </div>
            <div class="product_name">
                <span>men's and women's t-shirts ...</span>
            </div>
          </div>
        </div>
        <i class="fa-solid fa-chevron-right icon-chevron"></i>
      </div>
    </div>
</div>
<script>
    function selectSize(fieldName) {
        // Bỏ chọn tất cả các ô radio
        document.querySelectorAll('input[name="selectedSize"]').forEach(function (radio) {
            radio.checked = false;
        });

        // Chọn ô radio tương ứng
        document.getElementById(fieldName).checked = true;
    }
</script>
@endsection