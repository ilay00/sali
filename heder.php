
<div class="heder">
<div class="logo"></div>
<div class="slog"><h3>вас приветствует web-сайт agidelio.com сегодня:
<?php
date_default_timezone_set('Europe/Moscow');   // America/Bahia 
 $dat= date('d.m.Y');
echo $dat;
   $dats=date('H');
          if($dats<=5){
                
$img='nai.png';}
  
       elseif($dats<=11){ 
$img='dey.png';}
               
elseif($dats<=17){
$img='dey.png';}
          else {
$img='nai.png';}
//���������
?>
<img src="http://agidelio.com/img/<?php echo $img;?>"class="back"></h3>
 
<h4>сайт посвящен бизнесу в интернети реклами и многому другому.</h4></div>

</div>