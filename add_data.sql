-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 01:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodb_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_data`
--

CREATE TABLE `add_data` (
  `gene_symbol` varchar(50) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `phenotype` varchar(200) NOT NULL,
  `mim_no` varchar(200) NOT NULL,
  `pubmed_id` varchar(200) NOT NULL,
  `inheritance` varchar(1000) NOT NULL,
  `clinical_synopsis` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_data`
--

INSERT INTO `add_data` (`gene_symbol`, `location`, `phenotype`, `mim_no`, `pubmed_id`, `inheritance`, `clinical_synopsis`) VALUES
('PCOS1', '19p13.2', 'Polycystic ovary syndrome 1', '184700', '16091490', 'AD', 'Growth\r\n- Obesity\r\nHair\r\n- Hirsutism\r\nGU\r\n- Oligomenorrhea\r\n- Amenorrhea\r\n- Enlarged polycystic ovaries\r\nEndocrine\r\n- No virilization\r\nMisc\r\n- Response to bilateral wedge resection of the ovaries\r\n- Increased frequency of early baldness or excessive hairiness in male first-degree relatives\r\nLab\r\n- Normal 24-hr urinary ketosteroids\r\n- Elevated dehydroepiandrosteronesulfate\r\n- Increased 5-alpha-reductase activity in the liver and skin\r\n- Elevated androstanedione and/or testosterone and luteinizing hormone\r\n- Low estradiol and follicle-stimulating hormone levels\r\n- Ovarian histology shows hyperplasia of theca cells in atretic follicles, a paucity of primordial and developing follicles, and stromal hyperplasia\r\nInheritance\r\n- Autosomal dominant\r\n- probably heterogeneous\r\n'),
('SHBG', '17p13.1', 'SEX HORMONE-BINDING GLOBULIN', '182205', '31525346', '-', 'A reduction in plasma sex hormone-binding globulin (SHBG), a transport carrier that binds estrogen and androgens and regulates their biological activities, is often used as an indicator of hyperandrogenism in women with PCOS. Low serum SHBG levels are considered a biomarker of abnormal metabolism and are related to insulin resistance (IR), compensatory hyperinsulinemia and abnormalities in glucose and lipid metabolism in PCOS patients. SHBG is also associated with the long-term prognosis of PCOS.'),
('CYP17A1', '10q24.32', '17,20-lyase deficiency, isolated', '202110', '29372682 ', 'AR', 'GU\r\n- Ambiguous genitalia\r\n- Primary amenorrhea\r\n- Male pseudohermaphroditism\r\nThorax\r\n- Gynecomastia\r\nEndo\r\n- Adrenogenital syndrome\r\nMetabolic\r\n- Hypertension\r\n- Hypokalemic alkalosis\r\nLab\r\n- 17-alpha-hydroxylase deficiency\r\n- ACTH increased\r\n- FSH increased\r\nInheritance\r\n- Autosomal recessive'),
('CYP19A1', '15q21.2', 'Aromatase deficiency,Aromatase excess syndrome', '107910', '26897397', 'AD', 'Thorax\r\n- Gynecomastia\r\nInheritance\r\n- Male-limited autosomal dominant vs. autosomal recessive or X-linked'),
('FST', '5q11.2 ', 'FOLLISTATIN', '136470', '29673370 ', '-', 'Acute kidney injury; Furosemide stress test; Renal replacement therapy.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
