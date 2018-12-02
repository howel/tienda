@extends('layouts.app')

@section('title', 'listado de productos')

@section('body-class', 'landing-page sidebar-collapse')

@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset ('/img/profile_city.jpg') }}')">
    </div>
    <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Listado de Productos</h2>
        <div class="team">
          <div class="row">
            <table class="table">
              <thead>
              <tr>
                <th class="text-center">#</th>
                <th>Nombre</th>
                <th>Descripccion</th>
                <th>Categorias</th>
                <th class="text-right">Precio</th>
                <th class="text-right">Opciones</th>
              </tr>
              </thead>
              <tbody>
              @foreach($products as $product)
              <tr>
                <td class="text-center">1</td>
                <th>{{$product->name}}</th>
                <th>{{$product->description}}</th>
                <th>{{$product->category->name}}</th>
                <th class="text-right">{{$product->price}}</th>
                <td class="td-actions text-right">
                  <button type="button" rel="tooltip" class="btn btn-info">
                    <i class="material-icons">person</i>
                  </button>
                  <button type="button" rel="tooltip" class="btn btn-success">
                    <i class="material-icons">edit</i>
                  </button>
                  <button type="button" rel="tooltip" class="btn btn-danger">
                    <i class="material-icons">close</i>
                  </button>
                </td>
              </tr>
              @endforeach
              </tbody>
            </table>

          </div>
        </div>
      </div>
      <div class="section section-contacts">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-center title">Aun no te has registrado</h2>
            <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.</h4>
            <form class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Name</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Email</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
              </div>
              <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                  <button class="btn btn-primary btn-raised">
                    Enviar
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
