create database sebo;
use sebo;
/*OFICIAL*/
create table admin(
	id int unsigned auto_increment not null,
    login varchar(30) not null,
    senha varchar(30) not null,
    primary key(id)
);
insert into admin values(null,'‡­„“ß"õ°°pfn"v6ƒWÿß1Ç','è]þöÕý[ýÇ‹•&7”ç§0ÙÈ~¬½1k>ÅŽ');
delete from admin where id > '2';
select * from admin;

create table moderador(
	id int unsigned auto_increment not null,
    nome varchar(50) not null,
    email varchar(70) not null,
    facebook varchar(100) not null,
    whatsapp varchar(30) not null,
    linkedin varchar(100) not null,
    primary key(id)
);

select * from moderador;
delete from moderador where id = '1';

create table usuario(
	id int unsigned auto_increment not null,
    estado varchar(25) not null,
    primary key(id)
);

insert into usuario values(null,'SP'),
						  (null, 'SP'),
						  (null, 'SP'),
                          (null, 'SP'),
                          (null, 'SP'),
                          (null, 'SP'),
                          (null, 'SP'),
                          (null, 'SP'),
                          (null, 'SP'),
                          (null, 'RJ'),
                          (null, 'RJ'),
                          (null, 'MG'),
                          (null, 'MG'),
                          (null, 'MG'),
                          (null, 'MG'),
                          (null, 'MG'),
                          (null, 'AM'),
                          (null, 'RS'),
                          (null, 'ES'),
                          (null, 'ES'),
                          (null, 'ES');
                          
select * from usuario;
