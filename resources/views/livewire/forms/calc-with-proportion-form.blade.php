<div class="bg-white shadow-md rounded-lg px-4 pt-6 pb-8 mb-4 flex flex-col" x-data="{ active: 'CPTA' }">
    <div class="felx bg-gray-600 text-white rounded-full px-4 py-2">
        <nav class="flex">
            <ul class="flex space-x-4">
                <li class="hover:text-amber-500 focus:text-amber-700" :class="{ 'text-amber-500': active === 'CPTA' }">
                    <button @click="$wire.calcWithProportionSize(), active = 'CPTA'">
                        Calcular com proporção do total da amostra</button>
                </li>
                <li class="hover:text-amber-500 focus:text-amber-700" :class="{ 'text-amber-500': active === 'CPS' }">
                <button @click="$wire.calcWithPercentage(), active = 'CPS'">
                    Calcular com porcentagem de sucesso</button>
                </li>
            </ul>
        </nav>
    </div>
    <div class="mt-4">
        @if ($method === 'CPTA')
            @livewire('components.proportion')
        @elseif ($method === 'CPS')
            @livewire('components.percentage')
        @endif
    </div>
</div>
