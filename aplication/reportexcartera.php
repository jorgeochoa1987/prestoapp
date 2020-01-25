 
<?php 
include('header.php');
?>
<link rel='stylesheet' href='https://cdn.datatables.net/v/bs/jq-2.2.4/dt-1.10.15/r-2.1.1/datatables.min.css'><link rel="stylesheet" href="./style.css">
<style>
  .dt-button
{
  background: #007bff;
    color: white;
    padding: 5px 13px 5px 10px;
    border-radius: 4px;
    margin-left:6px;
}
</style>  
          <!-- / .main-navbar -->
  <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Reportes</span>
                <h3 class="page-title">por cartera</h3>
              </div>
            </div>


            <!-- partial:index.partial.html -->
<div class="col-sm-8 col-sm-offset-2">
 

<div class="clearfix"></div>
<div class="hidden">
<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
    <thead>
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Type</th>
            <th>Area</th>
            <th>Budget</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Type</th>
            <th>Area</th>
            <th>Budget</th>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td>1 </td>
            <td>guru</td>
            <td>guru@gmail.com</td>
            <td>8220453235776</td>
            <td>14</td>
            <td>tambaram</td>
            <td>2000000</td>

        </tr>
        <tr>
            <td>2 </td>
            <td>jagan</td>
            <td>jagan@gmail.com</td>
            <td>8567432454564</td>
            <td>13</td>
            <td>chrompet</td>
            <td>2000000</td>


            

        </tr>
        <tr>
            <td>3 </td>
            <td>narmatha</td>
            <td>matha@gmail.com</td>
            <td>8767654575675</td>
            <td>9</td>
            <td>saidapet</td>
            <td>2500000</td>


            

        </tr>
        <tr>
            <td>4 </td>
            <td>gayathri</td>
            <td>athri@gmail.com</td>
            <td>7878sdf787878</td>
            <td>6</td>
            <td>porur</td>
            <td>2500000</td>



        </tr>
        <tr>
            <td>5 </td>
            <td>gohan</td>
            <td>gohan@gmail.com</td>
            <td>8794654646</td>
            <td>7</td>
            <td>guindy</td>
            <td>5000000</td>
        </tr>
    </tbody>
</table>
  </div>
        
  </div>
<!-- partial -->


          <?php
         include('footer.php');
         ?>