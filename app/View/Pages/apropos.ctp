<h3>Réalisé par Vladislav Kim</h3>

<p><strong>420-267-MO</strong> Développer un site Web et une application pour Internet.</p>
<p>Automne 2015, Collège Montmorency.</p>

<h3>Comptes utilisateurs</h3>
<p><ul>
    <li>vlad : vlad</li>
    <li>eng : eng</li>
    <li>admin : admin</li>
</ul></p>

<h3>Vérification du bon fonctionnement TP2</h3>
<p><strong>1.</strong> Le téléversement d'image se fait sans problème, comme dans les instructions 
    données sur ce site: <a href="http://www.jamesfairhurst.co.uk/posts/view/cakephp_contact_form_with_file_uploads">Jamesfairhurst.co.uk</a><br>
    La fonctionnalité fût implantée dans la table Fournisseurs (fournisseurs de OS) lors de la création d'un fournisseur.
    <ol><li>Tout d'abord, se rendre sur la page des <a href="/fournisseurs">Fournisseurs</a> (lien dispo dans le menu gauche de OS)</li>
    <li>Vous pouvez observer que des images sont liées à chaque objet Fournisseur</li>
    <li>On va en créer un nouveau, dans le menu de gauche selectionner <em>Fournisseurs -> New Fournisseur</em></li>
    <li>On donne un nom, upload une image de format JPG/PNG/GIF qui fait moins de 1mb et hop! (Attention, les autres formats ne sont pas acceptés)</em>
</ol>
    Vous serez de retour dans la liste de fournisseurs avec votre dernier rajout. Le CSS n'a pas été ajusté jusqu'au bout pour s'adapter à toute les images.
</p>

<p><strong>2.</strong> Amélioration de l'interface utilisateur de mon application web avec Ajax et JQuery UI. Similaire à l'exemple donné en cours,<br>
    je fais usage de Catégories et Sous-catégories (qui n'affiche qu'une fois la catégorie sélectionnée) comme tables liées.
<ol><li>Tout d'abord, il faut se rendre sur la page des <a href="/applications">Applications</a> (lien dispo dans le menu principal)</li>
    <li>Choisissez si vous désirez en créer (menu de gauche) ou modifier une application existante (bouton Edit)</li>
    <li>Subcategory / Sous-catégorie sera tout d'abord vide, il faut d'abord changer la valeur dans la liste Category</li>
    <li>Puis sélectionner la sous-catégorie désirée. Vous pouvez toujours rechanger la catégorie. <em>ex: Games -> Action</em></li>
    <li>Remplir le restant des champs requis et soumettre.</li>
</ol>
    Si tout s'est bien passé, vous allez être de retour sur la page listant toutes les applications. La catégorie ET sous-catégorie seront affichées dans la liste.
</p>

<h3>Diagramme de base de donnée</h3>
<p><img alt="data_model" src="/img/data_model.gif"></p>
<p><em>Source: <a href="http://www.databaseanswers.org/data_models/cell_mobile_apps_stores/index.htm" target="_blank">databaseanswers.org</a></em></p>

<h3>Activation de nouveaux comptes</h3>
<p>Comme demandé, il faut maintenant activer les nouveaux comptes avant de pouvoir bénéficier de tous les droits d'un utilisateur inscrit. Pour ce faire il faut
cliquer sur le lien d'activation envoyé au courriel fourni lors de l'inscription.</p>
<ol><li>Dirigez-vous vers la page d'inscription <a href="/signup">en cliquant ici</a> (ou le lien le menu principal, lorsque non connecté)</li>
    <li>Donner un nom d'utilisateur significatif, mot de passe et une adresse courriel valide (testé avec Gmail)</li>
    <li>Suite à avoir cliquer <em>submit</em>, votre compte est créé mais est inactif. Il ne sera donc pas encore possible de vous connecter comme utilisateur/dev pour créer des applications.</li>
    <li>S'il n'y a pas eu d'erreur, un courriel avec lien d'activation s'est rendu dans votre boite courriel. Une fois cliqué, vous pourrez vous connecter.</li>
    <li><strong>Ré-envoyer un courriel est possible</strong> à partir de cette page. Le lien est aussi disponible à partir de la page de connexion/login.</li>
    <li>Il suffit de fournir le username d'un compte inactif et le courriel sera envoyé à l'email de ce compte.</li>
</ol>

