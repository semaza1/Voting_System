-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2024 at 07:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Email` varchar(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `ProfileImg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Email`, `Name`, `Gender`, `Password`, `ProfileImg`) VALUES
('emmy@gmail.com', 'Semaza Emmanuel', 'Male', 'emmanuel', 'profile.png'),
('irebalain@gmail.com', 'Irebe Gashumba Alain', 'Male', '123', 'profile.png'),
('justin@asyv.org', 'Justin', 'Male', '123', 'Rectangle (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `CandidateId` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Bio` varchar(255) NOT NULL,
  `Manifesto` varchar(255) NOT NULL,
  `PositionId` int(11) NOT NULL,
  `candimages` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `positionId` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`positionId`, `Name`) VALUES
(11, 'President'),
(13, 'Female Minister of Health and Wellness'),
(14, 'Male Minister of Health and Wellness'),
(15, 'Female Minister of Education'),
(16, 'Male Minister of Education'),
(18, 'Male Minister of Gender and Family Promotion'),
(19, 'Female Minister of Gender and Family Promotion'),
(21, 'Minister of Cabinet Affairs'),
(22, 'Female Junior Minister'),
(23, 'Male Junior Minister'),
(25, 'Male Minister of Communication'),
(26, 'Female Minister of Communication'),
(27, 'Male Minister of Foreign Affairs'),
(28, 'Female Minister of Foreign Affairs'),
(29, 'Male Minister of Clubs and Initiatives'),
(30, 'Female Minister of Clubs and Initiatives');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Family` varchar(100) NOT NULL,
  `Class` varchar(255) NOT NULL,
  `Grade` varchar(255) NOT NULL,
  `level` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `Name`, `Password`, `Gender`, `Family`, `Class`, `Grade`, `level`) VALUES
(2022112043, 'SONGA  Isaac', '123', '', '', '', '', 222),
(2023121001, 'Cyuzuzo  David', '123', '', '', '', '', 222),
(2023121002, 'GASHUGI  Persion', '123', '', '', '', '', 222),
(2023121003, 'HABIMANA  KENEDY', '123', '', '', '', '', 222),
(2023121004, 'Hafashimana  Aimable', '123', '', '', '', '', 222),
(2023121005, 'Ishimwe  Brian', '123', '', '', '', '', 222),
(2023121006, 'Ishimwe  Olivier', '123', '', '', '', '', 222),
(2023121007, 'KWIZERA  Dieudonne', '123', '', '', '', '', 222),
(2023121008, 'MAHORO  SHAFFY', '123', '', '', '', '', 222),
(2023121009, 'Mugisha  Isaac', '123', '', '', '', '', 222),
(2023121010, 'Muhire King Lore', '123', '', '', '', '', 222),
(2023121011, 'Mutemberezi  Cedrick', '123', '', '', '', '', 222),
(2023121012, 'Mutesa  Prince', '123', '', '', '', '', 222),
(2023121013, 'MWIZERWA  OLIVIER', '123', '', '', '', '', 222),
(2023121014, 'NDAYISHIMIYE  Dieudonne', '123', '', '', '', '', 222),
(2023121015, 'Ngabonziza  Jean Claude', '123', '', '', '', '', 222),
(2023121016, 'Niyomwungeri  Elisa', '123', '', '', '', '', 222),
(2023121017, 'NKUNDA Nderibanga Aurly Jael', '123', '', '', '', '', 222),
(2023121018, 'NKURUNZIZA  Marc Patience', '123', '', '', '', '', 222),
(2023121019, 'Nkurunziza  Theogene', '123', '', '', '', '', 222),
(2023121020, 'Nshimiyimana  Patrick', '123', '', '', '', '', 222),
(2023121021, 'Rukundo  Sam', '123', '', '', '', '', 222),
(2023121022, 'Ruzima  Jean Pierre', '123', '', '', '', '', 222),
(2023121023, 'Shema  Steven', '123', '', '', '', '', 222),
(2023121024, 'TUYISENGE  Emmanuel', '123', '', '', '', '', 222),
(2023122025, 'AKIMPUNDU  Belyse', '123', '', '', '', '', 222),
(2023122026, 'ASIIMWE Nyllah Esther TETERO', '123', '', '', '', '', 222),
(2023122028, 'Ingabire  Emelyne', '123', '', '', '', '', 222),
(2023122029, 'IRADUKUNDA  Risette', '123', '', '', '', '', 222),
(2023122030, 'IRAKOZE  Denyse', '123', '', '', '', '', 222),
(2023122031, 'ISHIMWE  DIVINE', '123', '', '', '', '', 222),
(2023122032, 'Kabatesi  Aline', '123', '', '', '', '', 222),
(2023122033, 'MUGWANEZA  Celine', '123', '', '', '', '', 222),
(2023122034, 'MUHAYIMPUNDU  Anitha', '123', '', '', '', '', 222),
(2023122036, 'MUKARUSAGARA  Emertha', '123', '', '', '', '', 222),
(2023122037, 'NSHONGORE  Dinah', '123', '', '', '', '', 222),
(2023122038, 'Tuyizere  Milliam', '123', '', '', '', '', 222),
(2023122039, 'Umutoni  Deborah', '123', '', '', '', '', 222),
(2023122040, 'Uwase  Anitha', '123', '', '', '', '', 222),
(2023122041, 'Uwase  Kevine', '123', '', '', '', '', 222),
(2023122042, 'UWINEZA  Sharon', '123', '', '', '', '', 222),
(2023122043, 'Uwingeneye  Joselyne', '123', '', '', '', '', 222),
(2023122129, 'Uwurukundo  Jeannine', '123', '', '', '', '', 222),
(2023122130, 'Teta  Keillah', '123', '', '', '', '', 222),
(2023123045, 'Bazimya  Frank', '123', '', '', '', '', 222),
(2023123046, 'BIZIMANA  Daniel', '123', '', '', '', '', 222),
(2023123047, 'Bizimana  Shaban', '123', '', '', '', '', 222),
(2023123048, 'Gisa  Yossam', '123', '', '', '', '', 222),
(2023123049, 'IHIRWE  Manzi', '123', '', '', '', '', 222),
(2023123050, 'Iradukunda  Alexis', '123', '', '', '', '', 222),
(2023123051, 'ISABWE  Roger', '123', '', '', '', '', 222),
(2023123052, 'ISHEMA  JEHOVANIS CHARITE', '123', '', '', '', '', 222),
(2023123053, 'KADEGE  Jean Marie', '123', '', '', '', '', 222),
(2023123054, 'KAYIHURA  Arnold', '123', '', '', '', '', 222),
(2023123055, 'MADJARIWA  Emmanuel', '123', '', '', '', '', 222),
(2023123056, 'MANISHIMWE  Clement', '123', '', '', '', '', 222),
(2023123057, 'MUDAHEMUKA  Jean de la Croix', '123', '', '', '', '', 222),
(2023123058, 'MUGISHA  Arsene', '123', '', '', '', '', 222),
(2023123059, 'Mugisha  Junior', '123', '', '', '', '', 222),
(2023123060, 'MUHIRE  Alain', '123', '', '', '', '', 222),
(2023123061, 'MUNEZA  Delphin', '123', '', '', '', '', 222),
(2023123062, 'Munezero  Eric', '123', '', '', '', '', 222),
(2023123063, 'NDAMIRA  REGIS', '123', '', '', '', '', 222),
(2023123064, 'Niyigena  Patrick', '123', '', '', '', '', 222),
(2023123065, 'Niyonkuru  Galaxy', '123', '', '', '', '', 222),
(2023123066, 'NSENGIYUMVA  Yves', '123', '', '', '', '', 222),
(2023123067, 'Tuyishime  Bruce', '123', '', '', '', '', 222),
(2023123068, 'Uwihanganye  Aime', '123', '', '', '', '', 222),
(2023124069, 'AKISHIMWE  Happiness', '123', '', '', '', '', 222),
(2023124070, 'AKUMUNTU  Betty', '123', '', '', '', '', 222),
(2023124071, 'Amata  Belyse', '123', '', '', '', '', 222),
(2023124072, 'BAZUBAGIRA  Sandrine', '123', '', '', '', '', 222),
(2023124073, 'IKIREZI MIHIGO Laura', '123', '', '', '', '', 222),
(2023124074, 'Iradukunda  Alice', '123', '', '', '', '', 222),
(2023124075, 'IRADUKUNDA  YVETTE', '123', '', '', '', '', 222),
(2023124076, 'IRAKOZE  Gloria', '123', '', '', '', '', 222),
(2023124077, 'ISHIMWE  DENYSE', '123', '', '', '', '', 222),
(2023124078, 'KANTARAMA  ALEXIE', '123', '', '', '', '', 222),
(2023124079, 'MAHORO  Blandine', '123', '', '', '', '', 222),
(2023124080, 'MUTESI  Diane', '123', '', '', '', '', 222),
(2023124081, 'MUTONI  Vanella', '123', '', '', '', '', 222),
(2023124082, 'NSABAYEZU  Clarisse', '123', '', '', '', '', 222),
(2023124083, 'Kayitesi  Sarah', '123', '', '', '', '', 222),
(2023124084, 'UWANYIRIGIRA  Florence', '123', '', '', '', '', 222),
(2023124085, 'UWASE  FAZIRATI', '123', '', '', '', '', 222),
(2023124086, 'UWASE Florine Gihamira', '123', '', '', '', '', 222),
(2023124087, 'Uwimpuhwe  Diane', '123', '', '', '', '', 222),
(2023124088, 'Uwitonze Kabanda  Charline', '123', '', '', '', '', 222),
(2023125089, 'Abatoni  Benitha', '123', '', '', '', '', 222),
(2023125090, 'Arakaza  Lydie', '123', '', '', '', '', 222),
(2023125091, 'DUSHIMIMANA  Anitha', '123', '', '', '', '', 222),
(2023125092, 'GIRABANA  FATU', '123', '', '', '', '', 222),
(2023125093, 'IRADUKUNDA  Aimerence', '123', '', '', '', '', 222),
(2023125094, 'IRADUKUNDA  Jennifer', '123', '', '', '', '', 222),
(2023125095, 'IRIBAGIZA  FLORA', '123', '', '', '', '', 222),
(2023125096, 'Isimbi Ange Liliane', '123', '', '', '', '', 222),
(2023125097, 'IZERIMANIGABA  Rachel', '123', '', '', '', '', 222),
(2023125098, 'Kantengwa  Adeline', '123', '', '', '', '', 222),
(2023125099, 'KAYIREBWA  Marie Goreth', '123', '', '', '', '', 222),
(2023125100, 'Mukamusoni KAMIKAZI  Ruth', '123', '', '', '', '', 222),
(2023125101, 'MUTAMURIZA  Dyna', '123', '', '', '', '', 222),
(2023125102, 'MUTONI  Nadine', '123', '', '', '', '', 222),
(2023125103, 'MUTUYIMANA  Yvonne', '123', '', '', '', '', 222),
(2023125104, 'MUVUNYI  Cynthia', '123', '', '', '', '', 222),
(2023125105, 'NSENGIYUMVA Naomie Dorelle', '123', '', '', '', '', 222),
(2023125106, 'NSENGIYUMVA  Yvette', '123', '', '', '', '', 222),
(2023125107, 'RUSARO MIHIGO Lynette', '123', '', '', '', '', 222),
(2023125108, 'UMUTONIWASE Sangwa  Chance', '123', '', '', '', '', 222),
(2023126109, 'Agahozo  Pauline', '123', '', '', '', '', 222),
(2023126110, 'Amizero  Shami Divine', '123', '', '', '', '', 222),
(2023126111, 'BATAMURIZA  Assumpta', '123', '', '', '', '', 222),
(2023126112, 'IHIMBAZWE  UMUTESI TUMUSIFU', '123', '', '', '', '', 222),
(2023126113, 'IRADUKUNDA  Gerardine', '123', '', '', '', '', 222),
(2023126114, 'IRAKOZE  Naquitta', '123', '', '', '', '', 222),
(2023126116, 'MUKAHAKIZIMANA  Diane', '123', '', '', '', '', 222),
(2023126117, 'Niyigena  Annuarite', '123', '', '', '', '', 222),
(2023126118, 'NIYOTWIZEYE  Rachel', '123', '', '', '', '', 222),
(2023126119, 'RUTAGWENA  Dorcas', '123', '', '', '', '', 222),
(2023126120, 'Tumusime  Aneth', '123', '', '', '', '', 222),
(2023126121, 'UKUNDWANASE  Violette', '123', '', '', '', '', 222),
(2023126122, 'UMUGWANEZA  Nadina', '123', '', '', '', '', 222),
(2023126123, 'UMURERWA  Denyse', '123', '', '', '', '', 222),
(2023126124, 'MUTESI  Anitha', '123', '', '', '', '', 222),
(2023126125, 'UMUTONI  Doline', '123', '', '', '', '', 222),
(2023126126, 'UWIMANA  CECILE', '123', '', '', '', '', 222),
(2023126127, 'Uwineza  Belyse', '123', '', '', '', '', 222),
(2023126128, 'YUMVAGUSENGA Marie Cecile', '123', '', '', '', '', 222),
(2023126131, 'AKIMANA Isimbi Noella', '123', '', '', '', '', 222),
(2023126132, 'Amini  Yvan', '123', '', '', '', '', 222),
(2023126133, 'Berwa Dukuzumukiza Sandrine', '123', '', '', '', '', 222),
(2023126134, 'Bigirimana  Kadhaf', '123', '', '', '', '', 222),
(2023126135, 'Dushimimana Jean Paul', '123', '', '', '', '', 222),
(2023126136, 'Gasangwa Ineza Christa', '123', '', '', '', '', 222),
(2023126137, 'Gashami Aisha Honorine', '123', '', '', '', '', 222),
(2023126138, 'GISA  BRIAN', '123', '', '', '', '', 222),
(2023126139, 'Gisubizo Jean Baptiste', '123', '', '', '', '', 222),
(2023126140, 'Habwimpundu  Agnes', '123', '', '', '', '', 222),
(2023126141, 'Hirwa  Shami', '123', '', '', '', '', 222),
(2023126142, 'Igihozo  Natacha', '123', '', '', '', '', 222),
(2023126143, 'IGIRIBITANGAZA  Samuel', '123', '', '', '', '', 222),
(2023126144, 'Ihezagirwe  Leila', '123', '', '', '', '', 222),
(2023126145, 'IKUZWE  Dany', '123', '', '', '', '', 222),
(2023126146, 'Imaniratuzi  Isaac', '123', '', '', '', '', 222),
(2023126147, 'INGABIRE  DIVINE', '123', '', '', '', '', 222),
(2023126148, 'Ingabire  Sandrine', '123', '', '', '', '', 222),
(2023126149, 'Ingabire Uwase Jeanine', '123', '', '', '', '', 222),
(2023126150, 'Iradukunda  Clement', '123', '', '', '', '', 222),
(2023126151, 'Iradukunda  Deborah', '123', '', '', '', '', 222),
(2023126152, 'IRADUKUNDA  Dieudonne', '123', '', '', '', '', 222),
(2023126153, 'Iradukunda  Patrick', '123', '', '', '', '', 222),
(2023126154, 'Irebe Gashumba Alain', '123', '', '', '', '', 222),
(2023126155, 'Ishimwe  Eric', '123', '', '', '', '', 222),
(2023126156, 'Ishimwe  Hanriette', '123', '', '', '', '', 222),
(2023126157, 'ISHIMWE  Ismael', '123', '', '', '', '', 222),
(2023126158, 'Ishimwe  Josiane', '123', '', '', '', '', 222),
(2023126159, 'Ishimwe  Mediatrice', '123', '', '', '', '', 222),
(2023126160, 'Ishimwe  Merveille', '123', '', '', '', '', 222),
(2023126161, 'ISHIMWE  Pacifique', '123', '', '', '', '', 222),
(2023126162, 'Isimbi  Raissa', '123', '', '', '', '', 222),
(2023126163, 'ITERITEKA  Louange', '123', '', '', '', '', 222),
(2023126164, 'KAMIKAZI  Redempta', '123', '', '', '', '', 222),
(2023126165, 'Kamuhanda  David', '123', '', '', '', '', 222),
(2023126166, 'KANGABE  Selaphine', '123', '', '', '', '', 222),
(2023126167, 'Kayiraba  Naomi', '123', '', '', '', '', 222),
(2023126168, 'Kayitare  Habiyaremye', '123', '', '', '', '', 222),
(2023126169, 'KAYITESI  Ruth', '123', '', '', '', '', 222),
(2023126170, 'KEZA GASHUMBA Arlene', '123', '', '', '', '', 222),
(2023126171, 'KIREZI  KEVINE', '123', '', '', '', '', 222),
(2023126172, 'Kubwimana  Denise', '123', '', '', '', '', 222),
(2023126173, 'Mahoro Ishimwe Rachel', '123', '', '', '', '', 222),
(2023126174, 'Manzi  Yvan', '123', '', '', '', '', 222),
(2023126175, 'Manzi  Zac', '123', '', '', '', '', 222),
(2023126176, 'Mazimpaka Senga Raymond', '123', '', '', '', '', 222),
(2023126177, 'Mbabazi  Esther', '123', '', '', '', '', 222),
(2023126178, 'Mitali Mfura Landy  Demaximo', '123', '', '', '', '', 222),
(2023126179, 'Mpuhwezimana  Elie', '123', '', '', '', '', 222),
(2023126180, 'Mugabo Ntwali Gustave', '123', '', '', '', '', 222),
(2023126181, 'MUGENI  DIANE', '123', '', '', '', '', 222),
(2023126182, 'Mugisha  Boris', '123', '', '', '', '', 222),
(2023126183, 'MUGISHA Jean Luc', '123', '', '', '', '', 222),
(2023126184, 'MUHAWENIMANA  Jeannette', '123', '', '', '', '', 222),
(2023126185, 'Muheto  Jackson', '123', '', '', '', '', 222),
(2023126186, 'Muhirwa  Theoneste', '123', '', '', '', '', 222),
(2023126187, 'MUKAKAMANZI  Esther', '123', '', '', '', '', 222),
(2023126188, 'MUKAMARAKIZA  Felicien', '123', '', '', '', '', 222),
(2023126189, 'Mukamugema  Rosine', '123', '', '', '', '', 222),
(2023126190, 'Mukamuhire  Clementine', '123', '', '', '', '', 222),
(2023126191, 'MUKASETI  Judith', '123', '', '', '', '', 222),
(2023126192, 'Mukeshimana  Clementine', '123', '', '', '', '', 222),
(2023126193, 'Mukiza  Edmond', '123', '', '', '', '', 222),
(2023126194, 'Mukubu  Ivan', '123', '', '', '', '', 222),
(2023126195, 'Mukundwa  Frida', '123', '', '', '', '', 222),
(2023126197, 'MUNGANYINKA  Julienne', '123', '', '', '', '', 222),
(2023126198, 'Murenzi Shyaka Philbert', '123', '', '', '', '', 222),
(2023126199, 'Umwariwase  Musanabasinga', '123', '', '', '', '', 222),
(2023126200, 'Mushirambeho  Patience', '123', '', '', '', '', 222),
(2023126201, 'MUSINGAKAZI  Edissa', '123', '', '', '', '', 222),
(2023126202, 'Mutesi  Elina', '123', '', '', '', '', 222),
(2023126203, 'MUTIJIMA  Orcel', '123', '', '', '', '', 222),
(2023126204, 'MUTONIWASE  EDDY', '123', '', '', '', '', 222),
(2023126205, 'Ndamage  Crepin', '123', '', '', '', '', 222),
(2023126206, 'Nduwumwami isimbi Aurore', '123', '', '', '', '', 222),
(2023126207, 'NGABIRE  Janet', '123', '', '', '', '', 222),
(2023126208, 'Nikuze  Aline', '123', '', '', '', '', 222),
(2023126209, 'Nikuze  Evelyne', '123', '', '', '', '', 222),
(2023126210, 'NIRAGIRE  Claudine', '123', '', '', '', '', 222),
(2023126211, 'NIYERA  Denyse', '123', '', '', '', '', 222),
(2023126212, 'Niyirora Tuyisabe Francoise', '123', '', '', '', '', 222),
(2023126214, 'NIYOMUKIZA  Diane', '123', '', '', '', '', 222),
(2023126215, 'NIYONZIMA  Patrick', '123', '', '', '', '', 222),
(2023126216, 'Nkurunziza  Hodali', '123', '', '', '', '', 222),
(2023126217, 'Nshuti  Sylver', '123', '', '', '', '', 222),
(2023126218, 'Nyirabakamisha  Solange', '123', '', '', '', '', 222),
(2023126219, 'NYIRANDORIMANA  Alphonsine', '123', '', '', '', '', 222),
(2023126220, 'Rukundo John Kelly', '123', '', '', '', '', 222),
(2023126221, 'Rusanganwa Itaramirwe Annick', '123', '', '', '', '', 222),
(2023126222, 'Semaza  Emmanuel', '123', '', '', '', '', 222),
(2023126223, 'Shema  Frank', '123', '', '', '', '', 222),
(2023126224, 'Shukran Jean Yvan', '123', '', '', '', '', 222),
(2023126225, 'Singeniyo  Emmanuel', '123', '', '', '', '', 222),
(2023126226, 'TETA Deborah Lesly  Butati', '123', '', '', '', '', 222),
(2023126227, 'Teta Tumukunde Kellia', '123', '', '', '', '', 222),
(2023126228, 'Tumusiime Elisha Steven', '123', '', '', '', '', 222),
(2023126229, 'Tuyisenge Ange Nelly', '123', '', '', '', '', 222),
(2023126230, 'Tuyishime  Regis', '123', '', '', '', '', 222),
(2023126231, 'Twizeyimana Pierre Norasco', '123', '', '', '', '', 222),
(2023126232, 'Ufitinema  Bellange', '123', '', '', '', '', 222),
(2023126233, 'UHIRWA  Laurene', '123', '', '', '', '', 222),
(2023126234, 'Ukuriyingabo  Pascal', '123', '', '', '', '', 222),
(2023126235, 'Umumararungu  Obine', '123', '', '', '', '', 222),
(2023126236, 'Umutoni  Aline', '123', '', '', '', '', 222),
(2023126237, 'Umwaliwase  Solange', '123', '', '', '', '', 222),
(2023126238, 'Utamuriza  Marcelline', '123', '', '', '', '', 222),
(2023126239, 'Uwamariya  Jennifer', '123', '', '', '', '', 222),
(2023126240, 'Uwantege  Ingrid', '123', '', '', '', '', 222),
(2023126241, 'Uwarurema  Nadine', '123', '', '', '', '', 222),
(2023126242, 'Uwase  Assouma', '123', '', '', '', '', 222),
(2023126243, 'Uwase  Confiance', '123', '', '', '', '', 222),
(2023126244, 'UWASE  DIANE', '123', '', '', '', '', 222),
(2023126245, 'Uwase  Fillette', '123', '', '', '', '', 222),
(2023126246, 'Uwase kamikazi Anne', '123', '', '', '', '', 222),
(2023126247, 'UWAYISENGA  Christine', '123', '', '', '', '', 222),
(2023126248, 'Uwimana  Emmanuel', '123', '', '', '', '', 222),
(2023126249, 'Uwimana  Frank', '123', '', '', '', '', 222),
(2023126250, 'Uwimana Jean de Dieu', '123', '', '', '', '', 222),
(2023126251, 'Uwimana  Joselyne', '123', '', '', '', '', 222),
(2023126252, 'Uwimpaye  Ines', '123', '', '', '', '', 222),
(2023126253, 'Uwimpuhwe  Belyse', '123', '', '', '', '', 222),
(2023126254, 'Uwineza  Emelyne', '123', '', '', '', '', 222),
(2023126255, 'Uwineza  Immaculee', '123', '', '', '', '', 222),
(2023126256, 'Ingabire  Joselyne', '123', '', '', '', '', 222),
(2023126257, 'Uwiragiye  Sifa', '123', '', '', '', '', 222),
(2023126258, 'Uwizera  laurence', '123', '', '', '', '', 222),
(2023126259, 'AKALIZA NIYONGABO Fidela', '123', '', '', '', '', 222),
(2023126260, 'ISHIMWE  William', '123', '', '', '', '', 222),
(2023126261, 'AKALIZA  Precious', '123', '', '', '', '', 222),
(2023126262, 'TUYISHIME Mucyo Sisino', '123', '', '', '', '', 222),
(2023126263, 'IGIHOZO  Fiona', '123', '', '', '', '', 222),
(2023126264, 'MUNYABUGINGO  Noel', '123', '', '', '', '', 222),
(2023126265, 'ASHIMWE Laura Pamela', '123', '', '', '', '', 222),
(2023126266, 'NAKURE  Scolastique', '123', '', '', '', '', 222),
(2023126267, 'GIRAMATA  Rachel', '123', '', '', '', '', 222),
(2023126268, 'BATAMURIZA  charity', '123', '', '', '', '', 222),
(2023126269, 'IBYISHAKA  Dorcas', '123', '', '', '', '', 222),
(2023126270, 'IZERE KAYIRANGA Macrine', '123', '', '', '', '', 222),
(2023126271, 'ISHIMWE  Adeline', '123', '', '', '', '', 222),
(2023126272, 'IKUZE KEZA Brise Nina', '123', '', '', '', '', 222),
(2023126273, 'UMURERWA  Divine', '123', '', '', '', '', 222),
(2023126274, 'UMUHIRE Nicole Petite', '123', '', '', '', '', 222),
(2023126275, 'MURERWA  Blessed', '123', '', '', '', '', 222),
(2023126276, 'IMANIZABAYO  Henriette', '123', '', '', '', '', 222),
(2023126277, 'IRERE Queenter Benthy', '123', '', '', '', '', 222),
(2023126278, 'UWASE  Yvette', '123', '', '', '', '', 222),
(2023126279, 'MUKARWEGO Pili Djasmine', '123', '', '', '', '', 222),
(2023126280, 'NYIRABIZIMANA  Vestine', '123', '', '', '', '', 222),
(2023126281, 'IRADUKUNDA  Esther', '123', '', '', '', '', 222),
(2023126282, 'KALIZA UMUTONI Alice', '123', '', '', '', '', 222),
(2023126283, 'SHARANGABO AGAHIRE Ketia', '123', '', '', '', '', 222),
(2023126284, 'UWIMANA  Jeannette', '123', '', '', '', '', 222),
(2023126285, 'UWABABYEYI  Gisele', '123', '', '', '', '', 222),
(2023126286, 'ISHIMWE  Lysette', '123', '', '', '', '', 222),
(2023126287, 'NYIRAKANEZA  Princess', '123', '', '', '', '', 222),
(2023126288, 'UMUHOZA  Iness', '123', '', '', '', '', 222),
(2023126289, 'MBABAZI  Alodie', '123', '', '', '', '', 222),
(2023126290, 'UMUTONIWASE  Pascaline', '123', '', '', '', '', 222),
(2023126291, 'INGABIRE  Gisele', '123', '', '', '', '', 222),
(2023126292, 'MUKASHYAKA  Valentine', '123', '', '', '', '', 222),
(2023126293, 'KAMIKAZI  Nikita', '123', '', '', '', '', 222),
(2023126294, 'UWIDUHAYE  Magnifique', '123', '', '', '', '', 222),
(2023126295, 'ABAYISENGA  Caline', '123', '', '', '', '', 222),
(2023126296, 'UWIMANA  Alexia', '123', '', '', '', '', 222),
(2023126297, 'BUTOYI  Aline', '123', '', '', '', '', 222),
(2023126298, 'MUTUYIMANA  Alice', '123', '', '', '', '', 222),
(2023126299, 'MBABAZI  Honorine', '123', '', '', '', '', 222),
(2023126300, 'ABIMANA  Liliane', '123', '', '', '', '', 222),
(2023126301, 'UWINEZA  Denyse', '123', '', '', '', '', 222),
(2023126302, 'MUGABO  Denny', '123', '', '', '', '', 222),
(2023126303, 'INGABIRE  Xavella', '123', '', '', '', '', 222),
(2023126304, 'HATANGIMANA  Joselyne', '123', '', '', '', '', 222),
(2023126305, 'IRAGABA  Josee', '123', '', '', '', '', 222),
(2023126306, 'MUGISHA  Eric', '123', '', '', '', '', 222),
(2023126308, 'IRADUKUNDA  Celine', '123', '', '', '', '', 222),
(2023126309, 'UMWALI  Chanella', '123', '', '', '', '', 222),
(2023126310, 'KARENZI  Gisele', '123', '', '', '', '', 222),
(2023126311, 'MUKWAYA ALDRINE Jeremiah', '123', '', '', '', '', 222),
(2023126312, 'UWAMAHORO  Rebecca', '123', '', '', '', '', 222),
(2023126313, 'MUNYAZOGEYE Sangwa Eric', '123', '', '', '', '', 222),
(2023126314, 'MUKESHIMANA  Diane', '123', '', '', '', '', 222),
(2023126315, 'ITERITEKA  Claudine', '123', '', '', '', '', 222),
(2023126316, 'URIHO  Moreen', '123', '', '', '', '', 222),
(2023126317, 'MUZIRANENGE  Josephine', '123', '', '', '', '', 222),
(2023126318, 'MUHONGAYIRE  Leoncie', '123', '', '', '', '', 222),
(2023126319, 'NGOGA  Denny', '123', '', '', '', '', 222),
(2023126320, 'UWIREBEYE  Joselyne', '123', '', '', '', '', 222),
(2023126321, 'UWIMBABAZI  Solange', '123', '', '', '', '', 222),
(2023126322, 'RUTIKANGA AKARIZA Sandra', '123', '', '', '', '', 222),
(2023126323, 'KUBWIMANA  Josiane', '123', '', '', '', '', 222),
(2023126324, 'UMUGISHA Ake Brunella', '123', '', '', '', '', 222),
(2023126325, 'NSANGA GAHIGANA Nysse Gandhi', '123', '', '', '', '', 222),
(2023126326, 'UMUTONI  Christella', '123', '', '', '', '', 222),
(2023126327, 'UMUBYEYI  Elegance', '123', '', '', '', '', 222),
(2023126328, 'UWERA  Francoise', '123', '', '', '', '', 222),
(2023126329, 'MUHONGERWA  Nadia', '123', '', '', '', '', 222),
(2023126330, 'SHEMA  Muvunyi', '123', '', '', '', '', 222),
(2023126331, 'TUMUSIME Aniella Vanessa', '123', '', '', '', '', 222),
(2023126332, 'UMUHIRE  Prince', '123', '', '', '', '', 222),
(2023126333, 'SHIMIRWA  Querine', '123', '', '', '', '', 222),
(2023126334, 'UWASE Gasana Bianca', '123', '', '', '', '', 222),
(2023126335, 'GISUBIZO  Kessy', '123', '', '', '', '', 222),
(2023126336, 'GISUBIZO RICKY NICOLE', '123', '', '', '', '', 222),
(2023126337, 'INEZA Umuhoza Emeline', '123', '', '', '', '', 222),
(2023126338, 'Muteteri  Olive', '123', '', '', '', '', 222),
(2023126339, 'MUTONIWASE  Bienveillance', '123', '', '', '', '', 222),
(2023126340, 'MUGISHA  Samuel', '123', '', '', '', '', 222),
(2023126341, 'DUKUNDANE  Germaine', '123', '', '', '', '', 222),
(2023126342, 'UWIKUNDA  Solange', '123', '', '', '', '', 222),
(2023126343, 'NSENGIMANA Uwayo Gentille', '123', '', '', '', '', 222),
(2023126344, 'MUNEZA  Didier', '123', '', '', '', '', 222),
(2023126345, 'NIYOGISUBIZO UWASE Chalon', '123', '', '', '', '', 222),
(2023126346, 'MUSABYIMANA  Joseph', '123', '', '', '', '', 222),
(2023126347, 'UWASE  Michelline', '123', '', '', '', '', 222),
(2023126348, 'MUTESA  Willy', '123', '', '', '', '', 222),
(2023126349, 'MWUNGERI  Dieudonne', '123', '', '', '', '', 222),
(2023126350, 'UWERA Marie Goretti', '123', '', '', '', '', 222),
(2023126351, 'NIYONSENGA  Pascal', '123', '', '', '', '', 222),
(2023126352, 'MBANZA  Josue', '123', '', '', '', '', 222),
(2023126353, 'NSHUTI  Manase', '123', '', '', '', '', 222),
(2023126354, 'NDAYISABYE  Arstide', '123', '', '', '', '', 222),
(2023126355, 'NSHUTI  Prince', '123', '', '', '', '', 222),
(2023126356, 'NTWARI  Yvan', '123', '', '', '', '', 222),
(2023126357, 'BUGINGO  Gilbert', '123', '', '', '', '', 222),
(2023126358, 'RUDASINGWA RUGERO Leo', '123', '', '', '', '', 222),
(2023126359, 'ZARIZO Fikiri Nicolas', '123', '', '', '', '', 222),
(2023126360, 'TURAHIRWA  Jean d\'amour', '123', '', '', '', '', 222),
(2023126361, 'NIYOMUKIZA  Pascal', '123', '', '', '', '', 222),
(2023126362, 'MANIRAKIZA  Olivier', '123', '', '', '', '', 222),
(2023126363, 'MBARAGA Bonheur Bertin', '123', '', '', '', '', 222),
(2023126364, 'NIYOMUKIZA  Naome', '123', '', '', '', '', 222),
(2023126365, 'INGABIRE  Kevine', '123', '', '', '', '', 222),
(2023126366, 'UWITONZE  Naomie', '123', '', '', '', '', 222),
(2023126367, 'IRANZI  Providence', '123', '', '', '', '', 222),
(2023126368, 'NTWARI Mugabo Christian', '123', '', '', '', '', 222),
(2023126369, 'UWERA  Jeannette', '123', '', '', '', '', 222),
(2023126370, 'HABINEZA Jean Jean Baptiste', '123', '', '', '', '', 222),
(2023126371, 'NIYOMUKIZA  Eddy', '123', '', '', '', '', 222),
(2023126372, 'IRANZI  Bonheur', '123', '', '', '', '', 222),
(2023126373, 'NIRINGIYIMANA  Vedaste', '123', '', '', '', '', 222),
(2023126374, 'NIYOMUGABO  Noel', '123', '', '', '', '', 222),
(2023126375, 'SHEMA  Kelly', '123', '', '', '', '', 222),
(2023126376, 'MUCYO  Valentin', '123', '', '', '', '', 222),
(2023126377, 'MUGISHA  Yvan', '123', '', '', '', '', 222),
(2023126378, 'MUSORE  Frank', '123', '', '', '', '', 222),
(2023126379, 'KIMENYI  Regis', '123', '', '', '', '', 222),
(2023126380, 'NIYOGUSHIMWA  Prince', '123', '', '', '', '', 222),
(2023126381, 'KAYIRANGA  Theogene', '123', '', '', '', '', 222),
(2023126382, 'NIYONZIMA  Emmanuel', '123', '', '', '', '', 222),
(2023126383, 'HATANGIMANA  Jean Claude', '123', '', '', '', '', 222),
(2023126384, 'NKIKO  Jean Claude', '123', '', '', '', '', 222),
(2023126385, 'RWAGASANA  Isaie', '123', '', '', '', '', 222),
(2023126386, 'UWAYO  Samuel', '123', '', '', '', '', 222),
(2023126387, 'SHEMA  David', '123', '', '', '', '', 222),
(2023126388, 'Ndayishimiye Aime Bruce', '123', '', '', '', '', 111),
(2023126389, 'Ngabonziza  Aime', '123', '', '', '', '', 111),
(2023126390, 'Manzi Deco Arsene', '123', '', '', '', '', 111),
(2023126391, 'Iranzi Fiacre Bonheur', '123', '', '', '', '', 111),
(2023126392, 'Ndizeye  Claude', '123', '', '', '', '', 111),
(2023126393, 'Mugisha  Divin', '123', '', '', '', '', 111),
(2023126394, 'Dufitimana  Eric', '123', '', '', '', '', 111),
(2023126395, 'Dushimimana Louis Victoire', '123', '', '', '', '', 111),
(2023126396, 'Eliya Celestin Francis', '123', '', '', '', '', 111),
(2023126397, 'Manzi Butera Eloi', '123', '', '', '', '', 111),
(2023126398, 'Shema  Eric', '123', '', '', '', '', 111),
(2023126399, 'Niyogisubizo  Joseph', '123', '', '', '', '', 111),
(2023126400, 'Kagame  Junior', '123', '', '', '', '', 111),
(2023126401, 'Muberwa  Achille', '123', '', '', '', '', 111),
(2023126402, 'Muragijimana  Rongine', '123', '', '', '', '', 111),
(2023126403, 'Mutaganzwa  Bright', '123', '', '', '', '', 111),
(2023126404, 'Ntaganzwa  Prince', '123', '', '', '', '', 111),
(2023126405, 'Ndicunguye Dieu Merci Jesus', '123', '', '', '', '', 111),
(2023126406, 'Niyonkuru Celse Kenny', '123', '', '', '', '', 111),
(2023126407, 'Musoni  Patrick', '123', '', '', '', '', 111),
(2023126408, 'Mugisha  Prince', '123', '', '', '', '', 111),
(2023126409, 'Rurangwa  Allan', '123', '', '', '', '', 111),
(2023126410, 'Nkurunziza  Samuel', '123', '', '', '', '', 111),
(2023126411, 'Umuhumuza  Boaz', '123', '', '', '', '', 111),
(2023126412, 'Abayisenga  Asterie', '123', '', '', '', '', 111),
(2023126413, 'Mujawuwera  Adeline', '123', '', '', '', '', 111),
(2023126414, 'Agatesi Fillette Sonia', '123', '', '', '', '', 111),
(2023126415, 'Ufitinema  Agnes', '123', '', '', '', '', 111),
(2023126416, 'Irafasha Keza Alliah', '123', '', '', '', '', 111),
(2023126417, 'Igiraneza  Amina', '123', '', '', '', '', 111),
(2023126418, 'Uwineza  Devotha', '123', '', '', '', '', 111),
(2023126419, 'Divine F4 Ingabire ', '123', '', '', '', '', 111),
(2023126420, 'Dusenayo  Phedine', '123', '', '', '', '', 111),
(2023126421, 'Uwamuruta  Evas', '123', '', '', '', '', 111),
(2023126422, 'Umukundwa  Josine', '123', '', '', '', '', 111),
(2023126423, 'Tumukunde  Kevine', '123', '', '', '', '', 111),
(2023126424, 'Ishimwe  Lucky', '123', '', '', '', '', 111),
(2023126425, 'Mahoro  Esther', '123', '', '', '', '', 111),
(2023126426, 'Mugeni  Belyse', '123', '', '', '', '', 111),
(2023126427, 'Mukeshimana  Honorine', '123', '', '', '', '', 111),
(2023126428, 'Ibyikora  Sifa', '123', '', '', '', '', 111),
(2023126429, 'Ingabire  Solaya', '123', '', '', '', '', 111),
(2023126430, 'Uwimana  Adrienne', '123', '', '', '', '', 111),
(2023126431, 'Niyonshuti Keza Vanessa', '123', '', '', '', '', 111),
(2023126432, 'Yezakuzwe  Lucie', '123', '', '', '', '', 111),
(2023126433, 'Mukeshimana  Adeline', '123', '', '', '', '', 111),
(2023126434, 'Uwase  Alice', '123', '', '', '', '', 111),
(2023126435, 'Mumararungu  Ange', '123', '', '', '', '', 111),
(2023126436, 'Mbabazi  Clemence', '123', '', '', '', '', 111),
(2023126437, 'Umurangwa  Deborah', '123', '', '', '', '', 111),
(2023126438, 'Akingeneye Teta Adelphine', '123', '', '', '', '', 111),
(2023126439, 'Ntakirwanyimana  Emerance', '123', '', '', '', '', 111),
(2023126440, 'Iranezereza  Evelyne', '123', '', '', '', '', 111),
(2023126441, 'Uwimana  Fanny', '123', '', '', '', '', 111),
(2023126442, 'Cyuzuzo  Hope', '123', '', '', '', '', 111),
(2023126443, 'Ineza Teta Ornella', '123', '', '', '', '', 111),
(2023126444, 'Kamikazi  Deborah', '123', '', '', '', '', 111),
(2023126445, 'Umutoni Kanyana Niquita', '123', '', '', '', '', 111),
(2023126446, 'Nshuti  Kevine', '123', '', '', '', '', 111),
(2023126447, 'Uwineza  Media', '123', '', '', '', '', 111),
(2023126448, 'Umuhoza  Pacifique', '123', '', '', '', '', 111),
(2023126449, 'Nikuze  Clarisse', '123', '', '', '', '', 111),
(2023126450, 'Mutesi  Ruth', '123', '', '', '', '', 111),
(2023126451, 'Umutesi  Shallon', '123', '', '', '', '', 111),
(2023126452, 'Uwase  Sandrine', '123', '', '', '', '', 111),
(2023126453, 'Uwiringiyimana  Aimee', '123', '', '', '', '', 111),
(2023126454, 'Cyurinyana  Anysie', '123', '', '', '', '', 111),
(2023126455, 'Umubyeyi  Denyse', '123', '', '', '', '', 111),
(2023126456, 'Ingabire  Divine', '123', '', '', '', '', 111),
(2023126457, 'Uwimanimpaye  Elisabeth', '123', '', '', '', '', 111),
(2023126458, 'Izabayo  Phiona', '123', '', '', '', '', 111),
(2023126459, 'Iradukunda Mahoro Sandra', '123', '', '', '', '', 111),
(2023126460, 'Nirere  Joy', '123', '', '', '', '', 111),
(2023126461, 'Bihoyiki  Judith', '123', '', '', '', '', 111),
(2023126462, 'Bisengimana  Kevine', '123', '', '', '', '', 111),
(2023126463, 'Mukandayisenga  Francoise', '123', '', '', '', '', 111),
(2023126464, 'Mutoniwase  Yvette', '123', '', '', '', '', 111),
(2023126465, 'Mutoni  Peninah', '123', '', '', '', '', 111),
(2023126466, 'Mukeshimana  Placidie', '123', '', '', '', '', 111),
(2023126467, 'Nasabato  Sandra', '123', '', '', '', '', 111),
(2023126468, 'Umutesiwase  Sandrine', '123', '', '', '', '', 111),
(2023126470, 'Ihimbazwe  Sonia', '123', '', '', '', '', 111),
(2023126471, 'Umutoniwase  Annick', '123', '', '', '', '', 111),
(2023126472, 'Uwase  Pamela', '123', '', '', '', '', 111),
(2023126473, 'Ishimwe  David', '123', '', '', '', '', 111),
(2023126474, 'Byiringiro  Frank', '123', '', '', '', '', 111),
(2023126475, 'Shingiro  Gad', '123', '', '', '', '', 111),
(2023126476, 'Gasana Ineza Shukuru Gabriel', '123', '', '', '', '', 111),
(2023126477, 'Muhwezi  George', '123', '', '', '', '', 111),
(2023126478, 'Byiringiro  Heritier', '123', '', '', '', '', 111),
(2023126479, 'Imanishimwe Dominique Xavio', '123', '', '', '', '', 111),
(2023126480, 'Iteriteka Don Grey', '123', '', '', '', '', 111),
(2023126481, 'junior Gabiro Jabo', '123', '', '', '', '', 111),
(2023126482, 'Tuyishimire Ingabire Jean Bernard', '123', '', '', '', '', 111),
(2023126483, 'IRAKOZE  Joseph', '123', '', '', '', '', 111),
(2023126484, 'BYIRINGIRO  Justin', '123', '', '', '', '', 111),
(2023126485, 'Habineza  Kevin', '123', '', '', '', '', 111),
(2023126486, 'Mbabazi Shyaka Bertin', '123', '', '', '', '', 111),
(2023126487, 'Rutareka Kumbusho Moses', '123', '', '', '', '', 111),
(2023126488, 'Mutea Julius Junior', '123', '', '', '', '', 111),
(2023126489, 'Muvunyi  Arnold', '123', '', '', '', '', 111),
(2023126490, 'Ndayishimye  Evode', '123', '', '', '', '', 111),
(2023126491, 'Ntihebuwayo  Nehemie', '123', '', '', '', '', 111),
(2023126492, 'Niyongira  Ismael', '123', '', '', '', '', 111),
(2023126493, 'Pesha  Geofrey', '123', '', '', '', '', 111),
(2023126494, 'Niyonteze  Potien', '123', '', '', '', '', 111),
(2023126495, 'Mugisha  Tito', '123', '', '', '', '', 111),
(2023126496, 'Turayishimye  yves', '123', '', '', '', '', 111),
(2023126497, 'Uwiragiye  Alice', '123', '', '', '', '', 111),
(2023126498, 'Umutesi  Alphonsine', '123', '', '', '', '', 111),
(2023126499, 'Nishemezwe Daniella Erlande Ange', '123', '', '', '', '', 111),
(2023126500, 'UWINEZA  Antoinette', '123', '', '', '', '', 111),
(2023126501, 'Abayisenga  Belyse', '123', '', '', '', '', 111),
(2023126502, 'NIYOMUGENGA  Charlotte', '123', '', '', '', '', 111),
(2023126503, 'Ubwizabwimana  Darlene', '123', '', '', '', '', 111),
(2023126504, 'Isezerano  Esther', '123', '', '', '', '', 111),
(2023126505, 'Niyogisubizo  Fille', '123', '', '', '', '', 111),
(2023126506, 'Tumukunde  Gisele', '123', '', '', '', '', 111),
(2023126507, 'Iradukunda  Khadidja', '123', '', '', '', '', 111),
(2023126508, 'Akankunda  Jacky', '123', '', '', '', '', 111),
(2023126509, 'Niyomukiza  Jeniffer', '123', '', '', '', '', 111),
(2023126510, 'Iradukunda  Kevine', '123', '', '', '', '', 111),
(2023126511, 'Umutoni  Latifa', '123', '', '', '', '', 111),
(2023126512, 'Uwase  Magnifique', '123', '', '', '', '', 111),
(2023126513, 'Mukandakebuka  Assumpta', '123', '', '', '', '', 111),
(2023126514, 'Janviere  Mutoni', '123', '', '', '', '', 111),
(2023126515, 'Natukunda Challon Rolanda', '123', '', '', '', '', 111),
(2023126516, 'Petience  Uwase', '123', '', '', '', '', 111),
(2023126517, 'Uwase  Zawadi', '123', '', '', '', '', 111);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `VoteId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `CandidateId` int(11) NOT NULL,
  `PositionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`CandidateId`) USING BTREE,
  ADD KEY `PositionId` (`PositionId`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`positionId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`VoteId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `CandidateId` (`CandidateId`),
  ADD KEY `PositionId` (`PositionId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `CandidateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `positionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `VoteId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `candidate_ibfk_1` FOREIGN KEY (`PositionId`) REFERENCES `positions` (`positionId`);

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`),
  ADD CONSTRAINT `votes_ibfk_2` FOREIGN KEY (`CandidateId`) REFERENCES `candidate` (`CandidateId`),
  ADD CONSTRAINT `votes_ibfk_3` FOREIGN KEY (`PositionId`) REFERENCES `positions` (`positionId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
