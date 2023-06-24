<?php
$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/cms/storage/app/public';
$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/cms/public/storage';
// echo $linkFolder;
symlink($targetFolder,$linkFolder);
echo 'Symlink process successfully completed';