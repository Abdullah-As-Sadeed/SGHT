<!DOCTYPE html>
<!-- By Abdullah As-Sadeed -->
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="UTF-8" />
  <base href="https://sght.service-ways.com/" />
  <title>Sadeed Gallery of Historic Technologies</title>
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <meta name="author" content="Abdullah As-Sadeed" />
  <link rel="manifest" href="SGHT.webmanifest" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="theme-color" content="rgb(66, 66, 66)" />
  <link rel="apple-touch-icon" href="SGHT_192.png" />
  <meta name="description" content="Presenting various historic technologies" />
  <meta name="keywords"
    content="Inventions, History, Historic, Technologies, Electronics, Electric, Telecommunication, Computer, Software, Science, Gallery, EEE, CSE, CEE, ECE, ETE, CTE, ICT, IT" />
  <style>
    <?php include_once "Include/Common.css";

    ?> ::selection {
      background-color: rgb(182, 222, 183);
    }

    ::-moz-selection {
      background-color: rgb(182, 222, 183);
    }

    #header {
      width: 100%;
      background-color: rgb(95, 95, 95);
      padding: 5px 0 20px 0;
      text-align: center;
      margin: 0 0 10px 0;
    }

    h1 {
      font-size: 35px;
      color: white;
      margin-bottom: 10px;
    }

    noscript {
      color: red;
    }

    a#sadeed {
      color: white;
      display: inline-block;
      animation: sadeed_in 0.4s;
      will-change: transform, opacity;
    }

    a {
      color: blue;
      text-decoration: none;
      transition: color 0.4s;
    }

    a:hover,
    a:focus {
      color: indigo;
    }

    @keyframes sadeed_in {
      from {
        transform: rotateY(90deg);
        opacity: 0;
      }

      to {
        transform: rotateY(0deg);
        opacity: 1;
      }
    }

    .item_container {
      width: 100%;
      text-align: center;
      margin: 0 0 70px 0;
    }

    .section_container {
      width: 100%;
      background-color: rgb(61, 140, 64);
      padding: 5px;
      text-align: center;
      color: white;
      position: -webkit-sticky;
      position: sticky;
      z-index: 1;
      top: 0;
    }

    h2 {
      display: inline-block;
      margin: 0;
      transition: transform 1.2s;
    }

    .description {
      width: 100%;
      background-color: white;
      padding: 5px 10px 5px 10px;
      text-align: left;
      line-height: 1.6;
      margin: 0 0 5px 0;
    }

    .item {
      border-radius: 5px;
      background-color: white;
      padding: 10px 10px 5px 10px;
      font-size: 14px;
      line-height: 1.6;
      color: rgb(32, 33, 34);
      margin: 5px;
      display: inline-block;
      vertical-align: middle;
    }

    .item img {
      max-height: 200px;
      max-width: 200px;
      border: 1px solid silver;
      display: block;
      margin-right: auto;
      margin-left: auto;
      margin-bottom: 10px;
      cursor: pointer;
    }

    .item_singles_container {
      width: 100%;
      padding: 0 0 5px 0;
      margin: 0 0 70px 0;
    }

    #more {
      margin: 0 0 5px 0;
    }

    .item_single {
      border-radius: 4px;
      box-shadow: 0.2em 0.2em 0.2em 0.2em rgba(0, 0, 0, 0.1);
      background-color: white;
      padding: 0 10px 5px 10px;
      line-height: 1.6;
      margin: 0 0 50px 0;
      display: inline-block;
      vertical-align: middle;
    }

    .section_container_single {
      border-bottom: 2px solid silver;
      padding: 2px 0 1px 0;
      color: rgb(95, 95, 95);
      font-size: 19px;
      font-weight: bold;
      margin: 0 0 5px 0;
    }

    h3 {
      display: inline-block;
      margin: 0;
      transition: transform 1.3s;
    }

    .item_single img {
      max-width: 200px;
      border: 1px solid silver;
      margin: 0 5px 0 0;
      cursor: pointer;
    }

    .important {
      color: indigo;
      font-weight: bold;
    }

    #footer {
      width: 100%;
      border-top: 3px solid silver;
      padding: 20px 10px 20px 10px;
    }

    form {
      text-align: center;
      border-bottom: 3px solid silver;
      padding: 0 0 20px 0;
      margin: 0 0 20px 0;
    }

    textarea {
      width: 300px;
      border: none;
      border-radius: 5px;
      padding: 10px;
      resize: vertical;
      margin: 0 0 10px 0;
    }

    #error {
      font-size: small;
      color: red;
      animation: blinking 1.2s infinite;
      will-change: opacity;
    }

    input[type="submit"] {
      width: 300px;
      border: none;
      border-radius: 5px;
      background: rgb(76, 175, 80);
      padding: 5px 10px 5px 10px;
      font-size: 17px;
      color: white;
      font-weight: bold;
      margin: 10px 0 0 0;
      transition: background 0.4s;
      cursor: pointer;
    }

    input[type="submit"]:hover,
    input[type="submit"]:focus {
      background: #3d8c40 radial-gradient(circle, transparent 1%, #3d8c40 1%) center/15000%;
    }

    input[type="submit"]:active {
      background-color: rgb(197, 229, 197);
      background-size: 100%;
      transition: background 0s;
    }

    #submission {
      text-align: center;
      color: green;
      font-weight: bold;
      margin: 0 0 20px 0;
      display: none;
      animation: blinking 1.2s infinite;
      will-change: opacity;
    }

    #visits {
      text-align: center;
      font-size: small;
    }

    #details {
      font-size: small;
      margin: 20px 0 20px 0;
    }

    #sadeed_2 {
      text-align: center;
    }

    #copyright_symbol {
      vertical-align: middle;
    }

    #sadeed_2 small {
      vertical-align: middle;
    }

    #floating_button {
      border-radius: 5px;
      background-color: rgb(0, 100, 255);
      padding: 5px 10px 5px 10px;
      font-size: 14px;
      color: white;
      font-weight: bold;
      position: fixed;
      z-index: 1;
      bottom: 20px;
      right: 10px;
      cursor: pointer;
      transition: background-color 0.4s;
      animation: menu_button_in 2.4s infinite;
    }

    #floating_button:hover,
    #floating_button:focus {
      background-color: rgb(0, 70, 255);
    }

    @keyframes menu_button_in {
      from {
        box-shadow: 0 0 0 0px rgb(197, 229, 197);
      }

      to {
        box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
      }
    }

    @media screen and (min-width: 641px) {
      @keyframes menu_button_in {
        from {
          box-shadow: 0 0 0 0px rgb(141, 204, 143);
        }

        to {
          box-shadow: 0 0 0 30px rgba(255, 255, 255, 0);
        }
      }
    }

    #scroll {
      height: 2px;
      width: 0%;
      background-color: blue;
      position: fixed;
      z-index: 1;
      bottom: 0px;
      left: 0px;
      will-change: width;
    }

    @media screen and (min-width: 641px) {
      #scroll {
        height: 4px;
      }
    }

    #overlap {
      height: 100%;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.95);
      text-align: center;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1;
      display: none;
    }

    .closer_container {
      width: 100%;
      text-align: right;
    }

    #overlap_closer {
      font-size: 35px;
      color: silver;
      font-weight: bold;
      margin: 0 40px 0 0;
      cursor: pointer;
      transition: color 0.4s;
    }

    #overlap_closer:hover,
    #overlap_closer:focus {
      color: grey;
    }

    #overlap img {
      max-height: 100vh;
      max-width: 100vw;
    }

    #bookmarks {
      box-shadow: 0.2em 0.1em 0.2em 0.2em rgba(0, 0, 0, 0.1);
      background-color: white;
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      z-index: 1;
      display: none;
      animation: bookmarks_in 0.4s;
      will-change: opacity;
      overflow-y: scroll;
      overflow-x: hidden;
      padding: 0 15px 50px 15px;
    }

    @keyframes bookmarks_in {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    span[onclick="close_bookmarks();"] {
      font-size: 24px;
      color: grey;
      font-weight: bold;
      cursor: pointer;
      transition: color 0.4s;
    }

    span[onclick="close_bookmarks();"]:hover,
    span[onclick="close_bookmarks();"]:focus {
      color: rgb(76, 175, 80);
    }

    .bookmark {
      margin: 15px 0 0 0;
    }

    .bookmark a {
      font-size: 14px;
      color: rgb(32, 33, 34);
      font-weight: bold;
      transition: color 0.4s;
    }

    .bookmark a:hover,
    .bookmark a:focus {
      color: rgb(76, 175, 80);
    }

    @keyframes blinking {
      50% {
        opacity: 0;
      }
    }

    #printing_alert {
      width: 100%;
      text-align: center;
      color: red;
      font-weight: bold;
      display: none;
      margin-top: 200px;
    }

    @media print {
      #container {
        display: none;
      }

      #printing_alert {
        display: block;
      }
    }
  </style>
</head>

<body lang="en-US">
  <div id="container">
    <div id="header">
      <h1>Sadeed Gallery of Historic Technologies</h1>
      <noscript>Your web browser is forbidding this website to run JavaScript. This
        website can not function fully without JavaScript!</noscript>
      <a href="https://sadeed.service-ways.com/" target="new" title="Abdullah As-Sadeed" id="sadeed">By Abdullah
        As-Sadeed</a>
    </div>
    <div class="item_container">
      <div class="section_container" id="z_3">
        <h2>Z3 Computer</h2>
      </div>
      <div class="description">
        It is the
        <b>1<sup>st</sup> programmable, automatic digital computer</b>. It was
        a <i>German</i> <b><i>electro-mechanical</i></b> universal
        Turing-complete computer which was designed by scientist
        <i>Konrad Zuse</i> and was completed in <i>Berlin, Germany</i> in
        1941.
        <br />
        <br />
        It weighted 2200 pounds and consumed 4 kW power. It contained 2600
        relays (1400 for memory). Its clock speed was 5.3 Hz. It was destroyed
        on 21 December, 1943 duing the <i>World War II</i>.
      </div>
      <div class="item">
        <img src="Gallery/69.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Reconstructed</b> by the designer's <i>Zuse KG</i> company<br />in
        1961
      </div>
      <div class="item">
        <img src="Gallery/113.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Reconstructed</b> by a son of the inventor,<br />scientist
        <i>Horst Zuse</i> in 2010
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="abc">
        <h2>Atanasoff-Berry Computer (ABC)</h2>
      </div>
      <div class="description">
        It is the <b>1<sup>st</sup> automatic electronic digital computer</b>.
        It was built by <i>Professor John Vincent Atanasoff</i> and
        <i>graduate student Clifford Berry</i> of
        <i>Lowa State University of Science and Technology, Ames, Lowa, USA</i>
        (then <i>Lowa State College of Agriculture and Mechanic Arts</i>) and
        was released in 1942. This computer was
        <b>neither programmable, nor Turing-complete</b> and was designed only
        to solve the <i>systems of linear equations</i>.
        <br />
        <br />
        It weighted 320 kG. Its used IBM 80-column punched cards as input
        devices and 300 vacuum tubes as CPU (Central Processing Unit). Its
        clock speed was 60 Hz. Its regenerative capacitive memory was of 3000
        bits which was made of a pair of 1600 capacitors-containing drums. It
        also contained 208 dual triode vacuum tubes, 31 thyratrons and
        approximately 1.6 km of wires.
      </div>
      <div class="item">
        <img src="Gallery/70.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Reconstructed</b> by scientist <i>John Gustafson</i><br />and his
        team in 1997
      </div>
      <div class="item">
        <img src="Gallery/114.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        A <b>reconstructed</b> Addition-Subtraction Module
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="eniac">
        <h2>Electronic Numerical Integrator And Calculator (ENIAC)</h2>
      </div>
      <div class="description">
        It is the
        <b>1<sup>st</sup> general purpose automatic electronic digital
          computer</b>. It was designed by scientist <i>John William Mauchly</i> and
        <i>John Adam Presper "Pres" Eckert Jr</i>. It started operations on 10
        December, 1945. It was used to calculate firing tables for
        <i>United States Army's Ballistic Research Laboratory (BRL), USA</i>.
        Its 1<sup>st</sup> programme was to calculate feasibility of
        thermonuclear weapons. It was formally dedicated at
        <i>University of Pennsylvania, USA</i> on 15 February, 1946.
        <br />
        <br />
        Its area was 167 m<sup>2</sup> and weighted 27 tons and and consumed
        150 kW power. It contained 20000 vacuum tubes, 70000 resistors, 7200
        crystal diodes, 1500 relays, 10000 capacitors and approximately
        5000000 hand-soldered joints. It was finally shut down in 1956.
      </div>
      <div class="item">
        <img src="Gallery/49.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <i>Cpl. Irwin Goldstein</i> is setting functional table switches<br />at
        <i>Moore School of Electrical Engineering</i>
      </div>
      <div class="item">
        <img src="Gallery/50.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Scientist <i>Glen Beck</i> and <i>Betty Snyder</i> are programming
        it<br />in <i>Building 328</i> at
        <i>United State Army's Ballistic Research Laboratory (BRL)</i>
      </div>
      <div class="item">
        <img src="Gallery/51.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        4 panels and one of 3 function tables
      </div>
      <div class="item">
        <img src="Gallery/52.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Bottom of 3 accumulators
      </div>
      <div class="item">
        <img src="Gallery/53.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        A section's back<br />which is containing vacuum tubes
      </div>
      <div class="item">
        <img src="Gallery/54.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        A functional table
      </div>
      <div class="item">
        <img src="Gallery/55.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        The ENIAC on a chip<br />using <b>1995's</b> IC (Integrated Circuit)
        technology
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="baby">
        <h2>Manchester Baby Computer</h2>
      </div>
      <div class="description">
        It is the
        <b>1<sup>st</sup> electronic digital stored-programme computer</b>. It
        is also the
        <b>1<sup>st</sup> machine which contained all essential elements of a
          modern computer</b>. It was also called <b>Small-Scale Experiment Machine (SSEM)</b>. It
        was developed by scientist <i>Frederic Calland Williams</i>,
        <i>Tom Kilburn</i> and <i>Geoff C. Tootill</i> at
        <i>University of Manchester, Manchester, UKE</i>. Its 1<sup>st</sup>
        programme was ran on 21 June, 1948.
        <br />
        <br />
        It weighted 1 ton and consumed 3.5 kW power. Its length and height was
        5.2 m and 2.24 m repectively. It contained 300 diodes, 250 pentodes
        and 550 vacuum tube valves. Its RAM (Random Access Memory) was of 32
        32-bit words (~ 1 kB). It used a CRT (Cathode Ray Tube) as output
        display.
      </div>
      <div class="item">
        <img src="Gallery/74.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Reconstructed</b> computer
      </div>
      <div class="item">
        <img src="Gallery/111.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Front view of the <b>reconstructed</b> computer
      </div>
      <div class="item">
        <img src="Gallery/112.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        The output CRT display
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="edsac">
        <h2>Electronic Delay Storage Automatic Calculator I (EDSAC I)</h2>
      </div>
      <div class="description">
        It is the
        <b>2<sup>nd</sup> electronic digital stored-programme computer for
          regular service</b>. It was built by scientist <i>Maurice Wilkes</i> and his team at
        <i>Department of Computer Science and Technology (then Mathematical
          Laboratory), University of Cambridge, UKE</i>. It started operations on 6 May, 1949. Its 1<sup>st</sup>
        programme
        was to calculate a table of square numbers and a list of prime
        numbers.
        <br />
        <br />
        It consumed 11 kW power. It used 5-hole punched tape as input device,
        derated vacuum tubes as CPU (Central Processing Unit) and teleprinter
        as display. Its memory was of 512 18-bit words which was made of
        mercury delay lines. It was finally shut down on 11 July, 1958.
      </div>
      <div class="item">
        <img src="Gallery/56.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        In June, 1948
      </div>
      <div class="item">
        <img src="Gallery/57.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Monitoring desk
      </div>
      <div class="item">
        <img src="Gallery/77.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        9 inch monitoring tube
      </div>
      <div class="item">
        <img src="Gallery/78.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <i>Maurice Wilkes</i> is inspecting the mercury delay lines<br />which
        would be used as the CPU
      </div>
      <div class="item">
        <img src="Gallery/58.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Reconstructed</b> in October 2018
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="seac">
        <h2>Standards Eastern/Electronic Automatic Computer (SEAC)</h2>
      </div>
      <div class="description">
        It is the
        <b>1<sup>st</sup> fully operational stored-programme electronic
          digital computer</b>. It was built by scientist <i>Samuel N. Alexander</i> and his team
        at <i>United States National Bureau of Standards (NBS), USA</i>. It
        was demonstrated in April, 1950 and was dedicated in June, 1950. This
        computer was initially called <i><b>NBS Interim Computer</b></i>.
        <br />
        <br />
        Its central machine weighted 3000 pounds. It contained 747 vacuum
        tubes (expanded to 1500), 10500 germanium diodes (expanded to 16000).
        Its clock rate was 1 MHz. Its memory was of 512 45-bit words which was
        made of 64 acoustic delay lines. It was finally shut down in 1964.
      </div>
      <div class="item">
        <img src="Gallery/59.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        In 1950
      </div>
      <div class="item">
        <img src="Gallery/60.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Scientist <i>Horace Joseph</i> and <i>George A. Moore</i> are using
        image scanner<br />to analyze metallurgical photos in 1960
      </div>
      <div class="item">
        <img src="Gallery/79.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Scientist <i>Ethel Marden</i> is using control console<br />in 1959
      </div>
      <div class="item">
        <img src="Gallery/61.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        The scanner device
      </div>
      <div class="item">
        <img src="Gallery/62.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Wiring
      </div>
      <div class="item">
        <img src="Gallery/80.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Its <b>1<sup>st</sup> scanned photograph</b>.
        <br />
        <small>The subject was a <i>son of Russell A. Kisch.</i></small>
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="univac">
        <h2>UNIVersal Automatic Computer I (UNIVAC I)</h2>
      </div>
      <div class="description">
        It is the
        <b>1<sup>st</sup> business purpose <i>American</i> electronic digital
          computer</b>. It was principally designed by the
        <a href="#eniac" title="Electronic Numerical Integrator And Calculator (ENIAC)">ENIAC</a>
        inventors. Designing was started by the inventors'
        <i>Eckert-Mauchly Computer Corporation (EMCC), USA</i> and was
        completed by <i>Remington Rand Corporation, USA</i>. It was released
        on 31 March, 1951 as the 1<sup>st</sup> unit was accepted by
        <i>United States Census Bureau, USA</i>. Total 46 units were sold. The
        5<sup>th</sup> unit was used by
        <i>Columbia Broadcasting System (CBS), USA</i> to predict the result
        of the 1952 Presidential Election of USA.
        <br />
        <br />
        It weighted 7.6 tons and consumed 125 kW. Its area was 35.5
        m<sup>2</sup>. It contained 5000 vacuum tubes. Its clock speed was
        2.25 MHz. It used Remington Standard electric typewriter as an input
        device and Tektronix Oscilloscope as an output device.
      </div>
      <div class="item">
        <img src="Gallery/115.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Operating console
      </div>
      <div class="item">
        <img src="Gallery/116.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Interior view
      </div>
      <div class="item">
        <img src="Gallery/117.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Recirculation chassis board
      </div>
      <div class="item">
        <img src="Gallery/118.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Mercury delay line
      </div>
      <div class="item">
        <img src="Gallery/119.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>7AK7</b> vacuum tubes
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="besk">
        <h2>Binary Electronic Sequence Calculator (BESK)</h2>
      </div>
      <div class="description">
        It is the <b>1<sup>st</sup> <i>Swedish</i> computer</b>. It was
        developed by <i>Swedish Board for Computing Machinery, Sweden</i> and
        was completed in 1953.
        <br />
        <br />
        It consumed 15 kVA. It contained 400 germanium diodes and 2400 vacuum
        tubes. Its electrostatic memory was of 512 40-bit words which was made
        of Williams tubes (later replaced by ferrite core memory). It was once
        used to create an animation of
        <i>a car driving down a planned highway from the driver's
          perpective</i>
        and that clip was one of the <b>earlist computer animations</b>. This
        computer was finally shut down in 1966.
      </div>
      <div class="item">
        <img src="Gallery/107.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Control panel
      </div>
      <div class="item">
        <img src="Gallery/108.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        The core memory<br />and the drum memory
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="phonograph">
        <h2>Phonoghaphs / Gramophones</h2>
      </div>
      <div class="description">
        Scientist <i>Thomas Alva Edison</i> invented phonograph / gramophone
        in 1877.
      </div>
      <div class="item">
        <img src="Gallery/101.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        The inventor with his <b>2<sup>nd</sup> phonograph</b><br />in
        Washington, USA in April, 1878
      </div>
      <div class="item">
        <img src="Gallery/102.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Edison Wax Cylinder Phonograph</b><br />from around 1899
      </div>
      <div class="item">
        <img src="Gallery/103.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Victor V Phonograph</b><br />from around 1907
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="lights">
        <h2>Light Bulbs</h2>
      </div>
      <div class="description">
        Scientist <i>Thomas Alva Edison</i> invented light bulbs. His 1<sup>st</sup>
        successful test was on <b>22 October, 1879</b> and that bulb lasted
        13.5 hours. His early light bulbs were made of carbon filaments and
        used DC (Direct Current) electricity.
      </div>
      <div class="item">
        <img src="Gallery/24.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Carbon-Filament Light Bulb</b><br />from the inventor's shop<br />at
        <i>Menlo Park</i>
      </div>
      <div class="item">
        <img src="Gallery/25.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Edison Carbon-Filament Light Bulbs</b><br />from early 1880s
      </div>
      <div class="item">
        <img src="Gallery/27.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Centennial Light</b> is the <b>longest-lasting light bulb</b>. This
        carbon-filament bulb is
        <span class="important">burning since 1901</span>. It is at
        <i>4550 East Avenue, Livermore, California, USA</i> and is cared for
        by
        <i>Centennial Light Bulb Committee, Livermore-Pleasanton Fire
          Department</i>. This model was invented by <i>Adolphe Chaillet</i> and was made by
        <i>Shelby Electric Company, Ohio, USA</i>.
      </div>
      <div class="item">
        <img src="Gallery/26.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>1902 Tantalum Filament Light Bulb</b> is the
        <b>1<sup>st</sup> light bulb having a metal filament</b>.
        <br />
        This one is from 1908.
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="telephones">
        <h2>Telephones</h2>
      </div>
      <div class="description">
        Scientist <i>Alexander Graham Bell</i> invented telephone.
      </div>
      <div class="item">
        <img src="Gallery/39.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Wooden Wall Telephone</b><br />with a Hand-Cranked Magneto
        Generator
      </div>
      <div class="item">
        <img src="Gallery/44.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        The inventor is placing the
        <b>1<sup>st</sup> <i>New York</i> to <i>Chicago</i> telephone call</b><br />in 1892
      </div>
      <div class="item">
        <img src="Gallery/42.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Ericsson DBH 1001</b> is the
        <b>1<sup>st</sup>combined telephone</b>.<br />It was from around 1931.
      </div>
      <div class="item">
        <img src="Gallery/41.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Telephone which was used by <i>American</i> soldiers<br />during the
        <i>World War II</i><br />at Minalin, Pampanga, Philippines
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="radios">
        <h2>Radio Receivers</h2>
      </div>
      <div class="description">
        <i>Bangladeshi</i> (then <i>British-Indian</i>) scientist
        <i>Jagadish Chandra Bose</i> invented radio system. He is called
        <span class="important">Father Of The Radio</span> worldwide.
        <br />
        <br />
        The radio receiver which works on the power of received signal only
        and does not need other power source is called <b>Crystal Radio</b>.
        As it uses crystal detector to receive signal, it is called so. It is
        also called <b>Batteryless Radio</b>.
        <br />
        <br />
        The radio receiver which uses transistor-based circuitry is called
        <b>Transistor-Radio</b>.
      </div>
      <div class="item">
        <img src="Gallery/9.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Marconi Type 103 Crystal Radio</b>
      </div>
      <div class="item">
        <img src="Gallery/10.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Marconi Type 106 Crystal Radio</b><br />which was used for
        transatlantic communication<br />in around 1917
      </div>
      <div class="item">
        <img src="Gallery/11.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <i>English</i> <b>Crystal Radio</b><br />from 1915
      </div>
      <div class="item">
        <img src="Gallery/12.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        German <b>Crystal Radio</b><br />from around 1924
      </div>
      <div class="item">
        <img src="Gallery/13.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <i>Swedish</i> <b>Crystal Radio</b>, from 1922,<br />which was
        manufactured by <i>Radiola, France</i>.
        <br />
        It used Cat's Whisker Detector.
      </div>
      <div class="item">
        <img src="Gallery/14.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Heliogen</b>, a <i>German</i> <b>Crystal Radio</b><br />from around
        1935,<br />which used Basket Weave type coil
      </div>
      <div class="item">
        <img src="Gallery/15.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Box</b>, a <i>Swedish</i> <b>Crystal Radio</b><br />from around
        1925
      </div>
      <div class="item">
        <img src="Gallery/16.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>SCR-54</b>, a <b>Crystal Radio</b><br />which was used by
        <i>United States Signal Corps, United States Army, USA</i><br />in the
        <i>World War I</i><br />for fire control in conjunction with airplanes
      </div>
      <div class="item">
        <img src="Gallery/17.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Polish Detefon</b>, a <b>Crystal Radio</b><br />from around
        1930-1939,<br />which used Cartridge type crystal detector
      </div>
      <div class="item">
        <img src="Gallery/18.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Foxhole Radio</b>, a <b>Crystal Radio</b><br />which was used by
        <i>Italian Front</i><br />in the <i>World War II</i>.
        <br />
        <br />
        It used
        <i>a pencil lead attached to a safety pin pressing a razor blade</i>
        as detector.
      </div>
      <div class="item">
        <img src="Gallery/19.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Crystal Radio</b> which was used as backup receiver<br />on a
        <i>Liberty Ship</i> in the <i>World War II</i>
      </div>
      <div class="item">
        <img src="Gallery/20.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Crystal Radio</b> which was <b>marketed to children</b><br />by
        <i>Arrow Electronics, USA</i> in 1970s-era
      </div>
      <div class="item">
        <img src="Gallery/75.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Regency TR-1</b> is the
        <b>1<sup>st</sup> commercially produced Transistor-Radio</b>.<br />It
        was manufactured by <i>Texas Instruments, Dallas, Texas, USA</i><br />and
        <i>Industrial Development Engineering Associations (IDEA)</i><br />in
        25 October, 1954.
        <br />
        <br />
        It used a 22.5 volt battery, a germanium diode and 4 NPN transistors.
      </div>
      <div class="item">
        <img src="Gallery/67.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Transistor-Radio</b>, from around 1958,<br />which was manufactured
        by <i>Emerson Radio Corporation, Hackensack, New Jersey, USA</i>
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="televisions">
        <h2>Televisions (TVs)</h2>
      </div>
      <div class="description">
        Scientist <i>John Logie Baird</i> invented both television camera and
        television set. Those early inventions were <b>electro-mechanical</b>.
      </div>
      <div class="item">
        <img src="Gallery/45.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        The inventor with his <b>televisor</b> transmitter equipment<br />and
        dummies <i>James</i> and <i>Stooky Bill</i><br />in 1925
      </div>
      <div class="item">
        <img src="Gallery/46.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        The inventor with his television apparatus<br />in around 1925
      </div>
      <div class="item">
        <img src="Gallery/3.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>1<sup>st</sup> known television picture</b>.<br />It was on 26
        January, 1926.
        <br />
        <small>The subject is inventor's business partner
          <i>Oliver Hutchinson</i>.</small>
      </div>
      <div class="item">
        <img src="Gallery/40.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        An early experimental television broadcast
      </div>
      <div class="item">
        <img src="Gallery/43.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>1<sup>st</sup> known colour-television picture</b>.
        <br />
        <small>The subject is airwoman <i>Miss Paddy Naismith</i>.</small>
        <br />
        This 2-colour picture was produced by the inventor's all-electronic
        television system<br />which used 2 projection Cathode Ray Tubes
        (CRTs).
      </div>
      <div class="item">
        <img src="Gallery/47.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>RCA 630-TS</b> is the
        <b>1<sup>st</sup> mass-produced television set</b>.<br />It was sold
        in 1946-1947.
      </div>
      <div class="item">
        <img src="Gallery/48.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Fernseher Tesla 4001A</b> is the
        <b>1<sup>st</sup> mass-produced <i>Czechoslovak</i> television set</b>.<br />It was from around 1953-1957.
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="mobiles">
        <h2>Mobile Phones</h2>
      </div>
      <div class="description">
        Prior to 1973, mobile telephony was limited to phones installed in
        vehicles. Scientist <i>Martin Cooper</i> invented
        <b>handheld cellular mobile phone</b> at
        <i>Motorola Incorporate, USA</i> in 1973. It was marketed in 1983 as
        <b>Motorola DynaTAC (Dynamic Adaptive Total Area Coverage) 8000X</b>.
      </div>
      <div class="item">
        <img src="Gallery/104.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Mobile Radio Telephone</b>
      </div>
      <div class="item">
        <img src="Gallery/105.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        The <b>Motorola DynaTAC 8000X</b> mobile phone.
        <br />
        <br />
        It tooked 10 hours to be charged<br />and served 30 minutes of talk
        time.<br />It used a LED (Light Emitting Diode) monitor<br />to
        display phone numbers.
      </div>
      <div class="item">
        <img src="Gallery/106.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <i>Martin Cooper</i> with his <b>Motorola DynaTAC 8000X</b> prototype.
        <br />
        <small>(Photographed in 2007)</small>
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="transformers">
        <h2>Transformers</h2>
      </div>
      <div class="description">
        It is a passive electromagnetic device that transforms AC (Alternating
        Current) electricity.
      </div>
      <div class="item">
        <img src="Gallery/32.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>1889 Spark-Excited Resonant Transformer</b>,<br />a predecessor to
        Tesla Coil,<br />was invented by scientist <i>Henry Rowland</i>
      </div>
      <div class="item">
        <img src="Gallery/33.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Earliest
        <b>Core Form and Shell Form <i>ZBD</i>-designed transformers</b><br />which were manufactured at <i>Ganz
          Factory</i> in 1885.
        <br />
        <br />
        The ZBD team consisted of scientist <i>Karoly <b>Z</b>ipernowsky</i>,
        <i>Otto <b>B</b>lathy</i> and <i>Miksa <b>D</b>eri</i>.
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="telegraphs">
        <h2>Telegraphs</h2>
      </div>
      <div class="description">
        It is a long-distance texual messenging system using symbolic codes.
      </div>
      <div class="item">
        <img src="Gallery/36.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Five-Needle, Six-Wire Telegraph</b> is the
        <b>1<sup>st</sup> telegraph system used in commercial service</b>.<br />It was invented by scientist
        <i>William Fothergill Cooke</i> and <i>Charles Wheatstone</i>.<br />It
        was from around 1837.
      </div>
      <div class="item">
        <img src="Gallery/34.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Morse Key</b>, a type of Telegraph Key<br />from around 1900,<br />was
        invented by scientist <i>Gustav Hasler</i>
      </div>
      <div class="item">
        <img src="Gallery/35.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>J-38</b>, a Straight Key, a type of Telegraph Key,<br />was used by
        <i>United States Military</i> during the <i>World War II</i>
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="galvanometers">
        <h2>Galvanometers</h2>
      </div>
      <div class="description">
        Galvanometer is an electromagnetic measurement device used to measure
        electricity.
      </div>
      <div class="item">
        <img src="Gallery/5.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Early <b>D'Arsonval Galvanometer</b>
      </div>
      <div class="item">
        <img src="Gallery/7.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Astatic Galvanometer</b><br />which was developed by scientist
        <i>Leopoldo Nobili</i><br />in 1825
      </div>
      <div class="item">
        <img src="Gallery/1.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>1850 Pouillet Tangent Galvanometer</b><br />which was invented by
        scientist <i>Claude Servais Mathias Pouillet</i>
      </div>
      <div class="item">
        <img src="Gallery/8.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        A <b>Tangent Galvanometer</b><br />from
        <i>Birmingham, UKE</i>,<br />was made in around 1950
      </div>
      <div class="item">
        <img src="Gallery/2.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Thomson Mirror Galvanometer</b><br />which was invented by
        scientist <i>William Thomson</i><br />in 1858
      </div>
      <div class="item">
        <img src="Gallery/4.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Mirror Galvanometer</b><br />which was invented by scientist
        <i>H.W. Sullivan</i>.<br />It was used at
        <i>Transatlantic Cable Station, Halifax, NS, Canada</i><br />in late
        19<sup>th</sup> or early 20<sup>th</sup> century.
      </div>
      <div class="item">
        <img src="Gallery/6.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Weston Galvanometer</b> (in portable case)<br />which was invented
        by scientist <i>Edward Weston</i>
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="microwave">
        <h2>Microwave (M/W) Communications</h2>
      </div>
      <div class="description">
        <i>Bangladeshi</i> (then <i>British-Indian</i>) scientist
        <i>Jagadish Chandra Bose</i>, the
        <span class="important">Father Of The Radio</span>, invented
        <b>the system of telecommunication which uses millimeter
          wavelengths</b>. It is called Microwave (M/W). He also invented
        <b>Crystal Radio Detector, Horn Antenna, Waveguide and other
          appartus</b>
        which were used at microwave frequencies. He used a Galena Crystal
        Detector and
        <a href="#galvanometers" title="Galvanometers">Galvanometer</a> to
        detect micrtowaves.
      </div>
      <div class="item">
        <img src="Gallery/22.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        The <b>Father Of The Radio</b><br />at
        <i>Royal Institution, London, UKE</i><br />in 1887
      </div>
      <div class="item">
        <img src="Gallery/21.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <i>Diagram</i> of Microwave <b>Receiver</b> and <b>Transmitter</b><br />from the inventor's 1897 paper
      </div>
      <div class="item">
        <img src="Gallery/23.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Inventor's <b>60 Hz Microwave Appartus</b><br />at
        <i>Bose Institute, Kolkata, India</i>.
        <br />
        The receiver is on the left.
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="transistors">
        <h2>Transistors</h2>
      </div>
      <div class="description">
        It is a semiconductor electronic device used to amplify or to switch
        electronic signals / electrical power.
        <br />
        <br />
        Scientist <i>Julius Edgar Lilienfeld</i> proposed the concept of
        <b>Field Effect Transistor (FET)</b> in 1925. Scientist
        <i>John Bardeen</i>, <i>William Shockley</i> and
        <i>Walter Brattain</i> invented <b>Point-Contact Transistor</b> at
        <i>Bell Labs</i> in 23 December, 1947. They also
        <b>Bipolar Junction Transistor (BJT)</b> in 1948.
      </div>
      <div class="item">
        <img src="Gallery/76.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        The <b>1<sup>st</sup> transistor</b>,<br />a Point-Contact Transistor
      </div>
      <div class="item">
        <img src="Gallery/29.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Replica</b> of the 1<sup>st</sup> transistor
      </div>
      <div class="item">
        <img src="Gallery/30.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        The inventors at the <i>Bell Labs</i><br />in 1948
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="loran">
        <h2>Long Range Navigation (LORAN)</h2>
      </div>
      <div class="description">
        It is a <b>hyperbolic radio navigation system</b> which was developed
        in <i>USA</i>. It was used on ships and aircrafts operating in the
        <i>Pacific Theater</i> during the <i>World War II</i>.
        <br />
        <br />
        It used Cathode Ray Tube (CRT) as display.
      </div>
      <div class="item">
        <img src="Gallery/37.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>AN/APN-4</b>,<br />an airborne LORAN receiver<br />from around
        1960s
      </div>
      <div class="item">
        <img src="Gallery/38.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>AN/APN-4</b> LORAN receiver on<br /><i>Royal Canadian Air Force Canso (PBY)</i>
        aircraft
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="curta">
        <h2>Curta Calculator</h2>
      </div>
      <div class="description">
        It was a <b>mechanical calculator</b> which was developed by scientist
        <i>Curt Herzstark</i>. It was also known as <b>Pepper Mill</b>,
        <b>Pepper Grinder</b> and
        <span class="important">Math Granade</span> due to its shape,
        operation and resemblance. It fitted in the palm of a hand. It was
        last produced in 1972.
        <br />
        <br />
        It had a crank which was used to drive it. Numbers were entered using
        slides. A single turn of the crank performs addition. Pulling the
        crank upwards slightly before turning performs subtraction.
        Multiplication, division and other functions require a series of crank
        and carriage-shifting operations.
      </div>
      <div class="item">
        <img src="Gallery/64.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Curta Type I</b>
        <br />
        <br />
        It had 8 digits for data entry,<br />a 6-digit revolution counter<br />and
        an 11-digit result counter.<br />It weighted 230 g.<br /><br />Total
        80000 units were sold.
      </div>
      <div class="item">
        <img src="Gallery/110.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Curta Type II</b>
        <br />
        <br />
        It was released in 1954.<br />It had 11 digits for data entry,<br />a
        8-digit revolution counter<br />and a 15-digit result counter.<br />It
        weighted 373 g.<br /><br />Total 60000 units were sold.
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="colossus">
        <h2>Colossus Computers</h2>
      </div>
      <div class="description">
        It was a <b>set</b> of <i>British</i> electronic digital programmable
        computers which were developed by scientist
        <i>Tommy Harold Flowers</i>, <i>Sidney Broadhurst</i>,
        <i>William Chandler</i> and <i>Allen William Mark (Doc) Coombs</i> and
        was manufactured by <i>Post Office Research Station, UKE</i> in around
        1943-1945 to help in the <i>cryptanalysis of the Lorenz cipher</i>. It
        was neither stored-programmed,
        <span class="important">nor had any memory or RAM</span>. It was
        programmed by plugs and switches.
        <br />
        <br />
        It consumed 8.5 kW power. It used thermionic vacuum tube valves,
        thyratrons, relays and stepping switches as CPU (Central Processing
        Unit). It used paper tape as input device. It used indicator lamp
        panel display and electric typewriter as output device. It was
        discontinued in 1960. Total 12 units were used.
      </div>
      <div class="item">
        <img src="Gallery/125.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Colossus Mark II Computer</b> is being operated<br />by
        <i>Women's Royal Naval Service (WREN), USA</i>
      </div>
      <div class="item">
        <img src="Gallery/68.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Colossus Computer No. 10</b>
      </div>
      <div class="item">
        <img src="Gallery/127.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Selection panel
      </div>
      <div class="item">
        <img src="Gallery/126.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        K2 switch panel containing switches<br />for specifying the algorithm
        (left)<br />and counters to be selected (right)
      </div>
      <div class="item">
        <img src="Gallery/124.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Set Total switch panel
      </div>
      <div class="item">
        <img src="Gallery/121.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        A stepping switch<br />from a Colossus Computer
      </div>
      <div class="item">
        <img src="Gallery/120.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b><i>Reconstructed</i> Colossus Mark II Computer</b><br />by
        scientist <i>Tony Sale</i> (right)
      </div>
      <div class="item">
        <img src="Gallery/122.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Front view of a <b>reconstructed</b> Colossus computer
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="bendix">
        <h2>Bendix G-15 Computer</h2>
      </div>
      <div class="description">
        It was an early <b>vacuum-tube computer</b> which was developed by
        scientist <i>Harry Douglas Huskey</i> and was manufactured by
        <i>Computer Division, Bendix Corporation, Los Angeles, California,
          USA</i>
        in 1956. It was a <b>serial-architecture machine</b> and also had
        Intercom Interpretive System.
        <br />
        <br />
        It weighted 438 kG. Its dimension was <i>1.5 m X 1 m X 1 m</i>. Its
        drum memory was of 2160 29-bit words. It contained 300 germanium
        diodes and 450 vacuum tubes. Its average memory access time was 14.5
        ms. It used photo-electric paper tape reader as input device and
        typewriter as primary output device. Its marketing was discontinued in
        1963. Total 400 units were sold.
      </div>
      <div class="item">
        <img src="Gallery/94.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        In 1956
      </div>
      <div class="item">
        <img src="Gallery/95.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Reconstructed</b> in 2015
      </div>
    </div>
    <div class="item_singles_container">
      <div class="section_container" id="more">
        <h2>More Calculators and Computers</h2>
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>Calculator</h3>
        </div>
        <img src="Gallery/63.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It was invented by scientist <i>Blaise Pascal</i> in 1642.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>Analytical Engine</h3>
        </div>
        <img src="Gallery/65.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It was a <b>mechanical</b> programmable computer, was invented by
        scientist <i>Chrales Babbage</i>.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>Difference Engine</h3>
        </div>
        <img src="Gallery/66.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It was a <b>mechanical</b> programmable computer, was invented by
        scientist <i>Charles Babbage</i>.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>Manchester Mark I Computer</h3>
        </div>
        <img src="Gallery/88.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It was also called <b>Machester Automatic Digital Machine (MADM)</b>.
        It was developed at
        <i>Victoria University of Machester, Manchester, UKE</i> and was
        released in April, 1949. But its final specification version was
        released in October, 1949 which had a 40-bit word length. It was the
        successor to the
        <a href="#baby" title="Manchester Baby Computer">Machester Baby Computer</a>. Its 1<sup>st</sup> realistic
        programme was ran on 16 or 17 June,
        1949 which was to search for mersenne prime numbers.
        <br />
        <br />
        Its most significant innovation was its
        <b>incorporation of Index Registers</b>. It consumed 25 kW power and
        contained 4050 vacuum tubes.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>
            Commonwealth Scientific and Industrial Research Automatic Computer
            (CSIRAC)
          </h3>
        </div>
        <img src="Gallery/85.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It is the <b>5<sup>th</sup> stored-programme computer</b>, the
        <span class="important">1<sup>st</sup> digital music player</span> and
        the <b>1<sup>st</sup> <i>Australian</i> digital computer</b>. It is
        also the <b>oldest survivng first-generation computer</b>. It was
        designed by scientist <i>Trevor Pearcey</i> and <i>Maston Beard</i>.
        Its 1<sup>st</sup> test programme ran in November, 1949. It was
        publicly demonostrated in 1951.
        <br />
        <br />
        Its memory was 768 20-bit words which was made of acoustic mercury
        delay lines. Its clock speed was 1000 Hz. It was finally shut down in
        1964.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>Standards Western Automatic Computer (SWAC)</h3>
        </div>
        <img src="Gallery/83.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It was designed by scientist <i>Harry Huskey</i> and was built by
        <i>United States National Bureau of Standards (NBS), USA</i> in 1950.
        <br />
        <br />
        It contained 2,300 vacuum tubes. Its memory was of 256 37-bit words
        which was made of William tubes.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>MAgnetic Drum Digital Differential Analyzer (MADDIDA)</h3>
        </div>
        <img src="Gallery/86.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It is the
        <b>1<sup>st</sup> computer representing bits using voltage level and
          whose entire logic was specified in boolean algebra</b>. It was built by scientist <i>Floyd Steele</i> at
        <i>Northrop Aircraft Corporation, USA</i> and was released in 1949.
        <br />
        <br />
        It was a guidance system for <i>Snak Missile</i>. It contained 44
        integrators which was made of a magnetic drum with 6 storage tracks.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>Electronic Discrete Variable Automatic Computer (EDVAC)</h3>
        </div>
        <img src="Gallery/71.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It was a <b>binary serial computer</b> which was proposed by the
        <a href="#eniac" title="Electronic Numerical Integrator And Calculator (ENIAC)">ENIAC</a>
        inventors and was built for
        <i>United States Army's Ballistic Research Laboratory (BRL), USA</i>.
        <br />
        <br />
        Its area was 45.5 m<sup>2</sup>. It weighted 17300 pounds and consumed
        56 kW power. It contained 12000 diodes, 6000 vacuum tubes. Its
        ultrasonic serial memory was of 1,000 34-bit words which was made of
        64 acoustic delay lines.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>Harwell Dekatron Computer</h3>
        </div>
        <img src="Gallery/90.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It was also called <b>Harwell Computer</b> and also
        <b>Wolverhampton Instrument for Teaching Computing from Harwell
          (WITCH)</b>. It was built and used by
        <i>Atomic Energy Research Establishment, Harwell, Oxfordshire, UKE</i>. It started operations in April, 1949 and
        was handed over in May,
        1952.
        <br />
        <br />
        It weighted 2.8 short tons. It used relays and vacuum tubes as CPU
        (Central Processing Unit). It used paper tape as storage and Dekatron
        registers as memory. It was finally shut down in 1973.
      </div>
      <div class="item_single" id="u_1">
        <div class="section_container_single">
          <h3>UNIVersal Automatic Computer (UNIVAC) 1101</h3>
        </div>
        <img src="Gallery/98.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Its another name was <b>ERA 1101</b>. It was designed and built by
        <i>Engineering Research Associates (ERA), USA</i> and was marketed by
        <i>Remington Rand Corporation, USA</i>. It was released in 1950 and
        was publicly announced in December, 1951.
        <br />
        <br />
        It weighted 7.6 tons. Its length and height was 12 m and 6.1 m
        respectively. It contained 2700 vacuum tubes. Its drum memory was of
        16384 24-bit words (~ 48 kB) and that had 200 read-write Heads. Its
        drum memory's diameter was 22 cm.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>Binary Arithmatic/Automatic Relay Calculator (BARK)</h3>
        </div>
        <img src="Gallery/109.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It was an early <b>electro-mechanical</b> computer which was developed
        by scientist <i>Conrad "Conny" Palm</i> and his team at
        <i>Swedish Board for Computing Machinery, Sweden</i>. Having completed
        in February 1950, it started operations on 28 April, 1950.
        <br />
        <br />
        It contained 8000 telephone keys, 175000 soldered points and 80 km of
        wire. Its programming was done by plugboard. It was finally shut down
        on 22 September, 1954.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>Ferranti Mark I Computer</h3>
        </div>
        <img src="Gallery/133.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It was also called <b>Manchester Electronic Computer</b> and
        <b>Manchester Ferranti</b>. It was manufactured by
        <i>Ferranti Ltd., UKE</i>. The 1<sup>st</sup> unit was delivered to
        <i>University of Manchester, Manchester, UKE</i> in February 1951 and
        was demonostrated publicly in July, 1951. It was able to play digital
        music. In November 1951, <i>Dr. Dietrich Gunthur Prinz</i> wrote a
        chess game for it which was one of the <b>earliest computer games</b>.
        <br />
        <br />
        It weighted 4.5 tons and contained 4500 vacuum tubes.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>Hollerith Electronic Computer I (HEC I)</h3>
        </div>
        <img src="Gallery/91.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It is the <b>1<sup>st</sup> mass-produced <i>British</i> computer</b>.
        It was developed by Professor <i>Andrew Booth</i> of
        <i>University of London, Bloomsbury, London, UKE</i> (then
        <i>Birkbeck College</i>) and was manufactured by
        <i>British Tabulating Machine Company (BTM), UKE</i>. It was released
        in 1951.
        <br />
        <br />
        Its dimensions was 1.5 m high by 3 m wide by 5.5 m deep. It contained
        approximately 1000 vacuum tubes. Its memory was of 2 kilobytes.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>IAS Machine</h3>
        </div>
        <img src="Gallery/89.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It was developed by scientist <i>John von Neumann</i> and was
        manufactured by
        <i>Institute for Advanced Study (IAS), Princeton, New Jersey, USA</i>.
        It was the <b>1<sup>st</sup> computer of that institute</b>. It was
        released in 10 June, 1952. It had no central clock regulation.
        <br />
        <br />
        It weighted 450 kg. It used 1700 vacuum tubes as CPU (Central
        Processing Unit). Its memory was of 1024 words (~ 5.1 kilobytes) which
        was made of Williams tubes. It was finally shut down in 15 June, 1958.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>Ordnance Discrete Variable Automatic Computer (ORDVAC)</h3>
        </div>
        <img src="Gallery/72.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It was built by <i>University of Illinois</i> for
        <i>United States Army's Ballistic Research Laboratory (BRL), USA</i>.
        <br />
        <br />
        It weighted 3000 pounds. Its memory was of 1024 40-bit words which was
        made of 40 CRTs (Cathode Ray Tubes) and 800 vacuum tubes. Its
        arithmatic unit used 1100 vacuum tubes and control unit used 500
        vacuum tubes.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>
            Argonne Version of the Institute's Digital Automatic Computer
            (AVIDAC)
          </h3>
        </div>
        <img src="Gallery/81.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It was built by <i>Physics Division</i> of
        <i>Argonne National Laboratory</i>. It started operations on 28
        January, 1953.
        <br />
        <br />
        It could not exchange programmes with other computers.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>IBM 702</h3>
        </div>
        <img src="Gallery/97.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It is the
        <b>1<sup>st</sup> mainframe computer which used magnetic tapes</b>. It
        was manufactured by
        <i>International Business Machines (IBM), USA</i> in 1 October, 1954.
        It was designed to process business data. Total 14 units were sold.
        <br />
        <br />
        It weighted 24645 pounds. It contained 10 magnetic drives. It used
        punch cards as input devices and printer as output device.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>UNIVersal Automatic Computer (UNIVAC) 1103</h3>
        </div>
        <img src="Gallery/100.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Its another name was <b>ERA 1103</b>. It was also designed by
        <i>Engineering Research Associates (ERA), USA</i> and was built by
        <i>Remingtion Rand Corporation, USA</i>. It was announced in February,
        1953 and was released in October, 1953. It was the successor to the
        <a title="ERA 1101 / UNIVAC 1101" href="#u_1">ERA 1101 / UNIVAC 1101</a>.
        <br />
        <br />
        It weighted 17.5 tons. Its RAM (Random Access Memory) was of 1024
        36-bit words which was made of 36 Williams tubes. Each Williams tube
        was 5 inch in diameter.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>Datatron 205 Computer</h3>
        </div>
        <img src="Gallery/82.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It was developed by
        <i>ElectroData Corporation, Pasadena, California, USA</i>. It was
        later markrted by <i>Burroughs</i> as <b>Burroughs 205 Computer</b>.
        It was still in use into the 1960s. It weighted 3175 pounds. It used
        magnetic drum memory.
        <br />
        <br />
        <small>Here, it is at <i>United States Geological Survey, USA</i>.</small>
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>IBM Naval Ordance Research Computer (NORC)</h3>
        </div>
        <img src="Gallery/87.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It was built by
        <i>International Business Machines (IBM), USA</i> under the direction
        of scientist <i>Wallace Eckert</i> for
        <i>United States Navy's Bureau of Ordance</i>. It started operations
        in December, 1954.
        <br />
        <br />
        Its memory was of 2000 words (expanded to 20000) which was made of 4
        sets of 66 electrostatic Williams tubes (later replaced by magnetic
        core memory). It contained 9800 vacuum tubes and 10000 crystal diodes.
        Its display was made of a CRT (Cathode Ray Tube) and a 35 mm film
        camera. It was finally shut down in 1968.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>UNIVersal Automatic Computer (UNIVAC) 1102</h3>
        </div>
        <img src="Gallery/99.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        Its another name was <b>ERA 1102</b>. It was also designed by
        <i>Engineering Research Associates (ERA), USA</i> for
        <i>United States Air Force</i>'s
        <i>Arnold Development Center, Tullahoma, Tennessee, USA</i>. It was
        connected to data channels of Wind Tunnels and Enzine Faculty of that
        center.
        <br />
        <br />
        It used 5 typewriters for printed output, 5 paper tape punches and 4
        pen plotters to produce graphs.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>Wisconsin Integrally Synchronized Computer (WISC)</h3>
        </div>
        <img src="Gallery/93.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It was designed by scientist <i>Gene Amdahl</i> and was built at
        <i>University of Wisconsin, Madison, USA</i>. It is the
        <b>1<sup>st</sup> digital computer in that state</b>.
        <br />
        <br />
        It weighted 910 kg. Its memory was of 1024 50-bit words ( ~ 6 kB)
        which was made of drum memory.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>
            IBM 305 RAMAC (Random Access Method of Accounting and Control)
            Computer
          </h3>
        </div>
        <img src="Gallery/96.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It is the
        <b>1<sup>st</sup> commercial computer which used HDD (Hard Disk Drive)
          as secondary storage</b>. It was developed by
        <i>International Business Machines (IBM), USA</i> and was released on
        14 September, 1959.
        <br />
        <br />
        It weighted over 1 ton. Its marketing was discontinued in 1961. More
        than 1000 units were sold.
        <br />
        <br />
        <small>Here, it is at <i>United States Army Red River Arsenal</i>, USA.<br />2
          disk drives, the console and the processing unit are seen.</small>
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>FUJIC</h3>
        </div>
        <img src="Gallery/92.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It is the
        <b>1<sup>st</sup> <i>Japanese</i> electronic digital computer</b>. It
        was built by scientist <i>Dr. Okazaki Bunji</i> and was completed in
        March, 1956. It was designed to calculate for Lens Design by
        <i>Fuji, Japan</i>.
        <br />
        <br />
        It contained approximately 1700 vacuum tubes. Its memory was of 255
        33-bit words which was made of an ultrasonic mercury delay line.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>Atlas Computer</h3>
        </div>
        <img src="Gallery/123.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It was one of the 1<sup>st</sup> <b>supercomputers</b> and the
        <b>1<sup>st</sup> machine with virtual memory using paging
          techniques</b>. This 2<sup>nd</sup> generation computer was used from 1962 to 1971.
        It was built by <i>UKE</i>'s <i>University of Manchester</i>,
        <i>Ferranti International plc</i> and
        <i>Plessy company plc</i> jointly.
        <br />
        <br />
        It used discrete germanium transistors instead of vacuum tubes.
        <br />
        <br />
        <small>Here, it is at the
          <i>University of Manchester, Manchester, UKE</i> in January,
          1963.</small>
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>Titan Computer (1963)</h3>
        </div>
        <img src="Gallery/134.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It was the <b>prototype</b> of the <b>Atlas 2 Computer</b>. It was
        developed by <i>Ferranti International plc, UKE</i> and
        <i>University of Cambridge Mathematical Laboratory, UKE</i> in 1963.
        <br />
        <br />
        Its main memory had 128 kB of 48-bit words. It had 2 HDDs (Hard Disk
        Drives) and several magnetic tape drives. It used discrete germanium
        transistors. It was finally shut down in October 1973.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>
            Ballistic Research Laboratories Electronic Scientific Computer I
            (BRLESC I)
          </h3>
        </div>
        <img src="Gallery/73.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It was bulit by
        <i>United States Army's Ballistic Research Laboratory (BRL), USA</i>
        with assistance from
        <i>United States National Bureau of Standards (NBS), USA</i>. It
        started operations in 1962.
        <br />
        <br />
        It contained 853
        <a href="#transistors" title="Transistors">transistors</a> and 1727
        vacuum tubes. Its memory was of 4096 72-bit words. It used punched
        cards, magnetic tape and a magnetic drum as input-output devices.
      </div>
      <div class="item_single">
        <div class="section_container_single">
          <h3>BESM-6</h3>
        </div>
        <img src="Gallery/84.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        It is the
        <b>1<sup>st</sup> second-generation <i>Soviet</i> computer based on
          <a href="#transistors" title="Transistors">transistors</a></b>. It was designed by scientist <i>Sergey
          Alexeyevich Lebedev</i> and
        was manufactured by
        <i>Moscow Plant of Calculating and Analysing Machines (SAM)</i>. It
        was released in 1968. Total 355 units were sold.
        <br />
        <br />
        Its area was 150-200 m<sup>2</sup> and consumed 30 kW power. Its CPU
        (Central Processing Unit) was of 48-bit @ 9MHz and memory was of 192
        kB. <b>D-68</b> was its OS (Operating System).
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="laptops">
        <h2>Laptop Computers</h2>
      </div>
      <div class="item">
        <img src="Gallery/128.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>R2E CCMC Portal</b> laptop computer<br />which was developed by
        scientist <i>Francois Gernelle</i><br />and was manufactured by
        <i>R2E</i><br />in September 1980.
        <br />
        <br />
        It weighted 12 kG.<br />Its CPU (Central Processing Unit) was
        <b>Intel 8085</b>.<br />Its RAM (Random Access Memory) was of 64
        kB.<br />Its OS (Operating System) was <b>Prologue</b>.
      </div>
      <div class="item">
        <img src="Gallery/129.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Osborne 1</b> laptop computer
      </div>
      <div class="item">
        <img src="Gallery/130.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Dulmont Magnum Kookaburra</b> laptop computer
      </div>
      <div class="item">
        <img src="Gallery/131.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Epson HX-20</b> laptop computer<br />which was released in 1981
      </div>
      <div class="item">
        <img src="Gallery/132.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Epson L3S</b> laptop computer<br />which used
        <b>MS-DOS</b> (Microsoft - Disk Operating System)
      </div>
    </div>
    <div class="item_container">
      <div class="section_container" id="others">
        <h2>Others</h2>
      </div>
      <div class="item">
        <img src="Gallery/28.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Voltaic Pile</b>, also <b>Pila di Volta</b>, is the
        <span class="important">1<sup>st</sup> electrical battery</span>.<br />It was invented by <i>Italian</i>
        scientist
        <i>Alessandro Giuseppe Antonio Anastasio Volta</i><br />in 1799.
      </div>
      <div class="item">
        <img src="Gallery/31.webp" alt="Couldn't load or view the picture!" loading="lazy" />
        <b>Induction Coil</b> which was used in schools<br />at
        <i>Bremerhaven, Germany</i><br />in around 1900
      </div>
    </div>
    <div id="footer">
      <form action="Reply.php" method="post">
        <textarea name="textarea" rows="7" cols="25" placeholder="Write your feedbacks here..."
          title="Write your feedbacks here" autocomplete="off"></textarea>
        <div id="error"></div>
        <input type="submit" value="Submit" title="Click to submit your messages / feedbacks" />
      </form>
      <div id="submission"></div>
      <div id="details">
        Without the prior permission of Abdullah As-Sadeed, no part of this website, including the source code, will be
        copied, captured, recorded, stored, printed, distributed, or edited in any way.
        <br />
        There are <span id="total"></span> gallery photographs in total, the majority of which are in the public domain.
      </div>
      <div id="sadeed_2">
        <span id="copyright_symbol">&copy; </span><small><a target="new" title="Abdullah As-Sadeed"
            href="https://sadeed.service-ways.com/">Abdullah As-Sadeed</a> | Jointly powered by <a target="new"
            title="TeleChirkut" href="https://telechirkut.xyz/">TeleChirkut</a> and <a target="new" title="Service-Ways"
            href="https://service-ways.com/">Service-Ways</a></small>
      </div>
    </div>
    <span id="floating_button" title="Click to open menu">Topics</span>
    <div id="scroll"></div>
    <div id="overlap">
      <div class="closer_container">
        <span title="Close" id="overlap_closer">&times;</span>
      </div>
      <img src="SGHT_512.png" alt="Larger image" />
    </div>
    <div id="bookmarks">
      <div class="closer_container">
        <span title="Close" onclick="close_bookmarks();">&times;</span>
      </div>
      <div class="bookmark">
        <a href="#z_3" title="Z3 Computer">Z3 Computer</a>
      </div>
      <div class="bookmark">
        <a href="#abc" title="Atanasoff-Berry Computer (ABC)">Atanasoff-Berry Computer</a>
      </div>
      <div class="bookmark">
        <a href="#eniac" title="Electronic Numerical Integrator And Calculator (ENIAC)">ENIAC</a>
      </div>
      <div class="bookmark">
        <a href="#baby" title="Machester Baby Computer">Machester Baby Computer</a>
      </div>
      <div class="bookmark">
        <a href="#edsac" title="Electronic Delay Storage Automatic Calculator I (EDSAC I)">EDSAC I</a>
      </div>
      <div class="bookmark">
        <a href="#seac" title="Standards Eastern/Electronic Automatic Computer (SEAC)">SEAC</a>
      </div>
      <div class="bookmark">
        <a href="#univac" title="UNIVersal Automatic Computer (UNIVAC I)">UNIVAC I</a>
      </div>
      <div class="bookmark">
        <a href="#besk" title="BESK">BESK</a>
      </div>
      <div class="bookmark">
        <a href="#phonograph" title="Phonograph / Gramophone">Phonograph</a>
      </div>
      <div class="bookmark">
        <a href="#lights" title="Light Bulbs">Light Bulbs</a>
      </div>
      <div class="bookmark">
        <a href="#telephones" title="Telephones">Telephones</a>
      </div>
      <div class="bookmark">
        <a href="#radios" title="Radios">Radio Receivers</a>
      </div>
      <div class="bookmark">
        <a href="#televisions" title="Televisions">Televisions</a>
      </div>
      <div class="bookmark">
        <a href="#mobiles" title="Mobile Phones">Mobile Phones</a>
      </div>
      <div class="bookmark">
        <a href="#transformers" title="Transformers">Transformers</a>
      </div>
      <div class="bookmark">
        <a href="#telegraphs" title="Telegraphs">Telegraphs</a>
      </div>
      <div class="bookmark">
        <a href="#galvanometers" title="Galvanometers">Galvanometers</a>
      </div>
      <div class="bookmark">
        <a href="#microwave" title="Microwave Communications">Microwave Communications</a>
      </div>
      <div class="bookmark">
        <a href="#transistors" title="Transistors">Transistors</a>
      </div>
      <div class="bookmark">
        <a href="#loran" title="LORAN">Long Range Nagivation</a>
      </div>
      <div class="bookmark">
        <a href="#curta" title="Curta Calculator">Curta Calculator</a>
      </div>
      <div class="bookmark">
        <a href="#colossus" title="Colossus Computers">Colossus Computers</a>
      </div>
      <div class="bookmark">
        <a href="#bendix" title="Bendix G-15 Computer">Bendix G-15 Computer</a>
      </div>
      <div class="bookmark">
        <a href="#more" title="More Calculators and Computers">More Calculators and Computers</a>
      </div>
      <div class="bookmark">
        <a href="#laptops" title="Laptop Computers">Laptop Computers</a>
      </div>
      <div class="bookmark">
        <a href="#others" title="Others">Others</a>
      </div>
    </div>
  </div>
  <div id="printing_alert">Printing any portion of SGHT is forbidden!</div>
  <script>
    /* By Abdullah As-Sadeed */
    "use strict";
    console.log(
      "%c%s",
      "background-color: red; padding: 20px 10px 20px 10px; font-size: 18px; color: white; font-weight: bold;",
      "DO NOT paste or write anything here!"
    );
    document.getElementById("total").innerHTML = document.images.length - 1;
    document.oncontextmenu = function (menu) {
      menu.preventDefault();
      alert("Context Menues are not allowed");
      return false;
    };
      document.onkeydown = function (keyboard) {
        if (
          keyboard.key == "F12" ||
          (keyboard.ctrlKey && keyboard.shiftKey && keyboard.key == "i") ||
          (keyboard.ctrlKey && keyboard.shiftKey && keyboard.key == "j") ||
          (keyboard.ctrlKey && keyboard.key == "u")
        ) {
          keyboard.preventDefault();

          alert("Developer tools are not allowed");

          return false;
        } else if (
          keyboard.Code == "PrintScreen" ||
          (keyboard.ctrlKey && keyboard.key == "p")
        ) {
          keyboard.preventDefault();

          alert("Printing is not allowed");

          return false;
        } else if (keyboard.ctrlKey && keyboard.key == "s") {
          keyboard.preventDefault();

          alert("Saving is not allowed");

          return false;
        }
      };
    window.onscroll = function () {
      document.getElementById("scroll").style.width =
        ((document.body.scrollTop || document.documentElement.scrollTop) /
          (document.documentElement.scrollHeight -
            document.documentElement.clientHeight)) *
        100 +
        "%";
    };
    function viewport(section) {
      var rect = section.getBoundingClientRect();
      return (
        (rect.top <= 0 && rect.bottom >= 0) ||
        (rect.bottom >=
          (window.innerHeight || document.documentElement.clientHeight) &&
          rect.top <=
          (window.innerHeight || document.documentElement.clientHeight)) ||
        (rect.top >= 0 &&
          rect.bottom <=
          (window.innerHeight || document.documentElement.clientHeight))
      );
    }
    function viewport_animation() {
      Array.prototype.forEach.call(
        document.querySelectorAll("h2"),
        function (section) {
          if (viewport(section)) {
            section.style.transform = "scale(1)";
          } else {
            section.style.transform = "scale(0.9)";
          }
        }
      );
      Array.prototype.forEach.call(
        document.querySelectorAll("h3"),
        function (section) {
          if (viewport(section)) {
            section.style.transform = "scale(1)";
          } else {
            section.style.transform = "scale(0.9)";
          }
        }
      );
      window.requestAnimationFrame(viewport_animation);
    }
    viewport_animation();
    var overlap = document.getElementById("overlap").style;
    Array.prototype.forEach.call(
      document.querySelectorAll("img"),
      function (item) {
        item.title = "Click to view larger";
        item.onclick = function () {
          overlap.display = "block";
          document.querySelector("#overlap img").src = item.src;
        };
      }
    );
    document.getElementById("overlap_closer").onclick = function () {
      overlap.display = "none";
    };
    var floating_button = document.getElementById("floating_button");
    var bookmarks = document.getElementById("bookmarks").style;
    floating_button.onclick = function () {
      bookmarks.display = "block";
      floating_button.style.display = "none";
    };
    function close_bookmarks() {
      bookmarks.display = "none";
      floating_button.style.display = "block";
    }
    Array.prototype.forEach.call(
      document.querySelectorAll("#bookmarks a"),
      function (bookmarkings) {
        bookmarkings.onclick = function () {
          close_bookmarks();
        };
      }
    );
    var form = document.getElementsByTagName("form")[0];
    form.onsubmit = function (submission) {
      submission.preventDefault();
      var error = document.getElementById("error");
      var submission = document.getElementById("submission");
      if (form.textarea.value === "") {
        error.innerHTML = "Write your message / feedbacks!";
      } else {
        error.innerHTML = "";
        form.style.display = "none";
        submission.style.display = "block";
        submission.innerHTML = "Submitting...";
        let data = new FormData(form);
        let xhr = new XMLHttpRequest();
        xhr.open(form.method, form.action);
        xhr.send(data);
        xhr.onload = function () {
          submission.innerHTML = "Thanks";
        };
      }
    };
    if ("serviceWorker" in navigator) {
      navigator.serviceWorker.register("SGHT.js");
    }
  </script>
</body>

</html>
