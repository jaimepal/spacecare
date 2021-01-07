@extends('layouts.app')
@section('content')
<div class="page-header page-header-xs" data-parallax="true" style="background-image: url('./img/sky.jpg');">
    <div class="filter">
    </div>
    <h1 class="mt-5" style="color:white; z-index: 2;">SITUACIÓN ACTUAL</h1>
  </div>
<div class="container">
    <p class="py-4 col-md-8 mx-auto col-12">
    Desde el comienzo de la era espacial en 1957, se han lanzado toneladas de cohetes, naves e instrumentos al espacio. No se tuvo en cuenta la problemática de los residuos espaciales que esto provocaría y no había ningún tipo de control o vigilancia a la hora de intentar producir los menores desechos posibles, por lo que el número de basura espacial no ha dejado de crecer desde entonces.
    <br>
    <img class="py-3 img-fluid" height="70" src="/img/objects_in_orbit.jpg">

    El actual problema es producido por las explosiones en órbita producidas por batería y combustible. La NASA afirma que llevan años introduciendo mejoras en la eliminación de los materiales una vez finalizadas las misiones, a pesar de que el número de basura espacial no ha descendido.
    <br>
    Al haber tanta cantidad de basura espacial en nuestra atmósfera se espera que las propias colisiones entre los residuos generan más basura espacial que las explosiones mencionadas anteriormente.

    </p>

</div>

@endsection