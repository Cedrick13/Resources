<?php
$pageTitle = "Resources";
include __DIR__ . '/../includes/data.php';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/navbar.php';

foreach ($resources as $sectionTitle => $cards) {
    echo '<section class="section"><h2 class="section-title">' . htmlspecialchars($sectionTitle) . '</h2><div class="cards">';
    foreach ($cards as $card) {
        echo '<div class="card ' . $card['class'] . '"><div class="overlay"><h3>' . htmlspecialchars($card['name']) . '</h3><a href="' . $card['url'] . '" target="_blank" class="btn">View</a></div></div>';
    }
    echo '</div></section>';
}

include __DIR__ . '/../includes/footer.php';
?>