<?php
//    echo "<pre>";
//    var_dump($filteredEmployees);
//    echo "</pre>";
?>
<div class="row">
    <div class="jumbotron bg-info text-white pt-3 pb-3">
        <h1 class="display3 text-center">Szűrés eredménye</h1>
    </div>
</div>
<?php
if (!empty($filteredEmployees)) {
    ?>
<div class="container">
    <table class="table table-hover mt-5 text-center">
        <tr>
            <th>ID</th>
            <th>Név</th>
            <th>Beosztás</th>
            <th>Fizetés</th>
            <th>Munkavégzés kezdete</th>
            <th>Állapot</th>
        </tr>
        <?php
               foreach ($filteredEmployees as $filteredEmployee) {
                   echo "<tr>";
                   echo "<td>" .$filteredEmployee->id . "</td>";
                   echo "<td>" .$filteredEmployee->last_name . " " . $filteredEmployee->first_name ."</td>";
                   echo "<td>" .$filteredEmployee->name . "</td>";
                   echo "<td>" .$filteredEmployee->salary . "</td>";
                   echo "<td>" .$filteredEmployee->job_start . "</td>";
                   echo "<td>";
                   $filteredEmployee->status ? print "Aktív" : print "Inaktív";
                   echo  "</td>";
                   echo "</tr>";
               }
    ?>
    </table>
    <?php } else {
        echo "<div class='alert alert-danger mt-3' role='alert'><h5>Nincs ilyen dolgozó!</h5></div>";
    } ?>
    <a href="index.php?" class="btn btn-info text-white">Dolgozók</a>





</div>