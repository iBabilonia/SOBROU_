<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- New Fields from users table -->
        <div class="mt-4">
            <x-input-label for="cnpj" :value="__('CNPJ')" />
            <x-text-input id="cnpj" class="block mt-1 w-full" type="text" name="cnpj" :value="old('cnpj')" required autocomplete="cnpj" />
            <x-input-error :messages="$errors->get('cnpj')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="cpf" :value="__('CPF')" />
            <x-text-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')" required autocomplete="cpf" />
            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="imagem_usuario" :value="__('Imagem do Usuário')" />
            <x-text-input id="imagem_usuario" class="block mt-1 w-full" type="text" name="imagem_usuario" :value="old('imagem_usuario')" autocomplete="imagem_usuario" />
            <x-input-error :messages="$errors->get('imagem_usuario')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="telefone" :value="__('Telefone')" />
            <x-text-input id="telefone" class="block mt-1 w-full" type="text" name="telefone" :value="old('telefone')" required autocomplete="telefone" />
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

        <!-- New Fields from endereco_usuario table -->
        <div class="mt-4">
            <x-input-label for="rua" :value="__('Rua')" />
            <x-text-input id="rua" class="block mt-1 w-full" type="text" name="rua" :value="old('rua')" required />
            <x-input-error :messages="$errors->get('rua')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="numero" :value="__('Número')" />
            <x-text-input id="numero" class="block mt-1 w-full" type="text" name="numero" :value="old('numero')" required />
            <x-input-error :messages="$errors->get('numero')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="complemento" :value="__('Complemento')" />
            <x-text-input id="complemento" class="block mt-1 w-full" type="text" name="complemento" :value="old('complemento')" />
            <x-input-error :messages="$errors->get('complemento')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="estado" :value="__('Estado')" />
            <x-text-input id="estado" class="block mt-1 w-full" type="text" name="estado" :value="old('estado')" required />
            <x-input-error :messages="$errors->get('estado')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="cidade" :value="__('Cidade')" />
            <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')" required />
            <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="zona" :value="__('Zona')" />
            <x-text-input id="zona" class="block mt-1 w-full" type="text" name="zona" :value="old('zona')" required />
            <x-input-error :messages="$errors->get('zona')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="tipo" :value="__('Tipo')" />
            <x-text-input id="tipo" class="block mt-1 w-full" type="text" name="tipo" :value="old('tipo')" required />
            <x-input-error :messages="$errors->get('tipo')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="cep" :value="__('CEP')" />
            <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required />
            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="bairro" :value="__('Bairro')" />
            <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" required />
            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
