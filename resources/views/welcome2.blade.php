@extends('template.index')
@section('css')
 <link rel="stylesheet" href="{{asset('css/styles.css')}}">
@endSection
@section('title','Manejo de yield')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://campus.cumbre.edu.bo/">Universidad Cumbre</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://campus.cumbre.edu.bo/">Campus UPC</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://cumbre.edu.bo/">Sitio Web UPC</a>
        </li>
       
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div>

</div>

<SPAn>Ambos conceptos tienen como objetivo maximizar los ingresos, estos dos conceptos fueron introducidos en los ochentas en un principio para aerolíneas, pero con el pasar del tiempo alcanzaron otros mercados dentro de la industria del transporte de pasajeros, como por ejemplo, la industria hotelera y más recientemente el comercio online.

Ambos analizan datos para predecir la demanda, el comportamiento del consumidor, optimizar precios y ventas. Estos dos conceptos son utilizados, según la definición de su creador Robert Cross, para “ofrecer el producto cierto al cliente cierto, al precio cierto y en el momento cierto”.</SPAn>

@endSection

