
<div class="modal fade" id="EditArticulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card-content">
                                    <!-- <form> -->


        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" id="idArticuloVi">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nombre: </label>
                                                    <input type="text" id="Nombre_ArtVi" name="Nombre_Art" class="form-control" >
                                                </div>
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Peso: </label>
                                                    <input type="text" id="Peso_ArtVi" name="Peso_Art" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Categoria: </label>
                                                        <select class="form-control selectpicker" id="Categoria_ArtVi" name="Categoria_Art" data-style="btn btn-link" id="exampleFormControlSelect1">
                                                            <option>Comestibles</option>
                                                            <option>Bebidas</option>
                                                            <option>Empaquetados</option>
                                                            <option>Jugos</option>
                                                            <option>Gaseosas</option>
                                                        </select>
                                                    </div>
                                                </div>
    
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Unidad de medida: </label>
                                                        <select class="form-control selectpicker" id="UnidadM_ArtVi" name="UnidadM_Art" data-style="btn btn-link" id="exampleFormControlSelect1">
                                                            <option>Kg</option>
                                                            <option>Lt</option>
                                                            <option>g</option>
                                                            <option>oz</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Precio: </label>
                                                    <input type="text" id="Precio_ArtVi" name="Precio_Art" class="form-control" >
                                                </div>
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Cantidad:</label>
                                                    <input type="text" id="Cantidad_ArtVi" name="Cantidad_Art" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                    <!-- </form> -->
                                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="updateArticulo" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script>

$("#updateArticulo").click(function()
{
  var id = $("#idArticuloVi").val();
  var Nombre_Art = $("#Nombre_ArtVi").val();
  var Peso_Art = $("#Peso_ArtVi").val();
  var Categoria_Art = $("#Categoria_ArtVi").val();
  var UnidadM_Art = $("#UnidadM_ArtVi").val();
  var Precio_Art = $("#Precio_ArtVi").val();
  var Cantidad_Art = $("#Cantidad_ArtVi").val();

  var route = "{{url('articulo')}}/actualizar/"+id+"";
  var token = $("#token").val();
  $.ajax({
    url: route,
    headers: {'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType: 'json',
    data: {Nombre_Art: Nombre_Art,
           Peso_Art: Peso_Art,
           Categoria_Art: Categoria_Art,
           UnidadM_Art: UnidadM_Art,
           Precio_Art: Precio_Art,
           Cantidad_Art: Cantidad_Art
      },
    success: function(data){
     
     if (data.success == 'true')
     {
        listProduct();
        $("#EditArticulo").modal('toggle');
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
$("#EditArticulo").on("hidden.bs.modal", function () {
    $("#message-error").fadeOut()
});


</script>