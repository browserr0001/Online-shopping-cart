TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `insert_log` AFTER DELETE ON `product` FOR EACH ROW INSERT INTO log VALUES(NULL,OLD.Product_id,OLD.Cost)'
sql_modes=1098907648
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci'
created=166926059927
