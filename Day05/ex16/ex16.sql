SELECT count(id_film) AS 'movies' FROM member_history WHERE date BETWEEN '2016/10/30' AND 2007/07/27 OR (EXTRACT(DAY FROM date)=24 and EXTRACT(MONTh FROM date)=12);
