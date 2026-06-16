<?php 
$pageTitle = "Resources - Tools Hub";
include '../includes/data.php';    
include '../includes/header.php';   
include '../includes/navbar.php';   

foreach ($resources as $sectionTitle => $cards) {
    echo '<section class="section"><h2 class="section-title">' . htmlspecialchars($sectionTitle) . '</h2><div class="cards">';
    foreach ($cards as $card) {
        echo '<div class="card ' . $card['class'] . '"><div class="overlay"><h3>' . htmlspecialchars($card['name']) . '</h3><a href="' . $card['url'] . '" target="_blank" class="btn">View</a></div></div>';
    }
    echo '</div></section>';
}

include '../includes/footer.php';   
?>