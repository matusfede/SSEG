// archivo JavaScript de sitio

$(document).ready(function(){
  // Funcion para obtener el Alto(Height)
  console.log("El alto del navegador es " + $( window ).height() + "px. (Height)");
  console.log($('.modal-content').css( "height" ));
  var position = (($( window ).height()) / 2) - (254 / 2);
  console.log("La posicion del modal es " + position + "px. (Top)");
});
