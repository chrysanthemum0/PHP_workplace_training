<!-- 복습 문제 64p ~ 65p -->

#1
SELECT * FROM product
WHERE cost >= 20000;

#2
SELECT cust_id, cust_name
FROM customer
WHERE fax IS NULL;

#3
SELECT sales_no, psales_no, prod_id, price
FROM sales
WHERE psales_no BETWEEN 110 AND 119
ORDER BY price DESC;

#4
SELECT prod_id AS ID, prod_name AS 名前, cost * discount AS 割引価格
FROM product
WHERE prod_id IN(102, 104, 106)
ORDER BY cost * discount DESC;

#5
SELECT cust_id, cust_address, delivery_date
FROM packedsales
WHERE delivery_date BETWEEN '1996-01-01' AND '1996-12-31'
AND cust_address LIKE '%渋谷区%';

#6
SELECT cust_id AS ID, cust_name AS NAME , tel AS TEL
FROM customer
WHERE tel NOT RLIKE '^0(3|6)';


###
<!-- 열함수, 집계함수 / 그룹화 --> 67p - 69p

COUNT(*) 전체 열의 갯수 반환 
COUNT(DISTINCT 열명) DISTINCT는 중복 삭제함 

MIN() 지정 열 최소값 반환  
MAX() 지정 열 최대값 반환
AVG() 지정 열 평균값 반환
SUM() 지정 열 합계값 반환 

예문1. 
SELECT count(*), SUM(sal), AVG(sal), MIN(sal), MAX(sal)
FROM employee;

예문2.
SELECT count(*), sum(sal), avg(sal),min(sal), max(sal)
FROM employee WHERE dept_id = 30;

예문3.
SELECT count(*) - count(comm) FROM employee;
=
SELECT count(*)
FROM employee WHERE comm IS NULL;

예문4.
//담당자 테이플에서 dept_id의 종류가 몇개 있는지 중복 없이 알려주세요. 
SELECT count(DISTINCT dept_id)
FROM employee;


예문5.
SELECT FORMAT(avg(nullif(coalesce(next, current), 0)), 3) AS AVG
FROM nextsalary;


###
<!--그룹화 --> 71p - 72p
그룹화에는 GROUP BY, HAVING 문이 있음 
GROUP BY - 그룹의 키 
HAVING - 그룹의 선택 조건

예문1. --> 여기서 왜 ORDER BY가 필요한거??
SELECT dept_id, count(*), sum(sal), avg(sal), min(sal), max(sal)
FROM employee
GROUP BY dept_id
ORDER BY dept_id;

예문2.
SELECT gender, count(*)
FROM employee
GROUP BY gender
ORDER BY gender;

예문3.
SELECT dept_id AS ID, gender AS GENDER, count(*) AS NO, avg(sal) AS AVG
FROM employee
GROUP BY dept_id, gender
ORDER BY dept_id, gender;

예문4.
SELECT dept_id, gender, count(*), avg(sal)
FROM employee
GROUP BY dept_id, gender
ORDER BY gender, dept_id;

예문5.
SELECT dept_id, sum(sal), avg(sal), min(sal), max(sal)
FROM employee
GROUP BY dept_id
HAVING sum(sal) <= 5000
ORDER BY dept_id;

예문6.
SELECT dept_id, sum(sal), avg(sal), min(sal), max(sal)
FROM employee
WHERE gender = 1
GROUP BY dept_id
HAVING sum(sal) <= 5000
ORDER BY dept_id;


###
<!- DISTINCT --> 71p - 72p
특정열의 값이 중복되어있는 첫 행의 값을 가져옴

예문1.
SELECT DISTINCT dept_id
FROM employee;


###
<!--그룹화 연습문제 --> 75p - 79p
#1
SELECT sum(cost), avg(cost), min(cost), max(cost)
FROM product;

#2
SELECT count(*), count(discount), count(DISTINCT discount), 
sum(discount), avg(discount), min(discount), max(discount)
FROM product;

#3
SELECT discount, count(discount), sum(discount),
avg(discount), min(discount), max(discount)
FROM product
GROUP BY discount
ORDER BY discount;

#4 x -- 그룹화 한 후 HAVING
SELECT discount, count(discount), sum(discount),
avg(discount), min(discount), max(discount)
FROM product
GROUP BY discount
HAVING count(discount) >= 5
ORDER BY discount;


#5
SELECT discount, count(discount), sum(discount),
avg(discount), min(discount), max(discount)
FROM product
WHERE cost >= 15000
GROUP BY discount
ORDER BY discount;


#6 
SELECT emp_id, avg(total)
FROM packedsales
GROUP BY emp_id
ORDER BY emp_id;


#7 
SELECT psales_date, sum(total)
FROM packedsales
GROUP BY psales_date
ORDER BY sum(total) DESC LIMIT 5;

#8
SELECT DISTINCT emp_id
FROM packedsales;


### *중요! -> 능숙하게 다루게 되면 엄청 편해짐 !
<!--표(테이블) 결합 -->
테이플이 2개 이상 있었을 때 결합하여 필요한 정보를 뽑아내는 것이 가능.

- 내부결합
- 외부결합
  *좌외부결합, 우외부결합
- CROSS JOIN
- UNION

#1. 내부결합 
결합 연산 중 가장 많이 이용되는 조합이다. 내부 결합에서는 사용할 테이블 안에 모두 존재하는 필드가 필요


예문1. 
SELECT e.emp_id, e.emp_name, d.dept_id, d.dept_name
FROM employee e JOIN department d ON e.dept_id = d.dept_id;

예문2. 
SELECT d.dept_id, d.dept_name, e.emp_id, e.emp_name
FROM department d JOIN employee e ON d.mgr_id = e.emp_id;

예문3. 자기결합
SELECT d.dept_id, d.dept_id, d2.adept_id, d2.dept_name
FROM department d JOIN department d2 ON d.adept_id = d2.dept_id;

예문4. x 85p
SELECT e.emp_id, e.emp_name, d.dept_id, d.dept_name, d.mgr_id, e2.emp_name
FROM employee e JOIN department d ON d e.dept_id = d.dept_id
JOIN employee e2 ON d.mgr_id = e2.emp_id;

예문5.
SELECT DISTINCT e.emp_id, e.emp_name, p.prod_id, p.prod_name, 
c.cust_id, c.cust_name
FROM employee e JOIN packedsales ps ON e.emp_id = ps.emp_id
JOIN customer c ON ps.cust_id = c.cust_id
JOIN sales s ON ps.psales_no = s.psales_no
JOIN product p ON s.prod_id = p.prod_id;

예문6. 결합과 테이블
SELECT d.dept_id, d.dept_name, count(*), sum(e.sal),
avg(e.sal), min(e.sal), max(e.sal)
FROM employee e JOIN department d ON e.dept_id = d.dept_id
GROUP BY d.dept_id, d.dept_name
ORDER BY d.dept_id;

예문7. UNSING(dept_id) === e.dept_id = d.dept_id
SELECT e.emp_id, emp_name, d.dept_id, dept_name
FROM employee e JOIN department d USING(dept_id);

예문8. 자연결합 / 결합 테이블 중 열명, 타입도 같으면 모든 결합을 할 시 네추럴 결합 사용
SELECT e.emp_id, e.emp_name, d.dept_id, d.dept_name
FROM employee e NATURAL JOIN department d;

예문9. 크로스 결합 / 모든 것 결합할 떄 사용함
SELECT * FROM employee CROSS JOIN department;


#1-1 내부결합의 구버전 시타 방식..?
현재는 많이 안씀, 과거에는 많이썻기에 좀 낡은 데이터 처리할 때 필요할 수 있음
^JOIN 형식
FROM 표 A JOIN 표 ON A.fk = B.fk
WHERE 조건선택

^SQL92 형식
FROM 표 A, 표 BETWEEN
WHERE A.fk = B.fk
AND 조건선택

예문1.
SELECT e.emp_id, e.emp_name, d.dept_id, d.dept_name
FROM employee e, department d
WHERE e.dept_id = d.dept_id;


#2 외부결합
어느 한 쪽에만 존재하는 데이터행을 어떻게 다룰지를 변경할 수 있는 결합 방법이다.
특정 테이블에만 데이터를 새로 추가했을 때, 
다른 테이블에는 해당 데이터가 존재하지 않으므로 내부결합 결과에서는 해당 데이터가 제외된다.


LEFT JOIN이 무엇이었는지 되짚어보는 것부터 시작해보죠.
혹시 SQL의 조인 중에서 INNER JOIN을 기억하시나요? INNER JOIN은 조인하는 두 테이블에 공통으로 존재하는 값만 반환합니다.
반면에 LEFT JOIN의 경우, 왼쪽 테이블에서는 모든 값을 오른쪽 테이블에서는 왼쪽 테이블과 일치되는 값만 반환해줍니다.
그렇다면 어떠한 값이 왼쪽 테이블에는 존재하지만 오른쪽 테이블에는 존재하지 않는다면 두 테이블을 LEFT JOIN 한 결과는 어떠할까요?
LEFT JOIN을 하는 이상 왼쪽 테이블이 주인공이기 때문에 왼쪽 테이블에서 가져온 행의 값들은 빠짐없이 전부다 반환될 것이지만, 
오른쪽 테이블에서 가져오는 행의 값들은 존재하지 않으므로 NULL 값으로 반환됩니다. 그렇다면,
오른쪽 테이블에 있는 값이 왼쪽 테이블에는 존재하지 않는다면 두 테이블을 LEFT JOIN 한 결과는 어떠할까요?
결과 테이블에는 해당 값이 등장조차 하지 않을 것입니다. 왜냐, 주인공은 왼쪽 테이블이니까요.


예문1.
SELECT e.emp_id, e.emp_name, d.dept_id, d.dept_name
FROM employee e LEFT JOIN department d 
ON e.dept_id = d.dept_id;

예문2.
SELECT e.emp_id, e.emp_name, d.dept_id, d.dept_name
FROM employee e RIGHT JOIN department d 
ON e.dept_id = d.dept_id;

예문3. 응용
SELECT e.emp_id, e.emp_name, d.dept_id, d.dept_name,
d.mgr_id, e2.emp_name
FROM employee e LEFT JOIN department d ON e.dept_id = d.dept_id
LEFT JOIN employee e2 ON d.mgr_id = e2.emp_id;


#3 UNION
SQL UNION 연산자는 두 개 이상의 SELECT 문의 결과를 결합하여 하나의 결과 집합으로 나타내는 데 사용됩니다. 
이 연산자는 집합 간의 중복된 행을 제거하여 결과를 반환합니다. UNION 연산자는 SQL 질의의 유용한 기능 중 하나이며, 
데이터베이스에서 데이터를 분석하거나 리포팅할 때 특히 유용합니다.

예문1.
SELECT 'customer' AS 'table', count(*) FROM customer
UNION
SELECT 'employee', count(*) FROM employee
UNION
SELECT 'department', count(*) FROM department
UNION 
SELECT 'product', count(*) FROM product
UNION
SELECT 'packedsales', count(*) FROM packedsales
UNION
SELECT 'sales', count(*) FROM sales;


<!--테이블 결합 실습 문제 --> 96p - 100p
#1
SELECT cust_name, cust_address, delivery_date
FROM packedsales ps JOIN customer c 
ON ps.cust_id = c.cust_id
WHERE psales_no = 3;

#2 
SELECT prod_name, quantity * price AS amount
FROM sales s JOIN product p
ON s.prod_id = p.prod_id
WHERE quantity >= 3;

#3
SELECT psales_no, psales_date, total,
prod_id, quantity, price
FROM packedsales ps JOIN sales s
ON s.psales_no = ps.psales_no
JOIN customer c ON ps.cust_id =  c.cust_id

#4 x
SELECT e.emp_id, e.emp_name, avg(ps.total) AS avg
FROM packedsales ps JOIN employee e
ON ps.emp_id = e.emp_id
GROUP BY emp_id, emp_name
ORDER BY e.emp_id;

#5 x
SELECT p.prod_id, p.prod_name, sum(s.quantity), sum(s.price)
FROM sales s JOIN product p
ON s.prod_id = p.prod_id 
GROUP BY p.prod_id, p.prod_name
HAVING sum(s.price) >= 500000
ORDER BY p.prod_id;

#6

#7

#8

#9


### 데이터 조작 
<!- 행의 삽입 INSERT문 -->
인설트문은 행*데이터를 삽입한다. 

일반형식 
INSERT INTO 어떤 테이블에 삽입할 것인가 
VALUE 어떤 값을 삽입할 것인가

INSERT INTO 어떤 테이플에 삽입할 것인가
SELECT 어떤 데이블로부터 값을 삽입할 것인가

SHOW columns FROM employee; // 타입 혹은 데이블 정보확인

예문1.
INSERT INTO employee
VALUES(20, 40, '山田　花子', '1980-01--02', CURRENT_DATE,
2, 4000, NULL);

UPDATE employee SET emp_name = '山田 花子'
WHERE = '山田　花子';

SELECT * FROM employee;
SELECT * FROM department;

예문2.
INSERT INTO employee(emp_id, emp_name)
VALUES(21, '渡辺 健一');

예문3.
INSERT INTO department(dept_id, dept_name, loc, mgr_id, adept_id)
SELECT dept_id + 5, CONCAT('第2', dept_name), loc, mgr_id, dept_id
FROM department;

실습1.
INSERT INTO employee
VALUES(100, 10, 'KIM JINHONG', '1998-10-01', CURRENT_DATE,
1, 4000, NULL);

실습2.
INSERT INTO customer(cust_id, cust_name)
SELECT emp_id + 1000, emp_name
FROM employee;

SELECT * FROM customer;

### 데이터 조작 
<!- 데이터 갱신 UPDATE문 -->
일반형식
UPDATE 테이블이름
SET  열명 = 식
WHERE 조건 선택 

예문1.
UPDATE employee SET sal = sal * 1.2;
SELECT * FROM employee ORDER BY sal; 

예문2. 
UPDATE employee
SET sal = sal - 1000 
WHERE sal >= 5000;

SELECT emp_id, emp_name, sal FROM employee;

예문3. 
UPDATE employee,
(SELECT AVG(sal) AS a FROM employee) AS tmp
SET employee.sal = tmp.a
WHERE employee.dept_id = 40;

SELECT * FROM employee 
WHERE dept_id = 40;

예문4.
UPDATE employee SET birthday = NULL;

SELECT * FROM employee;

예문5. ---> 조심해라.... 아 다 바꿔버림ㅠㅠㅠㅠㅠ ㅆ
UPDATE employee 
SET sal = 4000, dept_id = 50;
WHERE dept_id = 40;

SELECT * FROM employee;

실습1.
UPDATE department
SET loc = '神奈川県川崎市'
WHERE dept_id BETWEEN 20 AND 30;

SELECT * FROM department ORDER BY dept_id;


실습2.
UPDATE department, 
SET 


<!- 데이터 삭제 DELETE문 -->
DELETE FROM employee
WHERE sal >= 5000;

DELETE FROM employee;

SELECT * FROM employee;

실습1.
DELETE FROM product
WHERE discount IS NULL;
SELECT * FROM product ORDER BY prod_id;

DELETE FROM product;
SELECT * FROM product;


###
<!- DB 작성 -->
SHOW DATABASES -> 지금 가지고 있는 DB 보여주세요 

일반형식
CREATE {DATABASE | SCHEMA} [IF NOT EXISTS] DB 명

ALTER DATABASE --> 
문자코드에 맞춰 사용하고 싶을때 
요즘은 UTF8에 맞춰저 있기에 그닥 사용할 일은 없을듯 하다. 

예문1.
CREATE DATABASE testing;
SHOW DATABASES;

예문2.
DROP DATABASE testing;
SHOW DATABASES;

실습1.
CREATE DATABASE restaurant;
SHOW DATABASES;

DROP DATABASE restaurant;
SHOW DATABASES;


###
<!- TABLE 작성 -->
RDB의 기본적인 요소로 데이터를 넣는 표 

일반형식
CREATE TABLE 테이블 명
열명1 데이터타입 [열제약] [열제약]
[, 열명2 데이터타입 [열제약] [열제약]]

일반형식
CREATE TABLE 테이블 명 AS SELECT 문 
모든 제약조건은 copy가 안됨. 데이터만 copy됨.

제약조건
1.NOT NULL * 데이터 확인 작업 중 주소 등 반드시 필요한 정보는 NULL이면 안되기 때문
2.유일성 * ID, mailaddress 고유정보 등 중복되는 것들이 있으면 안되기 떄문  
3.PRIMARY KEY * 동일 이름, 주소 등이 있을 때 구분을 주키로 할 수 있음 
4.검사 
5.외부키 * 열의 값이 다른 열의 값과 같아야 할 때 외부키로 연관 지을 수 있음 

테이블의 설계란 굉장히 중요한 작업 중 하나임. 
데이터 타입 등 제약조건, 관계성 등등을 고려해야 하기 때문에 신중하게 해야됨.
