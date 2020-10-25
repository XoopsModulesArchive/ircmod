<?php

include '../../mainfile.php';
require XOOPS_ROOT_PATH . '/header.php';
if ($xoopsUser) {
    $thisUser = $xoopsUser->uname();
} else {
    $thisUser = 'Visiteur???';
}
if (file_exists('./language/' . $xoopsConfig['language'] . '/index.php')) {
    $ircmotorlng = $xoopsConfig['language'];
} else {
    $ircmotorlng = english;
}
foreach ($xoopsModuleConfig as $k => $v) {
    if ('1' == $v) {
        $xoopsModuleConfig[$k] = 'true';
    } elseif ('0' == $v) {
        $xoopsModuleConfig[$k] = 'false';
    }
}
?>
    <applet name="IRCMod" code=IRCApplet.class archive="irc.jar,pixx.jar" width=640 height=400>
        <param name="CABINETS" value="irc.cab,securedirc.cab,pixx.cab">
        <param name="autoconnection" value="<?php echo $xoopsModuleConfig['autoconnect']; ?>">
        <param name="nick" value="<?php echo $thisUser; ?>">
        <param name="alternatenick" value="<?php echo $thisUser; ?>???">
        <param name="name" value="<?php echo $thisUser; ?>">
        <param name="host" value="<?php echo $xoopsModuleConfig['server']; ?>">
        <param name="gui" value="pixx">
        <param name="port" value="<?php echo $xoopsModuleConfig['port']; ?>">
        <param name="language" value="language/<?php echo $ircmotorlng; ?>/index">
        <param name="lngextension" value="php">
        <param name="pixx:language" value="language/<?php echo $ircmotorlng; ?>/gui">
        <param name="pixx:lngextension" value="php">
        <param name="quitmessage" value="<?php echo $xoopsModuleConfig['quitmsg']; ?>">
        <param name="asl" value="false">
        <param name="useinfo" value="true">
        <param name="style:bitmapsmileys" value="<?php echo $xoopsModuleConfig['usesmilies']; ?>">
        <param name="style:smiley1" value=":) img/sourire.gif">
        <param name="style:smiley2" value=":-) img/sourire.gif">
        <param name="style:smiley3" value=":-D img/content.gif">
        <param name="style:smiley4" value=":d img/content.gif">
        <param name="style:smiley5" value=":-O img/OH-2.gif">
        <param name="style:smiley6" value=":o img/OH-1.gif">
        <param name="style:smiley7" value=":-P img/langue.gif">
        <param name="style:smiley8" value=":p img/langue.gif">
        <param name="style:smiley9" value=";-) img/clin-oeuil.gif">
        <param name="style:smiley10" value=";) img/clin-oeuil.gif">
        <param name="style:smiley11" value=":-( img/triste.gif">
        <param name="style:smiley12" value=":( img/triste.gif">
        <param name="style:smiley13" value=":-| img/OH-3.gif">
        <param name="style:smiley14" value=":| img/OH-3.gif">
        <param name="style:smiley15" value=":'( img/pleure.gif">
        <param name="style:smiley16" value=":$ img/rouge.gif">
        <param name="style:smiley17" value=":-$ img/rouge.gif">
        <param name="style:smiley18" value="(H) img/cool.gif">
        <param name="style:smiley19" value="(h) img/cool.gif">
        <param name="style:smiley20" value=":-@ img/enerve1.gif">
        <param name="style:smiley21" value=":@ img/enerve2.gif">
        <param name="style:smiley22" value=":-S img/roll-eyes.gif">
        <param name="style:smiley23" value=":s img/roll-eyes.gif">
        <param name="style:backgroundimage" value="<?php echo $xoopsModuleConfig['usebgimg']; ?>">
        <param name="style:backgroundimage1" value="all all 0 background.gif">
        <param name="style:sourcefontrule1" value="all all Serif 12">
        <param name="style:floatingasl" value="true">
        <param name="pixx:timestamp" value="<?php echo $xoopsModuleConfig['showtimestamp']; ?>">
        <param name="pixx:highlight" value="true">
        <param name="pixx:highlightnick" value="true">
        <param name="pixx:nickfield" value="<?php echo $xoopsModuleConfig['shownickfield']; ?>">
        <param name="pixx:styleselector" value="true">
        <param name="pixx:setfontonstyle" value="true">
        <param name="pixx:showhelp" value="false">
        <param name="pixx:showabout" value="false">
        <param name="pixx:showchanlist" value="<?php echo $xoopsModuleConfig['showchanlist']; ?>">
        <param name="pixx:showclose" value="false">
        <param name="pixx:showstatus" value="<?php echo $xoopsModuleConfig['showstatus']; ?>">
        <?php
        if ('true' == $xoopsModuleConfig['autojoin1']) {
            echo "<param name='command1' value='/join " . $xoopsModuleConfig['channel1'] . "'>";

            if ('true' == $xoopsModuleConfig['autojoin2']) {
                echo "<param name='command2' value='/join " . $xoopsModuleConfig['channel2'] . "'>";
            }
        }
        ?>
    </applet>
    <br>
<?php
require XOOPS_ROOT_PATH . '/footer.php';
?>
