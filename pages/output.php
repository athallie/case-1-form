<?php
    include_once '../includes/header.php';
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result - Future Value of Ordinary Annuities & Sinking Funds</title>
  <link rel="stylesheet" href="../styles/styles.css">
</head>
<body id="output-body">
  <div id="output-container" class="container">
    <div class="card output-card">
        <h2 class="card-title">Formula</h2>
        <img src="https://i.pinimg.com/736x/0c/64/8b/0c648b492888b0c9a58e1e5d874087d4.jpg">
    </div>
    <div class="card output-card">
        <h2>Result</h2>
    <p><?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $p =$_POST["var-r"];
    $rate = $_POST["var-i"]; 
    $n = $_POST['var-n'];
    $i = $rate / 100;
    $future_value = round($p * ((((1 + $i) ** $n) - 1) / $i));
    }
    echo $future_value; ?></p>
    </div>
    <form method="post" action="../index.php">
        <input type="submit" value="Back to Calculator" class="back-button">
    </form>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<?php
include_once '../includes/footer.php';