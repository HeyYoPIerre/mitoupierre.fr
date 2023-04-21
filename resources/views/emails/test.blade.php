<p style="font-weight:700">Nouveau message sur mon site de :</p> {{ $contactData->name }} // {{ $contactData->email }}
{{-- dd($contactData) --}}
<p style="font-weight:700">A propos de :</p> @foreach  (config('constants.subjects') as $id => $name)
    @if ($id == $contactData->subject_constant) 
    {{ $name }}
    @endif
    @endforeach 

<p style="font-weight:700">Message:</p>
{{ $contactData->content }}