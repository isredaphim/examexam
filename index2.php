<?php
$domOBJ = new DOMDocument();
$domOBJ->load("https://www.bls.gov/feed/lau_latest.rss");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
<button><link a href="index2.php"/>
    <div>
<img src="doc.jpg" style="width:100%;height:25%" />

<div class="container">

 <div class="centered">Job Opening and Labor Turnover Survey</div>
</div>


        <?php
        $content = $domOBJ->getElementsByTagName("entry");

        foreach ($content as $data) {
            $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
            $content = $data->getElementsByTagName("content")->item(0)->nodeValue;
        ?>
            <ul>
                <li><strong><?php echo $title ?></strong></li>
                <ul>
                    <li><?php echo $content ?></li>
                </ul>
            </ul>
        <?php } ?>
    </div>
</body>


</html>