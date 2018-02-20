<?php

namespace App\Http\Controllers\administrador;

use File;
use Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\User;
use app\Http\Requests;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrador.login.login');
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {           
      
      //$user, $psw, $parametros
      $usuario   = $request->usuario; 
      $password  = $request->password;
      //dd($request->all());  
      //exit;
      $parametros = NULL;
      $sroot = "ou=people,dc=an,dc=gob,dc=ve";
      $host = "ldap.an.gob.ve";
      $ds = ldap_connect($host);
      //dd($ds);
      $uid = "uid=$usuario,ou=people,dc=an,dc=gob,dc=ve";

      if (!$ds) {

        return false;
       } else {
        ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ds, LDAP_OPT_REFERRALS, 0);
        $validacion = @ldap_bind($ds, $uid, $password);
        //dd($validacion);

        if (!$validacion) { 
            Flash::success("No existe usuario.");              
            return view('layouts.login');                               

        } else {
            $ActiveDirectory = array();
            if ($parametros == NULL) {
                $parametros = "uid=$usuario";
            }
            $sr = ldap_search($ds, $sroot, $parametros);
            $ad = @ldap_get_entries($ds, $sr);
            $ActiveDirectory['cedula'] = $ad[0]["postalcode"][0];
            $ActiveDirectory['cn'] = $ad[0]["cn"][0];
            $ActiveDirectory['mail'] = $ad[0]["mail"][0];
            $ActiveDirectory['uid'] = $ad[0]["uid"][0];
            ldap_close($ds);

            if ($ActiveDirectory['cedula'] == NULL) 
            {
               echo "C&eacute;dula no encontrada...<br/ >";    
            }
            $login = $ActiveDirectory['cedula'];
            $user = User::where('password','=',$login)->first();
            if(!empty($usuario)){
             if($user->condicion == 1){
              session_start();
              $_SESSION['usuario']  = $user->id;
              $_SESSION['perfil']  = $user->perfil;
              $_SESSION['nombre']  = $ActiveDirectory['uid'];
              $_SESSION['encontrado'] = 0;
              $_SESSION['cedtrab']  = 0;
              $_SESSION['nomtrab']  = "";
              $_SESSION['apetrab']  = "";
              $_SESSION['nomtrab']  = "";
              return view('administrador.principal.index');   
              }
              else 
              {
               Flash::error("Su usuario se encuentra inactivo.");
               return view('layouts.login');

              } 
  
            }
            else {
            Flash::error("No tiene permiso para acceder al sitio.");
            return view('layouts.login');
            } 
         }
      }
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
