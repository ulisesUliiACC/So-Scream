<?php

namespace App\Http\Controllers\Gateways;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Http\Controllers\Carrito\CarritoController;

class PaypalController extends Controller
{
  //

  public function payment(Request $request)
  {
    $carritoController = new CarritoController();
    $cartTotal = $carritoController->getTotal();
    //$cartTotal = $this->calculateTotal($request);



    $provider = new PayPalClient;
    $provider->setApiCredentials(config('paypal'));
    $paypalToken = $provider->getAccessToken();

    $response = $provider->createOrder([
      "intent" => "CAPTURE",
      "application_context" => [
        "return_url" => route('paypal.success'),
        "cancel_url" => route('paypal.cancel'),
      ],
      "purchase_units" => [
        [
          "amount" => [
            "currency_code" => "MXN",
            "value" => $cartTotal
          ]
        ]
      ]
    ]);
    //dd($response);

    if (isset($response['id']) && $response['id'] != null) {

      foreach ($response['links'] as $link) {
        if ($link['rel'] == 'approve') {
          return redirect()->away($link['href']);
        }
      }
    } else {
      return redirect()->route('paypal.cancel');
    }

  }

  public function success(Request $request)
  {
      $provider = new PayPalClient;
      $provider->setApiCredentials(config('paypal'));
      $paypalToken = $provider->getAccessToken();
      $response = $provider->capturePaymentOrder($request->token);
      if (isset($response['status']) && $response['status'] == 'COMPLETE'){
        return 'haid Successfully';
      }
      return redirect()->route('paypal.succces');
  }

  public function cancel()
  {
    return 'pago cancelado';
  }
}
