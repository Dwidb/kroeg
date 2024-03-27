<!DOCTYPE html>
<html>
<head>
    <title>CRUD Kroeg</title>
</head>
<body>
    <h1>CRUD Kroeg</h1>

    <!-- Formulieren voor CRUD-operaties -->
    <!-- Action-attributen wijzen naar de juiste PHP-bestanden -->

    <!-- Toevoegen -->
    <form action="create.php" method="post">
        <!-- Invoervelden -->
        <input type="submit" value="Toevoegen">
    </form>

    <!-- Tonen -->
    <div>
        <?php include 'read.php'; ?>
    </div>

    <!-- Bijwerken -->
    <form action="update.php" method="post">
        <!-- Invoervelden -->
        <input type="submit" value="Bijwerken">
    </form>

    <!-- Verwijderen -->
    <form action="delete.php" method="post">
        <!-- Invoervelden -->
        <input type="submit" value="Verwijderen">
    </form>
</body>
</html>
