@extends('layouts.app')

@section('content')
<!--carrouserl-->
<div id="carouselExampleIndicators" class="carousel slide pt-5" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" style="">
            <img class="d-block w-100" src="image/carrusel2.jpeg" alt="First slide">
        </div>
        <div class="carousel-item" >
            <img class="d-block w-100" src="image/carrusel3.jpeg" alt="Second slide">
        </div>
        <div class="carousel-item" >
            <img class="d-block w-100" src="image/carrusel4.jpeg" alt="Third slide">
        </div>
        <div class="carousel-item" >
            <img class="d-block w-100" src="image/carrusel5.jpeg" alt="fouth slide">
        </div>
        <div class="carousel-item" >
            <img class="d-block w-100" src="image/carrusel6.jpeg" alt="fifth slide">
        </div>
        <div class="carousel-item" >
            <img class="d-block w-100" src="image/carrusel1.jpeg" alt="sixth slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>
<!--carrouserl-->
<div class="container-fluid">
    <div class="row color1 py-5 ">
        <div class="col-sm-9 col-md-8">
            <h1 class="display-4">Inscripción 2021</h1>
            <p class="lead">
               En esta seccion puede ver lo necesario para nuevo ingreso en el año 2021 
            </p>
        </div>
        <div class="col-sm-2 col-md-2">
            <a class="btn btn-dark btn-lg text-uppercase" href="{{ url('ofertaAcademica') }}">Oferta Academica</a>
        </div>
    </div>
    <div class="row d-flex py-5 px-md-5">
        <div class="col-sm-8 col-md-8 pb-3 ">
            <h3 class="display-4 text-center pb-3">Noticias</h3>
            <div class="col-sm-11 col-md-12 ">
                <div class="card text-center d-flex flex-row">
                  <div class="card-body">
                    <!--Publicaciones Facebook-->
                        <div class="fb-post" data-href="https://www.facebook.com/colegiogoldameir/posts/3549733338450360" data-show-text="true" data-width="350"><blockquote cite="https://www.facebook.com/colegiogoldameir/posts/3549733338450360" class="fb-xfbml-parse-ignore"><p>Esta opción es válida para niños de antiguo y nuevo ingreso. Llamenos o visítenos es nuestro deseo que sea parte de esta institución educativa. Dios les bendiga. Válido en mes de noviembre y diciembre 2020.</p>Publicado por <a href="https://www.facebook.com/colegiogoldameir/">Colegio Golda Meir</a> en&nbsp;<a href="https://www.facebook.com/colegiogoldameir/posts/3549733338450360">Martes, 1 de diciembre de 2020</a></blockquote></div>
                        
                    
                       <div class="fb-post" data-href="https://www.facebook.com/colegiogoldameir/posts/3540074796082881" data-show-text="true" data-width="350"><blockquote cite="https://www.facebook.com/colegiogoldameir/posts/3540074796082881" class="fb-xfbml-parse-ignore"><p>Estimados Padres y Madres de Familia, el sábado 28 de Noviembre de 2020 a las 8 am. estaremos subiendo un video donde...</p>Publicado por <a href="https://www.facebook.com/colegiogoldameir/">Colegio Golda Meir</a> en&nbsp;<a href="https://www.facebook.com/colegiogoldameir/posts/3540074796082881">Viernes, 27 de noviembre de 2020</a></blockquote></div>
                    <!--Publicaciones Facebook-->
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4">
            <h3 class="display-4 text-center py-3">Facebook</h3>
            <div>
                <div class="card text-center">
                  <div class="card-body">
                    <!-- Page Facebook-->
                    <div class="fb-page" data-href="https://www.facebook.com/colegiogoldameir" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/colegiogoldameir" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/colegiogoldameir">Colegio Golda Meir</a></blockquote></div>
                    <!-- Page Facebook-->
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection