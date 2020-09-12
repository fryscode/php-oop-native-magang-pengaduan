-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2019 at 01:22 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p2tp2a`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` int(3) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `pendidikan` varchar(35) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`nik`, `nama`, `umur`, `jk`, `alamat`, `pendidikan`, `no_telp`, `pekerjaan`) VALUES
('3211162109940004', 'Kinar', 23, 'L', 'Karawang Timur Telukjambe timur 01 01', 'SLTP/Sederajat', '085694726487', 'Wiraswasta'),
('321512xx10', 'disamarkan(KJ)', 37, 'P', 'Karawang Barat Adiarsa Barat 05 09', 'S1/S2', 'disamarkan', 'Karyawan RSUD'),
('321512xx11', 'diasamarkan(KK)', 16, 'P', 'Kota Baru Wancimekar 07 02', 'SLTA/Sederajat', 'dismarkan', 'Pelajar'),
('321512xx12', 'disamarkan(KL)', 40, 'P', 'Tempuran Pancakarya 03 03', 'S1/S2', 'disamarkan', 'Pegawai Swasta'),
('321512xxx1', 'disamarkan(KA)', 32, 'P', 'Cikampek Dawuan Timur 01 02', 'D1/D2/D3', 'disamarkan', 'Ibu Rumah Tangga'),
('321512xxx2', 'disamarkan(KB)', 32, 'P', 'Telukjambe Timur Adiarsa Timur 003 001', 'SLTA/Sederajat', 'disamarkan', 'Ibu Rumah Tangga'),
('321512xxx3', 'disamarkan(KC)', 25, 'L', 'Karawang Timur Tegal Sawah 02 02', 'SLTA/Sederajat', 'disamarkan', 'Ibu Rumah Tangga'),
('321512xxx4', 'disamarkan(KD)', 39, 'P', 'Jayakerta Jayamakmur 04 005', 'D1/D2/D3', 'disamarkan', 'Bidan(PNS)'),
('321512xxx5', 'disamarkan(KE)', 15, 'P', 'Karawang Timur Margasari 01 01', 'SLTP/Sederajat', 'disamarkan', 'Pelajar'),
('321512xxx6', 'disamarkan(KF)', 43, 'P', 'Karawang Timur Kondangjaya 002 002', 'SLTA/Sederajat', 'disamarkan', 'Ibu Rumah Tangga'),
('321512xxx7', 'disamarkan(KG)', 52, 'P', 'Cikampek Kalihurip 03 03', 'SLTA/Sederajat', 'disamarkan', 'Karyawan Swasta'),
('321512xxx8', 'disamarkan(KH)', 42, 'P', 'Majalaya Pasirjengkol 07 02', 'SLTP/Sederajat', 'disamarkan', 'Wiraswasta'),
('321512xxx9', 'disamarkan(KI)', 7, 'P', 'Rengasdengklok Dukuhkarya 04 03', 'SD', 'disamarkan', 'Pelajar');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kec` int(11) NOT NULL,
  `nama_wil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kec`, `nama_wil`) VALUES
(321501, 'Karawang Barat'),
(321502, 'Pangkalan'),
(321503, 'Telukjambe Timur'),
(321504, 'Ciampel'),
(321505, 'Klari'),
(321506, 'Rengasdengklok'),
(321507, 'Kutawaluya'),
(321508, 'Batujaya'),
(321509, 'Tirtajaya'),
(321510, 'Pedes'),
(321511, 'Cibuaya'),
(321512, 'Pakisjaya'),
(321513, 'Cikampek'),
(321514, 'Jatisari'),
(321515, 'Cilamaya Wetan'),
(321516, 'Tirtamulya'),
(321517, 'Telagasari'),
(321518, 'Rawamerta'),
(321519, 'Lemahabang'),
(321520, 'Tempuran'),
(321521, 'Majalaya'),
(321522, 'Jayakerta'),
(321523, 'Cilamaya Kulon'),
(321524, 'Banyusari'),
(321525, 'Kota Baru'),
(321526, 'Karawang Timur'),
(321527, 'Telukjambe Barat'),
(321528, 'Tegalwaru'),
(321529, 'Purwasari'),
(321530, 'Cilebar');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kel` bigint(20) NOT NULL,
  `id_kec` int(11) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kel`, `id_kec`, `nama`) VALUES
(3215011001, 321501, 'Karawang Kulon'),
(3215011003, 321501, 'Adiarsa Barat'),
(3215011005, 321501, 'Tanjungpura'),
(3215011006, 321501, 'Tanjungmekar'),
(3215011007, 321501, 'Tunggakjati'),
(3215011010, 321501, 'Karawangpawitan'),
(3215011011, 321501, 'Nagasari'),
(3215011012, 321501, 'Mekarjati'),
(3215022001, 321502, 'Ciptasari'),
(3215022002, 321502, 'Tamanmekar'),
(3215022003, 321502, 'Tamansari'),
(3215022004, 321502, 'Jatilaksana'),
(3215022005, 321502, 'Cintaasih'),
(3215022006, 321502, 'Kertasari'),
(3215022007, 321502, 'Mulangsari'),
(3215022008, 321502, 'Medalsari'),
(3215032001, 321503, 'Telukjambe'),
(3215032002, 321503, 'Sukaharja'),
(3215032003, 321503, 'Sirnabaya'),
(3215032004, 321503, 'Puseurjaya'),
(3215032005, 321503, 'Sukaluyu'),
(3215032006, 321503, 'Wadas'),
(3215032011, 321503, 'Purwadana'),
(3215032012, 321503, 'Sukamakmur'),
(3215032019, 321503, 'Pinayungan'),
(3215042001, 321504, 'Kutapohaci'),
(3215042003, 321504, 'Parungmulya'),
(3215042004, 321504, 'Kutamekar'),
(3215042005, 321504, 'Kutanegara'),
(3215042006, 321504, 'Mulyasari'),
(3215042007, 321504, 'Mulyasejati'),
(3215042008, 321504, 'Tegallega'),
(3215052001, 321505, 'Duren'),
(3215052002, 321505, 'Pancawati'),
(3215052003, 321505, 'Walahar'),
(3215052004, 321505, 'Kiarapayung'),
(3215052005, 321505, 'Sumurkondang'),
(3215052006, 321505, 'Cibalongsari'),
(3215052007, 321505, 'Klari'),
(3215052008, 321505, 'Belendung'),
(3215052016, 321505, 'Anggadita'),
(3215052017, 321505, 'Gintungkerta'),
(3215052018, 321505, 'Curug'),
(3215052019, 321505, 'Karanganyar'),
(3215052020, 321505, 'Cimahi'),
(3215062001, 321506, 'Rengasdengklok Selatan'),
(3215062002, 321506, 'Rengasdengklok Utara'),
(3215062003, 321506, 'Kertasari'),
(3215062004, 321506, 'Dewisari'),
(3215062005, 321506, 'Amansari'),
(3215062006, 321506, 'Karyasari'),
(3215062007, 321506, 'Dukuhkarya'),
(3215062008, 321506, 'Kalangsari'),
(3215062009, 321506, 'Kalangsurya'),
(3215072001, 321507, 'Waluya'),
(3215072002, 321507, 'Mulyajaya'),
(3215072003, 321507, 'Kutakarya'),
(3215072004, 321507, 'Kutagandok'),
(3215072005, 321507, 'Kutamukti'),
(3215072006, 321507, 'Kutajaya'),
(3215072007, 321507, 'Sampalan'),
(3215072008, 321507, 'Sindangmulya'),
(3215072009, 321507, 'Sindangmukti'),
(3215072010, 321507, 'Kutaraja'),
(3215072011, 321507, 'Sindangsari'),
(3215072012, 321507, 'Sindangkarya'),
(3215082001, 321508, 'Batujaya'),
(3215082002, 321508, 'Telukambulu'),
(3215082003, 321508, 'Telukbango'),
(3215082004, 321508, 'Karyabhakti'),
(3215082005, 321508, 'Baturaden'),
(3215082006, 321508, 'Segaran'),
(3215082007, 321508, 'Segarjaya'),
(3215082008, 321508, 'Kutaampel'),
(3215082009, 321508, 'Karyamulya'),
(3215082010, 321508, 'Karyamakmur'),
(3215092001, 321509, 'Sabajaya'),
(3215092002, 321509, 'Pisangsambo'),
(3215092003, 321509, 'Gempolkarya'),
(3215092004, 321509, 'Medankarya'),
(3215092005, 321509, 'Tambaksumur'),
(3215092006, 321509, 'Tambaksari'),
(3215092007, 321509, 'Sumurlaban'),
(3215092008, 321509, 'Srijaya'),
(3215092009, 321509, 'Kutamakmur'),
(3215092010, 321509, 'Bolang'),
(3215092011, 321509, 'Srikamulyan'),
(3215102001, 321510, 'Payungsari'),
(3215102002, 321510, 'Karangjaya'),
(3215102003, 321510, 'Kertaraharja'),
(3215102005, 321510, 'Sungaibuntu'),
(3215102006, 321510, 'Dongkal'),
(3215102007, 321510, 'Kertamulya'),
(3215102008, 321510, 'Puspasari'),
(3215102010, 321510, 'Labanjaya'),
(3215102012, 321510, 'Jatimulya'),
(3215102016, 321510, 'Rangdumulya'),
(3215102017, 321510, 'Kendaljaya'),
(3215102018, 321510, 'Malangsari'),
(3215112001, 321511, 'Pejaten'),
(3215112002, 321511, 'Cibuaya'),
(3215112003, 321511, 'Kertarahayu'),
(3215112004, 321511, 'Sukasari'),
(3215112005, 321511, 'Kedungjeruk'),
(3215112006, 321511, 'Kalidungjaya'),
(3215112007, 321511, 'Sedari'),
(3215112008, 321511, 'Cemarajaya'),
(3215112009, 321511, 'Jayamulya'),
(3215112010, 321511, 'Kedungjaya'),
(3215112011, 321511, 'Gebangjaya'),
(3215122001, 321512, 'Tanjungmekar'),
(3215122002, 321512, 'Telagajaya'),
(3215122003, 321512, 'Telukbuyung'),
(3215122004, 321512, 'Tanahbaru'),
(3215122005, 321512, 'Solokan'),
(3215122006, 321512, 'Tanjungbungin'),
(3215122007, 321512, 'Telukjaya'),
(3215122008, 321512, 'Tanjungpakis'),
(3215132001, 321513, 'Dawuan Timur'),
(3215132002, 321513, 'Kalihurip'),
(3215132003, 321513, 'Cikampek Kota'),
(3215132004, 321513, 'Dawuan Tengah'),
(3215132006, 321513, 'Cikampek Selatan'),
(3215132007, 321513, 'Cikampek Pusaka'),
(3215132008, 321513, 'Cikampek Barat'),
(3215132009, 321513, 'Cikampek Timur'),
(3215132010, 321513, 'Kamojing'),
(3215132011, 321513, 'Dawuan Barat'),
(3215142001, 321514, 'Mekarsari'),
(3215142002, 321514, 'Jatisari'),
(3215142003, 321514, 'Barugbug'),
(3215142004, 321514, 'Cikalongsari'),
(3215142005, 321514, 'Cirejag'),
(3215142006, 321514, 'Jatibaru'),
(3215142007, 321514, 'Jatiragas'),
(3215142008, 321514, 'Jatiwangi'),
(3215142009, 321514, 'Kalijati'),
(3215142010, 321514, 'Balonggandu'),
(3215142011, 321514, 'Pacing'),
(3215142012, 321514, 'Situdam'),
(3215142013, 321514, 'Sukamekar'),
(3215142014, 321514, 'Telarsari'),
(3215152001, 321515, 'Mekarmaya'),
(3215152002, 321515, 'Cilamaya'),
(3215152003, 321515, 'Muara'),
(3215152004, 321515, 'Muarabaru'),
(3215152005, 321515, 'Sukatani'),
(3215152006, 321515, 'Tegalwaru'),
(3215152007, 321515, 'Tegalsari'),
(3215152008, 321515, 'Cikalong'),
(3215152009, 321515, 'Cikarang'),
(3215152010, 321515, 'Rawagempol Wetan'),
(3215152011, 321515, 'Rawagempol Kulon'),
(3215152012, 321515, 'Sukakerta'),
(3215162001, 321516, 'Citarik'),
(3215162002, 321516, 'Karangsinom'),
(3215162003, 321516, 'Karangjaya'),
(3215162004, 321516, 'Parakan'),
(3215162005, 321516, 'Parakanmulya'),
(3215162006, 321516, 'Kamurang'),
(3215162007, 321516, 'Cipondoh'),
(3215162008, 321516, 'Kertawaluya'),
(3215162009, 321516, 'Bojongsari'),
(3215162010, 321516, 'Tirtasari'),
(3215172001, 321517, 'Telagamulya'),
(3215172002, 321517, 'Telagasari'),
(3215172003, 321517, 'Pasirtalaga'),
(3215172004, 321517, 'Cariumulya'),
(3215172005, 321517, 'Pasirmukti'),
(3215172006, 321517, 'Kalibuaya'),
(3215172007, 321517, 'Pasirkamuning'),
(3215172008, 321517, 'Kalijaya'),
(3215172009, 321517, 'Kalisari'),
(3215172010, 321517, 'Cadas Kertajaya'),
(3215172011, 321517, 'Cilewo'),
(3215172012, 321517, 'Ciwulan'),
(3215172013, 321517, 'Linggarsari'),
(3215172014, 321517, 'Pulosari'),
(3215182001, 321518, 'Sukamerta'),
(3215182002, 321518, 'Kutawargi'),
(3215182003, 321518, 'Panyingkiran'),
(3215182004, 321518, 'Pasirkaliki'),
(3215182005, 321518, 'Pasirawi'),
(3215182006, 321518, 'Balongsari'),
(3215182007, 321518, 'Mekarjaya'),
(3215182008, 321518, 'Sekarwangi'),
(3215182009, 321518, 'Purwamekar'),
(3215182010, 321518, 'Sukapura'),
(3215182011, 321518, 'Cibadak'),
(3215182012, 321518, 'Sukaraja'),
(3215182014, 321518, 'Gombongsari'),
(3215192001, 321519, 'Karyamukti'),
(3215192002, 321519, 'Ciwaringin'),
(3215192003, 321519, 'Waringinkarya'),
(3215192004, 321519, 'Kedawung'),
(3215192005, 321519, 'Karangtanjung'),
(3215192006, 321519, 'Pasirtanjung'),
(3215192007, 321519, 'Lemahabang'),
(3215192008, 321519, 'Lemahmukti'),
(3215192009, 321519, 'Pulojaya'),
(3215192010, 321519, 'Pulokalapa'),
(3215192011, 321519, 'Pulomulya'),
(3215202001, 321520, 'Pancakarya'),
(3215202002, 321520, 'Dayeuhluhur'),
(3215202003, 321520, 'Lemahduhur'),
(3215202004, 321520, 'Lemahkarya'),
(3215202005, 321520, 'Lemahsubur'),
(3215202006, 321520, 'Lemahmakmur'),
(3215202008, 321520, 'Purwajaya'),
(3215202010, 321520, 'Tanjungjaya'),
(3215202011, 321520, 'Sumberjaya'),
(3215202012, 321520, 'Pagadungan'),
(3215202013, 321520, 'Tempuran'),
(3215202014, 321520, 'Cikuntul'),
(3215202016, 321520, 'Jayanegara'),
(3215202017, 321520, 'Ciparagejaya'),
(3215212001, 321521, 'Majalaya'),
(3215212002, 321521, 'Ciranggon'),
(3215212003, 321521, 'Pasirjengkol'),
(3215212005, 321521, 'Sarijaya'),
(3215212006, 321521, 'Pasirmulya'),
(3215212007, 321521, 'Lemahmulya'),
(3215212008, 321521, 'Bangle'),
(3215222001, 321522, 'Jayamakmur'),
(3215222002, 321522, 'Kemiri'),
(3215222003, 321522, 'Makmurjaya'),
(3215222004, 321522, 'Kertajaya'),
(3215222005, 321522, 'Jayakerta'),
(3215222006, 321522, 'Medangasem'),
(3215222007, 321522, 'Ciptamarga'),
(3215222008, 321522, 'Kampungsawah'),
(3215232001, 321523, 'Sukamulya'),
(3215232002, 321523, 'Tegalurung'),
(3215232003, 321523, 'Langensari'),
(3215232004, 321523, 'Bayur Lor'),
(3215232005, 321523, 'Bayur Kidul'),
(3215232006, 321523, 'Kiara'),
(3215232007, 321523, 'Manggungjaya'),
(3215232008, 321523, 'Sumurgede'),
(3215232009, 321523, 'Muktijaya'),
(3215232010, 321523, 'Pasirukem'),
(3215232011, 321523, 'Pasirjaya'),
(3215232012, 321523, 'Sukajaya'),
(3215242001, 321524, 'Gembongan'),
(3215242002, 321524, 'Gempol'),
(3215242003, 321524, 'Gempol Kolot'),
(3215242004, 321524, 'Banyuasih'),
(3215242005, 321524, 'Kertaraharja'),
(3215242006, 321524, 'Tanjung'),
(3215242007, 321524, 'Jayamukti'),
(3215242008, 321524, 'Cicinde Utara'),
(3215242009, 321524, 'Cicinde Selatan'),
(3215242010, 321524, 'Mekarasih'),
(3215242011, 321524, 'Talunjaya'),
(3215242012, 321524, 'Pamekaran'),
(3215252001, 321525, 'Wancimekar'),
(3215252002, 321525, 'Pangulah Selatan'),
(3215252003, 321525, 'Pangulah Utara'),
(3215252004, 321525, 'Pangulah Baru'),
(3215252005, 321525, 'Pucung'),
(3215252006, 321525, 'Jomin Timur'),
(3215252007, 321525, 'Jomin Barat'),
(3215252008, 321525, 'Sarimulya'),
(3215252009, 321525, 'Cilkampek Utara'),
(3215261001, 321526, 'Karawang Wetan'),
(3215261002, 321526, 'Adiarsa Timur'),
(3215261003, 321526, 'Palumbonsari'),
(3215261004, 321526, 'Plawad'),
(3215262005, 321526, 'Margasari'),
(3215262006, 321526, 'Warungbambu'),
(3215262007, 321526, 'Kondangjaya'),
(3215262008, 321526, 'Tegal Sawah'),
(3215272001, 321527, 'Margakaya'),
(3215272002, 321527, 'Margamulya'),
(3215272003, 321527, 'Kalangligar'),
(3215272004, 321527, 'Mekarmulya'),
(3215272005, 321527, 'Parungsari'),
(3215272006, 321527, 'Karangmulya'),
(3215272007, 321527, 'Wanasari'),
(3215272008, 321527, 'Wanakerta'),
(3215272009, 321527, 'Wanajaya'),
(3215272010, 321527, 'Mulyajaya'),
(3215282001, 321528, 'Cigunungsari'),
(3215282002, 321528, 'Wargasetra'),
(3215282003, 321528, 'Mekarbuana'),
(3215282004, 321528, 'Cintalaksana'),
(3215282005, 321528, 'Cintawargi'),
(3215282006, 321528, 'Cintalanggeng'),
(3215282007, 321528, 'Kutalanggeng'),
(3215282008, 321528, 'Kutamaneuh'),
(3215282009, 321528, 'Cipurwasari'),
(3215292001, 321529, 'Darawolong'),
(3215292002, 321529, 'Tegalsari'),
(3215292003, 321529, 'Purwasari'),
(3215292004, 321529, 'Mekarjaya'),
(3215292005, 321529, 'Tamelang'),
(3215292006, 321529, 'Cengkong'),
(3215292007, 321529, 'Sukasari'),
(3215292008, 321529, 'Karangsari'),
(3215302001, 321530, 'Kertamukti'),
(3215302002, 321530, 'Rawasari'),
(3215302003, 321530, 'Pusakajaya Selatan'),
(3215302004, 321530, 'Cikande'),
(3215302005, 321530, 'Kosambibatu'),
(3215302006, 321530, 'Pusakajaya Utara'),
(3215302007, 321530, 'Sukaratu'),
(3215302008, 321530, 'Ciptamargi'),
(3215302009, 321530, 'Mekarpohaci'),
(3215302010, 321530, 'Tanjungsari');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` varchar(15) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `pihak` varchar(10) NOT NULL,
  `jenis_kasus` varchar(50) NOT NULL,
  `nm_pelaku` varchar(50) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `umur` int(3) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `pendidikan` varchar(35) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `hubungan` varchar(25) NOT NULL,
  `tgl` date NOT NULL,
  `validasi` varchar(25) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `nik`, `pihak`, `jenis_kasus`, `nm_pelaku`, `jk`, `umur`, `alamat`, `pendidikan`, `pekerjaan`, `hubungan`, `tgl`, `validasi`, `status`) VALUES
('TICK1219001', '321512xxx1', 'korban', 'KDRT', 'diasamarkan(PA)', 'L', 35, 'Cikampek Dawuan Timur 01 02', 'S1/S2', 'Wiraswasta', 'disamarkan', '2018-01-03', 'Verified', 'Selesai'),
('TICK1219002', '321512xxx2', 'korban', 'Pemerkosaan', 'diasamarkan(PB)', 'L', 35, 'Telukjambe Timur Adiarsa Timur 003 001', 'Tidak Sekolah', 'Kepala Desa', 'disamarkan', '2018-01-02', 'Verified', 'Selesai'),
('TICK1219003', '321512xxx3', 'korban', 'KDRT dan Penelantaran', 'diasamarkan(PC)', 'L', 33, 'Karawang Timur Tegal Sawah 02 02', 'SLTA/Sederajat', 'Karyawan Swasta', 'Suami', '2018-01-09', 'Verified', 'Selesai'),
('TICK1219004', '321512xxx4', 'korban', 'Penelantaran', 'diasamarkan(PD)', 'L', 43, 'Jayakerta Jayamakmur 04 005', 'S1/S2', 'Anggota Dewan', 'disamarkan', '2018-01-16', 'Verified', 'Selesai'),
('TICK1219005', '321512xxx5', 'korban', 'Kekerasan Fisik', 'diasamarkan(PE)', 'L', 35, 'Karawang Timur Margasari  01 01', 'S1/S2', 'Karyawan', 'disamarkan', '2018-01-29', 'Verified', 'Selesai'),
('TICK1219006', '321512xxx6', 'korban', 'Penelantaran', 'diasamarkan(PF)', 'L', 48, 'Karawang Timur Kondangjaya 002 002', 'D1/D2/D3', 'Wiraswasta', 'disamarkan', '2018-02-01', 'Verified', 'Selesai'),
('TICK1219007', '321512xxx7', 'korban', 'KDRT', 'diasamarkan(PG)', 'L', 54, 'Cikampek Kalihurip 03 03', 'SLTA/Sederajat', 'Karyawan Swasta', 'disamarkan', '2018-02-05', 'Verified', 'Selesai'),
('TICK1219008', '321512xxx8', 'korban', 'Penelantaran', 'diasamarkan(PH)', 'L', 52, 'Majalaya Pasir Jengkol 07 02', 'SLTA/Sederajat', 'PNS', 'disamarkan', '2018-02-27', 'Verified', 'Selesai'),
('TICK1219009', '321512xxx9', 'korban', 'Pelecehan Seksual', 'diasamarkan(PI)', 'L', 65, 'Rengasdengklok Dukuhkarya 04 03', 'SLTP/Sederajat', 'Wiraswasta', 'disamarkan', '2018-03-26', 'Verified', 'Selesai'),
('TICK1219010', '321512xxx9', 'korban', 'Pelecehan Seksual', 'diasamarkan(PI)', 'L', 65, 'Rengasdengklok Dukuhkarya 04 03', 'SLTP/Sederajat', 'Wiraswasta', 'disamarkan', '2018-03-26', 'Verified', 'Selesai'),
('TICK1219012', '321512xx10', 'korban', 'KDRT', 'disamarkan(PJ)', 'L', 38, 'Karawang Barat Adiarsa Barat 05 09', 'SLTA/Sederajat', 'Karyawan Pajak', 'disamarkan', '2018-04-04', 'Verified', 'Selesai'),
('TICK1219013', '321512xx11', 'korban', 'Pelecehan Seksual', 'diasamarkan(PK)', 'L', 19, 'Kota Baru Wancimekar 07 02', 'SLTA/Sederajat', 'Pelajar', 'disamarkan', '2018-04-09', 'Verified', 'Selesai'),
('TICK1219014', '321512xx12', 'korban', 'KDRT', 'disamarkan(PL)', 'L', 44, 'Tempuran Pancakarya 03 03', 'D1/D2/D3', 'Wiraswasta', 'disamarkan', '2018-05-09', 'Verified', 'Selesai'),
('TICK1219015', '3211162109940004', 'korban', 'KDRT', 'Ilham', 'L', 21, 'Karawang Timur Telukjambe timur 01 01', 'SD', 'Karyawan', 'Suami', '2019-12-10', 'Verified', 'Menunggu Konfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` varchar(10) NOT NULL,
  `nama_ptgs` varchar(50) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `pass` text NOT NULL,
  `grup` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nama_ptgs`, `jk`, `alamat`, `email`, `no_telp`, `pass`, `grup`) VALUES
('P2TP2A001', 'Nawang Wulan', 'P', 'Karawang', 'wulan25@gmail.com', '085694726487', '$2y$10$eWgra97WIWGRnKGl23ntDuddK7I6ioBN22rwqmey5fmy2lt6djVrK', 'admin'),
('P2TP2A002', 'Rina Marlina', 'P', 'Rengas Dengklok', 'mirandamedved@my.smccd.edu', '087779875468', '$2y$10$.Hdpphpe0ytpaYGwkFUZJOR1pd2Mw5deukCiUZGg0KTn1O5TnjMAe', 'petugas'),
('P2TP2A003', 'Ilham', 'L', 'Karawang', '1@1gmail.com', '0878', '$2y$10$DHV2xoCtUtRB.C7r.sS9dew8mqJvaduu8fgEMdpAtVrtQFoSQZxVy', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi`
--

CREATE TABLE `verifikasi` (
  `id_verifikasi` varchar(15) NOT NULL,
  `id_pengaduan` varchar(15) NOT NULL,
  `id` varchar(10) NOT NULL,
  `id_kec` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `tgl_verifikasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verifikasi`
--

INSERT INTO `verifikasi` (`id_verifikasi`, `id_pengaduan`, `id`, `id_kec`, `jenis`, `tgl_verifikasi`) VALUES
('VERF1219001', 'TICK1219001', 'P2TP2A002', 321513, 'Fisik', '2019-12-04 04:25:50'),
('VERF1219002', 'TICK1219002', 'P2TP2A002', 321503, 'Seksual', '2019-12-04 04:26:10'),
('VERF1219003', 'TICK1219003', 'P2TP2A002', 321526, 'Fisik', '2019-12-04 04:26:30'),
('VERF1219004', 'TICK1219004', 'P2TP2A002', 321522, 'Penelantaran', '2019-12-04 05:01:37'),
('VERF1219005', 'TICK1219005', 'P2TP2A002', 321526, 'Fisik', '2019-12-04 04:46:00'),
('VERF1219006', 'TICK1219006', 'P2TP2A002', 321526, 'Penelantaran', '2019-12-04 05:01:37'),
('VERF1219007', 'TICK1219007', 'P2TP2A002', 321513, 'Fisik', '2019-12-04 05:22:25'),
('VERF1219008', 'TICK1219008', 'P2TP2A002', 321521, 'Penelantaran', '2019-12-04 05:22:44'),
('VERF1219009', 'TICK1219009', 'P2TP2A002', 321506, 'Seksual', '2019-12-04 05:22:59'),
('VERF1219010', 'TICK1219010', 'P2TP2A002', 321506, 'Seksual', '2019-12-04 05:27:43'),
('VERF1219011', 'TICK1219011', 'P2TP2A002', 321521, 'Seksual', '2019-12-08 14:11:40'),
('VERF1219012', 'TICK1219012', 'P2TP2A002', 321501, 'Fisik', '2019-12-09 03:37:32'),
('VERF1219013', 'TICK1219013', 'P2TP2A002', 321525, 'Seksual', '2019-12-09 03:38:20'),
('VERF1219014', 'TICK1219015', 'P2TP2A002', 321525, 'Fisik', '2019-12-09 04:19:27'),
('VERF1219015', 'TICK1219014', 'P2TP2A002', 321520, 'Fisik', '2019-12-09 22:15:32'),
('VERF1219016', 'TICK1219014', 'P2TP2A002', 321520, 'Fisik', '2019-12-09 22:32:14'),
('VERF1219017', 'TICK1219014', 'P2TP2A002', 321520, 'Fisik', '2019-12-10 01:45:57'),
('VERF1219018', 'TICK1219015', 'P2TP2A002', 321526, 'Fisik', '2019-12-10 03:02:20'),
('VERF1219019', 'TICK1219015', 'P2TP2A002', 321526, 'Fisik', '2019-12-11 04:48:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kel`),
  ADD KEY `fk_id_kec` (`id_kec`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `fk_nik` (`nik`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD PRIMARY KEY (`id_verifikasi`),
  ADD KEY `fk_id_pengaduan` (`id_pengaduan`),
  ADD KEY `id_fk_ptgs_log` (`id`),
  ADD KEY `id_kec_fk` (`id_kec`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD CONSTRAINT `fk_id_kec` FOREIGN KEY (`id_kec`) REFERENCES `kecamatan` (`id_kec`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `fk_nik` FOREIGN KEY (`nik`) REFERENCES `biodata` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD CONSTRAINT `id_fk_ptgs_log` FOREIGN KEY (`id`) REFERENCES `petugas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_kec_fk` FOREIGN KEY (`id_kec`) REFERENCES `kecamatan` (`id_kec`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
