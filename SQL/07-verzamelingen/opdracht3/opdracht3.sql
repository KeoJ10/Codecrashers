SELECT characters.name, characters.class, characters.age, locations.name as location_name FROM characters JOIN locations ON locations.name = locations.name;

SELECT characters.name AS charName, characters.class, characters.race, characters.age, locations.name AS location FROM characters LEFT JOIN locations ON characters.id = locations.id ORDER BY `charName` ASC;

SELECT c.name AS charName, c.class, c.race, c.age, c.origins, l.name AS location FROM characters AS c LEFT JOIN locations AS l ON c.id = l.id ORDER BY `location` DESC

SELECT c.name, c.class, c.age, l.name FROM characters AS c LEFT JOIN locations AS l ON l.id = l.id UNION ALL SELECT c.name, c.class, c.age, l.name FROM characters AS c LEFT JOIN locations AS l ON l.id = l.id WHERE c.name IS NULL;