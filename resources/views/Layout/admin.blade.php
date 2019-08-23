<!DOCTYPE html>
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="" style="">
	<head>
		@include("Layout/admin/1_head")
	</head>
	<body>
		@include("Layout/admin/2_header")

		@include("Layout/admin/3_Menu/3_1_mobile_menu")
		@include("Layout/admin/3_Menu/3_2_main_menu")


		@yield("contents")

		@include("Layout/admin/4_footer")
	</body>
</html>