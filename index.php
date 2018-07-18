<?php

/* Include the configuration file with the path */
include_once('config.php');

/* Filter pdf files */
$files = preg_grep('~\.(pdf)$~', scandir(PATH));

/* Set column headers */
$headers = [
  1 => "ID",
  2 => "File name",
  3 => "Action",
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PDF explorer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <script src="/js/script.js"></script>
</head>
<body>
  <div class="page">
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="index.php">
        <img src="/images/pdf.png" width="100" height="100" class="d-inline-block align-top" alt="">
      </a>
    </nav>
    <div class="container mt-3">
      <input type="text" id="searchInput" onkeyup="filterData()" placeholder="Search for files ....">
      <table id="fileTable" class="table table-hover">
        <thead>
          <tr>
          <?php foreach ($headers as $header): ?>
            <th><?php echo $header; ?></th>
          <?php endforeach; ?>
          </tr>
        </thead>
        <tbody>
          <tr>
          <?php foreach ($files as $key => $value): ?>
            <td><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
            <td> <a  class="btn btn-danger" href="<?php echo PATH."/".$value ?>" target="_blank">Preview</a> </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div id="loading"></div>
  <footer class="page-footer font-small blue">
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://github.com/miroslavvidovic"> miroslavvidovic<a>
    </div>
  </footer>
</body>
</html>
