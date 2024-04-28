CREATE DATABASE menuTest;
 use menuTest;
 
 CREATE TABLE menuItems (
 	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 	prodName VARCHAR(30) NOT NULL,
 	price DECIMAL(10,2),
 	image VARCHAR(50) NOT NULL,
	description VARCHAR(50) NOT NULL
 );
 

INSERT INTO menuItems(prodName,price,image,description)
VALUES ('Chickpea Curry', '12.99','chickpea curry.jpeg','A traditional recipe that warms the hearts of families');
INSERT INTO menuItems(prodName,price,image)
VALUES ('Spicy Tofu Tahini Noodle Salad', '12.50','tofu salad.jpeg','Vegan friendly meal to fuel  your body and soul');
INSERT INTO menuItems(prodName,price,image)
VALUES ('Creamy White Pasta', '13.75','white.jpg','Filling pasta perfect for sharing with friends and family');
INSERT INTO menuItems(prodName,price,image)
VALUES ('Creamy Chicken Tikka', '10.20','chickentikka.jpg','Warm, spicy and beautifully seasoned to add spice into your life');
INSERT INTO menuItems(prodName,price,image)
VALUES ('Gyoza', '15.40','gyoza.jpg','A classic Asian snack, perfect for rainy and sunny days');
INSERT INTO menuItems(prodName,price,image)
VALUES ('Spicy Beef Stir Fried Noodles', '15.99','beefnoodles.jpg','Quick and easy and perfect for those with a hectic schedule looking for a savoury and quick meal');
