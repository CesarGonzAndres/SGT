<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Select - onchange example</title>
  </head>
  
  <body>



    <label for="meetingPlace">Meeting place: </label>
    <select id="meetingPlace">


      <option>Please select</option>
      <option>Buckingham Palace</option>
      <option>The White House</option>
      <option>Mount Everest</option>



    </select>


    <div id="results"></div>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  
    <script>
      $("#equipo").on("change", function(){
        var selected = $(this).val();
        $("#estatus").html("You selected: " + '<?php echo "$nb_estatus_ppyg";?>');
        $("#fei_operaciones").html("You selected: " + '<?php echo "$fei_operaciones";?>');
        $("#dias_inactividad").html("You selected: " + '<?php echo "$dias_inactividad";?>');
        $("#responsable").html("You selected: " + '<?php echo "$responsable";?>');
        $("#comentario").html("You selected: " + '<?php echo "$comentario";?>');
     })
    </script>


  </body>


