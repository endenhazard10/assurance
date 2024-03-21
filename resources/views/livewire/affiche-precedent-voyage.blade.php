<div>
    <br>
    <div class="d-flex justify-content-between">
        <div class="d-flex justify-content-between" style="margin-left: 50px !important">
            <button class="btn btn-primary btn-sm" wire:click="previousStep">
                <img src="{{ asset('images/precedent.png') }}" width="10px" alt="">Précédent
            </button>
            <!-- Le contenu de votre étape actuelle -->
        </div>
        {{-- @if (session()->get('accepter_tpv') == true)  --}}
        <div class="d-flex justify-content-between" style="margin-left: 50px !important">
            <button class="btn btn-primary btn-sm btn-custom" wire:click="retourFormulaire">
                Retour au formulaire
            </button>
            <!-- Le contenu de votre étape actuelle -->
        </div>
        <div class="d-flex justify-content-between" style="margin-left: 50px !important">
            <button class="btn btn-primary btn-sm btn-custom" wire:click="retourApporter">
                Acceder au tableau de bord
            </button>
            <!-- Le contenu de votre étape actuelle -->
        </div>
        {{-- @endif --}}
        <div class="d-flex justify-content-between" style="margin-right: 50px !important">
            <button class="btn btn-success btn-sm btn-custom" data-toggle="modal" data-target="#confirmationModal">
                Valider la souscription
            </button>
            <!-- Le contenu de votre étape actuelle -->
        </div>
    </div>
    <div class="container" style="margin-top: 100px;margin-bottom:100px">
        <div class="row">
            @if (session()->get('accepter_voyage') == false)
                <div class="col-12 col-md-3 mb-3">
                    <div class="card h-100">
                        <a href="{{ route('proposition_contrat_assurance_voyage') }}">
                            <img src="{{ asset('images/contrat.jpg') }}" class="card-img-top img-b" alt="...">
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{ route('proposition_contrat_assurance_voyage') }}"
                                class=" text-decoration-none text-dark font-weight-bold">Proposition de contrat</a>
                            <p class="card-text">

                            </p>
                        </div>
                    </div>
                </div>
            @endif
            @if (session()->get('accepter_voyage') == true)
                <div class="col-12 col-md-3 mb-3">
                    <div class="card h-100">
                        <a href="{{ route('contrat_assurance_voyage') }}">
                            <img src="{{ asset('images/contrat_fini.jpg') }}" class="card-img-top img-b" alt="...">
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{ route('contrat_assurance_voyage') }}"
                                class=" text-decoration-none text-dark font-weight-bold">Valider la proposition et
                                Imprimer le contrat</a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <div class="card h-100">
                        <a href="{{ route('facture_assurance_voyage') }}">
                            <img src="{{ asset('images/facture.jpg') }}" class="card-img-top img-b" alt="...">
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{ route('facture_assurance_voyage') }}"
                                class=" text-decoration-none text-dark font-weight-bold">
                                Imprimer la facture</a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            @endif
            <!-- Modal de Confirmation -->
            <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog"
                aria-labelledby="confirmationModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Êtes-vous sûr de vouloir valider la proposition et imprimer le contrat ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button href="#" class="btn btn-danger" wire:click="accepter">Confirmer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        // Code JavaScript pour confirmer le lien
        document.addEventListener("DOMContentLoaded", function() {
            const confirmLinks = document.querySelectorAll(".confirm-link");
            const modalOverlay = document.querySelector(".modal-overlay");

            confirmLinks.forEach(link => {
                link.addEventListener("click", function(event) {
                    event.preventDefault();
                    $("#confirmationModal").modal("show");
                    modalOverlay.style.display = "block";
                });
            });

            // Ajouter le code pour fermer la boîte de confirmation après confirmation
            const confirmerBtn = document.querySelector("#confirmationModal .btn-danger");
            confirmerBtn.addEventListener("click", function() {
                $("#confirmationModal").modal("hide");
                modalOverlay.style.display = "none";

                // Rafraîchir la page
                location.reload();
            });

            // Ajouter le code pour rafraîchir la page après avoir annulé la confirmation
            const annulerBtn = document.querySelector("#confirmationModal .btn-secondary");
            annulerBtn.addEventListener("click", function() {
                $("#confirmationModal").modal("hide");
                modalOverlay.style.display = "none";

                // Rafraîchir la page
                location.reload();
            });

            // Gestionnaire d'événement pour empêcher la navigation
            const handleBeforeUnload = function(event) {
                event.preventDefault();
                event.returnValue = "";
            };

            // Désactiver la navigation lorsque la boîte de confirmation est affichée
            window.addEventListener("beforeunload", handleBeforeUnload);
        });
    </script>

</div>
