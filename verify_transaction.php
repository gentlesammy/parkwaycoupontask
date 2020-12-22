<?php
    require_once("db/db.php");
    require("constants.php");
    $ref = $_GET["reference"];
    if($ref === ""){
        header("location:carts.php");
        exit();
    }

    $sql = 'SELECT  *  FROM payment_record WHERE pr_reference = :ref';
            $stmt = $conn->prepare($sql);
            $stmt->execute(['ref' => $ref]);
            $result = $stmt->fetch();
            if($result != false){
                //ref already stored in the database
                echo("<h1>You have already paid for this, kindly check the detail in your dashboard</h1>".
                "<a href='carts.php'>BACK TO CART</a>");
                exit(); 
               
            }





  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/".rawurlencode($ref),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer " . PAYSTACK_SECRET_KEY,
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
      $res = json_decode($response);
      if($res->data->status === "success"){
          //payment was successful, gather all the variables
          $pr_pid  = $res->data->id;
          $pr_reference  = $res->data->reference;
          $pr_status  = $res->data->status;
          $pr_amount  = $res->data->amount;
          $pr_paid_at  = $res->data->paidAt;
          $pr_channel  = $res->data->channel;
          $pr_currency  = $res->data->currency;
          $pr_ip_address  = $res->data->ip_address;
          $pr_customer_email  = $res->data->customer->email;
          $pr_all_data = $response;
          //store all in db
          $sql = "INSERT INTO  payment_record (pr_pid, pr_reference, pr_status, pr_amount, pr_paid_at, pr_channel, pr_currency, pr_ip_address, pr_customer_email, pr_all_data) 
          VALUES (:pr_pid, :pr_reference, :pr_status, :pr_amount, :pr_paid_at, :pr_channel, :pr_currency, :pr_ip_address, :pr_customer_email, :pr_all_data)";
          $stmt = $conn->prepare($sql);
          $savedres = $stmt->execute(['pr_pid' => $pr_pid, 'pr_reference' => $pr_reference, 'pr_status' => $pr_status, 'pr_amount' => $pr_amount, 
          'pr_paid_at' => $pr_paid_at, 'pr_channel' => $pr_channel, 'pr_ip_address' => $pr_ip_address, 'pr_currency' => $pr_currency,  'pr_customer_email' => $pr_customer_email, 'pr_all_data' => $pr_all_data,]);
            if($savedres){
                echo("<h1>payment successfull</h1>".
                "<a href='carts.php'>BACK TO CART</a>"
            );
            }
      
          








      }else{
          //payment not successful
        header("location:error.php");
      }




  }
?>