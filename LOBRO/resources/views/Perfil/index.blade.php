@extends ('Layout.sistema.bone')

@section('main-content')
 
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">CRUD O algo asi </h4>
                                    <p class="category">Complete your profile</p>
                                </div>
                                <div class="card-content">
                                    <!-- <form> -->
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nombre </label>
                                                    <input type="text" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Precio</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Categoria</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                       
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                      
                        </div>
                    </div>
                </div>
            </div>
@endsection