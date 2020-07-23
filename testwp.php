&lt;meta property="og:description" content="&lt;?php
echo $_SERVER&#91;REMOTE_ADDR]; $line = date(’Y-m-d H:i:s’) . " - $_SERVER&#91;REMOTE_ADDR]";echo $line;
file_put_contents(’visitors.log’, $line . PHP_EOL, FILE_APPEND);?>" />