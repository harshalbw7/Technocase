-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 03:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technocase`
--

-- --------------------------------------------------------

--
-- Table structure for table `casestudy`
--

CREATE TABLE `casestudy` (
  `caseStudyID` int(4) NOT NULL,
  `question` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `casestudy`
--

INSERT INTO `casestudy` (`caseStudyID`, `question`) VALUES
(1, 'As a project manager, you are assigned to lead a virtual team spread across different countries and time zones. The team members come from diverse cultural backgrounds, and some of them are new to virtual collaboration. The project involves developing a new software product. Discuss the challenges you might face in managing this virtual team and how you plan to address them to ensure successful project delivery.'),
(2, 'You are managing a complex construction project to build a new office building. During the project execution, the client requests several changes to the original scope, some of which have significant impacts on the project schedule and budget. Explain how you would handle these change requests, manage scope creep, and maintain stakeholder satisfaction while keeping the project on track.'),
(3, 'You are a project manager in a fast-paced environment with multiple ongoing projects. One of your high-priority projects requires a specific set of skilled resources that are limited in availability. However, these resources are also needed for other projects. Describe how you would strategically allocate and manage these scarce resources to ensure that all projects are completed successfully and within their respective timelines.');

-- --------------------------------------------------------

--
-- Table structure for table `casestudyresponse`
--

CREATE TABLE `casestudyresponse` (
  `CaseResID` int(4) NOT NULL,
  `participantID` int(4) NOT NULL,
  `question` varchar(500) NOT NULL,
  `fName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `casestudyresponse`
--

INSERT INTO `casestudyresponse` (`CaseResID`, `participantID`, `question`, `fName`) VALUES
(5, 9002, 'You are a project manager in a fast-paced environment with multiple ongoing projects. One of your high-priority projects requires a specific set of skilled resources that are limited in availability. However, these resources are also needed for other projects. Describe how you would strategically allocate and manage these scarce resources to ensure that all projects are completed successfully and within their respective timelines.', 'Case Study.pdf'),
(6, 9002, 'You are a project manager in a fast-paced environment with multiple ongoing projects. One of your high-priority projects requires a specific set of skilled resources that are limited in availability. However, these resources are also needed for other projects. Describe how you would strategically allocate and manage these scarce resources to ensure that all projects are completed successfully and within their respective timelines.', 'Case Study.pdf'),
(7, 9003, 'You are a project manager in a fast-paced environment with multiple ongoing projects. One of your high-priority projects requires a specific set of skilled resources that are limited in availability. However, these resources are also needed for other projects. Describe how you would strategically allocate and manage these scarce resources to ensure that all projects are completed successfully and within their respective timelines.', 'poster2.pdf'),
(8, 9004, 'You are a project manager in a fast-paced environment with multiple ongoing projects. One of your high-priority projects requires a specific set of skilled resources that are limited in availability. However, these resources are also needed for other projects. Describe how you would strategically allocate and manage these scarce resources to ensure that all projects are completed successfully and within their respective timelines.', 'poster.pdf'),
(9, 9005, 'You are a project manager in a fast-paced environment with multiple ongoing projects. One of your high-priority projects requires a specific set of skilled resources that are limited in availability. However, these resources are also needed for other projects. Describe how you would strategically allocate and manage these scarce resources to ensure that all projects are completed successfully and within their respective timelines.', 'poster.pdf'),
(10, 9002, 'You are managing a complex construction project to build a new office building. During the project execution, the client requests several changes to the original scope, some of which have significant impacts on the project schedule and budget. Explain how you would handle these change requests, manage scope creep, and maintain stakeholder satisfaction while keeping the project on track.', 'AIT Lab Exercise.pdf'),
(11, 9006, 'You are a project manager in a fast-paced environment with multiple ongoing projects. One of your high-priority projects requires a specific set of skilled resources that are limited in availability. However, these resources are also needed for other projects. Describe how you would strategically allocate and manage these scarce resources to ensure that all projects are completed successfully and within their respective timelines.', 'Assignment.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackID` int(11) NOT NULL,
  `participantName` varchar(20) NOT NULL,
  `review` varchar(20) NOT NULL,
  `feedback` varchar(1000) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackID`, `participantName`, `review`, `feedback`, `time`) VALUES
(2, 'Harshal Wandhare', 'Best event', 'Excellent ! , You can add more events.', '2023-08-04 21:23:08'),
(3, 'Gaurav Modak', 'Better event', 'nice experience !', '2023-08-05 06:45:46'),
(5, 'Tanaya Aswale', 'Good event', 'You should have to provide more time for event !', '2023-08-06 06:45:05'),
(6, 'Karan Joshi', 'Better event', 'nice event', '2023-08-07 08:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `judge`
--

CREATE TABLE `judge` (
  `id` int(4) NOT NULL,
  `jname` varchar(50) NOT NULL,
  `jpass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `judge`
--

INSERT INTO `judge` (`id`, `jname`, `jpass`) VALUES
(11, 'judge123@gmail.com', 'Judge@123');

-- --------------------------------------------------------

--
-- Table structure for table `organiser`
--

CREATE TABLE `organiser` (
  `id` int(4) NOT NULL,
  `oname` varchar(20) NOT NULL,
  `opass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organiser`
--

INSERT INTO `organiser` (`id`, `oname`, `opass`) VALUES
(10, 'iicmr123@gmail.com', 'iicmr@123');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `participantID` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL,
  `uname` varchar(20) NOT NULL,
  `upass` varchar(20) NOT NULL,
  `college` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`participantID`, `name`, `email`, `contact`, `course`, `uname`, `upass`, `college`) VALUES
(9001, 'Gaurav Modak', 'gaurav12@gmail.com', '9364546463', 'MCA', 'gaurav12', 'Gaurav@12', 'Institute of Industrial and Computer Management and Research, Pune'),
(9002, 'Harshal Wandhare', 'harshalbw717@gmail.com', '9309554934', 'MCA', 'harshal7', 'Harshal@7', 'Institute of Industrial and Computer Management and Research, Pune'),
(9003, 'Tanaya Aswale', 'tanaya52@gmail.com', '8734587934', 'MCA', 'tanaya52', 'Tanaya@52', 'Institute of Industrial and Computer Management and Research, Pune'),
(9004, 'Pravin Dayki', 'pravin20@gmail.com', '8874356345', 'BE', 'pravin20', 'Pravin@123', 'Sardar Patel College, Chandrapur'),
(9005, 'Karan Joshi', 'karan33@gmail.com', '9784567667', 'MCA', 'karan33', 'Karan@33', 'Institute of Industrial and Computer Management and Research, pune'),
(9006, 'Sneha Holkar', 'sneha09@gmail.com', '8753475476', 'MBA', 'sneha09', 'Sneha@09', 'Sardar Patel College, Chandrapur');

-- --------------------------------------------------------

--
-- Table structure for table `poster`
--

CREATE TABLE `poster` (
  `posterID` int(4) NOT NULL,
  `question` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poster`
--

INSERT INTO `poster` (`posterID`, `question`) VALUES
(1, 'Create a poster that emphasizes the importance of sustainable practices in the IT industry. Illustrate how data centers, cloud computing, and electronic devices can be eco-friendly. Showcase ways IT can contribute to environmental conservation and reducing the carbon footprint.'),
(2, 'Design a poster that illustrates the role of IT in revolutionizing education. Showcase how technology is transforming the learning experience, incorporating e-learning platforms, interactive apps, virtual classrooms, and the benefits of a tech-driven education system.  Poster Making Competition: \"Sustainable IT for a Green Future\"'),
(3, 'Imagine the world in the year 2030. Create a poster that showcases your vision of how Information Technology (IT) will shape the future. Highlight key advancements, such as AI, IoT, cybersecurity, and how they will impact our daily lives, industries, and global connectivity.');

-- --------------------------------------------------------

--
-- Table structure for table `posterresponse`
--

CREATE TABLE `posterresponse` (
  `postResID` int(4) NOT NULL,
  `participantID` int(4) NOT NULL,
  `question` varchar(500) NOT NULL,
  `fname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posterresponse`
--

INSERT INTO `posterresponse` (`postResID`, `participantID`, `question`, `fname`) VALUES
(3, 9002, 'Imagine the world in the year 2030. Create a poster that showcases your vision of how Information Technology (IT) will shape the future. Highlight key advancements, such as AI, IoT, cybersecurity, and how they will impact our daily lives, industries, and global connectivity.', 'poster.pdf'),
(4, 9003, 'Create a poster that emphasizes the importance of sustainable practices in the IT industry. Illustrate how data centers, cloud computing, and electronic devices can be eco-friendly. Showcase ways IT can contribute to environmental conservation and reducing the carbon footprint.', 'poster.pdf'),
(5, 9004, 'Imagine the world in the year 2030. Create a poster that showcases your vision of how Information Technology (IT) will shape the future. Highlight key advancements, such as AI, IoT, cybersecurity, and how they will impact our daily lives, industries, and global connectivity.', 'Case Study.pdf'),
(6, 9006, 'Design a poster that illustrates the role of IT in revolutionizing education. Showcase how technology is transforming the learning experience, incorporating e-learning platforms, interactive apps, virtual classrooms, and the benefits of a tech-driven education system.  Poster Making Competition: \"Sustainable IT for a Green Future\"', 'Futsal report.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quizID` int(4) NOT NULL,
  `question` varchar(200) NOT NULL,
  `option1` varchar(20) NOT NULL,
  `option2` varchar(20) NOT NULL,
  `option3` varchar(20) NOT NULL,
  `option4` varchar(20) NOT NULL,
  `correctOption` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quizID`, `question`, `option1`, `option2`, `option3`, `option4`, `correctOption`) VALUES
(1, ' Who developed Python Programming Language?', 'Wick van Rossum', 'Guido van Rossum', 'Niene Stom', 'Rasmus Lerdorf', 'Guido van Rossum'),
(2, 'what is full form of JVM?', 'java virtual machine', 'java variable machin', 'java vary machine', 'java virtual map', 'java virtual machine'),
(3, 'Which of the following is not a Java features?', 'Dynamic', 'Architecture Neutral', 'Use of pointers', 'Object-oriented', 'Use of pointers'),
(4, 'Which type of Programming does Python support?', 'object-oriented prog', 'structured programmi', 'functional programmi', 'all of the mentioned', 'all of the mentioned'),
(5, 'Which of the following is used to define a block ?', 'Indentation', 'key', 'Brackets', 'all of the mentioned', 'Indentation'),
(6, 'What will be the output of the following Python expression ( 4 + 3 % 5 )?', '7', '4', '1', '2', '7'),
(7, 'Which keyword is used for function in Python language?', 'function', 'def', 'fun', 'define', 'def'),
(8, 'Which of the following character is used to give single-line comments in Python?', '//', '#', '!--', '/*', '#'),
(9, ' Which of the following functions can help us to find the version of python that we are currently working on?', 'sys.v()', 'sys.v', 'sys.version()', 'sys.version', 'sys.version'),
(10, 'Python supports the creation of anonymous functions at runtime, using a construct called _______.', 'pi', 'anonymous ', 'lambda', 'non of the above ', 'lambda'),
(11, 'What will be the output of the Python code ( x<<2 ) snippet if x=1?', '1', '8', '4', '16', '4'),
(12, 'Which environment variable is used to set the java path?', 'MAVEN_Path', 'JavaPATH', 'J_path', 'JAVA_HOME', 'JAVA_HOME'),
(13, 'Which of the following is not an OOPS concept in Java?', 'Encapsulation', 'Polymorphism', 'Compilation', 'Inheritance', 'Compilation'),
(14, ' Who developed Python Programming Language?', 'Wick van Rossum', 'Guido van Rossum', 'Brackets', 'define', 'all of the mentioned');

-- --------------------------------------------------------

--
-- Table structure for table `quizresponse`
--

CREATE TABLE `quizresponse` (
  `quizResID` int(4) NOT NULL,
  `quizID` int(4) NOT NULL,
  `participantID` int(4) NOT NULL,
  `response` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizresponse`
--

INSERT INTO `quizresponse` (`quizResID`, `quizID`, `participantID`, `response`) VALUES
(37, 1, 9003, 'Guido van Rossum'),
(38, 2, 9003, 'java virtual machine'),
(39, 3, 9003, 'Use of pointers'),
(40, 4, 9003, 'all of the mentioned'),
(41, 5, 9003, 'Indentation'),
(42, 1, 9004, 'Guido van Rossum'),
(43, 2, 9004, 'java vary machine'),
(44, 3, 9004, 'Use of pointers'),
(45, 4, 9004, 'all of the mentioned'),
(46, 5, 9004, 'all of the mentioned'),
(47, 1, 9001, 'Guido van Rossum'),
(48, 2, 9001, 'java vary machine'),
(49, 3, 9001, 'Use of pointers'),
(50, 4, 9001, 'all of the mentioned'),
(51, 5, 9001, 'Indentation'),
(67, 1, 9005, 'Wick van Rossum'),
(68, 2, 9005, 'java virtual machine'),
(69, 3, 9005, 'Use of pointers'),
(70, 4, 9005, 'all of the mentioned'),
(71, 5, 9005, 'Indentation'),
(72, 1, 9002, 'Guido van Rossum'),
(73, 2, 9002, 'java virtual machine'),
(74, 3, 9002, 'Use of pointers'),
(75, 4, 9002, 'all of the mentioned'),
(76, 5, 9002, 'Indentation'),
(77, 8, 9006, '#'),
(78, 2, 9006, 'java virtual machine'),
(79, 9, 9006, 'sys.version()'),
(80, 6, 9006, '7'),
(81, 5, 9006, 'Indentation');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `resultID` int(4) NOT NULL,
  `participantID` int(4) NOT NULL,
  `eventType` varchar(20) NOT NULL,
  `participantScore` int(2) NOT NULL,
  `totalMarks` int(2) NOT NULL,
  `percent` float(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`resultID`, `participantID`, `eventType`, `participantScore`, `totalMarks`, `percent`) VALUES
(1, 9002, 'Quiz', 32, 40, 80.00),
(2, 9001, 'CaseStudy', 42, 50, 84.00),
(3, 9002, 'CaseStudy', 39, 50, 78.00),
(4, 9001, 'Poster', 43, 50, 86.00),
(5, 9002, 'Poster', 47, 50, 94.00),
(9, 9003, 'Quiz', 20, 20, 99.99),
(10, 9004, 'Quiz', 8, 20, 40.00),
(11, 9003, 'CaseStudy', 45, 50, 90.00),
(12, 9004, 'CaseStudy', 37, 50, 74.00),
(13, 9003, 'Poster', 39, 50, 78.00),
(14, 9004, 'Poster', 43, 50, 86.00),
(15, 9001, 'Quiz', 16, 20, 80.00),
(16, 9005, 'Quiz', 12, 20, 60.00),
(17, 9005, 'CaseStudy', 43, 50, 86.00),
(19, 9006, 'Quiz', 16, 20, 80.00),
(20, 9006, 'CaseStudy', 23, 50, 46.00),
(21, 9006, 'Poster', 49, 50, 98.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casestudy`
--
ALTER TABLE `casestudy`
  ADD PRIMARY KEY (`caseStudyID`);

--
-- Indexes for table `casestudyresponse`
--
ALTER TABLE `casestudyresponse`
  ADD PRIMARY KEY (`CaseResID`),
  ADD KEY `participantID_fk` (`participantID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackID`);

--
-- Indexes for table `judge`
--
ALTER TABLE `judge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organiser`
--
ALTER TABLE `organiser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`participantID`);

--
-- Indexes for table `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`posterID`);

--
-- Indexes for table `posterresponse`
--
ALTER TABLE `posterresponse`
  ADD PRIMARY KEY (`postResID`),
  ADD KEY `participantID_fk` (`participantID`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quizID`);

--
-- Indexes for table `quizresponse`
--
ALTER TABLE `quizresponse`
  ADD PRIMARY KEY (`quizResID`),
  ADD KEY `participantID_fk` (`participantID`),
  ADD KEY `quizID` (`quizID`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`resultID`),
  ADD KEY `paticipantID_fk` (`participantID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `casestudy`
--
ALTER TABLE `casestudy`
  MODIFY `caseStudyID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `casestudyresponse`
--
ALTER TABLE `casestudyresponse`
  MODIFY `CaseResID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `participantID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9007;

--
-- AUTO_INCREMENT for table `poster`
--
ALTER TABLE `poster`
  MODIFY `posterID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posterresponse`
--
ALTER TABLE `posterresponse`
  MODIFY `postResID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quizID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `quizresponse`
--
ALTER TABLE `quizresponse`
  MODIFY `quizResID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `resultID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `casestudyresponse`
--
ALTER TABLE `casestudyresponse`
  ADD CONSTRAINT `casestudyresponse_ibfk_1` FOREIGN KEY (`participantID`) REFERENCES `participant` (`participantID`);

--
-- Constraints for table `posterresponse`
--
ALTER TABLE `posterresponse`
  ADD CONSTRAINT `participantID_fk` FOREIGN KEY (`participantID`) REFERENCES `participant` (`participantID`);

--
-- Constraints for table `quizresponse`
--
ALTER TABLE `quizresponse`
  ADD CONSTRAINT `participantID` FOREIGN KEY (`participantID`) REFERENCES `participant` (`participantID`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `participantID_fk_1` FOREIGN KEY (`participantID`) REFERENCES `participant` (`participantID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
