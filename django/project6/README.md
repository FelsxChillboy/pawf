# Blog CMS - Django 6

Aplikasi Blog/CMS sederhana berbasis Django 6.0 dengan fitur CRUD lengkap dan Admin Panel.

## Tech Stack

- Python 3.14
- Django 6.0.6
- SQLite
- Bootstrap 5.3.3

## Struktur Project

```
project6/
├── manage.py
├── requirements.txt
├── django_project/          # Konfigurasi project
│   ├── settings.py
│   ├── urls.py
│   ├── wsgi.py
│   └── asgi.py
├── blog/                    # App utama
│   ├── models.py            # Category & Post
│   ├── views.py             # 7 Class-Based Views
│   ├── urls.py              # 7 URL patterns
│   ├── forms.py             # PostForm
│   ├── admin.py             # Admin customization
│   └── tests.py             # 25 test cases
├── templates/
│   ├── base.html
│   └── blog/
│       ├── post_list.html
│       ├── post_detail.html
│       ├── post_form.html
│       ├── post_confirm_delete.html
│       └── category_list.html
└── static/css/style.css
```

## WSGI & ASGI

**WSGI** (Web Server Gateway Interface) — file `wsgi.py` berfungsi sebagai jembatan antara **web server** (Nginx, Apache, IIS) dengan aplikasi Django.

Alur kerja WSGI:

```
Browser → Internet → Web Server → wsgi.py → Django → wsgi.py → Web Server → Browser
```

- **WSGI** digunakan saat **production** (deploy ke server nyata)
- **Saat development** (`python manage.py runserver`), Django memakai server bawaan sehingga `wsgi.py` tidak digunakan

**ASGI** (Asynchronous Server Gateway Interface) — file `asgi.py` adalah versi modern yang mendukung koneksi **asynchronous** seperti WebSocket dan real-time communication. WSGI cocok untuk request-response biasa (synchronous), sedangkan ASGI untuk aplikasi yang butuh koneksi real-time.

## Entity Relationship Diagram

```
Category (1) ────< (N) Post
  ├── id                        ├── id
  ├── nama                      ├── judul
  ├── slug                      ├── slug
  ├── deskripsi                 ├── konten
  └── created_at                ├── kategori_id (FK)
                                ├── status (draft/published)
                                ├── created_at
                                └── updated_at
```

## URL Routing

| URL | View | Template |
|-----|------|----------|
| `/` | PostListView | `post_list.html` |
| `/tambah/` | PostCreateView | `post_form.html` |
| `/<slug>/` | PostDetailView | `post_detail.html` |
| `/<slug>/edit/` | PostUpdateView | `post_form.html` |
| `/<slug>/hapus/` | PostDeleteView | `post_confirm_delete.html` |
| `/kategori/` | CategoryListView | `category_list.html` |
| `/kategori/<slug>/` | CategoryPostView | `post_list.html` |

## Cara Menjalankan

```powershell
# 1. Clone / buka folder project
cd project6

# 2. Aktifkan virtual environment
Set-ExecutionPolicy -Scope Process -ExecutionPolicy RemoteSigned
.\.venv\Scripts\Activate.ps1

# 3. Jalankan server
python manage.py runserver
```

Buka browser: **http://127.0.0.1:8000/**

### Admin Panel

- URL: http://127.0.0.1:8000/admin/
- Username: `admin`
- Password: `admin123`

## Testing

```bash
python manage.py test blog -v 2
```

Total: **25 test cases** — semua pass.

## Fitur

- CRUD Postingan (Create, Read, Update, Delete)
- Kategorisasi postingan
- Status draft/published
- Filter postingan per kategori
- Admin Panel kustom
- Responsive design (Bootstrap 5)
- Bahasa Indonesia
- Slug otomatis
- 25 unit tests
