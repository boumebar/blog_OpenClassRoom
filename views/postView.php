<?php

$backgroundImage = 'post-bg.jpg';
$title = 'Poster votre Article';
$subheading = 'A vous de jouer';

ob_start();

?>

<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <p>A vos plumes !!!!</p>
            <div class="my-5">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form action="add_article.php" method="POST">
                    <div class="form-floating">
                        <input class="form-control" id="auteur" name="auteur" type="text" data-sb-validations="required" />
                        <label for="name">Nom</label>
                        <div class="invalid-feedback" data-sb-feedback="auteur:required">A name is required.</div>
                    </div>
                    <div class="form-floating">
                        <input class="form-control" id="titre" name="titre" type="text" data-sb-validations="required" />
                        <label for="titre">Titre</label>
                        <div class="invalid-feedback" data-sb-feedback="titre:required">A name is required.</div>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" id="contenu" name="contenu" style="height: 13rem" data-sb-validations="required"></textarea>
                        <label for="contenu">Message</label>
                        <div class="invalid-feedback" data-sb-feedback="contenu:required">A message is required.</div>
                    </div>
                    <br />
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Votre message a été envoyé</div>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Une erreur est survenue</div>
                    </div>
                    <!-- Submit Button-->
                    <button class="btn btn-primary text-uppercase " id="submitButton" type="submit">Envoi</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean();

require('layout.php');
