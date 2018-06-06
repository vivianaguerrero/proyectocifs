@extends('layouts.master')

  @section('content')

  <div class="container">
      <h1>Objetivo:</h1>
      <div class="col-sm-11">
      <h4 align="justify">Esta página es presentar el proceso de un proyecto de desarrollo de software,
        como ejemplo se  presenta control de ingreso de personal a la Finca La sierra CIFS;
        todo esto fue realizado bajo las premisas dadas por el docente William Joseph Giraldo Orozco
        iniciando con un paradigma orientado a objetos, luego replanteando el proyecto a un modelo de negocio.
      </h4>
      </div>
  </div>


    <div class="container">
        <h1>Acerca de:</h1>
        <h2>Control ingreso de personal a la finca la sierra</h2>
    </div>

  <div class="container"><br>
    <div class="col-sm-11" >
      <h4 align="justify">Debido al tipo de contratación en el sector rural, su ubicación (la mayoría de  fincas está lejos de la zona urbana,
        rodeados solo de hectáreas de cultivos)   se hace complicado llevar un registro de las personas que entran y salen de
        un lugar en específico lo cual hace que las fincas sean un punto atractivo y de fácil acceso para los ladrones, por eso
        este proyecto se propone llevar a cabo un control de ingreso a personas en la finca la Sierra. Se va desarrollar una
        herramienta de software mediante la que se puede realizar un control de ingreso y salida de personas de la propiedad,
        esta herramienta constara de datos básicos como nombre, número de identificación, teléfono y hora de ingreso o salida.
        Con este control se determinará quién debe entrar y quien no es autorizado para el ingreso a la propiedad, cuantas
        personas se encuentran actualmente en la propiedad, saber si alguien salió o entró una hora no esperada adicionalmente
        permitirá fácilmente una generación de la nómina semanal
      </h4>
    </div>
</div>
    @endsection
