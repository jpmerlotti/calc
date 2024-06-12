<div class="flex items-center space-x-6">
    <div class="flex flex-col px-4 space-y-2 items-center">
        <div class="flex flex-col items-start w-full">
            <label for="populationSize">Tamanho total da amostra</label>
            <input type="number" wire:model.number="populationSize" id="populationSize"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="flex flex-col items-start w-full">
            <label for="percentage">Porcentagem de sucesso</label>
            <input type="number" wire:model.number="percentage" id="percentage"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="flex flex-col items-start w-full">
            <label for="confidence">Grau de confiança</label>
            <input type="number" wire:model.number="confidence" id="confidence"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <button type="button" wire:click="calculate"
            class="bg-white border border-amber-500 text-amber-500 rounded py-2 px-10">Enviar</button>
    </div>
    @if($isCalculated)
        <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 flex flex-col">
            <span>Porcentagem de sucesso: {{ number_format($percentage, 2, ',', '.') }}%</span>
            <span>População Total: {{ $populationSize }}</span>
            <span>Ep: {{ number_format($propError, 2, ',', '.') }}</span>
            <span>Intervalo: {{ number_format($min, 2, ',', '.') }} < µ < {{ number_format($max, 2, ',', '.') }}</span>
        </div>
    @endif
</div>
