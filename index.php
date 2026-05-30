<?php
function canFormWord($word, $segments) {
    $a = $segments[0];
    $b = $segments[1];
    if ($a . $b == $word) return true;
    if ($b . $a == $word) return true;
    return false;
}
echo canFormWord('umpk', ['um', 'pk']) ? 'true' : 'false';
echo "\n";
echo canFormWord('umpk', ['u', 'pkm']) ? 'true' : 'false';
echo "\n";
echo canFormWord('umpk', ['ym', 'pk']) ? 'true' : 'false';
?>
