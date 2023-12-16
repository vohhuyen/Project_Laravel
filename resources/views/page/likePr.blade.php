@extends('masterPr')
@section('contentPr')
<section class="section grid">
        <div class="section_left w-100">
          <div class="section_header w-100">
            <ul class="nav_bar-item-left w-100">
              <li>
                <b class="title">YOUR LIKE  PRODUCT</b>
              </li>
              <li>
                <span class="title_item">{{ $LPC}} products</span>
              </li>
              <li class="navbar-separate3"></li>
            </ul>
            <div class="box_message w-100">Free shipping when buying from 5 products - and many other offers</div>
            <div class="cart_separate1 w-100"></div>
          </div>

          <div class="section_article w-100">
            <table class="w-100">
              <tbody class="w-100">
                @foreach($product as $products )
                  <tr class="section_article-item w-100">
                  <a href="product-detail/{{$products->idProduct}}"><td class="img_item"><img src="source/imageOPr/{{$products->imagePr}}" alt="product" /></td></a>
                  <a href="product-detail/{{$products->idProduct}}"> <td class="infor_item">
                        <b class="namePr">{{ $products->namePr }}</b>
                      </td></a>
                      <td class="price1"><p>${{$products->pricePr}}</p></td>
                      <form method="POST" action="{{ route('deletelikePr',$products->idProduct) }}" enctype="multipart/form-data">
                      @csrf
                      <td class="button"><button type="submit"><p class="fa-light fa-x"></p></button></td>
                      </form>
                  </tr>
                  @endforeach
              
              </tbody>
            </table>
          </div>
          <div class="section_article-xs w-100">
            <table class="w-100">
              <tbody class="w-100">
                <tr class="section_article-item-xs w-100 ">
                    <td class="img_item-xs"><img src="/img/product2.jpg" alt="product" /></td>
                    <td class="infor_item-xs">
                      <b class="namePr-xs">High quality men's and women's t-shirts</b>
                      <p class="if_item-xs">Size M, cotton</p>
          
                      <div class="d-flex">
                        <button class="button_item1-xs">-</button>
                        <div class="quantity_item-xs">1</div>
                        <button class="button_item2-xs">+</button>
                      </div>
                    </td>
      
                    <td class="price1-xs">
                      <p>$ 26,70</p>
                      <div class="sale-xs">30% off</div>
                    </td>
                    <td class="button-xs"><button class="delete-xs"><p class="fa-light fa-x"></p></button></td>
                </tr>
                <tr class="section_article-item-xs w-100">
                  <td class="img_item-xs"><img src="/img/product2.jpg" alt="product" /></td>
                  <td class="infor_item-xs">
                    <b class="namePr-xs">High quality men's and women's t-shirts</b>
                    <p class="if_item-xs">Size M, cotton</p>
        
                    <div class="d-flex">
                      <button class="button_item1-xs">-</button>
                      <div class="quantity_item-xs">1</div>
                      <button class="button_item2-xs">+</button>
                    </div>
                  </td>
    
                  <td class="price1-xs">
                    <p>$ 26,70</p>
                    <div class="sale-xs">30% off</div>
                  </td>
                  <td class="button-xs"><button class="delete-xs"><p class="fa-light fa-x"></p></button></td>
                </tr>
                <tr class="section_article-item-xs w-100">
                    <td class="img_item-xs"><img src="/img/product2.jpg" alt="product" /></td>
                    <td class="infor_item-xs">
                        <b class="namePr-xs">High quality men's and women's t-shirts</b>
                        <p class="if_item-xs">Size M, cotton</p>
            
                        <div class="d-flex">
                        <button class="button_item1-xs">-</button>
                        <div class="quantity_item-xs">1</div>
                        <button class="button_item2-xs">+</button>
                        </div>
                    </td>

                    <td class="price1-xs">
                        <p>$ 26,70</p>
                        <div class="sale-xs">30% off</div>
                    </td>
                    <td class="button-xs"><button class="delete-xs"><p class="fa-light fa-x"></p></button></td>
                </tr>
                <tr class="section_article-item-xs w-100">
                    <td class="img_item-xs"><img src="/img/product2.jpg" alt="product" /></td>
                    <td class="infor_item-xs">
                        <b class="namePr-xs">High quality men's and women's t-shirts</b>
                        <p class="if_item-xs">Size M, cotton</p>
            
                        <div class="d-flex">
                        <button class="button_item1-xs">-</button>
                        <div class="quantity_item-xs">1</div>
                        <button class="button_item2-xs">+</button>
                        </div>
                    </td>

                    <td class="price1-xs">
                        <p>$ 26,70</p>
                        <div class="sale-xs">30% off</div>
                    </td>
                    <td class="button-xs"><button class="delete-xs"><p class="fa-light fa-x"></p></button></td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="cart_separate1 w-100"></div>
        </div>
        
      </section>

@endsection