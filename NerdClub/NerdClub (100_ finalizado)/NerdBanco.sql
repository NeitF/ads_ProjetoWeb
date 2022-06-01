create database bdNerdClub;
use bdNerdClub;

create table tblCadastro(
id int(11) not null primary key auto_increment,
nome varchar(100) not null,
sobrenome varchar(100) not null,
email varchar (300) not null,
senha varchar (300) not null,
verisenha varchar (300) not null,
idade int(3) not null,
foto varchar(40)
);

create table tblAdmin(
adm_id int(11) not null primary key auto_increment,
adm_nome varchar(40) not null,
adm_sobrenome varchar(40) not null,
adm_email varchar (300) not null,
adm_senha varchar (300) not null,
adm_verisenha varchar (300) not null,
adm_idade int(3) not null,
adm_foto varchar(40) not null
);

create table tblLoja(
prod_id int(11) not null primary key auto_increment,
prod_fabricante varchar(100) not null,
prod_nome varchar(300) not null,
prod_qntd int(5) not null,
prod_descricao varchar(300) not null,
prod_preco double(10,2) not null, 
prod_foto varchar(40) not null
);

create table tblNoticias(
noti_id int(11) not null primary key auto_increment,
noti_titulo varchar(100) not null,
noti_assunto varchar(100) not null,
noti_foto varchar(40) not null
);

create table tblTorneios(
torneio_id int(11) not null primary key auto_increment,
torneio_nome varchar(200) not null,
torneio_descricao varchar(300) not null,
torneio_criador varchar(100) not null,
torneio_foto varchar(40) not null
);

select * from tblCadastro;
select * from tblAdmin;
select * from tblLoja;
select * from tblNoticias;	
select * from tblTorneios;	

insert into tblAdmin values (NULL, 'Neit', 'Silva', 'natefonseca', 'admin', 'admin', 16, 'saddas');

