
<?php
$logoimg = $app->config['app.mode'] != 'production' ? 'logo-site-prueba.png' : 'logo-site.png';
?>

<h1 id="brand-logo"><a href="<?php echo $app->getBaseUrl() ?>"><img src="<?php $this->asset('img/'.$logoimg); ?>" /></a></h1>
