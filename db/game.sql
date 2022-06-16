-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220423.6d54ac471a
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2022 pada 19.30
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_game`
--

CREATE TABLE `galeri_game` (
  `id_galeri` int(11) NOT NULL,
  `genre_game_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `deskripsi` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri_game`
--

INSERT INTO `galeri_game` (`id_galeri`, `genre_game_id`, `nama`, `tanggal_rilis`, `deskripsi`, `link`) VALUES
(1, 6, 'CYBERPUNK 2077', '2020-12-10', 'Cyberpunk 2077 is an open-world, action-adventure story set in Night City, a megalopolis obsessed with power, glamour and body modification. You play as V, a mercenary outlaw going after a one-of-a-kind implant that is the key to immortality. You can customize your character’s cyberware, skillset and playstyle, and explore a vast city where the choices you make shape the story and the world around you.', 'https://www.cyberpunk.net/id/en/buy'),
(2, 1, 'BATMAN', '2013-10-25', 'Batman™: Arkham Origins developed by WB Games Montréal, the game features an expanded Gotham City and introduces taking place before the rise of Gotham City’s most dangerous criminals, the game showcases a young and unrefined Batman as he faces a defining moment in his early career as a crime fighter that sets his path to becoming the Dark Knight.', 'https://store.steampowered.com/app/209000/Batman_Arkham_Origins/'),
(3, 2, 'SIFU', '2022-08-02', 'Sifu is the new game of Sloclap, the independent studio behind Absolver. A third person action game featuring intense hand-to-hand combat, it puts you in control of a young Kung-Fu student on a path of revenge.', 'https://store.epicgames.com/en-US/p/sifu'),
(4, 1, 'DEVIL MAY CRY V', '2019-03-08', 'The threat of demonic power has returned to menace the world once again in Devil May Cry 5. The invasion begins when the seeds of a “demon tree” take root in Red Grave City. As this hellish incursion starts to take over the city, a young demon hunter Nero, arrives with his partner Nico in their “Devil May Cry” motorhome. Finding himself without the use of his right arm, Nero enlists Nico, a self-professed weapons artist, to design a variety of unique mechanical Devil Breaker arms to give him extra powers to take on evil demons such as the blood sucking flying Empusa and giant colossus enemy Goliath.', 'https://store.steampowered.com/app/601150/Devil_May_Cry_5/'),
(5, 12, 'RESIDENT EVIL VIII', '2021-05-07', 'Set a few years after the horrifying events in the critically acclaimed Resident Evil 7 biohazard, the all-new storyline begins with Ethan Winters and his wife Mia living peacefully in a new location, free from their past nightmares. Just as they are building their new life together, tragedy befalls them once again.', 'https://store.steampowered.com/app/1196590/Resident_Evil_Village/'),
(6, 1, 'DEATH STRANDING', '2022-03-30', 'In the future, a mysterious event known as the Death Stranding has opened a doorway between the living and the dead, leading to grotesque creatures from the afterlife roaming the fallen world marred by a desolate society.\r\n\r\nAs Sam Bridges, your mission is to deliver hope to humanity by connecting the last survivors of a decimated America.\r\n\r\nCan you reunite the shattered world, one step at a time? ', 'https://store.steampowered.com/app/1850570/DEATH_STRANDING_DIRECTORS_CUT/'),
(7, 6, 'SKYRIM V', '2016-10-28', 'Skyrim Special Edition also brings the full power of mods to the PC and consoles. New quests, environments, characters, dialogue, armor, weapons and more – with Mods, there are no limits to what you can experience. ', 'https://store.steampowered.com/app/489830/The_Elder_Scrolls_V_Skyrim_Special_Edition/'),
(8, 1, 'FAR CRY', '2016-03-01', 'The award-winning Far Cry franchise that stormed the tropics and the Himalayas now enters the original fight for humanity’s survival with its innovative open-world sandbox gameplay, bringing together massive beasts, breathtaking environments, and unpredictable savage encounters. ', 'https://store.steampowered.com/app/371660/Far_Cry_Primal/'),
(9, 7, 'TOMB RAIDER', '2013-03-05', 'Tomb Raider is a critically acclaimed action adventure that explores the intense and gritty origin story of Lara Croft and her ascent from a young woman to a hardened survivor.', 'https://store.steampowered.com/app/203160/Tomb_Raider/'),
(10, 1, 'HELLO NEIGHBOR', '2017-12-09', 'Hello Neighbor is a stealth horror game about sneaking into your neighbor\'s house to figure out what horrible secrets he\'s hiding in the basement. You play against an advanced AI that learns from your every move.', 'https://store.steampowered.com/app/521890/Hello_Neighbor/'),
(11, 1, 'GTA V', '2015-04-15', 'Grand Theft Auto V for PC also brings the debut of the Rockstar Editor, a powerful suite of creative tools to quickly and easily capture, edit and share game footage from within Grand Theft Auto V and Grand Theft Auto Online. ', 'https://store.steampowered.com/app/271590/Grand_Theft_Auto_V/'),
(12, 6, 'THE WITCHER III', '2015-05-18', 'The Witcher: Wild Hunt is a story-driven open world RPG set in a visually stunning fantasy universe full of meaningful choices and impactful consequences. ', 'https://store.steampowered.com/app/292030/The_Witcher_3_Wild_Hunt/'),
(13, 4, 'PVZ 2', '2022-05-17', 'Plants vs. Zombies Garden Warfare 2 also introduces the Backyard Battleground, your very own interactive hub where you and up to 3 friends can take on daily quests and challenges and interact with your favorite PvZ characters.', 'https://store.steampowered.com/app/1922560/Plants_vs_Zombies_Garden_Warfare_2_Deluxe_Edition/'),
(14, 1, 'ASSASINS CREED III', '2019-03-29', 'Relive the American Revolution or experience it for the first time in Assassin\'s Creed® III Remastered, with enhanced graphics and improved gameplay mechanics. Also includes Assassin\'s Creed Liberation remastered and all solo DLC content.', 'https://store.epicgames.com/en-US/p/assassins-creed-3'),
(15, 11, 'NARAKA', '2021-08-12', 'NARAKA: BLADEPOINT is an up to 60-player PVP mythical action combat experience with martial arts inspired melee combat, gravity defying mobility, vast arsenals of melee & ranged weapons, legendary customizable heroes with epic abilities', 'https://store.steampowered.com/app/1203220/NARAKA_BLADEPOINT/'),
(16, 1, 'METAL GEAR V', '2015-09-01', 'The METAL GEAR SOLID team continues to ambitiously explore mature themes such as the psychology of warfare and the atrocities that result from those that engage in its vicious cycle. One of the most anticipated games of the year with its open-world design', 'https://store.steampowered.com/app/287700/METAL_GEAR_SOLID_V_THE_PHANTOM_PAIN/'),
(17, 2, 'TEKKEN 7', '2017-06-02', 'Love, Revenge, Pride. Everyone has a reason to fight. Values are what define us and make us human, regardless of our strengths and weaknesses. There are no wrong motivations, just the path we choose to take.', 'https://store.steampowered.com/app/389730/TEKKEN_7/'),
(18, 6, 'PERSONA 5', '2021-02-23', 'Join the Phantom Thieves and strike back against the corruption overtaking cities across Japan. A summer vacation with close friends takes a sudden turn as a distorted reality emerges', 'https://store.steampowered.com/app/1382330/Persona_5_Strikers/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre_game`
--

CREATE TABLE `genre_game` (
  `id_genre` int(11) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `genre_game`
--

INSERT INTO `genre_game` (`id_genre`, `genre`) VALUES
(1, 'Action'),
(2, 'Fighting'),
(3, 'FPS'),
(4, 'TPS'),
(5, 'RTS'),
(6, 'RPG'),
(7, 'Adventure'),
(8, 'Simulation'),
(9, 'Sport'),
(10, 'Racing'),
(11, 'Multiplayer'),
(12, 'Singleplayer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri_game`
--
ALTER TABLE `galeri_game`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `genre_game_id_foreign` (`genre_game_id`);

--
-- Indeks untuk tabel `genre_game`
--
ALTER TABLE `genre_game`
  ADD PRIMARY KEY (`id_genre`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri_game`
--
ALTER TABLE `galeri_game`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `genre_game`
--
ALTER TABLE `genre_game`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `galeri_game`
--
ALTER TABLE `galeri_game`
  ADD CONSTRAINT `genre_game_id_foreign` FOREIGN KEY (`genre_game_id`) REFERENCES `genre_game` (`id_genre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



