<!-- SERVICES CALCULATOR START
                ============================================= -->
<div class="services-calculator bg-color" id="devis">
    <div class="container">
        <div class="row">
            <div class="services-calculator-wrap row">
                <div class="intro-section col-md-6">
                    <h3 class="title">Nous créons pour vous</h3>
                    <p>
                        Confiez votre projet à notre meilleure équipe de professionnels
                        Un projet en tête ? Pour une prise en charge immédiate :</p>
                    <div class="image">
                        <img src="img/content/service-calculator-img.png" alt="" />
                    </div>
                </div>

                <div class="form-section col-md-6">
                    <form id="calculationform" onsubmit="return false;">
                        <p class="intro">* Veuillez remplir toutes les demandes pour obtenir votre prix total</p>
                        <fieldset>
                            <label>Services</label>
                            <select id="services_type" name='services_type' onchange="calculateTotal()">
                                <option value="None">Select Services</option>
                                <option value="Overland">Transport routier national
                                </option>
                                <option value="Ocean">Logistique</option>
                                <option value="Air">Manutention</option>
                                <option value="Cargo">Stockage</option>
                                <option value="Storage">Semi remorque plateau</option>
                                <option value="Warehousing">Remorques réfrigérées</option>
                            </select>

                            <label>TYPE DE MARCHANDISES</label>
                            <select id="goods_type" name='goods_type' onchange="calculateTotal()">
                                <option value="None">Select MARCHANDISES</option>
                                <option value="General"> Déménagements </option>
                                <option value="Fragile"> Meuble, appareil ménager... </option>
                                <option value="Fine"> Caisses/Cartons </option>
                                <option value="Hazardous"> Bagages </option>
                                <option value="Hazardous"> Marchandises </option>
                                <option value="Hazardous"> Colis </option>
                                <option value="Hazardous"> Palettes </option>
                                <option value="Hazardous"> Bagages </option>
                            </select>

                            <p class="extra-services">
                                <label>Services supplémentaires</label>
                                <span>
                                    <label for='expressdelivery'>Livraison express</label>
                                    <input type="checkbox" id="expressdelivery" name='expressdelivery' \ />
                                </span>
                                <span>
                                    <label for='insurance'>Ajouter une assurance</label>
                                    <input type="checkbox" id="insurance" name='insurance' \ />
                                </span>
                                <span>
                                    <label for='packaging'>Emballage</label>
                                    <input type="checkbox" id="packaging" name='packaging' \ />
                                </span>
                            </p>

                            <p class="fragile clearfix">
                                <label>Fragile</label>
                                <span>
                                    <label for='fragileyes'>Oui</label>
                                    <input type="checkbox" id="fragileyes" name='fragileyes' \ />
                                </span>
                            </p>
                            <?php
                            if (verfiSession()) {
                                require("front/home/allowed.php");
                            } else {
                                require("front/home/notAllowed.php");
                            }
                            ?>                            
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SERVICE CALCULATOR END -->









<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="container"></div>,<div class="container">

                <div class="stepwizard ">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step">
                            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                            <p>Step 1</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                            <p>Step 2</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                            <p>Step 3</p>
                        </div>
                    </div>
                </div>

                <form id="formMain" role="form" action="#!" method="post">
                    <div class="row setup-content" id="step-1">
                        <div class="col-xs-6 ">
                            <div class="col-md-12">
                                <h3> Step 1</h3>
                                <div class="form-group">
                                    <label class="control-label">Nom</label>
                                    <input maxlength="100" type="text" required="required" class="form-control"
                                        placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Prénom</label>
                                    <input maxlength="100" type="text" required="required" class="form-control"
                                        placeholder="Enter Last Name">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Addresse</label>
                                    <textarea required="required" class="form-control"
                                        placeholder="Enter your address"></textarea>
                                </div>
                                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">suivant</button>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content" id="step-2">
                        <div class="col-xs-6 ">
                            <div class="col-md-12">
                                <h3> Step 2</h3>
                                <div class="form-group">
                                    <label class="control-label">Nom de l'entreprise</label>
                                    <input maxlength="200" type="text" required="required" class="form-control"
                                        placeholder="Enter Company Name">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Adresse de l'entreprise</label>
                                    <input maxlength="200" type="text" required="required" class="form-control"
                                        placeholder="Enter Company Address">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Type du contrat</label>
                                </div>
                                <div class="form-group" style="display:flex;justify-content: space-between;">
                                    <div style="display:flex;align-items: baseline;">
                                        <input type="radio" name="contrat" required="required" />
                                        <h6>Journalière</h6>
                                    </div>
                                    <div style="display:flex;align-items: baseline;">
                                        <input type="radio" name="contrat" required="required" />
                                        <h6>Abonnement</h6>
                                    </div>
                                </div>
                                <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Précèdent</button>
                                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Suivant</button>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content" id="step-3">
                        <div class="col-xs-6 ">
                            <div class="col-md-12">
                                <h3> Step 3</h3>
                                <div class="form-group">
                                    <label class="control-label">ville de départ</label>
                                    <input maxlength="200" type="text" required="required" class="form-control"
                                        placeholder="ville de depart">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">ville de livraison</label>
                                    <input maxlength="200" type="text" required="required" class="form-control"
                                        placeholder="ville de livraison">
                                </div>
                                <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Précèdent</button>
                                <button class="btn btn-success btn-lg pull-right" id="submitForm"
                                    type="submit">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>



<style>
    .stepwizard-step p {
        margin-top: 10px;
    }

    .stepwizard-row {
        display: table-row;
    }

    .stepwizard {
        display: table;
        width: 50%;
        position: relative;
    }

    .stepwizard-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }

    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;
    }

    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }

    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }
</style>


<script>
    $(document).ready(function () {

        $('#formMain').submit((e) => {
            e.preventDefault();
            Toastify({
                text: "votre demande et en cours de traitement ! :D",
                duration: 3000,
                destination: "index.php",
                newWindow: true,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "center", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
                onClick: function () {                    
                } // Callback after click
            }).showToast();

            setInterval(() => {
                window.location.href = 'index.php';
            }, 3000);
        })

        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn'),
            allPrevBtn = $('.prevBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allPrevBtn.click(function () {
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

            prevStepWizard.removeAttr('disabled').trigger('click');
        });

        allNextBtn.click(function () {
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                if (!curInputs[i].validity.valid) {
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-primary').trigger('click');
    });
</script>