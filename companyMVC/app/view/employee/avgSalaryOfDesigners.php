<?php
// echo "<pre>";
// var_dump($avgSalaryOfDesigners);
// echo "</pre>";
?>
<div class="row">
    <div class="jumbotron bg-info text-white pt-3 pb-3">
        <h1 class="display3 text-center">Grafikusok átlag fizetése</h1>
    </div>
</div>
<div class="container">
    <div class="alert alert-primary mt-3" role="alert">
        <?php echo "A grafikusok átlagkeresete: ".$avgSalaryOfDesigners->avg. "Ft";?>
    </div>
    <a href="index.php?" class="btn btn-info text-white">Dolgozók</a>
</div>