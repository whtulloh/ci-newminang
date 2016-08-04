CREATE DATABASE newminang
  DEFAULT CHARACTER SET utf8;

CREATE TABLE peserta (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	nama_suaimi VARCHAR(255),
	nama_istri VARCHAR(255),
	jml_anak VARCHAR(255),
	alamat VARCHAR(255),
	no_telp VARCHAR(255),
	bapak_suami VARCHAR(255),
	ibu_suami VARCHAR(255),
	bapak_istri VARCHAR(255),
	ibu_istri VARCHAR(255),
	jorong_suami VARCHAR(255),
	joring_istri VARCHAR(255),
	suku_suami VARCHAR(255),
	suku_istri VARCHAR(255),
	link_photo VARCHAR(255),
	reg_date TIMESTAMP
);

CREATE TABLE anak (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	id_peserta VARCHAR(255),
	nama_anak VARCHAR(255),
	reg_date TIMESTAMP
);

INSERT INTO `newminang`.`peserta` (`id_peserta`, `nama_suaimi`, `nama_istri`, `jml_anak`, `alamat`, `no_telp`, `bapak_suami`, `ibu_suami`, `bapak_istri`, `ibu_istri`, `jorong_suami`, `joring_istri`, `suku_suami`, `suku_istri`, `link_photo`, `reg_date`) VALUES (NULL, 'test', 'test', '3', 'test', '123124123412', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', CURRENT_TIMESTAMP);

INSERT INTO `newminang`.`anak` (`id_anak`, `id_peserta`, `nama_anak`, `reg_date`) VALUES (NULL, '1', 'test', CURRENT_TIMESTAMP);
