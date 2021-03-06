<?php
// Get the Node helper library from https://twilio.com/docs/libraries/php
require_once '/path/to/vendor/autoload.php'; // Loads the library

use Twilio\Rest\Client;

// Get your Account SID and Auth Token from https://twilio.com/console
$accountSid = 'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
$authToken = 'your_auth_token';
$client = new Client($accountSid, $authToken);

$fleet = $client->preview->deployedDevices->deployments->create(
  array(
    'friendlyName' => 'My Device Deployment'
  )
);

echo $fleet->sid;
