#접속 방법 및 경로
$ cd ../../mysql/bin && ./mysql -u root -c DB이름

#1
SELECT * FROM product
WHERE cost >= 20000;

#2
SELECT cust_id, cust_name FROM customer
WHERE fax IS NULL;


#3
SELECT sales_no, psales_no, prod_id, price FROM sales
WHERE psales_no BETWEEN 110 AND 119 ORDER BY price DESC;

#4
SELECT prod_id, prod_name, (cost * discount) FROM product
WHERE prod_id IN (102, 104, 106)
ORDER BY (cost * discount) DESC;

#5
SELECT cust_id, cust_address, delivery_date 
FROM packedsales
WHERE delivery_date BETWEEN '1996-01-01' AND '1996-12-31'
AND cust_address LIKE '%渋谷区%';

#6
