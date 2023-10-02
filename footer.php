<div id="footer">
    <div class="facciona"><img src="<?php echo get_template_directory_uri(); ?>/img/facciona.png" /></div>
    <div class="cent-contenitore">
        <div class="logo-footer">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-w.png" />
        </div>

        <div class="claimF"><strong>Evoluzione</strong>: Individualità, cooperazione e collaborazione</div>

        <div class="link-skills">
            <p>
                <strong>Branding:</strong>
                <?php echo linkServizi(1); ?>

                <strong>Web Solutions:</strong>
                <?php echo linkServizi(2); ?>

                <strong>Offline Comunication:</strong>
                <?php echo linkServizi(0); ?>


            </p>
        </div>

        <div class="foot-info flexy">

            <div class="foot-info-l">
                <div class="dati-fondo">
                    <p class="white">
                        <strong>TRIGLOÖ ® - we brand you!</strong>
                    <p>Siamo una agenzia di comunicazione integrata e la nostra proposta unica sta nel fatto che puoi scegliere di sfruttare uno qualsiasi dei nostri skill individualmente o combinare le nostre competenze per un approccio completo. Abbiamo una struttura esile, questo ci consente di avvalerci dei partner migliori a seconda dei casi. In questo modo abbiamo sempre punti di vista inediti e riusciamo a seguire il Cliente a 360°.</p>
                </div>
            </div>

            <div class="foot-info-r">
                <p class="loco"><img src="<?php echo get_template_directory_uri(); ?>/img/loco.png" />Via Felice Cordero di Pamparato 6, Torino</p>
                <p class="numero"><img src="<?php echo get_template_directory_uri(); ?>/img/phone.png" />Ufficio +39 011 19504945 </p>
                <p class="mail"><img src="<?php echo get_template_directory_uri(); ?>/img/mail.png" />info@trigloo.it</p>
                <br /><br />
                <p class="nonono">Ci troviamo a Torino, in Piazza Bernini in un palazzo storico (Case Bocca e Comoglio) edificato nel 1929, nelle immediate vicinanze della Metro e in direzione tangenziale.
                    Possiamo offrirti un caffè? 🙂
                </p>
            </div>

        </div>

        <div class="foot-menus flexy">
            <div class="fm-org">
                <ul>
                    <li><a href="<?php echo get_permalink(1155); ?>">Dati Societari</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">SiteMap</a></li>
                </ul>
            </div>

            <div class="fm-esplora">
                <p><strong>Esplora il sito</strong></p>
                <ul>
                    <li><a href="<?php echo site_url(); ?>">Home</a></li>
                    <li><a href="<?php echo get_permalink(209); ?>">About</a></li>
                    <li><a href="<?php echo get_permalink(57); ?>">Skills</a></li>
                    <li><a href="<?php echo get_permalink(583); ?>">Case Studies</a></li>
                    <li><a href="<?php echo get_permalink(13); ?>">Portfolio</a></li>

                    <li><a href="<?php echo get_permalink(211); ?>">Contatti</a></li>
            </div>
        </div>
        <div class="foot-menus flexy">
            <div class="fm-copy">Copyright TRIGLOO s.n.c. P.IVA: 11851410016 - TRIGLOÖ ® e TRIGLOÖ.it ® sono marchi registrati, tutti i diritti riservati.</div>

        </div>

    </div>
    <!--chiude centratore-->

</div>
<!--chiude footer-->

<div id="line-cont">
    <div id="line-int">
        <div id="line1"></div>
        <div id="line2"></div>
        <div id="line3"></div>
    </div>
</div>


<?php wp_footer(); ?>
</body>

</html>