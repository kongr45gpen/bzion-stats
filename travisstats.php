<?php

set_time_limit(0);

require __DIR__ . '/vendor/autoload.php';

$states = ['total'=>0];
$last = 0;
$final = null;

$commits = [];
$data = [];

while ($last !== $final) {
    $last = $final;

    $url = "https://api.travis-ci.org/repos/allejo/bzion/builds?slug=allejo/bzion";

    if ($last !== null) {
        $url .= "&after_number=$last";
    }

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_HTTPHEADER => [
            'Accept: application/vnd.travis-ci.2+json'
        ]
    ]);

    $out = curl_exec($ch);
//    echo $out;

    $rawdata = json_decode($out, 1);
    $data = array_merge($data, $rawdata['builds']);
//    $commits = array_merge($commits, array_column($rawdata['commits'], null, 'id'));
    $commits += array_column($rawdata['commits'], null, 'id');

    $final = end($data)['number'];

    if ($final === null) {
        echo $out;
        die('error');
    }
    echo "$final\n";
}

$data = array_reverse($data);

$brokenNow = true;

foreach ($data as $build) {
    if ($build['pull_request']) {
        continue;
    }

    if (strtolower($build['state']) == 'passed') {
        $brokenNow = true;
    } elseif (strtolower($build['state']) == 'failed') {
        $build['state'] = ($brokenNow) ? 'broken' : 'stillfailing';
        $brokenNow = false;
    }

    if (!isset($states[ $build['state'] ])) {
        $states[ $build['state'] ] = 1;
    } else {
        $states[ $build['state'] ] += 1;
    }
    $states['total']++;
//        var_dump($commits);

    if (isset($build['commit_id']) && isset($commits[$build['commit_id']])) {
        if (!isset($states[$commits[$build['commit_id']]["author_name"]][$build['state']])) {
            $states[$commits[$build['commit_id']]["author_name"]][$build['state']] = 0;
        }
        $states[$commits[$build['commit_id']]["author_name"]][$build['state']] += 1;
    }
}


$states['last'] = $final;

usleep(50000);

var_dump($states);


echo("\n======== DONE ========\n");