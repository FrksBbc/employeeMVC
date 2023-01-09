<?php
//    echo "<pre>";
//    var_dump($programmers);
//    echo "</pre>";
?>
<div class="row">
    <div class="jumbotron bg-info text-white pt-3 pb-3">
        <h1 class="display3 text-center">Aktív dolgozók</h1>
    </div>
</div>

<div class="container">
    <table class="table table-hover mt-5 text-center">
        <tr>
            <th>ID</th>
            <th>Név</th>
            <th>Beosztás</th>
            <th>Fizetés</th>
            <th>Munkavégzés kezdete</th>
        </tr>
        <?php
            foreach ($activeWorkers as $activeWorker) {
                echo "<tr>";
                echo "<td>" .$activeWorker->id . "</td>";
                echo "<td>" .$activeWorker->last_name . " " . $activeWorker->first_name ."</td>";
                echo "<td>" .$activeWorker->name . "</td>";
                echo "<td>" .$activeWorker->salary . "</td>";
                echo "<td>" .$activeWorker->job_start . "</td>";
                echo "</tr>";
            }
?>
    </table>
    <a href="index.php?" class="btn btn-info text-white">Dolgozók</a>



    <?php
//    foreach ($employeeCategories as $employeeCategorie) {
//        echo"<tr>";
//        echo "<td".$employeeCategorie->id."</td>";
//        echo "<td".$employeeCategorie->name."</td>";

//        echo"</tr>";
//    }
?>

</div>