CREATE TABLE tasks
(
 id int AUTO_INCREMENT primary key,
 title varchar (100)not null,
 status char (10) not null CHECK(status IN ('complete','incomplete')),
 datetask date not null
 );

