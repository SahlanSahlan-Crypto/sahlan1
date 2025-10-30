<?php

$filePath = "sahlan.txt";



$fileContent = file_get_contents($filePath);








echo nl2br(htmlspecialchars($fileContent, ENT_QUOTES, 'UTF-8'), false);


echo '<pre>' . htmlspecialchars($fileContent, ENT_QUOTES, 'UTF-8') . '</pre>';
?>