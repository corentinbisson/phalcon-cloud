<?php
use Phalcon\Mvc\Controller;
class MyDisquesController extends Controller {
	/**
	 * Affiches les disques de l'utilisateur
	 */

	public function initialize(){
		$this->view->setVar("jquery",$this->jquery->genCDNs());
	}

	public function indexAction(){
		$user = Auth::getUser($this);
		$jquery = $this->jquery;
		$jquery->html("#user","#user.text($('user'));");
		$jquery->click("#creerDisque","btnDisqueAction($('disque'))");
		$cloud = $this->config->cloud;
		$disque = Disque::find();
		$occupation = ModelUtils::getDisqueOccupation($cloud,$disque);
		$quota = ModelUtils::getDisqueTarif($disque)->getQuota();
		$pourcentage = $quota/$occupation;
		$jquery->html("#progressBar","#progressBar.aria-valuenow=\"$('pourcentage')\"");

		$jquery->compile($this->view);

	}

	public function btnDisqueAction($disque){
		Scan/$disque;
	}
}