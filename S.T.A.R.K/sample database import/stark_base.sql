-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2017 at 01:21 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stark_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `dist` int(11) NOT NULL,
  `names` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `dist`, `names`) VALUES
(1, 1, '\r\nAdambakkam'),
(2, 1, '\r\nAdyar'),
(3, 1, '\r\nAlandur'),
(4, 1, '\r\nAlwarpet'),
(5, 1, '\r\nAlwarthirunagar'),
(6, 1, '\r\nAminjikarai'),
(7, 1, '\r\nAnna Nagar'),
(8, 1, '\r\nAnnanur'),
(9, 1, '\r\nArumbakkam'),
(10, 1, '\r\nAshok Nagar'),
(11, 1, '\r\nAvadi'),
(12, 1, '\r\nAyanavaram'),
(13, 1, '\r\nBesant Nagar'),
(14, 1, '\r\nBasin Bridge'),
(15, 1, '\r\nChepauk'),
(16, 1, '\r\nChetput'),
(17, 1, '\r\nChintadripet'),
(18, 1, '\r\nChitlapakkam'),
(19, 1, '\r\nChoolai'),
(20, 1, '\r\nChoolaimedu'),
(21, 1, '\r\nChrompet'),
(22, 1, '\r\nEgmore'),
(23, 1, '\r\nEkkaduthangal'),
(24, 1, '\r\nEnnore'),
(25, 1, '\r\nForeshore Estate'),
(26, 1, '\r\nFort St. George'),
(27, 1, '\r\nGeorge Town'),
(28, 1, '\r\nGopalapuram'),
(29, 1, '\r\nGovernment Estate'),
(30, 1, '\r\nGuindy'),
(31, 1, '\r\nIIT Madras'),
(32, 1, '\r\nInjambakkam'),
(33, 1, '\r\nICF'),
(34, 1, '\r\nIyyapanthangal'),
(35, 1, '\r\nJafferkhanpet'),
(36, 1, '\r\nKarapakkam'),
(37, 1, '\r\nKattivakkam'),
(38, 1, '\r\nKazhipattur'),
(39, 1, '\r\nK.K. Nagar'),
(40, 1, '\r\nKeelkattalai'),
(41, 1, '\r\nKelambakkam'),
(42, 1, '\r\nKilpauk'),
(43, 1, '\r\nKodambakkam'),
(44, 1, '\r\nKodungaiyur'),
(45, 1, '\r\nKolathur'),
(46, 1, '\r\nKorattur'),
(47, 1, '\r\nKorukkupet'),
(48, 1, '\r\nKottivakkam'),
(49, 1, '\r\nKotturpuram'),
(50, 1, '\r\nKottur'),
(51, 1, '\r\nKovalam'),
(52, 1, '\r\nKovilambakkam'),
(53, 1, '\r\nKoyambedu'),
(54, 1, '\r\nKundrathur'),
(55, 1, '\r\nMadhavaram'),
(56, 1, '\r\nMadhavaram Milk Colony'),
(57, 1, '\r\nMadipakkam'),
(58, 1, '\r\nMadambakkam'),
(59, 1, '\r\nMaduravoyal'),
(60, 1, '\r\nManali'),
(61, 1, '\r\nManali New Town'),
(62, 1, '\r\nManapakkam'),
(63, 1, '\r\nMandaveli'),
(64, 1, '\r\nMangadu'),
(65, 1, '\r\nMannady'),
(66, 1, '\r\nMathur'),
(67, 1, '\r\nMedavakkam'),
(68, 1, '\r\nMeenambakkam'),
(69, 1, '\r\nMGR Nagar'),
(70, 1, '\r\nMinjur'),
(71, 1, '\r\nMogappair'),
(72, 1, '\r\nMKB Nagar'),
(73, 1, '\r\nMount Road'),
(74, 1, '\r\nMoolakadai'),
(75, 1, '\r\nMoulivakkam'),
(76, 1, '\r\nMugalivakkam'),
(77, 1, '\r\nMudichur'),
(78, 1, '\r\nMylapore'),
(79, 1, '\r\nNandanam'),
(80, 1, '\r\nNanganallur'),
(81, 1, '\r\nNavalur'),
(82, 1, '\r\nNeelankarai'),
(83, 1, '\r\nNemilichery'),
(84, 1, '\r\nNesapakkam'),
(85, 1, '\r\nNolambur'),
(86, 1, '\r\nNoombal'),
(87, 1, '\r\nNungambakkam'),
(88, 1, '\r\nOtteri'),
(89, 1, '\r\nPadi'),
(90, 1, '\r\nPakkam'),
(91, 1, '\r\nPalavakkam'),
(92, 1, '\r\nPallavaram'),
(93, 1, '\r\nPallikaranai'),
(94, 1, '\r\nPammal'),
(95, 1, '\r\nPark Town'),
(96, 1, '\r\nParrys Corner'),
(97, 1, '\r\nPattabiram'),
(98, 1, '\r\nPattaravakkam'),
(99, 1, '\r\nPazhavanthangal'),
(100, 1, '\r\nPeerkankaranai'),
(101, 1, '\r\nPerambur'),
(102, 1, '\r\nPeravallur'),
(103, 1, '\r\nPerumbakkam'),
(104, 1, '\r\nPerungalathur'),
(105, 1, '\r\nPerungudi'),
(106, 1, '\r\nPozhichalur'),
(107, 1, '\r\nPoonamallee'),
(108, 1, '\r\nPorur'),
(109, 1, '\r\nPudupet'),
(110, 1, '\r\nPurasaiwalkam'),
(111, 1, '\r\nPuthagaram'),
(112, 1, '\r\nPuzhal'),
(113, 1, '\r\nPuzhuthivakkam'),
(114, 1, '\r\nRaj Bhavan'),
(115, 1, '\r\nRamavaram'),
(116, 1, '\r\nRed Hills'),
(117, 1, '\r\nRoyapettah'),
(118, 1, '\r\nRoyapuram'),
(119, 1, '\r\nSaidapet'),
(120, 1, '\r\nSaligramam'),
(121, 1, '\r\nSanthome'),
(122, 1, '\r\nSembakkam'),
(123, 1, '\r\nSelaiyur'),
(124, 1, '\r\nShenoy Nagar'),
(125, 1, '\r\nSholavaram'),
(126, 1, '\r\nSholinganallur'),
(127, 1, '\r\nSithalapakkam'),
(128, 1, '\r\nSowcarpet'),
(129, 1, '\r\nSt.Thomas Mount'),
(130, 1, '\r\nTambaram'),
(131, 1, '\r\nTeynampet'),
(132, 1, '\r\nTharamani'),
(133, 1, '\r\nT. Nagar'),
(134, 1, '\r\nThirumangalam'),
(135, 1, '\r\nThirumullaivoyal'),
(136, 1, '\r\nThiruneermalai'),
(137, 1, '\r\nThiruninravur'),
(138, 1, '\r\nThiruvanmiyur'),
(139, 1, '\r\nTiruverkadu'),
(140, 1, '\r\nThiruvotriyur'),
(141, 1, '\r\nTirusulam'),
(142, 1, '\r\nTiruvallikeni'),
(143, 1, '\r\nTiruvallur'),
(144, 1, '\r\nTondiarpet'),
(145, 1, '\r\nUnited India Colony'),
(146, 1, '\r\nVandalur'),
(147, 1, '\r\nVadapalani'),
(148, 1, '\r\nValasaravakkam'),
(149, 1, '\r\nVallalar Nagar'),
(150, 1, '\r\nVanagaram'),
(151, 1, '\r\nVelachery'),
(152, 1, '\r\nVillivakkam'),
(153, 1, '\r\nVirugambakkam'),
(154, 1, '\r\nVyasarpadi'),
(155, 1, '\r\nWashermanpet'),
(156, 1, '\r\nWest Mambalam');

-- --------------------------------------------------------

--
-- Table structure for table `cmt`
--

CREATE TABLE `cmt` (
  `id` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `usr` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cmt`
--

INSERT INTO `cmt` (`id`, `comment`, `usr`) VALUES
(2, 'My Internet connection has been disconnected. ', 'PJD'),
(3, 'I have very poor Internet speed. ', 'PJD'),
(4, 'My Internet speed is too inconsistent. ', 'PJD'),
(5, 'My entire area has lost Internet connection. ', 'PJD'),
(6, 'My Internet speed is far lower than what I paid for. ', 'PJD'),
(13, 'i have a slow internet connection in my home', 'SNP'),
(14, 'i have a very slow internet connection', 'PJD'),
(15, 'My connection seems to be blurry', 'SNP'),
(16, 'Connection in my area is choppy', 'SNP'),
(17, 'Web page not loading ', 'PJD'),
(18, 'There is nothing on this site \r\nplease update the information \r\nThank You', 'PJD'),
(19, 'UI not support on the PC\r\nWebsite link is not unique\r\nThank You', 'PJD'),
(20, 'Net is not up to expectations', 'PJD'),
(21, 'Very bad', 'PJD'),
(22, 'Why site is not visible \r\nStill the old model HTML', 'PJD'),
(23, 'facing really a Bad network', 'PJD'),
(24, 'i am facing a sever call drop problem', 'PJD'),
(25, 'While calling to jio from other network the call has been conflicted to other person \r\n', 'PJD'),
(26, 'the signal is not good in my area', 'PJD'),
(27, 'What the hell is the site for \nNothing is there', 'PJD'),
(28, 'Shits on this site \r\nDevelop something', 'PJD'),
(29, 'whats there on this site', 'PJD'),
(30, 'While using the data for downloading some times it may not respond and the speed decreases ', 'PJD'),
(31, 'Service decreases as the amount increases', 'PJD'),
(32, 'Dealy in responce it needs to be more effective', 'SNP'),
(33, 'While speaking phone the voices are not clear and unwanted noise occuring in it', 'PJD'),
(34, 'in internet there will be slow connection', 'PJD'),
(35, 'Network is slow.', 'SNP'),
(36, 'when low bandwidth in need the speed connection ', 'PJD'),
(37, 'In a moving train the signal is not freaquently available ', 'PJD'),
(38, 'i needed offer for internet connection', 'PJD'),
(39, 'In rural areas the bandwidth freaquency is not available', 'PJD'),
(40, 'internet is net will be communicate through internet', 'PJD'),
(41, 'Range is not enough in the town area', 'PJD'),
(42, 'Network is like hell slow', 'PJD'),
(43, 'Internet is very Slow', 'MD'),
(44, 'I have recharged for 3G but iam getting 2G network.', 'SNP'),
(45, 'network speed reducing while downloading', 'SNP'),
(46, 'The rate of datapack is keeps on increasing  simultaneously year by year ', 'PJD'),
(47, 'download speed was very low', 'SNP'),
(48, 'Very bad network.', 'SNP'),
(49, 'Data Connection Traffic Plan Is Enough', 'SNP'),
(50, 'i needed offer for downloading more of no gb', 'SNP'),
(51, 'The cost of internet is not in a affordable price for poor people it should be given free', 'PJD'),
(53, 'Network is not working properly on my area', 'SNP'),
(55, 'while watching video rederning speed is low', 'SNP'),
(56, 'During browsing many ad are like hell irrutating', 'SNP'),
(57, 'The adult penetrating site in internet should be blocked because it causes a insecure situation to womens ', 'PJD'),
(58, 'Very bad band width', 'SNP'),
(59, 'Very bad frequency', 'SNP'),
(60, 'night time free downloading is needed', 'SNP'),
(61, 'Each call take 1.5 rs per second', 'SNP'),
(62, 'Very bad processorrr', 'SNP'),
(63, 'To access internet the wavelength strength should be strong.due to the waves surrounded us and all over the world it affects the humanbeings by radiation', 'PJD'),
(64, 'Very bad processing system', 'SNP'),
(65, 'Internet makes the youngesters to addict to it and distract them from studies', 'PJD'),
(66, 'The wavelength of the internet also affects the other creatures like birds etc', 'PJD'),
(67, 'Through internet there are many fradulant activities happening by hacking bank accounts ', 'PJD'),
(68, 'Getting network problem in rural area', 'MD'),
(69, 'Receiving lot of add calls', 'MD'),
(70, 'Call getting disconnected', 'MD'),
(71, 'Your network is very slow', 'MD'),
(72, 'Your network is crash', 'MD'),
(73, 'Speed varies from place to place', 'MD'),
(74, 'High rates low mb', 'MD'),
(76, 'Getting announcements\n even during calls in emergency situation', 'MD'),
(77, 'No network inside the house', 'MD'),
(78, 'No loan system', 'MD'),
(79, 'High roaming charges', 'MD'),
(80, 'Only business minded', 'MD'),
(81, 'No good offers are available with my number', 'MD');

-- --------------------------------------------------------

--
-- Table structure for table `comment_process`
--

CREATE TABLE `comment_process` (
  `id` int(11) NOT NULL,
  `pattern` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `network` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `numbers` int(11) NOT NULL,
  `complaint` text NOT NULL,
  `status` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `dates` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `network`, `user`, `numbers`, `complaint`, `status`, `t_id`, `dates`) VALUES
(5, 5, 7, 9, 'No network inside the house', 0, 0, '16/03/2017'),
(6, 5, 7, 9, 'Shits on this site \r\nDevelop something', 0, 0, '16/03/2017'),
(7, 9, 6, 17, 'While calling to jio from other network the call has been conflicted to other person \r\n', 0, 0, '16/03/2017'),
(10, 6, 6, 12, 'while watching video rederning speed is low', 0, 0, '16/03/2017'),
(11, 1, 8, 8, 'i have a slow internet connection in my home', 0, 0, '16/03/2017'),
(12, 1, 8, 8, 'Internet is very Slow', 0, 0, '16/03/2017'),
(13, 6, 8, 10, 'Very bad frequency', 0, 0, '16/03/2017'),
(14, 6, 6, 12, 'Dealy in responce it needs to be more effective', 0, 0, '16/03/2017'),
(15, 1, 8, 8, 'while watching video rederning speed is low', 0, 0, '16/03/2017'),
(17, 6, 8, 10, 'No network inside the house', 0, 0, '16/03/2017'),
(18, 5, 7, 9, 'Getting network problem in rural area', 0, 0, '16/03/2017'),
(19, 9, 8, 14, 'i am facing a sever call drop problem', 0, 0, '16/03/2017'),
(20, 6, 6, 12, 'Getting announcements\n even during calls in emergency situation', 0, 0, '16/03/2017'),
(21, 6, 6, 12, 'High roaming charges', 0, 0, '16/03/2017'),
(22, 9, 6, 17, 'Very bad band width', 0, 0, '16/03/2017'),
(23, 9, 6, 17, 'No loan system', 0, 0, '16/03/2017'),
(24, 5, 7, 9, 'The rate of datapack is keeps on increasing  simultaneously year by year ', 0, 0, '16/03/2017'),
(25, 4, 6, 16, 'Dealy in responce it needs to be more effective', 1, 1, '16/03/2017'),
(26, 9, 6, 17, 'My connection seems to be blurry', 0, 0, '16/03/2017'),
(27, 4, 8, 15, 'Very bad network.', 1, 1, '16/03/2017'),
(28, 6, 6, 12, 'Your network is very slow', 0, 0, '16/03/2017'),
(29, 5, 7, 9, 'Very bad', 0, 0, '16/03/2017'),
(30, 9, 6, 17, 'During browsing many ad are like hell irrutating', 0, 0, '16/03/2017'),
(31, 9, 6, 17, 'network speed reducing while downloading', 0, 0, '16/03/2017'),
(32, 5, 7, 9, 'While speaking phone the voices are not clear and unwanted noise occuring in it', 0, 0, '16/03/2017'),
(34, 4, 7, 7, 'i have a very slow internet connection', 1, 1, '16/03/2017'),
(35, 1, 8, 8, 'Very bad frequency', 0, 0, '16/03/2017'),
(36, 4, 8, 15, 'internet is net will be communicate through internet', 1, 2, '16/03/2017'),
(37, 5, 7, 9, 'My entire area has lost Internet connection. ', 0, 0, '16/03/2017'),
(38, 4, 6, 16, 'Internet makes the youngesters to addict to it and distract them from studies', 1, 2, '16/03/2017'),
(39, 9, 6, 17, 'No loan system', 0, 0, '16/03/2017'),
(40, 5, 7, 9, 'Service decreases as the amount increases', 0, 0, '16/03/2017'),
(41, 9, 6, 17, 'My Internet speed is far lower than what I paid for. ', 0, 0, '16/03/2017'),
(42, 1, 8, 8, 'Internet makes the youngesters to addict to it and distract them from studies', 0, 0, '16/03/2017'),
(43, 4, 6, 13, 'No loan system', 1, 2, '16/03/2017'),
(44, 4, 8, 15, 'i am facing a sever call drop problem', 1, 2, '16/03/2017'),
(45, 9, 6, 17, 'the signal is not good in my area', 0, 0, '16/03/2017'),
(46, 4, 6, 16, 'High rates low mb', 1, 2, '16/03/2017'),
(47, 9, 8, 14, 'Very bad band width', 0, 0, '16/03/2017'),
(48, 4, 7, 7, 'Each call take 1.5 rs per second', 1, 1, '16/03/2017'),
(49, 1, 8, 8, 'My entire area has lost Internet connection. ', 0, 0, '16/03/2017'),
(50, 4, 6, 16, 'network speed reducing while downloading', 0, 0, '16/03/2017'),
(51, 6, 6, 12, 'Service decreases as the amount increases', 0, 0, '16/03/2017'),
(52, 1, 8, 8, 'Why site is not visible \r\nStill the old model HTML', 0, 0, '16/03/2017'),
(53, 6, 6, 12, 'Internet makes the youngesters to addict to it and distract them from studies', 0, 0, '16/03/2017'),
(54, 4, 7, 7, 'High rates low mb', 0, 0, '16/03/2017'),
(55, 9, 8, 14, 'Only business minded', 0, 0, '16/03/2017'),
(56, 9, 6, 17, 'In rural areas the bandwidth freaquency is not available', 0, 0, '16/03/2017'),
(57, 4, 6, 16, 'Only business minded', 0, 0, '16/03/2017'),
(58, 4, 7, 7, 'internet is net will be communicate through internet', 0, 0, '16/03/2017'),
(59, 1, 8, 8, 'I have recharged for 3G but iam getting 2G network.', 0, 0, '16/03/2017'),
(60, 4, 6, 13, 'Network is slow.', 0, 0, '16/03/2017'),
(61, 4, 7, 7, 'High roaming charges', 0, 0, '16/03/2017'),
(62, 6, 8, 10, 'night time free downloading is needed', 0, 0, '16/03/2017'),
(63, 6, 6, 12, 'Through internet there are many fradulant activities happening by hacking bank accounts ', 0, 0, '16/03/2017'),
(64, 4, 6, 16, 'Network is not working properly on my area', 0, 0, '16/03/2017'),
(65, 6, 8, 10, 'night time free downloading is needed', 0, 0, '16/03/2017'),
(66, 1, 8, 8, 'Very bad band width', 0, 0, '16/03/2017'),
(67, 5, 6, 11, 'Very bad frequency', 0, 0, '16/03/2017'),
(68, 6, 8, 10, 'Very bad processorrr', 0, 0, '16/03/2017'),
(69, 6, 8, 10, 'Net is not up to expectations', 0, 0, '16/03/2017'),
(70, 4, 8, 15, 'I have recharged for 3G but iam getting 2G network.', 0, 0, '16/03/2017'),
(71, 4, 8, 15, 'i needed offer for internet connection', 0, 0, '16/03/2017'),
(72, 4, 6, 16, 'The wavelength of the internet also affects the other creatures like birds etc', 0, 0, '16/03/2017'),
(73, 4, 8, 15, 'I have very poor Internet speed. ', 0, 0, '16/03/2017'),
(74, 6, 6, 12, 'Internet is very Slow', 0, 0, '16/03/2017'),
(75, 1, 8, 8, 'To access internet the wavelength strength should be strong.due to the waves surrounded us and all over the world it affects the humanbeings by radiation', 0, 0, '16/03/2017'),
(76, 5, 7, 9, 'in internet there will be slow connection', 0, 0, '16/03/2017'),
(77, 5, 6, 11, 'Very bad frequency', 0, 0, '16/03/2017'),
(78, 5, 6, 11, 'High rates low mb', 0, 0, '16/03/2017'),
(79, 9, 6, 17, 'whats there on this site', 0, 0, '16/03/2017'),
(80, 6, 6, 12, 'Dealy in responce it needs to be more effective', 0, 0, '16/03/2017'),
(81, 4, 6, 16, 'Shits on this site \r\nDevelop something', 0, 0, '16/03/2017'),
(82, 9, 8, 14, 'What the hell is the site for \nNothing is there', 0, 0, '16/03/2017'),
(83, 5, 7, 9, 'I have recharged for 3G but iam getting 2G network.', 0, 0, '16/03/2017'),
(84, 9, 6, 17, 'Receiving lot of add calls', 0, 0, '16/03/2017'),
(85, 1, 8, 8, 'Only business minded', 0, 0, '16/03/2017'),
(86, 4, 6, 13, 'What the hell is the site for \nNothing is there', 0, 0, '16/03/2017'),
(87, 4, 7, 7, 'Why site is not visible \r\nStill the old model HTML', 0, 0, '16/03/2017'),
(88, 9, 6, 17, 'In rural areas the bandwidth freaquency is not available', 0, 0, '16/03/2017'),
(89, 9, 6, 17, 'i have a slow internet connection in my home', 0, 0, '16/03/2017'),
(90, 1, 8, 8, 'Range is not enough in the town area', 0, 0, '16/03/2017'),
(91, 9, 8, 14, 'the signal is not good in my area', 0, 0, '16/03/2017'),
(92, 5, 7, 9, 'Net is not up to expectations', 0, 0, '16/03/2017'),
(93, 1, 8, 8, 'Speed varies from place to place', 0, 0, '16/03/2017'),
(94, 1, 8, 8, 'Range is not enough in the town area', 0, 0, '16/03/2017'),
(95, 6, 6, 12, 'Network is slow.', 0, 0, '16/03/2017'),
(96, 9, 6, 17, 'In rural areas the bandwidth freaquency is not available', 0, 0, '16/03/2017'),
(97, 4, 7, 7, 'I have recharged for 3G but iam getting 2G network.', 0, 0, '16/03/2017'),
(98, 5, 6, 11, 'Service decreases as the amount increases', 0, 0, '16/03/2017'),
(99, 4, 6, 16, 'The rate of datapack is keeps on increasing  simultaneously year by year ', 0, 0, '16/03/2017'),
(100, 5, 6, 11, 'Dealy in responce it needs to be more effective', 0, 0, '16/03/2017'),
(101, 5, 7, 9, 'download speed was very low', 0, 0, '16/03/2017'),
(102, 5, 7, 9, 'in internet there will be slow connection', 0, 0, '16/03/2017'),
(103, 6, 6, 12, 'facing really a Bad network', 0, 0, '16/03/2017'),
(104, 4, 7, 7, 'network speed reducing while downloading', 0, 0, '16/03/2017'),
(105, 4, 8, 15, 'Only business minded', 0, 0, '17/03/2017'),
(106, 6, 8, 10, 'My Internet speed is too inconsistent. ', 0, 0, '17/03/2017'),
(107, 6, 8, 10, 'In rural areas the bandwidth freaquency is not available', 0, 0, '17/03/2017'),
(108, 5, 7, 9, 'Network is slow.', 0, 0, '17/03/2017'),
(109, 4, 8, 15, 'High roaming charges', 0, 0, '17/03/2017'),
(110, 6, 8, 10, 'network speed reducing while downloading', 0, 0, '17/03/2017'),
(111, 4, 6, 16, 'During browsing many ad are like hell irrutating', 0, 0, '17/03/2017'),
(112, 9, 8, 14, 'night time free downloading is needed', 0, 0, '17/03/2017'),
(113, 5, 7, 9, 'The rate of datapack is keeps on increasing  simultaneously year by year ', 0, 0, '17/03/2017'),
(114, 9, 6, 17, 'Very bad', 0, 0, '17/03/2017'),
(115, 9, 6, 17, 'facing really a Bad network', 0, 0, '17/03/2017'),
(116, 5, 6, 11, 'i am facing a sever call drop problem', 0, 0, '17/03/2017'),
(117, 1, 8, 8, 'Your network is crash', 0, 0, '17/03/2017'),
(118, 4, 7, 7, 'Web page not loading ', 0, 0, '17/03/2017'),
(119, 5, 7, 9, 'whats there on this site', 0, 0, '17/03/2017'),
(120, 6, 6, 12, 'My connection seems to be blurry', 0, 0, '17/03/2017'),
(121, 6, 6, 12, 'While using the data for downloading some times it may not respond and the speed decreases ', 0, 0, '17/03/2017'),
(122, 9, 6, 17, 'Very bad', 0, 0, '17/03/2017'),
(123, 4, 7, 7, 'While calling to jio from other network the call has been conflicted to other person \r\n', 0, 0, '17/03/2017'),
(124, 4, 6, 13, 'Receiving lot of add calls', 0, 0, '17/03/2017'),
(125, 4, 6, 16, 'Web page not loading ', 0, 0, '17/03/2017'),
(126, 4, 8, 15, 'i needed offer for downloading more of no gb', 0, 0, '17/03/2017'),
(127, 9, 8, 14, 'whats there on this site', 0, 0, '17/03/2017'),
(128, 4, 6, 13, 'Dealy in responce it needs to be more effective', 0, 0, '17/03/2017'),
(129, 5, 6, 11, 'While speaking phone the voices are not clear and unwanted noise occuring in it', 0, 0, '17/03/2017'),
(130, 4, 7, 7, 'UI not support on the PC\r\nWebsite link is not unique\r\nThank You', 0, 0, '17/03/2017'),
(131, 9, 6, 17, 'the signal is not good in my area', 0, 0, '17/03/2017'),
(132, 4, 6, 16, 'Your network is very slow', 0, 0, '17/03/2017'),
(133, 4, 7, 7, 'Network is like hell slow', 0, 0, '17/03/2017'),
(134, 6, 8, 10, 'While calling to jio from other network the call has been conflicted to other person \r\n', 0, 0, '17/03/2017'),
(135, 5, 6, 11, 'Why site is not visible \r\nStill the old model HTML', 0, 0, '17/03/2017'),
(136, 4, 6, 16, 'Connection in my area is choppy', 0, 0, '17/03/2017'),
(137, 4, 8, 15, 'Getting network problem in rural area', 0, 0, '17/03/2017'),
(138, 4, 6, 13, 'Very bad band width', 0, 0, '17/03/2017'),
(139, 9, 8, 14, 'download speed was very low', 0, 0, '17/03/2017'),
(140, 4, 7, 7, 'in internet there will be slow connection', 0, 0, '17/03/2017'),
(141, 9, 6, 17, 'Service decreases as the amount increases', 0, 0, '17/03/2017'),
(142, 6, 6, 12, 'Range is not enough in the town area', 0, 0, '17/03/2017'),
(143, 9, 8, 14, 'Very bad processing system', 0, 0, '17/03/2017'),
(144, 4, 8, 15, 'My entire area has lost Internet connection. ', 0, 0, '17/03/2017'),
(145, 9, 8, 14, 'Internet makes the youngesters to addict to it and distract them from studies', 0, 0, '17/03/2017'),
(146, 4, 7, 7, 'While calling to jio from other network the call has been conflicted to other person \r\n', 0, 0, '17/03/2017'),
(147, 6, 6, 12, 'The cost of internet is not in a affordable price for poor people it should be given free', 0, 0, '17/03/2017'),
(148, 1, 8, 8, 'whats there on this site', 0, 0, '17/03/2017'),
(149, 5, 7, 9, 'whats there on this site', 0, 0, '17/03/2017'),
(150, 6, 6, 12, 'While using the data for downloading some times it may not respond and the speed decreases ', 0, 0, '17/03/2017'),
(151, 4, 6, 13, 'Network is slow.', 0, 0, '17/03/2017'),
(152, 4, 6, 16, 'when low bandwidth in need the speed connection ', 0, 0, '17/03/2017'),
(153, 5, 6, 11, 'network speed reducing while downloading', 0, 0, '17/03/2017'),
(154, 6, 8, 10, 'Very bad', 0, 0, '17/03/2017'),
(155, 6, 8, 10, 'Receiving lot of add calls', 0, 0, '17/03/2017'),
(156, 9, 8, 14, 'I have recharged for 3G but iam getting 2G network.', 0, 0, '17/03/2017'),
(157, 4, 6, 16, 'No network inside the house', 0, 0, '17/03/2017'),
(158, 6, 8, 10, 'Very bad processorrr', 0, 0, '17/03/2017'),
(159, 6, 6, 12, 'i have a very slow internet connection', 0, 0, '17/03/2017'),
(160, 1, 8, 8, 'Web page not loading ', 0, 0, '17/03/2017'),
(161, 6, 8, 10, 'What the hell is the site for \nNothing is there', 0, 0, '17/03/2017'),
(162, 9, 6, 17, 'Call getting disconnected', 0, 0, '17/03/2017'),
(163, 6, 8, 10, 'Your network is very slow', 0, 0, '17/03/2017'),
(164, 6, 8, 10, 'night time free downloading is needed', 0, 0, '17/03/2017'),
(165, 9, 8, 14, 'Range is not enough in the town area', 0, 0, '17/03/2017'),
(166, 6, 8, 10, 'Web page not loading ', 0, 0, '17/03/2017'),
(167, 1, 8, 8, 'Dealy in responce it needs to be more effective', 0, 0, '17/03/2017'),
(168, 6, 8, 10, 'Range is not enough in the town area', 0, 0, '17/03/2017'),
(169, 5, 7, 9, 'facing really a Bad network', 0, 0, '17/03/2017'),
(170, 4, 7, 7, 'Internet is very Slow', 0, 0, '17/03/2017'),
(171, 4, 7, 7, 'Receiving lot of add calls', 0, 0, '17/03/2017'),
(172, 4, 6, 16, 'internet is net will be communicate through internet', 0, 0, '17/03/2017'),
(173, 9, 6, 17, 'Connection in my area is choppy', 0, 0, '17/03/2017'),
(174, 9, 8, 14, 'i have a very slow internet connection', 0, 0, '17/03/2017'),
(175, 9, 8, 14, 'My Internet connection has been disconnected. ', 0, 0, '17/03/2017'),
(176, 4, 6, 16, 'The cost of internet is not in a affordable price for poor people it should be given free', 0, 0, '17/03/2017'),
(177, 1, 8, 8, 'Your network is very slow', 0, 0, '17/03/2017'),
(178, 6, 8, 10, 'Very bad network.', 0, 0, '17/03/2017'),
(179, 9, 8, 14, 'Very bad frequency', 0, 0, '17/03/2017'),
(180, 9, 8, 14, 'internet is net will be communicate through internet', 0, 0, '17/03/2017'),
(181, 4, 8, 15, 'The wavelength of the internet also affects the other creatures like birds etc', 0, 0, '17/03/2017'),
(182, 4, 6, 13, 'Each call take 1.5 rs per second', 0, 0, '17/03/2017'),
(183, 5, 7, 9, 'internet is net will be communicate through internet', 0, 0, '17/03/2017'),
(184, 4, 7, 7, 'Connection in my area is choppy', 0, 0, '17/03/2017'),
(185, 9, 8, 14, 'Very bad frequency', 0, 0, '17/03/2017'),
(186, 4, 6, 16, 'Call getting disconnected', 0, 0, '17/03/2017'),
(187, 5, 6, 11, 'The wavelength of the internet also affects the other creatures like birds etc', 0, 0, '17/03/2017'),
(188, 4, 7, 7, 'when low bandwidth in need the speed connection ', 0, 0, '17/03/2017'),
(189, 6, 8, 10, 'My Internet speed is far lower than what I paid for. ', 0, 0, '17/03/2017'),
(190, 4, 6, 16, 'My Internet connection has been disconnected. ', 0, 0, '17/03/2017'),
(191, 9, 6, 17, 'i needed offer for downloading more of no gb', 0, 0, '17/03/2017'),
(192, 4, 6, 13, 'Range is not enough in the town area', 0, 0, '17/03/2017'),
(193, 9, 6, 17, 'There is nothing on this site \r\nplease update the information \r\nThank You', 0, 0, '17/03/2017'),
(194, 4, 7, 7, 'My connection seems to be blurry', 0, 0, '17/03/2017'),
(195, 5, 7, 9, 'The rate of datapack is keeps on increasing  simultaneously year by year ', 0, 0, '17/03/2017'),
(196, 5, 7, 9, 'Range is not enough in the town area', 0, 0, '17/03/2017'),
(197, 9, 8, 14, 'Very bad processorrr', 0, 0, '17/03/2017'),
(198, 6, 8, 10, 'Network is not working properly on my area', 0, 0, '17/03/2017'),
(199, 4, 8, 15, 'Only business minded', 0, 0, '17/03/2017'),
(200, 1, 8, 8, 'Very bad frequency', 0, 0, '17/03/2017'),
(201, 6, 8, 10, 'Very bad network.', 0, 0, '17/03/2017'),
(202, 5, 6, 11, 'Your network is very slow', 0, 0, '17/03/2017'),
(203, 5, 7, 9, 'Getting network problem in rural area', 0, 0, '17/03/2017'),
(204, 4, 6, 16, 'when low bandwidth in need the speed connection ', 0, 0, '17/03/2017'),
(205, 6, 6, 12, 'i have call dropping problems', 0, 0, '17/03/2017'),
(206, 9, 6, 17, 'i have bad internet connection in my area', 0, 0, '17/03/2017'),
(207, 4, 6, 13, 'i have a bad internet connection', 0, 0, '17/03/2017'),
(208, 9, 6, 17, 'i have a bad internet connection in my area', 0, 0, '17/03/2017'),
(209, 4, 6, 13, 'i have a very poor internet connection', 0, 0, '06/04/2017');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_pattern`
--

CREATE TABLE `complaint_pattern` (
  `pattern` varchar(50) NOT NULL,
  `msg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_pattern`
--

INSERT INTO `complaint_pattern` (`pattern`, `msg`) VALUES
('2,4', 1),
('4,9,8', 1),
('4,9,31', 1),
('9,30', 1),
('1,9,19', 1),
('29,9,8', 1),
('34,35,29', 1),
('29,9,31', 1),
('29,13', 1),
('2,29,31', 1),
('37,25', 1),
('36,9,25', 1),
('25,9,10', 1),
('26,25', 1),
('11,4', 2),
('12,4', 2),
('20,4', 2),
('1,33', 2),
('12,1', 2),
('2,21,1', 2),
('1,28', 2),
('26,29', 2),
('29,28', 2),
('11,29', 2),
('12,29', 2),
('25,28', 2),
('12,25', 2),
('20,25', 2),
('15,4', 3),
('15,1', 3),
('15,25', 3),
('5,9,14', 7),
('9,14,6', 7),
('7,5', 7),
('5,44', 6),
('2,5,27', 6),
('5,9,44', 6),
('9,45,5', 6),
('5,38', 5),
('5,39', 5),
('5,40', 5),
('5,16', 5),
('5,17', 5),
('5,18', 5),
('5,41', 5),
('5,42', 5),
('5,43', 5),
('3,7,1', 4),
('12,7,1', 4),
('20,7,1', 4),
('11,7,1', 4),
('2,7,1', 4),
('7,22', 4),
('21,7,1', 4),
('9,14,5', 7);

-- --------------------------------------------------------

--
-- Table structure for table `display_message`
--

CREATE TABLE `display_message` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `display_message`
--

INSERT INTO `display_message` (`id`, `message`) VALUES
(1, '<ul>\n<li>Please ensure that your sim card has been inserted properly</li>\n<li>Please try re-inserting your sim card in its slot or try another slot if available</li>\n<li>Try inserting another sim card in the slot problem raised</li>\n<li>Ensure that you have paid your bill (if sim card is postpaid)</li>\n</ul>\n<b>External</b>\n<ul>\n<li>Please Ensure that you are available with a network antenna within 100 meters of range</li>\n<li>Check whether any other sim card of your area have the same problem</li>\n<li>•	If it is a new sim card, please ensure that you have verified your sim</li>\n</ul>'),
(2, '<ul>\r\n<li>Please Ensure that you are available with a network antenna within 100 meters of range</li>\r\n<li>Try inserting your sim card in another phone and check</li>\r\n<li>Ensure that your sim card is not damaged. Check whether gold circuit behind the sim is safe</li>\r\n<li>If signal not available indoor try using our network outdoor</li>\r\n<li>Try selecting another signal receptor in your settings</li>\r\n</ul>'),
(3, '<ul>\r\n<li>Ensure that no other radio frequency emitting device is near your phone</li>\r\n<li>check your mobile speakers condition by using the sim from another phone</li>\r\n<li>clean the speaker head of your phone</li>\r\n<li>Try your phone in outdoor</li>\r\n<li>Calling on Travel may have signal disturbance</li>\r\n</ul>'),
(4, '<b>If Modem/Wi-Fi/Dongle</b>\r\n<ul>\r\n<li>Clean the sockets/usb port of its usage</li>\r\n<li>Check for any cable damage</li>\r\n<li>ensure the problem by connecting it to another device</li>\r\n<li>Check your device for damages</li>\r\n<li>Check plug hole socket for support</li>\r\n<li>Ensure dust free for a good usage of the devices</li>\r\n</ul>\r\n<b>If sim card</b>\r\n<ul>\r\n<li>Please Ensure that you are available with a network antenna within 100 meters of range</li>\r\n<li>Try using a higher ground</li>\r\n<li>Please use the company requested internet setting</li>\r\n<li>Check the data balance by dialing *111#</li>\r\n<li>Ask for internet setting by dialing *423#</li>\r\n</ul>'),
(5, '<ul>\r\n<li>Government rule is to pay back the user if call dropping occurs</li>\r\n<li>Ensure that the caller and the receiver have good signal connection</li>\r\n<li>Please Ensure that you are available with a network antenna within 100 meters of range</li>\r\n<li>Ensure that call has not been hanged up intently</li>\r\n</ul>'),
(6, '<ul>\r\n<li>Please ensure that you have not black listed the person</li>\r\n<li>Please ensure that you have not been black listed</li>\r\n<li>Ensure the sim card is being enabled</li>\r\n<li>Caller may have disturbed network</li>\r\n<li>Check for sim card damages</li>\r\n</ul>'),
(7, '<ul>\r\n<li>Check your balance by dialing *123#</li>\r\n<li>Check for signal strength</li>\r\n<li>Please Ensure that you are available with a network antenna within 100 meters of range</li>\r\n<li>Ensure that your sim card have been verified</li>\r\n<li>Check for sim card damages</li>\r\n<li>Re-insert the sim card in the slot available</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `names` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `names`) VALUES
(1, 'Chennai');

-- --------------------------------------------------------

--
-- Table structure for table `dummy_comment`
--

CREATE TABLE `dummy_comment` (
  `id` int(11) NOT NULL,
  `cmt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummy_comment`
--

INSERT INTO `dummy_comment` (`id`, `cmt`) VALUES
(1, 'My Internet connection has been disconnected. '),
(2, 'I have very poor Internet speed. '),
(3, 'My Internet speed is too inconsistent. '),
(4, 'My entire area has lost Internet connection. '),
(5, 'My Internet speed is far lower than what I paid for. '),
(6, 'i have a slow internet connection in my home'),
(7, 'i have a very slow internet connection'),
(8, 'My connection seems to be blurry'),
(9, 'Connection in my area is choppy'),
(10, 'Web page not loading '),
(11, 'There is nothing on this site \r\nplease update the information \r\nThank You'),
(12, 'UI not support on the PC\r\nWebsite link is not unique\r\nThank You'),
(13, 'Net is not up to expectations'),
(14, 'Very bad'),
(15, 'Why site is not visible \r\nStill the old model HTML'),
(16, 'facing really a Bad network'),
(17, 'i am facing a sever call drop problem'),
(18, 'While calling to jio from other network the call has been conflicted to other person \r\n'),
(19, 'the signal is not good in my area'),
(20, 'What the hell is the site for \nNothing is there'),
(21, 'Shits on this site \r\nDevelop something'),
(22, 'whats there on this site'),
(23, 'While using the data for downloading some times it may not respond and the speed decreases '),
(24, 'Service decreases as the amount increases'),
(25, 'Dealy in responce it needs to be more effective'),
(26, 'While speaking phone the voices are not clear and unwanted noise occuring in it'),
(27, 'in internet there will be slow connection'),
(28, 'Network is slow.'),
(29, 'when low bandwidth in need the speed connection '),
(30, 'In a moving train the signal is not freaquently available '),
(31, 'i needed offer for internet connection'),
(32, 'In rural areas the bandwidth freaquency is not available'),
(33, 'internet is net will be communicate through internet'),
(34, 'Range is not enough in the town area'),
(35, 'Network is like hell slow'),
(36, 'Internet is very Slow'),
(37, 'I have recharged for 3G but iam getting 2G network.'),
(38, 'network speed reducing while downloading'),
(39, 'The rate of datapack is keeps on increasing  simultaneously year by year '),
(40, 'download speed was very low'),
(41, 'Very bad network.'),
(42, 'Data Connection Traffic Plan Is Enough'),
(43, 'i needed offer for downloading more of no gb'),
(44, 'The cost of internet is not in a affordable price for poor people it should be given free'),
(45, 'Network is not working properly on my area'),
(46, 'while watching video rederning speed is low'),
(47, 'During browsing many ad are like hell irrutating'),
(48, 'The adult penetrating site in internet should be blocked because it causes a insecure situation to womens '),
(49, 'Very bad band width'),
(50, 'Very bad frequency'),
(51, 'night time free downloading is needed'),
(52, 'Each call take 1.5 rs per second'),
(53, 'Very bad processorrr'),
(54, 'To access internet the wavelength strength should be strong.due to the waves surrounded us and all over the world it affects the humanbeings by radiation'),
(55, 'Very bad processing system'),
(56, 'Internet makes the youngesters to addict to it and distract them from studies'),
(57, 'The wavelength of the internet also affects the other creatures like birds etc'),
(58, 'Through internet there are many fradulant activities happening by hacking bank accounts '),
(59, 'Getting network problem in rural area'),
(60, 'Receiving lot of add calls'),
(61, 'Call getting disconnected'),
(62, 'Your network is very slow'),
(63, 'Your network is crash'),
(64, 'Speed varies from place to place'),
(65, 'High rates low mb'),
(66, 'Getting announcements\n even during calls in emergency situation'),
(67, 'No network inside the house'),
(68, 'No loan system'),
(69, 'High roaming charges'),
(70, 'Only business minded'),
(71, 'No good offers are available with my number');

-- --------------------------------------------------------

--
-- Table structure for table `networks`
--

CREATE TABLE `networks` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `name_a` varchar(50) NOT NULL,
  `pwd` text NOT NULL,
  `des` text NOT NULL,
  `numbers` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `networks`
--

INSERT INTO `networks` (`id`, `name`, `name_a`, `pwd`, `des`, `numbers`) VALUES
(4, 'Airtel', 'mail@airtel.com', '202cb962ac59075b964b07152d234b70', 'We are the best among all the networks available in India. We are expanding the network all over India including forests and mountains', 9876543214),
(5, 'Idea', 'mail@idea.com', '202cb962ac59075b964b07152d234b70', 'The worlds best network that provide the best offers and feature.', 9876543210),
(6, 'Jio', 'mail@jio.com', '202cb962ac59075b964b07152d234b70', 'Best networks that came out of Reliance digital', 9876543211),
(7, 'Reliance', 'mail@reli.com', '202cb962ac59075b964b07152d234b70', 'The indian company that has power to provide good communication.', 9876543212),
(8, 'Vodafone', 'mail@voda.com', '202cb962ac59075b964b07152d234b70', 'We are high and the best', 9876543213),
(9, 'BSNL', 'mail@bsnl.com', '202cb962ac59075b964b07152d234b70', 'A network company by Government of India', 9876543215);

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `id` int(11) NOT NULL,
  `network` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`id`, `network`, `name`, `email`, `pwd`) VALUES
(1, 4, 'Edson', 'edson@airtel.com', '202cb962ac59075b964b07152d234b70'),
(2, 4, 'Anbu', 'anbu@airtel.com', '202cb962ac59075b964b07152d234b70'),
(3, 7, 'Balan', 'balan@reli.com', '202cb962ac59075b964b07152d234b70'),
(4, 6, 'sura', 'sura@jio.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `user_connection`
--

CREATE TABLE `user_connection` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `numbers` bigint(10) NOT NULL,
  `network` int(100) NOT NULL,
  `primary_num` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_connection`
--

INSERT INTO `user_connection` (`id`, `user`, `numbers`, `network`, `primary_num`) VALUES
(7, 7, 9789919954, 4, 1),
(8, 8, 9566241678, 1, 1),
(9, 7, 7894657220, 5, 0),
(10, 8, 8009006001, 6, 0),
(11, 6, 8190016566, 5, 0),
(12, 6, 8825594439, 6, 0),
(13, 6, 9876543210, 4, 0),
(14, 8, 9786453120, 9, 0),
(15, 8, 9876543217, 4, 0),
(16, 6, 9840119798, 4, 0),
(17, 6, 9940423202, 9, 1),
(18, 6, 9585724329, 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` text NOT NULL,
  `dist` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `name`, `email`, `pwd`, `dist`, `area`) VALUES
(6, 'Madhan', 'madhan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1', '7'),
(7, 'Santhan', 'santhan@gmail.com', '202cb962ac59075b964b07152d234b70', '1', '130'),
(8, 'Philip', 'philip@gmail.com', '202cb962ac59075b964b07152d234b70', '1', '33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmt`
--
ALTER TABLE `cmt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_process`
--
ALTER TABLE `comment_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `display_message`
--
ALTER TABLE `display_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dummy_comment`
--
ALTER TABLE `dummy_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `networks`
--
ALTER TABLE `networks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`id`),
  ADD KEY `network` (`network`);

--
-- Indexes for table `user_connection`
--
ALTER TABLE `user_connection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
--
-- AUTO_INCREMENT for table `cmt`
--
ALTER TABLE `cmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `comment_process`
--
ALTER TABLE `comment_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;
--
-- AUTO_INCREMENT for table `display_message`
--
ALTER TABLE `display_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dummy_comment`
--
ALTER TABLE `dummy_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `networks`
--
ALTER TABLE `networks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `technician`
--
ALTER TABLE `technician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_connection`
--
ALTER TABLE `user_connection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `technician`
--
ALTER TABLE `technician`
  ADD CONSTRAINT `technician_ibfk_1` FOREIGN KEY (`network`) REFERENCES `networks` (`id`);

--
-- Constraints for table `user_connection`
--
ALTER TABLE `user_connection`
  ADD CONSTRAINT `user_connection_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user_details` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
