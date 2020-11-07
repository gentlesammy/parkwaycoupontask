<?php
$_POST = json_decode(file_get_contents('php://input'), true);
require_once("../db/db.php");
include_once('validator.php');
    if(isset($_POST['name']) && isset($_POST['type']) && isset($_POST['cValue']) && isset($_POST['expires']) && isset($_POST['priceconstraint']) && isset($_POST['qtyconstraint'])){

        $cou_name = test_input($_POST['name']); 
        $cou_type = test_input($_POST['type']); 
        $cou_value = test_input($_POST['cValue']); 
        $cou_expiredate = test_input($_POST['expires']); 
        $cou_priceconstraint = test_input($_POST['priceconstraint']); 
        $cou_qtyconstraint = test_input($_POST['qtyconstraint']); 

        if(empty($cou_name) || empty($cou_type) || empty($cou_value) || empty($cou_expiredate) || empty($cou_priceconstraint) || empty($cou_qtyconstraint)){
            $result = [
                'msg'  =>       "All fields are required please",
                'code' =>        400
            ];
        }else{
            $sql = 'SELECT  *  FROM coupon WHERE cou_name = :cou_name';
            $stmt = $conn->prepare($sql);
            $stmt->execute(['cou_name' => $cou_name]);
            $result = $stmt->fetch();
            if($result != false){
                //if coupon name already existed
                $result = [
                    'msg'  =>       "coupon code exist already, Use another name to avoid confusing users",
                    'code' =>        400
                ];
            }else{

                $sql = "INSERT INTO coupon (cou_name, cou_type, cou_value, cou_expiredate, cou_priceconstraint, cou_qtyconstraint) 
                VALUES (:cou_name, :cou_type, :cou_value, :cou_expiredate, :cou_priceconstraint, :cou_qtyconstraint)";
                $stmt = $conn->prepare($sql);
                $savedcoupon = $stmt->execute(['cou_name' => $cou_name, 'cou_type' => $cou_type, 'cou_value' => $cou_value, 'cou_expiredate' => $cou_expiredate, 'cou_priceconstraint' => $cou_priceconstraint, 'cou_qtyconstraint' => $cou_qtyconstraint, ]);

                if($savedcoupon){
                    $result = [
                                        'msg'  =>       "coupon created successfully",
                                        'code' =>        200
                                    ];
                }else{
                    $result = [
                        'msg'  =>       "An Error occured while attempting to create coupon, Please try again l;ater",
                        'code' =>        400
                    ];
                }

               

            }

            


        }


        echo (json_encode($result)); 
      
        
    }else{
        echo (json_encode([
                    'data'  =>       $_POST,
                    'code' =>        500
                ])); 
    }
        

       
?>