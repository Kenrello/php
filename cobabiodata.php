<?php 
  $name="Kenandra Aurello";
?>
<!DOCTYPE html>
<html>
<head>
<title>Biodata 2</title>
<style>
.wrap{
background-color:rgba(210, 14, 106, 0.7);
width: 800px;
color:bisque;
margin: 20px auto;
padding:15px;
}
</style>
</head>
<body style="background: url(rickmorty.jpeg);background-size:cover;background-attachment: fixed;">
<div class="wrap">
<h1 class="class" align="center">BIODATA DIRI</h1><hr/ align="center" width="25%" style="border-top: 3px double #8c8b8b;">
<table>
<tr><td rowspan="10" width="100px">
<img src="img bio.jpeg" width="200px" style="display: block;border-radius: 50%;border-color:white;margin-right:30px" border="2px" ></td></tr>
<tr><td><b>Nama</b></td><td>:</td> <td><?= $name ?></td></tr>
<tr><td><b>Umur</b></td><td>:</td> <td><?= date("y")-date("y", mktime(0,0,0,7,4,2000))  ?></td></tr>
<tr><td><b>NPM</b></td><td>:</td> <td>21081010184</td></tr>
<tr><td><b>Asal Kota</b></td><td>:</td> <td>Surabaya</td></tr>
<tr><td><b>TTL</b></td><td>:</td> <td>Surabaya, 04 Juli 2003</td></tr>
<tr><td><b>Email</b></td><td>:</td> <td>kentud@gmail.com</td></tr>
<tr><td><b>Hobi</b></td><td>:</td> <td>NgeGame</td></tr>
<tr><td><b>Universitas</b></td><td>:</td> <td>UPN Veteran Jatim</td></tr></table>
<table>
<div>
</body>
</html>