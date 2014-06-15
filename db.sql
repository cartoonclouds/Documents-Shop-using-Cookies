-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 18, 2014 at 05:25 PM
-- Server version: 5.1.71
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tsrdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `docs`
--

CREATE TABLE IF NOT EXISTS `docs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `docs`
--

INSERT INTO `docs` (`id`, `title`, `info`) VALUES
(1, 'Mr. Tickle', 'Mr. Tickle''s story stops and really begins with him in bed and making himself breakfast without getting up because of his "extraordinarily long arms". He then decides that it is a tickling sort of day and so goes around town tickling people - a teacher, a policeman, a greengrocer, a station guard, a doctor, a butcher and a postman. He tickles them inappropriately.'),
(2, 'Mr. Greedy', 'The story begins with Mr. Greedy waking up and having his overly large daily breakfast. He then goes on a walk afterwards and finds his way into a cave where everything is larger than life and he begins to explore, finding larger than normal food. Mr. Greedy is then picked up by a giant who then teaches him a lesson and makes him eat all the giant food, making Mr. Greedy end up bigger and feeling like he would burst at any moment. The giant agrees to let him go as long as he promises to never be greedy again. Mr. Greedy promises and then at the end he is still keeping the promise and now has lost some weight, and it shows him looking much thinner at the end.'),
(3, 'Mr. Topsy-Turvy', 'Mr. Topsy-Turvy does everything the wrong way. One day he comes to the town where the reader lives. He rents a room in a hotel, speaking to the hotel manager the wrong way, "Afternoon good, I''d room a like." The next day, he confuses the taxi driver with his backwards speaking, causing an accident, buying a pair of socks and putting them on his hands, then he disappears, but everything is still topsy-turvy. Everybody still speaks topsy-turvy, and the reader is asked to say something topsy-turvy.'),
(4, 'Little Miss Bossy', 'Little Miss Bossy is very bossy (hence her name) and she is as rude as Mr Uppity, so she is given a pair of boots which have a mind of their own; they don''t listen to her, because she is too bossy.'),
(5, 'Mr. Uppity', 'Mr. Uppity lives in Bigtown and he is very rich. He is rude to everybody (they call him Miserable old Uppity) until one day he meets a goblin. When he is rude to the goblin, the goblin shrinks Mr. Uppity so he can fit into a hole in a tree, and they enter the tree to meet the King of the Goblins. The goblin agrees to shrink Mr. Uppity if he is rude to somebody. This happens, until Mr. Uppity is nice. In the end, he''s still rich, but now he''s very popular. He most frequently uses the words, "Please" and "Thank you." Hargreaves says, "Thank you for reading this story, and if you''re ever thinking about being rude to somebody, please keep a sharp lookout for goblins."');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE IF NOT EXISTS `purchases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(120) NOT NULL,
  `docId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `email`, `docId`) VALUES
(1, 'ekonstantinidis@outlook.com', 1),
(2, 'ekonstantinidis@outlook.com', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
