<?php
include_once '../includes/header.php';
?>
    <!doctype html>
    <body class="bg bg-success">
    <div id="index-cont" class="container-fluid">
        <div class="row bg bg-dark">
            <div id="left-column" class="col bg bg-black">
                <form action="output.php" method="post">
                    <div class="input-form">
                        <input type="number" name="var1" id="var1" required>
                    </div>
                    <div class="input-form">
                        <input type="number" name="var2" id="var2" required>
                    </div>
                    <div class="input-form">
                        <input type="number" name="var3" id="var3" required>
                    </div>
                    <div class="input-form">
                        <input type="submit" value="Hitung">
                    </div>
                </form>
            </div>
            <div id="right-column" class="col bg-danger">
                Tes
            </div>
        </div>
    </div>
    </body>
    </html>
<?php
include_once '../includes/footer.php';