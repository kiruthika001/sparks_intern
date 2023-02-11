SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Asibul Hasan', 'asibulhasan23@gmail.com', 50000),
(2, 'User2', 'user2@gmail.com', 50000),
(3, 'User3', 'user3@gmail.com', 50000),
(4, 'User4', 'user4@gmail.com', 50000),
(5, 'User5', 'user5@gmail.com', 50000),
(6, 'User6', 'user6@gmail.com', 50000),
(7, 'User7', 'user7@gmail.com', 50000),
(8, 'User8', 'user8@gmail.com', 50000),
(9, 'User9', 'user9@gmail.com', 50000),
(10, 'User10', 'user10@gmail.com', 50000);


ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

