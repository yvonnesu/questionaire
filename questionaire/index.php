<?php
header("content-type:application/json");

$db = mysql_connect("localhost", "root", "123", "yv740806");
$db_selected = mysql_select_db("questionaire", $db);

$rows = array();
$mn = mysql_query("select * from minimalism");
while($get =  mysql_fetch_assoc($mn))
{
   $rows[][]=$get;
}

echo json_encode($rows);

//error_reporting(E_ALL);
//ini_set('display_errors', 1);
require 'includes/config.php';
require 'includes/functions.php';
//init();

const request = new Request("http://localhost:8888/questionaire/");
const URL = request.url;
const method = request.method;

fetch(request).then(response => {
  //ok 代表狀態碼在範圍 200-299
  if (!response.ok) throw new Error(response.statusText)
  return response.json()
}).catch(function(err) {
    // Error :(
})
?>
