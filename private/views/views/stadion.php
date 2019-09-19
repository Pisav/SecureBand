<?php
include 'header.php';
include 'sidebar.php';

?>



		<?php
		$statement = get_stadion();
		foreach ( $statement as $ajax ):?>
    <section class="content_stadion">
            <div class="stadion">
              <h1 class="titel">ARENA</h1>
              <img class="arena modaal-knop" src="<?php echo $ajax['image']?>" width="400" height="auto" />
              <img class="arena_2" src="<?php echo $ajax['image_2']?>" width="600" height="auto" />
              <h1><?php echo $ajax['titel'] ?></h1>
                <p> <em class="arena_tekst"><?php echo $ajax['beschrijving'] ?></em></p>
            	<section class="album modaalContent">
                  <img src="<?php echo $ajax['image']?>" width="400" height="auto" />
                </section>

            </div>
            </section>
            <br>
		<?php endforeach; ?>

		<?php
		include 'footer.php'; ?>

    <script type="text/javascript" src="script/modaal.js"></script>

</body>
</html>
