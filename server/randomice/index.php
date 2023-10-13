<?php
// index.php

// $appStoreURL = 'https://itunes.apple.com/us/app/randomice/???';
$appStoreURL = 'https://apps.apple.com/us/app/randomice/id1446658572';

function storeURL($text){
    global $appStoreURL;
    echo '<a href="'.$appStoreURL.'">'.$text.'</a>';
}

?>
<html>
<head>
<title>Randomice</title>
<style>
*{
font-family: Arial, Helvetica, sans-serif;
font-size: 14px;
color: #FFFFFF;
text-align: center;

}
body{
width: 100%;
background-color: #110000;
}
h1{
color: #EE3355;
font-size: 20px;
}
p{
color: #FFFFFF;
}
img{
width: auto;
height: auto;
}
.copyright{
	font-size: 10px;
}
td{
/*display: inline;*/
text-align: center;
font-size: 11px;
overflow:hidden;
whitespace:nowrap;
valign:top;

}
table{
    display:inline-block;
cellspacing:0;
cellpadding:0;
border:0;
align:center;
table-layout: fixed;
/*table-layout: auto;*/
background-color: #CC0033;
}

    

</style>
</head>

<body>
<img src="./image_logo.png" style="width:300px;" />
<h1>Randomice</h1>

Randomice is a random number generator for the <?php storeURL('iOS App Store'); ?>.
<br/>
<br/>

<table>
    <tr>
        <td><img src="./a.jpg"/></td>
        <td><img src="./c.jpg"/></td>
        <td><img src="./b.jpg"/></td>
    </tr>
    <tr>
        <td>Generate numbers with or without repeating</td>
        <td>Sort the numbers by time</td>
        <td>Sort the numbers numerically</td>
    </tr>
</table>

<br/>
<p>For questions or comments, please email: <a href="mailto:calmthetechdown@gmail.com">calmthetechdown@gmail.com</a>.</p>
<br/>

<?php storeURL('<img src="./image_store.svg" />'); ?>
<!-- <?php storeURL('<img src="https://devimages.apple.com.edgekey.net/app-store/marketing/guidelines/images/badge-download-on-the-app-store.svg" style="width:100px;" />'); ?> -->
<!-- <?php storeURL('<object type="image/svg+xml" data="./image_store.svg"></object>'); ?> -->

<br/>
<p class="copyright">&copy; 2023 John & Richie</p>
<br/>

</body>

</html>
