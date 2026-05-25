<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter Subscribe</title>
    <!-- Sesuaikan path Bootstrap kamu -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.25);
        }

        .card-body {
            padding: 50px 40px;
        }

        .icon-wrap {
            font-size: 60px;
        }

        .btn-subscribe {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 10px;
            transition: opacity 0.2s, transform 0.2s;
        }

        .btn-subscribe:hover {
            opacity: 0.9;
            transform: translateY(-1px);
            color: white;
        }

        .btn-subscribe:disabled {
            opacity: 0.6;
        }

        .form-control {
            border-radius: 10px;
            padding: 12px 16px;
            border: 2px solid #e2e8f0;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102,126,234,0.25);
        }

        .privacy-text {
            font-size: 12px;
            color: #a0aec0;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card">
                <div class="card-body text-center">

                    <div class="icon-wrap mb-3">✉️</div>
                    <h3 class="fw-bold text-dark mb-2">Berlangganan Newsletter</h3>
                    <p class="text-muted mb-4">
                        Dapatkan berita dan update terbaru langsung di inbox kamu. Gratis, tanpa spam!
                    </p>

                    <!-- Form -->
                    <div class="input-group mb-3">
                        <input 
                            type="email" 
                            id="emailInput" 
                            class="form-control" 
                            placeholder="Masukkan email kamu..."
                        >
                        <button class="btn btn-subscribe" id="submitBtn" onclick="subscribe()">
                            Subscribe
                        </button>
                    </div>

                    <!-- Alert Success -->
                    <div class="alert alert-success d-none" id="alertSuccess" role="alert">
                        🎉 <span id="successMsg"></span>
                    </div>

                    <!-- Alert Error -->
                    <div class="alert alert-danger d-none" id="alertError" role="alert">
                        ❌ <span id="errorMsg"></span>
                    </div>

                    <p class="privacy-text mt-3">🔒 Kami menjaga privasi kamu. Berhenti berlangganan kapan saja.</p>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/bootstrap.bundle.min.js"></script>
<script>
    async function subscribe() {
        const email = document.getElementById('emailInput').value.trim();
        const btn = document.getElementById('submitBtn');
        const alertSuccess = document.getElementById('alertSuccess');
        const alertError = document.getElementById('alertError');

        // Reset alerts
        alertSuccess.classList.add('d-none');
        alertError.classList.add('d-none');

        // Validasi email
        if (!email) {
            document.getElementById('errorMsg').textContent = 'Masukkan email terlebih dahulu.';
            alertError.classList.remove('d-none');
            return;
        }

        // Loading state
        btn.disabled = true;
        btn.innerHTML = `<span class="spinner-border spinner-border-sm me-1" role="status"></span> Mengirim...`;

        try {
            const response = await fetch('/newsletter/subscribe', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: `email=${encodeURIComponent(email)}`
            });

            const data = await response.json();

            if (data.status === 'success') {
                document.getElementById('successMsg').textContent = data.message;
                alertSuccess.classList.remove('d-none');
                document.getElementById('emailInput').value = '';
            } else {
                document.getElementById('errorMsg').textContent = data.message || 'Terjadi kesalahan.';
                alertError.classList.remove('d-none');
            }

        } catch (err) {
            document.getElementById('errorMsg').textContent = 'Gagal terhubung ke server.';
            alertError.classList.remove('d-none');
        }

        // Reset button
        btn.disabled = false;
        btn.innerHTML = 'Subscribe';
    }

    // Support Enter key
    document.getElementById('emailInput').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') subscribe();
    });
</script>

</body>
</html>