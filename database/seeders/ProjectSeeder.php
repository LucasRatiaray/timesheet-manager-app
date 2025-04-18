<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'code' => 119018,
                'name' => 'Gardes Suisses',
                'address' => 'Place d\'armes',
                'city' => 'VERSAILLES',
                'distance' => 45.3,
                'status' => 'active',
            ],
            [
                'code' => 121004,
                'name' => 'EP VERSAILLES',
                'address' => 'Allée des matelots Berges du Grand Canal',
                'city' => 'VERSAILLES',
                'distance' => 45.8,
                'status' => 'active',
            ],
            [
                'code' => 122006,
                'name' => 'Cathédrale Notre Dame',
                'address' => 'Rue d\'Accorle',
                'city' => 'NOTRE DAME DE PARIS',
                'distance' => 43,
                'status' => 'active',
            ],
            [
                'code' => 122011,
                'name' => 'Eglise St Germain',
                'address' => 'Place de l\'église',
                'city' => 'VITRY S/SEINE',
                'distance' => 35.4,
                'status' => 'active',
            ],
            [
                'code' => 122013,
                'name' => 'Château Vincennes - Pavillon de la reine',
                'address' => 'Avenue de Paris',
                'city' => 'VINCENNES',
                'distance' => 46.6,
                'status' => 'active',
            ],
            [
                'code' => 123002,
                'name' => 'Facade Rue Papillon',
                'address' => '94 rue Papillon',
                'city' => 'PARIS',
                'distance' => 44.1,
                'status' => 'active',
            ],
            [
                'code' => 123008,
                'name' => 'Mur Château ministre de Georgie',
                'address' => '10 rue Jules Ferry',
                'city' => 'LEUVILLE S/ORGE',
                'distance' => 12.7,
                'status' => 'active',
            ],
            [
                'code' => 123010,
                'name' => 'Château de Fontainebleau',
                'address' => '',
                'city' => 'FONTAINEBLEAU',
                'distance' => 42.4,
                'status' => 'active',
            ],
            [
                'code' => 123012,
                'name' => 'Château de Vaux Le Vicomte',
                'address' => '',
                'city' => 'VAUX LE VICOMTE',
                'distance' => 35.6,
                'status' => 'active',
            ],
            [
                'code' => 123013,
                'name' => 'Hôtel de ville',
                'address' => '1 Place Edmond Rothschild',
                'city' => 'TOURNAN EN BRIE',
                'distance' => 46.3,
                'status' => 'active',
            ],
            [
                'code' => 123014,
                'name' => 'Chapelle ST Georges',
                'address' => '15 rue Porto Riche',
                'city' => 'MEUDON',
                'distance' => 41.7,
                'status' => 'active',
            ],
            [
                'code' => 124001,
                'name' => 'EGLISE',
                'address' => '6 Place de la croix blanche',
                'city' => 'SAINT VRAIN',
                'distance' => 1.4,
                'status' => 'active',
            ],
            [
                'code' => 124001,
                'name' => 'Eglise St Michel',
                'address' => '9 rue d\'enfer',
                'city' => 'ST MICHEL SUR ORGE',
                'distance' => 13.7,
                'status' => 'active',
            ],
            [
                'code' => 124001,
                'name' => 'Eglise de Grigny',
                'address' => '13 rue Pierre Brossolette',
                'city' => 'GRIGNY',
                'distance' => 18.3,
                'status' => 'active',
            ],
            [
                'code' => 124001,
                'name' => 'Reconstruction d\'un mur',
                'address' => 'Rue de Lozère',
                'city' => 'ORSAY',
                'distance' => 30.2,
                'status' => 'active',
            ],
            [
                'code' => 124001,
                'name' => 'Refection mur du presbytère',
                'address' => 'Rue du clos berger',
                'city' => 'BONNELLES',
                'distance' => 28.5,
                'status' => 'active',
            ],
            [
                'code' => 124001,
                'name' => 'Ministère de l\'écologie',
                'address' => '244 Boulevard Saint Germain',
                'city' => 'PARIS',
                'distance' => 43.4,
                'status' => 'active',
            ],
            [
                'code' => 124001,
                'name' => 'Buste Abraham Lincoln',
                'address' => '84 avenue Georges V',
                'city' => 'PARIS',
                'distance' => 49,
                'status' => 'active',
            ],
            [
                'code' => 124001,
                'name' => 'Mr Ascoet',
                'address' => '1 rue de la Troche',
                'city' => 'ORSAY',
                'distance' => 30.2,
                'status' => 'active',
            ],
            [
                'code' => 124001,
                'name' => 'M. Dekerenger',
                'address' => 'Château de Cerny',
                'city' => 'CERNY',
                'distance' => 11.2,
                'status' => 'active',
            ],
            [
                'code' => 124001,
                'name' => 'Eglise',
                'address' => '130 Avenue Charles de Gaulle',
                'city' => 'MONTGERON',
                'distance' => 24.9,
                'status' => 'active',
            ],
            [
                'code' => 124001,
                'name' => 'Particulier',
                'address' => '3 Rue du General Clergerie',
                'city' => 'PARIS',
                'distance' => 50,
                'status' => 'active',
            ],
            [
                'code' => 124002,
                'name' => 'Bibliothèque Ste Barbe',
                'address' => '4 rue Valette',
                'city' => 'PARIS',
                'distance' => 42.2,
                'status' => 'active',
            ],
            [
                'code' => 124003,
                'name' => 'Mairie',
                'address' => '1 rue de la Mairie',
                'city' => 'GALLUIS',
                'distance' => 57,
                'status' => 'active',
            ],
            [
                'code' => 124004,
                'name' => 'Maison Caillebotte',
                'address' => '8 rue de Concy',
                'city' => 'YERRES',
                'distance' => 32.2,
                'status' => 'active',
            ],
            [
                'code' => 124005,
                'name' => 'Hôtel de ville',
                'address' => '16 rue de l\'Eglise',
                'city' => 'ST MICHEL SUR ORGE',
                'distance' => 15.2,
                'status' => 'active',
            ],
            [
                'code' => 124006,
                'name' => 'Façades',
                'address' => 'Rue de la Folie-Méricourt',
                'city' => 'PARIS 11',
                'distance' => 48.9,
                'status' => 'active',
            ],
            [
                'code' => 124007,
                'name' => 'Pigeionnier',
                'address' => '34 rue de Voisins',
                'city' => 'LOUVECIENNES',
                'distance' => 54,
                'status' => 'active',
            ],
            [
                'code' => 124008,
                'name' => 'Rénovation du pigeonnier',
                'address' => 'Grande rue',
                'city' => 'MAROLLES EN HUREPOIX',
                'distance' => 2.9,
                'status' => 'active',
            ],
            [
                'code' => 220001,
                'name' => 'Maison de retraite',
                'address' => '42 rue des saules',
                'city' => 'MONTGERON',
                'distance' => 25.1,
                'status' => 'active',
            ],
            [
                'code' => 220002,
                'name' => 'Assemblée Nationale - hotel de BROGLIE',
                'address' => 'Face au 14 rue de Bourgogne / 32 rue Las Cases',
                'city' => 'PARIS',
                'distance' => 45.1,
                'status' => 'active',
            ],
            [
                'code' => 221001,
                'name' => 'Lycée G Brassens',
                'address' => '8 rue Georges Brassens',
                'city' => 'EVRY',
                'distance' => 15.9,
                'status' => 'active',
            ],
            [
                'code' => 222002,
                'name' => 'Ecole des Mines',
                'address' => '60 boulevard St Michel',
                'city' => 'PARIS 6EME',
                'distance' => 43.2,
                'status' => 'active',
            ],
            [
                'code' => 222007,
                'name' => 'conservatoire de musique',
                'address' => '6b BD Henri Barbusse / 2 Rue de Villiers',
                'city' => 'DRAVEIL',
                'distance' => 21.3,
                'status' => 'active',
            ],
            [
                'code' => 222008,
                'name' => '18 logements',
                'address' => '44 rue Alfred Dubois',
                'city' => 'MARCOUSSIS',
                'distance' => 18.4,
                'status' => 'active',
            ],
            [
                'code' => 223008,
                'name' => 'Logements',
                'address' => 'rue de la république',
                'city' => 'OLLAINVILLE',
                'distance' => 11.7,
                'status' => 'active',
            ],
            [
                'code' => 223009,
                'name' => 'Restaurant Base de Loisirs',
                'address' => 'Avenue Charles de Gaulle',
                'city' => 'ETAMPES',
                'distance' => 21.8,
                'status' => 'active',
            ],
            [
                'code' => 223010,
                'name' => 'Musée de l\'armée - Porche des Invalides',
                'address' => '129 rue de Grenelle',
                'city' => 'PARIS',
                'distance' => 44.9,
                'status' => 'active',
            ],
            [
                'code' => 223011,
                'name' => '11 Logements',
                'address' => '11 Grande Rue',
                'city' => 'MAROLLES EN HUREPOIX',
                'distance' => 2.9,
                'status' => 'active',
            ],
            [
                'code' => 223014,
                'name' => 'Le Stephenson',
                'address' => '1 rue Stephenson',
                'city' => 'MONTIGNY-LE-BRETONNEUX',
                'distance' => 45.9,
                'status' => 'active',
            ],
            [
                'code' => 223015,
                'name' => 'SCI AERTOIT',
                'address' => '22 rue des jardins',
                'city' => 'L\'HAY LES ROSES',
                'distance' => 34.7,
                'status' => 'active',
            ],
            [
                'code' => 223016,
                'name' => 'Ancienne halle SNCF',
                'address' => 'Route Nationale',
                'city' => 'LARDY',
                'distance' => 3.6,
                'status' => 'active',
            ],
            [
                'code' => 223017,
                'name' => '3 F',
                'address' => '53 Chemin de la Ronce',
                'city' => 'MARCOUSSIS',
                'distance' => 21.7,
                'status' => 'active',
            ],
            [
                'code' => 224001,
                'name' => 'Coursive de Moigny',
                'address' => '1 Rue Marie Louise Fuga',
                'city' => 'MOIGNY SUR ECOLE',
                'distance' => 22.6,
                'status' => 'active',
            ],
            [
                'code' => 224002,
                'name' => 'Renault SAS',
                'address' => '1 Allée Cornuel',
                'city' => 'LARDY',
                'distance' => 5,
                'status' => 'active',
            ],
            [
                'code' => 224003,
                'name' => 'Renault F1 (Alpline)',
                'address' => '1-15 Avenue du Président Kennedy',
                'city' => 'VIRY CHATILLON',
                'distance' => 17.7,
                'status' => 'active',
            ],
            [
                'code' => 224004,
                'name' => 'Eneria',
                'address' => 'Rue de Longpont',
                'city' => 'MONTLHERY',
                'distance' => 15.4,
                'status' => 'active',
            ],
            [
                'code' => 224005,
                'name' => 'Hôtel dieu',
                'address' => '',
                'city' => 'DOURDAN',
                'distance' => 2,
                'status' => 'active',
            ],
            [
                'code' => 224006,
                'name' => 'Grange/Salle conseil municipal',
                'address' => '',
                'city' => 'GRIGNY',
                'distance' => 2,
                'status' => 'active',
            ],
            [
                'code' => 224007,
                'name' => 'Ecole Saint Joseph',
                'address' => '8 Rue Emile Verhaeren',
                'city' => 'SAINT CLOUD',
                'distance' => 49.6,
                'status' => 'active',
            ],
            [
                'code' => 224008,
                'name' => 'Ecole Jules Verne',
                'address' => 'Rue de la Mare des Bordes',
                'city' => 'ST MICHEL SUR ORGE',
                'distance' => 14.1,
                'status' => 'active',
            ],
            [
                'code' => 224009,
                'name' => 'Ecole Paul Langevin',
                'address' => '14 Avenue des Tuilleries',
                'city' => 'GIGNY',
                'distance' => 18,
                'status' => 'active',
            ],
            [
                'code' => 224010,
                'name' => 'Serma - Renault',
                'address' => '1 Allée Cornuel',
                'city' => 'LARDY',
                'distance' => 5,
                'status' => 'active',
            ],
            [
                'code' => 224011,
                'name' => 'Ferme de Leudeville',
                'address' => '60 rue de la Croix Boissée',
                'city' => 'LEUDEVILLE',
                'distance' => 3.9,
                'status' => 'active',
            ],
            [
                'code' => 224012,
                'name' => 'CEA',
                'address' => 'Route du Panorama',
                'city' => 'FONTENAY AUX ROSES',
                'distance' => 36.1,
                'status' => 'active',
            ],
        ];

        foreach ($projects as $project) {
            \App\Models\Project::create($project);
        }
    }
}
