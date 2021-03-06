<?php
/**
 * JMT
 * Février 2021
 * Formulaire d'ajout de proposition de journee par un agent (formproposition)
 * permet de saisir, sur une date sélectionnée dans le calendrier, la rédidence, le roulement, la journée concernée,
 * le commentaires lié à la proposition
 */

if (isset($_GET['dateproposition']))
{
  //récupération des paramètres de la proposition
  if(isset($_GET['idproposition'])) { $idproposition = $_GET['idproposition']; }
  else { $idpropositon = ''; }

   if(isset($_GET['idjournee'])) { $idjournee = $_GET['idjournee']; }
  else { $idjournee = ''; }

  //
  $mois = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
  $currentdate = $_GET['dateproposition'];

  $currentmonth = date('n', $currentdate) -1;
?>
  <div class="container" id="ajoutproposition">

      <div class="row text-center"><h4 class="col">Modifier ma proposition du <?= date('j', $currentdate). " " . $mois[$currentmonth] . " " . date('Y', $currentdate) ?></h4></div>
  
      <div class="row text-danger text-center p-1"><h3 id="message_form_proposition" class="col"><?= $_SESSION['message']; ?></h3></div>
      
      <form id="formproposition" method="post" action="index.php?page=modifier_proposition&idproposition=<?= $idproposition; ?>" > 
          <div class="row">
              <div class="form-group col border m-2 p-3">

                <label for="input_up">UP</label>
                <input id="input_up" type="text" class="form-control" name="idup" value="1" readonly>


                <label for="input_residence">Résidence</label>
                <input id="input_residence" type="text" class="form-control" name="idresidence" value="1" readonly>

                <label for="input_roulement">Roulement</label>
                <input id="input_roulement" type="text" class="form-control" name="idroulement" value="1" readonly>

                <label for="selection">Journée</label>
                <select id="selection" class="form-control" name="idjournee">
                  <?php foreach ($journees as $journee):
                    $heureps = new DateTime($journee->getHeureps());
                    $heurefs = new DateTime($journee->getHeurefs());
                    ?>
                    <option value="<?= $journee->getId(); ?>" <?php if ($idjournee == $journee->getId()) {echo "selected";} ?> ><?= $journee->getNomjournee() . " " . $heureps->format('H\hi') . " " . $journee->getLieups() . " - " . $heurefs->format('H\hi') . " " . $journee->getLieufs(); ?></option>
                  <?php endforeach; ?>
                </select>

                <label for="textarea_commentaires">Commentaires</label>
                <textarea id="textarea_commentaires" class="form-control" name="commentaires" rows="5"><?=$proposition->getCommentaires();?></textarea>

              </div>
          </div>
          
          <div class="col text-center">                
              <input type="submit" id="btn_modifier_proposition" class="btn btn-danger" name="modifier" value="Modifier">
              <a id="btn_connexion" href="index.php?page=mes propositions" class="btn btn-danger">Annuler</a>
          </div>
          
      </form>

          
  </div>
<?php
}
else
{
  $_SESSION['menu'] = array('calendrier', 'parametres', 'deconnexion');
  throw new Exception("Impossible d'afficher la page demandée");
}
?>