# 🎶 MusicStream - Music Streaming Website

**MusicStream** is a full-featured music streaming web application where users can authenticate, stream, and download music. Built using **Laravel with Inertia.js + Vue.js** on the frontend and backend, the app is styled using **Tailwind CSS** and uses **MySQL** for data persistence.

---

## 🌟 Features

- 🔐 **User Authentication** (Register, Login, Logout)
- 🎧 **Music Streaming** via in-browser audio player
- 📥 **Music Downloading** for offline access
- 🔍 **Search** by song, artist, album, or genre
- ❤️ **Favorites** and playlist functionality
- 📁 Admin dashboard for managing songs (optional)

---

## 🧰 Tech Stack

| Layer     | Technology              |
|-----------|--------------------------|
| Fullstack | Laravel + Inertia.js + Vue.js |
| Styling   | Tailwind CSS             |
| Database  | MySQL                    |
| Storage   | Local or Cloud (e.g., S3) |

---

## 🚀 Getting Started

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/musicstream.git
cd musicstream
```

### 2. Project Setup

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate

# Set up your DB credentials in .env
php artisan migrate --seed
```

### 3. Run the Development Server

```bash
npm run dev
php artisan serve
```

---

## 🗂️ Project Structure

```
musicstream/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
├── resources/
│   ├── js/                 # Vue components via Inertia
│   │   ├── Pages/
│   │   ├── Components/
│   │   └── Layouts/
│   └── views/app.blade.php # Inertia root template
├── routes/web.php
├── database/
├── public/
├── tailwind.config.js
├── vite.config.js
├── package.json
├── artisan
└── README.md
```

---

## 🔐 Authentication Flow

Authentication is handled via Laravel's built-in session-based system.

Routes are protected using middleware like `auth`, and Inertia handles redirection on the frontend.

---

## 📦 Key Features / Routes

- `GET /` – Home / Browse
- `GET /login` – Login page
- `GET /register` – Registration page
- `GET /dashboard` – Authenticated user dashboard
- `GET /tracks/{id}` – Stream music
- `GET /tracks/{id}/download` – Download music
- `POST /favorites` – Add to favorites
- `GET /favorites` – View user favorites

> Routes use `web` middleware and return Inertia responses to Vue pages.

---

## 🧪 Testing

```bash
php artisan test
```

---

## 📄 License

This project is licensed under the [MIT License](LICENSE).

---

## 📬 Contact

For support, contact [kondwanikawere1@gmail.com](mailto:kondwanikawere1@gmail.com).
