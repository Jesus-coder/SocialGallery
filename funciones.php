<?php

function conversor($bytes, $to, $decimal_places = 1) {
    $formulas = array(
        'K' => number_format($bytes / 1024, $decimal_places),
        'M' => number_format($bytes / 1048576, $decimal_places),
        'G' => number_format($bytes / 1073741824, $decimal_places)
    );
    return isset($formulas[$to]) ? $formulas[$to] : 0;
}


function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

	?>	