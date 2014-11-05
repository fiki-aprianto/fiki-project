<?php
$redis = new Redis() or die("Gagal memuat modul redis.");
$redis->connect('127.0.0.1');

$range = range(1, 100000);

$list = 'user';
if (!$redis->exists ($list))
{
        //creat
        foreach ($range as $key => $value)
{
        $fake_data =[
                'name' => 'FIKI',
                'age' => 22
];

echo "setting Value! $key | ";
$redis->lpush($list, json_encode($fake_data));
}
}

$data = $redis->lrange($list, 0, -1);
print_r($data);
