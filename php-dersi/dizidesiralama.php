<?php 
	$sayilar = array(3, 1, 7, 5, 8, 2,);

	foreach($sayilar as &$sayi)
	{
		echo $sayi. ' ';
	}
	echo '<br>';
	 sort($sayilar);
	 foreach($sayilar as &$sayi)
	 {
	 	echo $sayi. '';
	 }
	 echo '<br>';
	 rsort($sayilar);
	 foreach($sayilar as &$sayi)
	 {
	 	echo $sayi. '';
	 }

	 echo '<br>';
	 echo 'En büyük eleman: '.max($sayilar);
	 echo '<br>';
	 	 echo 'En küçük eleman: '.min($sayilar);

?>