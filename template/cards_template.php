<?php
    $client = $db->users()->getClientById($_SESSION['id']);
    if (isset($_SESSION['total'])) {
        $total = $_SESSION['total'];
    }
    $cards = $db->cards()->getClientCards($client->getId());
?>

<section>

    <?php
    if (count(iterator_to_array($db->cards()->getClientCards($client->getId()), false)) == 0) {
        require "template/empty_cards_template.php";
        return;
    }
    ?>

    <form id="cards" method="POST" action="completed.php">
        <?php foreach($cards as $card): ?>
            <div class="card">
                <label for="card" hidden>Carta</label>
                <input type="radio" id="card" name="card" value="<?php echo $card->getId() ?>" checked>
                <?php echo 
                    "<h4>" . $card->getNumber() . "</h4>"
                    . '<div class="container">
                    <img src="./img/mix/svg/mastercard.svg" alt="mastercard"><h5>' . $card->getExpire_date()
                    . '</h5></div>';
                ?>
            </div>
        <?php endforeach; ?>

        <button type="button" onclick="document.location='new_card.php'">Aggiungi carta</button>
        <input type="submit" <?php if(!isset($_SESSION['total']) || !isset($_SESSION['address'])) {?> style="display: none" <?php } ?> value="Paga €<?php echo $total?>">
    </form>

</section>