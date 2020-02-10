<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://www.sciencedaily.com/rss/top/technology.xml");  
 
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
 
 h1{
 text-align: center;
 color: black;
 }
 .container{
 border: 2px white;
  height: auto;
  width: auto;
  padding: 0px;
  margin: auto;
 }
 .container li{
 color: white;
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
  <h1>Top Technology News -- ScienceDaily</h1>

 <?php
 foreach( $content as $data )
 { ?>
<?php
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
   $pubDate = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
    ?>
<html>
 <div class = " container">
   <ul>
            <h2><a href = '$link'> <?php echo $title ?> </a></h2>
              <ul>
              <li><?php echo $description ?></li>
              <li><?php echo $pubDate ?></li>
                  </ul>
    </ul>
 </div>
</html>
<?php
 }
?>
