TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`%` TRIGGER `fightrecord_update_time` BEFORE INSERT ON `fightrecord` FOR EACH ROW SET NEW.RecordTime = NOW()'
sql_modes=0
definers='root@%'
