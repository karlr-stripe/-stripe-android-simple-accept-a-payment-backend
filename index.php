<?php

require 'vendor/autoload.php';

// Set your secret key. Remember to switch to your live secret key in production!
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey($_ENV["STRIPE_SECRET_KEY"]);

$intent = \Stripe\PaymentIntent::create([
  'amount' => 1099,
  'currency' => 'usd',
]);
$client_secret = $intent->client_secret;
// Pass the client secret to the client
echo $client_secret;
?>
