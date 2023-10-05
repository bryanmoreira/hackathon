<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-logo-image />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Nome') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('E-mail') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="crm" value="{{ __('CRM') }}" />
                <x-input id="crm" class="block mt-1 w-full" type="number" name="crm" :value="old('crm')" required autofocus autocomplete="crm" maxlength="7"/>
            </div>
            

            <div class="mt-4">
                <label for="specialty" class="block font-medium text-sm text-gray-700">Especialidade</label>
                <select id="specialty" name="specialty" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                    <option value="" disabled selected>Selecione uma especialidade</option>
                    <option value="Alergia e Imunologia">Alergia e Imunologia</option>
                    <option value="Anatomia Patológica">Anatomia Patológica</option>
                    <option value="Anestesiologia">Anestesiologia</option>
                    <option value="Angiologia">Angiologia</option>
                    <option value="Cancerologia">Cancerologia</option>
                    <option value="Cardiologia">Cardiologia</option>
                    <option value="Cirurgia Cardiovascular">Cirurgia Cardiovascular</option>
                    <option value="Cirurgia da Mão">Cirurgia da Mão</option>
                    <option value="Cirurgia de Cabeça e Pescoço">Cirurgia de Cabeça e Pescoço</option>
                    <option value="Cirurgia do Aparelho Digestivo">Cirurgia do Aparelho Digestivo</option>
                    <option value="Cirurgia Geral">Cirurgia Geral</option>
                    <option value="Cirurgia Pediátrica">Cirurgia Pediátrica</option>
                    <option value="Cirurgia Plástica">Cirurgia Plástica</option>
                    <option value="Cirurgia Torácica">Cirurgia Torácica</option>
                    <option value="Cirurgia Vascular">Cirurgia Vascular</option>
                    <option value="Clínica Médica">Clínica Médica</option>
                    <option value="Coloproctologia">Coloproctologia</option>
                    <option value="Dermatologia">Dermatologia</option>
                    <option value="Endocrinologia e Metabologia">Endocrinologia e Metabologia</option>
                    <option value="Endoscopia">Endoscopia</option>
                    <option value="Gastroenterologia">Gastroenterologia</option>
                    <option value="Genética Médica">Genética Médica</option>
                    <option value="Geriatria">Geriatria</option>
                    <option value="Ginecologia e Obstetrícia">Ginecologia e Obstetrícia</option>
                    <option value="Hematologia e Hemoterapia">Hematologia e Hemoterapia</option>
                    <option value="Homeopatia">Homeopatia</option>
                    <option value="Infectologia">Infectologia</option>
                    <option value="Mastologia">Mastologia</option>
                    <option value="Medicina de Emergência">Medicina de Emergência</option>
                    <option value="Medicina de Família e Comunidade">Medicina de Família e Comunidade</option>
                    <option value="Medicina do Trabalho">Medicina do Trabalho</option>
                    <option value="Medicina Esportiva">Medicina Esportiva</option>
                    <option value="Medicina Física e Reabilitação">Medicina Física e Reabilitação</option>
                    <option value="Medicina Intensiva">Medicina Intensiva</option>
                    <option value="Medicina Legal">Medicina Legal</option>
                    <option value="Medicina Nuclear">Medicina Nuclear</option>
                    <option value="Medicina Preventiva e Social">Medicina Preventiva e Social</option>
                    <option value="Nefrologia">Nefrologia</option>
                    <option value="Neurocirurgia">Neurocirurgia</option>
                    <option value="Neurologia">Neurologia</option>
                    <option value="Nutrologia">Nutrologia</option>
                    <option value="Oftalmologia">Oftalmologia</option>
                    <option value="Ortopedia e Traumatologia">Ortopedia e Traumatologia</option>
                    <option value="Otorrinolaringologia">Otorrinolaringologia</option>
                    <option value="Patologia">Patologia</option>
                    <option value="Patologia Clínica/Medicina Laboratorial">Patologia Clínica/Medicina Laboratorial</option>
                    <option value="Pediatria">Pediatria</option>
                    <option value="Pneumologia">Pneumologia</option>
                    <option value="Psiquiatria">Psiquiatria</option>
                    <option value="Radiologia e Diagnóstico por Imagem">Radiologia e Diagnóstico por Imagem</option>
                    <option value="Radioterapia">Radioterapia</option>
                    <option value="Reumatologia">Reumatologia</option>
                    <option value="Urologia">Urologia</option>
                </select>
            </div>
            

            <div class="mt-4">
                <x-label for="password" value="{{ __('Senha') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirmar Senha') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Já possui cadastro?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registrar') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
