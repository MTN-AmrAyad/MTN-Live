<?php
session_start();
require_once('vendor/autoload.php');
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Customer.php');
require_once('models/Transaction.php');

\Stripe\Stripe::setApiKey('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');

// Sanitize POST Array
$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);




$first_name = $POST['fullname'];
// $last_name = $POST['last_name'];
$email = $POST['email'];
$phone = $POST['phone'];
$amount = $POST['amount'];
$coursecode = $POST['coursecode'];
$token = $POST['stripeToken'];


$_SESSION['fullname']=$first_name;
$_SESSION['email']=$email;
$_SESSION['phone']=$phone;
$_SESSION['coursecode']=$coursecode;


// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => $amount,
  "currency" => "usd",
  "description" => "Intro To React Course",
  "customer" => $customer->id
));

// Customer Data
$customerData = [
  'id' => $charge->customer,
  'first_name' => $first_name,
  'last_name' => "MTN",
  'email' => $email
];

// Instantiate Customer
$customer = new Customer();

// Add Customer To DB
$customer->addCustomer($customerData);


// Transaction Data
$transactionData = [
  'id' => $charge->id,
  'customer_id' => $charge->customer,
  'product' => $charge->description,
  'amount' => $charge->amount,
  'currency' => $charge->currency,
  'status' => $charge->status,
];

// Instantiate Transaction
$transaction = new Transaction();

// Add Transaction To DB
$transaction->addTransaction($transactionData);

// Redirect to success
// header('Location: success.php?tid=' . $customerData->id . '&product=' . $charge->description);
header("Location:handle.php?coursecode=$coursecode");
exit;


?>
