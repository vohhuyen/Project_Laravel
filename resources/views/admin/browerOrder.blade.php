@extends('masterAdmin')
@section('contentAdmin')
      <!--  Header Start -->
      <header class="app-header">
        <b>List User</b>
        <div class="search">
          <i class="icon_search fa-solid fa-magnifying-glass"></i>
          <input class="input_search" type="text" placeholder="What do you need? ">
        </div>
        <button></button>
      </header>
      <div class="margin"></div> 
    @php $currentProviderId = null; @endphp
    @foreach($order as $item)
    @if($currentProviderId != $item->idOrder)
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
            <section id="content">
                <div class="content-list content-list1 main-list3 mt-3 px-4 py-4 w-100" style="border: 1px solid grey;">
                    <table class="w-100">
                        <thead style="border-bottom: 1px dotted #adadad;">
                            <tr>
                                <th>Image Product</th>
                                <th>Name</th>
                                <th>Unit price</th>
                                <th>classify</th>
                                <th>Quantity</th>
                                <th>total amount</th>
                            </tr>
                        </thead>
                        <tbody> 
                        @foreach($order as $orders)
                        @if($orders->idOrder == $item->idOrder )   
                        @php $total = $orders->pricePr * $orders->quantity @endphp          
                            <tr>
                                <td><img style="width: 80px; height: 80px;" class="mt-3" src="source/imageOPr/{{$orders->imagePr}}" alt="" width="90px"></td>
                                <td><p>{{$orders->namePr}}</p></td>
                                <td><p>{{$orders->pricePr}}</p></td>
                                <td><p>{{$orders->classify}}</p></td>
                                <td><p>{{$orders->quantity}}</p></td>
                                <td><p>{{$total}}</p></td>
                            </tr>
                        @endif
                        @endforeach
                        </tbody>
                    </table>
                    <div class="linepageuser mt-3"></div>
                    <div class="store4 d-flex justify-content-between">
                        <div class="mb-3 mt-3 d-flex align-items-center">
                            <div class="me-5">
                                <p><b>Customer: </b> {{$item->name}} ({{$item->phone}})</p>
                                <p><b>Address: </b> {{$item->address}}</p>
                            </div>
                            <div class="ms-5">
                                <p><b>totalPayment: </b> {{$item->totalPrice}}</p>
                                <p><b>Note: </b> {{$item->note}}</p>
                            </div>
                        </div>
                        <div class="store4-all2">
                            <div class="store4-all-list2 d-flex mt-3 justify-content-end">
                                <form action="{{route('cancelOrder', $item->idOrder)}}" method="post">
                                @csrf
                                    <button type="submit" class="assess2 d-flex justify-content-center align-items-center"
                                        style="width: 220px;border-radius: 2%;margin-left: 10px;border: 0.5px solid rgb(213, 213, 213);">
                                        <p>cancel order</p>
                                    </button>
                                </form>
                                <form action="{{route('acceptOrder', $item->idOrder)}}" method="post">
                                    @csrf
                                    <button type="submit" class="assess1 text-white d-flex justify-content-center align-items-center"
                                        style="width: 150px;height: 45px;background-color: #fe5454;border-radius: 3%;">
                                        <p>accept orders</p>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
      </div>
    @php $currentProviderId = $item->idOrder;@endphp
    @endif
    @endforeach
@endsection  