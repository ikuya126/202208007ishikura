<?php

$name = htmlspecialchars($_POST["name"],ENT_QUOTES);
echo $name . "さんご登録ありがとうございます";