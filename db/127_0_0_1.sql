-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 10:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogs`
--
CREATE DATABASE IF NOT EXISTS `blogs` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blogs`;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `b_id` int(20) NOT NULL,
  `blog_title` varchar(50) NOT NULL,
  `blog_body` longtext NOT NULL,
  `image` blob NOT NULL,
  `pub_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`b_id`, `blog_title`, `blog_body`, `image`, `pub_date`) VALUES
(37, 'elon musk', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Elon_Musk_overlooking_the_remains_of_F9R_%2836411051713%29.jpg/330px-Elon_Musk_overlooking_the_remains_of_F9R_%2836411051713%29.jpg\" style=\"border-style:solid; border-width:2px; height:156px; margin:2px; width:300px\" /></p>\r\n\r\n<p><strong>Elon Reeve Musk</strong>&nbsp;(<a href=\"https://en.wikipedia.org/wiki/Help:IPA/English\">/ˈiːlɒn/</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Help:Pronunciation_respelling_key\"><em>EE-lon</em></a>; born June 28, 1971) is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Business_magnate\">business magnate</a>&nbsp;and investor. He is the founder, CEO, and chief engineer of&nbsp;<a href=\"https://en.wikipedia.org/wiki/SpaceX\">SpaceX</a>;&nbsp;<a href=\"https://en.wikipedia.org/wiki/Angel_investor\">angel investor</a>, CEO and product architect of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Tesla,_Inc.\">Tesla, Inc.</a>; owner and CTO of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Twitter\">Twitter</a>; founder of&nbsp;<a href=\"https://en.wikipedia.org/wiki/The_Boring_Company\">the Boring Company</a>; co-founder of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Neuralink\">Neuralink</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/OpenAI\">OpenAI</a>; and president of the philanthropic&nbsp;<a href=\"https://en.wikipedia.org/wiki/Elon_Musk#Other_activities\">Musk Foundation</a>. Musk is the wealthiest person in the world, with an estimated net worth, as of July&nbsp;12, 2023, of around US$239 billion according to the&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Bloomberg_Billionaires_Index\">Bloomberg Billionaires Index</a></em>&nbsp;and $248.8&nbsp;billion according to&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Forbes\">Forbes</a></em>&#39;s&nbsp;Real Time Billionaires list, primarily from his ownership stakes in Tesla and SpaceX.<a href=\"https://en.wikipedia.org/wiki/Elon_Musk#cite_note-5\">[4]</a><a href=\"https://en.wikipedia.org/wiki/Elon_Musk#cite_note-6\">[5]</a><a href=\"https://en.wikipedia.org/wiki/Elon_Musk#cite_note-7\">[6]</a></p>\r\n\r\n<p>Musk was born in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Pretoria\">Pretoria</a>, South Africa, and briefly attended the&nbsp;<a href=\"https://en.wikipedia.org/wiki/University_of_Pretoria\">University of Pretoria</a>&nbsp;before moving to Canada at age 18, acquiring citizenship through his Canadian-born mother. Two years later, he&nbsp;<a href=\"https://en.wikipedia.org/wiki/Matriculation\">matriculated</a>&nbsp;at&nbsp;<a href=\"https://en.wikipedia.org/wiki/Queen%27s_University_at_Kingston\">Queen&#39;s University</a>&nbsp;in Kingston, Ontario, and two years after that transferred to the&nbsp;<a href=\"https://en.wikipedia.org/wiki/University_of_Pennsylvania\">University of Pennsylvania</a>, where he received bachelor&#39;s degrees in economics and physics. He moved to California in 1995 to attend&nbsp;<a href=\"https://en.wikipedia.org/wiki/Stanford_University\">Stanford University</a>. After two days, he dropped out and, with his brother&nbsp;<a href=\"https://en.wikipedia.org/wiki/Kimbal_Musk\">Kimbal</a>, co-founded the online&nbsp;<a href=\"https://en.wikipedia.org/wiki/City_guide\">city guide</a>&nbsp;software company&nbsp;<a href=\"https://en.wikipedia.org/wiki/Zip2\">Zip2</a>. The startup was acquired by&nbsp;<a href=\"https://en.wikipedia.org/wiki/Compaq\">Compaq</a>&nbsp;for $307 million in 1999, and with $12 million of the money he made, that same year Musk co-founded&nbsp;<a href=\"https://en.wikipedia.org/wiki/X.com\">X.com</a>, a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Direct_bank\">direct bank</a>. X.com merged with&nbsp;<a href=\"https://en.wikipedia.org/wiki/Confinity\">Confinity</a>&nbsp;in 2000 to form&nbsp;<a href=\"https://en.wikipedia.org/wiki/PayPal\">PayPal</a>.</p>\r\n', 0x456c6f6e5f4d75736b5f526f79616c5f536f63696574795f2863726f7032292e6a7067, '2023-07-16'),
(38, 'Salman Khan', '<p><img alt=\"\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Salman%27s_Being_Human_show_at_HDIL_India_Couture_Week_2010_%281%29.jpg/405px-Salman%27s_Being_Human_show_at_HDIL_India_Couture_Week_2010_%281%29.jpg\" style=\"border-style:solid; border-width:2px; height:304px; width:405px\" /></p>\r\n\r\n<p><strong>Salman Salim Abdul Rashid Khan</strong>&nbsp;(<small>pronounced&nbsp;</small><a href=\"https://en.wikipedia.org/wiki/Help:IPA/Hindi_and_Urdu\">[səlˈmɑːn xɑːn]</a>; born 27 December 1965)<a href=\"https://en.wikipedia.org/wiki/Salman_Khan#cite_note-2\">[2]</a>&nbsp;is an Indian actor, film producer, and television personality who works predominantly in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Hindi\">Hindi</a>&nbsp;films. In a film career spanning over thirty five years, Khan has received&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_awards_and_nominations_received_by_Salman_Khan\">numerous awards</a>, including two&nbsp;<a href=\"https://en.wikipedia.org/wiki/National_Film_Awards\">National Film Awards</a>&nbsp;as a film producer, and two&nbsp;<a href=\"https://en.wikipedia.org/wiki/Filmfare_Awards\">Filmfare Awards</a>&nbsp;as an actor.<a href=\"https://en.wikipedia.org/wiki/Salman_Khan#cite_note-3\">[3]</a>&nbsp;He is cited in the media as one of the most commercially successful actors of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Cinema_of_India\">Indian cinema</a>.<a href=\"https://en.wikipedia.org/wiki/Salman_Khan#cite_note-4\">[4]</a><a href=\"https://en.wikipedia.org/wiki/Salman_Khan#cite_note-5\">[5]</a>&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Forbes\">Forbes</a></em>&nbsp;has included Khan in listings of the highest-paid celebrities in the world, in 2015 and 2018, with him being the highest-ranked Indian in the latter year.<a href=\"https://en.wikipedia.org/wiki/Salman_Khan#cite_note-6\">[6]</a><a href=\"https://en.wikipedia.org/wiki/Salman_Khan#cite_note-auto1-7\">[7]</a><a href=\"https://en.wikipedia.org/wiki/Salman_Khan#cite_note-Rich-8\">[8]</a><a href=\"https://en.wikipedia.org/wiki/Salman_Khan#cite_note-9\">[9]</a></p>\r\n\r\n<hr />\r\n<p>The eldest son of screenwriter&nbsp;<a href=\"https://en.wikipedia.org/wiki/Salim_Khan\">Salim Khan</a>, Khan began his acting career with a supporting role in&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Biwi_Ho_To_Aisi\">Biwi Ho To Aisi</a></em>&nbsp;(1988), followed by his breakthrough with a leading role in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Sooraj_Barjatya\">Sooraj Barjatya</a>&#39;s romance&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Maine_Pyar_Kiya\">Maine Pyar Kiya</a></em>&nbsp;(1989). He established himself in the 1990s, with several commercially successful films, including Barjatya&#39;s family dramas&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Hum_Aapke_Hain_Koun..!\">Hum Aapke Hain Koun..!</a></em>&nbsp;(1994) and&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Hum_Saath-Saath_Hain\">Hum Saath-Saath Hain</a></em>&nbsp;(1999), the action film&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Karan_Arjun\">Karan Arjun</a></em>&nbsp;(1995) and the comedy&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Biwi_No.1\">Biwi No.1</a></em>&nbsp;(1999). After a period of decline in the 2000s, Khan achieved greater stardom in the 2010s by starring in top-grossing action films like&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Wanted_(2009_film)\">Wanted</a></em>&nbsp;(2009),&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Dabangg\">Dabangg</a></em>&nbsp;(2010),&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Ready_(2011_film)\">Ready</a></em>&nbsp;(2011),&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Bodyguard_(2011_Hindi_film)\">Bodyguard</a></em>&nbsp;(2011),&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Ek_Tha_Tiger\">Ek Tha Tiger</a></em>&nbsp;(2012),&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Dabangg_2\">Dabangg 2</a></em>&nbsp;(2012),&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Kick_(2014_film)\">Kick</a></em>&nbsp;(2014), and&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Tiger_Zinda_Hai\">Tiger Zinda Hai</a></em>&nbsp;(2017), and dramas such as&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Bajrangi_Bhaijaan\">Bajrangi Bhaijaan</a></em>&nbsp;(2015) and&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Sultan_(2016_film)\">Sultan</a></em>&nbsp;(2016). Khan has starred in the highest-grossing Hindi films of 10 years, the highest for any actor.<a href=\"https://en.wikipedia.org/wiki/Salman_Khan#cite_note-10\">[10]</a></p>\r\n\r\n<hr />\r\n<p>In addition to his acting career, Khan is a television presenter and promotes humanitarian causes through his charity,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Being_Human_Foundation\">Being Human Foundation</a>.<a href=\"https://en.wikipedia.org/wiki/Salman_Khan#cite_note-11\">[11]</a>&nbsp;He has been hosting the reality show&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Bigg_Boss_(Hindi_TV_series)\">Bigg Boss</a></em>&nbsp;since 2010.<a href=\"https://en.wikipedia.org/wiki/Salman_Khan#cite_note-12\">[12]</a>&nbsp;Khan&#39;s off-screen life is marred by controversy and legal troubles. In 2015, he was convicted of culpable homicide for a negligent driving case in which he ran over five people with his car, killing one, but his conviction was set aside on appeal.<a href=\"https://en.wikipedia.org/wiki/Salman_Khan#cite_note-13\">[13]</a><a href=\"https://en.wikipedia.org/wiki/Salman_Khan#cite_note-14\">[14]</a><a href=\"https://en.wikipedia.org/wiki/Salman_Khan#cite_note-15\">[15]</a><a href=\"https://en.wikipedia.org/wiki/Salman_Khan#cite_note-16\">[16]</a>&nbsp;On 5 April 2018, Khan was convicted in a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Blackbuck\">blackbuck</a>&nbsp;poaching case and sentenced to five years imprisonment.<a href=\"https://en.wikipedia.org/wiki/Salman_Khan#cite_note-5_Years_imprisonment-17\">[17]</a><a href=\"https://en.wikipedia.org/wiki/Salman_Khan#cite_note-5_Years_imprisonment_2-18\">[18]</a>&nbsp;He is currently out on bail while an appeal is being heard.<a href=\"https://en.wikipedia.org/wiki/Salman_Khan#cite_note-19\">[19]</a></p>\r\n', 0x4e6d6163632d323032332d303333312d53616c6d616e5f4b68616e2e6a7067, '2023-07-16'),
(39, 'Mark Zukerburg', '<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Mark_Zuckerberg_F8_2019_Keynote_%2832830578717%29_%28cropped%29.jpg/330px-Mark_Zuckerberg_F8_2019_Keynote_%2832830578717%29_%28cropped%29.jpg\" style=\"border-style:solid; border-width:2px; height:200px; width:161px\" /></p>\r\n\r\n<hr />\r\n<p><strong>Mark Elliot Zuckerberg</strong>&nbsp;(<a href=\"https://en.wikipedia.org/wiki/Help:IPA/English\">/ˈzʌkərbɜːrɡ/</a>; born&nbsp;May 14, 1984), also known colloquially as&nbsp;<strong>Zuck</strong>, is an American&nbsp;<a href=\"https://en.wikipedia.org/wiki/Business_magnate\">business magnate</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Computer_programmer\">computer programmer</a>, internet entrepreneur and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Philanthropy\">philanthropist</a>. He is known for co-founding the social media website&nbsp;<a href=\"https://en.wikipedia.org/wiki/Facebook\">Facebook</a>&nbsp;and its parent company&nbsp;<a href=\"https://en.wikipedia.org/wiki/Meta_Platforms\">Meta Platforms</a>&nbsp;(formerly Facebook, Inc.), of which he is the executive chairman, chief executive officer, and controlling&nbsp;<a href=\"https://en.wikipedia.org/wiki/Shareholder\">shareholder</a>.<a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-FBM-1\">[1]</a><a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-2\">[2]</a></p>\r\n\r\n<p>Zuckerberg attended&nbsp;<a href=\"https://en.wikipedia.org/wiki/Harvard_University\">Harvard University</a>, where he launched Facebook in February 2004 with his roommates&nbsp;<a href=\"https://en.wikipedia.org/wiki/Eduardo_Saverin\">Eduardo Saverin</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Andrew_McCollum\">Andrew McCollum</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Dustin_Moskovitz\">Dustin Moskovitz</a>, and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Chris_Hughes\">Chris Hughes</a>. Originally launched to select college campuses, the site expanded rapidly and eventually beyond colleges, reaching one billion users in 2012. Zuckerberg took the company public in May 2012 with majority shares. In 2007, at age 23, he became the world&#39;s youngest self-made billionaire. He has used his funds to organize multiple philanthropic endeavors, including the establishment of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Chan_Zuckerberg_Initiative\">Chan Zuckerberg Initiative</a>.</p>\r\n\r\n<p>Zuckerberg has been listed as&nbsp;<a href=\"https://en.wikipedia.org/wiki/Time_100\">one of the most influential people in the world</a>&nbsp;on four occasions in 2008, 2011, 2016 and 2019 respectively and nominated as a finalist in 2009, 2012, 2014, 2015, 2017, 2018, 2020, 2021 and 2022. He was named the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Time_Person_of_the_Year\">Person of the Year</a>&nbsp;by&nbsp;<a href=\"https://en.wikipedia.org/wiki/Time_(magazine)\"><em>Time</em></a>&nbsp;magazine in 2010, the same year when Facebook eclipsed more than half a billion users.<a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-NetWorth-3\">[3]</a><a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-POTY-4\">[4]</a><a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-5\">[5]</a>&nbsp;In December 2016, Zuckerberg was ranked tenth on&nbsp;<a href=\"https://en.wikipedia.org/wiki/Forbes_list_of_The_World%27s_Most_Powerful_People\"><em>Forbes</em>&nbsp;list of The World&#39;s Most Powerful People</a>.<a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-6\">[6]</a>&nbsp;In the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Forbes_400\">Forbes 400</a>&nbsp;list of wealthiest Americans in 2022, he was ranked 11th with a wealth of $57.7&nbsp;billion, down from his status as the third-richest American in 2021 with a net worth of $134.5&nbsp;billion. As of May&nbsp;2023, Zuckerberg&#39;s net worth was estimated at $85.0&nbsp;billion according to the&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Forbes\">Forbes</a></em>&nbsp;Real Time Billionaires, making him the 14th richest person in the world.<a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-7\">[7]</a>&nbsp;A film depicting Zuckerberg&#39;s early career, legal troubles and initial success with the site,&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/The_Social_Network\">The Social Network</a></em>, was released in 2010 and won multiple&nbsp;<a href=\"https://en.wikipedia.org/wiki/83rd_Academy_Awards\">Academy Awards</a>.</p>\r\n\r\n<hr />\r\n<p>Zuckerberg&#39;s prominence and fast rise in the technology industry has prompted political and legal attention. The founding of Facebook involved Zuckerberg in multiple lawsuits regarding the creation and ownership of the website as well as issues of user privacy. In 2013, he co-founded the pro-immigration lobbying group&nbsp;<a href=\"https://en.wikipedia.org/wiki/FWD.us\">FWD.us</a>. On April 10 and 11, 2018, Zuckerberg testified before the&nbsp;<a href=\"https://en.wikipedia.org/wiki/United_States_Senate_Committee_on_Commerce,_Science,_and_Transportation\">United States Senate Committee on Commerce, Science, and Transportation</a>&nbsp;regarding the usage of personal data by Facebook in relation to the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Facebook%E2%80%93Cambridge_Analytica_data_scandal\">Facebook&ndash;Cambridge Analytica data breach</a>.<a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-:1-8\">[8]</a></p>\r\n\r\n<h2>Early life and education</h2>\r\n\r\n<p>Mark Elliot Zuckerberg was born on May 14, 1984, in&nbsp;<a href=\"https://en.wikipedia.org/wiki/White_Plains,_New_York\">White Plains, New York</a><a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-9\">[9]</a>&nbsp;to psychiatrist Karen (<a href=\"https://en.wikipedia.org/wiki/Birth_name#Maiden_and_married_names\">n&eacute;e</a>&nbsp;Kempner) and dentist Edward Zuckerberg.<a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-10\">[10]</a>&nbsp;He and his three sisters (Arielle,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Randi_Zuckerberg\">Randi</a>, and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Donna_Zuckerberg\">Donna</a>) were raised in a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Reform_Judaism\">Reform Jewish</a>&nbsp;household<a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-Haartez-11\">[11]</a><a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-12\">[12]</a>&nbsp;in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Dobbs_Ferry,_New_York\">Dobbs Ferry, New York</a>.<a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-NEWYORKER2010-13\">[13]</a>&nbsp;His great-grandparents were Jewish emigrants from Austria, Germany, and Poland.<a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-14\">[14]</a>&nbsp;He attended high school at&nbsp;<a href=\"https://en.wikipedia.org/wiki/Ardsley_High_School\">Ardsley High School</a>&nbsp;before transferring to&nbsp;<a href=\"https://en.wikipedia.org/wiki/Phillips_Exeter_Academy\">Phillips Exeter Academy</a>. He was the captain of the fencing team.<a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-Kirkpatrick-15\">[15]</a><a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-whatwelearned-16\">[16]</a><a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-17\">[17]</a></p>\r\n\r\n<h3>Software development</h3>\r\n\r\n<p>Early years</p>\r\n\r\n<p>Zuckerberg began using computers and writing software in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Middle_school\">middle school</a>. In high school, he built a program that allowed all the computers between his house and his father&#39;s dental office to communicate with each other.<a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-18\">[18]</a><a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-19\">[19]</a>&nbsp;During Zuckerberg&#39;s high-school years, he worked to build a music player called the Synapse Media Player. The device used&nbsp;<a href=\"https://en.wikipedia.org/wiki/Machine_learning\">machine learning</a>&nbsp;to learn the user&#39;s listening habits, which was posted to&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/Slashdot\">Slashdot</a></em><a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-20\">[20]</a>&nbsp;and received a rating of 3 out of 5 from&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/PC_Magazine\">PC Magazine</a></em>.<a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-21\">[21]</a>&nbsp;A&nbsp;<em>New Yorker</em>&nbsp;profile said of Zuckerberg: &quot;some kids played computer games. Mark created them.&quot;<a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-NEWYORKER2010-13\">[13]</a></p>\r\n\r\n<p>College years</p>\r\n\r\n<p>The&nbsp;<em>New Yorker</em>&nbsp;noted that by the time Zuckerberg began classes at&nbsp;<a href=\"https://en.wikipedia.org/wiki/Harvard\">Harvard</a>&nbsp;in 2002, he had already achieved a &quot;reputation as a programming prodigy&quot;. He studied&nbsp;<a href=\"https://en.wikipedia.org/wiki/Psychology\">psychology</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Computer_science\">computer science</a>&nbsp;and belonged to&nbsp;<a href=\"https://en.wikipedia.org/wiki/Alpha_Epsilon_Pi\">Alpha Epsilon Pi</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Kirkland_House\">Kirkland House</a>.<a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-POTY-4\">[4]</a><a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-NEWYORKER2010-13\">[13]</a><a href=\"https://en.wikipedia.org/wiki/Mark_Zuckerberg#cite_note-22\">[22]</a>&nbsp;In his&nbsp;<a href=\"https://en.wikipedia.org/wiki/Sophomore\">sophomore</a>&nbsp;year, he wrote a program that he called CourseMatch, which allowed users to make class selection decisions based on the choices of other students and also to help them form study groups. A short time later, he created a different program he initially called&nbsp;<a href=\"https://en.wikipedia.org/wiki/History_of_Facebook#FaceMash\">Facemash</a>&nbsp;that let students select the best-looking person from a choice of photos. Arie Hasit, Zuckerberg&#39;s roommate at the time, explained:</p>\r\n', 0x4d61726b5a75636b6572626572672d63726f702e6a7067, '2023-07-16'),
(54, 'How windows took place ?', '<p><em><strong>Title: The Windows Revolution: Pioneering the World of Personal Computing</strong></em></p>\r\n\r\n<p><strong>Introduction:</strong> In the realm of personal computing, Windows stands as an iconic and trailblazing operating system that has left an indelible mark on the digital landscape. From its humble beginnings in the mid-1980s, Windows has grown to become the most widely used operating system in the world. Let&#39;s take a journey through time and explore the captivating story of how Windows was born and transformed the way we interact with computers.</p>\r\n\r\n<p><strong>The Genesis of Windows:</strong> In 1981, Microsoft&#39;s co-founder, Bill Gates, envisioned a graphical user interface (GUI) that would democratize computing and make it more accessible to everyday users. The concept for Windows took shape, drawing inspiration from earlier GUI experiments at Xerox PARC and Apple&#39;s Lisa project. Microsoft released its first attempt at a GUI operating environment, Windows 1.0, in November 1985.</p>\r\n\r\n<p><strong>Windows 1.0: </strong>The debut version of Windows introduced users to a novel concept&mdash;graphical windows and a mouse-driven interface. It allowed users to multitask and display multiple applications side by side, laying the foundation for modern-day multitasking. Though primitive by today&#39;s standards, Windows 1.0 represented a significant leap forward in user-friendliness compared to command-line interfaces.</p>\r\n\r\n<p><strong>The Evolution Continues: </strong>With each successive version, Windows evolved rapidly. Windows 3.0, released in 1990, brought significant improvements and popularized the use of icons, drop-down menus, and scrollbars. The release of Windows 95 in 1995 marked a major milestone, as it introduced the iconic Start button and taskbar, cementing Windows as the go-to operating system for personal computing.</p>\r\n\r\n<p><strong>Windows Meets the Internet Age:</strong> The late 1990s saw the rise of the Internet, and Windows adapted accordingly. Internet Explorer was integrated into Windows, and with Windows 98 and Windows 2000, the operating system became more robust and Internet-ready. Windows XP, released in 2001, became one of the most beloved and long-lasting versions of Windows, widely praised for its stability and usability.</p>\r\n\r\n<p><strong>The Shift to Mobile and Beyond:</strong> As technology advanced, so did Windows. The introduction of Windows Mobile for smartphones and Pocket PCs marked Microsoft&#39;s foray into the mobile space. Windows continued to evolve with versions like Windows Vista, Windows 7, and Windows 8, each incorporating new features and interface enhancements.</p>\r\n', 0x7269702d77696e646f77732d736576656e2d66656174757265642e6a7067, '2023-07-18'),
(62, 'hehfhefhef', '<p>evgergvergergrev</p>\r\n', 0x53637265656e73686f7420323032332d30372d3236203230333030372e706e67, '2024-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `bloggi`
--

CREATE TABLE `bloggi` (
  `bid` int(30) NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloggi`
--

INSERT INTO `bloggi` (`bid`, `content`) VALUES
(1, 'Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the .sr-only class.'),
(2, 'hello guys');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `Category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `Category`) VALUES
(9, 'politics');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `bloggi`
--
ALTER TABLE `bloggi`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `b_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `bloggi`
--
ALTER TABLE `bloggi`
  MODIFY `bid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Database: `crud_operation`
--
CREATE DATABASE IF NOT EXISTS `crud_operation` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `crud_operation`;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `Id` int(10) NOT NULL,
  `name` text NOT NULL,
  `phone_number` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Database: `fitplay_users`
--
CREATE DATABASE IF NOT EXISTS `fitplay_users` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fitplay_users`;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `date`) VALUES
(1, 'aryan', 'jadhav', 'at', 'jadhavaryan467@gmail', 'hellowolrd', '2024-01-15'),
(11, '', '', 'sssss', '', 'heloooooo', '2024-01-15'),
(12, '', '', 'sssss', '', 'heloooooo', '2024-01-15'),
(13, 'Aryan', 'Jadhav', 'heydude', 'jadhavaryan467@gmail', 'heloooooo', '2024-01-15'),
(14, 'bsiet', 'kk', 'ase', 'bsietmail@gmail.com', 'bsiet', '2024-01-15'),
(15, 'fitplay', 'chat', 'fitplay', 'thefitplay@gmail.com', 'fitplay', '2024-01-15'),
(16, 'om', 'randive', 'aswe', 'bsietmail@gmail.com', 'aaa', '2024-01-15'),
(17, 'aaaaaa', 'ssssssssss', 'qqqqqqqqqq', 'qqqqqqq@gmail.com', 'sssss', '2024-01-15'),
(18, 'aaaaaa', 'ssssssssss', 'qqqqqqqqqq', 'qqqqqqq@gmail.com', 'qqq', '2024-01-15'),
(19, 'viraj', 'magdum', 'magdumvira', 'viraj@gmail.com', 'hello', '2024-01-15'),
(20, 'bsiet', 'kk', 'aqwert', 'bsietmail@gmail.com', 'aaa', '2024-01-15'),
(21, 'hello', 'hi', 'hellohi', 'assgg@gmail.com', '1234', '2024-01-15'),
(22, 'hello', 'hi', 'hellohiqq', 'assggqq@gmail.com', 'qqq', '2024-01-15'),
(23, 'hello', 'hi', 'hellohiqqw', 'assggqwwq@gmail.com', '111', '2024-01-15'),
(24, 'swaraj', 'kale', 'sk', 'sk@gmail.com', 'hello', '2024-01-15'),
(25, 'bsiet', 'kk', 'sdsdsd', 'bsietmdsdsail@gmail.', '1234', '2024-01-15'),
(26, 'aryan', 'jadhav', 'jadhavarya', 'aj', 'helloaj', '2024-01-15'),
(27, 'check', 'it', 'shishimaru', 'iut', 'qweerty', '2024-01-15'),
(28, 'aryan', 'jadhav', 'jadhavarya', 'aj', 'fitplay', '2024-01-15'),
(29, 'rrrr', 'rrrr', 'tosenaina@', 'qqq', 'qqq', '2024-01-15'),
(30, 'rrrr', 'rrrr', 'tosenaina@', 'qqq', 'qqq', '2024-01-15'),
(31, 'salman', 'khan', 'salmankhan', 'sallubhai', 'hiran', '2024-01-15'),
(32, '==', 'yash', 'y', 'y@gmail.com', 'hello', '2024-01-15'),
(33, '==', 'ii', 'hg', 'hg@gmail.com', '1234', '2024-01-15'),
(34, 'shriman', 'legend', 'sl', 'sl@gmail.com', 'sl2022', '2024-01-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Database: `mg`
--
CREATE DATABASE IF NOT EXISTS `mg` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mg`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Admin_Name` varchar(100) NOT NULL,
  `Admin_Password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_his`
--

CREATE TABLE `order_his` (
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_his`
--

INSERT INTO `order_his` (`user_id`, `item_id`, `item_name`, `price`, `quantity`) VALUES
(0, 1, 'Product 1', 780, 1),
(0, 2, 'Product 1', 780, 1),
(0, 3, 'Product 1', 780, 1),
(0, 4, '', 0, 2),
(0, 5, '', 0, 1),
(0, 6, '', 0, 3),
(0, 7, '', 100000, 1),
(0, 8, '', 10, 1),
(0, 9, 'football', 700, 1),
(0, 10, 'football', 700, 1),
(0, 11, 'football', 700, 1),
(0, 12, 'football', 700, 1),
(24, 15, 'chandan', 10, 1),
(24, 16, 'shilajit', 2000, 1),
(24, 20, 'banyan', 100000, 1),
(13, 21, 'shilajit', 2000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_id` int(100) NOT NULL,
  `Full_Name` text NOT NULL,
  `Phone_No` bigint(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pay_Mod` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_id`, `Full_Name`, `Phone_No`, `Address`, `Pay_Mod`) VALUES
(1, 'yash', 1232, 'kop', 'COD'),
(2, 'sdf', 21, 'asf', 'COD'),
(3, 'as', 4, 'sa', 'COD'),
(4, 'z', 7, 'asf', 'COD'),
(5, 'asd', 523, 'asd', 'COD'),
(6, 'wreasdfgasd', 43534534, 'asdfgadfgafgagfafgafgafgadfsaggggggggggggggggggggggg', 'COD'),
(7, 'shivam', 90090000000, 'tarabai park', 'COD'),
(8, 'salman khan', 111111111110, 'shivaji peth', 'COD'),
(9, 'swaraj', 9284008321, 'shivaji peth', 'COD'),
(10, 'aaaaaaaaaa', 9284008321, 'shivaji peth', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_id` int(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `pic` blob NOT NULL,
  `about` varchar(1000) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `pubdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_id`, `item_name`, `pic`, `about`, `Price`, `Quantity`, `pubdate`) VALUES
(1, 'shilajit', '', '<p>gives power</p>\r\n', 2000, 0, '2024-01-16'),
(2, 'shilajit', 0x53637265656e73686f7420323032332d30392d3236203130353533332e706e67, '<p>gives power</p>\r\n', 2000, 0, '2024-01-16'),
(3, 'football', 0x53637265656e73686f7420323032332d31302d3133203232303134372e706e67, '<p>good&nbsp;</p>\r\n', 700, 0, '2024-01-16'),
(8, 'Product 3', '', '', 4250, 1, '2024-01-16'),
(9, 'banyan', 0x53637265656e73686f7420323032332d30392d3131203232313931312e706e67, '<p>changla</p>\r\n', 100000, 0, '2024-01-16'),
(10, 'chadi', 0x53637265656e73686f7420323032332d31312d3134203137333435302e706e67, '<p>2sssssssss</p>\r\n', 20, 0, '2024-01-17'),
(11, 'chandan', 0x53637265656e73686f7420323032332d31302d3033203132313432342e706e67, '<p>sssssssssssssssss</p>\r\n', 10, 0, '2024-01-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_his`
--
ALTER TABLE `order_his`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`Order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_his`
--
ALTER TABLE `order_his`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `Order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"mg\",\"table\":\"order_his\"},{\"db\":\"mg\",\"table\":\"order_manager\"},{\"db\":\"mg\",\"table\":\"user_orders\"},{\"db\":\"fitplay_users\",\"table\":\"users\"},{\"db\":\"turf\",\"table\":\"grd\"},{\"db\":\"fitplay_users\",\"table\":\"review\"},{\"db\":\"turf\",\"table\":\"turf_owner\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2024-01-16 21:06:32', '{\"Console\\/Mode\":\"collapse\",\"NavigationWidth\":266}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `scbs_db`
--
CREATE DATABASE IF NOT EXISTS `scbs_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `scbs_db`;

-- --------------------------------------------------------

--
-- Table structure for table `booking_list`
--

CREATE TABLE `booking_list` (
  `id` int(30) NOT NULL,
  `ref_code` varchar(100) NOT NULL,
  `client_id` int(30) NOT NULL,
  `facility_id` int(30) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0 = Pending,\r\n1 = Confirmed,\r\n2 = Done,\r\n3 = Cancelled',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_list`
--

INSERT INTO `booking_list` (`id`, `ref_code`, `client_id`, `facility_id`, `date_from`, `date_to`, `status`, `date_created`, `date_updated`) VALUES
(1, '202203-00001', 1, 1, '2022-03-24', '2022-03-24', 3, '2022-03-23 13:22:06', '2022-03-23 13:49:09'),
(2, '202203-00002', 1, 2, '2022-03-24', '2022-03-25', 1, '2022-03-23 13:30:40', '2022-03-23 13:49:11'),
(3, '202203-00003', 2, 4, '2022-03-24', '2022-03-25', 1, '2022-03-23 15:40:58', '2022-03-23 15:41:59'),
(4, '202203-00004', 2, 1, '2022-03-28', '2022-03-28', 3, '2022-03-23 15:41:17', '2022-03-23 15:41:26'),
(5, '202401-00001', 3, 1, '2024-01-12', '2024-01-12', 0, '2024-01-13 21:18:07', NULL),
(6, '202401-00002', 3, 2, '2024-01-13', '2024-03-17', 0, '2024-01-13 21:36:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`id`, `name`, `description`, `delete_flag`, `status`, `date_created`, `date_updated`) VALUES
(1, 'Basket Ball', 'Basket Ball Facility', 0, 1, '2022-03-23 10:34:53', NULL),
(2, 'Badminton', 'Badminton Court', 0, 1, '2022-03-23 10:35:12', NULL),
(3, 'Tennis Court', 'Tennis Court', 0, 1, '2022-03-23 10:35:32', NULL),
(4, 'Football', 'Football Field', 0, 1, '2022-03-23 10:35:46', NULL),
(5, 'Volleyball', 'Volleyball Court', 0, 1, '2022-03-23 10:36:08', NULL),
(6, 'Baseball', 'Baseball Field', 0, 1, '2022-03-23 10:36:42', NULL),
(7, 'Sample 101', 'This is a sample Facility Category Only', 0, 1, '2022-03-23 15:26:12', NULL),
(8, 'Sample 103', 'Test', 1, 0, '2022-03-23 15:26:42', '2022-03-23 15:26:54');

-- --------------------------------------------------------

--
-- Table structure for table `client_list`
--

CREATE TABLE `client_list` (
  `id` int(30) NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text DEFAULT NULL,
  `lastname` text NOT NULL,
  `gender` text NOT NULL,
  `contact` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `image_path` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_added` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_list`
--

INSERT INTO `client_list` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `contact`, `address`, `email`, `password`, `image_path`, `status`, `delete_flag`, `date_created`, `date_added`) VALUES
(1, 'Mark', 'D', 'Male', '', '09123456789', 'Sample Address', 'mcooper@sample.com', 'c7162ff89c647f444fcaa5c635dac8c3', 'uploads/clients/1.png?v=1648008107', 1, 0, '2022-03-23 12:01:47', '2022-03-23 12:01:47'),
(2, 'Samantha', 'C', 'Miller', 'Male', '09456789123', 'Sample Address only', 'sam23@gmail.com', '56fafa8964024efa410773781a5f9e93', 'uploads/clients/2.png?v=1648021231', 1, 0, '2022-03-23 15:40:31', '2022-03-23 15:44:07'),
(3, 'aryan', 'balraj', 'jadhav', 'Male', '7028643356', 'shivaji peth , kolhapur', 'aryan@gmail.com', '56bf377cae026633fe10d7401f40dbb4', NULL, 1, 0, '2024-01-13 21:17:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `facility_list`
--

CREATE TABLE `facility_list` (
  `id` int(30) NOT NULL,
  `facility_code` varchar(100) NOT NULL,
  `category_id` int(30) NOT NULL,
  `image_path` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facility_list`
--

INSERT INTO `facility_list` (`id`, `facility_code`, `category_id`, `image_path`, `status`, `delete_flag`, `date_created`, `date_updated`, `name`, `description`, `price`) VALUES
(1, '202203-00001', 1, 'uploads/facility/1.png?v=1648020784', 1, 0, '2022-03-23 11:07:02', '2022-03-23 15:33:04', 'Indoor Basketball Court', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sapien lorem, finibus sit amet tempus et, pharetra vel quam. Vivamus ultrices elementum turpis, in auctor nisi gravida sit amet. Curabitur rutrum sem vel sollicitudin maximus. Nam ut nisi venenatis felis condimentum luctus quis a purus. Donec accumsan lacinia dapibus. Maecenas sagittis tempor mauris, sit amet molestie lacus tempus ac. Morbi eleifend, libero sit amet facilisis consequat, lectus magna scelerisque massa, sit amet iaculis nibh leo nec leo. Curabitur pellentesque convallis lectus nec euismod. Integer maximus sem a ligula mollis, nec facilisis felis molestie. Proin et imperdiet lacus, sit amet sollicitudin libero. Aenean pellentesque augue ac metus consequat, at ultricies diam lacinia. In hac habitasse platea dictumst. Nunc diam sem, placerat sed placerat at, aliquet id nunc. Phasellus efficitur lorem non dui congue, at mattis odio facilisis.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Aliquam elementum scelerisque elementum. Sed et nisl arcu. Phasellus sollicitudin dui at tellus faucibus faucibus. Vestibulum quam ipsum, fermentum ut dolor eget, lobortis bibendum dolor. Aliquam suscipit metus nec ligula imperdiet porttitor. Vivamus in tincidunt lorem. Nulla cursus nulla massa, nec eleifend turpis auctor sed.</p>', 500.00),
(2, '202203-00002', 1, 'uploads/facility/2.png?v=1648020799', 1, 0, '2022-03-23 11:44:34', '2022-03-23 15:33:19', 'Outdoor Basketball', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Integer rutrum tristique odio vitae mollis. Nullam dapibus porta bibendum. Aliquam et nisi vel velit fringilla dignissim sed sed purus. Aliquam aliquet lacus vitae porttitor sollicitudin. Curabitur a maximus ipsum, nec consequat ex. Sed dapibus, ante ut congue congue, tortor purus pharetra felis, non porttitor purus enim nec mi. Nullam sagittis elit sed dui cursus malesuada. In ullamcorper congue lorem vel bibendum. Phasellus suscipit velit ac fermentum lacinia. Fusce varius condimentum urna vitae posuere. In rhoncus ex eget erat aliquet rutrum. Proin quis arcu vulputate, pharetra enim quis, maximus est. Nulla venenatis fermentum massa, a scelerisque ex tincidunt vel.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">In ac dignissim urna, nec dapibus neque. Duis massa lectus, rutrum et efficitur in, posuere vel mauris. In vel nulla eu nisl porta scelerisque. Donec quis augue metus. Duis quis mauris ut mi eleifend mattis. Ut pulvinar nisl quis rutrum porttitor. Aliquam in mauris in dolor ultrices viverra id blandit velit. Proin vitae augue et neque efficitur ullamcorper eget vel nunc. Pellentesque placerat urna eu magna volutpat malesuada. Quisque imperdiet sem eros, eu convallis tellus fringilla vitae. Aliquam elementum, nibh ut facilisis faucibus, tortor erat consequat sapien, id condimentum libero tortor nec erat.</p>', 350.00),
(3, '202203-00003', 4, 'uploads/facility/3.png?v=1648020817', 1, 0, '2022-03-23 11:45:24', '2022-03-23 15:33:37', 'Football Field 101', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Integer ut congue eros. Nullam non rutrum leo. Vestibulum sollicitudin ac erat sed porta. Donec id neque a libero lacinia ullamcorper vitae quis lorem. In bibendum sodales nunc at viverra. Proin vel ultricies felis, id posuere augue. Donec euismod purus ullamcorper, facilisis nisi non, fringilla arcu. Vivamus enim sem, suscipit sit amet turpis sed, interdum lobortis magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pharetra sapien quis dui auctor suscipit.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Nullam in convallis quam. Nulla facilisi. In erat ipsum, convallis sed diam vitae, commodo maximus dui. Vestibulum gravida elementum euismod. Maecenas et viverra enim. Quisque tempus eleifend convallis. Nunc sit amet sem nisi.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Quisque tempus nunc felis, ac viverra leo facilisis at. In hac habitasse platea dictumst. Etiam dapibus tortor ligula, sit amet tempus tellus elementum at. Praesent pharetra justo ut est volutpat tempus. Ut tincidunt, neque sed egestas ullamcorper, tortor odio suscipit mi, ac dapibus ligula dolor eu lectus. Vestibulum placerat vulputate elit id fringilla. Mauris diam sapien, commodo et turpis consectetur, porta sagittis turpis. Etiam gravida ullamcorper lacus, eget pharetra arcu consectetur eu. Aliquam at laoreet orci. Sed vel posuere leo. Integer ut imperdiet ipsum. Proin tincidunt mollis orci, ac porttitor nulla tempus a. Nullam ut ipsum odio.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Nam condimentum pulvinar turpis, sit amet pharetra purus tincidunt sit amet. Quisque imperdiet dignissim luctus. Nam id odio sit amet odio venenatis tincidunt. Vivamus vel porttitor nunc. Vestibulum vel rutrum nulla. Donec interdum lectus vitae nulla consectetur luctus. Integer eu hendrerit odio, non porta velit. Vestibulum dapibus mauris arcu, eget imperdiet purus facilisis quis. Duis sit amet erat et metus finibus blandit. Duis scelerisque sit amet velit sed ultrices. Nunc facilisis, dolor non fringilla congue, massa odio facilisis justo, vel convallis sem nunc non dolor. Suspendisse ac libero sodales, ullamcorper diam a, consectetur augue. Integer ultrices turpis quis enim blandit bibendum. Donec congue porttitor ligula. Duis quis placerat urna, ac feugiat augue. Vestibulum justo risus, dignissim et massa sagittis, mollis interdum metus.</p>', 5980.98),
(4, '202203-00004', 2, 'uploads/facility/4.png?v=1648020754', 1, 0, '2022-03-23 15:28:01', '2022-03-23 15:32:34', 'Single Court for Badminton', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Aliquam eu libero pharetra, lobortis quam eu, efficitur arcu. Suspendisse sed metus varius, consectetur tortor quis, pretium ipsum. Fusce a augue eget ipsum cursus varius. Maecenas ac libero quis sem aliquam fringilla. Phasellus semper rutrum libero sed dapibus. Maecenas euismod ullamcorper massa, sit amet sollicitudin sem elementum non. Curabitur quis dapibus sem, vitae posuere enim. Integer non iaculis nisi. Donec tristique tincidunt nisi dapibus vehicula. Fusce sit amet vulputate ante. Sed porttitor eros augue, vel dictum nulla iaculis sed. Aliquam finibus at elit sit amet feugiat. Curabitur pretium id nibh dignissim accumsan.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Aliquam a finibus eros. Etiam ac diam sapien. Integer quis hendrerit nibh, sed volutpat metus. Quisque dapibus finibus fermentum. Mauris facilisis, nibh ac placerat euismod, metus felis efficitur tortor, sed gravida quam nisi id elit. Phasellus vehicula ex ligula. Quisque blandit eleifend orci, at ultricies ligula pellentesque in. Nullam fermentum magna justo, id scelerisque ligula aliquam maximus. Nam varius nulla ut libero semper rutrum. Pellentesque tellus arcu, scelerisque non aliquet quis, aliquam sit amet felis. Ut commodo odio vitae libero mollis, malesuada congue nisi feugiat. Nunc varius, felis eu vestibulum lobortis, quam nisi consectetur elit, nec gravida turpis libero vitae leo. Nulla quam ex, mollis in nisi sit amet, egestas volutpat arcu. Mauris porttitor at nisl ac dictum. Nunc at orci nec est placerat tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>', 850.00),
(5, '202203-00005', 6, NULL, 1, 1, '2022-03-23 15:33:48', '2022-03-23 15:33:55', 'test', '<p>test</p>', 123.00);

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Sports Complex Booking System'),
(6, 'short_name', 'SCBS - PHP'),
(11, 'logo', 'uploads/system-logo.png?v=1648002319'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/system-cover.png?v=1648002561');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `date_added`, `date_updated`) VALUES
(1, 'Adminstrator', 'Admin', 'admin', '0192023a7bbd73250516f069df18b500', 'uploads/1624240500_avatar.png', NULL, 1, '2021-01-20 14:02:37', '2021-06-21 09:55:07'),
(10, 'Claire', 'Blake', 'cblake', '542d2760db6928e65bd10de7c16bb82c', 'uploads/avatar-10.png?v=1648021481', NULL, 2, '2022-03-23 15:44:41', '2022-03-23 15:44:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_list`
--
ALTER TABLE `booking_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cab_id` (`facility_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_list`
--
ALTER TABLE `client_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- Indexes for table `facility_list`
--
ALTER TABLE `facility_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_list`
--
ALTER TABLE `booking_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client_list`
--
ALTER TABLE `client_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `facility_list`
--
ALTER TABLE `facility_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_list`
--
ALTER TABLE `booking_list`
  ADD CONSTRAINT `booking_list_ibfk_1` FOREIGN KEY (`facility_id`) REFERENCES `facility_list` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booking_list_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `client_list` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `facility_list`
--
ALTER TABLE `facility_list`
  ADD CONSTRAINT `facility_list_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category_list` (`id`) ON DELETE CASCADE;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `turf`
--
CREATE DATABASE IF NOT EXISTS `turf` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `turf`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grd`
--

CREATE TABLE `grd` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `details` varchar(200) NOT NULL,
  `image` blob NOT NULL,
  `price` int(40) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `place` varchar(50) NOT NULL,
  `pubdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grd`
--

INSERT INTO `grd` (`id`, `name`, `details`, `image`, `price`, `owner`, `place`, `pubdate`) VALUES
(12, 'Tiger turf', '<p>aaaaaaaaaaaaaaaaaaaaaaaa</p>\r\n', 0x53637265656e73686f7420323032332d30382d3233203232323835362e706e67, 600, 'yash nikam', 'phulewadi', '2024-01-14'),
(13, 'tiki taka', '<p>ssssssssss</p>\r\n', 0x53637265656e73686f7420323032332d30392d3131203232313931312e706e67, 56, 'iiiiiii', 'shivaji peth', '2024-01-14'),
(14, 'Tiger turf', '<p>snnnnnnnnnnnnnnnnnn</p>\r\n', 0x53637265656e73686f7420323032332d30392d3130203134343435382e706e67, 100, 'phulewadi', 'phulewadi', '2024-01-14'),
(15, 'fifa cup', '<p>viraj</p>\r\n', 0x53637265656e73686f7420323032332d30392d3033203033313232362e706e67, 2000, 'viraj', 'bhamte', '2024-01-14'),
(16, 'tck', '<p>gggggggggggggggggg</p>\r\n', 0x74636b2e6a706567, 1000, 'mahadik ', 'Ruikar coloney ', '2024-01-15'),
(17, 'tck', '<p>fffff</p>\r\n', 0x53637265656e73686f7420323032332d30382d3037203230333831322e706e67, 1000, 'mahadik ', 'Ruikar coloney ', '2024-01-15'),
(18, 'check it', '<p>aaaaa</p>\r\n', 0x53637265656e73686f7420323032332d30382d3239203139313635332e706e67, 233, 'desai', 'tarabai park', '2024-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `turf_owner`
--

CREATE TABLE `turf_owner` (
  `id` int(11) NOT NULL,
  `firstn` varchar(50) NOT NULL,
  `lastn` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grd`
--
ALTER TABLE `grd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turf_owner`
--
ALTER TABLE `turf_owner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grd`
--
ALTER TABLE `grd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `turf_owner`
--
ALTER TABLE `turf_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Database: `userget`
--
CREATE DATABASE IF NOT EXISTS `userget` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `userget`;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `author_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` int(20) NOT NULL,
  `dt` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`author_id`, `username`, `email`, `password`, `dt`) VALUES
(1, 'aryan', '', 1234, '2023-06-27 09:29:46.000000'),
(2, 'bajrang', 'bajrang@gmail.com', 123456, '2023-06-27 09:59:02.000000'),
(15, 'amit', 'kondami@gmail.com', 1234, '2023-06-28 18:04:35.000000'),
(17, 'shiv', 'shivnagre@gmail.com', 23456, '2023-06-28 18:07:28.000000'),
(18, 'anuj', 'anujsamang@gmail.com', 132, '2023-06-28 18:08:37.000000'),
(19, 'chetan', 'chetanjasud@gmail.co', 0, '2023-06-28 18:09:48.000000'),
(20, 'shubham', 'shubhamnigve@gmail.c', 111, '2023-06-28 18:10:48.000000'),
(22, '123', 'aryan@gmail.com', 111, '2023-07-05 08:55:13.000000'),
(23, 'siddharth', 'siddharth@gmail.com', 123456, '2023-07-05 08:56:26.000000'),
(24, '111', 'heramb@gmail.com', 123, '2023-07-05 09:20:46.000000'),
(25, '999', 'omviraj@gmail.com', 2233, '2023-07-05 09:23:12.000000'),
(26, '111234', 'shivam@gmail.com', 1234567, '2023-07-05 09:26:58.000000'),
(27, '12345', 'siddharthbade@gmail.', 123456, '2023-07-05 09:30:56.000000'),
(28, '123456', 'hemangi@gmail.com', 111111, '2023-07-05 09:36:45.000000'),
(29, '231', 'wagdum@gmail.com', 890, '2023-07-05 09:39:21.000000'),
(30, 'hemagi', 'hemagi45@gmail.com', 111111, '2023-07-05 09:39:42.000000'),
(31, 'harshya', 'stan@gmail.com', 1234567, '2023-07-05 09:40:08.000000'),
(32, '123452', 'dhiraj@gmahil.com', 222222, '2023-07-05 09:41:36.000000'),
(33, 'dhiraj', 'dhiraj@gmail.com', 12333, '2023-07-05 09:41:55.000000'),
(34, '22', 'ganeshsir@gmail.com', 9999, '2023-07-05 09:42:55.000000'),
(35, 'yellow', 'hello@gmail.com', 111111, '2023-07-05 10:03:55.000000'),
(36, 'paras', 'paras@gmail.com', 121212, '2023-07-05 10:06:49.000000'),
(37, 'pratibha', 'pratibha@gmail.com', 123, '2023-07-14 13:36:06.000000'),
(38, 'nita', 'nita@gmail.com', 9070, '2023-07-14 20:56:26.000000'),
(39, 'raj', 'rajjadhav@gmail.com', 8070, '2023-07-18 19:20:40.000000'),
(40, 'simran', 'simran@gmail.com', 8090, '2023-07-25 09:25:16.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`author_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
