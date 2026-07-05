from django.views.generic import ListView, DetailView, CreateView, UpdateView, DeleteView
from django.urls import reverse_lazy
from .models import Post, Category
from .forms import PostForm


class PostListView(ListView):
    model = Post
    template_name = "blog/post_list.html"
    context_object_name = "posts"

    def get_queryset(self):
        return Post.objects.filter(status="published").select_related("kategori")


class PostDetailView(DetailView):
    model = Post
    template_name = "blog/post_detail.html"
    context_object_name = "post"
    slug_field = "slug"


class PostCreateView(CreateView):
    model = Post
    form_class = PostForm
    template_name = "blog/post_form.html"
    success_url = reverse_lazy("post_list")


class PostUpdateView(UpdateView):
    model = Post
    form_class = PostForm
    template_name = "blog/post_form.html"
    slug_field = "slug"

    def get_success_url(self):
        return reverse_lazy("post_detail", kwargs={"slug": self.object.slug})


class PostDeleteView(DeleteView):
    model = Post
    template_name = "blog/post_confirm_delete.html"
    slug_field = "slug"
    success_url = reverse_lazy("post_list")


class CategoryListView(ListView):
    model = Category
    template_name = "blog/category_list.html"
    context_object_name = "categories"


class CategoryPostView(ListView):
    model = Post
    template_name = "blog/post_list.html"
    context_object_name = "posts"

    def get_queryset(self):
        return Post.objects.filter(
            kategori__slug=self.kwargs["slug"], status="published"
        ).select_related("kategori")

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context["kategori"] = Category.objects.get(slug=self.kwargs["slug"])
        return context
