<!-- footer contenant le contact form -->
<footer>    
    <div>
        <h2>Nous contacter</h2>
        <form id="contactform">
            <input class="contactinput" type="hidden" value="contact" name="controller" id="controller">
            <input class="contactinput" type="text" placeholder="Doe..." name="nom" id="nom">
            <input class="contactinput" type="text" placeholder="John..." name="prenom" id="prenom">
            <input class="contactinput" type="email" placeholder="monemail@..." name="mail" id="mail">
            <textarea class="contactinput" name="message" id="message" cols="30" rows="5" placeholder="Mon message..." id="message"></textarea>
            <button type="button" id="envoye_contact">Envoyer</button>
        </form>
    </div>
</footer>