<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://www.sciencedaily.com/rss/top.xml"); 
 
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
  background-color: white;
}
 
  h1{
 text-align: center;
 color: black;
 }
 .container{
  height: auto;
  width: auto;
  padding: 0;
  margin: 0;
 }
 .container li{
 color: white;
 }
</style>
</head>
<body>

<ul>
  <li><a class="active" href="index.php">SCIENCE NEWS</a></li>
  <li><a href="tech.php">TECHNOLOGY NEWS</a></li>
  <li><a class="active" href="health.php">HEALTH NEWS</a></li>
  <li><a href="envi.php">ENVIRONMENT NEWS</a></li>
</ul>

</body>
</html>

<h1>Top Science News -- ScienceDaily</h1>

<html>
 <div class = " container">
 <?php
 foreach( $content as $data )
 { ?>
<?php
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
   $pubDate = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
   ?>
   <ul>
            <h2><a href = '$link'> <?php echo $title ?> </a></h2>
              <ul>
              <li><?php echo $description ?></li>
              <li><?php echo $pubDate ?></li>
                  </ul>
    </ul>
<?php
 }
?>
 </div>
</html>
