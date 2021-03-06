<?php
/*
Template Name: Main Page
Template Post Type: page
*/
?>
<?php get_header() ?>
<div id="Top" style="position: absolute; top: -100px;"></div>
<div class="line">

    <?php require_once "inc/head.php" ?>

    <section>

        <?php if (carbon_get_post_meta(get_the_ID(), 'main-slag')) { ?>
            <div class="main__slogan">
                <div class="main__slogan_head">
                    <h1><?php echo carbon_get_post_meta(get_the_ID(), 'main-slag'); ?></h1>
                </div>
            </div>
        <?php } ?>


        <div class="social__line">
            <?php $data_social_links = carbon_get_theme_option('social_links'); ?>
            <?php if (!empty($data_social_links)): ?>
                <?php foreach ($data_social_links as $item_link): ?>
                    <a href="<?php echo $item_link['social_link'] ?>" target="_blank"><span class="icon <?php echo $item_link['fonts_code'] ?>"></span></a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>

    <section>
        <div id="Works"></div>
        <div class="works">
            <div class="works__head">
                <h2>Works</h2>
            </div>
            <div class="works__left">
                <div class="project" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/img_1.webp);">

                    <div class="project__text">
                        Motivation Is The First Step To Success
                    </div>
                    <div class="project__links">
                        <a href="/privet-mir/" target="_blank">Подробнее</a>
                    </div>
                </div>
                <div class="project" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/img_2.webp);">
                    <div class="project__text">
                        Benjamin Franklin S Method Of Habit Formation
                    </div>
                    <div class="project__links">
                        <a href="/privet-mir/" target="_blank">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="works__right">
                <div class="project" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/img_3.webp);">
                    <div class="project__text">
                        How Great Is The Strength Of Your Belief
                    </div>
                    <div class="project__links">
                        <a href="/privet-mir/" target="_blank">Подробнее</a>
                    </div>
                </div>
                <div class="project" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/img_4.webp);">
                    <div class="project__text">
                        Increasing Prosperity With Positive Thinking
                    </div>
                    <div class="project__links">
                        <a href="/privet-mir/" target="_blank">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="About"></div>
        <div class="about">
            <div class="about__head">
                <h2>About</h2>
            </div>
            <div class="about__info">
                <div class="about__info_head">
                    <h3>UX/UI</h3>
                </div>
                <div class="about__info_text myClass">
                    Of course, motivation really isn’t <a href="#" target="_blank">simple at all</a>. That is why there is multi-billion industry focused on self-help books, tapes, seminars, camps, and coaches.
                </div>
            </div>
            <div class="about__info">
                <div class="about__info_head">
                    <h3 id="Motion">Motion</h3>
                </div>
                <div class="about__info_text myClass">
                    As humans, we have progressed in so many ways, but we have lost touch with our bodies, nature, and the power of prayer. There seems to be a spiritual renaissance, of sorts, going on in the
                    “new age” movement.
                </div>
            </div>
            <div class="about__info">
                <div class="about__info_head">
                    <h3>Branding</h3>
                </div>
                <div class="about__info_text myClass">
                    If at anytime, you notice that a friend of yours is getting demotivated about life, try to inspire him/her as much as you can. Even if you are physically away from your friend you can send
                    him inspirational ecards and tell him to download motivational screensavers and wallpapers. So motivate everyone who needs the boost.
                </div>
            </div>
            <div class="about__info">
                <div class="about__info_head">
                    <h3>Development</h3>
                </div>
                <div class="about__info_text myClass">
                    Personally, the importance does not lie in what religion you are; however, a lack of religion does seem to run parallel with depression. This is classified as spiritual illness, which will
                    have a negative effect on you mentally, physically, or totally.
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="Links"></div>
        <div class="links">
            <div class="links__head">
                <h2>Links</h2>
            </div>
            <div class="links__info">
                <div class="links__info_text"><a href=" https://github.com/ValentinGor " target="_blank">Harness The Power Of Words In Your Life</a></div>
                <div class="links__info_year">2018</div>
            </div>
            <div class="links__info">
                <div class="links__info_text"><a href=" https://github.com/ValentinGor " target="_blank">A Starter Guide To Self Improvement</a></div>
                <div class="links__info_year">2018</div>
            </div>
            <div class="links__info">
                <div class="links__info_text"><a href=" https://github.com/ValentinGor " target="_blank">Benjamin Franklin S Method Of Habit Formation</a></div>
                <div class="links__info_year">2018</div>
            </div>
            <div class="links__info">
                <div class="links__info_text"><a href=" https://github.com/ValentinGor " target="_blank">Does Your Life Lack Meaning</a></div>
                <div class="links__info_year">2018</div>
            </div>
            <div class="links__info">
                <div class="links__info_text"><a href=" https://github.com/ValentinGor " target="_blank">Hypnotize Yourself Into The Ghost Of Christmas Future</a></div>
                <div class="links__info_year">2017</div>
            </div>
            <div class="links__info">
                <div class="links__info_text"><a href=" https://github.com/ValentinGor " target="_blank">Hypnotize Yourself Into The Ghost Of Christmas Future</a></div>
                <div class="links__info_year">2016</div>
            </div>
            <div class="links__info">
                <div class="links__info_text"><a href=" https://github.com/ValentinGor " target="_blank">Self Motivation How To Keep Yourself Motivated</a></div>
                <div class="links__info_year">2016</div>
            </div>
        </div>
    </section>
    <span class="line-1"></span>
    <span class="line-2"></span>
    <span class="line-3"></span>
    <span class="line-4"></span>
    <span class="line-5"></span>
</div>
<?php get_footer() ?>
