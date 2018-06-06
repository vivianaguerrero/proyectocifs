<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginaController extends Controller
{
  /**
 * Retornar la vista del perfil de institución
 */
public function viewPagina(){
  return view('pagina.inicio');
}
}
