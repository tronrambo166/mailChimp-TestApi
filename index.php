<?php require_once('vendor/autoload.php');

$client = new \MailchimpMarketing\ApiClient();

$client->setConfig([
	'apiKey' => '5c366283feba072e7ad45ec19afb167c-us14',
	'server' => 'us14'
]);


$response =$client->ecommerce->stores();

echo '<pre>'; print_r($response);  echo '<pre>'; exit;

//$list_id = "7935523455";
try {
    $response = $client->lists->addListMember($list_id, [
        "email_address" => "tronrambo166@gmail.com",
        "status" => "subscribed",
        "merge_fields" => [
          "FNAME" => "Malan",
          "LNAME" => "Espanol"
        ]
    ]);
    echo '<pre>'; print_r($response);  echo '<pre>';
} catch (MailchimpMarketing\ApiException $e) {
    echo $e->getMessage();
}


//$response = $client->automations->startAllEmails("78764671bd");
 //echo '<pre>'; print_r($response);  echo '<pre>'; //automation_id c88530d486  78764671bd  7935523455
 