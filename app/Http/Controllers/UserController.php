<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //Va a la vista de gestion_usuarios
        //Para mostrar todos los datos
        $users = User::with('role')->get();
        return view('users_management')->with('users', $users);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Va a la vista crear_usuarios
        $roles = Role::all();
        return view('users_create')->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //Toma los datos para guardarlos en la BD
        $user = new User();
        $user->name = $request->name; 
        $user->email = $request->email; 
        $user->password = $request->password;
        $user->role_id = $request->role_id;
        //$user->Role()->associate($request->input('new_role'));
        $user->save();
        return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Se utiliza para consultar los datos a editar
        $user = User::find($id);
        $roles = Role::all();
        return view('users_edit')->with(['user' => $user, 'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Se hace el Update en la base de datos
        $user = User::find($id);
        $user->name = $request->name; 
        $user->email = $request->email; 
        $user->password = $request->password;
        $user->role_id = $request->role_id;
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Para eliminar un registro de la Base de datos
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
