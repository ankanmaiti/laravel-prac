INSERT INTO job_listings
(title, salary)
VALUES
('doctor', '70000'),
('professor', '10000')
;

SELECT *
FROM job_listings;

DELETE FROM job_listings
WHERE id IN (1, 2, 3, 4, 5);

SELECT *
FROM users;

SELECT *
FROM employers;
