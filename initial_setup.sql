create database recreational_sports;

CREATE USER seproject IDENTIFIED BY 'rsports'; 

grant usage on *.* to seproject@localhost identified by 'rsports'; 
grant all privileges on recreational_sports.* to seproject@localhost; 

CREATE TABLE `test_table` (	
  `test_id` bigint(20) NOT NULL,
  `test_column` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
