<div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 flex flex-col">
    <div class="mb-4 flex items-end">
        <div class="flex flex-col items-start px-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="value">
                Valor
            </label>
            <input
                wire:model="value"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="value"
                type="number"
                placeholder="Value"
            >
        </div>
        <button type="button" class="bg-white border border-amber-500 text-amber-500 rounded py-1.5 px-4"
            wire:click='addValue'>
            Adicionar Valor
        </button>
    </div>
    <div class="flex items-center space-x-2">
        <span>Tamanho da amostra: </span><span class="text-amber-500">{{ count($values) }}</span>
    </div>

</div>
