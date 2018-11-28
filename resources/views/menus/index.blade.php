<table border=1>
@foreach( $menus as $menu )
	<tr>
		<td> 
		<a href=" {{ route('menus.show', $menu->id) }}">{{ $menu->name }}
		</td>
		<td> 
			<a href=" {{ route('menus.edit', $menu->id) }} ">Update</a>
		</td>
	</tr>
@endforeach
</table>