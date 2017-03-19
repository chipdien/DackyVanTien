TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`%` TRIGGER `memberskill_insert_check` BEFORE INSERT ON `guildmemberskill` FOR EACH ROW SET NEW.finish = \'1900-01-01 00:00:00\''
sql_modes=0
definers='root@%'
