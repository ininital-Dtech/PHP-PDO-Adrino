# PHP-PDO-Adrino

## Developer Information
- **Name**: Jobert C. Adrino
- **Program**: BSCS
- **Course Code**: IT6314

## Project Overview
This repository contains four PHP applications utilizing PDO (PHP Data Objects) for database interactions. Each application demonstrates basic CRUD (Create, Read, Update, Delete) operations with MySQL databases.

## Applications

### 1. Library Book Management System
- **Database**: `library`
- **Table**: `books`
- **Fields**: `id`, `title`, `author`, `published_year`, `genre`

### 2. Student Attendance Tracker
- **Database**: `school`
- **Table**: `attendance`
- **Fields**: `id`, `student_name`, `date`, `status`

### 3. Movie Rental System
- **Database**: `video_store`
- **Table**: `movies`
- **Fields**: `id`, `title`, `director`, `release_year`, `available`

### 4. Employee Timelog System
- **Database**: `company_db`
- **Table**: `timelogs`
- **Fields**: `id`, `employee_name`, `log_date`, `log_time`, `type`

## Setup Instructions

1. Clone this repository to your local machine.
2. Import the `schema.sql` file into your MySQL database to create the necessary tables.
3. Configure the database connection settings in each PHP file (`$dsn`, `$username`, `$password`).
4. Access each PHP file via your web server to interact with the respective system.

## License
This project is for educational purposes only.
