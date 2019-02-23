<table class="table">
                                        <thead class="text-primary">
                                            <th>Nombre</th>
                                            <th>Categoria</th>
                                            <th>Peso</th>
                                            <th>Precio</th>
                                            <th>Cantidad</th>
                                            <th>Creado</th>
                                            <th>Actualizado</th>
                                            <th>Accion</th>
                                            

                                        </thead>
                                        <tbody>
                                        @foreach ($Articulos as $ar)
                                            <tr>
                                            <td>{{ $ar->Nombre_Art}}</td>
                                            <td>{{ $ar->Categoria_Art}}</td>
                                            <td class="text-primary">{{ $ar->Peso_Art.' '.$ar->UnidadM_Art}}</td>
                                            <td>S/ {{ $ar->Precio_Art}}</td>
                                            <td>{{ $ar->Cantidad_Art}}</td>
                                            <td>{{ substr($ar->created_at,0, 10) }}</td>
                                            <td>{{ substr($ar->updated_at,0, 10) }}</td>
                                            <td class="td-actions text-right">
                                                        <button OnClick='VisualizarEdit({{$ar->idArticulo}});'  type="button" rel="tooltip" data-toggle="modal"  data-target="#EditArticulo" title="Editar articulo" class="btn btn-primary btn-simple btn-xs">
                                                            <i class="material-icons">edit</i>
                                                        </button> 
                                                        <button OnClick='VisualizarDelete({{$ar->idArticulo}});' type="button" rel="tooltip"  data-toggle="modal"  data-target="#DeleteArticulo" title="Enviar a la papelera" class="btn btn-danger btn-simple btn-xs">
                                                            <i class="material-icons">delete</i>
                                                        </button>
                                            </td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    {{$Articulos->render()}}
                                    @include('Articulos.DeleteArticulo')
                                                @include('Articulos.EditArticulo')
                                               