<?php
$domOBJ = new DOMDocument();
$domOBJ->load("https://www.bls.gov/feed/jlt_latest.rss");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100%, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Job Opening Survey</title>
</head>

<body>
    <div>
        <img src="doc.jpg" style="width=100%;height=25%"/></br>
  
        <?php
      
        $content = $domOBJ->getElementsByTagName("item");

        foreach ($content as $data) {
            $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
            $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
            $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
            $source = $data->getElementsByTagName("source")->item(0)->nodeValue;
            $pubdate = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
        ?>
            <ul>
                <li><strong><?php echo $title ?></strong></li>
                <ul>
                    <li><?php echo $link ?></li>
                    <li><?php echo $description ?></li>
                    <li><?php echo $source ?></li>
                    <li><?php echo $pubdate ?></li>
                </ul>
            </ul>
        <?php } ?>
    </div>
    <a href="https://www.bls.gov/feed/lau_latest.rss"></a>
</body>


</html>
