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


</pre>
<?php
$array = [ 
	'101'=>'ram',
	'102' =>'shyam',
	'103'=> 'mohan',
	'104'=>'sohan'
];

foreach($array as $k=>$v){
	echo '<br>'.$k.'='.$v;
}



?>

