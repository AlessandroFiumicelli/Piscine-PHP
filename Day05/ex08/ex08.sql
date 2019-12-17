SELECT last_name, first_name, CAST(`birthdate` AS date) AS birthdate FROM `db_alfiumic`.`user_card` WHERE EXTRACT(YEAR FROM `birthdate`) = '1989' ORDER BY last_name ASC;

