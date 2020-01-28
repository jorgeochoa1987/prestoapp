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
                <h3 class="page-title">Nuevo cliente</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img   id="imgSalida" class="rounded-circle" src="../images/child.png" alt="Ingrese foto" width="110"> </div>
                      <input type="text" class="form-control" hidden  id="idimage" placeholder="Ingrese nombre" > 

                    <h4 class="mb-0"></h4>


                    
                    <span class="text-muted d-block mb-2"></span>
                  
                      <input  class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2"  style="
    width: 100%;
" name="file-input" id="file-input" type="file" />
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-4">
                      <div class="progress-wrapper">
                        <strong class="text-muted d-block mb-2"></strong>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 74%;">
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
                          
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feFirstName">Nombre</label>
                                <input type="text" class="form-control" id="feFirstName" placeholder="Ingrese nombre" value=""> </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName">Apellido</label>
                                <input type="text" class="form-control" id="feLastName" placeholder="Ingrese apellido" value=""> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Correo</label>
                                <input type="email" class="form-control" id="feEmailAddress" placeholder="Correo@correo.com" value=""> </div>
                              <div class="form-group col-md-6">
                              <label for="feInputAddress">Teléfono</label>
                              <input type="text" class="form-control" id="fephone" placeholder="Ingrese teléfono"> </div>
                            </div>
                            <div class="form-group">
                              <label for="feInputAddress">Dirección</label>
                              <input type="text" class="form-control" id="feInputAddress" placeholder="Ingrese dirección"> </div>
                            <div class="form-row">
                              
                              <div class="form-group col-md-6">
                                <label for="feInputCity">Ciudad</label>
                                <input type="text" class="form-control" id="feInputCity" placeholder="Ingrese Ciudad"> </div>
                                <div class="form-group col-md-6">
                                <label for="feInputCity">Cédula</label>
                                <input type="text" class="form-control" id="fenumber" placeholder="Ingrese cédula"> </div>
                             </div>
                        
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="feDescription">Notas adicionales</label>
                                <textarea class="form-control" name="fenotes" id="fenotes" rows="5"></textarea>
                              </div>
                            </div>
                            <button type="submit" id="crearCliente" class="btn btn-accent">Crear cliente</button>

                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class='card card-small col-lg-3'>
               
            </div>
            <!-- End Page Header -->
          </div>
          <?php
         include('footer.php');
         ?>