<?php

use Dom\Document;
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Diary</title>
    <link rel="stylesheet" href="diary.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Allura&family=Hind+Mysuru:wght@300;400;500;600;700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Mrs+Saint+Delafield&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=SUSE:wght@100..800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Allura&family=Hind+Mysuru:wght@300;400;500;600;700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Mrs+Saint+Delafield&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playwrite+AU+QLD:wght@100..400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=SUSE:wght@100..800&display=swap"
        rel="stylesheet">
    <script src="diary.js"></script>
</head>

<body>

    <div id="box_body">
        <div id="box">
            <div id="page">
                <p id="heading">Eco Diary</p>
                <p id="date_text" id="">0000-00-00</p>
                <br>
                <div id="main">
                    <div class="row"></div>
                    <div class="row">
                        <p class="row_text">1.Turned off lights and fans when not in use: <B class="row_record"
                                id="n1">0</B></p>
                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <p class="row_text">2.Avoided using plastic bottles: <B class="row_record" id="n2">0</B></p>
                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <p class="row_text">3.Used a reusable cloth bag: <B class="row_record" id="n3">0</B></p>
                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <p class="row_text">4.Ate a plant-based meal (skipped meat): <B class="row_record"
                                id="n4">0</B></p>
                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <p class="row_text">5.Took public transport or shared a ride: <B class="row_record"
                                id="n5">0</B></p>
                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <p class="row_text">6.Used a bicycle or walked instead of using a vehicle: <B class="row_record"
                                id="n6">0</B></p>
                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <p class="row_text">7.Composted food waste: <B class="row_record" id="n7">0</B></p>
                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <p class="row_text">8.Avoided packaged snacks/bottled drinks: <B class="row_record"
                                id="n8">0</B></p>
                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <p class="row_text">9.Took a short shower (under 5 minutes): <B class="row_record"
                                id="n9">0</B></p>
                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <p class="row_text">10.Carried a reusable water bottle: <B class="row_record" id="n10">0</B>
                        </p>
                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <p class="row_text">11.Recycled paper, cans, or bottles: <B class="row_record" id="n11">0</B>
                        </p>
                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <p class="row_text">12.Reused old items or clothes: <B class="row_record" id="n12">0</B></p>
                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <p class="row_text">13.Kept AC off or used above 24°C: <B class="row_record" id="n13">0</B></p>
                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <p class="row_text">14.Planted or watered a plant: <B class="row_record" id="n14">0</B></p>
                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <p class="row_text">15.Turned off tap while brushing teeth: <B class="row_record"
                                id="n15">0</B></p>
                    </div>
                    <div class="row"></div>
                    <div class="row"></div>
                    <div class="row"></div>
                    <br>
                    <br>



                </div>
                <br>
                <br>
                <form action="" method="post" id="change_date">
                    <input type="date" id="date" name="date">
                    <br>
                    <button id="button" onclick="tap()">Change Date</button>

                    <br>
                </form>

                <script>
                    function tap() {
                        // Set flag before navigating
                        sessionStorage.setItem("from_home_button", "true");
                        window.location.href = "diary.php";
                    }
                </script>





            </div>
            <br>
            <br>


        </div>
        <br>
        <br>

    </div>
    <br>
    <br>






    <br>
    <br>

</body>

</html>


<?php

include "db.php";
$key = $_SESSION['pass_key'];

if (isset($_POST['date'])) {
    $date = $_POST['date'];

    try {
        $result = $conn->prepare('SELECT data_json FROM record WHERE pass=:pass AND record_dat=:datee');
        $result->bindParam(':pass', $key);
        $result->bindParam(':datee', $date);
        $result->execute();
        $x = $result->fetchAll();

        if (empty($x)) {
            echo "<script>alert('No record found for the selected date. Enter Valid Date:');</script>";
        } else {
            $y = $x[0]['data_json'];
            $data = json_decode($y, true);

            echo ("
                <script>
                document.getElementById('date_text').innerHTML = '" . $date . "';

                let n1 = document.getElementById('n1');
                let n2 = document.getElementById('n2');
                let n3 = document.getElementById('n3');
                let n4 = document.getElementById('n4');
                let n5 = document.getElementById('n5');
                let n6 = document.getElementById('n6');
                let n7 = document.getElementById('n7');
                let n8 = document.getElementById('n8');
                let n9 = document.getElementById('n9');
                let n10 = document.getElementById('n10');
                let n11 = document.getElementById('n11');
                let n12 = document.getElementById('n12');
                let n13 = document.getElementById('n13');
                let n14 = document.getElementById('n14');
                let n15 = document.getElementById('n15');

                n1.innerHTML = {$data['a']};
                n2.innerHTML = {$data['aa']};
                n3.innerHTML = {$data['b']};
                n4.innerHTML = {$data['c']};
                n5.innerHTML = {$data['d']};
                n6.innerHTML = {$data['e']};
                n7.innerHTML = {$data['f']};
                n8.innerHTML = {$data['g']};
                n9.innerHTML = {$data['h']};
                n10.innerHTML = {$data['i']};
                n11.innerHTML = {$data['j']};
                n12.innerHTML = {$data['k']};
                n13.innerHTML = {$data['l']};
                n14.innerHTML = {$data['m']};
                n15.innerHTML = {$data['n']};
                </script>
            ");
        }
    } catch (PDOException $e) {
        echo "<script>alert('Error fetching data');</script>";
        // Log error if needed
    }
}



?>