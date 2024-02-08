<pre>
CREATE DATABASE 'php_training'

CREATE TABLE table_name(
	id int,
	name varchar(255),
	email varchar(100),
	address text 
);


insert into `table_name` (column1,column2,column3) values (val1,val2,val3);

insert into users (name,contact,address,email) VALUES ('raj','7878787878','Indore MP','raj@gmail.com')


INSERT INTO users (`name`,`email`,`contact`,`address`) VALUES ('ram','ram@gmail.com','8989898989','Jabalpur MP');


select * from table_name;
select id,name,email from users;

select * from users ORDER BY `id` DESC;
select * from users ORDER BY `name` ASC;

select * from users limit 2; // first 2 rows
select * from users ORDER BY `id` DESC LIMIT 2; // Last 2 record
select * from users ORDER BY `id` DESC LIMIT 1,2; // Second and third last result


<h2>Insert multiple data in one query</h2>
INSERT INTO assignments (`title`,`image`,`user_id`) VALUES 
('responsive design task','imag2.jpg', 1),
('responsive form task','imag2.jpg', 2),
('html design task','imag2.jpg', 3),
('bootstrap design task','imag2.jpg', 4),
('jquery design task','imag2.jpg', 3);


<h2>Where</h2>
SELECT * FROM assignments WHERE `user_id`=2;
SELECT * FROM assignments WHERE `user_id`=2 OR `user_id`=1;
SELECT * FROM assignments WHERE `user_id`=1 AND `id`=1;
SELECT * FROM assignments WHERE `user_id` != 1;
SELECT * FROM `users` WHERE `name` = 'raj';


SELECT * FROM `users` WHERE `name` LIKE 's%';
SELECT * FROM `users` WHERE `name` LIKE '%s%';
SELECT * FROM `users` WHERE `name` LIKE 'ra%';

<h2>Update Record</h2>
UPDATE users
SET `name`='Ram',`contact`='99999999'
WHERE id=2


<h2>Delete data</h2>
DELETE FROM assignments WHERE `id` = 5;

<h2>JOIN</h2>
- Left Join
- Right Join
- Inner Join
- Outer Join



</pre>

