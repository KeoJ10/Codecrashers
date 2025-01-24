SELECT id, genre, artist, album, track FROM `raw` WHERE extension = 'ape';
SELECT id, genre, artist, album, track FROM `raw` WHERE artist = 'Harry Potter';
SELECT genre, artist, album, track FROM `raw` WHERE NOT artist = 'Harry Potter' AND NOT artist = 'Jack Vance';
SELECT id, genre, artist, album FROM `raw` WHERE genre = 'pop' and id >= 24263;
SELECT id, genre, artist, album, track FROM `raw` WHERE genre = 'Audiobooks' OR genre = 'Hoorspelen';

SELECT id, genre, artist, album, track FROM `raw` WHERE artist LIKE '%Potter';

SELECT id, genre, artist, album, track FROM `raw` WHERE artist NOT LIKE '%Potter' AND genre IN ('Audiobooks', 'luisterboeken');