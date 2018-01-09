<?php
	class Database
	{
		
		public $driver;
		public $link;

		public function setDriver($driver)
		{
			$this->driver = $driver;

		}
		public function connect()
		{
			if ($this->driver == "mysql") {
				$mngmysql = new ManageMysql();
				$mngmysql->setHost($host);
				$mngmysql->setDB($db);
				$mngmysql->setuser($user);
				$mngmysql->setPass($pass);
				$this->link = $mngmysql->connect();
			}elseif ($this->driver == "sqlite") {
				$Managesqlite = new Managesqlite();
				$Managesqlite->setHost($host);
				$Managesqlite->setDB($db);
				$Managesqlite->setuser($user);
				$Managesqlite->setPass($pass);
				$this->link = $Managesqlite->connect();
			}

		}
	}
?>