<?php
function isBot() {
    return (
        isset($_SERVER['HTTP_USER_AGENT']) &&
		preg_match('/bot|crawl|spider|mediapartners|slurp|patrol/i', $_SERVER['HTTP_USER_AGENT'])
    );
}
?>