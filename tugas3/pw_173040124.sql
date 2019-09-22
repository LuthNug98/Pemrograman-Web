-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 05:31 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_173040124`
--

--
-- Dumping data for table `pahlawan_nasional`
--

INSERT INTO `pahlawan_nasional` (`id`, `nama`, `gambar`, `lahir`, `wafat`, `sejarah_singkat`) VALUES
(1, 'Soekarno', 'soekarno.jpg', 'Surabaya, 6 Juni 1901\r\n', '21 Juni 1970', 'Pahlawan nasional yang paling menginspirasi bangsa indonesia. Selain sebagai tokoh proklamator dan Presiden indonesia yang pertama, Soekarno juga dikenal sebagai pencetus dasar negara, Pancasila.Tidak hanya itu saja, dia juga adalah seorang orator yang ahndalm dan politikus cerdas yang menguasai delapan bahasa. Tokoh bangsa yang dikenal dengan sapaan Bung Karno ini selalu bisa menggetarkan hati para pendengarnya saat berpidato.'),
(2, 'Jendral Soedirman', 'soedirman.jpg', 'Purbalingga, 24 Januari 1916', '29 Januari 1950', 'Diangkat sebagai Panglima besar TKR (sekarang TNI) pada  tanggal 18 Desember 1948 dengan pangkat jendral, Soedirman pun langsung menghadapi Agresi militer II oleh Belanda ke yogyakarta sehari kemudian. Bersama dengan pasukan kecil dan dokter pribadi, dia memulai perlawanan gerilya selama 7 bulan. Dia juga mengkomadi kegiatan militer di jawa, termasuk Serangan Umum 1 Maret 1949 di Yogyakarta dipimpin oleh Lethan Kolonel Soeharto.'),
(3, 'R.A Kartini', 'kartini.jpg', 'jepara ,21 April 1879', '17 September 1904', 'Salah seorang pahlawan nasional perempuan yang telah menghabiskan sebagian hidupnya untuk memperjuangkan kesetraan hak kaumnya. RA Kartini memang merupakan seorang ningrat yang memiliki pemikiran moderat.Dia pun mendirikan sekolah khusus untuk kaum perempuan bernama sekolah kartini di Semarang pada tahun 1912.Untuk mengenang perjuangannya, tanggal lahirnya diperangati sebagai hari kartini.'),
(4, 'Pangeran Diponegoro', 'pangeran.jpg', 'yogyakarta ,11 November 1785', '8 Januari 1855', 'Pahlawan nasional yang dikenal karena memimpin perang di jawa pada kurun waktu 1825-1830, yang tercatat sebagai perang dengan korban paling banyak dalam sejarah indonesia. Selama 5 tahun, perang teruka terjadi di sejumlah daerah utama di hampir seluruh pulau jawa. Belanda pun sempat kesulitan menaklukan pangeran diponegoro, dimana ribuan serdadu mereka menjadi korban dan menyebabkan kerugian 20 juta gulden.'),
(5, 'Ki Hajar Dewantara', 'hajar.jpg', 'yogyakarta ,2 Mei 1889', '26 April 1959', 'Nama Ki Hajar Dewantara identik dengan dunia pendidikan indonesia. Bahkan, hari kelahirannya yang memiliki nama asli Raden Mas Soewardi Soerjaningrat ini pada tanggal 2 Mei pun diperangati sebagai hari pendidikan nasional. kiprahnya dalam dunia pendidikan adalah sebagai pendiri perguruan taman siswa yang diperuntukan untuk para penduduk pribumu pada zaman penjajahan belanda.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
