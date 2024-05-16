<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DM Screen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
	<style>
		table, th, td {
		  border:1px solid black;
		}
		tr:nth-child(odd) {
		  background-color: #dddddd;
		}
	</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index">DM Screen</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blank">Blank</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Conditions
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#" data-bs-toggle="tooltip" data-bs-placement="top"
				data-bs-custom-class="custom-tooltip"
				data-bs-title="Automatically fails any ability check that requires sight. Attack rolls have disadvantage.">Blinded</a></li>
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#" data-bs-toggle="tooltip" data-bs-placement="top"
				data-bs-custom-class="custom-tooltip"
				data-bs-title="This top tooltip is themed via CSS variables.">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

<!-- The Page's Main Contents -->
    <div class="container my-5">
      <h1>Remember: It's just a game.</h1>
      <div class="col-lg-8 px-0">
        <p class="fs-5">Wouldn't it be cool if...?</p>
        <p>Have fun with it and relax. Don't forget your music.</p>
        <p>Keep in mind: You are the DM. You can change anything here if you don't like it.</p>

        <hr class="col-1 my-4">

        <!-- <a href="https://getbootstrap.com" class="btn btn-primary">Read the Bootstrap docs</a> -->
        <!-- <a href="https://github.com/twbs/examples" class="btn btn-secondary">View on GitHub</a> -->
	  </div>
	  
	<!-- The Tab Navigation List -->  
		<ul class="nav nav-tabs" id="myTab" role="tablist">
		  <li class="nav-item" role="presentation">
			<button class="nav-link active" id="consumable-magic-item-generator-tab" data-bs-toggle="tab" data-bs-target="#consumable-magic-item-generator-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Consumable Magic Item Generator</button>
		  </li>
		  <li class="nav-item" role="presentation">
			<button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="false">Home</button>
		  </li>
		  <li class="nav-item" role="presentation">
			<button class="nav-link" id="prices-tab" data-bs-toggle="tab" data-bs-target="#prices-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Prices</button>
		  </li>
		  <li class="nav-item" role="presentation">
			<button class="nav-link" id="conditions-tab" data-bs-toggle="tab" data-bs-target="#conditions-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Conditions</button>
		  </li>
		  <li class="nav-item" role="presentation">
			<button class="nav-link" id="encounter-generator-tab" data-bs-toggle="tab" data-bs-target="#encounter-generator-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Encounter Generator</button>
		  </li>

		  <li class="nav-item" role="presentation">
			<button class="nav-link" id="permanent-magic-item-generator-tab" data-bs-toggle="tab" data-bs-target="#permanent-magic-item-generator-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="false">Permanent Magic Item Generator</button>
		  </li>
		</ul>
<!-- The Tab Content Container -->	
		<div class="tab-content" id="myTabContent">
<!-- The Dice Roller -->
		  <div class="tab-pane fade" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
			<p id="placeholder"></p>
			<button class="1die" id="d6" content="6">Roll D6</button>
			<button class="1die" id="d8" content="8">Roll D8</button>
			<button class="1die" id="d10" content="10">Roll D10</button>
			<button class="1die" id="d12" content="12">Roll D12</button>
			<button class="1die" id="d20" content="20">Roll D20</button>
			<button class="1die" id="d100" content="100">Roll D100</button>
			<button class="3die" id="3d6" content="6">Roll 3D6</button>
		  </div>
<!-- The Prices List -->
		  <div class="tab-pane fade" id="prices-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
<!-- CHANGE THIS, make it an accordian -->
			<table style="width:100%">
			  <tr>
				<th style="width:20%">Service</th>
				<th style="width:12%">Cost</th>
				<th style="width:68%">Notes</th>
			  </tr>
			  <tr>
				<td>Common Ale</td>
				<td>4<sup>cp</sup> Mug, 2<sup>sp</sup> Gallon</td>
				<td>Mildly Alcoholic. Drunk DC: 3</td>
			  </tr>
			  <tr>
				<td>Wine</td>
				<td>2<sup>sp</sup> Common(Pitcher), 10<sup>gp</sup> Fine(Bottle)</td>
				<td>Drunk DC: 4</td>
			  </tr>
			  <tr>
				<td>A simple meal</td>
				<td>2<sup>cp</sup></td>
				<td>A bowl of meat and vegetable stew.</td>
			  </tr>
			  <tr>
				<td>Inn Stay</td>
				<td>5<sup>sp</sup> Comfortable</td>
				<td>A warm room and a comfortable bed. Other Prices: 3cp Squalid, 6cp Poor, 3sp Modest, 8sp Wealthy, 2gp Aristocratic</td>
			  </tr>
			  <tr>
				<td>Stable a Horse</td>
				<td>1<sup>sp</sup></td>
				<td>Includes the food and stall required to keep the horse safe and healthy.</td>
			  </tr>
			  <tr>
				<td>Hire a cabby</td>
				<td>1<sup>cp</sup></td>
				<td>In City. 3cp per Mile out of city.</td>
			  </tr>
			</table>
		  </div>
<!-- The Conditions List -->
		  <div class="tab-pane fade" id="conditions-tab-pane" role="tabpanel" aria-labelledby="conditions-tab" tabindex="0">
			<button type="button" class="btn btn-primary conditionButton" id="blindedBtn"  content="
			1) A blinded creature can’t see and automatically fails any ability check that requires sight.<br>
			2) Attack rolls against the creature have advantage, and the creature’s attack rolls have disadvantage.">Blinded</button>
			
			<button type="button" class="btn btn-primary conditionButton" id="charmedBtn" content="
			1) A charmed creature can't attack the charmer, or target the charmer with harmful abilities or magical effects. <br>
			2) The charmer has advantage on any ability check to interact socially with the creature.">Charmed</button>
			
			<button type="button" class="btn btn-primary conditionButton" id="deafenedBtn" content="
			A deafened creature can’t hear and automatically fails any ability check that requires hearing.">Deafened</button>
			
			<button type="button" class="btn btn-primary conditionButton" id="frightenedBtn" content="
			1) A frightened creature has disadvantage on ability checks and attack rolls while the source of its fear is within line of sight.<br>
			2) The creature can’t willingly move closer to the source of its fear.">Frightened</button>
			
			<button type="button" class="btn btn-primary conditionButton" id="grappledBtn" content="
			1) A grappled creature’s speed becomes 0, and it can’t benefit from any bonus to its speed.<br>
			2) The condition ends if the grappler is incapacitated (see the condition).<br>
			3) The condition also ends if an effect removes the grappled creature from the reach of the grappler or grappling effect, such as when a creature is hurled away by the thunderwave spell.">Grappled</button>
			
			<button type="button" class="btn btn-primary conditionButton" id="incapacitatedBtn" content="
			An incapacitated creature can’t take actions or reactions.">Incapacitated</button>

			<button type="button" class="btn btn-primary conditionButton" id="invisibleBtn" content="
			1) An invisible creature is impossible to see without the aid of magic or a special sense. For the purpose of hiding, the creature is heavily obscured. The creature’s location can be detected by any noise it makes or any tracks it leaves.<br>
			2) Attack rolls against the creature have disadvantage, and the creature’s attack rolls have advantage.">Invisible</button>
			
			<button type="button" class="btn btn-primary conditionButton" id="paralyzedBtn" content="
			1) A paralyzed creature is incapacitated (see the condition) and can’t move or speak.<br>
			2) The creature automatically fails Strength and Dexterity saving throws.<br>
			3) Attack rolls against the creature have advantage.<br>
			4) Any attack that hits the creature is a critical hit if the attacker is within 5 feet of the creature.">Paralyzed</button>
			
			<button type="button" class="btn btn-primary conditionButton" id="petrifiedBtn" content="
			1) A petrified creature is transformed, along with any nonmagical object it is wearing or carrying, into a solid inanimate substance (usually stone). Its weight increases by a factor of ten, and it ceases aging.<br>
			2) The creature is incapacitated (see the condition), can’t move or speak, and is unaware of its surroundings.<br>
			3) Attack rolls against the creature have advantage.<br>
			4) The creature automatically fails Strength and Dexterity saving throws.<br>
			5) The creature has resistance to all damage.<br>
			6) The creature is immune to poison and disease, although a poison or disease already in its system is suspended, not neutralized.">Petrified</button>

			<button type="button" class="btn btn-primary conditionButton" id="poisonedBtn" content="
			A poisoned creature has disadvantage on attack rolls and ability checks.">Poisoned</button>
			
			<button type="button" class="btn btn-primary conditionButton" id="proneBtn" content="
			1) A prone creature’s only movement option is to crawl, unless it stands up and thereby ends the condition.<br>
			2) The creature has disadvantage on attack rolls.<br>
			3) An attack roll against the creature has advantage if the attacker is within 5 feet of the creature. Otherwise, the attack roll has disadvantage.">Prone</button>
			
			<button type="button" class="btn btn-primary conditionButton" id="restrainedBtn" content="
			1) A restrained creature’s speed becomes 0, and it can’t benefit from any bonus to its speed.<br>
			2) Attack rolls against the creature have advantage, and the creature’s attack rolls have disadvantage.<br>
			3) The creature has disadvantage on Dexterity saving throws.">Restrained</button>
			
			<button type="button" class="btn btn-primary conditionButton" id="stunnedBtn" content="
			1) A stunned creature is incapacitated (see the condition), can’t move, and can speak only falteringly.<br>
			2) The creature automatically fails Strength and Dexterity saving throws.<br>
			3) Attack rolls against the creature have advantage.">Stunned</button>
			
			<button type="button" class="btn btn-primary conditionButton" id="unconsciousBtn" content="
			1) An unconscious creature is incapacitated (see the condition), can’t move or speak, and is unaware of its surroundings.<br>
			2) The creature drops whatever it’s holding and falls prone.<br>
			3) The creature automatically fails Strength and Dexterity saving throws.<br>
			4) Attack rolls against the creature have advantage.<br>
			5) Any attack that hits the creature is a critical hit if the attacker is within 5 feet of the creature.">Unconscious</button>
			
			<button type="button" class="btn btn-primary conditionButton" id="exhaustionBtn" content="
			Some special abilities and environmental hazards, such as starvation and the long-­term effects of freezing or scorching temperatures, can lead to a special condition called exhaustion. Exhaustion is measured in six levels. An effect can give a creature one or more levels of exhaustion, as specified in the effect’s description.<br><br>
			<b>Level -> Effects</b><br>
			&nbsp;1) 	Disadvantage on ability checks<br>
			&nbsp;2) 	Speed halved<br>
			&nbsp;3)	Disadvantage on attack rolls and saving throws<br>
			&nbsp;4) 	Hit point maximum halved<br>
			&nbsp;5) 	Speed reduced to 0<br>
			&nbsp;6) 	Death<br><br>
			
			If an already exhausted creature suffers another effect that causes exhaustion, its current level of exhaustion increases by the amount specified in the effect’s description.<br>

			A creature suffers the effect of its current level of exhaustion as well as all lower levels. For example, a creature suffering level 2 exhaustion has its speed halved and has disadvantage on ability checks.<br>

			An effect that removes exhaustion reduces its level as specified in the effect’s description, with all exhaustion effects ending if a creature’s exhaustion level is reduced below 1.<br>

			Finishing a long rest reduces a creature’s exhaustion level by 1, provided that the creature has also ingested some food and drink.">Exhaustion</button>
			
			</div>
<!-- The Encounter Generator List -->
		  <div class="tab-pane fade" id="encounter-generator-tab-pane" role="tabpanel" aria-labelledby="encounter-generator-tab" tabindex="0">
		  	<button type="button" class="btn btn-primary encounterButton" id="forestEncounterBtn"  content="forest">Forest Encounters</button>
		  </div>
<!-- The Encounter Generator List -->
		  <div class="tab-pane show active" id="consumable-magic-item-generator-tab-pane" role="tabpanel" aria-labelledby="consumable-magic-item-generator-tab" tabindex="0">
		  	<form>
				
				<label id="labelItemType" for="itemType">Item type?</label>
				<select name="itemType" id="consumableItemType">
				  <option value="custom">Custom</option>
				  <option value="scroll">Scroll</option>
				  <option value="potion">Potion</option>
				  <option value="splashPotion">Splash Potion</option>
				  <option value="orb">Orb</option>
				  <option value="pill">Pill</option>
				  <option value="vial">Vial</option>
				  <option value="tattoo">Tattoo</option>
				  <option value="rune">Rune</option>
				  <option value="wand">Wand</option>
				  <option value="rod">Rod</option>
				  <option value="staff">Staff</option>
				  <option value="tome">Tome</option>
				</select>
				
				<!-- <label id="labelSpellLevel" for="consumableSpellLevel">Spell Level?</label> -->
				<!-- <select name="consumableSpellLevel" id="consumableSpellLevel"> -->
				  <!-- <option value="75">Cantrip</option> -->
				  <!-- <option value="125">1</option> -->
				  <!-- <option value="250">2</option> -->
				  <!-- <option value="1000">3</option> -->
				  <!-- <option value="2000">4</option> -->
				  <!-- <option value="4000">5</option> -->
				  <!-- <option value="16000">6</option> -->
				  <!-- <option value="32000">7</option> -->
				  <!-- <option value="64000">8</option> -->
				  <!-- <option value="256000">9</option> -->
				<!-- </select> -->
				
				<label id="labelSpellLevel" for="consumableSpellLevel">Spell Level?</label>
				<select name="consumableSpellLevel" id="consumableSpellLevel">
				  <option value="cantrip">Cantrip</option>
				  <option value="level 1">1</option>
				  <option value="level 2">2</option>
				  <option value="level 3">3</option>
				  <option value="level 4">4</option>
				  <option value="level 5">5</option>
				  <option value="level 6">6</option>
				  <option value="level 7">7</option>
				  <option value="level 8">8</option>
				  <option value="level 9">9</option>
				</select>
				
				<label id="labelUses" for="consumableUses">Number of uses?</label>
				<select name="consumableUses" id="consumableUses">
				  <option value="0.2">Single Use</option>
				  <option value="1">1</option>
				  <option value="1.1">2</option>
				  <option value="1.2">3</option>
				  <option value="1.3">4</option>
				  <option value="1.4">5</option>
				  <option value="1.5">6</option>
				  <option value="1.6">7</option>
				  <option value="1.7">8</option>
				  <option value="1.8">9</option>
				  <option value="1.9">10</option>
				  </select>

				<label id="labelRecharge" for="consumableRecharge">Recharge?</label>
				<select name="consumableRecharge" id="consumableRecharge">
				  <option value="1">None</option>
				  <option value="2">1d4+1</option>
				  <option value="3">1d6+1</option>
				  <option value="4">1d8+1</option>
				  <option value="3">Hit Dice</option>
				</select>

				<label id="labelSpellDC" for="consumableSpellDC">Spell DC?</label>
				<select name="consumableSpellDC" id="consumableSpellDC">
				  <option value="1">Fixed</option>
				  <option value="1">User</option>
				  <option value="1.5">User+</option>
				</select>
				<br>
				<label id="labelSpellPower" for="consumableSpellPower">Spell Power?</label>
				<select name="consumableSpellPower" id="consumableSpellPower">
				  <option value="0.5">Weaker</option>
				  <option value="1" selected="selected">Normal</option>
				  <option value="1.5">Stronger</option>
				</select>
				
				<label id="labelHealing" for="consumableHealing">Healing?</label>
				<select name="consumableHealing" id="consumableHealing">
				  <option value="1">None</option>
				  <option value="1.5">Grants Temp HP</option>
				  <option value="2.5">Heals HP</option>
				  <option value="10">Resurrects</option>
				</select>
				
				<label id="labelDuration" for="consumableDuration">Duration?</label>
				<select name="consumableDuration" id="consumableDuration">
				  <option value="1">Instant</option>
				  <option value="1.6">Short</option>
				  <option value="2">Normal</option>
				</select>
				
				<label id="labelConcentration" for="consumableConcentration">Concentration?</label>
				<select name="consumableConcentration" id="consumableConcentration">
				  <option value="1">Normal</option>
				  <option value="1.5">Advantage</option>
				  <option value="2">No Concentration</option>
				</select>
				
				<label id="labelAoe" for="consumableAoe">Aoe?</label>
				<select name="consumableAoe" id="consumableAoe">
				  <option value="0.5">-1</option>
				  <option value="1" selected="selected">Normal</option>
				  <option value="4">+1</option>
				  <option value="10">+2</option>
				</select>
				<br>
				
				<label id="labelTarget" for="consumableTarget">Target?</label>
				<select name="consumableTarget" id="consumableTarget">
				  <option value="1">Normal</option>
				  <option value="0.8">Self</option>
				  <option value="1.5">Thrown(10/20)</option>
				  <option value="2">Thrown(20/40)</option>
				  <option value="3">Thrown(30/60)</option>
				</select>
				
				<label id="labelSpellNum" for="consumableSpellNum">Number of contained Spells?</label>
				<select name="consumableSpellNum" id="consumableSpellNum">
				  <option value="1">1</option>
				  <option value="1.1">2</option>
				  <option value="1.2">3</option>
				  <option value="1.3">4</option>
				  <option value="1.4">5</option>
				  <option value="1.5">6</option>
				  <option value="1.6">7</option>
				  <option value="1.7">8</option>
				  <option value="1.8">9</option>
				</select>
				<br>

				  <input type="checkbox" id="consumableBonusAction" name="bonusAction" value="bonusAction">
				<label id="labelBonusAction" for="bonusAction"> Activates with bonus action?</label>
				  <input type="checkbox" id="consumableBound" name="bound" value="bound">
				<label id="labelBound" for="bound"> Bound to user?</label>
				  <input type="checkbox" id="consumableAttunement" name="attunement" value="attunement">
				<label id="labelAttunement" for="attunement"> Requires attunement?</label>
				  <input type="checkbox" id="consumableOverCharge" name="overCharge" value="overCharge">
				<label id="labelOvercharge" for="overCharge"> Can overcharge?</label>
				  <input type="checkbox" id="consumableGivesAC" name="givesAC" value="givesAC">
				<label id="labelGivesAC" for="givesAC"> Gives AC?</label>
				  <input type="checkbox" id="consumableStealth" name="stealth" value="stealth">
				<label id="labelStealth" for="stealth"> Gives Stealth?</label>
				  <input type="checkbox" id="consumableMobility" name="mobility" value="mobility">
				<label id="labelMobility" for="mobility"> Gives Stealth?</label>
				  <input type="checkbox" id="consumableCursed" name="cursed" value="cursed">
				<label for="cursed"> Is Cursed?</label>
				
			</form>
			
			<button type="button" class="btn btn-primary consumableGenButton" id="consumableGenBtn"  content="consumable">Make Custom Item</button>
			<p id="newConsumableItem"></p>
		  </div>
<!-- The Encounter Generator List -->
		  <div class="tab-pane fade" id="permanent-magic-item-generator-tab-pane" role="tabpanel" aria-labelledby="permanent-magic-item-generator-tab" tabindex="0">
			<button type="button" class="btn btn-primary permanentGenButton" id="permanentGenBtn"  content="permanent">Permanent Magic Item</button>
		  </div>
<!-- The Toast Container -->
		  <div class="toast-container position-fixed bottom-0 end-0 p-3">
			  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
				<div class="toast-header">
				  <img src="" class="rounded me-2" alt="...">
				  <strong class="me-auto">Blinded</strong>
				  <small>Condition</small>
				  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
				</div>
				<div class="toast-body"> Placeholder.</div>
			  </div>
			</div>
		</div> <!-- The Tab Content Container -->	
	</div> <!-- The Page's Main Contents -->

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>
 <!--initializes toast functionality -->

	<script>
	const toast = document.getElementById('liveToast');
	const wait = ms => new Promise(resolve => setTimeout(resolve, ms));
	const retdb = "../../databases/random-encounter-table.json";
//encounterDB stores the entire database from random-encounter-table.json
	var encounterDB=[], retdbElements=[], retdbComplicationDetails=[], currentEncounter=[];

//initial loading of the database and assigning database arrays
	loadRETDB();
//set the encounter button to start disabled so it isn't used before the database is ready.
	$("#encounter-generator-tab").prop('disabled', true);
	
//wait a second 
	wait (1*1000).then(() => {
	//$("#encounter-generator-tab").prop('disabled', false);
		<!-- console.log(retdbGroups); -->
		<!-- console.log(retdbGroupsValues); -->
		console.log(window.retdbBehaviors);
		console.log(retdbComplications);
		//console.log(locationGroups("forest"));
		//console.log(retdbElements["forest"]);
		//populateRETGroupList();
	});
	
	
//The Meat and Bones of the Encounter app.
	function createEncounter(location){
		currentEncounter = window.currentEncounter;
		initializeEncounter();
		currentEncounter["creature"] = makeEncounterCreatures(location);
		//checks to see if the creature has a subgroup, type or element.
		currentEncounter["name"] = makeCreaturesName(currentEncounter["creature"], location);
		currentEncounter["behavior"] = chooseBehavior(location);
		currentEncounter["complication"] = chooseComplication(location);
		encounterText = "";
		encounterText = currentEncounter["name"]+" currently "+currentEncounter["behavior"]+". However, they're also dealing with "+currentEncounter["complication"]+".";
		return encounterText;
	};
	
	function initializeEncounter () {
		currentEncounter["creature"] = "";
		currentEncounter["name"] = "";
		currentEncounter["behavior"] = "";
		currentEncounter["complication"] = "";
		currentEncounter["secondGroup"] = "";
	};
	
	function makeCreaturesName(creature, location) {
		creatureName = creature.name+" are";
		if (creature.subgroup != null) creatureName = processAndChooseSubgroup(creature, location).capitalize();
		return creatureName;
	};

	function chooseComplication(location){
		let complications = window.retdbComplications;
		let secondGroupComplicationsArray = ["being involved with", "having language issues with", "fighting with", "fleeing from", "traveling with", "yelling at", "negotiating with", "singing to", "tracking"];
		let result = Math.floor(Math.random()*complications.length);
		let complicationsText = complications[result];
		if (secondGroupComplicationsArray.includes(complications[result])) {
			window.currentEncounter["secondGroup"] = makeEncounterCreatures(location).name;
			return(complications[result]+" "+currentEncounter["secondGroup"]);
		};
		//if (complications[result] == "having language issues with") complicationsText = secondGroupText;
		if (complications[result] == "insanity") {
			insanityTypes = retdbComplicationDetails["insanities"].split(', ');
			return insanityTypes[Math.floor(Math.random()*insanityTypes.length)];
		};
		if (complications[result] == "being affected by a magical abnormality") {
			abnormalityTypes = retdbComplicationDetails["magical abnormalities"].split(', ');
			return (complicationsText+" ("+abnormalityTypes[Math.floor(Math.random()*abnormalityTypes.length)]+")");
		};
		if (complications[result] == "enchantments") {
			enchantmentTypes = retdbComplicationDetails["enchantments"].split(', ');
			return (complicationsText+" ("+enchantmentTypes[Math.floor(Math.random()*enchantmentTypes.length)]+")");
		};
		return complicationsText;
	};
	
	function chooseBehavior(location){
		behaviors = window.retdbBehaviors;
		var r=Math.random();
		return behaviors[Math.floor(r*behaviors.length)];
	};

	function makeEncounterCreatures(location) {
		encounterGroups = locationGroups(location);
		var r=Math.random();
		theMath = Math.floor(r * encounterGroups.length);
		chosenGroup = encounterGroups[theMath];
		return chosenGroup;
	};
	
	function processAndChooseSubgroup(creature, location) {
		subgroupArray = creature.subgroup.split(', ');
		var r=Math.random();
		theMath = Math.floor(r * subgroupArray.length);
		if (creature.social != "group") return processSocialCreatures(creature, location, subgroupArray[theMath]);
		return subgroupArray[theMath]+" are";
	};
	
	function chooseCreatureType(creature){
		typeArray = creature.types.split(', ');
		var r=Math.floor(Math.random()*typeArray.length);
		return typeArray[r];
	};
	
	function processSocialCreatures(creature, location, subgroup) {
		creatureName = "";
		socialArray = creature.social.split(', ');
		var socialRNG = Math.floor(Math.random()*socialArray.length);
		arrayOfSingleSocial = ["A", "An", "A lone", "A single", "A solitary", "An isolated", "A heavily-armed", "A poorly-equipped", "A well-equipped"]
		if (arrayOfSingleSocial.includes(socialArray[socialRNG])) {
			creatureName = socialArray[socialRNG]+" "+subgroup+" is";
			if (creature.elements != null) creatureName = socialArray[socialRNG]+" "+chooseCreatureElement(creature, location)+" elemental "+subgroup+" is";
			if (creature.skill != null) creatureName = socialArray[socialRNG]+" "+chooseCreatureSkill(creature, location)+" "+subgroup+" is";
		} else {
			creatureName = socialArray[socialRNG]+" "+subgroup+"s are";
			if (creature.elements != null) creatureName = socialArray[socialRNG]+" "+chooseCreatureElement(creature, location)+" elemental "+subgroup+"s are";
			if (creature.skill != null) creatureName = socialArray[socialRNG]+" "+chooseCreatureSkill(creature, location)+" "+subgroup+"s are";
		};
		return creatureName;
	};
	
	function chooseCreatureSkill(creature, location){
		skillArray = creature.skill.split(', ');
		skillSpreadArray = [30, 45, 20, 5]
		var r=Math.ceil(Math.random()*100);
		if (r <= 5) return skillArray[3]; //master
		if (r <= 25) return skillArray[2]; //expert
		if (r <= 70) return skillArray[1]; //journeymen
		else return skillArray[0]; //novice
	};
	
	function chooseCreatureElement(creature, location){
		elementArray = [23, 23, 23, 23, 8]
		elementArray = creature.elements.split(', ');
		//value 0 = earth, 1 = fire, 2 = water, 3 = air, 4= arcane.
		var r=Math.ceil(Math.random()*1000);
		var locationElemStrengthArray = window.retdbElements[location].split(', ');
		earthValue = Number(locationElemStrengthArray[0]);
		//console.log(earthValue);
		fireValue = earthValue+=Number(locationElemStrengthArray[1]);
		//console.log(fireValue);
		waterValue = fireValue+=Number(locationElemStrengthArray[2]);
		//console.log(waterValue);
		airValue = waterValue+=Number(locationElemStrengthArray[3]);
		//console.log(airValue);
		arcaneValue = airValue+=Number(locationElemStrengthArray[4]);
		//console.log(arcaneValue);
		if (r <= earthValue) return elementArray[0];
		if (r <= fireValue) return elementArray[1];
		if (r <= waterValue) return elementArray[2];
		if (r <= airValue) return elementArray[3];
		if (r <= arcaneValue) return elementArray[4];
		console.log("Error in function: chooseCreatureElement. No element chosen. RNG:"+r);
	};
	
	function locationGroups(location) {
// 	0 = common, 1 = uncommon, 2 = rare, 3 = very rare, 4 = legendary, 5 = mythic
		result = weightedRand({0:0.50, 1:0.23, 2:0.15, 3:0.105, 4:0.010, 5:0.005})
		location = location;
		localArray = rarityArrayByLocation(location);
		locationGroupArray = [];
		<!-- console.log(result); -->
		<!-- console.log(localArray); -->
		switch (result) {
			case "0":
				for (let i = 0; i < localArray.length; i++) {
					if (localArray[i] == "common") {
						locationGroupArray.push(retdbGroupsValues[i]);
					}
				}
				return locationGroupArray;
			case "1":
				for (let i = 0; i < localArray.length; i++) {
					if (localArray[i] == "uncommon") {
						locationGroupArray.push(retdbGroupsValues[i]);
					}
				}
				return locationGroupArray;
			case "2":
				for (let i = 0; i < localArray.length; i++) {
					if (localArray[i] == "rare") {
						locationGroupArray.push(retdbGroupsValues[i]);
					}
				}
				return locationGroupArray;
			case "3":
				for (let i = 0; i < localArray.length; i++) {
					if (localArray[i] == "very rare") {
						locationGroupArray.push(retdbGroupsValues[i]);
					}
				}
				return locationGroupArray;
			case "4":
				for (let i = 0; i < localArray.length; i++) {
					if (localArray[i] == "legendary") {
						locationGroupArray.push(retdbGroupsValues[i]);
					}
				}
				return locationGroupArray;
			case "5":
				for (let i = 0; i < localArray.length; i++) {
					if (localArray[i] == "mythic") {
						locationGroupArray.push(retdbGroupsValues[i]);
					}
				}
				return locationGroupArray;
			default:
				console.log("ERROR: No result found");
		};
	};

	function makeRarityGroupsArray() {
		let rarityGroupsArray = [];
		let o = 0;
		for (let i = 0; i < retdbGroupsValues.length; i++) {
			rarityGroupsArray.push(window.retdbGroupsValues[i].rarity);
		};
		window.retdbGroupsRarity = rarityGroupsArray;
		return rarityGroupsArray;
	};
	
	function rarityArrayByLocation(location) {
		rarityLocationArray = [];
		switch (location) {
			case 'forest':
				for (let i = 0; i < retdbGroupsRarity.length; i++) {
					rarityLocationArray.push(window.retdbGroupsRarity[i].forest);
				};
				return rarityLocationArray;
			case 'cave':	
				for (let i = 0; i < retdbGroupsRarity.length; i++) {
					rarityLocationArray.push(window.retdbGroupsRarity[i].cave);
				};
				return rarityLocationArray;
			case 'enchanted forest':	
				for (let i = 0; i < retdbGroupsRarity.length; i++) {
					rarityLocationArray.push(window.retdbGroupsRarity[i].enchantedForest);
				};
				return rarityLocationArray;
			case 'smallCity':
				for (let i = 0; i < retdbGroupsRarity.length; i++) {
					rarityLocationArray.push(window.retdbGroupsRarity[i].smallCity);
					console.log(window.retdbGroupsRarity[i].smallCity);
				};
				return rarityLocationArray;
		default:
			console.log(`Sorry, that is an invalid location.`);
		
		};
	};
	
//stuff to do once the databases have loaded
	function databasesLoaded() {
		makeRarityGroupsArray();
		$("#encounter-generator-tab").prop('disabled', false);
	}

//load the Random Encounter Table DataBase
	function loadRETDB(){
		window.encounterDB = new XMLHttpRequest();
		window.encounterDB.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200) {
				//creates an object from the JSON data
				var result = JSON.parse(this.response);
				//Object.values converts the object into an array
				window.retdbGroupsValues = Object.values(result.groups)
				//Object.keys converts it to an array with the key names instead of the key value.
				window.retdbGroups = Object.keys(result.groups);
				retdbElements = Object.keys(result.elements);
				for (let i = 0; i < retdbElements.length; i++) {
					window.retdbElements[Object.keys(result.elements)[i]] = Object.values(result.elements)[i];
				};
				retdbComplicationDetails = Object.keys(result.complicationExtraDetails);
				for (let i = 0; i < retdbComplicationDetails.length; i++) {
					window.retdbComplicationDetails[Object.keys(result.complicationExtraDetails)[i]] = Object.values(result.complicationExtraDetails)[i];
				};
				window.retdbBehaviors = result.behaviors.split(', ');
				window.retdbComplications = result.complications.split(', ');
				databasesLoaded();
			};
		};
		window.encounterDB.open("GET", retdb, true);
		window.encounterDB.send(null);
	};
	
	function populateRETGroupList() {
		let text ="";
		for (let i = 0; i < retdbGroups.length; i++) {
		  text += retdbGroups[i] + "<br>";
		};
		console.log(text);
	};
	
	function weightedRand(spec) {
		var i, sum=0, r=Math.random();
		for (i in spec) {
			sum += spec[i];
			if (r <= sum) return i;
		}
	}
	
//Dice Functions
	var dice = {
	  roll: function (sides) {
		var randomNumber = Math.floor(Math.random() * sides) + 1;
		return randomNumber;
	  }
	};	

//grammar made easy	
	Object.defineProperty(String.prototype, 'capitalize', {
	  value: function() {
		return this.charAt(0).toUpperCase() + this.slice(1);
	  },
	  enumerable: false
	});

//button logic
	$(document).ready(function(){		
		$(".conditionButton").click(function(){
		    event.stopPropagation();
			event.stopImmediatePropagation();
			console.log($(this).attr('content'));
			toast.querySelector('.toast-header').innerHTML = '<img src="" class="rounded me-2" alt=""> <strong class="me-auto">'+$(this).text()+'</strong><small>Condition</small>'+'<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>';
			toast.querySelector('.toast-body').innerHTML = $(this).attr('content');
			$("#liveToast").toast("show");
		});
		
		$(".encounterButton").click(function(){
		    event.stopPropagation();
			event.stopImmediatePropagation();
			content = $(this).attr('content')
			console.log($(this).attr('content'));
			toast.querySelector('.toast-header').innerHTML = '<img src="" class="rounded me-2" alt=""> <strong class="me-auto">'+$(this).text()+'</strong><small>Encounter</small>'+'<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>';
			toast.querySelector('.toast-body').innerHTML = createEncounter(content);
			$("#liveToast").toast("show");
		});
		
		

		
		//Prints dice roll to the page
		function printNumber(number) {
		  var placeholder = document.getElementById('placeholder');
		  placeholder.innerHTML = number;
		};

		$(".1die").click(function(){
		  var result = "Rolling 1D"+$(this).attr('content')+": <b>"+dice.roll($(this).attr('content'))+"</b>";
		  printNumber(result);
		});
		
		$(".3die").click(function(){
		  var die1 = dice.roll($(this).attr('content'));
		  var die2 = dice.roll($(this).attr('content'));
		  var die3 = dice.roll($(this).attr('content'));
		  var total = die1+die2+die3
		  var result = "Rolling 3d6: "+die1+"+"+die2+"+"+die3+". <b>Total:"+total+"</b>";
		  printNumber(result);
		});
		
		//Consumables
		$(".consumableGenButton").click(function(){
			var multValue = 1 //baseline value
			var price = 0 //reset the price, just in case
			
			var type = document.getElementById('consumableItemType').value
			var uses = document.getElementById('consumableUses').value
			var recharge = document.getElementById('consumableRecharge').value
			var spellDC = document.getElementById('consumableSpellDC').value
			var rawSpellLevel = document.getElementById('consumableSpellLevel').value
			var spellLevel = 0
				// =========== SPELL LEVEL COST LOGIC =========== \\
				if (rawSpellLevel == "cantrip") { spellLevel = 75}
				if (rawSpellLevel == "level 1") { spellLevel = 125}
				if (rawSpellLevel == "level 2") { spellLevel = 250}
				if (rawSpellLevel == "level 3") { spellLevel = 1000}
				if (rawSpellLevel == "level 4") { spellLevel = 2000}
				if (rawSpellLevel == "level 5") { spellLevel = 4000}
				if (rawSpellLevel == "level 6") { spellLevel = 16000}
				if (rawSpellLevel == "level 7") { spellLevel = 32000}
				if (rawSpellLevel == "level 8") { spellLevel = 64000}
				if (rawSpellLevel == "level 9") { spellLevel = 256000}
			
			var spellNum = document.getElementById('consumableSpellNum').value
			var spellPower = document.getElementById('consumableSpellPower').value
			var spellHealing = document.getElementById('consumableHealing').value
			var spellConcentration = document.getElementById('consumableConcentration').value
			var spellDuration = document.getElementById('consumableDuration').value
			var aoe = document.getElementById('consumableAoe').value
			var target = document.getElementById('consumableTarget').value

			var bonusAction = document.getElementById('consumableBonusAction')
			if (bonusAction.checked == true) { bonusAction = 1.5 } else { bonusAction = 1}
			var bound = document.getElementById('consumableBound')
			if (bound.checked == true) { bound = 0.5 } else { bound = 1}
			var attunement = document.getElementById('consumableAttunement')
			if (attunement.checked == true) { attunement = 0.5 } else { attunement = 1}
			var overcharge = document.getElementById('consumableOverCharge')
			if (overcharge.checked == true) { overcharge = 1.5 } else { overcharge = 1 }
			var givesAC = document.getElementById('consumableGivesAC')
			if (givesAC.checked == true) { givesAC = 2 } else { givesAC = 1 }
			var stealth = document.getElementById('consumableStealth')
			if (stealth.checked == true) { stealth = 6 } else { stealth = 1 }
			var mobility = document.getElementById('consumableMobility')
			if (mobility.checked == true) { mobility = 5 } else { mobility = 1 }
			var cursed = document.getElementById('consumableCursed')
			if (cursed.checked == true) { cursed = 0.1 } else { cursed = 1 } // cursed items are 1/10th the price

			//price logic
			if (type == "custom") { price = spellLevel * spellPower * uses * recharge * spellDC * spellNum * spellHealing * spellConcentration * spellDuration * aoe * target * overcharge * attunement * bound * bonusAction }
			if (type == "scroll") { price = spellLevel * 0.2 } // consumed
			if (type == "potion") { price = spellLevel * 0.2 * spellConcentration * 0.8 } //consumed, target self
			if (type == "splashPotion") { price = spellLevel * 0.2 * spellConcentration * 0.5 * aoe * 2 } //consumed, weaker effects, thrown(20/40)
			if (type == "orb") { price = spellLevel * 2 * spellPower * attunement} //1 use recharge
			if (type == "tome") { price = spellLevel * spellNum * uses * spellPower * attunement } //
			if (type == "staff") { price = spellLevel * spellNum * spellPower * recharge * uses * overcharge * aoe * attunement} //
			if (type == "wand") { price = spellLevel * spellNum * spellPower * recharge * uses * overcharge * 1.5 * attunement} //user+ DC
			if (type == "rod") { price = spellLevel * spellNum * spellPower * recharge * uses * overcharge * attunement} //
			if (type == "pill") { price = spellLevel * spellNum * spellPower * spellConcentration * 0.8 * 1.5 } //target self, bonus action
			if (type == "vial") { price = spellLevel * spellNum * spellPower * spellConcentration * aoe * 1.5 * 1.5 } //thrown(10/20), bonus action
			if (type == "tattoo") { price = spellLevel * spellNum * spellPower * uses * recharge * spellDC * 0.5 * attunement} //bound
			if (type == "rune") { price = spellLevel * spellNum * 1.5 * uses * 3 * spellDC * 0.5 * attunement} //more powerful effects, recharges via hit dice, bound

			price = price * multValue * cursed * spellHealing * givesAC * mobility * stealth; //modifiers that apply to all items
			var result1 = "This "+type+" item contains a "+rawSpellLevel+" spell and has a ";
			var result2 = "total cost of "+price+" coins";
			console.log (document.getElementById('consumableSpellLevel'));
			//document.getElementById('newConsumableItem').innerHTML = result;
			toast.querySelector('.toast-body').innerHTML = result1+result2;
			$("#liveToast").toast("show");
		});
	});
	
	window.onload = changeConsumableFieldColors; //prevent all fields showing as active when you reload the page
	$('#consumableItemType').on('change', changeConsumableFieldColors);
	
	function changeConsumableFieldColors() {
		var type = $('#consumableItemType').val();
		//console.log(type)
		resetConsumableFieldColors()
		if (type == "scroll") { 
			greyConsumableFieldColors();
			document.getElementById('labelSpellLevel').style.color = "black";
		}
		if (type == "potion") { 
			greyConsumableFieldColors();
			document.getElementById('labelSpellLevel').style.color = "black";
			document.getElementById('labelConcentration').style.color = "black";
		}
		if (type == "splashPotion") { 
			greyConsumableFieldColors();
			document.getElementById('labelSpellLevel').style.color = "black";
			document.getElementById('labelConcentration').style.color = "black";
			document.getElementById('labelAoe').style.color = "black";
		}
		if (type == "orb") { 
			greyConsumableFieldColors();
			document.getElementById('labelSpellLevel').style.color = "black";
			document.getElementById('labelSpellPower').style.color = "black";
			document.getElementById('labelAttunement').style.color = "black";
		}
		if (type == "tome") { 
			greyConsumableFieldColors();
			document.getElementById('labelSpellLevel').style.color = "black";
			document.getElementById('labelSpellPower').style.color = "black";
			document.getElementById('labelSpellNum').style.color = "black";
			document.getElementById('labelUses').style.color = "black";
			document.getElementById('labelAttunement').style.color = "black";
		}
		if (type == "staff") { 
			greyConsumableFieldColors();
			document.getElementById('labelSpellLevel').style.color = "black";
			document.getElementById('labelSpellPower').style.color = "black";
			document.getElementById('labelSpellNum').style.color = "black";
			document.getElementById('labelUses').style.color = "black";
			document.getElementById('labelRecharge').style.color = "black";
			document.getElementById('labelOvercharge').style.color = "black";
			document.getElementById('labelAoe').style.color = "black";
			document.getElementById('labelAttunement').style.color = "black";
		}
		if (type == "wand") { 
			greyConsumableFieldColors();
			document.getElementById('labelSpellLevel').style.color = "black";
			document.getElementById('labelSpellPower').style.color = "black";
			document.getElementById('labelSpellNum').style.color = "black";
			document.getElementById('labelUses').style.color = "black";
			document.getElementById('labelRecharge').style.color = "black";
			document.getElementById('labelOvercharge').style.color = "black";
			document.getElementById('labelAttunement').style.color = "black";
		}
		if (type == "rod") { 
			greyConsumableFieldColors();
			document.getElementById('labelSpellLevel').style.color = "black";
			document.getElementById('labelSpellPower').style.color = "black";
			document.getElementById('labelSpellNum').style.color = "black";
			document.getElementById('labelUses').style.color = "black";
			document.getElementById('labelRecharge').style.color = "black";
			document.getElementById('labelOvercharge').style.color = "black";
			document.getElementById('labelAttunement').style.color = "black";
		}
		if (type == "pill") { 
			greyConsumableFieldColors();
			document.getElementById('labelSpellLevel').style.color = "black";
			document.getElementById('labelSpellPower').style.color = "black";
			document.getElementById('labelSpellNum').style.color = "black";
			document.getElementById('labelConcentration').style.color = "black";
		}
		if (type == "vial") { 
			greyConsumableFieldColors();
			document.getElementById('labelSpellLevel').style.color = "black";
			document.getElementById('labelSpellPower').style.color = "black";
			document.getElementById('labelSpellNum').style.color = "black";
			document.getElementById('labelConcentration').style.color = "black";
			document.getElementById('labelAoe').style.color = "black";
		}
		if (type == "tattoo") { 
			greyConsumableFieldColors();
			document.getElementById('labelSpellLevel').style.color = "black";
			document.getElementById('labelSpellPower').style.color = "black";
			document.getElementById('labelSpellNum').style.color = "black";
			document.getElementById('labelUses').style.color = "black";
			document.getElementById('labelRecharge').style.color = "black";
			document.getElementById('labelSpellDC').style.color = "black";
			document.getElementById('labelAttunement').style.color = "black";
		}
		if (type == "rune") { 
			greyConsumableFieldColors();
			document.getElementById('labelSpellLevel').style.color = "black";
			document.getElementById('labelSpellNum').style.color = "black";
			document.getElementById('labelUses').style.color = "black";
			document.getElementById('labelSpellDC').style.color = "black";
			document.getElementById('labelAttunement').style.color = "black";
		}
	};
	
	function resetConsumableFieldColors() {
		document.getElementById('labelItemType').style.color = "black";
		document.getElementById('labelAoe').style.color = "black";
		document.getElementById('labelAttunement').style.color = "black";
		document.getElementById('labelBonusAction').style.color = "black";
		document.getElementById('labelBound').style.color = "black";
		document.getElementById('labelConcentration').style.color = "black";
		document.getElementById('labelDuration').style.color = "black";
		document.getElementById('labelHealing').style.color = "black";
		document.getElementById('labelOvercharge').style.color = "black";
		document.getElementById('labelRecharge').style.color = "black";
		document.getElementById('labelSpellDC').style.color = "black";
		document.getElementById('labelSpellLevel').style.color = "black";
		document.getElementById('labelSpellNum').style.color = "black";
		document.getElementById('labelSpellPower').style.color = "black";
		document.getElementById('labelTarget').style.color = "black";
		document.getElementById('labelUses').style.color = "black";
	}
	
	function greyConsumableFieldColors() {
		document.getElementById('labelAoe').style.color = "grey";
		document.getElementById('labelAttunement').style.color = "grey";
		document.getElementById('labelBonusAction').style.color = "grey";
		document.getElementById('labelBound').style.color = "grey";
		document.getElementById('labelConcentration').style.color = "grey";
		document.getElementById('labelDuration').style.color = "grey";
		document.getElementById('labelOvercharge').style.color = "grey";
		document.getElementById('labelRecharge').style.color = "grey";
		document.getElementById('labelSpellDC').style.color = "grey";
		document.getElementById('labelSpellLevel').style.color = "grey";
		document.getElementById('labelSpellNum').style.color = "grey";
		document.getElementById('labelSpellPower').style.color = "grey";
		document.getElementById('labelTarget').style.color = "grey";
		document.getElementById('labelUses').style.color = "grey";
	}
	
	</script>
  </body>
</html>
