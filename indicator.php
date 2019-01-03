<?php

$indicatorFile = '/tmp/indicator.tmp';
if (!file_exists($indicatorFile)) {
	return 0;
} else {
	return 1;
}
