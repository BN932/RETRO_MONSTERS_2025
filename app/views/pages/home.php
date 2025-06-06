<!-- Section Monstre Aléatoire -->
<section class="mb-20">
    <?php include '../app/views/monsters/show.php';?>
</section>
<!-- Section Derniers monstres -->
<section class="mb-20">
          <h2 class="text-2xl font-bold mb-4 creepster">
            Derniers monstres ajoutés
          </h2>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php include '../app/views/monsters/index.php';?>
        </div>
</section>
