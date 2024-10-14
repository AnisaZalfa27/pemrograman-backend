<?php

$nilai = 70;
if ($nilai > 90){
    echo "Peringkat anda A";
}else if ($nilai > 80){
    echo "peringkat anda B";
}else {
    echo "Peringkat anda C";
}

for ($i = 0; $i < 10; $i++){
    echo "Looping ke $i";
}

$animals = ['cat', 'dog', 'fish','bee'];
foreach ($animals as $animal){
    echo $animal;
}

$zalfa = [
    'nama' => 'Zalfa Khoirunnisa',
    'kelas' => 'se02',
    'nim' => '0110223269',

]


?>