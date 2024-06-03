<div class="flex items-center space-x-6">
    <div class="flex flex-col px-4 space-y-2 items-center">
        <div class="flex flex-col items-start w-full">
            <label for="populationSize">Tamanho total da população</label>
            <input type="text" wire:model.number='populationSize' id="populationSize"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="flex flex-col items-start w-full">
            <label for="successPopulationSize">Tamanho da amostra de sucesso</label>
            <input type="text" wire:model.number='successPopulationSize' id="successPopulationSize"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="flex flex-col items-start w-full">
            <label for="confidence">Grau de Confiança</label>
            <input type="number" wire:model.number='confidence' id="confidence"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <button type="button" wire:click='calculate'
        class="bg-white border border-amber-500 text-amber-500 rounded py-2 px-10">Enviar</button>
    </div>
    @if($isCalculated)
        <div class="rounded-lg px-8 pt-6 pb-8 mb-4 flex flex-col">
            <span>Tamanho Total da amostra: {{ $populationSize }}</span>
            <span>Proporção de sucesso: {{ number_format(($successPopulationSize / $populationSize), 2, ',', '.') }}</span>
            <span>Ep: {{ number_format($propError, 2, ',', '.') }}</span>
        </div>
    @endif
</div>
