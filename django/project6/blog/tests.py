from django.test import TestCase
from django.urls import reverse
from .models import Category, Post


class CategoryModelTest(TestCase):
    def setUp(self):
        self.category = Category.objects.create(
            nama="Teknologi", deskripsi="Postingan tentang teknologi"
        )

    def test_category_creation(self):
        self.assertEqual(self.category.nama, "Teknologi")
        self.assertEqual(self.category.slug, "teknologi")

    def test_category_str(self):
        self.assertEqual(str(self.category), "Teknologi")

    def test_category_verbose_name(self):
        self.assertEqual(str(Category._meta.verbose_name), "Kategori")
        self.assertEqual(str(Category._meta.verbose_name_plural), "Kategori")


class PostModelTest(TestCase):
    def setUp(self):
        self.category = Category.objects.create(nama="Teknologi")
        self.post = Post.objects.create(
            judul="Belajar Django",
            konten="Panduan lengkap Django",
            kategori=self.category,
            status="published",
        )

    def test_post_creation(self):
        self.assertEqual(self.post.judul, "Belajar Django")
        self.assertEqual(self.post.slug, "belajar-django")
        self.assertEqual(self.post.status, "published")

    def test_post_str(self):
        self.assertEqual(str(self.post), "Belajar Django")

    def test_post_ordering(self):
        post2 = Post.objects.create(
            judul="Post Kedua",
            konten="Konten kedua",
            kategori=self.category,
            status="published",
        )
        posts = Post.objects.all()
        self.assertEqual(posts[0], post2)

    def test_post_default_status(self):
        post = Post.objects.create(
            judul="Draft Post",
            konten="Draft",
            kategori=self.category,
        )
        self.assertEqual(post.status, "draft")


class PostListViewTest(TestCase):
    def setUp(self):
        self.category = Category.objects.create(nama="Teknologi")
        self.post = Post.objects.create(
            judul="Post Published",
            konten="Konten",
            kategori=self.category,
            status="published",
        )
        self.draft = Post.objects.create(
            judul="Post Draft",
            konten="Draft",
            kategori=self.category,
            status="draft",
        )

    def test_post_list_status_code(self):
        response = self.client.get(reverse("post_list"))
        self.assertEqual(response.status_code, 200)

    def test_post_list_template(self):
        response = self.client.get(reverse("post_list"))
        self.assertTemplateUsed(response, "blog/post_list.html")

    def test_post_list_only_published(self):
        response = self.client.get(reverse("post_list"))
        self.assertContains(response, "Post Published")
        self.assertNotContains(response, "Post Draft")


class PostDetailViewTest(TestCase):
    def setUp(self):
        self.category = Category.objects.create(nama="Olahraga")
        self.post = Post.objects.create(
            judul="Sepak Bola",
            konten="Artikel tentang sepak bola",
            kategori=self.category,
            status="published",
        )

    def test_post_detail_status_code(self):
        response = self.client.get(
            reverse("post_detail", kwargs={"slug": self.post.slug})
        )
        self.assertEqual(response.status_code, 200)

    def test_post_detail_template(self):
        response = self.client.get(
            reverse("post_detail", kwargs={"slug": self.post.slug})
        )
        self.assertTemplateUsed(response, "blog/post_detail.html")

    def test_post_detail_content(self):
        response = self.client.get(
            reverse("post_detail", kwargs={"slug": self.post.slug})
        )
        self.assertContains(response, "Sepak Bola")
        self.assertContains(response, "Artikel tentang sepak bola")


class PostCreateViewTest(TestCase):
    def setUp(self):
        self.category = Category.objects.create(nama="Kesehatan")

    def test_post_create_status_code(self):
        response = self.client.get(reverse("post_create"))
        self.assertEqual(response.status_code, 200)

    def test_post_create_template(self):
        response = self.client.get(reverse("post_create"))
        self.assertTemplateUsed(response, "blog/post_form.html")

    def test_post_create_success(self):
        response = self.client.post(
            reverse("post_create"),
            {
                "judul": "Hidup Sehat",
                "konten": "Tips hidup sehat",
                "kategori": self.category.id,
                "status": "published",
            },
        )
        self.assertEqual(response.status_code, 302)
        self.assertTrue(Post.objects.filter(judul="Hidup Sehat").exists())


class PostUpdateViewTest(TestCase):
    def setUp(self):
        self.category = Category.objects.create(nama="Makanan")
        self.post = Post.objects.create(
            judul="Resep Nasi Goreng",
            konten="Bahan dan cara memasak",
            kategori=self.category,
            status="published",
        )

    def test_post_update_status_code(self):
        response = self.client.get(
            reverse("post_update", kwargs={"slug": self.post.slug})
        )
        self.assertEqual(response.status_code, 200)

    def test_post_update_success(self):
        response = self.client.post(
            reverse("post_update", kwargs={"slug": self.post.slug}),
            {
                "judul": "Resep Nasi Goreng Spesial",
                "konten": "Bahan dan cara memasak",
                "kategori": self.category.id,
                "status": "published",
            },
        )
        self.assertEqual(response.status_code, 302)
        self.post.refresh_from_db()
        self.assertEqual(self.post.judul, "Resep Nasi Goreng Spesial")


class PostDeleteViewTest(TestCase):
    def setUp(self):
        self.category = Category.objects.create(nama="Musik")
        self.post = Post.objects.create(
            judul="Belajar Gitar",
            konten="Panduan belajar gitar",
            kategori=self.category,
            status="published",
        )

    def test_post_delete_status_code(self):
        response = self.client.get(
            reverse("post_delete", kwargs={"slug": self.post.slug})
        )
        self.assertEqual(response.status_code, 200)

    def test_post_delete_template(self):
        response = self.client.get(
            reverse("post_delete", kwargs={"slug": self.post.slug})
        )
        self.assertTemplateUsed(response, "blog/post_confirm_delete.html")

    def test_post_delete_success(self):
        response = self.client.post(
            reverse("post_delete", kwargs={"slug": self.post.slug})
        )
        self.assertEqual(response.status_code, 302)
        self.assertFalse(Post.objects.filter(slug=self.post.slug).exists())


class CategoryListViewTest(TestCase):
    def setUp(self):
        Category.objects.create(nama="Teknologi")
        Category.objects.create(nama="Olahraga")

    def test_category_list_status_code(self):
        response = self.client.get(reverse("category_list"))
        self.assertEqual(response.status_code, 200)

    def test_category_list_template(self):
        response = self.client.get(reverse("category_list"))
        self.assertTemplateUsed(response, "blog/category_list.html")

    def test_category_list_content(self):
        response = self.client.get(reverse("category_list"))
        self.assertContains(response, "Teknologi")
        self.assertContains(response, "Olahraga")


class CategoryPostViewTest(TestCase):
    def setUp(self):
        self.category = Category.objects.create(nama="Teknologi")
        self.other_category = Category.objects.create(nama="Olahraga")
        Post.objects.create(
            judul="Post Teknologi",
            konten="Konten teknologi",
            kategori=self.category,
            status="published",
        )
        Post.objects.create(
            judul="Post Olahraga",
            konten="Konten olahraga",
            kategori=self.other_category,
            status="published",
        )

    def test_category_posts_filter(self):
        response = self.client.get(
            reverse("category_posts", kwargs={"slug": self.category.slug})
        )
        self.assertContains(response, "Post Teknologi")
        self.assertNotContains(response, "Post Olahraga")
