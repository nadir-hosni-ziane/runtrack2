<!DOCTYPE html>
<html>
    <head>
    <title></title>
    <meta charset="utf-8">
    </head>
    
    <body>
        <?php
        $MyBool = true;
        $entier = 4;
        $str = "nadir";
        $float = 1.5;
        ?>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Booléen</td>
                    <td><?php echo gettype($MyBool) ?></td>
                    <td><?php echo $MyBool ?></td>
                </tr>
                <tr>
                    <td>Entier</td>
                    <td><?php echo gettype($entier) ?></td>
                    <td><?php echo $entier ?></td>
                </tr>
                <tr>
                    <td>Chaîne de caractères</td>
                    <td><?php echo gettype($str) ?></td>
                    <td><?php echo $str ?></td>
                </tr>
                <tr>
                    <td>Nombre décimal</td>
                    <td><?php echo gettype($float) ?></td>
                    <td><?php echo $float ?></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>