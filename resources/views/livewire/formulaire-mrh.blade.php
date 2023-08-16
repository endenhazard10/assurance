<div class="container-fluid">
    <form method="POST" wire:submit.prevent="calcule">
        @csrf
        {{-- STEP 1 --}}
        @if ($currentStep == 1)
            <div class="step-two">
                <div class="card">
                    <div class="card-header bg-primary text-white">STEP 1/5 - Risque / Assuré</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Adresse</label>
                                    <input type="text" name="adresse" class="form-control"
                                        placeholder="Enter l'adresse" wire:model="adresse">
                                    <span class="text-danger">
                                        @error('adresse')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Genre de construction</label>
                                    <input type="text" name="genre_de_construction" class="form-control"
                                        placeholder="Enter le genre de construction" wire:model="genre_de_construction">
                                    <span class="text-danger">
                                        @error('genre_de_construction')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Type de résidence</label>
                                    <input type="text" class="form-control" placeholder="Enter le type de résidence"
                                        wire:model="type_de_residence">
                                    <span class="text-danger">
                                        @error('type_de_residence')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Superficie développée en cm</label>
                                    <input type="number" class="form-control"
                                        placeholder="Enter la superficie développée" wire:model="superficie_developpee">
                                    <span class="text-danger">
                                        @error('superficie_developpee')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nombre de pièces principales</label>
                                    <input type="number" class="form-control" placeholder="Enter la profession"
                                        wire:model="nombre_piece_principale">
                                    <span class="text-danger">
                                        @error('nombre_piece_principale')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Valeur contenu</label>
                                    <input type="number" class="form-control" placeholder="Enter la valeur"
                                        wire:model="valeur_contenu">
                                    <span class="text-danger">
                                        @error('valeur_contenu')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Valeur du batiment</label>
                                    <input type="number" class="form-control" placeholder="Enter la valeur du batiment"
                                        wire:model="valeur_du_batiment">
                                    <span class="text-danger">
                                        @error('valeur_du_batiment')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Si appartement dans un immeuble</label>
                                    <input type="number" class="form-control"
                                        placeholder="Si appartement dans un immeuble"
                                        wire:model="appartement_dans_un_immeuble">
                                    <span class="text-danger">
                                        @error('appartement_dans_un_immeuble')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- STEP 2 --}}

        @if ($currentStep == 2)
            <div class="step-one">
                <div class="card">
                    <div class="card-header bg-primary text-white">STEP 2/5 - Garanties choisies</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Garanties de base</label>
                                    <select class="form-control" wire:model="garantie_de_base">
                                        <option value="0" selected>non Choisi</option>
                                        <option value="1">Choisi</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('garantie_de_base')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Assistance à domicile</label>
                                    <select class="form-control" wire:model="assistance_a_domicile">
                                        <option value="0" selected>non Choisi</option>
                                        <option value="1">Choisi</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('assistance_a_domicile')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Dommages électriques</label>
                                    <select class="form-control" wire:model="dommages_electriaque">
                                        <option value="0" selected>non Choisi</option>
                                        <option value="1">Choisi</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('dommages_electriaque')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Vol - Remplacement serrures</label>
                                    <select class="form-control" wire:model="vol_remplacement_serrures">
                                        <option value="0" selected>non Choisi</option>
                                        <option value="1">Choisi</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('vol_remplacement_serrures')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">RC Séjour - Voyage</label>
                                    <select class="form-control" wire:model="rc_sejour_voyage">
                                        <option value="0" selected>non Choisi</option>
                                        <option value="1">Choisi</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('rc_sejour_voyage')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">RC - Chiens</label>
                                    <select class="form-control" wire:model="rc_chiens">
                                        <option value="0" selected>non Choisi</option>
                                        <option value="1">Choisi</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('rc_chiens')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">RC - Sports</label>
                                    <select class="form-control" wire:model="rc_sports">
                                        <option value="0" selected>non Choisi</option>
                                        <option value="1">Choisi</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('rc_sports')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Assurance Scolaire</label>
                                    <select class="form-control" wire:model="assurance_scolaire">
                                        <option value="0" selected>non Choisi</option>
                                        <option value="1">Choisi</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('assurance_scolaire')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        {{-- STEP 3 --}}

        @if ($currentStep == 3)
            <div class="step-three">
                <div class="card">
                    <div class="card-header bg-primary text-white">STEP 3/5 - Souscripteur</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Prénom & Nom</label>
                                    <input type="text" class="form-control" placeholder="Prénom & Nom"
                                        wire:model="prenom_et_nom">
                                    <span class="text-danger">
                                        @error('prenom_et_nom')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Profession</label>
                                    <input type="text" class="form-control" placeholder="Enter la profession"
                                        wire:model="profession">
                                    <span class="text-danger">
                                        @error('profession')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Age</label>
                                    <input type="number" class="form-control" placeholder="Enter l'age"
                                        wire:model="age">
                                    <span class="text-danger">
                                        @error('age')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Qualité</label>
                                    <input type="text" class="form-control" placeholder="Enter la Qualité"
                                        wire:model="qualite">
                                    <span class="text-danger">
                                        @error('qualite')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Téléphone</label>
                                    <input type="number" class="form-control" placeholder="Enter le téléphone"
                                        wire:model="telephone">
                                    <span class="text-danger">
                                        @error('telephone')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" placeholder="Enter l'adresse email"
                                        wire:model="email">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- STEP 4 --}}
        @if ($currentStep == 4)
            <div class="step-four">
                <div class="card">
                    <div class="card-header bg-primary text-white">STEP 4/5 - Réferences Contrat</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">N° Client</label>
                                    <input type="number" class="form-control"
                                        placeholder="Enter le numéro du client" wire:model="numero_client">
                                    <span class="text-danger">
                                        @error('numero_client')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">N° Police</label>
                                    <input type="number" class="form-control"
                                        placeholder="Enter le numéro de la police" wire:model="numero_police">
                                    <span class="text-danger">
                                        @error('numero_police')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Date effet</label>
                                    <input type="date" class="form-control" placeholder="Enter la date d'effet"
                                        wire:model="date_effet">
                                    <span class="text-danger">
                                        @error('date_effet')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Date écheance</label>
                                    <input type="date" class="form-control" placeholder="Enter la date d'écheance"
                                        wire:model="date_echeance">
                                    <span class="text-danger">
                                        @error('date_echeance')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Durée</label>
                                    <input type="number" class="form-control" placeholder="Enter la durée"
                                        wire:model="duree">
                                    <span class="text-danger">
                                        @error('duree')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Avenant</label>
                                    <input type="text" class="form-control" placeholder="Enter la date d'écheance"
                                        wire:model="avenant">
                                    <span class="text-danger">
                                        @error('avenant')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endif

        {{-- STEP 5 --}}
        @if ($currentStep == 5)
            <div class="step-four">
                <div class="card">
                    <div class="card-header bg-primary text-white">STEP 5/5 - Assurance</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" wire:model="showFields"> Se souscrire à une Assurance
                                        Scolaire
                                    </label>
                                </div>
                            </div>
                            @if ($showFields)
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Prénom & Nom</label>
                                            <input type="text" class="form-control" placeholder="Prénom & Nom"
                                                wire:model="prenom_et_nom_scolaire">
                                            <span class="text-danger">
                                                @error('prenom_et_nom_scolaire')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Date de naissance</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter la date de naissance"
                                                wire:model="date_de_naissance_scolaire">
                                            <span class="text-danger">
                                                @error('date_de_naissance_scolaire')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Age</label>
                                            <input type="number" class="form-control" placeholder="Age"
                                                wire:model="age_scolaire">
                                            <span class="text-danger">
                                                @error('age_scolaire')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Sexe</label>
                                            <select class="form-control" wire:model="sexe_scolaire">
                                                <option value="m" selected>Masculin</option>
                                                <option value="f">Féminin</option>
                                            </select>
                                            <span class="text-danger">
                                                @error('sexe_scolaire')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Établissement scolaire</label>
                                            <input type="text" class="form-control"
                                                placeholder="Établissement scolaire"
                                                wire:model="etablissement_scolaire">
                                            <span class="text-danger">
                                                @error('etablissement_scolaire')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Niveau d'étude</label>
                                            <input type="text" class="form-control" placeholder="Niveau d'étude"
                                                wire:model="niveau_etude_scolaire">
                                            <span class="text-danger">
                                                @error('niveau_etude_scolaire')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
        @endif

        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">

            @if ($currentStep == 1)
                <div></div>
            @endif

            @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5)
                <button type="button" class="btn btn-md btn-info" wire:click="decreaseStep()">Back</button>
            @endif

            @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
            @endif

            @if ($currentStep == 5)
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
            @endif


        </div>

    </form>


</div>
