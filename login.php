<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>登入驗證</title>
		<style type="text/css">
			.main{
				margin: 0 auto;
				width: 350px;
				height: 100px;
				background: cornflowerblue;
				padding: 20px;
			}
		</style>
	</head>
	<body>
		<div class="main">
			<?php

				$name=$_POST['name'];
				$password=$_POST['password'];

                if($name==null||$password==null){
					header("location:index.php");//直接開啟該php檔案，跳轉到登入介面
				}
				
				
//				require_once('登入驗證資料庫連線.php');
//				$db=new connectDB();
//				$db->getConn();

                    // $servername = "localhost";
                    // $username = "username";
                    // $password = "password";
					$db = new mysqli('127.0.0.1','root','1234');
					if ($db->connect_error)
					 die('連結錯誤: '. $db->connect_errors);
					$db->select_db('user1') or die('不能連線資料庫');
			
					$sql="SELECT * FROM user1 WHERE name= '$name' AND password='$password'";
					$result=$db->query($sql);
					$num_users=$result->num_rows;//在資料庫中搜索到符合的使用者
					if($num_users!=0){//搜尋到該使用者
						echo "<h3>歡迎您&nbsp{$name}</h3>";
					}
					else{
						echo "使用者名稱或密碼錯誤";
					}
			?>
		</div>
	</body>
</html>