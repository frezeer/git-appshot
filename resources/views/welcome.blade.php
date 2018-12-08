@extends('layouts.app')
@section('title', 'Bienvenido a App Shop')
@section('body-class', 'landing-page')
@section('content')
   <div class="wrapper">
        <div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
       
         <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="title">@yield('title')</h1>
                        <h4>Realiza pedidos en linea y te contactaremos para la Entrega</h4>
                        <br />
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger btn-raised btn-lg">
                            <i class="fa fa-play"></i> ¿Comó Funciona?
                        </a>
                    </div>
                </div>
         </div>
       
        </div>

        <div class="main main-raised">
            <div class="container">
                <div class="section text-center section-landing">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="title">¿Por que comprar en App Shop?</h2>
                            <h5 class="description">
                                Es un canal seguro rapido donde podras comprar lo que tu nesesites
                            </h5>
                        </div>
                    </div>

                    <div class="features">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-primary">
                                        <i class="material-icons">chat</i>
                                    </div>
                                    <h4 class="info-title">Atendemos tus dudas</h4>
                                    <p>Atendemos rapidamente cualquier consulta que tengas via chat no esta solo si no que siempre estaremos atentos a tus inquietudes</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-success">
                                        <i class="material-icons">verified_user</i>
                                    </div>
                                    <h4 class="info-title">Pago Seguro</h4>
                                    <p>Todo pedido que realices sera confirmado atravez de una llamda si no confias en linea puedes pagar contra entrega el valor acordado.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-danger">
                                        <i class="material-icons">fingerprint</i>
                                    </div>
                                    <h4 class="info-title">Informacion Privada</h4>
                                    <p>Los pedidos que realices solo los conoceras atravez de tu panel de usuario Nadie mas tiene acceso a esta informacion.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section text-center">
                    <h2 class="title">Productos Disponibles</h2>
                      <div class="team">
                        <div class="row"> 
                            
                         @foreach($products as $product)
                              <div class="col-md-4">
                                <div class="team-player">
                                    <img src="{{ $product->images()->first()->images }}" alt="Thumbnail Image" class="img-raised img-circle">
                                    <h4 class="title">{{ $product->name }}<br />
                                        <small class="text-muted">{{ $product->category->name }}</small>
                                    </h4>
                                    <p class="description">{{ $product->description }}</p>
                                            <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
                                    </div>
                                </div>
                            @endforeach 
                        <!-- 
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="{{ url('/img/christian.jpg') }}" alt="Thumbnail Image" class="img-raised img-circle">
                                <h4 class="title">Christian Louboutin<br />
                                    <small class="text-muted">Designer</small>
                                </h4>
                                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="{{ url('/img/kendall.jpg') }}" alt="Thumbnail Image" class="img-raised img-circle">
                                <h4 class="title">Kendall Jenner<br />
                                    <small class="text-muted">Model</small>
                                </h4>
                                <p>You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-google-plus"></i></a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-youtube-play"></i></a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div> -->

                        </div>
                    </div>
                </div>

                <div class="section landing-section">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-center title">¿Aun no te has Registrado?</h2>
                            <h4 class="text-center description">Resgitrate ingresando tus datos basicos y podras realizar tus pedidos atravez de tu carro d compras. Si aun no te decides , de todas formas , con tu cuenta de usuarios podras hacer todas tus consultas sin compromiso.</h4>
                            <form class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Ingresa tu Nombre</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Ingresa tu Correo</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group label-floating">
                                    <label class="control-label">Escribe tu consulta</label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4 text-center">
                                        <button class="btn btn-primary btn-raised">
                                            Enviar Consulta
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

   </div>
@include('includes.footer')    
@endsection
