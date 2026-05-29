$content = @'
<?php
$fullname = 'นางสาว ญาณิศา พรหมเดช';
$nickname = 'มีน';
$studentId = '69319010004';
$department = 'เทคโนโลยีสารสนเทศ';
$age = 19;
$description = 'ยินดีต้อนรับสู่หน้าแนะนำตัวของฉัน! ฉันชอบเรียนรู้เทคโนโลยีใหม่ ๆ และชื่นชอบงานด้านเทคโนโลยีสารสนเทศ.';
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แนะนำตัว | ญาณิศา พรหมเดช</title>
    <style>
        :root {
            color-scheme: dark;
            --bg: #0d1117;
            --surface: #151927;
            --surface-soft: #1f2937;
            --text: #e6edf3;
            --muted: #94a3b8;
            --accent: #7c3aed;
            --accent-soft: rgba(124, 58, 237, 0.18);
            --shadow: 0 24px 60px rgba(0, 0, 0, 0.35);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: radial-gradient(circle at top right, rgba(124, 58, 237, 0.18), transparent 20%),
                        radial-gradient(circle at bottom left, rgba(14, 165, 233, 0.12), transparent 18%),
                        linear-gradient(180deg, #0b1017 0%, #101623 100%);
            color: var(--text);
            display: grid;
            place-items: center;
            padding: 2rem;
        }

        .card {
            width: min(100%, 860px);
            background: linear-gradient(180deg, rgba(24, 30, 42, 0.95), rgba(15, 19, 29, 0.98));
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 32px;
            box-shadow: var(--shadow);
            overflow: hidden;
            backdrop-filter: blur(18px);
        }

        .hero {
            padding: 3rem 3rem 2rem;
        }

        .hero .tag {
            display: inline-flex;
            padding: 0.65rem 1rem;
            border-radius: 999px;
            background: var(--accent-soft);
            color: var(--accent);
            font-weight: 600;
            letter-spacing: 0.04em;
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
        }

        .hero h1 {
            font-size: clamp(2.4rem, 4vw, 3.4rem);
            line-height: 1.04;
            margin: 0 0 1rem;
        }

        .hero p {
            margin: 0;
            max-width: 760px;
            color: var(--muted);
            font-size: 1.05rem;
            line-height: 1.9;
        }

        .details {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1.25rem;
            padding: 2rem 3rem 2.5rem;
        }

        .detail-card {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 24px;
            padding: 1.5rem;
            transition: transform 0.25s ease, border-color 0.25s ease;
        }

        .detail-card:hover {
            transform: translateY(-4px);
            border-color: rgba(124, 58, 237, 0.45);
        }

        .detail-card strong {
            display: block;
            margin-bottom: 0.85rem;
            color: var(--accent);
            font-size: 0.95rem;
            letter-spacing: 0.04em;
        }

        .detail-card span {
            display: block;
            color: var(--text);
            font-size: 1.05rem;
            line-height: 1.8;
        }

        .footer {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            padding: 1.8rem 3rem 2.2rem;
            background: rgba(255, 255, 255, 0.03);
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }

        .footer small {
            color: var(--muted);
        }

        .footer .pill {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            padding: 0.75rem 1rem;
            border-radius: 999px;
            background: var(--accent-soft);
            color: var(--accent);
            font-size: 0.95rem;
            font-weight: 600;
        }

        @media (max-width: 720px) {
            .details {
                grid-template-columns: 1fr;
            }

            .hero, .details, .footer {
                padding-left: 1.75rem;
                padding-right: 1.75rem;
            }
        }

        @media (max-width: 520px) {
            .hero {
                padding-top: 2rem;
            }
        }
    </style>
</head>
<body>
    <article class="card">
        <section class="hero">
            <span class="tag">Dark Mode | Modern Design</span>
            <h1>สวัสดีค่ะ ฉันคือ <?= htmlspecialchars($fullname, ENT_QUOTES, 'UTF-8') ?></h1>
            <p><?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?></p>
        </section>

        <section class="details">
            <div class="detail-card">
                <strong>ชื่อ-นามสกุล</strong>
                <span><?= htmlspecialchars($fullname, ENT_QUOTES, 'UTF-8') ?> (ชื่อเล่น: <?= htmlspecialchars($nickname, ENT_QUOTES, 'UTF-8') ?>)</span>
            </div>
            <div class="detail-card">
                <strong>รหัสประจำตัวนักเรียน</strong>
                <span><?= htmlspecialchars($studentId, ENT_QUOTES, 'UTF-8') ?></span>
            </div>
            <div class="detail-card">
                <strong>แผนกวิชา</strong>
                <span><?= htmlspecialchars($department, ENT_QUOTES, 'UTF-8') ?></span>
            </div>
            <div class="detail-card">
                <strong>อายุ</strong>
                <span><?= htmlspecialchars($age, ENT_QUOTES, 'UTF-8') ?> ปี</span>
            </div>
        </section>

        <footer class="footer">
            <small>ออกแบบและพัฒนาโดย: <?= htmlspecialchars($fullname, ENT_QUOTES, 'UTF-8') ?></small>
            <span class="pill">ดีไซน์: Dark Modern</span>
        </footer>
    </article>
</body>
</html>
'@;
Set-Content -Path 'c:\xampp\htdocs\myproject_yanisa\myintroduction_yanisa.php' -Value $content -Encoding utf8