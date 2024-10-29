<?php

namespace App\Livewire;

use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Cargo;

class Cargos extends Component
{
    // public function render()
    // {
    //     return view('livewire.cargos');
    // }

    /******************/

    public $cargos;

    #[Locked]
    public $cargo_id;

    #[Validate('required')]
    public $DescCargo = '';

    #[Validate('required')]
    public $Sigla = '';
    
    #[Validate('required')]
    public $ValorDAM = '';
    
    #[Validate('required')]
    public $ObservacaoDAM = '';
    
    #[Validate('required')]
    public $VencimentoDAM = '';

    public $isEdit = false;

    public $title = 'Add Novo Cargo';

    public function resetFields()
    {
        $this->title = 'Add Novo Cargo';

        $this->reset('DescCargo', 'ObservacaoDAM');

        $this->isEdit = false;
    }

    public function save()
    {
        $this->validate();

        Cargo::updateOrCreate(['id' => $this->cargo_id], [
            'DescCargo' => $this->DescCargo,
            'Sigla' => $this->Sigla,
            'ValorDAM' => $this->ValorDAM,
            'ObservacaoDAM' => $this->ObservacaoDAM,
            'VencimentoDAM' => $this->VencimentoDAM
        ]);

        session()->flash('message', $this->cargo_id ? 'Cargo está atualizado.' : 'O produto foi adicionado.');

        $this->resetFields();
    }

    /***Editar registro***/
    public function edit($id)
    {
        $this->title = 'Editar Cargo';

        $cargo = Cargos::findOrFail($id);

        $this->cargo_id = $id;

        $this->DescCargo = $cargos->DescCargo;
        $this->Sigla = $cargos->Sigla;
        $this->ValorDAM = $cargos->ValorDAM;
        $this->ObservacaoDAM = $cargos->ObservacaoDAM;
        $this->VencimentoDAM = $cargos->VencimentoDAM;

        $this->isEdit = true;
    }

    public function cancel()
    {
        $this->resetFields();
    }

    public function delete($id)
    {
        Cargos::find($id)->delete();

        session()->flash('message', 'Cargo foi deletado.');
    }

    public function render()
    {
        $this->cargos = Cargo::latest()->get();

        return view('livewire.cargos');
    }
}
