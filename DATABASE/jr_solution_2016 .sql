-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2016 at 02:34 AM
-- Server version: 5.5.41-log
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jr_solution_2016`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
`id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `published` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `published`, `author`) VALUES
(1, 'Blog title 1', 'Blog title 1', '2016-01-14 03:27:39', 'rajesh basnet'),
(2, 'Blog title 1', 'Blog title 1', '2015-12-31 13:00:00', 'rajesh'),
(3, 'Blog title 1', 'Blog title 1', '2016-01-05 13:00:00', 'rajesh basnet'),
(4, 'Blog title 1', 'Blog title 1', '2016-01-12 13:00:00', 'rajesh basnet'),
(5, 'भारत भ्रमणमा जानु वाञ्छनीय हुँदैन', 'मधेसका २० जिल्लामध्ये झापा, मोरङ र सुनसरीमा १५ निर्वाचन क्षेत्र, प्रदेश नम्बर २ मा ३२, चितवनमा ३, प्रदेश नम्बर ४ मा पर्ने  नवलपरासीको भू–भागमा २, नवलपरासीको बाँकी भाग, रुपन्देही, कपिलवस्तु, दाङ, बाँके र बर्दियामा २० तथा कैलाली र कन्चनपुरमा ८ गरी जम्मा ८० सिट मधेसका जिल्लामा हुनेछन्।नाकाबन्दी खुल्ने बताएप्रधानमन्त्री केपी शर्मा ओलीले एकदुई दिन भित्रमै का छन्।\r\nप्रधानमन्त्री निवास बालुवाटारमा सम्पादक तथा बरिष्ठ पत्रकारहरुसँग मंगलबार छलफल गर्दै उनले केहीदिनमै नाकाबन्दी खुल्ने दाबी गरेका हुन्।\r\n''एकदुई दिनमै नाकाबन्दी खुल्छ भन्ने आधार के छ? यसको विश्वस्नीयता के हो?'' भन्ने प्रश्नको जवाफमा प्रधानमन्त्री ओलीले भने,''अब आन्दोलनकारी दलहरुसँग पनि नाकाबन्दी गरिराख्न मिल्ने कारण छैन। उहाँहरुले छिट्टै नाका खोल्नुहुन्छ।''\r\nउनले भने,''नाकाबन्दी अन्त्य गर्नेबारे हामीले राष्ट्रिय अन्तराष्ट्रिय परामर्श जारी राखेका छौं।''\r\nयसअघि पनि प्रधानमन्त्री ओलीले पटकपटक चाँडै नाकाबन्दी खुल्ने बताउँदै आएपनि नाकाबन्दी खुल्न सकेको छैन। आफूले भने पनि नाकाबन्दी नखुलेको विषयलाई स्पष्ट पार्दै प्रधानमन्त्री ‌ओलीले भने, ''म मित्रहरुको मित्रतामा विश्वास गर्छु। राजनीतिक दलहंरुको इमान्दारीतामा विश्वास गर्छु। मलाई पनि नाकाबन्दी खुल्नेबारे जुन विश्वास दिलाइएको थियो। विगतमा त्यसमा ठेस लागेकै हो।''\r\nप्रधानमन्त्री ओलीको भारत भ्रमणको तयारी चलिरहेको प्रसङ्गमा ''नाकाबन्दी नखुली भारत भ्रमणमा जानुहुन्छ?'' भनी सोधिएको प्रश्नको जवाफमा उनले भने, ''परिस्थिति सामान्य नभई भारत भ्रमणमा जानु वाञ्छनीय हुँदैन। तर अब यो प्रश्न नै प्रासङ्गिक हुन्छ भन्ने मलाई लाग्दैन।''', '2016-01-26 10:19:08', 'rajesh basnet'),
(6, 'नाकाबन्दी नखुली भारत भ्रमणमा जानुहुन्छ', 'मधेसका २० जिल्लामध्ये झापा, मोरङ र सुनसरीमा १५ निर्वाचन क्षेत्र, प्रदेश नम्बर २ मा ३२, चितवनमा ३, प्रदेश नम्बर ४ मा पर्ने  नवलपरासीको भू–भागमा २, नवलपरासीको बाँकी भाग, रुपन्देही, कपिलवस्तु, दाङ, बाँके र बर्दियामा २० तथा कैलाली र कन्चनपुरमा ८ गरी जम्मा ८० सिट मधेसका जिल्लामा हुनेछन्।नाकाबन्दी खुल्ने बताएप्रधानमन्त्री केपी शर्मा ओलीले एकदुई दिन भित्रमै का छन्।\r\nप्रधानमन्त्री निवास बालुवाटारमा सम्पादक तथा बरिष्ठ पत्रकारहरुसँग मंगलबार छलफल गर्दै उनले केहीदिनमै नाकाबन्दी खुल्ने दाबी गरेका हुन्।\r\n''एकदुई दिनमै नाकाबन्दी खुल्छ भन्ने आधार के छ? यसको विश्वस्नीयता के हो?'' भन्ने प्रश्नको जवाफमा प्रधानमन्त्री ओलीले भने,''अब आन्दोलनकारी दलहरुसँग पनि नाकाबन्दी गरिराख्न मिल्ने कारण छैन। उहाँहरुले छिट्टै नाका खोल्नुहुन्छ।''\r\nउनले भने,''नाकाबन्दी अन्त्य गर्नेबारे हामीले राष्ट्रिय अन्तराष्ट्रिय परामर्श जारी राखेका छौं।''\r\nयसअघि पनि प्रधानमन्त्री ओलीले पटकपटक चाँडै नाकाबन्दी खुल्ने बताउँदै आएपनि नाकाबन्दी खुल्न सकेको छैन। आफूले भने पनि नाकाबन्दी नखुलेको विषयलाई स्पष्ट पार्दै प्रधानमन्त्री ‌ओलीले भने, ''म मित्रहरुको मित्रतामा विश्वास गर्छु। राजनीतिक दलहंरुको इमान्दारीतामा विश्वास गर्छु। मलाई पनि नाकाबन्दी खुल्नेबारे जुन विश्वास दिलाइएको थियो। विगतमा त्यसमा ठेस लागेकै हो।''\r\nप्रधानमन्त्री ओलीको भारत भ्रमणको तयारी चलिरहेको प्रसङ्गमा ''नाकाबन्दी नखुली भारत भ्रमणमा जानुहुन्छ?'' भनी सोधिएको प्रश्नको जवाफमा उनले भने, ''परिस्थिति सामान्य नभई भारत भ्रमणमा जानु वाञ्छनीय हुँदैन। तर अब यो प्रश्न नै प्रासङ्गिक हुन्छ भन्ने मलाई लाग्दैन।''', '2016-01-26 10:17:54', 'rajesh basnet'),
(7, 'सिट मधेसका जिल्लामा हुनेछन्', 'मधेसका २० जिल्लामध्ये झापा, मोरङ र सुनसरीमा १५ निर्वाचन क्षेत्र, प्रदेश नम्बर २ मा ३२, चितवनमा ३, प्रदेश नम्बर ४ मा पर्ने  नवलपरासीको भू–भागमा २, नवलपरासीको बाँकी भाग, रुपन्देही, कपिलवस्तु, दाङ, बाँके र बर्दियामा २० तथा कैलाली र कन्चनपुरमा ८ गरी जम्मा ८० सिट मधेसका जिल्लामा हुनेछन्।नाकाबन्दी खुल्ने बताएप्रधानमन्त्री केपी शर्मा ओलीले एकदुई दिन भित्रमै का छन्।\r\nप्रधानमन्त्री निवास बालुवाटारमा सम्पादक तथा बरिष्ठ पत्रकारहरुसँग मंगलबार छलफल गर्दै उनले केहीदिनमै नाकाबन्दी खुल्ने दाबी गरेका हुन्।\r\n''एकदुई दिनमै नाकाबन्दी खुल्छ भन्ने आधार के छ? यसको विश्वस्नीयता के हो?'' भन्ने प्रश्नको जवाफमा प्रधानमन्त्री ओलीले भने,''अब आन्दोलनकारी दलहरुसँग पनि नाकाबन्दी गरिराख्न मिल्ने कारण छैन। उहाँहरुले छिट्टै नाका खोल्नुहुन्छ।''\r\nउनले भने,''नाकाबन्दी अन्त्य गर्नेबारे हामीले राष्ट्रिय अन्तराष्ट्रिय परामर्श जारी राखेका छौं।''\r\nयसअघि पनि प्रधानमन्त्री ओलीले पटकपटक चाँडै नाकाबन्दी खुल्ने बताउँदै आएपनि नाकाबन्दी खुल्न सकेको छैन। आफूले भने पनि नाकाबन्दी नखुलेको विषयलाई स्पष्ट पार्दै प्रधानमन्त्री ‌ओलीले भने, ''म मित्रहरुको मित्रतामा विश्वास गर्छु। राजनीतिक दलहंरुको इमान्दारीतामा विश्वास गर्छु। मलाई पनि नाकाबन्दी खुल्नेबारे जुन विश्वास दिलाइएको थियो। विगतमा त्यसमा ठेस लागेकै हो।''\r\nप्रधानमन्त्री ओलीको भारत भ्रमणको तयारी चलिरहेको प्रसङ्गमा ''नाकाबन्दी नखुली भारत भ्रमणमा जानुहुन्छ?'' भनी सोधिएको प्रश्नको जवाफमा उनले भने, ''परिस्थिति सामान्य नभई भारत भ्रमणमा जानु वाञ्छनीय हुँदैन। तर अब यो प्रश्न नै प्रासङ्गिक हुन्छ भन्ने मलाई लाग्दैन।''', '2016-01-26 10:17:36', 'rajesh basnet'),
(8, 'प्रधानमन्त्री ओलीको भारत भ्रमणको तयारी', 'मधेसका २० जिल्लामध्ये झापा, मोरङ र सुनसरीमा १५ निर्वाचन क्षेत्र, प्रदेश नम्बर २ मा ३२, चितवनमा ३, प्रदेश नम्बर ४ मा पर्ने  नवलपरासीको भू–भागमा २, नवलपरासीको बाँकी भाग, रुपन्देही, कपिलवस्तु, दाङ, बाँके र बर्दियामा २० तथा कैलाली र कन्चनपुरमा ८ गरी जम्मा ८० सिट मधेसका जिल्लामा हुनेछन्।प्रधानमन्त्री केपी शर्मा ओलीले एकदुई दिन भित्रमै नाकाबन्दी खुल्ने बताएका छन्।\r\nप्रधानमन्त्री निवास बालुवाटारमा सम्पादक तथा बरिष्ठ पत्रकारहरुसँग मंगलबार छलफल गर्दै उनले केहीदिनमै नाकाबन्दी खुल्ने दाबी गरेका हुन्।\r\n''एकदुई दिनमै नाकाबन्दी खुल्छ भन्ने आधार के छ? यसको विश्वस्नीयता के हो?'' भन्ने प्रश्नको जवाफमा प्रधानमन्त्री ओलीले भने,''अब आन्दोलनकारी दलहरुसँग पनि नाकाबन्दी गरिराख्न मिल्ने कारण छैन। उहाँहरुले छिट्टै नाका खोल्नुहुन्छ।''\r\nउनले भने,''नाकाबन्दी अन्त्य गर्नेबारे हामीले राष्ट्रिय अन्तराष्ट्रिय परामर्श जारी राखेका छौं।''\r\nयसअघि पनि प्रधानमन्त्री ओलीले पटकपटक चाँडै नाकाबन्दी खुल्ने बताउँदै आएपनि नाकाबन्दी खुल्न सकेको छैन। आफूले भने पनि नाकाबन्दी नखुलेको विषयलाई स्पष्ट पार्दै प्रधानमन्त्री ‌ओलीले भने, ''म मित्रहरुको मित्रतामा विश्वास गर्छु। राजनीतिक दलहंरुको इमान्दारीतामा विश्वास गर्छु। मलाई पनि नाकाबन्दी खुल्नेबारे जुन विश्वास दिलाइएको थियो। विगतमा त्यसमा ठेस लागेकै हो।''\r\nप्रधानमन्त्री ओलीको भारत भ्रमणको तयारी चलिरहेको प्रसङ्गमा ''नाकाबन्दी नखुली भारत भ्रमणमा जानुहुन्छ?'' भनी सोधिएको प्रश्नको जवाफमा उनले भने, ''परिस्थिति सामान्य नभई भारत भ्रमणमा जानु वाञ्छनीय हुँदैन। तर अब यो प्रश्न नै प्रासङ्गिक हुन्छ भन्ने मलाई लाग्दैन।''', '2016-01-22 10:16:52', 'rajesh basnet');

-- --------------------------------------------------------

--
-- Table structure for table `navigation_menu`
--

CREATE TABLE IF NOT EXISTS `navigation_menu` (
`navigation_menu_id` int(10) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `navigation_menu`
--

INSERT INTO `navigation_menu` (`navigation_menu_id`, `title`, `page_url`) VALUES
(1, 'HOME', 'home'),
(3, 'HOME LOANS', 'home_loans.php'),
(4, 'PERSONAL LOANS', 'personal_loans.php'),
(5, 'ABOUT', 'about'),
(6, 'BLOG', 'blog'),
(7, 'CONTACT', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
`id` int(10) NOT NULL,
  `firstName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userId` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `firstName`, `lastName`, `image`, `userId`) VALUES
(2, 'Rajesh', 'Basnet', 'image/test', 1),
(3, 'Rajesh2', 'Basnet', 'image/test', 2),
(4, 'Rajesh3', 'Basnet', 'image', 3);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE IF NOT EXISTS `testimonial` (
`id` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `client` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `comment`, `date`, `client`) VALUES
(3, 'SSW Exchange Reporter is an essential tool anyone trying to monitor their organizations email. We use SSW Exchange\r\n	 Reporter because it anyone trying to monitor monitormonitortheir organizations email. We use SSW ', '2016-01-20 04:25:00', 'rajesh1'),
(4, 'SSW Exchange Reporter is an essential tool anyone trying to monitor their organizations email. We use SSW Exchange\r\n	 Reporter because it anyone trying to monitor monitormonitortheir organizations email. We use SSW Exchange Reporter \r\n	', '2016-01-20 04:25:12', 'rajesh2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'rajesh_npl@yahoo.com', 'rajradha88'),
(2, 'rajesh_basnet@gmail.com', 'rajradha99'),
(3, 'rajesh_basnet@hotmail.com', 'rajraha77');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation_menu`
--
ALTER TABLE `navigation_menu`
 ADD PRIMARY KEY (`navigation_menu_id`), ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
 ADD PRIMARY KEY (`id`), ADD KEY `userId` (`userId`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `navigation_menu`
--
ALTER TABLE `navigation_menu`
MODIFY `navigation_menu_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
