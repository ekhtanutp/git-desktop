CREATE TABLE `tb_member` (
  `member_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `member_lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`member_id`, `username`, `member_name`, `member_lname`, `email`) VALUES
(1, 'devbanban', 'aaa  bbb', 'dotcom', 'devbanban@gmail.com'),
(2, 'devbanban', 'ccc  ddd', 'dotcom', 'devbanban@gmail.com'),
(3, 'devbanban', 'eee  fff', 'dotcom', 'devbanban@gmail.com'),
(4, 'devbanban', 'devbanban.com', 'dotcom', 'devbanban@gmail.com');


ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`member_id`);


ALTER TABLE `tb_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;