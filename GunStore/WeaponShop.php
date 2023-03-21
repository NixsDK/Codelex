<?php declare(strict_types=1);

class Person {
    public $name;
    public $cash;
    public $license;
    public $ownedWeapons = [];

    public function addOwnedWeapon(Weapon $weapon): void
    {
        $this->ownedWeapons[] = $weapon;
    }
}

class Weapon {
    public $name;
    public $price;
    public $license;
}

$person = new Person();
$person->name = 'John';
$person->cash = 9000000; //float sucks
$person->license = ['A', 'F'];

$knife = new Weapon();
$knife->name = 'Knife';
$knife->price = 500;
$knife->license = ['A'];

$ak47 = new Weapon();
$ak47->name = 'Ak47';
$ak47->price = 50000;
$ak47->license = ['F'];

$weapons = [
    $knife,
    $ak47
];

$cash = $person->cash / 100;
$license = implode(', ', $person->license);

echo "Welcome, $person->name ($$cash) [$license]\n";
echo "------------------------------\n";

foreach ($weapons as $index => $weapon) {
    $price = $weapon->price / 100;
    $licenses = implode(', ', $weapon->license);
    echo "$index. $weapon->name | \$ $price | $licenses\n";
}

$selection = (int) readline('Please select weapon: ');

if (!isset($weapons[$selection])) {
    echo "Weapon not found";
    exit;
}

$selectedWeapon = $weapons[$selection];

if (!$selectedWeapon instanceof Weapon) {
    echo "Invalid weapon selected";
    exit;
}

if ($person->cash < $selectedWeapon->price) {
    echo "You don't have enough cash to buy this weapon.";
    exit;
}

$commonLicenses = array_intersect($selectedWeapon->license, $person->license);
if (count($commonLicenses) != count($selectedWeapon->license)) {
    echo "You don't have the required license to buy this weapon.";
    exit;
}

$person->cash -= $selectedWeapon->price;
$person->addOwnedWeapon($selectedWeapon);

echo "You have bought a {$selectedWeapon->name} for \${$selectedWeapon->price}. Your remaining cash is \${$person->cash}.\n";
