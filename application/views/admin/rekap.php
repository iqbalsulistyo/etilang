<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
	<h1>HALAMAN KEJAKSAAN</h1>
	<h2>Rekap Denda Tilang</h2>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
    <br/><br/>
    <a href="<?php print(site_url('admin/beranda')); ?>" > Halaman Awal </a>
</body>
</html>
