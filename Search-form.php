<!DOCTYPE html>
<html dir="ltr" lang="en-US" >
<head>
<!-- Script -->
		<script>
			function goBack() {
				window.history.back()
			}
		</script>
<!-- End of Script		 -->

<title>Search</title>
</head>
<body>
<h1>Search</h1>
<form action="search.php" method="get">
  <label>Search:
  <input type="text" name="Search" />
  </label>
  <input type="submit" value="Search" />
  <input type="button" onclick="goBack();" value="Go Back" />
</form>
</body>
</html>