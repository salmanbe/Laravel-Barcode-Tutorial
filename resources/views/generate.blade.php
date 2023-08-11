<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Barcode</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">  
  <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  </head>
<body>
<div class="container">
    <br /><br /> 
    <a href="/">Generate</a> | <a href="/scan">Scan</a>
    <br /><br />
	<h2>Barcode</h2>
    <br /><br />  
    <?php
        echo '<img src="data:image/png,' . Milon\Barcode\DNS1D::getBarcodePNG($product_id, "C39", 3, 50) . '" alt=""   />';
        echo '<img src="data:image/png;base64,' . Milon\Barcode\DNS1D::getBarcodePNG($product_id, "C39", 3, 50) . '" alt="" />';
     ?>
</div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>