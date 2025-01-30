<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./movies.css" />
    <link rel="stylesheet" href="./shows.css" />
    <meta name="description" content="">
    <meta name="keywords" content="streaming vidéo, ProVision, plateforme de streaming, apprentissage en ligne, innovation, formation en ligne, vidéos éducatives, contenus interactifs, streaming HD, cours en ligne, vidéos à la demande, e-learning, tutoriels en ligne, innovation technologique, savoir-faire, streaming pédagogique, vidéos professionnelles, contenus exclusifs, plateforme de formation, éducation numérique, skill learning, amélioration des compétences, vision professionnelle, diffusion en continu">
    <meta name="author" content="Souleimane, Hugo, Nassim">
    <title>Series | ProVision</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<?php
// Import des données
require_once __DIR__ . '/../../data/shows.php';
?>
<header>
    <!-- Include : Barre de Navigation -->
    <?php include_once __DIR__ . '/../../includes/nav.php'; ?>
    <div class="header-banner">
        <div class="slider">
            <div class="slide"></div><div class="slide"></div><div class="slide"></div><div class="slide"></div>
        </div>
        <div>
            <div class="banner-txt">
                <h1 class="banner-title">ProVision</h1>
                <p class="banner-paragraph">Un monde d'histoires inconnus à la portée d'un clic!</p>
                <div>
                    <button class="btn-subscribe">s'abonner</button>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="newAddition sectionsMain">
        <div class="subscribeHome-text sectionsMain_txt">
            <h3>Nouvelles sorties</h3>
        </div>

        <div class="home-cards_container">
            <?php foreach ($newAddition as $show): ?>
                <div class="moviesCard">
                    <div class="movies-img">
                        <img src="<?php echo htmlspecialchars($show['showImg'] ?: 'https://upload.wikimedia.org/wikipedia/commons/6/65/No-Image-Placeholder.svg'); ?>"
                             alt="<?php echo htmlspecialchars($show['showName']); ?>"
                             title="<?php echo htmlspecialchars($show['showName']); ?>">
                    </div>
                    <div class="moviesCardDetails">
                        <span><i class="fa-solid fa-clock"></i><?php echo htmlspecialchars($show['showTiming']); ?></span>
                        <span><i class="fa-solid fa-eye"></i><?php echo htmlspecialchars($show['showViewCount']); ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="trendingNow sectionsMain">
        <div class="subscribeHome-text sectionsMain_txt">
            <h3>Top des plus populaires</h3>
        </div>

        <div class="home-cards_container">
            <?php foreach ($trendingNow as $show): ?>
                <div class="moviesCard">
                    <div class="movies-img">
                        <img src="<?php echo htmlspecialchars($show['showImg'] ?: 'https://upload.wikimedia.org/wikipedia/commons/6/65/No-Image-Placeholder.svg'); ?>"
                             alt="<?php echo htmlspecialchars($show['showName']); ?>"
                             title="<?php echo htmlspecialchars($show['showName']); ?>">
                    </div>
                    <div class="moviesCardDetails">
                        <span><i class="fa-solid fa-clock"></i><?php echo htmlspecialchars($show['showTiming']); ?></span>
                        <span><i class="fa-solid fa-eye"></i><?php echo htmlspecialchars($show['showViewCount']); ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="cards-categories sectionsMain">
        <div class="cards-categories-txt  sectionsMain_txt">
            <h3>Explorez nos catégories</h3>
        </div>
        <div class="home-cards_container">
            <!-- COMÉDIE -->
            <div class="card">
                <div class="card-img">
                    <div class="card-img_row">
                        <img src="/assets/img/Shows/BigBang_theory.png"
                             alt="Big Bang Theory (2007)" title="Big Bang Theory (2007)">
                        <img src="/assets/img/Shows/shameless.png"
                             alt="Shameless (2011)" title="Shameless (2011)">
                    </div>
                    <div class="card-img_row">
                        <img src="/assets/img/Shows/the_office.png"
                             alt="The Office (2005)" title="The Office (2005)">
                        <img src="/assets/img/Shows/Larry_et_sont_nombril.png"
                             alt="Larry et sont nombril (2000)" title="Larry et sont nombril (2000)">
                    </div>
                </div>
                <div class="card-explore">
                    <h6>Comédie</h6>
                    <button><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
            <!-- ACTION -->
            <div class="card">
                <div class="card-img">
                    <div class="card-img_row">
                        <img src="/assets/img/Shows/see.png"
                             alt="See  (2019)" title="See  (2019)">
                        <img src="/assets/img/Shows/the_last_of_us.png"
                             alt="The Last Of Us (2023)" title="The Last Of Us (2023)">
                    </div>
                    <div class="card-img_row">
                        <img src="/assets/img/Shows/alice.png"
                             alt="Alice In Borderland (2020)" title="Alice In Borderland (2020)">
                        <img src="/assets/img/Shows/fallout.png"
                             alt="Fallout (2024)" title="Fallout (2024)">
                    </div>
                </div>
                <div class="card-explore">
                    <h6>Action</h6>
                    <button><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
            <!-- DRAME -->
            <div class="card">
                <div class="card-img">
                    <div class="card-img_row">
                        <img src="/assets/img/Shows/shogun.png"
                             alt="shogun (2024)" title="shogun (2024)">
                        <img src="/assets/img/Shows/chernobyl.png"
                             alt="chernobyl (2019)" title="chernobyl (2019)">
                    </div>
                    <div class="card-img_row">
                        <img src="/assets/img/Shows/dark_matter.png"
                             alt="dark matter (2024)" title="dark matter (2024)">
                        <img src="/assets/img/Shows/the_rig.png"
                             alt="the rig (2023)" title="the rig (2023)">
                    </div>
                </div>
                <div class="card-explore">
                    <h6>Drame</h6>
                    <button><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
            <!-- SCI-FI -->
            <div class="card">
                <div class="card-img">
                    <div class="card-img_row">
                        <img src="/assets/img/Shows/dark.png"
                             alt="dark (2017)" title="dark (2017)">
                        <img src="/assets/img/Shows/stranger_things.png"
                             alt="stranger things (2016)" title="stranger things (2016)">
                    </div>
                    <div class="card-img_row">
                        <img src="/assets/img/Shows/snowpiercer.png"
                             alt="snowpiercer (2020)" title="snowpiercer (2020)">
                        <img src="/assets/img/Shows/black_mirror.png"
                             alt="black mirror (2011)" title="black mirror (2011)">
                    </div>
                </div>
                <div class="card-explore">
                    <h6>Sci-Fi</h6>
                    <button><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Include : Footer -->
<?php include_once __DIR__ . '/../../includes/footer.php'; ?>

<!-- Icônes sur fontawesome.com -->
<script src="https://kit.fontawesome.com/386dcd1ba2.js" crossorigin="anonymous"></script>

<!-- Menu hamburger pour le responsive -->
<script>
    document.querySelector('.nav-toggle').addEventListener('click', () => {
        document.querySelector('.header-list').classList.toggle('active');
    });
</script>
</body>
</html>