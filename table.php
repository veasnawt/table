<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<meta charset="utf-8">
	<style>
      body {
        font-family: sans-serif;
      }
      table {
        border-collapse: collapse;
      }
      div {
        width: 300px;
        height: 40px;
        padding-top: 20px;
        text-align: center;
        color: #fff;
        font-size: 20px;
      }
      tr , td {
        text-align: center;
        height: 30px;
      }
			.DarkBrown {
				background: #6d583f;
			}
			.LightBrown {
				background: #c5b7a5;
			}
			.ExtraLightBrown {
				background: #e1dad0;
			}
      .Red {
        background: red;
      }
      .Green {
        background: green;
      }
      .Blue {
        background: blue;
      }
      .Brown {
        background: brown;
      }
			.Yellow {
				background: yellow;
			}
			.Pink {
				background: pink;
			}
			.Orange {
				background: orange;
			}
	</style>
</head>
<body>

	<?php

		 $Information = array (
			 							array("No.","Name","Gender","Age","Height(m)","Weight(kg)"),
                    array(1,"Som Eurn","Male",56,1.69,90),
                    array(2,"Sa Veourn","Female",54,1.55,60),
                    array(3,"Chan Dara","Male",30,1.72,65),
                    array(4,"Chan Thyda","Female",27,1.60,61),
                    array(5,"Chan Siheng","Male",25,1.65,70),
                    array(6,"Chan Bopha","Female",20,1.60,46)
                  );
		 $Favorite = array (
			 					 array("No.","Name","Color"),
                 array(1,"Som Eurn","Green"),
                 array(2,"Sa Veourn","Orange"),
                 array(3,"Chan Dara","Blue"),
                 array(4,"Chan Thyda","Red"),
                 array(5,"Chan Siheng","Yellow"),
                 array(6,"Chan Bopha","Pink")
               );

	 	 echo "<table class='border' border='1' width='900'>";
		 	 			$bd = "";
            for($i = 0; $i < 7; $i++){
              echo "<tr>";
                for($j = 0; $j < 6; $j++){
									if($i == 0 || $j == 0){
										$bd = "th class='DarkBrown'";
									}else if ($i % 2 == 0){
										$bd = "td class='LightBrown'";
									}else {
										$bd = "td class='ExtraLightBrown'";
									}
                  echo "<$bd>" . $Information[$i][$j] . "</$bd>";
                }
              echo "</tr>";
            }
			echo "
      </table>
      <br>
      <table class='border' border='1' width='500' >
			";
    for($i = 0; $i < 7; $i++){
      echo "<tr>";
        for($j = 0; $j < 3; $j++){
					if($i == 0 || $j == 0){
						$bd = "th class='DarkBrown'";
					}else if ($i % 2 == 0){
						$bd = "td class='LightBrown'";
					}else {
						$bd = "td class='ExtraLightBrown'";
					}
          echo "<$bd>" . $Favorite[$i][$j] . "</$bd>";
        }
      echo "</tr>";
    }

	echo "<table>";
  echo "<br>";
  $random = rand(1, 5);
	$color = "";
	for($i = 1; $i < 6; $i++){
		if($random == $i){
			$color = $Favorite[$i][2];
		}
	}

  $BMI = ($Information[$random][5])/(($Information[$random][4])*($Information[$random][4]));

	echo "Random: ";
  echo "<table border='1' width='500' class='$color'>";
    for($i = 1; $i < 6; $i++){
      echo "<tr>" . "<th>" . $Information[0][$i] . "</th>" .
      "<td>" . $Information[$random][$i] . "</td>";
      echo "</tr>";
    }
  echo "</table>";

  echo "<br>";

  if($BMI < 18.5){
         echo "<div class='Red'>" . $Information[$random][1] . " is Underweight. </div>";
       }
       else if($BMI >= 18.5 && $BMI < 25){
         echo "<div class='Green'>" . $Information[$random][1] . " is Normal Weight. </div>";
       }
       else if($BMI >= 25 && $BMI < 30){
         echo "<div class='Blue'>" . $Information[$random][1] . " is Overweight. </div>";
       }
       else if($BMI >= 30){
         echo "<div class='Brown'>" . $Information[$random][1] . " is Obesity. </div>";
       }
  ?>

</body>
</html>
