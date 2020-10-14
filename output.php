
    <table border="1">
        <tr>
            <th>NameBook</th>
            <th>Author</th>
            <th>Yearpub</th>
            <th>NumPage</th>

        </tr>
        <?

        while ($book = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?=$books['NameBook']?></td>
                <td><?=$books['Author']?></td>
                <td><?=$books['Yearpub']?></td>
                <td><?=$books['NumPage']?></td>

            </tr>
            <?
        }
        ?>
    </table>

<?php


mysqli_close($link);

?>
    <?php
    include "Update.php"
    ?>
