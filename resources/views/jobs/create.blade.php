<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">

        <x-forms.input label="Title" name="title" placeholder="Executive Storm Trooper"/>
        <x-forms.input label="Salary" name="salary" placeholder="$90,000 USD"/>
        <x-forms.input label="Location" name="location" placeholder="Gold Coast, Queensland"/>
    </x-forms.form>
</x-layout>
