<?php

/**
 * Page Template
 * 
 * BOOTSTRAP v1.0.BETA
 * 
 * Displays EZ-Pages Header-Bar content.<br />
 *
 * @package templateSystem
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2019 Jan 04 Modified in v1.5.6a $
 */

/**
 * require code to show EZ-Pages list
 */
include(DIR_WS_MODULES . zen_get_module_directory('ezpages_bar_header.php'));
$arrSportTeams['NFL Teams'] = getTeamsFromESPN('nfl');
$arrSportTeams['NHL Teams'] = getTeamsFromESPN('nhl');
$arrSportTeams['MLB Teams'] = getTeamsFromESPN('mlb');
$arrSportTeams['NBA Teams'] = getTeamsFromESPN('nba');
$nfldropdown = '';
?>
<?php if (!empty($var_linksList)) { ?>
  <div id="ezpagesBarHeader" class="ezpagesBar rounded">
    <ul class="nav nav-pills">
<?php
foreach($arrSportTeams as $sportName => $arrNFLTeams){
  if(!empty($arrNFLTeams)){
  ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?=$sportName?>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <div class="container">
              <div class="row">
  <?php
                foreach($arrNFLTeams as $divName => $arrDivision){
                echo '
                <div class="col">
                  <h6 class="dropdown-header">'. $divName .'</h6>';
                  foreach($arrDivision as $arrTeam){
                    echo '
                    <a class="dropdown-item" href="/index.php?main_page=search&search_categories=1&keyword=' . urlencode($arrTeam['name']) . '&sort=20a">' . zen_image($arrTeam['logo'], $arrTeam['name'], '40', '40') . $arrTeam['name'] . '</a>
                    ';
                  }
                echo '
                </div>';
                }
  ?>
              </div>
            </div>
          </div>
        </li>
  <?php
  }
}
echo '
<style>
/* 自定义下拉菜单的背景色 */
.dropdown-menu {
    width: 100% !important;
}
</style>
<style>
.dropdown {
    position: static !important;
}
</style>
<style>
    .dropdown-menu {     box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15)!important;     margin-top:0px !important;     width:100% !important; }
</style>
';
?>
      <?php for ($i = 1, $n = sizeof($var_linksList); $i <= $n; $i++) {  ?>
        <li class="nav-item"><a class="nav-link" href="<?php echo $var_linksList[$i]['link']; ?>"><?php echo $var_linksList[$i]['name']; ?></a></li>
      <?php } // end FOR loop 
      ?>
    </ul>
  </div>
<?php } ?>