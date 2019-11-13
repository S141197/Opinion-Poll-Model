<?php
CREATE TABLE 'authors' 
(
'id' int(11) NOT NULL AUTO_INCREMENT,
'choice' tinyint(4) NOT NULL DEFAULT '0',
'ts' timestamp NULL DEFAULT NULL,
PRIMARY KEY ('id')
)
?>