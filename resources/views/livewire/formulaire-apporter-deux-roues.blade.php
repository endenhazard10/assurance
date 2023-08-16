<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-center mb-4">
                @for ($step = 1; $step <= 4; $step++)
                    <button
                        class="btn @if ($currentStep == $step) btn-success @else btn-primary @endif  mr-2 @if ($currentStep < $step) disabled @endif"
                        wire:click="goToStep({{ $step }})">Étape {{ $step }}</button>
                @endfor
            </div>
        </div>
    </div>
    <form method="POST" wire:submit.prevent="calcule">
        @csrf
        {{-- STEP 1 --}}
        @if ($currentStep == 1)
            <div class="step-two">
                <div class="card">
                    <div class="card-header bg-primary text-white">STEP 1/4 - Assuré / Souscripteur</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field1">Numéro client</label>
                                    <input type="number" id="field1" name="numero_client" disabled
                                        class="form-control" placeholder="Enter le numero du client"
                                        wire:model="numero_client">
                                    <span class="text-danger">
                                        @error('numero_client')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field2">Prénom</label>
                                    <input type="text" id="field2" name="prenom" class="form-control"
                                        placeholder="Enter le prenom" wire:model="prenom">
                                    <span class="text-danger">
                                        @error('prenom')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field3">nom</label>
                                    <input type="text" id="field3" class="form-control" placeholder="Enter le nom"
                                        wire:model="nom">
                                    <span class="text-danger">
                                        @error('nom')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field4">Adresse</label>
                                    <input type="text" id="field4" class="form-control"
                                        placeholder="Enter l'adresse" wire:model="adresse">
                                    <span class="text-danger">
                                        @error('adresse')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field5">Profession</label>
                                    <input type="text" id="field5" class="form-control"
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field6">Téléphone</label>
                                    <input type="number" id="field6" class="form-control"
                                        placeholder="Enter le numero de Téléphone" wire:model="telephone">
                                    <span class="text-danger">
                                        @error('telephone')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field7">Date de naissance</label>
                                    <input type="date" id="field7" class="form-control"
                                        placeholder="Enter la date de naissance" wire:model="date_de_naissance">
                                    <span class="text-danger">
                                        @error('date_de_naissance')
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
                    <div class="card-header bg-primary text-white">STEP 2/4 - Véhicule</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field8">Marque</label>
                                    <select class="form-control" id="field8" wire:model="marque">
                                        <option value="" selected>Selectionner la marque</option>
                                        <option value="Toyota">Toyota</option>
                                        <option value="Nissan">Nissan</option>
                                        <option value="Audi">Audi</option>
                                        <option value="Yamaha">Yamaha</option>
                                        <option value="Renauld">Renauld</option>
                                        <option value="Mercedes">Mercedes</option>
                                        <option value="Ford">Ford</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('marque')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field9">Modéle</label>
                                    <input type="text" id="field9" class="form-control"
                                        placeholder="Enter le modéle" wire:model="modele">
                                    <span class="text-danger">
                                        @error('modele')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field10">Puissance</label>
                                    <select class="form-control" id="field10" wire:model="puissance">
                                        <option value="" selected>Selectionner la puissance</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('puissance')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field11">Energie</label>
                                    <select class="form-control" id="field11" wire:model="energie">
                                        <option value="" selected>Selectionner l'énergie</option>
                                        <option value="1">Gasoil</option>
                                        <option value="2">Essence</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('energie')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field12">Nom sur la carte grise</label>
                                    <input type="text" id="field12" class="form-control"
                                        placeholder="Enter le nom sur la carte grise"
                                        wire:model="nom_sur_la_carte_grise">
                                    <span class="text-danger">
                                        @error('nom_sur_la_carte_grise')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field13">Categories</label>
                                    <select class="form-control" id="field13" wire:model="categorie">
                                        <option value="" selected>Selectionner la categorie</option>
                                        <option value="categorie 5">categorie 5</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('categorie')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field14">Numéro immatriculation</label>
                                    <input type="text" id="field14" class="form-control"
                                        placeholder="Enter le numero d'immatriculation" wire:model="immatriculation">
                                    <span class="text-danger">
                                        @error('immatriculation')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field15">Date de mise en circulation</label>
                                    <input type="date" id="field15" class="form-control"
                                        placeholder="Enter la date de la premiere mise en circulation "
                                        wire:model="mise_en_circulation">
                                    <span class="text-danger">
                                        @error('mise_en_circulation')
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
                    <div class="card-header bg-primary text-white">STEP 3/4 - Contrat</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field16">Numero de la police</label>
                                    <input type="number" id="field16" class="form-control"
                                        placeholder="Entrer le numero" wire:model="numero_police">
                                    <span class="text-danger">
                                        @error('numero_police')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field17">Date d'effet</label>
                                    <input type="date" id="field17" class="form-control"
                                        placeholder="Enter la date d'effet" wire:model="date_effet"
                                        value="{{ $date_effet }}">
                                    <span class="text-danger">
                                        @error('$date_effet')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field18">Date échéance</label>
                                    <input type="text" id="field18" class="form-control" disabled
                                        placeholder="Enter la date d'échéance" wire:model="date_echeance"
                                        value="{{ $date_echeance }}">
                                    <span class="text-danger">
                                        @error('date_echeance')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field19">Durée</label>
                                    <select class="form-control" id="field19" wire:model="duree">
                                        <option value="" selected>Selectionner la durée en mois</option>
                                        <option value="1">1 mois</option>
                                        <option value="2">2 mois</option>
                                        <option value="3">3 mois</option>
                                        <option value="4">4 mois</option>
                                        <option value="5">5 mois</option>
                                        <option value="6">6 mois</option>
                                        <option value="7">7 mois</option>
                                        <option value="8">8 mois</option>
                                        <option value="9">9 mois</option>
                                        <option value="10">10 mois</option>
                                        <option value="11">11 mois</option>
                                        <option value="12">12 mois</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('duree')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field20">Numero avenant</label>
                                    <input type="number" id="field20" class="form-control"
                                        placeholder="Enter le numero avenant" wire:model="numero_avenant">
                                    <span class="text-danger">
                                        @error('numero_avenant')
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
                    <div class="card-header bg-primary text-white">STEP 4/4 - Contrat</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field21">Responsabilité civile</label>
                                    <select class="form-control" id="field21" wire:model="responsabilite_civile"
                                        disabled>
                                        <option value="responsabilité civile" selected>Responsabilité Civile</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('responsabilite_civile')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field22">Bonus</label>
                                    <select class="form-control" id="field22" wire:model="bonus_rc">
                                        <option value="0" selected>-- Non Choisi --</option>
                                        <option value="10">10 %</option>
                                        <option value="15">15 %</option>
                                        <option value="20">20 %</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('bonus_rc')
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

        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">

            @if ($currentStep == 1)
                <div></div>
            @endif

            @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                <button type="button" class="btn btn-md btn-info" wire:click="decreaseStep()">Back</button>
            @endif

            @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3)
                <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
            @endif

            @if ($currentStep == 4)
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
            @endif


        </div>

    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const fields = document.querySelectorAll(
                "input[type='text'], input[type='number'], input[type='date'], select");

            fields.forEach((field, index) => {
                field.addEventListener("keydown", function(event) {
                    if (event.key === "Enter") {
                        event.preventDefault();
                        if (index < fields.length - 1) {
                            fields[index + 1].focus();
                        }
                    }
                });
            });
        });
    </script>


</div>
