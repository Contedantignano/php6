<div style="text-align: center">
<?php
      date_default_timezone_set('America/New_York');

        if (date ('G') >= 5 && date ('G') <= 11) {

            echo '<p>Welcome to my movie site !<br/></p><h2>Good Moring!</h2>';
        }
        else if  (date ('G') >= 12 && date ('G') <= 18) {

            echo '<h2>Good Afthernoon!</h2>';
        }
        else if  (date ('G') >= 19 && date ('G') <= 4) {

            echo '<h2>Good Night!</h2>';
        }

        echo 'Today is ';
        echo date('F d');
        echo ', ';

        ?>

        <?php
        function display_times($num) {
            echo '<p>You have viewed this page ' . $num . ' time(s) <p/>';
        }
        //recupera il valore del cookie
        $num_times = 1;
        if (isset($_COOKIE['num_times'])) {
            $num_times = $_COOKIE['num_time'] + 1;
            setcookie('num_times', $num_times, time(), + 60);
        }
        ?>
        <br/>
    <?php display_times($num_times); ?>
    </p>
</div>
