<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-tw">
<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
  <head>

    <style type="text/css">
    a,
    a:link,
    a:visited,
    a:active
    {
        text-decoration: none;
        font-weight: normal;
        color:#347C95;
    }
    a:hover {
    font-weight: normal;
        color:#178fc0;
    }
    h1 {
        color:#0D578B;
        text-shadow : 1px 1px 2px #ccc;
        border-bottom:1px solid #808080;
        padding:5px 0px;
    }
    p.copyright {
        border-top:1px solid #808080;
    }
    </style>
	<title>PHP 練習作業一</title>
	<meta name="Robots" content="none" />
  </head>
  <body>
    <h1>
      PHP 練習作業一：
    </h1><?php	 	
	
    $handle = opendir(__DIR__);
    $folders = array();

    while (false !== ($file = readdir($handle))) {
            if(is_dir($file)) $folders[] = $file;
    }
        
    sort($folders);
    unset($folders[0]);
    unset($folders[1]);
    foreach ($folders as $key => $folder): 
            $config_path = __DIR__.'/'.$folder.'/configuration.php';
            $new_obj_name = 'Config'.$key ;
            
            if(file_exists($config_path)) :
            	$config_content = file_get_contents( $config_path );
            	$config_content = str_replace( 'JConfig' , $new_obj_name , $config_content ) ;
            	$config_content = str_replace( '<?php	 	' , '' , $config_content ) ;
            	$config_content = str_replace( '?'.'>' , '' , $config_content ) ;
            	eval( $config_content ) ;
            	$config = new $new_obj_name() ;
            	$site = $config->sitename ;
			/*
                    $fp = fopen($config_path,'r');
                    $config = fread($fp,3000);
                    $config = htmlentities($config,ENT_COMPAT,'utf-8');
                    $config = strstr($config,"var \$sitename = '");
                    $config = str_replace("var \$sitename = '",'',$config);
                    $config2 = strstr($config,"';");
                    $site = str_replace($config2,'',$config);
            */
			endif;
    ?>
    <h3 class="c1">
      ‧<a href="<?=$folder;?>"><?=$folder;?>
       <?php	 	 if(file_exists($config_path)): ?> &nbsp;&nbsp;-&nbsp;&nbsp;(<?=$site;?>) <?php	 	 endif; ?></a>
    </h3><?php	 	 endforeach; ?><br />
    <br />
    <br />
    <br />
    <p class="copyright c2">
      Powered by <a href="http://asikart.com">ASIKART STUDIO</a>
    </p>
  </body>
</html>