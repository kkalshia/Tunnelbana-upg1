<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Document</title>
</head>
<body>
    <form action ="#" method="post">
        <label for="start">From: </label>
        <select name="start">
            <!-- <option selected="selected">Choose one</option> -->
            <?php
                $linje19 = ['Hagsätra', 'Rågsved', 'Högdalen', 'Bandhagen', 'Stureby', 'Svedmyra', 'Sockenplan', 'Enskede Gård', 'Globen', 'Gullmarsplan', 'Skanstull', 'Medborgarplatsen', 'Slussen', 'Gamla Stan', 'T-Centralen', 'Hötorget', 'Rådmansgatan',
                'Odenplan', 'S:T Eriksplan', 'Fridhemsplan', 'Thorildsplan', 'Kristineberg', 'Alvik', 'Stora Mossen', 'Abrahamsberg', 'Brommaplan', 'Åkeshov', 'Ängbyplan', 'Islandstorget', 'Blackeberg', 'Råcksta', 'Vällingby', 'Johannelund', 'Hässelby Gård', 'Hässelby Strand'];
        
                foreach($linje19 as $station){
                
                    echo "<option value='$station'>$station</option>";
                }
            ?>
        </select>
        <br><br>
        <label for="end">To:   </label>
        <select name="end">
            <!-- <option selected="selected">Choose one</option> -->
            <?php
                $linje19 = ['Hagsätra', 'Rågsved', 'Högdalen', 'Bandhagen', 'Stureby', 'Svedmyra', 'Sockenplan', 'Enskede Gård', 'Globen', 'Gullmarsplan', 'Skanstull', 'Medborgarplatsen', 'Slussen', 'Gamla Stan', 'T-Centralen', 'Hötorget', 'Rådmansgatan',
                'Odenplan', 'S:T Eriksplan', 'Fridhemsplan', 'Thorildsplan', 'Kristineberg', 'Alvik', 'Stora Mossen', 'Abrahamsberg', 'Brommaplan', 'Åkeshov', 'Ängbyplan', 'Islandstorget', 'Blackeberg', 'Råcksta', 'Vällingby', 'Johannelund', 'Hässelby Gård', 'Hässelby Strand'];
        
                foreach($linje19 as $station){
                    echo "<option value='$station'>$station</option>";
                }
            ?>
        </select>
        <br><br>
        <input type="submit" value="Count" name="count">
    </form>
    
    <?php
        if (isset($_POST["count"])) {
            $start = $_POST["start"];
            $end = $_POST["end"];
            
            if ($start != $end) {
                $startKey = array_search($start, $linje19);
                $endKey = array_search($end, $linje19);

                $time = abs($endKey - $startKey) * 3;

                echo "From $start to $end it takes $time minutes.";
            }
            else 
            {
                echo "<br><br><br><br><br><br><div>Your start and end destination is the same.</div>";
            }
        }
    ?>
</body>
</html>