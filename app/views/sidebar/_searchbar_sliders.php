<form
          action="/recherche-criteres"
          method="GET"
          class="bg-gray-700 rounded-lg shadow-lg p-4"
        >
          <h2 class="font-bold text-lg mb-4">Filtrer par Critères</h2>

          <!-- Type -->
          <select name="type" class="w-full p-2 mb-4 bg-gray-800 rounded">
            <option value="" disabled selected>Choisir un type</option>
            <?php 
            foreach ($types as $type) : ?>
            <option value="<?php echo $type['type_name'];?>"><?php echo $type['type_name'];?></option>
            <?php endforeach ?>
          </select>

          <!-- Rareté -->
          <select name="rarete" class="w-full p-2 mb-4 bg-gray-800 rounded">
            <option value="" disabled selected>Choisir une rareté</option>
            <?php 
            foreach ($rareties as $rarety) : ?>
            <option value="<?php echo $rarety['rarety_name'];?>"><?php echo $rarety['rarety_name'];?></option>
            <?php endforeach ?>
          </select>

          <!-- PV -->
          <div class="bg-gray-700 rounded-lg shadow-lg p-4 mb-4">
            <h2 class="font-bold text-lg mb-4">Filtrer par PV</h2>
            <div id="slider-pv" class="mb-4"></div>
            <span id="slider-pv-value"></span>
            <input type="hidden" id="min-pv" name="min_pv" />
            <input type="hidden" id="max-pv" name="max_pv" />
          </div>

          <!-- Attaque -->
          <div class="bg-gray-700 rounded-lg shadow-lg p-4 mb-4">
            <h2 class="font-bold text-lg mb-4">Filtrer par Attaque</h2>
            <div id="slider-attaque" class="mb-4"></div>
            <span id="slider-attaque-value"></span>
            <input type="hidden" id="min-attaque" name="min_attaque" />
            <input type="hidden" id="max-attaque" name="max_attaque" />
            
          </div>

          <button
            type="submit"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-full"
          >
            Appliquer les filtres
          </button>
          
</form>
<script src="../app/js/app.js"></script>