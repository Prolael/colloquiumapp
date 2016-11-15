<tr>
	<td>
		{{ $colloquium->start_date->format('H:i d F Y') }}
	</td>
	<td>
		{{ $colloquium->end_date->format('H:i d F Y') }}
	</td>
	<td>
		{{ $colloquium->title }}
	</td>
	<td>
		{{ $colloquium->user->present()->full_name() }}
	</td>
	<td>
		{{ $colloquium->room->building->name }} {{ $colloquium->room->name }}
	</td>
	<td>
		{{ $colloquium->language->name }}
	</td>
	<td>
		{{ $colloquium->theme[0]->name or 'No themes found'}}
	</td>
</tr>