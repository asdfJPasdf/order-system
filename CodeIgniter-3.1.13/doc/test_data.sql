use order_system;
INSERT INTO product_category (product_category_name) 
VALUES ('Italian');

INSERT INTO product_category (product_category_name) 
VALUES ('Pizza');

INSERT INTO product_category (product_category_name) 
VALUES ('Japanese');

INSERT INTO product_category (product_category_name) 
VALUES ('Vietnamese');

INSERT INTO product_category (product_category_name) 
VALUES ('Mediterranean');

INSERT INTO product(product_name, product_category_id, product_description, product_price) 
VALUES ('Spaghetti Bolognese', 1, 'Spaghetti with a classic meat sauce made from ground beef and tomatoes.', 12.99);

INSERT INTO product(product_name, product_category_id, product_description, product_price) 
VALUES ('Pizza Margherita', 2, 'A classic pizza with tomato sauce, mozzarella cheese and fresh basil.', 15.99);

INSERT INTO product(product_name, product_category_id, product_description, product_price) 
VALUES ('Sushi Platter', 3, 'Assorted sushi rolls and sashimi, including tuna, salmon and yellowtail.', 24.99);

INSERT INTO product(product_name, product_category_id, product_description, product_price) 
VALUES ('Pho Bo', 4, 'Vietnamese beef noodle soup, served with rice noodles and a variety of herbs.', 10.99);

INSERT INTO product(product_name, product_category_id, product_description, product_price) 
VALUES ('Falafel Wrap', 5, 'A wrap filled with falafel balls, tahini sauce, lettuce, and tomato.', 8.99);
INSERT INTO `orders`(user_id, status, product_order_id) 
VALUES (1, 'active', 1);

INSERT INTO `orders`(user_id, status, product_order_id) 
VALUES (1, 'active', 2);

INSERT INTO `orders`(user_id, status, product_order_id) 
VALUES (1, 'old', 3);

INSERT INTO `orders`(user_id, status, product_order_id) 
VALUES (1, 'old', 4);

INSERT INTO `orders`(user_id, status, product_order_id) 
VALUES (1, 'active', 5);

INSERT INTO `product_order` (orders_id, product_id) 
VALUES (2, 3);

INSERT INTO `product_order` (orders_id, product_id) 
VALUES (1, 8);

INSERT INTO `product_order` (orders_id, product_id) 
VALUES (2, 4);

INSERT INTO `product_order` (orders_id, product_id) 
VALUES (3, 4);

INSERT INTO `product_order` (orders_id, product_id) 
VALUES (4, 5);
