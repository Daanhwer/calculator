<?php 
            include "index.html";
            
            $oper = $_POST["click"];
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            if($oper == "add")
                {
                $result = $num1+ $num2;
                echo  "The sum of $num1 and $num2 is: ",$result;
                }

            elseif($oper == "sub" and $num1>$num2)
                {
                $result = $num1 - $num2;
                echo "The positive difference between $num1 and $num2 is: ", $result;
                }

                elseif ($oper == "sub" and $num1<$num2){
                    $result = $num1-$num2;
                    echo "The negative difference between $num1 and $num2 is: ", $result;
                }
        

            elseif($oper == "mult")
                {
                $result = $num1 * $num2;
                echo "The product of $num1 and $num2 is: ",$result;
                }

            elseif($oper == "div")
                {
                $result = $num1/ $num2;
                echo "The quotient for dividing $num1 and $num2 is: ", $result;
                };
        
        


            
        include "footer.php";
?>



    