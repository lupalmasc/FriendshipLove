<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Grupo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios=User::get();
        $grupos=Grupo::get();
        return view ('usuarios.index', compact('usuarios','grupos'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view ('usuarios.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos=$request->all();
        $permission = User::create($datos);
        return redirect('/users');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function asignargrupo()
    {
 
        return view ('grupo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storegrupo(Request $request)
    {
        $datos=$request->all();
        unset($datos["_token"]);
        $permission = Grupo::create($datos);
        return redirect('/users');
    }

}
