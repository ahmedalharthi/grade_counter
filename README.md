# 📊 PHP Grade Range Calculator Web App

A simple web application to count the number of grades falling into specific ranges (like A+, B, etc.) based on student grade input. This tool helps teachers or educators quickly categorize student performance using a Bootstrap 5.3 frontend and PHP backend.

---

## 🌐 Live Demo

> Paste this app on https://ahmedalharthi.net/apps/grade_counter/ 

---

## 🖼️ Screenshot

![screenshot-placeholder](https://via.placeholder.com/900x400?text=Grade+Range+Calculator+UI)

---

## ⚙️ Features

- Enter multiple student grades (one per line).
- Dynamically computes grade distribution using PHP.
- Clean, modern interface using **Bootstrap 5.3** (grey-themed).
- Displays count and percentage of each grade from `A+` to `F`.

---

## 📚 Grade Ranges Used

| Grade | Range      |
|-------|------------|
| A+    | 90–100     |
| A     | 85–89      |
| B+    | 80–84      |
| B     | 75–79      |
| C+    | 70–74      |
| C     | 65–69      |
| D+    | 60–64      |
| D     | 50–59      |
| F     | Below 50   |

---

## 🏗️ Project Structure

```
/your-folder/
│
├── index.html       # Frontend user interface using Bootstrap 5
├── calculate.php    # Backend PHP script for processing grade distribution
└── README.md        # This file (documentation)
```

---

## 🧑‍💻 How to Use

1. Upload the project to your hosting service (like Bluehost).
2. Open `index.html` in the browser.
3. Enter student grades, **one per line** (e.g., 92, 80, 83, 60).
4. Click **"Calculate"**.
5. The app returns a count and percentage breakdown of grades.

Example input:
```
92
80
83
60
```

Will result in:
```
A+ : 1 (25%)
B  : 2 (50%)
D  : 1 (25%)
```

---

## 🧩 Tech Stack

- **Frontend**: HTML, JavaScript (Fetch API), Bootstrap 5.3 (Grey Theme)
- **Backend**: PHP 7+

---

## 📁 File Details

### ✅ index.html

- Textarea input field for grades
- "Calculate" button
- Sends `POST` request with JSON to `calculate.php`
- Displays grade breakdown dynamically

### ✅ calculate.php

Receives grades as a JSON array and returns a JSON object mapping each grade letter to its frequency.

Example:
```json
{
  "A+": 1,
  "B": 2,
  "D": 1
}
```

Backend logic sample:
```php
$grades = json_decode(file_get_contents("php://input"), true)["grades"];
// Logic maps numerical grades into grade letters
```

---

## 🎨 Design Customization

- Grey Bootstrap theme via:
  ```css
  body {
    background-color: #e9ecef;
  }
  .card {
    background-color: #dee2e6;
  }
  ```
- Dark button & badge styles for contrast

---

## 🔒 Security Consideration

This app does not perform advanced sanitization. Consider adding input validation and anti-CSRF techniques if used in production environments.

---

## 📄 License

MIT License. Developed by **Dr. Ahmed Alharthi**, Version 1, June 2025.

---

## 📬 Feedback & Contributions

Pull requests and issues are welcome!
