<h2>Reset Password</h2>
<form action="/auth/reset-password" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="token" value="<?= $token ?>">
    <label for="password">New Password:</label>
    <input type="password" name="password" id="password" required>
    <label for="password_confirm">Confirm Password:</label>
    <input type="password" name="password_confirm" id="password_confirm" required>
    <button type="submit">Reset Password</button>
</form>