<?php
function grado($nota) {
    if ($nota >= 60) {
        return "Primera División";
    } elseif ($nota >= 45 && $nota <= 59) {
        return "Segunda División";
    } elseif ($nota >= 33 && $nota <= 44) {
        return "Tercera División";
    } elseif ($nota >= 0 && $nota < 33) {
        return "Reprobado";
    } else {
        return "Nota no válida";
    }
}