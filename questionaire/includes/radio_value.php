<?php
if (isset($get["quest"])) {
if($get["quest"][0]=="對於完成目標前的準備，你會:")
{
echo $get["quest"][0];
}
else{ echo "<span>Please choose any radio button.</span>";}
}

if (isset($get["quest"])) {
if($get["quest"][1]=="我通常選擇的依據是:")
{
echo $get["quest"][1];
}
else{ echo "<span>Please choose any radio button.</span>";}
}

if (isset($get["quest"])) {
if($get["quest"][2]=="對於完成目標的進程，你會:")
{
echo $get["quest"][2];
}
else{ echo "<span>Please choose any radio button.</span>";}
}

?>
