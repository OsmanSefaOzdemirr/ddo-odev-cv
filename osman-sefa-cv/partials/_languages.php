<?php foreach ($languages as $lang): ?>
        <div class="col-md-6">
          <div class="card h-100 text-white <?= $lang["color"] ?>">
            <div class="card-body">
              <h5 class="card-title"><i class="<?= $lang["icon"] ?>"></i> <?= $lang["name"] ?></h5>
              <p class="card-text"><?= $lang["description"] ?></p>
            </div>
            <div class="card-footer">Seviye: <strong><?= $lang["level"] ?></strong></div>
          </div>
        </div>
      <?php endforeach; ?>