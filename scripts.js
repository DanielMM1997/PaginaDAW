// Scripts
var colunmSize = 4;

if ($(window).width() >= 1900) {
  colunmSize = 2;
}

if ($(window).width() < 768) {
  $('li .d-none').removeClass('d-none');
  colunmSize = 4;
}

if ($(window).width() < 640) {
  colunmSize = 6;
}

if ($(window).width() < 360) {
  colunmSize = 12;
}

if ($(window).width() >= 768 && $(window).width() <= 1024) {
  $('ul').removeClass('flex-column');

}

$('.menu-hidden').on('click', function () {
  $('.article').toggle();
  $('.my-nav').toggle();
});

window.onload = function () {
  var url = 'content/backgrounds.json';
  var request = new XMLHttpRequest();
  request.open("GET", url);
  request.onload = function () {
    if (request.status == 200) {
      updateImagesDestacadas(request.responseText);
      updateImagesRecientes(request.responseText);
    }
  };
  request.send(null);
  console.log('se llama segundo')
}

function updateImagesDestacadas(responseText) {
  var datos = JSON.parse(responseText);
  for (let i = 0; i < 6; i++) {
    for (var j in datos['backgrounds'][i]) {
      var img = '<div class="col-' + colunmSize + ' responsive p-1">' +
        '<a href="view_image.php?id=' + datos['backgrounds'][i][j]['id'] + '&category='+datos['backgrounds'][i][j]['categories'] + '">' +
        '<img id="' + datos['backgrounds'][i][j]['id'] + '" src="' + datos['backgrounds'][i][j]['url'] + '" alt="' + datos['backgrounds'][i][j]['title'] + '"></a></div>';
      $('.rellenarDestacadas').append(img);
    }
  }
}

function updateImagesRecientes(responseText) {
  var datos = JSON.parse(responseText);
  for (let i = 6; i < 12; i++) {
    for (var j in datos['backgrounds'][i]) {
      var img = '<div class="col-' + colunmSize + ' responsive p-1">' +
        '<a href="view_image.php?id=' + datos['backgrounds'][i][j]['id'] + '&category='+datos['backgrounds'][i][j]['categories'] + '">' +
        '<img id="' + datos['backgrounds'][i][j]['id'] + '" src="' + datos['backgrounds'][i][j]['url'] + '" alt="' + datos['backgrounds'][i][j]['title'] + '"></a></div>';
      $('.rellenarRecientes').append(img);
    }
  }
}

function updateImagesCategories(category) {
  var url = 'content/backgrounds.json';
  var request = new XMLHttpRequest();
  request.open("GET", url);
  request.onload = function () {
    if (request.status == 200) {
      var datos = JSON.parse(request.responseText);
      var onylThisCategory = [];
      $.each(datos.backgrounds, function (i, arr) {
        for (let ele = 0; ele < arr.length; ele++) {
          if (arr[ele].categories == category) {
            onylThisCategory.push(arr)
          }
        }
      });
      $('#pagination').pagination({
        dataSource: onylThisCategory,
        pageSize: 6,
        callback: function (data, pagination) {
          $('.rellenarCategorias').empty();
          $.each(data, function (i, arr) {
            for (let ele = 0; ele < arr.length; ele++) {
              var img = '<div class="col-' + colunmSize + ' responsive p-1">' +
                '<a href="view_image.php?id=' + arr[ele].id + '&category='+ arr[ele].categories + '">' +
                '<img id="' + arr[ele].id + '" src="' + arr[ele].url + '" alt="' + arr[ele].title + '"></a></div>';
              $('.rellenarCategorias').append(img);
            }
          });
        }
      });
    }
  }
  request.send(null);
}

function updateImage(id) {
  var url = 'content/backgrounds.json';
  var request = new XMLHttpRequest();
  request.open("GET", url);
  request.onload = function () {
    console.log('asd',id);
    if (request.status == 200) {
      var datos = JSON.parse(request.responseText);
      $.each(datos.backgrounds, function (i, arr) {
        for (let ele = 0; ele < arr.length; ele++) {
          if (arr[ele].id == id) {
            var img = '<div class="col-12 responsive p-3">' +
              '<img id="' + arr[ele].id + '" src="' + arr[ele].url + '" alt="' + arr[ele].title + '"></div>';
            $('.rellenarImagen').append(img);
          }
        }
      });
    }
  }
  request.send(null);
}
