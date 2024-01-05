@extends('masterPr')
@section('contentPr')
<section class="section grid">
        <div class="section_left">
          <div class="section_header">
            <ul class="nav_bar-item-left">
              <li>
                <b class="title">YOUR CART</b>
              </li>
              <li>
                <span class="title_item">@if(Session::has('cart')){{Session('cart')->totalQty}}@else 0 @endif products</span>
              </li>
              <li class="navbar-separate3"></li>
            </ul>
            <div class="box_message">Free shipping when buying from 5 products - and many other offers</div>
            <div class="cart_separate1"></div>
          </div>

          <div class="section_article">
            <table>
              <tbody>
              @if(Session::has('cart'))
              @foreach($product_cart as $product)
                <tr class="section_article-item" id="cart-item{{$product['item']['id']}}">
                    <td class="img_item"><img src="source/imageOPr/{{$product['item']['imagePr']}}" alt="product" /></td>
                    <td class="infor_item">
                      <b class="namePr">{{$product['item']['namePr']}}</b><br>
                      <b class="if_item">Size: {{$product['size']}}</b>
                      <div class="if_item"><b>Design by: </b> {{$product['nameshop']['nameShop']}}</div>
                      <div class="if_item"><b>Provided by: </b> {{$product['nameprovider']['Name']}}</div>
                    </td>
                    <td class="price2"><p>$ {{$product['item']['pricePr']}}</p></td>
                    <form action="{{ route('decrease-quantity', ['productId' => $product['item']['idProduct'], 'size' => $product['size']])}}" method="post" style="display:inline;">
            @csrf
                    <td><button type="submit" class="button_item1">-</button></td>
</form>
                    <td><div class="quantity_item">{{$product['qty']}}</div></td>
                    <form action="{{ route('increase-quantity', ['productId' => $product['item']['idProduct'], 'size' => $product['size']]) }}" method="post" style="display:inline;">
            @csrf
                    <td><button type="submit" class="button_item2">+</button></td>
</form>
                    <td class="price1"><p>$ {{$product['pricePr']}}</p></td>
                    <form action="{{ route('delete-item', ['productId' => $product['item']['idProduct'], 'size' => $product['size']]) }}" method="post" style="display:inline;">
            @csrf
                    <td class="button"><button class="delete"><p class="fa-light fa-x"></p></button></td>
</form>
                </tr>
              @endforeach
              @endif
              </tbody>
            </table>
          </div>
          
          <div class="cart_separate1"></div>
          <button class="buttoncheckout"><a href="{{route('indexcheckout')}}">Checkout</a></button>
        </div>
        
      </section>
@endsection