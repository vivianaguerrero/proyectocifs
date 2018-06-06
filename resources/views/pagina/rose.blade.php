@extends('layouts.master')

  @section('content')

  <div class="col-sm-11">
    <h2>Rational Rose</h2><br>
    <p>
      <img src="{{asset('img/rational_rose.png')}}" class="responsive img-rounded center-block" alt="User Image" >
    <p><br>
  </div>

  <div class="container">
    <div class="col-sm-11">
        <h4 align="justify">Rational Rose es una herramienta de diseño orientada a objetos, que da soporte al modelado visual,
           es decir, que permite representar gráficamente el sistema, permitiendo hacer énfasis en los detalles más importantes,
           centrándose en los casos de uso y enfocándose hacia un software de mayor calidad, empleando un lenguaje estándar
           común que facilita la comunicación.
        </h4><br></br>
      </div>
  </div>


  <div class="container">
      <h3>Rational Rose en el proyecto CIFS:</h3>
      <div class="col-sm-11">
      <h4 align="justify">El Racional Rose se usó en proyecto CIFS para hacer el diseño de los distintos modelos
        requeridos para hacer una abstracción de los datos identificados en el proceso de desarrollo de software,
        que posteriormente se pueden exportar y generar código. Haciendo del proceso de desarrollo de software más rápido.
      </h4>
      </div>
  </div><br></br>

    @endsection
