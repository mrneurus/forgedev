<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Events\UserWasCreated;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateUserRequest;






class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $imputName;
     
    public function index()
    {

        /* $user=Auth::user();
        $rol= $user->roles->implode('name',',');
        
        if($rol=='administrador'){
            
            return view('pages.profiles.createuser');
        }
        else{
            return view('pages.dashboard');
    } */

        $users=User::all();
        return view('pages.profiles.index', compact('users'));
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $user=Auth::user();
        $roles = Role::all()->pluck('name','id');
     
        
        return view('pages.profiles.createuser',compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     


    
    {
        //
        /* dd($request->all()); */
        
       $imputName= 'pepepeppep';
       
        
        $usuario = new User;
        $password = Str::random(10);

        $usuario -> name = $request -> name;
        $usuario -> email = $request -> email;
        $usuario -> password = ($password);
       
        
        //Envio de credenciales


        if ( $usuario -> save()){
            $usuario->assignRole($request->rol);
            UserWasCreated::dispatch($usuario,$password);
            return  redirect('usuarios/create');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {

        return view('pages.profiles.showuser', compact('usuario'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {
        //
        return view('pages.profiles.edituser', compact('usuario'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $usuario   )
    {
        //
        
        /* $this->authorize('update', $usuario);

        $usuario->update( $request->validated() );

        return redirect()->route('usuarios', $usuario->id)->withFlash('Usuario actualizado'); */

        $rules=[
            'name'=>'required',
            'email'=>['required',Rule::unique('users')->ignore($usuario->id)]
        ];

        
        if( $request->filled('password') ){
            $rules['password']=['confirmed','min:8'];
        }

       
        $data=$request->validate($rules);
        
        $usuario->update($data);

        return back()->with('Usuario actualizado');
        
    }


    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( User $usuario)
    
    {
        
         /* $this->authorize('delete',$usuario);  */

        $usuario->delete();

        return redirect()->route('usuarios.index');
        

    }
}