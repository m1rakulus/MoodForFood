CREATE DATABASE menuTest;
 use menuTest;
 
 CREATE TABLE menuItems (
 	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 	prodName VARCHAR(30) NOT NULL,
 	price DECIMAL(10,2),
 	image VARCHAR(50) NOT NULL
 );
 

INSERT INTO menuItems(id,prodName,price,image)
VALUES ('Chickpea Curry', '12.99','chickpea curry.jpeg');
INSERT INTO menuItems(id,prodName,price,image)
VALUES ('Spicy Tofu Tahini Noodle Salad', '12.50','tofu salad.jpeg');
INSERT INTO menuItems(id,prodName,price,image)
VALUES ('Creamy White Pasta', '13.75','white.jpg');
INSERT INTO menuItems(id,prodName,price,image)
VALUES ('Creamy Chicken Tikka', '10.20','chickentikka.jpg');
INSERT INTO menuItems(id,prodName,price,image)
VALUES ('Gyoza', '15.40','gyoza.jpg');
INSERT INTO menuItems(id,prodName,price,image)
VALUES ('Spicy Beef Stir Fried Noodles', '15.99','beefnoodles.jpg');
