CREATE TABLE IF NOT EXISTS `users` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `userName` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `amount` int(50) NOT NULL,
  `name` text NOT NULL,
  `cmt` int(9) NOT NULL,
  `addresss` text  NOT NULL,
  `rand` text  NOT NULL,
  `telePhone` int(12) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;
