<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="source/admin/assets/css/addOPr.css">
    <link rel="stylesheet" href="source/css/main.css">
    <title>Thêm loại sản phẩm gốc</title>
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
   <h2 class="title">Form Thêm Loại Sản Phẩm Gốc</h2>
   <form action="{{ route('addOPr') }}" method="post" enctype="multipart/form-data"class="row gridoriginalproduct">
    @csrf
  
     <!-- ----------------------------------------------nameCategoryOPrDetail -------------------------------------------------->
    <!-- +idCategoryOPr -->
    <!-- +nameCategoryOPrDetail -->
    <div class="input1 col-6">
        <label for="idCategoryPrDetail"> Danh Mục Sản Phẩm Gốc: </label>
            <div>
                <select name="idCategoryOPrDetail" id="idCategoryOPrDetail" class="input" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                    @foreach($category_opr_detail as $category_opr_details)
                        <option value="{{ $category_opr_details->idCategoryOPrDetail }}">
                            {{ $category_opr_details->nameCategoryOPrDetail }}
                        </option>
                    @endforeach
                </select>
            </div>
            <br>
            
    <!------------------------------------ OriginalProduct ----------------------------------->
    <!-- +idCategoryPrDetail -->
     <!-- +descriptionOPr -->
     
     <label for="descriptionOPr" >Mô Tả Sản phẩm gốc:</label>
     <br>
    <textarea id="descriptionOPr" name="descriptionOPr" rows="4" class="input" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required  ></textarea>
    <br>
    <!-- +image -->
    <label for="image" >Chọn Hình Ảnh đại diện cho sản phẩm gốc: </label>
    <br>
    <input type="file" id="inputImage" name="inputImage" accept="image/*" class="input"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required >
     </div>
    <br></br>
    <!-- +nameOPr -->
    <div class="input2 col-6">
    <label for="nameOPr" >Tên Sản Phẩm Gốc : </label>
    <br>
     <input type="text" id="nameOPr" name="nameOPr" class="input" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required >
     <!-- +aboutOPr -->
     <br>
    <label for="aboutOPr" >Giới Thiệu Sản Phẩm Gốc : </label> 
    <br>
    <textarea id="aboutOPr" name="aboutOPr" rows="4" class="input" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required ></textarea>
    </div>
    <br></br>
    <div class="horizontal-line"></div>
    <br></br>
     <!-- ------------------------------------------------------SizeGuide -------------------------------------------------------->
    <!-- +idOPr -->
    <!-- +width -->
    <!-- +length -->
    <!-- +Sleeve length -->
    <div class="input1 col-6">
    <tbody id="SizeGuide">Original Product Size:<tr>
    <br></br>
                    <td>1</td>
                    <td><button class="SizeName">S</button></td>
                    <input type="number" id="width1" placeholder="Enter width"style="color"  class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                    <input type="number" id="lenght1" placeholder="Enter lenght"  class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                    <input type="number" id="Sleevelength" placeholder="Enter Sleevelength"  class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"></td>
                    <br>
                </tr><tr>
                    <td>2</td>
                    <td><button class="SizeName">M</button></td>
                   <input type="number" id="width2" placeholder="Enter width" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                   <input type="number" id="lenght2" placeholder="Enter lenght" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                   <input type="number" id="Sleevelength" placeholder="Enter Sleevelength" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"></td>
                    <br>
                </tr><tr>
                    <td>3</td>
                    <td><button class="SizeName">L</button></td>
                    <input type="number" id="width3" placeholder="Enter width" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                    <input type="number" id="lenght3" placeholder="Enter lenght" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                    <input type="number" id="Sleeve Length from center back" placeholder="Enter Sleevelength" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"></td>
                    <br>
                </tr><tr>
                    <td>4</td>
                    <td><button class="SizeName">XL</button></td>
                    <input type="number" id="width4" placeholder="Enter width" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                    <input type="number" id="lenght4" placeholder="Enter lenght" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                    <input type="number" id="Sleevelength" placeholder="Enter Sleevelength" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"></td>
                    <br>
                </tr><tr>
                    <td>5</td>
                    <td><button class="SizeName">2XL</button></td>
                    <input type="number" id="width5" placeholder="Enter width" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                    <input type="number" id="lenght5" placeholder="Enter lenght" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                    <input type="number" id="Sleevelength" placeholder="EnterSleevelength" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"></td>
                    <br>
                </tr><tr>
                    <td>6</td>
                    <td><button class="SizeName">3XL</button></td>
                    <input type="number" id="width6" placeholder="Enter width" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                    <input type="number" id="lenght6" placeholder="Enter lenght" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                    <input type="number" id="Sleevelength" placeholder="Enter Sleevelength" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"></td>
                    <br>
                </tr><tr>
                    <td>7</td>
                    <td><button class="SizeName">4XL</button></td>
                    <input type="number" id="width7" placeholder="Enter width" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                    <input type="number" id="lenght7" placeholder="Enter lenght" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                    <input type="number" id="Sleevelength" placeholder="Enter Sleevelength" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"></td>
                    <br>
                </tr><tr>
                    <td>8</td>
                    <td><button class="SizeName">5XL</button></td>
                    <input type="number" id="width8" placeholder="Enter width" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                    <input type="number" id="lenght8" placeholder="Enter lenght" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                    <input type="number" id="Sleevelength" placeholder="Enter Sleevelength" class="a1"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"></td>
                    <br>
                </tr></tbody>
        <br></br>
<!-- ----------------------------------------------------keyFeature  ----------------------------------------------------------------------->
<div>
    <label for="idinputkf"> keyFeature: </label>
    <div>
        <select name="idinputkf" id="idinputkf" class="input" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';" onchange="displaySelectedOption()">
            @foreach($inputkf as $inputkfs)
            <option value="{{ $inputkfs->idinputkf }}">
                {{ $inputkfs->Nameinputkf }}
            </option>
            @endforeach
        </select>
        <button onclick="showSelectedOptions()">Xem danh sách đã chọn</button>
        <div id="selectedOptions"></div>
    </div>
</div>

<script>
    var selectedOptions = [];

    function displaySelectedOption() {
        var selectElement = document.getElementById("idinputkf");
        var selectedOptionId = selectElement.options[selectElement.selectedIndex].value;
        var selectedOptionName = selectElement.options[selectElement.selectedIndex].text;

        // Kiểm tra xem đã chọn chưa trước khi thêm vào mảng
        if (!selectedOptions.find(option => option.id === selectedOptionId)) {
            selectedOptions.push({ id: selectedOptionId, name: selectedOptionName });
        }
    }

    function showSelectedOptions() {
        var selectedOptionsDiv = document.getElementById("selectedOptions");
        selectedOptionsDiv.innerHTML = "";
        var message = "Danh sách đã chọn:\n";
        for (var i = 0; i < selectedOptions.length; i++) {
            var selectedOption = selectedOptions[i];
            message += selectedOption.name + "\n";
            var newOptionDiv = document.createElement("div");
            newOptionDiv.innerHTML = selectedOption.name;
            selectedOptionsDiv.appendChild(newOptionDiv);
        }
        alert(message);
    }
</script>
<!--------------------------------------------------------------------------------------------------------  -->


   </div>
<!-- -------------------------------------------------------------color-------------------------------------------------------------------- -->
        <!-- Color buttons container -->
<div class="input2 col-6">
    <label for="idCategoryPrDetail"> Chọn màu và hình ảnh cho Sản Phẩm Gốc: </label><br></br>
    <div class="color-buttons">
        @foreach($color as $colors)
            <button type="button" class="color-button" onclick="showForm('{{ $colors->idColor }}')">
                {{ $colors->NameColor }}
            </button>
        @endforeach
    </div>

    <!-- Form container -->
    <div id="formContainer">
        @foreach($color as $colors)
            <div class="color-form" id="form_{{ $colors->idColor }}">
                <h3>{{ $colors->NameColor }} Form</h3>
                <div id="imageInputs_{{ $colors->idColor }}">
                    <!-- Add 1 image upload field -->
                    <input type="file" name="imageinputkf[]" class="image-upload input ">
                </div>
                <button type="button"  class="color-button" onclick="addImageInput('{{ $colors->idColor }}')">Thêm ảnh</button>
            </div>
        @endforeach
    </div>
    <br></br>


<script>
    function showForm(selectedColorId) {
        // Hide all color forms
        var forms = document.getElementsByClassName('color-form');
        for (var i = 0; i < forms.length; i++) {
            forms[i].classList.remove('active');
        }

        // Show the selected color form
        var selectedForm = document.getElementById('form_' + selectedColorId);
        if (selectedForm) {
            selectedForm.classList.add('active');
        }
    }

    function addImageInput(colorId) {
        var imageInputsContainer = document.getElementById('imageInputs_' + colorId);
        var input = document.createElement('input');
        input.type = 'file';
        input.name = 'imageinputkf[]';
        input.className = 'image-upload input ';
        imageInputsContainer.appendChild(input);
    }
</script>


    
    
    <!---------------------------------------------------------- Nút Submit----------------------------------------------------------------------->
    
    <div class="buttons col-12">
    <button type="submit" class="save" >Save</button>
    <a href="{{route('originalproduct')}}" class="cancel">cancel</a>
    <a href="{{route('addOPr')}}" class="clear">clear</a>

    </div>
</div>
    </form>
    </body>
    </html>



