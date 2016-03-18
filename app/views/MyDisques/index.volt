{{ jquery }}
<span>Mes disques</span><span id="user"></span><br>
<button id="creerDisque">Créer un disque</button>
<div class="progress">
    <div id="progressBar" class="progress-bar progress-bar-success" role="progressbar"
         aria-valuemin="0" aria-valuemax="100" style="width:40%">
        {{ pourcentage % }}
    </div>
</div>



{{ script_foot }}