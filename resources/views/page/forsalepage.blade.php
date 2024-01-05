<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="source/admin/assets/css/addOPr.css">
    <link rel="stylesheet" href="source/css/main.css">
    <title>ImPrint</title>
    <base href="{{asset('')}}"></base>
    <link rel="shortcut icon" type="image/png" href="source/admin/assets/images/logos/imprintrutgon.png" />
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
  <div class="grid" style="background-color: #3333">
    <h1 class="title text-center pb-5 pt-3"><b>ADD PRODUCT</b></h1>
    <!-- <div class="d-flex"style="display:center">
      <img src="image/{{$shop->avataShop}}" alt="avata" style="width: 50px;height: 50px; border-radius: 50%;">
      <h3 class="mt-4 ms-3"><b class="text-danger mt-2">{{$shop->nameShop}}</b></h3>        
    </div> -->
    <form action="{{route('addDesignProduct',  ['idShop' => $shop->idShop, 'idProvider' => $provider->idProvider])}}" method="post" enctype="multipart/form-data" class="row gridoriginalproduct">
      @csrf
      <div class="input1 col-6">
        @if (isset($image))
          <img src="source/imageOPr/{{ $image }}" alt="Merged Image">
          <input type="hidden" name="imageProduct" value="{{$image}}" accept="image/*">
        @else
          <p>{{ $error ?? 'No image available.' }}</p>
        @endif

        <div class="color_DPr d-block ms-3 ps-5">
            <p><b>{{$detail->nameOPr}}</b> products are provided by <b>{{$provider->Name}}</b> has <b>{{$detail->NameColor}}</b> color </p><input type="text" name="idOPr" value="{{$detail->idOPr}}" hidden>
            <p></p><input type="text" name="idColor" value="{{$detail->idColor}}" hidden>
          </div>
      </div>
      <div class="input2 col-6" style="display:center">
        <div class="d-flex">
        <div>
          @if (isset($imageDesign))
            <label for="aboutOPr">Image design :</label><br>
            <img src="source/imageOPr/{{ $imageDesign }}" alt="Merged Image" style="width: 160px; height: 90px;">
            <input type="hidden" name="imageDesign"  value="{{$imageDesign}}" accept="image/*">
            @else
            <p>{{ $error ?? 'No image available.' }}</p>
          
          @endif
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
        <div class="buttons col-12 text-end mt-3 mb-5">
        <button class="save px-3">Cancel</button>
        <button type="submit" class="save me-5 px-3" >post</button>
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