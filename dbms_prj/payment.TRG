TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `update` BEFORE INSERT ON `payment` FOR EACH ROW INSERT INTO upadate_payment VALUES(NEW.cart_id,NEW.customer_id,NOW())' 'CREATE DEFINER=`root`@`localhost` TRIGGER `addition` AFTER INSERT ON `payment` FOR EACH ROW INSERT INTO upadate_payment VALUES(NEW.cart_id,NEW.customer_id)' 'CREATE DEFINER=`root`@`localhost` TRIGGER `NEW` AFTER INSERT ON `payment` FOR EACH ROW INSERT INTO upadate_payment VALUES(NEW.customer_id, NOW(),NEW.payment_id,NEW.total_amount)' 'CREATE DEFINER=`root`@`localhost` TRIGGER `new1` AFTER INSERT ON `payment` FOR EACH ROW INSERT INTO upadate_payment VALUES(NEW.Customer_id,NOW(),NEW.payment_id,NEW.total_amount)'
sql_modes=1098907648 1098907648 1098907648 1098907648
definers='root@localhost' 'root@localhost' 'root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4' 'utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci' 'utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci' 'utf8mb4_general_ci' 'utf8mb4_general_ci'
created=166925549468 166925532804 166925623622 166925663585
