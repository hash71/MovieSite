-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2012 at 10:21 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moviedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE IF NOT EXISTS `favourite` (
  `m_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  PRIMARY KEY (`m_id`,`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favourite`
--

INSERT INTO `favourite` (`m_id`, `u_id`) VALUES
(11, 3),
(31, 2),
(41, 3),
(51, 2),
(61, 2);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `mov_id` int(10) NOT NULL AUTO_INCREMENT,
  `mov_name` varchar(50) NOT NULL,
  `mov_length` int(5) NOT NULL,
  `released` date NOT NULL,
  `rating` int(12) NOT NULL DEFAULT '0',
  `image` varchar(100) NOT NULL DEFAULT 'noimage.png',
  `trailer` varchar(100) NOT NULL DEFAULT 'http://www.youtube.com',
  `storyline` text NOT NULL,
  `rate_number` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mov_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1354100491 ;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`mov_id`, `mov_name`, `mov_length`, `released`, `rating`, `image`, `trailer`, `storyline`, `rate_number`) VALUES
(11, 'Forrest Gump', 142, '1994-07-06', 17, 'forrest_gump.jpg', 'http://www.youtube.com/watch?v=P0oNzk3LhHk', 'Forrest, Forrest Gump is a simple man with a low IQ but good intentions. He is running through childhood with his best and only friend Jenny. His ''mama'' teaches him the ways of life and leaves him to choose his destiny. Forrest joins the army for service in Vietnam, finding new friends called Dan and Bubba, he wins medals, creates a famous shrimp fishing fleet, inspires people to jog, starts a ping-pong craze, create the smiley, write bumper stickers and songs, donating to people and meeting the president several times. However this is all irrelevant to Forrest who can only think of his childhood sweetheart Jenny. Who has messed up her life. Although in the end all he wants to prove is that anyone can love anyone.', 2),
(21, 'G.I. Joe: Retaliation', -1, '2013-03-29', 0, 'gi_joe2.jpg', 'http://www.youtube.com/watch?v=bSX2oxLdcWA', 'Framed for crimes against the country, the G.I. Joe team is terminated by the President''s order, and the surviving team members face off against Zartan, his accomplices, and the world leaders he has under his influence. ', 0),
(31, 'Arya 2', 150, '2009-06-05', 20, 'arya2.jpg', 'http://www.youtube.com/watch?v=VCrLApq-XJU', 'Ajay reflects on his friendship with Arya and recollects how he met him during their stay in an orphanage. Arya virtually forced himself upon him, even tattooed his name on his arm, and proclaimed to be his best friend - but ended up only embarrassing him. After Ajay gets adopted, he heaves a sigh of relief but Arya does re-enter his life as an adult when the former is the CEO of Aj''s Electronics. Ajay offers him a job conditionally that he behaves himself, and the latter undergoes a transformation and everyone believes that he is ''Mr. Perfect''. Complications arise after Geetha Reddy joins the firm and Arya shows her his true unstable and unpredictable colors - compelling her to admit that she is in love with Ajay. While both friends bicker as to who should wed her - Geetha''s influential father has other plans - for he plans to wed her with Subhash - by hook or by crook. ', 2),
(41, 'Despicable Me', 95, '2010-07-09', 16, 'despicable_me.jpg', 'http://www.youtube.com/watch?v=RXZY_XRjABs', 'In a happy suburban neighborhood surrounded by white picket fences with flowering rose bushes, sits a black house with a dead lawn. Unbeknownst to the neighbors, hidden beneath this home is a vast secret hideout. Surrounded by a small army of minions, we discover Gru, planning the biggest heist in the history of the world. He is going to steal the moon. (Yes, the moon!) Gru delights in all things wicked. Armed with his arsenal of shrink rays, freeze rays, and battle-ready vehicles for land and air, he vanquishes all who stand in his way. Until the day he encounters the immense will of three little orphaned girls who look at him and see something that no one else has ever seen: a potential Dad. The world''s greatest villain has just met his greatest challenge: three little girls named Margo, Edith and Agnes. ', 2),
(51, 'Paiyaa', 123, '2010-04-02', 18, 'paiya.jpg', 'http://www.youtube.com/watch?v=tqMhka1Zls8', 'Karthi (Shiva), an engineering graduate with an attitude, is on the look out for a job. He does not seem to be much serious in seeking employment while his friends try their best to settle him. He spots Tamannah (Charu) in a bus stop and it is love at first sight. He finds her on a couple of occasions later and in fact misses an interview in her pursuit. Destiny seems to have something good waiting for him and he gets to spend the most beautiful phase of his life, giving her a ride in the car while waiting to pick the owner of the car at the railway station. Life takes an exciting turn from this point for Karthi who accepts to drop her in Mumbai and thus begins Paiyaa''s journey of romance, action and emotions on a highway with a few turns, some with caution and some without', 2),
(61, 'Number One Shakib Khan', 125, '2010-09-11', 19, 'No1ShakibKhan.jpg', 'http://www.youtube.com/watch?v=ky6UHToupGo', 'The film focuses on a young man who struggles to stand on his own feet. Thrilled by his ideology and honesty, the heroine Apu Biswas makes up her mind to stand beside him with her love to make his dream come true. Popular film actor Shakib Khan is playing in the name role. The cast also includes Nutan, Ali Raj and Sadek Bachhu, among others. ', 2),
(1354100490, 'The Avengers', 143, '2012-08-03', 13, 'avengers.jpg', 'http://www.youtube.com/watch?v=eOrNdBpGMv8', 'Nick Fury is director of S.H.I.E.L.D, an international peace keeping agency. The agency is a who''s who of Marvel Super Heroes, with Iron Man, The Incredible Hulk, Thor, Captain America, Hawkeye and Black Widow. When global security is threatened by Loki and his cohorts, Nick Fury and his team will need all their powers to save the world from disaster.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mov_award`
--

CREATE TABLE IF NOT EXISTS `mov_award` (
  `m_id` int(10) NOT NULL,
  `award` varchar(50) NOT NULL,
  `award_year` year(4) NOT NULL,
  PRIMARY KEY (`m_id`,`award`,`award_year`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mov_award`
--

INSERT INTO `mov_award` (`m_id`, `award`, `award_year`) VALUES
(11, 'Oscar', 2001),
(61, 'Cannes festival award', 2010),
(61, 'Oscar', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `mov_cast`
--

CREATE TABLE IF NOT EXISTS `mov_cast` (
  `m_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  PRIMARY KEY (`m_id`,`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mov_cast`
--

INSERT INTO `mov_cast` (`m_id`, `p_id`) VALUES
(11, 13),
(21, 23),
(31, 33),
(43, 43),
(51, 53),
(61, 63),
(1354100490, 1354100492);

-- --------------------------------------------------------

--
-- Table structure for table `mov_comment`
--

CREATE TABLE IF NOT EXISTS `mov_comment` (
  `m_id` int(10) NOT NULL,
  `comment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment` text NOT NULL,
  `u_id` int(10) NOT NULL,
  PRIMARY KEY (`m_id`,`comment_time`,`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mov_comment`
--

INSERT INTO `mov_comment` (`m_id`, `comment_time`, `comment`, `u_id`) VALUES
(11, '2012-11-29 13:02:12', 'What a movie!!!!', 2),
(11, '2012-11-29 13:02:38', 'chorom akta movie.', 2),
(31, '2012-11-29 12:59:13', 'Awesome movie.', 4),
(31, '2012-11-29 13:00:50', 'I lub this film, and the girl also. :P', 2),
(41, '2012-11-29 13:03:14', 'The best animation movie of the decade.', 3),
(51, '2012-11-29 13:01:52', 'The best movie i ever seen. :)', 2),
(61, '2012-11-25 20:17:00', 'One of the best movie in Bangla.', 4),
(61, '2012-11-27 00:07:03', 'Awesome movie. Shakib khan is my favourite hero. :)', 2),
(1354100490, '2012-11-29 13:11:33', 'This movie doesn''t fill my expectation. It should be much rich in story.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mov_dir`
--

CREATE TABLE IF NOT EXISTS `mov_dir` (
  `m_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  PRIMARY KEY (`m_id`,`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mov_dir`
--

INSERT INTO `mov_dir` (`m_id`, `p_id`) VALUES
(11, 12),
(21, 22),
(31, 32),
(41, 42),
(51, 52),
(61, 62),
(1354100490, 1354100491);

-- --------------------------------------------------------

--
-- Table structure for table `mov_genre`
--

CREATE TABLE IF NOT EXISTS `mov_genre` (
  `m_id` int(10) NOT NULL,
  `genre` varchar(200) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mov_genre`
--

INSERT INTO `mov_genre` (`m_id`, `genre`) VALUES
(11, 'Drama.Romance.'),
(21, 'Action.Adventure.Sci-Fi.'),
(31, 'Action.Romance.'),
(41, 'Animation.Comedy.Crime.'),
(51, 'Action.Romance.'),
(61, 'Action.Romance.'),
(1354100490, 'Action.Romance');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `people_id` int(10) NOT NULL AUTO_INCREMENT,
  `people_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `producer` int(1) NOT NULL DEFAULT '0',
  `actor` int(1) NOT NULL DEFAULT '0',
  `actress` int(1) NOT NULL DEFAULT '0',
  `director` int(1) NOT NULL DEFAULT '0',
  `image` varchar(100) NOT NULL,
  `biography` varchar(10000) NOT NULL DEFAULT 'No biography available',
  PRIMARY KEY (`people_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1354100493 ;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`people_id`, `people_name`, `dob`, `producer`, `actor`, `actress`, `director`, `image`, `biography`) VALUES
(12, 'Robert Zemeckis', '1951-05-14', 1, 0, 0, 1, 'Robert_Zemeckis.jpg', 'A "whizkid" with special effects, Robert is from the Spielberg camp of film-making (Steven Spielberg produced many of his films). Usually working with writing partner Bob Gale, Robert''s earlier films show he has a talent for zany comedy (Romancing the Stone (1984), 1941 (1979)) and special effect vehicles (Who Framed Roger Rabbit (1988) and Back to the Future (1985)). His later films have become more serious, with the hugely successful Tom Hanks vehicle Forrest Gump (1994) and the Jodie Foster film Contact (1997), both critically acclaimed movies. Again, these films incorporate stunning effects. Robert has proved he can work a serious story around great effects, a feat many directors cannot achieve.'),
(13, 'Tom Hanks ', '1956-07-09', 1, 1, 0, 0, 'tom_hanks.jpg', 'Born in California, Tom Hanks grew up in what he calls a "fractured" family. His parents were pioneers in the development of marriage dissolution law in that state, and Tom moved around a lot, living with a succession of step-families. No problems, no abuse, no alcoholism - just a confused childhood. He had no acting experience in college and, in fact, credits the fact that he couldn''t get cast in a college play with actually starting his career. He went downtown, auditioned for a community theater play, was invited by the director of that play to go to Cleveland, and there his acting career started. He met his second wife, actress Rita Wilson on the set of his television show "Bosom Buddies" (1980) - she appeared in one episode in the second season (1981), "Bosom Buddies: All You Need Is Love (#2.7)" (1981). They have two children, and Tom has another son and daughter by his first wife, Samantha Lewes. In 1996, he made his first step behind the camera, directing and writing as well as starring in the film, That Thing You Do! (1996).'),
(22, 'Jon M. Chu', '1979-11-02', 0, 0, 0, 1, 'JonMChu.jpg', 'Jon is an alumni of the USC School of Cinema-Television. There, he won the Princess Grace Award, the Dore Schary Award presented by the Anti-Defamation league, the Jack Nicholson directing award, and recognized as an honoree for the IFP/West program Project: Involve.  After making his student short, "When the Kids Are Away", Jon was scooped up by the William Morris Agency and attached to several high profile projects.'),
(23, 'Channing Tatum', '1980-04-26', 0, 1, 0, 0, 'channingtatum.jpg', 'Channing Matthew Tatum (born April 26, 1980) is an American actor and film producer. He began his career as a fashion model and appearing in television commercials for Pepsi and Mountain Dew before turning to film roles. He made his feature film debut in the sports drama, Coach Carter (2005), and had a supporting role in She''s the Man (2006), before landing a leading role in Step Up (2006). He has also appeared in Fighting (2009), Public Enemies (2009), G.I. Joe: The Rise of Cobra (2009), and Dear John (2010). '),
(32, 'Sukumar', '1980-05-06', 0, 0, 0, 1, 'sukumar.jpg', 'Sukumar Bandreddi , better known by his first name, is a Tollywood film director and screenwriter. He worked as script associate and assistant director for the films Manasichi Choodu, Kshemanga Velli Labhanga Randi, Hanuman Junction and Dil, and made his directorial debut with Arya.'),
(33, 'kajal agarwal', '1990-11-09', 0, 0, 1, 0, 'kajal.jpg', 'Kajal Aggarwal (born 19 June 1985) is an Indian film actress, who appears in Telugu, Tamil and Hindi films. Kajal made her film debut in the 2004 Bollywood film Kyun...! Ho Gaya Na and entered the Telugu film industry through the film Lakshmi Kalyanam (2007). She had her first commercial success with Chandamama (2007) and rose to prominence after her performance in Magadheera (2009), which remains her biggest commercial success,[4] and fetched her a nomination for the Filmfare Award for Best Telugu Actress. Following further consecutive successes with Darling (2010), Brindavanam (2010), Mr. Perfect (2011) and Business Man (2012), she established herself as one of the leading actresses in Telugu cinema.[5] She has also acted in Tamil films, Naan Mahaan Alla (2010) being her first notable project, but with Maattrraan (2012) and the success of Thuppakki (2012), she emerged as a leading actress in Kollywood.'),
(42, 'Chris Renaud', '1976-05-07', 1, 0, 0, 1, 'chrisrenaud.jpg', 'Director Chris Renaud has established himself as a heavyweight in the world of animation following the phenomenal box office success of recent movies Despicable Me (2010) and Dr. Seuss'' The Lorax (2012).'),
(43, 'Steve Carell ', '1962-06-16', 1, 1, 0, 0, 'stevecaroll.jpg', 'Steve Carell is one of American most versatile comics and has been celebrated as the funniest man on the cover of Life Magazine. He was born Steven John Carell on August 16, 1962, in Concord, Massachusetts, USA, into a family of Italian, German, and Polish descent (his grandfather had changed the surname from "Caroselli" to "Carrell"). He was educated at The Fenn School, an all-boys private school in Concord, Massachusetts, then at Middlesex School in Concord. After graduating from Denison University in Granville, Ohio, he moved to Chicago where he taught an improvisational comedy class and performed with The Second City troupe, alongside Stephen Colbert. '),
(52, 'N. Linguswamy', '1972-08-09', 1, 0, 0, 1, 'lingusamy.jpg', 'N. Lingusamy is an Indian film director, screenwriter and film producer, working primarily in Tamil cinema based in Chennai. He made his directorial debut with the family-drama Aanandham in 2001 and followed it up with the highly successful action films Run (2002), Sandakozhi (2005), and Paiyaa (2010). He and his brother N. Subash Chandrabose have also produced films through his production company, Thirupathi Brothers.'),
(53, 'Tamanna Bhatia ', '1989-12-21', 0, 0, 1, 0, 'tamanna.jpg', 'Tamanna Bhatia is an Indian Film Actress born in Mumbai, India. She made her acting debut in 2005 with Hindi film "Chand Sa Roshan Chehra".  Also in 2005, she made her Telugu debut with movie Sri. In 2006, she appeared in her first Tamil film, Kedi. In 2007, she starred in two films, Happy Days and Kalloori, which both earned her critical acclaim.  With many commercial successes like Padikathavan, Ayan, Paiyaa and Siruthai, she established herself as one of the leading actresses in the south Indian film industry.'),
(62, 'Badiul Alam Khokon ', '1976-06-09', 0, 0, 0, 1, 'alfred-hitchcock-profile.jpg', 'Number One Shakib Khan (also known as No1SK) is a Bengali social action drama film directed by Badiul Alam Khokon and it was released in Eid Ul Fitr 2010. and become one of the highest grossing Bangladeshi film of all time. The film star Shakib Khan play the title role .and 60% of this film shoot in Bangkok.'),
(63, 'king shakib khan', '1984-04-28', 1, 1, 1, 1, 'shakibkhan.jpg', 'Shakib Khan[1][2] also Sakib Khan is a Bangladeshi film actor. His original name is Masud Rana. He made his acting debut in the film Anonto Bhalobasha. Khan is one of the most successful actors in Bangladesh film history.[4] He has received many awards and acclamations. He is the highest paid actor in Dhallywood. He won the National Film Award for Best Actor for his performance in Bhalobaslei Ghor Bandha Jay Na.[5][6][7]  Khan''s films include Amar Swapno Tumi (2005), Chachu (2006), Koti Takar Kabin (2006), Dadima, Pitar Ason (2007), Mone Prane Acho Tumi (2008), Tumi Swapno Tumi Shadhona (2008), Mone Boro Kosto (2009), Shaheb Name Golam (2009), Jaan Amar Jaan (2009, Bolbo Kotha Bashor Ghore (2009), Preme Porechi (2010), Poran Jaye Jolia Re, Nissash Amar Tumi(2010), Hai Prem Hai Bhalobasa (2010), Matir Thikana (2011), Tiger Number One (2011), Boss Number One (2011)'' Tor Karone Beche Achi(2011) and Priya Amar Jaan(2011) Mayer Morjada (2006), Amar Praner Swami (2007), Priya Amar Priya (2008), Bhalobaslei Ghor Bandha Jay Na(2010) and Number One Shakib Khan(2010) has been highest-grossing Bangladeshi film.'),
(1354100491, 'Joss Whedon', '1964-06-23', 0, 0, 0, 1, 'Joss-Whedon.jpg', 'Joss Whedon is the middle of five brothers - his younger brothers are Jed Whedon and Zack Whedon. Both his father, Tom Whedon and his grandfather, John Whedon were successful television writers. Joss'' mother, Lee Stearns, was a history teacher and she also wrote novels as Lee Whedon. Whedon was raised in New York and was educated at Riverdale Country School, were his mother also taught. He also attended Winchester College in England for two years, before graduating with a film degree from Wesleyan University.  After relocating to Los Angeles, Whedon landed his first TV writing job on "Roseanne", and moved on to script a season of "Parenthood". He then developed a film script which went on to become Buffy the Vampire Slayer (1992). Whedon was very unhappy with the final film - his original script was extensively re-written and made lighter in tone. After this he earned screenwriting credits on such high profile productions as Alien: Resurrection (1997) and Toy Story (1995), for which he was Oscar nominated. He also worked as a ''script doctor'' on various features, notably Speed (1994).   In 1997, Whedon had the opportunity to resurrect his character Buffy in a television series on The WB Network. This time, as showrunner and executive producer, he retained full artistic control. The series, "Buffy the Vampire Slayer" was a popular and critical hit, which ran for several seasons, the last two on UPN. Whedon also produced a spin-off series, "Angel", which was also successful. A foray in to sci-fi television followed with "Firefly", which developed a cult following, but did not stay on air long. It did find an audience on DVD and through re-runs, and a spin-off feature film Serenity (2005) was released in 2005.  Other projects have included comic book writing, the sci-fi drama "Dollhouse" and the screenplay for Marvel blockbuster The Avengers (2012).'),
(1354100492, 'Robert Downey Jr.', '1965-04-04', 0, 1, 0, 0, 'Rober-downey-jr-ironman.jpg', 'Born in Manhattan, New York, on April 4, 1965, Robert Downey Jr. made his debut as an actor at the age of five in the film Pound (1970), written and directed by his father, Robert Downey Sr., and since that early role, Robert Downey Jr. has amassed an enviable list of credits and honors throughout a four-decades-plus career that shows no signs of slowing. Downey Jr.''s laurels include two Academy Award nominations, three Golden Globe wins, numerous other award nominations and wins, and tremendous popular and commercial success, particularly in his roles as Sherlock Holmes in Sherlock Holmes (2009) and Sherlock Holmes: A Game of Shadows (2011) and as Tony Stark in Iron Man (2008), Iron Man 2 (2010), The Avengers (2012) and the in-production Iron Man 3 (2013). Downey Jr. is married to Susan Downey and has two sons (one from a previous marriage).  Born to writer, director and filmographer Robert Downey Sr. and actress Elsie Downey, Downey Jr. and his sister Allyson were immersed in film and the performing arts from a very young age, leading Downey Jr. to study at the Stagedoor Manor Performing Arts Training Center in upstate New York before moving to California with his father following his parents'' 1978 divorce. In 1982, he dropped out of Santa Monica High School to pursue acting full time. Downey Sr., himself a drug addict, exposed his son to drugs at a very early age, and Downey Jr. would go on to struggle with abuse for decades.  Downey Jr. built his film repertoire throughout the 1980s and 1990s with roles in Tuff Turf (1985), Weird Science (1985), True Believer (1989), Chaplin (1992), Natural Born Killers (1994) and Wonder Boys (2000) among many others, but the actor''s drug-related problems escalated from 1996 to 2001, leading to numerous arrests, rehab visits and incarcerations, and he was eventually fired from the hit TV series "Ally McBeal" (1997).  Emerging clean and sober in 2003, Downey Jr. began to rebuild his career with roles in Gothika (2003), Good Night, and Good Luck. (2005) and A Scanner Darkly (2006), and then in 2008 he began a period of remarkable productivity, with starring roles in a string of very successful blockbusters including Tropic Thunder (2008) and the films of the Iron Man, Avengers and Sherlock Holmes franchises.   In 2005, Downey Jr. married Susan Downey (I), who gave birth to their son, Exton Elias Downey, on February 7, 2012. Downey also has another son, Indio Falconer Downey, born September 7, 1993, from his first marriage to Deborah Falconer, from whom he was officially divorced in 2004.  In addition to acting, Downey Jr. has also pursued a singing career, releasing a 2004 album called "The Futurist", and in 2010, he and his wife established their own production company, Team Downey.');

-- --------------------------------------------------------

--
-- Table structure for table `people_award`
--

CREATE TABLE IF NOT EXISTS `people_award` (
  `p_id` int(11) NOT NULL,
  `award` varchar(50) NOT NULL,
  `award_year` year(4) NOT NULL,
  PRIMARY KEY (`p_id`,`award`,`award_year`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people_award`
--

INSERT INTO `people_award` (`p_id`, `award`, `award_year`) VALUES
(12, 'oscar', 1995),
(13, 'oscar', 2001),
(33, 'big_big_oscar', 2013),
(43, 'golden globe', 2006),
(53, 'large_large_oscar', 2014),
(63, 'oscars(plural_number)', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `email`, `role`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 2),
(2, 'nazmul', 'nazmul', 'nazmul@gmail.com', 1),
(3, 'shaon', 'shaon', 'shaon@gmail.com', 1),
(4, 'newuser', 'newuser', 'newuser@yahoo.com', 1),
(5, 'ami', 'ami', 'ami@yahoo.com', 1),
(6, 'iamnew', 'iamnew', 'iamnew@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_rate`
--

CREATE TABLE IF NOT EXISTS `user_rate` (
  `m_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `check_rate` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`m_id`,`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_rate`
--

INSERT INTO `user_rate` (`m_id`, `u_id`, `check_rate`) VALUES
(11, 2, 8),
(11, 3, 9),
(31, 2, 10),
(31, 3, 10),
(41, 2, 7),
(41, 3, 9),
(51, 2, 9),
(51, 3, 9),
(61, 2, 10),
(61, 3, 9),
(1354100490, 2, 7),
(1354100490, 3, 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
