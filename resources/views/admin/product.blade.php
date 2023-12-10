<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ImPrint</title>
    <link rel="shortcut icon" type="image/png" href="source/admin/assets/images/logos/imprintrutgon.png" />
    <link rel="stylesheet" href="source/admin/assets/css/stylepr.css" />
    <link rel="stylesheet" href="source/fontawesome-free-6.4.0-web/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
      data-sidebar-position="fixed" data-header-position="fixed">
      <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="source/admin/assets/images/logos/logo.png" width="200" style="margin-left: 10px; margin-top: 3px;" alt="" />
          </a>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.html" aria-expanded="false">
                <span class="spani">
                    <i class="fa-solid fa-house"></i>
                </span>
                <span class="hide-menu">Home Page</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./user.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-user"></i>
                </span>
                <span class="hide-menu">User Management</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./product.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-layer-group"></i>
                </span>
                <span class="hide-menu"> Product Management</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./originalPr.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-database"></i>
                </span>
                <span class="hide-menu">Original Product Management</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./product-waiting.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                <span class="hide-menu">Product Awaiting Approval</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./provider.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-user-tie"></i>
                </span>
                <span class="hide-menu">Supplier Management</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./banner.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-pager"></i>
                </span>
                <span class="hide-menu"> Banner Management</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./intro.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-photo-film"></i>
                </span>
                <span class="hide-menu"> Intro Management</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./categoryPr.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-folder-tree"></i>
                </span>
                <span class="hide-menu">Product Categories</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./web-analysic.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-chart-line"></i>
                </span>
                <span class="hide-menu">Website Analysis</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <div class="margin-sidebar"></div>
    <!--  Sidebar End -->


    <!--  Main wrapper -->
    <div class="body-content">
      <!--  Header Start -->
      <header class="app-header">
        <b>List of products</b>
        <div class="search">
          <i class="icon_search fa-solid fa-magnifying-glass"></i>
          <input class="input_search" type="text" placeholder="What do you need? ">
        </div>
        <button class="addproducts" data-toggle="modal" data-target="#btncreate">Create <i class="fa-solid fa-plus"></i></button>
      </header>
      <div class="margin"></div>

      <div class="modal fade" id="btncreate" tabindex="-1" role="dialog" aria-labelledby="btn1Title"aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Add Product</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body row">
              <form action="admin-add-form" method="post" enctype="multipart/form-data" class="form-container">
                @csrf
                <div class="form-group">
                  <label for="supplier">Categories:</label>
                  <br>
                  <select id="categories" name="categories" class="inputAddUser">
                    @foreach ($category_pr as $category_pr)
                      <option value="{{ $category_pr->idCategoryPrDetail }}">{{ $category_pr->nameCategoryPrDetail }}</option>
                    @endforeach
                  </select>
                </div>
                <pre></pre>
                <div class="form-group">
                  <label for="NameDesign">Name Shop:</label>
                  <br>
                  <select id="idShop" name="idShop" class="inputAddUser">
                    @foreach ($shop as $shop)
                      <option value="{{ $shop->idShop }}">{{ $shop->nameShop }}</option>
                    @endforeach
                  </select>
                </div>
                <pre></pre>
                <div class="form-group">
                  <label for="productName">Name Product:</label>
                  <br>
                  <select onchange="myfunction(this)" id="name_product" name="name_product" class="inputAddUser">
                    @foreach ($originalproducts as $originalproducts)
                      <option id="product" value="{{ $originalproducts->idOPr }}">{{ $originalproducts->nameOPr }}</option>
                    @endforeach
                  </select>
                </div>
                <pre></pre>
                <div class="form-group">
                  <label for="supplier">Provider:</label>
                  <br>
                  <select onchange="loadColorsByProvider(this)" id="name_provider" name="name_provider" class="inputAddUser">
                    @foreach ($providers as $providers)
                      <option id="provider" value="{{ $providers->idProvider }}">{{ $providers->Name }}</option>
                    @endforeach
                  </select>
                </div>
                <pre></pre>
                <div class="form-group">
                  <label for="color">Color:</label>
                  <br>
                  <select id="name_color" name="name_color" class="inputAddUser">
                    @foreach ($color as $val)
                        <option value="{{ $val->idColor }}">{{ $val->NameColor }}</option>
                    @endforeach
                  </select>
                </div>
                <pre></pre>
                <div class="form-group">
                  <label for="productImage">Image product:</label>
                  <br>
                  <input type="file" class="form-control-file inputAddUser" id="productImage" name="productImage" required>
                </div>
                <pre></pre>
                <div class="form-group">
                  <label for="designImage">Image design:</label>
                  <br>
                  <input type="file" class="inputAddUser" id="designImage" name="designImage" required>
                </div>
                <pre></pre>
                <div class="form-group">
                  <label for="NameDesign">Name design:</label>
                  <br>
                  <input type="text" class="form-control-file inputAddUser" id="NameDesign" name="NameDesign">
                </div>
                <pre></pre>
                <div class="form-group">
                  <label for="productPrice">Price:</label>
                  <br>
                  <input type="number" class="inputAddUser" id="productPrice" name="productPrice" placeholder="Price product >= price original product">
                </div>
                <pre></pre>
                <div class="form-group">
                  <label for="description">Descriptiton design:</label>
                  <br>
                  <textarea id="description" class="inputAddUser" name="description" placeholder="Enter description..."></textarea>
                </div>
                <pre></pre>
                <div class="form-group">
                  <label for="note">Note:</label>
                  <br>
                  <textarea id="note" class="inputAddUser" name="note" placeholder="Enter your note...."></textarea>
                </div>
                <pre></pre>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--  Header End -->

      <div class="container-fluid">
        <div class="container-fluid">
          <section id="content">
            <table class="table table-grey table-striped" style="width: 100%;">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Color</th>
                  <th>Image Design</th>
                  <th>Name Provider</th>
                  <th>Description</th>
                  <th>Note</th>
                  <th>Upadate</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                  <tr style="height:200px">
                    <td style="display:flex;align-items:center;justify-content: center;vertical-align: middle; height: 212px;">{{ $product['idProduct'] }}</td>
                    <td style="width:9%;vertical-align: middle;"><img
                            src="source/imageOPr/{{ $product['imagePr'] }}" alt="product1"
                            style="width: 100px;height: 100px;margin-top:10px"></td>
                    <td style="width:13%;vertical-align: middle;">
                        {{ $product['namePr'] }}</td>
                    <td style="width:9%;vertical-align: middle;">
                        {{ $product['pricePr'] }} USD</td>
                    @if($product['color'])
                    <td style="vertical-align: middle;">{{ $product['color']['NameColor'] }}</td>
                    @else
                        <td style="vertical-align: middle;">N/A</td>
                    @endif
                    <td style="width:15%;vertical-align: middle;"><img
                            src="source/imageOPr/{{ $product['imageDesign'] }}"
                            style="width: 60px;height: 60px;"></td>
                    <td style="width:9%;vertical-align: middle;">
                        {{ $product['Name'] }}
                    </td>
                    <td style="width:100%;vertical-align: middle;">
                        {{ $product['descriptionDesign'] }}</td>
                    <td style="width:9%;vertical-align: middle;">{{ $product['note'] }}
                    </td>
                    <td style="width:7%;vertical-align: middle;"><button data-toggle="modal" data-target="#btn{{ $product['idProduct'] }}" data-product-id="{{ $product['idProduct'] }}" class="update" onclick="buttonUpdate(event)">Update</button></td>

                    <div class="modal fade" id="btn{{ $product['idProduct'] }}" tabindex="-1" role="dialog" aria-labelledby="btn1Title"aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body row">
                            <form action="admin-edit" method="post" enctype="multipart/form-data" class="form-container">
                              @csrf
                              <div class="form-group">
                                <label for="note">ID:</label>
                                <br>
                                <input id="idProduct" class="inputAddUser" name="idProduct" value="{{ $product['idProduct'] }}" readonly>
                              </div>
                              <div class="form-group">
                                <label for="supplier">Categories:</label>
                                <br>
                                <select id="categories{{ $product['idProduct'] }}" name="categories" class="inputAddUser">
                                @foreach ($category_pr_detail as $category_pr)
                                    <option value="{{ $category_pr->idCategoryPrDetail }}">{{ $category_pr->nameCategoryPrDetail }}</option>
                                  @endforeach
                                </select>
                              </div>
                              <pre></pre>
                              <div class="form-group">
                                <label for="NameDesign">Name Shop:</label>
                                <br>
                                <select id="idShop{{ $product['idProduct'] }}" name="idShop" class="inputAddUser">
                                  @foreach ($shops as $shop)
                                    <option value="{{ $shop->idShop }}">{{ $shop->nameShop }}</option>
                                  @endforeach
                                </select>
                              </div>
                              <pre></pre>
                              <div class="form-group">
                                <label for="productName">Name Product:</label>
                                <br>
                                <select onchange="loadProviderByProduct(this)"  id="nameproduct{{ $product['idProduct'] }}" name="nameproduct" data-product-id="{{ $product['idProduct'] }}" class="inputAddUser">
                                  @foreach ($originalproduct as $originalproducts)
                                    <option id="product" value="{{ $originalproducts->idOPr }}">{{ $originalproducts->nameOPr }}</option>
                                  @endforeach
                                </select>
                              </div>
                              <pre></pre>
                              <div class="form-group">
                                <label for="supplier">Provider:</label>
                                <br>
                                <select onchange="loadColorByProvider(this)" id="nameprovider{{ $product['idProduct'] }}" name="nameprovider" data-product="{{ $product['idProduct'] }}" class="inputAddUser">
                                  @foreach ($provider as $providers)
                                    <option id="provider" value="{{ $providers->idProvider }}">{{ $providers->Name }}</option>
                                  @endforeach
                                </select>
                              </div>
                              <pre></pre>
                              <div class="form-group">
                                <label for="color">Color:</label>
                                <br>
                                <select id="namecolor{{ $product['idProduct'] }}" name="namecolor" class="inputAddUser">
                                  @foreach ($color as $val)
                                      <option value="{{ $val->idColor }}">{{ $val->NameColor }}</option>
                                  @endforeach
                                </select>
                              </div>
                              <pre></pre>
                              <div class="form-group">
                                <label for="productImage">Image product:</label>
                                <br>
                                <input type="file" class="form-control-file inputAddUser" id="productImage" name="productImage" value="{{ $product['imagePr'] }}" required>
                                
                              </div>
                              <pre></pre>
                              <div class="form-group">
                                <label for="designImage">Image design:</label>
                                <br>
                                <input type="file" class="inputAddUser" id="designImage" name="designImage" value="{{ $product['imageDesign'] }}" required>
                              </div>
                              <pre></pre>
                              <div class="form-group">
                                <label for="NameDesign">Name design:</label>
                                <br>
                                <input type="text" class="form-control-file inputAddUser" id="NameDesign" name="NameDesign" value="{{ $product['nameDesign'] }}">
                              </div>
                              <pre></pre>
                              <div class="form-group">
                                <label for="productPrice">Price:</label>
                                <br>
                                <input type="number" class="inputAddUser" id="productPrice" name="productPrice" placeholder="Price product >= price original product" value="{{ $product['pricePr'] }}">
                              </div>
                              <pre></pre>
                              <div class="form-group">
                                <label for="description">Descriptiton design:</label>
                                <br>
                                <textarea id="description" class="inputAddUser" name="description" placeholder="Enter description...">{{ $product['descriptionDesign'] }}</textarea>
                              </div>
                              <pre></pre>
                              <div class="form-group">
                                <label for="note">Note:</label>
                                <br>
                                <textarea id="note" class="inputAddUser" name="note" placeholder="Enter your note...." >{{ $product['note'] }}</textarea>
                              </div>
                              <pre></pre>

                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-danger">Save</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>


                    <form role="form" action="{{ route('admin-product-delete', $product['idProduct']) }}" method="post">
                      @csrf
                      <td style="width:7%;vertical-align: middle;"><button class="delete">Delete</button></td>
                    </form>
                  </tr>
                @endforeach

                    


              </tbody>
            </table>
          </section>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<script>
    function myfunction(event){ 
        let value = event.value;
        $.ajax({
                url: "{{ route('get-product-bycategory')  }}" + "?id="+value,
                type: 'GET',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    console.log(data);
                    var selectOptions = $('#name_provider');
                    selectOptions.empty();

                    $.each(data.data, function (key, value) {
                    selectOptions.append('<option value="' + value.idProvider + '">' + value.Name + '</option>');
                });
                },
                error: function (error) {
                    console.log(error);
                    // Handle errors
                }
            });
    }
    // Function to load colors based on the selected provider
  function loadColorsByProvider(event) {
    let idOPr = $('#name_product').val();
    let idProvider = $('#name_provider').val();

    $.ajax({
        url: "{{ route('get-colors-by-provider') }}" + "?idProvider=" + idProvider + "&idOPr=" + idOPr,
        type: 'GET',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            console.log(data);
            var selectOptions = $('#name_color');
            selectOptions.empty();

            $.each(data.data, function (key, value) {
                selectOptions.append('<option value="' + value.idColor + '">' + value.NameColor + '</option>');
            });

            $('#productPrice').attr('min', data.originalPrice.priceOPr);
        },
        error: function (error) {
            console.log(error);
            // Handle errors
        }
    });
  }

  $('#product, #provider').change(function() {
      loadColorsByProvider();
  });
</script>
<script>
  function loadProviderByProduct(event){ 
        let value = event.value;
        let productId = $(event).data('product-id');
        let selectId = 'nameprovider' + productId;
        let selectOption = $('#' + selectId);

        $.ajax({
                url: "{{ route('get-product-bycategory')  }}" + "?id="+value,
                type: 'GET',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    console.log(data);
                    selectOption.empty();

                    $.each(data.data, function (key, value) {
                    selectOption.append('<option value="' + value.idProvider + '">' + value.Name + '</option>');
                });
                },
                error: function (error) {
                    console.log(error);
                    // Handle errors
                }
            });
    }
    // Function to load colors based on the selected provider
  function loadColorByProvider(event) {
    let productId = $(event).data('product');
    let selectIdOPr = 'nameproduct' + productId;
    let idOPr = $('#' + selectIdOPr).val();
    let selectIdProvider = 'nameprovider' + productId;
    let idProvider = $('#' + selectIdProvider).val();

    

    $.ajax({
        url: "{{ route('get-colors-by-provider') }}" + "?idProvider=" + idProvider + "&idOPr=" + idOPr,
        type: 'GET',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            console.log(data);
            let selectId = 'namecolor' + productId;
            let selectOptions = $('#' + selectId);
            selectOptions.empty();

            $.each(data.data, function (key, value) {
                selectOptions.append('<option value="' + value.idColor + '">' + value.NameColor + '</option>');
            });

            $('#productPrice').attr('min', data.originalPrice.priceOPr);
        },
        error: function (error) {
            console.log(error);
            // Handle errors
        }
    });
  }

  $('#product, #provider').change(function() {
      loadColorsByProvider();
  });

</script>
<script>
    function buttonUpdate(event){
      var productId = $(event.currentTarget).data('product-id');

      // category
      let selectId = 'categories' + productId;
      let selectOption = $('#' + selectId);
      var allOptionsCategory = [];
      $('#categories{{ $product['idProduct'] }} option').each(function () {
          var optionValue = $(this).val();
          var optionText = $(this).text();

          allOptionsCategory.push({
              value: optionValue,
              text: optionText
          });
      });
      // shop
      let selectIdShop = 'idShop' + productId;
      let selectOptionShop = $('#' + selectIdShop);
      var allOptionsShop = [];
      $('#idShop{{ $product['idProduct'] }} option').each(function () {
          var optionValueShop = $(this).val();
          var optionTextShop = $(this).text();

          allOptionsShop.push({
              value: optionValueShop,
              text: optionTextShop
          });
      });
      // nameProduct
      let selectIdOPr = 'nameproduct' + productId;
      let selectOptionOPr = $('#' + selectIdOPr);
      var allOptionsOPr = [];
      $('#nameproduct{{ $product['idProduct'] }} option').each(function () {
          var optionValueOPr = $(this).val();
          var optionTextOPr = $(this).text();

          allOptionsOPr.push({
              value: optionValueOPr,
              text: optionTextOPr
          });
      });
      // Provider
      let selectIdProvider = 'nameprovider' + productId;
      let selectOptionProvider = $('#' + selectIdProvider);
      var allOptionsProvider = [];
      $('#nameprovider{{ $product['idProduct'] }} option').each(function () {
          var optionValueProvider = $(this).val();
          var optionTextProvider = $(this).text();

          allOptionsProvider.push({
              value: optionValueProvider,
              text: optionTextProvider
          });
      });
      // Color
      let selectIdColor = 'namecolor' + productId;
      let selectOptionColor = $('#' + selectIdColor);
      var allOptionsColor = [];
      $('#namecolor{{ $product['idProduct'] }} option').each(function () {
          var optionValueColor = $(this).val();
          var optionTextColor = $(this).text();

          allOptionsColor.push({
              value: optionValueColor,
              text: optionTextColor
          });
      });
            $.ajax({
                url: "{{ route('get-products-infor') }}" + "?productId=" + productId,
                type: 'GET',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                  console.log(data);

                  // category
                  selectOption.empty();
                  $.each(data.data, function (key, value) {
                    selectOption.find('option[value="' + value.idCategoryPrDetail + '"]').remove();
                    selectOption.prepend('<option value="' + value.idCategoryPrDetail + '">' + value.nameCategoryPrDetail + '</option>');
                  });
                  $.each(allOptionsCategory, function (index, option) {
                    selectOption.append('<option value="' + option.value + '">' + option.text + '</option>');
                  });

                  // shop
                  selectOptionShop.empty();
                  $.each(data.data, function (key, value) {
                    selectOptionShop.find('option[value="' + value.idShop + '"]').remove();
                    selectOptionShop.prepend('<option value="' + value.idShop + '">' + value.nameShop + '</option>');
                  });
                  $.each(allOptionsShop, function (index, option) {
                    selectOptionShop.append('<option value="' + option.value + '">' + option.text + '</option>');
                  });

                  // OPr
                  selectOptionOPr.empty();
                  $.each(data.data, function (key, value) {
                    selectOptionOPr.find('option[value="' + value.idOPr + '"]').remove();
                    selectOptionOPr.prepend('<option value="' + value.idOPr + '">' + value.nameOPr + '</option>');
                  });
                  $.each(allOptionsOPr, function (index, option) {
                    selectOptionOPr.append('<option value="' + option.value + '">' + option.text + '</option>');
                  });

                  // Provider
                  selectOptionProvider.empty();
                  $.each(data.data, function (key, value) {
                    selectOptionProvider.find('option[value="' + value.idProvider + '"]').remove();
                    selectOptionProvider.prepend('<option value="' + value.idProvider + '">' + value.Name + '</option>');
                  });
                  $.each(allOptionsProvider, function (index, option) {
                    selectOptionProvider.append('<option value="' + option.value + '">' + option.text + '</option>');
                  });

                  // Color
                  selectOptionColor.empty();
                  $.each(data.data, function (key, value) {
                    selectOptionColor.find('option[value="' + value.idColor + '"]').remove();
                    selectOptionColor.prepend('<option value="' + value.idColor + '">' + value.NameColor + '</option>');
                  });
                  $.each(allOptionsColor, function (index, option) {
                    selectOptionColor.append('<option value="' + option.value + '">' + option.text + '</option>');
                  });
                },
                error: function(error) {
                    console.log(error);
                }
            });
        };
</script>