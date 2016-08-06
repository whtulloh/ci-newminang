<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style>
		#mytable td, #mytable th{
			text-overflow:ellipsis;
			overflow:hidden;
			white-space:nowrap;;
		}
	</style>
	
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/admin/admin_c">Buku Tamu</a>
            </div>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url(); ?>index.php/admin/admin_c"><i class="fa fa-fw fa-table"></i> Data Peserta </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Buku Tamu Halal Bihalal Padang Gantiang 2016
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-table"></i> Data Peserta
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="col-lg-12">
                    <p>
						<button>Total Peserta : <?php echo $jml_peserta; ?></button> 
						<a href='<?php echo base_url(); ?>admin/Admin/export_to_xl'>
							<button style='color:green;'>Export All Data</button>
						</a>
					</p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped" id="mytable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Suami</th>
                                    <th>Nama Isteri</th>
                                    <th>Alamat</th>
									<th>Jml Anak</th>
									<th>No Telp</th>
									<th>Bapak dr Suami</th>
									<th>Ibu dr Suami</th>
									<th>Bapak dr Isteri</th>
									<th>Ibu dr Isteri</th>
									<th>Jorong Suami</th>
									<th>Jorong Isteri</th>
									<th>Suku Suami</th>
									<th>Suku Isteri</th>
									<th>Photo</th>
                                </tr>
                            </thead>

                            <tbody>
							<?php
							if (empty($peserta)){
								echo '<tr><td colspan=15>There is no data in here</td></tr>';
							}else{								
								foreach($peserta as $row){
									$id_peserta=$row->id_peserta;
									$nama_suami=$row->nama_suami;
									$nama_istri=$row->nama_istri;
									$jml_anak=$row->jml_anak;
									$alamat=$row->alamat;
									$no_telp=$row->no_telp;
									$bapak_suami=$row->bapak_suami;
									$ibu_suami=$row->ibu_suami;
									$bapak_istri=$row->bapak_istri;
									$ibu_istri=$row->ibu_istri;
									$jorong_suami=$row->jorong_suami;
									$jorong_istri=$row->jorong_istri;
									$suku_suami=$row->suku_suami;
									$suku_istri=$row->suku_istri;
									$photo=$row->link_photo
								?>
                                <tr>
                                    <td><?php echo $id_peserta; ?></td>
                                    <td><?php echo $nama_suami; ?></td>
                                    <td><?php echo $nama_istri; ?></td>
									<td><?php echo $alamat; ?></td>
                                    <td>
										Jumlah : <?php echo $row->jmlanak; ?>
										<table>
											<?php
											if(!empty($row->anak)) {
												$i=0;
												foreach ($row->anak as $anak)  {
													$i++;
													echo '<tr><td> '.$i.'. </td><td> '.$anak->nama_anak.' </td></tr>';
												}
											}
											?>
										</table>
									</td>
									<td><?php echo $no_telp; ?></td>
									<td><?php echo $bapak_suami; ?></td>
									<td><?php echo $ibu_suami; ?></td>
									<td><?php echo $bapak_istri; ?></td>
									<td><?php echo $ibu_istri; ?></td>
									<td><?php echo $jorong_suami; ?></td>
									<td><?php echo $jorong_istri; ?></td>
									<td><?php echo $suku_suami; ?></td>
									<td><?php echo $suku_istri; ?></td>
									<td><?php echo $photo; ?></td>
                                </tr>
							<?php 
								} 
							} ?>
                            </tbody>
                        </table>
						<br />
						<?php 
							echo $pagination;
						?>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
	
	<script>
		$(document).ready(function() {
			$('#mytable').DataTable( {
				"scrollX": true
			} );
		} );
	</script>
	
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/morris/morris-data.js"></script>

</body>

</html>
