<x-site-layout>
    <?php


    function season($date){
        $month = (int)$date->format("m");

        if($month == 12 || $month == 1 ||$month == 2){
            $season = "Winter";
        }elseif($month == 3 ||$month == 4 || $month == 5){
            $season = "Lente";
        }elseif ($month == 6 || $month == 7 ||$month == 8){
            $season = "Zomer";
        }elseif ($month == 9 ||$month == 10 || $month == 11){
            $season = "Herfst";
        };

        echo  "<br>" . $season;

    }

    date_default_timezone_set("Europe/Brussels");

    $date = new DateTime();


    $formattedDate = $date->format("Y-m-d");


    $formattedDateWithTime = $date->format("Y-m-d H:i:s");


    $formatter = new IntlDateFormatter(
        "nl_BE",
        IntlDateFormatter::FULL,
        IntlDateFormatter::MEDIUM,
        null,
        null,
        "EEEE yyyy-MM-dd, HH:mm:ss"
    );

    $formattedDateWithDayAndTime = $formatter->format($date);


    echo $formattedDate;
    season($date);
    echo '<br>';
    echo $formattedDateWithTime;
    season($date);
    echo '<br>';
    echo $formattedDateWithDayAndTime;
    season($date);

    ?>
</x-site-layout>


