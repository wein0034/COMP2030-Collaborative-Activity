CREATE TABLE `users` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(25) NOT NULL,
    `password` varchar(255) NOT NULL,
    `email` varchar(100) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;



CREATE TABLE `products` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `title` varchar(200) NOT NULL,
    `price` varchar(10) NOT NULL,
    `cond` varchar(100) NOT NULL,
    `category` varchar(100) NOT NULL,
    `location` varchar(100) NOT NULL,
    `description` varchar(500) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

-- example
INSERT INTO products(title, price, category, cond, location, description) VALUES ('New Car', 25, 'New', 'Vehicle', 'Bedford Park', 'Description goes here');

                