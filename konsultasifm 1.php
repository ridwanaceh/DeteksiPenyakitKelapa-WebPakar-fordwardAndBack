<?php 
include "librari/inc.koneksidb.php";

$NOIP = $_SERVER['REMOTE_ADDR'];

# Periksa apabila sudah ditemukan
$sql_cekh = "SELECT * FROM tmp_penyakit 
			 WHERE noip='$NOIP' 
			 GROUP BY kd_penyakit";
$qry_cekh = mysql_query($sql_cekh, $koneksi);
$hsl_cekh = mysql_num_rows($qry_cekh);
if ($hsl_cekh == 1) {
	$hsl_data = mysql_fetch_array($qry_cekh);
	
	$sql_pasien = "SELECT * FROM tmp_pasien WHERE noip='$NOIP'";
	$qry_pasien = mysql_query($sql_pasien, $koneksi);
	$hsl_pasien = mysql_fetch_array($qry_pasien);
		$sql_in = "INSERT INTO analisa_hasil SET
				  nama='$hsl_pasien[nama]',
				  kelamin='$hsl_pasien[kelamin]',
				  alamat='$hsl_pasien[alamat]',
				  pekerjaan='$hsl_pasien[pekerjaan]',
				  kd_penyakit='$hsl_data[kd_penyakit]',
				  noip='$hsl_pasien[noip]',
				  tanggal='$hsl_pasien[tanggal]'";
		mysql_query($sql_in, $koneksi);
					   
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=hasil'>";
	exit;
}

$sqlcek = "SELECT * FROM tmp_analisa WHERE noip='$NOIP'";
$qrycek = mysql_query($sqlcek, $koneksi);
$datacek= mysql_num_rows($qrycek);
if ($datacek >= 1) {
	// Seandainya tmp kosong
	$sqlg = "SELECT gejala.* FROM gejala,tmp_analisa 
			 WHERE gejala.kd_gejala=tmp_analisa.kd_gejala 
			 AND tmp_analisa.noip='$NOIP' 
			 AND NOT tmpl_analisa.kd_gejala 
			 	 IN(SELECT kd_gejala 
				 FROM tmp_gejala WHERE noip='$NOIP')
			 ORDER BY gejala.kd_gejala LIMIT 1";
	$qryg = mysql_query($sqlg, $koneksi);
	$datag = mysql_fetch_array($qryg);
	
	$kdgejala = $datag['kd_gejala'];
	$gejala   = $datag['nm_gejala'];
	//echo " ADA BOS ($sqlg)";	
}
else {
	// Seandainya tmp kosong
	$sqlg = "SELECT * FROM gejala ORDER BY kd_gejala LIMIT 1";
	$qryg = mysql_query($sqlg, $koneksi);
	$datag = mysql_fetch_array($qryg);
	
	$kdgejala = $datag['kd_gejala'];
	$gejala   = $datag['nm_gejala'];
}
?>
<html>
<head>
<title>Form Utama Penelusuran</title>
</head>
<body>
<form action="?page=konsulcek" method="post" name="form1" target="_self">
  <table width="450" border="0" cellpadding="2" cellspacing="1" bgcolor="#DBEAF5">
    <tr> 
      <td><b>JAWABLAH PERTANYAAN BERIKUT :</b></td>
    </tr>
    <tr> 
      <td width="312" bgcolor="#FFFFFF">Apakah  
        <?php echo $gejala; ?> ?
        <input name="TxtKdGejala" type="hidden" value="<?php echo $kdgejala; ?>"></td>
    </tr>
    <tr> 
      <td bgcolor="#FFFFFF"> <input type="radio" name="RbPilih" value="YA" checked>
        (YA) 
        <input type="radio" name="RbPilih" value="TIDAK">
        (TIDAK)</td>
    </tr>
    <tr> 
      <td bgcolor="#FFFFFF"> <input type="submit" name="Submit" value="Jawab"></td>
    </tr>
  </table>
</form>
</body>
</html>
