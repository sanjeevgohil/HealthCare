-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 05:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `doctorname` varchar(100) NOT NULL,
  `info` varchar(10000) NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `doctorname`, `info`, `photo`) VALUES
(12, 'Dr. Vtasal', 'A heart attack (myocardial infarction or MI) is a serious medical emergency in which the supply of blood to the heart is suddenly blocked, usually by a blood clot. A heart attack is a medical emergency. Call 999 and ask for an ambulance if you suspect a heart attack.', 'n1.png'),
(13, 'Dr. Alpa', 'The term lung disease refers to many disorders affecting the lungs, such as asthma, COPD, infections like influenza, pneumonia and tuberculosis, lung cancer, and many other breathing problems. Some lung diseases can lead to respiratory failure', 'n2.png'),
(14, 'Dr.Ramesh Vaja', 'Most people infected with the virus will experience mild to moderate respiratory illness and recover without requiring special treatment. However, some will become seriously ill and require medical attention. Older people and those with underlying medical conditions like cardiovascular disease, diabetes, chronic respiratory disease, or cancer are more likely to develop serious illness. Anyone can get sick with COVID-19 and become seriously ill or die at any age.', 'n3.png');

-- --------------------------------------------------------

--
-- Table structure for table `bookapp`
--

CREATE TABLE `bookapp` (
  `id` int(11) NOT NULL,
  `doctorname` varchar(200) NOT NULL,
  `patientnm` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(300) NOT NULL,
  `mobile` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookapp`
--

INSERT INTO `bookapp` (`id`, `doctorname`, `patientnm`, `date`, `time`, `mobile`) VALUES
(16, 'Dr. Kirit Vora', 'Mukesh', '2022-08-31', '14:03', '9585745685'),
(19, 'Dr. Dhaval Somani', 'vatsal', '2022-08-31', '12:08', '7418523696'),
(20, 'Dr. Kirit Vora', 'Fiyaz', '2022-08-30', '12:11', '9632145212'),
(21, 'Dr. Dhaval Somani', 'keyur', '2022-08-24', '12:36', '958565666'),
(23, 'Dr. Meenu Shah', 'sanjeev', '2022-08-31', '11:55', '9874563215'),
(24, 'Dr. Meenu Shah', 'raj', '2022-08-31', '05:14', '9874563253'),
(25, 'Dr. Meenu Shah', 'Prit', '2022-08-29', '01:11', '9563636325'),
(26, 'Dr. Alapa Shah', 'mukesh', '2022-08-31', '08:31', '9574586583'),
(27, 'Dr. Meenu Shah', 'ramesh', '2022-08-31', '22:22', '9585745685');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(1, 'Ahemdabad'),
(2, 'Rajkot'),
(3, 'Surat'),
(6, 'Baroda'),
(8, 'Junagadh'),
(9, 'Gandhinagar'),
(10, 'Jamnagar'),
(11, 'Porbandar'),
(12, 'Surendranagar'),
(13, 'Vapi'),
(14, 'Valsad'),
(15, 'Veraval'),
(16, 'Amreli');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sign` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`id`, `name`, `sign`) VALUES
(4, 'Abdominal aortic aneurysm (AAA', 'In most cases, an AAA causes no noticeable symptoms. However, if it becomes large,          some people may develop a pain or a pulsating feeling in their abdomen (tummy) or persistent back pain.'),
(5, 'Alcohol-related liver disease ', 'Feeling sick, weight loss, loss of appetite , yellowing of the eyes and skin '),
(6, 'Asthma', 'Wheezing (a whistling sound when you breathe) ,shortness of breath, a tight chest – which may feel like a band is tightening around it.'),
(7, 'Anxiety', 'Generalized anxiety disorder (GAD) can affect you both physically and mentally.'),
(8, 'Bone Cancer', 'Bone pain is the most common symptom of bone cancer. Some people experience other symptoms as well. '),
(9, 'Binge eating ', 'You eat much faster than normal, you eat until you feel uncomfortably full, you eat a large amount of food when you are not hungry.'),
(10, 'Brain Tumors ', 'Severe ,persistent headaches, seizures (fits), persistent nausea, vomiting and drowsiness.'),
(11, 'Bladder cancer ', 'A need to urinate on a more frequent basis , sudden urges to urinate , a burning sensation when passing urine.'),
(12, 'Bulimia', 'Bingeing – overeating in a particular pattern,purging – trying to reduce the effect of binging by attempting to get calories out of your body,	focus on food – thinking about food all the time, even wh'),
(13, 'Bipolar Disorder', 'Feeling sad, hopeless or irritable most of the time , lacking energy , difficulty concentrating and remembering things, loss of interest in everyday activities.'),
(14, 'Chickenpox', 'The most commonly recognized chickenpox symptom is a spotty, blistering red rash that can cover the entire body.'),
(15, 'Chest Infections', 'A persistent cough, coughing up yellow or green phlegm (thick mucus), or coughing up blood, breathlessness or rapid and shallow breathing, wheezing, a high temperature (fever).'),
(16, 'Chronic kidney disease (CKD)', 'Weight loss and poor appetite, swollen ankles, feet or hands (due to water retention) , shortness of breath.'),
(17, 'Coma', 'The person\'s eyes will be closed and they\'ll appear to be unresponsive to their environment. They won\'t normally respond to sound or pain, or be able to communicate or move voluntarily.'),
(18, 'Coronavirus', 'Stay at home and avoid contact with other people if you have symptoms of a respiratory infection such as coronavirus and have a high temperature or do not feel well enough to go to work or carry out n'),
(19, 'Croup', 'A  bark-like cough, a hoarse or croaky voice, difficulty breathing, a harsh grating sound when breathing in, called stridor.'),
(20, 'Dehydration', 'Feeling thirsty and lightheaded, a dry mouth, tiredness, having dark coloured, strong-smelling urine.'),
(21, 'Dental abscess', 'an intense, throbbing pain in the affected tooth or gum that may come on suddenly and gets gradually worse, pain that spreads to your ear, jaw and neck on the same side as the affected tooth or gum, p'),
(22, 'Depression', 'Mild depression – it has some impact on daily life, moderate depression – it has a significant impact on your daily life.'),
(23, 'Epilepsy', 'Partial (or focal) seizures – where only a small part of the brain is affected , generalised seizures – where most or all of the brain is affected.'),
(24, 'Eye cancer', 'Shadows, flashes of light, or wiggly lines in your vision, blurred vision, a dark patch in your eye that\'s getting bigger, partial or total loss of vision, bulging of one eye.'),
(25, 'Flu', 'A high temperature (fever) of or above, tiredness and weakness, a headche , general aches and pains, a dry, chesty cough .'),
(26, 'Fibroids ', 'Heavy periods, painful periods, tummy (abdominal) pain, lower back pain, a frequent need to urinate.'),
(27, 'Gallstones', 'Persistent pain, jaundice, a fever.'),
(28, 'Hay fever', 'Sneezing, a runny nose, itchy eyes.'),
(29, 'HIV', 'Fever(raised temperature), sore throat, body rash.'),
(30, 'Leg cramps', 'leg cramp is an episode of sudden pain in the muscles of the leg caused by an involuntary contracting (shortening) of the leg muscle, Most leg cramps occur in the calf muscles and, less commonly, in t'),
(31, 'Liver cancer ', 'Unexplained weight loss, loss of appetite, feeling very full after eating, even if the meal was small, feeling sick and vomiting.'),
(32, 'Lupus', 'Chest pain, depression, dry eyes, memory loss, seizures (fits).'),
(33, 'Mumps', 'Joint pain, feeling sick, dry mouth, mild abdominal pain, feeling tired, loss of appetite.```');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `specialist` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `city` varchar(200) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL,
  `email` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `username`, `password`, `specialist`, `qualification`, `experience`, `mobile`, `city`, `photo`, `status`, `email`) VALUES
(4, 'sanjeev', 'sanju', '270702', 'Cardiologist', 'BHMS', '2', '9558536221', 'Ahemdabad', 'Snapchat-415493403.jpg', 'admin', ''),
(15, 'Dr. Dignesh R Vachhani', 'dr123', '12345', 'General Practitioner ', 'MBBS', '13', '9874563256', 'Junagadh', 'a1.png', 'user', 'dignesh@gmail.com'),
(16, 'Dr. Shreyas Gopalbhai Bhalodia', 'shreyas112', 'shreyas32', 'Ayurvedic', 'BAMS', '11', '9876541236', 'Junagadh', 'a2.png', 'user', 'shreyas@gmail.com'),
(18, 'Dr. Piyush Borkhatariya', 'piyush12', '9635656', 'Dermatologist', 'MD', '11', '6596985923', 'Junagadh', 'a4.png', 'user', 'piyush@gmail.com'),
(19, 'Dr. Siraj Vadhvaniya', 'siraj', 'siraj9696', 'General Practitioner ', 'MBBS,MD', '5', '9874569656', 'Rajkot', 'c1.png', 'user', 'siraj@gmail.com'),
(21, 'Dr. Radhika Karia', 'radhe', 'radhe123', 'Neurologist ', 'MS', '6', '9874636623', 'Rajkot', 'c4.png', 'user', 'radhika@gmail.com'),
(22, 'Dr. T. R Vithalani', 'tr123', 'tr6565', 'Anesthesiologist', 'MD', '15', '6985969696', 'Rajkot', 'c6.png', 'user', 'tr@gmail.com'),
(23, 'Dr. Prateek Joshi', 'prateek12', 'pratik123', 'orthopedic ', 'MD', '12', '9874569696', 'Ahemdabad', 'a.png', 'user', 'pratik@gmail.com'),
(24, 'Dr. Maulik Patwa', 'maulik123', 'maulikpatwa', 'Psychiatrist', 'MS', '13', '6898745123', 'Ahemdabad', 'b.png', 'user', 'maulikpt@gmail.com'),
(25, 'Dr. Viral Gajjar', 'viral112', 'viral@112', 'Surgeon', 'MS', '12', '9210230023', 'Ahemdabad', 'd.png', 'user', ''),
(26, 'Dr. Alapa Shah', 'alapa', '66532', 'Ophthalmologist', 'MDS', '5', '90003232652', 'Ahemdabad', 'h.png', 'user', ''),
(27, 'Dr. Dhaval Somani', 'dhaval123', '635241', 'Oncologist', 'MD,MS', '5', '9805630125', 'Ahemdabad', 'i.png', 'user', ''),
(28, 'Dr. Meenu Shah', 'meenu786', '786meena', 'Urologist', 'MDS', '5', '9745865856', 'Ahemdabad', 'j.png', 'user', 'gohilbhavna1967@gmail.com'),
(29, 'Dr. Manish Shah', 'manish', 'manish6565', 'ENT', 'MS,MD', '9', '98745636363', 'Ahemdabad', 'c.png', 'user', ''),
(30, 'Dr. Dipti Patel', 'diptipatel', 'dipati', 'Nutrition ', 'MD,MS', '3', '9801247523', 'Baroda', 'd3.png', 'user', ''),
(31, 'Dr. Yamini Patel', 'yamini99', '99yamini', 'Psychology ', 'MD,MS,MBBS', '3', '9845636585', 'Baroda', 'd8.png', 'user', ''),
(32, 'Dr. Kavita Bagdi', 'kavita22', '223235', 'Nephrology ', 'MBBS,MD', '6', '9630202152', 'Surat', 's3.png', 'user', ''),
(33, 'Dr. Krutika D. Patel', 'kutika11', 'krutika99', 'Pulmonology', 'MD,MS', '8', '9870203026', 'Surat', '8.png', 'user', ''),
(34, 'Dr. Sharat Gupta ', 'sharatgup', 'gupta15252', 'Endocrinology', 'MBBS,MS,MD', '6', '9060526030', 'Gandhinagar', 's4.png', 'user', ''),
(35, 'Dr.Sanju Gohil', 'sg', '2707', 'Surgeon', 'MD', '2', '9874563210', 'Junagadh', 'Snapchat-591203231.jpg', 'user', '');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `question` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `name`, `question`) VALUES
(2, 'Mukesh Aantroliya', 'How Long You Upload new Diasease.'),
(3, 'Raj Malhotra', 'How can I fight with cancer..');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `feedback` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `mobile`, `feedback`) VALUES
(1, 'sanjeev Gohil', '9558536221', 'This site is very best site for appoinment.'),
(9, 'Nidhi Vyas', '9741258563', 'I can fetch the hospital information form this site.'),
(10, 'Vidhi Raja', '6523654125', 'Nice site for consult doctor.'),
(12, 'Sanjeev', '9558536221', 'Nice Site.');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `name`, `contact`, `address`, `city`) VALUES
(5, 'Vedant Multispeacili', '7947234080', 'Shree Vishnudhar Gardens, Jaguar Showroom Road, Gota Road.', 'Ahemdabad'),
(6, 'Akashar Hospital', '9859859872', '1st, Akshar Arcade, Near Devashya School, Nikol', 'Ahemdabad'),
(7, 'Childhood Children H', '7947068140', '2nd Floor, Color Stone, Bopal ', 'Ahemdabad'),
(8, 'Parth Orthopaedic Ho', '8045775251', 'E 408 11, Galaxy Arcade, Narod', 'Ahemdabad'),
(9, 'Satyamev Hospital Pv', '7947060499', 'Satyamev Arcade, Ahmedabad Mehsana Express Highway, Chandkheda.', 'Ahemdabad'),
(10, 'Mahavir Hospital', '7947073222', 'Mahavir Status, Near Manmohan Cross Road, 100 Feet Virat Nagar Road, Odhav      GIDC.', 'Ahemdabad'),
(11, 'Jalaram Children Hospital', '7947386422', '/3, 2nd Floor, Nakshtra Mall, Ioc Road, Chandkheda', 'Ahemdabad'),
(12, 'lifeline Multispeciality Hospital ', '7947258596', 'Shayona Tilak, Gota Road', 'Ahemdabad'),
(13, 'Aagam Hospital', '7947078383', 'round Floor 10 to 13, S-1 Building, Shayona Cross Road, Ghatlodiya', 'Ahemdabad'),
(14, 'Navjeevan Hospital', '7947074413', 'Navjivan Care Home, Nr. Over Bridge, Sarkhej Dholka Road, Sarkhej.', 'Ahemdabad'),
(15, 'Krishiv Hospital', '7947309854', '6th Floor Om Arcade, Zanzarda Bypass Cross Road2', 'Junagadh'),
(16, 'Health Plus Multispecialty Hospital', '7947079626', 'Lal Bahadur Shastri Society, Bus Stand Road', 'Junagadh'),
(17, 'Lilavanti Piles Fissure Fistula Hospital', '285 263459', 'Heerapanna Complex, 5th Floor, Bus Stand Road', 'Junagadh'),
(18, 'Shri Hatkesh Hospital', '0285262453', 'Saraswati Mandir Complex, College Road.', 'Junagadh'),
(19, 'Barmeda Surgical Hospital', '285 263121', 'Fifth Floor, Hirapanna Complex', 'Junagadh'),
(20, 'Ashirvad Orthopedic Hospital', '0285 26360', '1st Floor, Akshar Plaza 1, Zanzarda Bypass Chowkdi', 'Junagadh'),
(21, 'Satasia Surgical Hospital', '0285 26313', '2nd Floor Unique Plaza Complex, Near Reliance Trends', 'Junagadh'),
(22, 'Aardeshna hospital', '285 263260', 'Aardeshna Hospital, Lal Bahadur Shashtri Society', 'Junagadh'),
(23, 'KJ Multispeciality Hospital', '285 296027', 'Zanzarda By Pass Chowkdi, Zanzarda', 'Junagadh'),
(24, 'MERS Medical College & Hospital ', '0285 26545', 'Near Majewadi Gate', 'Junagadh'),
(25, 'Shri Ram Hospital', '7947257807', '7947257807', 'Rajkot'),
(26, 'Dattatreya Hospital', '0281 24623', 'Dattatreya Hospital 2 Bhakti Nagar Station Plot, Bhaktinagar', 'Rajkot'),
(27, 'Satnam Hospital', '7947232818', 'Satnam Hospital, Opposite Kasturi Apartment, Indraprasth Nagar Main Road, Akshar Marg, Amin Marg', 'Rajkot'),
(28, 'Landmark Hospital', '7947202648', '25, New Jagnath, Astron Chowk, Astron Chowk', 'Rajkot'),
(29, 'Flowrence Hospital', '7947222963', '3 Jay Park, Nana Mava Main Road ', 'Rajkot'),
(30, 'Saarthi Hospital & ICU', '7947078326', 'Shiv Ratna Complex, Vidhyanagar Main RoadShiv Ratna Complex, Vidhyanagar Main Road', 'Rajkot'),
(31, 'Medisurge Multi Speciality Hospital', '7947444013', 'Samruddh Arcade, Patel Boarding Cross Road, 150 Feet Ring Road', 'Rajkot'),
(32, 'Sadbhavna Hospital', '0281257433', 'Sadbhavna Building, 150 Feet Ring Road', 'Rajkot'),
(33, 'Om Ayurved and Panchakarma Hospital', '9558180808', 'Nilkanth Nagar Main Road, University Road', 'Rajkot'),
(34, 'Gokul Super Speciality Hospital', '7947078120', '12/14, Manhar Plot, Vidhyanagar Main Road', 'Rajkot'),
(35, 'Jivan Jyot Hospital & ICU', '0794744985', '	 	3. Address:- Behind Indian Oil Petrol Pump, White Peral Complex, Padra', 'Baroda'),
(36, 'Jivan Hospital', '0794719542', '3rd Floor Aarana Narayan Garden Road, Opp Laxmipura Talav, Gotri Road', 'Baroda'),
(37, 'Pramukh Hospital Multi-speciality & I.C.U.', '0794746278', '1st & 4th Floor, Pramukh Bazar Complex, Atladara- Bill Main Road, Atladara', 'Baroda'),
(38, 'Naik Super Speciality Hospital', '0794725606', 'Opposite Ssg Hospital ', 'Baroda'),
(39, 'Aman Hospital& Research Centre-Cashless Hospitalisation', '0794725713', '15, Shashwat, Opp.ESI HOSPITAL, Gotri Road', 'Baroda'),
(40, 'janvi Multispeciality Hospital', '0794732891', 'Ff-silver Square, Harni Airport Road, Harni', 'Baroda'),
(41, 'Amrut Multispeciality Hospital', '0794743981', 'A 4, Bhagvati Park Soceity, Old Padra Road', 'Baroda'),
(42, 'Jupiter Hospital', '0794728460', 'Sun Pharma Road, Atladara', 'Baroda'),
(43, 'Shree Kalp Surgical Hospital And Piles Clinic', '0794726167', '55-62, Golden Plaza, National Highway No - 8, Kamrej', 'Surat'),
(44, 'Nirmal Hospital Pvt Ltd', '0804579516', '2/1423, B6, Nirmal Multi Speciality, Civil Cross Road, Sagrampura', 'Surat'),
(45, 'Sims Hospital', '0794745380', 'SIMS Hospital, Near Modh Vanik Vadi, Katargam Road, Lal Darwaja', 'Surat'),
(46, 'City Life Care Multispeciality Hospital', '0794725544', 'Second Floor Ozone Complex, Kamrej Road, Kamrej Char Rasta', 'Surat'),
(47, 'Parshwa Imaging & Mammography Center', '0794725117', 'T-7, U-12 Upper Ground Floor, Shankeshwar Complex, Kailash Nagar,        Sagrampura', 'Surat'),
(48, 'Nilkanth Hospital', '0794725964', '294/295/296, Ranchodji Park Society, Lalita Cross Roads to Rashi Circle, Katargam', 'Surat'),
(49, 'Vaghani Hospital and Maternity Home', '9737993355', '4th Floor Apple Square, Yogi Chowk', 'Surat'),
(50, 'Deep Eye Hospital', '0287624103', 'Shubham Tower, Satta Bazaar', 'Veraval'),
(51, 'D N Kalariyas Hospital', '9428377763', 'Kolivala Nake, Veraval Ho', 'Veraval'),
(52, 'G Memorial Hospital Pvt Ltd ', '0794733517', 'I. G. Memorial Hospital Private Limited, Junagadh Road', 'Veraval'),
(53, 'Sriji Hospital', '9687799492', 'Bus Stand Road, Opposite Civil Hospital', 'Veraval'),
(55, 'Heart Care Hospital', '2876222255', 'Ram Barosha Chowk, Near Aradhana Talkies', 'Veraval'),
(56, 'Ishan Hospital', '948468732', 'New Dr House, Opposite Rajdhani Hotel', 'Veraval'),
(57, 'Aradhana Hospital--For Women & Child', '02876 246 ', 'Plot No.8, Prakash Complex Rd, Opp. Water Tank, Railway Station Area', 'Veraval'),
(58, 'Navjivan General Hospital', '0794735461', 'Keriya Road', 'Amreli'),
(59, 'Shivam Dental Clinic', '9429779829', 'First Floor, Mega Mall, Near Marketing Yard Gate, Jilla Panchayat Road, ', 'Amreli'),
(60, 'Krishna General & Maternity Hospital', '9429094191', 'Piplikatha, Near Shitala Mata Temple, Jafrabad', 'Amreli'),
(61, 'Radhika General Hospital', '0279222890', 'Chittal Road', 'Amreli'),
(62, 'Civil Hospital (Lathi)', '0279222211', 'Civil Hospital Campus, Lathi Road', 'Amreli'),
(63, 'Aastha Hospital', '0279222584', 'B.M Chowk, Liliya Road', 'Amreli'),
(64, 'Gunatit Hospital', '0279223209', 'Liliya Road', 'Amreli'),
(65, 'Sadvichar Hospital', '2792223584', 'C/O Harikrushna Hospital, Liliya Road, Station Road ', 'Amreli'),
(66, 'Shivam Hospital', '0284523550', 'Ramdarshan Complex, Fourth Street', 'Amreli');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `username`, `password`, `mobile`, `email`, `city`, `photo`, `type`) VALUES
(10, 'Ramesh Vara', 'rmvara', '7854', '9585745685', 'sanjeevgohil2707@gmail.com', 'Ahemdabad', '1.png', ''),
(12, 'Ritika Shah', 'rkshah@', 'rkshah123', '7418523696', 'ritika@gmail.com', 'Baroda', '7.png', ''),
(13, 'Rahul Sharma', 'rahul8525', '415263', '8547125635', 'rahul@hotmail.com', 'Junagadh', 'rahul.png', ''),
(14, 'Rajvi Shekh', 'shekh12', '6532', '7456365263', 'sekh@gmail.com', 'Gandhinagar', 'd.png', ''),
(15, 'Mukesh Aantroliya', 'ma95', '5856', '9874566562', 'maantorliya@yahoo.com', 'Surendranagar', 'e.png', ''),
(16, 'vidhi damani', 'vidhi123', 'vidhi2805', '874545785', 'vidhidm@gamil.com', 'Ahemdabad', 'f.png', ''),
(17, 'Dhaval Gohel', 'dg5502', 'dg5502', '9632145212', 'dg@gmail.com', 'Baroda', 'g.png', ''),
(18, 'Ruhani Azami', 'ruhanni786', 'ruha12ni', '9876532142', 'ruhaniazami@gmail.com', 'Porbandar', 'h.png', ''),
(19, 'Nayan Mori', 'nyan12mori', 'nay7845an', '6325487585', 'nayan77@gmail.com', 'Vapi', 'i.png', ''),
(20, 'Anandi Badhiya', 'anandi', '090998', '7779052523', 'anandi@gmail.com', 'Rajkot', 'j.png', ''),
(21, 'Ronak Mardiya', 'rmmardiya', '55rm', '9874563215', 'rmmaradiya@gmail.com', 'Jamnagar', 'k.png', ''),
(22, 'Nidhi Dhameha', 'nidhi552', 'nidhi9898', '9658745863', 'nidhdm55@gmail.com', 'Veraval', 'l.png', ''),
(23, 'Rohan Makhija', 'rohanm12', 'rm1212', '9871234545', 'rmakhija13@gmail.com', 'Veraval', 'm.png', ''),
(24, 'Vatsal Romani', 'vromani', 'rmoani123', '6587459689', 'romani@gmail.como', 'Junagadh', 'n.png', ''),
(25, 'Foram Kharecha', 'foram55', 'foram552', '9874102523', 'foram55@gmail.com', 'Valsad', 'o.png', ''),
(26, 'Ram Ravat', 'ram9865', 'ram020202', '9638521475', 'ramravat@gmail.coom', 'Gandhinagar', 'p.png', ''),
(27, 'Rani Jani', 'rani6653', 'ranijani22', '9874563253', 'ranijani@gmail.com', 'Porbandar', 'q.png', ''),
(28, 'Prit Ladani', 'prit223', 'prit9898', '9563636325', 'prit22@gamail.com', 'Baroda', 'r.png', ''),
(29, 'Rekha Sutreja', 'rekha196', 'rekhasutreja123', '9874563256', 'rekha112@gmail.com', 'Amreli', 's.png', ''),
(30, 'sanjeev', 'bunny', '130621', '9558593930', '', 'Baroda', '21.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `specialist`
--

CREATE TABLE `specialist` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialist`
--

INSERT INTO `specialist` (`id`, `name`) VALUES
(1, 'Cardiologist'),
(2, 'orthopedic '),
(3, 'Neurologist '),
(4, 'Gynecologist'),
(10, 'Psychiatrist'),
(12, 'Surgeon'),
(14, 'Ophthalmologist'),
(16, 'Oncologist'),
(18, 'Urologist'),
(20, 'Anesthesiologist'),
(22, 'Dermatologist'),
(23, 'Gastroenterologist'),
(24, 'ENT'),
(25, 'Nutrition '),
(26, 'Psychology '),
(27, 'Nephrology '),
(30, 'Pulmonology'),
(31, 'Endocrinology'),
(35, 'Ayurvedic'),
(38, 'General Practitioner ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookapp`
--
ALTER TABLE `bookapp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialist`
--
ALTER TABLE `specialist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bookapp`
--
ALTER TABLE `bookapp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `specialist`
--
ALTER TABLE `specialist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
