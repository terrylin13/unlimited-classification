
CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT 0,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
);

#本教程只是展示，日常开发中可增加索引
