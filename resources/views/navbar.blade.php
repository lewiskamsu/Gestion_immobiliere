
{{-- @section('content') --}}
@extends('layouts.app')
@section('title',config('app.name'))

@section('content')

<nav class="navbar navbar-expand-lg bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">GesIm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownOffre" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Offres
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Nouvel Offre</a></li>
                <li><a class="dropdown-item" href="#">Liste des Offres</a></li>
                <li><hr class="dropdown-divider"></li>
                {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
              </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownClient" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Clients
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Nouveau client</a></li>
              <li><a class="dropdown-item" href="#">Liste des Clients</a></li>
              <li><hr class="dropdown-divider"></li>
              {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownService" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Servide
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Nouvel Service</a></li>
                <li><a class="dropdown-item" href="#">Programmer un service</a></li>
                <li><a class="dropdown-item" href="#">Liste des services</a></li>
                <li><hr class="dropdown-divider"></li>
                {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
              </ul>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link active mr-70" aria-current="page" href="{{route('home')}}">Deconnexion</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  @endsection
