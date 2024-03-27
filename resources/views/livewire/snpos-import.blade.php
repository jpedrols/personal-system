<div>
    <form wire:submit="save">
        @csrf
        <div class="modal-body">
            <div class="fallback">
                <input name="file" type="file" wire:model="planilha" />

                <br>

                {{-- <div wire:loading>
                    Importando...
                </div> --}}

                @error('planilha') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn bg-gradient-primary">Importar</button>
        </div>
    </form>
</div>
