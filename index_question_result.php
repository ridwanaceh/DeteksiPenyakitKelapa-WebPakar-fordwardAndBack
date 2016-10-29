<html>
<head>
<title>SISTEM PAKAR PENYAKIT KELAPA DALAM</title>
<style type="text/css">
<!--
.style1 {
	font-family: "Comic Sans MS";
	font-weight: bold;
	font-size: 18px;
}
.style14 {
	color: #0099FF;
	font-family: "Comic Sans MS";
	font-size: 12px;
	font-weight: bold;
}
.style15 {color: #0066FF}
.style16 {font-family: "Comic Sans MS"; font-size: 12px; font-weight: bold; color: #0066FF; }
-->
</style>
</head>
<body>
<?php
include"/inc.header.php";
?>
<table width="800" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#22B5DD">

<tr>
  <td colspan="2">&nbsp;</td>
</tr>
<tr bgcolor="#FFFFFF">
  <td width="188" align="center" valign="top">

<table width="99%" border="0" cellpadding="0" cellspacing="1" bgcolor="#22B5DD">
	<tr> 
	  <td align="center"><span class="style1">MENU</span></td>
	</tr>
	<tr> 
	  <td bordercolor="#9999FF" bgcolor="#CCFF33" class="style14"><span class="style15">  + <a href="index_daftarpenyakit.php">DAFTAR PENYAKIT</a></a> </a></span></td>
	</tr>
	<tr> 
	  <td bordercolor="#9999FF" bgcolor="#CCFF33"><span class="style16">+ <a href="index_daftar_user.php">KONSULTASI</a> 
		</a></span></td>
	</tr>
	<tr> 
	  <td bordercolor="#9999FF" bgcolor="#CCFF33"><span class="style16">+ <a href="index_penjelasan.php">BANTUAN</a></a></span></td>
	</tr>
	<tr>
	  <td bordercolor="#9999FF" bgcolor="#CCFF33"><span class="style16">+ <a href="index_loginpakar.php">LOGIN PAKAR</a></span></td>
	</tr>
	
  </table>
  </td>
  <td width="601" valign="top">
  
<?php
    include "question_Result.php";
?>

  </td>
</tr>

<tr>
  <td colspan="2">&nbsp;</td>
</tr>

</table>
<br>
<?php
include "inc.footer.php";
?>
</body>
</html>
