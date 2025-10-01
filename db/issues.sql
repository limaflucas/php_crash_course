CREATE TABLE issues (
       id INT AUTO_INCREMENT PRIMARY KEY,
       title VARCHAR(255) NOT NULL,
       description TEXT,
       status VARCHAR(50) DEFAULT 'Open',
       project_id INT NOT NULL,
       reporter_id INT NOT NULL,
       created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

       FOREIGN KEY (project_id) REFERENCES projects(id),
       FOREIGN KEY (reporter_id) REFERENCES users(id)
);
