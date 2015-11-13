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
    <ol><li>Tout d'abord, se rendre sur la page des <a href="/appstore/fournisseurs">Fournisseurs</a> (lien dispo dans le menu gauche de OS)</li>
    <li>Vous pouvez observer que des images sont liées à chaque objet Fournisseur</li>
    <li>On va en créer un nouveau, dans le menu de gauche selectionner <em>Fournisseurs -> New Fournisseur</em></li>
    <li>On donne un nom, upload une image de format JPG/PNG/GIF qui fait moins de 1mb et hop! (Attention, les autres formats ne sont pas acceptés)</em>
</ol>
    Vous serez de retour dans la liste de fournisseurs avec votre dernier rajout. Le CSS n'a pas été ajusté jusqu'au bout pour s'adapter à toute les images.
</p>

<p><strong>2.</strong> Amélioration de l'interface utilisateur de mon application web avec Ajax et JQuery UI. Similaire à l'exemple donné en cours,<br>
    je fais usage de Catégories et Sous-catégories (qui n'affiche qu'une fois la catégorie sélectionnée) comme tables liées.
<ol><li>Tout d'abord, il faut se rendre sur la page des <a href="/appstore/applications">Applications</a> (lien dispo dans le menu principal)</li>
    <li>Choisissez si vous désirez en créer (menu de gauche) ou modifier une application existante (bouton Edit)</li>
    <li>Subcategory / Sous-catégorie sera tout d'abord vide, il faut d'abord changer la valeur dans la liste Category</li>
    <li>Puis sélectionner la sous-catégorie désirée. Vous pouvez toujours rechanger la catégorie. <em>ex: Games -> Action</em>
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
<ol><li>Dirigez-vous vers la page d'inscription <a href="/appstore/applications">Applications</a> (lien dispo dans le menu principal)</li>
    <li>Choisissez si vous désirez en créer (menu de gauche) ou modifier une application existante (bouton Edit)</li>
    <li>Subcategory / Sous-catégorie sera tout d'abord vide, il faut d'abord changer la valeur dans la liste Category</li>
    <li>Puis sélectionner la sous-catégorie désirée. Vous pouvez toujours rechanger la catégorie. <em>ex: Games -> Action</em>
    <li>Remplir le restant des champs requis et soumettre.</li>
</ol>
<p>
<?php echo __d('cake_dev', 'Our primary goal is to provide a structured framework that enables PHP users at all levels to rapidly develop robust web applications, without any loss to flexibility.'); ?>
</p>


