<?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $password = $_GET['password'];
    $expected_salary = $_GET['expected_salary'];
    $start_date = $_GET['start_date'];
    $gender = $_GET['gender'];
    $position = $_GET['position'];
    $skills = isset($_GET['skills']) ? implode(', ', $_GET['skills']) : 'ไม่ได้เลือก';
    $userMsg = $_GET['userMsg'];

    echo "<h2>ข้อมูลที่ส่งมา:</h2>";
    echo "<p><strong>ชื่อ-นามสกุล:</strong> " . htmlspecialchars($name) . "</p>";
    echo "<p><strong>อีเมล:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>เบอร์โทรศัพท์:</strong> " . htmlspecialchars($phone) . "</p>";
    echo "<p><strong>เงินเดือนที่คาดหวัง:</strong> " . htmlspecialchars($expected_salary) . "</p>";
    echo "<p><strong>วันที่เริ่มงานได้:</strong> " . htmlspecialchars($start_date) . "</p>";
    echo "<p><strong>เพศ:</strong> " . htmlspecialchars($gender) . "</p>";
    echo "<p><strong>ตำแหน่งที่สนใจ:</strong> " . htmlspecialchars($position) . "</p>";
    echo "<p><strong>ทักษะความสามารถ:</strong> " . htmlspecialchars($skills) . "</p>";
    echo "<p><strong>แนะนำตัวเพิ่มเติม:</strong> " . nl2br(htmlspecialchars($userMsg)) . "</p>";
?>