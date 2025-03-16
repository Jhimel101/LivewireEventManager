# 🎉 EventFlow - Laravel Livewire Event Management System  

EventFlow is a modern **Single Page Application (SPA)-like** event management system built with **Laravel Livewire**, featuring seamless page transitions, event creation, user authentication, and **bKash payment integration** for ticket purchases.

## 🚀 Features  

✅ **User Authentication** – Secure login, registration, and profile management.  
✅ **Event Listing & Details** – View upcoming events with rich descriptions.  
✅ **Event Creation & Management** – Organizers can create and manage events.  
✅ **Ticketing System** – Users can make payments via **bKash** and download tickets.  
✅ **bKash Payment Integration** – Secure online payments via **bKash PGW API**.  
✅ **Dashboard** – Admin panel with insights on total users, events, and payments.  
✅ **Livewire SPA Experience** – Smooth, reactive UI without full-page reloads.  

---

## 🛠 Tech Stack  

- **Laravel 12** (Backend)  
- **Livewire** (Reactive UI with SPA-like experience)  
- **Tailwind CSS** (Modern, responsive UI)  
- **Alpine.js** (For lightweight interactivity)  
- **MySQL** (Database)  
- **bKash PGW API** (Payment Gateway Integration)  

---

## 📂 Project Structure  

```plaintext
EventFlow/
│── app/
│   ├── Http/
│   │   ├── Controllers/       # Application controllers
│   │   ├── Livewire/          # Livewire components
│   ├── Models/                # Eloquent models
│── database/
│   ├── migrations/            # Database migrations
│   ├── seeders/               # Database seeders
│── resources/
│   ├── views/                 # Blade templates
│   │   ├── livewire/          # Livewire components views
│   │   ├── layouts/           # Main layout files
│── routes/
│   ├── web.php                # Routes for web pages
│   ├── api.php                # API routes
│── public/
│── config/
│── .env.example               # Example environment file
│── composer.json              # Laravel dependencies
│── package.json               # Frontend dependencies
│── README.md                  # Documentation
