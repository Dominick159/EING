use eing;
drop table tbusuarios;
create table tbusuarios(
id int primary key auto_increment,
nombres varchar(50),
apellido varchar(50),
id_sexo int,
fec_nac date, 
dni varchar(8) not null,
celular varchar(9),
correo varchar(100),
password varchar(20) default 'eing2021',
cargo varchar(100),
titulo varchar(100),
url_facebook varchar(250) default 'https://www.facebook.com/',
url_instagram varchar(250) default 'https://www.instagram.com/',
url_linkedin varchar(250) default 'https://www.linkedin.com/feed/',
url_img varchar(250) default 'sin_imagen.jpg'
);
alter table tbusuarios  auto_increment=1000;
ALTER TABLE tbusuarios ADD CONSTRAINT fk_usu_sexo FOREIGN KEY (id_sexo) REFERENCES tbsexo (id) ON DELETE CASCADE ON UPDATE CASCADE;

select * from tbusuarios;
select * from tbsexo;

insert into tbusuarios(nombres,apellido,id_sexo,fec_nac,dni,celular,correo,cargo,titulo,url_facebook,url_instagram,url_linkedin,url_img) values
('Diana Melissa','LLique Guzmán',2,null,'40315538','955194374','innovando.aduanas@gmail.com','Gerente General','Licenciada Administración','https://www.facebook.com/dianamelissa.guzman.9/','https://www.instagram.com/accounts/password/change/','https://www.linkedin.com/in/diana-llique-98a51b54/','diana.png'),
('José','Rodríguez Ruiz',1,'1995/01/03','77162002','912028278','rodriguezrjose95@gmail.com','Jefe de Sistemas','Developer and Designer','https://www.facebook.com/josedrake.95','https://www.instagram.com/josedrake95/','https://www.linkedin.com/in/jose-ammon-alfonso-rodriguez-ruiz-113105179/','jose.jpeg'),
('Marduk Kevin','Valderrama Loroña',2,null,'40315538','986656664','mardukvalderrama18@outlook.com','Apoderado','Lic. Fuerza Aerea del Perú','https://www.facebook.com/mardukvalderrama/','https://www.instagram.com/marduk_valderrama/','https://www.linkedin.com/in/marduk-kevin-valderrama-loro%C3%B1a-154a40203/','marduk.jpeg'),
('Hitler','Justo Alvarez',1,null,'73376853','940809759','hitlerjustoalvarez@gmail.com','Jefe Administrador de Base de Datos','Computación e Informática','https://www.facebook.com/justo.alvarez.hit/','https://www.instagram.com/hitlerjustoalvarez/','https://www.linkedin.com/in/hitler-justo-alvarez-3bbb9420a/','hitler.jpeg'),
('Dalila','Huaman Angaspilco',2,null,'75821745','917434903','dhuamanangaspilco@gmail.com','Jefe de Especialidad y Marketing','Industrias Alimentarias ','http://facebook.com/dalila.huamanangaspilco/','https://www.instagram.com/dalila_0198/',null,'dalila.jpg'),
('Yessica Leidy Marilyn','Arroyo Huaycani',2,null,'73146587','921035420','yessicaah.9816@gmail.com','Análisis de Sistemas','Técnica de Computacion e Informatica','https://www.facebook.com/yesicaleydi.arroyohuaycani/','https://www.instagram.com/yessicaarroyohuaycani/','https://www.linkedin.com/in/yessica-leidy-arroyo-huaycani-1a149b211/','yessica.jpg'),
('Carlos Enrique','Orozco Rivera',1,null,'17545828','972752033','ceor.9595@gmail.com','Diseño Grafico y Producción Multimedia ','Computación e Informática','https://web.facebook.com/EnriqueRivera95/','https://www.instagram.com/carlos.enrique95/','https://www.linkedin.com/in/carlosenrique95/','carlos.jpg'),
('Juan Jose','Silva Nuñez',1,null,'71481132','932048981','imwhoamis@gmail.com','Jefe de Especialidad de Recursos','Tecnico en Mantenimiento de Maquinaria','https://www.facebook.com/js.whoami/','https://www.instagram.com/whoami.cc/','https://www.linkedin.com/in/juan-silva-b673b9134/','juanjose.jpg'),
('Xibelli Xiomara ','Valderrama Loroña',2,'1993/11/07','48021207','955671849','xi937xi@gmail.com','Jefe de Gestion de Talento Humano','Administraciòn en Gestion de Talento Humano','https://www.facebook.com/xibelli','','www.linkedin.com/in/xibellivalderramaloroña2021','sin_imagen.jpg');








