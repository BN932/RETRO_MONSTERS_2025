<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RetroMonsters</title>
    <link rel="icon" type="image/png" href="images/favico.png" />

    <link
      href="https://fonts.googleapis.com/css2?family=Creepster&family=Roboto:wght@100;400;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css"
    />
    <script src="//unpkg.com/alpinejs" defer></script>
    <link
      rel="stylesheet"
      href="css/partials/node.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/nouislider/distribute/nouislider.min.js"></script>

  </head>
  <body class="bg-gray-800 text-white font-sans">
    <!-- Header -->
        <?php include '../app/views/templates/partials/_header.php'; ?>

    <!-- Main Content -->
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <?php include '../app/views/templates/partials/_main.php'; ?>
    <!-- Sidebar -->
        <?php include '../app/views/templates/partials/_aside.php'; ?>
    </div>
    <!-- Footer -->
        <?php include '../app/views/templates/partials/_footer.php'; ?>
  </body>
</html>