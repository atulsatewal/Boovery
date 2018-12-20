-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 12:34 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atul`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` enum('open','closed','','') NOT NULL DEFAULT 'open',
  `delivery_address` varchar(500) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `payment_mode` enum('cash','online','','') DEFAULT 'cash',
  `tax` float(8,2) DEFAULT '0.00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `status`, `delivery_address`, `city`, `pincode`, `country`, `payment_mode`, `tax`, `updated_at`, `created_at`) VALUES
(3, 2, 'closed', NULL, NULL, NULL, NULL, 'cash', 0.00, '2018-10-20 06:19:52', '2018-10-20 06:19:52'),
(4, 3, 'closed', NULL, NULL, NULL, NULL, 'cash', 0.00, '2018-10-31 03:44:05', '2018-10-31 03:44:05'),
(5, 4, 'closed', NULL, NULL, NULL, NULL, 'cash', 0.00, '2018-10-31 05:03:50', '2018-10-31 05:03:50'),
(6, 5, 'closed', NULL, NULL, NULL, NULL, 'cash', 0.00, '2018-11-03 03:35:26', '2018-11-03 03:35:26'),
(7, 3, 'closed', NULL, NULL, NULL, NULL, 'cash', 0.00, '2018-11-04 06:07:15', '2018-11-04 06:07:15'),
(8, 2, 'closed', NULL, NULL, NULL, NULL, 'cash', 0.00, '2018-11-07 11:38:29', '2018-11-07 11:38:29'),
(9, 2, 'open', NULL, NULL, NULL, NULL, 'cash', 0.00, '2018-11-07 12:04:38', '2018-11-07 12:04:38'),
(10, 3, 'closed', NULL, NULL, NULL, NULL, 'cash', 0.00, '2018-12-20 11:02:01', '2018-12-20 11:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `cart_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`cart_id`, `item_id`, `quantity`) VALUES
(3, 1, 5),
(3, 2, 8),
(4, 1, 3),
(5, 1, 2),
(5, 2, 3),
(6, 1, 2),
(7, 1, 1),
(8, 1, 1),
(8, 3, 1),
(10, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `category_name` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Thriller', '2018-10-19 06:04:44', '2018-10-19 06:04:44'),
(2, 'Drama', '2018-10-19 06:04:44', '2018-10-19 06:04:44'),
(3, 'Romance', '2018-10-19 06:04:44', '2018-10-19 06:04:44'),
(4, 'Horror', '2018-10-19 06:04:44', '2018-10-19 06:04:44'),
(5, 'Fantasy', '2018-10-19 06:04:44', '2018-10-19 06:04:44'),
(6, 'Sci-Fi', '2018-10-19 06:04:44', '2018-10-19 06:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `LastName` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`Id`, `Name`, `LastName`, `Email`, `Message`, `time`) VALUES
(1, 'atul', 'satewal', 'atulsatewal@gmail.com', 'great website', '2018-12-19 19:23:25'),
(2, 'rajesh', 'kumar', 'rajeshkumar@gmail.com', 'had a great experience here ', '2018-12-19 19:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `isbn` bigint(14) NOT NULL,
  `author` varchar(50) NOT NULL,
  `price` float(10,2) NOT NULL,
  `old_price` float(10,2) NOT NULL,
  `img_url` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `name`, `description`, `isbn`, `author`, `price`, `old_price`, `img_url`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'The Girl on The Train', 'The Girl on the Train is a psychological thriller novel by British author Paula Hawkins. The novel debuted at No. 1 on The New York Times Fiction Best Sellers of 2015 list dated 1 February 2015, and r', 1234567890123, 'Vikas Mahato', 420.55, 530.00, 'images/thegirlonthetrain.jpg', 1, '2018-10-19 06:12:11', '2018-12-19 13:08:28'),
(2, 5, 'harry potter and the philosopher\'s stone', 'An 11 year old bo discovers that he is one of the greatest wizards of all time.', 3123678567890, 'J. K. Rowling', 450.00, 600.00, 'images/philostone.jpeg', 1, '2018-10-20 04:37:35', '2018-12-19 13:31:42'),
(3, 1, 'Sherlock Holmes', 'A high functioning sociopath solves crime and mystery.', 123123123111, 'Sir Arthor Conan Doyle', 2344.00, 3000.00, 'https://duckduckgo.com/i/9ad73b4c.jpg', 1, '2018-11-07 11:18:52', '2018-11-07 11:18:52'),
(5, 5, 'Harry Potter and the Cursed Child - Parts One and ', 'The official playscript of the original West End production of Harry Potter and the Cursed Child. It was always difficult being Harry Potter and it isn\'t much easier now that he is an overworked employee of the Ministry of Magic, a husband, and father of three school-age children. While Harry grapples with a past that refuses to stay where it belongs, his youngest son Albus must struggle with the weight of a family legacy he never wanted. As past and present fuse ominously, both father and son learn the uncomfortable truth: sometimes, darkness comes from unexpected places. The playscript for Harry Potter and the Cursed Child was originally released as a \'special rehearsal edition\' alongside the opening of Jack Thorne\'s play in London\'s West End in summer 2016. Based on an original story by J.K. Rowling, John Tiffany and Jack Thorne, the play opened to rapturous reviews from theatergoers and critics alike, while the official play script became an immediate global bestseller. ', 9780751565362, 'J. K. Rowling', 455.00, 604.00, 'images/hpatcc.jpg', 1, '2018-12-19 13:58:40', '2018-12-19 15:00:51'),
(6, 5, 'Harry Potter and the Prisoner of Azkaban  ', 'When the Knight Bus crashes through the darkness and screeches to a halt in front of him, it\'s the start of another far from ordinary year at Hogwarts for Harry Potter. Sirius Black, escaped mass-murderer and follower of Lord Voldemort, is on the run - and they say he is coming after Harry. In his first ever Divination class, Professor Trelawney sees an omen of death in Harry\'s tea leaves . But perhaps most terrifying of all are the Dementors patrolling the school grounds, with their soul-sucking kiss.These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets by Jonny Duddle, with huge child appeal, to bring Harry Potter to the next generation of readers. It\'s time to PASS THE MAGIC ON .', 1408855674, 'J. K. Rowling', 450.00, 900.00, 'images/hpatpoa.jpg', 1, '2018-12-19 14:11:56', '2018-12-19 14:13:15'),
(7, 1, 'Nothing Lasts Forever: No Secret can Stay Buried..', ' When Inspector Michael D\'Cunha is called in to investigate a fire incident in Mumbai\'s posh Worli Sea Face apartment, where Raaj Kumar has died, he is convinced it is arson not an accident - either for insurances or an adulterous relationship gone sour. But Raaj\'s wife Serena is out of the country and the suspected other woman Kim has more alibi than he can count.  A close friend of Raaj dies, in mysterious circumstances, soon after. But it\'s only when the Bombay Stock Exchange nosedives the police start digging old graves.  Love, deception, murder, suspense. No secret can stay buried! Nothing Lasts Forever.  \"If it was a movie it would keep you, biting your nails, at the edge of your seat.\"', 9380349246, 'Vish Dhamija', 101.00, 200.00, 'images/nlfnscsb.jpg', 1, '2018-12-19 14:32:51', '2018-12-19 14:32:51'),
(8, 2, 'ASURA TALES OF THE VANQUISHED : THE STORY OF RAVAN', 'In this bestseller, Neelakantan tries to break the age old tradition where history is always narrated by the victors. Asura: Tale Of The Vanquished dares to narrate the tale of the Asura people. Blending mythology, religion and history, the book narrates the tale from Ravana and Bhadra\'s perspective.  The book talks about how the Asura community is more liberal than the orthodox Deva clan, which was highly biased. It also attacks the evil practices of the Brahmin caste. From the tale of Mahabali, Vamana, and Sitaâ€™s Agni-Pareeksha, to Jatayuâ€™s meeting with Ravana, the author reveals the many human emotions behind these stories and logically presents a new perspective for the readers.  How wrong was Ravana to challenge the mighty gods for his daughter\'s sake? Was he evil for deciding to lead life in his own terms? Was he wrong for freeing the people from the caste-cased Deva reign? The author takes the readers on an enthralling journey and poses many such complex questions.', 9789381576052, 'Anand Neelakantan', 341.00, 500.00, 'images/asura.jpg', 1, '2018-12-19 14:54:37', '2018-12-19 14:58:33'),
(9, 2, 'Sparknotes the Merchant of Venice', 'No Fear Shakespeare gives you the complete text of The Merchant of Venice on the left-hand page, side-by-side with an easy-to-understand translation on the right. Each No Fear Shakespeare contains The complete text of the original play A line-by-line translation that puts Shakespeare into everyday language A complete list of characters with descriptions Plenty of helpful commentary', 9781586638504, 'Shakes Peare', 380.00, 500.00, 'images/sp1.jpg', 1, '2018-12-19 15:06:42', '2018-12-19 15:06:42'),
(10, 2, 'Plays Unpleasant ', 'With Plays Unpleasant, Shaw issued a radical challenge to his audiences\' complacency and exposed social evils through his dramatization of the moral conflicts between youthful idealism and economic reality, promiscuity and marriage, and the duties of women to others and to themselves. His first play, Widowers\' Houses, depicts Harry Trench\'s dilemma on learning that the inheritance of his fiancÃ©e comes from her father\'s income as a slum landlord. In The Philanderer, charismatic Leonard Charteris proposes marriage to Grace, while he is still involved with the beautiful Julia Craven - who is not inclined to give him up so easily. And in Mrs Warren\'s Profession, Vivie Warren is forced to reconsider her own future when she discovers that her mother\'s immoral earnings funded her genteel upbringing.', 9780140437935, 'David Edgar Dan Laurence George Bernard Shaw', 480.00, 300.00, 'images/pu.jpg', 1, '2018-12-19 15:22:37', '2018-12-19 15:22:37'),
(11, 1, 'The President is Missing', 'The President Is Missing is a political thriller novel by former US President Bill Clinton and novelist James Patterson published in June 2018. It is Clinton\'s first novel. A television adaptation is being developed by Showtime. ', 9781538713853, ' Bill Clinton', 345.00, 400.00, 'images/tpim.jpg', 1, '2018-12-19 15:28:31', '2018-12-19 15:28:31'),
(12, 1, 'Gone Girl', 'The protagonists of Gone Girl are a young couple, Nick and Amy. Nick used to work as a journalist, till he lost his job. Due to the lack of income, the couple shifted their residence from New York to Nickâ€™s hometown of Carthage. He decides to open a bar with the money from Amyâ€™s trust fund, and works along with his twin sister, Margo. Although the three make a decent income from the bar, the couple lead a discontent life in the small town, as Amy misses New York City.  As the story goes on, Amy suddenly goes missing. Nick is the only suspect for the police as he utilized her money to start the bar, lacked emotion on camera, and increased Amyâ€™s life insurance. In the first half of this book, Amy and Nick talk about each other, providing contradicting views, which leave the readers in a state of suspense. In the other half of this novel, the readers come to know certain secrets about Nick and Amy. Nick has been carrying on an affair, while Amy desires to get Nick into trouble with the police by hiding from him, and making him a suspect for her so-called death.', 9781780221359, ' Gillian Flynn', 228.00, 200.00, 'images/gg.jpg', 1, '2018-12-19 15:42:00', '2018-12-19 15:42:00'),
(13, 3, 'Fifty Shades of Grey  ', 'Fifty Shades of Grey is a 2011 erotic romance novel by British author E. L. James. It is the first instalment in the Fifty Shades trilogy that traces the deepening relationship between a college graduate, Anastasia Steele, and a young business magnate, Christian Grey.', 9780606259095, 'E. L. James', 500.00, 450.00, 'images/fsog.jpg', 1, '2018-12-19 16:10:16', '2018-12-19 16:10:16'),
(14, 3, 'Modern Romance  ', 'The #1 New York Times Bestseller **A hilarious, thoughtful, and in-depth exploration of the pleasures and perils of modern romance from Aziz Ansari, the Emmy-award winning star of Master of None and one of this generation\'s sharpest comedic voices** In the old days, most people would find a decent person who lived in their village or neighbourhood, and after deciding they weren\'t a murderer, get married and have kids - all by the age of 22. Now we spend years of our lives searching for our perfect soul mate and, thanks to dating apps, mobile phones and social media, we have more romantic options than ever before in human history. Yet we also have to confront strange new dilemmas, such as what to think when someone is too busy to reply to a text but has time to post a photo of their breakfast on Instagram.', 9780141981468, ' Ansari Aziz', 400.00, 450.00, 'images/mr.jpg', 1, '2018-12-19 16:20:51', '2018-12-19 16:20:51'),
(15, 3, 'I Too Had a Love Story  ', 'This book is autobiographical in nature. The author is of the opinion that not all love stories are fortunate enough to have a happy ending. Ravinder uses this book as an opportunity to relate his own love story to the readers.  I Too Had A Love Story is a romantic saga of two people belonging to the modern day world of the Internet and gadgets. The story begins as four friends plan a reunion after many years. As their discussion becomes casual and moves to their plans for their partners, Ravin, the protagonist, gets inclined to create an account on a matrimonial website. He comes across a girl named Khushi on this website and starts falling in love with her.  The author beautifully portrays the emotions and feelings of these two people in love, waiting for each otherâ€™s messages and phone calls. The reader can relate to their everyday life as they indulge in late night conversations, and each otherâ€™s grief, joy, and sorrow. The author shows how small surprises bring these love birds closer.', 9780143418764, ' Singh Ravinder', 120.00, 150.00, 'images/ithals.jpg', 1, '2018-12-19 16:35:35', '2018-12-19 16:35:35'),
(16, 4, 'The Secret Grave  ', ' When Her Best Friends Leave Town For The Summer And Her Four Siblings Chaotic Lives All Pull In Different Directions, She\'s Left To Wander The Creepy Old Victorian House They Live Named Nightshade After The Poison All On Her Own. To Fill Her Time, Hannah Sneaks Off To Explore Midnight Lake, And Meets Cady, Is She A Ghost?', 9789352750849, 'Lois Ruby', 250.00, 200.00, 'images/tsgo.jpg', 1, '2018-12-19 17:00:24', '2018-12-19 17:00:24'),
(17, 4, 'Shadow House : The Gathering - Knock, Knock... Who', ' Some houses are more than just haunted... They\'re hungry.Dash, Dylan, Poppy, Marcus and Azumidon\'t know this at first. They each think they\'ve been summoned to Shadow House for innocent reasons. But there\'s nothing innocent about Shadow House.Something within its walls is wickedly wrong. Nothing - and nobody - can be trusted. Hallways move. Doors vanish. Ghosts appear. Children disappear.And the way out? That\'s disappeared, too... Enter Shadow House... If you dare.', 9781338091274, 'Dan Poblocki', 450.00, 400.00, 'images/sh.jpg', 1, '2018-12-19 17:04:19', '2018-12-19 17:04:19'),
(18, 4, 'Hollow City: The Second Novel of Miss Peregrine\'s ', 'After fleeing in a boat from the hollowgasts, the peculiar children are caught up in a bad storm and need to find land. They land on a beach only to find that the wights are trying to track them down, so they flee into the forests of the mainland. With nowhere to run, the group wander aimlessly, until they find a statue from The Tales of the Peculiar. There, they discover a time loop with the help of their book The Tales of the Peculiar and escape into it. Surprisingly, it is full of peculiar animals, who embrace and thank them for killing a hollow which had for a long time roamed in the time loop. After learning that Miss Wren, the ymbryne of this unique menagerie time loop, had flown to London to rescue her other fellow ymbrynes, the peculiar children leave in search of her, in hopes that she can turn Miss Peregrine back into a human, before her human self is lost forever. They travel with Gypsies whose leader has a peculiar son.', 9781594747359, 'Ransom Riggs', 389.00, 350.00, 'images/hc.jpg', 1, '2018-12-19 17:08:28', '2018-12-19 17:08:28'),
(19, 6, 'Relativity - The Special and The General Theory  ', '\'When you are courting a nice girl an hour seems like a second. When you sit on a red-hot cinder a second seems like an hour. That\'s relativity.\'  Dealing with the theory of relativity - special relativity and general relativity - and the considerations on the universe as a whole, this book gives an insight into the scientific theory about the relationship between space and time, the theory of gravitation, and the universe.  A Nobel laureate, Einstein\'s research and theories changed the world. First published in 1916, Relativity: The Special and the General Theory is regarded as the most significant work in modern physics. It continues to remain popular and highly influential.', 9788175994652, ' Albert Einstein', 200.00, 250.00, 'images/r.jpg', 1, '2018-12-19 17:13:38', '2018-12-19 17:13:38'),
(20, 6, 'The War of the Worlds', ' On a summer night, at the end of the nineteenth century, a \"meteor\" lands on Horsell Common in London. an artificial cylinder is found the next day and upon approaching it, the unsuspecting humans are instantly killed by an all-destroying heat-ray, as terrifying Martians emerge and blaze a path of fiery destruction across Victorian England. Amid the boundless destruction that is caused, it looks as if the end of the world has come.. The War of the Worlds is one of the earliest science-fiction that explores the possibilities of intelligent life from other planets and details a conflict between humankind and an extraterrestrial race.. this novel vividly describes the mass hysteria such an invasion would stimulate and shows how unprepared our civilization is for the onslaught of forces from another world.', 9788175992825, 'H. G. Wells', 199.00, 150.00, 'images/tw.jpg', 1, '2018-12-19 17:16:21', '2018-12-19 17:16:21'),
(21, 6, 'The Solar System', ' What is the surface of Mars like? Why does Venus glow in the dark? How do scientists explore faraway planets? Beginner readers can find answers to these questions and more in this colourful information book. Illustrated with stunning photographs and illustrations accompanied by short, informative text developed with reading experts. Includes carefully selected internet-links to exciting websites about the Solar System.', 9781409514244, 'Bone Emily', 150.00, 200.00, 'images/ss.jpg', 1, '2018-12-19 17:19:12', '2018-12-19 17:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` enum('user','admin','','') NOT NULL DEFAULT 'user',
  `password` varchar(512) NOT NULL,
  `salt` varchar(512) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `role`, `password`, `salt`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@email.com', 'admin', 'c9a99b985b1e871541f20a3f7f6bd8154fa3d2407fb9e3fdc626af5f9a118c150537299b15c5635555062906b0f42984843146cbbb3b06736762991ab0e69cc3', 'dd183b390e0b0cca6d3a6d3ba39226f073806845e15361797aaa5ac52c76840e4998fe6301e46b3950777e2a8a5e0102ae19e830297fbd2a94d5c468451d1167', '2018-10-19 05:57:46', '2018-10-19 05:57:46'),
(2, 'user', 'user@email.com', 'user', 'eefd49d4f844f752caf0686ba00fcc711e34c8531aeb59eb73228f4ede911077362b9b0fe5f84195ad18c46a38dcb0815b0f3952fbe2d0deac3849b112716260', '7247444c04ed8658f2213abc97c58ee966b2bb3a3eaf25915921b79a369bb3db843c0aca1aeff31a3fc18cf357db7f883cef52305b59f9dfeb7156e65af1e6f3', '2018-10-20 04:38:42', '2018-10-20 04:38:42'),
(3, 'atulsatewal', 'atulsatewal@gmail.com', 'user', '5902602db3ebd57531b118133b79caebc04cf750e11396994dfc422980f360d1836ff040d7eb1cc4574c1288439af63596b47e86c53cb07573e3f82580bbc85e', 'dd0fd28359a296d1fbf1cfc3de4dd75672cc02965e735a3d44f12fcc7d3388f279b928ae5f5ad61c1812f7b2ae538465b6c66d03f7a4d7ff423298e40dfc82ef', '2018-10-31 03:43:42', '2018-10-31 03:43:42'),
(4, 'vishal', 'vishal@gmail.com', 'user', 'be2f60b3418e5c03df19f0427c0ac8ce790eecfd66939e070a2c5284adbdd1fb92e28488548fb37a86b93cfd0c5ba440d4bbe0ae6d0f0a1d03d8875bc1fa62e0', '030475f6d9a809ffb1173c60c9a1a496fc9d2c9067f28ff785899f8d5afa1fee7754f7c62752e4c1e879406bb8bce9d9a514c51699958c2b670237b9a72ceb74', '2018-10-31 05:03:28', '2018-10-31 05:03:28'),
(5, 'renu', 'renu@gmail.com', 'user', '1ab282d547332aa6555edcf7d2064e7b5779e78ffcd0040aea560a7c9b42373fe726dbc3c6cc7f3e9036d9ad89e22fe765a114debd54cda80df6c60c0c423cd4', '9fe7dff2424b9fc34974703028b53bb01dd998eb41d90f973ffa3a1dcdc913fe0e561d5b4fa03781d408dfdea9cc33e0a9f3dcc5dc3126cf3d88e9076876e2eb', '2018-11-03 03:34:26', '2018-11-03 03:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(11) NOT NULL,
  `cart_id` int(10) NOT NULL,
  `name` text NOT NULL,
  `country` text NOT NULL,
  `addressLine1` text NOT NULL,
  `addressLine2` text NOT NULL,
  `zipCode` int(6) NOT NULL,
  `city` text NOT NULL,
  `phoneNo` bigint(10) NOT NULL,
  `paymentMethod` enum('cash','credit cart') NOT NULL DEFAULT 'cash',
  `email` varchar(300) NOT NULL,
  `status` enum('N','R','F','D','C') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `cart_id`, `name`, `country`, `addressLine1`, `addressLine2`, `zipCode`, `city`, `phoneNo`, `paymentMethod`, `email`, `status`) VALUES
(1, 3, 'user', 'India', 'j103/1 gautam nagar', 'new delhi', 110049, 'City', 9910597341, 'cash', 'user@email.com', 'N'),
(2, 4, 'atulsatewal', 'India', 'j104/1 gautam nagar', 'new delhi', 110049, 'City', 9910597341, 'cash', 'atulsatewal@gmail.com', 'C'),
(3, 5, 'vishal', 'India', 'j105/1 gautam nagar', 'new delhi', 110049, 'City', 9910597341, 'cash', 'vishal@gmail.com', 'N'),
(4, 6, 'renu', 'India', 'd5/1 3rd floor ', 'chennai', 110047, 'City', 7894512342, 'cash', 'renu@gmail.com', 'N'),
(5, 8, 'user', 'India', 'D-8', 'Gulmohar Park', 110049, 'City', 9650043051, 'cash', 'user@email.com', 'N'),
(6, 10, 'atulsatewal', 'USA', 'j103/1 gautam nagar', 'new delhi', 110049, 'Town', 7894512342, 'cash', 'atulsatewal@gmail.com', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`cart_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
