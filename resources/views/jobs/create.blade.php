<x-layout>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.page-heading>Publish New Job!</x-forms.page-heading>

<x-forms.input label="Title" name="title" placeholder="CEO"/>
<x-forms.input label="Salary" name="salary" placeholder="$50,000"/>
<x-forms.input label="Location" name="location" placeholder="Winter Park, Florida"/>

<x-forms.select label="schedule" name="schedule">
       <option>Part Time</option>
       <option>Full Time</option>
</x-forms.select>

<x-forms.input label="Url" name="url" placeholder="https://laracasts.com/browse/instructors/JeffreyWay"/>
<x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

<x-forms.divider/>


<x-forms.input label="Tags (Commas separated)" name="tags" placeholder="Laracast, video, Education"/>

<x-forms.button class="mt-6">Publish</x-forms.button>

    </x-forms.form>
</x-layout>