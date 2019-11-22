-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Nov 2019 pada 17.53
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `cat_id` int(100) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`cat_id`, `cat_name`) VALUES
(1, 'Laptop'),
(2, 'CPU'),
(3, 'Handphone'),
(4, 'Printer'),
(5, 'Monitor'),
(6, 'Infocus'),
(7, 'Mouse Kabel'),
(8, 'Mouse Wireless'),
(9, 'Keyboard Kabel'),
(10, 'Kabel Wireless'),
(11, 'Ipad'),
(14, 'Connector'),
(15, 'TP-Link Wifi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_department`
--

CREATE TABLE `tb_department` (
  `id_department` int(11) NOT NULL,
  `department` varchar(225) NOT NULL,
  `stock` varchar(225) DEFAULT NULL,
  `remarks` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_department`
--

INSERT INTO `tb_department` (`id_department`, `department`, `stock`, `remarks`) VALUES
(1, 'CI Department', '-', NULL),
(2, 'Airfreight Import', '-', NULL),
(3, 'Airfreight Export', '-', NULL),
(4, 'Customs Department', '-', NULL),
(5, 'Finance', '-', NULL),
(7, 'Sales Airfreight', '-', NULL),
(8, 'Sales Seafreight', '-', NULL),
(9, 'Sales Support', '-', NULL),
(10, 'Seafreight Export Nike', '-', NULL),
(11, 'Seafreight Export Adidas', '-', NULL),
(12, 'Seafreight Export General', '-', NULL),
(13, 'Seafreight Import General', '-', NULL),
(14, 'Seafreight OKAM', '-', NULL),
(15, 'Seafreight BD', '-', NULL),
(16, 'Seafreight System & Process', '-', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_log`
--

CREATE TABLE `tb_log` (
  `log_id` int(10) NOT NULL,
  `log_user` varchar(100) NOT NULL,
  `log_type` varchar(100) NOT NULL,
  `log_date` date NOT NULL,
  `log_remarks` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_log`
--

INSERT INTO `tb_log` (`log_id`, `log_user`, `log_type`, `log_date`, `log_remarks`) VALUES
(567, 'admin', 'login', '2019-05-14', ' '),
(568, 'admin', 'login', '2019-05-15', ' '),
(569, 'admin', 'login', '2019-05-15', ' '),
(570, 'admin', 'login', '2019-05-15', ' '),
(571, 'admin', 'login', '2019-05-16', ' '),
(572, 'admin', 'login', '2019-05-16', ' '),
(573, 'admin', 'login', '2019-05-16', ' '),
(574, 'admin', 'login', '2019-05-17', ' '),
(575, 'admin', 'login', '2019-05-20', ' '),
(576, 'HRD', 'login', '2019-05-20', ' '),
(577, 'admin', 'login', '2019-05-20', ' '),
(578, 'HRD', 'login', '2019-05-21', ' '),
(579, 'admin', 'login', '2019-05-21', ' '),
(580, 'admin', 'login', '2019-05-21', ' '),
(581, 'admin', 'login', '2019-05-22', ' '),
(582, 'admin', 'login', '2019-06-11', ' '),
(583, 'admin', 'login', '2019-06-14', ' '),
(584, 'admin', 'login', '2019-06-20', ' '),
(585, 'admin', 'login', '2019-06-24', ' '),
(586, 'admin', 'login', '2019-06-28', ' '),
(587, 'admin', 'login', '2019-07-04', ' '),
(588, 'admin', 'login', '2019-07-04', ' '),
(589, 'admin', 'login', '2019-07-09', ' '),
(590, 'admin', 'login', '2019-07-15', ' '),
(591, 'admin', 'login', '2019-07-15', ' '),
(592, 'admin', 'login', '2019-07-16', ' '),
(593, 'admina', 'login', '2019-07-16', ' '),
(594, 'admin', 'login', '2019-07-16', ' '),
(595, 'admin', 'login', '2019-07-18', ' '),
(596, 'admin', 'login', '2019-07-22', ' '),
(597, 'admin', 'login', '2019-07-23', ' '),
(598, 'admin', 'login', '2019-07-23', ' '),
(599, 'admin', 'login', '2019-07-23', ' '),
(600, 'admin', 'login', '2019-07-23', ' '),
(601, 'admin', 'login', '2019-07-23', ' '),
(602, 'Administrator', 'login', '2019-07-23', ' '),
(603, 'Administrator', 'login', '2019-07-24', ' '),
(604, 'Administrator', 'login', '2019-07-24', ' '),
(605, 'Administrator', 'login', '2019-07-24', ' '),
(606, 'administrator', 'login', '2019-07-24', ' '),
(607, 'Administrator', 'login', '2019-07-24', ' '),
(608, 'Administrator', 'login', '2019-07-24', ' '),
(609, 'Administrator', 'login', '2019-07-24', ' '),
(610, 'Administrator', 'login', '2019-07-25', ' '),
(611, 'Administrator', 'login', '2019-07-25', ' '),
(612, 'Administrator', 'login', '2019-07-25', ' '),
(613, 'admin', 'login', '2019-07-25', ' '),
(614, 'admin', 'login', '2019-07-29', ' '),
(615, 'Administrator', 'login', '2019-07-29', ' '),
(616, 'Administrator', 'login', '2019-07-29', ' '),
(617, 'Administrator', 'login', '2019-07-29', ' '),
(618, 'Administrator', 'login', '2019-07-30', ' '),
(619, 'Administrator', 'login', '2019-07-30', ' '),
(620, 'admin', 'login', '2019-07-30', ' '),
(621, 'Administrator', 'login', '2019-07-30', ' '),
(622, 'Administrator', 'login', '2019-07-30', ' '),
(623, 'Administrator', 'login', '2019-07-30', ' '),
(624, 'Administrator', 'login', '2019-07-30', ' '),
(625, 'Administrator', 'login', '2019-07-30', ' '),
(626, 'Administrator', 'login', '2019-08-01', ' '),
(627, 'Administrator', 'login', '2019-08-01', ' '),
(628, 'Administrator', 'login', '2019-08-01', ' '),
(629, 'Administrator', 'login', '2019-08-02', ' '),
(630, 'Administrator', 'login', '2019-08-06', ' '),
(631, 'Administrator', 'login', '2019-08-06', ' '),
(632, 'Administrator', 'login', '2019-08-06', ' '),
(633, 'amran.hakim', 'login', '2019-08-07', ' '),
(634, 'amran.hakim', 'login', '2019-08-07', ' '),
(635, 'amran.hakim', 'login', '2019-08-07', ' '),
(636, 'amran.hakim', 'login', '2019-08-07', ' '),
(637, 'admin', 'login', '2019-08-07', ' '),
(638, 'amran.hakim', 'login', '2019-08-07', ' '),
(639, 'amran.hakim', 'login', '2019-08-07', ' '),
(640, 'amran.hakim', 'login', '2019-08-08', ' '),
(641, 'amran.hakim', 'login', '2019-08-08', ' '),
(642, 'amran.hakim', 'login', '2019-08-08', ' '),
(643, 'amran.hakim', 'login', '2019-08-08', ' '),
(644, 'amran.hakim', 'login', '2019-08-09', ' '),
(645, 'amran.hakim', 'login', '2019-08-09', ' '),
(646, 'Administrator', 'login', '2019-08-12', ' '),
(647, 'amran.hakim', 'login', '2019-08-12', ' '),
(648, 'amran.hakim', 'login', '2019-08-12', ' '),
(649, 'amran.hakim', 'login', '2019-08-12', ' '),
(650, 'amran.hakim', 'login', '2019-08-12', ' '),
(651, 'amran.hakim', 'login', '2019-08-13', ' '),
(652, 'amran.hakim', 'login', '2019-08-14', ' '),
(653, 'amran.hakim', 'login', '2019-08-14', ' '),
(654, 'amran.hakim', 'login', '2019-08-15', ' '),
(655, 'amran.hakim', 'login', '2019-08-15', ' '),
(656, 'amran.hakim', 'login', '2019-08-16', ' '),
(657, 'admin', 'login', '2019-08-21', ' '),
(658, 'admin', 'login', '2019-08-22', ' '),
(659, 'admin', 'login', '2019-08-22', ' '),
(660, 'admin', 'login', '2019-08-22', ' '),
(661, 'admin', 'login', '2019-08-23', ' '),
(662, 'admin', 'login', '2019-08-23', ' '),
(663, 'amran.hakim', 'login', '2019-08-23', ' '),
(664, 'admin', 'login', '2019-08-23', ' '),
(665, 'admin', 'login', '2019-08-26', ' '),
(666, 'admin', 'login', '2019-08-26', ' '),
(667, 'amran.hakim', 'login', '2019-08-26', ' '),
(668, 'amran.hakim', 'login', '2019-08-26', ' '),
(669, 'admin', 'login', '2019-08-26', ' '),
(670, 'admin', 'login', '2019-08-26', ' '),
(671, 'amran.hakim', 'login', '2019-08-26', ' '),
(672, 'amran.hakim', 'login', '2019-08-26', ' '),
(673, 'HRD', 'login', '2019-08-26', ' '),
(674, 'admin', 'login', '2019-08-26', ' '),
(675, 'admin', 'login', '2019-08-26', ' '),
(676, 'admin', 'login', '2019-08-26', ' '),
(677, 'admin', 'login', '2019-08-26', ' '),
(678, 'admin', 'login', '2019-08-26', ' '),
(679, 'admin', 'login', '2019-08-26', ' '),
(680, 'admin', 'login', '2019-08-26', ' '),
(681, 'admin', 'login', '2019-08-28', ' '),
(682, 'amran.hakim', 'login', '2019-08-28', ' '),
(683, 'admin', 'login', '2019-08-28', ' '),
(684, 'admin', 'login', '2019-08-28', ' '),
(685, 'admin', 'login', '2019-08-29', ' '),
(686, 'admin', 'login', '2019-09-02', ' '),
(687, 'admin', 'login', '2019-09-02', ' '),
(688, 'admin', 'login', '2019-09-03', ' '),
(689, 'fauzi.nurrohman', 'login', '2019-09-03', ' '),
(690, 'admin', 'login', '2019-09-03', ' '),
(691, 'admin', 'login', '2019-09-03', ' '),
(692, 'admin', 'login', '2019-09-03', ' '),
(693, 'admin', 'login', '2019-09-03', ' '),
(694, 'admin', 'login', '2019-09-03', ' '),
(695, 'admin', 'login', '2019-09-03', ' '),
(696, 'admin', 'login', '2019-09-04', ' '),
(697, 'admin', 'login', '2019-09-04', ' '),
(698, 'admin', 'login', '2019-09-04', ' '),
(699, 'admin', 'login', '2019-09-04', ' '),
(700, 'admin', 'login', '2019-09-04', ' '),
(701, 'admin', 'login', '2019-09-04', ' '),
(702, 'admin', 'login', '2019-09-04', ' '),
(703, 'admin', 'login', '2019-09-05', ' '),
(704, 'admin', 'login', '2019-09-05', ' '),
(705, 'admin', 'login', '2019-09-05', ' '),
(706, 'admin', 'login', '2019-09-10', ' '),
(707, 'admin', 'login', '2019-09-12', ' '),
(708, 'admin', 'login', '2019-09-12', ' '),
(709, 'admin', 'login', '2019-09-13', ' '),
(710, 'admin', 'login', '2019-09-16', ' '),
(711, 'admin', 'login', '2019-09-18', ' '),
(712, 'admin', 'login', '2019-09-19', ' '),
(713, 'admin', 'login', '2019-09-20', ' '),
(714, 'admin', 'login', '2019-09-20', ' '),
(715, 'admin', 'login', '2019-09-20', ' '),
(716, 'admin', 'login', '2019-09-20', ' '),
(717, 'admin', 'login', '2019-09-22', ' '),
(718, 'admin', 'login', '2019-09-23', ' '),
(719, 'admin', 'login', '2019-09-23', ' '),
(720, 'admin', 'login', '2019-09-23', ' '),
(721, 'admin', 'login', '2019-09-23', ' '),
(722, 'admin', 'login', '2019-09-23', ' '),
(723, 'admin', 'login', '2019-09-23', ' '),
(724, 'admin', 'login', '2019-09-24', ' '),
(725, 'admin', 'login', '2019-09-24', ' '),
(726, 'admin', 'login', '2019-09-24', ' '),
(727, 'admin', 'login', '2019-09-24', ' '),
(728, 'admin', 'login', '2019-09-24', ' '),
(729, 'admin', 'login', '2019-09-24', ' '),
(730, 'admin', 'login', '2019-09-24', ' '),
(731, 'admin', 'login', '2019-09-24', ' '),
(732, 'admin', 'login', '2019-09-25', ' '),
(733, 'admin', 'login', '2019-09-25', ' '),
(734, 'admin', 'login', '2019-09-26', ' '),
(735, 'admin', 'login', '2019-09-26', ' '),
(736, 'admin', 'login', '2019-09-27', ' '),
(737, 'admin', 'login', '2019-09-27', ' '),
(738, 'admin', 'login', '2019-09-30', ' '),
(739, 'admin', 'login', '2019-10-01', ' '),
(740, 'admin', 'login', '2019-10-01', ' '),
(741, 'admin', 'login', '2019-10-01', ' '),
(742, 'admin', 'login', '2019-10-01', ' '),
(743, 'admin', 'login', '2019-10-01', ' '),
(744, 'admin', 'login', '2019-10-01', ' '),
(745, 'admin', 'login', '2019-10-02', ' '),
(746, 'admin', 'login', '2019-10-07', ' '),
(747, 'admin', 'login', '2019-10-07', ' '),
(748, 'admin', 'login', '2019-10-07', ' '),
(749, 'admin', 'login', '2019-10-08', ' '),
(750, 'admin', 'login', '2019-10-09', ' '),
(751, 'admin', 'login', '2019-10-09', ' '),
(752, 'admin', 'login', '2019-10-09', ' '),
(753, 'admin', 'login', '2019-10-09', ' '),
(754, 'admin', 'login', '2019-10-09', ' '),
(755, 'admin', 'login', '2019-10-09', ' '),
(756, 'admin', 'login', '2019-10-09', ' '),
(757, 'admin', 'login', '2019-10-14', ' '),
(758, 'admin', 'login', '2019-10-15', ' '),
(759, 'admin', 'login', '2019-10-15', ' '),
(760, 'admin', 'login', '2019-10-16', ' '),
(761, 'admin', 'login', '2019-10-17', ' '),
(762, 'admin', 'login', '2019-10-22', ' '),
(763, 'admin', 'login', '2019-10-22', ' '),
(764, 'admin', 'login', '2019-10-28', ' '),
(765, 'admin', 'login', '2019-10-28', ' '),
(766, 'admin', 'login', '2019-10-28', ' '),
(767, 'admin', 'login', '2019-10-28', ' '),
(768, 'admin', 'login', '2019-10-28', ' '),
(769, 'admin', 'login', '2019-10-29', ' '),
(770, 'admin', 'login', '2019-10-30', ' '),
(771, 'admin', 'login', '2019-10-31', ' '),
(772, 'admin', 'login', '2019-10-31', ' '),
(773, 'admin', 'login', '2019-10-31', ' '),
(774, 'admin', 'login', '2019-11-04', ' '),
(775, 'admin', 'login', '2019-11-04', ' '),
(776, 'admin', 'login', '2019-11-06', ' '),
(777, 'admin', 'login', '2019-11-08', ' '),
(778, 'admin', 'login', '2019-11-11', ' '),
(779, 'admin', 'login', '2019-11-12', ' '),
(780, 'admin', 'login', '2019-11-13', ' '),
(781, 'admin', 'login', '2019-11-14', ' '),
(782, 'admin', 'login', '2019-11-14', ' '),
(783, 'admin', 'login', '2019-11-15', ' '),
(784, 'admin', 'login', '2019-11-15', ' '),
(785, 'admin', 'login', '2019-11-15', ' '),
(786, 'admin', 'login', '2019-11-18', ' '),
(787, 'admin', 'login', '2019-11-22', ' ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_log_history`
--

CREATE TABLE `tb_log_history` (
  `his_id` int(100) NOT NULL,
  `his_task` varchar(100) NOT NULL,
  `his_user` varchar(100) NOT NULL,
  `his_product` varchar(100) NOT NULL,
  `his_date_time` datetime NOT NULL,
  `his_remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_log_history_req`
--

CREATE TABLE `tb_log_history_req` (
  `his_id_req` int(11) NOT NULL,
  `his_task_req` varchar(225) NOT NULL,
  `his_user_req` varchar(225) NOT NULL,
  `his_product_req` varchar(225) NOT NULL,
  `his_date_time_req` datetime NOT NULL,
  `his_remark_req` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_master_product`
--

CREATE TABLE `tb_master_product` (
  `id_master` int(100) NOT NULL,
  `Device` varchar(255) NOT NULL,
  `Brand` varchar(255) NOT NULL,
  `Model` varchar(255) NOT NULL,
  `s_n` varchar(255) NOT NULL,
  `CUP` varchar(255) NOT NULL,
  `hostname` varchar(255) NOT NULL,
  `email` enum('Yes','No') NOT NULL,
  `Handover` varchar(255) NOT NULL,
  `Request` varchar(255) NOT NULL,
  `Allocation` varchar(255) NOT NULL,
  `Remarks` varchar(255) NOT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `department_asset` varchar(255) DEFAULT NULL,
  `column3` varchar(255) DEFAULT NULL,
  `column4` varchar(255) DEFAULT NULL,
  `column5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_master_product`
--

INSERT INTO `tb_master_product` (`id_master`, `Device`, `Brand`, `Model`, `s_n`, `CUP`, `hostname`, `email`, `Handover`, `Request`, `Allocation`, `Remarks`, `Location`, `department_asset`, `column3`, `column4`, `column5`) VALUES
(1400, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOUCPLD', 'ext.muchamad.zamroni', 'JKTCL226-01', 'Yes', '27-02-2019', '27-02-2019', 'handover completed', 'PHASE 1 - PC', NULL, NULL, NULL, NULL, NULL),
(1401, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOUCPLV', 'ext.budi.trianna / user_test', 'JKTCL226-02', 'No', '2019-02-27', '2019-01-28', 'handover completed', 'PHASE 1 - PC', NULL, NULL, NULL, NULL, NULL),
(1409, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOUCPLU', 'ext.gatot.susanto', 'JKTCL226-03', 'No', '2019-02-27', '2019-01-28', 'handover completed', 'PHASE 1 - PC', NULL, NULL, NULL, NULL, NULL),
(1410, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOUCPLM', 'ext.alinda.suyana', 'JKTCL226-04', 'No', '2019-02-27', '2019-02-27', 'handover completed', 'PHASE 1 - PC', NULL, NULL, NULL, NULL, NULL),
(1411, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOUCPLK', 'ext.gana.syavithra', 'JKTCL226-05', 'Yes', '2019-02-27', '2019-02-27', 'handover completed', 'PHASE 1 - PC', NULL, NULL, NULL, NULL, NULL),
(1412, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOUCPMO', 'ext.hilman.daguci / ext.muammar.fahrizal', 'JKTCL226-06', 'Yes', '2019-02-27', '2019-01-28', 'handover completed', 'PHASE 1 - PC', NULL, NULL, NULL, NULL, NULL),
(1413, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOUCPL6', 'ext.ryadh.azis / user_test ', 'JKTCL226-07', 'No', '2019-02-27', '2019-01-28', 'handover completed', 'PHASE 1 - PC', NULL, NULL, NULL, NULL, NULL),
(1414, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOUCPLS', 'ext.polary.bakti / ext.achmad.herman', 'JKTCL226-08', 'No', '2019-02-27', '2019-01-28', 'handover completed', 'PHASE 1 - PC', NULL, NULL, NULL, NULL, NULL),
(1415, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOUCPLE', 'ext.henri.sulystiono / ext.andi.hidayat', 'JKTCL226-09', 'Yes', '2019-02-27', '2019-01-28', 'handover completed', 'PHASE 1 - PC', NULL, NULL, NULL, NULL, NULL),
(1416, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCONCZVJ', 'ext.mundir.mundir', 'JKTCL226-10', 'Yes', '2019-02-27', '2019-02-27', 'handover completed', 'PHASE 1 - PC', NULL, NULL, NULL, NULL, NULL),
(1417, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOSKGTY', 'ext.sulaeman.sulaeman', 'JKTCL226-15', 'Yes', '2019-02-27', '2019-02-27', 'handover completed', 'PHASE 2 - PC', NULL, NULL, NULL, NULL, NULL),
(1418, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOUSPMI', 'ext.dian.haristianto', 'JKTCL226-16', 'Yes', '2019-03-27', '2019-02-14', 'handover completed', 'PHASE 1 - PC', NULL, NULL, NULL, NULL, NULL),
(1419, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOGFW3C', 'ext.sumaryono.sumary ', 'JKTCL226-17', 'Yes', '27-03-2019', '14-02-2019', 'PHASE 2 - PC', 'handover completed', 'Empety', 'Empety\r', NULL, NULL, NULL),
(1420, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOUCPM2', 'ext.edwin.dirhayanto', 'JKTCL226-18', 'Yes', '27-03-2019', '14-02-2019', 'PHASE 2 - PC', 'handover completed', 'Empety', 'Empety\r', NULL, NULL, NULL),
(1421, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOQFW3L', 'ext.ribut.sukirmana', 'JKTCL226-19', 'No', '27-03-2019', '14-02-2019', 'PHASE 2 - PC', 'handover completed', 'Empety', 'Empety\r', NULL, NULL, NULL),
(1422, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOQFW2W', 'ext.suheri.suheri', 'JKTCL226-20', 'Yes', '27-03-2019', '14-02-2019', 'PHASE 2 - PC', 'handover completed', 'Empety', 'Empety\r', NULL, NULL, NULL),
(1423, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOUCPLS', 'ext.widodo.widodo / ext.arif.darmawan', 'JKTCL226-21', 'Yes', '27-03-2019', '14-02-2019', 'PHASE 2 - PC', 'handover completed', 'Empety', 'Empety\r', NULL, NULL, NULL),
(1424, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOSKGUY', 'ext.sutarno.sutarno / ext.supriyanto.junaedi', 'JKTCL226-22', 'Yes', '27-03-2019', '14-02-2019', 'PHASE 2 - PC', 'handover completed', 'Empety', 'Empety\r', NULL, NULL, NULL),
(1425, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOSKGUW', 'ext.hadi.siswanto', 'JKTCL226-23', 'Yes', '27-03-2019', '14-02-2019', 'PHASE 2 - PC', 'handover completed', 'Empety', 'Empety\r', NULL, NULL, NULL),
(1426, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOUCPMC', 'ext.heri.susanto', 'JKTCL226-24', 'Yes', '27-03-2019', '14-02-2019', 'PHASE 2 - PC', 'handover completed', 'Empety', 'Empety\r', NULL, NULL, NULL),
(1427, 'PC', 'LENOVO ThinkCentre', '10M740L1A', 'PCOSKGTU', 'ext.madi.madi / ext.suherman.suherman', 'JKTCL226-25', 'Yes', '27-03-2019', '14-02-2019', 'PHASE 2 - PC', 'handover completed', 'Empety', 'Empety\r', NULL, NULL, NULL),
(1434, 'PC', 'LENOVO ThinkCentre', '10M740L1A', '-', '-', '', '', '', '14-02-2019', 'PHASE 2 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1435, 'PC', 'LENOVO ThinkCentre', '10M740L1A', '-', '-', '', '', '', '14-02-2019', 'PHASE 2 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1436, 'PC', 'LENOVO ThinkCentre', '10M740L1A', '-', '-', '', '', '', '14-02-2019', 'PHASE 2 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1437, 'PC', 'LENOVO ThinkCentre', '10M740L1A', '-', '-', '', '', '', '14-02-2019', 'PHASE 2 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1438, 'PC', 'LENOVO ThinkCentre', '31P10STA012IF', 'SPC11KSL9', '-', 'JKTCL226-42', '', '', '', 'PHASE 3 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1439, 'PC', 'LENOVO ThinkCentre', '31P10STA012IF', 'SPC11KRN6', '-', 'JKTCL226-38', '', '', '', 'PHASE 3 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1440, 'PC', 'LENOVO ThinkCentre', '31P10STA012IF', 'SPC11KRMY', '-', 'JKTCL226-34', '', '', '', 'PHASE 3 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1441, 'PC', 'LENOVO ThinkCentre', '31P10STA012IF', 'SPC11KSMN', '-', 'JKTCL226-40', '', '', '', 'PHASE 3 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1442, 'PC', 'LENOVO ThinkCentre', '31P10STA012IF', 'SPC11KSMQ', '-', 'JKTCL226-39', '', '', '', 'PHASE 3 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1443, 'PC', 'LENOVO ThinkCentre', '31P10STA012IF', 'SPC11KSL7', '-', 'JKTCL226-43', '', '', '', 'PHASE 3 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1444, 'PC', 'LENOVO ThinkCentre', '31P10STA012IF', 'SPC11KSNJ', '-', 'JKTCL226-41', '', '', '', 'PHASE 3 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1445, 'PC', 'LENOVO ThinkCentre', '31P10STA012IF', 'SPC11KSN4', '-', 'JKTCL226-37', '', '', '', 'PHASE 3 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1446, 'PC', 'LENOVO ThinkCentre', '31P10STA012IF', 'SPC11KSN2', '-', 'JKTCL226-36', '', '', '', 'PHASE 3 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1447, 'PC', 'LENOVO ThinkCentre', '31P10STA012IF', 'SPC11KSLT', '-', 'JKTCL226-35', '', '', '', 'PHASE 3 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1448, 'PC', 'LENOVO ThinkCentre', '31P10STA012IF', 'SPC11KSLJ', '-', 'JKTCL226-28', '', '', '', 'PHASE 3 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1449, 'PC', 'LENOVO ThinkCentre', '31P10STA012IF', 'SPC11KSKZ', '-', 'JKTCL226-26', '', '', '', 'PHASE 3 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1450, 'PC', 'LENOVO ThinkCentre', '31P10STA012IF', 'SPC11KRN2', '-', 'JKTCL226-32', '', '', '2019-07-11', 'PHASE 3 - PC', 'In KNJKT OFFICE', 'WH-CBT/Naxis', 'Empety', NULL, NULL, NULL),
(1451, 'PC', 'LENOVO ThinkCentre', '31P10STA012IF', 'SPC11KSLX', '-', 'JKTCL226-33', '', '', '', 'PHASE 3 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1452, 'PC', 'LENOVO ThinkCentre', '31P10STA012IF', 'SPC11KRNC', '-', 'JKTCL226-27', '', '', '', 'PHASE 3 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1453, 'PC', 'LENOVO ThinkCentre', '31P10STA012IF', 'SPC11KRL8', '-', 'JKTCL226-30', '', '', '', 'PHASE 3 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1454, 'PC', 'LENOVO ThinkCentre', '31P10STA012IF', 'SPC11KRMW', '-', 'JKTCL226-29', '', '', '', 'PHASE 3 - PC', 'In KNJKT OFFICE', 'Empety', 'Empety', NULL, NULL, NULL),
(1455, 'PC', 'LENOVO ThinkCentre', '31P10STA012IF', 'SPC11KSNV', '-', 'JKTCL226-31', '', '', '2019-07-11', 'PHASE 3 - PC', 'In KNJKT OFFICE', 'WH-CBT/Naxis', 'Empety', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_owner`
--

CREATE TABLE `tb_owner` (
  `owe_id` int(100) NOT NULL,
  `owe_user` varchar(100) NOT NULL,
  `owe_prod` varchar(100) NOT NULL,
  `owe_set_date` date NOT NULL,
  `owe_remark` varchar(100) NOT NULL,
  `owe_status` varchar(111) NOT NULL,
  `owe_latest_update` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product`
--

CREATE TABLE `tb_product` (
  `pr_id` int(11) NOT NULL,
  `id_req` varchar(225) DEFAULT NULL,
  `user_id` varchar(225) DEFAULT NULL,
  `pr_status` varchar(225) DEFAULT NULL,
  `pr_purchase` date DEFAULT NULL,
  `pr_sn` varchar(225) DEFAULT NULL,
  `pr_po_no` varchar(225) DEFAULT NULL,
  `monitoring` varchar(225) DEFAULT NULL,
  `remark` varchar(225) DEFAULT NULL,
  `machine_id` varchar(225) DEFAULT NULL,
  `pr_name` varchar(225) DEFAULT NULL,
  `barcode` varchar(225) DEFAULT NULL,
  `department` varchar(225) DEFAULT NULL,
  `status_label` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_product`
--

INSERT INTO `tb_product` (`pr_id`, `id_req`, `user_id`, `pr_status`, `pr_purchase`, `pr_sn`, `pr_po_no`, `monitoring`, `remark`, `machine_id`, `pr_name`, `barcode`, `department`, `status_label`) VALUES
(2, '0', '1012', 'In Use', '2019-09-11', 'F3BH62S', '-', '-', '-', 'bthego102-04.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(3, '0', '734', 'In Use', '2019-09-11', '4CE83612LJ', '-', '-', '-', 'dc-guard2-sdj.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(4, '0', NULL, 'Ready', '2019-09-11', 'SGH102RCSS', '-', '-', '-', 'jktae191-04.jkt-fa.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(5, '0', '870', 'In Use', '2019-09-11', 'SGH346SCX0', '-', '-', '-', 'jktae191.jkt-fa.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(6, '0', '766', 'In Use', '2019-09-11', '2CE33830SD', '-', '-', '-', 'jktae206-lt.jkt-fa.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(7, '0', NULL, 'Ready', '2019-09-11', 'SGH8340H8Q', '-', '-', '-', 'jktae207.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(8, '0', '933', 'In Use', '2019-09-11', 'PB025FY1', '-', '-', '-', 'jktae208-01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(9, '0', '894', 'In Use', '2019-09-11', 'SGH116TCXP', '-', '-', '-', 'jktah226-12.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(10, '0', '934', 'In Use', '2019-09-11', 'SGH80607D3', '-', '-', '-', 'jktai187.jkt-fa.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(11, '0', '1020', 'In Use', '2019-09-11', 'SGH114R7XT', '-', '-', '-', 'jktai212-02.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(12, '0', '1026', 'In Use', '2019-09-11', 'SGH306SB90', '-', '-', '-', 'jktai213-01.jkt-fa.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(13, '0', '779', 'In Use', '2019-09-11', '5CD637308M', '-', '-', '-', 'jktai226-04-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(14, '0', '853', 'In Use', '2019-09-11', 'DH6862S', '-', '-', '-', 'jktai226-09.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(15, '0', '803', 'In Use', '2019-09-11', 'SGH116TCXR', '-', '-', '-', 'jktai226-12.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(16, '0', '742', 'In Use', '2019-09-11', '2CE3490W4B', '-', '-', '-', 'jktai226-lt-02.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(17, '0', NULL, 'Ready', '2019-09-11', 'CND5230H7C', '-', '-', '-', 'jktai226-lt-06.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(18, '0', '846', 'In Use', '2019-09-11', 'PC02WUZM', '-', '-', '-', 'jktai332.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(19, '0', '979', 'In Use', '2019-09-11', 'PC02WUZG', '-', '-', '-', 'jktaw-225.jkt-fa.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(20, '0', '925', 'In Use', '2019-09-11', 'SGH8110177', '-', '-', '-', 'jktaw225-07.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(21, '0', '912', 'In Use', '2019-09-11', '2CE35118M4', '-', '-', '-', 'jktaw226-lt-11.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(22, '0', '955', 'In Use', '2019-09-11', 'SGH306SB9M', '-', '-', '-', 'jktax227-01.jkt-fa.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(23, '0', '1004', 'In Use', '2019-09-11', 'VMware-56 4d ad 39 9a ce 80 9f-c3 c4 fb df 7c 7c ae e5', '-', '-', '-', 'jktbodc01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(24, '0', '869', 'In Use', '2019-09-11', 'VMware-56 4d 23 f2 42 2b 80 46-3d 49 7a bc 30 95 9c 37', '-', '-', '-', 'jktbofs01.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(25, '0', '1004', 'In Use', '2019-09-11', 'VMware-56 4d 37 27 05 6b ba 33-56 64 1c db c4 9f b0 5c', '-', '-', '-', 'jktbofs03.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(26, '0', '930', 'In Use', '2019-09-11', '5CD61147TY', '-', '-', '-', 'jktca145-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(27, '0', NULL, 'Ready', '2019-09-23', 'PC11KSL9', '-', '-', '', '-', '', 'FAIT-1909', '', 'FAIT-1909-ID27'),
(28, '0', NULL, 'Ready', '2019-09-23', 'PC11KRN6', '-', '-', '', '-', '', 'FAIT-1909', '', 'FAIT-1909-ID28'),
(29, '0', '925', 'In Use', '2019-09-11', 'SGH137TJMR', '-', '-', '-', 'jktcap146-02.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(30, '0', '1043', 'Ready', '2019-09-23', 'PC11KSMN', '-', '-', '', '-', '', 'FAIT-1909', '', 'FAIT-1909-ID30'),
(31, '0', '808', 'In Use', '2019-09-11', 'PC02WUZN', '-', '-', '-', 'jktcap226-01.jkt-fa.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(32, '0', '1041', 'Ready', '2019-09-23', 'PC11KSL7', '-', '-', '', '-', '', 'FAIT-1909', '', 'FAIT-1909-ID32'),
(33, '0', '1042', 'In Use', '2019-09-11', 'PC11KSNJ', '-', '-', '-', 'jktcl226-41.unnamed.id.kn', '1', 'FAIT-1909', '', 'FAIT-1909-ID33'),
(34, '0', '1039', 'Ready', '2019-09-23', 'PC11KSN4', '-', '-', '', '-', '', 'FAIT-1909', '', 'FAIT-1909-ID34'),
(35, '0', '918', 'In Use', '2019-09-11', '2CE35118LQ', '-', '-', '-', 'jktcar226-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(36, '0', NULL, 'Ready', '2019-09-23', 'PC11KSLT', '-', '-', '', '-', '', 'FAIT-1909', '', 'FAIT-1909-ID36'),
(37, '0', '920', 'In Use', '2019-09-11', 'PB025FXQ', '-', '-', '-', 'jktcat136.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(38, '0', '745', 'In Use', '2019-09-11', 'GBN0CV10C401468', '-', '-', '-', 'jktcbt-lt-01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(39, '0', '817', 'In Use', '2019-09-11', 'UNGE6SN006734000708001', '-', '-', '-', 'jktcbt-lt-03.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(40, '0', '1040', 'In Use', '2019-09-11', 'PC11KSLX', '-', '-', '-', 'jktcl226-33.unnamed.id.kn', '1', 'FAIT-1909', '', 'FAIT-1909-ID40'),
(41, '0', '977', 'In Use', '2019-09-11', 'SGH116TCXV', '-', '-', '-', 'jktcg1214.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(42, '0', '787', 'In Use', '2019-09-11', '5CD7394TD6', '-', '-', '-', 'jktci224-01-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(43, '0', NULL, 'Ready', '2019-09-11', 'R9VM4Y8', '-', '-', '-', 'jktci224-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(44, '0', NULL, 'Ready', '2019-09-11', 'SGH103SKM9', '-', '-', '-', 'jktcia1234-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(45, '0', '854', 'In Use', '2019-09-11', '5CD6481P2T', '-', '-', '-', 'jktcia1314-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(46, '0', '891', 'In Use', '2019-09-11', 'R9VM4Y8', '-', '-', '-', 'jktcia1316-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(47, '0', '0', 'Ready', '2019-09-11', '2CE3490VT5', '-', '-', '-', 'jktcia226-01-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(48, '0', NULL, 'Ready', '2019-09-11', 'PC11KRL8', '-', '-', '-', 'jktcl226-30.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(49, '0', '731', 'In Use', '2019-09-11', 'PC0ND1XA', '-', '-', '-', 'jktcia226-02.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(50, '0', '1007', 'In Use', '2019-09-11', '5CD7244ZYC', '-', '-', '-', 'jktcia226-07-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(51, '0', '993', 'In Use', '2019-09-11', 'PC0ND1XN', '-', '-', '-', 'jktcia226-08.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(52, '0', '884', 'In Use', '2019-09-11', '5CD7244ZYV', '-', '-', '-', 'jktcia226-09-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(53, '0', '958', 'In Use', '2019-09-11', 'CND53560SM', '-', '-', '-', 'jktcia226-11-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(54, '0', '973', 'In Use', '2019-09-11', '5CD8362VM7', '-', '-', '-', 'jktcia226-12-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(55, '0', '948', 'In Use', '2019-09-11', '5CD8362VVD', '-', '-', '-', 'jktcia226-13-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(56, '0', '1037', 'In Use', '2019-09-11', 'PC0UCPLD', '-', '-', '-', 'jktcl226-01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(57, '0', '820', 'In Use', '2019-09-11', 'PC0UCPLV', '-', '-', '-', 'jktcl226-02.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(58, '0', '1036', 'In Use', '2019-09-11', 'PC0UCPLU', '-', '-', '-', 'jktcl226-03.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(59, '0', '1035', 'In Use', '2019-09-11', 'PC0UCPLM', '-', '-', '-', 'jktcl226-04.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(60, '0', '805', 'In Use', '2019-09-11', 'PC0UCPLK', '-', '-', '-', 'jktcl226-05.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(61, '0', '827', 'In Use', '2019-09-11', 'PC0UCPM0', '-', '-', '-', 'jktcl226-06.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(62, '0', '835', 'In Use', '2019-09-11', 'PC0UCPL6', '-', '-', '-', 'jktcl226-07.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(63, '0', '1034', 'In Use', '2019-09-11', 'PC0UCPLS', '-', '-', '-', 'jktcl226-08.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(64, '0', '811', 'In Use', '2019-09-11', 'PC0UCPLE', '-', '-', '-', 'jktcl226-09.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(65, '0', '818', 'In Use', '2019-09-11', 'PC0NCZVJ', '-', '-', '-', 'jktcl226-10.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(66, '0', NULL, 'Ready', '2019-09-11', 'PC0SKGUZ', '-', '-', '-', 'jktcl226-11.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(67, '0', '824', 'In Use', '2019-09-11', 'PC0QFW3U', '-', '-', '-', 'jktcl226-12.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(68, '0', '936', 'In Use', '2019-09-11', 'PC0QFW34', '-', '-', '-', 'jktcl226-13.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(69, '0', '810', 'In Use', '2019-09-11', 'PC0QFW3V', '-', '-', '-', 'jktcl226-14.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(70, '0', '844', 'In Use', '2019-09-11', 'PC0SKGTY', '-', '-', '-', 'jktcl226-15.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(71, '0', '817', 'In Use', '2019-09-11', 'PC0UCPM1', '-', '-', '-', 'jktcl226-16.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(72, '0', '840', 'In Use', '2019-09-11', 'PC0QFW3C', '-', '-', '-', 'jktcl226-17.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(73, '0', NULL, 'Ready', '2019-09-11', 'PC0UCPMC', '-', '-', '-', 'jktcl226-18.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(74, '0', '1012', 'In Use', '2019-09-11', 'PC0QFW3L', '-', '-', '-', 'jktcl226-19.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(75, '0', '839', 'In Use', '2019-09-11', 'PC0QFW2W', '-', '-', '-', 'jktcl226-20.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(76, '0', NULL, 'Ready', '2019-09-11', 'PC0UCPL5', '-', '-', '-', 'jktcl226-21.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(77, '0', NULL, 'Ready', '2019-09-11', 'PC0SKGUY', '-', '-', '-', 'jktcl226-22.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(78, '0', '819', 'In Use', '2019-09-11', 'PC0SKGUW', '-', '-', '-', 'jktcl226-23.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(79, '0', NULL, 'Ready', '2019-09-11', 'PC0UCPM2', '-', '-', '-', 'jktcl226-24.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(80, '0', '825', 'In Use', '2019-09-11', 'PC0SKGTU', '-', '-', '-', 'jktcl226-25.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(81, '0', '953', 'In Use', '2019-09-11', 'PC11KSKZ', '-', '-', '-', 'jktcl226-26.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(82, '0', '895', 'In Use', '2019-09-11', 'PC11KRNC', '-', '-', '-', 'jktcl226-27.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(83, '0', '961', 'In Use', '2019-09-11', 'PC11KSLJ', '-', '-', '-', 'jktcl226-28.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(84, '0', NULL, 'Ready', '2019-09-11', 'PC11KRMW', '-', '-', '-', 'jktcl226-29.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(85, '0', '1038', 'In Use', '2019-09-11', 'PC0ND1XQ', '-', '-', '-', 'jktcia226-01.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(86, '0', '805', 'In Use', '2019-09-11', 'PC11KSNV', '-', '-', '-', 'jktcl226-31.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(87, '0', '1033', 'In Use', '2019-09-11', 'PC11KRN2', '-', '-', '-', 'jktcl226-32.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(88, '0', NULL, 'Ready', '2019-09-11', 'PF0MBMFB', '-', '-', '-', 'jktcbt-lt-04.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(89, '0', '966', 'In Use', '2019-09-11', 'PC11KSMQ', '-', '-', '-', 'jktcl226-39.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(90, '0', '750', 'In Use', '2019-09-11', 'SGH137TJQR', '-', '-', '-', 'jktcap556-02.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(91, '0', NULL, 'Ready', '2019-09-11', '', '-', '-', '-', 'jktcl226-44.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(92, '0', '915', 'In Use', '2019-09-11', 'CND5231YKS', '-', '-', '-', 'jkted226-04-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(93, '0', '944', 'In Use', '2019-09-11', '5CD8362VXH', '-', '-', '-', 'jktcl226-lt-01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(94, '0', '950', 'In Use', '2019-09-11', '5CD8362VTH', '-', '-', '-', 'jktcl226-lt-02.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(95, '0', '785', 'In Use', '2019-09-11', '5CD8362VT2', '-', '-', '-', 'jktcl226-lt-03.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(96, '0', NULL, 'Ready', '2019-09-11', '5CD8362VX9', '-', '-', '-', 'jktcl226-lt-04.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(97, '0', '889', 'In Use', '2019-09-11', '5CD8362VRP', '-', '-', '-', 'jktcl226-lt-05.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(98, '0', '872', 'In Use', '2019-09-11', '5CD8362VTY', '-', '-', '-', 'jktcl226-lt-08.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(99, '0', '789', 'In Use', '2019-09-11', '5CD8362VSR', '-', '-', '-', 'jktcl226-lt-09.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(100, '0', NULL, 'Ready', '2019-09-11', '5CD8362VX1', '-', '-', '-', 'jktcl226-lt-10.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(101, '0', '1029', 'In Use', '2019-09-11', '5CD8362VXW', '-', '-', '-', 'jktcl226-lt-11.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(102, '0', NULL, 'Ready', '2019-09-11', '5CD824FS6S', '-', '-', '-', 'jktcl226-lt-12.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(103, '0', '905', 'In Use', '2019-09-11', '5CD824FS5M', '-', '-', '-', 'jktcl226-lt-13.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(104, '0', '899', 'In Use', '2019-09-11', '5CD824FS6L', '-', '-', '-', 'jktcl226-lt-14.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(105, '0', '772', 'In Use', '2019-09-11', '5CD824FS3N', '-', '-', '-', 'jktcl226-lt-15.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(106, '0', '910', 'In Use', '2019-09-11', '5CD824FS2T', '-', '-', '-', 'jktcl226-lt-16.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(107, '0', NULL, 'Ready', '2019-09-11', '5CD824FS4D', '-', '-', '-', 'jktcl226-lt-17.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(108, '0', '807', 'In Use', '2019-09-11', '5CD824FS3M', '-', '-', '-', 'jktcl226-lt-18.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(109, '0', '797', 'In Use', '2019-09-11', '5CD8386G7P', '-', '-', '-', 'jktcl226-lt-19.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(110, '0', '795', 'In Use', '2019-09-11', '5CD8362VN7', '-', '-', '-', 'jktcl226-lt-20.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(111, '0', NULL, 'Ready', '2019-09-11', '5CD8362VM8', '-', '-', '-', 'jktcl226-lt-21.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(112, '0', '763', 'In Use', '2019-09-11', '5CD8386FNS', '-', '-', '-', 'jktcl226-lt-22.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(113, '0', '980', 'In Use', '2019-09-11', '5CD8362VMM', '-', '-', '-', 'jktcl226-lt-23.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(114, '0', '837', 'In Use', '2019-09-11', 'PC0ND1XR', '-', '-', '-', 'jktcz226-03.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(115, '0', '764', 'In Use', '2019-09-11', 'PC0NCZV7', '-', '-', '-', 'jktcz226-04.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(116, '0', '996', 'In Use', '2019-09-11', 'SGH114R7YD', '-', '-', '-', 'jktcz226-05.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(117, '0', '837', 'In Use', '2019-09-11', 'PC0JVSKN', '-', '-', '-', 'jktcz226-07.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(118, '0', '831', 'In Use', '2019-09-11', 'PC02WUZR', '-', '-', '-', 'jktcz226-13.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(119, '0', '990', 'In Use', '2019-09-11', 'PC0NCZTV', '-', '-', '-', 'jktcz226-19.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(120, '0', '900', 'In Use', '2019-09-11', 'PB025FXN', '-', '-', '-', 'jkted133.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(121, '0', '794', 'In Use', '2019-09-11', 'PB01GFKW', '-', '-', '-', 'jkted153.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(122, '0', '902', 'In Use', '2019-09-11', 'PB00KCSF', '-', '-', '-', 'jkted157.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(123, '0', '967', 'In Use', '2019-09-11', '2CE33830M2', '-', '-', '-', 'jkted168-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(124, '0', NULL, 'Ready', '2019-09-23', 'PC11KRKP', '-', '-', '', '-', '', 'FAIT-1909', '', 'FAIT-1909-ID124'),
(125, '0', NULL, 'Ready', '2019-09-23', 'PC0QFW3R', '-', '-', '', '-', '', 'FAIT-1909', '', 'FAIT-1909-ID125'),
(126, '0', NULL, 'Ready', '2019-09-23', 'PC11KRLG', '-', '-', '', '-', '', 'FAIT-1909', '', 'FAIT-1909-ID126'),
(127, '0', '1010', 'In Use', '2019-09-11', 'PC11KRN3', '-', '-', '-', 'jktcl226-45.id.kn', '1', 'FAIT-1909', '', 'Attach Label'),
(128, '0', NULL, 'Ready', '2019-09-23', 'PC0UCPLW', '-', '-', '', '-', '', 'FAIT-1909', '', 'FAIT-1909-ID128'),
(129, '0', '928', 'In Use', '2019-09-11', 'SGH352T3TX', '-', '-', '-', 'jkted306-02.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(130, '0', NULL, 'Ready', '2019-09-23', 'PC11KRKJ', '-', '-', '', '-', '', 'FAIT-1909', '', 'FAIT-1909-ID130'),
(131, '0', '771', 'In Use', '2019-09-11', 'PB025FWW', '-', '-', '-', 'jkted699.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(132, '0', '945', 'In Use', '2019-09-11', 'PB025FZR', '-', '-', '-', 'jkted753.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(133, '0', '923', 'In Use', '2019-09-11', 'PB025FY0', '-', '-', '-', 'jkted777.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(134, '0', NULL, 'Ready', '2019-09-11', 'PB01GFKE', '-', '-', '-', 'jktee115.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(135, '0', '774', 'In Use', '2019-09-11', '5CD7244ZYD', '-', '-', '-', 'jktee226-02-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(136, '0', '791', 'In Use', '2019-09-11', 'CND537124W', '-', '-', '-', 'jktee226-lt-01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(137, '0', '924', 'In Use', '2019-09-11', 'SGH352T3VD', '-', '-', '-', 'jktee238-01.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(138, '0', NULL, 'Ready', '2019-09-11', '2CE3490VVH', '-', '-', '-', 'jktee277-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(139, '0', '911', 'In Use', '2019-09-11', 'PB01GFL6', '-', '-', '-', 'jktee517-01.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(140, '0', NULL, 'Ready', '2019-09-11', 'SGH352T3V4', '-', '-', '-', 'jktego510.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(141, '0', '907', 'In Use', '2019-09-11', 'PB025FXL', '-', '-', '-', 'jkten238.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(142, '0', '882', 'In Use', '2019-09-11', 'PB025FXS', '-', '-', '-', 'jktes125.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(143, '0', '755', 'In Use', '2019-09-11', 'PB025FXP', '-', '-', '-', 'jktes127.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(144, '0', '858', 'In Use', '2019-09-11', '2CE3490W01', '-', '-', '-', 'jktes226-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(145, '0', '834', 'In Use', '2019-09-11', 'SGH306SB8Y', '-', '-', '-', 'jktesca119-06.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(146, '0', '963', 'In Use', '2019-09-11', 'PB025FXW', '-', '-', '-', 'jktesia126-01.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(147, '0', '1000', 'In Use', '2019-09-11', '2CE35118PS', '-', '-', '-', 'jktesia173-lt01.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(148, '0', '733', 'In Use', '2019-09-11', 'SGH306SB8L', '-', '-', '-', 'jktesia195.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(149, '0', '823', 'In Use', '2019-09-11', 'SGH047RG4Z', '-', '-', '-', 'jktesia217-01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(150, '0', '897', 'In Use', '2019-09-11', 'SGH306SBB0', '-', '-', '-', 'jktesia226.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(151, '0', NULL, 'Ready', '2019-09-11', 'PB025FXK', '-', '-', '-', 'jktesia502-01.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(152, '0', '1005', 'In Use', '2019-09-11', '5CD824FS61', '-', '-', '-', 'jktesn226-01-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(153, '0', NULL, 'Ready', '2019-09-11', 'PC0TVYV0', '-', '-', '-', 'jktesn226-01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(154, '0', NULL, 'Ready', '2019-09-11', '5CD824FS67', '-', '-', '-', 'jktesn226-02-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(155, '0', '802', 'In Use', '2019-09-11', 'PC0NCZTG', '-', '-', '-', 'jktesn226-02.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(156, '0', '781', 'In Use', '2019-09-11', '5CD824FS41', '-', '-', '-', 'jktesn226-03-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(157, '0', '746', 'In Use', '2019-09-11', '5CD824FS5D', '-', '-', '-', 'jktesn226-04-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(158, '0', '833', 'In Use', '2019-09-11', 'PC0UCPL3', '-', '-', '-', 'jktesn226-04.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(159, '0', '1027', 'In Use', '2019-09-11', '5CD824FS6K', '-', '-', '-', 'jktesn226-05-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(160, '0', '931', 'In Use', '2019-09-11', 'PC11KRKK', '-', '-', '-', 'jktesn226-05.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(161, '0', '926', 'In Use', '2019-09-11', '5CD8362VWC', '-', '-', '-', 'jktesn226-06-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(162, '0', NULL, 'Ready', '2019-09-11', '5CD8517R7R', '-', '-', '-', 'jktesn226-07-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(163, '0', '946', 'In Use', '2019-09-11', '5CD8362VWY', '-', '-', '-', 'jktesn226-08-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(164, '0', '782', 'In Use', '2019-09-11', '5CD824FS47', '-', '-', '-', 'jktesn226-10-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(165, '0', '1025', 'In Use', '2019-09-11', '5CD824FS67', '-', '-', '-', 'jktesn226-11-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(166, '0', '922', 'In Use', '2019-09-11', 'SGH346SCWX', '-', '-', '-', 'jktex135-08.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(167, '0', NULL, 'Ready', '2019-09-11', 'SGH352T3TT', '-', '-', '-', 'jktex135.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(168, '0', '783', 'In Use', '2019-09-11', '2CE35118Q3', '-', '-', '-', 'jktex139-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(169, '0', '1024', 'In Use', '2019-09-11', '2CE3490W5P', '-', '-', '-', 'jktfa230-01-lt.jkt-fa.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(170, '0', '869', 'In Use', '2019-09-11', '33R9F2S', '-', '-', '-', 'jktfabofs03.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(171, '0', '849', 'In Use', '2019-09-11', '2CE35118Q3', '-', '-', '-', 'jktfax226-lt-02.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(172, '0', '868', 'In Use', '2019-09-11', '9JFGL12', '-', '-', '-', 'jktfl313.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(173, '0', '896', 'In Use', '2019-09-11', 'CNU2111W51', '-', '-', '-', 'jktfsb226-lt-04.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(174, '0', '762', 'In Use', '2019-09-11', 'PB025FXT', '-', '-', '-', 'jktfsca226-01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(175, '0', '866', 'In Use', '2019-09-11', '5CD7305046', '-', '-', '-', 'jktfsca226-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(176, '0', '861', 'In Use', '2019-09-11', 'CNU412BY1W', '-', '-', '-', 'jktfse226-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(177, '0', '981', 'In Use', '2019-09-11', '5CD6481P0J', '-', '-', '-', 'jktfsfp226-lt-1.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(178, '0', '886', 'In Use', '2019-09-11', 'CND5371242', '-', '-', '-', 'jktfsfp26-02-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(179, '0', '1019', 'In Use', '2019-09-11', '5CD61147S8', '-', '-', '-', 'jktfsfs226-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(180, '0', NULL, 'Ready', '2019-09-11', '2CE3490VX8', '-', '-', '-', 'jktfsi226-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(181, '0', '857', 'In Use', '2019-09-11', '2CE3490VNN', '-', '-', '-', 'jktfvs122-lt.jkt-fa.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(182, '0', NULL, 'Ready', '2019-09-11', '2CE3490VZM', '-', '-', '-', 'jktfvs226-lt-01.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(183, '0', NULL, 'Ready', '2019-09-11', 'CND53560MG', '-', '-', '-', 'jktfvs226-lt-06.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(184, '0', '875', 'In Use', '2019-09-11', '2CE3490VN6', '-', '-', '-', 'jktfvs274-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(185, '0', NULL, 'Ready', '2019-09-11', '5CD6481P21', '-', '-', '-', 'jktfza226-lt-01.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(186, '0', '876', 'In Use', '2019-09-11', '5CD6481NYC', '-', '-', '-', 'jktfza226-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(187, '0', NULL, 'Ready', '2019-09-11', '5FZSPC2', '-', '-', '-', 'jktnm111-lt-02.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(188, '0', '867', 'In Use', '2019-09-11', 'SGH352T3VG', '-', '-', '-', 'jktnms-01.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(189, '0', '916', 'In Use', '2019-09-11', 'PB025FXZ', '-', '-', '-', 'jktnms314-01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(190, '0', '874', 'In Use', '2019-09-11', 'BDNKNJ2', '-', '-', '-', 'jktnms3441-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(191, '0', '744', 'In Use', '2019-09-11', 'CNU2161CTR', '-', '-', '-', 'jktnvs332-01.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(192, '0', NULL, 'Ready', '2019-09-11', 'SGH047RG4X', '-', '-', '-', 'jktopr100.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(193, '0', '806', 'In Use', '2019-09-11', 'PB025FYW', '-', '-', '-', 'jktsi111-01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(194, '0', NULL, 'Ready', '2019-09-11', '2CE35118NF', '-', '-', '-', 'jktsi111-03.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(195, '0', '873', 'In Use', '2019-09-11', 'PB025FZD', '-', '-', '-', 'jktsi116.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(196, '0', '971', 'In Use', '2019-09-11', 'PB025FXM', '-', '-', '-', 'jktsi121-01.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(197, '0', '773', 'In Use', '2019-09-11', 'PB025FXV', '-', '-', '-', 'jktsi121.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(198, '0', '863', 'In Use', '2019-09-11', '2CE3490W71', '-', '-', '-', 'jktsi132-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(199, '0', '933', 'In Use', '2019-09-11', 'SGH111T1ZW', '-', '-', '-', 'jktsi155-01.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(200, '0', '735', 'In Use', '2019-09-11', 'PC02WUZK', '-', '-', '-', 'jktsi167-02.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(201, '0', NULL, 'Ready', '2019-09-11', 'PB00KCSW', '-', '-', '-', 'jktsi226-04.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(202, '0', '1012', 'In Use', '2019-09-11', 'PB01GFKF', '-', '-', '-', 'jkttest-pc.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(203, '0', '761', 'In Use', '2019-09-11', '5CB127550R', '-', '-', '-', 'jkttrn02-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(204, '0', NULL, 'Ready', '2019-09-11', '5CB1276JRH', '-', '-', '-', 'jkttrn04-lt-01.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(205, '0', '854', 'In Use', '2019-09-11', '5CB12765L8', '-', '-', '-', 'jkttrn11-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(206, '0', '921', 'In Use', '2019-09-11', '2CE3490VS1', '-', '-', '-', 'jktva177-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(207, '0', NULL, 'Ready', '2019-09-11', '5CD6481NZT', '-', '-', '-', 'jktva226-lt-03.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(208, '0', '908', 'In Use', '2019-09-11', '2CE3490W7V', '-', '-', '-', 'jktva226-lt-07.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(209, '0', NULL, 'Ready', '2019-09-11', '2CE30918XG', '-', '-', '-', 'jktvc226-lt-10.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(210, '0', NULL, 'Ready', '2019-09-11', 'CNU2111W51', '-', '-', '-', 'jktvc226-lt-12.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(211, '0', '826', 'In Use', '2019-09-11', '3RZPQM1', '-', '-', '-', 'jktvc226-lt08.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(212, '0', '814', 'In Use', '2019-09-11', 'CNU2111RYK', '-', '-', '-', 'jktvct226-13-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(213, '0', '760', 'In Use', '2019-09-11', '2CE3200WHD', '-', '-', '-', 'jktvi120-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(214, '0', NULL, 'Ready', '2019-09-11', '1KGX2C2', '-', '-', '-', 'jktvkf226-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(215, '0', '972', 'In Use', '2019-09-11', '5CD6368CQX', '-', '-', '-', 'jktvki226-04-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(216, '0', '975', 'In Use', '2019-09-11', '5KGX2C2', '-', '-', '-', 'jktvki226-lt-06.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(217, '0', '877', 'In Use', '2019-09-11', '9KGX2C2', '-', '-', '-', 'jktvkp226-lt-05.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(218, '0', NULL, 'Ready', '2019-09-11', '3JGX2C2', '-', '-', '-', 'jktvkp350-lt-01.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(219, '0', '995', 'In Use', '2019-09-11', '2CE33830GQ', '-', '-', '-', 'jktvkp350-lt.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(220, '0', '913', 'In Use', '2019-09-11', '5CD6368CQV', '-', '-', '-', 'jktvm226-05-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(221, '0', NULL, 'Ready', '2019-09-11', '7JGX2C2', '-', '-', '-', 'jktvm226-lt-06.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(222, '0', '906', 'In Use', '2019-09-11', '2CE3490VVW', '-', '-', '-', 'jktvme226-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(223, '0', NULL, 'Ready', '2019-09-11', '2CE35118PC', '-', '-', '-', 'jktvs130-03-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(224, '0', NULL, 'Ready', '2019-09-11', 'CND53560LW', '-', '-', '-', 'jktvs226-lt-02.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(225, '0', '747', 'In Use', '2019-09-11', '2CE3490W6M', '-', '-', '-', 'jktvs226-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(226, '0', '1018', 'In Use', '2019-09-11', 'CND50841VP', '-', '-', '-', 'jktvse-196-lt.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(227, '0', '758', 'In Use', '2019-09-11', '2CE3080YJ5', '-', '-', '-', 'jktvst226-03-lt.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(228, '0', '997', 'In Use', '2019-09-11', 'CND53560SC', '-', '-', '-', 'jktyx226-lt.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(229, '0', '1022', 'In Use', '2019-09-11', '5H6NLJ2', '-', '-', '-', 'jktza226-05-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(230, '0', '1015', 'In Use', '2019-09-11', '2TJY8H2', '-', '-', '-', 'jktza226-06-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(231, '0', '769', 'In Use', '2019-09-11', '5CD61147TD', '-', '-', '-', 'jktzac226-01-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(232, '0', '892', 'In Use', '2019-09-11', '5CD7528WDS', '-', '-', '-', 'jktzao226-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(233, '0', NULL, 'Ready', '2019-09-11', '9DBMYM2', '-', '-', '-', 'jktzf226-lt-01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(234, '0', NULL, 'Ready', '2019-09-11', '747NKC2', '-', '-', '-', 'jktzf313-lt-01.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(235, '0', '943', 'In Use', '2019-09-11', '5CD8093FSZ', '-', '-', '-', 'jktzfa226-lt-01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(236, '0', '793', 'In Use', '2019-09-11', 'CND5231YGS', '-', '-', '-', 'jktzfa226-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(237, '0', '994', 'In Use', '2019-09-11', 'SGH114R7Y6', '-', '-', '-', 'jktzfs113-01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(238, '0', '1014', 'In Use', '2019-09-11', '5CD7244ZY0', '-', '-', '-', 'jktzl226-01-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(239, NULL, NULL, 'Ready', '2019-09-11', '67LL4M2', '-', '-', '-', 'jktzl226-05-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(240, '0', '1010', 'In Use', '2019-09-11', '5CD7394TBY', '-', '-', '-', 'jktzli226-02-lt.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(241, NULL, NULL, 'Ready', '2019-09-11', '5CD7394T89', '-', '-', '-', 'jktzlt226-02-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(242, NULL, NULL, 'Ready', '2019-09-11', '5CD6368CQZ', '-', '-', '-', 'jktzlt226-03-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(243, '0', '1028', 'In Use', '2019-09-11', '5CD71372PP', '-', '-', '-', 'jktzlv226-04-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(244, '0', '856', 'In Use', '2019-09-11', '2CE35118KQ', '-', '-', '-', 'jktzp144-01-lt.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(245, '0', '969', 'In Use', '2019-09-11', '5CD6481P2W', '-', '-', '-', 'jktzp224-lt-01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(246, '0', '982', 'In Use', '2019-09-11', 'CND537124G', '-', '-', '-', 'jktzpa226-01-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(247, '0', '960', 'In Use', '2019-09-11', 'SGH346SCWF', '-', '-', '-', 'jktzpa275-01.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(248, NULL, NULL, 'Ready', '2019-09-11', 'CND5230H7M', '-', '-', '-', 'jktzpb141-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(249, NULL, NULL, 'Ready', '2019-09-11', '5CB12765JX', '-', '-', '-', 'jktzpdt-01-lt.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(250, '0', '768', 'In Use', '2019-09-11', '5CD8362VM6', '-', '-', '-', 'jktzpdt226-lt-2.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(251, '0', '1002', 'In Use', '2019-09-11', '5CD8362VN3', '-', '-', '-', 'jktzpdt226-lt-3.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(252, '0', '1009', 'In Use', '2019-09-11', 'CND5230H82', '-', '-', '-', 'jktzpt144-lt.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(253, NULL, NULL, 'Ready', '2019-09-11', 'CND5230H6Q', '-', '-', '-', 'jktzq226-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(254, '0', '1006', 'In Use', '2019-09-11', '2CE3490W1V', '-', '-', '-', 'jktzqta20-lt-02.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(255, '0', '775', 'In Use', '2019-09-11', 'SGH306SB8W', '-', '-', '-', 'jktzqte149.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(256, '0', '749', 'In Use', '2019-09-11', 'CJHJGH2', '-', '-', '-', 'jktzs222-02-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(257, '0', '984', 'In Use', '2019-09-11', 'SGH346SCVV', '-', '-', '-', 'jktzsb381-01.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(258, NULL, NULL, 'Ready', '2019-09-11', 'CND53560QM', '-', '-', '-', 'jktzsc226-lt-02.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(259, '0', '909', 'In Use', '2019-09-11', '5CD7528WJY', '-', '-', '-', 'jktzscf226-lt.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(260, '0', '942', 'In Use', '2019-09-11', '2CE3200WFP', '-', '-', '-', 'jktzsck226-lt.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(261, NULL, NULL, 'Ready', '2019-09-11', '2CE35118KZ', '-', '-', '-', 'jktzsco504-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(262, '0', '754', 'In Use', '2019-09-11', '5CD8517R7S', '-', '-', '-', 'jktzsco7-19-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(263, '0', '784', 'In Use', '2019-09-11', '5CD7528WC1', '-', '-', '-', 'jktzsct226-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(264, '0', '970', 'In Use', '2019-09-11', '2CE3490W0V', '-', '-', '-', 'jktzsfp503-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(265, '0', '954', 'In Use', '2019-09-11', '5CD7244ZXY', '-', '-', '-', 'jktzsjp-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(266, '0', '743', 'In Use', '2019-09-11', '5CD8362VXM', '-', '-', '-', 'jktzsk226-01-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(267, NULL, NULL, 'Ready', '2019-09-11', '2CE35118H7', '-', '-', '-', 'jktzsp503-lt.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(268, NULL, NULL, 'Ready', '2019-09-11', '2CE35118HH', '-', '-', '-', 'jktzsx226-lt-02.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(269, '0', '767', 'In Use', '2019-09-11', 'HWGX2C2', '-', '-', '-', 'jktzv226-lt-04.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(270, NULL, NULL, 'Ready', '2019-09-11', 'CLGX2C2', '-', '-', '-', 'jktzvia226-lt-2.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(271, '0', '883', 'In Use', '2019-09-11', '', '-', '-', '-', 'jktzvkaa-01-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(272, '0', '851', 'In Use', '2019-09-11', 'CNU2111WX9', '-', '-', '-', 'jktzvki174-lt.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(273, '0', '965', 'In Use', '2019-09-11', '5CD824FS5Q', '-', '-', '-', 'jktzvm226-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(274, '0', '830', 'In Use', '2019-09-11', 'SGH84506CV', '-', '-', '-', 'jktzz226-01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(275, '0', '741', 'In Use', '2019-09-11', '5CD61147RG', '-', '-', '-', 'jktzz226-lt-01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(276, '0', '1012', 'In Use', '2019-09-11', 'PB025FZN', '-', '-', '-', 'kn-idcore-bu.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(277, '0', '1003', 'In Use', '2019-09-11', 'VMware-56 4d 7a 48 e9 63 cc 49-09 57 82 3b ef 69 15 18', '-', '-', '-', 'kn-idcore.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(278, '0', '1032', 'In Use', '2019-09-11', 'FH6862S', '-', '-', '-', 'kns01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(279, '0', '1016', 'In Use', '2019-09-11', 'CND53560SK', '-', '-', '-', 'mese104-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(280, NULL, NULL, 'Ready', '2019-09-11', 'SGH352T3T6', '-', '-', '-', 'meses226.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(281, '0', '940', 'In Use', '2019-09-11', '2CE3200WF8', '-', '-', '-', 'meslm102-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(282, '0', '860', 'In Use', '2019-09-11', 'PC02WUZP', '-', '-', '-', 'messe104.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(283, NULL, NULL, 'Ready', '2019-09-11', '5CD61147SW', '-', '-', '-', 'mesvs226-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(284, NULL, NULL, 'Ready', '2019-09-11', 'J3Q2TF2', '-', '-', '-', 'sinfafs02.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(285, '0', '988', 'In Use', '2019-09-11', '5H7XF2S', '-', '-', '-', 'srgbofs01.srg.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(286, '0', '879', 'In Use', '2019-09-11', 'PB025FYA', '-', '-', '-', 'srgca105.srg.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(287, '0', '859', 'In Use', '2019-09-11', 'PB025FZV', '-', '-', '-', 'srges103.srg.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(288, '0', '885', 'In Use', '2019-09-11', 'PB025FWV', '-', '-', '-', 'srges106.srg.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(289, '0', '786', 'In Use', '2019-09-11', 'PB025FXJ', '-', '-', '-', 'srges112.srg.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(290, '0', '753', 'In Use', '2019-09-11', 'PB025FXH', '-', '-', '-', 'srges115.srg.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(291, '0', '864', 'In Use', '2019-09-11', 'SGH8110175', '-', '-', '-', 'srgess01.srg.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(292, NULL, NULL, 'Ready', '2019-09-11', '2CE35118F4', '-', '-', '-', 'srgfs111-lt.srg.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(293, '0', '776', 'In Use', '2019-09-11', 'SGH137TJPH', '-', '-', '-', 'srgis109.srg.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(294, '0', '816', 'In Use', '2019-09-11', 'PB025FWR', '-', '-', '-', 'srgis117.srg.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(295, '0', '847', 'In Use', '2019-09-11', 'SGH051Q1HH', '-', '-', '-', 'srgscan01.srg.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(296, '0', '978', 'In Use', '2019-09-11', 'CND5231YMH', '-', '-', '-', 'srgvs108-lt.srg.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(297, '0', '881', 'In Use', '2019-09-11', '2CE3080YV6', '-', '-', '-', 'srgvs226-03-lt.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(298, '0', '732', 'In Use', '2019-09-11', 'CND5231YKM', '-', '-', '-', 'srgzsfpt01-lt.srg.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(299, NULL, NULL, 'Ready', '2019-09-11', 'CND537123K', '-', '-', '-', 'subae215-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(300, '0', '968', 'In Use', '2019-09-11', 'CND537123K', '-', '-', '-', 'subae215-lt.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(301, '0', '865', 'In Use', '2019-09-11', '2CE3490VPH', '-', '-', '-', 'subae220-002-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(302, '0', '957', 'In Use', '2019-09-11', '2CE33830NS', '-', '-', '-', 'subae220-02-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(303, NULL, NULL, 'Ready', '2019-09-11', 'CND5230H6K', '-', '-', '-', 'subae222-lt.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(304, '0', '985', 'In Use', '2019-09-11', 'SGH047RG50', '-', '-', '-', 'subaetemp01-pc.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(305, '0', '732', 'In Use', '2019-09-11', 'SGH137TJN6', '-', '-', '-', 'subai260-01.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(306, '0', '904', 'In Use', '2019-09-11', 'SGH047RG4Y', '-', '-', '-', 'subai260-02.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(307, '0', '1003', 'In Use', '2019-09-11', '4NLGLH2', '-', '-', '-', 'subbm01-lt.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(308, '0', '738', 'In Use', '2019-09-11', '2CE3490VRM', '-', '-', '-', 'subbm110-02-lt.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(309, '0', '988', 'In Use', '2019-09-11', '4H7XF2S', '-', '-', '-', 'subbofs01.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(310, '0', '976', 'In Use', '2019-09-11', '5CD8093FQT', '-', '-', '-', 'subbv312-lt.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(311, '0', '778', 'In Use', '2019-09-11', 'PC02WUZQ', '-', '-', '-', 'subca310-02.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(312, '0', '987', 'In Use', '2019-09-11', '2CE3490W11', '-', '-', '-', 'subcia226-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(313, '0', '1001', 'In Use', '2019-09-11', '5CD7244ZYB', '-', '-', '-', 'subcz122-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(314, '0', '956', 'In Use', '2019-09-11', 'PC0ND1XZ', '-', '-', '-', 'subcz312.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(315, '0', '792', 'In Use', '2019-09-11', 'PB025FZJ', '-', '-', '-', 'subed190-01.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(316, '0', '990', 'In Use', '2019-09-11', 'PC0JUDCX', '-', '-', '-', 'subedi312.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(317, '0', '985', 'In Use', '2019-09-11', 'SGH306SB9V', '-', '-', '-', 'subee200.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(318, '0', '983', 'In Use', '2019-09-11', 'PB025FWX', '-', '-', '-', 'subee240-03.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(319, '0', '859', 'In Use', '2019-09-11', '2CE3200WNB', '-', '-', '-', 'subego03-lt.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(320, '0', '989', 'In Use', '2019-09-11', '5CD61147TS', '-', '-', '-', 'suben208-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(321, '0', '952', 'In Use', '2019-09-11', 'PB025FY3', '-', '-', '-', 'subes150-02.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(322, '0', '956', 'In Use', '2019-09-11', 'PB025FZ7', '-', '-', '-', 'subes208-02.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(323, '0', '986', 'In Use', '2019-09-11', '5CD61147VF', '-', '-', '-', 'subfax315-lt.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(324, '0', '939', 'In Use', '2019-09-11', '2CE3490W3J', '-', '-', '-', 'subfsi140-01-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(325, '0', '730', 'In Use', '2019-09-11', 'PC02WUZL', '-', '-', '-', 'subfva210-02.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(326, '0', '756', 'In Use', '2019-09-11', 'CND50841W1', '-', '-', '-', 'subis313-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(327, '0', '947', 'In Use', '2019-09-11', 'SGH346SCWY', '-', '-', '-', 'subis313.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(328, '0', '949', 'In Use', '2019-09-11', 'PB025FY4', '-', '-', '-', 'subsi160-01.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(329, NULL, NULL, 'Ready', '2019-09-11', 'CND5371240', '-', '-', '-', 'subva226-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(330, '0', '748', 'In Use', '2019-09-11', '2CE3490VPK', '-', '-', '-', 'subva234-lt.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(331, '0', '852', 'In Use', '2019-09-11', '2CE3080Z0G', '-', '-', '-', 'subva240-lt.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(332, '0', '765', 'In Use', '2019-09-11', 'PB025FZF', '-', '-', '-', 'subvc130.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(333, NULL, NULL, 'Ready', '2019-09-11', 'CND5231YLQ', '-', '-', '-', 'subvstp122-lt.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(334, '0', '736', 'In Use', '2019-09-11', 'PC0NCZTM', '-', '-', '-', 'subwh203.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(335, '0', '1031', 'In Use', '2019-09-11', 'PC0NCZVC', '-', '-', '-', 'subwh204.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(336, '0', '988', 'In Use', '2019-09-11', 'SGH346SCWC', '-', '-', '-', 'subwh205.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(337, '0', '898', 'In Use', '2019-09-11', 'SGH047RG4W', '-', '-', '-', 'subwh206.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(338, '0', '962', 'In Use', '2019-09-11', 'PC0NCZST', '-', '-', '-', 'subwh207.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(339, NULL, NULL, 'Ready', '2019-09-11', 'PC0NCZSP', '-', '-', '-', 'subwh208.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(340, '0', '878', 'In Use', '2019-09-11', 'PC0TVXXZ', '-', '-', '-', 'subwh209.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(341, '0', '1013', 'In Use', '2019-09-11', 'PC0TVXZS', '-', '-', '-', 'subwh210.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(342, '0', '1030', 'In Use', '2019-09-11', 'PC0UCPLN', '-', '-', '-', 'subwh211.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(343, '0', '1023', 'In Use', '2019-09-11', 'PC0NCZT2', '-', '-', '-', 'subwh212.unnamed.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(344, '0', '778', 'In Use', '2019-09-11', 'CNU2111WMY', '-', '-', '-', 'subzspd01-lt.sub.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(345, '0', '1010', 'Ready', '2019-09-23', 'U1H8T7TR', '-', '-', '-', '-', '3', 'FAIT-1909', '', 'FAIT-1909-345'),
(346, '0', NULL, 'Ready', '2019-09-11', 'SGH116TCXS', '-', '-', '-', 'jktca226-11.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(347, '0', NULL, 'Ready', '2019-09-11', 'PC0NCZUM', '-', '-', '-', 'jktcar17-01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(348, '0', NULL, 'Ready', '2019-09-11', 'SGH137TJQZ', '-', '-', '-', 'jktcap205.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(349, NULL, '822', 'In Use', '2019-09-11', 'SGH114R7YY', '-', '-', '-', 'jktca149-03.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(350, NULL, '777', 'In Use', '2019-09-11', 'PC02WUZJ', '-', '-', '-', 'jktcat136-01.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(351, NULL, '1021', 'In Use', '2019-09-11', 'PC02WUZH', '-', '-', '-', 'jktcap226-02.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(352, '0', NULL, 'Ready', '2019-09-11', 'PB01GFLZ', '-', '-', '-', 'jkted184.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(353, NULL, '1017', 'In Use', '2019-09-11', 'SGH352T3V3', '-', '-', '-', 'jkted183.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(354, NULL, '929', 'In Use', '2019-09-11', 'PB01GFKT', '-', '-', '-', 'jkted583-03.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(355, NULL, '903', 'In Use', '2019-09-11', 'SGH346SCWH', '-', '-', '-', 'jkted271-03.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'No Action'),
(356, NULL, '850', 'In Use', '2019-09-11', 'PB01GFKQ', '-', '-', '-', 'jkted199.jkt-nc.id.kn', '1', 'FAIT-1909', '', 'FAIT-1909-ID356'),
(357, NULL, '868', 'Ready', '2019-10-30', 'NXGCPSG0076220D5367600', '-', '-', 'Cakung NLI | FA-094-1018 | 10NL', '-', '1', 'FAIT-1910', '', 'FAIT-1910-ID357'),
(358, NULL, '868', 'Ready', '2019-10-30', 'PF0PSKS7', '-', '-', 'Cakung NLI | FA-078-1018 | 10NL', '', '1', 'FAIT-1910', '', 'FAIT-1910-ID358');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_request_item`
--

CREATE TABLE `tb_request_item` (
  `id_req` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `product` varchar(255) NOT NULL,
  `asset_of` varchar(100) NOT NULL,
  `set_status` varchar(100) DEFAULT NULL,
  `req_status` varchar(100) DEFAULT NULL,
  `date_request` date NOT NULL,
  `remarks` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_request_item`
--

INSERT INTO `tb_request_item` (`id_req`, `user_id`, `product`, `asset_of`, `set_status`, `req_status`, `date_request`, `remarks`) VALUES
(3, 'abdan.syakuro', 'Laptop', 'CI-A', 'On Progress', 'On Progress', '2019-11-14', '-'),
(4, 'admin', 'Laptop', 'CI Department', 'On Progress', 'No Action', '2019-11-22', 'ss');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_security_form`
--

CREATE TABLE `tb_security_form` (
  `id_sc` int(11) NOT NULL,
  `sc_name` varchar(225) NOT NULL,
  `sc_first_name` varchar(225) NOT NULL,
  `sc_kn_code` varchar(225) NOT NULL,
  `sc_end` date NOT NULL,
  `sc_last_work` date NOT NULL,
  `sc_keys` varchar(225) NOT NULL,
  `sc_desc` text NOT NULL,
  `sc_it_notebook` varchar(225) NOT NULL,
  `sc_it_serial_number` varchar(225) NOT NULL,
  `sc_fax` varchar(225) NOT NULL,
  `sc_other_serial_number` varchar(225) NOT NULL,
  `sc_mobile_phone` varchar(225) NOT NULL,
  `sc_mp_serial_number` varchar(225) NOT NULL,
  `sc_IMEI` varchar(225) NOT NULL,
  `sc_bank` varchar(225) NOT NULL,
  `sc_type_bank` varchar(225) NOT NULL,
  `sc_limit_bank` varchar(225) NOT NULL,
  `sc_desc_eclectroninc` varchar(225) NOT NULL,
  `sc_type_eclectroninc` varchar(225) NOT NULL,
  `sc_password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_temporary`
--

CREATE TABLE `tb_temporary` (
  `id_temporary` int(11) NOT NULL,
  `pr_name` varchar(225) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `remarks` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_type`
--

CREATE TABLE `tb_type` (
  `id_proset` int(11) NOT NULL,
  `pr_name` varchar(225) NOT NULL,
  `cat_id` varchar(225) NOT NULL,
  `model` varchar(225) NOT NULL,
  `tahun_device` varchar(225) NOT NULL,
  `jumlah` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_type`
--

INSERT INTO `tb_type` (`id_proset`, `pr_name`, `cat_id`, `model`, `tahun_device`, `jumlah`) VALUES
(1, 'Laptop', '1', '-', '2019', '1'),
(2, 'PC', '2', '-', '2019', '1'),
(3, 'Monitor PC Lenovo', '', 'Monitor PC Lenovo', '2019', '1'),
(4, 'Wifi Receiver', '15', '-', '-', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_created` date NOT NULL,
  `user_role` enum('0','1','2','3') NOT NULL,
  `user_region` varchar(100) NOT NULL,
  `user_dept` varchar(100) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `jointdate` date NOT NULL,
  `nik` varchar(255) NOT NULL,
  `costcenter` varchar(255) NOT NULL,
  `emailuser` varchar(255) NOT NULL,
  `kncode` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_name`, `user_password`, `user_created`, `user_role`, `user_region`, `user_dept`, `branch`, `jointdate`, `nik`, `costcenter`, `emailuser`, `kncode`, `user_status`, `foto`) VALUES
(729, 'admin', 'Flatrone2241', '0000-00-00', '0', 'user_region', 'user_dept', 'branch', '0000-00-00', 'nik', 'costcenter', 'emailuser', 'kncode', 'Active', 'profile.jpg'),
(730, 'abdan.syakuro', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'abdan.syakuro@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(731, 'abdus.somad', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'abdus.somad@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(732, 'achmad.irwandi', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'achmad.irwandi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(733, 'ade.huroaini', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'ade.huroaini@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(734, 'adeh.rahmawati', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'adeh.rahmawati@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(735, 'aditya.fauzi', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'aditya.fauzi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(736, 'adri.kirana', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'adri.kirana@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(737, 'aep.saepurohman', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'aep.saepurohman@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(738, 'agnes.julianto', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'agnes.julianto@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(739, 'agung.ristanto', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'agung.ristanto@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(740, 'agung.wahyudi', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'agung.wahyudi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(741, 'agus.mulyono', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'agus.mulyono@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(742, 'ahmad.kamaludin', '1234', '2019-08-03', '2', 'IDN', '-', 'JakartaFA', '2019-08-03', '-', '-', 'ahmad.kamaludin@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(743, 'ajeng.fitriyah', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'ajeng.fitriyah@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(744, 'akhmad.olii', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'akhmad.olii@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(745, 'aldi.nurhakim', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'aldi.nurhakim@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(746, 'alif.arwananda', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'alif.arwananda@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(747, 'amin.triadi', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'amin.triadi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(748, 'amiruddin.mukhtadi', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'amiruddin.mukhtadi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(749, 'amol.singhal', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'amol.singhal@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(750, 'anastasia.dyani', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'anastasia.dyani@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(751, 'andhika.kumara', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'andhika.kumara@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(752, 'andika.oktara', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'andika.oktara@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(753, 'andre.setiawan', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'andre.setiawan@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(754, 'andreas.kurniawan', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'andreas.kurniawan@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(755, 'andri.susanto', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'andri.susanto@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(756, 'ani.mazidah', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ani.mazidah@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(757, 'anthon.aryono', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'anthon.aryono@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(758, 'aprian.hidayat', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'aprian.hidayat@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(759, 'arbiyanto.abdulmuis', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'arbiyanto.abdulmuis@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(760, 'arif.rachman', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'arif.rachman@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(761, 'ariza.permadi', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'ariza.permadi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(762, 'ary.kurniati', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'ary.kurniati@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(763, 'asep.supriyatna', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'asep.supriyatna@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(764, 'assifa.lestari', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'assifa.lestari@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(765, 'astried.harsono', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'astried.harsono@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(766, 'atang.herwanto', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'atang.herwanto@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(767, 'audie.kaunang', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'audie.kaunang@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(768, 'ayu.putri', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'ayu.putri@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(769, 'azhar.maulana', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'azhar.maulana@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(770, 'bagus.prihardian', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'bagus.prihardian@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(771, 'basaria.hutagaol', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'basaria.hutagaol@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(772, 'basuki.rachmat', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'basuki.rachmat@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(773, 'bayu.nadirsyah', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'bayu.nadirsyah@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(774, 'bekti.sari', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'bekti.sari@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(775, 'bella.aprilia', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'bella.aprilia@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(776, 'budi.susetyo', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'budi.susetyo@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(777, 'budiati.anggoronings', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'budiati.anggoronings@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(778, 'cahyanto.hidayat', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'cahyanto.hidayat@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(779, 'catur.pamungkas', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'catur.pamungkas@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(780, 'chindy.minul', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'chindy.minul@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(781, 'clara.adriana', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'clara.adriana@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(782, 'clorius.manoy', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'clorius.manoy@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(783, 'damayanti.lestari', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'damayanti.lestari@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(784, 'daniel.gasic', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'daniel.gasic@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(785, 'daniel.suprijono', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'daniel.suprijono@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(786, 'darwanto.abunaim', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'darwanto.abunaim@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(787, 'dawera.taher', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'dawera.taher@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(788, 'dea.utari', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'dea.utari@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(789, 'dede.supriatna', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'dede.supriatna@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(790, 'delia.yesha', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'delia.yesha@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(791, 'dessy.lestariyani', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'dessy.lestariyani@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(792, 'diah.okiyanti', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'diah.okiyanti@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(793, 'dian.patra', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'dian.patra@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(794, 'diki.prasetiyo', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'diki.prasetiyo@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(795, 'dimas.alfiansyah', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'dimas.alfiansyah@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(796, 'dini.sriwardhaningty', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'dini.sriwardhaningty@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(797, 'dwi.endarwati', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'dwi.endarwati@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(798, 'dwi.nugraha', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'dwi.nugraha@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(799, 'edi.saputra', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'edi.saputra@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(800, 'edwin.saputra', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'edwin.saputra@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(801, 'eriyani.yana', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'eriyani.yana@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(802, 'erlayanto.mahyudin', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'erlayanto.mahyudin@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(803, 'ext.ahmad.guna', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.ahmad.guna@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(804, 'ext.alinda.suryana', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.alinda.suryana@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(805, 'ext.ardi.bukhori', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.ardi.bukhori@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(806, 'ext.arini.lestari', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'ext.arini.lestari@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(807, 'ext.asep.lesmana', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.asep.lesmana@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(808, 'ext.darin.putri', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'ext.darin.putri@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(809, 'ext.davi.firdaus', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.davi.firdaus@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(810, 'ext.dea.nindyakirana', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'ext.dea.nindyakirana@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(811, 'ext.deni.darmawan', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.deni.darmawan@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(812, 'ext.dian.haristianto', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'ext.dian.haristianto@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(813, 'ext.dinda.kurniawan', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'ext.dinda.kurniawan@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(814, 'ext.edi.susmadi', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'ext.edi.susmadi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(815, 'ext.edwin.dirhayanto', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'ext.edwin.dirhayanto@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(816, 'ext.findy.anantasari', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.findy.anantasari@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(817, 'ext.gana.syavithra', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.gana.syavithra@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(818, 'ext.gatot.susanto', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.gatot.susanto@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(819, 'ext.hadi.siswanto', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.hadi.siswanto@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(820, 'ext.henri.sulystiono', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.henri.sulystiono@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(821, 'ext.heri.susanto', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.heri.susanto@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(822, 'ext.hermiani.fazriah', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.hermiani.fazriah@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(823, 'ida.maulidiya', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'ext.idamaulidiya.mat@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(824, 'ext.ira.widyawati', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'ext.ira.widyawati@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(825, 'ext.madi.madi', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.madi.madi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(826, 'ext.marda.tillah', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.marda.tillah@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(827, 'ext.muammar.fahrizal', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'ext.muammar.fahrizal@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(828, 'ext.mundir.mundir', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.mundir.mundir@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(829, 'ext.nada.suada', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.nada.suada@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(830, 'ext.pratiwi.anggraen', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.pratiwi.anggraen@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(831, 'ext.raka.vemiarno', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'ext.raka.vemiarno@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(832, 'ext.ribut.sukirman', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.ribut.sukirman@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(833, 'ext.riska.badriahdi', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'ext.riska.badriahdi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(834, 'ext.riyan.hidayat', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.riyan.hidayat@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(835, 'ext.ryadh.aziz', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.ryadh.aziz@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(836, 'ext.sarjonih.prayogo', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.sarjonih.prayogo@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(837, 'ext.sendyasto.utomo', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.sendyasto.utomo@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(838, 'ext.sugiyanto.sugi', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.sugiyanto.sugi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(839, 'ext.sulaeman.sulaema', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.sulaeman.sulaema@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(840, 'ext.sumaryono.sumary', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.sumaryono.sumary@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(841, 'ext.sutarno.sutarno', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.sutarno.sutarno@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(842, 'ext.taufik.harsono', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.taufik.harsono@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(843, 'ext.tedy.saputra', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.tedy.saputra@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(844, 'ext.ubi.sugandi', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.ubi.sugandi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(845, 'ext.widodo.widodo', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ext.widodo.widodo@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(846, 'external.erin.martin', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'external.erin.martin@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(847, 'external.umar.taufik', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'external.umar.taufik@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(848, 'external.yusro.harun', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'external.yusro.harun@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(849, 'fajar.sadtomo', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'fajar.sadtomo@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(850, 'fariz.oktofian', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'fariz.oktofian@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(851, 'fathia.harsya', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'fathia.harsya@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(852, 'fathul.abas', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'fathul.abas@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(853, 'fathul.bilady', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta FA', '2019-08-03', '-', '-', 'fathul.bilady@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(854, 'fauzi.nurrohman', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'fauzi.nurrohman@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(855, 'febrian.wibowo', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'febrian.wibowo@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(856, 'febrina.ramadhani', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'febrina.ramadhani@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(857, 'feby.mohamad', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'feby.mohamad@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(858, 'felix.widodo', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'felix.widodo@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(859, 'femi.agustine', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'femi.agustine@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(860, 'fenni.fang', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'fenni.fang@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(861, 'fery.nurdin', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'fery.nurdin@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(862, 'fitri.kusumawati', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'fitri.kusumawati@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(863, 'fitri.pasaribu', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'fitri.pasaribu@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(864, 'fransisca.agustina', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'fransisca.agustina@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(865, 'gatot.utomo', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'gatot.utomo@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(866, 'gita.kemala', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'gita.kemala@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(867, 'gita.rosdianawati', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'gita.rosdianawati@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(868, 'gusyik.novianto', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'gusyik.novianto@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(869, 'gusyik.novianto.admi', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'gusyik.novianto.admi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(870, 'handayani.jusuf', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'handayani.jusuf@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(871, 'hariharan.krishnan', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'hariharan.krishnan@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(872, 'hendri.supriadhi', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'hendri.supriadhi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(873, 'hendro.prabowo', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'hendro.prabowo@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(874, 'hera.setyowati', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'hera.setyowati@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(875, 'hertha.putri', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'hertha.putri@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(876, 'hiromi.matsumoto', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'hiromi.matsumoto@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(877, 'huy.luu', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'huy.luu@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(878, 'imam.safii', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'imam.safii@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(879, 'imelda.karuniawati', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'imelda.karuniawati@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(880, 'indra.kusuma', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'indra.kusuma@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(881, 'indra.susanto', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'indra.susanto@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(882, 'irlambang.pribadi', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'irlambang.pribadi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(883, 'isa.nurachmat', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'isa.nurachmat@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(884, 'isdona.resnawati', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'isdona.resnawati@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(885, 'ishak.wicaksono', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ishak.wicaksono@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(886, 'ivana.dewi', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ivana.dewi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(887, 'jakob.friis-sorensen', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'jakob.friis-sorensen@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(888, 'jamil.siddique', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'jamil.siddique@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(889, 'jenyfer.wijaya', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'jenyfer.wijaya@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(890, 'jimmy.setiawan', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'jimmy.setiawan@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(891, 'joko.afandi', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'joko.afandi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(892, 'jujur.setiawan', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'jujur.setiawan@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(893, 'juliadi.juliadi', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'juliadi.juliadi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(894, 'juni.sinambela', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta FA', '2019-08-03', '', '-', 'juni.sinambela@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(895, 'junita.leonsius', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'junita.leonsius@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(896, 'juwi.putro', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'juwi.putro@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(897, 'juwita.sari', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'juwita.sari@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(898, 'kanti.wilujeng', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'kanti.wilujeng@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(899, 'keryn.tambunan', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'keryn.tambunan@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(900, 'kevin.tribaskoro', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'kevin.tribaskoro@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(901, 'khangli.seetoh.admin', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'khangli.seetoh.admin@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(902, 'khusnul.setiyani', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'khusnul.setiyani@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(903, 'kiki.lestari', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'kiki.lestari@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(904, 'knsub.test', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'knsub.test@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(905, 'krisnanda.sanjaya', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'krisnanda.sanjaya@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(906, 'kristiani.wijaya', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'kristiani.wijaya@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(907, 'leli.anggraini', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'leli.anggraini@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(908, 'leni.wulansari', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'leni.wulansari@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(909, 'lenin.narayanasamy', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'lenin.narayanasamy@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(910, 'lina.anggraini', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'lina.anggraini@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(911, 'lora.karolina', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'lora.karolina@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(912, 'lydia.simamora', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'lydia.simamora@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(913, 'marcail.tuyu', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'marcail.tuyu@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(914, 'markus.goei', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'markus.goei@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(915, 'melisda.siallagan', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'melisda.siallagan@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(916, 'menik.nikmatun', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'menik.nikmatun@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(917, 'merry.kusumawati', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'merry.kusumawati@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(918, 'meyta.aviera', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'meyta.aviera@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(919, 'Michael.Dunlop', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'Michael.Dunlop@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(920, 'minarni.iswandi', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'minarni.iswandi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(921, 'minarty.samosir', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta FA', '2019-08-03', '-', '-', 'minarty.samosir@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(922, 'miqdad.purnama', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'miqdad.purnama@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(923, 'mohamad.azmi', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'mohamad.azmi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(924, 'mohammad.purnama', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'mohammad.purnama@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(925, 'movida.purwati', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'movida.purwati@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(926, 'mufty.aulia', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'mufty.aulia@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(927, 'muhamad.hafiz', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'muhamad.hafiz@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(928, 'muhammad.brhamasstia', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'muhammad.brhamasstia@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(929, 'muhammad.iqbal', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'muhammad.iqbal@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(930, 'muhammad.kurniawan', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'muhammad.kurniawan@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(931, 'muhammad.malik', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'muhammad.malik@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(932, 'muhammad.saputra', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'muhammad.saputra@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(933, 'muslim.rushardi', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'muslim.rushardi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(934, 'nabila.geradin', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'nabila.geradin@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(935, 'nadia.damayanti', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'nadia.damayanti@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(936, 'nadia.raisya', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'nadia.raisya@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(937, 'nanang.heriyanto', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'nanang.heriyanto@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(938, 'natasha.wiriaramah', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'natasha.wiriaramah@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(939, 'nelly.rachman', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'nelly.rachman@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(940, 'netty.leo', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'netty.leo@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(941, 'niko.ginanto', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'niko.ginanto@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(942, 'novi.hardiyansari', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'novi.hardiyansari@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(943, 'noviana.dewi', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'noviana.dewi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(944, 'novita.margareth', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'novita.margareth@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(945, 'novitri.putrianto', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'novitri.putrianto@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(946, 'nuhansyah.pangestu', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'nuhansyah.pangestu@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(947, 'nuke.herawati', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'nuke.herawati@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(948, 'nur.wicaksono', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'nur.wicaksono@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(949, 'nurul.fatmawati', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'nurul.fatmawati@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(950, 'oesman.soesanto', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'oesman.soesanto@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(951, 'olivia.laura', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'olivia.laura@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(952, 'pratama.arta', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'pratama.arta@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(953, 'putri.mayasari', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'putri.mayasari@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(954, 'rafliyaldi.rafliyald', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'rafliyaldi.rafliyald@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(955, 'rahmatullah.rasyid', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'rahmatullah.rasyid@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(956, 'ramadhani.aulia', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ramadhani.aulia@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(957, 'rani.kemala', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'rani.kemala@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(958, 'redita.andriyani', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'redita.andriyani@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(959, 'rendy.nurcahyanto', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'rendy.nurcahyanto@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(960, 'rendy.sitorus', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'rendy.sitorus@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(961, 'reno.elfiani', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'reno.elfiani@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(962, 'retno.wulandari', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'retno.wulandari@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(963, 'reza.wibawa', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'reza.wibawa@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(964, 'ricky.suswandono', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ricky.suswandono@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(965, 'ridha.putra', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'ridha.putra@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(966, 'rifal.prasendra', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'rifal.prasendra@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(967, 'rika.nirmala', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'rika.nirmala@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(968, 'rimadhani.kawuryan', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'rimadhani.kawuryan@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(969, 'rinaldi.idrus', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'rinaldi.idrus@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(970, 'rio.marta', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'rio.marta@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(971, 'riski.hartanti', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'riski.hartanti@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(972, 'rismanto.sungkono', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'rismanto.sungkono@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(973, 'ritanti.azmi', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'ritanti.azmi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(974, 'rizky.andriani', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'rizky.andriani@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(975, 'rondi.cahyono', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'rondi.cahyono@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(976, 'roy.narendrasetya', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'roy.narendrasetya@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(977, 'rrannisa.trikania', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'rrannisa.trikania@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(978, 'rubi.herwindo', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'rubi.herwindo@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(979, 'rusli.hidayat', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'rusli.hidayat@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(980, 'ryan.andreas', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'ryan.andreas@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(981, 'saahil.oberoi', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'saahil.oberoi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(982, 'sadrah.ginting', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'sadrah.ginting@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(983, 'sandra.resti', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'sandra.resti@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(984, 'sara.napitupulu', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'sara.napitupulu@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(985, 'sari.ermayanti', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'sari.ermayanti@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(986, 'sartono.tono', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'sartono.tono@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(987, 'septian.ananta', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'septian.ananta@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(988, 'septian.ananta.admin', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'septian.ananta.admin@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(989, 'silky.putri', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'silky.putri@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(990, 'sofi.darmawan', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'sofi.darmawan@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(991, 'sriati.sri', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'sriati.sri@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(992, 'steffiani.reisa', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'steffiani.reisa@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(993, 'stella.nindita', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'stella.nindita@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(994, 'stevani.adriani', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'stevani.adriani@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(995, 'sugeng.harianto', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'sugeng.harianto@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(996, 'supriadi.supriadi', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'supriadi.supriadi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(997, 'susi.rahmawati', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'susi.rahmawati@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(998, 'syed.zaaheir', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'syed.zaaheir@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(999, 'tamar.hartio', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'tamar.hartio@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1000, 'taufik.arybowo', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'taufik.arybowo@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1001, 'teguh.santoso', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'teguh.santoso@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1002, 'teuku.abrar', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'teuku.abrar@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1003, 'titok.radityo', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'titok.radityo@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1004, 'titok.radityo.admin', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'titok.radityo.admin@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1005, 'togu.hadi', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'togu.hadi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1006, 'tri.nurcahyawening', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'tri.nurcahyawening@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1007, 'tri.sapdyarini', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'tri.sapdyarini@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1008, 'try.ananto', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'try.ananto@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1009, 'uliek.mandiri', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'uliek.mandiri@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1010, 'usep.sigih', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'usep.sigih@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1011, 'user', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'user@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1012, 'user_test', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '', '-', 'user_test@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1013, 'vannesha.taffita', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'vannesha.taffita@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1014, 'vany.kartikawati', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'vany.kartikawati@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1015, 'wahyu.budi', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'wahyu.budi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1016, 'wahyu.ningtias', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'wahyu.ningtias@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1017, 'waysul.qoroni', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'waysul.qoroni@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1018, 'yanti.yanti', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'yanti.yanti@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1019, 'yashica.amelia', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'yashica.amelia@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1020, 'yogi.agung', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '', '-', 'yogi.agung@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1021, 'yudaniasri.safitri', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'yudaniasri.safitri@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1022, 'yuli.kurniawan', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'yuli.kurniawan@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1023, 'yuli.nurmantoro', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'yuli.nurmantoro@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1024, 'yulia.rahmania', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'yulia.rahmania@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1025, 'yulisa.winata', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'yulisa.winata@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1026, 'yusuf.tantowi', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'yusuf.tantowi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1027, 'zaenab.zae', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'zaenab.zae@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1028, 'zaenal.abidin', '1234', '2019-08-03', '2', 'IDN', '-', 'Jakarta HO', '2019-08-03', '-', '-', 'zaenal.abidin@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1029, 'zulfadly.arman', '1234', '2019-08-03', '2', 'IDN', '-', '-', '2019-08-03', '-', '-', 'zulfadly.arman@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1030, 'andi.serviana', '1234', '2019-09-12', '2', 'IDN', '-', '-', '2019-09-12', '-', '-', 'andi.serviana@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1031, 'kaya.prasetyo', '1234', '2019-09-12', '2', 'IDN', '-', '-', '2019-09-12', '-', '-', 'kaya.prasetyo@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1032, 'user', '1234', '2019-09-12', '2', 'IDN', '-', '-', '0000-00-00', '-', '-', '-', '-', 'Active', 'photo.jpg'),
(1033, 'ext.dwi.firmansyah', '1234', '2019-09-12', '2', 'IDN', '-', '-', '0000-00-00', '-', '-', 'ext.dwi.firmansyah@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1034, 'ext.polary.bakti', '1234', '2019-09-12', '2', 'IDN', '-', '-', '0000-00-00', '-', '-', 'ext.polary.bakti@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1035, 'ext.budi.trianna', '1234', '2019-09-12', '2', 'IDN', '-', '-', '0000-00-00', '-', '-', 'ext.budi.trianna@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1036, 'ext.novi.prasetyo', '1234', '2019-09-12', '2', 'IDN', '-', '-', '0000-00-00', '-', '-', 'ext.novi.prasetyo@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1037, 'ext.andi.rohandi', '1234', '2019-09-12', '2', 'IDN', '-', '-', '0000-00-00', '-', '-', 'ext.andi.rohandi@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1038, 'kiswagianto.kis', '1234', '2019-09-12', '2', 'IDN', '-', '-', '0000-00-00', '-', '-', 'kiswagianto.kis@kuehne-nagel.com', '-', 'Active', 'photo.jpg'),
(1039, 'ext.arien.wijayanti', '1234', '2019-10-15', '2', 'IDN', '-', '-', '0000-00-00', '-', '-', 'ext.arien.wijayanti@kuehne-nagel.com', '-', 'Active', ''),
(1040, 'ext.sri.utami', '1234', '2019-10-15', '2', 'IDN', '-', '-', '0000-00-00', '-', '-', 'ext.sri.utami@kuehne-nagel.com', '-', 'Active', '');
INSERT INTO `tb_user` (`user_id`, `user_name`, `user_password`, `user_created`, `user_role`, `user_region`, `user_dept`, `branch`, `jointdate`, `nik`, `costcenter`, `emailuser`, `kncode`, `user_status`, `foto`) VALUES
(1041, 'ext.siti.mariyam', '1234', '2019-10-15', '2', 'IDN', '-', '-', '0000-00-00', '-', '-', 'ext.siti.mariyam@kuehne-nagel.com', '-', 'Active', ''),
(1042, 'ext.rudi.rachmat', '1234', '2019-10-15', '2', 'IDN', '-', '-', '0000-00-00', '-', '-', 'ext.rudi.rachmat@kuehne-nagel.com', '-', 'Active', ''),
(1043, 'ext.irfan.fauzi', '1234', '2019-10-15', '2', 'IDN', '-', '-', '0000-00-00', '-', '-', 'ext.irfan.fauzi@kuehne-nagel.com', '-', 'Active', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tb_department`
--
ALTER TABLE `tb_department`
  ADD PRIMARY KEY (`id_department`);

--
-- Indexes for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `tb_log_history`
--
ALTER TABLE `tb_log_history`
  ADD PRIMARY KEY (`his_id`);

--
-- Indexes for table `tb_log_history_req`
--
ALTER TABLE `tb_log_history_req`
  ADD PRIMARY KEY (`his_id_req`);

--
-- Indexes for table `tb_master_product`
--
ALTER TABLE `tb_master_product`
  ADD PRIMARY KEY (`id_master`);

--
-- Indexes for table `tb_owner`
--
ALTER TABLE `tb_owner`
  ADD PRIMARY KEY (`owe_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `tb_request_item`
--
ALTER TABLE `tb_request_item`
  ADD PRIMARY KEY (`id_req`);

--
-- Indexes for table `tb_security_form`
--
ALTER TABLE `tb_security_form`
  ADD PRIMARY KEY (`id_sc`);

--
-- Indexes for table `tb_temporary`
--
ALTER TABLE `tb_temporary`
  ADD PRIMARY KEY (`id_temporary`);

--
-- Indexes for table `tb_type`
--
ALTER TABLE `tb_type`
  ADD PRIMARY KEY (`id_proset`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_department`
--
ALTER TABLE `tb_department`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `log_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=788;
--
-- AUTO_INCREMENT for table `tb_log_history`
--
ALTER TABLE `tb_log_history`
  MODIFY `his_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_log_history_req`
--
ALTER TABLE `tb_log_history_req`
  MODIFY `his_id_req` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_master_product`
--
ALTER TABLE `tb_master_product`
  MODIFY `id_master` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1456;
--
-- AUTO_INCREMENT for table `tb_owner`
--
ALTER TABLE `tb_owner`
  MODIFY `owe_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362;
--
-- AUTO_INCREMENT for table `tb_request_item`
--
ALTER TABLE `tb_request_item`
  MODIFY `id_req` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_security_form`
--
ALTER TABLE `tb_security_form`
  MODIFY `id_sc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_temporary`
--
ALTER TABLE `tb_temporary`
  MODIFY `id_temporary` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_type`
--
ALTER TABLE `tb_type`
  MODIFY `id_proset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1044;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
