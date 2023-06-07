<?php

function getJsonFromESPN($league = 'nfl'){
    $path = 'cache/jerseys/';
    if(!is_dir($path)){
        mkdir($path, 0777, true);
    }
    $filename = $path . $league . 'teams.json';
    if(!file_exists($filename)){
        $url = 'https://www.espn.com/' . $league . '/teams';
        $content = file_get_contents($url);
        preg_match('|(?<=' . preg_quote('<script type="text/javascript">window[\'__espnfitt__\']=') . ').*(?=' . preg_quote(';</script>') . ')|', $content, $match);
        $json = $match[0];
        file_put_contents($filename, $json);
    }else{
        $json = file_get_contents($filename);
    }
    return $json;
}

function getTeamsFromESPN($league = 'nfl'){
    $json = getJsonFromESPN($league);
    $arr = json_decode($json, true);
    $arrTeams = $arr['page']['content']['leagueTeams']['columns'];
    $arrNFLTeams = array();
    foreach($arrTeams as $arr1){
        $groups = $arr1['groups'];
        foreach($groups as $arrDivision){
            $divisionName = $arrDivision['nm'];
            $arrNFLTeams[$divisionName] = array();
            $arrDivTeams = $arrDivision['tms'];
            foreach($arrDivTeams as $teamDetail){
                $teamName = $teamDetail['n'];
                $teamLogo = $teamDetail['p'];
                $teamID = $teamDetail['id'];
                $rosterURL = '';
                foreach($teamDetail['lk'] as $arrLinks){
                    if(strtolower($arrLinks['t']) == 'roster'){
                        $rosterURL = $arrLinks['u'];
                    }
                }
                $arrNFLTeams[$divisionName][$teamID] = array(
                    'name' => $teamName,
                    'logo' => $teamLogo,
                    'roster' => $rosterURL,
                );
            }
        }
    }
    return $arrNFLTeams;
}