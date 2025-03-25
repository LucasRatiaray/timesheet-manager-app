<?php

namespace App\Livewire;

use App\Livewire\Components\DataTable;
use App\Models\Project;

class AllProjectsTable extends DataTable
{
    // Définition des propriétés
    public $modelClass = Project::class;
    public $columns = [
        'code' => 'Code',
        'name' => 'Nom',
        'address' => 'Adresse',
        'city' => 'Ville',
    ];
    public $searchFields = ['code', 'name', 'address', 'city'];
    public $title = 'Tous les Projets';
    public $description = 'Liste de tous les chantiers disponibles.';
    public $sortField = 'code';
    public $actions = [];
    public $id;

    public function __construct()
    {
        parent::__construct();

        // Définir les actions dans le constructeur
        $this->actions = [
            [
                'method' => 'viewProject',
                'icon' => '<svg class="w-5 h-5 hover:scale-110" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>',
                'title' => 'Voir le chantier'
            ],
            [
                'method' => 'downloadProject',
                'icon' => '<svg class="w-5 h-5 hover:scale-110" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m9 13.5 3 3m0 0 3-3m-3 3v-6m1.06-4.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" /></svg>',
                'title' => 'Télécharger une feuille de pointage'
            ]
        ];
    }

    public function render()
    {
        // Récupérer tous les projets actifs
        $data = Project::query()
            ->where('status', 'active')
            ->when($this->search && !empty($this->searchFields), function ($query) {
                $query->where(function ($subQuery) {
                    foreach ($this->searchFields as $field) {
                        $subQuery->orWhere($field, 'ilike', '%' . $this->search . '%');
                    }
                });
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.components.data-table', [
            'data' => $data
        ]);
    }

    public function viewProject($projectId)
    {
        return redirect()->route('tracking.show', [
            'project_id' => $projectId,
            'month' => now()->month,
            'year' => now()->year,
            'category' => 'day',
        ]);
    }

    public function mount()
    {
        // Générer un ID unique pour cette instance
        $this->id = uniqid('user-projects-');
    }

    public function downloadProject($projectId)
    {
        // Logique pour télécharger les données du project
    }
}
