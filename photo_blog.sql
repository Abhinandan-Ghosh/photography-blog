-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2018 at 06:58 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photo_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Abhinandan', 'password'),
(2, 'Calvin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `admin_id`, `title`, `slug`, `image`, `body`, `created_at`) VALUES
(5, 2, 'Grazing Deer', 'grazing-deer', 'animals/deer.jpg', 'Deers grazing in front of a mountain.Deers grazing in front of a mountain.', '2018-12-02 18:57:00'),
(6, 1, 'Eagle', 'eagle', 'birds/eagle.jpg', 'This majestic bald eagle is an amazing bird of prey.', '2018-12-02 18:58:29'),
(7, 2, 'Gloomy City', 'gloomy-city', 'cityscapes/city1.jpg', 'This picture depicts what I feel whenever I visit this city.', '2018-12-02 18:59:33'),
(8, 1, 'Golden Rays', 'golden-rays', 'landscapes/land1.jpg', 'Walking through this place was a very heart warming experience.', '2018-12-02 19:00:36'),
(9, 1, 'Horse', 'horse', 'animals/horse', 'A portrait of a horse', '2018-12-02 19:02:39'),
(10, 2, 'Seagull', 'seagull', 'birds/seagull.jpg', 'The seagulls flew right into my face. Ouch.', '2018-12-02 19:09:35'),
(11, 1, 'Eye see you', 'eye-see-you', 'animals/dog.jpg', 'The eyes can express what one truly feels.', '2018-12-02 19:33:30'),
(12, 1, 'Roaring Yawn', 'roaring-yawn', 'animals/lion.jpg', 'You\'re gonna see me rooaaaarrrr! (yawwwn)', '2018-12-02 19:33:30'),
(13, 1, 'Thirsty Beast', 'thirsty-beast', 'animals/tiger.jpg', 'A tiger drinking water. Look at this amazing marvel of nature.', '2018-12-02 19:36:42'),
(14, 1, 'Wolf', 'wolf', 'animals/wolf', 'A wolf sitting by the water gracefully. ', '2018-12-02 19:36:42'),
(15, 1, 'Sitting Bird', 'sitting-bird', 'birds/birdy.jpg', 'This lil Birdy casually flew in and sat on my outstretched hand.', '2018-12-02 19:42:33'),
(16, 1, 'Brown Bird', 'brown-bird', 'birds/brownbird.jpg', 'A brown bird sitting on a dry branch during winter.', '2018-12-02 19:43:42'),
(17, 2, 'Macaw', 'macaw', 'birds/macaw.jpg', 'The Rainbow Personified.', '2018-12-02 19:46:38'),
(18, 2, 'Parakeets', 'parakeets', 'birds/bird6.jpg', 'Two Beautiful Parakeets sitting on a branch.', '2018-12-02 19:49:56'),
(19, 1, 'Pray', 'pray', 'portraits/portrait1.jpg', 'Pray for me.', '2018-12-02 20:02:27'),
(20, 1, 'Black n White', 'bnw', 'portraits/portrait2.jpg', 'A Monochromatic Portrait.', '2018-12-02 20:02:27'),
(21, 2, 'Shoo', 'shoo', 'portraits/portrait3.jpg', 'A Blurry shoe drawing attention elsewhere.', '2018-12-02 20:02:27'),
(22, 1, 'Just Smile', 'just-smile', 'portraits/portrait4.jpg', 'Just Smile. For no Reason. Just Smile.', '2018-12-02 20:02:27'),
(23, 1, 'Hmmmm', 'hmmmm', 'portraits/portrait5.jpg', 'Thinking. Thinking out loud? Thinking.', '2018-12-02 20:02:27'),
(24, 2, 'Dual', 'dual', 'portraits/portrait6.jpg', 'Rainbow effect using a prism.', '2018-12-02 20:02:27'),
(27, 1, 'Misty Forest', 'forest', 'landscapes/land2.jpg', 'A luscious coniferous forest covered in mist.', '2018-12-02 23:40:53'),
(28, 1, 'Paradise', 'paradise', 'landscapes/land3.jpg', 'There are no words to describe this place. I\'m awestruck.', '2018-12-02 23:43:23'),
(29, 2, 'Lonely Lighthouse', 'lighthouse', 'landscapes/land4.jpg', 'The lighthouse in the distant looks so lonely, a forever guardian of this sea.', '2018-12-02 23:44:50'),
(30, 2, 'Final Boss', 'boss', 'landscapes/land5.jpg', 'This mountain looks like as if it\'s the final boss of an arcade game.', '2018-12-02 23:45:51'),
(31, 1, 'Cliffhanger', 'cliffhanger', 'landscapes/land6.jpg', 'Life at the sea is so challenging yet so soothing.', '2018-12-02 23:47:08'),
(37, 2, 'City Life', 'citylife', 'cityscapes/city2.jpg', 'Concrete Jungle. Self made cage.', '2018-12-03 00:19:09'),
(38, 1, 'Night Life', 'nightlife', 'cityscapes/city3.jpg', 'Nobody sleeps in this city. Life in the Fast lane.', '2018-12-03 00:19:09'),
(39, 2, 'Mood', 'mood', 'cityscapes/city4.jpg', 'The clouds bring a moody tone that perfectly depicts life in this city.', '2018-12-03 00:19:09'),
(40, 1, 'Twilight', 'twilight', 'cityscapes/city5.jpg', 'The city\'s silhouette stands out brilliantly at the dual tone twilight hour.', '2018-12-03 00:19:09'),
(41, 2, 'Dubai', 'dubai', 'cityscapes/city6.jpg', 'One of the best cityscape photographs you can take are probably waiting for you in Dubai.', '2018-12-03 00:19:09');

-- --------------------------------------------------------

--
-- Table structure for table `post_topic`
--

DROP TABLE IF EXISTS `post_topic`;
CREATE TABLE IF NOT EXISTS `post_topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `post_id` (`post_id`),
  KEY `post_topic_ibfk_2` (`topic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_topic`
--

INSERT INTO `post_topic` (`id`, `post_id`, `topic_id`) VALUES
(5, 5, 1),
(6, 9, 1),
(7, 11, 1),
(8, 12, 1),
(9, 13, 1),
(10, 14, 1),
(11, 24, 5),
(12, 23, 5),
(13, 22, 5),
(14, 21, 5),
(15, 20, 5),
(16, 19, 5),
(17, 6, 2),
(18, 10, 2),
(19, 15, 2),
(20, 16, 2),
(21, 17, 2),
(22, 18, 2),
(27, 7, 3),
(28, 8, 4),
(29, 27, 4),
(30, 28, 4),
(31, 29, 4),
(32, 30, 4),
(33, 31, 4),
(34, 37, 3),
(35, 38, 3),
(36, 39, 3),
(37, 40, 3),
(38, 41, 3);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `slug`) VALUES
(1, 'Animals', 'animals'),
(2, 'Birds', 'birds'),
(3, 'Cityscape', 'cityscape'),
(4, 'Landscape', 'landscape'),
(5, 'Portraits', 'portraits');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `post_topic`
--
ALTER TABLE `post_topic`
  ADD CONSTRAINT `post_topic_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `post_topic_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
