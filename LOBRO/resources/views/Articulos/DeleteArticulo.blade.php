<div class="modal fade" id="DeleteArticulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <input type="hidden" id="idArticuloVe">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

        Deseas Eliminar este articulo llamado:<input type="text" id="Nombre_ArtVe"  class="form-control" disabled>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="deleteArticulo" class="btn btn-primary">Eliminar</button>
      </div>
    </div>
  </div>
</div>


<script>

$("#deleteArticulo").click(function()
{
  var id = $("#idArticuloVe").val();
  var route = "{{url('articulo')}}/eliminar/"+id+"";
  var token = $("#token").val();
  $.ajax({
    url: route,
    headers: {'X-CSRF-TOKEN': token},
    type: 'DELETE',
    dataType: 'json',
    success: function(data){
     if (data.success == 'true')
     {
        listProduct();
        $("#DeleteArticulo").modal('toggle');
        $("#message-update").fadeIn();
       }
    },
    error:function(data)
    {
        $("#error").html(data.responseJSON.name);
        $("#message-error").fadeIn();
        if (data.status == 422) {
           console.clear();
        }
    }  
  });
});

//CUANDO CIERRAS LA VENTANA MODAL
$("#DeleteArticulo").on("hidden.bs.modal", function () {
    $("#message-error").fadeOut()
});


</script>