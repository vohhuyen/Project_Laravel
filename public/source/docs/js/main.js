
window.onload = function () {
  'use strict';
  const images = document.querySelectorAll('.imageOPr');
  let imgEle1 = images[0];
  imgEle1.style.display = 'block';

  window.showImage = function (colorId) {
      images.forEach(img => {
          img.style.display = img.getAttribute('data-index') === colorId.toString() ? 'block' : 'none';
          if (img.style.display === 'block') {
              imgEle1 = img;
          }
      });
  };
  const buttons = document.querySelectorAll('.btn-show-imageOPr');
  buttons.forEach(button => {
      button.addEventListener('click', function () {
          showImage(this.getAttribute('data-index'));
      });
  });

  var Cropper = window.Cropper;
  var URL = window.URL || window.webkitURL;
  var container = document.querySelector('.img-container');
  var image = container.getElementsByTagName('img').item(0);
  var download = document.getElementById('download');
  var actions = document.getElementById('actions');
  var dataX = document.getElementById('dataX');
  var dataY = document.getElementById('dataY');
  var dataHeight = document.getElementById('dataHeight');
  var dataWidth = document.getElementById('dataWidth');
  var dataRotate = document.getElementById('dataRotate');
  var dataScaleX = document.getElementById('dataScaleX');
  var dataScaleY = document.getElementById('dataScaleY');
  var options = {
    aspectRatio: 16 / 9,
    preview: '.img-preview',
    ready: function (e) {
      console.log(e.type);
    },
    cropstart: function (e) {
      console.log(e.type, e.detail.action);
    },
    cropmove: function (e) {
      console.log(e.type, e.detail.action);
    },
    cropend: function (e) {
      console.log(e.type, e.detail.action);
    },
    crop: function (e) {
      var data = e.detail;

      console.log(e.type);
      dataX.value = Math.round(data.x);
      dataY.value = Math.round(data.y);
      dataHeight.value = Math.round(data.height);
      dataWidth.value = Math.round(data.width);
      dataRotate.value = typeof data.rotate !== 'undefined' ? data.rotate : '';
      dataScaleX.value = typeof data.scaleX !== 'undefined' ? data.scaleX : '';
      dataScaleY.value = typeof data.scaleY !== 'undefined' ? data.scaleY : '';
    },
    zoom: function (e) {
      console.log(e.type, e.detail.ratio);
    }
  };
  var cropper = new Cropper(image, options);
  var originalImageURL = image.src;
  var uploadedImageType = 'image/jpeg';
  var uploadedImageName = 'cropped.jpg';
  var uploadedImageURL;

  // Tooltip
  $('[data-toggle="tooltip"]').tooltip();

  // Buttons
  if (!document.createElement('canvas').getContext) {
    $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
  }
  if (!document.createElement('canvas').getContext) {
    $('button[data-method="merge"]').prop('disabled', true);
  }

  if (typeof document.createElement('cropper').style.transition === 'undefined') {
    $('button[data-method="rotate"]').prop('disabled', true);
    $('button[data-method="scale"]').prop('disabled', true);
  }

  // Download
  if (typeof download.download === 'undefined') {
    download.className += ' disabled';
    download.title = 'Your browser does not support download';
  }

  // Options
  actions.querySelector('.docs-toggles').onchange = function (event) {
    var e = event || window.event;
    var target = e.target || e.srcElement;
    var cropBoxData;
    var canvasData;
    var isCheckbox;
    var isRadio;

    if (!cropper) {
      return;
    }

    if (target.tagName.toLowerCase() === 'label') {
      target = target.querySelector('input');
    }

    isCheckbox = target.type === 'checkbox';
    isRadio = target.type === 'radio';

    if (isCheckbox || isRadio) {
      if (isCheckbox) {
        options[target.name] = target.checked;
        cropBoxData = cropper.getCropBoxData();
        canvasData = cropper.getCanvasData();

        options.ready = function () {
          console.log('ready');
          cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
        };
      } else {
        options[target.name] = target.value;
        options.ready = function () {
          console.log('ready');
        };
      }

      // Restart
      cropper.destroy();
      cropper = new Cropper(image, options);
    }
  };
  var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  function sendImageToServer(image, result, detailValue, providerValue) {
    console.log('image:', image);
    console.log('result:', result);
    // console.log(detailValue);
    // console.log(providerValue);
    axios.post('/postPr', { image: image , result: result, detailValue: detailValue, providerValue: providerValue}, {
      headers: {
        'X-CSRF-TOKEN': csrfToken,
        'Content-Type': 'application/json',
      },
    })
    .then(response => {
      console.log('Response from server:', response.data);
      const data = response.data; 
      if (data.success) {
        window.location.href = '/getformPr?image=' + encodeURIComponent(data.image) + '&result=' + encodeURIComponent(data.result) + '&detailValue=' + data.detailValue + '&providerValue=' + data.providerValue;
      } else {
          console.log('Something went wrong.');
          var divbtn = document.getElementById('btncreate');
          var textbtn = document.getElementById('textbtn');
          var textbt = document.getElementById('textbt');
          divbtn.style.backgroundColor = "#fe5454";
          textbtn.style.color = "white";
          textbt.style.color = "white";
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
  }

  // Methods
  actions.querySelector('.docs-buttons').onclick = function (event) {
    var e = event || window.event;
    var target = e.target || e.srcElement;
    var cropped;
    var result;
    var input;
    var data;

    if (!cropper) {
      return;
    }

    while (target !== this) {
      if (target.getAttribute('data-method')) {
        break;
      }

      target = target.parentNode;
    }

    if (target === this || target.disabled || target.className.indexOf('disabled') > -1) {
      return;
    }

    data = {
      method: target.getAttribute('data-method'),
      target: target.getAttribute('data-target'),
      option: target.getAttribute('data-option') || undefined,
      secondOption: target.getAttribute('data-second-option') || undefined
    };

    cropped = cropper.cropped;

    if (data.method) {
      if (typeof data.target !== 'undefined') {
        input = document.querySelector(data.target);

        if (!target.hasAttribute('data-option') && data.target && input) {
          try {
            data.option = JSON.parse(input.value);
          } catch (e) {
            console.log(e.message);
          }
        }
      }

      switch (data.method) {
        case 'rotate':
          if (cropped && options.viewMode > 0) {
            cropper.clear();
          }

          break;

        case 'getCroppedCanvas':
          try {
            data.option = JSON.parse(data.option);
          } catch (e) {
            console.log(e.message);
          }

          if (uploadedImageType === 'image/jpeg') {
            if (!data.option) {
              data.option = {};
            }

            // data.option.fillColor = '#fff';
          }

          break;

          case 'merge':
          try {
            data.option = JSON.parse(data.option);
          } catch (e) {
            console.log(e.message);
          }

          if (uploadedImageType === 'image/jpeg') {
            if (!data.option) {
              data.option = {};
            }

            // data.option.fillColor = '#fff';
          }

          break;
      }
      
      result = cropper[data.method](data.option, data.secondOption);

      switch (data.method) {
        case 'rotate':
          if (cropped && options.viewMode > 0) {
            cropper.crop();
          }

          break;

        case 'scaleX':
        case 'scaleY':
          target.setAttribute('data-option', -data.option);
          break;

        case 'getCroppedCanvas':
          if (result) {
            // Bootstrap's Modal
            $('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

            if (!download.disabled) {
              download.download = uploadedImageName;
              download.href = result.toDataURL(uploadedImageType);
            }
          }
          break;

        case 'destroy':
          cropper = null;

          if (uploadedImageURL) {
            URL.revokeObjectURL(uploadedImageURL);
            uploadedImageURL = '';
            image.src = originalImageURL;
          }
          break;

          case 'merge':
          if (result) {
              // let imgEle1 = document.querySelector(".imageanhchinh");
              let imgEle2 = result;
              let resEle = document.querySelector(".resultmerge");
              var context = resEle.getContext("2d");

              var myElement = document.getElementById('preview');

              
              const newWidth1 = 500;
              const newHeight1 = 500; 
              const newWidth2 = myElement.clientWidth; 
              const newHeight2 = myElement.clientHeight; 

              resEle.width = newWidth1 + newWidth2;
              resEle.height = Math.max(newHeight1, newHeight2);

              const centerX = (newWidth1 - newWidth2) / 2;
              const centerY = (resEle.height - newHeight2) / 2 -27;

              context.globalAlpha = 1.0;
              context.drawImage(imgEle1, 0, 0, newWidth1, newHeight1);

              context.globalAlpha = 0.99;
              context.drawImage(imgEle2, centerX, centerY, newWidth2, newHeight2);

              var img = resEle.toDataURL("image/png");
              var result = imgEle2.toDataURL("image/png");
              const detailValue = imgEle1.getAttribute('data-detail');
              const providerValue = imgEle1.getAttribute('data-provider');
              // console.log(detailValue);
              // console.log(providerValue);
              sendImageToServer(img, result, detailValue, providerValue);
          }
          break;
      }
      

      if (typeof result === 'object' && result !== cropper && input) {
        try {
          input.value = JSON.stringify(result);
        } catch (e) {
          console.log(e.message);
        }
      }
    }
  };

  document.body.onkeydown = function (event) {
    var e = event || window.event;

    if (e.target !== this || !cropper || this.scrollTop > 300) {
      return;
    }

    switch (e.keyCode) {
      case 37:
        e.preventDefault();
        cropper.move(-1, 0);
        break;

      case 38:
        e.preventDefault();
        cropper.move(0, -1);
        break;

      case 39:
        e.preventDefault();
        cropper.move(1, 0);
        break;

      case 40:
        e.preventDefault();
        cropper.move(0, 1);
        break;
    }
  };

  // Import image
  var inputImage = document.getElementById('inputImage');

  if (URL) {
    inputImage.onchange = function () {
      var files = this.files;
      var file;

      if (files && files.length) {
        file = files[0];

        if (/^image\/\w+/.test(file.type)) {
          uploadedImageType = file.type;
          uploadedImageName = file.name;

          if (uploadedImageURL) {
            URL.revokeObjectURL(uploadedImageURL);
          }

          image.src = uploadedImageURL = URL.createObjectURL(file);

          if (cropper) {
            cropper.destroy();
          }

          cropper = new Cropper(image, options);
          inputImage.value = null;
        } else {
          window.alert('Please choose an image file.');
        }
      }
    };
  } else {
    inputImage.disabled = true;
    inputImage.parentNode.className += ' disabled';
  }
};
