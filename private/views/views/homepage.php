<?php
include 'header.php';
include 'sidebar.php';

?>



		<?php
		$statement = get_article();
		foreach ( $statement as $ajax ):?>
    <section class="content">
            <div class="ajax">
              <img src="<?php echo $ajax['image']?>" width="600" height="auto"/>
              <h1><?php echo $ajax['titel'] ?></h1>
                <p> <em><?php echo $ajax['beschrijving'] ?></em></p>
                <p>Gevonden op <?php echo $ajax['datum'] ?>

            </div>
            </section>
            <br>
		<?php endforeach; ?>


		<?php
		include 'footer.php'; ?>


</body>
</html>
