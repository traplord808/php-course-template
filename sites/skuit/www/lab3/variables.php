<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лаб 3 - Основы PHP</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        .container { max-width: 800px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; }
        .section { margin: 20px 0; padding: 15px; background: #f9f9f9; }
        form { margin: 15px 0; }
        input, button { padding: 8px; margin: 5px; }
        .result { color: green; font-weight: bold; }
        .variable { color: blue; }
        .hint { color: #666; font-size: 0.9em; font-style: italic; margin-top: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Лабораторная работа 3</h1>

        
    <?php
    $name = "Pavel";
    $age = 20;
    $heightcm = 193;
    $isstudent = true;
    $grades = [4, 5, 3, 5, 4];

    $birthday = 2025 - $age;
    $age_through_five_years = $age + 5;
    $heighinch = $heightcm / 2.54;
    $heightmeter = $heightcm / 100;
    $average = array_sum($grades) / count($grades);

    $hello = "Привет, " . $name . "!";

    $number_of_ratings = count($grades);
    $max_rating = max($grades);
    $min_ratings = min($grades);

    $random_int = rand(1,100);
    $random_float = rand(1,100) / 100;
    ?>

    
        <div class = "section">
            <h2>1. Базовые переменные</h2>
            <p>Имя: <span class = "variable"><?= $name ?></span></p>
            <p>Возраст: <span class = "variable"><?= $age ?></span></p>
            <p>Рост: <span class = "variable"><?= $heightcm ?></span> см </p>
            <p>Студент: <span class = "variable"><?= $isstudent ? 'да' : 'нет' ?></span></p>
            <p>Оценки: <span class = "variable"><?= implode(', ', $grades) ?></span></p>
        </div>

        <div class = "section">
            <h2>. математические операции</h2>
            <?php
            $birthday = 2025 - $age;
            $age_through_five_years = $age + 5;
            $heighinch = $heightcm / 2.54;
            $heightmeter = $heightcm / 100;
            $average = array_sum($grades) / count($grades);
            ?>

            <p>Год рождения: <span class= "result"><?= $birthday ?></span></p>
            <div class="hint">// 2025 - Возраст = <?= $birthday ?></div>

            <p>Возраст через 5 лет: <span class= "result"><?= $age_through_five_years ?></span></p>
            <div class="hint">// Возраст + 5 = <?= $age_through_five_years ?></div>

            <p>Рост в дюймах: <span class= "result"><?= round($heighinch, 2) ?></span></p>
            <div class="hint">// Рост в см / 2.54 <?= round($heighinch, 2) ?></div>

            <p>Рост в метрах: <span class= "result"><?= round($heightmeter, 2) ?></span></p>
            <div class="hint">// Рост в см / 100 <?= round($heightmeter, 2) ?></div>

            <p>Средний бал: <span class= "result"><?= round($average, 2) ?></span></p>
            <div class="hint">// array_sum($grades) / count ($grades)  = <?= round($average, 2) ?></div>
        </div>

        <div class="section">
            <h2>3. операции со строками</h2>
            <?php
            $hello = "Привет, " . $name . "!";
            $ageinfo = "Тебе $age лет";
            $uppername = strtoupper($name);
            $namelength = strlen($name);
            ?>

