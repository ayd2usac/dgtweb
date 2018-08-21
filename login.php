<?php

$users['users'] =[
  [
    "name" => "mike",
    "pass" => "123",
  ],
  [
    "name" => "julio",
    "pass" => "1231",
  ],
  [
    "name" => "Pablo",
    "pass" => "1232",
  ],
  [
    "name" => "David",
    "pass" => "1233",
  ],
  [
    "name" => "Hugo",
    "pass" => "1234",
  ],
  [
    "name" => "Rand",
    "pass" => "1235",
  ],

]; 
//echo('entro' . json_encode($users));
function loging($name, $pass){
  global $users;
  $size = count($users['users']); 
  //echo('entro' . $users['users'][0]['name'] . $name);
  for($i = 0; $i < $size; $i++)
  {
    //echo('entro' . $i . "\n");    
    if($name == $users['users'][$i]['name'] && $pass == $users['users'][$i]['pass'])
    {

      return json_encode(true);
    }
  }
  return json_encode(false);
}

echo (loging($_POST['name'], $_POST['pass']));
//echo(json_encode(loging('mike', '123s')));
//echo(json_encode($users));
?>