<!--Encuesta Prioritaria--> 
@extends('plantilla_encuesta')
@section('title', 'Encuesta Prioritaria')
    

@section('encuesta')
<form action="">
  
  <div id="contenedor-encuestas" class="container">
  <section id="encabezado-encuesta" class="row">
    <div class="col-md-12">
      <h2 class="text-center">FORMATO ENCUESTA DE SATISFACIÓN CONSULTA PRIORITARIA</h2>
      <p class="texto-parrafo">Estimado Usuario<br>          
        Para Perfect Body Medical Center, sus opiniones y sugerencias son de valiosa importancia para la
        mejora continua. Permitanos conocer su percepción para la toma de decisiones que nos permita
        prestarle cada vez, un mejor servicio.</p>
    </div>
  </section>
  <hr><br />
  <section class="row">
    <section class="col-md-12">
      <h3>Datos basicos</h3>
      <p></p>
    </section>
  </section>
  <section class="row">
    <section class="col-md-12">
      <section class="row">
        <div class="col-md-8">
          <div class="form-group">
            <label for="nombreCompleto">Nombre del Paciente:*</label>
            <input type="text" class="form-control" id="nombreCompleto" maxlength="128" placeholder="Nombre del Paciente" required>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="idIdentificacion">Identificación:*</label>
            <input type="number" id="identificacion" class="form-control" placeholder="Numero de Identificación" maxlength="15" required/>
          </div>
        </div>
      </section>

      <section class="row">
        <div class="col-md-8">
          <div class="form-group">
            <label for="email">Correo Electronico:*</label>
            <input type="email" class="form-control" id="email" maxlength="128" placeholder="Correo Electronico" required>
          </div>
        </div>
        <div class="col-md-4">
          <label for="telefono">Telefono/Celular:*</label>
          <input type="text" class="form-control" id="telefono" placeholder="Telefono/Celular" maxlength="30" required/>
        </div>
        
      </section>
      <section class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="fechaEncuesta">Fecha de Encuesta: *</label>
            <input type="date" class="form-control" id="fechaEncuesta" required>
          </div>
        </div>
      
        <div class="col-md-4">
          <div class="form-group">
            <label for="NumeroHabitación">Numero de Habitacion: *</label>
            <input type="number" class="form-control" id="numeroHabitacion" required>
          </div>
        </div>
        <!--
        <div class="col-md-4">
          <label for="entidadPaciente">Entidad: *</label>
            <select class="form-control" id="entidad">
              <option value="ce">Consulta Externa</option>
              <option value="farm">Farmacia</option>
              <option value="hosp">Hospitalización</option>
              <option value="pyp">Promoción y Prevención</option>
              <option value="rx">Rayos X</option>
              <option value="urge">Consulta Prioritaria</option>
            </select>
        </div>
        -->
      </section>
    </section>
  </section>
  <hr />

  <!--  Servicios  -->
  <section id="seccion_nivel_estandar" class="row">
    <div class="col-md-12">
      <h4>
        POR FAVOR SELECCIONE UNA OPCIÓN SEGÚN SU PERCEPCIÓN DEL SERVICIO RECIBIDO
      </h4>
      <div class="row">
        <div id="preguntas_estandar" class="col-md-6 ">
          <!--<div class="items_preguntas_estandar">-->
            <p class="">¿Como califica nuestras instalaciones?</p>
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
  
  <section class="row">
    <div class="col-md-12">
      <h3>Servicio.</h3>
      <p></p>
    </div>
  </section>
  <!--  PREGUNTA 1  -->
  <section class="row">
    <div class="col-md-4">
      <p>¿La Atencion Medica fue realizada a Tiempo?</p>
    </div>
    <div class="col-md-1">
      <label class="radio">Si
      <input type="radio" name="pregunta1" id="pregunta1a" value="SI">
      </label>
    </div>
    <div class="col-md-1">
      <label class="radio">No
      <input type="radio" name="pregunta1" id="preguntab" value="NO"> 
      </label>
    </div>
    <div class="col-md-6">
      <label class="radio">¿por qué?</label>
      <textarea class="texto-justificacion form-control texto-justificacion" rows="2" id="comentarios"></textarea>
    </div>
  </section>
  <!--  PREGUNTA 2  -->
  <section class="row">
    <div class="col-md-4">
      <p>¿Recomendaria a PERFECT BODY MEDICAL CENTER a sus familiares y amigos?</p>
    </div>
    <div class="col-md-1">
      <label class="radio">Si
      <input type="radio" name="pregunta1" id="pregunta1a" value="SI">
      </label>
    </div>
    <div class="col-md-1">
      <label class="radio">No
      <input type="radio" name="pregunta1" id="preguntab" value="NO"> 
      </label>
    </div>
    <div class="col-md-6">
      <label class="radio">¿por qué?
      
      </label>
      <textarea class="texto-justificacion form-control texto-justificacion" rows="2" id="comentarios"></textarea>
    </div>
  </section>
  <!--  PREGUNTA 3  -->
  <section class="row">
    <div class="col-md-4">
      <p>¿Volvería usted a utilizar los servicios de PERFECT BODY MEDICAL CENTER?</p>
    </div>
    <div class="col-md-1">
      <label class="radio">Si
      <input type="radio" name="pregunta1" id="pregunta1a" value="SI">
      </label>
    </div>
    <div class="col-md-1">
      <label class="radio">No
      <input type="radio" name="pregunta1" id="preguntab" value="NO"> 
      </label>
    </div>
    <div class="col-md-6">
      <label class="radio">¿por qué?
      
      </label>
      <textarea class="texto-justificacion form-control texto-justificacion" rows="2" id="comentarios"></textarea>
    </div>
  </section>
  <!--  PREGUNTA 4  -->
  <section class="row">
    <div class="col-md-4">
      <p>¿Desearia usted destacar a algun funcionario por su buen servicio?</p>
    </div>
    <div class="col-md-1">
      <label class="radio">Si
      <input type="radio" name="pregunta1" id="pregunta1a" value="SI">
      </label>
    </div>
    <div class="col-md-1">
      <label class="radio">No
      <input type="radio" name="pregunta1" id="preguntab" value="NO"> 
      </label>
    </div>
    <div class="col-md-6">
      <label class="radio">¿por qué?
      
      </label>
      <textarea class="texto-justificacion form-control texto-justificacion" rows="2" id="comentarios"></textarea>
    </div>
  </section>
  <!--  PREGUNTA 5  -->
  
  <!--  PREGUNTA 6  -->
  <section class="row">
    <div class="col-md-4">
      <p>¿Desearia usted destacar a algun funcionario por su mal servicio?</p>
    </div>
    <div class="col-md-1">
      <label class="radio">Si
      <input type="radio" name="pregunta1" id="pregunta1a" value="SI">
      </label>
    </div>
    <div class="col-md-1">
      <label class="radio">No
      <input type="radio" name="pregunta1" id="preguntab" value="NO"> 
      </label>
    </div>
    <div class="col-md-6">
      <label class="radio">¿por qué?
      
      </label>
      <textarea class="texto-justificacion form-control texto-justificacion" rows="2" id="comentarios"></textarea>
    </div>
  </section>
  <section class="row">
    <div class="col-md-4">
      <p>¿Está usted satisfecho con nuestro servicio?</p>
    </div>
    <div class="col-md-1">
      <label class="radio">Si
      <input type="radio" name="pregunta1" id="pregunta1a" value="SI">
      </label>
    </div>
    <div class="col-md-1">
      <label class="radio">No
      <input type="radio" name="pregunta1" id="preguntab" value="NO"> 
      </label>
    </div>
    <div class="col-md-6">
      <label class="radio">¿por qué?
      
      </label>
      <textarea class="texto-justificacion form-control texto-justificacion" rows="2" id="comentarios"></textarea>
    </div>
  </section>
  
  <br />
  <hr />
  <!--  Comentarios  -->
  <section class="row">
    <div class="col-md-12">
      <h3>Sugerencias y recomendaciones:</h3>
      <p></p>
    </div>
  </section>
  <section class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="comment">Sugerencias y recomendaciones:</label>
        <textarea class="form-control" rows="6" id="comentarios"></textarea>
      </div>
    </div>
  </section>
  <section class="row">
    <div class="col-md-12">
      <button type="button" class="btn btn-info" id="saveForm" onclick="saveForm">Guardar Encuesta</button>
      <button type="button" class="btn btn-danger" id="clearForm">Limpiar formulario</button>
    </div>
  </section>
</div>

</form>		
@endsection