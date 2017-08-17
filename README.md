# webbackend_ajax_php_mysql
managing your backend using ajax, mysql, php and contenteditable element.
change your data base password in config.php

database data:
CREATE DATABASE IF NOT EXISTS `mvctest` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mvctest`;

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `nickname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `postnom`, `prenom`) VALUES
(1, 'mahid', 'wambuyi', 'henrique'),
(2, 'kumwimba', 'kishiko', 'serge');


