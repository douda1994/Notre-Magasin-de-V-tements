<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <header>
    <!-- ... (Votre en-tête) ... -->
  </header>

  <main>
    <section class="contact-form">
      <h2>Contactez-nous</h2>
      <form action="https://formspree.io/mehdie1994@gmail.com" method="POST">
        <div class="form-group">
          <label for="name">Nom:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit">Envoyer</button>
      </form>
    </section>
  </main>

  <footer>
    <!-- ... (Votre pied de page) ... -->
  </footer>

</body>
</html>
