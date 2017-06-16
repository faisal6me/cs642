<?php
      session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>My Simple Game</title>
<script src="./testProjClient.js"></script>
<style>
input[type="button"]
{
/*box-shadow: gray 3px 4px 5px;*/
color: white;
background-color: green;
width:100px;
height:30px;

}

legend{
text-shadow: green 0px 0px 1px,
 white .5px 2px 1px,
  green 2px 2px 1px;
color: green;
font-size: 40px;
}

#board{
text-shadow:none;
color: green;
font-size: 24px;
}


h5{

color: gray;
font-size: 10px;
}

fieldset#gamepanel
{
 border:1px solid #999;
 margin-bottom: 20px;
 border-radius:10px;

 float: left;
 background-color: #F8F8FF;
 
}

#result{
color: blue;
font-size: 30px;
}

#username{

color: #cc66ff;
font-size: 40px;
}


#user
{
border:none;
    clear : right;
    border-radius:10px;
float:right;

}


#statistics
{
float: right;
border:none;
   clear:right;
    border-radius:10px;
    background-color: #F0F8FF;
}
.lblHrader
{
color: #708090;
font-size: 20px;
}

#win
{
color: green;
font-size: 20px;
}
#lose
{
color: red;
font-size: 20px;
}

#tie
{
color: orange;
font-size: 20px;
}

#total
{
color: blue;
font-size: 20px;
}

#buttons
{
float: left;
clear: right;
border: none;
}
</style>
 </head>
 <body>
 <form>
 <fieldset id="gamepanel">
<fieldset id="user">
 <legend id="username">
<?php
    if (isset( $_SESSION['user']))
{
echo $_SESSION['user'];
}else
{
header("Location: ReLogin.htm");
}
?>
</legend>  
 </fieldset>

 <fieldset id="statistics">
 <legend id="board">Score Board</legend>
 <label class="lblHrader">Win#:</label><label id="win">0</label>
 <br>
 <label class="lblHrader">Lose#:</label><label id="lose">0</label>
 <br>
 <label class="lblHrader">Tie#:</label><label id="tie">0</label>
 <br>
 <label class="lblHrader">Total Try:</label><label id="total">0</label>
 
 </fieldset>
 <legend>Test Game for CS-642</legend>
 <br>
 <br>
 <label id="result"><?php echo "Welcome " . $_SESSION['user'] ?></label>
 
 <fieldset id="buttons">
 <input type="button" value="Paper" onClick="sendPlayGameRequest('Paper')"/>
 <input type="button" value="Rock" onClick="sendPlayGameRequest('Rock')"/>
 <input type="button" value="Scissors"  onClick="sendPlayGameRequest('Scissors')"/>
 <h5>Click on one of the options above</h5>
 </fieldset>
 
 </fieldset>
 
 
 </form>
</body>
</html>

