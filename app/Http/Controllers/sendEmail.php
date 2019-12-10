<?php

namespace App\Http\Controllers;

use App\Contactanos;
use App\Mail\confirmarEmail;
use App\Mail\enviarMensaje;
use Illuminate\Http\Request;
use Mail;

class sendEmail extends Controller
{
    //
    function sendEmail(Request $request)
    {
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $celular = $request->input('celular');
        $email = $request->input('email');
        $mensaje = $request->input('mensaje');
        $admin_email = "adminuepajan@hotmail.com";
        Mail::to($admin_email)->send(new enviarMensaje(new Contactanos($nombre, $apellido, $celular, $email, $mensaje), "Mensaje de comunidad"));
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            Mail::to($email)->send(new confirmarEmail());
        }
        $return_array = array(
            "sended" => "ok",
            "nombre" => $nombre
        );
        return json_encode($return_array);
//
//
    }
}
