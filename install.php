<?php
#   Copyright by: Manuel
#   Support: www.ilch.de
if (version_compare(phpversion(), '5.3') != - 1) {
    if (E_ALL > E_DEPRECATED) {
        @error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
    } else {
        @error_reporting(E_ALL ^ E_NOTICE);
    }
    date_default_timezone_set('Europe/Berlin');
} else {
    @error_reporting(E_ALL ^ E_NOTICE);
}

@ini_set('display_errors', 'On');
?>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>... ::: [ I n s t a l l a t i o n &nbsp; f &uuml; r &nbsp; C l a n s c r i p t &nbsp; v o n &nbsp; i l c h ] ::: ...</title>
	<link rel="stylesheet" href="include/designs/ilchClan/style.css" type="text/css">

</head>

<body>

<form action="install.php" method="POST">

<?php


if ( empty ($_POST['step']) ) {

?>
		<input type="hidden" name="step" value="3" />

		<table width="700" class="border" border="0" cellspacing="1" cellpadding="3" align="center">
      <tr class="Chead">
        <td><b>Lizenz</b></td>
			</tr><tr class="Cmite">
        <td><div style="overflow: auto; width: 690px; height: 450px;">
<b><a target="_blank" href="http://www.gnu.de/gpl-ger.html">Deutsche inoffizielle &Uuml;bersetzung der Lizenz</a></b>

<H2><A NAME="SEC1" HREF="install.php#TOC1">GNU GENERAL PUBLIC LICENSE</A></H2>
<P>
Version 2, June 1991

</P>

<PRE>
Copyright (C) 1989, 1991 Free Software Foundation, Inc.
51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA

Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.
</PRE>


<H2><A NAME="SEC2" HREF="install.php#TOC2">Preamble</A></H2>

<P>
  The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation's software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Lesser General Public License instead.)  You can apply it to
your programs, too.

</P>
<P>
  When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.

</P>
<P>
  To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.


</P>
<P>
  For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.

</P>
<P>
  We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.

</P>
<P>
  Also, for each author's protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors' reputations.

</P>
<P>
  Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone's free use or not licensed at all.

</P>

<P>
  The precise terms and conditions for copying, distribution and
modification follow.

</P>


<H2><A NAME="SEC3" HREF="install.php#TOC3">TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION</A></H2>


<P>

<STRONG>0.</STRONG>
 This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The "Program", below,
refers to any such program or work, and a "work based on the Program"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term "modification".)  Each licensee is addressed as "you".
<P>

Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.

<P>

<STRONG>1.</STRONG>
 You may copy and distribute verbatim copies of the Program's
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.
<P>

You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.
<P>

<STRONG>2.</STRONG>
 You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:

<P>

<DL>
<DT>
<DD>
<STRONG>a)</STRONG>
     You must cause the modified files to carry prominent notices
     stating that you changed the files and the date of any change.
</DD>
</DT>
</DL>
<P>
<DL>
<DT>
<DD>
<STRONG>b)</STRONG>

     You must cause any work that you distribute or publish, that in
     whole or in part contains or is derived from the Program or any
     part thereof, to be licensed as a whole at no charge to all third
     parties under the terms of this License.
</DD>
</DT>
</DL>
<P>
<DL>
<DT>
<DD>
<STRONG>c)</STRONG>
     If the modified program normally reads commands interactively
     when run, you must cause it, when started running for such
     interactive use in the most ordinary way, to print or display an
     announcement including an appropriate copyright notice and a
     notice that there is no warranty (or else, saying that you provide
     a warranty) and that users may redistribute the program under
     these conditions, and telling the user how to view a copy of this
     License.  (Exception: if the Program itself is interactive but
     does not normally print such an announcement, your work based on
     the Program is not required to print an announcement.)
</DD>
</DT>
</DL>
<P>

These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.
<P>

Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.
<P>

In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.

<P>

<STRONG>3.</STRONG>
 You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:


<!-- we use this doubled UL to get the sub-sections indented, -->
<!-- while making the bullets as unobvious as possible. -->

<DL>
<DT>
<DD>
<STRONG>a)</STRONG>
     Accompany it with the complete corresponding machine-readable
     source code, which must be distributed under the terms of Sections
     1 and 2 above on a medium customarily used for software interchange; or,
</DD>
</DT>
</DL>
<P>
<DL>
<DT>
<DD>
<STRONG>b)</STRONG>
     Accompany it with a written offer, valid for at least three
     years, to give any third party, for a charge no more than your
     cost of physically performing source distribution, a complete
     machine-readable copy of the corresponding source code, to be
     distributed under the terms of Sections 1 and 2 above on a medium
     customarily used for software interchange; or,

</DD>
</DT>
</DL>
<P>
<DL>
<DT>
<DD>
<STRONG>c)</STRONG>
     Accompany it with the information you received as to the offer
     to distribute corresponding source code.  (This alternative is
     allowed only for noncommercial distribution and only if you
     received the program in object code or executable form with such
     an offer, in accord with Subsection b above.)
</DD>
</DT>
</DL>
<P>

The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.

<P>

If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.
<P>

<STRONG>4.</STRONG>
 You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.

<P>

<STRONG>5.</STRONG>
 You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.

<P>

<STRONG>6.</STRONG>
 Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.

<P>

<STRONG>7.</STRONG>
 If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.
<P>

If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.
<P>

It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.
<P>

This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.

<P>

<STRONG>8.</STRONG>
 If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.

<P>

<STRONG>9.</STRONG>
 The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.
<P>

Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.


<P>


<STRONG>10.</STRONG>
 If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.



<P><STRONG>NO WARRANTY</STRONG></P>

<P>

<STRONG>11.</STRONG>
 BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.

<P>

<STRONG>12.</STRONG>
 IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.

<P>


<H2>END OF TERMS AND CONDITIONS</H2>
        </div>
        </td>
      </tr><tr class="Cdark">
				<td align="center"><input type="submit" value="Lizenz gelesen und akzeptiert"></td>
 			</tr>
 	</table>
		</form>
		</body>
		</html> <?php

} elseif ($_POST['step'] == 3) {
  ?>

		<input type="hidden" name="step" value="4" />

		<table width="700" class="border" border="0" cellspacing="1" cellpadding="3" align="center">
      <tr class="Chead">
        <td colspan="2"><b>Voraussetzungen Pr&uuml;fen</b></td>
			</tr>
            <tr>
        <td class="Cmite"><br>PHP-Version (5.2.0 oder h&ouml;her) - deine Version: <i><?php echo phpversion(); ?></i><br></td>
    		<td class="Cnorm"><?php if ( @version_compare(phpversion(), '5.2.0') != -1) { echo '<font color="#40aa00"><b>RICHTIG</b></font>'; } else { echo '<font color="#FF0000"><b>FALSCH</b></font>'; } ?></td>
  		</tr>
        <tr>
        <td class="Cmite"><br>MySQL-Version (5.0.0 oder h&ouml;her) - deine Version: <i><?php echo mysql_get_server_info();?></i><br></td>
    		<td class="Cnorm"><?php $sqlserver = mysql_get_server_info();
									preg_match('/[1-9].[0-9].[1-9][0-9]/', $sqlserver, $sqlinfo); 
									if ( @version_compare($sqlinfo, '5.0.0') != -1) { echo '<font color="#40aa00"><b>RICHTIG</b></font>'; } else { echo '<font color="#FF0000"><b>FALSCH</b></font>'; } ?>
           </td>
  		</tr><tr>
        <td class="Cmite"><br>"include/includes/config.php" (CHMOD 666)<br></td>
    		<td class="Cnorm"><?php if ( @is_writeable ( 'include/includes/config.php' ) ) { echo '<font color="#40aa00"><b>RICHTIG</b></font>'; } else { echo '<font color="#FF0000"><b>FALSCH</b></font>'; } ?></td>
  		</tr><tr>
        <td class="Cmite"><br>"include/backup" Schreibrechte (CHMOD 777)<br></td>
    		<td class="Cnorm"><?php if ( @is_writeable ( 'include/backup' ) ) { echo '<font color="#40aa00"><b>RICHTIG</b></font>'; } else { echo '<font color="#FF0000"><b>FALSCH</b></font>'; } ?></td>
  		</tr><tr>
    		<td class="Cmite"><br>"include/contents/selfbp/selfp" Schreibrechte (CHMOD 777)<br></td>
    		<td class="Cnorm"><?php if ( @is_writeable ( 'include/contents/selfbp/selfp' ) ) { echo '<font color="#40aa00"><b>RICHTIG</b></font>'; } else { echo '<font color="#FF0000"><b>FALSCH</b></font>'; } ?></td>
  		</tr><tr>
    		<td class="Cmite"><br>"include/contents/selfbp/selfb" Schreibrechte (CHMOD 777)<br></td>
    		<td class="Cnorm"><?php if ( @is_writeable ( 'include/contents/selfbp/selfb' ) ) { echo '<font color="#40aa00"><b>RICHTIG</b></font>'; } else { echo '<font color="#FF0000"><b>FALSCH</b></font>'; } ?></td>
  		</tr><tr>
        <td class="Cmite"><br>"include/images/linkus" Schreibrechte (CHMOD 777)<br></td>
    		<td class="Cnorm"><?php if ( @is_writeable ( 'include/images/linkus' ) ) { echo '<font color="#40aa00"><b>RICHTIG</b></font>'; } else { echo '<font color="#FF0000"><b>FALSCH</b></font>'; } ?></td>
  		</tr><tr>
    		<td class="Cmite"><br>"include/images/avatars" Schreibrechte (CHMOD 777)<br></td>
    		<td class="Cnorm"><?php if ( @is_writeable ( 'include/images/avatars' ) ) { echo '<font color="#40aa00"><b>RICHTIG</b></font>'; } else { echo '<font color="#FF0000"><b>FALSCH</b></font>'; } ?></td>
  		</tr><tr>
    		<td class="Cmite"><br>"include/images/gallery" Schreibrechte (CHMOD 777)<br></td>
    		<td class="Cnorm"><?php if ( @is_writeable ( 'include/images/gallery' ) ) { echo '<font color="#40aa00"><b>RICHTIG</b></font>'; } else { echo '<font color="#FF0000"><b>FALSCH</b></font>'; } ?></td>
  		</tr><tr>
    		<td class="Cmite"><br>"include/images/smiles" Schreibrechte (CHMOD 777)<br></td>
    		<td class="Cnorm"><?php if ( @is_writeable ( 'include/images/smiles' ) ) { echo '<font color="#40aa00"><b>RICHTIG</b></font>'; } else { echo '<font color="#FF0000"><b>FALSCH</b></font>'; } ?></td>
  		</tr><tr>
    		<td class="Cmite"><br>"include/images/usergallery" Schreibrechte (CHMOD 777)<br></td>
    		<td class="Cnorm"><?php if ( @is_writeable ( 'include/images/usergallery' ) ) { echo '<font color="#40aa00"><b>RICHTIG</b></font>'; } else { echo '<font color="#FF0000"><b>FALSCH</b></font>'; } ?></td>
  		</tr><tr>
    		<td class="Cmite"><br>"include/images/wars" Schreibrechte (CHMOD 777)<br></td>
    		<td class="Cnorm"><?php if ( @is_writeable ( 'include/images/wars' ) ) { echo '<font color="#40aa00"><b>RICHTIG</b></font>'; } else { echo '<font color="#FF0000"><b>FALSCH</b></font>'; } ?></td>
  		</tr><tr>
    		<td class="Cmite"><br>"include/downs/downloads" Schreibrechte (CHMOD 777)<br></td>
    		<td class="Cnorm"><?php if ( @is_writeable ( 'include/downs/downloads' ) ) { echo '<font color="#40aa00"><b>RICHTIG</b></font>'; } else { echo '<font color="#FF0000"><b>FALSCH</b></font>'; } ?></td>
  		</tr><tr>
    		<td class="Cmite"><br>"include/downs/downloads/user_upload" Schreibrechte (CHMOD 777)<br></td>
    		<td class="Cnorm"><?php if ( @is_writeable ( 'include/downs/downloads/user_upload' ) ) { echo '<font color="#40aa00"><b>RICHTIG</b></font>'; } else { echo '<font color="#FF0000"><b>FALSCH</b></font>'; } ?></td>
  		</tr><tr class="Cdark">
		    <td></td>
				<td><input type="submit" value="Weiter ->"></td>
 			</tr>
 	</table>
		</form>
		</body>
		</html> <?php
} elseif ( $_POST['step'] == 4 ) {
  ?>
	<input type="hidden" name="step" value="5">

		<table width="700" class="border" border="0" cellspacing="1" cellpadding="3" align="center">
      <tr class="Chead">
        <td colspan="3"><b>Installation</b></td>
			</tr><tr class="Cdark">
 		    <td colspan="3"><b>MySQL Einstellungen</b><br />Wenn Sie mit den MySQL Daten nicht zurecht kommen, also nicht wissen was Sie im folgenden eingeben sollen, lesen Sie bitte erst die Beschreibung hinter dem Feld und bei weiterer Unklarheit wenden Sie sich an Ihren Webspace Anbieter oder Ihren Systemadministrator um die n&ouml;tigen Daten zu erfahren.</td>
		  </tr><tr>
        <td class="Cmite" width="100">Hostname</td>
    		<td class="Cnorm"><input type="text" value="localhost" name="mysql_hostname"></td>
				<td class="Cnorm">i.d.R. localhost oder 127.0.0.1 ansonsten ein Server-Name oder eine Server-IP.</td>
  		</tr><tr>
    		<td class="Cmite">Username</td>
    		<td class="Cnorm"><input type="text" name="mysql_username"></td>
				<td class="Cnorm">Der Username der auf die Datenbank zugreiffen soll.</td>
  		</tr><tr>
    		<td class="Cmite">Password</td>
    		<td class="Cnorm"><input type="text" name="mysql_passW"></td>
				<td class="Cnorm">Das Password f&uuml;r den Username damit er sich an der Datenbank anmelden kann.</td>
  		</tr><tr>
    		<td class="Cmite">Datenbank</td>
    		<td class="Cnorm"><input type="text" name="mysql_datenbank"></td>
				<td class="Cnorm">Die Datenbank in der die Tabellen f&uuml;r das Clanscript angelegt werden sollen.</td>
  		</tr><tr>
    		<td class="Cmite">Installation Nr.</td>
    		<td class="Cnorm"><select name="mysql_prefix"><?php
           for($i=1;$i<=10;$i++) {
             echo '<option value="ic'.$i.'_">'.$i.'</option>';
           }
        ?></select></td>
				<td class="Cnorm">Kann i.d.R. unver&auml;ndert bleiben, ausser das Script wird mehr als einmal in die selbe Datenbank installiert.</td>
  		</tr><tr class="Cdark">
    		<td colspan="3"><b>Admin anlegen</b></td>
  		</tr><tr>
    		<td class="Cmite">Usernamen</td>
    		<td class="Cnorm"><input type="text" name="admin_name" maxlength="15"></td>
				<td class="Cnorm">Der Nickname des Administrator Users mit dem Sie sich nach dieser Installation anmelden k&ouml;nnen.</td>
  		</tr><tr>
    		<td class="Cmite">Passwort</td>
    		<td class="Cnorm"><input type="text" name="admin_pwd" maxlength="20"></td>
				<td class="Cnorm">Das Password mit dem Sie sich nach der Installation zusammen mit dem Username anmelden k&ouml;nnen.</td>
  		</tr><tr>
    		<td class="Cmite">Admin eMail</td>
    		<td class="Cnorm"><input type="text" name="admin_amail"></td>
				<td class="Cnorm">Die eMail-Adresse des Administrator Users (also vermutlich Ihre eMail-Adresse).</td>
      </tr><tr class="Cdark">
				<td colspan="3" align="center"><input type="submit" value="Daten Speichern und Installieren" /></td>
 			</tr>
 	</table>
		</form>
		</body>
		</html> <?php
} elseif ( $_POST['step'] == 5 ) {

  if (
      empty ( $_POST['admin_name'] ) OR
	    empty ( $_POST['admin_amail'] ) OR
	    empty($_POST['mysql_hostname']) OR
	    empty($_POST['mysql_username']) OR
	    empty($_POST['mysql_datenbank']) OR
	    empty($_POST['mysql_prefix'])
    )
  {
    echo '<table width="50%" class="border" border="0" cellspacing="1" cellpadding="3" align="center"><tr><td class="Cnorm">Folgende Angaben sind unbedingt erforderlich:<br />&nbsp;&nbsp;- Hostname<br />&nbsp;&nbsp;- Username<br />&nbsp;&nbsp;- Installations Nr.<br />&nbsp;&nbsp;- Datenbank<br />&nbsp;&nbsp;- AdminPassword<br />&nbsp;&nbsp;- AdminE-Mail<br />&nbsp;&nbsp;- AdminName<br />&nbsp;<a href="javascript:history.back(-1)">zur&uuml;ck</a></td></tr></table>';
  } else {
    $config = <<< config
<?php
define ( 'DBHOST', '{$_POST['mysql_hostname']}' );   # sql host
define ( 'DBUSER', '{$_POST['mysql_username']}');  # sql user
define ( 'DBPASS', '{$_POST['mysql_passW']}');  # sql pass
define ( 'DBDATE', '{$_POST['mysql_datenbank']}');  # sql datenbank
define ( 'DBPREF', '{$_POST['mysql_prefix']}'); # sql prefix
config;
    $config .= "\n".'?>';
    $open = @fopen('include/includes/config.php' , 'w' );
    if ($open) {
    	fwrite ( $open , trim($config) );
		  fclose ( $open );
      require_once('include/includes/config.php');
    } else {
      define ( 'DBHOST', $_POST['mysql_hostname'] );   # sql host
      define ( 'DBUSER', $_POST['mysql_username']);  # sql user
      define ( 'DBPASS', $_POST['mysql_passW']);  # sql pass
      define ( 'DBDATE', $_POST['mysql_datenbank']);  # sql datenbank
      define ( 'DBPREF', $_POST['mysql_prefix']); # sql prefix
    }



define ( 'main' , TRUE );
require_once('include/includes/func/db/mysql.php');

db_connect();


# checken ob die config tabelle + prefix schon da ist.
# wenn ja wird hier abgebrochen, keine 2 mal installation.
# zumal sonst evtl. eintraege doppelt vorkommen koennten
if (DBPREF.'allg' == @db_result(@db_query("SHOW TABLES LIKE 'prefix_allg'"),0)) {
  ?>
	  <html>
		<head><title>... ::: [ I n s t a l l a t i o n &nbsp; f  r &nbsp; C l a n s c r i p t &nbsp; v o n &nbsp; i l c h ] ::: ...</title>
		<link rel="stylesheet" href="include/designs/ilchClan/style.css" type="text/css"></head>
		<body>
		<table width="70%" class="border" border="0" cellspacing="0" cellpadding="25" align="center">
      <tr>
        <td class="Cmite">
    	    <h1 style="color: #FF0000;">FEHLER: Es ist ein <u>Fehler</u> aufgetreten!</h2>
          Die Installation wurde vermutlich schon ausgef&uuml;hrt.
          <br />Auf jeden Fall ist die allgemeine Tabelle schon vorhanden...
          <br />Bitte ersteinmal den Status der <a href="index.php">Seite</a> checken.
          <br />- Wenn es die Version 1.0.5 ist, dann bitte das update ausf&uuml;hren.
          <br />- Ansonsten wurde die Version 1.1 offenbar schon installiert.
          <br /><br />Bei Fragen bitte auf <a href="http://www.ilch.de/">ilch.de</a> nachfragen.
        </td>
      </tr>
    </table>
		</body>
		</html>
  <?php

  exit ();
}

$sql_file = implode('',file('install.sql'));
$sql_file = preg_replace ("/(\015\012|\015|\012)/", "\n", $sql_file);
$sql_statements = explode(";\n",$sql_file);
foreach ( $sql_statements as $sql_statement ) {
  if ( trim($sql_statement) != '' ) {
    #echo '<pre>'.$sql_statement.'</pre><hr>';
    db_query($sql_statement);
	}
}

db_query ("INSERT INTO `prefix_user` ( 
										name, 
										name_clean,
										pass, 
										regist, 
										email, 
										recht, 
										llogin, 
										status, 
										opt_mail, 
										opt_pm 
									) 
										VALUES 
									( 
										'".$_POST['admin_name']."',
										'".strtolower($_POST['admin_name'])."',
										'".md5($_POST['admin_pwd'])."',
										'".time()."',
										'".$_POST['admin_amail']."',
										'-9',
										'".time()."',
										1,
										1,
										1
									)");
db_query ("UPDATE prefix_allg SET t1 = '".$_POST['admin_amail']."|Webmaster' WHERE k = 'kontakt'");
db_query ("UPDATE prefix_config SET wert = '".$_POST['admin_amail']."' WHERE schl = 'adminMail'");
?>

	  <html>
		<head><title>... ::: [ I n s t a l l a t i o n &nbsp; f  r &nbsp; C l a n s c r i p t &nbsp; v o n &nbsp; i l c h ] ::: ...</title>
		<link rel="stylesheet" href="include/designs/ilchClan/style.css" type="text/css"></head>
		<body>
		<table width="70%" class="border" border="0" cellspacing="0" cellpadding="25" align="center">
      <tr>
        <td class="Cmite">
    	    <h2><b>Installation abgeschlossen</b></h2>
					Sofern keine Fehler aufgetreten sind ist die Installation abgeschlossen.

          <?php if (!$open) { ?>
          <br /><br /><br />Weil die Datei include/includes/config.php nicht die n&ouml;tigen
          Rechte hatte bitte einfach den Inhalt des folgenden Eingabefeldes kopieren
          und komplett in diese Datei auf dem Server schreiben. Die Datei dazu einfach
          mit einem Editor &ouml;ffnen und den Inhalt einf&uuml;gen.
          <br /><b>Inhalt include/includes/config.php</b><br />
          <textarea cols="60" rows="10"><?php echo trim($config); ?></textarea>
          <br /><br />
          <?php  } ?>
					<br />
          Die Seite kann jetzt <a href="index.php">Aufgerufen</a> werden.
					<br /><br />
					Bitte unbedingt install.sql und install.php l&ouml;schen!
        </td>
      </tr>
    </table>
		</body>
		</html>

<?php
  }
}

?>
