<?php

namespace App\Livewire\Pic;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\{DateColumn};
use App\Models\MasterPic;

class PicTable extends DataTableComponent
{
    protected $model = MasterPic::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        // $this->setDefaultSort('level_pic', 'desc');
    }

    public function columns(): array
    {
        return [
            Column::make("Nama pic", "nama_pic")
                ->sortable()
                ->searchable(),
            Column::make("Level pic", "level_pic")
                ->sortable(),
            DateColumn::make("Created at", "created_at")
                ->outputFormat('Y-m-d'),
        ];
    }
}
