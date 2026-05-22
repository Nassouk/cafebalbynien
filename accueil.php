<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Association Café Balbynien</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --jaune: #F5C842;
            --jaune-fonce: #D4A800;
            --brun: #2C1F0E;
            --brun-doux: #5A3E25;
            --creme: #FBF5E6;
            --gris-clair: #F0EDE6;
        }

        * { box-sizing: border-box; }

        body {
            font-family: 'Lato', sans-serif;
            background-color: var(--creme);
            color: var(--brun);
            overflow-x: hidden;
        }

        /* ── NAVBAR ─────────────────────────────── */
        .navbar {
            background: var(--brun) !important;
            border-bottom: 4px solid var(--jaune);
        }
        .navbar-brand img { height: 52px; }
        .navbar .nav-link {
            color: #f0e6c8 !important;
            font-family: 'Lato', sans-serif;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            font-size: .85rem;
            transition: color .2s;
        }
        .navbar .nav-link:hover { color: var(--jaune) !important; }
        .navbar-toggler { border-color: var(--jaune); }
        .navbar-toggler-icon { filter: invert(1); }

        /* ── HERO ────────────────────────────────── */
        .hero {
            background: linear-gradient(135deg, var(--brun) 0%, var(--brun-doux) 100%);
            padding: 90px 0 70px;
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle at 20% 80%, rgba(245,200,66,.12) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(245,200,66,.08) 0%, transparent 50%);
        }
        .hero-logo {
            width: 150px;
            filter: drop-shadow(0 8px 24px rgba(0,0,0,.4));
            animation: floatLogo 4s ease-in-out infinite;
        }
        @keyframes floatLogo {
            0%,100% { transform: translateY(0); }
            50%      { transform: translateY(-8px); }
        }
        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2rem, 5vw, 3.5rem);
            color: var(--jaune);
            text-shadow: 0 2px 8px rgba(0,0,0,.3);
        }
        .hero p {
            color: #e8d9b5;
            font-size: 1.1rem;
            font-weight: 300;
            max-width: 540px;
        }
        .btn-jaune {
            background: var(--jaune);
            color: var(--brun);
            font-weight: 700;
            border: none;
            border-radius: 50px;
            padding: .7rem 2rem;
            font-size: .95rem;
            letter-spacing: .05em;
            text-transform: uppercase;
            transition: background .2s, transform .2s, box-shadow .2s;
            box-shadow: 0 4px 16px rgba(245,200,66,.35);
        }
        .btn-jaune:hover {
            background: var(--jaune-fonce);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(212,168,0,.45);
        }

        /* ── BANDEAU PROCHAINS ÉVÉNEMENTS ─────── */
        .bandeau-events {
            background: var(--jaune);
            padding: 12px 0;
            overflow: hidden;
        }
        .bandeau-events .ticker {
            white-space: nowrap;
            animation: ticker 28s linear infinite;
            font-weight: 700;
            color: var(--brun);
            font-size: .95rem;
            letter-spacing: .04em;
        }
        @keyframes ticker {
            from { transform: translateX(100vw); }
            to   { transform: translateX(-100%); }
        }

        /* ── SECTION TITRE ───────────────────── */
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.9rem;
            color: var(--brun);
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }
        .section-title::after {
            content: '';
            display: block;
            height: 4px;
            background: var(--jaune);
            border-radius: 2px;
            margin-top: 6px;
        }

        /* ── CARDS ACTIVITÉS ─────────────────── */
        .card-activite {
            background: #fff;
            border: none;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(44,31,14,.1);
            transition: transform .25s, box-shadow .25s;
            height: 100%;
        }
        .card-activite:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 36px rgba(44,31,14,.18);
        }
        .card-activite .card-icon {
            background: var(--jaune);
            width: 100%;
            padding: 30px 0;
            font-size: 3.5rem;
            text-align: center;
        }
        .card-activite .card-body { padding: 1.4rem; }
        .card-activite h5 {
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            color: var(--brun);
            margin-bottom: .5rem;
        }
        .card-activite p {
            font-size: .9rem;
            color: var(--brun-doux);
            line-height: 1.6;
        }

        /* ── SECTION BROCANTE ─────────────────── */
        .section-brocante {
            background: var(--brun);
            color: #f0e6c8;
            padding: 70px 0;
            position: relative;
            overflow: hidden;
        }
        .section-brocante::before {
            content: '';
            position: absolute;
            top: -60px; right: -60px;
            width: 300px; height: 300px;
            background: rgba(245,200,66,.06);
            border-radius: 50%;
        }
        .section-brocante h2 {
            font-family: 'Playfair Display', serif;
            color: var(--jaune);
        }
        .section-brocante p { color: #d9c9a8; font-weight: 300; }
        .badge-brocante {
            background: rgba(245,200,66,.15);
            border: 1px solid rgba(245,200,66,.35);
            color: var(--jaune);
            border-radius: 50px;
            padding: .45rem 1.1rem;
            font-size: .8rem;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            display: inline-block;
            margin: .3rem;
        }

        /* ── PROCHAINS ÉVÉNEMENTS CARDS ────── */
        .event-card {
            background: #fff;
            border-left: 5px solid var(--jaune);
            border-radius: 10px;
            padding: 1.2rem 1.5rem;
            box-shadow: 0 2px 12px rgba(44,31,14,.08);
            transition: border-color .2s, transform .2s;
        }
        .event-card:hover {
            border-left-color: var(--brun);
            transform: translateX(4px);
        }
        .event-date {
            font-size: .78rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: var(--brun-doux);
        }
        .event-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.1rem;
            color: var(--brun);
            margin: .2rem 0;
        }
        .event-lieu {
            font-size: .85rem;
            color: #888;
        }

        /* ── REJOINDRE ───────────────────────── */
        .section-rejoindre {
            background: linear-gradient(135deg, var(--jaune) 0%, var(--jaune-fonce) 100%);
            padding: 70px 0;
        }
        .section-rejoindre h2 {
            font-family: 'Playfair Display', serif;
            color: var(--brun);
            font-size: 2.2rem;
        }
        .section-rejoindre p { color: var(--brun-doux); }
        .btn-brun {
            background: var(--brun);
            color: var(--jaune);
            border: none;
            border-radius: 50px;
            padding: .75rem 2.2rem;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            transition: background .2s, transform .2s;
        }
        .btn-brun:hover {
            background: #1a1007;
            color: var(--jaune);
            transform: translateY(-2px);
        }

        /* ── FOOTER ──────────────────────────── */
        footer {
            background: var(--brun);
            color: #c9b990;
            border-top: 4px solid var(--jaune);
            padding: 40px 0 24px;
        }
        footer h6 {
            font-family: 'Playfair Display', serif;
            color: var(--jaune);
            margin-bottom: .8rem;
        }
        footer a { color: #c9b990; text-decoration: none; font-size: .9rem; }
        footer a:hover { color: var(--jaune); }
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,.1);
            margin-top: 30px;
            padding-top: 16px;
            font-size: .8rem;
            color: #8a7a5a;
            text-align: center;
        }

        /* ── DIVIDER ─────────────────────────── */
        .divider {
            height: 4px;
            background: linear-gradient(90deg, transparent, var(--jaune), transparent);
            border: none;
            opacity: 1;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            <!-- SVG inline du logo stylisé -->
            <svg width="52" height="52" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
                <circle cx="60" cy="60" r="58" fill="#2C1F0E"/>
                <polygon points="60,4 110,30 110,90 60,116 10,90 10,30" fill="#F5C842"/>
                <text x="60" y="24" text-anchor="middle" font-size="10" font-family="Lato,sans-serif" font-weight="700" fill="#2C1F0E">Association</text>
                <!-- tasse stylisée -->
                <ellipse cx="60" cy="85" rx="22" ry="5" fill="#2C1F0E" opacity=".5"/>
                <path d="M42 72 Q42 88 60 88 Q78 88 78 72 Z" fill="#2C1F0E"/>
                <ellipse cx="60" cy="72" rx="18" ry="5" fill="#D4A800"/>
                <path d="M78 74 Q88 74 88 80 Q88 86 78 85" stroke="#2C1F0E" stroke-width="3" fill="none"/>
                <!-- vapeur -->
                <path d="M52 66 Q50 60 54 54" stroke="#2C1F0E" stroke-width="2.5" fill="none" stroke-linecap="round"/>
                <path d="M60 64 Q58 57 62 50" stroke="#2C1F0E" stroke-width="2.5" fill="none" stroke-linecap="round"/>
                <path d="M68 66 Q66 60 70 54" stroke="#2C1F0E" stroke-width="2.5" fill="none" stroke-linecap="round"/>
            </svg>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto gap-2">
                <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="#activites">Activités</a></li>
                <li class="nav-item"><a class="nav-link" href="#brocantes">Brocantes</a></li>
                <li class="nav-item"><a class="nav-link" href="#evenements">Événements</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="container position-relative">
        <div class="row align-items-center gy-4">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="mb-3">Association<br>Café Balbynien</h1>
                <p class="mb-4">Un lieu de vie, de partage et de convivialité au cœur de Bobigny. Brocantes, marchés, ateliers et rencontres !</p>
                <a href="#evenements" class="btn btn-jaune me-2">Voir les évènements</a>
                <a href="#contact" class="btn btn-outline-light rounded-pill px-4">Nous rejoindre</a>
            </div>
            <div class="col-lg-6 text-center">
                <!-- Logo principal intégré en SVG grande taille -->
                <svg class="hero-logo" width="200" height="200" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="100" cy="100" r="96" fill="#2C1F0E" stroke="#F5C842" stroke-width="4"/>
                    <polygon points="100,8 182,52 182,148 100,192 18,148 18,52" fill="#F5C842"/>
                    <text x="100" y="38" text-anchor="middle" font-size="14" font-family="Lato,sans-serif" font-weight="700" fill="#2C1F0E">Association</text>
                    <!-- corps tasse -->
                    <path d="M68 110 Q65 145 100 148 Q135 145 132 110 Z" fill="#2C1F0E"/>
                    <ellipse cx="100" cy="110" rx="32" ry="10" fill="#D4A800"/>
                    <!-- soucoupe -->
                    <ellipse cx="100" cy="150" rx="38" ry="8" fill="#2C1F0E" opacity=".4"/>
                    <!-- anse -->
                    <path d="M132 115 Q155 115 155 130 Q155 145 132 142" stroke="#2C1F0E" stroke-width="5" fill="none" stroke-linecap="round"/>
                    <!-- vapeur -->
                    <path d="M84 104 Q80 92 86 80" stroke="#2C1F0E" stroke-width="3.5" fill="none" stroke-linecap="round"/>
                    <path d="M100 100 Q96 86 102 72" stroke="#2C1F0E" stroke-width="3.5" fill="none" stroke-linecap="round"/>
                    <path d="M116 104 Q112 92 118 80" stroke="#2C1F0E" stroke-width="3.5" fill="none" stroke-linecap="round"/>
                </svg>
                <p class="mt-3" style="color:#e8d9b5; font-family:'Playfair Display',serif; font-size:1.6rem; font-style:italic;">Café Balbynien</p>
            </div>
        </div>
    </div>
</section>

<!-- BANDEAU TICKER -->
<div class="bandeau-events">
    <div class="ticker">
        🗓️ Prochaine brocante : 4 Juin 2026 — Place du village &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
        📞 Nous contacter : 07 x xx xx x &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    </div>
</div>

<!-- ACTIVITÉS -->
<section class="py-5" id="activites">
<div class="container py-3">
    <div class="text-center mb-5">
        <span class="section-title">Nos Brocantes Passées</span>
        <p class="text-muted" style="max-width:560px; margin:0 auto;">Retour en images sur nos précédentes éditions. Merci à tous les exposants et visiteurs !</p>
    </div>
    <div class="row g-4">

        <div class="col-sm-6 col-lg-4">
            <div class="card-brocante-passee">
                <div class="card-brocante-img">
                    <!-- Remplacer src par la vraie photo -->
                    <img src="https://placehold.co/600x380/2C1F0E/F5C842?text=Photo+Brocante" alt="Brocante Mai 2025" class="w-100">
                </div>
                <div class="card-brocante-info">
                    <div class="cb-date">🗓️ 18 Mai 2025</div>
                    <div class="cb-titre">Brocante du Printemps</div>
                    <div class="cb-lieu">📍 Place de bbsh</div>
                    <div class="cb-stats">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="card-brocante-passee">
                <div class="card-brocante-img">
                    <img src="https://placehold.co/600x380/2C1F0E/F5C842?text=Photo+Brocante" alt="Brocante Sept 2024" class="w-100">
                </div>
                <div class="card-brocante-info">
                    <div class="cb-date">🗓️ 15 Septembre 2024</div>
                    <div class="cb-titre">Vide-Grenier d'Automne</div>
                    <div class="cb-lieu">📍 Place de bbsh</div>
                    <div class="cb-stats">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="card-brocante-passee">
                <div class="card-brocante-img">
                    <img src="https://placehold.co/600x380/2C1F0E/F5C842?text=Photo+Brocante" alt="Brocante Juin 2024" class="w-100">
                </div>
                <div class="card-brocante-info">
                    <div class="cb-date">🗓️ 9 Juin 2024</div>
                    <div class="cb-titre">Grande Brocante Annuelle</div>
                    <div class="cb-lieu">📍 Place de bbsh</div>
                    <div class="cb-stats">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</section>
<hr class="divider">

<!-- SECTION BROCANTE -->
<section class="section-brocante" id="brocantes">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-7">
                <h2 class="mb-3">Prochaine Brocante</h2>
                <p class="mb-4" style="font-size:1.05rem;">Notre événement phare rassemble des dizaines d'exposants et des centaines de visiteurs. Mobilier ancien, livres, vêtements, vaisselle, bibelots, assez pour tous les goûts et budgets.</p>
                <div class="mb-4">
                    <span class="badge-brocante">📍 Place du village</span>
                    <span class="badge-brocante">🗓️ 14 Juin 2026</span>
                    <span class="badge-brocante">🕘 9h – 18h</span>
                </div>
                <a href="#contact" class="btn btn-jaune">S'inscrire comme exposant</a>
            </div>
            <div class="col-lg-5 text-center">
                <div >
                    <p >METTRE PHOTO DE LA BROCANTE</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ÉVÉNEMENTS -->
<section class="py-5 bg-white" id="evenements">
    <div class="container py-3">
        <div class="text-center mb-5">
            <span class="section-title">Prochains Événements</span>
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="event-card">
                    <div class="event-date">🗓️ Samedi 7 Juin 2026</div>
                    <div class="event-title">Café-Rencontre Mensuel</div>
                    <div class="event-lieu">📍 Salle communautaire — 10h00</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="event-card">
                    <div class="event-date">🗓️ Dimanche 14 Juin 2026</div>
                    <div class="event-title">Grande Brocante Annuelle</div>
                    <div class="event-lieu">📍 Place du village — 9h00 à 18h00</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- REJOINDRE -->
<section class="section-rejoindre text-center" id="contact">
    <div class="container">
        <h2 class="mb-3">Rejoignez l'aventure !</h2>
        <p class="mb-4" style="max-width:500px; margin:0 auto 1.5rem; font-size:1.05rem;">L'association est ouverte à tous. Bénévolat, participation aux événements… chaque contribution compte !</p>
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-5">
            <a href="mailto:contact@cafebalbynien.fr" class="btn btn-brun">
                ✉️ Nous contacter
            </a>

        </div>
        <div class="row justify-content-center g-3" style="max-width:500px; margin:0 auto;">
            <div class="col-4 text-center">
                <div style="font-size:2rem;">📧</div>
                <small style="font-size:.8rem; color:var(--brun-doux);">contact@<br>cafebalbynien.fr</small>
            </div>
            <div class="col-4 text-center">
                <div style="font-size:2rem;">📞</div>
                <small style="font-size:.8rem; color:var(--brun-doux);">06 XX XX XX XX</small>
            </div>
            <div class="col-4 text-center">
                <div style="font-size:2rem;">📍</div>
                <small style="font-size:.8rem; color:var(--brun-doux);">Bobigny,<br>93000</small>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer id="footer">
    <div class="container">
        <div class="row g-4 justify-content-center text-center">
            <div class="col-md-4">
                <h6>Association Café Balbynien</h6>
                <p style="font-size:.88rem; font-weight:300; line-height:1.8; color:#b0a07a;">Un espace de partage, de convivialité et d'entraide au cœur de Balbigny depuis des années.</p>
            </div>
            <div class="col-md-4">
                <h6>Navigation</h6>
                <ul class="list-unstyled" style="line-height:2;">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#activites">Nos activités</a></li>
                    <li><a href="#brocantes">Brocantes</a></li>
                    <li><a href="#evenements">Événements</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            © 2026 — Association Café Balbynien — Tous droits réservés
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>