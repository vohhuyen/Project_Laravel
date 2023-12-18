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
                    <div class="m-lg-4"> Vận chuyển</div>
                    <div class="m-lg-4"> Chờ giao hàng(1)</div>
                    <div class="m-lg-4"> Hoàn thành</div>
                    <div class="m-lg-4"> Đã huỷ</div>
                    <div class="m-lg-4"> Trả hàng/Hoàn tiền</div>
                </div>
                <div class="content-list content-list1 main-list3 mt-3 px-4 py-4">
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <div>
                            <b>Mê Game Store</b>
                        </div>
                        <div>
                            <p style="color: #fe5454;">DONE</p>
                        </div>
                    </div>
                    <div class="linepageuser"></div>
                    <div class="store2 d-flex mt-3 justify-content-between align-items-center">
                        <div class="store2-all1 d-flex align-items-center">
                            <img class="me-3" src="https://images.pexels.com/photos/2754200/pexels-photo-2754200.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" width="90px">
                            <div class="store2-all2">
                                <p>Móc khoá hình Red Dead Redemption 2,Grand Theft Auto V</p>
                                <p style="font-size: 16px;color: gray;margin-top:-12px;">Phân loại hàng: GTA V</p>
                                <p style="font-size: 14px;margin-top: -12px">x1</p>
                            </div>
                        </div>
                        <div class="store2-all3">
                            ₫29.000
                        </div>
                    </div>
                    <div class="store2 d-flex mt-3 justify-content-between align-items-center">
                        <div class="store2-all1 d-flex align-items-center">
                            <img class="me-3" src="https://images.pexels.com/photos/2754200/pexels-photo-2754200.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" width="90px">
                            <div class="store2-all2">
                                <p>Móc khoá hình Red Dead Redemption 2,Grand Theft Auto V</p>
                                <p style="font-size: 16px;color: gray;margin-top:-12px;">Phân loại hàng: GTA V</p>
                                <p style="font-size: 14px;margin-top: -12px">x1</p>
                            </div>
                        </div>
                        <div class="store2-all3">
                            ₫29.000
                        </div>
                    </div>
                    <div class="linepageuser mt-3"></div>
                    <div class="store4 d-flex justify-content-end">
                        <div class="store4-all2">
                            <div class="store4-all-list1 d-flex mt-4" style="margin-left: 350px;">
                                <div class="list-store1"><i class="fa-brands fa-css3" style="color: #fe5454;"></i></div>
                                <div class="list-store1" >Thành tiền: </div>
                                <div class="list-store1 ms-3" style="color: #fe5454;">
                                    ₫84.500</div>
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
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(".main-list1 div").click(function() {
                var index = $(this).index() + 1;
                $(".content-list").hide();
                $(".content-list" + index).show();
            });
        });
    </script>
@endsection