<?
//  Vasyl Yevstygnyeyev <bazilxp@gmail.com>
//  Date 20/02/2012
if ($_FILES["file"]["error"] > 0)
{
    //echo "Error: " . $_FILES["file"]["error"] . "<br/>";
    exit;
}
else
{

    /*  echo "Upload: " . $_FILES["file"]["name"] . "<br/>";
        echo "Type: " . $_FILES["file"]["type"] . "<br/>";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br/>";
        echo "Stored in: " . $_FILES["file"]["tmp_name"]."<br/>";*/
    $filename=$_FILES["file"]["name"];
    $tmpfile=$_FILES["file"]["tmp_name"];
    $fsize=$_FILES["file"]["size"]/1024;

    // 100kb greater
    if ($fsize>20)
    {
        unlink($tmpfile);
        exit;
    }
    move_uploaded_file($tmpfile,"frame.jpg");
}
?>
