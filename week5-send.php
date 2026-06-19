<!DOCTYPE html>
<html lang='th'>
    <head>
        <mete charset="UTF-8"></mete>
        <title>Yanisa Phromdet</title>
</head>
<body>
    <form action="week5-receive.php" method="get">
        <Lable>username</Lable>
        <input type="text"name="username">
        <br>


        <label>password</label>
        <input type="password" name="userpass">
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

        <laber>จังหวัด</laber>
        <select name="userCity">
            <option value="ไม่ระบุ">-</option>
            <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
            </select>
            <br>

        <label>งานอดิเรก</label>
        <input type="checkbox" name="userHobby[]" value="อ่านหนังสือ">อ่านหนังสือ
        <input type="checkbox" name="userHobby[]" value="เล่นกีฬา">เล่นกีฬา
        <br>
           
        
        <input type="submit" value="ส่งข้อมูล">

    </form>
</body>
    </html>