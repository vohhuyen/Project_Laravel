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
   <base href="{{asset('')}}"></base>
   <script>
    var baseUrl = '{{ url("/") }}';
  </script>
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      <style>
      .form-container {
          height: 100vh;
          width: 100vw;
          display: flex;
          justify-content: center;
          align-items: center;
      }
  </style>
</head>
<body>
  <div class="grid">
    <h1 class="title">Tạo Product</h1>
    <div class="d-flex"style="display:center">
      <img src="image/{{$shop->avataShop}}" alt="" style="width: 15%;height: 35%;">
      <h4><b><a href="#" class="text-danger">{{$shop->nameShop}}</a></b></h4>        
    </div>
    <form action="{{route('addDesignProduct',  ['idShop' => $shop->idShop, 'idProvider' => $provider->idProvider])}}" method="post" enctype="multipart/form-data" class="row gridoriginalproduct">
      @csrf
      <div class="input1 col-6">
        @if (isset($image))
          <img src="source/imageOPr/{{ $image }}" alt="Merged Image">
          <input type="hidden" name="imageProduct" value="{{$image}}" accept="image/*">
        @else
          <p>{{ $error ?? 'No image available.' }}</p>
        @endif
      </div>
      <div class="input2 col-6" style="display:center">
        <div class="d-flex">
          @if (isset($imageDesign))
            <img src="source/imageOPr/{{ $imageDesign }}" alt="Merged Image" style="width: 160px; height: 90px;">
            <input type="hidden" name="imageDesign"  value="{{$imageDesign}}" accept="image/*">
            @else
            <p>{{ $error ?? 'No image available.' }}</p>
          @endif
          <div class="color_DPr d-block">
            <b>Ten sản phẩm :{{$detail->nameOPr}}</b><br><input type="text" name="idOPr" value="{{$detail->idOPr}}" hidden>
            <b>Loại sản phẩm :{{$detail->nameCategoryOPrDetail}}</b><br>
            <b>provider: {{$provider->Name}} - Color:{{$detail->NameColor}}</b><br><input type="text" name="idColor" value="{{$detail->idColor}}" hidden>
          </div>
        </div>
        <div class="form-group">
          <label for="supplier">Categories:</label>
          <br>
          <select id="categories" name="categories" class="input">
          @foreach ($category_pr_detail as $category_pr)
              <option value="{{ $category_pr->idCategoryPrDetail }}">{{ $category_pr->nameCategoryPrDetail }}</option>
            @endforeach
          </select>
        </div>
        <pre></pre>
        <label for="aboutOPr">Price Product :</label>
        <input type="number" id="aboutOPr" name="pricePr" class="input" min="{{$minPrice->priceOPr}}" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required ></input>
        <br>
        <label for="aboutOPr">Design Name :</label>
        <input type="text" id="aboutOPr" name="nameDesign" class="input" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required ></input>
        <br>
        <label for="aboutOPr">Design Description:</label>
        <textarea id="aboutOPr" name="Description" class="input" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required ></textarea>
        <br>
        <label for="aboutOPr">Note:</label>
        <textarea id="aboutOPr" name="NoteDesign" class="input" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required ></textarea>
        <br>
        <div class="buttons col-12">
        <button class="save" >Cancel</button>
        <button type="submit" class="save" >post</button>
      </div>
      </div>
      </div>
    </form>
</div>
</body>
</html>
<script>
function validatePrice(input) {
    const value = input.value;
    if (isNaN(value) || parseFloat(value) <= 0) {
        alert("Please enter a valid positive number.");
        input.value = ''; 
    }
}
</script>