<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator & Multiplication Table</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f2f2f2; color: #333; padding: 20px; }
        .container { max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); }
        h1, h2 { color: #2c3e50; }
        .box { margin-bottom: 24px; padding: 16px; border: 1px solid #ddd; border-radius: 8px; background: #fafafa; }
        label { display: block; margin-bottom: 8px; font-weight: bold; }
        input[type="number"] { width: 100%; padding: 8px; margin-bottom: 12px; border: 1px solid #ccc; border-radius: 4px; }
        input[type="submit"] { background: #3498db; color: #fff; border: none; padding: 10px 16px; border-radius: 4px; cursor: pointer; }
        input[type="submit"]:hover { background: #2980b9; }
        .result { background: #ecf0f1; padding: 14px; border-radius: 6px; margin-top: 12px; }
        .result p { margin: 6px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>เว็บไซต์ PHP</h1>
        <p>1) ป้อนตัวเลขแล้วแสดง loop สูตรคูณของตัวเลขนั้น<br>
           2) ป้อนตัวเลข 2 ตัวเพื่อนำไปบวกกันและแสดงผล</p>

        <?php
        $multiplicationInput = '';
        $sumInputA = '';
        $sumInputB = '';
        $sumResult = null;
        $multiplicationTable = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['action']) && $_POST['action'] === 'multiply') {
                $multiplicationInput = filter_input(INPUT_POST, 'multiplication_number', FILTER_VALIDATE_INT);
                if ($multiplicationInput !== false && $multiplicationInput !== null) {
                    for ($i = 1; $i <= 12; $i++) {
                        $multiplicationTable[] = sprintf('%d x %d = %d', $multiplicationInput, $i, $multiplicationInput * $i);
                    }
                }
            }

            if (isset($_POST['action']) && $_POST['action'] === 'sum') {
                $sumInputA = filter_input(INPUT_POST, 'sum_number_a', FILTER_VALIDATE_FLOAT);
                $sumInputB = filter_input(INPUT_POST, 'sum_number_b', FILTER_VALIDATE_FLOAT);
                if ($sumInputA !== false && $sumInputA !== null && $sumInputB !== false && $sumInputB !== null) {
                    $sumResult = $sumInputA + $sumInputB;
                }
            }
        }
        ?>

        <div class="box">
            <h2>1) สูตรคูณ</h2>
            <form method="post">
                <input type="hidden" name="action" value="multiply">
                <label for="multiplication_number">ป้อนตัวเลข</label>
                <input type="number" id="multiplication_number" name="multiplication_number" value="<?php echo htmlspecialchars($multiplicationInput); ?>" required>
                <input type="submit" value="แสดงสูตรคูณ">
            </form>

            <?php if (!empty($multiplicationTable)): ?>
                <div class="result">
                    <h3>สูตรคูณของ <?php echo htmlspecialchars($multiplicationInput); ?>:</h3>
                    <?php foreach ($multiplicationTable as $row): ?>
                        <p><?php echo htmlspecialchars($row); ?></p>
                    <?php endforeach; ?>
                </div>
            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'multiply'): ?>
                <div class="result">
                    <p>กรุณาป้อนตัวเลขที่ถูกต้อง</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="box">
            <h2>2) บวกเลข</h2>
            <form method="post">
                <input type="hidden" name="action" value="sum">
                <label for="sum_number_a">ตัวเลขที่ 1</label>
                <input type="number" id="sum_number_a" name="sum_number_a" step="any" value="<?php echo htmlspecialchars($sumInputA); ?>" required>
                <label for="sum_number_b">ตัวเลขที่ 2</label>
                <input type="number" id="sum_number_b" name="sum_number_b" step="any" value="<?php echo htmlspecialchars($sumInputB); ?>" required>
                <input type="submit" value="บวกเลข">
            </form>

            <?php if ($sumResult !== null): ?>
                <div class="result">
                    <p>ผลลัพธ์: <?php echo htmlspecialchars($sumResult); ?></p>
                </div>
            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'sum'): ?>
                <div class="result">
                    <p>กรุณาป้อนตัวเลขทั้งสอง</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
