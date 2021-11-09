<?php

function testStringInput($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function checkDataString($data)
{
    $res = '';

    if(is_string($data))
    {
        $res = testStringInput($data);
    }

    else
    {   
        $res = 'Error';
    }

    return $res;

}

function checkDataNumber($data)
{
    $res = '';

    if(is_numeric($data))
    {
        $res = testStringInput($data);
    }

    else
    {   
        $res = 'Error';
    }

    return $res;

}

function checkError($surName, $firstName, $fatherName, $age, $education, $experience, $about)
{
    $count = 0;
    if($surName == 'Error')
    {
        $_SESSION['errorSurname'] = 'Дане поле повинно бути виключно строкою';
        $count++;
       
    }
    if($firstName == 'Error')
    {
        $_SESSION['errorFirstname'] = 'Дане поле повинно бути виключно строкою';
        $count++;
    }
    if($fatherName == 'Error')
    {
        $_SESSION['errorFathername'] = 'Дане поле повинно бути виключно строкою';
        $count++;
    }
    if($age == 'Error')
    {
        
        $_SESSION['errorAge'] = 'Дане поле повинно бути виключно числовим';
        $count++;
       
    }
    if($education == 'Error')
    {
        $_SESSION['errorEducation'] = 'Дане поле повинно бути виключно строкою';
        $count++;
    }
    if($experience == 'Error')
    {
        $_SESSION['errorExperience'] = 'Дане поле повинно бути виключно числовим';
        $count++;
    }
    if($about == 'Error')
    {
        $_SESSION['errorAbout'] = 'Дане поле повинно бути виключно строкою';
        $count++;
    }

    return $count;
    
}