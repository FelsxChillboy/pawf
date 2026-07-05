from django.urls import path
from . import views

urlpatterns = [
    path("", views.PostListView.as_view(), name="post_list"),
    path("tambah/", views.PostCreateView.as_view(), name="post_create"),
    path("kategori/", views.CategoryListView.as_view(), name="category_list"),
    path("kategori/<slug:slug>/", views.CategoryPostView.as_view(), name="category_posts"),
    path("<slug:slug>/", views.PostDetailView.as_view(), name="post_detail"),
    path("<slug:slug>/edit/", views.PostUpdateView.as_view(), name="post_update"),
    path("<slug:slug>/hapus/", views.PostDeleteView.as_view(), name="post_delete"),
]
