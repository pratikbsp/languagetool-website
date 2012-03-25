<?php
$page = "languages";
$title = "LanguageTool";
$title2 = "Supported Languages";
$lastmod = "2012-02-13 16:30:00 CET";
$enable_tablesorter = 1;
include("../../include/header.php");
?>
		
<p class="firstpara">LanguageTool supports several languages to a different degree. This page lists the
number of rules per language to give a very rough indication of how well a
language is supported.</p>

<!--  TODO: link rules link java dir ... -->

<!-- Output of RuleOverview.java: -->

<b>Rules in LanguageTool 1.7</b><br />
Date: 2012-03-25<br /><br />

<table class="tablesorter sortable">
<thead>
<tr>
  <th valign='bottom' width="70">Language</th>
  <th valign='bottom' align="left" width="60">XML<br/>rules</th>
  <th></th>
  <th align="left" width="60">Java<br/>rules</th>
  <th align="left" width="60">False<br/>friends</th>
  <th valign='bottom' width="65">Auto-<br/>detected</th>
  <th valign='bottom' align="left">Rule Maintainers</th>
</tr>
</thead>
<tbody>
<tr><td valign="top">Asturian</td><td valign="top" align="right">61</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/ast/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=ast">browse</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top">yes</td><td valign="top" align="left">Xesús González Rato</td></tr>
<tr><td valign="top">Belarusian</td><td valign="top" align="right">7</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/be/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=be">browse</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top">yes</td><td valign="top" align="left">Alex Buloichik</td></tr>
<tr><td valign="top"><a href="../br/">Breton</a></td><td valign="top" align="right">428</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/br/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=br">browse</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top">-</td><td valign="top" align="left"><a href="http://dominiko.livejournal.com/tag/lingvoilo">Dominique Pellé</a>, Fulup Jakez</td></tr>
<tr><td valign="top">Catalan</td><td valign="top" align="right">213</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/ca/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=ca">browse</a></td><td valign="top" align="right">1</td><td valign="top" align="right">4</td><td valign="top">yes</td><td valign="top" align="left">Ricard Roca</td></tr>
<tr><td valign="top">Chinese</td><td valign="top" align="right">328</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/zh/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=zh">browse</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top">-</td><td valign="top" align="left">Tao Lin, Fangjie Wang, Wenting Cheng, Xiang Yao, Tong Wang, Jiawen Mo, Jiarong Li, Weijie Huang, Yixin Zhou, Xinmin Chen, Xiaofei Liu, Debiao Luo</td></tr>
<tr><td valign="top">Danish</td><td valign="top" align="right">22</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/da/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=da">browse</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top">yes</td><td valign="top" align="left">Esben Aaberg</td></tr>
<tr><td valign="top">Dutch</td><td valign="top" align="right">336</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/nl/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=nl">browse</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top">yes</td><td valign="top" align="left"><a href="http://www.opentaal.org">Ruud Baars</a></td></tr>
<tr><td valign="top">English</td><td valign="top" align="right">786</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/en/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=en">browse</a></td><td valign="top" align="right">5</td><td valign="top" align="right">298</td><td valign="top">yes</td><td valign="top" align="left"><a href="http://marcinmilkowski.pl">Marcin Miłkowski</a>, <a href="http://www.danielnaber.de">Daniel Naber</a></td></tr>
<tr><td valign="top"><a href="../eo/">Esperanto</a></td><td valign="top" align="right">264</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/eo/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=eo">browse</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top">yes</td><td valign="top" align="left"><a href="http://dominiko.livejournal.com/tag/lingvoilo">Dominique Pellé</a></td></tr>
<tr><td valign="top">French</td><td valign="top" align="right">2030</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/fr/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=fr">browse</a></td><td valign="top" align="right">1</td><td valign="top" align="right">5</td><td valign="top">yes</td><td valign="top" align="left">Agnes Souque, Hugo Voisard&nbsp;(2006-2007), <a href="http://dominiko.livejournal.com/tag/lingvoilo">Dominique Pellé</a></td></tr>
<tr><td valign="top">Galician</td><td valign="top" align="right">153</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/gl/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=gl">browse</a></td><td valign="top" align="right">1</td><td valign="top" align="right">106</td><td valign="top">yes</td><td valign="top" align="left"><a href="http://www.linguarum.net/projects/languagetool-gl">Susana Sotelo Docío</a></td></tr>
<tr><td valign="top"><a href="../de/">German</a></td><td valign="top" align="right">828</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/de/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=de">browse</a></td><td valign="top" align="right">9</td><td valign="top" align="right">91</td><td valign="top">yes</td><td valign="top" align="left">Jan Schreiber, Markus Brenneis, <a href="http://www.danielnaber.de">Daniel Naber</a></td></tr>
<tr><td valign="top">Icelandic</td><td valign="top" align="right">39</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/is/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=is">browse</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top">yes</td><td valign="top" align="left">Anton Karl Ingason</td></tr>
<tr><td valign="top">Italian</td><td valign="top" align="right">92</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/it/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=it">browse</a></td><td valign="top" align="right">0</td><td valign="top" align="right">36</td><td valign="top">yes</td><td valign="top" align="left">Paolo Bianchini</td></tr>
<tr><td valign="top">Khmer</td><td valign="top" align="right">24</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/km/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=km">browse</a></td><td valign="top" align="right">4</td><td valign="top" align="right">0</td><td valign="top">-</td><td valign="top" align="left">Nathan Wells</td></tr>
<tr><td valign="top">Lithuanian</td><td valign="top" align="right">4</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/lt/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=lt">browse</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top">-</td><td valign="top" align="left">Mantas Kriaučiūnas</td></tr>
<tr><td valign="top">Malayalam</td><td valign="top" align="right">18</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/ml/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=ml">browse</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top">-</td><td valign="top" align="left">Jithesh.V.S</td></tr>
<tr><td valign="top">Polish</td><td valign="top" align="right">1028</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/pl/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=pl">browse</a></td><td valign="top" align="right">4</td><td valign="top" align="right">139</td><td valign="top">yes</td><td valign="top" align="left">Marcin Miłkowski</td></tr>
<tr><td valign="top">Romanian</td><td valign="top" align="right">458</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/ro/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=ro">browse</a></td><td valign="top" align="right">2</td><td valign="top" align="right">0</td><td valign="top">yes</td><td valign="top" align="left"><a href="http://www.archeus.ro">Ionuț Păduraru</a></td></tr>
<tr><td valign="top"><a href="../ru/">Russian</a></td><td valign="top" align="right">152</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/ru/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=ru">browse</a></td><td valign="top" align="right">3</td><td valign="top" align="right">0</td><td valign="top">yes</td><td valign="top" align="left"><a href="http://myooo.ru/content/view/83/43/">Yakov Reztsov</a></td></tr>
<tr><td valign="top">Slovak</td><td valign="top" align="right">55</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/sk/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=sk">browse</a></td><td valign="top" align="right">2</td><td valign="top" align="right">0</td><td valign="top">yes</td><td valign="top" align="left"><a href="http://sk-spell.sk.cx">Zdenko Podobný</a></td></tr>
<tr><td valign="top">Slovenian</td><td valign="top" align="right">85</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/sl/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=sl">browse</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top">yes</td><td valign="top" align="left">Martin Srebotnjak</td></tr>
<tr><td valign="top">Spanish</td><td valign="top" align="right">70</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/es/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=es">browse</a></td><td valign="top" align="right">1</td><td valign="top" align="right">28</td><td valign="top">yes</td><td valign="top" align="left"><a href="http://languagetool-es.blogspot.com/">Juan Martorell</a></td></tr>
<tr><td valign="top">Tagalog</td><td valign="top" align="right">44</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/tl/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=tl">browse</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top">yes</td><td valign="top" align="left"><a href="http://www.dlsu.edu.ph/research/centers/adric/nlp/">Nathaniel Oco</a>, <a href="http://www.dlsu.edu.ph/research/centers/adric/nlp/faculty/borra.asp">Allan Borra</a></td></tr>
<tr><td valign="top">Ukrainian</td><td valign="top" align="right">21</td><td valign="top" align="right"><a href="http://languagetool.svn.sourceforge.net/viewvc/languagetool/trunk/JLanguageTool/src/rules/uk/grammar.xml?content-type=text%2Fplain">show</a>/<a href="http://community.languagetool.org/rule/list?lang=uk">browse</a></td><td valign="top" align="right">1</td><td valign="top" align="right">0</td><td valign="top">yes</td><td valign="top" align="left">Andriy Rysin, Maksym Davydov</td></tr>
</tbody>
</table>

<!-- End Output of RuleOverview.java -->

<p>The number of Java rules listed is only the number of rules specific
to that language. There are some rules that deal with punctuation
and that apply to almost all languages.</p>

<!--
<p>Auto-detected means that a language can be detected by LanguageTool without the user needing to select the language.</p>
-->

<?php
include("../../include/footer.php");
?>
