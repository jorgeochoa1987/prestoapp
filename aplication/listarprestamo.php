 
<?php 
include('header.php');
?>
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Listado</span>
                <h3 class="page-title">Listado de prestamos por cartera</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                  <?php 
                          require('../conex/conexion.php');
                          $query="SELECT * FROM cartera group by cedula";
                          $answer = $conexion -> query($query);
                         
                          while ($row=$answer->fetch_assoc()){
                          ?>
                          <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Cartera de :  <?php echo $row['nombre']; ?>  <?php echo $row['id']; ?> </h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">#</th>
                          <th scope="col" class="border-0">Nombre</th>
                          <th scope="col" class="border-0">Apellido</th>
                          <th scope="col" class="border-0">Telefono</th>
                          <th scope="col" class="border-0">Correo</th>
                          <th scope="col" class="border-0">Solicitud</th>
                          <th scope="col" class="border-0">Pago</th>
                          <th scope="col" class="border-0">tipo cobro</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                      $id =  $row['id'];
                      echo $id; 
                      $query2="SELECT * FROM cuenta group by  id_prestamista = $id";
                          $answer2 = $conexion -> query($query2);
                         
                          while ($row2=$answer2->fetch_assoc()){
                          ?>
                           <th scope="col" class="border-0"><?php echo $row2['id']; ?></th>
                            <th scope="col" class="border-0"><?php echo $row2['prestamo']; ?></th>

                            <?php 
                          }
                         
                      
                      ?>
                     
                        
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                          <?php 
                          }
                          ?>


                    
                  </div>
            
                </div>
              </div>
            </div>
         
          </div>
          <?php
         include('footer.php');
         ?>