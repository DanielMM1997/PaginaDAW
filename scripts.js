// Scripts 
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
}

function updateImagesDestacadas(responseText) {
  var datos = JSON.parse(responseText);
  for (let i = 0; i < 6; i++) {
    for (var j in datos['backgrounds'][i]) {
      console.log(datos['backgrounds'][i][j]['url']);
      var img = '<div class="col-4 responsive p-3"><img src="'+datos['backgrounds'][i][j]['url']+'" alt="'+datos['backgrounds'][i][j]['title']+'"></div>';
      $('.rellenarDestacadas').append(img);
    }
  }
}

function updateImagesRecientes(responseText) {
  var datos = JSON.parse(responseText);
  for (let i = 6; i < 12; i++) {
    for (var j in datos['backgrounds'][i]) {
      console.log(datos['backgrounds'][i][j]['url']);
      var img = '<div class="col-4 responsive p-3"><img src="'+datos['backgrounds'][i][j]['url']+'" alt="'+datos['backgrounds'][i][j]['title']+'"></div>';
      $('.rellenarRecientes').append(img);
    }
  }
}

$('.menu-hidden').on('click', function () {
  $('.article').toggle();
  $('.my-nav').toggle();
});

/**
 * - breakpoint 0 - <360 movil pequeño
 * se muestra menu oculto
 * se ven solo una imagenen
 * 
 * - breackpont 360 - <640 
 * menu oculto
 * se ven dos imagenes
 * 
 * - breakpoint 640 - <768
 * menu oculto
 * se ven tres imagenes
 * 
 * - breakpoint 768 - <1024
 * se muestra nav menu
 * 
 * - breakpoint 1024 - <1920
 * se ven tres imagenes
 * 
 * - breakpoint 1920 - 
 * se ven cinco imagenes 
 */
if ($(window).width() < 360) {
  $('.col-4 .responsive').removeClass('col-4');
  $('.responsive').addClass('col-12');
}

if ($(window).width() >= 768 && $(window).width() <= 1024) {
  $('ul').removeClass('flex-column');
  $('li .d-none').removeClass('d-none');
}

if ($(window).width() <= 1024) {
  $('li .d-none').removeClass('d-none');
}

if ($(window).width() <= 360) {
  $('.col-4 .responsive').removeClass('col-4');
  $('.responsive').addClass('col-6');

  $('.col-2 .responsive').removeClass('col-2');
  $('.col-2 .responsive').addClass('col-3');
}

if ($(window).width() >= 640 && $(window).width() <= 768) {
  $('.responsive').removeClass('col-2');
  $('.responsive').addClass('col-3');
}

if ($(window).width() >= 768 && $(window).width() <= 1024) {
  $('.responsive').removeClass('col-2');
  $('.responsive').addClass('col-3');
}

