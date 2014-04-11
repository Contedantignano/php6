
<html>
    <head>
        <title>How many days in this month?</title>
    <head>
  <body>
<?php
    echo '<br/>';
    echo 'Today Is: ';
    $data = date('d F Y');
    echo $data;
    echo '<br/>';

date_default_timezone_set('America/New_York');
$month = date('n');
if ($month == 1) {echo '31'; }
if ($month == 2) {echo '28 (unless it\'s a leap year)'; }
if ($month == 3) {echo '31'; }
if ($month == 4) {echo '30'; }
if ($month == 5) {echo '31'; }
if ($month == 6) {echo '30'; }
if ($month == 7) {echo '31'; }
if ($month == 8) {echo '31'; }
if ($month == 9) {echo '30'; }
if ($month == 10) {echo '31'; }
if ($month == 11) {echo '30'; }
if ($month == 12) {echo '31'; }
echo '<br/>';
$month = date('n');
if ($month == 1) {echo 'This month are 31 days'; }
if ($month == 2) {echo 'This month are of 28 days and (unless it\'s a leap year)'; }
if ($month == 3) {echo 'This month are of 31 days'; }
if ($month == 4) {echo 'This month are of 30 days'; }
if ($month == 5) {echo 'This month are of 31 days'; }
if ($month == 6) {echo 'This month are of 30 days'; }
if ($month == 7) {echo 'This month are of 31 days'; }
if ($month == 8) {echo 'This month are of 31 days'; }
if ($month == 9) {echo 'This month are of 30 days'; }
if ($month == 10) {echo 'This month are of 31 days'; }
if ($month == 11) {echo 'This month are of 30 days'; }
if ($month == 12) {echo 'This month are of 31 days'; }
echo '<br/>';
$month_left = 12 - $month;
echo '<p> There are ' . $month_left . 'months left in the year.<p/>';
?>
<?php include '../footer.php'; ?>
   </body>
</html>
