CREATE DATABASE blog_pribadi;
 USE blog_pribadi;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password)
VALUES
  ('admin', 'admin123');