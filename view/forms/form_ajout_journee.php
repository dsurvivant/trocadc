 <?php
 if(isset($_SESSION['message']))
    {$error = $_SESSION['message'];}
  else
    {$error='';}
?>

<div class="text-center text-danger m-2"><?= $error ?></div>

<form id="formajouterjournee" method="post" action="index.php?page=ajouterjournee">
    <div class="input-group">
        <div class="input-group-prepend mb-2"><span class="input-group-text">UP</span></div>
        <input type="text" class="form-control mb-2" id="up" value="1" maxlength="11" name="idup" readonly>  
    </div>

    <div class="input-group">
        <div class="input-group-prepend mb-2"><span class="input-group-text">Résidence</span></div>
        <input type="text" class="form-control mb-2" id="residence" name="idresidence" maxlength="11" value="1" readonly>
    </div>

	<div class="input-group">
        <div class="input-group-prepend mb-2"><span class="input-group-text">Roulement</span></div>
        <input type="text" class="form-control mb-2" id="noroulement" value="1" maxlength="11" name="noroulement" readonly>  
    </div>

    <div class="input-group">
        <div class="input-group-prepend mb-2"><span class="input-group-text">Journée</span></div>
        <input type="text" class="form-control mb-2" id="nomjournee" name="nomjournee" maxlength="10">                
    </div>

    <div class="input-group">
        <div class="input-group-prepend mb-2"><span class="input-group-text">Heure PS</span></div>
        <input type="time" class="heurejournee form-control mb-2" id="heureps" name="heureps" maxlength="5">                
    </div>

    <div class="input-group">
        <div class="input-group-prepend mb-2"><span class="input-group-text">Lieu PS</span></div>
        <input type="text" class="form-control mb-2" id="lieups" name="lieups" maxlength="30">                
    </div>

    <div class="input-group">
        <div class="input-group-prepend mb-2"><span class="input-group-text">Heure FS</span></div>
        <input type="time" class="heurejournee form-control mb-2" id="heurefs" name="heurefs" maxlength="5">                
    </div>

    <div class="input-group">
        <div class="input-group-prepend mb-2"><span class="input-group-text">Lieu FS</span></div>
        <input type="text" class="form-control mb-2" id="lieufs" name="lieufs" maxlength="30">                
    </div>

   	<div class="float-right">
    	<button id="ajouterjournee" class="btn btn-primary mt-2" type="submit">Valider</button>
    	<button id="annulerajoutjournee" class="btn btn-secondary mt-2" type="submit">Annuler</button>
    </div>
</form>