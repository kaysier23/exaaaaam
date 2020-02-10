<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://www.sciencedaily.com/rss/top/science.xml"); 
 
 $content = $domOBJ->getElementsByTagName("item");
 
 ?>

<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="index.php">science news</a></li>
  <li><a href="tech.php">technology news</a></li>
</ul>

</body>
</html>

<h1>Latest Science News -- ScienceDaily</h1>

    <?php
 foreach( $content as $data )
 { ?>
 
<?php
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
   $pubDate = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
  echo "
   <ul>
            <h2><a href = '$link'> $title </a></h2>
              <ul>
              <li>$description</li>
              <li>$pubDate</li>
                  </ul>
    </ul>
            ";
  ?>
<?php
 }
?>
