@extends('masterPr')
@section('contentPr')
<form action="postcheckout" method="post">
    @csrf
    <div class="containerCheckout grid">
        <div class="infor-customer mt-5">
            <div>
                <i class="fa-solid fa-location-dot mx-4 my-3" style="color: #fe5454; font-size: 2.5rem"></i> 
                <b>Delivery address</b>
            </div>
            <div class="d-flex">
                <div class="form-group w-50 me-2">
                    <label for="name" style="margin-bottom: 1px;">Name: </label>
                    <br>
                    <input type="text" name="name" id="name" class="inputAddUser" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';" required>
                </div>
                <div class="form-group w-50 ms-2">
                    <label for="phone" style="margin-bottom: 1px;">Phone: </label>
                    <br>
                    <input type="number" name="phone" id="phone" class="inputAddUser" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';" required>
                </div>
            </div>
            <div class="form-group">
                <label for="address" style="margin-bottom: 1px;">Address: </label>
                <br>
                <textarea type="number" name="address" id="address" class="inputAddUser" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';" required></textarea>
            </div>
        </div>
        @if ($product_cart)
        @php $currentProviderId = null; $total = 0; $ship = 0; $totalPayment = 0;@endphp
        @foreach ($product_cart as $id => $item)
        @php
            $productTime = 0;
            $maxShippingCost = 0;
            $totalPrice = 0;
            $count = 0;
        @endphp
        @if($currentProviderId != $item['nameprovider']['idProvider'])
        <div class="container1 my-3 px-3 py-3">
            <div class="sp1">
                        <div class="sp-list2-all2 d-flex w-100">
                            <b class="w-50">{{ $item['nameprovider']['Name'] }}</b>
                            <div class=" d-flex w-50">
                                <span class="sp-list1-all2"><p>Đơn giá</p></span>
                                <span class="sp-list1-all2"><p>Số lượng</p></span>
                                <span class="sp-list1-all2"><p>Design by</p></span>
                                <span class="sp-list1-all2"><p>Thành tiền</p></span>
                            </div>
                        </div>
                        @foreach ($product_cart as $id => $items)
                        @if($items['nameprovider']['idProvider'] == $item['nameprovider']['idProvider'] )

                        @if($items['detailProvider']['shippingCost'] > $maxShippingCost)
                            @php
                                $maxShippingCost = $items['detailProvider']['shippingCost'];
                            @endphp
                        @endif
                        @if($items['detailProvider']['productTime'] > $productTime)
                            @php
                                $productTime = $items['detailProvider']['productTime'];
                            @endphp
                        @endif
                        @php
                            $count = $count + 1;
                            $totalPrice += $items['pricePr'];
                        @endphp
                        <div class="sp-list3-all1 d-flex w-100">
                            <div class="d-flex w-50">
                                <img src="source/imageOPr/{{$items['item']['imagePr']}}" alt="" width="40px" height="40px">
                                <div class="ps-5">
                                    <p>{{$items['item']['namePr']}}</p>
                                    <p>Loại: {{$items['size']}}</p>
                                </div>
                            </div>
                            <div class="d-flex w-50">
                                <span class="sp-list3-all4">{{$items['item']['pricePr']}}</span>
                                <span class="sp-list3-all5">{{$items['qty']}}</span>
                                <span class="sp-list3-all5">{{$items['nameshop']['nameShop']}}</span>
                                <span class="sp-list3-all6 text-sp-11">{{$items['pricePr']}}</span>
                            </div>
                        </div>
                        @endif
                        @endforeach
            </div>
            <div class="dotted-line mt-2 sp-line2"></div>
            <div class="sp2 mt-3">
                <div class="cart-infor1 d-flex">
                    <div class="cart-infor-message d-flex">
                        <div class="cart-infor-message1">
                            <p>Lời nhắn:</p>
                        </div>
                        <div class="cart-infor-message2">
                            <input name="note{{$item['nameprovider']['idProvider']}}" placeholder="Lưu ý cho người bán...">
                        </div>
                    </div>
                    <div class="cart-infor-shipping">
                        <div class="cart-shipping-detail1 d-flex">
                            <div class="shipping-payment">
                                <p>Đơn vị vận chuyển:</p>
                            </div>
                            <div class="shipping-payment1">
                                <div class="ship1">
                                    <p>{{ $item['nameprovider']['Name'] }}</p>
                                </div>
                                <div class="ship2">
                                    <p>Thời gian chuẩn bị đơn hàng: {{$productTime}} days</p>
                                </div>
                            </div>
                            <div class="shipping-payment3 text-sp-11">
                                <p>$ {{$maxShippingCost}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dotted-line mt-2 sp-line2">
                </div>
                <div class="d-flex">
                    <div class="cart-detail1">
                        <p>Tổng số tiền ({{$count}} sản phẩm):</p>
                    </div>
                    @php
                        $total = $total + $totalPrice;
                        $totalPrice += $maxShippingCost;
                    @endphp
                    <div class="cart-detail2 text-sp-11">
                        <p>{{$totalPrice}}</p>
                    </div>
                </div>
            </div>
        </div>
        @php $currentProviderId = $item['nameprovider']['idProvider'];  $ship += $maxShippingCost; $totalPayment += $totalPrice;@endphp
        @endif
        @endforeach
        @endif
        <div class="container1">
            <div class="payment-detail1 d-flex">
                <div class="payment1">
                    <p>Phương thức thanh toán</p>
                </div>
                <div class="payment5">
                    <p>Thanh toán khi nhận hàng</p>
                </div>
            </div>
            <div class="dotted-line mt-4 sp-line14"></div>
            <div class="payment-detail3">
                <div class="d-flex">
                    <div class="text-sp-4">
                        <p>Tổng tiền hàng</p>
                    </div>
                    <div class="text-sp-5">
                        <p>{{$total}}</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="text-sp-6">
                        <p>Phí vận chuyển</p>
                    </div>
                    <div class="text-sp-7">
                        <p>{{$ship}}</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="text-sp-6">
                        <p>Tổng thanh toán</p>
                    </div>
                    <div class="text-sp-11">
                        <p>{{$totalPayment}}</p>
                    </div>
                </div>
            </div>
            <div class="dotted-line mt-2 sp-line15"></div>
            <div class="payment-detail4 d-flex mt-4">
                <div class="text-sp-12">
                    <p>Nhấn "Đặt hàng" đồng nghĩa với việc bạn đồng ý tuân theo</p>
                </div>
                <div class="text-sp-13">
                    <p>Điều khoản Paint</p>
                </div>
                <div class="text-sp-14">
                    <button type="submit">Đặt hàng</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection