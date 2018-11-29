$socket = @fsockopen('localhost', xxx, $errno, $errstr, 30);
if ( ! $socket ) {
  return $errno . ': ' . $errstr;
}

fputs($socket, 'hi');

$response = '';
while ( ! feof($socket) ) {
    $response .= fgets($socket, 512);
}

fclose($socket);

echo $response;
