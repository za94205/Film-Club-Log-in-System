<?php
	$db_link=new mysqli("localhost","root","1234");
	if(!$db_link){
		die("資料庫連線失敗<br>". mysqli_connect_error());//連線失敗 列印錯誤日誌
	}else{
		echo"資料庫連線成功<br>";
	}
	mysqli_query($db_link,"SET NAMES 'utf-8'");  //設定字元集與編碼為utf-8
	$seldb=@mysqli_select_db($db_link,"user1");
	if(!$seldb){
		die("資料庫選擇失敗<br>");
	}else{
		echo"資料庫選擇成功<br>";
	}
?>