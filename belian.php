<html>
<body> 
<form enctype="multipart/form-data" action="" method="POST">
    <textarea cols="30" rows="5" name="text"></textarea>
    <input type="submit" name="enter" value="Simpan" />
</form>  
<?php
if(isset($_POST["enter"]))
{
    $text=$_POST["text"];
    $file = fopen("belian.txt","w");    
    if($file)
    {
    fputs($file,$text);
    }
    fclose($file); 
}  
    echo "<b></b>Isi dari file belian.txt sekarang:</b><br />";
    $file = fopen("belian.txt","r");    
    while(! feof($file))    
    {    
        echo fgets($file). "<br />";    
    }    
    fclose($file); 
?>    
</body>     
</html> 