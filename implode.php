<?php

$name = 'Alex';
$email = 'zak@hotmail.com';
$message = 'Hello world'; 
$tell = '07961243345';

$data = array(
'name' => $name,
'email' => $email,
'message' => $message,
"tell" => $tell
);

$fields_sql = '`' . implode('`, `', array_keys($data)) . '`';
$val_sql = '\'' . implode('\', \'', $data) . '\'';

$sql = "
INSERT INTO `table` ($fields_sql) VALUE ($val_sql);
";

echo $sql;

?>