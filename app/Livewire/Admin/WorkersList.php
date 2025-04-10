<?php

namespace App\Livewire\Admin;

use App\Livewire\Components\DataTable;
use App\Models\Worker;

class WorkersList extends DataTable
{
    public function mount()
    {
        $this->id = 'workers-list';
        $this->modelClass = Worker::class;
        $this->title = "Liste des salariés";
        $this->description = "Gestion des salariés de l'entreprise";

        // Assurez-vous que vos colonnes correspondent exactement aux noms dans la base de données
        $this->columns = [
            'last_name' => 'NOM',
            'first_name' => 'PRÉNOM',
            'category' => 'CATÉGORIE',
            'contract_hours' => 'HEURES DE CONTRAT',
            'monthly_salary' => 'SALAIRE MENSUEL',
            'status' => 'STATUT'
        ];

        $this->searchFields = ['last_name', 'first_name'];

        // Définir les actions disponibles pour chaque ligne
        $this->actions = [
            [
                'method' => 'viewWorker',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>',
                'title' => 'Voir le détail'
            ],
            [
                'method' => 'editWorker',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>',
                'title' => 'Modifier'
            ],
            [
                'method' => 'deleteWorker',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>',
                'title' => 'Supprimer'
            ]
        ];

        // Champ de tri par défaut
        $this->sortField = 'last_name';
    }

    // Méthodes pour gérer les actions
    public function viewWorker($workerId)
    {
        return redirect()->route('admin.workers.show', $workerId);
    }

    public function editWorker($workerId)
    {
        return redirect()->route('admin.workers.edit', $workerId);
    }

    public function deleteWorker($workerId)
    {
        // Vérifier si le travailleur a des pointages
        $worker = Worker::find($workerId);

        if ($worker && $worker->timesheets()->count() > 0) {
            $this->dispatch('notify', [
                'message' => 'Impossible de supprimer ce travailleur car il a des pointages associés.',
                'type' => 'error'
            ]);
            return;
        }

        // Détacher les projets et supprimer le travailleur
        if ($worker) {
            $worker->projects()->detach();
            $worker->delete();

            $this->dispatch('notify', [
                'message' => 'Travailleur supprimé avec succès.',
                'type' => 'success'
            ]);
        }
    }

    public function formatOutput($value, $column)
    {
        switch ($column) {
            case 'monthly_salary':
                return $this->formatCurrency($value);
            case 'contract_hours':
                return $this->formatHours($value);
            case 'status':
                return $this->formatStatus($value);
            case 'category':
                return $this->formatCategory($value);
            default:
                return $value;
        }
    }

    public function formatCurrency($value)
    {
        return number_format(floatval($value), 2, ',', ' ') . ' €';
    }

    public function formatHours($value)
    {
        return $value . ' h';
    }

    public function formatStatus($value)
    {
        $color = $value === 'active' ? 'green' : 'red';
        $label = $value === 'active' ? 'Actif' : 'Inactif';

        return '<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-' . $color . '-100 text-' . $color . '-800">' . $label . '</span>';
    }

    public function formatCategory($value)
    {
        $color = $value === 'worker' ? 'blue' : 'purple';
        $label = $value === 'worker' ? 'Ouvrier' : 'ETAM';

        return '<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-' . $color . '-100 text-' . $color . '-800">' . $label . '</span>';
    }

    // Surcharger la méthode render pour personnaliser l'affichage si nécessaire
    public function render()
    {
        $data = Worker::query()
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
}
