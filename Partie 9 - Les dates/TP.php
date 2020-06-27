<!-- Enoncé : création d'un calendrier. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'TP';
include 'header.php';
?>
<link rel="stylesheet" href="style.css">


<?php
$titre = 'Calendrier';
$months = [1 => 'Janvier', 2 => 'Février', 3 => 'Mars', 4 => 'Avril', 5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Août', 9 => 'septembre', 10 => 'octobre', 11 => 'novembre', 12 => 'décembre'];
$weekDays = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
// La paramètre Y renvoie l'année sur 4 chiffres. 
$selectedYear = $_GET['year'] ?? date('Y');
// Le paramètre n renvoie le mois sans les zéros initiaux.
$selectedMonthNumber = $_GET['month'] ?? date('n');
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $selectedMonthNumber, $selectedYear);
// Le paramètre N renvoie est la représentation numérique du jour de la semaine (1 jusqu'à 7).
// La syntaxe de mktime est : mktime(hour, minute, second, month, day, year).
$firstDay = date('N', mktime(0, 0, 0, $selectedMonthNumber, 1, $selectedYear));
?>


<!-- Création du formulaire. -->

<form action="" method="get">
    <label for="month">Mois :</label>
    <select name="month" id="month">
        <?php foreach ($months as $monthNumber => $month): ?>
        <option value="<?=$monthNumber?>" <?=$selectedMonthNumber == $monthNumber ? 'selected' : '';?>>
            <?=$month;?>
        </option>
        <?php endforeach;?>
    </select>
    <label for="year">Année :</label>
    <select name="year" id="year">
        <?php for ($year = 1900; $year <= 2100; $year++): ?>
        <option value="<?=$year?>" <?=$selectedYear == $year ? 'selected' : '';?>>
            <?=$year?>
        </option>
        <?php endfor;?>
    </select>
    <input type="submit" value="valider">
</form>


<!-- Affichage du tableau. -->

<table>
    <thead>
        <tr>
            <?php foreach ($weekDays as $weekDay): ?>
            <td><?=$weekDay?></td>
            <?php endforeach;?>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php 
            $day = 1;
            for($tile = 1; $tile <= $daysInMonth + $firstDay - 1; $tile++) :
                if ($tile < $firstDay) { ?>
                    <td></td>
                <?php } else { ?>
                    <td><?= $day ?></td>
                <?php $day++; }  
                    if ($tile % 7 == 0) { ?>
                    </tr><tr>
                <?php }
            endfor; ?>
        </tr>
    </tbody>
</table>


<!-- Insertion du footer. -->

<?php include 'footer.php';?>