<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KeremCelik20090700006</title>
<link rel="stylesheet" type="text/css" href="stil.css">


</head>

<body>


<div id="genel2">
   

   
 
  

<div id="ust">
<img src="images/loginHeader.jpg" width="700px" height="200px"/>
</div>
<div id="adminSol">
            <table class="auto-style7">
                <tr>
                    <td><strong>MENÜLER</strong></td>
                </tr>
                <tr>
                    <td class="auto-style8"></td>
                </tr>
                <tr>
                    <td style="border: thin solid #FFFFFF"><a href="Kategorilerr.aspx">Anasayfa</a> </td>
                </tr>
                <tr>
                    <td style="border: thin solid #FFFFFF"><a href="Yemeklerr.aspx">Hizmetler</a></td>
                </tr>
                <tr>
                    <td style="border: thin solid #FFFFFF"><a href="Yorumlarr.aspx">Ürünler</a></td>
                </tr>
                <tr>
                    <td class="auto-style9" style="border: thin solid #FFFFFF"><a href="AdminMesajlar.aspx">Yılbaşına Özel Fırsat Ürünleri</a></td>
                </tr>
                <tr>
                    <td style="border: thin solid #FFFFFF"><a href="GununYemegiAdmin.aspx">Hesabım</a></td>
                </tr>
                <tr>
                    <td style="border: thin solid #FFFFFF"><a href="AdminTarifOneri.aspx">İletişim</a></td>
                </tr>
               
            </table>
         
        </div>
		
		
  <div id="adminSag">
  
  
  
  <div id=adminSagBaslik3>ÜRÜN GÜNCELLEME</div>
 



<div id="ekleDuzen">
<?php
$gelenId=$_GET["guncellenecekId"];
	 $servername="localhost";
	 $username="root";
	 $password="";
	 $dbname="webproje";
	 
	 $conn=mysqli_connect($servername,$username,$password,$dbname);
	 	 $sql="SELECT * FROM magaza WHERE katId=$gelenId";
		 
		 $sonuc= mysqli_query($conn, $sql);
		 
		 if(mysqli_num_rows($sonuc)>0)

	while($cek= mysqli_fetch_assoc($sonuc)){
		 
?>
		 
	


 <form  method="post">

Ürün Adı: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type="text" name="urun_Adi" value="<?php echo $cek['urunAdi'];?>"/><br>
Ürün Fiyatı:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="urun_Fiyat" value="<?php echo $cek['urunFiyat'];?>"/><br>
Ürün Kategorisi:&nbsp&nbsp&nbsp<input type="text" name="urun_Kategori" value="<?php echo $cek['katAdi'];?>"/><br>
Ürün Resmi:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="urun_Resim" value="<?php echo $cek['urunResim'];?>"/><br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="Guncelle" name="guncelle" class="button">


</form>


<?php
}     
	 
	 
	 
 if($_POST)
 {
$gelen_Ad=$_POST["urun_Adi"];
$gelen_Fiyat=$_POST["urun_Fiyat"];
$gelen_Kategori=$_POST["urun_Kategori"];
$gelen_Resim=$_POST["urun_Resim"];
		 
	 $sql2="UPDATE magaza SET urunAdi='$gelen_Ad',urunFiyat='$gelen_Fiyat',katAdi='$gelen_Kategori',urunResim='$gelen_Resim' WHERE katId=$gelenId";
 

echo $sql2;

if(mysqli_query($conn,$sql2))
{
	echo "kod basariyla guncellendi ";
	//echo"<script>location.href='admin.php';</script>";
}

else
{
		echo "hata kodu".mysqli_error($conn);
}
}
 mysqli_close($conn);
 
?>
</div>

</div>

</div>

</body>
</html>