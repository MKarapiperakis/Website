-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 21 Ιουν 2021 στις 15:32:38
-- Έκδοση διακομιστή: 10.4.19-MariaDB
-- Έκδοση PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `new`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `question_repos`
--

CREATE TABLE `question_repos` (
  `quest` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `correct_ans` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ans1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ans2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `difficulty` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `question_repos`
--

INSERT INTO `question_repos` (`quest`, `type`, `correct_ans`, `ans1`, `ans2`, `difficulty`, `id`) VALUES
('Η formula 1 είναι πρωτάθλημα:', 'single', 'Μηχανοκίνητου Αθλητισμού', 'Ποδοσφαίρου	', 'τένις', 'easy', 5),
('Ο Jenson Button πόσα πρώτηθλήματα κέρδισε	', 'single', '1', '5', '3', 'easy', 6),
('Πόσα πρωταθλήματα έχουν πάρει οι Ayrton Senna και Alain Prost;', 'multiple', '3', '4', '10', 'hard', 7),
('Η ferrari κατέκτησε τον πρώτο της τίτλο το', 'single', '1961', '1970', '2005', 'hard', 8),
('Ο Michael Schumacher, ήταν οδηγός της Formula 1', 'single', 'Σωστό', 'Λάθος', 'Λάθος', 'easy', 9),
('Ο πρώτος αγώνας έγινε στην πίστα του Σίλβερστόουν, στην Μεγάλη Βρετανία στις', 'single', '15 Μαίου', '13 Μαίου', '3 Ιουνίου', 'hard', 10),
('Η Williams είναι βρετανική', 'single', 'Σωστό', 'Λάθος', 'Λάθος', 'easy', 11),
('Ο Juan Manul Fangio ήταν Νορβηγός', 'single', 'Λάθος', 'Σώστο', 'Σώστο', 'easy', 12),
('Η χρήση του δισκόφρενου έγινε για πρώτη φορά στον αγώνα του Λε Μαν από την', 'single', 'Jaguar', 'Mercedes', 'Ferrari', 'hard', 13),
('Πόσοι έλληνες έχουν αγωνιστεί στην F1', 'single', '0', '1', '2', 'easy', 14),
('Η Τουρκία έχει διοργανώσει Grand Prix	', 'single', 'Σωστό', 'Λάθος', 'Λάθος', 'easy', 15),
('Την δεκαετία του 70, ποίες δύο ομάδες μοιράζονταν τα πρωταθλήματα;', 'multiple', 'Ferrari', 'Lotus', 'Datsun', 'hard', 16),
('Τα ελάχιστα και μέγιστα κόστη ενός ειστητηρίου το 2008 ήταν', 'multiple', '300 δολάρια', '3000 δολάρια', '15 δραχμές', 'hard', 17),
('Ποιος οδηγός έχει τα περισσότερα πρωταθλήματα', 'single', 'michael schumacher', 'Κώστας Μήτρογλου', 'ayrton senna', 'easy', 18),
('Ποιες γνωστές μάρκες συμμετέχουν στη formula 1?', 'multiple	', 'Ferrari', 'Mercedes', 'lada', 'easy', 19),
('Το driver lineup της Mercedes για το 2021 αποτελείται από τους:', 'multiple', 'Lewis Hamilton	', 'Valtteri Bottas	', 'Nico Rosberg	', 'easy', 20),
('Το σχέδιο ενός ενιαίου πρωταθλήματος με κάποια κοινά χαρακτηριστικά ονομάστηκε:	', 'label', 'formula a	', 'Formula A', 'φόρμουλα Α', 'easy', 21),
('Η Φόρμουλα 1 είναι πρωτάθλημα αγώνων', 'label', 'αυτοκινήτων', 'αυτοκινήτου', 'Αυτοκινήτων', 'easy', 22),
('Ο Τάτσιο Νουβολάρι είναι Ιταλός.', 'single', 'Σωστό', 'Λάθος', 'Λάθος', 'hard', 23),
('Τη δεκαετία του ‘80 κυριαρχούν οι ΜακΛάρεν και	', 'label', 'Γουίλιαμς', 'Williams', 'williams', 'hard', 24),
('Το 1980 ξεσπά διαμάχη για τον έλεγχο των αγώνων Φόρμουλα 1, μεταξύ της FOCA και της Διεθνούς	', 'label', 'Ομοσπονδίας', 'ομοσπονδίας', 'ομοσπονδιας', 'hard', 25),
('Την ευθύνη της διοργανώσεως των αγώνων φέρει η Διεθνής Ομοσπονδία Αυτοκινήτου	', 'single', 'Σωστό', 'Λάθος', 'Λάθος', 'hard', 26),
('Ο πρώτος παγκόσμιος πρωταθλητής στην ιστορία ήταν ο', 'label', 'Giuseppe Farina	', 'Τζιουζεπε Φαρινα	', 'τζιουζεπε φαρινα	', 'hard', 27),
('Την δεκαετία του 60 πρωτοπόρησε η ομάδα της	', 'single', 'Lotus', 'Ferrari', 'Ford', 'hard', 28),
('Ποιά καινοτομία είχε το αυτοκίνητο της mclaren την δεκαετία του 80	', 'single', 'Carbon Monocoque', 'αεροτομές', 'ηλεκτρονικά βοηθήματα', 'hard', 29),
('Το 1976 στο Grand Prix Γερμανίας τραυματίστηκε σοβαρά ο	', 'single', 'Niki Lauda	', 'Mario Andretti', 'Jackie Stewart', 'hard', 31),
('Ποιες χρονίες κέρδισε η Williams πρωταθλήματα κατασκευαστών', 'multiple', '1993', '1996', '1999', 'easy', 43);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `quiz_stats`
--

CREATE TABLE `quiz_stats` (
  `time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `results` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `difficulty` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `temp_questions`
--

CREATE TABLE `temp_questions` (
  `quest` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `correct_ans` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ans1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ans2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `difficulty` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `temp_questions`
--

INSERT INTO `temp_questions` (`quest`, `type`, `correct_ans`, `ans1`, `ans2`, `difficulty`, `id`) VALUES
('Πόσα πρωταθλήματα έχουν πάρει οι Ayrton Senna και Alain Prost;', 'multiple', '3', '4', '10', 'hard', 2),
('Η ferrari κατέκτησε τον πρώτο της τίτλο το', 'single', '1961', '1970', '2005', 'hard', 3),
('Ποιος οδηγός έχει τα περισσότερα πρωταθλήματα', 'single', 'michael schumacher', 'Κώστας Μήτρογλου', 'ayrton senna', 'easy', 27),
('Ποιες γνωστές μάρκες συμμετέχουν στη formula 1?', 'multiple	', 'Ferrari', 'Mercedes', 'lada', 'easy', 28),
('Το driver lineup της Mercedes για το 2021 αποτελείται από τους:', 'multiple', 'Lewis Hamilton	', 'Valtteri Bottas	', 'Nico Rosberg	', 'easy', 29),
('Το σχέδιο ενός ενιαίου πρωταθλήματος με κάποια κοινά χαρακτηριστικά ονομάστηκε:	', 'label', 'formula a	', 'Formula A', 'φόρμουλα Α', 'easy', 30),
('Η Φόρμουλα 1 είναι πρωτάθλημα αγώνων', 'label', 'αυτοκινήτων', 'αυτοκινήτου', 'Αυτοκινήτων', 'easy', 31),
('Ο Τάτσιο Νουβολάρι είναι Ιταλός.', 'single', 'Σωστό', 'Λάθος', 'Λάθος', 'hard', 32),
('Τη δεκαετία του ‘80 κυριαρχούν οι ΜακΛάρεν και	', 'label', 'Γουίλιαμς', 'Williams', 'williams', 'hard', 33),
('Το 1980 ξεσπά διαμάχη για τον έλεγχο των αγώνων Φόρμουλα 1, μεταξύ της FOCA και της Διεθνούς	', 'label', 'Ομοσπονδίας', 'ομοσπονδίας', 'ομοσπονδιας', 'hard', 34),
('Την ευθύνη της διοργανώσεως των αγώνων φέρει η Διεθνής Ομοσπονδία Αυτοκινήτου	', 'single', 'Σωστό', 'Λάθος', 'Λάθος', 'hard', 35),
('Ο πρώτος παγκόσμιος πρωταθλητής στην ιστορία ήταν ο', 'label', 'Giuseppe Farina	', 'Τζιουζεπε Φαρινα	', 'τζιουζεπε φαρινα	', 'hard', 36),
('Την δεκαετία του 60 πρωτοπόρησε η ομάδα της	', 'single', 'Lotus', 'Ferrari', 'Ford', 'hard', 37),
('Ποιά καινοτομία είχε το αυτοκίνητο της mclaren την δεκαετία του 80	', 'single', 'Carbon Monocoque', 'αεροτομές', 'ηλεκτρονικά βοηθήματα', 'hard', 38);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `profpic` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`profpic`, `name`, `surname`, `email`, `password`, `dob`, `gender`, `username`, `role`) VALUES
('upload/default.png', 'Εμμανουήλ', 'Καραπιπεράκης', 'dit18075@go.uop.gr', 'admin', '2000-11-05', 'Άνδρας', 'dit18075', 'admin'),
('upload/default.png', 'Ιωάννης', 'Παπαβασιλόπουλος', 'dit18141@go.uop.gr', 'admin', '2000-03-12', 'Άνδρας', 'dit18141', 'admin'),
('upload/default.png', 'Ιωάννης', 'Παπαχρήστου', 'dit18146@go.uop.gr', 'admin', '2000-11-05', 'Άνδρας', 'dit18146', 'admin'),
('upload/Julia.jpg', 'Ιουλία', 'Αλεξανδράτου', 'Julia@gmail.com', '12345678', '1985-11-24', 'Γυναίκα', 'Julia', 'moderator'),
('upload/default.png', 'Νικόλαος', 'Τσελίκας', 'ntsel@xxx.gr', 'admin', '1976-02-14', 'Άνδρας', 'ntsel', 'super-admin');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `question_repos`
--
ALTER TABLE `question_repos`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `temp_questions`
--
ALTER TABLE `temp_questions`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `question_repos`
--
ALTER TABLE `question_repos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT για πίνακα `temp_questions`
--
ALTER TABLE `temp_questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
