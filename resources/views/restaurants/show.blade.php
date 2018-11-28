<body style="background:url({{URL('/')}}/img/{{ $restaurant->img_path}}); text-align:center">
<div style="background: #ccc; display:inline-block; padding:0 20px; border-radius:10px; box-shadow: 0px 5px 15px #ccc;" >
<h1>
Име:
	{{ $restaurant->name }}
</h1>
<p>
Свободни места:
	{{ $restaurant->friday_capacity}}
</p>
<p>
Адрес:
	{{ $restaurant->address }}
</p>
<p>
<p>
Разгледай менюто:
<a href=" {{ route('menus.show', $restaurant->menu->id) }}">	{{ $restaurant->menu->name }}
</p>


</div>
</body>