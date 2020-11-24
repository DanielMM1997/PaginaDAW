$('.menu-hidden').on('click', function () {
  $('.article').toggle();
  $('.my-nav').toggle();
});

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


// Scripts 
window.onload = function () {
  var url = 'content/backgrounds.json';
  var request = new XMLHttpRequest();
  request.open("GET", url);
  request.onload = function () {
    if (request.status == 200) {
      updateImages(request.responseText);
    }
  };
  request.send(null);
}

function updateImages(responseText) {
  var datos = JSON.parse(responseText);
  for (let i = 0; i < 6; i++) {
    for (var j in datos['backgrounds'][i]) {
      console.log(datos['backgrounds'][i][j]['url']);
      var img = '<div class="col-4 responsive"><img src="'+datos['backgrounds'][i][j]['url']+'" alt="'+datos['backgrounds'][i][j]['title']+'"></div>';
      $('rellenar').append(img);
    }
  }
}

// $(document).ready(function () {
//   $.ajax({
//     type: "Get",
//     url: "content/backgrounds.json",
//     contentType : 'application/json',
//     dataType: "json",
//     success: function (data) {
//       console.log(data, ' sadas')
//     },
//     error: function () {
//       console.log("json not found");
//     }
//   });
// });
