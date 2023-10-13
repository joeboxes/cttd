<?php
// index.php
//$appStoreURL = 'https://itunes.apple.com/us/app/radminton/id1219121869?ls=1&mt=8';
$appStoreURL = 'https://apps.apple.com/us/app/radminton/id1219121869';

function storeURL($text){
    global $appStoreURL;
    echo '<a href="'.$appStoreURL.'">'.$text.'</a>';
}

?>
<html>
<head>
<title>RAD!minton</title>
<style>
*{
font-family: Arial, Helvetica, sans-serif;
font-size: 14px;
color: #000000;
text-align: center;
width: 100%;
}
body{
}
h1{
color: #003300;
font-size: 20px;
}
p{
color: #000000;
}
img{
width: auto;
height: auto;
}
.copyright{
	font-size: 10px;
}

</style>
</head>

<body>

<img src="./image_logo.png" style="width:300px;" />
<h1>RAD!minton</h1>
Radminton is a collection of 45 Stickers for the <?php storeURL('iOS App Store'); ?>.
<br/>
<?php storeURL('<img src="./image_stickers.png" style="width:450px" />'); ?>
<br/>
<p>For questions or comments, please email: <a href="mailto:calmthetechdown@gmail.com">calmthetechdown@gmail.com</a>.</p>
<br/>
<?php storeURL('<img src="./image_store.svg" />'); ?>
<!-- <?php storeURL('<img src="https://devimages.apple.com.edgekey.net/app-store/marketing/guidelines/images/badge-download-on-the-app-store.svg" style="width:100px;" />'); ?> -->
<!-- <?php storeURL('<object type="image/svg+xml" data="./image_store.svg"></object>'); ?> -->

<br.>
<p class="copyright">&copy; 2023 John & Richie</p>


</body>

</html>
