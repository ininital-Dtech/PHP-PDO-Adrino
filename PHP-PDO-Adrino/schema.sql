-- Scenario 1: Library Book Management System
CREATE DATABASE library;
USE library;

CREATE TABLE books (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  author VARCHAR(255),
  published_year YEAR,
  genre VARCHAR(100)
);

-- Scenario 2: Student Attendance Tracker
CREATE DATABASE school;
USE school;

CREATE TABLE IF attendance (
  id INT AUTO_INCREMENT PRIMARY KEY,
  student_name VARCHAR(255),
  date DATE,
  status ENUM('Present', 'Absent', 'Late')
);

-- Scenario 3: Movie Rental System
CREATE DATABASE video_store;
USE video_store;

CREATE TABLE movies (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  director VARCHAR(255),
  release_year YEAR,
  available BOOLEAN
);

-- Scenario 4: Employee Timelog System
CREATE DATABASE company_db;
USE company_db;

CREATE TABLE timelogs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  employee_name VARCHAR(255),
  log_date DATE,
  log_time TIME,
  type ENUM('IN', 'OUT')
);
