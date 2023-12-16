<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <base href="{{asset('')}}"></base>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="JavaScript image cropper.">
  <meta name="author" content="Chen Fengyuan">
  <script>
    var baseUrl = '{{ url("/") }}';
  </script>
   <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Design</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@4/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="source/docs/css/cropper.css">
  <link rel="stylesheet" href="source/docs/css/main.css">
  <link rel="stylesheet" href="source/fontawesome-free-6.4.0-web/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
  
  <!-- Content -->
  <div class="content mt-2">
    <div class="headerDesign d-flex justify-content-between">
      <div class="d-flex">
        <a  href="#">
          <button class="btn-back">
            <i class="fa-solid fa-arrow-left-long"></i>
            <span>Back to original product</span>
          </button>
        </a>
        <div>
          <b>{{$pro->nameOPr}}</b>
          <p>By {{$provider->Name}} • USD {{$detail->priceOPr}}</p>
        </div>
      </div>
      <button class="mx-3 btn-back mb-1">
        <i class="fa-solid fa-store icon-store"></i>
        @if(Session::has('user'))
        <span>{{$shop->nameShop}}</span>
        @else 
        <span>Create Shop</span>
        @endif
      </button>
    </div>
    <div class="d-flex">
      <div class="col-md-6">
        <!-- <h3>Demo:</h3> -->
        <div class="docs-demo">
          <div class="img-container">
            <img src="https://content.hostgator.com/img/weebly_image_sample.png" alt="Picture">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <!-- <h3>Preview:</h3> bg-pr-->
        <div class="docs-preview clearfix bg-pr"> 
        @foreach($colorProvider as $color)
                @if($color->idOPr == $find && $color->role == 1)
          <img src="source/imageOPr/{{$color->imageOPr}}" data-detail="{{$color->idOPrDetail}}" data-provider="{{$provider->idProvider}}" style="display: none" class="rounded-top imageOPr" data-index="{{$color->idColor}}" alt="image Product">
          @endif
        @endforeach
          <div class="d-flex justify-content-center">
            <div class="img-preview preview-lg" id="preview"></div>
          </div>
          <!-- <div class="img-preview preview-md"></div>
          <div class="img-preview preview-sm"></div>
          <div class="img-preview preview-xs"></div> -->
        </div>
      </div>
    </div>
    <div class="row" id="actions">
      <div class="col-md-7 docs-buttons">
        <!-- <h3>Toolbar:</h3> -->
        <div class="btn-group">
          <button type="button" class="btn btn-color" data-method="setDragMode" data-option="move" title="Move">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.setDragMode(&quot;move&quot;)">
              <span class="fa fa-arrows-alt"></span>
            </span>
          </button>
          <button type="button" class="btn btn-color" data-method="setDragMode" data-option="crop" title="Crop">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.setDragMode(&quot;crop&quot;)">
              <span class="fa fa-crop-alt"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-color" data-method="zoom" data-option="0.1" title="Zoom In">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoom(0.1)">
              <span class="fa fa-search-plus"></span>
            </span>
          </button>
          <button type="button" class="btn btn-color" data-method="zoom" data-option="-0.1" title="Zoom Out">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoom(-0.1)">
              <span class="fa fa-search-minus"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-color" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(-10, 0)">
              <span class="fa fa-arrow-left"></span>
            </span>
          </button>
          <button type="button" class="btn btn-color" data-method="move" data-option="10" data-second-option="0" title="Move Right">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(10, 0)">
              <span class="fa fa-arrow-right"></span>
            </span>
          </button>
          <button type="button" class="btn btn-color" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(0, -10)">
              <span class="fa fa-arrow-up"></span>
            </span>
          </button>
          <button type="button" class="btn btn-color" data-method="move" data-option="0" data-second-option="10" title="Move Down">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(0, 10)">
              <span class="fa fa-arrow-down"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-color" data-method="rotate" data-option="-45" title="Rotate Left">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotate(-45)">
              <span class="fa fa-undo-alt"></span>
            </span>
          </button>
          <button type="button" class="btn btn-color" data-method="rotate" data-option="45" title="Rotate Right">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotate(45)">
              <span class="fa fa-redo-alt"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-color" data-method="scaleX" data-option="-1" title="Flip Horizontal">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.scaleX(-1)">
              <span class="fa fa-arrows-alt-h"></span>
            </span>
          </button>
          <button type="button" class="btn btn-color" data-method="scaleY" data-option="-1" title="Flip Vertical">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.scaleY(-1)">
              <span class="fa fa-arrows-alt-v"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-color" data-method="crop" title="Crop">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.crop()">
              <span class="fa fa-check"></span>
            </span>
          </button>
          <button type="button" class="btn btn-color" data-method="clear" title="Clear">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.clear()">
              <span class="fa fa-times"></span>
            </span>
          </button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-color" data-method="disable" title="Disable">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.disable()">
              <span class="fa fa-lock"></span>
            </span>
          </button>
          <button type="button" class="btn btn-color" data-method="enable" title="Enable">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.enable()">
              <span class="fa fa-unlock"></span>
            </span>
          </button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-color" data-method="reset" title="Reset">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.reset()">
              <span class="fa fa-sync-alt"></span>
            </span>
          </button>
          <label class="btn-main btn btn-color btn-upload" for="inputImage" title="Upload image file">
            <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
            <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
              <span class="fa fa-upload"></span>
            </span>
          </label>
          <button type="button" class="btn btn-color" data-method="destroy" title="Destroy">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.destroy()">
              <span class="fa fa-power-off"></span>
            </span>
          </button>
        </div>

        <div class="btn-group btn-group-crop">
          <button type="button" class="btn btn-color" data-method="getCroppedCanvas" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
            <span class="docs-tooltip" data-toggle="tooltip" title="maxWidth: 4096, maxHeight: 4096 ">
              Get Cropped Canvas
            </span>
          </button>
          <button type="button" class="btn btn-color merge" data-method="merge" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
            <span class="docs-tooltip" data-toggle="tooltip" title="maxWidth: 4096, maxHeight: 4096 ">
              Click here
            </span>
          </button>
        </div>

        <!-- Show the cropped image in modal -->
        <div class="modal fade docs-cropped" id="getCroppedCanvasModal" role="dialog" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body"></div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-color" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
              </div>
            </div>
          </div>
        </div><!-- /.modal -->

        <button type="button" class="btn btn-color btn-group" data-method="moveTo" data-option="0">
          <span class="docs-tooltip" data-toggle="tooltip">
            Move to [0,0]
          </span>
        </button>
        <button type="button" class="btn btn-color btn-group" data-method="zoomTo" data-option="1">
          <span class="docs-tooltip" data-toggle="tooltip">
            Zoom to 100%
          </span>
        </button>
        <div class="row d-flex">
              <button class="col-5 mx-2 btn-main btn btn-color">Add Cart</button>
              <button class="col-5 mx-2 btn-main btn btn-color">Done</button>
            </div>
        <!-- <textarea class="form-control" id="putData" placeholder="Get data to here or set data with this value"></textarea> -->
      </div><!-- /.docs-buttons -->
      <div class="col-md-5 docs-toggles">
            <!-- <h3>Toggles:</h3> -->
            <div class="btn-group d-flex flex-nowrap" data-toggle="buttons">
              <label class="btn btn-color active">
                <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
                <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9">
                  16:9
                </span>
              </label>
              <label class="btn btn-color">
                <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1.3333333333333333">
                <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 4 / 3">
                  4:3
                </span>
              </label>
              <label class="btn btn-color">
                <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="1">
                <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 1 / 1">
                  1:1
                </span>
              </label>
              <label class="btn btn-color">
                <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="0.6666666666666666">
                <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 2 / 3">
                  2:3
                </span>
              </label>
              <label class="btn btn-color">
                <input type="radio" class="sr-only" id="aspectRatio5" name="aspectRatio" value="NaN">
                <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN">
                  Free
                </span>
              </label>
            </div>
            <div class="btn-group d-flex flex-nowrap" data-toggle="buttons">
              <label class="btn btn-color active">
                <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked>
                <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">
                  VM0
                </span>
              </label>
              <label class="btn btn-color">
                <input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
                <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
                  VM1
                </span>
              </label>
              <label class="btn btn-color">
                <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
                <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 2">
                  VM2
                </span>
              </label>
              <label class="btn btn-color">
                <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
                <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 3">
                  VM3
                </span>
              </label>
        </div>
            <div class="color-circle-all">
            @foreach($colorProvider as $color)
                @if($color->idOPr == $find && $color->role == 1)
                    <button class="btn-group btn-show-imageOPr btn btn-color" onclick="showImage({{$color->idColor}})"><img src="image/{{$color->imageColor}}" alt="#"></button>
                @endif
            @endforeach
            </div>
            
      </div><!-- /.docs-toggles -->
      </div>
    </div>
  </div>

  @foreach($colorProvider as $color)
    @if($color->idOPr == $find && $color->role == 1)
  <img class="imageanhchinh d-none" src="source/imageOPr/{{$color->imageOPr}}" data-detail="{{$color->idOPrDetail}}" data-provider="{{$provider->idProvider}}" data-index="{{$color->idColor}}" class="rounded-top imageOPr"  alt="image Product"/>
    @endif
  @endforeach
  <canvas class="resultmerge d-none" id="resultmerge"></canvas>
  <br/>
  <!-- Scripts -->
  
  <script src="https://unpkg.com/jquery@3/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap@4/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="https://fengyuanchen.github.io/shared/google-analytics.js" crossorigin="anonymous"></script>
  <script src="source/docs/js/cropper.js"></script>
  <script src="source/docs/js/main.js"></script>
  <script>
        document.addEventListener("DOMContentLoaded", function () {
            const images = document.querySelectorAll('.imageOPr');
            const buttons = document.querySelectorAll('.btn-show-imageOPr');

            // Hiển thị ảnh đầu tiên mặc định
            images[0].style.display = 'block';

            // Hàm hiển thị ảnh tương ứng với nút được bấm
            function showImage(color) {
                // Ẩn tất cả ảnh
                images.forEach(img => img.style.display = 'none');

                // Hiển thị ảnh tương ứng
                images[color].style.display = 'block';
            }

            // Gắn sự kiện click cho từng nút
            buttons.forEach((button, color) => {
                button.addEventListener('click', function () {
                    showImage(color);
                });
            });
      });
    </script>
</body>
</html>
