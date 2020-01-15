<!doctype html>
<html class="no-js h-100" lang="en">
<?php 
include('header.php');
?>
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Agregar</span>
                <h3 class="page-title">Nuevo prestamo</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      </div>
                    <h4 class="mb-0" id="nombre">Nombre cliente</h4>
                    
                    <span class="text-muted d-block mb-2"></span>
                    <button type="button" data-toggle="modal" data-target="#cliente" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2">
                      <i class="material-icons mr-1">person_add</i>Seleccionar cliente</button>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-4">
                      <div class="progress-wrapper">
                        <strong class="text-muted d-block mb-2"></strong>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 74%;">
                          </div>
                        </div>
                      </div>
                    </li>
                   
                  </ul>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Información básica</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feFirstName">Valor</label>
                                <input type="text" class="form-control" id="feFirstName" placeholder="Valor" value="0"> </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName">Interes</label>
                                <input type="text" class="form-control" id="feLastName" placeholder="Interes" value="0"> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                              <label for="feInputState">Cartera</label>
                              <select id="feInputState" class="form-control">
                                  <option selected>Seleccionar</option>
                                  <option value ="jorgeOchoa">Jorge Ochoa</option>
                                  <option value="admin">Admin</option>
                                </select></div>  
                                <div class="form-group col-md-6">
                                <label for="feFirstName">Fecha de primera visita </label>
                                <input type="date" class="form-control" id="feFirstName" placeholder="" value="today"> </div>
                            </div> 
                          
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="feDescription">Notas</label>
                                <textarea class="form-control" name="feDescription" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?</textarea>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-accent">Crear</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class='card card-small col-lg-3'>
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Días de cobro</h6>
                  </div>
                  <div class='card-body p-0'>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item px-3 pb-2">
                        <div class="custom-control custom-checkbox mb-1">
                          <input type="checkbox" class="custom-control-input" id="category1" checked>
                          <label class="custom-control-label" for="category1">Lunes</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                          <input type="checkbox" class="custom-control-input" id="category2" >
                          <label class="custom-control-label" for="category2">Martes</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                          <input type="checkbox" class="custom-control-input" id="category3">
                          <label class="custom-control-label" for="category3">Miercoles</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                          <input type="checkbox" class="custom-control-input" id="category4">
                          <label class="custom-control-label" for="category4">Jueves</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                          <input type="checkbox" class="custom-control-input" id="category5">
                          <label class="custom-control-label" for="category5">Viernes</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                          <input type="checkbox" class="custom-control-input" id="category6">
                          <label class="custom-control-label" for="category5">Sabado</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                          <input type="checkbox" class="custom-control-input" id="category7">
                          <label class="custom-control-label" for="category5">Domingo</label>
                        </div>
                      </li>
                      <li class="list-group-item d-flex px-3">
                      
                      </li>
                    </ul>
                  </div>
                </div>
            </div>
            <!-- End Page Header -->
           
          </div>

          <div id="cliente" class="modal fade" role="dialog">
            <div class="modal-dialog">
           <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Seleccionar cliente</h4>
              </div>
              <div class="modal-body">
                <p>Some text in the modal.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>

          </div>
        </div>
          <?php
         include('footer.php');
         ?>