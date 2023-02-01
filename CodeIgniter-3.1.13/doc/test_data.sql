use order_system;
INSERT INTO product_category (product_category_name, image) 
VALUES ('Italian', 'https://www.shutterstock.com/image-photo/italian-food-ingredients-spaghetti-bolognese-260nw-642298984.jpg');

INSERT INTO product_category (product_category_name, image) 
VALUES ('Pizza', 'https://thumbs.dreamstime.com/b/people-eating-various-pizzas-drinking-red-wine-wide-composition-family-friends-having-pizza-party-dinner-flat-lay-kinds-172195897.jpg');

INSERT INTO product_category (product_category_name, image) 
VALUES ('Japanese', 'https://cdn.tasteatlas.com/images/toplistarticles/8cc45833c34a4bc99d85375ecfde18f6.jpg');

INSERT INTO product_category (product_category_name, image)
VALUES ('Vietnamese', 'https://www.takeaway.com/foodwiki/uploads/sites/11/2019/08/vietnamese_cuisine_4-1440x600.jpg');

INSERT INTO product_category (product_category_name, image) 
VALUES ('Mediterranean', 'https://www.hopkinsmedicine.org/-/media/images/health/3_-wellness/gut-health/mediterraneandietfoods-teaser.ashx' );

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
VALUES (2, 1);

INSERT INTO `product_order` (orders_id, product_id) 
VALUES (4, 2);

INSERT INTO `product_order` (orders_id, product_id) 
VALUES (2, 4);

INSERT INTO `product_order` (orders_id, product_id) 
VALUES (3, 1);

INSERT INTO `product_order` (orders_id, product_id) 
VALUES (5, 2);

INSERT INTO product(product_name, product_category_id, product_description, product_price)
VALUES
("Pho Bo", 4, "Traditionelles vietnamesisches Rindfleisch-Nudel-Suppe-Gericht", 10.99),
("Banh Mi", 4, "Beliebtes vietnamesisches Sandwich mit gebratenem Fleisch, Gurken, Koriander und Soße", 7.99),
("Goi Cuon", 4, "Frische vietnamesische Springrollen mit Garnelen und frischem Gemüse", 5.99),
("Com Tam", 4, "Vietnamesisches Reisgericht mit gebratenem Schweinefleisch und Ei", 8.99),
("Che Ba Mau", 4, "Vietnamesischer Dessert-Mix aus Süßkartoffel, Bohnen und Kürbis", 4.99);

INSERT INTO product(product_name, product_category_id, product_description, product_price)
VALUES
("Spaghetti Carbonara", 5, "Klassisches italienisches Nudelgericht mit Speck, Ei und Pecorino-Käse", 12.99),
("Moussaka", 5, "Traditionelles griechisches Auflaufgericht mit Auberginen und Hackfleisch", 15.99),
("Paella", 5, "Berühmtes spanisches Reisgericht mit Meeresfrüchten und Huhn", 18.99),
("Falafel", 5, "Arabisches Streetfood-Gericht aus Kichererbsenbällchen, serviert mit Tahin-Sauce und Salat", 8.99),
("Tzatziki", 5, "Griechischer Joghurt-Dip mit Gurken und Knoblauch, serviert als Vorspeise oder Beilage", 4.99);

INSERT INTO product(product_name, product_category_id, product_description, product_price)
VALUES
("Lasagne Bolognese", 1, "Hackfleischsauce, Béchamel, Mozzarella, Parmesan", 14.99),
("Caprese-Salat", 1, "Mozzarella, Tomaten, Basilikum, Olivenöl, Balsamico", 10.99),
("Gnocchi al Pesto", 1, "Gnocchi, Pesto, Pinienkerne, Parmesan", 13.99),
("Risotto Funghi", 1, "Risotto, Champignons, Parmesan, Trüffelöl", 15.99),
("Ossobuco alla Milanese", 1, "Kalbsfleisch, Tomaten, Zwiebeln, Karotten, Rinderbrühe", 18.99);


INSERT INTO product(product_name, product_category_id, product_description, product_price)
VALUES
("Pizza Pepperoni", 2, "Tomatensauce, Mozzarella, Pepperoni, Paprika, Zwiebeln", 12.99),
("Pizza Hawaii", 2, "Tomatensauce, Mozzarella, Schinken, Ananas, Paprika", 13.99),
("Pizza Capricciosa", 2, "Tomatensauce, Mozzarella, Champignons, Artischocken, Oliven, Schinken", 14.99),
("Pizza Quattro Formaggi", 2, "Tomatensauce, Mozzarella, Gorgonzola, Parmesan, Pecorino", 15.99),
("Pizza Diavola", 2, "Tomatensauce, Mozzarella, Peperoni, Peperoncini, Zwiebeln", 13.99);

INSERT INTO product(product_name, product_category_id, product_description, product_price)
VALUES
("Sushi-Platte", 3, "Assortierte Sushi-Rollen, Sojasauce, Wasabi, Ingwer", 18.99),
("Ramen", 3, "Nudelsuppe, Schweinefleisch, Ei, Frühlingszwiebeln, Pilze", 12.99),
("Tataki", 3, "Seared Rindfleisch, Zwiebeln, Ingwer, Sojasauce, Sesam", 15.99),
("Tempura", 3, "Gebackene Garnelen und Gemüse, Sojasauce, Ingwer", 14.99),
("Unagi Don", 3, "Gegrillter Aal, Reis, Ei, Zwiebeln, Sojasauce", 16.99);

