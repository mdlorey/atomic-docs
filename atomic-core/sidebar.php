<?php include ("partial-mngr/config.php");?>


<span class="atoms-side_show">Show</span>
<aside class="atoms-side">

	<span class="atoms-side_hide">Hide Sidebar</span>


	<nav>
		<ul class="atoms-nav">
			<li class="atom-side_head"><a href="#">Components</a></li>
			<li>
				<div class="atomic-link-grp">
					<span class="atomic-link-show">+</span>
					<a class="atomic-link-main" href="utilities.php">Utilities</a>
				</div>
				<ul class="atoms-sub-menu atoms-sub-utilities">
				<li class="atomic-subform-group">
					
						<form class="atomic-sub-form " action="atomic-core/partial-mngr/create-mod.php" method="post">
							<input type="text" class="form-control" id="inputDefault" name="modName" placeholder="Create Component">
							<input type="hidden" name="partialDir" value="<?php echo $partialDirFour;?>"/>
							<input type="hidden" name="path" value="<?php echo $partDirFourPath;?>"/>
							<input type="hidden" name="compPath" value="<?php echo $compDirFourPath;?>"/>
						</form>
						<form class="atomic-sub-form " action="atomic-core/partial-mngr/delete-mod.php" method="post">
							<input type="text" class="form-control" id="inputDefault" name="partialName" placeholder="Delete Component">
							<input type="hidden" name="partialDir" value="<?php echo $partialDirFour;?>"/>
						</form>

					</li>
				<?php
						$orig = "$compRoot/$partialDirFour";
						
						if ($dir = opendir($orig)) {
				
				
								while ($file = readdir($dir)) {
								$ok = "true";
								$filename = $file;
								$filename = basename($filename, ".php");
								
								if ($file == "."){
								$ok = "false";
								}
								else if ($file == ".."){
								$ok = "false";
								}
								if ($ok == "true"){
									echo "<li><a href= '#$filename'>$filename</a></li>";
								}
								}
				
								closedir($dir);
						}
					?>
					</ul>
			</li>
				
		
			<li>
				<div class="atomic-link-grp">
					<span class="atomic-link-show">+</span>
					<a class="atomic-link-main" href="atoms.php">Atoms</a>
				</div>
				<ul class="atoms-sub-menu">
					<li class="atomic-subform-group">
					
						<form class="atomic-sub-form " action="atomic-core/partial-mngr/create-mod.php" method="post">
							<input type="text" class="form-control" id="inputDefault" name="modName" placeholder="Create Component">
							<!--<button type="Submit" class="btn btn-primary">Create</button>-->
							<input type="hidden" name="partialDir" value="<?php echo $partialDirOne;?>"/>
							<input type="hidden" name="path" value="<?php echo $partDirOnePath;?>"/>
							<input type="hidden" name="compPath" value="<?php echo $compDirOnePath;?>"/>
						</form>
						<form class="atomic-sub-form " action="atomic-core/partial-mngr/delete-mod.php" method="post">
							<input type="text" class="form-control" id="inputDefault" name="partialName" placeholder="Delete Component">
							<input type="hidden" name="partialDir" value="<?php echo $partialDirOne;?>"/>
							<!--<button type="Submit" class="btn btn-danger">Delete</button>-->
						</form>

					</li>
				<?php
						$orig = "$compRoot/$partialDirOne";
						
						if ($dir = opendir($orig)) {
				
				
								while ($file = readdir($dir)) {
								$ok = "true";
								$filename = $file;
								$filename = basename($filename, ".php");
								
								if ($file == "."){
								$ok = "false";
								}
								else if ($file == ".."){
								$ok = "false";
								}
								if ($ok == "true"){
									echo "<li><a href= '#$filename'>$filename</a></li>";
								}
								}
				
								closedir($dir);
						}
					?>
					</ul>
			</li>
				
			<li>
				<div class="atomic-link-grp">
					<span class="atomic-link-show">+</span>
					<a class="atomic-link-main" href="molecules.php">Molecules</a>
				</div>
				<ul class="atoms-sub-menu atoms-sub-molecules">
				<li class="atomic-subform-group">
					
						<form class="atomic-sub-form " action="atomic-core/partial-mngr/create-mod.php" method="post">
							<input type="text" class="form-control" id="inputDefault" name="modName" placeholder="Create Component">
							<input type="hidden" name="partialDir" value="<?php echo $partialDirTwo;?>"/>
							<input type="hidden" name="path" value="<?php echo $partDirTwoPath;?>"/>
							<input type="hidden" name="compPath" value="<?php echo $compDirTwoPath;?>"/>
						</form>
						<form class="atomic-sub-form " action="atomic-core/partial-mngr/delete-mod.php" method="post">
							<input type="text" class="form-control" id="inputDefault" name="partialName" placeholder="Delete Component">
							<input type="hidden" name="partialDir" value="<?php echo $partialDirTwo;?>"/>
						</form>

					</li>
					<?php
							$orig = "$compRoot/$partialDirTwo";
							
							if ($dir = opendir($orig)) {
					
					
									while ($file = readdir($dir)) {
									$ok = "true";
									$filename = $file;
									$filename = basename($filename, ".php");
									
									if ($file == "."){
									$ok = "false";
									}
									else if ($file == ".."){
									$ok = "false";
									}
									if ($ok == "true"){
										echo "<li><a href= '#$filename'>$filename</a></li>";
									}
									}
					
									closedir($dir);
							}
						?>
					</ul>
			</li>
					
			<li>
				<div class="atomic-link-grp">
					<span class="atomic-link-show">+</span>
					<a class="atomic-link-main" href="organisms.php">Organisms</a>
				</div>
				<ul class="atoms-sub-menu atoms-sub-molecules">
				<li class="atomic-subform-group">
					
						<form class="atomic-sub-form " action="atomic-core/partial-mngr/create-mod.php" method="post">
							<input type="text" class="form-control" id="inputDefault" name="modName" placeholder="Create Component">
							<input type="hidden" name="partialDir" value="<?php echo $partialDirThree;?>"/>
							<input type="hidden" name="path" value="<?php echo $partDirThreePath;?>"/>
							<input type="hidden" name="compPath" value="<?php echo $compDirThreePath;?>"/>
						</form>
						<form class="atomic-sub-form " action="atomic-core/partial-mngr/delete-mod.php" method="post">
							<input type="text" class="form-control" id="inputDefault" name="partialName" placeholder="Delete Component">
							<input type="hidden" name="partialDir" value="<?php echo $partialDirThree;?>"/>
						</form>

					</li>
					<?php
							$orig = "$compRoot/$partialDirThree";
							
							if ($dir = opendir($orig)) {
					
					
									while ($file = readdir($dir)) {
									$ok = "true";
									$filename = $file;
									$filename = basename($filename, ".php");
									
									if ($file == "."){
									$ok = "false";
									}
									else if ($file == ".."){
									$ok = "false";
									}
									if ($ok == "true"){
										echo "<li><a href= '#$filename'>$filename</a></li>";
									}
									}
					
									closedir($dir);
							}
						?>
					</ul>
			</li>
			
			<!--<li class="atom-side_head"><a href="#">Misc</a></li>
			<li><a class="atomic-link-main"  href="atomic-core/partial-mngr/index.php" target="_blank">Component MNGR</a></li>-->
		</ul>
	</nav>
</aside>