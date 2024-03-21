<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-center mb-4">
                @for ($step = 1; $step <= 7; $step++)
                    <button
                        class="btn btn-custome @if ($currentStep == $step) btn-danger @else btn-primary @endif  mr-2 "
                        wire:click="goToStep({{ $step }})">Étape {{ $step }}</button>
                @endfor
                @if (session()->get('nom_mrh'))
                <div><button class="btn btn-custome btn-primary mr-2" wire:click="vider_le_formulaire()">Vidé le formulaire</button></div>
                @endif
            </div>
        </div>
    </div>
    <form method="POST" wire:submit.prevent="calcule">
        @csrf
        {{-- STEP 1 --}}
        @if ($currentStep == 1)
            <div class="step-two" style="width: 150%; margin-left:-22%;">
                <div class="card">
                    <div style="background-color: #ec008c !important" class="card-header bg-primary text-white">STEP 1/5 - Information / Client</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Numero Client</label>
                                    <input type="text" disabled name="numero_client" class="form-control"
                                        placeholder="Enter le numero du client" wire:model="numero_client">
                                    <span class="text-danger">
                                        @error('numero_client')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Prénom</label>
                                    <input type="text" name="prenom" class="form-control"
                                        placeholder="Enter le prenom" wire:model="prenom">
                                    <span class="text-danger">
                                        @error('prenom')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nom</label>
                                    <input type="text" class="form-control" placeholder="Enter le Nom"
                                        wire:model="nom">
                                    <span class="text-danger">
                                        @error('nom')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Profession</label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter la profession" wire:model="profession">
                                    <span class="text-danger">
                                        @error('profession')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Age</label>
                                    <input type="number" class="form-control" placeholder="Entrer l'age" min="0"
                                        wire:model="age">
                                    <span class="text-danger">
                                        @error('age')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Qualite</label>
                                    <select class="form-control" wire:model="qualite" id="">
                                        <option value="" selected>Selectionner la qualite</option>
                                        <option value="proprietaire occupant principal">Proprietaire occupant principal</option>
                                        <option value="proprietaire occupant partiel">Proprietaire occupant partiel</option>
                                        <option value="proprietaire non occupant">Proprietaire non occupant</option>
                                        <option value="locataire unique">Locataire unique</option>
                                        <option value="locataire partiel">Locataire partiel</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('qualite')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Téléphone</label>
                                    <input type="number" class="form-control" placeholder="Entrer le téléphone"
                                        wire:model="telephone">
                                    <span class="text-danger">
                                        @error('telephone')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control"
                                        placeholder="Entrer l'email"
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
        @if ($currentStep == 2)
            <div class="step-two" style="width: 150%; margin-left:-22%;">
                <div class="card">
                    <div style="background-color: #ec008c !important" class="card-header bg-primary text-white">STEP 2/5 - Risque / Assuré</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Genre de construction</label>
                                    <select class="form-control" wire:model="genre_de_construction" id="">
                                        <option value="" selected>Selectionner le genre de construction</option>
                                        <option value="maison rez de chausse">Maison rez de chaussé</option>
                                        <option value="maison r+1">Maison R+1</option>
                                        <option value="maison R+2">Maison R+2</option>
                                        <option value="maison R+3">Maison R+3</option>
                                        <option value="maison R+4">Maison R+4</option>
                                        <option value="maison R+5">Maison R+5</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('genre_de_construction')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Type de résidence</label>
                                    <select class="form-control" wire:model="type_de_residence" id="">
                                        <option value="" selected>Selectionner le type de résidence</option>
                                        <option value="principale">Principale</option>
                                        <option value="secondaire">Secondaire</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('type_de_residence')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Superficie développée en m2</label>
                                    <input type="number" class="form-control" min="0"
                                        placeholder="Enter la superficie développée" wire:model="superficie_developpee">
                                    <span class="text-danger">
                                        @error('superficie_developpee')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nombre de pièces principales</label>
                                    <input type="number" class="form-control" placeholder="Enter la profession" min="0"
                                        wire:model="nombre_piece_principale">
                                    <span class="text-danger">
                                        @error('nombre_piece_principale')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Valeur contenu</label>
                                    <input type="number" class="form-control" placeholder="Enter la valeur" min="0"
                                        wire:model="valeur_contenu">
                                    <span class="text-danger">
                                        @error('valeur_contenu')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Valeur du batiment</label>
                                    <input type="number" class="form-control" placeholder="Enter la valeur du batiment" min="0"
                                        wire:model="valeur_du_batiment">
                                    <span class="text-danger">
                                        @error('valeur_du_batiment')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" style="font-size: 12px">Si immeuble dans un appartement</label>
                                    <select class="form-control" wire:model="appartement_dans_un_immeuble" id="">
                                        <option value="" selected>Si immeuble dans un appartement</option>
                                        <option value="non">Non</option>
                                        <option value="1 er etage">1 er étage</option>
                                        <option value="2 eme etage">2 eme étage</option>
                                        <option value="3 eme etage">3 eme étage</option>
                                        <option value="4 eme etage">4 eme étage</option>
                                        <option value="5 eme etage">5 eme étage</option>
                                        <option value="6 eme etage">6 eme étage</option>
                                        <option value="7 eme etage">7 eme étage</option>
                                        <option value="8 eme etage">8 eme étage</option>
                                        <option value="9 eme etage">9 eme étage</option>
                                        <option value="10 eme etage">10 eme étage</option>
                                        <option value="11 eme etage">11 eme étage</option>
                                        <option value="12 eme etage">12 eme étage</option>
                                        <option value="13 eme etage">13 eme étage</option>
                                        <option value="14 eme etage">14 eme étage</option>
                                        <option value="15 eme etage">15 eme étage</option>
                                        <option value="16 eme etage">16 eme étage</option>
                                        <option value="17 eme etage">17 eme étage</option>
                                    </select>
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

        @if ($currentStep == 3)
            <div class="step-one" style="width: 150%; margin-left:-22%;">
                <div class="card">
                    <div style="background-color: #ec008c !important" class="card-header bg-primary text-white">STEP 3/5 - Garanties choisies</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Garanties de base</label>
                                    <select class="form-control" wire:model="garantie_de_base">
                                        <option value="1" selected>Choisi</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('garantie_de_base')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4">
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Dommages électriques</label>
                                    <select class="form-control" wire:model="dommages_electrique">
                                        <option value="0" selected>non Choisi</option>
                                        <option value="1">Choisi</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('dommages_electrique')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
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
                            <div class="col-md-4">
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">RC - Chiens</label>
                                    <select class="form-control" wire:model="rc_chients">
                                        <option value="0" selected>non Choisi</option>
                                        <option value="1">Choisi</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('rc_chients')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
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
                            <div class="col-md-4">
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
                            @if($rc_chients==1)
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Effectif RC - Chiens</label>
                                    <input type="number" class="form-control" min="0" 
                                        placeholder="Entrer l'effectif Rc chients" wire:model="effectif_rc_chients">
                                    <span class="text-danger">
                                        @error('effectif_rc_chients')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                             @endif
                        </div>
                     <div class="row">
                        @if($assurance_scolaire==1)
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Effectif Assurance Scolaire</label>
                                    <input type="number" class="form-control" min="0"
                                        placeholder="Entrer l'effectif Assurance Scolaire" wire:model="effectif_assurance_scolaire">
                                    <span class="text-danger">
                                        @error('effectif_assurance_scolaire')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        
                        @endif
                        @if($rc_sports==1)
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Effectif RC - Sports</label>
                                    <input type="number" class="form-control" min="0"
                                        placeholder="Entrer l'effectif Rc Sports" wire:model="effectif_rc_sports">
                                    <span class="text-danger">
                                        @error('effectif_rc_sports')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- STEP 4 --}}
        @if ($currentStep == 4)
            <div class="step-four" style="width: 150%; margin-left:-22%;">
                <div class="card">
                    <div style="background-color: #ec008c !important" class="card-header bg-primary text-white">STEP 4/5 - Réferences Contrat</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">N° Police</label>
                                    <input type="text" class="form-control" min="0"
                                        placeholder="Enter le numéro de la police" wire:model="numero_police">
                                    <span class="text-danger">
                                        @error('numero_police')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Date effet</label>
                                    <input type="date" class="form-control" placeholder="Enter la date d'effet"
                                        wire:model="date_effet" value="{{ $date_effet }}">
                                    <span class="text-danger">
                                        @error('date_effet')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Date écheance</label>
                                    <input type="text" disabled class="form-control" placeholder="Enter la date d'écheance"
                                        wire:model="date_echeance" value="{{ $date_echeance }}">
                                    <span class="text-danger">
                                        @error('date_echeance')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Durée</label>
                                    <input type="number" class="form-control" placeholder="Enter la durée" min="0"
                                        wire:model="duree" >
                                    <span class="text-danger">
                                        @error('duree')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4">
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
        @if ($currentStep == 5 && $effectif_assurance_scolaire >0 && $assurance_scolaire==1)
            <div class="step-four" style="width: 150%; margin-left:-22%;">
                <div class="card">
                    <div style="background-color: #ec008c !important" class="card-header bg-primary text-white">STEP 5/7 - Effectif assurance scolaire</div>
                    <div class="card-body">
                        <div class="row">
                            @if ($effectif_assurance_scolaire)
                                @for ($i = 1; $i <= $effectif_assurance_scolaire; $i++)
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Prénom & Nom pour la première personne {{ $i }}</label>
                                                <input type="text" class="form-control" placeholder="Prénom & Nom"
                                                    wire:model="prenom_et_nom_scolaire.{{ $i }}">
                                                <span class="text-danger">
                                                    @error("prenom_et_nom_scolaire.$i")
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Date de naissance pour la première personne {{ $i }}</label>
                                                <input type="date" class="form-control" placeholder="Enter la date de naissance"
                                                    wire:model="date_de_naissance_scolaire.{{ $i }}">
                                                <span class="text-danger">
                                                    @error("date_de_naissance_scolaire.$i")
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label  for="">Age pour la première personne {{ $i }} personne {{ $i }}</label>
                                                <input type="number" class="form-control" placeholder="Age" min="0"
                                                    wire:model="age_scolaire.{{ $i }}">
                                                <span class="text-danger">
                                                    @error("age_scolaire.$i")
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Sexe pour la première personne {{ $i }}</label>
                                                <select class="form-control" wire:model="sexe_scolaire.{{ $i }}">
                                                    <option value="" selected>Selectionner le genre</option>
                                                    <option value="m" selected>Masculin</option>
                                                    <option value="f">Féminin</option>
                                                </select>
                                                <span class="text-danger">
                                                    @error("sexe_scolaire.$i")
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Établissement scolaire pour la  personne {{ $i }}</label>
                                                <input type="text" class="form-control" placeholder="Établissement scolaire"
                                                    wire:model="etablissement_scolaire.{{ $i }}">
                                                <span class="text-danger">
                                                    @error("etablissement_scolaire.$i")
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Niveau d'étude pour la première personne {{ $i }}</label>
                                                <input type="text" class="form-control" placeholder="Niveau d'étude"
                                                    wire:model="niveau_etude_scolaire.{{ $i }}">
                                                <span class="text-danger">
                                                    @error("niveau_etude_scolaire.$i")
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            @endif
                        </div>
                        
                    </div>
                </div>
        @endif
        @if($text_assurance_scolaire!='null' && $currentStep==5) 
        <h5 style="text-transform: capitalize;text-align:center;font-weight:bold;">{{$text_assurance_scolaire}}</h5>
        @endif
        @if ($currentStep == 6 && $effectif_rc_chients >0 && $rc_chients==1)
            <div class="step-four" style="width: 150%; margin-left:-22%;">
                <div class="card">
                    <div style="background-color: #ec008c !important" class="card-header bg-primary text-white">STEP 6/7 - Effectif rc chients</div>
                    <div class="card-body">
                        <div class="row">
                            @if ($effectif_rc_chients)
                                @for ($i = 1; $i <= $effectif_rc_chients; $i++)
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Race pour le chient numéro {{ $i }}</label>
                                                <input type="text" class="form-control" placeholder="Entrer la race"
                                                    wire:model="race.{{ $i }}">
                                                <span class="text-danger">
                                                    @error("race.$i")
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Vaccin pour le chient numéro {{ $i }}</label>
                                                <input type="text" class="form-control" placeholder="Enter le vaccin"
                                                    wire:model="vaccin.{{ $i }}">
                                                <span class="text-danger">
                                                    @error("vaccin.$i")
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="font-size: 10px" for="">Date dérniere vaccination pour le chient numéro {{ $i }}</label>
                                                <input type="date" class="form-control" placeholder="Date de dérniere vaccination"
                                                    wire:model="date_derniere_vaccination.{{ $i }}">
                                                <span class="text-danger">
                                                    @error("date_derniere_vaccination.$i")
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            @endif
                        </div>
                        
                    </div>
                </div>
        @endif
        @if($text_rc_chients!='null' && $currentStep==6) 
        <h5 style="text-transform: capitalize;text-align:center;font-weight:bold;">{{$text_rc_chients}}</h5>
        @endif

        @if ($currentStep == 7 && $effectif_rc_sports >0 && $rc_sports==1)
            <div class="step-four" style="width: 150%; margin-left:-22%;">
                <div class="card">
                    <div style="background-color: #ec008c !important" class="card-header bg-primary text-white">STEP 7/7 - Effectif Rc Sports</div>
                    <div class="card-body">
                        <div class="row">
                            @if ($effectif_rc_sports)
                                @for ($i = 1; $i <= $effectif_rc_sports; $i++)
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Prénom & Nom pour la première personne {{ $i }}</label>
                                                <input type="text" class="form-control" placeholder="Prénom & Nom"
                                                    wire:model="prenom_et_nom_sport.{{ $i }}">
                                                <span class="text-danger">
                                                    @error("prenom_et_nom_sport.$i")
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Date de naissance pour la première personne {{ $i }}</label>
                                                <input type="date" class="form-control" placeholder="Enter la date de naissance"
                                                    wire:model="date_de_naissance_sport.{{ $i }}">
                                                <span class="text-danger">
                                                    @error("date_de_naissance_sport.$i")
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Age pour la première personne personne {{ $i }}</label>
                                                <input type="number" class="form-control" placeholder="Age" min="0"
                                                    wire:model="age_sport.{{ $i }}">
                                                <span class="text-danger">
                                                    @error("age_sport.$i")
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Sexe pour la première personne {{ $i }}</label>
                                                <select class="form-control" wire:model="sexe_sport.{{ $i }}">
                                                    <option value="" selected>Selectionner le genre</option>
                                                    <option value="m" selected>Masculin</option>
                                                    <option value="f">Féminin</option>
                                                </select>
                                                <span class="text-danger">
                                                    @error("sexe_sport.$i")
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">La profession pour la  personne personne {{ $i }}</label>
                                                <input type="text" class="form-control" placeholder="Entrer la profession"
                                                    wire:model="profession_sport.{{ $i }}">
                                                <span class="text-danger">
                                                    @error("profession_sport.$i")
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            @endif
                        </div>
                        
                    </div>
                </div>
        @endif
        @if($text_rc_sports!='null' && $currentStep==7)
        <h5 style="text-transform: capitalize;text-align:center;font-weight:bold;">{{$text_rc_sports}}</h5>
        @endif
        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">

            @if ($currentStep == 1)
                <div></div>
            @endif

            @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5 || $currentStep == 6 || $currentStep == 7)
                <button type="button" class="btn btn-md btn-info" wire:click="decreaseStep()">Back</button>
            @endif

            @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5 || $currentStep == 6 )
                <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
            @endif

            {{-- @if (($currentStep == 4 ) && ($rc_chients==1))
                <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
            @endif

            @if (($currentStep == 6 ) && ($assurance_scolaire==0))
                <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
            @endif --}}

            {{-- @if (($currentStep == 4 ) && ($assurance_scolaire==1 || $rc_chients=1 || $rc_sports=1))
                <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
            @endif --}}
            @if ($currentStep == 7)
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
            @endif

            {{-- @if ($currentStep == 7 || ($currentStep==4 && $assurance_scolaire==0 && $rc_chients==0 && $rc_sports==0))
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
            @endif --}}

        </div>

    </form>


</div>
