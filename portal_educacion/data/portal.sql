SELECT * FROM portal_educacion.botones;
SELECT * FROM portal_educacion.categorias;
SELECT * FROM portal_educacion.sf_guard_user;
SELECT * FROM portal_educacion.sf_guard_permission;

-- volcado de datos para las categorias
INSERT INTO `categorias` (`id`, `cat_nombre`,`cat_posicion`) VALUES
(1, 'Aplicaciones Favoritas',1),
(2, 'Aplicaciones Disponibles',2);

-- volcado de datos para los botones
INSERT INTO `botones` (`id`, `btn_nombre`,`btn_link`,`btn_imagen`,`btn_bg`,`btn_activo`,`btn_cat_id`) VALUES
(1, 'ASH','http://www.clarin.com','glyphicon glyphicon-cloud','#fdd306',1,1),
(2, '@bue.edu.ar','http://www.clarin.com','glyphicon glyphicon-cloud','#fdd306',1,1),
(3, 'SIGAFWEB','http://www.clarin.com','glyphicon glyphicon-cloud','#fdd306',1,1),
(4, 'IDM Administrador','http://www.clarin.com','glyphicon glyphicon-cloud','#fdd306',1,1),
(5, 'IRM','http://www.clarin.com','glyphicon glyphicon-cloud','#fdd306',1,1),
(6, 'Sado Soporte','http://www.clarin.com','glyphicon glyphicon-cloud','#fdd306',1,2),
(7, 'Sade','http://www.clarin.com','glyphicon glyphicon-cloud','#fdd306',1,2);

-- volcado de datos para los usuarios
INSERT INTO `sf_guard_user` (`id`, `first_name`,`last_name`,`email_address`,`username`,`algorithm`,`salt`,`password`,`is_active`,`is_super_admin`,`last_login`,`created_at`,`updated_at`) VALUES
(1, 'cristian','veizaga','cristianveizaga11@gmail.com','leo','sha1','15b039a9ec2710ee3877e5cd19081393','0dd43f0d4383fecd22c2dd504a5b1ffe1edd74a3',1,0,'2017-10-30 11:58:20','2017-10-30 11:58:10','2017-10-30 11:58:20'),
(2, 'pedro','vasquez','pedro@gmail.com','pedro','sha1','671da17ae7d86dd8c9348dd23248f95b','08d9d247a9b0a82a566589fe845887ff7829e702',1,0,'2017-10-30 11:59:55','2017-10-30 11:59:15','2017-10-30 11:59:40'),
(3, 'marcos','lopes','marcos@gmail.com','marcos','sha1','75afb338d409c6d5e3940a4f64012235','1cdfad3f05c610cc90a72dbb9cb1fade2da1a8c3',1,0,'2017-11-06 10:11:22','2017-11-03 10:37:53','2017-11-06 10:11:22');

-- volcado de datos para los permisos
-- INSERT INTO `sf_guard_permission` (`id`, `name`,`description`,`per_cat_id`,`created_at`,`updated_at`) VALUES
-- (1,'admin','administrador del sistema',3,'2017-10-30 11:55:10','2017-10-30 11:58:20'),
-- (2, 'docente','acceso solo a los docentes',1,'2017-10-30 11:56:15','2017-10-30 11:50:40'),
-- (3, 'alumno','acceso solo a los alumnos',2,'2017-10-30 11:57:15','2017-10-30 11:54:40');

-- volcado de datos para los grupos
INSERT INTO `sf_guard_group` (`id`, `name`,`description`,`created_at`,`updated_at`) VALUES
(1,'admin','administrador del sistema','2017-10-30 11:55:10','2017-10-30 11:58:20'),
(2, 'docentes','acceso solo a los docentes','2017-10-30 11:56:15','2017-10-30 11:50:40'),
(3, 'alumnos','acceso solo a los alumnos','2017-10-30 11:57:15','2017-10-30 11:54:40');

-- volcado de datos para las noticias
INSERT INTO `noticias` (`id`, `not_nombre`,`not_link`,`not_imagen`,`not_activo`,`not_inicio_pub`,`not_fin_pub`) VALUES
(1, 'Charlamos con los vecinos sobre las obras de los ramales secundarios1','http://www.clarin.com','df5d1c966e8913e9886aa6e5294f51a0e4b1a21a.jpg',1,'2017-11-06 10:11:00','2017-12-20 10:11:00'),
(2, 'Charlamos con los vecinos sobre las obras de los ramales secundarios2','http://www.clarin.com','2163d23cc275c6c85e03519a96250c4875acdb2a.jpg',1,'2017-11-06 10:11:00','2017-12-16 10:11:00'),
(3, 'Charlamos con los vecinos sobre las obras de los ramales secundarios3','http://www.clarin.com','6fc6e37a5c26a7b680555abd777f995763391996.jpg',1,'2017-11-06 10:11:00','2017-12-30 10:11:00');

INSERT INTO `servicios` (`id`, `ser_icono`,`ser_link`,`ser_nombre`) VALUES
(1, 'fa fa-bicycle', 'http://www.google.com','Ecobici'),
(2, 'fa fa-comments', 'http://www.google.com', 'Mensajes'),
(3, 'fa fa-cog', 'http://www.google.com', 'Ajustes'),
(4, 'fa fa-question-circle', 'http://www.google.com', 'Ayuda'),
(5, 'fa fa-book', 'http://www.google.com', 'Biblioteca Digital');

