@extends('masterPr')
@section('contentPr')
<div class="content grid">
    <div class="Product_detail grid">
      <div class="dis-flex-all">
        <div class="image_bar disnone-xs">
          <img src="/image/image_Pr.webp" alt="imagePr"><br>
          <img src="/image/image_Pr2.jpg" alt="imagePr2"><br>
          <img src="/image/image_Pr3.jpg" alt="imagePr3">
        </div>
        <div class="image_Detail_Pr">
          <img src="/image/image_Pr2.jpg" alt="imagePr2">
        </div>
        <div class="image_bar dis-flex-xs">
          <img src="/image/image_Pr.webp" alt="imagePr"><br>
          <img src="/image/image_Pr2.jpg" alt="imagePr2"><br>
          <img src="/image/image_Pr3.jpg" alt="imagePr3">
        </div>
      </div>
      <div class="infor_Detail_Pr">
        <b class="name_Deatil_Pr">The nobel element T shirt Design Fathers Day Men’s Organic T-Shirt</b>
        <p class="namedesign_DPr">
          Designed by 
          <a href="#"  class="text-info">tshirtcare</a>
        </p>
        <b class="price_DPr">$26.99</b>

          <div class="color_DPr">
            <p><b>Color:</b> heather gray </p>
            <div class="color_Detail_Pr">
              <div class="rounded-circle bg-black"></div>
              <div class="rounded-circle bg-danger"></div>
              <div class="rounded-circle bg-white"></div>
              <div class="rounded-circle bg-primary"></div>
            </div>
          </div>
          <div class="chooseSizePr">
            <b>Choose size:</b><br>
            <div class="sizeDetailPr">
              <button>S</button>
              <button>M</button>
              <button>L</button>
              <button>XL</button>
              <button>2XL</button>
              <button>3XL</button>
              <button>4XL</button>
              <button>5XL</button>
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
            <b>5</b>
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
              Get this: you can look while being environmentally consciou.
              The men's premium organic t-shirt is made up of 100% organic cotton, 
              making it green and comfy. Plus, the shirt promises the best-possible print sesults
              , making it an excellent choice for those looking to customize.
            </p>
            <ul>
              <li>Brand: Paint</li>
              <li>Fabric weight: 4.42oz (lightweight)</li>
              <li>Material: 100% organic cotton (charcoal grey is 80% organic cotton/20%
               recycled polyester, heather gray is 95% organic cotton/5% viscode)
              </li>
              <li>Imported product, printed & processed in the USA</li>
            </ul>
          </div>
          <div class="inf_pr-item-image1">
            <img src="/image/PRINT-removebg-preview.png" class="img-infor-pr1" alt="">
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
        <div id="myCollapse2" class="collapse">
          <p><b>Fit: </b>Slim fit</p>
          <p><b>Find the right size: </b>Compare these measurements with a similar product you have at home. Place the product on a flat surface to get the best results</p>
          <div class="infor_product-item-content2" >
              <div class="img-size-clothes">
                <img src="/image/size.png" alt="size">
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
                      <td>26.50</td>
                      <td>17.48</td>
                      <td>7.99</td>
                    </tr>
                    <tr>
                      <th scope="row">M</th>
                      <td>27.48</td>
                      <td>20.00</td>
                      <td>8.27</td>
                    </tr>
                    <tr>
                      <th scope="row">L</th>
                      <td>28.46</td>
                      <td>21.50</td>
                      <td>8.98</td>
                    </tr>
                    <tr>
                      <th scope="row">XL</th>
                      <td>30.24</td>
                      <td>23.98</td>
                      <td>9.25</td>
                    </tr>
                    <tr>
                      <th scope="row">2XL</th>
                      <td>31.50</td>
                      <td>25.47</td>
                      <td>9.45</td>
                    </tr>
                    <tr>
                      <th scope="row">3XL</th>
                      <td>31.97</td>
                      <td>27.72</td>
                      <td>10.24</td>
                    </tr>
                    <tr>
                      <th scope="row">4XL</th>
                      <td>32.99</td>
                      <td>29.49</td>
                      <td>10.51</td>
                    </tr>
                    <tr>
                      <th scope="row">5XL</th>
                      <td>33.98</td>
                      <td>31.50</td>
                      <td>10.98</td>
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
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </span>
            <span>(66 reviews)</span>
          </div>
          <button class="btn-minus" id="btn-minus3" data-toggle="collapse" data-target="#myCollapse3" aria-expanded="false" aria-controls="myCollapse3"><i class="fa-solid fa-plus"></i></button>
        </div>
        <div class="infor_product-item-content3 collapse"  id="myCollapse3">
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
              <p>At firt it' look good but when i washed it first time it shrunk a little but.
                A little bit tight now. I hope it will not shrink more on succeeding wash
              </p>
            </div>
          </div>
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
              <p>At firt it' look good but when i washed it first time it shrunk a little but.
                A little bit tight now. I hope it will not shrink more on succeeding wash
              </p>
            </div>
          </div>
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
              <p>At firt it' look good but when i washed it first time it shrunk a little but.
                A little bit tight now. I hope it will not shrink more on succeeding wash
              </p>
            </div>
          </div>
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
              <p>At firt it' look good but when i washed it first time it shrunk a little but.
                A little bit tight now. I hope it will not shrink more on succeeding wash
              </p>
            </div>
          </div>
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
              <p>At firt it' look good but when i washed it first time it shrunk a little but.
                A little bit tight now. I hope it will not shrink more on succeeding wash
              </p>
            </div>
          </div>
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
              <p>At firt it' look good but when i washed it first time it shrunk a little but.
                A little bit tight now. I hope it will not shrink more on succeeding wash
              </p>
            </div>
          </div>
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
              <p>At firt it' look good but when i washed it first time it shrunk a little but.
                A little bit tight now. I hope it will not shrink more on succeeding wash
              </p>
            </div>
          </div>
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
              <p>At firt it' look good but when i washed it first time it shrunk a little but.
                A little bit tight now. I hope it will not shrink more on succeeding wash
              </p>
            </div>
          </div>
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
          <div class="d-flex">
            <img src="/image/design_detail.jpg" class="img-design-detail" alt="">
            <div class="name_design-detail">
              <p>DESIGN</p>
              <b>The nobel element T shirt Design Fathers Day</b><br>
              <span>Designed by <a href="#" class="text-danger">tshirtcare</a></span>
            </div>
          </div>
          <div class="word">
            Buy fathers day t shirts for gifts or presents. Choose your favorite happy
            fathers day t-shirts with unique high quantity print & design. Funny fathers day
            ideas & gifts for mom shirts, tops, sweathir
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
@endsection