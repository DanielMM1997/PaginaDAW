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

// let datoss = fetchJSONFile('content/backgrounds.json')
// .then(response => response.json())
// .then(data => {
//   // Do something with your data
//   console.log(data);
// });


// $(document).ready(function(){
//   $.ajax({
//     url: "content/backgrounds.json",
//     type: 'get',
//     success: function(data){
//       console.log(data)
//     }
//   });
//   // let datos = JSON.parse("content/backgrounds.json");
//   // console.log(datos);
// });
// $.getJSON('C:/Users/danie/Documents/AAPUNTES/Cuarto/DAW/templates/PaginaDAW/content/backgrounds.json', function(data) {
//   console.log(data);
//   console.log('asd');
// });

// var client = new XMLHttpRequest();
// let datos = client.open('get', '/content/backgrounds.json')
// // console.log(datos);
// readTextFile("C:/Users/danie/Documents/AAPUNTES/Cuarto/DAW/templates/PaginaDAW/content/backgrounds.json");
// function readTextFile(file) {
//     var rawFile = new XMLHttpRequest();
//     rawFile.open("GET", file);
//     rawFile.onreadystatechange = function (){
//         if(rawFile.readyState === 4){
//             if(rawFile.status === 200 || rawFile.status == 0){
//                 var allText = rawFile.responseText;
//                 console.log(allText);
//                 alert(allText);
//             }
//         }
//     }
//     // rawFile.send(null);
// }

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

// var fs = require("fs");
// var text = fs.readFileSync("content/backgrounds.json");
// console.log(text);

// document.open('json', 'content/backgrounds.json')

window.onload = function () {
  var url = 'content/backgrounds.json';
  var request = new XMLHttpRequest();
    request.open("GET", url);
    request.onload = function() {
        if (request.status == 200) {
            console.log(request.responseText);
            updateSales(request.responseText);
        }
    };
    request.send(null);
}

function updateSales(responseText) {
  var salesDiv = document.getElementById("sales");
  var datos = JSON.parse(responseText);
  // for (const i of datos) {

  // }
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