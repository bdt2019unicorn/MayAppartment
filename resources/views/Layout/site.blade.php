<!DOCTYPE html>
<html lang="en">
	<head>
		@include("Layout/site/1_head")
	</head>
	<body>
		@include("Layout/site/2_header")

		@yield("contents")

		@include("Layout/site/3_footer")
	</body>
</html>