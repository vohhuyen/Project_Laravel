@extends('masterPr')
@section('contentPr')
    <div class="main-container d-flex grid">
        <div class="container-pageuser ms-5">
            <div class="d-flex mt-5">
                <div class="profile-infor my-5">
                    <b>thanh_huyen11</b>
                </div>
            </div>
            <div class="list">
                <div class="list2 my-3">
                    <p><i class="fa-solid fa-user" style="color: #062b9a;"></i> My account </p>
                </div>
                <div class="list3 my-3">
                    <p><i class="fa-solid fa-table" style="color: #062b9a;"></i> Cart </p>
                </div>
                <div class="list4 my-3">
                    <p><i class="fa-solid fa-bell" style="color: #fe5454;"></i> Notification </p>
                </div>
                <div class="list5 my-3">
                    <p><i class="fa-solid fa-store" style="color: #fe5454;"></i> My store </p>
                </div>
            </div>
        </div>
        <div class="container2">
            <div class="main-container2">
                <div class="main-list1 d-flex">
                    <div class="m-lg-4"> Tất cả</div>
                    <div class="m-lg-4"> Chờ shop duyet don</div>
                    <div class="m-lg-4"> Chuan bi hang</div>
                    <div class="m-lg-4"> giao hàng</div>
                    <div class="m-lg-4"> Hoàn thành</div>
                    <div class="m-lg-4"> Đã huỷ</div>
                    <div class="m-lg-4"> Trả hàng/Hoàn tiền</div>
                </div>
                @php $currentProviderId = null; @endphp
                @foreach($order as $item)
                @if($currentProviderId != $item->idOrder)
                
                <div class="content-list content-list1 main-list3 mt-3 px-4 py-4">
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <div>
                            <b>Mê Game Store</b>
                        </div>
                        <div>
                            @if($item->received == 0)
                                <p style="color: #fe5454;">Wait provider accept</p>
                            @elseif($item->received == 1)
                                <p style="color: #fe5454;">Preparing orders </p>
                            @elseif($item->received == 2)
                                <p style="color: #fe5454;">SHIP</p>
                            @elseif($item->received == 3)
                                <p style="color: #fe5454;">DONE</p>
                            @else
                                <p style="color: #fe5454;">CANCEL</p>
                            @endif
                        </div>
                    </div>
                    <div class="linepageuser"></div>
                    @foreach($order as $orders)
                    @if($orders->idOrder == $item->idOrder )   
                    @php $total = $orders->pricePr * $orders->quantity @endphp
                    <div class="store2 d-flex mt-3 justify-content-between align-items-center">
                        <div class="store2-all1 d-flex align-items-center">
                            <img class="me-3" src="source/imageOPr/{{$orders->imagePr}}" alt="" width="90px">
                            <div class="store2-all2">
                                <p>{{$orders->namePr}}</p>
                                <p style="font-size: 16px;color: gray;margin-top:-12px;">{{$orders->classify}}</p>
                                <p style="font-size: 14px;margin-top: -12px">{{$orders->quantity}}</p>
                            </div>
                        </div>
                        <div class="store2-all3">
                        {{$total}}
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="linepageuser mt-3"></div>
                    <div class="store4 d-flex justify-content-end">
                        <div class="store4-all2">
                            <div class="store4-all-list1 d-flex mt-4" style="margin-left: 350px;">
                                <div class="list-store1"><i class="fa-brands fa-css3" style="color: #fe5454;"></i></div>
                                <div class="list-store1" >Thành tiền: </div>
                                <div class="list-store1 ms-3" style="color: #fe5454;">
                                {{$item->totalPrice}}</div>
                            </div>
                            <div class="store4-all-list2 d-flex mt-3 justify-content-end">
                                <div class="assess1 text-white d-flex justify-content-center align-items-center"
                                    style="width: 150px;height: 45px;background-color: #fe5454;border-radius: 3%;">
                                    <p>Mua lai</p>
                                </div>
                                <div class="assess2 d-flex justify-content-center align-items-center"
                                    style="width: 220px;border-radius: 2%;margin-left: 10px;border: 0.5px solid rgb(213, 213, 213);">
                                    <p>Danh gia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                @if($item->received == 0)
                <div class="content-list list content-list2 main-list3 mt-3 px-4 py-4">
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <div>
                            <b>Mê Game Store</b>
                        </div>
                        <div>
                            @if($item->received == 0)
                                <p style="color: #fe5454;">Wait provider accept</p>
                            @elseif($item->received == 1)
                                <p style="color: #fe5454;">Preparing orders </p>
                            @elseif($item->received == 2)
                                <p style="color: #fe5454;">SHIP</p>
                            @elseif($item->received == 3)
                                <p style="color: #fe5454;">DONE</p>
                            @else
                                <p style="color: #fe5454;">CANCEL</p>
                            @endif
                        </div>
                    </div>
                    <div class="linepageuser"></div>
                    @foreach($order as $orders)
                    @if($orders->idOrder == $item->idOrder )   
                    @php $total = $orders->pricePr * $orders->quantity @endphp
                    <div class="store2 d-flex mt-3 justify-content-between align-items-center">
                        <div class="store2-all1 d-flex align-items-center">
                            <img class="me-3" src="source/imageOPr/{{$orders->imagePr}}" alt="" width="90px">
                            <div class="store2-all2">
                                <p>{{$orders->namePr}}</p>
                                <p style="font-size: 16px;color: gray;margin-top:-12px;">{{$orders->classify}}</p>
                                <p style="font-size: 14px;margin-top: -12px">{{$orders->quantity}}</p>
                            </div>
                        </div>
                        <div class="store2-all3">
                        {{$total}}
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="linepageuser mt-3"></div>
                    <div class="store4 d-flex justify-content-end">
                        <div class="store4-all2">
                            <div class="store4-all-list1 d-flex mt-4" style="margin-left: 350px;">
                                <div class="list-store1"><i class="fa-brands fa-css3" style="color: #fe5454;"></i></div>
                                <div class="list-store1" >Thành tiền: </div>
                                <div class="list-store1 ms-3" style="color: #fe5454;">
                                {{$item->totalPrice}}</div>
                            </div>
                            <div class="store4-all-list2 d-flex mt-3 justify-content-end">
                                <div class="assess1 text-white d-flex justify-content-center align-items-center"
                                    style="width: 150px;height: 45px;background-color: #fe5454;border-radius: 3%;">
                                    <p>Mua lai</p>
                                </div>
                                <div class="assess2 d-flex justify-content-center align-items-center"
                                    style="width: 220px;border-radius: 2%;margin-left: 10px;border: 0.5px solid rgb(213, 213, 213);">
                                    <p>Danh gia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($item->received == 1)
                <div class="content-list list content-list3 main-list3 mt-3 px-4 py-4">
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <div>
                            <b>Mê Game Store</b>
                        </div>
                        <div>
                            @if($item->received == 0)
                                <p style="color: #fe5454;">Wait provider accept</p>
                            @elseif($item->received == 1)
                                <p style="color: #fe5454;">Preparing orders </p>
                            @elseif($item->received == 2)
                                <p style="color: #fe5454;">SHIP</p>
                            @elseif($item->received == 3)
                                <p style="color: #fe5454;">DONE</p>
                            @else
                                <p style="color: #fe5454;">CANCEL</p>
                            @endif
                        </div>
                    </div>
                    <div class="linepageuser"></div>
                    @foreach($order as $orders)
                    @if($orders->idOrder == $item->idOrder )   
                    @php $total = $orders->pricePr * $orders->quantity @endphp
                    <div class="store2 d-flex mt-3 justify-content-between align-items-center">
                        <div class="store2-all1 d-flex align-items-center">
                            <img class="me-3" src="source/imageOPr/{{$orders->imagePr}}" alt="" width="90px">
                            <div class="store2-all2">
                                <p>{{$orders->namePr}}</p>
                                <p style="font-size: 16px;color: gray;margin-top:-12px;">{{$orders->classify}}</p>
                                <p style="font-size: 14px;margin-top: -12px">{{$orders->quantity}}</p>
                            </div>
                        </div>
                        <div class="store2-all3">
                        {{$total}}
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="linepageuser mt-3"></div>
                    <div class="store4 d-flex justify-content-end">
                        <div class="store4-all2">
                            <div class="store4-all-list1 d-flex mt-4" style="margin-left: 350px;">
                                <div class="list-store1"><i class="fa-brands fa-css3" style="color: #fe5454;"></i></div>
                                <div class="list-store1" >Thành tiền: </div>
                                <div class="list-store1 ms-3" style="color: #fe5454;">
                                {{$item->totalPrice}}</div>
                            </div>
                            <div class="store4-all-list2 d-flex mt-3 justify-content-end">
                                <div class="assess1 text-white d-flex justify-content-center align-items-center"
                                    style="width: 150px;height: 45px;background-color: #fe5454;border-radius: 3%;">
                                    <p>Mua lai</p>
                                </div>
                                <div class="assess2 d-flex justify-content-center align-items-center"
                                    style="width: 220px;border-radius: 2%;margin-left: 10px;border: 0.5px solid rgb(213, 213, 213);">
                                    <p>Danh gia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($item->received == 2)
                <div class="content-list list content-list4 main-list3 mt-3 px-4 py-4">
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <div>
                            <b>Mê Game Store</b>
                        </div>
                        <div>
                            @if($item->received == 0)
                                <p style="color: #fe5454;">Wait provider accept</p>
                            @elseif($item->received == 1)
                                <p style="color: #fe5454;">Preparing orders </p>
                            @elseif($item->received == 2)
                                <p style="color: #fe5454;">SHIP</p>
                            @elseif($item->received == 3)
                                <p style="color: #fe5454;">DONE</p>
                            @else
                                <p style="color: #fe5454;">CANCEL</p>
                            @endif
                        </div>
                    </div>
                    <div class="linepageuser"></div>
                    @foreach($order as $orders)
                    @if($orders->idOrder == $item->idOrder )   
                    @php $total = $orders->pricePr * $orders->quantity @endphp
                    <div class="store2 d-flex mt-3 justify-content-between align-items-center">
                        <div class="store2-all1 d-flex align-items-center">
                            <img class="me-3" src="source/imageOPr/{{$orders->imagePr}}" alt="" width="90px">
                            <div class="store2-all2">
                                <p>{{$orders->namePr}}</p>
                                <p style="font-size: 16px;color: gray;margin-top:-12px;">{{$orders->classify}}</p>
                                <p style="font-size: 14px;margin-top: -12px">{{$orders->quantity}}</p>
                            </div>
                        </div>
                        <div class="store2-all3">
                        {{$total}}
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="linepageuser mt-3"></div>
                    <div class="store4 d-flex justify-content-end">
                        <div class="store4-all2">
                            <div class="store4-all-list1 d-flex mt-4" style="margin-left: 350px;">
                                <div class="list-store1"><i class="fa-brands fa-css3" style="color: #fe5454;"></i></div>
                                <div class="list-store1" >Thành tiền: </div>
                                <div class="list-store1 ms-3" style="color: #fe5454;">
                                {{$item->totalPrice}}</div>
                            </div>
                            <div class="store4-all-list2 d-flex mt-3 justify-content-end">
                                <div class="assess1 text-white d-flex justify-content-center align-items-center"
                                    style="width: 150px;height: 45px;background-color: #fe5454;border-radius: 3%;">
                                    <p>Mua lai</p>
                                </div>
                                <div class="assess2 d-flex justify-content-center align-items-center"
                                    style="width: 220px;border-radius: 2%;margin-left: 10px;border: 0.5px solid rgb(213, 213, 213);">
                                    <p>Danh gia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($item->received == 3)
                <div class="content-list list content-list5 main-list3 mt-3 px-4 py-4">
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <div>
                            <b>Mê Game Store</b>
                        </div>
                        <div>
                            @if($item->received == 0)
                                <p style="color: #fe5454;">Wait provider accept</p>
                            @elseif($item->received == 1)
                                <p style="color: #fe5454;">Preparing orders </p>
                            @elseif($item->received == 2)
                                <p style="color: #fe5454;">SHIP</p>
                            @elseif($item->received == 3)
                                <p style="color: #fe5454;">DONE</p>
                            @else
                                <p style="color: #fe5454;">CANCEL</p>
                            @endif
                        </div>
                    </div>
                    <div class="linepageuser"></div>
                    @foreach($order as $orders)
                    @if($orders->idOrder == $item->idOrder )   
                    @php $total = $orders->pricePr * $orders->quantity @endphp
                    <div class="store2 d-flex mt-3 justify-content-between align-items-center">
                        <div class="store2-all1 d-flex align-items-center">
                            <img class="me-3" src="source/imageOPr/{{$orders->imagePr}}" alt="" width="90px">
                            <div class="store2-all2">
                                <p>{{$orders->namePr}}</p>
                                <p style="font-size: 16px;color: gray;margin-top:-12px;">{{$orders->classify}}</p>
                                <p style="font-size: 14px;margin-top: -12px">{{$orders->quantity}}</p>
                            </div>
                        </div>
                        <div class="store2-all3">
                        {{$total}}
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="linepageuser mt-3"></div>
                    <div class="store4 d-flex justify-content-end">
                        <div class="store4-all2">
                            <div class="store4-all-list1 d-flex mt-4" style="margin-left: 350px;">
                                <div class="list-store1"><i class="fa-brands fa-css3" style="color: #fe5454;"></i></div>
                                <div class="list-store1" >Thành tiền: </div>
                                <div class="list-store1 ms-3" style="color: #fe5454;">
                                {{$item->totalPrice}}</div>
                            </div>
                            <div class="store4-all-list2 d-flex mt-3 justify-content-end">
                                <div class="assess1 text-white d-flex justify-content-center align-items-center"
                                    style="width: 150px;height: 45px;background-color: #fe5454;border-radius: 3%;">
                                    <p>Mua lai</p>
                                </div>
                                <div class="assess2 d-flex justify-content-center align-items-center"
                                    style="width: 220px;border-radius: 2%;margin-left: 10px;border: 0.5px solid rgb(213, 213, 213);">
                                    <p>Danh gia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($item->received == 4)
                <div class="content-list list content-list6 main-list3 mt-3 px-4 py-4">
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <div>
                            <b>Mê Game Store</b>
                        </div>
                        <div>
                            @if($item->received == 0)
                                <p style="color: #fe5454;">Wait provider accept</p>
                            @elseif($item->received == 1)
                                <p style="color: #fe5454;">Preparing orders </p>
                            @elseif($item->received == 2)
                                <p style="color: #fe5454;">SHIP</p>
                            @elseif($item->received == 3)
                                <p style="color: #fe5454;">DONE</p>
                            @else
                                <p style="color: #fe5454;">CANCEL</p>
                            @endif
                        </div>
                    </div>
                    <div class="linepageuser"></div>
                    @foreach($order as $orders)
                    @if($orders->idOrder == $item->idOrder )   
                    @php $total = $orders->pricePr * $orders->quantity @endphp
                    <div class="store2 d-flex mt-3 justify-content-between align-items-center">
                        <div class="store2-all1 d-flex align-items-center">
                            <img class="me-3" src="source/imageOPr/{{$orders->imagePr}}" alt="" width="90px">
                            <div class="store2-all2">
                                <p>{{$orders->namePr}}</p>
                                <p style="font-size: 16px;color: gray;margin-top:-12px;">{{$orders->classify}}</p>
                                <p style="font-size: 14px;margin-top: -12px">{{$orders->quantity}}</p>
                            </div>
                        </div>
                        <div class="store2-all3">
                        {{$total}}
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="linepageuser mt-3"></div>
                    <div class="store4 d-flex justify-content-end">
                        <div class="store4-all2">
                            <div class="store4-all-list1 d-flex mt-4" style="margin-left: 350px;">
                                <div class="list-store1"><i class="fa-brands fa-css3" style="color: #fe5454;"></i></div>
                                <div class="list-store1" >Thành tiền: </div>
                                <div class="list-store1 ms-3" style="color: #fe5454;">
                                {{$item->totalPrice}}</div>
                            </div>
                            <div class="store4-all-list2 d-flex mt-3 justify-content-end">
                                <div class="assess1 text-white d-flex justify-content-center align-items-center"
                                    style="width: 150px;height: 45px;background-color: #fe5454;border-radius: 3%;">
                                    <p>Mua lai</p>
                                </div>
                                <div class="assess2 d-flex justify-content-center align-items-center"
                                    style="width: 220px;border-radius: 2%;margin-left: 10px;border: 0.5px solid rgb(213, 213, 213);">
                                    <p>Danh gia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($item->received == 5)
                <div class="content-list list content-list7 main-list3 mt-3 px-4 py-4">
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <div>
                            <b>Mê Game Store</b>
                        </div>
                        <div>
                            @if($item->received == 0)
                                <p style="color: #fe5454;">Wait provider accept</p>
                            @elseif($item->received == 1)
                                <p style="color: #fe5454;">Preparing orders </p>
                            @elseif($item->received == 2)
                                <p style="color: #fe5454;">SHIP</p>
                            @elseif($item->received == 3)
                                <p style="color: #fe5454;">DONE</p>
                            @else
                                <p style="color: #fe5454;">CANCEL</p>
                            @endif
                        </div>
                    </div>
                    <div class="linepageuser"></div>
                    @foreach($order as $orders)
                    @if($orders->idOrder == $item->idOrder )   
                    @php $total = $orders->pricePr * $orders->quantity @endphp
                    <div class="store2 d-flex mt-3 justify-content-between align-items-center">
                        <div class="store2-all1 d-flex align-items-center">
                            <img class="me-3" src="source/imageOPr/{{$orders->imagePr}}" alt="" width="90px">
                            <div class="store2-all2">
                                <p>{{$orders->namePr}}</p>
                                <p style="font-size: 16px;color: gray;margin-top:-12px;">{{$orders->classify}}</p>
                                <p style="font-size: 14px;margin-top: -12px">{{$orders->quantity}}</p>
                            </div>
                        </div>
                        <div class="store2-all3">
                        {{$total}}
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="linepageuser mt-3"></div>
                    <div class="store4 d-flex justify-content-end">
                        <div class="store4-all2">
                            <div class="store4-all-list1 d-flex mt-4" style="margin-left: 350px;">
                                <div class="list-store1"><i class="fa-brands fa-css3" style="color: #fe5454;"></i></div>
                                <div class="list-store1" >Thành tiền: </div>
                                <div class="list-store1 ms-3" style="color: #fe5454;">
                                {{$item->totalPrice}}</div>
                            </div>
                            <div class="store4-all-list2 d-flex mt-3 justify-content-end">
                                <div class="assess1 text-white d-flex justify-content-center align-items-center"
                                    style="width: 150px;height: 45px;background-color: #fe5454;border-radius: 3%;">
                                    <p>Mua lai</p>
                                </div>
                                <div class="assess2 d-flex justify-content-center align-items-center"
                                    style="width: 220px;border-radius: 2%;margin-left: 10px;border: 0.5px solid rgb(213, 213, 213);">
                                    <p>Danh gia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @php $currentProviderId = $item->idOrder;@endphp
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(".list").hide();
            $(".main-list1 div").click(function() {
                var index = $(this).index() + 1;
                $(".content-list").hide();
                $(".content-list" + index).show();
            });
        });
    </script>
@endsection