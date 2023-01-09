<?php

namespace app\controller;

require_once('app\model\EmployeeDao.php');
require_once('app\model\EmployeeCategoryDao.php');

use app\model\EmployeeDao;
use app\model\EmployeeCategoryDao;

class EmployeeController
{
    //Betölti a megfelelő view-nak az adatokat
    public function load($view, $data=[])
    {
        extract($data);
        ob_start();
        include("app/view/employee/{$view}.php");
        return $data;
    }

    //a view-ra employees néven küldjük az adatokat
    public function listAllEmployees()
    {
        $employeeDaoObj = new EmployeeDao();
        $emplyees = $employeeDaoObj->getAllEmployee();

        $employeeCategoryDaoObj = new EmployeeCategoryDao();
        $employeeCategories = $employeeCategoryDaoObj->getAllEmployeeCategory();

        return $this->load('list', [
            'employees' => $emplyees,
            'employeeCategories' => $employeeCategories,
        ]);
    }





    public function saveEmployee()
    {
        //a legördülő menü adatait állítja elő az employee_category tábla alapján
        $employeeCategoryDaoObj = new EmployeeCategoryDao();
        $employeeCategories = $employeeCategoryDaoObj->getAllEmployeeCategory();

        $employeeDaoObj = new EmployeeDao();
        //Ha a mentés gombra kattintunk (submit), akkor a save-metódust hívjuk meg
        if (isset($_POST['save'])) {
            $employeeDaoObj->save();
            header('Location: index.php');
        }

        //$employeeCategories - legördülő menü adatai
        return $this->load('create', [
            'employeeCategories' => $employeeCategories,
        ]);
    }

    public function loadEmployeeToDelete(int $id)
    {
        $employeeDaoObj = new EmployeeDao();
        $employeeData = $employeeDaoObj->getEmployeeById($id);
        return $this->load('delete', [
            'employee' => $employeeData,
        ]);
    }

    public function deleteEmployeeById(int $id)
    {
        $employeeDaoObj = new EmployeeDao();
        if (isset($_POST['delete'])) {
            $employeeDaoObj->delete($id);
            header('Location: index.php');
        }
    }

    public function loadEmployeeToEdit(int $id)
    {
        $employeeDaoObj = new EmployeeDao();
        $employeeData = $employeeDaoObj->getEmployeeById($id);

        $employeeCategoryDaoObj = new EmployeeCategoryDao();
        $employeeCategories = $employeeCategoryDaoObj->getAllEmployeeCategory();

        return $this->load('edit', [
            'employee' => $employeeData,
            'employeeCategories' => $employeeCategories,
        ]);
    }

    public function updateEmployeeById(int $id)
    {
        $employeeDaoObj = new EmployeeDao();
        //edit.php felületén a Módosít gombra kattintottunk
        if (isset($_POST['update'])) {
            $employeeDaoObj->update($id);
            header('Location: index.php');
        }
    }

    public function listAllEmployeesCategory()
    {
        $employeeCategoryDaoObj = new EmployeeCategoryDao();
        $employeeCategories = $employeeCategoryDaoObj->getAllEmployeeCategory();
        return $this->load('categoryList', ['employeeCategories' => $employeeCategories]);
    }

    public function getAllProgrammer()
    {
        $employeeDaoObj = new EmployeeDao();
        $programmers = $employeeDaoObj->getAllProgrammer();
        return $this->load('listProgrammer', [
            'programmers' => $programmers,
        ]);
    }

    public function listActiveWorkers()
    {
        $employeeDaoObj = new EmployeeDao();
        $activeWorkers = $employeeDaoObj->getActiveWorker();
        return $this->load('listActiveWorker', [
            'activeWorkers' => $activeWorkers,
        ]);
    }


        public function getAvgSalaryOfDesigners()
        {
            $employeeDaoObj = new EmployeeDao();
            $avgSalaryOfDesigners = $employeeDaoObj->getAvgSalaryOfDesigners();
            return $this->load('avgSalaryOfDesigners', [
                'avgSalaryOfDesigners' => $avgSalaryOfDesigners,
            ]);
        }


    public function filterEmployees()
    {
        $employeeDaoObj = new EmployeeDao();
        $filteredEmployees = $employeeDaoObj->filterEmployees();
        return $this->load('filteredEmployees', [
            'filteredEmployees' => $filteredEmployees,
        ]);
    }
}