<h1>csTimer  version 2015.12.12 - Professional Speedcubing/Training Timer</h1>
<?php include('lang.php') ?>
<p>csTimer is designed for speedsolving cuber. It supports scrambles of many types of puzzles include <b>all the WCA's official puzzle</b>; It integrated with <b>Xcross solver and eoline solver</b>; It supports time statistics, <b>multi-phase timming</b> and several functions supported by other similar software such as: 15s' inspection defined by WCA, etc.</p>
<p>The timer works well on most browsers, such as: chrome(recommend), firefox, opera, IE7+. And it also works on ipad, iphone and most of the Android platform. </p>
<p> --- Written by: <a class="click" href="mailto:cs0x7f@gmail.com">Shuang Chen (cs0x7f@gmail.com)</a><br>
 --- UI designed by: <a class="click" href="mailto:liebe7@126.com">Yue Zhang (liebe7@126.com)</a><br></p>
<h2>Introduction</h2>
<ul>
<li><b>Timer</b> - Support wca inspection, multi-phase timing, input through keyboard, confirm OK/+2/DNF. Accuracy is 0.001s.</li>
<li><b>Scramble</b> - Support all wca scramble. Huge number of unofficial and training scrambles, such as: edge/corner only, last layer.</li>
<li><b>Statistics</b> - Show average of 5/12 dynamically. Export statistics of current session, include best average of 5/12 etc.</li>
<li><b>Tools</b> - Support solving multi-face cross, Xcross(extended cross), EOLine. Scramble Image for NxNxN cube.</li>
</ul>
<h2>Detail</h2>
csTimer has been tested on Firefox, Chrome and Safari. And it also works pretty well on ipad(tested by oyyq).
<h3>Timer</h3>
<ul>
 <li><b>Traditional</b> - Press the 'space' key until the font colour toggle green. The timing will start when you release the key and record the solving time when you press the key again.</li>
 <li><b>Pressing time</b> - Same as stackmat, csTimer supports pressing time. You should keep the 'space' key for a while before release it. </li>
 <li><b>WCA inspection</b> - csTimer supports inspection time descriped in wca's regulation. If it is enabled, the timer will be at inspection state after your starting it.</li>
 <li><b>Multi-phase timing</b> - the timer supports multi-phase timming. You may set the number of phase(s), and might press space key several times.</li>
 <li><b>Input with keyboard</b> - if you wanna use extern timer such as stackmat, you may input time manually.</li>
 <li><b>OK/+2/DNF</b> - if this function is enabled, a confirmation dialog will popupped. You should select whether the solving(finish state) is OK, +2 or DNF. The default value might depend on the inspection time.</li>
 <li><b>Accuracy</b> - the accuracy of the timer is 0.001s or 1 millisecond, and can be showed to 0.01s. </li>
 <li><b>Time format</b> - You may set the time format to disable/enable 'minutes' or 'hours', such as: hh:mm:ss.XX(X) or mm:ss.XX(X)".</li>
 <li><b>Timer update</b> - For some reasons, timer updating may be set to: none, seconds or real-time.</li>
 <li><b>Font size</b> - For adapting monitors with different sizes, you may set the font size of the timer.</li>
 <li><b>Color style</b> - There're many color styles. Choose the one you like.</li>
</ul>
<h3>Scramble</h3>
<ul>
 <li><b>WCA Official Scrambler</b> - csTimer supports all wca's official scrambler, such as: random-state scrambler of 2x2x2, 3x3x3, pyraminx, square-1, clock. Random-move scrambler of 4x4x4, 5x5x5, 6x6x6, 7x7x7, megaminx.</li>
 <li><b>CFOP Training</b> - For CFOP method, special scrambles supported by csTimer are: scramble of last layer, last layer + one slot, last layer + 4 slots.</li>
 <li><b>Other 3x3x3 Methods</b> - For improvement of CFOP, special scrambles supported by csTimer are: ZBLL, corners/edges of last layer, RUL generator.</li>
 <li><b>Roux Training</b> - For Roux method, special scrambles supported by csTimer are: last six edge, l10p.</li>
 <li><b>Big Cube Training</b> - For big cube, special scrambles supported by csTimer are: scramble of edges of 4x4x4, 5x5x5, 6x6x6, 7x7x7.</li>
 <li><b>3x3x3 BLD Training</b> - For 3x3x3 bld, special scrambles supported by csTimer are: only edges/corners scrambled.</li>
 <li><b>Other Puzzles</b> - csTimer also supports a huge number of puzzles which is not wca's puzzles.</li>
</ul>
<h3>Statistics</h3>
<ul>
 <li><b>Multi Session</b> - There're 5 session(s) of time. All statistics function is session-oriented.</li>
 <li><b>Session average</b> - You may find session average at the bottom of the time table.</li>
 <li><b>Dynamic ao5</b> - After solving more than 5 times, you may check your average of 5 at 'ao5' column and get detail by clicking the cell.</li>
 <li><b>Dynamic ao12</b> - After solving more than 12 times, you may check your average of 12 at 'ao12' column and get detail by clicking the cell.</li>
 <li><b>Statistics detials</b> - Click the cell which contains session average, you'll get the detail of current session.</li>
 <li><b>add comments</b> - Click the cell which contains a solving time, you may set the time to OK/+2/DNF or comments.</li>
 <li><b>delete time/session</b> - Click the index before time, You may delete the time at the same row. Or click the 'X' button to remove all times in the current session.</li>
</ul>
<h3>Keyboard Shortcut</h3>
<ul>
 <table class="table" style="display: inline-block;">
  <tr><th>key</th><td>function</td></tr>
  <tr><th>Alt + 1</th><td>Scramble type to Square-1.</td></tr>
  <tr><th>Alt + 2 ~ 7</th><td>Scramble type to 2x2x2~7x7x7.</td></tr>
  <tr><th>Alt + p/m/c/s</th><td>Scramble type to pyra/megaminx/clock/skewb.</td></tr>
  <tr><th>Alt + i</th><td>Scramble type to input.</td></tr>
  <tr><th>Alt + d</th><td>Remove all times in current session.</td></tr>
  <tr><th>Alt + z</th><td>Remove the latest time.</td></tr>
  <tr><th>Alt + up/down</th><td>To next/last session.</td></tr>
  <tr><th>Alt + left/rightt</th><td>Display last/next scramble.</td></tr>
  <tr><th>Ctrl + 1/2/3</th><td>The latest time is OK/+2/DNF</td></tr>
 </table>
 <table class="table" id="vrckey" style="display: inline-block;">
  <tr><th colspan=10>Virtual Cube Key Map</th></tr><tr>
   <td>1<br><br></td> <td>2<br><br></td> <td>3<br><span>&lt;</span></td> <td>4<br><span>&gt;</span></td> <td>5<br><br></td>
   <td>6<br><br></td> <td>7<br><span>&lt;</span></td> <td>8<br><span>&gt;</span></td> <td>9<br><br></td> <td>0<br><br></td>
  </tr><tr>
   <td>Q<br><span> z'</span></td> <td>W<br><span>  B</span></td> <td>E<br><span> L'</span></td> <td>R<br><span>Lw'</span></td> <td>T<br><span>  x</span></td> 
   <td>Y<br><span>  x</span></td> <td>U<br><span> Rw</span></td> <td>I<br><span>  R</span></td> <td>O<br><span> B'</span></td> <td>P<br><span>  z</span></td> 
  </tr><tr>
   <td>A<br><span> y'</span></td> <td>S<br><span>  D</span></td> <td>D<br><span>  L</span></td> <td>F<br><span> U'</span></td> <td>G<br><span> F'</span></td>
   <td>H<br><span>  F</span></td> <td>J<br><span>  U</span></td> <td>K<br><span> R'</span></td> <td>L<br><span> D'</span></td> <td>;<br><span>  y</span></td>
  </tr><tr>
   <td>Z<br><span> Dw</span></td> <td>X<br><span> M'</span></td> <td>C<br><span>Uw'</span></td> <td>V<br><span> Lw</span></td> <td>B<br><span> x'</span></td>
   <td>N<br><span> x'</span></td> <td>M<br><span>Rw'</span></td> <td>,<br><span> Uw</span></td> <td>.<br><span> M'</span></td> <td>/<br><span>Dw'</span></td>
  </tr>
 </table>
</ul>
<h2>Links</h2>
<ul>
<li><a class="click" href="http://cubingchina.com/">Cubing China, the official Chinese speedcubing website</a></li>
<li><a class="click" href="/old2/">csTimer version 2012.3.15 (only zh-cn)</a></li>
<li><a class="click" href="/old/">csTimer version 2012.2.29 (only zh-cn)</a></li>
<li><a class="click" href="/src/">csTimer with uncompressed files</a></li>
<li><a class="click" href="https://github.com/cs0x7f/cstimer">source code of csTimer</a></li>
</ul>
<div class="donate" style="line-height:1.5em;">
<p>Thank you for your interest in supporting csTimer!</p>
<p>Donations will be used to support our developers and purchase equipment. </p>
<p>You can donate through PayPal using the button below or <a href="https://www.paypal.me/cs0x7f" class="click"> via PayPal.me</a>. </p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="NW25HME3QUEZY">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/zh_XC/i/scr/pixel.gif" width="1" height="1">
</form>
<p>You can also donate through Alipay to the following account: <br>cs0x7f@gmail.com</p>
<p><img style="display:inline-block; width:10em; height:10em;" src="data:image/png;base64,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"></p>
<p>Your support is greatly appreciated!</p>
</div>
