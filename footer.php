<footer>
    
    <div>
        <h2>Nous contacter</h2>
        <form id="contactform" action="controller.php" method="post">
            <input type="hidden" value="contact" name="controller">
            <input type="text" placeholder="John..." name="nom">
            <input type="text" placeholder="Doe..." name="prenom">
            <input type="email" placeholder="monemail@..." name="email">
            <textarea name="message" id="message" cols="30" rows="5">Mon message...</textarea>
        </form>
    </div>
</footer>