
$(document).on('click','.ajax-request',function(event){
  event.preventDefault();
  var raiz='./vistas';
  var ruta= raiz + $(this).attr("href");

  $("#contenido").load(ruta, function(responseTxt, statusTxt, xhr){
      if(statusTxt == "error"){
        swal({
          title: "<small>¡Error!</small>",
          text: "Error al intentar cargar el recurso:"+ruta ,
          html: true,
          confirmButtonText: "Cerrar",
        });
      }
  });
});
