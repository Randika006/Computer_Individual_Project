<!doctype html>
<html lang="en">
  <head>
    <title>Chart Representation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <!-- Link Bootstrap JS and JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
    
<link href="/css/style.css" rel="stylesheet"/>
<style>
.p2{
    font-size:15px;
    font-weight:bold;
    position: relative;
    left:410px;    
 }
.charts{
  border: 1px solid #cccccc;
  position:relative;
  left:65px;
 }
 .charts2{
  border: 1px solid #cccccc;
  position:relative;
  left:545px;
  top:-325px;
 }

 .charts3{
  border: 1px solid #cccccc;
  position:relative;
  left:65px;
  top:-375px;
 }

 .charts4{
  border: 1px solid #cccccc;
  position:relative;
  left:545px;
  top:-700px;
 }

 </style>

    </head>
  <body class="CRbdy">
    <?php include("./partials/nav2.blade.php"); ?>
    <br/><br/>

    <p class="p2">Harmful Gases Variations Chart Representations</p>

<iframe width="450" height="260" class="charts" src="https://thingspeak.com/channels/2015529/charts/2?api_key=GQPAZWD1S7ZJE03G"bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line"></iframe>
<br/><br/>
<br/><br/>
    
<iframe width="450" height="260" class="charts2" src="https://thingspeak.com/channels/2015529/charts/4?api_key=GQPAZWD1S7ZJE03G"bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line"></iframe>
<br/><br/>
<br/><br/>
<iframe width="450" height="260" class="charts3" src="https://thingspeak.com/channels/2015529/charts/3?api_key=GQPAZWD1S7ZJE03G"bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
<br/><br/>
<br/><br/>


<iframe width="450" height="260" class="charts4" src="https://thingspeak.com/channels/2015529/charts/1?api_key=GQPAZWD1S7ZJE03G"bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line"></iframe>

<br/><br/>


    <br/>

    
    
    <br/><br/><br/><br/>
    <br/><br/>
    <br/><br/><br/><br/>
    <br/><br/><br/><br/><br/><br/>
    <br/><br/>
    <br/><br/><br/><br/>
    <br/><br/>

    <?php include("./partials/footer.blade.php"); ?>

    
    </body>
</html>