<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Osman Sefa</a>
                <ul class="navbar-nav mb-2 mb-lg-0 ">
                <?php foreach($top as $item): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $item . '.php'; ?>">
                            <?php echo $item; ?>
                        </a>
                     </li>
                <?php endforeach; ?>

                </ul>
            </div>
        </nav>
</header>