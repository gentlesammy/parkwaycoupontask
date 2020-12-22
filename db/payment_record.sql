-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 12:38 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `couponsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment_record`
--

CREATE TABLE `payment_record` (
  `pr_id` int(11) NOT NULL,
  `pr_pid` int(20) NOT NULL,
  `pr_reference` varchar(30) NOT NULL,
  `pr_status` varchar(50) NOT NULL,
  `pr_amount` int(50) NOT NULL,
  `pr_paid_at` datetime NOT NULL,
  `pr_channel` varchar(30) NOT NULL,
  `pr_currency` varchar(20) NOT NULL,
  `pr_ip_address` varchar(20) NOT NULL,
  `pr_customer_email` varchar(100) NOT NULL,
  `pr_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `pr_all_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ;

--
-- Dumping data for table `payment_record`
--

INSERT INTO `payment_record` (`pr_id`, `pr_pid`, `pr_reference`, `pr_status`, `pr_amount`, `pr_paid_at`, `pr_channel`, `pr_currency`, `pr_ip_address`, `pr_customer_email`, `pr_date`, `pr_all_data`) VALUES
(1, 931808559, '722540889', 'success', 16000, '2020-12-21 20:03:29', 'card', 'NGN', '197.210.65.177', 'tg4e4i9gvp@fakemailgenerator.net', '2020-12-21 20:03:35', '{\n  \"status\": true,\n  \"message\": \"Verification successful\",\n  \"data\": {\n    \"id\": 931808559,\n    \"domain\": \"test\",\n    \"status\": \"success\",\n    \"reference\": \"722540889\",\n    \"amount\": 16000,\n    \"message\": null,\n    \"gateway_response\": \"Successful\",\n    \"paid_at\": \"2020-12-21T20:03:29.000Z\",\n    \"created_at\": \"2020-12-21T20:03:24.000Z\",\n    \"channel\": \"card\",\n    \"currency\": \"NGN\",\n    \"ip_address\": \"197.210.65.177\",\n    \"metadata\": {\n      \"referrer\": \"http://localhost/couponsystemtask/carts.php\"\n    },\n    \"log\": {\n      \"start_time\": 1608581006,\n      \"time_spent\": 5,\n      \"attempts\": 1,\n      \"errors\": 0,\n      \"success\": true,\n      \"mobile\": false,\n      \"input\": [],\n      \"history\": [\n        {\n          \"type\": \"action\",\n          \"message\": \"Attempted to pay with card\",\n          \"time\": 5\n        },\n        {\n          \"type\": \"success\",\n          \"message\": \"Successfully paid with card\",\n          \"time\": 5\n        }\n      ]\n    },\n    \"fees\": 240,\n    \"fees_split\": null,\n    \"authorization\": {\n      \"authorization_code\": \"AUTH_st1648dpoa\",\n      \"bin\": \"408408\",\n      \"last4\": \"4081\",\n      \"exp_month\": \"12\",\n      \"exp_year\": \"2020\",\n      \"channel\": \"card\",\n      \"card_type\": \"visa \",\n      \"bank\": \"TEST BANK\",\n      \"country_code\": \"NG\",\n      \"brand\": \"visa\",\n      \"reusable\": true,\n      \"signature\": \"SIG_H9BxUpM6AEv6PCt0VSIm\",\n      \"account_name\": null,\n      \"receiver_bank_account_number\": null,\n      \"receiver_bank\": null\n    },\n    \"customer\": {\n      \"id\": 35825611,\n      \"first_name\": \"\",\n      \"last_name\": \"\",\n      \"email\": \"tg4e4i9gvp@fakemailgenerator.net\",\n      \"customer_code\": \"CUS_y9fbd4rwktm49u8\",\n      \"phone\": \"\",\n      \"metadata\": null,\n      \"risk_action\": \"default\",\n      \"international_format_phone\": null\n    },\n    \"plan\": null,\n    \"split\": {},\n    \"order_id\": null,\n    \"paidAt\": \"2020-12-21T20:03:29.000Z\",\n    \"createdAt\": \"2020-12-21T20:03:24.000Z\",\n    \"requested_amount\": 16000,\n    \"pos_transaction_data\": null,\n    \"transaction_date\": \"2020-12-21T20:03:24.000Z\",\n    \"plan_object\": {},\n    \"subaccount\": {}\n  }\n}'),
(4, 932525008, '779766797', 'success', 16000, '2020-12-22 11:28:22', 'card', 'NGN', '197.210.65.177', 'tg4e4i9gvp@fakemailgenerator.net', '2020-12-22 11:28:26', '{\n  \"status\": true,\n  \"message\": \"Verification successful\",\n  \"data\": {\n    \"id\": 932525008,\n    \"domain\": \"test\",\n    \"status\": \"success\",\n    \"reference\": \"779766797\",\n    \"amount\": 16000,\n    \"message\": null,\n    \"gateway_response\": \"Successful\",\n    \"paid_at\": \"2020-12-22T11:28:22.000Z\",\n    \"created_at\": \"2020-12-22T11:28:16.000Z\",\n    \"channel\": \"card\",\n    \"currency\": \"NGN\",\n    \"ip_address\": \"197.210.65.177\",\n    \"metadata\": {\n      \"referrer\": \"http://localhost/couponsystemtask/carts.php\"\n    },\n    \"log\": {\n      \"start_time\": 1608636498,\n      \"time_spent\": 7,\n      \"attempts\": 1,\n      \"errors\": 0,\n      \"success\": true,\n      \"mobile\": false,\n      \"input\": [],\n      \"history\": [\n        {\n          \"type\": \"action\",\n          \"message\": \"Attempted to pay with card\",\n          \"time\": 6\n        },\n        {\n          \"type\": \"success\",\n          \"message\": \"Successfully paid with card\",\n          \"time\": 7\n        }\n      ]\n    },\n    \"fees\": 240,\n    \"fees_split\": null,\n    \"authorization\": {\n      \"authorization_code\": \"AUTH_l3vp4ho62f\",\n      \"bin\": \"408408\",\n      \"last4\": \"4081\",\n      \"exp_month\": \"12\",\n      \"exp_year\": \"2020\",\n      \"channel\": \"card\",\n      \"card_type\": \"visa \",\n      \"bank\": \"TEST BANK\",\n      \"country_code\": \"NG\",\n      \"brand\": \"visa\",\n      \"reusable\": true,\n      \"signature\": \"SIG_H9BxUpM6AEv6PCt0VSIm\",\n      \"account_name\": null,\n      \"receiver_bank_account_number\": null,\n      \"receiver_bank\": null\n    },\n    \"customer\": {\n      \"id\": 35825611,\n      \"first_name\": \"\",\n      \"last_name\": \"\",\n      \"email\": \"tg4e4i9gvp@fakemailgenerator.net\",\n      \"customer_code\": \"CUS_y9fbd4rwktm49u8\",\n      \"phone\": \"\",\n      \"metadata\": null,\n      \"risk_action\": \"default\",\n      \"international_format_phone\": null\n    },\n    \"plan\": null,\n    \"split\": {},\n    \"order_id\": null,\n    \"paidAt\": \"2020-12-22T11:28:22.000Z\",\n    \"createdAt\": \"2020-12-22T11:28:16.000Z\",\n    \"requested_amount\": 16000,\n    \"pos_transaction_data\": null,\n    \"transaction_date\": \"2020-12-22T11:28:16.000Z\",\n    \"plan_object\": {},\n    \"subaccount\": {}\n  }\n}'),
(5, 932533948, '361602484', 'success', 16000, '2020-12-22 11:36:22', 'card', 'NGN', '197.210.65.177', 'tg4e4i9gvp@fakemailgenerator.net', '2020-12-22 11:36:26', '{\n  \"status\": true,\n  \"message\": \"Verification successful\",\n  \"data\": {\n    \"id\": 932533948,\n    \"domain\": \"test\",\n    \"status\": \"success\",\n    \"reference\": \"361602484\",\n    \"amount\": 16000,\n    \"message\": null,\n    \"gateway_response\": \"Successful\",\n    \"paid_at\": \"2020-12-22T11:36:22.000Z\",\n    \"created_at\": \"2020-12-22T11:36:16.000Z\",\n    \"channel\": \"card\",\n    \"currency\": \"NGN\",\n    \"ip_address\": \"197.210.65.177\",\n    \"metadata\": {\n      \"referrer\": \"http://localhost/couponsystemtask/carts.php\"\n    },\n    \"log\": {\n      \"start_time\": 1608636979,\n      \"time_spent\": 6,\n      \"attempts\": 1,\n      \"errors\": 0,\n      \"success\": true,\n      \"mobile\": false,\n      \"input\": [],\n      \"history\": [\n        {\n          \"type\": \"action\",\n          \"message\": \"Attempted to pay with card\",\n          \"time\": 3\n        },\n        {\n          \"type\": \"success\",\n          \"message\": \"Successfully paid with card\",\n          \"time\": 6\n        }\n      ]\n    },\n    \"fees\": 240,\n    \"fees_split\": null,\n    \"authorization\": {\n      \"authorization_code\": \"AUTH_k58dl3ri05\",\n      \"bin\": \"408408\",\n      \"last4\": \"4081\",\n      \"exp_month\": \"12\",\n      \"exp_year\": \"2020\",\n      \"channel\": \"card\",\n      \"card_type\": \"visa \",\n      \"bank\": \"TEST BANK\",\n      \"country_code\": \"NG\",\n      \"brand\": \"visa\",\n      \"reusable\": true,\n      \"signature\": \"SIG_H9BxUpM6AEv6PCt0VSIm\",\n      \"account_name\": null,\n      \"receiver_bank_account_number\": null,\n      \"receiver_bank\": null\n    },\n    \"customer\": {\n      \"id\": 35825611,\n      \"first_name\": \"\",\n      \"last_name\": \"\",\n      \"email\": \"tg4e4i9gvp@fakemailgenerator.net\",\n      \"customer_code\": \"CUS_y9fbd4rwktm49u8\",\n      \"phone\": \"\",\n      \"metadata\": null,\n      \"risk_action\": \"default\",\n      \"international_format_phone\": null\n    },\n    \"plan\": null,\n    \"split\": {},\n    \"order_id\": null,\n    \"paidAt\": \"2020-12-22T11:36:22.000Z\",\n    \"createdAt\": \"2020-12-22T11:36:16.000Z\",\n    \"requested_amount\": 16000,\n    \"pos_transaction_data\": null,\n    \"transaction_date\": \"2020-12-22T11:36:16.000Z\",\n    \"plan_object\": {},\n    \"subaccount\": {}\n  }\n}');

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_record`
--
ALTER TABLE `payment_record`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
