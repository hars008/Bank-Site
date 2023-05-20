<html>
<head>
<title>
My First PHP Page
</title>
</head>
<body>
<?php
echo "<h1>Welcome to my first PHP page.</h1>";
$name[0] = "Amit";
$name[1] = "Jain";
$name1['First'] = "Amit";
$name1['Last'] = "Jain";
echo $name[0];
echo " ";

echo $name[1];
echo "<br>";
print_r($name);
echo "<br>";
echo $name1['First'];
echo " ";
echo $name1['Last'];
echo "<br>";
print_r($name1);
echo "<br>";
echo $_POST["u_name"]." ".$_POST["pwd"];
// echo $_GET["pwd"];
echo $_POST["u_name"]." ";
echo "<br>Length of your first name: ".
strlen($_POST["u_name"]);
echo "<br>Length of your last name: ".
strlen($_POST["pwd"]);

echo "<br>Your first name contains 'm' at position:

". strpos($_POST["u_name"],"h");

if($_POST["u_name"] == "harsh" && $_POST["pwd"] == "bansal"){
    echo "Welcome!! Mr. harsh bansal , the future ceo of google.";
}
else{
    echo "mere maalik harsh bansal kaha h!, aap to mere maalik nhi h.";
}
echo "<br>";
$mul=$_POST["amt"];
$num=$_POST["mul"];
// echo '<table align="center" border="2">';
for($i=0;$i<amt;$i++){

    echo "<tr><td>";
    echo $num." x ".$i;
    echo "</td><td> =
    </td> <td> ";
    echo $num * $i;
    echo "</td></tr>";}
    echo "</table>";
?>
</body>
</html>