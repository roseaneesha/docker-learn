DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;


INSERT INTO `items` (`id`, `content`, `date`) VALUES (3, 'Finish notes', '2022-01-19');
INSERT INTO `items` (`id`, `content`, `date`) VALUES (4, 'Clean room', '2022-01-19');
INSERT INTO `items` (`id`, `content`, `date`) VALUES (5, 'Do laundry', '2022-01-19');
INSERT INTO `items` (`id`, `content`, `date`) VALUES (6, 'Finish ppt', '2022-01-19');

