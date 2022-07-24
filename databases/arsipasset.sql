-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2021 pada 05.32
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsipasset`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_asset`
--

CREATE TABLE `tb_asset` (
  `id_asset` int(11) NOT NULL,
  `nama_asset` varchar(50) NOT NULL,
  `model_asset` varchar(50) NOT NULL,
  `merk_asset` varchar(50) NOT NULL,
  `serial_asset` varchar(200) NOT NULL,
  `inventaris_asset` varchar(200) NOT NULL,
  `keterangan_asset` varchar(50) NOT NULL,
  `jml_asset` int(11) NOT NULL,
  `date_asset` int(20) NOT NULL,
  `kategori_asset` varchar(50) NOT NULL,
  `gambar_asset` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_asset`
--

INSERT INTO `tb_asset` (`id_asset`, `nama_asset`, `model_asset`, `merk_asset`, `serial_asset`, `inventaris_asset`, `keterangan_asset`, `jml_asset`, `date_asset`, `kategori_asset`, `gambar_asset`) VALUES
(30, 'SWITCH 8 PORT 1gb/s', 'PL-NM1008P', 'BLAZZ', 'PL1008P311020170617', '-', 'BAIK - UNBOX', 1, 1613545433, 'LEMARI 1.A (DEVICE)', 'd9a08a33549317fbc2a73e77b9dd92ff.jpg'),
(33, 'ROUTER 8 PORT 100MB/S', 'SRX100', 'JUNIPER', 'AT3910AF0285', 'IT.014.0000.1.Y020.0001', 'BAIK - UNBOX', 1, 1613546961, 'LEMARI 1.A (DEVICE)', 'bcf476db4453231dd983bf7e6b52071f.jpg'),
(34, 'POWER WIRELESS OUTDOR', 'TL-WA5210G', 'TP-LINK', '-', '-', 'RUSAK - UNBOX', 1, 1613547235, 'LEMARI 1.C (BARANG RUSAK)', '8a5d4cd438fee26ffc190c241b3e790f.jpg'),
(44, 'WIRELESS DISPLAY PRESENTATION', 'WPG-370', 'ViewSonic', 'TK2143500579 / TK2143500580', 'BYTG/04/UPT/XII/2015', 'BAIK - UNBOX', 2, 1613554333, 'LEMARI 1.A (DEVICE)', '1c5523fb97027315d2065449da7d6335.jpg'),
(45, 'USB 4 PORT', '-', 'ROBOT', '-', '-', 'BAIK - UNBOX', 1, 1613554554, 'LEMARI 1.A (DEVICE)', '2d09de9e950d7f25acebedad756d10a4.jpg'),
(46, 'WIFI ACCESS POINT', 'UAP-LR', 'UBIQUITI', 'FCECDA68EB7B / FCECDA68EA5B / FCECDA68EA80', '-', 'BAIK - INBOX', 3, 1613555126, 'LEMARI 1.A (DEVICE)', 'f0207f61db01e07be728941616639120.jpg'),
(49, 'CCTV HIKVISON H.265+', 'DS-2CD1023G0E-1', 'HIKVISION', 'D91852296 / D91852541 / D696793440', '-', 'BELUM DICEK', 5, 1613631015, 'LEMARI 1.A (DEVICE)', 'ac4fbba11e81c12be3c80f4a20a4d702.jpg'),
(50, 'JUNCTIONS BOX CCTV', 'DX-121', 'DEXTA', '-', '-', 'BAIK - INBOX', 9, 1613631409, 'LEMARI 2.A (SPARE PARTS)', 'f86bd0a466cf100a867b7bf9a3479c83.jpg'),
(51, '2-PORT AUTO KVM SWITCH', 'FJ-K102', 'KVM', '6932714670306', '-', 'BAIK - INBOX', 1, 1613631636, 'LEMARI 1.A (DEVICE)', '1295f483a4a0958040fdef27b76cb8df.jpg'),
(52, 'MULTI FUNCTIONAL WORKFORCE / SCANNER', 'J211K', 'EPSON', 'J79Z015602', 'IT.128.041B.1.0021', 'BELUM DICEK', 1, 1613631889, 'LEMARI 1.B (DEVICE)', 'a91954daec52924925bee3a64f8b9c75.jpg'),
(53, '1 KARDUS POWER ADAPTOR', '-', '-', '-', '-', 'BAIK - UNBOX', 1, 1613632096, 'LEMARI 1.B (DEVICE)', '376e3987cb81ad6e380e50813782e9af.jpg'),
(54, 'MOUSE LOGITECH M-171', 'M-171', 'LOGITECH', '1948LZX6S2D8', '-', 'RUSAK - UNBOX', 1, 1613632299, 'LEMARI 1.A (DEVICE)', '42d108526535f39a9da6d78890d8b731.jpg'),
(55, 'MOUSE DELL', 'KB-212-B', 'DELL', 'DP / N 04G481', '-', 'BAIK - UNBOX', 1, 1613632606, 'LEMARI 1.A (DEVICE)', '443da95d5c24662a18f426f948a07e8b.jpg'),
(57, 'MOUSE LOGITECH', 'B-100', 'LOGITECH', '1848HS003HL8', '-', 'BAIK - UNBOX', 1, 1613632906, 'LEMARI 1.A (DEVICE)', '1854c10ed8935ac7074818d170dbb475.jpg'),
(58, 'KEYBOARD DELL', 'KB212-B', 'DELL', 'DP / N 04G481', '-', 'BAIK - UNBOX', 1, 1613633215, 'LEMARI 1.A (DEVICE)', 'd4e83be868e0a67aefd2310655153de2.jpg'),
(59, 'MOUSE LOGITECH', 'K-120', 'LOGITECH', '1447MG0207K8 /1804SC52D5E8 / 1518M800Y9R8', '-', 'BAIK - UNBOX', 3, 1613633917, 'LEMARI 1.A (DEVICE)', '3c8f20947889921317fd7d63be3d27ad.jpg'),
(60, 'KEYBOARD HP', 'SK-2085', 'HP', '697737-L31', '-', 'BAIK - UNBOX', 1, 1613634376, 'LEMARI 1.A (DEVICE)', '0d8ed3b359463d56e48793584300330e.jpg'),
(61, 'KEYBOARD DELL', 'KB216P', 'DELL', '-', '-', 'BAIK - UNBOX', 1, 1613634613, 'LEMARI 1.A (DEVICE)', 'd25f4b1ac51a5210279aacb658cb7166.jpg'),
(62, 'LABEL PRINTER', 'PTD200', 'BROTHER', 'E71331-B4Z443130', '-', 'BAIK - UNBOX', 1, 1613635746, 'LEMARI 1.A (DEVICE)', 'a950cc952d0e117d89742ea571a0d6fd.jpg'),
(63, 'KABEL OPTIC SIMPLEX 3.0 MM', '-', '-', 'SE19112732', '-', 'BAIK - INBOX', 5, 1613636058, 'LEMARI 2.A (SPARE PARTS)', 'faaf913b46714ce7d36900778ec9e1f7.jpg'),
(64, 'KABEL SATA', '21149', 'AVM', 'ATA 26AWG', '-', 'BAIK - INBOX', 5, 1613636195, 'LEMARI 2.A (SPARE PARTS)', '1b5ee34cf67127a81c7a8e92f5fdae5d.jpg'),
(65, 'KEYBOARD LENOVO', 'LXH-EK8-10YA', 'LENOVO', '-', '-', 'BAIK - UNBOX', 1, 1613959955, 'LEMARI 1.A (DEVICE)', 'f9786697acc9a38ae025fc6f68ccc720.jpg'),
(66, 'ADAPTOR SWITCH LAN 2A AC/DC', 'YNS-12V2000MADC', '-', '-', '-', 'BAIK - INBOX', 13, 1613960833, 'LEMARI 2.A (SPARE PARTS)', '255b24ef9d52e71896bd2ef92f518c86.jpg'),
(67, 'ADAPTOR SWITCH LAN 2A AC/DC', 'JAH-1210', 'ViewSonic', '-', '-', 'BAIK - UNBOX', 2, 1613961237, 'LEMARI 2.A (SPARE PARTS)', '59e2c563988eb5d053841a4fc58d16ce.jpg'),
(68, 'PEMBUNGKUS KABEL TRANSPARAN', '-', '-', '-', '-', 'BAIK - INBOX', 3, 1613961618, 'LEMARI 2.A (SPARE PARTS)', 'a7b82959e39e67303dbca8f332c8432e.jpg'),
(69, 'PANASONIC FRAME 1 GANG 1 DEVICE 1 TOUCHFLAT', 'WEJ-78019W', 'PANASONIC', '-', '-', 'BAIK - UNBOX', 1, 1613964541, 'LEMARI 2.A (SPARE PARTS)', '03c8cb73e1fc7f600b629558aacfeb70.jpg'),
(70, 'POWER SUPLY GE SERIES', 'GE-450', 'GAME MAX', '20130045010907 / 20130045010910 / 20130045010913', '-', 'BAIK - INBOX', 3, 1613965434, 'LEMARI 2.A (SPARE PARTS)', '8d2540f324364401da8058a192198eb5.jpg'),
(71, 'MOTHERBOARD LGA1150', 'GA-H81M-DS2', 'GIGABYTE', '-', '-', 'BAIK - INBOX', 1, 1613965561, 'LEMARI 2.A (SPARE PARTS)', '1c77fefa38e7da7facb36a53e8325cb5.jpg'),
(73, 'SWITCH 16 PORT 1GB/S', 'AT-FS716L', 'ALIED TELESIS\\', 'A04194R164200218A1', 'IT.016.0819.1.Y020.00001', 'BAIK - INBOX', 1, 1614134179, 'LEMARI 1.A (DEVICE)', '7fcbb3261a6d942c036d0a7b466356e6.jpg'),
(74, 'PROJECTROR VIEW SONIC', 'VS14937', 'ViewSonic', 'TBY133902493', '-', 'BELUM DICEK', 1, 1614134626, 'LEMARI 1.A (DEVICE)', 'aa08745a68f92107f9754fa502e7f8dd.jpg'),
(75, 'DVD WRITER', 'SH-224', 'SAMSUNG', 'R95F6YBF10017M', '-', 'BELUM DICEK', 1, 1614134804, 'LEMARI 1.A (DEVICE)', '9914a68ce8b98c1e866c05bf1d2899a8.jpg'),
(76, 'DVD WRITER', 'GP65NB60', 'LG', '910HREC031164', '-', 'BAIK - INBOX', 1, 1614135171, 'LEMARI 1.A (DEVICE)', '8ebc389e448553e9bd738c1e97abe9c8.jpg'),
(77, 'HARD DRIVE DOCKING 2.5 INCH DAN 3.5 INCH', '6629US3-C', 'ORICO', 'RC2020200521007228', '-', 'BAIK - INBOX', 1, 1614135310, 'LEMARI 1.A (DEVICE)', '162728ddb47921712f8022f62a6a88d3.jpg'),
(78, 'SCANNER EPSON', 'C463A-L550', 'EPSON', 'S4RY002994', 'IT.067.0219.1.Y020.00001', 'BAIK - UNBOX', 1, 1614136274, 'LEMARI 1.B (DEVICE)', '527c85160b4c0bad4e10f6dde6b7da0c.jpg'),
(79, 'CPU KOMPUTER', '-', 'SIMBADAS', '-', 'IT.001.0419.1.Y020.00001', 'BELUM DICEK', 1, 1614136406, 'LEMARI 1.B (DEVICE)', '4090fe4e8582cd2c49ebf6e571900db5.jpg'),
(80, 'VACUM CLEANER', 'CV-W1600PB', 'HITACHI', 'T90000297', '-', 'BAIK - INBOX', 1, 1614136549, 'LEMARI 1.C (I/O)', '8b22ee496ab45bc0c1c84a4aee17776b.jpg'),
(81, 'LAMPU SOROT LED EVACO 50W', '-', 'EVACO', '-', '-', 'BAIK - INBOX', 1, 1614136974, 'LEMARI 1.C (I/O)', 'dc22a2cd13eb01b7c519dfa839603035.jpg'),
(82, 'LAN / USB  CABLE TESTER', 'CT-168', 'TX', '-', '-', 'BAIK - INBOX', 1, 1614138239, 'LEMARI 1.A (JARKOM)', 'e961b39e2a0a0316d749ee39e03ffdd4.jpg'),
(83, 'TANG CRIMPING', 'HT-200R', 'OUBAO / HANLONG TOOLS', '-', '-', 'BAIK - INBOX', 3, 1614138855, 'LEMARI 2.B (TOOLS)', 'b180dd79a70a62ecf5c12e32db76f3ae.jpg'),
(84, 'ANTI-STATICC FIBER OPENIG TOOLS', 'JM-OP II', 'JAKEMY', '-', '-', 'BAIK - INBOX', 1, 1614138968, 'LEMARI 2.B (TOOLS)', '364e0656021e41517d7608650dd9fd54.jpg'),
(85, 'TANG SNAP RING', 'PL-SR0772', 'TEKIRO', '0080604020070', '-', 'BAIK - INBOX', 1, 1614139193, 'LEMARI 2.B (TOOLS)', '0effd890850dec1b34e753c78af7d9ad.jpg'),
(86, 'GUN KOMPRESOR', 'AU-PG1405', 'TEKIRO', '0080901000200', '-', 'BAIK - INBOX', 1, 1614139344, 'LEMARI 2.B (TOOLS)', 'e2898c8d78eec42e0f73d552a9543eef.jpg'),
(87, 'BATERAI TESTER', 'MIKRO-200', 'LANOOL', '20201100561', '-', 'BAIK - INBOX', 1, 1614146674, 'LEMARI 2.B (TOOLS)', '15265a0720dbb428d43a0938102abea5.jpg'),
(88, 'ALAT PENGUKUR JARAK', 'ED-58A', 'AIPRO', '001684', '-', 'BAIK - UNBOX', 1, 1614146807, 'LEMARI 2.B (TOOLS)', '43a4a619418ddb706d62ab124611228a.jpg'),
(89, 'MULTI TESTER', 'KW06-272', 'KRISBOW', '-', '-', 'BAIK - UNBOX', 1, 1614147041, 'LEMARI 2.B (TOOLS)', 'bb98a33f76131a0e21f08ca20a9b073c.jpg'),
(90, 'SOLDER', 'PRESTO 938N', 'DEKO', '-', '-', 'BAIK - UNBOX', 1, 1614147340, 'LEMARI 2.B (TOOLS)', '981a21b5bce1052662f3c86dd092a05b.jpg'),
(91, 'LEM TEMBAK', 'SD-102', '-', '-', '-', 'BAIK - UNBOX', 1, 1614147412, 'LEMARI 2.B (TOOLS)', '8e04898367c944c3e5c9523cfe680b88.jpg'),
(92, 'MATA BOR (SCREWDRIVER SET)', '-', 'ASTELIO', '-', '-', 'BAIK - INBOX', 1, 1614147927, 'LEMARI 2.B (TOOLS)', 'a665b8c42f95011e7a61cb7f114d09fa.jpg'),
(93, 'PAKET OBENG KRISBOW 7PCS', 'KW01-2651', 'KRISBOW', '-', '-', 'BAIK - INBOX', 1, 1614148030, 'LEMARI 2.B (TOOLS)', 'b803513176f20897f4ee3a0106c1e233.jpg'),
(94, 'MATA BOR (SCREWDRIVER SET)', '64-12', 'DEKO', '-', '-', 'BAIK - INBOX', 1, 1614148124, 'LEMARI 2.B (TOOLS)', '92f60c25359ac58adc4e1c266ff08605.jpg'),
(95, 'LAN CABLE TESTER', 'TCT-2690 PRO', 'GOLDTOOL', '19011797', 'IT.021.0819.1.YO20.000001', 'BAIK - INBOX', 1, 1614148807, 'LEMARI 2.B (TOOLS)', '67a737d3b76f8b29e9f34dc8716bf2f3.jpg'),
(96, 'SATU SET KUNCI KOMBINASI (8-24 MM)', 'WR-SE0296', 'TEKIRO', '-', '-', 'BAIK - INBOX', 11, 1614149173, 'LEMARI 2.B (TOOLS)', '307a6c50a1b19f58487d606b20c3361b.jpg'),
(97, 'TOOLBOX CADANGAN (LENGKAP)', '-', 'KRISBOW (BOX)', '-', '-', 'BAIK - INBOX', 7, 1614149402, 'LEMARI 2.B (TOOLS)', '96a327a9c9012aba488761e9d47d3e98.jpg'),
(98, 'TOOLBOX JARINGAN (LENGKAP)', '-', 'KRISBOW (BOX)', '-', '-', 'BAIK - INBOX', 8, 1614149782, 'LEMARI 2.B (TOOLS)', '6b61bbc888a09150eac7e4873f0cab7a.jpg'),
(99, 'TOOLBOX MAINTENANCE', '-', 'KRISBOW (BOX)', '-', '-', 'BAIK - INBOX', 1, 1614149832, 'LEMARI 2.B (TOOLS)', '4ea8f882081eb1186bbfeddbdf9b015c.jpg'),
(100, 'TOOL BOR', '-', 'MEIKITA', '-', '-', 'BAIK - INBOX', 1, 1614149940, 'LEMARI 2.B (TOOLS)', '131392776aace44fe115b0d09f9cca4b.jpg'),
(101, 'TOOLBOX KONEKTOR RJ-45', '-', 'MEIKITA', '-', '-', 'BAIK - INBOX', 1, 1614150037, 'LEMARI 2.B (TOOLS)', 'e30f6c4a669cc6c3d7263e7a2defe4f0.jpg'),
(102, 'TOOLBOX RANDOM', '-', 'MEIKITA', '-', '-', 'BAIK - INBOX', 7, 1614150161, 'LEMARI 2.B (TOOLS)', 'd6e9184637e59052c1558076f4e62e90.jpg'),
(103, 'TOOLSET ELEKTRONIK', '-', '-', '-', '-', 'BAIK - INBOX', 12, 1614150538, 'LEMARI 2.B (TOOLS)', 'e25c1131a79f322f3db30950f5f2d0cf.jpg'),
(104, 'BACK UPS', 'PR0700SFC', 'PROLINK', '53005011532203507 / 53005011532203229 / 53005011532203761 / 53005011532203234 / 53005011532203722 / 53005011532203233 ', 'IT.106.1215.100.3322 / IT.106.1215.100.1922 / IT.106.1215.100.2822 / IT.106.1215.100.2522 / IT.106.1215.100.2722 / IT.106.1215.100.2422     ', 'BAIK - UNBOX', 6, 1614217653, 'LEMARI 2.C (POWER SUP)', '67e781cf25f37c81824f987688de04e0.jpg'),
(105, 'BACK UPS', 'BX650LI-MS', 'APC', '9B1636A01873 / 9B1641A10943 / 9B1641A10941 / 9B1714A12705 / 9B1714A12658 /  9B1636A01876', 'IT.042.0517.1.Y020.00004 / IT.042.0517.1.Y020.00009 / IT.042.0517.1.Y020.00002 / IT.042.0917.1.Y020.00001 /  IT.042.0917.1.Y020.00009 / IT.042.0619.1.Y020.00001', 'BELUM DICEK', 6, 1614218997, 'LEMARI 2.C (POWER SUP)', 'f032497c0e6656e28a30365a9460442c.jpg'),
(106, 'BACK UPS', 'PRO650P/B', 'PROLINK', '56310919000190 / 5630914000298', 'IT.06.05.11.0005.22 / IT.042.1215.1.Y020.00004', 'BELUM DICEK', 2, 1614219227, 'LEMARI 2.C (POWER SUP)', '27275476f947480b3b1a3993f06fb696.jpg'),
(107, 'BACK UPS 302B', '302B', 'ICA', '-', 'IT.042.0319.1.Y020.00003 / IT.042.0319.1.Y020.00005', 'BAIK - INBOX', 2, 1614219586, 'LEMARI 2.C (POWER SUPPLY)', '3dadcde005cbd9ec48646d466bed11bf.jpg'),
(115, 'BACK UPS PASCAL', '-', 'PASCAL', '-', 'IT.042.0319.1.Y020.000--', 'BAIK - UNBOX', 1, 1614309716, 'LEMARI 2.C (POWER SUP)', '53e44cb30bafa1424c1ed4de8028abae.jpg'),
(116, 'BATTERY CHARGER', 'BCI-10', 'DAIDEN', '-', '-', 'BAIK - UNBOX', 1, 1614309816, 'LEMARI 2.C (POWER SUP)', 'e98a1c429c1d44741faa4ab241b9b950.jpg'),
(117, 'MULTI TESTER', 'CD800A', 'SANWA', '18055009274', '-', 'BAIK - INBOX', 1, 1614588946, 'LEMARI 2.B (TOOLS)', 'df1d5e26af19571b76283ee07e9ef3fc.jpg'),
(118, 'WEBCAM', 'KCC-REM-DZL-V-U0029', 'LOGITECH', '2008LZ50C4C8', '-', 'BAIK - UNBOX', 1, 1614590187, 'LEMARI 3.A (RANDOM)', '13c2d84a2f632b7bce9e3bf6de4514c1.jpg'),
(119, 'LAPTOP', 'LATITUDE E5440', 'DELL', '-', 'IT.104.0715.1.00011', 'RUSAK - UNBOX', 1, 1614590666, 'LEMARI 1.C (BARANG RUSAK)', 'c83929e25f213dad6829296ae2bccdc0.jpg'),
(120, 'CPU KOMPUTER', '-', 'DAZUMBA', '-', 'IT.009.1014.1.Y020.00001 / IT.009.01181.Y020.00001', 'RUSAK - UNBOX', 1, 1614590958, 'LEMARI 1.C (BARANG RUSAK)', '42cd6e7720997249ade9ed8f05b69c49.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` varchar(10) NOT NULL,
  `is_active` varchar(10) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(7, 'GUNA DERMAWAN', 'gunadermawan62@gmail.com', 'default.png', '$2y$10$p7bXaxtAIc67yNB6Zd6qHe06J5gi9XwGo2F1zzqvlcxTl80Y6Ba/G', '1', '1', 1608484874),
(8, 'gunader', '111201811538@mhs.dinus.ac.id', 'default.png', '$2y$10$vBU4pknUKiLfuAaPcG0QpeIHKCPDQ./WoVOYFuGF2p5D9UwL9aqU2', '2', '1', 1611046972),
(20, 'stefanus', 'stefanusdwd17@gmail.com', 'default.png', '$2y$10$kkFs3Zvja8teGBgj6bAvz.d/PBKU9.0BDvsTZDpWe2fGWdQ9cEnt.', '2', '1', 1613442238);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator '),
(2, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Beranda', 'admin', 'fas fa-fw fa-house-user', 1),
(2, 2, 'Profil', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Sunting Profil', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 1, 'Tambah Pengguna', 'admin/user', 'fas fa-fw fa-user-plus', 1),
(5, 2, 'Data Asset', 'user/dataasset', 'fas fa-database', 1),
(6, 1, 'Backup Database', 'admin/backup', 'fas fa-cloud-download-alt', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_asset`
--
ALTER TABLE `tb_asset`
  ADD PRIMARY KEY (`id_asset`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_asset`
--
ALTER TABLE `tb_asset`
  MODIFY `id_asset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
