<!DOCTYPE html>
<html lang='th'>
    <head>
        <meta charset="UTF-8">
        <title>Yanisa Phromdet</title>
</head>
<body>
    <form action="registeration-accept.php" method="get">
        <label><h1>ใบสมัครงาน</h1></label>
        <label>ชื่อ-นามสกุล:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label>อีเมล:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label>เบอร์โทรศัพท์:</label>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label>รหัสผ่าน (สำหรับเข้าสู่ระบบ):</label>
        <input type="password" id="password" name="password" required><br><br>

        <label>เงินเดือนที่คาดหวัง:</label>
        <input type="number" id="expected_salary" name="expected_salary" required><br><br> 

        <label>วันที่เริ่มงานได้:</label>
        <input type="date" id="start_date" name="start_date" required><br><br>

        <label>เพศ:</label>
        <input type="radio" id="male" name="gender" value="ชาย" required>
        <label for="male">ชาย</label>
        <input type="radio" id="female" name="gender" value="หญิง" required>
        <label for="female">หญิง</label>
        <input type="radio" id="other" name="gender" value="อื่น" required>
        <label for="other">อื่น</label><br><br>

        <label>ตำแหน่งที่สนใจ:</label>
        <select id="position" name="position" required>
            <option value="">-- กรุณาเลือกตำแหน่ง --</option>
            <option value="นักพัฒนาเว็บ">โปรแกรมเมอร์</option>
            <option value="นักออกแบบกราฟิก">กราฟิกดีไซน์</option>
            <option value="นักวิเคราะห์ข้อมูล">การตลาด</option>
        </select><br><br>

        <label>ทักษะความสามารถ (เลือกได้มากกว่า 1):</label><br>
        <input type="checkbox" id="skill4" name="skills[]" value="PHP">
        <label for="skill4">PHP</label><br>
        <input type="checkbox" id="skill1" name="skills[]" value="HTML">
        <label for="skill1">HTML</label><br>
        <input type="checkbox" id="skill2" name="skills[]" value="CSS">
        <label for="skill2">CSS</label><br>
        <input type="checkbox" id="skill3" name="skills[]" value="SQL">
        <label for="skill3">SQL</label><br>

        <label>แนะนำตัวเพิ่มเติม:</label><br>
        <textarea name="userMsg"></textarea><br><br>
        
        <input type="submit" value="ส่งใบสมัคร">
        <input type="reset" value="ล้างข้อมูล">
    </form>
</body>
</html>