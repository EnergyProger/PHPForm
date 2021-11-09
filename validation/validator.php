<?php
session_start();
$dirpath = dirname(getcwd());
include('functionValidator.php');

$surName = '';
$firstName = '';
$fatherName = '';
$age = '';
$education = '';
$experience = '';
$about = '';
$nameFile = '';

$arrResult = [];

if(isset($_POST['btn-output']))
{
    if(!empty($_POST['surName']) && !empty($_POST['firstName']) && !empty($_POST['fatherName']) && !$_FILES['photoInpt']['error']
        && !empty($_POST['age']) && !empty($_POST['education']) && !empty($_POST['experience']) && !empty($_POST['about']))
    {
        
        $surName = checkDataString($_POST['surName']);
        $firstName = checkDataString($_POST['firstName']);
        $fatherName = checkDataString($_POST['fatherName']);
        $age = checkDataNumber($_POST['age']);
        $education = checkDataString($_POST['education']);
        $experience = checkDataNumber($_POST['experience']);
        $about = checkDataString($_POST['about']);


        if(checkError($surName, $firstName, $fatherName, $age, $education, $experience, $about) > 0)
        {
            echo "<script>history.back()</script>";
            exit();
        }
        
        $nameFile = $_FILES['photoInpt']['name'];
        $tmp_name = $_FILES['photoInpt']['tmp_name'];
      
        move_uploaded_file($tmp_name, $dirpath.'/img/'.$nameFile);
           
       array_push($arrResult, $surName, $firstName, $fatherName, $nameFile, $age, $education, $experience, $about);
        $_SESSION['dataOutput'] = $arrResult;
        header('Location: /page.php');
     

       
    }
    else
    {
        $_SESSION['errorMessage'] = 'Всі поля повинні бути заповненні';
        echo "<script>history.back()</script>";
    }
}



