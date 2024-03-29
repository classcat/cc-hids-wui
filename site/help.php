<?php
/* @(#) $Id: help.php,v 1.10 2008/03/04 14:26:41 dcid Exp $ */

/* Copyright (C) 2006-2013 Trend Micro
 * All rights reserved.
 *
 * This program is a free software; you can redistribute it
 * and/or modify it under the terms of the GNU General Public
 * License (version 3) as published by the FSF - Free Software
 * Foundation
 */
       


/* OS PHP init */
if (!function_exists('os_handle_start'))
{
    echo "<b class='red'>You are not allowed direct access.</b><br />\n";
    return(1);
}
?>

<h2>About</h2>
<br />
<font size="2">
OSWUI is a an open source web interface for the <a href="http://www.ossec.net">OSSEC-HIDS</a> project. For details on
how to install, configure or use it, please take a look at <a href="http://www.ossec.net/wiki/index.php/OSSECWUI:Install">http://www.ossec.net/wiki/index.php/OSSECWUI:Install</a>. <br /><br />
If you have any problems or questions, please use one of the free support options
available at <a href="http://www.ossec.net/?page_id=21">http://www.ossec.net/?page_id=21</a>. 
<br /><br />
For information regarding commercial support, please visit <a href="http://www.ossec.net/?page_id=21">http://www.ossec.net/?page_id=21</a>.
<br /><br /><br />
<h3 class="my">Development team</h3>

<dd><strong>Daniel Cid</strong> - dcid ( at ) dcid.me</dd>
<dd><strong>Chris Abernethy</strong> - chris.abernethy (at) ossec.net</dd>
<dd><strong>Vic Hargrave</strong> - ossec ( at )  vichargrave.com</dd>
<br /><br /><br />

<h3 class="my">License</h3>
<font size="2"> 
      Copyright &copy; 2006 - 2013 <a href="http://www.trendmicro.com">Trend Micro</a>.  All rights reserved.
<br /><br />
      
OSSEC WEB UI (ossec-wui) is a free software; you can redistribute it and/or modify it under the terms of the GNU General Public License (version 2) as published by the FSF - Free Software Foundation. 
<br /><br />
OSSEC is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

<br /><br /><br />
<h3 class="my">補記</h3>
本ソフトウェアは(株)クラスキャットが日本語化を行なっています。
</font>
