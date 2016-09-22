<div class="title-bar" data-responsive-toggle="user-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Benutzernavigation</div>
</div>

<div class="top-bar" id="user-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text"><?php echo $username; ?></li>
      <li>
        <a href="profile.php?page=ingredients">Meine Zutaten</a>
      </li>
      <li><a href="favoriten.php">Meine Favoriten</a></li>
      <li><a href="profile.php?page=shopping">Partyplaner</a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li class="align-right">Heute ist der <?php echo date("d.m.Y"); ?> </li>
      <li><a href="security.php?logout" class="button secondary">Logout</a></li>
    </ul>
  </div>
</div>