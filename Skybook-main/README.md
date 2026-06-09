# ✈️ skybook – Flight Booking & Management System

## Overview

skybook is a web-based Flight Booking and Management System developed to streamline airline reservation operations. The application provides an intuitive interface for managing flights, passengers, bookings, and travel agencies while maintaining data integrity through a MySQL database.

This project was developed as part of academic coursework to demonstrate concepts of web development, database management, CRUD operations, and system integration using PHP and MySQL.

---

## Features

### Flight Management

* Add new flight records
* Update flight information
* Delete flights
* View available flights

### Passenger Management

* Register passengers
* Update passenger details
* Delete passenger records
* View passenger information

### Booking Management

* Create flight bookings
* Update booking details
* Cancel bookings
* Manage reservation records

### Travel Agency Management

* Add agency information
* Update agency details
* Manage agency records

### Database Operations

* Create database tables automatically
* Insert records into tables
* Update records
* Delete records
* Execute SQL queries

### User Interface

* Responsive design
* Interactive navigation
* Modern layout using HTML, CSS, and JavaScript
* User-friendly dashboard

---

## Technology Stack

### Frontend

* HTML5
* CSS3
* JavaScript

### Backend

* PHP

### Database

* MySQL

### Development Environment

* XAMPP
* Visual Studio Code

### Version Control

* Git
* GitHub

---

## Project Structure

```text
skybook/
│
├── components/
│   ├── navbar.php
│   └── footer.php
│
├── css/
│   ├── style.css
│   ├── style2.css
│   └── styles.css
│
├── js/
│   ├── main.js
│   ├── queries-data.js
│   └── query-dashboard.js
│
├── php/
│   ├── db_connect.php
│   ├── create_tables.php
│   ├── insert_booking.php
│   ├── insert_flight.php
│   ├── insert_passenger.php
│   ├── update_booking.php
│   ├── update_flight.php
│   ├── update_passenger.php
│   ├── delete_booking.php
│   ├── delete_flight.php
│   └── delete_passenger.php
│
├── database/
│   └── skybook.sql
│
├── image/
│
├── index.php
├── insert.php
├── update.php
├── delete.php
├── login.php
├── queries.php
└── create-table.php
```

---

## Database Design

The system uses a relational database structure consisting of:

### Passenger Table

Stores passenger information such as:

* Passenger ID
* Name
* Contact Information
* Age
* Gender

### Flight Table

Stores flight details:

* Flight ID
* Flight Number
* Source
* Destination
* Departure Time
* Arrival Time

### Booking Table

Stores reservation information:

* Booking ID
* Passenger ID
* Flight ID
* Booking Date

### Agency Table

Stores travel agency details:

* Agency ID
* Agency Name
* Contact Details

---
## Learning Outcomes

This project helped in understanding:

* PHP Programming
* Database Connectivity
* SQL Queries
* CRUD Operations
* Frontend Development
* Backend Integration
* Version Control with Git
* GitHub Repository Management

---

## Future Enhancements

* User Authentication System
* Online Payment Gateway
* Email Notifications
* Flight Search Filters
* Seat Selection Module
* Admin Dashboard
* Ticket PDF Generation
* Mobile Application Integration

---

## Screenshots

### Home Page

(Add Screenshot Here)

### Booking Management

(Add Screenshot Here)

### Passenger Management

(Add Screenshot Here)

### Query Dashboard

(Add Screenshot Here)

---

## Author

**Deep Malviya**

Bachelor of Technology (B.Tech)
Computer Science & Information Technology

---
This project is developed for educational and academic purposes.
