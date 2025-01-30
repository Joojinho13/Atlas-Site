<?php
function renderCard($image, $title, $description) {
    echo "
    <div class='card'>
        <img src='$image' alt='$title'>
        <div class='card-content'>
            <h3>$title</h3>
            <p>$description</p>
        </div>
    </div>";
}
?>
