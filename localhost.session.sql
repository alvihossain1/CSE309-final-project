
--@Block
SHOW TABLES LIKE 'submission';

--@block
CREATE TABLE `submission` (
  `sub_id` INT NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comments` varchar(260) DEFAULT NULL,
  `submission_date` date DEFAULT current_timestamp(),
  PRIMARY KEY ( `sub_id` )
);

--@Block
DROP TABLE IF EXISTS submission;

--@Block
DROP TABLE IF EXISTS submission;
DROP TABLE IF EXISTS shows_t;
DROP TABLE IF EXISTS user_purchase_t;
DROP TABLE IF EXISTS user_t;