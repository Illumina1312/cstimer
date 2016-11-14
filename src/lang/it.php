<h1>csTimer  version 2015.12.12 - Cronometro Professionale per Speedcubing/Allenamento</h1>
<?php include('lang.php') ?>
<p>csTimer e' pensato per gli speedcubers. Supporta scrambles di molti tipi di puzzle inclusi <b>tutti i puzzle ufficiali WCA</b>; Integra <b>i risolutori Xcross ed eoline</b>; calcola statistiche temporali, <b>cronometra multi-fase</b> e ha molte altre funzioni presenti anche su software simili come ad esempio consente di eseguire i 15s di ispezione definiti dalla WCA, etc.</p>
<p>csTimer funziona bene con la maggior parte dei browser, come: chrome(consigliato), firefox, opera, IE7+. Funziona inoltre su ipad, iphone e molti device Android. </p>
<p> --- Scritto da: <a class="click" href="mailto:cs0x7f@gmail.com">Shuang Chen (cs0x7f@gmail.com)</a><br>
 --- UI disegnata da: <a class="click" href="mailto:liebe7@126.com">Yue Zhang (liebe7@126.com)</a><br></p>
<h2>Introduzione</h2>
<ul>
<li><b>Cronometro</b> - Supporta l'ispezione WCA, cronometro multi-fase, input da tastiera, conferme OK/+2/DNF. La precisione e' 0.001s.</li>
<li><b>Scramble</b> - Supporta tutti gli scramble WCA. Molti scrambles non ufficiali e da allenamento come: edge/corner only, last layer.</li>
<li><b>Statistiche</b> - Mostra dinamicamente la media senza i valori estremi su 5 e 12 campioni. Esporta le statistiche della sessione corrente, incluso il miglior tempo su 5/12 campioni, etc.</li>
<li><b>Strumenti</b> - Supporta risoluzioni con croce indipendente dal colore, Xcross (croce estesa), EOLine. Visualizza le immagine degli scramble per i cubi NxNxN.</li>
</ul>
<h2>Detail</h2>
csTimer e' stato testato su Firefox, Chrome e Safari. Inoltre funziona bene su ipad(testato da oyyq).
<h3>Cronometro</h3>
<ul>
 <li><b>Traditionale</b> - Premi il tasto 'spazio' fino a quando il colore dei numeri diventa verde. Il cronometro partira' quando rilascerai il tasto spazio e registrera' il tempo di risoluzione quando lo premerai nuovamente.</li>
 <li><b>Stackmat</b> - funziona con lo stessa attesa di stackmat. Il tasto 'spazio' va tenuto premuto a lungo prima di rilasciarlo. </li>
 <li><b>Ispezione WCA</b> - csTimer supporta il tempo di ispezione come descritto nel regolamento WCA. Se abilitato, il cronometro consentira' l'ispezione prima di iniziare a rilevare i tempi di risoluzione.</li>
 <li><b>Cronografo Multi-fase</b> - il cronografo e' in grado di rilevare i tempi delle fasi. Va definito il numero delle fasi e si dovra' premere il tasto spazio piu' volte.</li>
 <li><b>Input con tastiera</b> - se vuoi usare un cronometro esterno come stackmat, puoi inserire i dati manualmente per avere le statistiche.</li>
 <li><b>OK/+2/DNF</b> - se questa funzione e' abilitata, sara' mostrato un popup di scelta in cui selezionare se attribuire allo stato finale OK, +2 oppure DNF. Il valore predefinito dipende dal tempo di ispezione.</li>
 <li><b>Precisione</b> - la precisione del cronometro e' di 0.001s (1 millisecondo), e puo' essere arrotondata a 0.01s. </li>
 <li><b>Formato Tempi</b> - Puoi selezionare il formato dei tempi rilevati abilitano/disabilitando 'minuti' oppure 'ore', ad esempio: hh:mm:ss.XX(X) oppure mm:ss.XX(X)".</li>
 <li><b>Aggiornamento Tempi</b> - Per qualche ragione, l'aggiornamento dei tempi puo' essere configurato a: nessuno, secondi oppure real-time.</li>
 <li><b>Dimensione Testo</b> - Per adattarsi a monitor di dimensioni differenti, puoi selezionare diverse dimensioni del testo del cronometro.</li>
 <li><b>Stile Colori</b> - Ci sono molti stili di colori. Scegli quello che ti piace.</li>
</ul>
<h3>Scramble</h3>
<ul>
 <li><b>Scarmbler Ufficiale WCA</b> - csTimer supporta tutte le modalita' di scamble ufficiali della WCA, come: random-state scrambler di 2x2x2, 3x3x3, pyraminx, square-1, clock. Random-move scrambler di 4x4x4, 5x5x5, 6x6x6, 7x7x7, megaminx.</li>
 <li><b>Allenamento CFOP</b> - Per il metodo CFOP, csTimer supporta scamble speciali: scramble dell'ultimo strato, dell'ultimo strato ed una coppia, dell'ultimo strato e quattro coppie.</li>
 <li><b>Altri metodi 3x3x3</b> - Per migliorare col CFOP, sono supportati da csTimer altri scramble speciali: ZBLL, angoli/spigoli dell'ultimo strato, generatore di RUL.</li>
 <li><b>Allenamento Roux</b> - Per il metodo Roux, gli scrambles speciali supportati da csTimer sono: ultimi sei spigoli, l10p.</li>
 <li><b>Allenamento Big Cube</b> - Per i big cube, gli scrambles speciali supportati da csTimer sono: scramble di spigoli 4x4x4, 5x5x5, 6x6x6, 7x7x7.</li>
 <li><b>3x3x3 BLD Training</b> - Per il 3x3x3 bld, gli scrambles speciali supportati da csTimer sono: solo spicoli/angoli.</li>
 <li><b>Altri Puzzles</b> - csTimer supporta inoltre un gran numero di puzzles non riconosciuti ufficialmente dalla WCA.</li>
</ul>
<h3>Statistiche</h3>
<ul>
 <li><b>Multi Sessione</b> - Ci sono 5 sessioni di rilevamento. Tutte le statistiche sono orientate alla singola sessione.</li>
 <li><b>Media di Sessione</b> - Puoi trovare la media di sessione in fondo alla tabella con i tempi.</li>
 <li><b>ao5 dinamica</b> - Dopo avere eseguito almeno 5 risoluzioni, puoi verificare la tua media di 5 nella colonna 'ao5' ed avere i dettagli facendo click sulla cella.</li>
 <li><b>ao12 dinamica</b> - Dopo avere eseguito almeno 12 risoluzioni, puoi verificare la tua media di 12 nella colonna 'ao5' ed avere i dettagli facendo click sulla cella.</li>
 <li><b>Statistiche in dettaglio</b> - Fai click sulla cella che contiene le statistiche di sessione ed avrai tutti i dettagli della sessione corrente.</li>
 <li><b>Aggiungi commenti</b> - Fai click sulla cella che contiene il tempo di risoluzione, puoi identificare il tempo come OK/+2/DNF oppure aggiungere un commento.</li>
 <li><b>Cancella tempi/sessioni</b> - Fai click sull'indice prima del tempo rilevato, puoi cancellare il tempo sulla stessa riga. Oppure fai click sul pulsante 'X' per cancellare tutti i tempi della sessione..</li>
</ul>
<h3>Abbreviazioni da Tastiera</h3>
<ul>
 <table class="table" style="display: inline-block;">
  <tr><th>key</th><td>funzione</td></tr>
  <tr><th>Alt + 1</th><td>Scramble di tipo Square-1.</td></tr>
  <tr><th>Alt + 2 ~ 7</th><td>Scramble di tipo 2x2x2~7x7x7.</td></tr>
  <tr><th>Alt + p/m/c/s</th><td>Scramble di tipo pyra/megaminx/clock/skewb.</td></tr>
  <tr><th>Alt + i</th><td>Inserire il tipo di scramble.</td></tr>
  <tr><th>Alt + d</th><td>Cancella tutti i tempi della sessione corrente.</td></tr>
  <tr><th>Alt + z</th><td>Cancella l'ultimo tempo.</td></tr>
  <tr><th>Alt + up/down</th><td>Vai alla sessione successiva/precedente.</td></tr>
  <tr><th>Alt + left/rightt</th><td>Mostra lo scramble precedente/successivo.</td></tr>
  <tr><th>Ctrl + 1/2/3</th><td>Imposta l'ultima rilevazione di tempo come OK/+2/DNF</td></tr>
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
<li><a class="click" href="http://cubingchina.com/">Cubing China, il website cinese ufficiale sullo speedcubing</a></li>
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
