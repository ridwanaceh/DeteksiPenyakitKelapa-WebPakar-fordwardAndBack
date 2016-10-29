<?php 
//error_reporting(0);
include "librari/inc.koneksidb.php";
include "librari/inc.kodeauto.php";
?>
<html>
<head>
<title></title>
</head>
<body>
<table bgcolor="" width="100%" border="0" cellpadding="4" cellspacing="0" >
	<form action="periksa_daftar_user.php" method="post" name="form1" target="_self">
		<tr bgcolor="#00CCCC"> 
			<td align="center" colspan="5"><h3>SILAHKAN REGISTRASI TERLEBIH DAHULU</h3></td>
		</tr>
		
		<tr> 
			<td width="19"></td>
			<td width="33">Kode</td><td>:</td>
			<td colspan="2">
	<!-- nilai dari text digunakan untuk media menampilkan kode pengguna-->
		<input name="TxtKode" type="text"  maxlength="4" size="8" value="<?php echo kdauto("pengguna","Pg-"); ?>" disabled="disabled">
	<!-- nilai dari text hidden digunakan untuk memanggilkan nilai +1 dari database-->
	    <input name="TxtKodeH" type="hidden" value="<?php echo kdauto("pengguna","pg-"); ?>"></td>
    </tr>
    <tr>    
    
	 <td width="9"></td>
      <td>Nama</td>
	  <td width="32">:</td>
      <td colspan="2"><input name="TxtNama" type="text"  size="35" maxlength="60"></td>
    </tr>
	
    <tr> 
	<td></td>
      <td>Kelamin</td>
	  <td>:</td>
      <td colspan="2"> <input type="radio" name="RbKelamin" value="P" checked>Pria 
        <input type="radio" name="RbKelamin" value="W">Wanita
	  </td>
    </tr>
	<tr> 
		<td></td>
		<td>Alamat</td>
		<td>:</td>
		<td colspan="2"> 
		<input name="TxtAlamat" type="text" height="100" size="55"maxlength="60"></td>
    </tr>
	
    <tr> 
	<td></td>
      <td width="175">Pekerjaan</td>
	  <td>:</td>
      <td colspan="2"> <input name="TxtPekerjaan" type="text" size="25" maxlength="60"></td>
    </tr>
	<tr>    
		<td width="9"></td>
		<td>Kota</td>
		<td width="22">:</td>
		<td colspan="2"><input name="TxtKota" type="text"  size="35" maxlength="60"></td>
    </tr>
	<tr>    
		<td width="9"></td>
		<td>Propinsi</td>
		<td width="22">:</td>
		<td colspan="2"><input name="TxtProp" type="text"  size="55" maxlength="60"></td>
    </tr>
	<tr>    
		<td width="9"></td>
		<td>Username</td>
		<td width="22">:</td>
		<td colspan="2"><input name="Txtusername" type="text"  size="35" maxlength="60"></td>
    </tr>
	<tr>    
		<td width="9"></td>
		<td>Password</td>
		<td width="22">:</td>
		<td colspan="2"><input name="Txtpassword" type="text"  size="35" maxlength="60"></td>
    </tr>
	<td><input type="hidden" name="tipe" value="user"></td>
	<tr>
		<td colspan="5"></tr>
		<tr> 
		<td></td>
		<td></td>
		<td>&nbsp;</td>
		<td width="57"><input type="submit" name="Submit" value="simpan" ></td>
		<td><a href="out.php" style="text-decoration:none"><input type="button" value="keluar">
		</a></td>
    </tr>
</form>
</table>
</body>
</html>


