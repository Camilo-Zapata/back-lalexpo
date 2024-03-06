<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use Log;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use Illuminate\Support\Facades\Hash;






class UserController extends Controller
{

    public function export()
    {
        return Excel::download(new UsersExport, 'usuarios.xlsx');
    }
    
    public function Register(Request $request)
    {
         Log::info($request);
        try {
            $usuario = new User();
            $usuario->name = $request->name;
            $usuario->last_name = $request->last_name;
            $usuario->email = $request->email;
            $usuario->phone = $request->phone;
            $usuario->country = $request->country;
            $usuario->city = $request->city;
            $usuario->rol = $request->rol;
            $usuario->company = $request->company;
            $usuario->sort = 0;
            $usuario->password = Hash::make($request->password);
            $usuario->instagram = $request->instagram;
            $success = $usuario->save();
                
            return response()->json([
                'success' => true,
               
            ], 200);
        } catch (\Throwable $th) {
            Log::info($th);
            return response()->json(["success" => false, 'message' => 'Algo salió mal al sincronizar los datos.'], 500);
        }
        
    }


    public function Users(Request $request){

        try {
            $usuarios = User::paginate(10);
            return view('home')->with(
                compact('usuarios')
            );
        } catch (\Throwable $th) {
            Log::info($th);
            return response()->json(["success" => false, 'message' => 'Algo salió mal al sincronizar los datos.'], 500);
        }


    }


    public function Form(Request $request){

        return view('registrar');

    }



    public function Registrar(Request $request)
    {
         Log::info($request);
        try {
            $usuario = new User();
            $usuario->name = $request->name;
            $usuario->last_name = $request->last_name;
            $usuario->email = $request->email;
            $usuario->phone = $request->phone;
            $usuario->country = $request->country;
            $usuario->city = $request->city;
            $usuario->rol = $request->rol;
            $usuario->company = $request->company;
            $usuario->sort = 1;
            $usuario->password = $request->password;
            $usuario->instagram = $request->instagram;
            $success = $usuario->save();
    
             
            return back();

        } catch (\Throwable $th) {
            Log::info($th);
            return response()->json(["success" => false, 'message' => 'Algo salió mal al sincronizar los datos.'], 500);
        }
        
    }


  
}
