CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` text NOT NULL,
  `api_key` varchar(32) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
);
 
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);
 
CREATE TABLE IF NOT EXISTS `user_project_reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `review_text` text NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `project_id` (`project_id`)
);
 
ALTER TABLE  `user_project_reviews` ADD FOREIGN KEY (  `user_id` ) REFERENCES `users` (
`id`
) ON DELETE CASCADE ON UPDATE CASCADE ;
 
ALTER TABLE  `user_project_reviews` ADD FOREIGN KEY (  `project_id` ) REFERENCES  `projects` (
`id`
) ON DELETE CASCADE ON UPDATE CASCADE ;