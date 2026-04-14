<div class="row g-4">

        <?php foreach ($movies as $movie): ?>

            <div class="col-md-4">

                <div class="card bg-secondary text-light h-100 shadow">

                    <div class="card-body">

                        <h4 class="card-title">
                            <?= $movie->title ?>
                        </h4>

                        <p>🎬 Regista: <?= $movie->director ?></p>

                        <p>📅 Anno: <?= $movie->year ?></p>

                        <p>
                            🎭 Generi:
                            <?php foreach ($movie->genres as $genre): ?>
                                <span class="badge bg-primary me-1">
                                    <?= $genre->genre ?>
                                </span>
                            <?php endforeach; ?>
                        </p>

                        <p>⭐ Voto: <?= $movie->getRating() ?></p>

                        <span class="badge bg-dark">
                            <?= $movie->centurySelector() ?>
                        </span>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>