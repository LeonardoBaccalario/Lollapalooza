<?php
    $nowDate = new DateTime('now', new DateTimeZone('Europe/Rome'));
    $endDate = new DateTime('2023-08-03', new DateTimeZone('America/Chicago'));
    $diff = date_diff($nowDate, $endDate);

    $years=$diff->format('%Y');
    $months=$diff->format('%M');
    $days=$diff->format('%D');
    $hours=$diff->format('%H');
?>