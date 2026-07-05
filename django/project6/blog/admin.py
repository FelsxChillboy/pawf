from django.contrib import admin
from .models import Category, Post


@admin.register(Category)
class CategoryAdmin(admin.ModelAdmin):
    list_display = ["nama", "slug", "created_at"]
    search_fields = ["nama"]
    prepopulated_fields = {"slug": ["nama"]}


@admin.register(Post)
class PostAdmin(admin.ModelAdmin):
    list_display = ["judul", "kategori", "status", "created_at", "updated_at"]
    list_filter = ["status", "kategori"]
    search_fields = ["judul", "konten"]
    prepopulated_fields = {"slug": ["judul"]}
    date_hierarchy = "created_at"
