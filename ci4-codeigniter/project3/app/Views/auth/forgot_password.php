<h2>Forgot Password</h2>
<form action="/auth/forgot-password" method="post">
    <?= csrf_field() ?>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <button type="submit">Send Reset Link</button>
</form>