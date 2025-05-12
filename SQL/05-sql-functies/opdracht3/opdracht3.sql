SELECT ROUND(AVG(rating), 2) AS rating, COUNT(artist) AS artist_count FROM `raw` LIMIT 0, 25;
SELECT artist, genre, ROUND(AVG(rating), 2) AS avg_rating FROM `raw` GROUP BY genre ORDER BY avg_rating DESC;
SELECT album, genre, artist, count(rating) as avg_rating FROM `raw` WHERE artist = 'The Beatles';
