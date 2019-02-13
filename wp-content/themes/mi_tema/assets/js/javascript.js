//
$(function() {
  alert("previo de la carga");

  //
  $(".featured").attr("src", "assets/img/4.jpg")

  $(".thumb").on("click", function() {
    source = $(this).attr("src");
    $(".featured").attr("src", source);
  })
});

//
document.getElementById("p3").addEventListener("click", function() {
  alert("escríbeme:lorenaaros@gmail.com");
});

//

$(document).ready(function() {
  $("#boton").click(function() {
    $("ul#listas li").prepend(function(n) {
      return "--> Lista índice: " + n + ".";
    });
  });
});

//
function myFunction() {
  var node = document.createElement("LI");
  var textnode = document.createTextNode("Ejercicios");
  node.appendChild(textnode);
  document.getElementById("myList").appendChild(node);
}
