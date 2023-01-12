<?php
 

$db = new PDO('mysql:host=localhost;dbname=todolist;charset=utf8', 'root', '');
 
if (isset($_POST['creer_tache'])) {
    if (empty($_POST['creer_tache'])) { 
    } else {
        $tache = $_POST['creer_tache'];
        $db->exec("INSERT INTO tache(tache) VALUES('$tache')");
    }
}

?>
 
<link rel="stylesheet" href="index.css"/>
 
<div class="header">
    <p class="header_titre">didilist </p>
</div>
 
<form class="taches_input" method="post" action="index.php">
 
 
    <input id="inserer" type="text" name="creer_tache"/>
    <button id="envoyer">entrer</button>
</form>
 
    <?php
    $reponse = $db->query('Select * from tache');
    while ($taches = $reponse->fetch()) { 
        ?>
        <tr>
            <td><?php echo $taches['Id'] ?></td>
            <td><?php echo $taches['tache'] ?></td>
        </tr>}
        <?php
    }
    
    ?>
</table>

