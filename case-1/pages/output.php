<?php
    include_once '../includes/header.php';
?>
<!doctype html>
<html lang="en">
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
  </body>
</html>
<?php
include_once '../includes/footer.php';?>