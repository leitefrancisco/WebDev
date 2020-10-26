<?php require ('include/header.php') ?>

<body>
<h3>Select a Country from the dropdown menu and we will tell you its capital!</h3>
<form action="welcome.php" method="GET" target="welcome.php">

<select name="country" id="country" type="select"> 

<option value="Select" >Select...</option>
<option value="Austria">Austria</option>
<option value="Belgium">Belgium</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Estonia">Estonia</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="Germany">Germany</option>
<option value="Greece">Greece</option>
<option value="Hungary">Hungary</option>
<option value="Ireland">Ireland</option>
<option value="Italy">Italy</option>
<option value="Latvia">Latvia</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Malta">Malta</option>
<option value="Netherlands">Netherlands</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Spain">Spain</option>
<option value="Sweden">Sweden</option>
<option value="United Kingdom">United Kingdom</option>
 <option value="Tangamandapio">Tangamandapio</option>   <!--a value that is not in the array so you can check the if statement works -->


</select>

<input type="submit">
</form>

</body>
<?php include ('include/footer.php') ?>