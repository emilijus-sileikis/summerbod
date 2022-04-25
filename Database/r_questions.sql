
CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `choice_1` text NOT NULL,
  `choice_2` text NOT NULL,
  `choice_3` text NOT NULL,
  `choice_4` text NOT NULL,
  `answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `data` (`id`, `question`, `choice_1`, `choice_2`, `choice_3`, `choice_4`, `answer`) VALUES
(1, '1 + 1 = ?', '2', '3', '4', '5', 1),
(2, '2+2=?', '6', '8', '10', '4', 4),
(3, 'Highest Mountain in the World.', 'Mt. Carmel', 'Mt. Liza', 'Mt. Everest', 'Mt. John', 3),
(4, 'Latest version of Microsoft Windows?', 'Window XP', 'Windows 10', 'Windows 11', 'Windows 95', 3);

ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

