<?php

$phpFileUploadErrors = [
    0 => 'Помилок не виникло, файл був успішно завантажений на сервер',
    1 => 'Розмір прийнятого файлу перевищив максимально допустимий розмір, заданий директивою php.ini',
    2 => 'Розмір файлу, що завантажується, перевищив значення MAX_FILE_SIZE, вказане в HTML-формі',
    3 => 'Завантажуваний файл було отримано лише частково',
    4 => 'Файл не був завантажений',
    6 => 'Відсутня тимчасова папка',
    7 => 'Не вдалося записати файл на диск',
    8 => 'Модуль PHP зупинив завантаження файлу',
];

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

