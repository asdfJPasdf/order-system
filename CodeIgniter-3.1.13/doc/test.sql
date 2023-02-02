SELECT product_order.product_id
FROM orders orders
LEFT JOIN product_order
ON orders.orders_id = product_order.orders_id
where orders.user_id = 1;
