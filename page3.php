
<?php require ('include/header.php') ?>
<body>

<table>
        <tr><th>Country</th><th>Capital</th></tr>

<?php
    $countries = array( "Austria" => "Vienna","Belgium"=> "Brussels","Cyprus"=>"Nicosia","Czech Republic"=>"Prague","Denmark"=>"Copenhagen","Estonia"=>"Tallin",
    "Finland"=>"Helsinki","France" => "Paris",  "Germany" => "Berlin","Greece" => "Athens","Hungary"=>"Budapest","Ireland"=>"Dublin","Italy"=>"Rome", "Latvia"=>"Riga",
    "Lithuania"=>"Vilnius","Luxembourg"=>"Luxembourg", "Malta"=>"Valetta","Netherlands"=>"Amsterdam","Poland"=>"Warsaw","Portugal"=>"Lisbon","Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana","Spain"=>"Madrid","Sweden"=>"Stockholm", "United Kingdom"=>"London" );
  
  
    foreach($countries as $country => $capital){
    echo "<tr><td> $country</td><td>$capital</td></tr>";
  
 }
?>

</table>
</body>

<?php include ('include/footer.php') ?>
        
