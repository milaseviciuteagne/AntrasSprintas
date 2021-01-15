CREATE DATABASE Sprint2DB;

USE Sprint2DB;

CREATE TABLE IF NOT EXISTS `employees` (
`eid` int(10) NOT NULL,
`pid` int(10) DEFAULT NULL,
`ename` VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS `projects` (
`pid` INT(10) NOT NULL,
`pname` VARCHAR(50) NOT NULL
);

INSERT INTO `projects` (`pid`, `pname`)
VALUES(1, 'PHP'),
(2,'JAVA'),(3, 'JavaScript'), (4, 'Python');

INSERT INTO `employees` (`eid`, `pid`, `ename`)
VALUES(1, 2, 'John'),
(2, 1, 'Lisa'),
(3, 1, 'Tom'), 
(4, 4, 'Lucas'), 
(5, 3, 'Agnessa'), 
(6, 3, 'David'),
(7, 1, 'Kate');


 
        
 