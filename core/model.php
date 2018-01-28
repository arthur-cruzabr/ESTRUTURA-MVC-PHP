<?php

	class model {

		protected $pdo;

		public function __construct() {
			global $config;
			$this->pdo = new PDO("mysql:host=".$config['host'].";dbname=".$config['dbname'], $config['login'], $config['senha']);
		}

	}

 ?>
