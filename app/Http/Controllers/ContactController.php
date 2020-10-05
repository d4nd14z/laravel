<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller {

    public function store(Request $request){
        //Valida el formulario, si es valido, pasa a la siguiente instruccion, si no está validado
        //retorna el control al formulario nuevamente.
        request()->validate([
            'txtNombre' => 'required',
            'txtEmail' => 'required|email',
            'txtAsunto' => 'required',
            'txtMensaje' => 'required|min:50'
        ]);

        return "DATOS VALIDADOS";
        /*
        $nombre = $request->get("txtNombre");
        $email = $request->get("txtEmail");
        $asunto = $request->get("txtAsunto");
        $mensaje = $request->get("txtMensaje");
        var_dump($nombre);
        var_dump($email);
        var_dump($asunto);
        var_dump($mensaje);
        */
    }

}
