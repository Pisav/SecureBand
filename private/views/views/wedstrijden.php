<?php
include 'wedstrijd_header.php';
?>
<!doctype html>
<html lang="en">

    <section class="content_wedstrijd">
      <div class="content_kop">
        <h1>Wedstrijden</h1>
        <p>Hieronder zie je de aankomende Wedstrijden, en gespeelde wedstrijden.</p>
        </div>
<div class="grid">


		<?php
	$statement = get_wedstrijd();
		foreach ( $statement as $ajax ):?>
            <div class="wedstrijd arena modaal-knop">
                <h2><?php echo $ajax['kampioenschap'] ?> <em><?php echo $ajax['soort'] ?></em></h2>
                <p>
                     <?php echo $ajax['tegenstander'] ?>  <?php echo $ajax['uitslag'] ?> <?php echo"AFC Ajax" . "<br></br>" ?> <?php echo $ajax['minuten'] . " minuten"; ?><br/>

                </p>
                <section class="album modaalContent">
                  <h2><?php echo $ajax['kampioenschap'] ?> <em><?php echo $ajax['soort'] ?></em></h2>
                  <p>
                       <?php echo $ajax['tegenstander'] ?>  <?php echo $ajax['uitslag'] ?> <?php echo"AFC Ajax" . "<br></br>" ?> <?php echo $ajax['minuten'] . " minuten"; ?><br/>

                  </p>
                  </section>

            </div>

		<?php endforeach; ?>
</div>
    </section>

 <?php
		// include 'footer.php'; ?>
    <script type="text/javascript" src="script/modaal.js"></script>
</body>
</html>
