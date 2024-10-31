<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="./styles/Main.css" />
		<title>Welcome ! 😄</title>
	</head>
	<body
		class="d-flex justify-content-center align-items-center vh-100 flex-column"
	>
		<header class="d-flex justify-content-center align-items-center vh-25">
			<h1 class="text-center">Welcome ! 😄</h1>
		</header>

		<div class="d-flex login-form flex-column">
			<form action="#">
				<div class="mb-3">
					<label for="emailinput" class="form-label">Email address</label>
					<input
						type="email"
						class="form-control"
						placeholder="name@example.com"
					/>
				</div>
				<div class="mb-3">
					<label for="passwordLabel" class="form-label">Password</label>
					<input type="password" class="form-control" />
				</div>
				<div class="mb-3">
					<button type="submit" class="btn subButton">Login</button>
					<a href="./pages/register.php">
						<input
							type="button"
							class="btn subButton"
							value="Create An Account"
						/>
					</a>
				</div>
			</form>
		</div>
	</body>
</html>
