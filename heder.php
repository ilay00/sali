
<div class="heder">
<div class="logo"></div>
<div class="slog">Р’Р°СЃ РїСЂРёРІРµС‚СЃС‚РІСѓРµС‚ web-СЃР°Р№С‚ agidelio.com СЃРµРіРѕРґРЅСЏ:
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
//исравлено
?>
<img src="http://agidelio.com/img/<?php echo $img;?>"class="back">
 
СЃР°Р№С‚ РїРѕСЃРІСЏС‰РµРЅ   и многому другому.</div>

</div>