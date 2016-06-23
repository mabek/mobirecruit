<?php

  	/**
   	 * Datei zum Instanzieren und Konfigurieren der Template-Engine 
   	 */
	
  	//Instanziieren der Template-Engine
  	require($config['BASE_DIR']."/lib/smarty/Smarty.class.php");
  	if (isset ($smarty)){
  	}
  	else{
  		global $smarty;
  		$smarty = new Smarty();
  		$smarty->use_sub_dirs = false;

  		//Verzeichnisse angeben
  		$smarty->assign("base_url", "http://".$_SERVER['SERVER_NAME']);
  		$smarty->template_dir = $config['BASE_DIR']."/tpl";
  		$smarty->compile_dir = $config['BASE_DIR']."/lib/smarty/tplc";
  		$smarty->cache_dir = $config['BASE_DIR']."/lib/smarty/cache";
  		$smarty->config_dir = $config['BASE_DIR']."/lib/smarty/configs";

  		//Hinweise zu Smarty:
  		//Smarty bekommt man unter: http://www.smarty.net
  		//Wie oben zu sehen muessen ein paar Konfigurationseinstellungen
  		//vorgenommen werden. Der Webserver (und damit Smarty) braucht
  		//Schreibrechte auf die drei letztgenannten Verzeichnisse.
  		//Dies muss ggf. im Dateisystem vorgenommen werden.
  	
  		//Diese Einstellung verhindert, dass nichtkritische Warnungen ausgegeben werden
  		error_reporting(E_ALL ^ E_NOTICE);
  	}
?>