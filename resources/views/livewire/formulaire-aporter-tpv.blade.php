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
                                    <input type="number" disabled id="field1" name="numero_client"
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
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
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
                                    <label for="field12">Catégorie</label>
                                    <select class="form-control" id="field12" wire:model="categorie">
                                        <option value="" selected>Selectionner la catégorie</option>
                                        <option value="1"> Véhicule particulier, à usage personnel (Categorie 1)
                                        </option>
                                        <option value="20">pickup (Categorie 2)</option>
                                        <option value="21">Véhicule de moins de 3.5 tonns (Categorie 2)</option>
                                        <option value="22">véhicule de plus de 3,5 Tonnes (catégorie 2)</option>
                                        <option value="30">véhicule de moins de 3,5 Tonnes (Categorie 3)</option>
                                        <option value="31">véhicule de plus de 3,5 Tonnes (Categorie 3)</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('categorie')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field13">Nombre de places</label>
                                    <input type="number" id="field13" class="form-control"
                                        placeholder="Enter le nombre de places" wire:model="nombre_de_places">
                                    <span class="text-danger">
                                        @error('nombre_de_places')
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field16">Valeur neuve</label>
                                    <input type="number" id="field16" class="form-control"
                                        placeholder="Enter la valeur neuve" wire:model="valeur_neuve">
                                    <span class="text-danger">
                                        @error('valeur_neuve')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field17">Valeur vénale</label>
                                    <input type="number" id="field17" class="form-control"
                                        placeholder="Enter la valeur venale" wire:model="valeur_venale">
                                    <span class="text-danger">
                                        @error('valeur_venale')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field18">Nom de la carte grise</label>
                                    <input type="text" id="field18" class="form-control"
                                        placeholder="Enter le nom sur la carte grise"
                                        wire:model="nom_sur_la_carte_grise">
                                    <span class="text-danger">
                                        @error('nom_sur_la_carte_grise')
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
                                    <label for="field19">Numero de la Police</label>
                                    <input type="number" id="field19" class="form-control"
                                        placeholder="Entrer le numero de la police" wire:model="numero_police">
                                    <span class="text-danger">
                                        @error('numero_police')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field20">Date d'effet</label>
                                    <input type="date" id="field20" class="form-control"
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
                                    <label for="field21">Date échéance</label>
                                    <input type="text" id="field21" class="form-control" disabled
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
                                    <label for="field22">Durée</label>
                                    <select class="form-control" id="field22" wire:model="duree">
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
                                    <label for="field23">Numero avenant</label>
                                    <input type="number" id="field23" class="form-control"
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
                                    <label for="field24">Responsabilité civile</label>
                                    <select class="form-control" id="field24" wire:model="responsabilite_civile"
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
                                    <label for="field25">Bonus</label>
                                    <select class="form-control" id="field25" wire:model="bonus_rc">
                                        <option value="0" selected>-- Non Choisi --</option>
                                        <option value="10" selected>10 %</option>
                                        <option value="15" selected>15 %</option>
                                        <option value="20" selected>20 %</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('bonus_rc')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="thierce_collision" id="field26">Thierce collision</label>
                                    <select class="form-control" id="field26" wire:model="thierce_collision">
                                        <option value="0" selected>Montant de la franchise tierce collision
                                        </option>
                                        <option value="100000" selected>100000</option>
                                        <option value="150000" selected>150000</option>
                                        <option value="200000" selected>200000</option>
                                        <option value="250000" selected>250000</option>
                                        <option value="300000" selected>300000</option>
                                        <option value="350000" selected>350000</option>
                                        <option value="400000" selected>400000</option>
                                        <option value="450000" selected>450000</option>
                                        <option value="500000" selected>500000</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('thierce_collision')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field28">Reduction</label>
                                    <select class="form-control" id="field28"
                                        wire:model="reduction_thierce_collision">
                                        <option value="0" selected>-- Non Choisi --</option>
                                        <option value="10" selected>10 %</option>
                                        <option value="15" selected>15 %</option>
                                        <option value="20" selected>20 %</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('reduction_thierce_collision')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field29">Tierce complete</label>
                                    <select class="form-control" id="field29" wire:model="thierce_complete">
                                        <option value="0" selected>Montant de la franchise tierce complete
                                        </option>
                                        <option value="50000" selected>50000</option>
                                        <option value="75000" selected>75000</option>
                                        <option value="100000" selected>100000</option>
                                        <option value="150000" selected>150000</option>
                                        <option value="200000" selected>200000</option>
                                        <option value="250000" selected>250000</option>
                                        <option value="300000" selected>300000</option>
                                        <option value="350000" selected>350000</option>
                                        <option value="400000" selected>400000</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('thierce_complete')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field30">Reduction</label>
                                    <select class="form-control" id="field30"
                                        wire:model="reduction_thierce_complete">
                                        <option value="0" selected>-- Non Choisi --</option>
                                        <option value="10" selected>10 %</option>
                                        <option value="15" selected>15 %</option>
                                        <option value="20" selected>20 %</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('reduction_thierce_complete')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field31">Tarif Avance sur recours</label>
                                    <select class="form-control" id="field31" wire:model="avance_sur_recours">
                                        <option value="0" selected>Capital garanti</option>
                                        <option value="15000" selected>500000</option>
                                        <option value="30000" selected>1000000</option>
                                        <option value="45000" selected>1500000</option>
                                        <option value="60000" selected>2000000</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('avance_sur_recours')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field32">Reduction</label>
                                    <select class="form-control" id="field32"
                                        wire:model="reduction_avance_sur_recours">
                                        <option value="0" selected>-- Non Choisi --</option>
                                        <option value="10" selected>10 %</option>
                                        <option value="15" selected>15 %</option>
                                        <option value="20" selected>20 %</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('reduction_avance_sur_recours')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field33">Tarif Defense et Recours</label>
                                    <select class="form-control" id="field33" wire:model="defence_et_recours">
                                        <option value="0" selected>Capital Garanti</option>
                                        <option value="4000" selected>250000</option>
                                        <option value="7500" selected>400000</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('defence_et_recours')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field34">Reduction</label>
                                    <select class="form-control" id="field34"
                                        wire:model="reduction_defense_et_recours">
                                        <option value="0" selected>-- Non Choisi --</option>
                                        <option value="10" selected>10 %</option>
                                        <option value="15" selected>15 %</option>
                                        <option value="20" selected>20 %</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('reduction_defense_et_recours')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field35">Brise de glace</label>
                                    <select class="form-control" id="field35" wire:model="bris_de_glace">
                                        <option value="non" selected>Non choisi</option>
                                        <option value="oui">Choisi</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('bris_de_glace')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field36">Reduction</label>
                                    <select class="form-control" id="field36"
                                        wire:model="reduction_brise_de_glace">
                                        <option value="0" selected>-- Non Choisi --</option>
                                        <option value="10" selected>10 %</option>
                                        <option value="15" selected>15 %</option>
                                        <option value="20" selected>20 %</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('reduction_brise_de_glace')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field37">Incendie</label>
                                    <select class="form-control" id="field37" wire:model="incendie">
                                        <option value="non" selected>Non choisi</option>
                                        <option value="oui" selected>Choisi</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('incendie')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field38">Reduction</label>
                                    <select class="form-control" id="field38" wire:model="reduction_incendie">
                                        <option value="0" selected>-- Non Choisi --</option>
                                        <option value="10" selected>10 %</option>
                                        <option value="15" selected>15 %</option>
                                        <option value="20" selected>20 %</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('reduction_incendie')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field39">Vol</label>
                                    <select class="form-control" id="field39" wire:model="vol">
                                        <option value="non" selected>Non Choisi</option>
                                        <option value="oui">Choisi</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('vol')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field40">Reduction</label>
                                    <select class="form-control" id="field40" wire:model="reduction_vol">
                                        <option value="0" selected>-- Non Choisi --</option>
                                        <option value="10" selected>10 %</option>
                                        <option value="15" selected>15 %</option>
                                        <option value="20" selected>20 %</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('reduction_vol')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field41">Personnes Transportées</label>
                                    <select class="form-control" id="field41" wire:model="personne_transportees">
                                        <option value="0" selected>Personnes transportees</option>
                                        <option value="6500" selected>Deces:1000000 Infirmite:1000000 Frais
                                            medicaux:125000</option>
                                        <option value="13000">Deces:3000000 Infirmite:3000000 Frais medicaux:250000
                                        </option>
                                        <option value="20000">Deces:5000000 Infirmite:5000000 Frais medicaux:500000
                                        </option>
                                    </select>
                                    <span class="text-danger">
                                        @error('personne_transportees')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field42">Reduction</label>
                                    <select class="form-control" id="field42"
                                        wire:model="reduction_personne_transportees">
                                        <option value="0" selected>-- Non Choisi --</option>
                                        <option value="10" selected>10 %</option>
                                        <option value="15" selected>15 %</option>
                                        <option value="20" selected>20 %</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('reduction_personne_transportees')
                                            {{ $message }}
                                        @enderror
                                    </span>
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
