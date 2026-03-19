<!DOCTYPE html>
<html lang="zxx">
 <?php
// Company Formation Solutions - Data Configuration
$regions = [
    'Europe' => [
        'United Kingdom' => ['England & Wales', 'Scotland', 'Northern Ireland'],
        'Germany' => ['GmbH', 'AG', 'UG'],
        'Netherlands' => ['BV', 'NV'],
        'France' => ['SARL', 'SAS', 'SA'],
        'Spain' => ['SL', 'SA'],
        'Ireland' => ['Limited Company', 'DAC'],
        'Luxembourg' => ['SARL', 'SA'],
        'Switzerland' => ['GmbH', 'AG'],
    ],
    'North America' => [
        'Arkansas'         => ['LLC', 'Corporation', 'Partnership'],
        'Texas'            => ['LLC', 'Corporation', 'LP', 'LLP'],
        'New York'         => ['LLC', 'Corporation', 'LP'],
        'Delaware'         => ['LLC', 'Corporation', 'LP', 'LLP'],
        'Ontario'          => ['Corporation', 'LLC', 'Partnership'],
        'British Columbia' => ['Corporation', 'LLC', 'Society'],
    ],
    'Central America' => [
        'Panama'           => ['SA', 'LLC', 'Foundation'],
        'Costa Rica'       => ['SA', 'SRL'],
        'Belize'           => ['IBC', 'LLC'],
        'Guatemala'        => ['SA', 'SRL'],
    ],
    'South America' => [
        'Brazil'    => ['Ltda', 'SA', 'EIRELI'],
        'Colombia'  => ['SAS', 'SA', 'Ltda'],
        'Chile'     => ['SpA', 'SA', 'Ltda'],
        'Argentina' => ['SA', 'SRL'],
        'Uruguay'   => ['SA', 'SRL'],
    ],
    'Asia' => [
        'Singapore'   => ['Pte Ltd', 'LLC', 'LLP'],
        'Hong Kong'   => ['Limited', 'LLC'],
        'UAE / Dubai' => ['LLC', 'Free Zone', 'Offshore'],
        'Japan'       => ['KK', 'GK'],
        'India'       => ['Pvt Ltd', 'LLP', 'OPC'],
        'Malaysia'    => ['Sdn Bhd', 'Bhd'],
    ],
    'Africa' => [
        'South Africa' => ['Pty Ltd', 'Inc', 'CC'],
        'Nigeria'      => ['Ltd', 'PLC'],
        'Mauritius'    => ['GBC', 'LLC', 'Foundation'],
        'Kenya'        => ['Ltd', 'LLP'],
    ],
    'Australia and the Pacific' => [
        'Australia'   => ['Pty Ltd', 'Ltd', 'Trust'],
        'New Zealand' => ['Ltd', 'LP', 'Trust'],
        'Fiji'        => ['LLC', 'Ltd'],
    ],
];

// Determine active region
$active_region = $_GET['region'] ?? 'Europe';
if (!array_key_exists($active_region, $regions)) {
    $active_region = 'Europe';
}
$jurisdictions = $regions[$active_region];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vlogi - Personal Blog Template">
    <meta name="keywords" content="blog,personal,photography,food,travel,agency,portfolio,developer,photographer">
    <title>Networking - Company Formation</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
 

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/fonts/flaticon_networking.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fonts/typography-1.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/elements/videos.css">
    <link rel="stylesheet" href="assets/css/elements/about-us.css">
    <link rel="stylesheet" href="assets/css/elements/contact.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/dark-light.css">
    <link rel="stylesheet" href="assets/css/styles.css"> 
    <link rel="stylesheet" href="assets/css/responsive.css"> 
    <link rel="stylesheet" href="assets/css/magnific-popup.css"> 
    <link rel="stylesheet" href="assets/css/elements/category.css">
    <link rel="stylesheet" href="assets/css/elements/posts-categories.css"> 
    <link rel="stylesheet" href="assets/css/elements/posts.css">
    <link rel="stylesheet" href="assets/css/elements/tags.css">
    <link rel="stylesheet" href="assets/css/elements/populer-posts.css">
    <link rel="stylesheet" href="assets/css/elements/instagram.css">
    <link rel="stylesheet" href="assets/css/elements/post-slider.css">
    <link rel="stylesheet" href="assets/css/elements/acmeticker.css">
    <link rel="stylesheet" href="assets/css/elements/details.css">
     
     
</head>
<body class="vlo-marketing">
    <header class="vlo-header-1">
        <div class="container">
            <div class="vlo-header-inner">
                <div class="vlo-logo-wrap">
                    <a href="index.php" class="vlo-logo">
                        <img src="assets/images/logo/networking.svg" alt="logo">
                        <!-- <img src="assets/images/logo/logo-4-white.svg" alt="logo"> -->
                    </a>
                </div>
                
                <nav class="vlo-main-menu">
                    <div class="vlo-offcanvas-wrap">
                        <div class="form-check form-switch vlo-color-mode d-none">
                            <input type="checkbox" class="form-check-input" id="darkSwitch">
                            <label class="custom-control-label" for="darkSwitch"></label>
                        </div>
                        <button class="mobile-menu-icon" aria-label="Main Menu Icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <ul class="nav-menu">
                        <li class=""><a href="marketing-about.php">About</a></li>
                        
                        <li class=""><a href="buy-sell-marketing.php">Buy/Sell Bussinesses</a></li>
                                               
                        <li class="menu-item-has-children"><a href="#">Services</a>
                            <ul class="sub-menu">
                                <li><a href="company_formation.php">Company Formation</a></li>
                                <li><a href="licensing_regulation.php">Licensing & Regulations</a></li>
                                <li><a href="payment-by-networking.php">Payment By Networking</a></li>
                                <li><a href="tech-by-networking.php">Tech By Networking</a></li> 
                            </ul>
                        </li>

                        <li class=""><a href="partnership.php">Partnership</a></li>
                        <li class=""><a href="article.php">Article</a></li> 
                        <li><a class="vlo-global-btn header-btn" href="contact.php">Contact Me</a></li>

                    </ul>
                </nav>
            </div>
        </div>  
    </header>
  
<!-- ── Hero ── -->
<div class="hero">
    <h1>Company Formation Solutions</h1>
    <p>Our company specializes in seamless company formation services across multiple worldwide jurisdictions. We guide you through every step, offering expert advice and ensuring full compliance with local regulations. Whether you're starting a new venture or expanding internationally, we provide tailored solutions to fit your needs.</p>
    <p class="highlight">Explore the unique benefits of each jurisdiction and discover the ideal location to grow your business with confidence. Let us simplify your journey to global success!</p>
</div>

<p class="explorer-label">Click to explore and compare our available ventures</p>

<!-- ── Explorer ── -->
<div class="explorer">

    <!-- Sidebar: regions -->
    <nav class="sidebar">
        <?php foreach (array_keys($regions) as $region): ?>
            <a href="?region=<?= urlencode($region) ?>"
               class="<?= $region === $active_region ? 'active' : '' ?>">
                <?= htmlspecialchars($region) ?>
            </a>
        <?php endforeach; ?>
    </nav>

    <!-- Jurisdiction list -->
    <div class="panel">
        <div class="jurisdictions-grid">
            <?php foreach ($jurisdictions as $jurisdiction => $entities): ?>
                <div class="jurisdiction-item">
                    <button class="jurisdiction-btn"
                            onclick="openModal(
                                <?= json_encode($jurisdiction) ?>,
                                <?= json_encode($active_region) ?>,
                                <?= json_encode($entities) ?>
                            )">
                        <?= htmlspecialchars($jurisdiction) ?>
                    </button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>

<!-- ── Modal ── -->
<div class="modal-overlay" id="modalOverlay" onclick="closeModal(event)">
    <div class="modal">
        <button class="modal-close" onclick="closeModal(null)">&#x2715;</button>
        <h2 id="modalTitle"></h2>
        <div class="region-label" id="modalRegion"></div>
        <h3>Available Entity Types</h3>
        <div class="entity-list" id="modalEntities"></div>
        <div class="modal-info">
            Our experts will guide you through selecting the most suitable entity type for your business objectives, ensuring full regulatory compliance and optimal tax positioning.
        </div>
        <button class="cta-btn">Request a Consultation</button>
    </div>
</div>

 
     <footer class="vlo-footer-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-logo">
                        <a href="index-2.html"><img src="assets/images/logo/networking-white.svg" alt="logo"></a>
                        <p>Explicabo cursus veniam Ipsa rem excepturi netus distinctio et Hac expedita pharetra scelerisque imperdiet porttitor fugiat commodo conubia dolorem integer at thrive digital we're about delivering top-notch service to our clients.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 col-sm-6 col-6">
                    <div class="footer-categories-widget">
                        <h5 class="footer-menu-name">Services</h5>
                        <ul class="menu-list">
                            <li><a href="company_formation.php"> Company Formation</a></li>
                            <li><a href="licensing_regulation.php"> Licensing & Regulation</a></li>
                            <li><a href="payment-by-networking.php">Payment By Networking</a></li>
                            <li><a href="tech-by-networking.php"> Tech By Networking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="footer-pages-widget">
                        <h5 class="footer-menu-name">Pages</h5>
                        <ul class="menu-list">
                            <li><a href="marketing-about.php">About Me</a></li>
                            <li><a href="">News</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href=" ">Faq</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                    <div class="footer-support-widget">
                        <h5 class="footer-menu-name">Support</h5>
                        <ul class="menu-list">
                            <li><a href="">Support Center</a></li>
                            <li><a href="">Feedback</a></li>
                            <li><a href="">Terms & Condition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="vlo-footer-inner">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-social">
                            <a href=""><i class="flaticon-twitter"></i></a>
                            <a href=""><i class="flaticon-instagram"></i></a>
                            <a href=""><i class="flaticon-linkedin"></i></a>
                            <a href=""><i class="flaticon-facebook-app-symbol"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="footer-news-letter">
                            <div class="news-letter-heading">
                                <h2>Sign up to newsletter</h2>
                            </div>
                            <div class="news-letter-form">
                                <div class="vlo-footer-form">
                                    <form>
                                        <input type="email" id="email" name="email" placeholder="Email"  autocomplete="off">
                                        <button type="submit">
                                            <span>Submit</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right">
                Copyright © 2026 <a href="thecodude.html">Networking</a> Inc.
            </div>
        </div>
    </footer>

    <div class="toTop">
        <img src="assets/images/icon/rocket.svg" alt="toTop">
    </div>


    <!-- all plugins here -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/acmeticker.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script> 
    <!-- main js  -->
    <script src="assets/js/main.js"></script>
    
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon='{"version":"2024.11.0","token":"32aec90585da45268168b185959e7935","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body> 

<script>
function openModal(jurisdiction, region, entities) {
    document.getElementById('modalTitle').textContent = jurisdiction;
    document.getElementById('modalRegion').textContent = region;
    const el = document.getElementById('modalEntities');
    el.innerHTML = entities.map(e => `<span class="entity-tag">${e}</span>`).join('');
    document.getElementById('modalOverlay').classList.add('open');
}
function closeModal(e) {
    if (e === null || e.target === document.getElementById('modalOverlay')) {
        document.getElementById('modalOverlay').classList.remove('open');
    }
}
document.addEventListener('keydown', e => {
    if (e.key === 'Escape') document.getElementById('modalOverlay').classList.remove('open');
});
</script>
 
</html>