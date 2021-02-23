<?php include 'form.php';

?> 


<!DOCTYPE html>
<html lang="fr">
  <head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV CRAMPE WILLIAM</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./aos/aos.css">
  </head>

  <body>
   <?php echo $alert; ?>
        <div class="wrapper" id="acceuil">
          <header >
          <nav>
            <div class="menu-icon">
              <i class="fa fa-bars fa-2x"></i>
            </div>

            <div class="menu">
              <ul>
                <li><a href="#acceuil" class="smooth-scroll">Acceuil</a></li>
                <li><a href="#Presentation" class="smooth-scroll">Présentation</a></li>
                <li><a href="#Competence" class="smooth-scroll">Compétences</a></li>
                <li><a href="#parcours" class="smooth-scroll">Parcours Professionnels</a></li>
                <li><a href="#Formation" class="smooth-scroll">Formations</a></li>
                <li><a href="#Information" class="smooth-scroll">Information</a></li>
                <li><a href="#Contact" class="smooth-scroll">Contact</a></li>
              </ul>
            </div>
           </nav>
           <div class="fix">
           <span class="bienvenue"></span>
           </div>
       </header>
    </div>
         
    <section class="container" id="Presentation">
    <h1>Présentation</h1>
      <div class="color-info">
          <div class="contact">

            <div class="contact-flex">
                <p>Nom:</p>
                <p> Crampe William</p>
            </div>

            <div class="contact-flex">
                <p>Adresse:</p>
                <p> 29 rue butte citronnelle Etang-Sale 97427</p>
            </div>

            <div class="contact-flex">
                <p>Permis:</p>
                <p> Voiture</p>
            </div>
         </div>
      </div>
    </section>

    <section class="container" id="Competence">
      <h1>Compétences</h1>

      <div  data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <h2>Professionnelle</h2>
           <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="progress-container progress-warning"><span class="progress-badge">Diagnostics hardware</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-warning" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                      <span class="progress-value">95%</span>
                   </div>
                 </div>
              </div>
                     
              <div class="col-md-6">
                <div class="progress-container progress-warning"><span class="progress-badge">Réparation software</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-warning" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div><span class="progress-value">90%</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="progress-container progress-warning"><span class="progress-badge">Html & Css</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-warning" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div><span class="progress-value">80%</span>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="progress-container progress-warning"><span class="progress-badge">Maintenance réseaux</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-warning" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div><span class="progress-value">75%%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>      
      </div>

      <div  data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <h2>Personnelle</h2>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="progress-container progress-warning"><span class="progress-badge">Sérieux</span>
                  <div class="progress">
                      <div class="progress-bar progress-bar-warning" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div><span class="progress-value">90%</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="progress-container progress-warning"><span class="progress-badge">Motivation</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-warning" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div><span class="progress-value">100%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="progress-container progress-warning"><span class="progress-badge">pedagogie</span>
                  <div class="progress">
                      <div class="progress-bar progress-bar-warning" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div><span class="progress-value">85%</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="progress-container progress-warning"><span class="progress-badge">adaptation</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-warning" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div><span class="progress-value">80%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>

         
      
      <section id="parcours" class="background1">
        <h3>Parcours</h3>
        <div>      
          <div class="timeline">
            <div class="aos-item" 
              data-aos="zoom-out-up"
              data-aos-duration="1000"
              data-aos-once="false">
                <h4>Maintenance d'un parc informatique - Help On Call LTD (ile Maurice)</h4>
                <h6>Février 2020 - Mars 2020 (Durée de 4 semaines)</h6>
                <p>Gestion et maintenance d'un parc 
                   informatique, répartion, installation, mise en service de systeme informatique.
                   Création d'architecture de réseau et configuration des switchs, routeurs sous Packet Tracer.
                   Assistance a distance d'une entreprise informatique (service hotline). </p>
            </div>
          </div>
          
          <div class="timeline">
            <div class="aos-item" 
              data-aos="zoom-out-up"
              data-aos-duration="500"
              data-aos-once="false">
                <h4>Maintenance d'un parc informatique - Lycée Antoine Saint Exupéry</h4>
                <h6>Octobre 2019 - Novembre 2019 (Durée de 4 semaines)</h6>
                <p>Réparation et installation d'unités centrale, imprimante.
                  Brassage de cable, detection panne ethernet. </p>
            </div>
          </div>

          <div class="timeline">
            <div class="aos-item" 
              data-aos="zoom-out-up"
              data-aos-duration="500"
              data-aos-once="false">
                <h4>Techniciens informatique - SUD INFORMATIQUE</h4>
                <h6>Novembre 2017- Décembre 2019 (4 périodes de stage d'une durée de 4 semaines par période)</h6>
                <p>Acceuil des clients, diagnostic rapide des erreurs devant le client. Diagnostic approfondi, 
                  réparation hardware et software. Récuperations de données, Ghoste de disque dure. Installation 
                  de caméra de surveillance et configuration dans plusieurs entreprises. Réparation de tablette et de téléphone sous android,
                  apple.</p>
            </div>
          </div>
        </div>       
      </section>

      <section class="container" id="Formation">
        <h1>Formations</h1>
          <div class="aos-item parent" 
            data-aos="zoom-out-up"
            data-aos-duration="500"
            data-aos-once="false">

              <div class="child">
                  <img src="./img/logo-l3b-version-2.png" alt="LOGO TROIS BASSINS">
              </div>
              <div class="child1">
                <h3>BTS Système Numérique Option Informatique et Réseau</h3>
                  <div class="face">
                    <p>Année 2020 - 2022</p>
                    <p>En cours de formation</p>
                  </div>
              </div>
          </div>
        
                

          <div class="aos-item parent" 
            data-aos="zoom-out-up"
            data-aos-duration="500"
            data-aos-once="false">
              <div class="child">
                <img src="./img/logo-l3b-version-2.png" alt="LOGO TROIS BASSINS">
              </div>
              <div class="child1">
                <h3>Bac Professionnel Système Numérique </h3>
                  <div class="face">
                    <p>Année 2017 - 2020</p>
                    <p>Lycée de Trois Bassins</p>
                    <p>Mention très bien 17.24 de moyenne</p>

                  </div>
              </div>
          </div>
           
          <div class="aos-item parent" 
            data-aos="zoom-out-up"
            data-aos-duration="500"
            data-aos-once="false">
              <div class="child">
                <img src="./img/logo-l3b-version-2.png" alt="LOGO TROIS BASSINS">
              </div>
                      
              <div class="child1">
                <h3>BEP Système Numérique </h3>
                    <div class="face">
                      <p>Année 2017 - 2019</p>
                      <p>Lycée de Trois Bassins</p>
                    </div>
                </div>
          </div>
      </section>
      <section class="container" id="Information">
      <h1>Information</h1>
      <h2>Caractéristique et mise ne place du site:</h2>
      <p>Grâce a mes études dans l'informatique j'ai pu apprendre a mettre en place différents structure qui dépend du cahier des charges. Le site CV est construit et hébergé par moi même. Pour cela j'ai installer un serveur de la distributions debians sur un ordinateur qui lui est en marche h24 et 7j/7. Sur ce serveur se trouve un serveur web, un serveur voip et un serveur de fichier "Owncloud". Comme serveur web j'ai choisi nginx, mais appache est encore présent car je l'utilise comme debbuger quand un site ne marche pas. Afin que le site sois disponible en ligne j'ai ainsi trouver un serveur dns gratuit avec renouvellement chaque mois "noip.com". Bien sure tous les configuration ont étais faite par moi et appris en autodidacte.
      </p>
      <h2>Caractéristique </h2>
      <div>
        <p>Quelque information:</p>
        <ul>
          <li>Proccesseur: intel core i5 6ème générations</li>
          <li>Ram: 8Go</li>
          <li>Disque dure: 250Go</li>
          <li>Sytème d'exploitations: Debian linux 10 </li>
          <li>Ports ouvert et mise en place d'un pare-feu.</li>
         </ul>
         <p>Liste des serveurs:</p>

         <ul>
           <li>Serveur Web: Appache2, Nginx</li>
           <li>Base de donnés: Mysql</li>
           <li>Serveur de stockage: Proftpd, owncloud</li>
           <li>Accès a distance: Webmin, ssh</li>
           <li>Serveur voip: Asterisk voip</li>

         </ul>

         <p>Site de CV</p>

         <ul>
           <li>Html 5, Css, javascript</li>
           <li>Formulaire de contacte stock les informations dans une base de donnée et envoie via Phpmails</li>
           <li>Animation fait par les librairie: aos.js, typed.min.js.</li>
                 
         </ul>
         
      </div>
      
        
           
      </section>

      <section class="container" id="Contact">
      <h1>Contact</h1>
      <p>Afin de pouvoir me contacter en tout sécuriter je vous invite a remplire les champs ci-dessous avec des informations valides.
        Merci de votre compréhension.
      </p>
        <div class="contact-form">
          <form class="contact" action="" method="post">
            <input type="text" name="name" class="text-box" placeholder="Votre nom et prénom" required>
            <input type="email" name="email" class="text-box" placeholder="Votre mail" required>
            <textarea name="message" rows="5" placeholder="Votre message" required></textarea>
            <input type="submit" name="submit" class="send-btn" value="Envoyer">
          </form>
        </div>
    </section>

    <script src="./aos/aos.js" type="text/javascript"></script>
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="./js/typed.min.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="Script.js" type="text/javascript"></script>
   </body>
</html>
