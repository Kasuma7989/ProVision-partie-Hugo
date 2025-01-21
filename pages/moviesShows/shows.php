<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./movies.css" />
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
                        <img src="/assets/img/Movies/resize/Gladiator%20II%20(2024).webp"
                             alt="Gladiator II (2024)" title="Gladiator II (2024)">
                        <img src="/assets/img/Movies/resize/Top%20Gun-%20Maverick%20(2022).webp"
                             alt="Top Gun- Maverick (2022)" title="Top Gun- Maverick (2022)">
                    </div>
                    <div class="card-img_row">
                        <img src="/assets/img/Movies/resize/Everything%20Everywhere%20All%20at%20Once%20(2022).webp"
                             alt="Everything Everywhere All at Once (2022)" title="Everything Everywhere All at Once (2022)">
                        <img src="/assets/img/Movies/resize/Bullet%20Train%20(2022).webp"
                             alt="Bullet Train (2022)" title="Bullet Train (2022)">
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
                        <img src="/assets/img/Movies/resize/Oppenheimer%20(2023).webp"
                             alt="Oppenheimer (2023)" title="Oppenheimer (2023)">
                        <img src="/assets/img/Movies/resize/Killers%20of%20the%20Flower%20Moon%20(2023).webp"
                             alt="Killers of the Flower Moon (2023)" title="Killers of the Flower Moon (2023)">
                    </div>
                    <div class="card-img_row">
                        <img src="/assets/img/Movies/resize/The%20Whale%20(2022).webp"
                             alt="The Whale (2022)" title="The Whale (2022)">
                        <img src="/assets/img/Movies/resize/All%20Quiet%20on%20the%20Western%20Front%20(2022).webp"
                             alt="All Quiet on the Western Front (2022)" title="All Quiet on the Western Front (2022)">
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
                        <img src="/assets/img/Movies/resize/Avatar-%20The%20Way%20of%20Water%20(2022).webp"
                             alt="Avatar- The Way of Water (2022)" title="Avatar- The Way of Water (2022)">
                        <img src="/assets/img/Movies/resize/The%20Batman%20(2022).webp"
                             alt="The Batman (2022)" title="The Batman (2022)">
                    </div>
                    <div class="card-img_row">
                        <img src="/assets/img/Movies/resize/Deadpool%20&%20Wolverine%20(2024).webp"
                             alt="Deadpool & Wolverine (2024)" title="Deadpool & Wolverine (2024)">
                        <img src="/assets/img/Movies/resize/Dune-%20Part%20Two%20(2024).webp"
                             alt="Dune- Part Two (2024)" title="Dune- Part Two (2024)">
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