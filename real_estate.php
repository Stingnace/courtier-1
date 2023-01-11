<?php
require("../courtier/componants/header.php");
?>

<section>
    <div class="js_baner">
        <div class="js_slogan">
            Votre crédit immobilier<br>en quelques cliques
        </div>
    </div>
</section>

<section>
    <div class="js_title">
        <strong> Simple, rapide, gratuit</strong> et surtout <strong> SANS</strong> engagement
    </div>
    <div class="js_calculator">
        <div class="js_monthly">
            <div class="card">
                <div class="card-header">
                    Calculez le montant de votre crédit
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-6 col-form-label">Votre mensualité :</label>



                        <div class="col-sm-5">
                            <input type="number" class="form-control" id="rangenumber" value="750" min="0" max="10000"
                                oninput="range.value=value" />
                        </div>
                        <br><br>
                        <input type="range" class="form-range" id="range" min="0" max="10000" value="750"
                            oninput="rangenumber.value=value" />
                    </div>





                    <div class="d-grid gap-2 col-10 mx-auto">
                        <a href="./estimate.php" class="btn btn-light btn-outline-dark">J'estime mon prêt</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="js_monthly">
            <div class="card">
                <div class="card-header">
                    Calculez le montant de votre crédit
                </div>

                <div class="card-body">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-6 col-form-label">Le montant du prêt :</label>


                        <div class="col-sm-5">
                            <input type="number" class="form-control" id="rangevalue" value="170000"
                                oninput="ranges.value=value">
                        </div>
                        <br><br>
                        <input type="range" class="form-range" id="ranges" min="0" max="999999" value="170000"
                            oninput="rangevalue.value=value">
                    </div>



                    <div class="d-grid gap-2 col-10 mx-auto">
                        <button type="button" class="btn btn-light btn-outline-dark">J'estime ma mensualité</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

</section>


<section>
    <div class="js_promises">

        <div class="js_cards">
            <div class="card bg-warning border-warning" style="width: 18rem;">
                <div class="card-body">
                    <div class="js_logo_text">
                        <div class="js_logo_promises">
                            <i class="bi bi-hourglass-split"></i>
                        </div>
                        <div class="js_text_promises">
                            <h5 class="card-title text-center ">Rapide !</h5>
                            <p class="card-text">Quelques minutes suffisent pour demander votre prêt</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="js_cards">
            <div class="card bg-warning border-warning" style="width: 18rem;">
                <div class="card-body">
                    <div class="js_logo_text">
                        <div class="js_logo_promises">
                            <i class="bi bi-person-bounding-box"></i>
                        </div>
                        <div class="js_text_promises">
                            <h5 class="card-title text-center">Personalisé !</h5>
                            <p class="card-text">Quelques minutes suffisent pour demander votre prêt</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <div class="js_cards">
            <div class="card bg-warning border-warning" style="width: 18rem;">
                <div class="card-body">
                    <div class="js_logo_text">
                        <div class="js_logo_promises">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="js_text_promises">
                            <h5 class="card-title text-center">A votre écoute !</h5>
                            <p class="card-text">Un conseiller est toujours prêt à répondre à vos questions</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section>


<section>
    <div class="js_our_simulators">
        <div class="card" style="width: 61rem;">
            <div class="card-header">
                <h5 class="card-title">Nos différents simulateur</h5>
            </div>

            <div class="card-body">
                <div class="type0">
                    <div class="type1">
                        <div class="type1_1">
                            <button type="button" class="btn btn-outline-warning d-flex align-items-center ">
                                <!-- ICONES SUR BOOTSTRAP ICONES -->
                                <i class="bi bi-calculator"></i>
                                <span> Calcul de mensualité & montant du prêt</span>
                            </button>


                        </div>
                        <div class="type1_2">
                            <button type="button" class="btn btn-outline-warning d-flex align-items-center">
                                <!-- ICONES SUR BOOTSTRAP ICONES -->
                                <i class="bi bi-calculator"></i>
                                <span> Rénegocier son prêt pour un rachat de crédit</span>
                            </button>


                        </div>
                    </div>
                    <div class="type2">
                        <div class="type2_1">
                            <button type="button" class="btn btn-outline-warning d-flex align-items-center">
                                <!-- ICONES SUR BOOTSTRAP ICONES -->
                                <i class="bi bi-calculator"></i>
                                <span> Votre capacité d'emprunt</span>
                            </button>


                        </div>
                        <div class="type2_2">
                            <button type="button" class="btn btn-outline-warning d-flex align-items-center">
                                <!-- ICONES SUR BOOTSTRAP ICONES -->
                                <i class="bi bi-calculator"></i>
                                <span>Simulateur de crédit</span>
                            </button>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
<br>
<br>

<section>
    <div class="js_our_simulators">
        <div class="card border-warning" style="width: 61rem;">
            <div class="card-header bg-warning">
                <h5 class="card-title">Votre satisfaction, notre priorité </h5>
            </div>
            <div class="js_satisfaction">
                <div class="card border-warning" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Prêt Immobilier</h6>
                        <p class="card-text">Jhon Doe à été d'un professionnalisme sans nom. Il m'a apporter toutes les
                            réponses à mes questions. Je le recommande pour vos assurances, les yeux fermés! Et je
                            n'hésiterai pas à parler de lui autour de moi!</p>
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star"></i>

                    </div>
                </div>

                <div class="card border-warning" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Prêt Immobilier</h6>
                        <p class="card-text">Jhon Doe à été d'un professionnalisme sans nom. Il m'a apporter toutes les
                            réponses à mes questions. Je le recommande pour vos assurances, les yeux fermés! Et je
                            n'hésiterai pas à parler de lui autour de moi!</p>
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star"></i>


                    </div>
                </div>

                <div class="card border-warning" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Prêt Immobilier</h6>
                        <p class="card-text">Jhon Doe à été d'un professionnalisme sans nom. Il m'a apporter toutes les
                            réponses à mes questions. Je le recommande pour vos assurances, les yeux fermés! Et je
                            n'hésiterai pas à parler de lui autour de moi!</p>
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star"></i>

                    </div>
                </div>
            </div>
        </div>
    </div>








</section>
<br><br><br>










<script>
const rangeInputs = document.querySelectorAll('input[type="range"]')
const numberInput = document.querySelector('input[type="number"]')

function handleInputChange(e) {
    let target = e.target
    if (e.target.type !== 'range') {
        target = document.getElementById('range')
    }
    const min = target.min
    const max = target.max
    const val = target.value

    target.style.backgroundSize = (val - min) * 100 / (max - min) + '% 100%'
}

rangeInputs.forEach(input => {
    input.addEventListener('input', handleInputChange)
})

numberInput.addEventListener('input', handleInputChange)
</script>

<?php require("../courtier/componants/footer.php"); ?>