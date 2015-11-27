<!doctype html>
<html>

	<?php include "includes/head.php" ?>

	<?php $pageName="Inloggen" ?>

	<body>

    	<?php include "includes/header.php" ?>

    	<!-- content -->
        <main id="content">
            <div class="container">
		        <h1>Inloggen</h1>

				<form action="" method="post">
					<div>
						<label for="email">Emailadres:</label>
						<input name="email" type="email" id="email">
					</div>
					
					<div>
						<label for="password">Wachtwoord:</label>
						<input name="password" type="password" id="password">
					</div>

					<div>
						<input type="submit" value="Inloggen">
					</div>
				</form>

				<a href="registreren.php">registreren</a>

            </div> <!-- /.container -->
        </main>

        <?php include "includes/footer.php" ?>

</body>
</html>
