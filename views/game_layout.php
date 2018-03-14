<?php session_start(); ?>
<div class="left-panel">
  <div id="map" class="map">
  </div>
  <div class="attributes">
    <p>
      <?php 
        $fname = $_SESSION['first_name'];
        $lname = $_SESSION['last_name'];
        $lvl = $_SESSION['level'];
        echo $fname." ".$lname."<span style='font-size: 60%; letter-spacing: 1px; position: relative; top: -2px;'> [".$lvl."]</span>"; 
      ?>
    </p>
    <div class="attribute-bars health"></div>
    <div class="attribute-bars stamina"></div>
    <div class="attribute-bars will"></div>
  </div>
  <div class="target">
    <p>Target</p>
    <div class="attribute-bars health">
      Health
    </div>
    <div class="attribute-bars stamina">
      Stamina
    </div>
    <div class="attribute-bars will">
      Will
    </div>
  </div>
</div>

<div class="middle-panel">
  <div class="icon-wrapper">
    <div class="icon icon-secondary">
      <button id="character-menu-button" class="icon-control">
        <img class="secondary" src="/assets/ui/player.png">
      </button>
    </div>
    <div class="icon">
      <button id="movement-north-menu-button" dir="north" class="icon-control">
        <img src="/assets/ui/arrow-top.png">
      </button>
    </div>
    <div class="icon icon-secondary">
      <img class="secondary" src="/assets/ui/bag.png">
    </div>

    <div class="icon">
      <button id="movement-west-menu-button" dir="west" class="icon-control">
        <img src="/assets/ui/arrow-left.png">
      </button>
    </div>
    <div class="icon">
      <img src="/assets/ui/map.png">
    </div>
    <div class="icon">
      <button id="movement-east-menu-button" dir="east" class="icon-control">
        <img src="/assets/ui/arrow-right.png">
      </button>
    </div>

    <div class="icon icon-secondary">
      <img class="secondary" src="/assets/ui/skills.png">
    </div>
    <div class="icon">
      <button id="movement-south-menu-button" dir="south" class="icon-control">
        <img src="/assets/ui/arrow-down.png">
      </button>
    </div>
    <div class="icon-secondary icon">
      <button id="settings-menu-button" class="icon-control">
        <img class="secondary" src="/assets/ui/menu.png">
      </button>
    </div>

    <div class="icon-wrapper triggers">
      <div class="icon trigger">
        <img src="/assets/skills/triggers/sprint.png">
      </div>
      <div class="icon trigger">
        <img src="/assets/skills/triggers/sprint.png">
      </div>
    </div>
  </div>

  <div class="icon-wrapper">
    <div class="icon tertiary">
      <img class="" src="/assets/ui/player.png">
    </div>
    <div class="icon tertiary">
      <img src="/assets/ui/arrow-top.png">
    </div>
    <div class="icon tertiary">
      <img class="" src="/assets/ui/map.png">
    </div>

    <div class="icon tertiary">
      <img src="/assets/ui/arrow-left.png">
    </div>
    <div class="icon tertiary">
      <img src="/assets/ui/talk.png">
    </div>
    <div class="icon tertiary">
      <img src="/assets/ui/arrow-right.png">
    </div>

    <div class="icon tertiary">
      <img class="" src="/assets/ui/skills.png">
    </div>
    <div class="icon tertiary">
      <img src="/assets/ui/arrow-down.png">
    </div>
    <div class="icon tertiary">
      <img class="" src="/assets/ui/menu.png">
    </div>
</div>
</div>

<div class="right-panel">
  <div id="location-details">
    </div>
    <div id="player-log">
    </div>
</div>
<div class="player-entry">
    <input type="text">
  </div>