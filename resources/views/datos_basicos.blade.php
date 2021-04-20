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