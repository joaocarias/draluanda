use draluanda;

create table tipo_usuarios (
	`id` int(11) NOT NULL AUTO_INCREMENT,
    `tipo_usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `descricao` varchar(255) COLLATE utf8mb4_unicode_ci default NULL,
    `created_at` timestamp NULL DEFAULT NULL,
	`updated_at` timestamp NULL DEFAULT NULL,    
    `deleted_at` timestamp NULL DEFAULT NULL,
     PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

select * from users;

alter table users add column `deleted_at` timestamp NULL DEFAULT NULL;

insert into tipo_usuarios (tipo_usuario, descricao)
values ('default', 'Usuário Padrão do Sistema');

alter table users add column `id_tipo_usuario` int(11) DEFAULT 1;

ALTER TABLE `users` ADD CONSTRAINT `fk_tipo_usuarios` FOREIGN KEY (`id_tipo_usuario`) references tipo_usuarios (`id`);

select * from tipo_usuarios;



