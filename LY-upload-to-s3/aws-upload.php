<?php 

$command = escapeshellcmd('python aws-upload.py');
$output = shell_exec($command);
echo $output;

// $command = escapeshellcmd('dir');
// $output = shell_exec($command);
// echo $output;

// $r=shell_exec("python aws-upload.py"); 
// echo $r;

// echo '<pre>'; 
// $last_line = system('aws-upload.py', $retval); 
// echo ' 
// </pre> 
// <hr />Last line of the output: ' . $last_line . ' 
// <hr />Return value: ' . $retval; 

?>