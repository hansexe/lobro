@extends ('Layout.sistema.bone')

@section('main-content')
 
 <div class="content">
     <div class="container-fluid">
         <div class="row">
            <div class="col-md-4">
                @include('Articulos.register')
            </div>              
            <div class="col-md-8"> 
            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="purple">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Tasks:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="active">
                                                    <a href="#profile" data-toggle="tab">
                                                        <i class="material-icons">bug_report</i> Bugs
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#messages" data-toggle="tab">
                                                        <i class="material-icons">code</i> Website
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#settings" data-toggle="tab">
                                                        <i class="material-icons">cloud</i> Server
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile" data-token="{{ csrf_token() }}">
                                            <div id="listar-articulo">
                                          
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="messages">
                                            <!-- algo aqui -->
                                        </div>
                                        <div class="tab-pane" id="settings">
                                            <!-- algo aqui -->
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>

         </div>
    </div>
</div>


<script>

    $(document).ready(function(){
        listProduct();
    });
    
    $(document).on("click",".pagination li a",function(e) {
        e.preventDefault();
        var url = $(this).attr("href");
        $.ajax({
            type:'GET',
            url:url,
            success: function(data){
                $('#listar-articulo').empty().html(data);
            }
        });
    });


  var listProduct = function()
  {
      $.ajax({
          type:'GET',
          url:'{{ url('articulo/listall')}}',
          success: function(data){
              $('#listar-articulo').empty().html(data);
          },
          error: (error) => {
                     console.log(JSON.stringify(error));
   }
      });
  }


  var VisualizarEdit = function(id)
{
  var route = "{{url('articulo')}}/"+id+"/Visualizar";
  $.get(route, function(data){
    $("#idArticuloVi").val(data.idArticulo);
    $("#Nombre_ArtVi").val(data.Nombre_Art);
    $("#Categoria_ArtVi").val(data.Categoria_Art);
    $("#Peso_ArtVi").val(data.Peso_Art);
    $("#UnidadM_ArtVi").val(data.UnidadM_Art);
    $("#Precio_ArtVi").val(data.Precio_Art);
    $("#Cantidad_ArtVi").val(data.Cantidad_Art);

  });
}

 var VisualizarDelete = function(id)
{
  var route = "{{url('articulo')}}/"+id+"/Visualizar";
  $.get(route, function(data){
    $("#idArticuloVe").val(data.idArticulo);
    $("#Nombre_ArtVe").val(data.Nombre_Art);
  });
}


</script>
             
@endsection