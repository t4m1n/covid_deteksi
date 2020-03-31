/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.24 : Database - covid
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`covid` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `covid`;

/*Table structure for table `daerah` */

DROP TABLE IF EXISTS `daerah`;

CREATE TABLE `daerah` (
  `id_daerah` int(3) NOT NULL AUTO_INCREMENT,
  `desc_daerah` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_daerah`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `daerah` */

insert  into `daerah`(`id_daerah`,`desc_daerah`) values (0,'---'),(1,'Luar Negeri'),(2,'Jakarta'),(3,'Bandung'),(4,'Yogyakarta'),(5,'Depok'),(6,'Tanggerang'),(7,'Bogor'),(8,'Manado'),(9,'Pontianak'),(10,'Solo'),(11,'Medan'),(12,'Aceh'),(13,'dan lain-lain'),(15,'Makasar'),(16,'Jawa Timur');

/*Table structure for table `jawab` */

DROP TABLE IF EXISTS `jawab`;

CREATE TABLE `jawab` (
  `id_jawab` varchar(64) NOT NULL,
  `id_res` varchar(64) DEFAULT NULL,
  `soal11` int(1) DEFAULT NULL,
  `soal12` int(1) DEFAULT NULL,
  `soal13` int(1) DEFAULT NULL,
  `soal21` int(1) DEFAULT NULL,
  `soal22` int(2) DEFAULT NULL,
  `soal23` int(1) DEFAULT NULL,
  `soal24` int(1) DEFAULT NULL,
  `soal25` int(1) DEFAULT NULL,
  `soal26` int(1) DEFAULT NULL,
  `id_result` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_jawab`),
  KEY `id_res` (`id_res`),
  KEY `id_result` (`id_result`),
  CONSTRAINT `jawab_ibfk_1` FOREIGN KEY (`id_res`) REFERENCES `responden` (`id_res`),
  CONSTRAINT `jawab_ibfk_2` FOREIGN KEY (`id_result`) REFERENCES `result` (`id_result`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jawab` */

insert  into `jawab`(`id_jawab`,`id_res`,`soal11`,`soal12`,`soal13`,`soal21`,`soal22`,`soal23`,`soal24`,`soal25`,`soal26`,`id_result`) values ('5e8171a8e5b41','5e8171a8e5b41',1,1,1,1,7,1,1,1,1,1),('5e817b6859e68','5e817b6859e68',1,1,1,1,7,0,0,0,0,1),('5e817c7368fc7','5e817c7368fc7',1,0,0,0,0,0,1,0,0,1),('5e817c8fe9a26','5e817c8fe9a26',0,1,0,0,0,0,1,0,0,1),('5e817caf8313b','5e817caf8313b',1,0,0,1,2,0,0,0,0,2),('5e817cbf91a57','5e817cbf91a57',0,1,0,1,2,0,0,0,0,2),('5e817ccdf0664','5e817ccdf0664',0,0,0,1,2,0,0,0,0,3),('5e817ce501750','5e817ce501750',0,0,0,0,0,0,0,0,0,3),('5e817e515f055','5e817e515f055',0,0,0,0,0,0,0,0,0,3),('5e819a1477d8c','5e819a1477d8c',1,1,1,0,0,0,0,0,0,3),('5e829e334ee05','5e829e334ee05',1,1,0,1,2,1,1,1,1,3),('5e82a2bbbb7c5','5e82a2bbbb7c5',1,1,0,1,4,0,0,0,0,2),('5e82a2e97ba6a','5e82a2e97ba6a',0,0,0,0,4,1,0,0,0,4);

/*Table structure for table `kel` */

DROP TABLE IF EXISTS `kel`;

CREATE TABLE `kel` (
  `id_kel` int(3) NOT NULL AUTO_INCREMENT,
  `desc_kel` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kel`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `kel` */

insert  into `kel`(`id_kel`,`desc_kel`) values (1,'GEJALA'),(2,'FAKTOR RISIKO');

/*Table structure for table `responden` */

DROP TABLE IF EXISTS `responden`;

CREATE TABLE `responden` (
  `id_res` varchar(64) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jkel` char(1) DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `wa` varchar(15) DEFAULT NULL,
  `alamat` text,
  PRIMARY KEY (`id_res`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `responden` */

insert  into `responden`(`id_res`,`nama`,`jkel`,`tgl_lhr`,`wa`,`alamat`) values ('5e8171a8e5b41','TEST ROL','L','2020-03-05','123131','jl ikur koto, RT/RW 3/8\r\nKel. Koto Panjang Ikua Koto, Kec. Koto Tangah'),('5e817b6859e68','Zulfiqar','L','2020-03-06','123123','jl ikur koto, RT/RW 3/8\r\nKel. Koto Panjang Ikua Koto, Kec. Koto Tangah'),('5e817c7368fc7','Zulfiqar','L','2020-03-01','123','jl ikur koto, RT/RW 3/8\r\nKel. Koto Panjang Ikua Koto, Kec. Koto Tangah'),('5e817c8fe9a26','Zulfiqar','L','2020-03-01','123','jl ikur koto, RT/RW 3/8\r\nKel. Koto Panjang Ikua Koto, Kec. Koto Tangah'),('5e817caf8313b','Zulfiqar','L','2020-03-01','123','jl ikur koto, RT/RW 3/8\r\nKel. Koto Panjang Ikua Koto, Kec. Koto Tangah'),('5e817cbf91a57','Zulfiqar','L','2020-03-01','123','jl ikur koto, RT/RW 3/8\r\nKel. Koto Panjang Ikua Koto, Kec. Koto Tangah'),('5e817ccdf0664','Zulfiqar','L','2020-03-01','123','jl ikur koto, RT/RW 3/8\r\nKel. Koto Panjang Ikua Koto, Kec. Koto Tangah'),('5e817ce501750','Zulfiqar','L','2020-03-01','123','jl ikur koto, RT/RW 3/8\r\nKel. Koto Panjang Ikua Koto, Kec. Koto Tangah'),('5e817e515f055','Zulfiqar','L','2020-03-01','123','jl ikur koto, RT/RW 3/8\r\nKel. Koto Panjang Ikua Koto, Kec. Koto Tangah'),('5e819a1477d8c','Popo','P','2020-03-04','0852123123123','jl ikur koto, RT/RW 3/8\r\nKel. Koto Panjang Ikua Koto, Kec. Koto Tangah'),('5e829e334ee05','Zulfiqar','L','2020-03-04','123456789','jl ikur koto, RT/RW 3/8\r\nKel. Koto Panjang Ikua Koto, Kec. Koto Tangah'),('5e82a2bbbb7c5','Zulfiqar','L','2020-03-04','12331167678','jl ikur koto, RT/RW 3/8\r\nKel. Koto Panjang Ikua Koto, Kec. Koto Tangah'),('5e82a2e97ba6a','Zulfiqar','L','2020-03-19','335235235235','jl ikur koto, RT/RW 3/8\r\nKel. Koto Panjang Ikua Koto, Kec. Koto Tangah');

/*Table structure for table `result` */

DROP TABLE IF EXISTS `result`;

CREATE TABLE `result` (
  `id_result` int(1) NOT NULL AUTO_INCREMENT,
  `desc_result` varchar(150) DEFAULT NULL,
  `img` varchar(15) DEFAULT NULL,
  `saran` text,
  `edukasi` text,
  `bg` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_result`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `result` */

insert  into `result`(`id_result`,`desc_result`,`img`,`saran`,`edukasi`,`bg`) values (1,'Pasien Dalam Pengawasan (PDP)','PDP.png','<b>HUBUNGI SEGERA</b> nomor kontak layanan kesehatan yang tersedia / terdekat dan ikuti instruksi selanjutnya.','Terapkan Perilaku Hidup Bersih dan Sehat (PHBS), rajin cuci tangan sesuai standar kesehatan, istirahat jika kondisi tidak sehat, hindari keramaian, jaga jarak 1 meter dari orang disekitar dan memakai masker jika terkena batuk dan pilek.','bg-danger'),(2,'Orang Dalam Pemantauan (ODP)','ODP.png','<b>LAPORKAN</b> melalui kontak layanan kesehatan yang tersedia dan <b>WAJIB ISOLASI DIRI MANDIRI DI RUMAH</b>','Terapkan Perilaku Hidup Bersih dan Sehat (PHBS), rajin cuci tangan sesuai standar kesehatan, istirahat jika kondisi tidak sehat, hindari keramaian, jaga jarak 1 meter dari orang disekitar dan memakai masker jika terkena batuk dan pilek.','bg-warning'),(3,'Bukan ODP / PDP','Sehat.png','Alhamdulillah Anda sehat dan bukan kategori terpapar Virus COVID-19.','Terapkan Perilaku Hidup Bersih dan Sehat (PHBS), rajin cuci tangan sesuai standar kesehatan, istirahat jika kondisi tidak sehat, hindari keramaian, jaga jarak 1 meter dari orang disekitar dan memakai masker jika terkena batuk dan pilek. Tingkatkan rasa syukur kepada Allah SWT karena sudah diberi kesehatan.','bg-success'),(4,'Orang Tanpa Gejala (OTG)','OTG.png','<B>WAJIB ISOLASI DIRI MANDIRI DI RUMAH</B> setidaknya 14 hari dan lakukan pemantauan kesehatan mandiri jika terjadi perburukan kondisi dan muncul gejala segera laporkan ke nomor kontak layanan yang tersedia.','Terapkan Perilaku Hidup Bersih dan Sehat (PHBS), rajin cuci tangan sesuai standar kesehatan, istirahat jika kondisi tidak sehat, hindari keramaian, jaga jarak 1 meter dari orang disekitar dan memakai masker jika terkena batuk dan pilek. Tingkatkan rasa syukur kepada Allah SWT karena sudah diberi kesehatan.','bg-primary');

/*Table structure for table `tanya` */

DROP TABLE IF EXISTS `tanya`;

CREATE TABLE `tanya` (
  `id_tanya` int(3) NOT NULL AUTO_INCREMENT,
  `id_kel` int(3) DEFAULT NULL,
  `desc_tanya` text,
  PRIMARY KEY (`id_tanya`),
  KEY `tanya_ibfk_1` (`id_kel`),
  CONSTRAINT `tanya_ibfk_1` FOREIGN KEY (`id_kel`) REFERENCES `kel` (`id_kel`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tanya` */

insert  into `tanya`(`id_tanya`,`id_kel`,`desc_tanya`) values (1,1,'Demam / Riwayat Demam'),(2,1,'Batuk / Pilek / Nyeri Tenggorokan'),(3,1,'Sesak Nafas'),(4,2,'Perjalanan Ke Luar Negeri / Kota Terjangkit'),(5,2,'Riwayat kontak erat dengan kasus positif COVID-19'),(6,2,'Bekerja atau mengunjungi fasilitas kesehatan yang berhubungan dengan pasien positif COVID-19'),(7,2,'Memiliki riwayat kontak dengan hewan penular (Jika hewan penular sudah teridentifikasi)'),(8,2,'Memiliki demam lebih 38 Derajat Calcius atau ada riwayat demam, memiliki riwayat perjalanan ke luar negeri atau kontak dengan orang yang memiliki riwayat perjalanan ke luar negeri');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
