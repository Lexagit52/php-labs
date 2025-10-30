<?php
echo "<h1>Журнал посещений</h1>";

if (!file_exists(PATH_LOG)) {
    echo "<p>Журнал пока пуст.</p>";
    return;
}

$lines = file(PATH_LOG, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if (!$lines) {
    echo "<p>Журнал пока пуст.</p>";
    return;
}

echo "<div class='log-block'>";
echo "<table border='0' cellspacing='0' cellpadding='6' width='100%'>";
echo "<tr style='background-color:#f0f4f8; color:#2A4F6F;'>
        <th align='left'>Дата и время</th>
        <th align='left'>Страница</th>
        <th align='left'>Откуда пришёл</th>
      </tr>";

foreach ($lines as $line) {
    [$dt, $page, $ref] = explode('|', $line);
    $date = date("d.m.Y H:i:s", (int)$dt);
    $ref = $ref === '-' ? '—' : "<a href='$ref' target='_blank'>$ref</a>";

    echo "<tr style='border-bottom:1px dotted #B2BCC6;'>
            <td>$date</td>
            <td><strong>$page</strong></td>
            <td>$ref</td>
          </tr>";
}

echo "</table>";
echo "</div>";
?>
