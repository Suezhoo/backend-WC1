<!DOCTYPE html>
<?php 
    include "geometry.php";
    include "string.php";
    include "eu.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend Exercises</title>
    <script src="index.js" type="module" defer></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="container d-flex flex-column justify-content-start align-items-center bg-dark text-white gap-5 mb-5">
    <h1 class="mt-5"><u>Backend Exercises</u></h1>
    <div class="dropdown ">
        <select name="dropdown" id="dropdown" class="btn btn-secondary">
            <optgroup class="text-start" label="Basic">
                <option class="text-start" value="" selected disabled hidden>Choose your exercise</option>
                <option class="text-start" value="oef1" id="1">Oef 1 - Constante en functie</option>
                <option class="text-start" value="oef2" id="2">Oef 2 - Meetkunde</option>
                <option class="text-start" value="oef3" id="3">Oef 3 - Globale variabelen</option>
                <option class="text-start" value="oef4" id="4">Oef 4 - Variabelen</option>
                <option class="text-start" value="oef5" id="5">Oef 5 - Controlestructuren A </option>
                <option class="text-start" value="oef6" id="6">Oef 6 - Controlestructuren B</option>
                <option class="text-start" value="oef7" id="7">Oef 7 - Date-object</option>
                <option class="text-start" value="oef8" id="8">Oef 8 - String</option>
                <option class="text-start" value="oef9" id="9">Oef 9 - Array </option>
            </optgroup> 
            <optgroup class="text-start" label="Extra">
                <option class="text-start" value="oef10" id="10">Oef 10 - Controlestructuren</option>
                <option class="text-start" value="oef11" id="11">Oef 11 - Strings</option>
                <option class="text-start" value="oef12" id="12">Oef 12 - Array </option>
                <option class="text-start" value="oef13" id="13">Oef 13 - Array </option>
                <option class="text-start" value="oef14" id="14">Oef 14 - Array </option>
            </optgroup>
        </select>
    </div>
    <div class="exercises d-flex w-75 flex-column align-items-center justify-content-center">
        <div class="exercise w-100 bg-light text-dark rounded p-3" id="oef1" style="display: none;">
            <h3>Exercise 1</h3>
           <?php 
                calcSurfaceCircle(4);
                function calcSurfaceCircle($r){
                    define("PI",3.14);
                    $surface = PI * ($r^2);
                    echo "The surface of a circle with radius \"$r\" is: $surface";
                }
           ?>  
        </div>
        <div class="exercise w-100 bg-light text-dark rounded p-3" id="oef2" style="display: none;">
            <h3>Exercise 2</h3>
                <table class="w-100">
                    <tr>
                        <th class="h3 py-2 border text-center">Figure</th>
                        <th class="h3 py-2 border text-center">Base</th>
                        <th class="h3 py-2 border text-center">Height</th>
                        <th class="h3 py-2 border text-center">Surface</th>
                    </tr>
                    <tr>
                        <td class="py-2 border text-center">Triangle</td>
                        <td class="py-2 border text-center">5</td>
                        <td class="py-2 border text-center">3</td>
                        <td class="py-2 border text-center"><?php echo calcSurfaceTriangle(5,3) ?></td>
                    </tr>
                    <tr>
                        <td class="py-2 border text-center">Square</td>
                        <td class="py-2 border text-center">6</td>
                        <td class="py-2 border text-center">6</td>
                        <td class="py-2 border text-center"><?php echo calcSurfaceSquare(6) ?></td>
                    </tr>
                    <tr>
                        <td class="py-2 border text-center">Retangle</td>
                        <td class="py-2 border text-center">7</td>
                        <td class="py-2 border text-center">4</td>
                        <td class="py-2 border text-center"><?php echo calcSurfaceRect(7,4) ?></td>
                    </tr>
                </table>
        </div>
        <div class="exercise w-100 bg-light text-dark rounded p-3" id="oef3" style="display: none;">
            <h3>Exercise 3</h3>
            <p>The functions have been called <?php echo $functionsExecutedCounter ?> times</p>
        </div>
        <div class="exercise w-100 bg-light text-dark rounded p-3" id="oef4" style="display: none;">
            <h3>Exercise 4</h3>
            <p>isset($variable1) == <?php $var1 = "Should print true"; echo isset($var1); ?></p>
            <p>isset($variable2) == <?php echo isset($var2); ?></p>
            <p>empty($variable3) == <?php echo empty($var3); ?></p>
            <p>empty($variable4) == <?php $var4 = "Should print false"; echo empty($var4); ?></p>
            <p>isset($variable5) == <?php $var5 = "Test"; echo isset($var5); ?> && empty($variable5) == <?php $var5 = "Test"; echo empty($var5); ?></p>
        </div>
        <div class="exercise w-100 bg-light text-dark rounded p-3" id="oef5" style="display: none;">
            <h3>Exercise 5</h3>
            <!-- <div class="input-group mb-3">
                <input type="number" id="number" class="form-control" placeholder="Number" aria-label="Number" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Submit</button>
            </div> -->
            <p><?php checkNumber(30) ?></p>
            <?php function checkNumber($n){
                $output = "The number is equal to";
                switch($n){
                    case 30:
                        echo "$output $n";
                        break;
                    case 20:
                        echo "$output $n";
                        break;
                    case 10:
                        echo "$output $n";
                        break;
                    default: 
                        echo "$output unknown";
                };
            }; ?>
        </div>
        <div class="exercise w-100 bg-light text-dark rounded p-3" id="oef6" style="display: none;">
            <h3>Exercise 6</h3>
            <p>The sum of all numbers starting from 1 until 30 = 
                <?php 
                    $i = 1;
                    $sum = 0;

                    do{
                        $sum += $i;
                        $i++;
                    } while($i<=30);
                    echo $sum
                ?>
        </div>
        <div class="exercise w-100 bg-light text-dark rounded p-3" id="oef7" style="display: none;">
            <h3>Exercise 7</h3>
            <p class="text-center">
                <?php 
                    echo date("l d/m/Y , H:i");
                    $month = date("F");
                    $season = "";
                    switch($month){
                        case "December":
                        case "January":
                        case "February":
                            $season = "Winter";
                            break;
                        case "March":
                        case "April":
                        case "May":
                            $season = "Spring";
                            break;
                        case "June":
                        case "July":
                        case "August":
                            $season = "Summer";
                            break;
                        case "September":
                        case "October":
                        case "November": 
                            $season = "Autumn";
                            break;
                        default: 
                            $season = "Summer";
                    }
                    echo "<br/> Current season: $season";
                ?>
            </p>
        </div>
        <div class="exercise w-100 bg-light text-dark rounded p-3" id="oef8" style="display: none;">
            <h3>Exercise 8</h3>
            <p><?php echo splitName("Stephan Van Hemelrijck"); echo joinNames("Stephan","Van Hemelrijck") ?></p>
        </div>
        <div class="exercise w-100 bg-light text-dark rounded p-3" id="oef9" style="display: none;">
            <h3>Exercise 9</h3>
            <h4>The European Union:</h4>
            <p><?php echo euStates()?></p>
        </div>
        <div class="exercise w-100 bg-light text-dark rounded p-3" id="oef10" style="display: none;"></div>
        <div class="exercise w-100 bg-light text-dark rounded p-3" id="oef11" style="display: none;"></div>
        <div class="exercise w-100 bg-light text-dark rounded p-3" id="oef12" style="display: none;"></div>
        <div class="exercise w-100 bg-light text-dark rounded p-3" id="oef13" style="display: none;"></div>
        <div class="exercise w-100 bg-light text-dark rounded p-3" id="oef14" style="display: none;"></div>
    </div>
        
    <!-- Bootstrap bundle with popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>