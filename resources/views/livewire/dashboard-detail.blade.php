<div>
    <br>
    <div style="display: flex;">
        <div style="width: 83% !important;  margin-left:10%;">
            <table style="line-height: 50px;">
                <tr>
                    <td style="color: #00008F;font-weight:bold;font-size:12px;">Mois : {{ $moisActuel }} {{ $years }}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;color: red;font-size:12px;">Du : {{ $premierJour }}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;color: red;font-size:12px;">Au : {{ $dernierJour }}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;font-size:12px;">Branche : Automobile</td>
                </tr>
            </table>
        </div>
        <div style="margin-left:-15%;">
            <table style="line-height: 50px;">
                <tr>
                    <td style="color: #00008F;font-weight:bold;font-size:12px;">Apporter : {{ ucfirst($apporter[0]->prenom) }} {{ ucfirst($apporter[0]->name) }} </td>
                </tr>
                <tr>
                    <td style="font-weight:bold;font-size:12px;">Adresse : {{ $apporter[0]->adresse }}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;font-size:12px;">Code apporter : {{ $apporter[0]->code_apporter }}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;font-size:12px;">N Bordereau : 2210184564546456</td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <div class="container">
  <div class="row">
    <div class="col-sm">
      <form wire:submit.prevent="calcule">
        @csrf
        <select class="form-control" wire:model="month" wire:change="calcule">
            <option value="1">Janvier</option>
            <option value="2">Février</option>
            <option value="3">Mars</option>
            <option value="4">Avril</option>
            <option value="5">Mai</option>
            <option value="6">Juin</option>
            <option value="7">Juillet</option>
            <option value="8">Août</option>
            <option value="9">Septembre</option>
            <option value="10">Octobre</option>
            <option value="11">Novembre</option>
            <option value="12">Décembre</option>
        </select>
    </form> 
    </div>
    <div class="col-sm">
            <select class="form-control" wire:model="annee" wire:change="calcule">
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
            </select>
        </form>
    </div>
  </div>
</div>
<div class="row mb-5 mt-5">
    <div class="col-md-6">
        <label for="query" class="sr-only">Rechercher</label>
        <input type="search" wire:model="query" id="query" class="form-control" placeholder="Rechercher par le prenom pour les assurances automobiles Ex: Momar">
    </div>
    <div  class="col-auto ml-auto">
        Afficher
        <select id="par_page" class="custom-select w-auto" wire:model.lazy="parPage">
            @for($i=5;$i<=25;$i+=5)
         <option value="{{$i}}">{{$i}}</option>  
         @endfor
         </select>
         <label for="par_page">Par page</label>
    </div>
</div>
    {{-- <h3 style="text-align: center;color:#00008F;font-weight:bold;text-transform:uppercase;">Assurances véhicule</h3> --}}
    <div class="container-fluid">
        <div class="row mb-2 d-flex justify-content-center" style="background-color: ; color: #336699;">
            <div class="col-sm-6">
                <h1 class="p-1 mb-2 bg-dark text-white" style="box-shadow: 15px 15px 20px #646464;text-align: center;font-weight: bold !important;font-size:18px;text-transform: capitalize;">
                    Les assurances souscrites par <span style="color: rgb(255, 251, 0)">{{ ucfirst($apporter[0]->prenom) }} {{ ucfirst($apporter[0]->name) }} </span> dans le mois de <span style="color: rgb(255, 251, 0)"> {{ $moisActuel }} {{ $years }} </span></h1>
            </div>
        </div>
    </div>
    <br>
    @if (count($resultat) == 0)
        IL n y a pas de données à afficher.
    @else
        <div style="max-height: 1300px;overflow: auto;">
            <table class="table table-bordered">
                <thead class="bg-primary"> 
                    <tr>
                        <th>#</th>
                        <th style="font-size: 10px;min-width:100px;">Prénom & Nom</th>
                        <th style="font-size: 10px;min-width:100px;">Branche</th>
                        <th style="font-size: 10px;min-width:100px;">Numero police</th>
                        <th style="font-size: 10px;min-width:100px;">Date effet</th>
                        <th style="font-size: 10px;min-width:100px;">Date échéance</th>
                        <th style="font-size: 10px;min-width:100px;">Prime Nette</th>
                        <th style="font-size: 10px;min-width:100px;">Accessoires</th>
                        <th style="font-size: 10px;min-width:100px;">Taxe</th>
                        <th style="font-size: 10px;min-width:100px;">Prime TTC</th>
                        {{-- <th style="font-size: 10px;min-width:150px;">Commission Apporteur</th>
                        <th style="font-size: 10px;min-width:150px;">Commission Accessoire</th>
                        <th style="font-size: 10px;min-width:150px;">Commission Total</th> --}}
                        <th style="font-size: 10px;min-width:50px;">Imprimer</th>
                        <th style="font-size: 10px;min-width:50px;">Editer</th>
                        <th style="font-size: 10px;min-width:50px;">Afficher</th>
                        <th style="font-size: 10px;min-width:50px;">Supprimer</th>
                    </tr>
                </thead>
                @foreach ($resultat as $event)
                    <tbody>
                        <tr>
                            <td style="font-size: 10px;min-width:50px;">{{ $loop->index + 1 }}</td>
                            <td style="font-size: 10px;min-width:100px;text-transform:capitalize">{{ $event->prenom }} {{ $event->nom }}</td>
                            <td style="font-size: 10px;min-width:100px;text-transform:capitalize">{{ $event->niveau }}</td>
                            <td style="font-size: 10px;min-width:100px;text-transform:uppercase">{{ $event->numero_police }}</td>
                            <td style="font-size: 10px;min-width:100px;">{{ $event->date_effet }}</td>
                            <td style="font-size: 10px;min-width:100px;">{{ $event->date_echeance }}</td>
                            <td style="font-size: 10px;min-width:100px;">{{ $event->prime_nette }}</td>
                            <td style="font-size: 10px;min-width:100px;">{{ $event->accessoires }}</td>
                            <td style="font-size: 10px;min-width:100px;">{{ $event->taxes }}</td>
                            <td style="font-size: 10px;min-width:100px;">{{ $event->prime_ttc }}</td>
                            {{-- <td style="font-size: 10px;min-width:100px;">{{ $event->commissions_apporteur }}</td>
                            <td style="font-size: 10px;min-width:100px;">{{ $event->commissions_accessoires }}</td>
                            <td style="font-size: 10px;min-width:100px;">
                                {{ $event->commissions_accessoires + $event->commissions_apporteur }}</td> --}}
                            <td><button class="btn-sm btn-success" href="{{ route('imprimer_contrat_vehicule', ['id' => $event->numero_client]) }}"><i class="fas fa-print" style="width: 20px; color: #ffffff;"></i></button></td>
                            <td><button class="btn-sm btn-warning" wire:click="redirection('{{ $event->id }}')"><i class="fas fa-pen-square" style="width: 20px; color: #ffffff;"></i></button></td>

                            <td>
                                <button class="btn-sm btn-secondary" data-toggle="modal" data-target="#myModal" wire:click="afficherContratAuto('{{ $event->id }}')">
                                    <i class="fa fa-eye" style="width: 20px; color: #ffffff;"></i>
                                </button>
                            </td>
                            <td><button class="btn-sm btn-danger" wire:click="redirection('{{ $event->id }}')"><i class="fas fa-trash" style="width: 20px; color: #ffffff;"></i></button></td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    @endif
    <div class="d-flex justify-content-center mt-4">
        {{ $resultat->links() }}
    </div> 

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg mx-auto" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Détails du Contrat Auto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Affichez les détails du contrat auto ici -->
                    @if($contratAuto)
                    <table class="table font-weight-bold rounded">
                        <thead>
                          <tr style="font-size: 9px;text-transform: capitalize;">
                            <th scope="col" class="custom-bg-primary text-white" style="font-size: 9px;">Numéro Client <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></th>
                            <th scope="col" class="text-white custom-bg-info" style="font-size: 9px;">{{$contratAuto['numero_client']}}</th>
                            <th scope="col" style="font-size: 9px;" class="custom-bg-primary">Prénom <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></th>
                            <th scope="col" class="text-white custom-bg-info" style="font-size: 9px;">{{$contratAuto['prenom']}}</th>
                            <th scope="col" style="font-size: 9px;" class="custom-bg-primary">Nom <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></th>
                            <th scope="col" class="text-white custom-bg-info" style="font-size: 9px;">{{$contratAuto['nom']}}</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr style="font-size: 9px;text-transform: capitalize;">
                            <th class="custom-bg-primary">Adresse <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></th>
                            <td class="text-white custom-bg-info">{{$contratAuto['adresse']}}</td>
                            <td class="custom-bg-primary">Profession <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">{{$contratAuto['profession']}}</td>
                            <td class="custom-bg-primary">Téléphone <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">{{$contratAuto['telephone']}}</td>
                          </tr>
                          <tr style="font-size: 9px;text-transform: capitalize;">
                            <th class="custom-bg-primary">Date de naissance <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></th>
                            <td class="text-white custom-bg-info">{{$contratAuto['date_de_naissance']}}</td>
                            <td class="custom-bg-primary">Marque <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">{{$contratAuto['marque']}}</td>
                            <td class="custom-bg-primary">Modele <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">{{$contratAuto['modele']}}</td>
                          </tr>
                          <tr style="font-size: 9px;text-transform: capitalize;">
                            <th style="font-size: 9px;" class="custom-bg-primary">Puissance <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></th>
                            <td class="text-white custom-bg-info">{{$contratAuto['puissance']}}</td>
                            <td class="custom-bg-primary">Energie <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">{{$contratAuto['energie']}}</td>
                            <td class="custom-bg-primary">Categorie <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">{{$contratAuto['categorie']}}</td>
                          </tr>
                          <tr style="font-size: 9px;text-transform: capitalize;">
                            <th class="custom-bg-primary">Nombre de Place <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></th>
                            <td class="text-white custom-bg-info">{{$contratAuto['nombre_de_place']}}</td>
                            <td class="custom-bg-primary">Numero immatriculation <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">{{$contratAuto['immatriculation']}}</td>
                            <td class="custom-bg-primary">Premiere mise en circulation <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">{{$contratAuto['mise_en_circulation']}}</td>
                          </tr>
                          <tr style="font-size: 9px;text-transform: capitalize;">
                            <th class="custom-bg-primary">Nom sur la carte grise <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></th>
                            <td class="text-white custom-bg-info">{{$contratAuto['nom_sur_la_carte_grise']}}</td>
                            <td class="custom-bg-primary">Valeure neuve <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">{{$contratAuto['valeur_neuve']}}</td>
                            <td class="custom-bg-primary">Valeur vénale <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">{{$contratAuto['valeur_venale']}}</td>
                          </tr>
                          <tr style="font-size: 9px;text-transform: capitalize;">
                            <th class="custom-bg-primary">Numero police <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></th>
                            <td class="text-white custom-bg-info">{{$contratAuto['numero_police']}}</td>
                            <td class="custom-bg-primary">Date effet <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">{{$contratAuto['date_effet']}}</td>
                            <td class="custom-bg-primary">Date échéance <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">{{$contratAuto['date_echeance']}}</td>
                          </tr>
                          <tr style="font-size: 9px;text-transform: capitalize;">
                            <th class="custom-bg-primary">Durée <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></th>
                            <td class="text-white custom-bg-info">{{$contratAuto['dure']}} mois</td>
                            <td class="custom-bg-primary">Numero avenant <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">{{$contratAuto['numero_avenant']}}</td>
                            <td class="custom-bg-primary">Responsabilité civile</td>
                            <td class="text-white custom-bg-info">{{$contratAuto['responsabilite_civile']}}</td>
                          </tr>
                          <tr style="font-size: 9px;text-transform: capitalize;">
                            <th class="custom-bg-primary">Bonus responsabilité civile <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></th>
                            <td class="text-white custom-bg-info">{{$contratAuto['bonus_rc']}}</td>
                            <td class="custom-bg-primary">Thierce collision <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">{{$contratAuto['thierce_collision']}}</td>
                            <td class="custom-bg-primary">Reduction Thierce collision <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">--</td>
                          </tr>
                          <tr style="font-size: 9px;text-transform: capitalize;">
                            <th class="custom-bg-primary">Tarif avance sur recours <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></th>
                            <td class="text-white custom-bg-info">{{$contratAuto['avance_sur_recours']}}</td>
                            <td class="custom-bg-primary">Reduction avance sur recours <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">--</td>
                            <td class="custom-bg-primary">Thierce complete <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">{{$contratAuto['thierce_complete']}}</td>
                          </tr>
                          <tr style="font-size: 9px;text-transform: capitalize;">
                            <th class="custom-bg-primary">Reduction Thierce complete <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></th>
                            <td class="text-white custom-bg-info">--</td>
                            <td class="custom-bg-primary">Tarif defence et recours <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">{{$contratAuto['defence_et_recours']}}</td>
                            <td class="custom-bg-primary">Reduction defence et recours <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">--</td>
                          </tr>
                          <tr style="font-size: 9px;text-transform: capitalize;">
                            <th class="custom-bg-primary">Brise de glace <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></th>
                            <td class="text-white custom-bg-info">{{$contratAuto['bris_de_glace']}}</td>
                            <td class="custom-bg-primary">Reduction Brise de glace <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">--</td>
                            <td class="custom-bg-primary">Incendie <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">{{$contratAuto['incendie']}}</td>
                          </tr>
                          <tr style="font-size: 9px;text-transform: capitalize;">
                            <th class="custom-bg-primary">Reduction incendie <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></th>
                            <td class="text-white custom-bg-info">--</td>
                            <td class="custom-bg-primary">Vol <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">{{$contratAuto['vol']}}</td>
                            <td class="custom-bg-primary">Reduction vol <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">--</td>
                          </tr>
                          <tr style="font-size: 9px;text-transform: capitalize;">
                            <th class="custom-bg-primary">Personnes transportées <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></th>
                            <td class="text-white custom-bg-info">{{$contratAuto['personnes_transportees']}}</td>
                            <td class="custom-bg-primary">Reduction Personnes transportées <i style="margin-left:10px; width: 50px; color: #ffffff;" class="fas fa-arrow-right"></i></td>
                            <td class="text-white custom-bg-info">--</td>
                          </tr>
                        </tbody>
                      </table>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    
    
    


    <div class="row mb-5 mt-5">
        <div class="col-md-6">
            <label for="queryVoyage" class="sr-only">Rechercher</label>
            <input type="search" wire:model="queryVoyage" id="queryVoyage" class="form-control" placeholder="Rechercher par le prenom pour les assurances voyages Ex: Momar">
        </div>
        <div  class="col-auto ml-auto">
            Afficher
            <select id="par_page_voyage" class="custom-select w-auto" wire:model.lazy="parPageVoyage">
                @for($i=5;$i<=25;$i+=5)
             <option value="{{$i}}">{{$i}}</option>  
             @endfor
             </select>
             <label for="par_page_voyage">Par page</label>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mb-2 d-flex justify-content-center" style="background-color: ; color: #336699;">
            <div class="col-sm-6">
                <h1 class="p-1 mb-2 bg-dark text-white" style="box-shadow: 15px 15px 20px #646464;text-align: center;font-weight: bold !important;font-size:18px;text-transform: capitalize;">
                    <span style="color: rgb(255, 251, 0)">Les assurances Voyage</span></h1>
            </div>
        </div>
    </div>
    @if (count($voyage) == 0)
        IL n y a pas de données à afficher.
    @else
        <div style="max-height: 1400px;overflow: auto;">
            <table class="table table-bordered">
                <thead class="bg-primary"> 
                    <tr>
                        <th>#</th>
                        <th style="font-size: 12px;min-width:100px;">Prénom & Nom</th>
                        <th style="font-size: 12px;min-width:100px;">Date de naissance</th>
                        <th style="font-size: 12px;min-width:100px;">Numero passeport</th>
                        <th style="font-size: 12px;min-width:100px;">Date de validité</th>
                        <th style="font-size: 12px;min-width:100px;">Destination</th>
                        <th style="font-size: 12px;min-width:100px;">Prime TTC</th>
                        {{-- <th style="font-size: 12px;min-width:100px;">Commission Apporteur FCFA</th>
                        <th style="font-size: 12px;min-width:100px;">Commission Accessoire FCFA</th>
                        <th style="font-size: 12px;min-width:100px;">Commission Total FCFA</th> --}}
                        <th style="font-size: 12px;min-width:100px;">Imprimer contrat</th>
                    </tr>
                </thead>
                @foreach ($voyage as $event)
                    <tbody>
                        <tr>
                            <td style="font-size: 12px;min-width:100px;">{{ $loop->index + 1 }}</td>
                            <td style="font-size: 12px;min-width:100px;text-transform:capitalize">{{ $event->prenom }} {{ $event->nom }}</td>
                            <td style="font-size: 12px;min-width:100px;">{{ $event->date_de_naissance }}</td>
                            <td style="font-size: 12px;min-width:100px;">{{ $event->numero_passport }}</td>
                            <td style="font-size: 12px;min-width:100px;">{{ $event->date_validite_passeport }}</td>
                            <td style="font-size: 12px;min-width:100px;text-transform:capitalize">{{ $event->pays }}</td>
                            <td style="font-size: 12px;min-width:100px;">{{ $event->prime_ttc }}</td>
                            {{-- <td style="font-size: 12px;min-width:100px;">{{ $event->commissions_apporteur }}</td>
                            <td style="font-size: 12px;min-width:100px;">{{ $event->commissions_accessoires }}</td>
                            <td style="font-size: 12px;min-width:100px;">
                                {{ $event->commissions_accessoires + $event->commissions_apporteur }}</td> --}}
                            <td><a class="btn btn-primary" href="{{ route('imprimer_contrat_voyage', ['id' => $event->numero_client]) }}">Imprimer le contrat</a></td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    @endif
    <div class="d-flex justify-content-center mt-4">
        {{ $voyage->links() }}
    </div> 
    <div class="row mb-5 mt-5">
        <div class="col-md-6">
            <label for="queryMrh" class="sr-only">Rechercher</label>
            <input type="search" wire:model="queryMrh" id="queryMrh" class="form-control" placeholder="Rechercher par le prenom pour les assurances habitations Ex: Momar">
        </div>
        <div  class="col-auto ml-auto">
            Afficher
            <select id="par_page_mrh" class="custom-select w-auto" wire:model.lazy="parPageMrh">
                @for($i=5;$i<=25;$i+=5)
             <option value="{{$i}}">{{$i}}</option>  
             @endfor
             </select>
             <label for="par_page_mrh">Par page</label>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mb-2 d-flex justify-content-center" style="background-color: ; color: #336699;">
            <div class="col-sm-6">
                <h1 class="p-1 mb-2 bg-dark text-white" style="box-shadow: 15px 15px 20px #646464;text-align: center;font-weight: bold !important;font-size:18px;text-transform: capitalize;">
                    <span style="color: rgb(255, 251, 0)">Les assurances Habitation</span></h1>
            </div>
        </div>
    </div>
    @if (count($mrh) == 0)
        IL n y a pas de données à afficher.
    @else
        <div style="max-height: 1400px;overflow: auto;">
            <table class="table table-bordered">
                <thead class="bg-primary"> 
                    <tr>
                        <th>#</th>
                        <th style="font-size: 12px;min-width:100px;">Prénom & Nom</th>
                        <th style="font-size: 12px;min-width:100px;">Profession</th>
                        <th style="font-size: 12px;min-width:100px;">Age</th>
                        <th style="font-size: 12px;min-width:100px;">Téléphone</th>
                        <th style="font-size: 12px;min-width:100px;">Genre de construction</th>
                        <th style="font-size: 12px;min-width:100px;">Nombre de piéces</th>
                        <th style="font-size: 12px;min-width:100px;">Garantie de Base</th>
                        <th style="font-size: 12px;min-width:100px;">Valeur du batiment</th>
                        <th style="font-size: 12px;min-width:100px;">Prime NET</th>
                        <th style="font-size: 12px;min-width:100px;">Prime TTC</th>
                        {{-- <th style="font-size: 12px;min-width:100px;">Commission Apporteur FCFA</th>
                        <th style="font-size: 12px;min-width:100px;">Commission Accessoire FCFA</th>
                        <th style="font-size: 12px;min-width:100px;">Commission Total FCFA</th>  --}}
                        <th style="font-size: 12px;min-width:100px;">Imprimer contrat</th>
                    </tr>
                </thead>
                @foreach ($mrh as $event)
                    <tbody>
                        <tr>
                            <td style="font-size: 12px;min-width:100px;">{{ $loop->index + 1 }}</td>
                            <td style="font-size: 12px;min-width:100px;text-transform:capitalize">{{ $event->prenom }} {{ $event->nom }}</td>
                            <td style="font-size: 12px;min-width:100px;text-transform:capitalize">{{ $event->profession	 }}</td>
                            <td style="font-size: 12px;min-width:100px;">{{ $event->age }}</td>
                            <td style="font-size: 12px;min-width:100px;">{{ $event->telephone }}</td>
                            <td style="font-size: 12px;min-width:100px;text-transform:capitalize">{{ $event->genre_de_construction }}</td>
                            <td style="font-size: 12px;min-width:100px;">{{ $event->nombre_de_piece_principale }}</td>
                            <td style="font-size: 12px;min-width:100px;">{{ $event->garantie_de_base }}</td>
                            <td style="font-size: 12px;min-width:100px;">{{ $event->valeur_du_batiment }}</td>
                            <td style="font-size: 12px;min-width:100px;">{{ $event->prime_nette }}</td>
                            <td style="font-size: 12px;min-width:100px;">{{ $event->prime_ttc }}</td>
                            {{-- <td style="font-size: 12px;min-width:100px;">{{ $event->commissions_apporteur }}</td>
                            <td style="font-size: 12px;min-width:100px;">{{ $event->commissions_accessoires }}</td>
                            <td style="font-size: 12px;min-width:100px;">
                                {{ $event->commissions_accessoires + $event->commissions_apporteur }}</td>  --}}
                            <td><a class="btn btn-primary" href="{{ route('imprimer_contrat_mrh', ['id' => $event->numero_client]) }}">Imprimer le contrat</a></td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
    @endif
    <br><br>
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $mrh->links() }}
    </div> 
</div>
