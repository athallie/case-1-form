<?php
include_once 'includes/header.php';
?>
    <!doctype html>
    <body class="bg bg-success">
    <div id="index-cont" class="container-fluid">
        <div class="row bg bg-dark">
            <div id="left-column" class="col bg bg-black">
                <form id="variable-form" action="pages/output.php" method="post">
                    <div class="input-group">
                        <span class="input-group-text" id="unit-r">Rp.</span>
                        <input class="form-control" type="number" id="var-r" step="any" min="0" placeholder="21000" required>
                    </div>
                    <div class="input-group">
                        <input class="form-control" type="number" id="var-i" step="any" min="0" placeholder="i" oninput="validateDivisor()" required>
                        <span class="input-group-text" id="unit-i">%</span>
                    </div>
                    <div class="input-group">
                        <input class="form-control" type="number" id="var-n" step="any" min="0" placeholder="n" required>
                        <span class="input-group-text" id="unit-n">tahun</span>
                    </div>
                    <div class="input-group">
                        <input type="submit" value="Hitung" onclick="validateDivisor()">
                    </div>
                </form>
            </div>
            <div id="right-column" class="col bg-danger">
                Tes
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('variable-form').reset();
        });
        function validateDivisor() {
            let i = document.getElementById('var-i');
            if (parseFloat(i.value) === 0) {
                document.getElementById('var-i').setCustomValidity("i tidak boleh 0");
                i.reportValidity();
            }
        }
    </script>
    </body>
    </html>
<?php
include_once 'includes/footer.php';