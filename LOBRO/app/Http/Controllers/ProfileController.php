<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use DB;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Redirect;
// use Response;
// use sisHospital\http\Requests\EditPeopleFormRequest;
// use sisHospital\Persona;
// use Validator;

class ProfileController extends Controller
{
    
    public function index(Request $request)
    {
     
        return view('Perfil.index');
    }
 
}
