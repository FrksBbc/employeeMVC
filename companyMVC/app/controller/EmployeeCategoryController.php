<?php

namespace app\controller;

require_once('app\model\EmployeeCategoryDao.php');

use app\model\EmployeeCategoryDao;

class EmployeeCategoryController
{
    //Betölti a megfelelő view-nak az adatokat
    public function load($view, $data=[])
    {
        extract($data);
        ob_start();
        include("app/view/employeeCategory/{$view}.php");
        return $data;
    }

    //a view-ra employees néven küldjük az adatokat
    public function listAllEmployeeCategories()
    {
        $EmployeeCategoryDaoObj = new EmployeeCategoryDao();
        $employeeCategories = $EmployeeCategoryDaoObj->getAllEmployeeCategory();
        return $this->load('list', [
            'employeeCategories' => $employeeCategories,
        ]);
    }

    public function saveEmployeeCategory()
    {
        $employeeCategoryDaoObj = new EmployeeCategoryDao();
        if (isset($_POST['save'])) {
            $employeeCategoryDaoObj->save();
            header('Location: index.php?controller=employeeCategory&action=list');
        }
        return $this->load('create', [
        ]);
    }

    public function loadEmployeeCategoryToEdit(int $id)
    {
        $employeeCategoroyDaoObj = new EmployeeCategoryDao();
        $employeeCategoryData = $employeeCategoroyDaoObj->getEmployeeCategoryById($id);

        return $this->load('edit', [
            'employeeCategory' => $employeeCategoryData,
        ]);
    }

    public function updateEmployeeCategoryById(int $id)
    {
        $employeeCategoroyDaoObj = new EmployeeCategoryDao();
        //edit.php felületén a Módosít gombra kattintottunk
        if (isset($_POST['update'])) {
            $employeeCategoroyDaoObj->update($id);
            header('Location: index.php?controller=employeeCategory&action=list');
        }
    }


    public function loadEmployeeCategoryToDelete(int $id)
    {
        $employeeCategoroyDaoObj = new EmployeeCategoryDao();
        $employeeCategoryData = $employeeCategoroyDaoObj->getEmployeeCategoryById($id);
        return $this->load('delete', [
            'employeeCategory' => $employeeCategoryData,
        ]);
    }

    public function deleteEmployeeCategoryById(int $id)
    {
        $employeeCategoroyDaoObj = new EmployeeCategoryDao();
        if (isset($_POST['delete'])) {
            $employeeCategoroyDaoObj->delete($id);
            header('Location: index.php?controller=employeeCategory&action=list');
        }
    }
}