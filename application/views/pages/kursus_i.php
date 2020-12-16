
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kursus
        <small>Senarai Laporan Individu</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <style type="text/css">
          .tg  {border-collapse:collapse;border-spacing:0;border-color:#999;border:none;}
          .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
          .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
          .tg .tg-ox40{font-weight:bold;font-size:12px;vertical-align:top}
          .tg .tg-k6pi{font-size:12px}
          .tg .tg-dx8v{font-size:12px;vertical-align:top}
          .tg .tg-3sk9{font-weight:bold;font-size:12px}
          </style>
          <table class="tg">
            <tr>
              <td class="tg-ox40">Nama</td>
              <td colspan="3" class="tg-k6pi"><?php echo $getuser[0]->nama ?></td>
              </tr>
            <tr>
              <td class="tg-3sk9">No Kad Pengenalan</td>
              <td class="tg-k6pi"><?php echo $getuser[0]->nokp ?></td>
              <td class="tg-ox40">jawatan</td>
              <td class="tg-k6pi"><?php echo $getuser[0]->jawatan ?></td>
            </tr>
            <tr>
              <td class="tg-3sk9">Gred Jawatan</td>
              <td colspan="3" class="tg-k6pi"><?php echo $getuser[0]->gredjawatan ?></td>
              </tr>
            <tr>
              <td class="tg-ox40">Jumlah Kehadiran</td>
              <td class="tg-dx8v"></td>

            </tr>
          </table>
          <a href="" class="btn btn-warning" role="button" target="_blank">Cetak</a>


            </div>
            <!-- /.box-header -->
            <div class="box-body">

                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Bil</th>
                                        <th>Kursus Dihadiri</th>
                                        <th>Mula</th>
                                        <th>Akhir</th>
                                        <th>Tempat</th>
                                        <th>Kursus(Hari)</th>
                                        <th>Kehadiran</th>


                                    </tr>
                                </thead>
                                <tbody>
                                <?php $bil=0;?>
                                <?php foreach ($userjoin as $row): $bil++?>       
                                <tr class="odd gradeX">
                             

                                    <td><?php echo $bil ?></td>
                                    <td><?php echo $row->tajukkursus ?></td>
                                    <td><?php echo $row->tmula ?></td>
                                    <td><?php echo $row->takhir ?></td>
                                    <td><?php echo $row->tempat ?></td>
                                    <td><?php echo $row->hari ?></td>
                                    <td><?php echo $row->con?></td>



                         
                                  </tr>
                                  <?php endforeach; ?>
                              </tbody>
                            </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

<script>
    $(document).ready(function() {
        var url = window.location;
        var element = $('ul.sidebar-menu a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0; }).parent().addClass('active');
        if (element.is('li')) {
             element.addClass('active').parent().parent('li').addClass('active')
         }
    });
</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
