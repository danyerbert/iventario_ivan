<div class="modal fade" id="RegistrarUsuario" tabindex="-1">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Registrar Usuario</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" id="registroUser">
                            <div class="col-12">
                                <label for="usuario" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="usuario" name="usuario">
                            </div>
                            <div class="col-12">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="text" class="form-control" id="password" name="password">
                            </div>
                            <input type="button" class="btn btn-success" onclick="RegistrarUsuario()" value="Registrar">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cerrar</button>
                        </form><!-- Vertical Form -->
                    </div>
                  </div>
                </div>
              </div><!-- End Modal Dialog Scrollable-->
