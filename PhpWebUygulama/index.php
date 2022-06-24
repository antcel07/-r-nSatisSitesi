<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KeremCelik20090700006</title>

<link rel="stylesheet" type="text/css" href="stil.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.search-box input[type="text"]').on("keyup input", function(){
            /* Input Box'da değişiklik olursa aşağıdaki durumu çalıştırıyoruz. */
            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".liveresult");
            if(inputVal.length){
                $.get('canliAra.php', {term: inputVal}).done(function(data){
                    /* Gelen sonucu ekrana yazdırıyoruz. */
                    resultDropdown.html(data);
                });
            }else{
                resultDropdown.empty();
            }
        });
        /* Sonuç listesinden üzerinde tıklanıp bir öğe seçilirse input box'a yazdırıyoruz. */
        $(document).on("click", ".liveresult li", function(){
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            $(this).parent(".liveresult").empty();
        });
    });
    </script>





</head>

<body>

<div id="genel">
   <div id="baslik">
   <div id="baslikUst">
   <div id="baslikUstBaslik">Yılbaşı Web Sitesi</div>
   
   <div id="baslikUstSag">
   <img  src="images/shoppingcart.gif" />
    
<?php 
$servername="localhost";
	 $username="root";
	 $password="";
	 $dbname="webproje";
	 
	 $conn=mysqli_connect($servername,$username,$password,$dbname);
	 $sql="SELECT * FROM magaza";
$sonuc= mysqli_query($conn, $sql);
$adet=mysqli_num_rows($sonuc);
echo $adet;
?>
   ürün mevcuttur.
   
   </div>
   
   </div><!--baslikUst kpanis-->
   <div id="baslikAlt">
   <div id="baslikAltdiv">
   <div id="baslikİc1">Yılbaşına Özel  Hediyeler</div>
   <div id="baslikİc2">Ömrümüzün her bir yılını acı ve tatlı anılar biriktirerek ardımızda bırakıyoruz. Her yeni yıla yeni başlangıçlar için tazelenmiş umutlarla giriyoruz.
   sevdiklerinizin yüzünde tebessüm oluşturacak yılbaşı hediyelerini bulmak da biraz özen ve çaba gerektiriyor... </div><!--headerw2-->
   <div id="view"><a href="#">Devamını Oku</a></div>
   
   </div><!--baslikAltdiv-->
   </div><!--baslikAlt-->
   
  </div><!--baslik-->
   
   <div class="menu">
   <ul>
   <li><a href="#">Anasayfa </a></li>
   <li><a href="#">Hizmetler </a></li>
   <li><a href="#">Ürünler </a></li>
   <li><a href="#">Yılbaşına Özel Fırsat Ürünleri </a></li>
   <li><a href="#">Hesabım </a></li>
   <li><a href="#">İletişim </a></li>
   </ul>
   </div><!--menu-->
   <div id="orta">
   
   <div id="ortaSol">
   <div id="ortaSol1">
   <div id="ortaSol1Ust1">Ürün Ara</div>
   <div id="ortaSol1Form">
   
   
   
   <div class="container">
        <div class="row">
          <div class="col-11 search-box">
            
            <input type="text" class="form-control" autocomplete="off" placeholder="Ürün Ara..." />
            <ul class="list-group liveresult"></ul>
          </div>
        </div>
      </div>
   
   
 

   
  
   
   </div><!--ortaSol1Form-->
   </div><!--ortaSol1-->
   <div id="footer1"></div>
   
   <div id="ortaSol2">
   <div id="ortaSol2Ust">Kategoriler</div>
   <div id="ortaSol2Orta">
     <?php
	 $servername="localhost";
	 $username="root";
	 $password="";
	 $dbname="webproje";
	 
	 $conn=mysqli_connect($servername,$username,$password,$dbname);
	 $sql="SELECT * FROM magaza";
$sonuc= mysqli_query($conn, $sql);

if(mysqli_num_rows($sonuc)>0)
{
	while($cek= mysqli_fetch_assoc($sonuc)){
	
	 echo"<ul>";
				 echo '<li><a href="#">'.$cek['katAdi'].'</a></li>';
				 
				 echo"</ul>";
	}
}
else
{
		echo "hata kodu".mysqli_error($conn);
}


	 
	 ?>
     
     
      
      
   </div><!--ortaSol2Orta-->
   </div><!--ortaSol2-->
    <div id="footer2"></div>
   
   <div id="ortaSol3">
   <div id="ortaSol3Ust">Yeni Ürünler</div>
   <div id="contentw3">
   <div id="yazi1">Ürün Bilgileri:</div>
   <div id="yazi2">Her daim kullanım kolaylığı sağlayacak ürünlerimiz mevcuttur.,</div><!--write2-->
   <div id="yazi3"><a href="#">Detay<a /></div>
   </div><!--contentw3-->
   </div><!--contentleft3-->
    <div id="footer3"></div>

</div>


<div id="ortaSag">

<?php

	 $conn=mysqli_connect($servername,$username,$password,$dbname);
	 		
			 
   //ajax ile hazır geldi 
    

if (isset($_REQUEST['term'])) { // Bir terim gelip gelmediğini kontrol ediyoruz.
        $term = $_REQUEST['term']; // Gelen terimi değişkene atıyoruz.
        /* Gelen terim ile eşleşen kayıt olup olmadığını sorguluyoruz. */
       	 $sql="SELECT * FROM magaza WHERE urunAdi LIKE '%".$term."%'";
}
else
{
	 $sql="SELECT  * FROM magaza";
}
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
		echo "hata kodu".mysqli_error($conn);
}
 
	 


?>

</div><!--ortaSag kapanis-->

<div class="enAlt">
 <ul>
   <li><a href="#">Anasayfa |</a></li>
   <li><a href="#">Hizmetler |</a></li>
   <li><a href="#">Ürünler |</a></li>
   <li><a href="#">Yılbaşına Özel Fırsat Ürünleri |</a></li>
   <li><a href="#">Hesabım |</a></li>
   <li><a href="#">İletişim</a></li>
   </ul>

<p class="enAltYazi">Coprygiht 2022 @Tüm hakları Kerem Çelik adına saklıdır saygılarımla...</p> 
</div>

</div>

</body>
</html>