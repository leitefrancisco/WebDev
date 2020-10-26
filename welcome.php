<?php require ('include/header.php') ?>
<body>
   


<?php

$countries = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava","Slovenia"=>"Ljubljana", "Germany" => "Berlin",
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

foreach($countries as $x =>$xcapital){

    if ($_GET["country"] == $x){
        echo ("<h1> Welcome to " . $_GET["country"]."! </h1>");
        echo ("<h3>The capital of ". $_GET["country"]. " is ". $countries[$_GET["country"]]."</h3>");
        
    break;
    }

}

if($_GET["country"]== "Select"){
    echo ("<h3> Please select a country!</h3>");
}

else if ($_GET["country"] !== $x ){

    echo("<h3>  That is not a valid country! </h3> ");
}


?>


</body>
<?php include ('include/footer.php') ?>