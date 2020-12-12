<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
 
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <div class="col-md-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Senarai Nama</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="example1">
                               <thead>
                                   <tr>
                                       <th>Bil</th>
                                       <th>Nama</th>
                                       <th>Jawatan</th>
                                       <th>Jumlah Sebenar<br> Hari Kursus</th>
                                       <th>Jumlah Kehadiran</th>

                                       <th>Tindakan</th>


                                   </tr>
                               </thead>
                               <tbody>
                               <?php $bil=0;?>
                                <?php foreach ($kem as $row): $bil++?>
    
                                <tr>
                                 <td><?php echo $bil ?></td>
                                 <td><?php echo $row->nama ?></td>
                                 <td><?php echo $row->jawatan ?></td>
                                 <td></td>

                                 <td>
                               

                                 <?php if($row->totalcome==null)
                                 {
                                     echo "tidak terlibat sebarang kursus";
                                 }
                                 else
                                 { 
                                     echo $row->totalcome;
                                 }
                                ?>
                                 
                                 </td>
                                 <td>kemaskini</td>
                           
                               </tr>
                               <?php endforeach; ?>
                             </tbody>
                           </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>