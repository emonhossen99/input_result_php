<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form class="loginForm" name="message" method="post" action="http://localhost/pactices/input-result-system_2/input_from_php.php">
        Bangla 1st Paper : <input type="number" name="Bangla_1st_Paper" id="Bangla_1st_Paper" require />
        <p>
            Bangla 2nd Paper : <input type="number" name="Bangla_2nd_Paper" id="Bangla_2nd_Paper" require />
        <p>
            English 1st Paper : <input type="number" name="English_1st_Paper" id="English_1st_Paper" require />
        <p>
            English 2nd Paper : <input type="number" name="English_2nd_Paper" id="English_2nd_Paper" require />
        <p>
            Mathematics : <input type="number" name="Mathematics" id="Mathematics" require />
        <p>
            Higher Math : <input type="number" name="Higher_Math" id="Higher_Math" require />
        <p>
            Biology : <input type="number" name="Biology" id="Biology" require />
        <p>
            Physic : <input type="number" name="Physic" id="Physic" require />
        <p>
            Chemistry : <input type="number" name="Chemistry" id="Chemistry" require />
        <p>
            Social Science : <input type="number" name="Social_Science" id="Social Science" require />
        <p>
            Islam Science : <input type="number" name="Islam_Science" id="Islam_Science" require />
        <p>
            <input type="submit" name="submit" class="submitButton" value="Submit"></input>
            <?php
            $Bangla_1st_Paper = $_POST['Bangla_1st_Paper'];
            $Bangla_2nd_Paper = $_POST['Bangla_2nd_Paper'];
            $English_1st_Paper = $_POST['English_1st_Paper'];
            $English_2nd_Paper = $_POST['English_2nd_Paper'];
            $Mathematics = $_POST['Mathematics'];
            $Higher_Math = $_POST['Higher_Math'];
            $Biology = $_POST['Biology'];
            $Physic = $_POST['Physic'];
            $Chemistry = $_POST['Chemistry'];
            $Social_Science = $_POST['Social_Science'];
            $Islam_Science = $_POST['Islam_Science'];

            ?>
    </form>

    <div class="phpForm">
        <h1 class="title">SSC Result In 2022</h1>
        <?php
        echo "<link rel='stylesheet' type='text/css' href='php_style.css' />";

        // bangla first paper 
        $bangla_1;
        $check_Bangla_1st_Paper = strlen($Bangla_1st_Paper);
        if ($check_Bangla_1st_Paper == 0) {
            $bangla_1 = 0;
            echo ("<p class='errorbangla_1'>This Field is Require In Bangla_1st_Paper</br>");
        } else {
            $bangla_1 = $Bangla_1st_Paper;
            if ($bangla_1 >= 80 && $bangla_1 <= 100) {
                echo ("Bangla 1st Paper : A+ </br>");
            } else if ($bangla_1 >= 70 && $bangla_1 <= 79) {
                echo ("Bangla 1st Paper : A </br>");
            } else if ($bangla_1 >= 60 && $bangla_1 <= 69) {
                echo ("Bangla 1st Paper : A- </br>");
            } else if ($bangla_1 >= 50 && $bangla_1 <= 59) {
                echo ("Bangla 1st Paper : B </br>");
            } else if ($bangla_1 >= 40 && $bangla_1 <= 49) {
                echo ("Bangla 1st Paper : C </br>");
            } else if ($bangla_1 >= 33 && $bangla_1 <= 39) {
                echo ("Bangla 1st Paper : D </br>");
            } else if ($bangla_1 >= 00 && $bangla_1 <= 32) {
                echo ("Bangla 1st Paper : F </br>");
            } else {
                echo ('Invalid Number');
            }
        }

        // bangla second paper 
        $bangla_2;
        $check = strlen($Bangla_2nd_Paper);
        if ($check == 0) {
            $bangla_2 = 0;
            echo ("<p class='errorbangla_2'>This Field is Require In Bangla_2nd_Paper</br>");
        } else {
            $bangla_2 = $Bangla_2nd_Paper;
            if ($bangla_2 >= 80 && $bangla_2 <= 100) {
                echo ("Bangla 2st Paper : A+ </br>");
            } else if ($bangla_2 >= 70 && $bangla_2 <= 79) {
                echo ("Bangla 2st Paper : A </br>");
            } else if ($bangla_2 >= 60 && $bangla_2 <= 69) {
                echo ("Bangla 2st Paper : A- </br>");
            } else if ($bangla_2 >= 50 && $bangla_2 <= 59) {
                echo ("Bangla 2st Paper : B </br>");
            } else if ($bangla_2 >= 40 && $bangla_2 <= 49) {
                echo ("Bangla 2st Paper : C </br>");
            } else if ($bangla_2 >= 33 && $bangla_2 <= 39) {
                echo ("Bangla 2st Paper : D </br>");
            } else if ($bangla_2 >= 00 && $bangla_2 <= 32) {
                echo ("Bangla 2st Paper : F </br>");
            } else {
                echo ('Invalid Number');
            }
        }


        //over all bangla
        $over_bangla = $bangla_1 + $bangla_2;
        $over_bangla_value = 0;
        if ($over_bangla >= 160 && $over_bangla <= 200) {
            echo ("Overall Bangla : A+ </br>");
            $over_bangla_value = 5;
        } else if ($over_bangla >= 140 && $over_bangla <= 159) {
            echo ("Overall Bangla : A </br>");
            $over_bangla_value = 4;
        } else if ($over_bangla >= 120 && $over_bangla <= 139) {
            echo ("Overall Bangla : A- </br>");
            $over_bangla_value = 3.5;
        } else if ($over_bangla >= 100 && $over_bangla <= 119) {
            echo ("Overall Bangla : B </br>");
            $over_bangla_value = 3;
        } else if ($over_bangla >= 80 && $over_bangla <= 99) {
            echo ("Overall Bangla : C </br>");
            $over_bangla_value = 2;
        } else if ($over_bangla >= 60 && $over_bangla <= 79) {
            echo ("Overall Bangla : D </br>");
            $over_bangla_value = 1;
        } else if ($over_bangla >= 40 && $over_bangla <= 59) {
            echo ("Overall Bangla : F </br>");
            $over_bangla_value = 0;
        } else {
            $over_bangla_value;
        }



        // english first paper 

        $english_1;
        $check_English_1st_Paper = strlen($English_1st_Paper);
        if ($check_English_1st_Paper == 0) {
            $english_1 = 0;
            echo ("<p class='errorenglish_1'>This Field is Require In English_1st_Paper</br>");
        } else {
            $english_1 = $English_1st_Paper;
            if ($english_1 >= 80 && $english_1 <= 100) {
                echo ("English 1st Paper : A+ </br>");
            } else if ($english_1 >= 70 && $english_1 <= 79) {
                echo ("English 1st Paper : A </br>");
            } else if ($english_1 >= 60 && $english_1 <= 69) {
                echo ("English 1st Paper : A- </br>");
            } else if ($english_1 >= 50 && $english_1 <= 59) {
                echo ("English 1st Paper : B </br>");
            } else if ($english_1 >= 40 && $english_1 <= 49) {
                echo ("English 1st Paper : C </br>");
            } else if ($english_1 >= 33 && $english_1 <= 39) {
                echo ("English 1st Paper : D </br>");
            } else if ($english_1 >= 00 && $english_1 <= 32) {
                echo ("English 1st Paper : F </br>");
            } else {
                echo ('Invalid Number');
            }
        }



        //english second paper 
        $english_2;

        $check_English_2nd_Paper = strlen($English_2nd_Paper);
        if ($check_English_2nd_Paper == 0) {
            $english_2 = 0;
            echo ("<p class='errorenglish_2'>This Field is Require In English_2nd_Paper</br>");
        } else {
            $english_2 = $English_2nd_Paper;
            if ($english_2 >= 80 && $english_2 <= 100) {
                echo ("English 2nd Paper : A+ </br>");
            } else if ($english_2 >= 70 && $english_2 <= 79) {
                echo ("English 2nd Paper : A </br>");
            } else if ($english_2 >= 60 && $english_2 <= 69) {
                echo ("English 2nd Paper : A- </br>");
            } else if ($english_2 >= 50 && $english_2 <= 59) {
                echo ("English 2nd Paper : B </br>");
            } else if ($english_2 >= 40 && $english_2 <= 49) {
                echo ("English 2nd Paper : C </br>");
            } else if ($english_2 >= 33 && $english_2 <= 39) {
                echo ("English 2nd Paper : D </br>");
            } else if ($english_2 >= 00 && $english_2 <= 32) {
                echo ("English 2nd Paper : F </br>");
            } else {
                echo ('Invalid Number');
            }
        }

        //over all english
        $over_english = $english_2 + $english_2;
        $over_english_value = 0;
        if ($over_english >= 160 && $over_english <= 200) {
            echo ("Overall English : A+ </br>");
            $over_english_value = 5;
        } else if ($over_english >= 140 && $over_english <= 159) {
            echo ("Overall English : A </br>");
            $over_english_value = 4;
        } else if ($over_english >= 120 && $over_english <= 139) {
            echo ("Overall English : A- </br>");
            $over_english_value = 3.5;
        } else if ($over_english >= 100 && $over_english <= 119) {
            echo ("Overall English : B </br>");
            $over_english_value = 3;
        } else if ($over_english >= 80 && $over_english <= 99) {
            echo ("Overall English : C </br>");
            $over_english_value = 2;
        } else if ($over_english >= 60 && $over_english <= 79) {
            echo ("Overall English : D </br>");
            $over_english_value = 1;
        } else if ($over_english >= 40 && $over_english <= 59) {
            echo ("Overall English : F </br>");
            $over_english_value = 0;
        } else {
            $over_english_value;
        }


        // Mathematics
        $Mathematics = $Mathematics;
        $Mathematics_value = 0;
        $check_Mathematics = strlen($Mathematics);
        if ($check_Mathematics == 0) {
            echo ("<p class='errorMathematics'>This Field is Require In Mathematics</br>");
        } else {
            if ($Mathematics >= 80 && $Mathematics <= 100) {
                echo ("Mathematics : A+ </br>");
                $Mathematics_value = 5;
            } else if ($Mathematics >= 70 && $Mathematics <= 79) {
                echo ("Mathematics : A </br>");
                $Mathematics_value = 4;
            } else if ($Mathematics >= 60 && $Mathematics <= 69) {
                echo ("Mathematics : A- </br>");
                $Mathematics_value = 3.5;
            } else if ($Mathematics >= 50 && $Mathematics <= 59) {
                echo ("Mathematics : B </br>");
                $Mathematics_value = 3;
            } else if ($Mathematics >= 40 && $Mathematics <= 49) {
                echo ("Mathematics : C </br>");
                $Mathematics_value = 2;
            } else if ($Mathematics >= 33 && $Mathematics <= 39) {
                echo ("Mathematics : D </br>");
                $Mathematics_value = 1;
            } else if ($Mathematics >= 00 && $Mathematics <= 32) {
                echo ("Mathematics : F </br>");
                $Mathematics_value = 0;
            } else {
                echo ('Invalid Number');
                $Mathematics_value;
            }
        }


        //Higher Math
        $H_Math = $Higher_Math;
        $Higher_Math_value = 0;
        $check_H_Math = strlen($H_Math);
        if ($check_H_Math == 0) {
            echo ("<p class='errorHigher_Math'>This Field is Require In Higher_Math</br>");
        } else {
            if ($H_Math >= 80 && $H_Math <= 100) {
                echo ("Higher Math : A+ </br>");
                $Higher_Math_value = 5;
            } else if ($H_Math >= 70 && $H_Math <= 79) {
                echo ("Higher Math : A </br>");
                $Higher_Math_value = 4;
            } else if ($H_Math >= 60 && $H_Math <= 69) {
                echo ("Higher Math : A- </br>");
                $Higher_Math_value = 3.5;
            } else if ($H_Math >= 50 && $H_Math <= 59) {
                echo ("Higher Math : B </br>");
                $Higher_Math_value = 3;
            } else if ($H_Math >= 40 && $H_Math <= 49) {
                echo ("Higher Math : C </br>");
                $Higher_Math_value = 2;
            } else if ($H_Math >= 33 && $H_Math <= 39) {
                echo ("Higher Math : D </br>");
                $Higher_Math_value = 1;
            } else if ($H_Math >= 00 && $H_Math <= 32) {
                echo ("Higher Math : F </br>");
                $Higher_Math_value = 0;
            } else {
                echo ('Invalid Number');
                $Higher_Math_value;
            }
        }

        //biology
        $biology = $Biology;
        $biology_value = 0;
        $check_biology = strlen($biology);
        if ($check_biology == 0) {
            echo ("<p class='errorBiology'>This Field is Require In Biology</br>");
        } else {
            if ($biology >= 80 && $biology <= 100) {
                echo ("Biology : A+ </br>");
                $biology_value = 5;
            } else if ($biology >= 70 && $biology <= 79) {
                echo ("Biology : A </br>");
                $biology_value = 4;
            } else if ($biology >= 60 && $biology <= 69) {
                echo ("Biology : A- </br>");
                $biology_value = 3.5;
            } else if ($biology >= 50 && $biology <= 59) {
                echo ("Biology : B </br>");
                $biology_value = 3;
            } else if ($biology >= 40 && $biology <= 49) {
                echo ("Biology : C </br>");
                $biology_value = 2;
            } else if ($biology >= 33 && $biology <= 39) {
                echo ("Biology : D </br>");
                $biology_value = 1;
            } else if ($biology >= 00 && $biology <= 32) {
                echo ("Biology : F </br>");
                $biology_value = 0;
            } else {
                echo ('Invalid Number');
                $biology_value;
            }
        }

        //physic
        $physic = $Physic;
        $physic_value = 0;
        $check_physic = strlen($physic);
        if ($check_physic == 0) {
            echo ("<p class='errorPhysic'>This Field is Require In Physic</br>");
        } else {
            if ($physic >= 80 && $physic <= 100) {
                echo ("Physic : A+ </br>");
                $physic_value = 5;
            } else if ($physic >= 70 && $physic <= 79) {
                echo ("Physic : A </br>");
                $physic_value = 4;
            } else if ($physic >= 60 && $physic <= 69) {
                echo ("Physic : A- </br>");
                $physic_value = 3.5;
            } else if ($physic >= 50 && $physic <= 59) {
                echo ("Physic : B </br>");
                $physic_value = 3;
            } else if ($physic >= 40 && $physic <= 49) {
                echo ("Physic : C </br>");
                $physic_value = 2;
            } else if ($physic >= 33 && $physic <= 39) {
                echo ("Physic : D </br>");
                $physic_value = 1;
            } else if ($physic >= 00 && $physic <= 32) {
                echo ("Physic : F </br>");
                $physic_value = 0;
            } else {
                echo ('Invalid Number');
                $physic_value;
            }
        }

        //Chemistry
        $Chemistry = $Chemistry;
        $Chemistry_value = 0;
        $check_Chemistry = strlen($Chemistry);
        if ($check_Chemistry == 0) {
            echo ("<p class='errorChemistry'>This Field is Require In Chemistry</br>");
        } else {
            if ($Chemistry >= 80 && $Chemistry <= 100) {
                echo ("Chemistry : A+ </br>");
                $Chemistry_value = 5;
            } else if ($Chemistry >= 70 && $Chemistry <= 79) {
                echo ("Chemistry : A </br>");
                $Chemistry_value = 4;
            } else if ($Chemistry >= 60 && $Chemistry <= 69) {
                echo ("Chemistry : A- </br>");
                $Chemistry_value = 3.5;
            } else if ($Chemistry >= 50 && $Chemistry <= 59) {
                echo ("Chemistry : B </br>");
                $Chemistry_value = 3;
            } else if ($Chemistry >= 40 && $Chemistry <= 49) {
                echo ("Chemistry : C </br>");
                $Chemistry_value = 2;
            } else if ($Chemistry >= 33 && $Chemistry <= 39) {
                echo ("Chemistry : D </br>");
                $Chemistry_value = 1;
            } else if ($Chemistry >= 00 && $Chemistry <= 32) {
                echo ("Chemistry : F </br>");
                $Chemistry_value = 0;
            } else {
                echo ('Invalid Number');
                $Chemistry_value;
            }
        }


        //Social_Science
        $social_science = $Social_Science;
        $Social_Science_Value = 0;
        $check_social_science = strlen($social_science);
        if ($check_social_science == 0) {
            echo ("<p class='errorSocial_Science'>This Field is Require In Social_Science</br>");
        } else {
            if ($social_science >= 80 && $social_science <= 100) {
                echo ("Social_Science : A+ </br>");
                $Social_Science_Value = 5;
            } else if ($social_science >= 70 && $social_science <= 79) {
                echo ("Social_Science : A </br>");
                $Social_Science_Value = 4;
            } else if ($social_science >= 60 && $social_science <= 69) {
                echo ("Social_Science : A- </br>");
                $Social_Science_Value = 3.5;
            } else if ($social_science >= 50 && $social_science <= 59) {
                echo ("Social_Science : B </br>");
                $Social_Science_Value = 3;
            } else if ($social_science >= 40 && $social_science <= 49) {
                echo ("Social_Science : C </br>");
                $Social_Science_Value = 2;
            } else if ($social_science >= 33 && $social_science <= 39) {
                echo ("Social_Science : D </br>");
                $Social_Science_Value = 1;
            } else if ($social_science >= 00 && $social_science <= 32) {
                echo ("Social_Science : F </br>");
                $Social_Science_Value = 0;
            } else {
                echo ('Invalid Number');
                $Social_Science_Value;
            }
        }

        //Islam
        $islam = $Islam_Science;
        $Islam_value = 0;
        $check_islam = strlen($islam);
        if ($check_islam == 0) {
            echo ("<p class='errorIslam_Science'>This Field is Require In Islam_Science</br>");
        } else {
            if ($islam >= 80 && $islam <= 100) {
                echo ("Islam : A+ </br>");
                $Islam_value = 5;
            } else if ($islam >= 70 && $islam <= 79) {
                echo ("Islam : A </br>");
                $Islam_value = 4;
            } else if ($islam >= 60 && $islam <= 69) {
                echo ("Islam : A- </br>");
                $Islam_value = 3.5;
            } else if ($islam >= 50 && $islam <= 59) {
                echo ("Islam : B </br>");
                $Islam_value = 3;
            } else if ($islam >= 40 && $islam <= 49) {
                echo ("Islam : C </br>");
                $Islam_value = 2;
            } else if ($islam >= 33 && $islam <= 39) {
                echo ("Islam : D </br>");
                $Islam_value = 1;
            } else if ($islam >= 00 && $islam <= 32) {
                echo ("Islam : F </br>");
                $Islam_value = 0;
            } else {
                echo ('Invalid Number');
                $Islam_value;
            }
        }


        if ($over_bangla_value == 0 || $over_english_value  == 0 || $Mathematics_value  == 0 || $Higher_Math_value   == 0 || $biology_value  == 0 || $physic_value  == 0 || $Chemistry_value  == 0 || $Social_Science_Value  == 0 || $Islam_value  == 0) {
            echo ("Overall Result : Failed </br>");
            echo ("Your Grade is : F </br>");
        } else {
            // in_total_mark
            $total_value = $over_bangla_value + $over_english_value + $Mathematics_value + $Higher_Math_value + $biology_value + $physic_value + $Chemistry_value + $Social_Science_Value + $Islam_value;


            //division by all subject
            $total_result_value = ($total_value / 9);

            //slice to two number
            $slice_result = number_format((float)$total_result_value, 2, '.', '');

            //output overall result
            echo ("Overall Result : $slice_result </br>");

            if ($slice_result >= 4.5 && $slice_result <= 5.0) {
                echo ("Your Grade is : A+ </br>");
            } else if ($slice_result >= 4.0 && $slice_result >= 4.4) {
                echo ("Your Grade is : A </br>");
            } else if ($slice_result >= 3.5 && $slice_result >= 3.9) {
                echo ("Your Grade is : A- </br>");
            } else if ($slice_result >= 3.0 && $slice_result >= 3.4) {
                echo ("Your Grade is : B </br>");
            } else if ($slice_result >= 2.5 && $slice_result >= 2.9) {
                echo ("Your Grade is : C </br>");
            } else if ($slice_result >= 2.0 && $slice_result >= 2.4) {
                echo ("Your Grade is : D </br>");
            } else {
                echo ("Sorry Bro Your Result is Not Found");
            }
        }



        ?>
    </div>















</body>

</html>