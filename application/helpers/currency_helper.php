<?php
function toBrazilMoney($number) {
    return "R$ " . number_format($number, 2, ",", ".");
}
