<div class="container-fluid">
    <form method="POST"  wire:submit.prevent="calcule">
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
                                <label for="">Numéro client</label>
                                <input type="number" name="numero_client" class="form-control" placeholder="Enter le numero du client" wire:model="numero_client">
                                <span class="text-danger">@error('numero_client'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Prénom</label>
                                <input type="text" name="prenom" class="form-control" placeholder="Enter le prenom" wire:model="prenom">
                                <span class="text-danger">@error('prenom'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">nom</label>
                                <input type="text" class="form-control" placeholder="Enter le nom" wire:model="nom">
                                <span class="text-danger">@error('nom'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Adresse</label>
                                <input type="text" class="form-control" placeholder="Enter l'adresse" wire:model="adresse">
                                <span class="text-danger">@error('adresse'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Profession</label>
                                <input type="text" class="form-control" placeholder="Enter la profession" wire:model="profession">
                                <span class="text-danger">@error('profession'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Téléphone</label>
                                <input type="number" class="form-control" placeholder="Enter le numero de Téléphone" wire:model="telephone">
                                <span class="text-danger">@error('telephone'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date de naissance</label>
                                <input type="date" class="form-control" placeholder="Enter la date de naissance" wire:model="date_de_naissance">
                                <span class="text-danger">@error('date_de_naissance'){{ $message }}@enderror</span>
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
                                <label for="">Marque</label>
                                <select class="form-control" wire:model="marque">
                                    <option value="" selected>Selectionner la marque</option>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Nissan">Nissan</option>
                                    <option value="Audi">Audi</option>
                                    <option value="Yamaha">Yamaha</option>
                                    <option value="Renauld">Renauld</option>
                                    <option value="Mercedes">Mercedes</option>
                                    <option value="Ford">Ford</option>
                                </select>
                                <span class="text-danger">@error('marque'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="">Modéle</label>
                               <input type="text" class="form-control" placeholder="Enter le modéle" wire:model="modele">
                               <span class="text-danger">@error('modele'){{ $message }}@enderror</span>
                           </div>
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Puissance</label>
                                <select class="form-control" wire:model="puissance">
                                    <option value="" selected>Selectionner la puissance</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <span class="text-danger">@error('puissance'){{ $message }}@enderror</span>
                            </div></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Energie</label>
                                <select class="form-control" wire:model="energie">
                                    <option value="" selected>Selectionner l'énergie</option>
                                    <option value="1">Gasoil</option>
                                    <option value="2">Essence</option>
                                </select>
                                <span class="text-danger">@error('energie'){{ $message }}@enderror</span>
                            </div>
                        </div>  
                    
                    </div>
                    <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nom sur la carte grise</label>
                                    <input type="text" class="form-control" placeholder="Enter le nom sur la carte grise" wire:model="nom_sur_la_carte_grise">
                                    <span class="text-danger">@error('nom_sur_la_carte_grise'){{ $message }}@enderror</span>
                                </div>
                            </div>
                       </div>
                       <div class="row">
                       <div class="col-md-6">
                           <div class="form-group">
                               <label for="">Numéro immatriculation</label>
                               <input type="text" class="form-control" placeholder="Enter le numero d'immatriculation" wire:model="immatriculation">
                               <span class="text-danger">@error('immatriculation'){{ $message }}@enderror</span>
                           </div>
                       </div>
                       <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date de mise en circulation</label>
                                <input type="date" class="form-control" placeholder="Enter la date de la premiere mise en circulation " wire:model="mise_en_circulation">
                                <span class="text-danger">@error('mise_en_circulation'){{ $message }}@enderror</span>
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
                                <label for="">Numero de la police</label>
                                <input type="number" class="form-control" placeholder="Entrer le numero" wire:model="numero_police">
                                <span class="text-danger">@error('numero_police'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date d'effet</label>
                                <input type="date" class="form-control"  placeholder="Enter la date d'effet" wire:model="date_effet" value="{{$date_effet}}">
                                <span class="text-danger">@error('$date_effet'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date échéance</label>
                                <input type="text" class="form-control" disabled placeholder="Enter la date d'échéance" wire:model="date_echeance" value="{{$date_echeance}}">
                                <span class="text-danger">@error('date_echeance'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Durée</label>
                                <select class="form-control" wire:model="duree">
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
                                <span class="text-danger">@error('duree'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Numero avenant</label>
                                <input type="number" class="form-control" placeholder="Enter le numero avenant" wire:model="numero_avenant">
                                <span class="text-danger">@error('numero_avenant'){{ $message }}@enderror</span>
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
                                <label for="">Responsabilité civile</label>
                                <select class="form-control" wire:model="responsabilite_civile" disabled>
                                    <option value="responsabilité civile" selected >Responsabilité Civile</option>
                                </select>
                                <span class="text-danger">@error('responsabilite_civile'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bonus_rc">Bonus</label>
                                <select class="form-control" wire:model="bonus_rc">
                                    <option value="0" selected>-- Non Choisi --</option>
                                    <option value="10" >10 %</option>
                                    <option value="15" >15 %</option>
                                    <option value="20" >20 %</option>
                                </select>
                                <span class="text-danger">@error('bonus_rc'){{ $message }}@enderror</span>
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


</div>
