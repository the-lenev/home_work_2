<?
require_once 'children.php';

$boys = [];
$girls = [];
$boys[] = new Boy ('Petya', 5);
$boys[] = new Boy ('Vasya', 6);
$boys[] = new Boy ('Igor', 7);
$boys[] = new Boy ('Sasha', 5);
$boys[] = new Boy ('Lesha', 6);
$girls[] = new Girl ('Masha', 7);
$girls[] = new Girl ('Anya', 7);
$girls[] = new Girl ('Sveta', 5);
$girls[] = new Girl ('Ira', 6);
$girls[] = new Girl ('Natasha', 5);

$candy_boys = candy_num ($boys);
$candy_girls = candy_num ($girls);
function candy_num ($children) {
    $candy = 0;
    foreach ($children as $ch) {
        $candy += $ch->candy;
    }
    return $candy;
}
