@csrf                           
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">CRUD O algo asi </h4>
                                    <p class="category">Registre un articulo nuevo</p>
                                </div>
                                <div class="card-content">
                                    <!-- <form> -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nombre: </label>
                                                    <input type="text" id="Nombre_Art" name="Nombre_Art" class="form-control" >
                                                </div>
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Peso: </label>
                                                    <input type="text" id="Peso_Art" name="Peso_Art" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label for="exampleFormControlSelect1">Categoria: </label>
                                                        <select class="form-control selectpicker" id="Categoria_Art" name="Categoria_Art" data-style="btn btn-link" id="exampleFormControlSelect1">
                                                            <option>Comestibles</option>
                                                            <option>Bebidas</option>
                                                            <option>Empaquetados</option>
                                                            <option>Jugos</option>
                                                            <option>Gaseosas</option>
                                                        </select>
                                                    </div>
                                                </div>
    
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label for="exampleFormControlSelect1">Unidad de medida: </label>
                                                        <select class="form-control selectpicker" id="UnidadM_Art" name="UnidadM_Art" data-style="btn btn-link" id="exampleFormControlSelect1">
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
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Precio: </label>
                                                    <input type="text" id="Precio_Art" name="Precio_Art" class="form-control" >
                                                </div>
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Cantidad:</label>
                                                    <input type="text" id="Cantidad_Art" name="Cantidad_Art" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" id="Guardar" class="btn btn-primary pull-right">Registrar</button>
                                       
                                    <!-- </form> -->
                                </div>
                            </div>



<script>



 $("#Guardar").click(function(event)
    {
            var Nombre_Art = $("#Nombre_Art").val();
            var Peso_Art = $("#Peso_Art").val();
            var Categoria_Art = $("#Categoria_Art").val();
            var UnidadM_Art = $("#UnidadM_Art").val();
            var Precio_Art = $("#Precio_Art").val();
            var Cantidad_Art = $("#Cantidad_Art").val();
            var token = $("input[name=_token]").val();
            
            var route = "{{route('RegistrarArticulo')}}";
            var dataSting = "Nombre_Art="+Nombre_Art+"&Peso_Art="+Peso_Art+"&Categoria_Art="+Categoria_Art+"&UnidadM_Art="+UnidadM_Art+"&Precio_Art="+Precio_Art+"&Cantidad_Art="+Cantidad_Art;
      
          $.ajax({
            url:route,
            headers:{'X-CSRF-TOKEN':token},
            type:'POST',
            datatype: 'json',
            data:dataSting,
            success:function(data)
            {
                listProduct();
                document.getElementById("Nombre_Art").value = "";
                document.getElementById("Peso_Art").value = "";
                document.getElementById("Precio_Art").value = "";
                document.getElementById("Cantidad_Art").value = "";
            },
            error:function(data)
            {
                $("#error").html(data.responseJSON.name);
                $("#message-error").fadeIn();  
            }  
          })
      
    });  

</script>
