<?php
   // echo "<pre>";
   //var_dump($employees);
   //echo "</pre>";
   ?>
<div class="row">
    <div class="jumbotron bg-info text-white pt-3 pb-3">
        <h1 class="display3 text-center">Dolgozók</h1>
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
            <th>Állapot</th>
            <th>Műveletek</th>
        </tr>
        <?php
               foreach ($employees as $employee) {
                   echo "<tr>";
                   echo "<td>" .$employee->id . "</td>";
                   echo "<td>" .$employee->last_name . " " . $employee->first_name ."</td>";
                   echo "<td>" .$employee->name . "</td>";
                   echo "<td>" .$employee->salary . "</td>";
                   echo "<td>" .$employee->job_start . "</td>";
                   echo "<td>";
                   $employee->status ? print "Aktív" : print "Inaktív";
                   echo  "</td>";
                   echo "<td>";
                   echo "<a class='btn btn-warning' href='index.php?controller=employee&action=edit&id=$employee->id'> Módosít </a> ";
                   echo "<a class='btn btn-danger' href='index.php?controller=employee&action=delete&id=$employee->id'> Töröl </a>";
                   echo "</td>";
                   echo "</tr>";
               }
   ?>
    </table>
    <a href="index.php?controller=employee&action=create" class="btn btn-info text-white">Új dolgozó</a>
    <a href="index.php?controller=employeeCategory&action=list" class="btn btn-primary  text-white">Beosztások</a>
    <a href="index.php?controller=employee&action=listProgrammers" class="btn btn-success text-white">Programozók</a>
    <a href="index.php?controller=employee&action=listActiveWorker" class="btn btn-warning text-white">Aktív
        dolgozók</a>
    <a href="index.php?controller=employee&action=getAvgSalaryOfDesigners" class="btn btn-secondary text-white">Grafikus
        átlag </a>
    <div class="col-sm-6">
        <div class="card mt-4">
            <h5 class="card-title text-center display-6">SZŰRÉS</h5>
            <div class="card-body">
                <form action="index.php?controller=employee&action=filterEmployees" method="POST">
                    <div class="form-group">
                        <label for="employee[employeeCategory]">Beosztás*</label>
                        <select class="form-select" name="employee[employeeCategory]" id="employee[employeeCategory]">
                            <?php
                        foreach ($employeeCategories as $employeeCategory) {
                            echo "<option value=" .$employeeCategory->id ."> $employeeCategory->name </option>";
                        }
   ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="salaryMin">Min.fizetés</label>
                        <input type="number" class="form-control" name="employee[salaryMin]" id="salaryMin">
                    </div>
                    <div class="form-group">
                        <label for="salaryMax">Max.fizetés</label>
                        <input type="number" class="form-control" name="employee[salaryMax]" id="salaryMax">
                    </div>
                    <div class="form-check mt-3">
                        <input type="checkbox" name="employee[status]" id="status" checked>
                        <label for="status">Aktív</label>
                        <button type="submit" class="btn btn-success text-white" name="filter"> Szűrés </button>
                    </div>
                </form>
            </div>
        </div>

    </div>



    <?php
//    foreach ($employeeCategories as $employeeCategorie) {
//        echo"<tr>";
//        echo "<td".$employeeCategorie->id."</td>";
//        echo "<td".$employeeCategorie->name."</td>";

//        echo"</tr>";
//    }
   ?>
    <h1>Code Challange</h1>
    <ol>
        <li><strike>employee_install.sql bővítés: employee_category táblába egy új oszlop `deleted`: alapértelmezetten
                0-as</li></strike>
        <li>
            <strike>
                Beosztások (employee_category tábla) CRUD (menün vagy gombon keresztül legyen elérhető), kiegészítés:
                Delete: deleted mezőt 1-esre állítja, a listázásnál pedig csak a 0-s deleted mezővel rendelkező rekordok
                jelenjenek meg!!!
                A megnevezésnek egyedinek kell lennie!!!
            </strike>
        </li>
        <li><strike>
                Programozókat egy külön oldalon listázzuk!!!
            </strike>
        </li>
        <li>
            <strike>
                Az aktív dolgozókat egy külön oldalon listázzuk!!!
            </strike>
        </li>
        <li>
            <strike>
                Mennyi a grafikusok átlagkeresete?
            </strike>
        </li>
        <li>
            <strike>
                A listázó oldalon készítsünk szűrőt, amely a beosztásokat, legördülő menü segítségével megjelenit, ahol
                kiválasztjuk melyik beosztás dolgozóit szeretnénk látni egy másik oldalon (emelt)
            </strike>
        </li>
        <li>
            <strike>
                Az elöző feladatot egészítsük ki statusz pipálható mezővel és fizetés tól-ig határmegadással, ez utóbbi
                csak
                akkor feltétel, ha kivan töltve! (emelt)
            </strike>
        </li>
    </ol>
</div>