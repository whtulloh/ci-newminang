<?php 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=exceldata.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<table border='1' width="70%">
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
			<th>Ibu dari Isteri</th>
			<th>Jorong Suami</th>
			<th>Jorong Isteri</th>
			<th>Suku Suami</th>
			<th>Suku Isteri</th>
			<th>Photo</th>
		</tr>
	</thead>

	<tbody>
		<?php
		foreach($excel as $row){
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
				Jumlah : <?php echo $jml_anak; ?>
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
		<?php } ?>
	</tbody>
</table>