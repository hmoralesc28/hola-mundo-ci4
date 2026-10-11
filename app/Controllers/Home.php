<?php

namespace App\Controllers;

class Home extends BaseController
{
    /**

     */
    public function index(): string
    {

        $data = [
            'titulo' => '¡Hola Mundo!',
            'mensaje' => 'Soy Hector. Esta pàgina fue renderizada con CodeIgniter 4.'
        ];


        return view('vista_sencilla', $data);
    }
}
