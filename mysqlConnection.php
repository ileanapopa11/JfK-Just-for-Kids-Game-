<?php 

	class mySqlConnection
	{
		private static $connection;
		public static function getConnection()
		{

			if(is_null(self::$connection))
			{ 
				self::$connection = mysqli_connect('localhost','root', 'root','jfk');
			}
			return self::$connection; //pt static
		}
	}

	class functii
	{
	public function adminFunction()
		{
			echo '< script>','document.getElementById("link").href="http://localhost/Project_PSGBD/admin.php"','</script';
		}
	}
 ?>