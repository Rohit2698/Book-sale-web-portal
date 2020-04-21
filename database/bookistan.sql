-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 08:46 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookistan`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_details`
--

CREATE TABLE `book_details` (
  `s_no` int(100) NOT NULL,
  `isbn_no` varchar(20) NOT NULL,
  `book_name` text NOT NULL,
  `book_description` longtext NOT NULL,
  `book_genre` text NOT NULL,
  `book_author` text NOT NULL,
  `book_image` text NOT NULL,
  `cost` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_details`
--

INSERT INTO `book_details` (`s_no`, `isbn_no`, `book_name`, `book_description`, `book_genre`, `book_author`, `book_image`, `cost`, `quantity`) VALUES
(4, '9780140620139', 'MOONSTONE', 'The Moonstone, a large, beautiful yet fated diamond, was stolen from an Indian shrine. It was given to Rachel Verinder on her eighteenth birthday and, that same night, stolen again. Sergeant Cuff is employed by Rachels mother to find the precious stone and has no shortage of suspects. By turns, those on the periphery and at the heart of the mystery tell their version of ev The Moonstone, a large, beautiful yet fated diamond, was stolen from an Indian shrine. It was given to Rachel Verinder on her eighteenth birthday and, that same night, stolen again. Sergeant Cuff is employed by Rachels mother to find the precious stone and has no shortage of suspects. By turns, those on the periphery and at the heart of the mystery tell their version of events until all is unravelled at the unexpected conclusion.\r\n\r\n', 'Literature', 'Wilkie Collins', 'https://www.bookchor.com/images/cover/385/9780140620139.jpg', 60, 100),
(2, '9780140620597', 'Cranford', 'In the delicately impoverished town of Cranford, everyone is keen to know everyone elses business. The community is almost devoid of men, and in their place a solid matriarchy has formed. Manners must be observed, house calls must not exceed a quarter of an hour, and neither money matters nor death may be discussed in public. But the peace is often disturbed. Rumoured bur In the delicately impoverished town of Cranford, everyone is keen to know everyone elses business. The community is almost devoid of men, and in their place a solid matriarchy has formed. Manners must be observed, house calls must not exceed a quarter of an hour, and neither money matters nor death may be discussed in public. But the peace is often disturbed. Rumoured burglars, literary disagreements, and the arrival of Captain Brown and his tactless daughters all cause ripples, warmly charted by the conversational narrator, Mary Smith. When the past erupts through the fragile class distinctions and disputed tea sales, the customary perspective of the town shifts in small but perceptible ways forever. First published as a magazine serial from 1851 and then in novel form in 1853, Cranford is the best-known work by Elizabeth Gaskell (1810 65). This reissue is of the 1853 second edition.', 'Literature', 'Elizabeth Gaskell', 'https://www.bookchor.com/images/cover/384/9780140620597.jpg', 79, 100),
(1, '9780552779777', 'THE GIRL ON THE TRAIN', 'THE RUNAWAY SUNDAY TIMES NO.1 BESTSELLER AND THRILLER OF THE YEAR Really great suspense novel. Kept me up most of the night. The alcoholic narrator is dead perfect STEPHEN KING Rachel catches the same commuter train every morning. She knows it will wait at the same signal each time, overlooking a row of back gardens. SheÃ‚Â’s even started to feel like she knows the people who THE RUNAWAY SUNDAY TIMES NO.1 BESTSELLER AND THRILLER OF THE YEAR Really great suspense novel. Kept me up most of the night. The alcoholic narrator is dead perfect STEPHEN KING Rachel catches the same commuter train every morning. She knows it will wait at the same signal each time, overlooking a row of back gardens. SheÃ‚Â’s even started to feel like she knows the people who live in one of the houses. Ã‚Â‘Jess and JasonÃ‚Â’, she calls them. Their life Ã‚Â– as she sees it Ã‚Â– is perfect. If only Rachel could be that happy. And then she sees something shocking. ItÃ‚Â’s only a minute until the train moves on, but itÃ‚Â’s enough. Now everythingÃ‚Â’s changed. Now Rachel has a chance to become a part of the lives sheÃ‚Â’s only watched from afar. Now theyÃ‚Â’ll see; sheÃ‚Â’s much more than just the girl on the train.', 'Literature', 'Paula Hawkins', 'https://www.bookchor.com/images/cover/581/9780552779777.jpg', 160, 25),
(6, '9780747551003', 'HARRY POTTER AND THE ORDER OF THE PHOENIX', 'Lord Voldemort is back. Harry Potter can\'t seem to understand why the newspapers seem to ignore the fact completely. Why hasn\'t the world ended already? When Harry is whisked away to the Burrow, he discovers that the Ministry of Magic is trying to cover the story up. The Minister is pretending that Albus Dumbledore, the Headmaster of Hogwarts, has finally lost it and is trying to relive his glory days by pretending the Dark Lord is back. He discovers that the Minister is doing his best to make Dumbledore seem like a mad man and will stop at nothing to pretend that Voldemort is not back. However, Voldemort is amassing his old servants once again and he is growing stronger every day. But all is not amiss as Dumbledore is bringing together his old allies as well, all of those who stood beside him as he fought the Dark Lord the last time. Harry no doubt wants to join immediately, but Dumbledore seems bent on completely ignoring Harry for some reason. What is the Order of the Phoenix and why does the Headmaster want Harry to keep his distance from the group?', 'Literature', 'J.K. ROWLING', 'https://www.bookchor.com/images/cover/568/9780747551003.jpg', 680, 20),
(10, '9781407132105', 'MOCKINGJAY (HUNGER GAMES)', 'The final book in the ground-breaking HUNGER GAMES trilogy. Against all odds, Katniss Everdeen has survived the Hunger Games twice. But now that she\'s made it out of the bloody arena alive, she\'s still not safe. The Capitol is angry. The Capitol wants revenge. Who do they think should pay for the unrest? Katniss. And what\'s worse, President Snow has made it clear that no one else is safe either. Not Katniss\'s family, not her friends, not the people of District 12.', 'Literature', 'SUZANNE COLLINS', 'https://www.bookchor.com/images/cover/561/9781407132105.jpg', 239, 100),
(9, '9781853260018', 'WUTHERING HEIGHTS', 'Set on the stormy moors of northern England, this classic novel is filled with the cruel and ecstatic love between the characters Heathcliff and Catherine. As they grow together as children and later as lovers, the conflicts of class and an all-consuming passion overwhelm the inhabitants of Wuthering Heights. The all-star cast of performers includes Claire Bloom and James Set on the stormy moors of northern England, this classic novel is filled with the cruel and ecstatic love between the characters Heathcliff and Catherine. As they grow together as children and later as lovers, the conflicts of class and an all-consuming passion overwhelm the inhabitants of Wuthering Heights. The all-star cast of performers includes Claire Bloom and James Mason as the doomed lovers.\r\n\r\n', 'Literature', 'EMILY BRONTË, JOHN S. WHITLEY', 'https://www.bookchor.com/images/cover/573/9781853260018.jpg', 66, 100),
(7, '9781853260094', 'HAMLET', 'Among Shakespeares plays, Hamlet is considered by many his masterpiece. Among actors, the role of Hamlet, Prince of Denmark, is considered the jewel in the crown of a triumphant theatrical career. Now Kenneth Branagh plays the leading role and co-directs a brillant ensemble performance. Three generations of legendary leading actors, many of whom first assembled for the Among Shakespeares plays, Hamlet is considered by many his masterpiece. Among actors, the role of Hamlet, Prince of Denmark, is considered the jewel in the crown of a triumphant theatrical career. Now Kenneth Branagh plays the leading role and co-directs a brillant ensemble performance. Three generations of legendary leading actors, many of whom first assembled for the Oscar-winning film Henry V, gather here to perform the rarely heard complete version of the play. This clear, subtly nuanced, stunning dramatization, presented by The Renaissance Theatre Company in association with Bbc Broadcasting, features such luminaries as Sir John Gielgud, Derek Jacobi, Emma Thompson and Christopher Ravenscroft. It combines a full cast with stirring music and sound effects to bring this magnificent Shakespearen classic vividly to life. Revealing new riches with each listening, this production of Hamlet is an invaluable aid for students, teachers and all true lovers of Shakespeare -- a recording to be treasured for decades to come.\r\n\r\n', 'Literature', 'WILLIAM SHAKESPEARE, CEDRIC WATTS\r\n', 'https://www.bookchor.com/images/cover/570/9781853260094.jpg', 66, 100),
(8, '9781853260216', 'TOM JONES (WORDSWORTH CLASSICS)', 'Tom Jones is widely regarded as one of the first and most influential English novels. It is certainly the funniest. Tom Jones, the hero of the book, is introduced to the reader as the ward of a liberal Somerset squire. Tom is a generous but slightly wild and feckless country boy with a weakness for young women. Misfortune, followed by many spirited adventures as he travels Tom Jones is widely regarded as one of the first and most influential English novels. It is certainly the funniest. Tom Jones, the hero of the book, is introduced to the reader as the ward of a liberal Somerset squire. Tom is a generous but slightly wild and feckless country boy with a weakness for young women. Misfortune, followed by many spirited adventures as he travels to London to seek his fortune, teach him a sort of wisdom to go with his essential good-heartedness. This comic, epic poem in prose will make the modern reader laugh as much as it did his forbears. Its biting satire finds an echo in todays society, for as Doris Lessing recently remarked This country becomes every day more like the eighteenth century, full of thieves and adventurers, rogues and a robust, unhypocritical savagery side-by-side with people lecturing others on morality.', 'Literature', 'HENRY FIELDING, DOREEN ROBERTS\r\n', 'https://www.bookchor.com/images/cover/580/9781853260216.jpg', 117, 100),
(5, '9781904233657', 'TWILIGHT', 'Twilight is a vampire romance novel aimed at young adult readers. It is the first novel in Stephenie Meyerâ??s Twilight series. It presents the story of Isabella Swan, or Bella as she is called. The story is presented from Bellaâ??s perspective. Bella is a shy and mature seventeen-year-old who leaves Phoenix, Arizona, to move in with her father Charlie in Forks, Washington. She joins Forks High School, where she quickly becomes the center of attention, especially among the boys. On the first day of school, she finds herself seated adjacent to Edward Cullen, who somehow seems to take an instant dislike to her. Edward then disappears for a few days. Surprisingly, upon his return, he becomes quite friendly towards Bella. Bella intuitively knows that there is more to Edward than what meets the eye. Moreover, his abnormal abilities, unusual physical features and strange behavior fuel her curiosity further. One day, Edward saves Bellaâ??s life in a mysterious way. This makes her even more determined to find out the truth about Edward. When she learns about the local tribal legends from her friend Jacob Black, she comes to the conclusion that Edward and his family members are not humans, but vampires who consume animal blood. As the days pass, Bella and Edward fall deeply in love with each other. Unfortunately, the arrival of a new vampire coven in Forks spells trouble for Bella. James, a vampire who is part of the new coven, becomes obsessed with her and wants to hunt her for sport. Bellaâ??s life is thrown in danger, twisting and darkening the plot further. Twilight was also adapted into a major motion picture in 2008. The movie did phenomenally well and earned over $392 million globally. Twilight was first published in 2005. It became an instant bestseller and garnered much critical acclaim. It was named one of the Best Childrenâ??s Books of 2005 by Publishers Weekly. It was also the highest selling book of the year 2008. It has been translated into 37 languages.\r\n\r\n', 'Literature', 'Stephenie Meyer', 'https://www.bookchor.com/images/cover/570/9781904233657.jpg', 200, 25),
(3, '9788129135728', 'HALF GIRLFRIEND', 'The story of this novel is set in locations such as rural Bihar, New Delhi, Patna, and New York. This is the story of a boy from Bihar who is on a quest to win over the girl he loves. In this book, Chetan Bhagat dives into the sentiments experienced by a backward rural boy who enrols himself at the prestigious English-medium St. Stephenâ??s College, New Delhi. He then falls in love with a classy English-speaking rich girl from Delhi. He has a major linguistic set back as he doesn\'t speak English well. The girl does not give in to his attempts but instead agrees to be his \"half girlfriendâ?.', 'Literature', 'Chetan Bhagat', 'https://www.bookchor.com/images/cover/568/9788129135728.jpg', 133, 100);

-- --------------------------------------------------------

--
-- Table structure for table `book_rating`
--

CREATE TABLE `book_rating` (
  `book_isbn` varchar(20) NOT NULL,
  `no_of_people_rated` int(100) NOT NULL DEFAULT '0',
  `total_rating` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_rating`
--

INSERT INTO `book_rating` (`book_isbn`, `no_of_people_rated`, `total_rating`) VALUES
('9780140620139', 1, 0),
('9780140620597', 1, 0),
('9780552779777', 2, 3),
('9780747551003', 1, 0),
('9781407132105', 0, 0),
('9781853260018', 1, 0),
('9781853260094', 1, 0),
('9781853260216', 1, 0),
('9781904233657', 1, 0),
('9788129135728', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `book_request`
--

CREATE TABLE `book_request` (
  `s_no` int(100) NOT NULL,
  `book_name` text NOT NULL,
  `isbn_no` int(30) NOT NULL,
  `publisher` text NOT NULL,
  `edition` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_addres`
--

CREATE TABLE `user_addres` (
  `s_no` int(100) NOT NULL,
  `user_address_line1` text NOT NULL,
  `user_address_line2` text NOT NULL,
  `user_landmark` text NOT NULL,
  `user_pin` text NOT NULL,
  `user_city` text NOT NULL,
  `user_state` text NOT NULL,
  `address_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_addres`
--

INSERT INTO `user_addres` (`s_no`, `user_address_line1`, `user_address_line2`, `user_landmark`, `user_pin`, `user_city`, `user_state`, `address_type`) VALUES
(1, '#132', 'Souri Village', 'Near Shiv Mandir', '1714101', 'Nalagarh', 'HP', 'Home');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(100) NOT NULL DEFAULT '0',
  `user_name` text NOT NULL,
  `user_email_id` text NOT NULL,
  `user_mobile` text NOT NULL,
  `user_password` text NOT NULL,
  `user_dob` text NOT NULL,
  `user_gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_name`, `user_email_id`, `user_mobile`, `user_password`, `user_dob`, `user_gender`) VALUES
(1, 'Rohit Thakur', 'rohit.thakur2698@gmail.com', '', 'momanddad', '1998-07-21', 'Male'),
(2, '', 'vishalthakur@gmail.com', '', 'vishla', '', ''),
(3, '', 'ashishkumar@gmail.com', '', '123456', '', ''),
(4, '', 'rahulpatel@gmail.com', '', 'zaneman', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `user_id` int(100) NOT NULL,
  `book_isbn` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`user_id`, `book_isbn`, `quantity`) VALUES
(1, '9780552779777', 1),
(1, '9781407132105', 1),
(1, '9780140620139', 1),
(2, '9780552779777', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_details`
--
ALTER TABLE `book_details`
  ADD PRIMARY KEY (`isbn_no`),
  ADD UNIQUE KEY `s_no` (`s_no`);

--
-- Indexes for table `book_rating`
--
ALTER TABLE `book_rating`
  ADD KEY `book_isbn` (`book_isbn`);

--
-- Indexes for table `book_request`
--
ALTER TABLE `book_request`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `user_addres`
--
ALTER TABLE `user_addres`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_order`
--
ALTER TABLE `user_order`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_isbn` (`book_isbn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_request`
--
ALTER TABLE `book_request`
  MODIFY `s_no` int(100) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_rating`
--
ALTER TABLE `book_rating`
  ADD CONSTRAINT `book_rating_ibfk_1` FOREIGN KEY (`book_isbn`) REFERENCES `book_details` (`isbn_no`);

--
-- Constraints for table `user_addres`
--
ALTER TABLE `user_addres`
  ADD CONSTRAINT `user_addres_ibfk_1` FOREIGN KEY (`s_no`) REFERENCES `user_details` (`user_id`);

--
-- Constraints for table `user_order`
--
ALTER TABLE `user_order`
  ADD CONSTRAINT `user_order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`),
  ADD CONSTRAINT `user_order_ibfk_2` FOREIGN KEY (`book_isbn`) REFERENCES `book_details` (`isbn_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
