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

public function viewPoo(){
  return view('pagina.poo');
}

public function viewModelo(){
  return view('pagina.modelo');
}

public function viewEclipse(){
  return view('pagina.eclipse');
}

public function viewRouse(){
  return view('pagina.rouse');
}

}
