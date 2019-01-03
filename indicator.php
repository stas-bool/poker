<?php

$indicatorFile = '/tmp/indicator.tmp';
if (!file_exists($indicatorFile)) {
	echo 0;
} else {
	unlink($indicatorFile);
	echo 1;
}
