<form class="col-md-9" method="POST" action="<?= htmlspecialchars($_SERVER['REQUEST_URI'])?>">

    <select class="form-select" aria-label="Default select example" name="id_quiz">
        <?php
        foreach ($allQuiz as $quiz):
        ?>
        <option <?=$quiz->getId() == $question->getIdQuiz() ? 'selected' : '' ?> value="<?= $quiz->getId() ?>"><?= $quiz->getName() ?></option>
        <?php endforeach ?>
    </select>
    <div class="mb-3">
        <label for="libelle" class="form-label">Libelle </label>
        <input type="text" class="form-control" id="libelle" name="libelle" value="<?= $question->getLibelle() ?>">
    </div>
    <div class="mb-3">
        <label for="responseA" class="form-label">responseA</label>
        <input type="text" class="form-control" id="responseA" name="responseA" value="<?= $question->getResponseA() ?>">
    </div>
    <div class="mb-3">
        <label for="reponseB" class="form-label">reponseB</label>
        <input type="text" class="form-control" id="responseB" name="responseB" value="<?= $question->getResponseB() ?>">
    </div>
    <div class="mb-3">
        <label for="reponseC" class="form-label">reponseC </label>
        <input type="text" class="form-control" id="responseC" name="responseC" value="<?= $question->getResponseC() ?>">
    </div>
    <div class="mb-3">
        <label for="reponse" class="form-label">reponse </label>
        <input type="text" class="form-control" id="response" name="response" value="<?= $question->getResponse() ?>">
    </div>
    <button type="submit" class="btn btn-primary" href="/controllers/addQuestCtrl.php"><?= !$question->getId() ? "Editer" : 'Modification' ?></button>
    <a class="btn btn-primary my-2 mx-1" href="/controllers/listQuestCtrl.php" role="button">Retour</a>
</form>