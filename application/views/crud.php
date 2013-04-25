<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>
<body>
<!-- Beginning header -->
    <div>
        <a href='<?php echo site_url('index/anime')?>'>動畫</a> | 
        <a href='<?php echo site_url('index/character')?>'>角色</a> |
        <a href='<?php echo site_url('index/seiyuu')?>'>聲優</a> |
        <a href='<?php echo site_url('index/title')?>'>作品</a>
 
    </div>
<!-- End of header-->
    <div style='height:20px;'></div>  
    <div>
        <?php echo $output; ?>
 
    </div>
<!-- Beginning footer -->
<div>&copy; Tsukino Usagi <?php echo(date('Y')); ?></div>
<!-- End of Footer -->
</body>
</html>

