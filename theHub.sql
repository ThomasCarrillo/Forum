-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 08, 2019 at 09:39 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `the hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(128) NOT NULL,
  `mail` varchar(256) NOT NULL,
  `password` varchar(256) DEFAULT NULL,
  `dateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `mail`, `password`, `dateCreation`) VALUES
(19, 'Phoebe', 'phoebe.spy@spymail.com', '$2y$10$z1IZHbvd70UztzPDetY5wOzArSjjNX5QaVVqu5ysM65h7LvX2qY.i', '0000-00-00 00:00:00'),
(20, 'dylan', 'blasquezdylan0@gmail.com', '$2y$10$iVu8DiUAa1suy8NyxdGIneHV7KoNYtlncpjlN.g.Q1Di4si9R33WS', '0000-00-00 00:00:00'),
(21, 'Kelia', 'kelia.23@lairmail.az', '$2y$10$60nR1dpMJVVck/O/6MDOQeSLdfoUPgP9GmmYCTFToUrVwk1HOYtBS', '0000-00-00 00:00:00'),
(22, 'D.LAN', 'D.LAN@local.ln', '$2y$10$gER4J.XA0DmIskVM6fgHjuGo7wQLhACtMsH9xgqBDfouRbXjH2mr2', '0000-00-00 00:00:00'),
(23, 'Wylfeon', 'wylfeon@BlackK.az', '$2y$10$Bgkk2k9D9MoBxLsVOIZqV.bdvvpG/3vbVZPJ2RA6pB8uE0OPs9x7K', '0000-00-00 00:00:00'),
(24, 'Kiiara', 'kiiaragold@BlackK.az', '$2y$10$ruoceDR1cvhdB1oiCWXeX.Kgk8KaXGLdt2.XIp0KTdLkjfr4i02SK', '0000-00-00 00:00:00'),
(25, 'Aragul', 'aragul.devil@demail.ev', '$2y$10$UE1dyE2z3jssrMqCTuW5e.aAWLElHGYqgzZgLjwbFV7webQS.q8Fe', '0000-00-00 00:00:00'),
(26, 'Facelia', 'facelia.doodle@mailmail.com', '$2y$10$9ird22OGGdDlCtv/LmWAhuMQKjtEPW4czOalJEpqSEsv0GfGErr6u', '0000-00-00 00:00:00'),
(29, 'Nutthead', 'Nutt.Head@horrormail.com', '$2y$10$srrXPrS26WvFBLG/nWc6deaNMdasMT6lvPQQfMs8XRxdC./Qz9DtC', '0000-00-00 00:00:00'),
(30, 'Sha-Hella', 'sha.hella@firebro.fr', '$2y$10$leNzi7L82t1ZGPCf8gKLHuHxE695qqs3DkpQ8ZzNTMDI9aohL.3SS', '2018-12-28 14:31:09'),
(31, 'jambon', 'jambon@courgettemail.com', '$2y$10$HbuWUpee4csvwmMzP6lKIuZzJ3a7oLHiaoCfZK6sfUpp5Yeg8B5He', '2018-12-28 17:30:39'),
(32, 'Choup-choup', 'mignon@choupmail.froufrou', '$2y$10$MVbylnOm7YgxApAyClL5BeFHOZnkSFLOizF7Qe.HeErCwIAD5mZhy', '2018-12-30 15:47:40'),
(33, 'courgette', 'courgetteàfond@gmail.fr', '$2y$10$g1AA8cEGcmWZGBPoAqzuG.zS2Qjun2thmcRjaOIXuJ.w81Wu/NdNq', '2018-12-30 17:04:33'),
(34, 'jean', 'e96c16e1', '$2y$10$ro79Y5p1K9GdhFvYRquDYOZtpV5Sp9aAVtbOkg2mC44Y4I8N8fux6', '2018-12-30 17:09:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
