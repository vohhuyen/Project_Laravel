@extends('masterAdmin') @section('contentAdmin')
    <!--  Header Start -->
    <header class="app-header">
        <b>List of Product</b>
        <div class="search">
            <i class="icon_search fa-solid fa-magnifying-glass"></i>
            <input class="input_search" type="text" placeholder="What do you need? ">
        </div>
        <button></button>
    </header>
    <div class="margin"></div>
    <!--  Header End -->
    <div class="container-fluid">
        <div class="container-fluid">
            <section id="content">
            @foreach($design as $designs)
                <div class="main-container mt-5 w-100">
                    <div class="w-100 nameShopmn ps-5">
                        <div>
                            <img class="avt-managerdesign" src="image/{{$designs->avataShop}}" alt="Image">
                            <b class="nameshop">{{$designs->nameShop}}</b>
                        </div>
                        <div class="d-flex">
                            <form action="{{route('brower',$designs->idDesignProducts)}}" method="post">
                                @csrf
                                <button type="submit" class="mx-2 my-2" id="accept-button">Browser</button>
                            </form>
                            <button class="mx-2 my-2" data-toggle="modal" data-target="#btncreateMail" id="reject-button">Do not browse</button>
                        </div>
                    </div>
                    

                    <div class="modal fade" id="btncreateMail" tabindex="-1" role="dialog"
                        aria-labelledby="btn1Title"aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle"
                                        style="font-family: Arial, Helvetica, sans-serif">Send Mail</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                        style="margin-left: 355px">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body row">
                                    <form action="cancel-design" method="post" enctype="multipart/form-data"
                                        class="form-container">
                                        @csrf
                                        <div class="form-group">
                                            <label for="note">Email shop:</label>
                                            <br>
                                            @foreach($user as $users)
                                            @if($users->idUser == $designs->idShop)
                                            <input type="text" value="{{$users->Email}}" class="inputAddUser" name="Mailshop" readonly>
                                            @endif
                                            @endforeach
                                        </div>
                                        <input type="hidden" value="{{$designs->idDesignProducts}}" name="idDesignProducts">
                                        <div class="form-group">
                                            <label for="note">Name design:</label>
                                            <br>
                                            <input type="text" value="{{$designs->nameDesign}}" class="inputAddUser" name="nameDesign" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="note">Reasons for design rejection:</label>
                                            <br>
                                            <textarea class="inputAddUser" name="reasons" placeholder="Enter your reasons...."></textarea>
                                        </div>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Send</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="w-100 d-flex">
                        <div class="index">
                            <p>{{$designs->idDesignProducts}}</p>
                        </div>
                        <div class="w-100 d-flex" style="align-items: center">
                            <div class="mx-5 my-2">
                                <b>Image Product</b><br>
                                <img src="image/{{$designs->imagePr}}" alt="Image" width="170px" height="150px">
                            </div>
                            <div class="mx-5 my-2">
                                <b>Image Design</b><br>
                                <img src="image/{{$designs->imageDesign}}" alt="Image" width="160px" height="90px">
                            </div>
                            <div>
                                <div class="w-100 d-flex justify-content-between">
                                    <div class="mx-5 px-5">
                                        <p><b class="b-infor">Name design: </b> {{$designs->nameDesign}} </p>
                                        <p><b class="b-infor">Price: </b> {{$designs->pricePr}}</p>
                                        <p><b class="b-infor">Note: </b> {{$designs->note}}</p>
                                    </div>
                                    <div class="mx-5 px-5">
                                        <p><b class="b-infor">Provider: </b> {{$designs->Name}}</p>             
                                        <p><b class="b-infor">Name Product:</b> {{$designs->namePr}} </p>
                                        <p><b class="b-infor">Color: </b>{{$designs->NameColor}}</p>
                                    </div>
                                </div>
                                <p class="mx-5 px-5"><b>Descripton design: </b> {{$designs->descriptionDesign}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </section>
        </div>
    </div>
@endsection
