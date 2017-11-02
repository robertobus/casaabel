<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.index', [
            'page_title' => 'Pagina Principal',
        ]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function contacto()
    {
        return view('web.contacto', [
            'page_title' => 'Contacto',
        ]);
    }

}
