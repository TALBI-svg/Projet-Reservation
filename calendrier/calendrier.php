<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendrier avec Réservations</title>
  <style>
    /* Votre CSS pour le style du calendrier */
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: center;
    }

    th {
      background-color: #f2f2f2;
    }

    .reserved {
      background-color: #ff0000;
      color: red;
    }
  </style>
</head>
<body>

  <?php
    // Fonction pour générer un calendrier
    function generateCalendar($year, $month, $reservedDates) {
      $firstDay = mktime(0, 0, 0, $month, 1, $year);
      $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
      $lastDay = mktime(0, 0, 0, $month, $daysInMonth, $year);
      $startDayOfWeek = date("N", $firstDay);

      echo "<h2>Calendrier pour $year - $month</h2>";
      echo "<table>";
      echo "<tr>";
      echo "<th>Lun</th><th>Mar</th><th>Mer</th><th>Jeu</th><th>Ven</th><th>Sam</th><th>Dim</th>";
      echo "</tr><tr>";

      // Remplir les jours avant le premier jour du mois
      for ($i = 1; $i < $startDayOfWeek; $i++) {
        echo "<td></td>";
      }

      // Remplir les jours du mois
      for ($day = 1; $day <= $daysInMonth; $day++) {
        $currentDate = strtotime("$year-$month-$day");
        $isReserved = in_array(date("Y-m-d", $currentDate), $reservedDates);
        $class = $isReserved ? 'reserved' : '';

        echo "<td class='$class'>$day</td>";

        if (($startDayOfWeek + $day - 1) % 7 == 0) {
          echo "</tr><tr>";
        }
      }

      // Compléter la dernière ligne du tableau
      for ($i = ($startDayOfWeek + $daysInMonth - 1) % 7; $i < 6; $i++) {
        echo "<td></td>";
      }

      echo "</tr>";
      echo "</table>";
    }

    // Liste des dates réservées (simulée)
    $reservedDates = [
      '2022-01-05',
      '2022-01-10',
      '2022-01-15',
      // ... ajoutez d'autres dates réservées
    ];

    // Utilisez la date actuelle pour générer le calendrier, mais vous pouvez spécifier une année et un mois particuliers
    $currentYear = date("Y");
    $currentMonth = date("m");

    // Générer le calendrier pour chaque mois de l'année
    for ($month = 1; $month <= 12; $month++) {
      generateCalendar($currentYear, $month, $reservedDates);
    }
  ?>

</body>
</html>
