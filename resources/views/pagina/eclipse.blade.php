@extends('layouts.master')

  @section('content')


  <div class="col-sm-11">
    <h2>Eclipse</h2><br>
    <p>
      <img src="{{asset('img/eclipse_logo.png')}}" class="responsive img-rounded center-block" alt="User Image" >
    <p><br>
  </div>

  <div class="container">
    <div class="col-sm-11">
        <h4 align="justify">Eclipse es una plataforma de software compuesto por un conjunto de herramientas de programación
          de código abierto multiplataforma para desarrollar lo que el proyecto llama "Aplicaciones de Cliente Enriquecido",
          opuesto a las aplicaciones "Cliente-liviano" basadas en navegadores. Esta plataforma, típicamente ha sido usada para
          desarrollar entornos de desarrollo integrados (IDE), como el IDE de Java llamado Java Development Toolkit (JDT) y el
          compilador (ECJ) que se entrega como parte de Eclipse.
        </h4><br></br>
      </div>
  </div>


  <div class="container">
      <h3>Eclipse en el proyecto CIFS:</h3>
      <div class="col-sm-11">
      <h4 align="justify">Eclipse se utilizado para hacer el desarrollo a nivel de código del proyecto CIFS, integrado junto
        con la herramienta Rational Rose, permiten realizar el desarrollo de una forma rápida. Desde el Rational Rose se
        importan los modelos que son convertidos a código, formando una estructura completa a la que solo se debe hacer
        pequeñas modificaciones y agregar lógica, para permitir las funcionalidades
      </h4>
      </div>
  </div><br></br>



    @endsection
