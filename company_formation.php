 <?php
    $page_title = "Company Formation Services | Start Your Business Globally with Ease";
    $meta_description = "Start your company anywhere in the world with our expert company formation services. Register your business, manage compliance, and launch your startup quickly and securely.";
    $meta_keywords = "company formation, business registration, start a company, company incorporation, offshore company formation, global business setup, register company online, startup registration, business incorporation services, company setup services, international business formation, LLC formation, corporate services";
 ?>

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

 <?php include 'includes/header.php'; ?>

 <?php include 'includes/navbar.php'; ?>

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