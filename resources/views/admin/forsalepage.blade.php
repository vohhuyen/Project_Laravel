<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="source/admin/assets/css/addOPr.css">
    <link rel="stylesheet" href="source/css/main.css">
    <title>Tạo Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    .form-container {
        height: 100vh; /* 100% of the viewport height */
        width: 100vw; /* 100% of the viewport width */
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
</head>
<body>
  <div class="grid">
<!----------------------------------------------- Phần trên cùng ----------------------------------------------->
<h1 class="title">Tạo Product</h1>

<div class="d-block"style="display:center">
            <img src="source/imagePr/" alt="" style="width: 15%;height: 35%;">
            <h4>  <b>nameshop 
                <a href="#" class="text-danger"></a>
              </b></h4>        
</div>
<!----------------------------------------------- Bên trái ------------------------------------------------------>
<form action="#" method="post" enctype="multipart/form-data"class="row gridoriginalproduct">
<div class="input1 col-6">
  <td >
    <img src="source/imageOPr/"style="width: 80%;height: 80%;">
  </td>
  <td>
    <img src="source/imageOPr/"style="width: 70%;height: 70%;">
  </td>
</div>
<!------------------------------------------------bên phải------------------------------------------------------->
<div class="input2 col-6" style="display:center">
  <p><h4>Loại sản phẩm :</h4>#</p>
<div class="color_DPr d-block">
  <p><h4>provider:#</h4>-<h4>Color:#</h4></p>
</div>


<label for="aboutOPr">Price Product :</label>
<textarea id="aboutOPr" name="aboutOPr" class="input" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required ></textarea><br><br>
<br>
<label for="aboutOPr">Design Name :</label>
<textarea id="aboutOPr" name="aboutOPr" class="input" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required ></textarea><br><br>
<br>
<label for="aboutOPr">Design Describe:</label>
<textarea id="aboutOPr" name="aboutOPr" class="input" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required ></textarea><br><br>
<br>
<div class="buttons col-12">
<button type="submit" class="save" >Cancel</button>
<button type="submit" class="save" >post</button>
<!-- <a href="{{route('originalproduct')}}" class="cancel">cancel</a>
    <a href="{{route('addOPr')}}" class="clear">post</a> -->
</div>
</div>
</div>
</form>
</div>
</body>
</html>