@extends('plantilla_encuesta')
@section('title', 'Encuesta Prioritaria')
@section('css_formulario')
<link rel="stylesheet" href="{{asset('css/estilos_formulario.css')}}">

@endsection


@section('encuesta')
<form id="regForm" action="">

  
    
    <!-- One "tab" for each step in the form: -->
    <div class="tab">
      <h1>Datos del Paciente</h1>
      
      {{--<p><input placeholder="First name..." oninput="this.className = ''"></p>
      <p><input placeholder="Last name..." oninput="this.className = ''"></p>--}}

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="cedula">Cedula</label>
          <input id="cedula" type="number" class="form-control @error('cedula') is-invalid @enderror" name="cedula"  required autocomplete="cedula" autofocus>
        </div>
        <div class="form-group col-md-6">
          <label for="nombre">Nombre</label>
          {{--  <input type="password" class="form-control" id="inputPassword4" placeholder="Password">  --}}
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="nombre" value="{{ old('name') }}" required autocomplete="name" autofocus>

          @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        
      </div>
      
      
      {{--  <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>  --}}
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="telefono">Telefono/Celular</label>
          {{--  <input type="password" class="form-control" id="inputPassword4" placeholder="Password">  --}}
          <input id="telefono" type="number" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>
  
          @error('telefono')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        
        <div class="form-group col-md-6">
          <label for="email">Correo</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>  
      
      <div class="form-row">
        <div class="form-group col-md-6">
        
          <label for="diligencia">Diligenciado por</label>
          <select id="tipo" class="form-control" @error('tipo') is-invalid @enderror name="tipo" value="{{ old('tipo') }}" required autocomplete="tipo" autofocus onchange="seleccionaTipo(value)">
            <option value="">-- Seleccionar --</option>
            <option value="anuncio">Acompañante</option>
            <option value="cumpleaños">Paciente</option>
          </select>
        </div>
          
        
        @error('tipo')
            <span class="invalid-feedback" role="alert"> 
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        {{--  <div class="form-group col-md-2">
          <label for="inputZip">Zip</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
        
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>  --}}

      </div>

    </div> 

    <div class="tab">
      <section id="seccion_nivel_estandar" class="row">
      
        <h5>
          POR FAVOR SELECCIONE UNA OPCIÓN SEGÚN SU PERCEPCIÓN DEL SERVICIO RECIBIDO
        </h5>
        <p>Califique con MB:Muy Bueno, B:Bueno, R:Regular, M:Malo o MM:Muy Malo</p>

        <div class="form-row">
          <div class="form-group col-md-12">
            
          </div>
        </div>
        <div class="col-md-12">
          
          
          <div class="form-row">
            <div id="preguntas_estandar" class="col-md-4 ">
              <p class="">¿Como califica nuestras instalaciones?</p>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
              <label class="form-check-label" for="inlineRadio1">MB</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">B</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">R</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">M</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">MM</label>
            </div>
          </div>
    
          <div class="row">
            <div id="preguntas_estandar" class="col-md-6 ">
              <!--<div class="items_preguntas_estandar">-->
                <p class="">¿Cómo califica el trato recibido por parte del personal Administrativo?</p>
              <!--</div>-->
            </div>
            <div class="col-md-4 items_preguntas_estandar">
              <select class="opciones_desplegables" name="pregunta_estandar1">
                <option value="0">Seleccionar</option>
                <option value="5">Muy Bueno</option>
                <option value="4">Bueno</option>
                <option value="3">Regular</option>
                <option value="2">Malo</option> 
                <option value="1">Muy Malo</option> 
              </select>
            </div>
          </div>
    
          <div class="row">
            <div id="preguntas_estandar" class="col-md-6 ">
              <!--<div class="items_preguntas_estandar">-->
                <p class="">¿Cómo califica la atención del equipo de enfermeras?</p>
              <!--</div>-->
            </div>
            <div class="col-md-4 items_preguntas_estandar">
              <select class="opciones_desplegables" name="pregunta_estandar1">
                <option value="0">Seleccionar</option>
                <option value="5">Muy Bueno</option>
                <option value="4">Bueno</option>
                <option value="3">Regular</option>
                <option value="2">Malo</option> 
                <option value="1">Muy Malo</option> 
              </select>
            </div>
          </div>
    
          <div class="row">
            <div id="preguntas_estandar" class="col-md-6 ">
              <!--<div class="items_preguntas_estandar">-->
                <p class="">¿Cómo fue aseo de las instalaciones?</p>
              <!--</div>-->
            </div>
            <div class="col-md-4 items_preguntas_estandar">
              <select class="opciones_desplegables" name="pregunta_estandar1">
                <option value="0">Seleccionar</option>
                <option value="5">Muy Bueno</option>
                <option value="4">Bueno</option>
                <option value="3">Regular</option>
                <option value="2">Malo</option> 
                <option value="1">Muy Malo</option> 
              </select>
            </div>
          </div>
    
          <div class="row">
            <div id="preguntas_estandar" class="col-md-6 ">
              <!--<div class="items_preguntas_estandar">-->
                <p class="">¿Cómo califica el trato recibido por parte del personal Administrativo?</p>
              <!--</div>-->
            </div>
            <div class="col-md-4 items_preguntas_estandar">
              <select class="opciones_desplegables" name="pregunta_estandar1">
                <option value="0">Seleccionar</option>
                <option value="5">Muy Bueno</option>
                <option value="4">Bueno</option>
                <option value="3">Regular</option>
                <option value="2">Malo</option> 
                <option value="1">Muy Malo</option> 
              </select>
            </div>
          </div>
    
          <div class="row">
            <div id="preguntas_estandar" class="col-md-6 ">
              <!--<div class="items_preguntas_estandar">-->
                <p class="">¿Cómo califica información sobre los Apoyos Diagnosticos * ?</p>
              <!--</div>-->
            </div>
            <div class="col-md-4 items_preguntas_estandar">
              <select class="opciones_desplegables" name="pregunta_estandar1">
                <option value="0">Seleccionar</option>
                <option value="5">Muy Bueno</option>
                <option value="4">Bueno</option>
                <option value="3">Regular</option>
                <option value="2">Malo</option> 
                <option value="1">Muy Malo</option> 
              </select>
            </div>
          </div>
    
          <div class="row">
            <div id="preguntas_estandar" class="col-md-6 ">
              <!--<div class="items_preguntas_estandar">-->
                <p class="">¿Cómo califica la atención durante el traslado asistencial (ambulancia)?</p>
              <!--</div>-->
            </div>
            <div class="col-md-4 items_preguntas_estandar">
              <select class="opciones_desplegables" name="pregunta_estandar1">
                <option value="0">Seleccionar</option>
                <option value="5">Muy Bueno</option>
                <option value="4">Bueno</option>
                <option value="3">Regular</option>
                <option value="2">Malo</option> 
                <option value="1">Muy Malo</option> 
              </select>
            </div>
          </div>
    
          <div class="row">
            <div id="preguntas_estandar" class="col-md-6 ">
              <!--<div class="items_preguntas_estandar">-->
                <p class="">¿Cómo fue la información que recibió de normas y servicios?</p>
              <!--</div>-->
            </div>
            <div class="col-md-4 items_preguntas_estandar">
              <select class="opciones_desplegables" name="pregunta_estandar1">
                <option value="0">Seleccionar</option>
                <option value="5">Muy Bueno</option>
                <option value="4">Bueno</option>
                <option value="3">Regular</option>
                <option value="2">Malo</option> 
                <option value="1">Muy Malo</option> 
              </select>
            </div>
          </div>
          
        </div>
      </section>

    </div>
    
    <div class="tab">Birthday:
      <p><input placeholder="dd" oninput="this.className = ''"></p>
      <p><input placeholder="mm" oninput="this.className = ''"></p>
      <p><input placeholder="yyyy" oninput="this.className = ''"></p>
    </div>
    
    <div class="tab">Login Info:
      <p><input placeholder="Username..." oninput="this.className = ''"></p>
      <p><input placeholder="Password..." oninput="this.className = ''"></p>
    </div>
    
    <div style="overflow:auto;">
      <div style="float:right;">
        <button class="btn btn-primary" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
    </div>
    
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
    </div>
    
</form>
@endsection



@section('js_formulario')
<script src="{{ asset('js/scripts_formularios.js') }}" ></script>
@endsection