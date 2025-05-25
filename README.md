# 👨‍💼 Freelance Time Tracker APIs

The Freelance Time Tracker API is a Laravel-based RESTful API for freelance to log, manage, and track their work time across multiple clients and projects.

---

## 🌐 Base URL
http://localhost:8000/api/

---

## Tables: Users, Clients, Projects, Time_Logs
- **Users** `id, name, email, password`  
- **Clients** `id, user_id, name, email, contact_person`  
- **Projects** `id, client_id, title, description, status, deadline`  
- **Time_Logs** `id, project_id, start_time, end_time, description, hours`  


 ## 📚 API Endpoints

### 👤 1. Register User

- **URL:** `/api/user/register`  
- **Method:** `POST`
- **Body (JSON):**

```json
{
  "name": "John Doe",
  "email": "john@example.com",
  "password": "securePassword123"
}
```

- **Success Response:**
```json
{
  "status": true,
  "message": "User created successfully!",
}
```


            


           