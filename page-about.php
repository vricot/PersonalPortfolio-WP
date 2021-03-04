<?php get_header(); ?>

<style>
    <?php include 'CSS/header_style.css'; ?>
</style>


<div id="about-banner">
    <img src="<?php echo get_template_directory_uri(); ?>/IMG/honeysamurai_mobile.png" alt="honeysamurai" id="about-banner-img">
</div>
    <main id="about-main">
    <div id="page-container">
        <div id="about-container">
            <div id="name-container">
                <h3>
                    honeysamurai
                </h3>
                <p>
                    Valerie Ricot
                </p>
            </div>
            <div id="img-container">
                <img src="<?php echo get_template_directory_uri(); ?>/IMG/about_me_photo.png"  alt="Decora Selfie" style="max-width: 300px;">
            </div>
            <div id="basic-info-container">
                <h4>Pronouns:</h4>
                <p>
                    She/Her
                </p>
                <h4>
                    Age:
                </h4>
                <p>
                    24 Yrs Old
                </p>
                <h4>
                    Height:
                </h4>
                <p>
                    5'8"
                </p>
                <h4>
                    Birthday:
                </h4>
                <p>
                    February 2<sup>nd</sup>
                </p>
                <h4>
                    Zodiac:
                </h4>
                <p>
                    Aquarius
                </p>
                <h4>
                    Location:
                </h4>
                <p>
                    New York, NY USA
                </p>
            </div>
            <div id="intro-container">
                <h3>
                    About Me
                </h3>
                <p>
                    Hello and welcome! I am a software developer, storyteller, and fashion lover. As a massive weeb, I pull inspiration from anime, harajuku fashion, and retro 90s early internet aesthetics. I like to walk the tight rope between sweet cuteness and the dark corners of the human psyche. Thanks for stopping by!♥
                </p>
                <audio controls id="audio">
                    <source src="<?php echo get_template_directory_uri(); ?>/Moe Shop - Notice (w  TORIENA).mp3" type="audio/mpeg"> 
                 </audio>
            </div>
        </div>
        <div id="education-container">
            <h3>
                Education:
            </h3>
            <p>
                B.S. Film & TV '19<br>
                Boston University
                College of Communication
            </p>
            <h3>
                Skills:
            </h3>
            <p>
                Adobe Photoshop, Illustrator, Animate CC, Premiere Pro, HTML, CSS, JavaScript
                (and more!)
            </p>
            <h3>
                Languages:
            </h3>
            <p>
                English, Spanish, Haitian Creole, Japanese, French
            </p>
        </div>
        <div id="luna-container">
          <img src="<?php echo get_template_directory_uri(); ?>/IMG/luna.gif" alt="Luna from Sailor Moon" id="luna">
        </div>
        <div id="quote-container">
            <p>
                "Don't you think dreams and the internet are similar? They are both areas where the repressed conscious mind vents" - <i>Paprika (2006)</i>
            </p>
        </div>
         <div id="status-container">
             <h4>
                 Status:
             </h4>
             <p>
                Married to The Internet
             </p>
             <h4>
                 Here for:
             </h4>
             <p>
                e-friends♥
             </p>   
         </div>
         <div id="favorites-container">
            <h3>
                Favorite anime series and film:
            </h3> 
            <p>
                Steins;Gate / Tatami Galaxy / Paranoia Agent / Paprika (2006) / Perfect Blue (1997) / Samurai Champloo / Princess Mononoke (1997)
                / Nausicaä of the Valley of the Wind (1984)
            </p>
            <h3>
                Favorite non-anime series and film:
            </h3>
            <p>
                Requiem for a Dream (2000) / Daria / Pretty In Pink (1986) / The Breakfast Club (1985) / Steven Universe / Bojack Horseman / Rick & Morty / Love, Death & Robots / Avatar: The Last Airbender / Spider-Man: Into The Spider-Verse (2018) / My Mad Fat Diary / Skins
            </p>
            <h3>
                Favorite books:
            </h3>
            <p>
                1Q84 by Haruki Murakami / 1984 by George Orwell / Death Note by Takeshi Obata / Uzumaki by Junji Ito /  Harry Potter by J.K. Rowling / The Princess Diaries by Meg Cabot / King of Thorn by Yuji Iwahara
            </p>
            <h3>
                Favorite Songs:
            </h3>
            <p>
                Bite by Spacegirl Gemmy / Kamehameha by Spacegirl Gemmy / Pretty by Coco & Clair Clair / 101101010010100 by Flobots / And All That Could Have Been by NIN / Only by NIN / Kitty by Simi / Talk To Me by Cavetown / Tú by maye / Dumb by Nirvana / Locket by Crumb / There Is A Light That Never Goes Out by The Smiths / Goodbye Yellow Brick Road by Elton John / vs Reality by AYA GLOOMY / Guess My Crush by OTTO
            </p>
         </div>
    </div>
    </main>
    <div class="back-to-top">
        <a href="<?php echo site_url('/about'); ?>">Back To Top</a>
    </div>
    </body>
    

<?php get_footer(); ?>