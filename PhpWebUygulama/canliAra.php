<link rel="stylesheet" type="text/css" href="stil.css">


<div id="ortaSag">


<?php
/* Database Bağlantısı */


 $servername="localhost";
	 $username="root";
	 $password="";
	 $dbname="webproje";




$conn=mysqli_connect($servername,$username,$password,$dbname);

	 
	 
  
    session_start();
/* Database Bağlantısı */
    if ($_REQUEST['term']) { // Bir terim gelip gelmediğini kontrol ediyoruz.
        $term = $_REQUEST['term']; // Gelen terimi değişkene atıyoruz.
        /* Gelen terim ile eşleşen kayıt olup olmadığını sorguluyoruz. */
       	 $sql="SELECT * FROM magaza WHERE urunAdi LIKE '%".$term."%'";
	 $sonuc= mysqli_query($conn, $sql);
	 if(mysqli_num_rows($sonuc)>0)
{
	while($cek= mysqli_fetch_assoc($sonuc)){
	
	echo "<div class='kutu1'>";
echo "<div class='resim1'> <img src='images/".$cek['urunResim']."' /></div>";
echo "<div class='kutu1Baslik'>".$cek['urunAdi']."</div>";
echo "<div class='kutu1Fiyat'>".$cek['urunFiyat']."TL</div>";
echo "<div class='box1'><a href='#'>Satın Al</a></div>";
echo "<div class='box2'><a href='#'>Detay</a></div>";

echo "</div><!--kutu1-->";
	}
}
else
{
		echo "aradıgınız urun yoktur".mysqli_error($conn);
}


	 
	 
       
    }
?>

</div><!--ortaSag kapanis-->