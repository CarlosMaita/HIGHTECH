@extends('cms')


@section('content')
<section>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Crear Servicios</h1>
  </div>


  <div class="">
      @if(session('message'))
        <div class="alert alert-success" role="alert">
          {{session('message')}}
        </div>
      @endif
      <form action="/cms/guardar/servicio" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-12 col-md-6 mb-4">
            <h5>Titulo</h5>
            <input class="form-control" type="text" name="titulo_producto" value="" placeholder="Titulo">
          </div>
          <div class="col-12 col-md-6 mb-4">
            <h5>Precio</h5>
            <input class="form-control" type="number" name="precio_producto" value="" placeholder="Precio">
          </div>
          <div class="col-12 col-md-6 mb-4">
            <h5>Código Universal</h5>
            <input class="form-control" type="text" name="codigo_producto" value="" placeholder="Código Universal">
          </div>
          <div class="col-12 col-md-6 mb-4">
              <h5 style="display: block">Imagen</h5>
              <input type="file" name="imagen_producto">
            </div>
            <div class="col-12 mb-4">
              <h5>Descripción</h5>
              <textarea class="form-control" name="descripcion_producto"></textarea>
            </div>
            <div class="col-12 mb-4">
              <h5>Categoría</h5>
              <select name="categoria_producto" class="form-control form-control" id="categoria_select">
                <option>Selecciona una Categoría</option>
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->category}}</option>
                @endforeach
              </select>
            </div>
          </div>


          <!-- Chumacera formulario -->
          <div class="params-forms" id="chumacera" style="display: none;">
            <div class="row">
              <h3 class="col-12 mb-4">Parametros Chumacera</h3>
              <div class="col-12 col-md-6">

                <h5>Diametro chumacera</h5>
                <select class="form-control mb-4" name="diametro_chumacera">
                  <option>diametro_chum</option>
                </select>
              </div>

              <div class="col-12 col-md-6">
                <h5>Tipo chumacera</h5>
                <select class="form-control mb-4" name="tipo_chumacera">
                  <option>tipo_chum</option>
                </select>
              </div>

              <div class="col-12 col-md-6">
                <h5>Forma chumacera</h5>
                <select class="form-control mb-4" name="forma_chumacera">
                  <option>forma_chum</option>
                </select>
              </div>

              <div class="col-12 col-md-6">
                <h5>No Huecos</h5>
                <input class="form-control" type="number" name="huecos_chumacera">
              </div>
            </div>
          </div>


          <!-- Cadena formulario -->


          <div class="params-forms" id="cadena" style="display: none;">
            <div class="row">
              <h3 class="col-12 mb-4">Parametros Cadena</h3>
              <div class="col-12 mb-4">
                <h5>pitch</h5>
                <input class="form-control" type="number" name="pitch_cadena">
              </div>

              <div class="col-12 col-md-6 mb-4">
                <h5>Tipo Cadena</h5>
                <select class="form-control mb-4" name="tipo_cadena">
                  <option>tipo_cadena</option>
                </select>
              </div>

              <div class="col-12 col-md-6 mb-4">
                <h5>Empate Cadena</h5>
                <select class="form-control" name="empate_cadena">
                  <option>empate_cadena</option>
                </select>
              </div>
            </div>
          </div>


          <!-- Moto  formulario -->


          <div class="params-forms" id="moto" style="display: none;">
            <div class="row">
              <h3 class="col-12 mb-4">Parametros Moto</h3>
              <div class="col-12 col-md-6 mb-4">
                <h5>Diametro interno</h5>
                <input class="form-control" type="number" name="d_interno_moto">
              </div>

              <div class="col-12 col-md-6 mb-4">
                <h5>Diametro externo</h5>
                <input class="form-control" type="number" name="d_externo_moto">
              </div>

              <div class="col-12 col-md-6 mb-4">
                <h5>Espesor</h5>
                <input class="form-control" type="number" name="espesor_moto">
              </div>

              <div class="col-12 col-md-6 mb-4">
                <h5>Tipo de Sello</h5>
                <select class="form-control" name="sello_moto">
                  <option>tipo_sello</option>
                </select>
              </div>
            </div>
          </div>


          <!-- Serie6000  formulario -->

          <div class="params-forms" id="serie6000" style="display: none;">
            <div class="row">
              <h3 class="col-12 mb-4">Serie6000 Parametros</h3>
              <div class="col-12 mb-4">
                <h5>Rodamiento</h5>
                <input class="form-control" type="number" name="rodamiento_serie6000">
              </div>

              <div class="col-12 col-md-6 mb-4">
                <h5>Tipo de Sello</h5>
                <select class="form-control" name="sello_serie6000">
                  <option>tipo_sello</option>
                </select>
              </div>

              <div class="col-12 col-md-6 mb-4">
                <h5>Diametro interno</h5>
                <input class="form-control" type="number" name="d_interno_serie6000">
              </div>

              <div class="col-12 col-md-6 mb-4">
                <h5>Diametro externo</h5>
                <input class="form-control" type="number" name="d_externo_serie6000">
              </div>

              <div class="col-12 col-md-6 mb-4">
                <h5>Espesor</h5>
                <input class="form-control" type="number" name="espesor_serie6000">
              </div>
            </div>
          </div>


          <!-- Auto  formulario -->

          <div class="params-forms" id="auto" style="display: none;">
            <div class="row">
              <h3 class="col-12 mb-4">Auto Parametros</h3>
              <div class="col-12  mb-4">
                <h5>Articulo</h5>
                <input class="form-control" type="text" name="articulo_auto">
              </div>

              <div class="col-12  mb-4">
                <h5>Aplicacion</h5>
                <textarea class="form-control" name="aplicacion_auto"></textarea>
              </div>

              <div class="col-12 col-md-6 mb-4">
                <h5>Posicion</h5>
                <select class="form-control" name="posicion_auto">
                  <option>posicion_id</option>
                </select>
              </div>

              <div class="col-12 col-md-6 mb-4">
                <h5>Diametro interno</h5>
                <input class="form-control" type="number" name="d_interno_auto">
              </div>

              <div class="col-12 col-md-6 mb-4">
                <h5>Diametro externo</h5>
                <input class="form-control" type="number" name="d_externo_auto">
              </div>

              <div class="col-12 col-md-6 mb-4">
                <h5>Espesor</h5>
                <input class="form-control" type="number" name="espesor_auto">
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-12 mb-5">
              <input type="submit" class="btn btn-primary" value="Crear">
            </div>
          </div>
        
      </form>
  </div>
</section>

<script type="text/javascript">
  const catSelect = document.getElementById('categoria_select');
  let formularios = document.querySelectorAll('.params-forms');
  


//evento cambio select
  catSelect.addEventListener('change', (e) => {
    let opcion = e.target.options[catSelect.selectedIndex]
    activeForms(opcion)
  });


//funcion para activar los formularios
  function activeForms(target){

    offForms()

    if (target.text === "Serie Automotriz") {
      
      let form = document.querySelector('#auto')
      form.style.display = 'flex';

    } else if(target.text === "Serie 6000") {
      
      let form = document.querySelector('#serie6000')
      form.style.display = 'flex';

    } else if(target.text === "Serie Moto") {

      let form = document.querySelector('#moto')
      form.style.display = 'flex';

    } else if(target.text === "Serie cadenas") {

      let form = document.querySelector('#cadena')
      form.style.display = 'flex';

    } else if(target.text === "Chumaceras") {
      let form = document.querySelector('#chumacera')
      form.style.display = 'flex';
    }
  }


//resetea los formularios
  function offForms(){
    
    formularios.forEach( form => {
      form.style.display = 'none';
    });
  }
</script>

@endsection