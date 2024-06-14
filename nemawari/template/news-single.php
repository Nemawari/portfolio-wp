<?php
// Get the custom field values
$date = get_post_meta( get_the_ID(), 'date', true );
$author = get_post_meta( get_the_ID(), 'author', true );
$maxmi = get_post_meta( get_the_ID(), 'maxmi', true );
$tel = get_post_meta( get_the_ID(), 'tel', true );
$mail = get_post_meta( get_the_ID(), 'mail', true );
$address = get_post_meta( get_the_ID(), 'address', true );
?>

<div class="custom-fields">
    <p><strong>Date:</strong> <?php echo $date; ?></p>
    <p><strong>Author:</strong> <?php echo $author; ?></p>
    <p><strong>Maxmi:</strong> <?php echo $maxmi; ?></p>
    <p><strong>Tel:</strong> <?php echo $tel; ?></p>
    <p><strong>Mail:</strong> <?php echo $mail; ?></p>
    <p><strong>Address:</strong> <?php echo $address; ?></p>
</div>