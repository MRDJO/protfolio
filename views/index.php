<?php 
    $title = "Potfolio | Orphée Djahoui Developpeur web";
    $desc = "Mon nom est Djahoui orphée je suis développer web et se site est mon portfolio conçu pour faire une lumière sur mes compétences.";
    $kw = "application web, programmer, developper web, site internet, site web, application mobile, visual basic, python, css, html, php, application de bureau";
    require 'templates/header.php';
?> 
<div class="chargement">
    <h1>DJ</h1>
    <span class="loader"></span>
</div>
<div class="about">
    <div class="left">
        <i><small>  Salut ! Je suis</small></i>
        <h1>DJAHOUI <span>Orphée</span> </h1>
        <span id="line"></span>
    </div>
    <div class="right">
    <!-- full stack -->
        <h4><span>Developper web</span></h4>
        <p>Je développes vos sites web sur-mesure adaptés à vos besoins <br> en prenant soin de les rendres compatibles à tous les supports. <br> <b>Vous recherchez</b> un developper capable de vous mettre sur <br> pied une application de bureau couplée d'une base de donnée <br> pour mieux gérer vos activités ? Vous êtes au bon endroit.</p>
        <div class="link">
            <a href="#presentation">En savoir plus...</a>
            <a href="/contact">Me contacter <i class="mdi mdi-arrow-collapse-right"></i> </a>
        </div>
    </div>
</div>
<div id="presentation">
    <section class="img-illustre">
        <img src="/img/clipart-a-propos.png">
    </section>
    <section class="paragraph">
        <h2> <span>A propos </span></h2>
        <p>
            Moi c'est DJAHOUI Orphée developper web full stack.Je vous aide à créer votre site web sur-mesure selon vos envies et vos exigences. 
            Aujourd'hui plus en plus de personnes utilises un téléphone android au quotidien d'où la nécéssité de rendre responsive votre site 
            web en vue d'une meilleur expérience côté utilisateur ayant de petit écran. Aussi, pour le besoin de vos activités, je suis disposé 
            à vous créer une application de bureau qui va vous permettre de mieux organisée vos tâches si vous êtes pas disposé à avoir un site web.
        </p>
    </section>
</div>
<div id="competences">
    <h2> Mes Compétences</h2>
    <div class="competence">
        <section class="web block">
            <div class="description desc-web">
                <h4>
                    <i class="mdi mdi-language-html5"></i>
                    <i class="mdi mdi-language-php"></i>
                    Developpement web 
                </h4>
                <p>
                    Je vous développe un site web pour exposer vos articles et je prend soin de respecter les règles du référencement naturel 
                    pour faire apparaître votre site parmis les premier résultats de google afin d'augmenter votre audience.Je développe également 
                    des application web si votre besoin est d'avoir une interaction avec vos utilisateurs.
                </p>
                <div class="hover-msg">
                    <a href="">Discutons</a>
                </div>
            </div>
            <div class="skills">
                <section class="skill">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>PHP</span>
                    <span>JAVASCRIPT</span>
                    <span>MySql</span>
                </section>
                <section class="bars">
                    <div class="contenant"> <div class="niveau"> <i class="mdi mdi-language-html5"></i> <span>90%</span></div> </div>
                    <div class="contenant"> <div class="niveau">  <i class="mdi mdi-language-css3"></i> <span>70%</span></div> </div>
                    <div class="contenant"> <div class="niveau">  <i class="mdi mdi-language-php"></i> <span>75%</span></div> </div>
                    <div class="contenant"> <div class="niveau">  <i class="mdi mdi-language-javascript"></i> <span>60%</span></div> </div>
                    <div class="contenant"> <div class="niveau">  <i class="mdi mdi-database"></i> <span>70%</span></div> </div>
                </section>
            </div>
        </section>
        <section class="app block">
            <div class="description">
                <h4>
                    <i class="mdi mdi-language-python"></i>
                    <i class="mdi mdi-visual-studio"></i>
                    Création d'application
                </h4>
                <p>
                    Ici il ne s'agit pas d'application mobile mais d'application native sur windows ou linux.Qu'est ce que sais ? Si votre désire est d'avoir 
                    une application installer sur votre systeme d'exploitation qui pourra vous permettre d'exécuter des tâches selon vos besoin, alors bravo 
                    vous avez taper à la bonne porte. 
                    <!-- Plus d'informations ? <a href="">discutons-en. </a>  -->
                </p>
                <div class="hover-msg">
                    <a href="">Discutons</a>
                </div>
            </div>
            <div class="skills">
                <section class="skill">
                    <span>Python</span>
                    <span>Visual Basic</span>
                    <span>MySql</span>
                </section>
                <section class="bars">
                    <div class="contenant"> <div class="niveau">   <i class="mdi mdi-language-python"></i> <span>60%</span></div> </div>
                    <div class="contenant"> <div class="niveau"> <i class="mdi mdi-dot-net"></i> <span>65%</span></div> </div>
                    <div class="contenant"> <div class="niveau"> <i class="mdi mdi-database"></i> <span>70%</span></div> </div>
                </section>
            </div>
        </section>
    </div>
</div>
    <!-- <section class="skill">
    </section>
    <section class="bars">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </section> -->
<div class="action">
    <div>
        <img src="/img/dialog-question.svg">
    </div>
    <div>
        <h3>Poser votre préoccupation</h3>
        <a href="">WhatsApp</a>
    </div>
</div>
<div class="realisations">
</div>



<?php 
    require 'templates/footer.php';
?>
