<?
require_once 'create.php';

//var_dump($_POST);
$count = 1;
if ($count%2 == 0) {
    search($boys);
    add($girls,($count-1)/2);
} else {
    search($girls);
    add($boys,($count/2)-1);
}
$count++;
if ($count == 11) {
    $count = 1;
}

echo candy_num ($boys).';'.candy_num ($girls);

function search($children) {
    foreach ($_POST as $name => $candy) {
        if ($candy != 0) {
            foreach ($children as $child) {
                if ($child->name == $name) {
                    if ($child->candy - $candy >= 0) {
                        $child->candy -= $candy;
                        return $child->candy;
                    } else {
                        return false;
                    }
                }
            }
        }
    }
}
function add($ch, $index){
    foreach ($_POST as $candy) {
        if ($candy != 0) {
            $ch[$index]->candy += $candy;
        }
    }
}
