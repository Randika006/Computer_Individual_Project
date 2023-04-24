
<?php
include_once 'Config.php';
$result = mysqli_query($db,"SELECT * FROM internal_params");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrange Details</title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 405px;
    position: relative;
    left:1px;
}

td, th {
    border: 2px solid red;
    text-align: left;
    padding: -2px;

}

tr:nth-child(even) {
    background-color: white;
}


* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: block;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}



.pbut {
  position: absolute;
  left: 130px;
  height: 42px;
  font-weight: bold;
  font-size: 12px;
}

</style>   


</head>
<body style="background-image: url('img/nature.jpg');background-repeat:no-repeat;background-attachment:fixed;background-size:cover;">
<?php include("partial/nav2.php"); ?>

<br/><br/>

<h1><center>The Arrange Testing Details</center></h1>

<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>CO</td>
    <td>CO2</td>
    <td>Acetaldehyde</td>
    <td>Formaldehyde</td>
    <!--<td>rate</td>
    <td>temperature</td>
    <td>humidity</td>-->
    <td>Delete</td>

    <!--<td>Delete</td>-->

  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["CO"]; ?></td>
    <td><?php echo $row["CO2"]; ?></td>
    <td><?php echo $row["Acetaldehyde"]; ?></td>
    <td><?php echo $row["Formaldehyde"]; ?></td>
    <!--<td><?php echo $row["rate"]; ?></td>
    <td><?php echo $row["temperature"]; ?></td>
    <td><?php echo $row["humidity"]; ?></td>-->

    <td><a href="dreport.php?id=<?php echo $row["id"]; ?>">delete</a></td>

</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>


<br/><br/>

<br/><br/>




      <br/><br/>
      <br/><br/>
               
 <?php include("partial/footer.php"); ?>
         
</body>


</html>