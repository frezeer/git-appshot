@extends('layouts.app')
@section('title', 'Imagenes de Productos')
@section('body-class', 'product-page')
@section('content')
<div class="wrapper">
    <div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
     </div>
        <div class="main main-raised">
            <div class="container">
                    <div class="section text-center">
                         <h2 class="title">Imagenes del Producto "{{ $products->name }}"</h2>
        
                            <div class="panel panel-default" >
                                <div class="panel-body">
                                 <form method="post" action="" enctype="multipart/form-data" />
                                  {{ csrf_field() }}
                                     <input type="file" name="photo" required>
                                        <button type="submit" class="btn btn-primary btn-round" >Subir una nueva Imagen</button>
                                        <a href="{{ url('/admin/products') }}" class="btn btn-default btn-round" >    Volver al listado de Productos</a>
                                      </form>
                                </div>
                            </div>  
                           <hr>
                            <div class="row">
                            @foreach($images as $imagen)
                                <div class="col-md-4">
                                    <div class="panel panel-default" >
                                        <div class="panel-body">
                                             <img src=" {{ $imagen->url }}" width="250" />
                                             <a href="{{ $imagen->id }}" class="btn btn-danger btn-round" >Eliminar Imagen</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach 
                         </div>
                   </div>
            </div>
@include('includes.footer')
</div>
@endsection
