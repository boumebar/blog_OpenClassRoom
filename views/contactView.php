<?php

$backgroundImage = 'contact-bg.jpg';
$title = 'Contactez-nous';
$subheading = 'Vous aves des questions ? Nous avons la réponse';

ob_start();

?>

<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <p>Envoyez-nous un message, nous vous repondrons dès que possible. A bientot !!!!</p>
            <div class="my-5">
                <form>
                    <div class="form-floating">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="name">Nom</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-floating">
                        <input class="form-control" id="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                        <label for="email">Emails</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <div class="form-floating">
                        <input class="form-control" id="phone" type="tel" placeholder="Enter your phone number..." data-sb-validations="required" />
                        <label for="phone">Téléphone</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" id="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
                        <label for="message">Message</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
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

<?php $content = ob_get_clean(); ?>

<?php
require('views/layout.php');
