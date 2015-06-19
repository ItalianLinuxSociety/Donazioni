<?php

require('vendor/autoload.php');
require('conf.php');

use PayPal\PayPalAPI\TransactionSearchReq;
use PayPal\PayPalAPI\TransactionSearchRequestType;
use PayPal\PayPalAPI\GetTransactionDetailsReq;
use PayPal\PayPalAPI\GetTransactionDetailsRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;

$config = array(
       'mode' => 'live',
       'acct1.UserName' => PAYPAL_USERNAME,
       'acct1.Password' => PAYPAL_PASSWORD,
       'acct1.Signature' => PAYPAL_SIGNATURE
);

$summaryfile = 'data/summary.txt';
$startdate = '2015-06-01T00:00:00Z';
if (file_exists($summaryfile)) {
	$rows = file($summaryfile);
	for ($i = count($rows) - 1; $i >= 0; $i++) {
		$row = trim($rows[$i]);
		if ($row == '')
			continue;

		list($startdate, $person, $amount, $scope) = explode('|', $row);
		break;
	}
}

$transactionSearchRequest = new TransactionSearchRequestType();
$transactionSearchRequest->StartDate = $startdate;
$transactionSearchRequest->EndDate = date('Y-m-d\T23:59:59\Z');
$tranSearchReq = new TransactionSearchReq();
$tranSearchReq->TransactionSearchRequest = $transactionSearchRequest;

$paypalService = new PayPalAPIInterfaceServiceService($config);
try {
	$transactionSearchResponse = $paypalService->TransactionSearch($tranSearchReq);

	if(isset($transactionSearchResponse) && is_array($transactionSearchResponse->PaymentTransactions)) {
		foreach($transactionSearchResponse->PaymentTransactions as $trans) {
			$req = new GetTransactionDetailsRequestType();
			$req->TransactionID = $trans->TransactionID;
			$tranreq = new GetTransactionDetailsReq();
			$tranreq->GetTransactionDetailsRequest = $req;
			$details = $paypalService->GetTransactionDetails($tranreq);

			$item = $details->PaymentTransactionDetails->PaymentItemInfo->PaymentItem;

			if (is_array($item) && $item[0]->Name != '') {
				$date = $details->Timestamp;
				$payer = $details->PaymentTransactionDetails->PayerInfo->PayerName;
				$person = sprintf('%s %s', $payer->FirstName, $payer->LastName);
				$amount = $details->PaymentTransactionDetails->PaymentInfo->GrossAmount->value;
				$target = strtolower($item[0]->Name);

				$newrow = sprintf("%s|%s|%s|%s\n", $date, $person, $amount, $target);
				file_put_contents($summaryfile, $newrow, FILE_APPEND);
			}
		}
	}
}
catch (Exception $ex) {
	mail ('webmaster@linux.it', 'notifica script donazioni', "Errore lettura conti PayPal\n", 'From: linux.it <webmaster@linux.it>' . "\r\n");
}
