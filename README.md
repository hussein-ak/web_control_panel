# Robot Control Panel
This project features a web-based control panel for a robot's movement. The interface allows users to command the robot to move in four directions (Forward, Backward, Left, Right). The control panel is connected to a database to log each command with a timestamp for tracking and analysis purposes.

## Features
### Control Interface:
Forward: Moves the robot forward.
Backward: Moves the robot backward.
Left: Turns the robot left.
Right: Turns the robot right.


![image](https://github.com/user-attachments/assets/ad3a8291-5b62-41f0-a3b6-c58644611402)

## Database Integration:
Each command is recorded in a MySQL database with a timestamp.
The database allows tracking of the command history for analysis.
Screenshots
Control Panel

Database

Usage
## Setting Up:

Ensure you have a web server running 
Deploy the HTML and PHP files to your web server.

## Database Configuration:
Set up a MySQL database.

## Use the following SQL schema to create the commands table:

### sql

CREATE TABLE `commands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `direction` varchar(50) NOT NULL,
  `timestamp` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

## Running the Control Panel:

Navigate to the web page in your browser.
Use the directional buttons to control the robot.
The commands will be logged in the database.
Technology Stack
Frontend: HTML, CSS
Backend: PHP
Database: MySQL


![image](https://github.com/user-attachments/assets/8b4e4611-f72a-4c00-bb57-dfac171ff685)

