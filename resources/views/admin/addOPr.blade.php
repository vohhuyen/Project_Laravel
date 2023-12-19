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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
<body class="grid">
    <div class="content">
        <div class="text-center">
            <b id="title">Add Original Product</b>
        </div>
        <form action="{{ route('addOPrr') }}" method="post" enctype="multipart/form-data"class="row gridoriginalproduct" onsubmit="saveImagesToDatabase(event)">
        @csrf
            <div class="input1 col-6">
                <div class="form-group">
                    <label for="idCategoryPrDetail">Danh Mục Sản Phẩm Gốc: </label>
                    <div>
                        <select name="idCategoryOPrDetail" id="idCategoryOPrDetail" class="input" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                            @foreach($category_opr_detail as $category_opr_details)
                                <option value="{{ $category_opr_details->idCategoryOPrDetail }}">
                                    {{ $category_opr_details->nameCategoryOPrDetail }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <pre></pre>
                <div class="form-group">
                    <label for="descriptionOPr" >Mô Tả Sản phẩm gốc:</label>
                    <textarea id="descriptionOPr" name="descriptionOPr" rows="4" class="input" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required  ></textarea>
                </div>
                <div class="form-group">
                    <label for="image" >Chọn Hình Ảnh đại diện cho sản phẩm gốc: </label>
                    <input type="file" id="inputImage" name="inputImage" accept="image/*" class="input"  onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required >
                </div>
            </div>
            <div class="input2 col-6">
                <div class="form-group mb-3">
                    <label for="nameOPr" >Tên Sản Phẩm Gốc : </label>
                    <input type="text" id="nameOPr" name="nameOPr" class="input" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required >
                </div>
                <div class="form-group">
                    <label for="aboutOPr" >Giới Thiệu Sản Phẩm Gốc : </label> 
                    <textarea id="aboutOPr" name="aboutOPr" rows="4" class="input" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required ></textarea>
                </div>
            </div>
            <div class="horizontal-line my-5"></div>
            <div class="input1 col-6">
                <table>
                    <tbody id="SizeGuide">Original Product Size:
                        <tr>
                            <td><button class="SizeName">S</button></td>
                            <td><input type="number" name="size1s" id="width1" placeholder="Enter width"style="color"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                            <td><input type="number" name="size2s" id="lenght1" placeholder="Enter lenght"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                            <td><input type="number" name="size3s" id="Sleevelength" placeholder="Enter Sleevelength"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                        </tr>
                        <tr>
                            <td><button class="SizeName">M</button></td>
                            <td><input type="number" name="size1m" id="width1" placeholder="Enter width"style="color"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                            <td><input type="number" name="size2m" id="lenght1" placeholder="Enter lenght"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                            <td><input type="number" name="size3m" id="Sleevelength" placeholder="Enter Sleevelength"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                        </tr>
                        <tr>
                            <td><button class="SizeName">L</button></td>
                            <td><input type="number" name="size1l" id="width1" placeholder="Enter width"style="color"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                            <td><input type="number" name="size2l" id="lenght1" placeholder="Enter lenght"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                            <td><input type="number" name="size3l" id="Sleevelength" placeholder="Enter Sleevelength"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                        </tr>
                        <tr>
                            <td><button class="SizeName">XL</button></td>
                            <td><input type="number" name="size1xl" id="width1" placeholder="Enter width"style="color"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                            <td><input type="number" name="size2xl" id="lenght1" placeholder="Enter lenght"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                            <td><input type="number" name="size3xl" id="Sleevelength" placeholder="Enter Sleevelength"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                        </tr>
                        <tr>
                            <td><button class="SizeName">2XL</button></td>
                            <td><input type="number" name="size12xl" id="width1" placeholder="Enter width"style="color"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                            <td><input type="number" name="size22xl" id="lenght1" placeholder="Enter lenght"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                            <td><input type="number" name="size32xl" id="Sleevelength" placeholder="Enter Sleevelength"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                        </tr>
                        <tr>
                            <td><button class="SizeName">3XL</button></td>
                            <td><input type="number" name="size13xl" id="width1" placeholder="Enter width"style="color"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                            <td><input type="number" name="size23xl" id="lenght1" placeholder="Enter lenght"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                            <td><input type="number" name="size33xl" id="Sleevelength" placeholder="Enter Sleevelength"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                        </tr>
                        <tr>
                            <td><button class="SizeName">4XL</button></td>
                            <td><input type="number" name="size14xl" id="width1" placeholder="Enter width"style="color"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                            <td><input type="number" name="size24xl" id="lenght1" placeholder="Enter lenght"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                            <td><input type="number" name="size34xl" id="Sleevelength" placeholder="Enter Sleevelength"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                        </tr>
                        <tr>
                            <td><button class="SizeName">5XL</button></td>
                            <td><input type="number" name="size15xl" id="width1" placeholder="Enter width"style="color"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                            <td><input type="number" name="size25xl" id="lenght1" placeholder="Enter lenght"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                            <td><input type="number" name="size35xl" id="Sleevelength" placeholder="Enter Sleevelength"  class="a1"  step="0.01" pattern="[0-9]+(\.[0-9]+)?"></td>
                        </tr>
                    </tbody>
                </table>
                <div>
                    <label for="idinputkf"> keyFeature: </label>
                    <div>
                        <select name="idinputkf" id="idinputkf" class="input" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                            @foreach($inputkf as $inputkfs)
                            <option value="{{ $inputkfs->idinputkf }}">
                                {{ $inputkfs->Nameinputkf }}
                            </option>
                            @endforeach
                        </select>
                        <div id="selectedOptions" class="mt-3"></div>
                    </div>
                </div>
            </div>
            <div class="input2 col-6">
                <label for="idCategoryPrDetail"> Chọn màu và hình ảnh cho Sản Phẩm Gốc: </label>
                <div class="color-buttons">
                    @foreach($color as $colors)
                        <button type="button" class="color-button" onclick="showForm('{{ $colors->idColor }}')">
                            {{ $colors->NameColor }}
                        </button>
                    @endforeach
                </div>

                <div id="formContainer">
                    @foreach($color as $colors)
                        <div class="color-form" id="form_{{ $colors->idColor }}">
                            <input type="hidden" name="color_id[]" value="{{ $colors->idColor }}">
                            <h3>{{ $colors->NameColor }} Form</h3>
                            <div id="imageInputs_{{ $colors->idColor }}">
                                <input type="file" name="imageinputcolor_{{ $colors->idColor }}[]" class="image-upload input">
                            </div>
                            <button type="button" class="color-button" onclick="addImageInput('{{ $colors->idColor }}')">Thêm ảnh</button>
                        </div>
                    @endforeach
                </div>
                <br></br>               
            </div>
            <div class="input1">
                <label for="idinputkf"> CareIntruction: </label>
                <div>
                    <select name="idinputci" id="idinputci" class="input" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
                        @foreach($inputci as $inputcis)
                        <option value="{{ $inputcis->idinputci }}">
                            <img src="source/inputimageci/{{ $inputcis->imageinputci }}" alt="#">
                            {{ $inputcis->description }}
                        </option>
                        @endforeach
                    </select>
                    <div id="selectedOption" class="mt-3"></div>
                    <label for="idinputkf"> Description: </label>
                    <textarea class="input" name="descriptionci" id="descriptionci"></textarea>
                </div>
            </div>
            <div class="buttons col-12 text-end mt-5 pt-5">
                <a href="{{route('addOPr')}}" class="clear">clear</a>
                <a href="{{route('originalproduct')}}" class="cancel">cancel</a>
                <button type="submit" class="save" >Save</button>
            </div>
        </form>
    </div>
</body>
</html>
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
            input.name = 'imageinputcolor_'+colorId +'[]';
            input.className = 'image-upload input ';
            imageInputsContainer.appendChild(input);
        }
</script>
<script>
        $(document).ready(function() {
            $('#idinputkf').on('change', function () {
                var selectedOptions = [];
                let selectOption = $('#selectedOptions');

                $(this).find('option:selected').each(function () {
                    var selectedValue = $(this).val();
                    var selectedText = $(this).text();

                    selectedOptions.push({
                        value: selectedValue,
                        text: selectedText
                    });
                });

                console.log(selectedOptions);
                $.each(selectedOptions, function (index, option){
                    selectOption.append('<div class="d-flex"><p class="me-2">' + option.text + '</p><input type="hidden" name="idkf[]" value="'+ option.value +'"><input type="text" name="deskf_'+ option.value +'" class="input" placeholder="enter your description......."></div><br>');
                });
            });
        });
</script>
<script>
        $(document).ready(function() {
            $('#idinputci').on('change', function () {
                var selectedOptions = [];
                let selectOption = $('#selectedOption');

                $(this).find('option:selected').each(function () {
                    var selectedValue = $(this).val();
                    var selectedText = $(this).text();

                    selectedOptions.push({
                        value: selectedValue,
                        text: selectedText
                    });
                });

                console.log(selectedOptions);
                $.each(selectedOptions, function (index, option){
                    selectOption.append('<span class="me-2">' + option.text + '</span><input type="hidden" name="idci[]" value="'+ option.value +'">,');
                });
            });
        });
</script>


