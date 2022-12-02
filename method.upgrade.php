<?php
#---------------------------------------------------------------------------------------------------
# Module: ReviewManager
# Authors: Chris Taylor, Magal, with CMS Made Simple Foundation able to assign new administrators.
# Copyright: (C) 2021 Chris Taylor, chris@binnovative.co.uk
#            is a fork of: CGFeedback (c) 2009 by Robert Campbell (calguy1000@cmsmadesimple.org)
# Licence: GNU General Public License version 3
#          see /ReviewManager/lang/LICENCE.txt or <http://www.gnu.org/licenses/>
#---------------------------------------------------------------------------------------------------

if( !defined('CMS_VERSION') ) exit;

// switch($oldversion) {
//         // we are now 1.0 and want to upgrade to latest
//     case "1.0":
// }

// put mention into the admin log
$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('upgraded', $this->GetVersion()) );


