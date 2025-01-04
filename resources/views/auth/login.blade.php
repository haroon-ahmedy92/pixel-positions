<x-layout>

    <x-forms.page-heading>LogIn</x-forms.page-heading>

    <x-forms.form method="POST" action="/register" >

        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="Password" name="password" type="password"/>

        <x-forms.button>log in</x-forms.button>

    </x-forms.form>

</x-layout> 