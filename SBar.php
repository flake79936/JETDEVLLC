<?PHP 
	if(isset($_POST["submitted"])){
		$result = $fgmembersite->searchEvent();
	}
?>
				<form id='search' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='POST' accept-charset='UTF-8'>
						<input type='hidden' name='submitted' id='submitted' value='1'/>
						
							<span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span>

							<input type='text' name='eventSearch' title="..." id='eventSearch' value='<?php echo $fgmembersite->SafeDisplay('eventSearch') ?>' maxlength="50" /><br/>
							<span id='search_eventSearch_errorloc' class='error'></span>

						<input id="submitButton" type="submit" name="Submit" value="Search" />
				</form>
