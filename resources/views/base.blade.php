<!DOCTYPE html>
<html>
<head>
	<!-- Standard Meta -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<!-- Site Properities -->
	<title>@section('title')Tucson @show</title>

	<link rel="stylesheet" type="text/css" href="{!! asset('semantic/components/reset.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('semantic/components/site.css') !!}">

	<link rel="stylesheet" type="text/css" href="{!! asset('semantic/components/container.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('semantic/components/grid.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('semantic/components/header.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('semantic/components/card.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('semantic/components/image.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('semantic/components/menu.css') !!}">

	<link rel="stylesheet" type="text/css" href="{!! asset('semantic/components/divider.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('semantic/components/list.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('semantic/components/segment.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('semantic/components/dropdown.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('semantic/components/icon.css') !!}">

	<style type="text/css">
		body {
			background-color: #EEE;
		}
		.ui.menu .item img.logo {
			margin-right: 1.5em;
		}
		.main.container {
			margin-top: 7em;
		}
		.wireframe {
			margin-top: 2em;
		}
		.ui.footer.segment {
			margin: 5em 0em 0em;
			padding: 5em 0em;
		}
	</style>

</head>
<body>
	@yield('content')
</body>

</html>