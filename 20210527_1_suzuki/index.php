<table border="1" style="border-collapse: collapse;">
  <?php
  for ($i = 1; $i <= 9; $i++) {
    echo '<tr>';

    for ($a = 1; $a <= 9; $a++) {
      echo '<td>' . $i * $a . '</td>';
    }

    echo '</tr>';
  }
  ?>
</table>