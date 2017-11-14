-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2017 at 11:57 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anonymousblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `postID` int(11) NOT NULL,
  `anonymousID` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `userID`, `postID`, `anonymousID`, `comment`) VALUES
(7, 1, 1, 2960, 'xa'),
(8, 1, 1, 2960, 'xa'),
(9, 1, 1, 2960, 'xa'),
(10, 1, 1, 2960, 'xa'),
(11, 1, 1, 2960, 'xa'),
(12, 1, 1, 2960, 'xa'),
(13, 1, 1, 2960, 'aaa'),
(14, 1, 1, 2960, 'aaaa'),
(15, 1, 2, 1345, 'dadada'),
(16, 1, 2, 1345, 'dada'),
(17, 1, 2, 1345, 'dadada'),
(18, 1, 2, 1345, 'dadada'),
(19, 1, 2, 1345, 'xa'),
(20, 1, 2, 1345, 'xa'),
(21, 2, 1, 1834, '123'),
(22, 2, 1, 1834, '123'),
(23, 2, 3, 2549, '123'),
(24, 2, 3, 2549, '123'),
(25, 2, 3, 2549, '123'),
(26, 2, 3, 2549, '123'),
(27, 2, 4, 2265, '123'),
(28, 2, 4, 2265, '123'),
(29, 2, 4, 2265, '123'),
(30, 2, 4, 2265, '123'),
(31, 2, 4, 2265, '123'),
(32, 2, 4, 2265, 'xa'),
(33, 2, 4, 2265, 'xa'),
(34, 2, 4, 2265, 'xa'),
(35, 2, 4, 2265, 'dada'),
(36, 2, 1, 1834, 'agahagga'),
(37, 2, 1, 2649, 'dada'),
(38, 2, 1, 1810, 'dada'),
(39, 2, 1, 2613, 'dada'),
(40, 2, 1, 301, 'xaxaxaxa'),
(41, 2, 1, 683, 'xaxa'),
(42, 2, 1, 1834, 'dada'),
(43, 2, 1, 1834, 'dada'),
(44, 2, 1, 1834, 'dada'),
(45, 2, 1, 92, 'xa'),
(46, 2, 1, 129, 'xa'),
(47, 2, 1, 562, 'xa'),
(48, 2, 1, 2252, 'xa'),
(49, 2, 1, 2495, 'xa'),
(50, 2, 1, 2633, 'xa'),
(51, 2, 1, 1332, 'xa'),
(52, 2, 1, 2385, 'xaxa'),
(53, 2, 1, 1422, 'xaxa'),
(54, 2, 1, 1403, 'xaxa'),
(55, 2, 1, 268, 'xaax'),
(56, 2, 1, 613, 'xa'),
(57, 2, 1, 2782, 'xaxa'),
(58, 2, 1, 1223, 'xaxa'),
(59, 2, 1, 2527, 'xaxa'),
(60, 2, 1, 1834, 'adadA'),
(61, 2, 1, 1834, 'adada'),
(62, 2, 1, 1834, 'addad'),
(63, 2, 1, 1834, 'adada'),
(64, 2, 1, 1834, 'adada'),
(65, 2, 2, 969, 'axaxa'),
(66, 2, 2, 969, 'xaxaxaxa'),
(67, 2, 2, 969, 'axa'),
(68, 2, 5, 2373, '123123'),
(69, 2, 5, 2373, '123123'),
(70, 2, 1, 1834, 'ahhaa'),
(71, 2, 6, 2201, 'zxc'),
(72, 2, 6, 2201, 'zxc'),
(73, 2, 6, 2201, 'ax'),
(74, 2, 1, 1834, 'xa'),
(75, 2, 6, 2201, 'xa'),
(76, 2, 7, 285, 'test'),
(77, 2, 7, 285, 'test'),
(78, 2, 7, 285, 'test'),
(79, 2, 7, 285, 'xa'),
(80, 2, 8, 2770, 'dada'),
(81, 2, 8, 2770, 'dada'),
(82, 2, 8, 2770, 'dada'),
(83, 2, 9, 2911, 'xaxa'),
(84, 2, 9, 2911, 'xaxa'),
(85, 2, 10, 950, 'xa'),
(86, 2, 10, 950, 'xa'),
(87, 2, 11, 2596, 'nini 123'),
(88, 2, 11, 2596, 'nini 123 1'),
(89, 3, 11, 33, 'nika'),
(90, 3, 11, 33, 'nika '),
(91, 2, 12, 21, 'dada'),
(92, 2, 12, 21, 'xaxa'),
(93, 2, 12, 21, 'xaxaxaxa'),
(94, 2, 12, 21, 'xa'),
(95, 2, 12, 21, 'xa'),
(96, 2, 15, 2121, 'cacaca'),
(97, 2, 15, 2121, 'cacaca'),
(98, 2, 15, 2121, 'cacaca'),
(99, 2, 15, 2121, 'ca'),
(100, 2, 4, 2265, 'xaxa'),
(101, 2, 4, 2265, 'xaxa'),
(102, 2, 6, 906, 'xa'),
(103, 2, 6, 906, 'xa'),
(104, 2, 6, 906, 'xa'),
(105, 2, 16, 1289, 'ahahah'),
(106, 2, 16, 1289, 'ahaha'),
(107, 2, 15, 2121, 'xaxa'),
(108, 2, 15, 2121, 'xaxa'),
(109, 2, 15, 2121, 'xaxa'),
(110, 2, 15, 2121, 'cacaca'),
(111, 2, 15, 2121, 'cacaca'),
(112, 2, 15, 2121, 'ca'),
(113, 2, 15, 2121, 'caca'),
(114, 2, 20, 1531, 's'),
(115, 2, 20, 1531, 's'),
(116, 2, 16, 1289, 'dsa'),
(117, 2, 16, 1289, 'xaaaaaaaaaaaaaaaaaaaaaxaaaaaaaaaaaaaaaaaaaaaxaaaaaaaaaaaaaaaaaaaaaxaaaaaaaaaaaaaaaaaaaaaxaaaaaaaaaaaaaaaaaaaaaxaaaaaaaaaaaaaaaaaaaaaxaaaaaaaaaaaaaaaaaaaaaxaaaaaaaaaaaaaaaaaaaaaxaaaaaaaaaaaaaaaaaaaaaxaaaaaaaaaaaaaaaaaaaaaxaaaaaaaaaaaaaaaaaaaaa'),
(118, 2, 17, 1314, 'aaaaaaaaaaaaaaaa'),
(119, 2, 17, 1314, 'ahahaha'),
(120, 2, 21, 2951, 'xaxaax'),
(121, 2, 21, 2951, 'xaxa'),
(122, 2, 18, 2117, 'xaxa'),
(123, 2, 20, 1531, 'adadada'),
(124, 1, 15, 2967, 'dasda'),
(125, 1, 17, 1737, 'dasda'),
(126, 2, 35, 114, 'rgf'),
(127, 2, 35, 114, 'fgd'),
(128, 2, 35, 114, 'fgd'),
(129, 2, 36, 2389, 'sasa'),
(130, 2, 36, 2389, 'xaxaxa');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postID` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `anonymousID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `title`, `content`, `anonymousID`, `userID`) VALUES
(15, 'xa', 'xa', 2121, 2),
(16, 'dada', 'da', 1289, 2),
(17, 'this actually works', 'yahhhhhhhhh this really raeally works but now i must do coment stuff and somehow make porsting easyes... im thinking about making another page for porsting or making modal window', 1314, 2),
(18, '123', 'yahhhhhhhhh this really raeally works but now i must do coment stuff and somehow make porsting easyes... im thinking about making another page for porsting or making modal window aaaaaaa', 2117, 2),
(19, 'yahhhhhhhhh this really raeally works but now i must do coment stuff and somehow make porsting easyes... im thinking about making another page for porsting or making modal window', 'da', 100, 2),
(20, 'first time', 'first time', 1531, 2),
(21, 'asdasdasda', 'asdasdasdasdasdasdas', 2951, 2),
(22, 'ggg', 'gg', 291, 2),
(23, 'dasda', 'sda', 2978, 2),
(24, 'dsa', 'sda', 2147, 2),
(25, 'ssssssssss', 's', 1351, 2),
(26, 'sssssssss', 's', 34, 2),
(27, 's', 's', 2934, 2),
(28, 's', 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 504, 2),
(29, 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 1761, 2),
(30, 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 1389, 2),
(31, 'sssssssss', 'x', 1524, 2),
(32, 'x111111', 'x', 51, 2),
(33, '123', '123', 2851, 2),
(34, '123', '123', 454, 2),
(35, 'df', 'fsd', 114, 2),
(36, 'srrrr', 'srr', 2389, 2),
(37, 'y', 'y', 1292, 2),
(38, 'ghaaavvvv', 'ghaavv', 640, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`) VALUES
(1, '321', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(2, '123', '202cb962ac59075b964b07152d234b70'),
(3, 'nika', '15152999e4f8d343989729e38793678e'),
(4, 'nika', '15152999e4f8d343989729e38793678e'),
(5, 'nika1', '0f64188c48786e202009d3298da168ee'),
(6, 'nika1', '0f64188c48786e202009d3298da168ee'),
(7, 'aaaa', '74b87337454200d4d33f80c4663dc5e5'),
(8, 'aaaa', '74b87337454200d4d33f80c4663dc5e5'),
(9, 'xaxa', '483b855715a28b47217a74927601a416'),
(10, 'dsadsadas', 'c60dd1e9aab8a008a6b71d3845df9233'),
(11, 'xaxaxaax', 'b6b60bf78eb38f451b032cce0a850154'),
(12, 'ada', '8c8d357b5e872bbacd45197626bd5759'),
(13, 'axa', '100ee4be8175bd62d4f954323cff4325'),
(14, 'afa', 'dcf5500c7e53721d4b016e4793d5dd66'),
(15, 'aha', '124534a0ae447b0872b3092731a37d8e'),
(16, '444', '550a141f12de6341fba65b0ad0433500'),
(17, 'xaxaaxa', '5669dc348737ddda620bd0dd966f60f9'),
(18, 'xxx', 'f561aaf6ef0bf14d4208bb46a4ccb3ad'),
(19, 'xaz', 'dbd69ee9ae289a85ea34dbef8435d7c1'),
(20, 'czcz', '8a5cdfec60c9bfd948141f4a0d47566d'),
(21, 'zaza', '8ba97607a1485ccdbe19745ed80cd52d'),
(22, 'axaxaxa', '483b855715a28b47217a74927601a416'),
(23, 's', '03c7c0ace395d80182db07ae2c30f034');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
