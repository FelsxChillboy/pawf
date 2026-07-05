from django.db import models
from django.utils.text import slugify


class Category(models.Model):
    nama = models.CharField(max_length=100)
    slug = models.SlugField(unique=True, blank=True)
    deskripsi = models.TextField(blank=True)
    created_at = models.DateTimeField(auto_now_add=True)

    class Meta:
        verbose_name = "Kategori"
        verbose_name_plural = "Kategori"

    def __str__(self):
        return self.nama

    def save(self, *args, **kwargs):
        if not self.slug:
            self.slug = slugify(self.nama)
        super().save(*args, **kwargs)


class Post(models.Model):
    STATUS_CHOICES = [
        ("draft", "Draft"),
        ("published", "Published"),
    ]

    judul = models.CharField(max_length=200)
    slug = models.SlugField(unique=True, blank=True)
    konten = models.TextField()
    kategori = models.ForeignKey(
        Category, on_delete=models.CASCADE, related_name="posts"
    )
    status = models.CharField(max_length=10, choices=STATUS_CHOICES, default="draft")
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    class Meta:
        verbose_name = "Postingan"
        verbose_name_plural = "Postingan"
        ordering = ["-created_at"]

    def __str__(self):
        return self.judul

    def save(self, *args, **kwargs):
        if not self.slug:
            self.slug = slugify(self.judul)
        super().save(*args, **kwargs)
