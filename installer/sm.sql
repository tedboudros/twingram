SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `displayName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwordhash` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `admin` (`id`, `displayName`, `username`, `passwordhash`, `date`) VALUES
(1, 'Theodore Boudros', 'admin', '$2y$10$maSiS7hgTPTiNccSw0RSAuCenQlTIXR71cuoiQYgZxo0OQe4FRHK6', '2017-08-26 04:44:17');

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `comments` (`id`, `postid`, `text`, `userid`, `date`) VALUES
(1, 1, 'my first comment', 1, '2017-08-22 11:56:30');

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `pageName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pages` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `pages` (`id`, `pageName`, `pages`, `date`) VALUES
(1, 'homepage', '[\"header.php\",\"post.php\",\"posts.php\"]', '2017-08-22 03:49:07'),
(2, '404', '[\"header.php\",\"404.php\",\"footer.php\"]', '2017-08-22 03:49:27'),
(3, 'profile', '[\"header.php\",\"footer.php\"]', '2017-08-22 03:49:42'),
(4, 'login', '[\"headerLogin.php\",\"footer.php\"]', '2017-09-22 22:21:21');

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `posts` (`id`, `userid`, `title`, `text`, `date`) VALUES
(1, 1, 'Hello world', '1st Post', '2017-09-13 19:16:35'),
(2, 1, 'Hello world', 'My problems are not to be solved', '2017-09-19 14:57:07'),
(3, 1, 'gggf', 'ftfgddfgdfg', '2017-09-20 15:18:31'),
(4, 1, 'khjg', 'fghddhhd', '2017-09-20 15:18:37'),
(5, 1, 'bfgrg', 'gerggert', '2017-09-20 15:18:42'),
(6, 1, 'trgegtregret', 'tgrgetrgetr', '2017-09-20 15:18:44'),
(7, 1, 'gtrretgetgr', 'ggteregtregtr', '2017-09-20 15:18:47'),
(8, 1, 'jhbjhvgjhb', 'khvjkhv', '2017-09-20 15:18:52'),
(9, 1, 'Is it working?', 'HELLO WORLD ', '2017-09-20 23:29:26'),
(10, 1, 'adafdfads', 'dfafda', '2017-09-21 00:58:06'),
(11, 1, 'Post working', 'hello world', '2017-09-21 01:39:05'),
(12, 1, 'ghiviyghggchgchgchgcighkcvhikg cigckhgihj\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'gamw ', '2017-09-21 15:29:36');

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `setting` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `settings` (`id`, `setting`, `value`, `date`) VALUES
(1, 'site-name', 'logo.png', '2017-08-20 18:29:20'),
(2, 'site-title', 'Title here', '2017-08-21 18:06:09'),
(3, 'iflogo', '1', '2017-08-22 00:04:14');

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `passhash` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `displayname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bigimage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `username`, `passhash`, `displayname`, `image`, `bigimage`, `date`) VALUES
(1, 'user', '$2y$10$maSiS7hgTPTiNccSw0RSAuCenQlTIXR71cuoiQYgZxo0OQe4FRHK6', 'User', 'profile.png', 'profile.png', '2017-08-20 18:39:57');

ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;
