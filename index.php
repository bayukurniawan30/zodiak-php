<?php
    $name   = isset($_POST['name']) ? $_POST['name'] : NULL;
    if ($name != NULL) {
        $dob    = isset($_POST['birth']) ? date('Y-m-d', strtotime($_POST['birth'])) : NULL;
        $yob    = isset($_POST['birth']) ? date('Y', strtotime($_POST['birth'])) : NULL;
        $submit = isset($_POST['submit']) ? $_POST['submit'] : NULL;

        function checkInRange($start, $end, $dob) {
            // Convert to timestamp
            $startTs = strtotime($start);
            $endTs   = strtotime($end);
            $userTs  = strtotime($dob);

            // Check that user date is between start & end
            return (($userTs >= $startTs) && ($userTs <= $endTs));
        }

        $age = date_diff(date_create($dob), date_create('now'))->y;

        // Aries
        // 21 Maret - 19 April
        $ariesStart = $yob . '-03-21';
        $ariesEnd   = $yob . '-04-19';
        if (checkInRange($ariesStart, $ariesEnd, $dob)) {
            $zodiak = 'Aries';
        }

        // Taurus
        // 20 April - 20 Mei
        $taurusStart = $yob . '-04-20';
        $taurusEnd   = $yob . '-05-20';
        if (checkInRange($taurusStart, $taurusEnd, $dob)) {
            $zodiak = 'Taurus';
        }

        // Gemini
        // 21 Mei - 20 Juni
        $geminiStart = $yob . '-05-21';
        $geminiEnd   = $yob . '-06-20';
        if (checkInRange($geminiStart, $geminiEnd, $dob)) {
            $zodiak = 'Gemini';
        }

        // Cancer
        // 21 Juni - 22 Juli	
        $cancerStart = $yob . '-06-21';
        $cancerEnd   = $yob . '-07-22';
        if (checkInRange($cancerStart, $cancerEnd, $dob)) {
            $zodiak = 'Cancer';
        }

        // Leo
        // 23 Juli - 22 Agustus	
        $leoStart = $yob . '-07-23';
        $leoEnd   = $yob . '-08-22';
        if (checkInRange($leoStart, $leoEnd, $dob)) {
            $zodiak = 'Leo';
        }

        // Virgo
        // 23 Agustus - 22 September	
        $virgoStart = $yob . '-08-23';
        $virgoEnd   = $yob . '-09-22';
        if (checkInRange($virgoStart, $virgoEnd, $dob)) {
            $zodiak = 'Virgo';
        }

        // Libra
        // 23 September - 22 Oktober	
        $libraStart = $yob . '-09-23';
        $libraEnd   = $yob . '-10-22';
        if (checkInRange($libraStart, $libraEnd, $dob)) {
            $zodiak = 'Libra';
        }

        // Skorpio
        // 23 Oktober - 21 November	
        $scStart = $yob . '-10-23';
        $scEnd   = $yob . '-11-21';
        if (checkInRange($scStart, $scEnd, $dob)) {
            $zodiak = 'Skorpio';
        }

        // Sagitarius
        // 22 November - 21 Desember		
        $sgStart = $yob . '-11-22';
        $sgEnd   = $yob . '-12-21';
        if (checkInRange($sgStart, $sgEnd, $dob)) {
            $zodiak = 'Sagitarius';
        }

        // Capricorn
        // 22 Desember - 19 Januari		
        $lastYear = $yob - 1;
        $cprStart = $lastYear . '-12-22';
        $cprEnd   = $yob . '-01-19';
        if (checkInRange($cprStart, $cprEnd, $dob)) {
            $zodiak = 'Capricorn';
            
        }

        // Akuarius
        // 20 Januari - 18 Februari		
        $aqStart = $yob . '-01-28';
        $aqEnd   = $yob . '-02-18';
        if (checkInRange($aqStart, $aqEnd, $dob)) {
            $zodiak = 'Akuarius';
        }

        // Pisces
        // 19 Februari - 20 Maret		
        $piscesStart = $yob . '-02-19';
        $piscesEnd   = $yob . '-03-20';
        if (checkInRange($piscesStart, $piscesEnd, $dob)) {
            $zodiak = 'Pisces';
        }

        // .....................
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Zodiak</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.7/dist/css/uikit.min.css" />
        <style>
            body {
                overflow: hidden;
                background: #ffffff;
            }
        </style>
    </head>
    <body>
        <div class="uk-flex uk-flex-center uk-flex-middle" uk-height-viewport>
            <div style="margin-top: 100px;">
                <div class="uk-card uk-card-default uk-card-body">
                    <h3>Zodiak</h3>
                    <?php
                        if ($name == NULL):
                    ?>
                    <form action="" method="post">
                        <div class="uk-margin">
                            <input class="uk-input" type="text" name="name" placeholder="Your Name">
                        </div>
                        <div class="uk-margin">
                            <input class="uk-input" type="date" name="birth" placeholder="Date of Birth">
                        </div>
                        <div class="uk-margin">
                            <button class="uk-button uk-button-primary" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                    <?php
                        else:
                    ?>
                        <dl class="uk-description-list">
                            <dt>Your Name</dt>
                            <dd><?= $name ?></dd>
                            <dt>Your Age</dt>
                            <dd><?= $age ?></dd>
                            <dt>Zodiak</dt>
                            <dd><?= $zodiak ?></dd>
                        </dl>
                    <?php
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>