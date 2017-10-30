CREATE TABLE `member` (
  `id`         CHAR(15) NOT NULL,
  `pass`       CHAR(15) NOT NULL,
  `name`       CHAR(10) NOT NULL,
  `nick`       CHAR(10) NOT NULL,
  `hp`         CHAR(20) NOT NULL,
  `email`      CHAR(80) NULL,
  `regist_day` CHAR(20) NULL,
  `level`      INT      NULL,
  PRIMARY KEY (`id`)
);

