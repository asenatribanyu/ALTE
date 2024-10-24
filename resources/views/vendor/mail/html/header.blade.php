@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Politeknik Negeri Padang - Teknik Elektro')
<img src="https://elektro.pnp.ac.id/wp-content/uploads/2024/03/elektro400X79.png" class="logo" alt="PNP Logo" style="width: 320px; height: 63.2px;">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
