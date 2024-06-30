CREATE DATABASE IF NOT EXISTS pp_uni;

use pp_uni;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    account_type ENUM('jobseeker', 'Recuiter') NOT NULL DEFAULT 'jobseeker',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS jobs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    recuiter_id INT NOT NULL,
    job_title VARCHAR(255) NOT NULL,
    position VARCHAR(255) NOT NULL,
    Experience_level VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    Employee_type varchar(255) NOT NULL,
    salary int NOT NULL,
    salary_range VARCHAR(255) NOT NULL,
    salary_type ENUM('Fixed', 'Range') NOT NULL,
    FOREIGN KEY (recuiter_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    job_id INT NOT NULL,
    user_id INT NOT NULL,
    comment TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (job_id) REFERENCES jobs(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    skill_name VARCHAR(255) NOT NULL,
    UNIQUE KEY skill_name_unique (skill_name)  -- Ensure skill_name is unique
);

CREATE TABLE IF NOT EXISTS job_skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    job_id INT NOT NULL,
    skill_id INT NOT NULL,
    FOREIGN KEY (job_id) REFERENCES jobs(id),
    FOREIGN KEY (skill_id) REFERENCES skills(id),
    UNIQUE KEY job_skill_unique (job_id, skill_id)  -- Ensure each (job_id, skill_id) pair is unique
);

CREATE TABLE IF NOT EXISTS applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    job_id INT NOT NULL,
    job_seeker_id INT NOT NULL,
    resume VARCHAR(255) NOT NULL,
    cover_letter TEXT NOT NULL,
    status ENUM('Pending', 'Rejected', 'Approved') NOT NULL DEFAULT 'Pending',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,

    UNIQUE KEY job_id_job_seeker_id_unique (job_id, job_seeker_id),  -- Ensure each (job_id, job_seeker_id) pair is unique
    FOREIGN KEY (job_id) REFERENCES jobs(id),
    FOREIGN KEY (job_seeker_id) REFERENCES users(id)
);


