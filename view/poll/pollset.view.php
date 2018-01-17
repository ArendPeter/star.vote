<?php //$this->debug($this->pollSet); // DEBUG ONLY!!! ?>
<?php
if (count($this->pollSet) > 0) {
	echo '<div class="ui-grid-a">';
	$pollCount = count($this->pollSet);
	$pollHalfCount = round($pollCount / 2);
	echo '<div class="ui-block-a"><div class="ui-bar">';
	for ($i = 0; $i < $pollHalfCount; $i++) {
		echo '<a class="pollLink" href="/poll/results/'.$this->pollSet[$i]->pollID.'/">';
			echo $this->pollSet[$i]->question;
			echo '<div class="pollInfo">'.$this->pollSet[$i]->created.'</div>';
		echo '</a>';
	}
	echo '</div></div>';
	echo '<div class="ui-block-b"><div class="ui-bar">';
	for ($i = $pollHalfCount; $i < $pollCount; $i++) {
		echo '<a class="pollLink" href="/poll/results/'.$this->pollSet[$i]->pollID.'/">';
			echo $this->pollSet[$i]->question;
			echo '<div class="pollInfo">'.$this->pollSet[$i]->created.'</div>';
		echo '</a>';
	}
	echo '</div></div>';
	echo '</div><!-- /grid-a -->';
} else {
	echo 'No polls found';
}
?>
