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
    
    <div class="tab">Contact Info:
      <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
      <p><input placeholder="Phone..." oninput="this.className = ''"></p>
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