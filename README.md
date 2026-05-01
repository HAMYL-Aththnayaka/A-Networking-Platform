# 🚀 Yzz Network - Member Management System

A clean, modern Member Management System built with **Laravel 11**, **Tailwind CSS v4**, and **SQLite**. This project demonstrates full CRUD (Create, Read, Update, Delete) functionality, Eloquent relationships, and a customized UI.

![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-v4-06B6D4?style=for-the-badge&logo=tailwindcss)
![SQLite](https://img.shields.io/badge/SQLite-003B57?style=for-the-badge&logo=sqlite)

## ✨ Features

- **Full CRUD:** Create, View, and Manage network members.
- **Dynamic Relationships:** Members are linked to specific Locations using Eloquent `belongsTo` and `hasMany` relationships.
- **Pagination:** Smooth list navigation with Laravel's built-in paginator.
- **Modern UI:** Custom "Sky Blue" theme using Tailwind CSS v4, featuring high-contrast cards and responsive layouts.
- **Validation:** Robust backend validation for member skills, bios, and locations.
- **Database Seeding:** Quickly populate the app with realistic fake data using Factories and Seeders.

## 📸 Preview
- **Index Page:** Displays blue member cards with skill-based highlighting.
- **Show Page:** Deep-dive into specific member bios and location details.
- **Create Form:** A streamlined interface for adding new members to the network.

## 🛠️ Tech Stack

- **Framework:** Laravel 11
- **Frontend:** Blade Templates & Tailwind CSS v4
- **Database:** SQLite
- **Environment:** Laravel Herd / Composer

## 🚀 Getting Started

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js & NPM

### Installation

1. **Clone the repository:**
   ```bash
   git clone [https://github.com/your-username/yzz-network.git](https://github.com/your-username/yzz-network.git)
   cd yzz-network
   ```

2. **Install Dependencies:**
   ```bash
   composer install
   npm install
   
```

3. **Environment Setup:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Configuration:**
   Create an empty SQLite file:
   ```bash
   touch database/database.sqlite
   ```

5. **Run Migrations & Seeders:**
   ```bash
   php artisan migrate:fresh --seed
   ```

6. **Compile Assets:**
   ```bash
   npm run dev
   ```

7. **Launch:**
   Visit `http://yzz.test` (if using Herd) or run:
   ```bash
   php artisan serve
   ```
8. ## 🖼️ Sample Output

<p align="center">
  <img src="https://github.com/user-attachments/assets/aedd180d-a43d-46fe-8fff-6e269c8525c3" width="45%" alt="Member Index Page" />
  <img src="https://github.com/user-attachments/assets/cbc70fa1-3773-4045-a370-42a332c9541e" width="45%" alt="Member Details Page" />
</p>
<p align="center">
  <img src="https://github.com/user-attachments/assets/86892919-b55f-4bbd-8b34-0ca1f46b45d8" width="45%" alt="Create Member Form" />
  <img src="https://github.com/user-attachments/assets/df098067-99a3-44a4-9d7d-91e125500d87" width="45%" alt="UI Customization" />
</p>

## 📂 Project Structure Highlights

- **Controllers:** `memberController.php` handles all member-related logic.
- **Models:** 
    - `Yzz.php`: Defines member attributes and the `location()` relationship.
    - `Locations.php`: Defines location attributes and the `members()` relationship.
- **Views:** Uses a centralized `x-layout` component for consistent branding.

## 👤 Author
**Yasas Aththanayaka**
- 3rd Year IT Undergraduate at University of Vavuniya
- Full-Stack Developer specializing in MERN & Laravel

---
*Developed as part of a 3rd-year university learning journey.*
```
