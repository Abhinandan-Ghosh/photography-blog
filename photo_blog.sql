-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2018 at 04:31 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

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
  `views` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `admin_id`, `title`, `slug`, `views`, `image`, `body`, `created_at`) VALUES
(1, 1, 'Sample Title', 'sample-title', 0, 'bkup.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-11-05 16:56:43'),
(2, 2, 'Hut', 'hut', 0, 'post2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies libero leo, ut luctus nulla commodo in. Cras malesuada, sem sit amet dignissim aliquam, diam nibh tincidunt eros, quis elementum purus ligula non leo. Praesent eget turpis id dolor auctor venenatis vitae non purus. Maecenas ultricies consectetur hendrerit. In tempus lectus quis augue lacinia, vitae tempus metus cursus. Quisque feugiat, neque ac consequat porta, ipsum sem lacinia libero, eu egestas dui velit ac nisi. Mauris efficitur, urna ac tristique facilisis, nisl elit convallis nulla, nec sagittis turpis est at est. Vivamus volutpat ornare risus faucibus placerat. Nulla fringilla velit eu aliquam lacinia.\r\n\r\nAliquam dignissim nulla eu dolor tristique lacinia. Proin dui tortor, imperdiet in nulla id, tristique consequat est. Phasellus vel cursus ipsum. Nunc sit amet orci nibh. Fusce pulvinar eget purus a porta. Suspendisse vitae nulla vel erat fermentum ullamcorper id eu lacus. Nullam volutpat lectus sem, tempus placerat ipsum volutpat et. Nam a lacus rhoncus felis dapibus condimentum. Curabitur imperdiet vitae turpis vitae dictum. Curabitur egestas est ipsum, sit amet finibus odio interdum ac. Ut egestas, dui vel accumsan euismod, est ante consectetur lorem, sit amet rhoncus ligula tellus sit amet augue. Phasellus at pretium turpis, consectetur porttitor dui. Praesent molestie sapien varius, dapibus massa eu, maximus libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris nec arcu diam.\r\n\r\nProin eleifend tellus leo, ut posuere nibh ultrices ac. Etiam eu volutpat neque, ut convallis elit. Nam sollicitudin quis lectus sed aliquet. In hac habitasse platea dictumst. Nunc egestas, lorem id molestie placerat, tellus mi vulputate nisi, ut suscipit turpis magna pharetra sem. Ut sit amet blandit risus. Nulla rhoncus ultricies massa id fringilla.\r\n\r\nDonec vitae luctus dolor, commodo commodo ex. Phasellus ac eros eget turpis faucibus tempus. Mauris tristique lectus enim, eget commodo urna feugiat vehicula. Sed varius nisi et justo consectetur, eu mattis neque dapibus. Vestibulum malesuada egestas est vitae vestibulum. Vestibulum quis quam et nibh rhoncus viverra fringilla vitae lacus. In tristique mattis arcu sit amet cursus. Proin venenatis mi ligula, ac ultricies quam malesuada vitae. Nullam eget mauris pulvinar, sagittis urna eu, imperdiet sapien. Curabitur ac consectetur sapien. Sed faucibus orci sed ultricies posuere. Maecenas viverra diam id leo porta, vitae ullamcorper justo aliquam. Etiam interdum venenatis lorem, sed ultricies orci finibus eu. Sed scelerisque massa a dolor euismod congue.\r\n\r\nCras sodales egestas lectus, sit amet elementum turpis finibus ut. Quisque molestie fringilla velit sit amet feugiat. Morbi dictum lorem eget est lacinia, vel ornare nibh porttitor. Nam semper augue sed nunc maximus vestibulum. Morbi maximus, augue eu ornare congue, orci mauris accumsan dui, sit amet malesuada dui urna at ante. Fusce vitae metus ullamcorper, imperdiet justo eu, pellentesque lorem. Curabitur a laoreet nibh.', '2018-11-06 12:10:15'),
(3, 1, 'Post 3', 'post-3', 0, 'bkup.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies libero leo, ut luctus nulla commodo in. Cras malesuada, sem sit amet dignissim aliquam, diam nibh tincidunt eros, quis elementum purus ligula non leo. Praesent eget turpis id dolor auctor venenatis vitae non purus. Maecenas ultricies consectetur hendrerit. In tempus lectus quis augue lacinia, vitae tempus metus cursus. Quisque feugiat, neque ac consequat porta, ipsum sem lacinia libero, eu egestas dui velit ac nisi. Mauris efficitur, urna ac tristique facilisis, nisl elit convallis nulla, nec sagittis turpis est at est. Vivamus volutpat ornare risus faucibus placerat. Nulla fringilla velit eu aliquam lacinia.\r\n\r\nAliquam dignissim nulla eu dolor tristique lacinia. Proin dui tortor, imperdiet in nulla id, tristique consequat est. Phasellus vel cursus ipsum. Nunc sit amet orci nibh. Fusce pulvinar eget purus a porta. Suspendisse vitae nulla vel erat fermentum ullamcorper id eu lacus. Nullam volutpat lectus sem, tempus placerat ipsum volutpat et. Nam a lacus rhoncus felis dapibus condimentum. Curabitur imperdiet vitae turpis vitae dictum. Curabitur egestas est ipsum, sit amet finibus odio interdum ac. Ut egestas, dui vel accumsan euismod, est ante consectetur lorem, sit amet rhoncus ligula tellus sit amet augue. Phasellus at pretium turpis, consectetur porttitor dui. Praesent molestie sapien varius, dapibus massa eu, maximus libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris nec arcu diam.\r\n\r\nProin eleifend tellus leo, ut posuere nibh ultrices ac. Etiam eu volutpat neque, ut convallis elit. Nam sollicitudin quis lectus sed aliquet. In hac habitasse platea dictumst. Nunc egestas, lorem id molestie placerat, tellus mi vulputate nisi, ut suscipit turpis magna pharetra sem. Ut sit amet blandit risus. Nulla rhoncus ultricies massa id fringilla.\r\n\r\nDonec vitae luctus dolor, commodo commodo ex. Phasellus ac eros eget turpis faucibus tempus. Mauris tristique lectus enim, eget commodo urna feugiat vehicula. Sed varius nisi et justo consectetur, eu mattis neque dapibus. Vestibulum malesuada egestas est vitae vestibulum. Vestibulum quis quam et nibh rhoncus viverra fringilla vitae lacus. In tristique mattis arcu sit amet cursus. Proin venenatis mi ligula, ac ultricies quam malesuada vitae. Nullam eget mauris pulvinar, sagittis urna eu, imperdiet sapien. Curabitur ac consectetur sapien. Sed faucibus orci sed ultricies posuere. Maecenas viverra diam id leo porta, vitae ullamcorper justo aliquam. Etiam interdum venenatis lorem, sed ultricies orci finibus eu. Sed scelerisque massa a dolor euismod congue.\r\n\r\nCras sodales egestas lectus, sit amet elementum turpis finibus ut. Quisque molestie fringilla velit sit amet feugiat. Morbi dictum lorem eget est lacinia, vel ornare nibh porttitor. Nam semper augue sed nunc maximus vestibulum. Morbi maximus, augue eu ornare congue, orci mauris accumsan dui, sit amet malesuada dui urna at ante. Fusce vitae metus ullamcorper, imperdiet justo eu, pellentesque lorem. Curabitur a laoreet nibh.', '2018-11-06 12:26:00'),
(4, 1, 'Post 4', 'post-4', 0, 'post2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies libero leo, ut luctus nulla commodo in. Cras malesuada, sem sit amet dignissim aliquam, diam nibh tincidunt eros, quis elementum purus ligula non leo. Praesent eget turpis id dolor auctor venenatis vitae non purus. Maecenas ultricies consectetur hendrerit. In tempus lectus quis augue lacinia, vitae tempus metus cursus. Quisque feugiat, neque ac consequat porta, ipsum sem lacinia libero, eu egestas dui velit ac nisi. Mauris efficitur, urna ac tristique facilisis, nisl elit convallis nulla, nec sagittis turpis est at est. Vivamus volutpat ornare risus faucibus placerat. Nulla fringilla velit eu aliquam lacinia.\r\n\r\nAliquam dignissim nulla eu dolor tristique lacinia. Proin dui tortor, imperdiet in nulla id, tristique consequat est. Phasellus vel cursus ipsum. Nunc sit amet orci nibh. Fusce pulvinar eget purus a porta. Suspendisse vitae nulla vel erat fermentum ullamcorper id eu lacus. Nullam volutpat lectus sem, tempus placerat ipsum volutpat et. Nam a lacus rhoncus felis dapibus condimentum. Curabitur imperdiet vitae turpis vitae dictum. Curabitur egestas est ipsum, sit amet finibus odio interdum ac. Ut egestas, dui vel accumsan euismod, est ante consectetur lorem, sit amet rhoncus ligula tellus sit amet augue. Phasellus at pretium turpis, consectetur porttitor dui. Praesent molestie sapien varius, dapibus massa eu, maximus libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris nec arcu diam.\r\n\r\nProin eleifend tellus leo, ut posuere nibh ultrices ac. Etiam eu volutpat neque, ut convallis elit. Nam sollicitudin quis lectus sed aliquet. In hac habitasse platea dictumst. Nunc egestas, lorem id molestie placerat, tellus mi vulputate nisi, ut suscipit turpis magna pharetra sem. Ut sit amet blandit risus. Nulla rhoncus ultricies massa id fringilla.\r\n\r\nDonec vitae luctus dolor, commodo commodo ex. Phasellus ac eros eget turpis faucibus tempus. Mauris tristique lectus enim, eget commodo urna feugiat vehicula. Sed varius nisi et justo consectetur, eu mattis neque dapibus. Vestibulum malesuada egestas est vitae vestibulum. Vestibulum quis quam et nibh rhoncus viverra fringilla vitae lacus. In tristique mattis arcu sit amet cursus. Proin venenatis mi ligula, ac ultricies quam malesuada vitae. Nullam eget mauris pulvinar, sagittis urna eu, imperdiet sapien. Curabitur ac consectetur sapien. Sed faucibus orci sed ultricies posuere. Maecenas viverra diam id leo porta, vitae ullamcorper justo aliquam. Etiam interdum venenatis lorem, sed ultricies orci finibus eu. Sed scelerisque massa a dolor euismod congue.\r\n\r\nCras sodales egestas lectus, sit amet elementum turpis finibus ut. Quisque molestie fringilla velit sit amet feugiat. Morbi dictum lorem eget est lacinia, vel ornare nibh porttitor. Nam semper augue sed nunc maximus vestibulum. Morbi maximus, augue eu ornare congue, orci mauris accumsan dui, sit amet malesuada dui urna at ante. Fusce vitae metus ullamcorper, imperdiet justo eu, pellentesque lorem. Curabitur a laoreet nibh.', '2018-11-06 12:26:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_topic`
--

INSERT INTO `post_topic` (`id`, `post_id`, `topic_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `slug`) VALUES
(1, 'Inspiration', 'inspiration'),
(2, 'Motivation', 'motivation'),
(3, 'Diary', 'diary');

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
