<?php

	class Core {
		public function run() {
			$url = explode('index.php', $_SERVER['PHP_SELF']);
			$url = end($url);
			$parametros = array();
			if(!empty($url) && isset($url)) {
				$url = explode('/', $url);
				array_shift($url);
				if(file_exists('controllers/'.$url[0].'.php')) {
					$controllers =  $url[0].'Controller';
					array_shift($url);
				} else {
					$controllers = 'homeController';
					$curentAction = 'index';
					array_shift($url);
				}

				if(isset($url) && !empty($url)) {
					$controller = new $controllers();
					if(method_exists($controller, $url[0])) {
						$curentAction = $url[0];
						array_shift($url);
					} else {
						$curentAction = 'erro_404';
						array_shift($url);
					}
				}
				if(count($url) > 0) {
					$parametros = $url;
				}
			} else {
				$controllers = 'homeController';
				$curentAction = "index";
				$parametros = array();
			}

			$object = new $controllers();
			call_user_func_array(array($object, $curentAction), $parametros);

		}
	}

 ?>
