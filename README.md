🧑‍💼 Online Job Portal – Full Stack Web Application
📌 Project Overview

The Online Job Portal is a full-stack web application designed to bridge the gap between job seekers and recruiters.
It provides a centralized platform where:

Job seekers can search, view, and apply for jobs

Recruiters can post and manage job vacancies

Admin can monitor users and job postings

This project simulates a real-world recruitment system used by platforms like Naukri, Indeed, and LinkedIn Jobs.

🎯 Objectives of the Project

To understand end-to-end web application development

To implement role-based access control

To practice CRUD operations with a database

To gain experience with frontend–backend integration

To follow industry-level project structure

🏗 System Architecture
Client (Browser)
     |
     |  HTTP Requests
     ↓
Frontend (HTML, CSS, JavaScript)
     |
     |  API / Servlet Calls
     ↓
Backend (Java – Servlet / Spring Boot)
     |
     |  JDBC / ORM
     ↓
MySQL Database

Architecture Explanation:

Frontend handles user interaction and UI

Backend processes business logic and validations

Database stores users, jobs, applications securely

👥 User Roles & Responsibilities
1️⃣ Job Seeker

Register & login

Create profile

Search jobs using keywords/location

Apply for jobs

View applied job history

2️⃣ Recruiter

Register & login

Post new job vacancies

Update or delete job posts

View applicants for posted jobs

3️⃣ Admin

View all users and recruiters

Manage job listings

Monitor platform activity

🚀 Features (Detailed Explanation)
🔐 Authentication & Authorization

Secure login system

Separate access for Job Seeker, Recruiter, and Admin

Session management to prevent unauthorized access

🔍 Job Search & Filtering

Search jobs by:

Job title

Skills

Location

Real-time job listing display

📝 Job Posting

Recruiters can:

Add job title, description, salary, experience

Edit or remove job postings

Jobs stored persistently in database

📄 Job Application Module

Job seekers can apply with one click

Applications linked to both user and job

Recruiters can view applicant list

📊 Dashboard

User-specific dashboards

Displays relevant data based on role

🧰 Tech Stack Used
Frontend
Technology	Purpose
HTML	Structure of web pages
CSS	Styling & layout
JavaScript	Client-side validation & interactivity
Backend
Technology	Purpose
Java	Core backend logic
Servlets / Spring Boot	Request handling
JDBC / Hibernate	Database interaction
Database
Technology	Purpose
MySQL	Persistent data storage
📂 Project Directory Structure 
online-job-portal/
│
├── frontend/              # User Interface
│   ├── css/               # Styling files
│   ├── js/                # JavaScript logic
│   ├── index.html         # Landing page
│   ├── login.html         # Login page
│   ├── register.html      # Registration page
│   ├── jobs.html          # Job listings
│   └── dashboard.html     # User dashboard
│
├── backend/               # Business Logic
│   ├── controller/        # Handles requests
│   ├── service/           # Business logic
│   ├── model/             # Entity classes
│   ├── dao/               # Database access
│   └── MainApplication.java
│
├── database/
│   └── job_portal.sql     # Database schema
│
├── screenshots/           # UI screenshots
│
├── README.md              # Project documentation
├── .gitignore
└── LICENSE

🗄 Database Design (Overview)
Tables Used:

users – stores job seekers and recruiters

jobs – stores job postings

applications – maps users to applied jobs

admin – admin credentials

Key Concepts Used:

Primary Keys

Foreign Keys

One-to-Many relationships

Data normalization









**Developer:** Arish Ahamad
**GitHub** [https://github.com/arishahmadgu/Online-Job-Portal]

---

  
