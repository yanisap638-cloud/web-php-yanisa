<?php
    $name = $_GET['username'];
    $password =$_GET['userpass'];
    $email = $_GET['userEmail'];
    $age = $_GET['userAge'];
    $birth = $_GET['userBirth'];
    $gender = $_GET['userGender'];
    $city = $_GET['userCity'];
    $hobby = $_GET['userHobby'];
    $message = $_GET['userMsg'];

    echo "สวัสดีคุณ $name<br>";
    echo "รหัสผ่านของคุณคือ: $password";
    echo "อีเมลของคุณคือ: $email<br>";
    echo "อายุของคุณคือ: $age<br>";
    echo "วันเกิดของคุณคือ: $birth<br>";
    echo "เพศของคุณคือ: $gender<br>";
    echo "จังหวัดของคุณคือ: $city<br>";
    echo "งานอดิเรกของคุณคือ: " . implode(", ", $hobby) . "<br>";
    echo "ความคิดเห็นของคุณคือ: $message<br>";

?>