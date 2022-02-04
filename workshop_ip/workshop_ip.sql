CREATE TABLE `contact` (
  `cid` int(10) NOT NULL auto_increment,
  `detail` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `cip` varchar(20) NOT NULL,
  `datesave` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;