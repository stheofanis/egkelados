<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">



<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="google-site-verification" content="EU79a8v1RpN3uh1xos2-aiSWmA7uIlRBm30CA1-XxCk" />
<link rel="shortcut icon" type="image/png" href="HmJ03n1380392764.png" /> 
<title>Egkelados : Multipurpose chatterbot</title>
		<style type="text/css">

input:-webkit-autofill {
    color: #fff !important;
}

html { height: 100%; }
body { background: #fff; font-size: 15px; font-family: monospace; height: 99%; margin:0px; padding: 0px; }
form { padding: 0px; margin: 0px; }
pre { font-size: 12px; }
br { clear: both; }
:focus { outline: 0; }
input.cmdline { border: none; border: 0px; font-size: 12px; font-family: monospace; padding: 0px; margin:0px; width:100%; }
table.inputtable { width:100%; vertical-align:top; }
td.inputtd { width:100%; }
#input { margin-left: 8px; color: #666; overflow: hidden; }
#output{ margin-left: 8px; margin-top: 8px; }
.less { color: #666; }
.info { color: #090; }
table { padding: 0px; margin: 0px; border-collapse: collapse; border-spacing: 0px; }
td { padding: 0px; margin: 0px; vertical-align: top; font-size: 12px; font-family: monospace; }
.help td { padding-right: 25px; font-size: 12px; }
div#prompt { display: inline; white-space:nowrap; padding:0px; margin:0px; }
img { border: none; }
</style>


<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>


</head>


<div id="output">

 
<span class='less'>Egkelados 0.9.5-beta <?php $date = time();
$datepub = date("d-m-Y / h:j:s", $date); echo $datepub; echo " GMT" ?>, PHP/HTML</span><br/> 
 <br/>
<span class='info'>Welcome to egkelados - an official artificial intelligence chatterbot.</span><br/>
 <br/>
This command-line interface tries to imitate a human-based conversation by using AI technology.<br/>
You can type any kind of message and Egkelados will reply to your thoughts.<br/><br>
Egkelados is written by <a href='https://plus.google.com/110326551928472717340'>Fanis Siampos</a>
 <script type="text/javascript">
// <!--
var gmail = "gmail.com";
document.write("&lt;<a href='mailto:fsiamp"+"@"+"gmail"+".com?subject=goosh.org' style='text-decoration:none; color: #000;'>fsiamp"+"@"+gmail+"</a>&gt;");
//-->
</script>. Download Egkelados for <a href='https://egkelados-ai.appspot.com/Egkelados.ipa'>iPhone/iPad</a>.
<br><br>



</div>

<div id="outputx">


<?php
    
    require 'chatterbotapi.php';
    
    $factory = new ChatterBotFactory();
    
    $bot1 = $factory->create(ChatterBotType::PANDORABOTS, '829713883e34f760');
    $bot1session = $bot1->createSession();
    
    $bot2 = $factory->create(ChatterBotType::PANDORABOTS, '829713883e34f760');
    $bot2session = $bot2->createSession();
    
    

   
    $i = 0;
    $parameters = stripslashes(str_replace("'", "&#39;",$_POST['query_string']));
         $parameters2 = stripslashes(str_replace("'", "&#39;",$_POST['abc']));
         $parameters3 = stripslashes(str_replace("'", "&#39;",$_POST['de']));
         $parameters4 = stripslashes(str_replace("'", "&#39;",$_POST['ef']));
         $parameters5 = stripslashes(str_replace("'", "&#39;",$_POST['dee']));
         $parameters6 = stripslashes(str_replace("'", "&#39;",$_POST['efg']));
         $parameters7 = stripslashes(str_replace("'", "&#39;",$_POST['deex']));
         $parameters8 = stripslashes(str_replace("'", "&#39;",$_POST['efgx']));
         $parameters9 = stripslashes(str_replace("'", "&#39;",$_POST['deexx']));
         $parameters10 = stripslashes(str_replace("'", "&#39;",$_POST['efgxx']));
         $parameters11 = stripslashes(str_replace("'", "&#39;",$_POST['deexx1']));
         $parameters12 = stripslashes(str_replace("'", "&#39;",$_POST['efgxx1']));
         $parameters13 = stripslashes(str_replace("'", "&#39;",$_POST['deexx2']));
         $parameters14 = stripslashes(str_replace("'", "&#39;",$_POST['efgxx2']));
         $parameters15 = stripslashes(str_replace("'", "&#39;",$_POST['deexx3']));
         $parameters16 = stripslashes(str_replace("'", "&#39;",$_POST['efgxx3']));
         $parameters17 = stripslashes(str_replace("'", "&#39;",$_POST['deexx4']));
         $parameters18 = stripslashes(str_replace("'", "&#39;",$_POST['efgxx4']));
         $parameters19 = stripslashes(str_replace("'", "&#39;",$_POST['deexx5']));
         $parameters20 = stripslashes(str_replace("'", "&#39;",$_POST['efgxx5']));
         $parameters21 = stripslashes(str_replace("'", "&#39;",$_POST['deexx6']));
         $parameters22 = stripslashes(str_replace("'", "&#39;",$_POST['efgxx6']));
         $parameters23 = stripslashes(str_replace("'", "&#39;",$_POST['deexx7']));
         $parameters24 = stripslashes(str_replace("'", "&#39;",$_POST['efgxx7']));
         $parameters25 = stripslashes(str_replace("'", "&#39;",$_POST['deexx8']));
         $parameters26 = stripslashes(str_replace("'", "&#39;",$_POST['efgxx8']));
      
      $s = 'Hello';
      
      
    while ($i <= 0) 
    {
        
      
      if ($i % 2 == 0) {
        if (!empty($parameters)) {
          $s = stripslashes(str_replace("'", "&#39;",$bot1session->think($parameters)));
        
        } else {
        $s = stripslashes(str_replace("'", "&#39;",$bot1session->think($s)));
        }
          if (strpos($s,'AIlysse') !== false) {
    $s = str_replace("AIlysse","Egkelados",$s);
}


  if (strpos($s,'Ailysse') !== false) {
    $s = str_replace("Ailysse","Egkelados",$s);
}

         $x1 = '<object style="margin-left:8px;"><b>Egkelados: </b></object>'. $s;
                                  $items[] = $x1;

        }
        
        if ($i % 2 != 0) {
        if (!empty($parameters)) {
          $s = stripslashes(str_replace("'", "&#39;",$bot2session->think($parameters)));
        
        } else {
        $s = stripslashes(str_replace("'", "&#39;",$bot2session->think($s)));
        
        }
          if (strpos($s,'Cleverbot') !== false) {
    $s = str_replace("Cleverbot","Egkelados",$s);
}

         if (strpos($s,'cleverbot') !== false) {
    $s = str_replace("cleverbot","Egkelados",$s);
}


         $x1 = '<object style="margin-left:8px;"><b>Egkelados: </b></object>'. $s;
                                  $items[] = $x1;

        }
       
      
          
        $i = $i +1;

        
    }
    $zzz = implode('<br><br>',$items);
    
   

 
if (!empty($parameters2) && (empty($parameters3))) {
echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters2;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters;
echo "<br><br>";
}

elseif (!empty($parameters2) && (!empty($parameters3)) && (empty($parameters5))) {
echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters3;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters4;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters2;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters;
echo "<br><br>";
}
elseif ((!empty($parameters5)) && (!empty($parameters3)) && (!empty($parameters)) && (empty($parameters7))) {

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters6;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters5;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters3;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters4;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters2;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters;
echo "<br><br>";
}
elseif ((!empty($parameters7)) && (!empty($parameters5)) && (!empty($parameters3)) && (!empty($parameters)) && (empty($parameters9))) {

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters7;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters8;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters6;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters5;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters3;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters4;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters2;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters;
echo "<br><br>";
}
elseif ((!empty($parameters9)) && (!empty($parameters7)) && (!empty($parameters5)) && (!empty($parameters3)) && (!empty($parameters)) && (empty($parameters11))) {

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters10;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters9;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters7;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters8;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters6;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters5;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters3;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters4;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters2;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters;
echo "<br><br>";
}
elseif ((!empty($parameters11)) && (!empty($parameters9)) && (!empty($parameters7)) && (!empty($parameters5)) && (!empty($parameters3)) && (!empty($parameters)) && (empty($parameters13))) {


echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters11;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters12;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters10;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters9;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters7;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters8;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters6;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters5;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters3;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters4;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters2;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters;
echo "<br><br>";
}
elseif ((!empty($parameters13)) && (!empty($parameters11)) && (!empty($parameters9)) && (!empty($parameters7)) && (!empty($parameters5)) && (!empty($parameters3)) && (!empty($parameters)) && (empty($parameters15))) {

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters14;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters13;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters11;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters12;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters10;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters9;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters7;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters8;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters6;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters5;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters3;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters4;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters2;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters;
echo "<br><br>";
}
elseif ((!empty($parameters15)) && (!empty($parameters13)) && (!empty($parameters11)) && (!empty($parameters9)) && (!empty($parameters7)) && (!empty($parameters5)) && (!empty($parameters3)) && (!empty($parameters)) && (empty($parameters17))) {

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters15;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters16;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters14;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters13;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters11;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters12;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters10;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters9;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters7;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters8;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters6;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters5;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters3;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters4;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters2;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters;
echo "<br><br>";
}
elseif ((!empty($parameters17)) && (!empty($parameters15)) && (!empty($parameters13)) && (!empty($parameters11)) && (!empty($parameters9)) && (!empty($parameters7)) && (!empty($parameters5)) && (!empty($parameters3)) && (!empty($parameters)) && (empty($parameters19))) {

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters18;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters17;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters15;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters16;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters14;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters13;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters11;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters12;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters10;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters9;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters7;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters8;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters6;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters5;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters3;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters4;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters2;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters;
echo "<br><br>";
}
elseif ((!empty($parameters19)) && (!empty($parameters17)) && (!empty($parameters15)) && (!empty($parameters13)) && (!empty($parameters11)) && (!empty($parameters9)) && (!empty($parameters7)) && (!empty($parameters5)) && (!empty($parameters3)) && (!empty($parameters)) && (empty($parameters21))) {

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters19;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters20;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters18;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters17;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters15;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters16;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters14;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters13;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters11;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters12;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters10;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters9;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters7;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters8;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters6;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters5;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters3;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters4;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters2;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters;
echo "<br><br>";
}
elseif ((!empty($parameters21)) && (!empty($parameters19)) && (!empty($parameters17)) && (!empty($parameters15)) && (!empty($parameters13)) && (!empty($parameters11)) && (!empty($parameters9)) && (!empty($parameters7)) && (!empty($parameters5)) && (!empty($parameters3)) && (!empty($parameters)) && (empty($parameters23))) {


echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters21;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters20;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters19;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters20;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters18;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters17;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters15;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters16;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters14;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters13;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters11;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters12;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters10;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters9;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters7;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters8;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters6;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters5;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters3;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters4;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters2;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters;
echo "<br><br>";
}
elseif ((!empty($parameters23)) && (!empty($parameters21)) && (!empty($parameters19)) && (!empty($parameters17)) && (!empty($parameters15)) && (!empty($parameters13)) && (!empty($parameters11)) && (!empty($parameters9)) && (!empty($parameters7)) && (!empty($parameters5)) && (!empty($parameters3)) && (!empty($parameters)) && (empty($parameters25))) {

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters23;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters22;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters21;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters20;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters19;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters20;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters18;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters17;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters15;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters16;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters14;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters13;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters11;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters12;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters10;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters9;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters7;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters8;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters6;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters5;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters3;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters4;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters2;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters;
echo "<br><br>";
}
elseif ((!empty($parameters25)) && (!empty($parameters23)) && (!empty($parameters21)) && (!empty($parameters19)) && (!empty($parameters17)) && (!empty($parameters15)) && (!empty($parameters13)) && (!empty($parameters11)) && (!empty($parameters9)) && (!empty($parameters7)) && (!empty($parameters5)) && (!empty($parameters3)) && (!empty($parameters))) {

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters25;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters24;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters23;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters22;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters21;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters20;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters19;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters20;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters18;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters17;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters15;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters16;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters14;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters13;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters11;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters12;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters10;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters9;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters7;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters8;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters6;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters5;
echo "<br><br>";

echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters3;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters4;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>Egkelados: </b></object>'.$parameters2;
echo "<br><br>";
echo '<object style="margin-left:8px;"><b>You: </b></object>'.$parameters;
echo "<br><br>";
}
echo $zzz;
    echo "<br><br>";
       echo "<form autocomplete='off' style='margin-left:8px;' action='' method='POST' id='form' enctype='multipart/form-data'>
       <input type='hidden' value='$parameters2' name='de' id='de'>
       <input type='hidden' value='$parameters' name='ef' id='ef'>
       <input type='hidden' value='$s' name='abc' id='abc'>
       <input type='hidden' value='$parameters4' name='dee'>
    <input type='hidden' value='$parameters3' name='efg'>
   
       <input type='hidden' value='$parameters6' name='deex'>
       <input type='hidden' value='$parameters5' name='efgx'>
       <input type='hidden' value='$parameters8' name='deexx'>
       <input type='hidden' value='$parameters7' name='efgxx'>
       <input type='hidden' value='$parameters10' name='deexx1'>
       <input type='hidden' value='$parameters9' name='efgxx1'>
       <input type='hidden' value='$parameters12' name='deexx2'>
       <input type='hidden' value='$parameters11' name='efgxx2'>
       <input type='hidden' value='$parameters14' name='deexx3'>
       <input type='hidden' value='$parameters13' name='efgxx3'>
       <input type='hidden' value='$parameters16' name='deexx4'>
       <input type='hidden' value='$parameters15' name='efgxx4'>
       <input type='hidden' value='$parameters18' name='deexx5'>
       <input type='hidden' value='$parameters17' name='efgxx5'>
       <input type='hidden' value='$parameters19' name='deexx6'>
       <input type='hidden' value='$parameters20' name='efgxx6'>
       <input type='hidden' value='$parameters21' name='deexx7'>
       <input type='hidden' value='$parameters22' name='efgxx7'>
       <input type='hidden' value='$parameters23' name='deexx8'>
       <input type='hidden' value='$parameters24' name='efgxx8'>
       
       <b>You</b>: <input autocomplete='off' id='text' type='text' name='query_string' size='17' id='query_string' class='BodyCopy' style='border: none; width:89%; font-family:monospace; font-size:15px;'  autofocus></form>
<br>";
 
  

?>

</div>
