-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 04:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kosharayan`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `pic` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `description` longtext COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `pic`, `description`, `title`) VALUES
(1, 'img/40.jpg', 'این دوره دوره امنیت سرور لینوکس هست در این دوره یاد میگریم چطوری یک سرور لینوکسی رو از صفر تا صد کانفیگ کنیم یعنی هم کانفیگ امنیتی و هم کانفیگ بهینه سازیاین دوره دوره امنیت سرور لینوکس هست در این دوره یاد میگریم چطوری یک سرور لینوکسی رو از صفر تا صد کانفیگ کنیم یعنی هم کانفیگ امنیتی و هم کانفیگ بهیاین دوره دوره امنیت سرور لینوکس هست در این دوره یاد میگریم چطوری یک سرور کنیم یعنی هم کانفیگ امنیتی و هم کانفیگ بهینه سازیاین دوره دوره امنیت سرور لینوکس هست در این دوره یاد میگریم چطوری یک سرور لینوکسی رو از صفر تا صد کانفیگ کنیم یعنی هم کانفیگ امنیتی و هم کانفیگ بهیاین دوره دوره امنیت سرور لینوکس هست در این دوره یاد میگریم چطوری یک سرور لینوکسی رو از صفر تا صد کانفیگ کنیم یعنی هم کانفیگ امنیتی و هم کانفیگ بهینه سازیاین دوره دوره امنیت سرور لینوکس هست در این دوره یاد میگریم چطوری یک سرور لینوکسی رو از صفر تا صد کانفیگ کنیم یعنی هم کانفیگ امنیتی و هم کانفیگ بهینه سازی است.', 'کوشا رایان');

-- --------------------------------------------------------

--
-- Table structure for table `company_member`
--

CREATE TABLE `company_member` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `family` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `takhasos` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `body` text COLLATE utf8_persian_ci NOT NULL,
  `pic` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `company_member`
--

INSERT INTO `company_member` (`id`, `name`, `family`, `takhasos`, `body`, `pic`, `email`) VALUES
(1, 'ایمان ', 'مرادی', 'مدیر داخلی', '\r\n\r\n\r\nما بر این باور هستیم که منابع انسانی ارزشمندترین سرمایه یک سازمان هستند و رشد و پیشرفت هر مجموعه ای در گرو جذب متخصص ترین و علاقمندترین افراد است.', 'img/13.jpg', 'eyman.moradi@gmail.com'),
(2, 'رضا', 'جوادی مقدم', 'برنامه نویس اپ', '\r\n\r\n\r\nما بر این باور هستیم که منابع انسانی ارزشمندترین سرمایه یک سازمان هستند و رشد و پیشرفت هر مجموعه ای در گرو جذب متخصص ترین و علاقمندترین افراد است.', 'img/29.jpg', 'reza.javady@gmail.com'),
(3, 'علی', 'نریمانی', 'برنامه نویس فرانت اند', '\r\n\r\nما بر این باور هستیم که منابع انسانی ارزشمندترین سرمایه یک سازمان هستند و رشد و پیشرفت هر مجموعه ای در گرو جذب متخصص ترین و علاقمندترین افراد است', 'img/34.jpg', ''),
(4, 'سیما', 'مرزبانی', 'برنامه نویس بک اند', 'ما بر این باور هستیم که منابع انسانی ارزشمندترین سرمایه یک سازمان هستند و رشد و پیشرفت هر مجموعه ای در گرو جذب متخصص ترین و علاقمندترین افراد است', 'img/12.jpg\"', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `pic` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `title`, `pic`) VALUES
(1, '', 'img/29.jpg'),
(2, '', 'img/34.jpg'),
(3, '', 'img/12.jpg'),
(4, '', 'img/13.jpg'),
(5, '', 'img/FAR2.jpg'),
(6, '', 'img/leo6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `eftekharat`
--

CREATE TABLE `eftekharat` (
  `id` int(11) NOT NULL,
  `pic` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `body` longtext COLLATE utf8_persian_ci NOT NULL,
  `date` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `eftekharat`
--

INSERT INTO `eftekharat` (`id`, `pic`, `body`, `date`, `title`) VALUES
(1, 'img/i.jpeg', '', '', ''),
(2, 'img/v.jpeg', '', '', ''),
(3, 'img/n.jpeg', '', '', ''),
(4, 'img/l.jpeg', '', '', ''),
(5, 'img/CE.jpg', '', '', ''),
(6, 'img/ISO-17025.jpg', '', '', ''),
(7, 'img/ISO-14001-2004.jpg', '', '', ''),
(8, 'img/ISO-9001-2008.jpg', '', '', ''),
(9, 'img/1 (1).jpg', '', '', ''),
(10, 'img/4.jpg', '', '', ''),
(11, 'img/6.jpg', '', '', ''),
(12, 'img/5.jpg', '', '', ''),
(13, 'img/Glory-Diploma.jpg', '', '', ''),
(14, 'img/i.jpeg', '', '', ''),
(15, 'img/v.jpeg', '', '', ''),
(16, 'img/n.jpeg', '', '', ''),
(17, 'img/l.jpeg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `eslider`
--

CREATE TABLE `eslider` (
  `id` int(10) NOT NULL,
  `pic` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `url` text COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `created` date NOT NULL,
  `modifi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `eslider`
--

INSERT INTO `eslider` (`id`, `pic`, `url`, `title`, `created`, `modifi`) VALUES
(1, 'img/9.jpg', '', '', '2021-09-01', '2021-09-03'),
(2, 'img/43.jpg', '', '', '2021-09-02', '2021-09-08'),
(3, 'img/50.jpg', '', '', '2021-09-07', '2021-09-08'),
(4, 'img/30.jpg', '', '', '2021-09-16', '2021-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `form_tamas`
--

CREATE TABLE `form_tamas` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `email` text COLLATE utf8_persian_ci NOT NULL,
  `mobail` text COLLATE utf8_persian_ci NOT NULL,
  `body` text COLLATE utf8_persian_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `form_tamas`
--

INSERT INTO `form_tamas` (`id`, `name`, `email`, `mobail`, `body`, `date`) VALUES
(1, 'مونا', 'پروژه', 'yari.mona67@gmail.com', 'درخواست ایجاد پروژه', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_cat`
--

CREATE TABLE `gallery_cat` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery_cat`
--

INSERT INTO `gallery_cat` (`id`, `title`) VALUES
(1, 'علمی'),
(2, 'فرهنگی'),
(3, 'هنری'),
(4, 'تکنولوژی');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_pic`
--

CREATE TABLE `gallery_pic` (
  `id` int(11) NOT NULL,
  `pic` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `body` text COLLATE utf8_persian_ci NOT NULL,
  `fk_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `gallery_pic`
--

INSERT INTO `gallery_pic` (`id`, `pic`, `body`, `fk_cat`) VALUES
(1, 'img/DSCN0805-min.jpg', '', 1),
(2, 'img/namayeshgah-98.jpg', '', 1),
(3, 'img/namayeshgah2-980.jpg', '', 4),
(4, 'img/namayeshgah1-98.jpg', '', 4),
(5, 'img/57.jpg', '', 2),
(6, 'img/namayeshgah4-98.jpg', '', 2),
(7, 'img/photo_2019-10-14_10-33-41.jpg', '', 3),
(8, 'img/68.jpg', '', 3),
(9, 'img/photo_2019-10-14_10-33-30.jpg', '', 4),
(10, 'img/65.jpg', '', 4),
(11, 'img/66.jpg', '', 1),
(12, 'img/IMG_6766-min.jpg', '', 1),
(13, 'img/photo_2019-10-14_10-33-30.jpg', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `pic` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `body` longtext COLLATE utf8_persian_ci NOT NULL,
  `media` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `fk_cat` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `date` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `pic`, `body`, `media`, `title`, `fk_cat`, `state`, `date`) VALUES
(2, 'img/41.jpg', 'شرکت ملی نفت عراق یکی از بزرگترین سازمان های دولتی این کشور می باشد که از گذشته تا به امروز سهم عمده ای را در تولید سرمایه و خدمت رسانی به مردم این کشور بر عهده داشته است. یکی از فعالیت های مهم این سازمان گاز رسانی\r\n\r\nبه مشترکین عراقی بوده است. که این امر با توجه به از بین رفتن زیر ساخت ها پس از جنگ و نبود سیستم های محاسبات مصرف مشترکین موانع بزرگی را پیش روی این سازمان قرار داده بود . در سال 1395 پس از عقد قرار داد این سازمان با شرکت های بین المللی روند گاز رسانی و تحویل کنتور های هوشمند به مشترکین از سوی شرکت گاز آغاز گردید، این شرکت برای اولین بار در نظر داشت با آنلاین نمودن سیستم مدیریت کنتور ها و دریافت هزینه قبض گاز و برق مصرفی مشترکین به صورت اعتباری باعث کاهش هزینه های گردد . لذا می بایست  با گسترش شبکه توزیع سیستم های نرم افزاری جهت ارتباط با کنتور های مشترکین و سرور های مرکزی برنامه ریزی می کرد،. در همین راستا گروه بین المللی بالوین پس از شروع اجرای پروژه و عقد قرارداد با شرکت زانا گاز عراق مسئولیت طراحی و برنامه نویسی این سیستم را بر عهده گرفت و افتخار این را داشت تا با اتمام این پروژه، برگ سبزی را به آلبوم افتخارات خود اضافه نماید. امیدواریم نماینده خوبی برای کشور عزیزمان ایران در عرصه های بین المللی باشیم ', '', 'سامانه سوابق بیمه', 1, 0, '1400/3/25'),
(3, 'img/49.jpg', 'تجهیز امکانات اورژانس ، تهیه  بالگرد دید در شب، آموزش، اعزام افراد مسلط به زبان به کشورهای همسایه از توافقات سازمان بهداشت جهانی و سازمان اورژانس کشوربود.\r\n\r\n\r\n به گزارش مرکز اطلاع رسانی سازمان اورژانس کشور، رئیس سازمان اورژانس کشور امروز دوشنبه 14 تیرماه با نماینده سازمان بهداشت جهانی دیدار و گفتگو کرد.\r\n\r\n\r\n          دکترکولیوند در این دیدار گفت: اورژانس کشور از 5 سال گذشته تبدیل به سازمان شد تا عملیاتی تر بتواند کارهای خود را انجام دهد.\r\n\r\n  وی افزود: این سازمان مجهز به گروه ویژه عملیاتی است که علاوه برخدمات اورژانس و فوریت های پزشکی در بحران ها نیز مدیریت خوبی را انجام می دهد.', '', 'سایت اورژانس بیمارستان', 2, 0, '1400/4/20'),
(4, 'img/46.jpg', 'ابلیت‌های جدید\r\n? استخدام تضمینی نیروی کار?\r\n\r\n✅ اضافه شدن بخش های پیشنهادی کاربران\r\nاز جمله محدوده محل کار\r\n\r\n✅ بهبود کارایی برنامه\r\n\r\n✅ رفع مشکلات گزارش شده\r\n', '', 'نرم افزار کاریابی مشاغل', 3, 0, '1400/3/23'),
(5, 'img/48.jpg', 'دلیل اصلی فراگیر شدن نوبت‌دهی اینترنتی در مراکز درمانی، جلوگیری از اتلاف وقت بیماران و مشکلات مربوط به گرفتن نوبت از پزشکان، از سمت بیماران بوده است. از طرف دیگر، این سیستم‌ها انگیزه اصلی پزشکان و همچنین برای کاهش وابستگی به پرسنل مطب یا کلینیک و تمرکز پرسنل بر روی خدمات صرفا پزشکی می‌باشد. به همین خاطر امروزه شاهد آن هستیم که هم بیماران و هم پزشکان به استفاده از سیستم نوبت‌دهی اینترنتی علاقه‌مند هستند.', '', 'سامانه نوبت دهی', 4, 0, '1400/3/23');

-- --------------------------------------------------------

--
-- Table structure for table `news_cat`
--

CREATE TABLE `news_cat` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_cat`
--

INSERT INTO `news_cat` (`id`, `title`) VALUES
(1, '1ورزش'),
(2, 'علمی'),
(3, 'فرهنگی'),
(4, 'هنری'),
(5, 'تکنولوژی');

-- --------------------------------------------------------

--
-- Table structure for table `porsesh_body`
--

CREATE TABLE `porsesh_body` (
  `id` int(10) NOT NULL,
  `fk_question` int(10) NOT NULL,
  `body` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `date` datetime NOT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `porsesh_body`
--

INSERT INTO `porsesh_body` (`id`, `fk_question`, `body`, `title`, `date`, `name`, `email`) VALUES
(17, 31, 'چگونه میتوان در پروژه شرکت کرد', 'نحوه مشارکت در پروژه', '1400-07-18 18:01:12', 'مونا', 'yari.mona67@gmail.com'),
(18, 32, 'در چه زمانی پروزه تحویل داده میشود', 'زمان تحویل پروژه', '1400-07-18 18:02:10', 'سارا', 'sa.re45@gmail.com'),
(19, 33, 'مدارک لازم جهت استخدام در شرکت کوشا رایان چه میباش', 'استخدام', '1400-07-18 18:03:37', 'علی', 'yari.m@chmail.ir'),
(20, 34, 'زمان برگزاری کلاس های آموزشی در کوشا رایان', 'کلاس اموزشی', '1400-07-18 18:05:55', 'سحر', 'yari.m@gmail.com'),
(38, 31, 'مچکرم', '', '1400-07-19 14:00:53', '', ''),
(39, 34, 'ممنونم از لطف شما', '', '1400-07-19 14:02:15', '', ''),
(40, 34, 'ن', '', '1400-07-19 14:03:28', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `porsesh_pasokh`
--

CREATE TABLE `porsesh_pasokh` (
  `id` int(11) NOT NULL,
  `porsesh` text COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `coder` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `date` datetime NOT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `porsesh_pasokh`
--

INSERT INTO `porsesh_pasokh` (`id`, `porsesh`, `title`, `coder`, `date`, `name`, `email`, `state`) VALUES
(31, 'چگونه میتوان در پروژه شرکت کرد', 'نحوه مشارکت در پروژه', '75c231a166a4', '1400-07-18 18:01:12', 'مونا', 'yari.mona67@gmail.com', 0),
(32, 'در چه زمانی پروزه تحویل داده میشود', 'زمان تحویل پروژه', 'a93d28cf3bd8', '1400-07-18 18:02:10', 'سارا', 'sa.re45@gmail.com', 0),
(33, 'مدارک لازم جهت استخدام در شرکت کوشا رایان چه میباشد', 'استخدام', '2c92fc7c54b3', '1400-07-18 18:03:37', 'علی', 'yari.m@chmail.ir', 0),
(34, 'زمان برگزاری کلاس های آموزشی در کوشا رایان', 'کلاس اموزشی', '5e62d9', '1400-07-18 18:05:55', 'سحر', 'yari.m@gmail.com', 0),
(35, 'a', 'b', 'a', '1400-03-23 00:00:00', 'dc', 'sd', 0),
(36, 'gvgb', 'fgfg', '8e48c3', '1400-07-18 22:53:36', 'mona', 'yari.mona67@gmail.com', 0),
(37, 'لبلبلبلبلقب', 'سلام', '5fe618', '1400-07-19 12:53:06', 'امین', 'sa.re45@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `body` text COLLATE utf8_persian_ci NOT NULL,
  `price` double NOT NULL,
  `created` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `body`, `price`, `created`) VALUES
(1, 'سیستم مدیریت محتوا دانشگاهی (UCMS)', 'UCMS یک سیستم مدیریت محتوای دانشگاهی حرفه ای با همه امکانات مورد نیاز یک دانشگاه معتبر به منظور اطلاع رسانی فعالیتها و برنامه های خود است که بصورت کامل توسط شرکت معماران عصر ارتباط طراحی و تولید شده است و در آن از هیچ سیستم داخلی و خارجی دیگر استفاده نشده است.', 45000000, '1400/3/23'),
(2, 'نرم افزار مدیریت و کنترل پروژه زرافه', 'اختیار برای کسب اهداف یک پروژه امری تخصصی و حرفه‌ای است تا جایی که امروزه رشته‌ای به نام مدیریت پروژه در دانشگاه‌های معتبر دنیا تدریس می‌شود. در یک سامانه مدیرت پروژه همچون زرافه، افراد در سطوح مختلف پروژه می‌توانند از وظایف خود اطلاع یافته، گزارش عملکرد و ساعات کاری خود را به اطلاع مدیر رسانده و با سایر اعضای پروژه در ارتباط باشند. سامانه مدیریت پروژه زرافه با تعرفه‌ها و بسته‌های متفاوتی که دارد این امکان را به مدیر پروژه می‌دهد که ضمن انتخاب بسته مورد نیاز و مناسب خود بتواند به راحتی بر نحوه پیشرفت پروژه خود نظارت داشته باشد.', 31000000000, '1400/3/23'),
(3, 'نرم افزار برگزاری ازمون برخط', 'امکان ایجاد سوالات چند گزینه ای (با تعداد گزینه های قابل انتخاب)\r\n- امکان تعریف گزینه ها و مشخص کردن پاسخ صحیح توسط مدیر ارشد نرم افزار\r\n- اعلام نتیجه آزمون در انتهای آن به کاربر و بصورت آنلاین\r\n- تعیین حداقل نمره قبولی و تهیه گزارش از قبول شدگان و مردودین توسط نرم افزار\r\n- تهیه گزارشهای متنوع از شرکت کنندگان ، قبول شدگان یا مردودین بر اساس سن، جنس،میزان تحصیلات و ....\r\n- تهیه گزارشهای متنوع از پاسخ های صحیح و نادرست ارائه شده در هر آزمون\r\n- امکان برگزاری چندین آزمون مختلف ودارای ترتیب مشخص برای هر کاربر\r\n- استفاده از زبان برنامه نویسی PHP و بانک اطلاعات MySQL', 55000000, '1400/3/23'),
(4, 'نرم افزاری برای دانشگاه ، مراکز، ادارات  ', '	از طریق این سامانه نرم افزاری می توان برای دانشگاه و  دانشکده ها، مراکز، ادارات و ... وب سایت هایی یکپارچه و با امکانات و راهبران متعدد طراحی و ایجاد نمود.\r\nهمه مراکز علمی،محسوب می شوند. این سامانه تاکنون در دهها دانشگاه معتبر پیاده سازی شده \r\nاز طریق این سامانه نرم افزاری می توان برای دانشگاه و  دانشکده ها، مراکز، ادارات و ... وب سایت هایی یکپارچه و با امکانات و راهبران متعدد طراحی و ایجاد نمودهمه مراکز علمی،محسوب می شوند. این سامانه در دهها دانشگاه معتبر پیاده سازی شده \r\nهمه مراکز علمی،محسوب می شوند. این سامانه تاکنون در دهها دانشگاه معتبر پیاده سازی شده \r\nهمه مراکز علمی،محسوب می شوند. این سامانه تاکنون در دهها دانشگاه معتبر پیاده سازی شده است', 520000000, '1400/5/20'),
(5, 'نرم افزار مدیریت طرح های ملی', 'دسترس پذیری (در حوزه استانداردهای دسترس پذیری الکترونیکی، شرکت رجا مفتخر به ارائه خدمات مشاوره در این حوزه به هفت بانک و چهار شرکت بیمه ای در کشور می باشد.\r\nخدمات مشاوره 5G (در چند سال اخیر رشد ترافیک داده به میزان چند صد برابر، افزایش تعداد دستگاه‌ها / تجهیزات متصل به شبکه‌های بی‌سیم به میزان چند ده برابر و متنوع شدن سرویس‌های مورد تقاضای کاربران، توسعه شبکه‌های فعلی را فراتر از نسل چهار و یا همان شبکه‌های نسل پنجم ۵G مطرح می‌سازد. در همین راستا، شرکت فناوری اطلاعات رجا خدمات مشاوره ای خود را به منظور بررسی نسل پنجم شبکه ارتباطی از منظر فنی و اقتصادی راه اندازی نموده است)\r\nدولت الکترونیک (شرکت رجا، با توجه به تجربیات خود در راه اندازی بیش از یکصد سرویس الکترونیکی در پنج سال گذشته، در حوزه ارائه خدمات مشاوره دولت الکترونیک نیز فعال می باشد و در این زمینه به سازمان ها و نهادهایی مانند کمیسیون اجتماعی و دولت الکترونیک دولت، سازمان فناوری اطلاعات، نهاد ریاست جمهوری، معاونت توسعه مدیریت سابق، وزارت خانه ها و… خدمات مشاوره در سطوح ملی و سازمانی ارائه نموده است)', 520000000, '1400/6/16'),
(6, 'سامانه نرم افزاری مدیریت پروژه کلک', 'مدیریت پروژه بکارگیری دانش، مهارت ها و ابزار های لازم در جریان اجرای فعالیت ها، به منظور رفع نیاز ها و انتظارات متولیان از اجرای پروژه است.\r\nسیستم و نرم افزار مدیریت و کنترل پروژه کلک، در اجرای این مهم از دو بازوی قدرتمند برنامه‌ریزی و کنترل پروژه بهره می‌گیرد و لذا به ابزاری کاربردی و قدرتمند برای کنترل زمان، کنترل هزینه و مدیریت منابع و نیروی انسانی تبدیل گردیده است.\r\nهدف اصلی کلک ایجاد بستری مطمئن و مناسب برای مدیریت پروژه با استفاده از مدیریت برنامه ها ، کنترل منابع و .... بوده است. که برای دستیابی به این هدف تلاش نموده ایم تا بسیاری از حوزه های 9گانه PMBOK را در نرم افزار پوشش دهیم.\r\nنرم افزار بر روی یک سرور مرکزی متصل به اینترنت نصب شده و در هر زمان و در هر مکان قابل دسترسی می باشد. نرم افزار کنترل پروژه به صورت Server Side عمل نموده و بصورت کامل بر روی وب اجرا و پیاده سازی گردیده است.\r\nسیستم به نوعی طراحی شده که کاربران آن حتی با کمترین دانش مدیریت پروژه قادر خواهند بود به سادگی پروژه ها ، وظایف ، منابع و ... را برنامه ریزی کنند و از روند انجام کار پروژه گزارش گیری و مستندات خود را مدیریت نمایند.\r\n\r\n', 420000000, '1400/3/23'),
(7, 'نرم افزار بیمه اتکایی', 'ارزش آفريني و كسب سود منطقي و پايدار ؛\r\nشرکت از طریق جذب و اداره ریسک های مازاد بر ظرفیت شرکتهای بیمه داخلی و بنا به اقتضای شرایط از بازارهای منطقه ای و بین المللی، همچنین ارایه خدمات تخصصی و تکمیلی بیمه ای به صورت حرفه ای و متمایز، به طور مستمر ارزش آفرینی می کند. سود مناسب و پایدار شرکت با کوشش در ایجاد پرتفویی متوازن و سودآور از بیمه های اتکایی و سرمایه گذاری منابع مالی ایجاد خواهد شد و ارزش آفرینی شرکت در” سود سالانه ” و “ارزش افزوده سهام”تجلی می یابد.\r\nايفاي مسئوليت ملي و اجتماعي از طريق افزايش توان نگهداري صنعت بيمه ؛\r\nشرکت در کنار پایش و تامین منافع صاحبان سهام با افزایش ظرفیت بیمه ای و میزان نگهداری بازار داخلی، در توسعه صنعت بیمه و اقتصاد کشور مشارکت و با تلاش در جهت بهبود تراز ارزی مبادلات بیمه ای به مسئولیت ملی ، اجتماعی و حرفه ای خود عمل می نماید.', 3200000, '1400/6/25'),
(8, 'سیستم ایجاد و مدیریت رایگان وبسایت', ' یک سرویس مدیریت محتوای سایت آنلاین است. شما بدون داشتن تخصص در طراحی وب می‌توانید یک وب سایت داینامیک کاملا حرفه‌ای ایجاد کرده و محتوای آن را مدیریت کنید. این سیستم مدیریت محتوا توسط شرکت معماران عصر ارتباط طراحی و تولید شده‌است.', 3200000, '1400/5/20');

-- --------------------------------------------------------

--
-- Table structure for table `product_pic`
--

CREATE TABLE `product_pic` (
  `id` int(11) NOT NULL,
  `pic` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `fk_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `product_pic`
--

INSERT INTO `product_pic` (`id`, `pic`, `fk_product`) VALUES
(1, 'img/19.png', 1),
(2, 'img/17.png', 2),
(7, 'img/41.jpg', 3),
(8, 'img/22.png', 4),
(9, 'img/p7.png', 5),
(10, 'img/p8 (1).png', 6),
(11, 'img/18.jpg', 7),
(12, 'img/p9.png', 8);

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `body` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `title`, `body`) VALUES
(3, 'مالکیت حقوق مادی و معنوی آموزش ها در اختیار کلیک سایت است', 'تمامی آموزش های موجود،در وزارت ارشاد به نام کلیک سایت به ثبت رسیده است و از اینرو هرگونه سواستفاده و یا کپی از مطالب و فیلمها،به سادگی قابل پیگیری خواهد بود.قطعا کلیک سایت در راستای حفظ حق و حقوق مدرسین دلسوز و پرتلاش خود هیچگونه دریغی را اعمال نخواهد کرد و از کوچکترین حقوق ایشان چشم پوشی نخواهد نمود. چرا که در نهادهای مربوطه،تمامی مجموعه های آموزشی -اعم از قدیم و جدید- به نام و تحت مالکیت کلیک سایت می باشد.'),
(4, 'کپی برداری از محتوا ،خلاف قانون و شرع', 'جهت حفظ حقوق مدرسین و جلوگیری از کپی برداری و سرقت محتوا،کلیک سایت تمامی مجموعه های موجود را در وزارت ارشاد اسلامی به ثبت می رساند. این امر،پیگیری قانونی هرگونه سو استفاده احتمالی اشخاص را میسر و هموار می سازد.'),
(5, 'خرید پستی و دریافت پکیج', 'تمامی سفارشات ظرف 24 الی 48 ساعت کاری پس از ثبت سفارش به اداره پست تحویل داده شده و بین 2 الی 4 روز بعد به مقصد خواهد رسید. خریدار موظف است ظرف حداکثر ده روز پس از دریافت پکیج، در صورت وجود هرگونه مشکل در محصول، مراتب را به مسئولین مربوطه در سایت از طریق ایمیل یا پشتیبانی آنلاین سایت و یا تلگرام اطلاع رسانی نماید. لازم به ذکر است پس از گذشت این مدت زمان، هر گونه موری بر عهده مشتری می باشد. همچنین کدهای تخفیف ارائه شده در سایت به مدت ده روز فعال می باشد و در صورت مفقود شدن کد تخفیف هدیه و یا عدم استفاده از ان در طی مدت مقرر، مسئولیت بر عهده کاربر می باشد.'),
(6, 'عدم بازنشر و سواستفاده از محتوا', 'تمامی محتوا و فیلم های آموزشی موجود،نتیجه ساعت ها زمان و تلاش و رنج و زحمت مدرسین این مجموعه است. از اینرو،شما با استفاده از آموزش ها،می پذیرید که به هیچ عنوان مطالب را بازنشر،مپی برداری،انتقال ویا مورد استفاده تجاری - در هر شکل و قالب- قرار ندهید. بدون تردید،حقوق مادی و معنوی این آموزش ها کاملا متعلق به کلیک سایت و مدرسین کلیک سایت می باشد. در صورت مشاهده هرگونه کپی برداری،از طریق مراجع قضایی موضوع مورد پیگیری قرار خواهد گرفت.');

-- --------------------------------------------------------

--
-- Table structure for table `tamas`
--

CREATE TABLE `tamas` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `mobail` text COLLATE utf8_persian_ci NOT NULL,
  `watsapp` text COLLATE utf8_persian_ci NOT NULL,
  `telegram` text COLLATE utf8_persian_ci NOT NULL,
  `instagram` text COLLATE utf8_persian_ci NOT NULL,
  `address` text COLLATE utf8_persian_ci NOT NULL,
  `lat` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `lon` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `pic` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tamas`
--

INSERT INTO `tamas` (`id`, `email`, `mobail`, `watsapp`, `telegram`, `instagram`, `address`, `lat`, `lon`, `pic`) VALUES
(1, 'koosharayan@gmail.com', '323369785', 'koosha', 'hoosharayan', 'koosharayan.1400', 'ایلام.شهرستان ایوان.خیابان سلمان فارسی', '', '', 'img/51.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_member`
--
ALTER TABLE `company_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eftekharat`
--
ALTER TABLE `eftekharat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eslider`
--
ALTER TABLE `eslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_tamas`
--
ALTER TABLE `form_tamas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_cat`
--
ALTER TABLE `gallery_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_pic`
--
ALTER TABLE `gallery_pic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cat` (`fk_cat`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_News_NewsCat` (`fk_cat`);

--
-- Indexes for table `news_cat`
--
ALTER TABLE `news_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `porsesh_body`
--
ALTER TABLE `porsesh_body`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-question` (`fk_question`),
  ADD KEY `fk-question_2` (`fk_question`),
  ADD KEY `fk-question_3` (`fk_question`),
  ADD KEY `fk-question_4` (`fk_question`),
  ADD KEY `fk-question_5` (`fk_question`),
  ADD KEY `fk-question_6` (`fk_question`);

--
-- Indexes for table `porsesh_pasokh`
--
ALTER TABLE `porsesh_pasokh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_pic`
--
ALTER TABLE `product_pic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-product` (`fk_product`),
  ADD KEY `fk-product_2` (`fk_product`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tamas`
--
ALTER TABLE `tamas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_member`
--
ALTER TABLE `company_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `eftekharat`
--
ALTER TABLE `eftekharat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `eslider`
--
ALTER TABLE `eslider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `form_tamas`
--
ALTER TABLE `form_tamas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_cat`
--
ALTER TABLE `gallery_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery_pic`
--
ALTER TABLE `gallery_pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news_cat`
--
ALTER TABLE `news_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `porsesh_body`
--
ALTER TABLE `porsesh_body`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `porsesh_pasokh`
--
ALTER TABLE `porsesh_pasokh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_pic`
--
ALTER TABLE `product_pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tamas`
--
ALTER TABLE `tamas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery_pic`
--
ALTER TABLE `gallery_pic`
  ADD CONSTRAINT `gallery_pic_ibfk_1` FOREIGN KEY (`fk_cat`) REFERENCES `gallery_cat` (`id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `FK_News_NewsCat` FOREIGN KEY (`fk_cat`) REFERENCES `news_cat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `porsesh_body`
--
ALTER TABLE `porsesh_body`
  ADD CONSTRAINT `porsesh_body_ibfk_1` FOREIGN KEY (`fk_question`) REFERENCES `porsesh_pasokh` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_pic`
--
ALTER TABLE `product_pic`
  ADD CONSTRAINT `product_pic_ibfk_1` FOREIGN KEY (`fk_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
