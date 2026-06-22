<!DOCTYPE html>
<html lang='th'>
    <head>
        <mete charset="UTF-8"></mete>
        <title>Yanisa Phromdet</title>
</head>
<body>
    <form action="week5-receive.php" method="get">
        <Lable>username</Lable>
        <input type="text"name="username" required>
        <br>


        <label>password</label>
        <input type="password" name="userpass" required>
        <br>

        <label>email</label>
        <input type="email" name="userEmail">
        <br>

        <label>อายุ</label>
        <input tyepe="number" name="userAge">
        <br>

        <label>วันเกิด</label>
        <input type="date" name="userBirth">
        <br>

        <label>เพศ</label>
        <input type="radio" name="userGender" value="ชาย">ชาย
        <input type="radio" name="userGender" value="หญิง">หญิง
        <br>

        <label>จังหวัด</label>
        <select name="userCity">
            <option value="ไม่ระบุ">-</option>
            <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
            </select>
            <br>

        <label>งานอดิเรก</label>
        <input type="checkbox" name="userHobby[]" value="อ่านหนังสือ">อ่านหนังสือ
        <input type="checkbox" name="userHobby[]" value="เล่นกีฬา">เล่นกีฬา
        <br>

        <label>ความคิดเห็น</label>
        <textarea name="userMsg"></textarea>
        <br> 
        
        
        <input type="submit" value="ส่งข้อมูล">
        <input type="reset" value="ล้างข้อมูล">

    </form>
</body>
    </html>