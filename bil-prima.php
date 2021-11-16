<html>
    <style>
        h4 {
            color: red;
            font-weight: normal;
        }
    </style>
<body>
    
    <?php 
        for($i = 1; $i <= 1000000; $i++){
            $a = 0;
            for($j = 1; $j <= $i; $j++){
                if($i % $j == 0){
                    $a++;
                }
            }

            if($a == 2){
                echo "Jadi " .$i. " adalah merupakan bilangan prima <p>";
            } else {
                echo "<h4>Jadi " .$i. " adalah bukan merupakan bilangan prima</h4> <p>";
            }
        }
    ?>

</body>
</html>
