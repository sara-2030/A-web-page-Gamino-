<?php
include "include/Connect.php";

$id = $_GET['id'];
$name = $_GET['Name'];
$DELsuccess = '';


$sql = "DELETE FROM game WHERE GameID= $id;";
if(mysqli_query($Connect, $sql)){
    $folder = 'Upload/'.$id;
    $files = glob($folder . '/*');
    foreach($files as $file){
        if(is_file($file)){
            unlink($file);
        }
    }
    deleteAll($folder); 
    $DELsuccess = $name." was deleted successfully!";
}
else{
   $DELsuccess = "Game deleting failed, please try again."; 
}


// delete all files and sub-folders from a folder
function deleteAll($dir) {
    foreach(glob($dir . '/*') as $file) {
        if(is_dir($file))
            deleteAll($file);
        else
            unlink($file);
    }
    rmdir($dir);
}


header("Content-Type: text/plain"); 
echo $DELsuccess;
?>
