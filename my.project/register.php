<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Регистрация</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/variables.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'includes/header.php'; ?>

<main class="main">
  <div class="container">
    <div class="auth-card">

      <h1 class="auth-card__title">Регистрация</h1>

      <!-- Блок ошибок — показывается если есть ошибки -->
      <?php if (!empty($errors)): ?>
        <div class="alert alert-error">
          <?php foreach ($errors as $error): ?>
            <p><?= htmlspecialchars($error) ?></p>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <!-- Форма регистрации -->
      <form class="form" method="POST" action="">

        <div class="form-group">
          <label class="form-label" for="name">Имя</label>
          <input class="form-input" type="text" id="name" name="name"
            value="<?= htmlspecialchars($name ?? '') ?>"
            placeholder="Введите ваше имя" required>
        </div>

        <div class="form-group">
          <label class="form-label" for="email">Email</label>
          <input class="form-input" type="email" id="email" name="email"
            value="<?= htmlspecialchars($email ?? '') ?>"
            placeholder="ваш@email.com" required>
        </div>

        <div class="form-group">
          <label class="form-label" for="password">Пароль</label>
          <input class="form-input" type="password" id="password" name="password"
            placeholder="Минимум 6 символов" required>
        </div>

        <div class="form-group">
          <label class="form-label" for="password_confirm">Повторите пароль</label>
          <input class="form-input" type="password" id="password_confirm"
            name="password_confirm" placeholder="Повторите пароль" required>
        </div>

        <button class="btn btn-primary" type="submit">
          Зарегистрироваться
        </button>

        <p class="auth-card__footer">
          Уже есть аккаунт? <a href="login.php">Войти</a>
        </p>

      </form>
    </div>
  </div>
</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>
