<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h1>HALAMAN BERANDA</h1>
	<h2>Manajemen Data Tilang</h2>
	<div style='height:20px;'></div>  
    
    <h1>Level Anda <?php print $_SESSION['level']; ?> </h1>
    <?php if($_SESSION['level'] == 1) { ?>
    	<a href="<?php print(site_url('admin/user')); ?>" > Manajemen User </a>
    <?php } ?>
    <?php if($_SESSION['level'] == 4) { ?>
      <a href="<?php print(site_url('admin/rekap')); ?>" > Lihat Rekap Denda Tilang </a>
    <?php } ?>
 	
	<br/>
   	<a href="<?php print(site_url('admin/tilang')); ?>" > Manajemen Data Tilang </a>

   	<br/><br/>
    <a href="<?php print(site_url('account/logout')); ?>" > Logout </a>
</body>
</html>
