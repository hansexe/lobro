<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Articulo;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Redirect;
// use Response;
// use sisHospital\http\Requests\EditPeopleFormRequest;
// use sisHospital\Persona;
// use Validator;

class ArticuloController extends Controller
{
    
    public function index(Request $request)
    {
        //   $Articulos=DB::table('Articulo')
        //     ->paginate(5);
            //  return view('Articulos.index',["Articulos"=>$Articulos]);
            // return view('Articulos.index',compact('Articulos'));
            return view('Articulos.index');
    }
    

    public function ListarArticulo(Request $request)
    {
          $Articulos=DB::table('Articulo')
          ->select('idArticulo','Nombre_Art','UnidadM_Art','Categoria_Art','Peso_Art','Precio_Art','Cantidad_Art','created_at','updated_at')
          ->orderBy('idArticulo','desc')
          ->paginate(4);
            // return \Response::json($Articulos);
          return view('Articulos.table',["Articulos"=>$Articulos]);
    }

    

    public function RegistrarArticulo (Request $request)
    {


        // $request->validate([
        //     'Nombre_Art' => 'required',
        //     'UnidadM_Art' => 'required',
        //     'Categoria_Art' => 'required',
        //     'Peso_Art' => 'required',
        //     'Precio_Art' => 'required',
        //     'Cantidad_Art' => 'required',
        // ]);

        //   $articulo = new Articulo([
        //     'Nombre_Art' => $request->get('Nombre_Art'),
        //     'UnidadM_Art'=> $request->get('UnidadM_Art'),
        //     'Categoria_Art'=> $request->get('Categoria_Art'),
        //     'Peso_Art'=> $request->get('Peso_Art'),
        //     'Precio_Art'=> $request->get('Precio_Art'),
        //     'Cantidad_Art'=> $request->get('Cantidad_Art')
        //   ]);
        //   $articulo->save();

        // $request->validate([
        //     'Nombre_Art' => 'required',
        //     'UnidadM_Art' => 'required',
        //     'Categoria_Art' => 'required',
        //     'Peso_Art' => 'required',
        //     'Precio_Art' => 'required',
        //     'Cantidad_Art' => 'required',
        // ]);

        // try{
            
        // DB::beginTransaction();
        // $articulo=new Articulo;
        // $articulo->Nombre_Art=$request->get('Nombre_Art');
        // $articulo->UnidadM_Art=$request->get('UnidadM_Art');
        // $articulo->Categoria_Art=$request->get('Categoria_Art');
        // $articulo->Peso_Art=$request->get('Peso_Art');
        // $articulo->Precio_Art=$request->get('Precio_Art');
        // $articulo->Cantidad_Art=$request->get('Cantidad_Art');
        // $articulo->save();
        // DB::commit();
        //    }catch(\Exception $e)
        //    {
        // DB::rollback();
        //    }
        //    return Redirect::to('articulo');


        if ($request->ajax())
        {
                $articulo = Articulo::create($request->all());
                if ($articulo){
                    return response()->json(['success'=>'true']);
                } 
                else
                {
                  return response()->json(['success'=>'false']);  
                }
        }



    }



    public function VisualizarArticulo($id)
    {
        $articulo = Articulo::find($id);
        return response()->json($articulo);
    }



    public function ActualizarArticulo(Request $request, $id)
    {

        if ($request->ajax())
        {
            $articulo = Articulo::FindOrFail($id);
            $input = $request->all();
            $result = $articulo->fill($input)->save();
            
            if ($result){
                return response()->json(['success'=>'true']);
            } 
            else
            {
              return response()->json(['success'=>'false']);  
            }

    }

    }

    public function DeleteArticulo($id)
    {

        $articulo = Articulo::FindOrFail($id);
        $result = $articulo->delete();
        if ($result)
        {
            return response()->json(['success'=>'true']); 
        }
        else
        {
            return response()->json(['success'=> 'false']);
        }
    }


}

