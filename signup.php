<?php 
header("Content-Type: text/html; charset=utf8");
if(!isset($_POST['submit'])){
exit("錯誤執行");
}//判斷是否有submit操作
$name=$_POST['name'];//post獲取表單裡的name
$password=$_POST['password'];//post獲取表單裡的password
include('connect.php');//連結資料庫
$sql="insert into user1(id,name,password) values (null,'$name','$password')";//向資料庫插入表單傳來的值的sql
$reslut=mysqli_query($db_link,$sql);//執行sql
if (!$reslut){
//die('Error: ' .mysql_error());//如果sql執行失敗輸出錯誤
echo "註冊失敗";
}else{
echo "註冊成功";//成功輸出註冊成功
}
mysqli_close($db_link);//關閉資料庫
?>