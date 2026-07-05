from django import forms
from .models import Post


class PostForm(forms.ModelForm):
    class Meta:
        model = Post
        fields = ["judul", "konten", "kategori", "status"]
        widgets = {
            "judul": forms.TextInput(attrs={"class": "form-control"}),
            "konten": forms.Textarea(attrs={"class": "form-control", "rows": 10}),
            "kategori": forms.Select(attrs={"class": "form-select"}),
            "status": forms.Select(attrs={"class": "form-select"}),
        }
        labels = {
            "judul": "Judul",
            "konten": "Konten",
            "kategori": "Kategori",
            "status": "Status",
        }
