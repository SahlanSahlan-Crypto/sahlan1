<?php
if(is_file("call.php"))
{
echo filesize("call.php");
}
else
{
echo "file is not found";
}
?>