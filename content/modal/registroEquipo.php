<div class="modal fade" id="modalDialogScrollable" tabindex="-1">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Registrar Equipo</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" id="registroEquipo">
                            <div class="col-12">
                                <label for="planta" class="form-label">Planta</label>
                                <input type="text" class="form-control" id="planta" name="planta">
                            </div>
                            <div class="col-12">
                                <label for="gcia" class="form-label">GCIA</label>
                                <input type="text" class="form-control" id="gcia" name="gcia">
                            </div>
                            <div class="col-12">
                                <label for="direcionEncargada" class="form-label">GCIA / DIV / DEP</label>
                                <input type="password" class="form-control" id="direcionEncargada" name="direcionEncargada">
                            </div>
                            <div class="col-12">
                                <label for="Nombres" class="form-label">Nombres</label>
                                <input type="text" class="form-control" id="Nombres" name="Nombres">
                            </div>
                            <div class="col-12">
                                <label for="Apellidos" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="Apellidos" name="Apellidos">
                            </div>
                            <div class="col-12">
                                <label for="Cedula" class="form-label">Cedula</label>
                                <input type="text" class="form-control" id="Cedula" name="Cedula">
                            </div>
                            <div class="col-12">
                                <label for="Usuario" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="Usuario" name="Usuario">
                            </div>
                            <div class="col-12">
                                <label for="Cargo" class="form-label">Cargo</label>
                                <input type="text" class="form-control" id="Cargo" name="Cargo">
                            </div>
                            <div class="col-12">
                                <label for="tipo_de_equipo" class="form-label">Tipo De Equipo</label>
                                <input type="text" class="form-control" id="tipo_de_equipo" name="tipo_de_equipo">
                            </div>
                            <div class="col-12">
                                <label for="marca_equipo" class="form-label">Marca Equipo</label>
                                <input type="text" class="form-control" id="marca_equipo" name="marca_equipo">
                            </div>
                            <div class="col-12">
                                <label for="modelo_equipo" class="form-label">Modelo Equipo</label>
                                <input type="text" class="form-control" id="modelo_equipo" name="modelo_equipo">
                            </div>
                            <div class="col-12">
                                <label for="serial_equipo" class="form-label">Serial Equipo</label>
                                <input type="text" class="form-control" id="serial_equipo" name="serial_equipo">
                            </div>
                            <div class="col-12">
                                <label for="monitor_marca" class="form-label">Monitor Marca</label>
                                <input type="text" class="form-control" id="monitor_marca" name="monitor_marca">
                            </div>
                            <div class="col-12">
                                <label for="monitor_modelo" class="form-label">Monitor Modelo</label>
                                <input type="text" class="form-control" id="monitor_modelo" name="monitor_modelo">
                            </div>
                            <div class="col-12">
                                <label for="serial_monitor" class="form-label">Serial Monitor</label>
                                <input type="text" class="form-control" id="serial_monitor" name="serial_monitor">
                            </div>
                            <div class="col-12">
                                <label for="bien_nacional" class="form-label">Bien Nacional</label>
                                <input type="text" class="form-control" id="bien_nacional" name="bien_nacional">
                            </div>
                            <div class="col-12">
                                <label for="serial_tecnologia" class="form-label">Serial Tecnologia</label>
                                <input type="text" class="form-control" id="serial_tecnologia" name="serial_tecnologia">
                            </div>
                            <div class="col-12">
                                <label for="sistema_operativo" class="form-label">Sistema Operativo Migrado</label>
                                <input type="text" class="form-control" id="sistema_operativo" name="sistema_operativo">
                            </div>
                            <div class="col-12">
                                <label for="disco_duro" class="form-label">Disco Duro</label>
                                <input type="text" class="form-control" id="disco_duro" name="disco_duro">
                            </div>
                            <div class="col-12">
                                <label for="memoria_ram" class="form-label">Memoria Ram</label>
                                <input type="text" class="form-control" id="memoria_ram" name="memoria_ram">
                            </div>
                            <div class="col-12">
                                <label for="nombre_de_equipo" class="form-label">Nombre de equipo</label>
                                <input type="text" class="form-control" id="nombre_de_equipo" name="nombre_de_equipo">
                            </div>
                            <div class="col-12">
                                <label for="mac_de_equipo" class="form-label">MAC del equipo</label>
                                <input type="text" class="form-control" id="mac_de_equipo" name="mac_de_equipo">
                            </div>
                            <div class="col-12">
                                <label for="observaciones" class="form-label">Observaciones</label>
                                <input type="text" class="form-control" id="observaciones" name="observaciones">
                            </div>
                            <div class="col-12">
                                <label for="responsable_tecnico" class="form-label">Responsable Tecnico</label>
                                <input type="text" class="form-control" id="responsable_tecnico" name="responsable_tecnico">
                            </div>
                            <input type="button" class="btn btn-success" onclick="RegistroDeEquipo()" value="Registrar">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cerrar</button>
                        </form><!-- Vertical Form -->
                    </div>
                  </div>
                </div>
              </div><!-- End Modal Dialog Scrollable-->
