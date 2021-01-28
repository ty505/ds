<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
	<meta name="description" content="<?= $Wcms->page('description') ?>">
	<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">

	<meta property="og:url" content="<?= $this->url() ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
	<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
	<meta name="twitter:site" content="<?= $this->url() ?>" />
	<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
	<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<?= $Wcms->css()?>

	<link rel="stylesheet" href="<?= $Wcms->asset('css/style.css')?>">
</head>

<body>
	<?= $Wcms->settings() ?>
	<?= $Wcms->alerts() ?>
	<?= $Wcms->menu() ?>
	<?= $Wcms->url() ?>">
	<?= $Wcms->siteTitle() ?>
	<?= $Wcms->get('config','siteTitle') ?>
	<?= $Wcms->page('content') ?>
	<?= $Wcms->block('subside') ?>
	<?= $Wcms->footer() ?>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<?= $Wcms->js() ?>
	
	
	
	
	<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<title>DragonSpell</title>
	<meta name="author" content="Your Name">
	<meta name="description" content="Example description">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/800895784265973770/803015278156840981/favicon.ico"/>


        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>

<body>
	<header></header>




            <div id="socialBar">
                <a target="_blank" href="https://www.facebook.com/gaming/LegendOfDragonspell"> <i class="fab fa-facebook"></i></a>
                <a target="_blank" href="https://discord.gg/JEteFHe"><i class="fab fa-discord"></i></a>
                <a target="_blank" href="https://twitter.com/SpiffyPiratGame"><i class="fab fa-twitter-square"></i></a>
                      <a id="studioIcon"href="" target="_blank"><img src="https://media.discordapp.net/attachments/799763759202959370/801010469266522122/SPG_HorizontalLogo2.png"></a>
                </div>





                <!--
                <i href="#" class="fa fa-facebook"></i>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fab fa-discord"></a> -->


                       <div id="heroHeader">
            <img class="vert-move" id="logo" src="https://cdn.discordapp.com/attachments/799763759202959370/800694730710974484/LegendOfDragonspell_Logo.png">



<!-- GALLERY -->

            <div id="gallerySection" class="gallery cf">
                     <!--   <h1>~ Look into the Dungeon ~</h1> -->
  <div>
    <img src="https://cdn.discordapp.com/attachments/799763759202959370/800695566526709790/Shop1.png" />
  </div>
  <div>
    <img src="https://cdn.discordapp.com/attachments/799763759202959370/800695571353436160/Battle_1.png" />
  </div>
  <div>
    <img src="https://media.discordapp.net/attachments/800895784265973770/800896090131398666/concept_1.png" />
  </div>
  <div>
    <img src="https://media.discordapp.net/attachments/800895784265973770/800896090949419028/concept_2.png" />
  </div>
  <div>
    <img src="https://media.discordapp.net/attachments/800895784265973770/800896092883386368/concept_3.png" />
  </div>
  <div>
    <img src="https://media.discordapp.net/attachments/800895784265973770/800896094044815360/concept_4.png" />
  </div>
        </div>


                <div class="center" id="featureSection">
                



                    <h1>Classic Turn-Based Combat</h1>

                    <p>Combat gameplay features the classic turn-based system you know, but with a few new twists:
                    Strategic defense/parry system, a unique “Halt” system to prevent monsters from fleeing, and an environmental system that gives more life and variety to battles. There are random encounters within easily noticeable areas to retain the classic RPG feel but allow you to move freely around.</p>


                    <h1> Gear Up</h1>

                     <p>Choose gear based on your play style, from one-handed swords with shields, or two-handed weapons like axes with increased critical attacks, or ranged weapons with multiple attack options. Upgrade weapons and armor at the House of Swords and maximize your equipment’s potential.</p>

                    <h1>Freedom to Explore</h1>

                    <p>Climb, vault, use special items, or ride your horse as you run through the world with exploration that feels more like an adventure game than classic RPG simple grid movement.</p>

                    <h1>A Unique Story</h1>

                    <p>Experience an adventure spanning 12 dungeons, unique characters, intrigue, twists, secrets, and multiple endings.</p>

                    <h1>Mountains of Monsters</h1>

                    <p>Battle against over 140 different animated monsters, ranging from familiar beasts from mythology to never-before-seen creatures, ranging from small to giant screen-filling behemoths!</p>

                </div>


     

             
                


                <div id="teamSection">
                  <div class="memberContainer">
                    <img src="https://media.discordapp.net/attachments/800895784265973770/803511483752775700/unknown.png" alt="Avatar" class="image" />
                      <div class="overlay">
                        <div class="name">Adam Pippen</div>
                        <div class="role">Designer / Developer</div>
                      </div>
                    </div>


                      <div class="memberContainer">
                        <img src="https://media.discordapp.net/attachments/800895784265973770/803511483752775700/unknown.png" alt="Avatar" class="image" />
                          <div class="overlay">
                            <div class="name">Adam Pippen</div>
                            <div class="role">Designer / Developer</div>
                          </div>
                        </div>

                </div>

    </div>
        <div id="characterSection">
            <img id="charLeftPos" src="https://media.discordapp.net/attachments/800895784265973770/800957231570616350/char.png" />
            <h2>The Wizard of Darkness </h2>
            <p id="charTxt">Kokohl is the Wizard of Darkness and one of the 12 powerful magic users in the world. He desired more power and one by one, he defeated each of the other wizards and sorceresses and imprisoned them in a sealing scroll. He placed each scroll in a magical chest he had made to contain their power. He then had a magical set of armor created with the chest plate fashioned with stones that allow him to channel the power of each soul scroll in their scroll chest. Each soul scroll chest curses the land they are in and to be sure that he can stay in power, Kohkol placed a giant beast using the power of each scroll to guard the chest that contains it. His motivations are not clear, but it is certain that he is a master of manipulating the minds of those around him to achieve his desires.</p>
        </div>

    <!--       <img id="test" src="C:\Users\Dell\Desktop\dragonspell\LoDs_coverart_notitle_web.png"><img> -->
	<main></main>


	<footer>
        <div id="footer">
    <div id="footerCredit">
    <span>
        Handcrafted with <i class="fa fa-heart pulse"></i> by <a href="https://tylersfolio.com" target="_blank">Tyler Waite</a>
    </span>
        </div>
        </div>

        <div id=footer2></div>

    </footer>
	<script type="text/javascript" src=""></script>

</body>
</html>