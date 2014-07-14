<!-- 					<li>		<div id='fg_membersite' align="center"> -->
<!-- 			<fieldset align="left"> -->
<!-- 				<legend>Search</legend> -->
				<form id='search' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='POST' accept-charset='UTF-8'>
						<input type='hidden' name='submitted' id='submitted' value='1'/>
						
<!-- 						<div> -->
							<span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span>
<!-- 						</div> -->
						
<!-- 						<div class='container'> -->
<!-- 							<label for='eventSearch' >Search:</label><br/> -->
							<input type='text' name='eventSearch' title="..." id='eventSearch' value='<?php echo $fgmembersite->SafeDisplay('eventSearch') ?>' maxlength="50" /><br/>
							<span id='search_eventSearch_errorloc' class='error'></span>
<!-- 						</div> -->
						
						<input id="submitButton" type="submit" name="Submit" value="Search" />
				</form>
<!-- 			</fieldset> -->

<!-- 					<li>Welcome <?= $fgmembersite->UserFullName() ?>!</li> -->