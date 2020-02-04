 
<?php 
include('header.php');
?>


          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Página de inicio</span>
                <h3 class="page-title">Estado de cuentas</h3><h4 class="page-title" style=" width: 100%;font-size: 15px;">
                
                <?php date_default_timezone_set('America/Bogota'); 
                $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                 
                echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ; 
                
                ?></h4>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Small Stats Blocks -->
   <div class="row">
            <?php 

                          require('../conex/conexion.php');
                          $fechaini =date("Y-m-d");
                          $fecha = $fechaini. " 01:48:10";
                          $fechafin =  $fechaini." 23:48:10";
                          $query="select  SUM(pg.valor) as valor, ct.nombre as nombre
                          from pago as pg
                          join cartera as ct
                          on pg.id_cartera = ct.id
                          where pg.fechaPago >='$fecha' and  pg.fechaPago  < '$fechafin'
                          group by pg.id_cartera ";
                          $answer = $conexion -> query($query);
                          while ($row=$answer->fetch_assoc()){
                          ?>
             <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Cartera recupera hoy de: <?php echo $row['nombre']; ?> </span>
                        <h6 class="stats-small__value count my-3">$ <?php echo $row['valor']; ?></h6>
                      </div>
                      <div class="stats-small__data">
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                  </div>
                </div>
              </div>
                        
                          <?php 
                          }
                          ?>
            
  </div>

          <div class="row">
          <?php 
                         
                          if(  date("l") =='Monday')
                          {
                            require('../conex/conexion.php');
                            $query2="SELECT cl.foto as foto, ct.id_cliente as idcli, cl.nombre as nombre, cl.notas as notas, ct.valorPagar as valpago, car.nombre as nombreCartera, d.lunes as lunes, d.martes as martes, d.miercoles as miercoles, d.jueves as jueves, d.viernes as viernes, d.sabado as sabado, d.domingo as domingo, d.quincenal as quince, d.mensual as mes
                            FROM `cuenta` as ct
                            join `dias`as d
                            on ct.id = d.id_cuenta
                            join `cartera` as car
                            on ct.id_prestamista =  car.id
                            join `cliente` as cl
                            on ct.id_cliente = cl.id
                            where d.lunes = 1";
                            $answer2 = $conexion -> query($query2);
                            while ($row2=$answer2->fetch_assoc()){
                            ?>  
                            <div class="col-lg-6 col-sm-12 mb-4">
                                <div class="card card-small card-post card-post--aside card-post--1">
                               
                                <div class="card-post__image" style="background-image: url('https://javierperezb.com/images/child.png') !important;">
                                 <a href="#" class="card-post__category badge badge-pill badge-info">Cartera: <?php echo $row2['nombreCartera']; ?></a>
                                  
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title">
                                      <a class="text-fiord-blue" href="#"><?php echo $row2['nombre']; ?></a>
                                    </h5>
                                    <p class="card-text d-inline-block mb-3"><?php echo $row2['notas']; ?></p>
                                    <span class="text-muted">Saldo : $ <?php echo $row2['valpago']; ?> </span><br> 
                                    <td> <a class="btn btn-sm btn-success mr-1" href="modpago.php?id=<?php echo $row2 ['idcli'];?>">Pagar </a></td>

                                  </div>
                                  
                                </div>
                        </div>
                          <?php 
                          }
                          ?>

                          
                         

                         
                        <?php 
                          }
                          ?>
                           <?php 
                         
                         if(  date("l") =='Tuesday')
                         {
                           require('../conex/conexion.php');
                           $query2="SELECT ct.id_cliente as idcli, cl.nombre as nombre, cl.notas as notas, ct.valorPagar as valpago, car.nombre as nombreCartera, d.lunes as lunes, d.martes as martes, d.miercoles as miercoles, d.jueves as jueves, d.viernes as viernes, d.sabado as sabado, d.domingo as domingo, d.quincenal as quince, d.mensual as mes
                           FROM `cuenta` as ct
                           join `dias`as d
                           on ct.id = d.id_cuenta
                           join `cartera` as car
                           on ct.id_prestamista =  car.id
                           join `cliente` as cl
                           on ct.id_cliente = cl.id
                           where d.martes = 1";
                           $answer2 = $conexion -> query($query2);
                           while ($row2=$answer2->fetch_assoc()){
                           ?>  
                           <div class="col-lg-6 col-sm-12 mb-4">
                               <div class="card card-small card-post card-post--aside card-post--1">
                               <div class="card-post__image" style="background-image: url('https://javierperezb.com/images/child.png') !important;">
                                <a href="#" class="card-post__category badge badge-pill badge-info">Cartera: <?php echo $row2['nombreCartera']; ?></a>
                                 
                                 </div>
                                 <div class="card-body">
                                   <h5 class="card-title">
                                     <a class="text-fiord-blue" href="#"><?php echo $row2['nombre']; ?></a>
                                   </h5>
                                   <p class="card-text d-inline-block mb-3"><?php echo $row2['notas']; ?></p>
                                   <span class="text-muted">Saldo : $ <?php echo $row2['valpago']; ?> </span><br> 
                                   <td> <a class="btn btn-sm btn-success mr-1" href="modpago.php?id=<?php echo $row2 ['idcli'];?>">Pagar </a></td>

                                 </div>
                                 
                               </div>
                       </div>
                         <?php 
                         }
                         ?>

                    
<?php 
                          }
                          ?>
                           <?php 
                         
                         if(  date("l") =='Wednesday')
                         {
                           require('../conex/conexion.php');
                           $query2="SELECT ct.id_cliente as idcli, cl.nombre as nombre, cl.notas as notas, ct.valorPagar as valpago, car.nombre as nombreCartera, d.lunes as lunes, d.martes as martes, d.miercoles as miercoles, d.jueves as jueves, d.viernes as viernes, d.sabado as sabado, d.domingo as domingo, d.quincenal as quince, d.mensual as mes
                           FROM `cuenta` as ct
                           join `dias`as d
                           on ct.id = d.id_cuenta
                           join `cartera` as car
                           on ct.id_prestamista =  car.id
                           join `cliente` as cl
                           on ct.id_cliente = cl.id
                           where d.miercoles = 1";
                           $answer2 = $conexion -> query($query2);
                           while ($row2=$answer2->fetch_assoc()){
                           ?>  
                           <div class="col-lg-6 col-sm-12 mb-4">
                               <div class="card card-small card-post card-post--aside card-post--1">
                               <div class="card-post__image" style="background-image: url('https://javierperezb.com/images/child.png') !important;">
                                 <a href="#" class="card-post__category badge badge-pill badge-info">Cartera: <?php echo $row2['nombreCartera']; ?></a>
                                 
                                 </div>
                                 <div class="card-body">
                                   <h5 class="card-title">
                                     <a class="text-fiord-blue" href="#"><?php echo $row2['nombre']; ?></a>
                                   </h5>
                                   <p class="card-text d-inline-block mb-3"><?php echo $row2['notas']; ?></p>
                                   <span class="text-muted">Saldo : $ <?php echo $row2['valpago']; ?> </span><br> 
                                   <td> <a class="btn btn-sm btn-success mr-1" href="modpago.php?id=<?php echo $row2 ['idcli'];?>">Pagar </a></td>

                                 </div>
                                 
                               </div>
                       </div>
                         <?php 
                         }
                         ?>



                                             
                        <?php 
                          }
                          ?>
                           <?php 
                         
                         if(  date("l") =='Thursday')
                         {
                           require('../conex/conexion.php');
                           $query2="SELECT ct.id_cliente as idcli, cl.nombre as nombre, cl.notas as notas, ct.valorPagar as valpago, car.nombre as nombreCartera, d.lunes as lunes, d.martes as martes, d.miercoles as miercoles, d.jueves as jueves, d.viernes as viernes, d.sabado as sabado, d.domingo as domingo, d.quincenal as quince, d.mensual as mes
                           FROM `cuenta` as ct
                           join `dias`as d
                           on ct.id = d.id_cuenta
                           join `cartera` as car
                           on ct.id_prestamista =  car.id
                           join `cliente` as cl
                           on ct.id_cliente = cl.id
                           where d.jueves = 1";
                           $answer2 = $conexion -> query($query2);
                           while ($row2=$answer2->fetch_assoc()){
                           ?>  
                           <div class="col-lg-6 col-sm-12 mb-4">
                               <div class="card card-small card-post card-post--aside card-post--1">
                               <div class="card-post__image"style="background-image: url('https://javierperezb.com/images/child.png') !important;">
                                   <a href="#" class="card-post__category badge badge-pill badge-info">Cartera: <?php echo $row2['nombreCartera']; ?></a>
                                 
                                 </div>
                                 <div class="card-body">
                                   <h5 class="card-title">
                                     <a class="text-fiord-blue" href="#"><?php echo $row2['nombre']; ?></a>
                                   </h5>
                                   <p class="card-text d-inline-block mb-3"><?php echo $row2['notas']; ?></p>
                                   <span class="text-muted">Saldo : $ <?php echo $row2['valpago']; ?> </span><br> 
                                   <td> <a class="btn btn-sm btn-success mr-1" href="modpago.php?id=<?php echo $row2 ['idcli'];?>">Pagar </a></td>

                                 </div>
                                 
                               </div>
                       </div>
                         <?php 
                         }
                         ?>



                                             
                        <?php 
                          }
                          ?>
                           <?php 
                         
                         if(  date("l") =='Friday')
                         {
                           require('../conex/conexion.php');
                           $query2="SELECT ct.id_cliente as idcli, cl.nombre as nombre, cl.notas as notas, ct.valorPagar as valpago, car.nombre as nombreCartera, d.lunes as lunes, d.martes as martes, d.miercoles as miercoles, d.jueves as jueves, d.viernes as viernes, d.sabado as sabado, d.domingo as domingo, d.quincenal as quince, d.mensual as mes
                           FROM `cuenta` as ct
                           join `dias`as d
                           on ct.id = d.id_cuenta
                           join `cartera` as car
                           on ct.id_prestamista =  car.id
                           join `cliente` as cl
                           on ct.id_cliente = cl.id
                           where d.viernes = 1";
                           $answer2 = $conexion -> query($query2);
                           while ($row2=$answer2->fetch_assoc()){
                           ?>  
                           <div class="col-lg-6 col-sm-12 mb-4">
                               <div class="card card-small card-post card-post--aside card-post--1">
                               <div class="card-post__image" style="background-image: url('https://javierperezb.com/images/child.png') !important;">
                                  <a href="#" class="card-post__category badge badge-pill badge-info">Cartera: <?php echo $row2['nombreCartera']; ?></a>
                                 
                                 </div>
                                 <div class="card-body">
                                   <h5 class="card-title">
                                     <a class="text-fiord-blue" href="#"><?php echo $row2['nombre']; ?></a>
                                   </h5>
                                   <p class="card-text d-inline-block mb-3"><?php echo $row2['notas']; ?></p>
                                   <span class="text-muted">Saldo : $ <?php echo $row2['valpago']; ?> </span><br> 
                                   <td> <a class="btn btn-sm btn-success mr-1" href="modpago.php?id=<?php echo $row2 ['idcli'];?>">Pagar </a></td>

                                 </div>
                                 
                               </div>
                       </div>
                         <?php 
                         }
                         ?>



                                             
                        <?php 
                          }
                          ?>
                           <?php 
                         
                         if(  date("l") =='Saturday')
                         {
                           require('../conex/conexion.php');
                           $query2="SELECT ct.id_cliente as idcli, cl.nombre as nombre, cl.notas as notas, ct.valorPagar as valpago, car.nombre as nombreCartera, d.lunes as lunes, d.martes as martes, d.miercoles as miercoles, d.jueves as jueves, d.viernes as viernes, d.sabado as sabado, d.domingo as domingo, d.quincenal as quince, d.mensual as mes
                           FROM `cuenta` as ct
                           join `dias`as d
                           on ct.id = d.id_cuenta
                           join `cartera` as car
                           on ct.id_prestamista =  car.id
                           join `cliente` as cl
                           on ct.id_cliente = cl.id
                           where d.sabado = 1";
                           $answer2 = $conexion -> query($query2);
                           while ($row2=$answer2->fetch_assoc()){
                           ?>  
                           <div class="col-lg-6 col-sm-12 mb-4">
                               <div class="card card-small card-post card-post--aside card-post--1">
                               <div class="card-post__image" style="background-image: url('https://javierperezb.com/images/child.png') !important;">
                                   <a href="#" class="card-post__category badge badge-pill badge-info">Cartera: <?php echo $row2['nombreCartera']; ?></a>
                                 
                                 </div>
                                 <div class="card-body">
                                   <h5 class="card-title">
                                     <a class="text-fiord-blue" href="#"><?php echo $row2['nombre']; ?></a>
                                   </h5>
                                   <p class="card-text d-inline-block mb-3"><?php echo $row2['notas']; ?></p>
                                   <span class="text-muted">Saldo : $ <?php echo $row2['valpago']; ?> </span><br> 
                                   <td> <a class="btn btn-sm btn-success mr-1" href="modpago.php?id=<?php echo $row2 ['idcli'];?>">Pagar </a></td>

                                 </div>
                                 
                               </div>
                       </div>
                         <?php 
                         }
                         ?>



                                             
                        <?php 
                          }
                          ?>
                           <?php 
                         
                         if(  date("l") =='Sunday')
                         {
                           require('../conex/conexion.php');
                           $query2="SELECT ct.id_cliente as idcli, cl.nombre as nombre, cl.notas as notas, ct.valorPagar as valpago, car.nombre as nombreCartera, d.lunes as lunes, d.martes as martes, d.miercoles as miercoles, d.jueves as jueves, d.viernes as viernes, d.sabado as sabado, d.domingo as domingo, d.quincenal as quince, d.mensual as mes
                           FROM `cuenta` as ct
                           join `dias`as d
                           on ct.id = d.id_cuenta
                           join `cartera` as car
                           on ct.id_prestamista =  car.id
                           join `cliente` as cl
                           on ct.id_cliente = cl.id
                           where d.domingo = 1";
                           $answer2 = $conexion -> query($query2);
                           while ($row2=$answer2->fetch_assoc()){
                           ?>  
                           <div class="col-lg-6 col-sm-12 mb-4">
                               <div class="card card-small card-post card-post--aside card-post--1">
                               <div class="card-post__image" style="background-image: url('https://javierperezb.com/images/child.png') !important;">

                                 </div>
                                 <div class="card-body">
                                   <h5 class="card-title">
                                     <a class="text-fiord-blue" href="#"><?php echo $row2['nombre']; ?></a>
                                   </h5>
                                   <p class="card-text d-inline-block mb-3"><?php echo $row2['notas']; ?></p>
                                   <span class="text-muted">Saldo : $ <?php echo $row2['valpago']; ?> </span><br> 
                                   <td> <a class="btn btn-sm btn-success mr-1" href="modpago.php?id=<?php echo $row2 ['idcli'];?>">Pagar </a></td>

                                 </div>
                                 
                               </div>
                       </div>
                         <?php 
                         }
                         ?>




                      
                        

                        
                       <?php 
                         }
                         ?>


<?php 
                         
                         if(  date("d") =='15' or date("d") =='30' )
                         {
                           require('../conex/conexion.php');
                           $query2="SELECT ct.id_cliente as idcli, cl.nombre as nombre, cl.notas as notas, ct.valorPagar as valpago, car.nombre as nombreCartera, d.lunes as lunes, d.martes as martes, d.miercoles as miercoles, d.jueves as jueves, d.viernes as viernes, d.sabado as sabado, d.domingo as domingo, d.quincenal as quince, d.mensual as mes
                           FROM `cuenta` as ct
                           join `dias`as d
                           on ct.id = d.id_cuenta
                           join `cartera` as car
                           on ct.id_prestamista =  car.id
                           join `cliente` as cl
                           on ct.id_cliente = cl.id
                           where d.quincenal = 1";
                           $answer2 = $conexion -> query($query2);
                           while ($row2=$answer2->fetch_assoc()){
                           ?>  
                           <div class="col-lg-6 col-sm-12 mb-4">
                               <div class="card card-small card-post card-post--aside card-post--1">
                               <div class="card-post__image"style="background-image: url('https://javierperezb.com/images/child.png') !important;">
                                  <a href="#" class="card-post__category badge badge-pill badge-info">Cartera: <?php echo $row2['nombreCartera']; ?></a>
                                 
                                 </div>
                                 <div class="card-body">
                                   <h5 class="card-title">
                                     <a class="text-fiord-blue" href="#"><?php echo $row2['nombre']; ?></a>
                                   </h5>
                                   <p class="card-text d-inline-block mb-3"><?php echo $row2['notas']; ?></p>
                                   <span class="text-muted">Saldo : $ <?php echo $row2['valpago']; ?> </span><br> 
                                   <td> <a class="btn btn-sm btn-success mr-1" href="modpago.php?id=<?php echo $row2 ['idcli'];?>">Pagar </a></td>

                                 </div>
                                 
                               </div>
                       </div>
                         <?php 
                         }
                         ?>

                         
                        

                        
                       <?php 
                         }
                         ?>
            


            <?php 
                         
                         if(  date("d") =='30' )
                         {
                           require('../conex/conexion.php');
                           $query2="SELECT ct.id_cliente as idcli, cl.nombre as nombre, cl.notas as notas, ct.valorPagar as valpago, car.nombre as nombreCartera, d.lunes as lunes, d.martes as martes, d.miercoles as miercoles, d.jueves as jueves, d.viernes as viernes, d.sabado as sabado, d.domingo as domingo, d.quincenal as quince, d.mensual as mes
                           FROM `cuenta` as ct
                           join `dias`as d
                           on ct.id = d.id_cuenta
                           join `cartera` as car
                           on ct.id_prestamista =  car.id
                           join `cliente` as cl
                           on ct.id_cliente = cl.id
                           where d.mensual = 1";
                           $answer2 = $conexion -> query($query2);
                           while ($row2=$answer2->fetch_assoc()){
                           ?>  
                           <div class="col-lg-6 col-sm-12 mb-4">
                               <div class="card card-small card-post card-post--aside card-post--1">
                               <div class="card-post__image" style="background-image: url('https://javierperezb.com/images/child.png') !important;">
                                   <a href="#" class="card-post__category badge badge-pill badge-info">Cartera: <?php echo $row2['nombreCartera']; ?></a>
                                 
                                 </div>
                                 <div class="card-body">
                                   <h5 class="card-title">
                                     <a class="text-fiord-blue" href="#"><?php echo $row2['nombre']; ?></a>
                                   </h5>
                                   <p class="card-text d-inline-block mb-3"><?php echo $row2['notas']; ?></p>
                                   <span class="text-muted">Saldo : $ <?php echo $row2['valpago']; ?> </span><br> 
                                   <td> <a class="btn btn-sm btn-success mr-1" href="modpago.php?id=<?php echo $row2 ['idcli'];?>">Pagar </a></td>

                                 </div>
                                 
                               </div>
                       </div>
                         <?php 
                         }
                         ?>

                         
                        

                        
                       <?php 
                         }
                         ?>

        
          </div>
          
         

          
          <?php
         include('footer.php');
         ?>