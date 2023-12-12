@extends('masterPr')
@section('contentPr')
<div class="grid mt-5">
        <div class="container_body">
            <div class="content">
                <div class="content-wrapper d-flex">
                    <div class="sidebar-col-2 me-5">
                        <div class="categories flex">
                            <div class="sidebar_item">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                            <div>
                                <div class="sidebar_item">
                                    <b>All Categories</b>
                                </div>
                                @foreach($category as $category)
                                <b class="categories_name" data-toggle="collapse" data-target="#myCollapse{{$category->idCategoryPr}}" aria-expanded="false" aria-controls="myCollapse{{$category->idCategoryPr}}">{{$category->nameCategoryPr}}</b><br>
                                <ul class="categories_list collapse" id="myCollapse{{$category->idCategoryPr}}">
                                    @foreach($category->category_Pr_Detail as $detail)
                                    <p class="detail" id="{{$detail->idCategoryPrDetail}}">{{$detail->nameCategoryPrDetail}}</p>
                                    @endforeach
                                </ul>
                                @endforeach
                                <!-- <li class="more"><a href="#"><b>More <i class="fa-solid fa-chevron-down"></i></b></a></li> -->
                            </div>
                        </div>
                        <div class="categories">
                            <div class="sidebar_item flex">
                                <i class="fa-solid fa-filter"></i>
                                <div>
                                    <b>Search Filters</b>
                                    <!-- <br><br> -->
                                    <!-- <b class="categories_name">Filter by category</b> -->
                                </div>
                            </div>
                            <!-- <form>
                                    <input type="checkbox" name="ca1" value="T-shirt ($200+)"><span>T-shirt ($200+)</span>
                                    <br>
                                    <input type="checkbox" name="ca2" value="Shirt ($100+)"><span>Shirt ($100+)</span>
                                    <br>
                                    <input type="checkbox" name="ca2" value="Jacket ($150+)"><span>Jacket ($150+)</span>
                                    <br>
                                    <input type="checkbox" name="ca2" value="Fashion accessories ($50+)"><span>Fashion accessories ($50+)</span>
                            </form> -->
                            <!-- <br> -->
                            <!-- <a class="more1" href="#"><b>More <i class="fa-solid fa-chevron-down"></i></b></a> -->
                            <!-- <br><br> -->
                            <b class="categories_name more1">Selling place</b>
                            <form>
                                @foreach($provider as $provider)
                                <div>
                                    <input type="radio" class="providerCheckbox" id="idProvider" name="ca1" value="{{$provider->idProvider}}" >
                                    <span class="nameProvider">{{$provider->Name}}</span>
                                </div>
                                @endforeach
                            </form>
                            <br>
                            <a class="more1" href="#"><b>More <i class="fa-solid fa-chevron-down"></i></b></a>
                         </div> 
                         <div class="categories">
                                <div class="sidebar_item more1">
                                    <b>Price range</b>
                                </div>
                                <div class="price_range">
                                    <input type="number" id="minPriceInput" name="quantity" min="10" max="100" step="10" placeholder="from $">
                                    <input type="number" id="maxPriceInput" name="quantity" min="100" max="1000" step="50" placeholder="to $">
                                </div>
                                <input type="submit" id="filterByPriceBtn" value="Apply" class="sidebar_btn">
                        </div>
        
                        <div class="categories">
                            <div class="sidebar_item more1">
                                <b>Evaluate</b>
                            </div>
                            <div class="sidebar_star">
                                <i class="fa-solid fa-star star_yellow"></i>
                                <i class="fa-solid fa-star star_yellow"></i>
                                <i class="fa-solid fa-star star_yellow"></i>
                                <i class="fa-solid fa-star star_yellow"></i>
                                <i class="fa-solid fa-star star_yellow"></i>
                                <br>
                                <i class="fa-solid fa-star star_yellow"></i>
                                <i class="fa-solid fa-star star_yellow"></i>
                                <i class="fa-solid fa-star star_yellow"></i>
                                <i class="fa-solid fa-star star_yellow"></i>
                                <i class="fa-solid fa-star star_grey"></i>
                                <span>Or more</span>
                                <br>
                                <i class="fa-solid fa-star star_yellow"></i>
                                <i class="fa-solid fa-star star_yellow"></i>
                                <i class="fa-solid fa-star star_yellow"></i>
                                <i class="fa-solid fa-star star_grey"></i>
                                <i class="fa-solid fa-star star_grey"></i>
                                <span>Or more</span>
                                <br>
                                <i class="fa-solid fa-star star_yellow"></i>
                                <i class="fa-solid fa-star star_yellow"></i>
                                <i class="fa-solid fa-star star_grey"></i>
                                <i class="fa-solid fa-star star_grey"></i>
                                <i class="fa-solid fa-star star_grey"></i>
                                <span>Or more</span>
                                <br>
                                <i class="fa-solid fa-star star_yellow"></i>
                                <i class="fa-solid fa-star star_grey"></i>
                                <i class="fa-solid fa-star star_grey"></i>
                                <i class="fa-solid fa-star star_grey"></i>
                                <i class="fa-solid fa-star star_grey"></i>
                                <span>Or more</span>
                            </div>
                        </div>
                        <div>
                            <br><br><b class="categories_name more1">Promotion Services</b>
                            <form>
                                    <input type="checkbox" name="ca1" value="Voucher Xtra"><span>Voucher Xtra</span>
                                    <br>
                                    <input type="checkbox" name="ca2" value="Products on sale"><span>Products on sale</span>
                                    <br>
                                    <input type="checkbox" name="ca2" value="Everything is cheap"><span>Everything is cheap</span>
                                    <br>
                                    <input type="checkbox" name="ca2" value="Available stock"><span>Available stock</span>
                            </form>
                            <br>
                            <a class="more1" href="#"><b>More <i class="fa-solid fa-chevron-down"></i></b></a> <br>
                            <input type="submit" value="Reset" id="resetFilterBtn" class="sidebar_btn">
                        </div>
                    </div >
                    <div id="products" class="row-listproduct row">
                        @foreach($product as $pr)
                        <div class=" col-3">
                            <div class="product">
                                <a href="product-detail/{{$pr->idProduct}}"><img class="image-Product" alt="" src="source/imageOPr/{{$pr->imagePr}}"/></a>
                                <a href="product-detail/{{$pr->idProduct}}"><p class="product_name">{{$pr->namePr}}</p></a>
                                <p class="name-design">By: {{$pr->nameShop}}</p>
                                <p class="description">{{$pr->descriptionDesign}}</p>
                                <div class="d-flex justify-content-between">
                                    <b class="product_price ">${{$pr->pricePr}}</b>
                                        <div class="image-249-parent">
                                            <!-- <a href="{{route('addcart', $pr->idProduct)}}"><i class="fa-solid fa-cart-shopping"></i></a> -->
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                </div>
                            </div>
                            </div>
                        @endforeach
                        <div class="page_number">
                            {{ $product->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.categories_name').click(function() {
                // Xóa tất cả các phần tử có lớp 'active'
                $('.categories_list').removeClass('show');
                //thêm
                $('.categories_name').addClass('collapsed');

                // Ẩn tất cả các mục
                $('.categories_name').attr('aria-expanded', 'false');
                // Mở rộng chỉ mục được bấm
                $(this).attr('aria-expanded', 'true');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.detail').click(function() {
                var idcategoryPrDetail = $(this).attr('id');

                $.ajax({
                    url: '/filter-products/' + idcategoryPrDetail,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        // console.log(data);
                        var productContainer = $('#products');
                        productContainer.empty();
                        // Thêm các sản phẩm mới
                        $.each(data, function(key, product) {
                            var productItem = $('<div class="col-3">');
                            productItem.append('<img class="image-Product" alt="" src="source/imageOPr/' + product.imagePr + '"/>');
                            productItem.append('<p class="product_name">' + product.namePr + '</p>');
                            productItem.append('<p class="name-design">By: ' + product.nameShop + '</p>');
                            productItem.append('<p class="description">' + product.descriptionDesign + '</p>');
                            productItem.append('<b class="product_price ">' + product.pricePr + '</b>');
                            productContainer.append(productItem);
                        });
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#filterByPriceBtn').click(function() {
                var minPrice = $('#minPriceInput').val();
                var maxPrice = $('#maxPriceInput').val();

                $.ajax({
                    url: '/filter-products-by-price/' + minPrice + '/' + maxPrice ,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        // console.log(data);
                        var productContainer = $('#products');
                        productContainer.empty();
                        // Thêm các sản phẩm mới
                        $.each(data, function(key, product) {
                            var productItem = $('<div class="col-3">');
                            productItem.append('<img class="image-Product" alt="" src="source/imageOPr/' + product.imagePr + '"/>');
                            productItem.append('<p class="product_name">' + product.namePr + '</p>');
                            productItem.append('<p class="name-design">By: ' + product.nameShop + '</p>');
                            productItem.append('<p class="description">' + product.descriptionDesign + '</p>');
                            productItem.append('<b class="product_price ">' + product.pricePr + '</b>');
                            productContainer.append(productItem);
                        });
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            var providersToShow = 5;

            // Ẩn các provider sau khi trang web được tải
            $('form input:radio').slice(providersToShow).hide();
            $('.nameProvider').slice(providersToShow).hide();

            // Bắt sự kiện khi nhấp vào nút "More"
            $('.more1').click(function(e) {
                e.preventDefault();

                // Hiển thị thêm 5 provider khi nhấp vào "More"
                $('form input:radio:hidden').slice(0, providersToShow).show();
                $('.nameProvider:hidden').slice(0, providersToShow).show();

                // Nếu không còn provider ẩn, ẩn nút "More"
                if ($('form input:radio:hidden').length === 0) {
                    $('.more1').hide();
                }
            });
        });
    </script>
    <script>
            $(document).ready(function() {
            $('.providerCheckbox').change(function() {
                // Lấy giá trị của ô checkbox sau khi thay đổi
                var isChecked = $(this).prop('checked');

                if (isChecked) {
                    // Nếu ô checkbox được chọn, lấy giá trị ID của nó
                    var idProvider = $(this).val();

                    $.ajax({
                        url: '/filter-provider-location/' + idProvider,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            console.log(data);
                            var productContainer = $('#products');
                            productContainer.empty();

                            // Thêm các sản phẩm mới
                            $.each(data, function(key, product) {
                                var productItem = $('<div class="col-3">');
                                productItem.append('<img class="image-Product" alt="" src="source/imageOPr/' + product.imagePr + '"/>');
                                productItem.append('<p class="product_name">' + product.namePr + '</p>');
                                productItem.append('<p class="name-design">By: ' + product.nameShop + '</p>');
                                productItem.append('<p class="description">' + product.descriptionDesign + '</p>');
                                productItem.append('<b class="product_price ">' + product.pricePr + '</b>');
                                productContainer.append(productItem);
                            });
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                } else {
                    console.log("Checkbox is not checked");
                    // Thực hiện các hành động khác khi ô checkbox không được chọn
                }
            });
        });
    </script>

<script>
    $(document).ready(function() {
        $('#resetFilterBtn').click(function() {
            location.reload();
        });
    });
</script>
@endsection