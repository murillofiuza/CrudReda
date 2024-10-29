<div class="row justify-content-center mt-3 mb-3">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    {{ $title }}
                </div>
            </div>
            <div class="card-body">
                <form wire:submit="save">

                    <div class="mb-3 row">
                        <label for="DescCargo" class="col-md-4 col-form-label text-md-end text-start">Cargo Descrição</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('DescCargo') is-invalid @enderror" id="DescCargo" wire:model="DescCargo">
                            @if ($errors->has('DescCargo'))
                                <span class="text-danger">{{ $errors->first('DescCargo') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Sigla" class="col-md-4 col-form-label text-md-end text-start">Sigla</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('Sigla') is-invalid @enderror" id="Sigla" wire:model="Sigla">
                            @if ($errors->has('Sigla'))
                                <span class="text-danger">{{ $errors->first('Sigla') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="ValorDAM" class="col-md-4 col-form-label text-md-end text-start">ValorDAM</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('ValorDAM') is-invalid @enderror" id="ValorDAM" wire:model="ValorDAM">
                            @if ($errors->has('ValorDAM'))
                                <span class="text-danger">{{ $errors->first('ValorDAM') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="ObservacaoDAM" class="col-md-4 col-form-label text-md-end text-start">Obs. DAM</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('ObservacaoDAM') is-invalid @enderror" id="ObservacaoDAM" wire:model="ObservacaoDAM"></textarea>
                            @if ($errors->has('ObservacaoDAM'))
                                <span class="text-danger">{{ $errors->first('ObservacaoDAM') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="VencimentoDAM" class="col-md-4 col-form-label text-md-end text-start">Vencimento DAM</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('VencimentoDAM') is-invalid @enderror" id="VencimentoDAM" wire:model="VencimentoDAM"></textarea>
                            @if ($errors->has('VencimentoDAM'))
                                <span class="text-danger">{{ $errors->first('VencimentoDAM') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <button type="submit" class="col-md-3 offset-md-5 btn btn-success">
                             Cadastrar
                        </button>
                    </div>

                    @if($isEdit)
                        <div class="mb-3 row">
                            <button wire:click="cancel" 
                                class="col-md-3 offset-md-5 btn btn-danger">
                                Cancelar
                            </button>
                        </div>
                    @endif

                    <div class="mb-3 row"> 
                        <span wire:loading class="col-md-3 offset-md-5 text-primary">Processing...</span>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>