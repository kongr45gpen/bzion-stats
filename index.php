<?php

namespace kongr45gpen\Bzion_Stats;

require_once 'vendor/autoload.php';

use Carbon\Carbon;

$ashvala = "https://avatars1.githubusercontent.com/u/301920?v=3&s=";
$blast = "https://avatars3.githubusercontent.com/u/328999?v=3&s=";
$alezakos = "https://avatars3.githubusercontent.com/u/720678?v=3&s=";
$allejo = "https://avatars1.githubusercontent.com/u/1246453?v=3&s=";
$tw1sted = "https://avatars1.githubusercontent.com/u/4729254?v=3&s=";
$scrutinizer = "https://avatars1.githubusercontent.com/u/6253494?v=3&s=";

?><!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BZiON stats</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.10/c3.min.css">
    <link rel="stylesheet" href="css/semantic/semantic.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
    <link
        href='https://fonts.googleapis.com/css?family=Vast+Shadow|Audiowide|Fredericka+the+Great|Baumans'
        rel='stylesheet' type='text/css'>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser.
    Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve
    your experience.</p>
<![endif]-->

<nav class="ui large top inverted menu">
    <div class="ui container">
        <div class="header item">BZiON stats</div>
    </div>
</nav>

<!--

//================================================================================================\\
||                                                                                                ||
||  Congrats!! You found the secret message!                                                      ||
||  If you're the_map and you found the secret message, announce it to #sujevo!                   ||
||  If you're not the_map and you haven't found the secret message, also announce it to #sujevo!  ||
||                                                                                                ||
\\================================================================================================//

-->



<header>
    <div>
        <h1 class="ui huge landing inverted header">BZiON</h1>
    </div>
    <?php
    $initial = Carbon::create(2013, 7, 23, 11, 34, 55, 'Etc/GMT+7');
    $release = Carbon::create(2016, 2, 22, 4, 30, 01, 'Europe/Athens');
    $dt = $release->diff($initial);
    ?>
    <div><h2 class="ui duration inverted header"><?php
            ?><?= $dt->y ?> years,
            <?= $dt->m ?> months,
            <?= $dt->d ?> days,
            <?= $dt->h ?> hours,
            <?= $dt->i ?> minutes,
            <?= $dt->s ?> seconds<?php
            ?></h2></div>
</header>

<div class="ui container">
    <img class="random" src="imgs/atom.png" alt="atom icon">


    <div class="ui red inverted hugescreen error segment">
        <h2 class="ui header">
            <i class="plug icon"></i>

            <div class="content">
                Error
            </div>
        </h2>
        <p>
            Your screen is too huge to be supported by this website.
            For optimal viewing experience, please use Internet Explorer with
            an 800x600 screen.
        </p>
    </div>

    <div class="ui basic segment">
        <div class="ui five statistics">
            <div class="ui inverted statistic">
                <div class="value">2,468</div>
                <div class="label">Commits</div>
            </div>
            <div class="ui inverted statistic">
                <div class="value">5</div>
                <div class="label">Contributors</div>
            </div>
            <div class="ui inverted statistic">
                <div class="value">464</div>
                <div class="label">Files</div>
            </div>
            <div class="ui inverted statistic">
                <div class="value">17,978</div>
                <div class="label"><abbr
                        title="Source Lines of Code">SLOC</abbr></div>
            </div>
            <div class="ui inverted statistic">
                <div class="value">11</div>
                <div class="label">Languages</div>
            </div>
        </div>
    </div>

    <!--    70.83%  PHP-->
    <!--    13.43%  HTML-->
    <!--    10.47%  CSS-->
    <!--    3.32%   JavaScript-->
    <!--    1.07%   Cucumber-->
    <!--    0.54%   Shell-->
    <!--    0.30%   ApacheConf-->
    <!--    0.04%   Ruby-->
    <!--    0.01%   Batchfile-->


    <table
        class="ui basic compact collapsing celled unstackable ownership table segment">
        <thead>
        <tr>
            <th class="center aligned single line" colspan="2">Code ownership
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <img class="ui avatar image" src="<?= $ashvala ?>28">
                <span>ashvala</span></td>
            <td class="single line">
                <div class="bar" style="width: 0%"></div>
                <div class="ui left pointing label">0.0%</div>
            </td>
        </tr>
        <tr>
            <td>
                <img class="ui avatar image" src="<?= $scrutinizer ?>28">
                <span>Scrutinizer Auto-Fixer</span></td>
            <td class="single line">
                <div class="bar" style="width: 0.0%"></div>
                <div class="ui left pointing label">0.0%</div>
            </td>
        </tr>
        <tr>
            <td>
                <img class="ui avatar image" src="<?= $blast ?>28">
                <span>blast</span></td>
            <td class="single line">
                <div class="orange bar" style="width: 0.8%"></div>
                <div class="ui left pointing orange label">0.8%</div>
            </td>
        </tr>
        <tr>
            <td>
                <img class="ui avatar image" src="<?= $tw1sted ?>28">
                <span>tw1sted</span></td>
            <td class="single line">
                <div class="invisibar" style="width: 0.8%"></div>
                <div class="green bar" style="width: 2.3%">
                    <div class="caret"></div>
                </div>
                <div class="ui left pointing green label">2.3%</div>
            </td>
        </tr>
        <tr>
            <td>
                <img class="ui avatar image" src="<?= $allejo ?>28">
                <span>allejo</span></td>
            <td class="single line">
                <div class="invisibar" style="width: 3.1%"></div>
                <div class="red bar" style="width: 31.7%">
                    <div class="caret"></div>
                </div>
                <div class="ui left pointing red label">31.7%</div>
            </td>
        </tr>
        <tr>
            <td>
                <img class="ui avatar image" src="<?= $alezakos ?>28">
                <span>alezakos</span></td>
            <td class="single line">
                <div class="last blue bar" style="width: 65.2%">
                    <div class="caret"></div>
                </div>
                <div class="ui last right pointing blue label">65.2%</div>
                <!--                <div class="bar" style="width:100%"></div>-->

            </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <th class="center aligned" colspan="2">
                <small>
                    Source: <a href="https://github.com/oleander/git-fame-rb">git-fame</a>
                </small>
            </th>
        </tr>
        </tfoot>
    </table>

    <section class="ui basic random segment">
        <img class="random muffin" src="imgs/logo_shadowed.png">
    </section>

    <section class="ui attached padded nofill segment">
        <div class="chart" id="languageChart"></div>
    </section>
    <footer class="ui bottom attached small nofill segment">
        Source: <a href="https://github.com/github/linguist">linguist</a>
    </footer>

    <section class="ui basic nofill segment">
        <h1 class="ui inverted header">Build state</h1>

        <div class="chart" id="buildChart"></div>
    </section>

    <section class="ui attached padded nofill segment">
        <h1 class="ui header">Breakers of builds
            <div class="sub header">(Builds broken by contributor) per (Total contributor's builds)</div>
        </h1>
        <div class="chart" id="breakerChart"></div>
    </section>
    <footer class="ui bottom attached small nofill segment">
        Technically,
        <a href="https://github.com/blast007"
           class="ui small red image label"><img src="<?= $blast ?>26" alt=" ">blast</a>
        is the biggest build breaker, with a <strong>50%</strong> fail ratio.
    </footer>

    <section class="ui basic segment">
        <div class="ui four statistics">
            <div class="ui inverted statistic">
                <div class="value"><i class="warning circle icon"></i> 32</div>
                <div class="label">Issues</div>
            </div>
            <div class="ui inverted statistic">
                <div class="value"><i class="star icon"></i> 11</div>
                <div class="label">Stars</div>
            </div>
            <div class="ui inverted statistic">
                <div class="value"><i class="fork icon"></i> 6</div>
                <div class="label">Forks</div>
            </div>
            <div class="ui inverted statistic">
                <div class="value"><i class="code icon"></i>1</div>
                <div class="label">Lines of code per Line of code</div>
            </div>
        </div>
    </section>

    <section class="ui basic segment">
        <div class="ui three huge statistics">
            <div class="ui inverted orange statistic">
                <div class="value">1</div>
                <div class="label">Muffin</div>
            </div>
            <div class="ui inverted red statistic">
                <div class="value">1</div>
                <div class="bacon label">Bacon</div>
            </div>
            <div class="ui inverted yellow statistic">
                <div class="value">2</div>
                <div class="label">Removed Toasts</div>
            </div>
        </div>
    </section>

    <section class="ui basic segment">
        <div class="ui seven tiny statistics">
            <div class="ui inverted statistic">
                <div class="value">5</div>
                <div class="label">Installation<br>steps</div>
            </div>
            <div class="ui inverted statistic">
                <div class="value">1</div>
                <div class="label">Upgrade<br>step</div>
            </div>
            <div class="ui inverted statistic">
                <div class="value">17</div>
                <div class="label">Different<br>models</div>
            </div>
            <div class="ui inverted statistic">
                <div class="value">6</div>
                <div class="label">Git<br>submodules</div>
            </div>
            <div class="ui inverted statistic">
                <div class="value">21</div>
                <div class="label">Composer<br>packages</div>
            </div>
            <div class="ui inverted statistic">
                <div class="value">58</div>
                <div class="label">"Fix the build"<br>commits</div>
            </div>
            <div class="ui inverted statistic">
                <div class="value">No.</div>
                <div class="label">Was all this<br>trouble necessary?</div>
            </div>
        </div>
    </section>

    <section class="ui basic segment">
        <div class="ui four link cards">
            <div class="card">
                <a class="image" href="https://github.com/allejo/bzion/commit/07926d714eb62ed8e2c58d6d3b441c9505a5c214">
                    <img src="<?=$allejo?>290">
                </a>
                <div class="content">
                    <div class="header">First commit</div>
                    <div class="meta">
                        <a href="https://github.com/allejo/bzion/commit/07926d714eb62ed8e2c58d6d3b441c9505a5c214">07926d714eb62ed8e2c58d6d3b441c9505a5c214</a>
                    </div>
                    <div class="description">Initial commit</div>
                </div>
                <div class="extra content">
                    <span><i class="calendar icon"></i>23 Jul 2013</span>
                </div>
            </div>
            <div class="card">
                <a class="image" href="https://github.com/allejo/bzion/commit/f91abf815731637e39ee1acfe307216a84f7f3ac">
                    <img src="<?=$alezakos?>290">
                </a>
                <div class="content">
                    <div class="header">1000<sup>th</sup> commit</div>
                    <div class="meta">
                        <a href="https://github.com/allejo/bzion/commit/f91abf815731637e39ee1acfe307216a84f7f3ac">f91abf815731637e39ee1acfe307216a84f7f3ac</a>
                    </div>
                    <div class="description">Fix the build</div>
                </div>
                <div class="extra content">
                    <span><i class="calendar icon"></i>19 Mar 2014</span>
                </div>
            </div>
            <div class="card">
                <a class="image" href="https://github.com/allejo/bzion/commit/ac93bf832a0342c419eb52e29a1f356a53843882">
                    <img src="<?=$allejo?>290">
                </a>
                <div class="content">
                    <div class="header">2000<sup>th</sup> commit</div>
                    <div class="meta">
                        <a href="https://github.com/allejo/bzion/commit/ac93bf832a0342c419eb52e29a1f356a53843882">ac93bf832a0342c419eb52e29a1f356a53843882</a>
                    </div>
                    <div class="description">Update SASS readme</div>
                </div>
                <div class="extra content">
                    <span><i class="calendar icon"></i>12 Mar 2015</span>
                </div>
            </div>
            <div class="card">
                <a class="image" href="https://github.com/allejo/bzion/commit/2294d30940c3ba6e266130f63f93251a5590b15a">
                    <img src="<?=$blast?>290">
                </a>
                <div class="content">
                    <div class="header">Last commit</div>
                    <div class="meta">
                        <a href="https://github.com/allejo/bzion/commit/2294d30940c3ba6e266130f63f93251a5590b15a">2294d30940c3ba6e266130f63f93251a5590b15a</a>
                    </div>
                    <div class="description">Make it work without the camo section in the configuration file.</div>
                </div>
                <div class="extra content">
                    <span><i class="calendar icon"></i>22 Feb 2016</span>
                </div>
            </div>
        </div>
    </section>

    <section class="ui basic segment">
        <div class="ui massive inverted statistic">
            <div class="value">1</div>
            <div class="label">Unified League</div>
        </div>
    </section>
</div>

<div class="ui container">
    <div class="ui basic segment">
        <a class="ui animated inverted button" href="http://helit.tech/nagstats/">
            <div class="visible content">This is a button.</div>
            <div class="hidden content">That takes you to the @nag stats page.</div>
        </a>
    </div>
</div>

<div class="ui container">
    <div class="ui divider"></div>
    <div class="ui basic small segment credits">
        <p>Background by <a
                href="http://sonicboom1226.deviantart.com/art/Spectral-Radiance-393971158">sonicboom1226</a>
        </p>
    </div>
</div>


<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-2.2.0.min.js"><\/script>')</script>

<script
    src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.10/c3.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.16/d3.min.js"></script>

<!--<script src="css/semantic/semantic.min.js"></script>-->
<script src="js/main.min.js"></script>


<script src="http://192.168.1.4:35729/livereload.js"></script>

</body>
</html>
