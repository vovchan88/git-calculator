<?php
function update_num($sym){
global $link;	
$query = "UPDATE `number` SET `num` = " . $sym . " WHERE id = 1";
mysqli_query($link, $query);
}
function select_num(){
global $link;	
$query = "SELECT `num` FROM `number` WHERE id = 1";
$rs = mysqli_query($link, $query);	
if($row = mysqli_fetch_assoc($rs)){
$array = $row;	
}
return $array['num'];
}