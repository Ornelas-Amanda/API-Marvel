-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Fev-2023 às 13:31
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdapimarvel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbherois`
--

CREATE TABLE `tbherois` (
  `id` varchar(20) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbherois`
--

INSERT INTO `tbherois` (`id`, `nome`, `descricao`, `imagem`) VALUES
('1009187', 'Black Panther', '', 'http://i.annihil.us/u/prod/marvel/i/mg/6/60/5261a80a67e7d.jpg'),
('1009652', 'Thanos', 'The Mad Titan Thanos, a melancholy, brooding individual, consumed with the concept of death, sought out personal power and increased strength, endowing himself with cybernetic implants until he became more powerful than any of his brethren.', 'http://i.annihil.us/u/prod/marvel/i/mg/6/40/5274137e3e2cd.jpg'),
('1009697', 'Vision', 'The metal monstrosity called Ultron created the synthetic humanoid known as the Vision from the remains of the original android Human Torch of the 1940s to serve as a vehicle of vengeance against the Avengers.', 'http://i.annihil.us/u/prod/marvel/i/mg/9/d0/5111527040594.jpg'),
('1009718', 'Wolverine', 'Born with super-human senses and the power to heal from almost any wound, Wolverine was captured by a secret Canadian organization and given an unbreakable skeleton and claws. Treated like an animal, it took years for him to control himself. Now, he\'s a premiere member of both the X-Men and the Avengers.', 'http://i.annihil.us/u/prod/marvel/i/mg/2/60/537bcaef0f6cf.jpg'),
('1011515', 'Zeus', 'Zeus ruled a peaceful Olympus for centuries while he and his siblings populated the realm through interbreeding with humans, extradimensionals, Titans, and whatever else caught their fancy.', 'http://i.annihil.us/u/prod/marvel/i/mg/f/60/4ce5a7fcaa386.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbhistoria`
--

CREATE TABLE `tbhistoria` (
  `id` varchar(20) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `idheroi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbhistoria`
--

INSERT INTO `tbhistoria` (`id`, `titulo`, `descricao`, `imagem`, `idheroi`) VALUES
('36162', '5 Ronin (2010) #1 (Variant)', '5 Books, 5 Heroes, 1 unforgettable story of heroes pushed to their limits.  It is 17th century Japan, a time and place of violent upheaval, wandering Ronin, and mysterious Geisha. Into this strange and dangerous world come Wolverine, Pyslocke, Punisher, Hulk and Deadpool. Five of Marvel\'s greatest heroes as you\'ve never seen them before. Each has been wronged by a powerful tyrant. Each has taken a solemn vow of vengeance!\n5 Books, 5 Heroes, 5 Weeks, 1 spell-binding story.', 'http://i.annihil.us/u/prod/marvel/i/mg/e/a0/4d2b4c39b1aea.jpg', '1009718'),
('41113', '5 Ronin (Hardcover)', 'A spellbinding story of five heroes pushed to their limits! It\'s 17th-century Japan, a time and place of violent upheaval, wandering Ronin, and mysterious Geisha. Into this strange and dangerous world come Wolverine, Pyslocke, Punisher, Hulk and Deadpool. Five of Marvel\'s greatest heroes - as you\'ve never seen them before. Each has been wronged by a powerful tyrant. Each has taken a solemn vow - of vengeance! Collecting 5 RONIN #1-5', 'http://i.annihil.us/u/prod/marvel/i/mg/9/a0/4dd689ac4027e.jpg', '1009718'),
('38756', '5 Ronin (2010) #1', '17th century Japan: a time and place of violent upheaval. Into this strange and dangerous world come Wolverine, Pyslocke, Punisher, Hulk and Deadpool. Five of Marvel\'s greatest heroes as you\'ve never seen them before!', 'http://i.annihil.us/u/prod/marvel/i/mg/6/d0/598e2ab495a36.jpg', '1009718'),
('43501', 'A+X (2012) #4', '<ul><li>Storm and Black Panther&rsquo;s first post-AVX encounter!</li><li>Your other two favorite characters fight your favorite villain.</li></ul>', 'http://i.annihil.us/u/prod/marvel/i/mg/6/60/584f0ec518b24.jpg', '1009718'),
('43505', 'A+X (2012) #6', '<ul><li>Kieron Gillenâ€™s worlds collide as Loki and Mr. Sinister team up. You didnâ€™t think the heroes would have all the fun, did you?</li><li>PLUS: Captain Marvel teams up with Wolverine!</li></ul>', 'http://i.annihil.us/u/prod/marvel/i/mg/2/80/584f11f4b1100.jpg', '1009718'),
('7156', 'Avengers (1963) #283', NULL, 'http://i.annihil.us/u/prod/marvel/i/mg/2/90/4e95befec80ca.jpg', '1011515'),
('7158', 'Avengers (1963) #285', NULL, 'http://i.annihil.us/u/prod/marvel/i/mg/3/70/4e95e44121c65.jpg', '1011515'),
('7300', 'Avengers (1963) #50', NULL, 'http://i.annihil.us/u/prod/marvel/i/mg/e/90/58656429957a5.jpg', '1011515'),
('7157', 'Avengers (1963) #284', NULL, 'http://i.annihil.us/u/prod/marvel/i/mg/7/00/4e95df8261f16.jpg', '1011515'),
('71987', 'Avengers No Road Home (2019) #', 'THE ALL-NEW WEEKLY AVENGERS FINALE! The extra-sized finale! Can anything stop Nyx from remaking the cosmos in her image? And will an Avenger die in the attempt?', 'http://i.annihil.us/u/prod/marvel/i/mg/f/70/5cacf67f2a27e.jpg', '1011515'),
('12651', 'Alpha Flight (1983) #111', NULL, 'http://i.annihil.us/u/prod/marvel/i/mg/b/40/image_not_available.jpg', '1009652'),
('5078', 'Annihilation (2006) #2', 'The United Front led by NOVA, RONAN and DRAX have held, but only just. ANNIHILUS\' forces have been fought to a standstill. But can any defense withstand the devastating attack of RAVENOUS and the CENTURIONS?', 'http://i.annihil.us/u/prod/marvel/i/mg/3/80/51b61244955fe.jpg', '1009652'),
('5529', 'Annihilation (2006) #4', 'Left behind, can Drax survive... Thanos takes action... and Nova sets course on a suicide mission.', 'http://i.annihil.us/u/prod/marvel/i/mg/2/60/51b61255041bc.jpg', '1009652'),
('3985', 'Annihilation: Prologue (2006)', 'This is it! 48 pages of cosmic guts and glory! If you want to see your favorite cosmic level heroes and villains, you dare not miss ANNIHIALTION: PROLOGUE! This 48 page (NO ADS!) book is written by Keith Giffen (DRAX THE DESTROYER, THANOS), and features the stunning art of Scott Kolins & Ariel Olivetti. This is the book to read for the NEXT YEAR\'S worth of cosmic stories! Get in on the ground floor as Marvel raises these great characters from the ashes!\r<br>Heroes will die. Villains and heroes w', 'http://i.annihil.us/u/prod/marvel/i/mg/c/03/57865227ac607.jpg', '1009652'),
('4218', 'Annihilation: Silver Surfer (2', '', 'http://i.annihil.us/u/prod/marvel/i/mg/1/50/578687f70173c.jpg', '1009652'),
('37406', 'Age of Ultron (2013) #4', '- The impossible has happened!\n- The Earth has been taken by Ultron...what few super hero survivors there are try desperately to stay alive.\n- And it is Luke Cage who discovers the secret behind Ultron\'s victory over all of mankind.\n- A secret that will have fans of Marvel comics arguing for years to come!', 'http://i.annihil.us/u/prod/marvel/i/mg/5/f0/51ed8c042b354.jpg', '1009697'),
('55363', 'All-New, All-Different Avenger', 'The Search for Nova’s father begins! The Avengers join Sam Alexander for a spacefaring mission to find Nova’s lost father--\nonly to find themselves trapped on a galactic prison planet!', 'http://i.annihil.us/u/prod/marvel/i/mg/b/10/5743705117996.jpg', '1009697'),
('55366', 'All-New, All-Different Avenger', 'CIVIL WAR II TIE-IN! Convinced that he has chosen the right side in the war, the Vision undertakes a manhunt through time in order to stop one of Earth’s greatest evils!', 'http://i.annihil.us/u/prod/marvel/i/mg/6/f0/57a35b78e468a.jpg', '1009697'),
('55364', 'All-New, All-Different Avenger', 'The Avengers--captives on the Stalag of Space! Its mysterious alien warden cannot be beaten by conventional means, but the Avengers’ prison break will take them into an even more dangerous realm!', 'http://i.annihil.us/u/prod/marvel/i/mg/c/90/576d4bccd73b6.jpg', '1009697'),
('55365', 'All-New, All-Different Avenger', 'In chains, held captive millions of light-years from home, the Avengers are without salvation and without hope — unless they’re willing to make some hard choices. Plus: More on the new Wasp!', 'http://i.annihil.us/u/prod/marvel/i/mg/4/03/57911f1745d10.jpg', '1009697'),
('43498', 'A+X (2012) #3', 'Chris Bachalo writes and draws a teamup of two of the biggest Marvel movie ladies \nBLACK WIDOW AND ROGUE VS. SENTINELS!\nJames Asmus and Billy Tan bring together the stars of the two biggest new Marvel series \nGAMBIT AND HAWKEYE SAVE LIVES!', 'http://i.annihil.us/u/prod/marvel/i/mg/7/10/584f0de558b75.jpg', '1009187'),
('30885', 'AGE OF HEROES TPB (Trade Paper', 'Marvel\'s top talent comes together to usher in the Heroic Age! Having defeated Norman Osborn and his siege of Asgard, the heroes have been restored to their rightful place in this new era - and this collection helps gets you in on the ground floor! Featuring J. Jonah Jameson, Doctor Voodoo, Captain Britain and MI13, Spider-Man, Gravity, American Son, the Young Masters, Gauntlet, Sharon Carter, Victoria Hand, Maria Hill, Blue Marvel, Taskmaster, Squirrel Girl, Black Panther, Captain America, Zodi', 'http://i.annihil.us/u/prod/marvel/i/mg/4/50/4d7a499d45197.jpg', '1009187'),
('16900', 'Amazing Spider-Man Annual (196', 'Peter Parker’s origin story is recounted in this exciting annual issue!  In the first segment, Peter uncovers a plot between Empire State University and corrupt mega-corporation Roxxon. What is the valuable resource Roxxon wishes to possess? In a word…vibranium! Guest-starring the Ghost and Ultron-5!', 'http://i.annihil.us/u/prod/marvel/i/mg/f/20/57bef0ba13dd9.jpg', '1009187'),
('16889', 'Amazing Spider-Man Annual (196', 'Spidey takes on The Punisher in an incredible showdown!', 'http://i.annihil.us/u/prod/marvel/i/mg/9/00/5db76aa63622b.jpg', '1009187'),
('62388', 'Astonishing Tales (1970) #6', 'Ka-Zar runs into yet ANOTHER angry god! Dr. Doom has his eyes set on Wakanda, home of the Black Panther!\n', 'http://i.annihil.us/u/prod/marvel/i/mg/9/80/5d519d3e62ad6.jpg', '1009187');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbherois`
--
ALTER TABLE `tbherois`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
