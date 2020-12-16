
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Kursus
          <small>Senarai Nama Individu</small>
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
                    <td class="tg-ox40">Tajuk Kursus<br></td>
                    <td colspan="3" class="tg-k6pi"><?php echo $kid[0]->tajukkursus ?></td>
                  </tr>
                  <tr>
                    <td class="tg-3sk9">Tarikh Mula<br></td>
                    <td class="tg-k6pi"><?php echo $kid[0]->tmula ?></td>
                    <td class="tg-ox40">Tarikh Akhir<br></td>
                    <td class="tg-k6pi"><?php echo $kid[0]->takhir ?></td>
                  </tr>
                  <tr>
                    <td class="tg-3sk9">Tempat</td>
                    <td colspan="3" class="tg-k6pi"><?php echo $kid[0]->tempat ?></td>
                  </tr>
                  <tr>
                    <td class="tg-ox40">Tahun</td>
                    <td class="tg-dx8v"><?php echo $kid[0]->tahun ?></td>
                    <td class="tg-ox40">Hari Kursus</td>
                    <td class="tg-dx8v"><?php echo $kid[0]->hari ?></td>
                  </tr>
                </table>

                <br>
                <a type="button" class="btn btn-primary btn-sm" href="<?php echo site_url('kursus/tambah-peserta/'.$kid[0]->kid)?>" target="_blank">
                  Tambah Peserta
                </a>
   

              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <form method="post">
                  <table width="100%" class="table table-striped table-bordered table-hover" id="example1">
                    <thead>
                      <tr>
                        <th>Bil</th>
                        <th>Nama Peserta</th>
                        <th>Unit</th>

                        <?php
                            $hari = $kid[0]->hari;
                        ?>
                        
                        <?php for ($i=1; $i <=$hari ; $i++) {

                        echo "<th>Hari $i</th>";
                        }

                        ?>

                        <th>Tindakan</th>
                      </tr>

                    </thead>
                    <tbody>
                    <?php $bil=0;?>
                    <?php foreach ($kc as $row): $bil++?>
                     <tr class="odd gradeX">

                     <td><?php echo $bil ?></td>
                     <td><?php echo $row->nama ?></td>
                     <td><?php echo $row->unitsokongan ?></td>

                     <?php

                        $dday1 = $row->one;
                        $dday2 = $row->two;
                        $dday3 = $row->three;
                        $dday4 = $row->four;
                        $dday5 = $row->five;
                        $dday6 = $row->six;;
                        $dday7 = $row->seven;
                        $dday8 = $row->eight;

                     ?>
                         <?php switch($kc[0]->hari):

                            case "1": ?>
                            <td>
                                <label class="switch">

                                <input type="checkbox" class="switch" name="checkbox" id="a1" value=""
                                <?php if ($dday1=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>

                            <?php break; ?>
                            <?php case "2": ?>
                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a1" value=""
                                <?php if ($dday1=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>


                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a2" value=""
                                <?php if ($dday2=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>

                            <?php break; ?>
                            <?php case "3": ?>
                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a1" value=""
                                <?php if ($dday1=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>


                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a2" value=""
                                <?php if ($dday2=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>

                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a3" value=""
                                <?php if ($dday3=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>
                            <?php break;?>
                            <?php case "4": ?>
                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a1" value=""
                                <?php if ($dday1=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>


                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a2" value=""
                                <?php if ($dday2=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>

                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a3" value=""
                                <?php if ($dday3=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>

                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a4" value=""
                                <?php if ($dday4=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>
                            <?php break; ?>
                            <?php case "5": ?>
                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a1" value=""
                                <?php if ($dday1=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>


                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a2" value=""
                                <?php if ($dday2=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>

                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a3" value=""
                                <?php if ($dday3=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>

                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a4" value=""
                                <?php if ($dday4=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>

                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a5" value=""
                                <?php if ($dday5=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>
                            <?php break; ?>
                            <?php case "6": ?>
                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a1" value=""
                                <?php if ($dday1=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>


                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a2" value=""
                                <?php if ($dday2=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>

                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a3" value=""
                                <?php if ($dday3=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>

                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a4" value=""
                                <?php if ($dday4=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>

                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a5" value=""
                                <?php if ($dday5=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>

                            <td>
                                <label class="switch">
                                <input type="checkbox" class="switch" name="checkbox" id="a6" value=""
                                <?php if ($dday6=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>
                            <?php break; ?>
                            <?php case "7": ?>
                            <td>

                                <label class="switch">

                                <input type="checkbox" class="switch"   name="checkbox" id="a1" value=""
                                <?php if ($dday1=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>


                            <td>

                                <label class="switch">

                                <input type="checkbox" class="switch" name="checkbox" id="a2" value=""
                                <?php if ($dday2=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>

                            <td>

                                <label class="switch">

                                <input type="checkbox" class="switch"  name="checkbox" id="a3" value=""
                                <?php if ($dday3=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>

                            <td>
                                <label class="switch">

                                <input type="checkbox" class="switch" name="checkbox" id="a4" value=""
                                <?php if ($dday4=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>

                            <td>
                                <label class="switch">

                                <input type="checkbox" class="switch" name="checkbox" id="a5" value=""
                                <?php if ($dday5=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>

                            <td>
                                <label class="switch">

                                <input type="checkbox" class="switch" name="checkbox" id="a6" value=""
                                <?php if ($dday6=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>

                            <td>
                                <label class="switch">

                                <input type="checkbox" class="switch" name="checkbox" id="a7" value=""
                                <?php if ($dday7=='1'): ?>
                                <?php echo "checked" ?>
                                <?php else: ?>
                                <?php echo "none" ?>
                                <?php endif; ?>
                                />
                                <span class="slider round"></span>
                            </label>
                            </td>
                            <?php break; ?>
                            <?php endswitch; ?>

                    
                            <td><a href="" class="btn btn-danger" role="button" onclick="return confirm('Anda Pasti?');" ><i class="fa fa-trash" aria-hidden="true"></i></a></td>
   
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                <input type="submit" name="submit" value="Kemaskini" class="btn btn-success"/>
              </form>
              <!-- /.table-responsive -->



            </div>
            <!-- /.panel-body -->
            <!--modal section-->

            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
     