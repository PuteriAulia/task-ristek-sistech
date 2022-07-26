-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jul 2022 pada 18.51
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_profil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` int(3) NOT NULL,
  `artikel_gambar` varchar(255) NOT NULL,
  `artikel_judul` varchar(100) NOT NULL,
  `artikel_isi` text NOT NULL,
  `artikel_tanggal` date NOT NULL,
  `artikel_penulis` varchar(100) NOT NULL,
  `artikel_views` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `artikel_gambar`, `artikel_judul`, `artikel_isi`, `artikel_tanggal`, `artikel_penulis`, `artikel_views`) VALUES
(22, '62dd77248d7fb.jpg', 'Artikel 1', '<p><span style=\"font-size: 15.008px;\">Lorem ipsum dolor sit amet. Sit facere autem ut debitis itaque sed temporibus dolor nam consequatur tempore et modi dolores? Sit minima nemo sed repudiandae minus in quaerat officiis ut numquam odit id possimus mollitia. Eum soluta galisum nam omnis repellendus sed placeat distinctio et commodi voluptas rem voluptatum atque et aperiam necessitatibus. Nam nostrum beatae est similique dolorem ut blanditiis atque ut nostrum voluptatibus in officia omnis.</span></p><p><span style=\"font-size: 15.008px;\"><br></span></p><p><span style=\"font-size: 15.008px;\">Et rerum nisi ab quibusdam dolorem non quam repudiandae et cupiditate molestias ex quasi dolores. Et officia magnam nam eaque mollitia 33 consequatur eligendi qui sequi dicta hic dignissimos praesentium. Ut velit veritatis et consequatur ipsum sed facilis earum sit quaerat repudiandae nam vitae fuga et iure quaerat aut debitis eligendi. Et vitae voluptatem At praesentium iure est esse quaerat ea voluptas aspernatur At placeat dicta.</span></p><p><span style=\"font-size: 15.008px;\"><br></span></p><p><span style=\"font-size: 15.008px;\">Est quia cumque vel quia asperiores aut alias perferendis ea voluptas expedita! Vel possimus explicabo ut perferendis culpa ut quod perspiciatis est placeat velit. Et facilis iste aut corporis atque eos pariatur sint non corrupti aliquam aut voluptatem omnis et galisum libero.</span></p><p><span style=\"font-size: 15.008px;\"><br></span></p><p><span style=\"font-size: 15.008px;\">Non accusantium suscipit ut minima accusamus 33 maiores nobis et consequatur voluptatem vel sint velit qui illo quas in voluptas cupiditate. Sed amet facilis ex debitis dolores aut voluptatum quam.</span></p><p><span style=\"font-size: 15.008px;\"><br></span></p><p><span style=\"font-size: 15.008px;\">Sed alias maiores ut fuga adipisci sit libero eligendi non harum delectus cum atque blanditiis in neque illo et quae rerum. Et deserunt delectus nam obcaecati itaque sit doloribus aspernatur.&nbsp;</span></p>', '2022-07-24', 'puteri aulia', 0),
(23, '62dd773d82274.jpg', 'Artikel 2', '<p><span style=\"font-size: 15.008px;\">Lorem ipsum dolor sit amet. Sit facere autem ut debitis itaque sed temporibus dolor nam consequatur tempore et modi dolores? Sit minima nemo sed repudiandae minus in quaerat officiis ut numquam odit id possimus mollitia. Eum soluta galisum nam omnis repellendus sed placeat distinctio et commodi voluptas rem voluptatum atque et aperiam necessitatibus. Nam nostrum beatae est similique dolorem ut blanditiis atque ut nostrum voluptatibus in officia omnis.</span></p><p><span style=\"font-size: 15.008px;\"><br></span></p><p><span style=\"font-size: 15.008px;\">Et rerum nisi ab quibusdam dolorem non quam repudiandae et cupiditate molestias ex quasi dolores. Et officia magnam nam eaque mollitia 33 consequatur eligendi qui sequi dicta hic dignissimos praesentium. Ut velit veritatis et consequatur ipsum sed facilis earum sit quaerat repudiandae nam vitae fuga et iure quaerat aut debitis eligendi. Et vitae voluptatem At praesentium iure est esse quaerat ea voluptas aspernatur At placeat dicta.</span></p><p><span style=\"font-size: 15.008px;\"><br></span></p><p><span style=\"font-size: 15.008px;\">Est quia cumque vel quia asperiores aut alias perferendis ea voluptas expedita! Vel possimus explicabo ut perferendis culpa ut quod perspiciatis est placeat velit. Et facilis iste aut corporis atque eos pariatur sint non corrupti aliquam aut voluptatem omnis et galisum libero.</span></p><p><span style=\"font-size: 15.008px;\"><br></span></p><p><span style=\"font-size: 15.008px;\">Non accusantium suscipit ut minima accusamus 33 maiores nobis et consequatur voluptatem vel sint velit qui illo quas in voluptas cupiditate. Sed amet facilis ex debitis dolores aut voluptatum quam.</span></p><p><span style=\"font-size: 15.008px;\"><br></span></p><p><span style=\"font-size: 15.008px;\">Sed alias maiores ut fuga adipisci sit libero eligendi non harum delectus cum atque blanditiis in neque illo et quae rerum. Et deserunt delectus nam obcaecati itaque sit doloribus aspernatur.&nbsp;</span></p>', '2022-07-24', 'puteri aulia', 0),
(24, '62dd775c938c3.jpg', 'Artikel 3', '<p><span style=\"font-size: 15.008px;\">Lorem ipsum dolor sit amet. Sit facere autem ut debitis itaque sed temporibus dolor nam consequatur tempore et modi dolores? Sit minima nemo sed repudiandae minus in quaerat officiis ut numquam odit id possimus mollitia. Eum soluta galisum nam omnis repellendus sed placeat distinctio et commodi voluptas rem voluptatum atque et aperiam necessitatibus. Nam nostrum beatae est similique dolorem ut blanditiis atque ut nostrum voluptatibus in officia omnis.</span></p><p><span style=\"font-size: 15.008px;\">Et rerum nisi ab quibusdam dolorem non quam repudiandae et cupiditate molestias ex quasi dolores. Et officia magnam nam eaque mollitia 33 consequatur eligendi qui sequi dicta hic dignissimos praesentium. Ut velit veritatis et consequatur ipsum sed facilis earum sit quaerat repudiandae nam vitae fuga et iure quaerat aut debitis eligendi. Et vitae voluptatem At praesentium iure est esse quaerat ea voluptas aspernatur At placeat dicta.</span></p><p><span style=\"font-size: 15.008px;\">Est quia cmque vel quia asperiores aut alias perferendis ea voluptas expedita! Vel possimus explicabo ut perferendis culpa ut quod perspiciatis est placeat velit. Et facilis iste aut corporis atque eos pariatur sint non corrupti aliquam aut voluptatem omnis et galisum libero.</span></p><p><span style=\"font-size: 15.008px;\">Non accusantium suscipit ut minima accusamus 33 maiores nobis et consequatur voluptatem vel sint velit qui illo quas in voluptas cupiditate. Sed amet facilis ex debitis dolores aut voluptatum quam.</span></p><p><span style=\"font-size: 15.008px;\">Sed alias maiores ut fuga adipisci sit libero eligendi non harum delectus cum atque blanditiis in neque illo et quae rerum. Et deserunt delectus nam obcaecati itaque sit doloribus aspernatur.&nbsp;</span></p>', '2022-07-24', 'puteri aulia', 0),
(25, '62dd777711f4e.jpg', 'Artikel 4', '<p><span style=\"font-size: 15.008px;\">Lorem ipsum dolor sit amet. Sit facere autem ut debitis itaque sed temporibus dolor nam consequatur tempore et modi dolores? Sit minima nemo sed repudiandae minus in quaerat officiis ut numquam odit id possimus mollitia. Eum soluta galisum nam omnis repellendus sed placeat distinctio et commodi voluptas rem voluptatum atque et aperiam necessitatibus. Nam nostrum beatae est similique dolorem ut blanditiis atque ut nostrum voluptatibus in officia omnis.</span></p><p><span style=\"font-size: 15.008px;\">Et rerum nisi ab quibusdam dolorem non quam repudiandae et cupiditate molestias ex quasi dolores. Et officia magnam nam eaque mollitia 33 consequatur eligendi qui sequi dicta hic dignissimos praesentium. Ut velit veritatis et consequatur ipsum sed facilis earum sit quaerat repudiandae nam vitae fuga et iure quaerat aut debitis eligendi. Et vitae voluptatem At praesentium iure est esse quaerat ea voluptas aspernatur At placeat dicta.</span></p><p><span style=\"font-size: 15.008px;\">Est quia cumque vel quia asperiores aut alias perferendis ea voluptas expedita! Vel possimus explicabo ut perferendis culpa ut quod perspiciatis est placeat velit. Et facilis iste aut corporis atque eos pariatur sint non corrupti aliquam aut voluptatem omnis et galisum libero.</span></p><p><span style=\"font-size: 15.008px;\">Non accusantium suscipit ut minima accusamus 33 maiores nobis et consequatur voluptatem vel sint velit qui illo quas in voluptas cupiditate. Sed amet facilis ex debitis dolores aut voluptatum quam.</span></p><p><span style=\"font-size: 15.008px;\">Sed alias maiores ut fuga adipisci sit libero eligendi non harum delectus cum atque blanditiis in neque illo et quae rerum. Et deserunt delectus nam obcaecati itaque sit doloribus aspernatur.&nbsp;</span></p>', '2022-07-24', 'puteri aulia', 0),
(26, '62dd778eaf3bc.jpg', 'Artikel 5', '<p><span style=\"font-size: 15.008px;\">Lorem ipsum dolor sit amet. Sit facere autem ut debitis itaque sed temporibus dolor nam consequatur tempore et modi dolores? Sit minima nemo sed repudiandae minus in quaerat officiis ut numquam odit id possimus mollitia. Eum soluta galisum nam omnis repellendus sed placeat distinctio et commodi voluptas rem voluptatum atque et aperiam necessitatibus. Nam nostrum beatae est similique dolorem ut blanditiis atque ut nostrum voluptatibus in officia omnis.</span></p><p><span style=\"font-size: 15.008px;\">Et rerum nisi ab quibusdam dolorem non quam repudiandae et cupiditate molestias ex quasi dolores. Et officia magnam nam eaque mollitia 33 consequatur eligendi qui sequi dicta hic dignissimos praesentium. Ut velit veritatis et consequatur ipsum sed facilis earum sit quaerat repudiandae nam vitae fuga et iure quaerat aut debitis eligendi. Et vitae voluptatem At praesentium iure est esse quaerat ea voluptas aspernatur At placeat dicta.</span></p><p><span style=\"font-size: 15.008px;\">Est quia cumque vel quia asperiores aut alias perferendis ea voluptas expedita! Vel possimus explicabo ut perferendis culpa ut quod perspiciatis est placeat velit. Et facilis iste aut corporis atque eos pariatur sint non corrupti aliquam aut voluptatem omnis et galisum libero.</span></p><p><span style=\"font-size: 15.008px;\">Non accusantium suscipit ut minima accusamus 33 maiores nobis et consequatur voluptatem vel sint velit qui illo quas in voluptas cupiditate. Sed amet facilis ex debitis dolores aut voluptatum quam.</span></p><p><span style=\"font-size: 15.008px;\">Sed alias aiores ut fuga adipisci sit libero eligendi non harum delectus cum atque blanditiis in neque illo et quae rerum. Et deserunt delectus nam obcaecati itaque sit doloribus aspernatur.&nbsp;</span></p>', '2022-07-24', 'puteri aulia', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel_like`
--

CREATE TABLE `artikel_like` (
  `artikel_like_id` int(11) NOT NULL,
  `artikel_like_ip` varchar(100) NOT NULL,
  `artikel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel_like`
--

INSERT INTO `artikel_like` (`artikel_like_id`, `artikel_like_ip`, `artikel_id`) VALUES
(1, '::1', 14),
(2, '::1', 21),
(3, '::1', 20);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indeks untuk tabel `artikel_like`
--
ALTER TABLE `artikel_like`
  ADD PRIMARY KEY (`artikel_like_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikel_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `artikel_like`
--
ALTER TABLE `artikel_like`
  MODIFY `artikel_like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
