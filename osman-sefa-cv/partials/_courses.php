<?php foreach ($courses as $course): ?>
        <div class="col-md-4">
          <div class="card h-100">
            <div class="card-body">
              <h5><?= $course["title"] ?></h5>
              <span class="language-tag"><i class="<?= $course["icon"] ?>"></i> <?= $course["language"] ?></span>
              <p class="mt-3"><?= $course["description"] ?></p>
            </div>
            <div class="card-footer">Dönem: <?= $course["term"] ?></div>
          </div>
        </div>
      <?php endforeach; ?>