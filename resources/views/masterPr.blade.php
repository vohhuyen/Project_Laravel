<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImPrint</title>
    <base href="{{asset('')}}"></base>
    <link rel="shortcut icon" type="image/png" href="source/admin/assets/images/logos/imprintrutgon.png" />
    <link rel="stylesheet" href="source/css/main.css">
    <link rel="stylesheet" href="source/css/HOME.css">
    <link rel="stylesheet" href="source/css/PRODUCT.css">
    <link rel="stylesheet" href="source/css/CART.css" />
    <link rel="stylesheet" href="source/css/PRODUCT_detail.css" />
    <link rel="stylesheet" href="source/css/PersionalPage.css"/>
    <link rel="stylesheet" href="source/css/PageUser.css" />
    <link rel="stylesheet" href="source/css/checkout.css" />
    <link rel="stylesheet" href="source/fontawesome-free-6.4.0-web/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="source/css/OPrDetail.css">
    <link rel="stylesheet" href="source/css/Category-OPr.css">
    <link rel="stylesheet" href="source/docs/css/cropper.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    @include('headerPr')
    @yield('contentPr')	
    @include('footer')
    @include('script')
</body>
</html>