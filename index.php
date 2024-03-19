<?php
include_once 'includes/header.php';
?>
    <!doctype html>
page2-footer
    <html lang="en">
    <body>
    <div id="index-outer-container" class="container-fluid">
        <div class="row row-outer">
            <div id="left-column" class="col pt-5">
                <form id="variable-form" method="post" action="pages/output.php">
                    <div class="input-group">
                        <span class="input-group-text" id="unit-r">Rp.</span>
                        <input class="form-control form-control-lg" type="number" id="var-r" name="var-r" step="any" min="0"
                               placeholder="R" required>
                    </div>
                    <div class="input-group">
                        <input class="form-control form-control-lg" type="number" id="var-i" name="var-i" step="any"
                               min="0"
                               placeholder="i" oninput="validateDivisor()" required>
                        <span class="input-group-text" id="unit-i">%</span>
                    </div>
                    <div class="input-group">
                        <input class="form-control form-control-lg" type="number" id="var-n" name="var-n" step="any"
                               min="0"
                               placeholder="n" required>
                        <span class="input-group-text" id="unit-n">pembayaran</span>
                    </div>
                    <div id="submit-button" class="input-group form-control-lg">
                        <input type="submit" value="Hitung" class="btn btn-lg" onclick="validateDivisor()">
                    </div>
                </form>
            </div>
            <div id="right-column" class="col">
                <div id="index-inner-right-container" class="container-fluid">
                    <div class="row row-inner mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h4>Future Value of Ordinary Annuity</h4>
                                <p>
                                    Future Value of Ordinary Annuity (FVOA) adalah jumlah total uang pada tanggal
                                    tertentu di
                                    masa depan. Jumlah total uang tersebut mempertimbangkan serangkaian pembayaran sama
                                    yang
                                    dilakukan di
                                    akhir setiap periode beserta dengan bunga yang diperoleh. Pada dasarnya, FVOA
                                    menunjukkan
                                    besaran nilai investasi di masa depan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row row-inner">
                        <div class="card">
                            <div class="card-body">
                                <h4>Variabel</h4>
                                <p>
                                    R = Pembayaran/deposit yang dilakukan di setiap period (dalam Rupiah) <br>
                                    i = Bunga per periode (dalam persentase) <br>
                                    n = Jumlah total pembayaran <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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