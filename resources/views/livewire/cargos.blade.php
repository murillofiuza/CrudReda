<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if (session()->has('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif

        @include('livewire.updateOrCreate')


        <!-- <div class="row justify-content-center text-center mt-3">
            <div class="col-md-12">
                <p>Back to Tutorial: 
                    <a href="https://www.allphptricks.com/laravel-10-livewire-crud-application-tutorial/"><strong>Tutorial Link</strong></a>
                </p>
                <p>
                    For More Web Development Tutorials Visit: <a href="https://www.allphptricks.com/"><strong>AllPHPTricks.com</strong></a>
                </p>
            </div>
        </div> -->

        <div class="card">
            <div class="card-header">Lista Cargo</div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Desc. Cargo</th>
                        <th scope="col">Sigla</th>
                        <th scope="col">Vencimento DAM</th>
                        <th scope="col">Observação</th>
                        <th scope="col">Ações</th>

                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($cargos as $cargo)
                            <tr wire:key="{{ $cargo->id }}">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $cargo->DescCargo }}</td>
                                <td>{{ $cargo->Sigla }}</td>
                                <td>{{ $cargo->VencimentoDAM }}</td>
                                <td>{{ $cargo->ObservacaoDAM }}</td>
                                <td>
                                    <button wire:click="edit({{ $cargo->id }})" 
                                        class="btn btn-primary btn-sm">
                                        <i class="bi bi-pencil-square"></i> Editar
                                    </button>   

                                    <button wire:click="delete({{ $cargo->id }})" 
                                        wire:confirm="Are you sure you want to delete this product?"
                                        class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <span class="text-danger">
                                        <strong>Nenhum cargo cadastrado!</strong>
                                    </span>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
</div>