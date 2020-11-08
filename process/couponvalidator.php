<?php
$_POST = json_decode(file_get_contents('php://input'), true);
require_once("../db/db.php");
include_once('validator.php');
if(isset($_POST["couponCode"])){
    $cou_name = test_input($_POST['couponCode']); 

    $sql = 'SELECT  *  FROM coupon WHERE cou_name = :cou_name';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['cou_name' => $cou_name]);
    $check_result = $stmt->fetch(PDO::FETCH_OBJ);
    if(!$check_result){
        //coupon does not exist, 
        $result = [
            "code" => 401,
            "success" => false, 
            "message" => "Coupon code does not exist"
        ];

    }else{

        //check coupon expired or outdated
        $coupon_Expired = coupon_Outdated($check_result->cou_expiredate); //returns if coupon is outdated
        $coupon_deactivated = ($check_result->cou_expired == 1) ? true : false;
        
        if($coupon_Expired || $coupon_deactivated){
            //coupon expired by admin or by date
            $result = [
                "code" => 401,
                "success" => false, 
                "message" => "Coupon code has expired or deactivated"
            ];
        }else{
            //send coupon detail to javascript where its value will be calculated
            $result = [
                        "code" => 200,
                        "success" => true, 
                        "coupon_details" => $check_result
                        
                    ];


        }






        




    }


    //final result to be sent
    echo (json_encode($result)); 
}else{

    $result = [
        "error" => $_POST,
    ];
    //final result to be sent
    echo (json_encode($result)); 
}



function coupon_Outdated ($coupon_created_date) {
    return  $coupon_created_date < date("Y-m-d");
  }
  