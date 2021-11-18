<html>
	<head>
		<title>Advisor Classes</title>
        <link rel="stylesheet" href="style.css">
		<?php
            include("functionality.php")
        ?>
    </head>
	<div class="container">
		<div class="form plan">
			<div class="info">
				<label>Student ID#: (Student ID)</label>
				<label>Major: (Major)</label>
				<label>Expected Graduation Year: (Year)</label>
			</div>
			<div class="content">
				<div>
					<label>4 Years Plan</label>
				</div>
				<div>
					<form method="post">
						<select name="classes">
							<option value="" selected disabled hidden>Select a class</option>
							<option value="class1">Class 1</option>
							<option value="class2">Class 2</option>
							<option value="class3">Class 3</option>
						</select>
						<button type="submit" name="add">Add</button>
						<h6 class="error"><?php echo $output2 ?></h6>
						</div>
						<div class="table">
						<h6 class="error"><?php echo $output1 ?></h6>
							<table>
								<tr>
									<th><input type="radio" id="semester1" name="semester" value="Semester1">Semester 1</th>
									<th><input type="radio" id="semester2" name="semester" value="Semester2">Semester 2</th>
								</tr>
								<?php foreach($classes as $row): array_map("htmlentities", $row); ?>
								<tr>
									<td><?php echo implode("</td><td>", $row); ?></td>
									<td>blank</td>
								</tr>
								<?php endforeach; ?>
								<tr>
									<th><input type="radio" id="semester3" name="semester" value="Semester3">Semester 3</th>
									<th><input type="radio" id="semester4" name="semester" value="Semester4">Semester 4</th>
								</tr>
								<tr>
									<td>blank</td>
									<td>blank</td>
								</tr>
								<tr>
									<th><input type="radio" id="semester5" name="semester" value="Semester5">Semester 5</th>
									<th><input type="radio" id="semester6" name="semester" value="Semester6">Semester 6</th>
								</tr>
								<tr>
									<td>blank</td>
									<td>blank</td>
								</tr>
								<tr>
									<th><input type="radio" id="semester7" name="semester" value="Semester7">Semester 7</th>
									<th><input type="radio" id="semester8" name="semester" value="Semester8">Semester 8</th>
								</tr>
								<tr>
									<td>blank</td>
									<td>blank</td>
								</tr>
							</table>
						</div>
					</form>	
			</div>
		</div>
	</div>
</html>