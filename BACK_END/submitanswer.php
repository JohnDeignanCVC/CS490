<?php
header('Context-type: application/json');
if(isset($_POST['data'])){
        logInfo();
        exit();
}
?>
<html>
    <head>
          <title>Adam Elshoubri</title>
    </head>
    <body>
            <form action ='submitanswer.php' method = POST>
            		<input type = "hidden" name = "data">
     	  </form>
    		<?php
    			function logInfo(){
            			mysql_connect('sql1.njit.edu', 'ase28', 'aoFxdVBX3');
            			mysql_select_db('ase28');
    			        $datastring = $_POST['data'];
            			$data = json_decode($datastring);
                  $result = mysql_query ("INSERT INTO STUDANSWERS(STUDUSER, TESTID, QUESTID, ANSWERS, SCORE, COMMENTS) VALUES('$data->user','$data->testid'
            			, '$data->questid', '$data->answer', '$data->score','$data->comments')");
                }

    		?>

    </body>
</html>
