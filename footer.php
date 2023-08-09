<footer>    
    <div>
        <h2>Nous contacter</h2>
        <form id="contactform" action="controller.php" method="post">
            <input type="hidden" value="contact" name="controller" id="controller">
            <input type="text" placeholder="John..." name="nom" id="nom">
            <input type="text" placeholder="Doe..." name="prenom" id="prenom">
            <input type="email" placeholder="monemail@..." name="mail" id="mail">
            <textarea name="message" id="message" cols="30" rows="5" placeholder="Mon message..." id="message"></textarea>
            <button type="submit" id="envoye_contact">Envoyer</button>
        </form>
    </div>
</footer>