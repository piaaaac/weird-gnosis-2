"use strict";

var p5Sketch = new p5(function (p) {

  let font1, font2, font3, font4, font5;
  let fontSize;
  let letters = {};
  let w, ww;

  var wordTitle, singleLetter;

  p.preload = function () {

    var f1 = "fonts/Pachinko/Pachinko-Regular-Mono.otf_/Pachinko-Regular-Mono.otf";
    var f2 = "fonts/Victormoscoso-0dDd.otf";
    var f3 = "fonts/Bellbottomlaser-GKwg.ttf";
    var f4 = "fonts/SuisseIntlMono/SuisseIntlMono-Regular.otf";
    var f5 = "fonts/moby/Moby-Regular.otf";

    font1 = p.loadFont(f1, 
      () => {console.log("loadFont(): f1 loaded")},
      () => {console.log("loadFont(): f1 error")},
    );
    font2 = p.loadFont(f2, 
      () => {console.log("loadFont(): f2 loaded")},
      () => {console.log("loadFont(): f2 error")},
    );
    font3 = p.loadFont(f3, 
      () => {console.log("loadFont(): f3 loaded")},
      () => {console.log("loadFont(): f3 error")},
    );
    font4 = p.loadFont(f4, 
      () => {console.log("loadFont(): f4 loaded")},
      () => {console.log("loadFont(): f4 error")},
    );
    font5 = p.loadFont(f5, 
      () => {console.log("loadFont(): f5 loaded")},
      () => {console.log("loadFont(): f5 error")},
    );
  }

  p.setup = function () {
    var canvas = p.createCanvas(p.windowWidth, p.windowHeight);
    canvas.parent("p5-sketch");

    p.background(0, 0,0);
    p.background(0, 13,13);

    // p.textFont(font1);
    // p.textSize(fontSize);
    // stroke(255);
    // p.noFill();
    // p.stroke(0);
    // p.fill(0,0,0);
    // p.strokeWeight(0.1);
    p.noFill();
    p.stroke(0, 255, 147);
    p.strokeWeight(0.5);

/*


    // --- PATCHINKO MONO REGULAR -------------------------------------------------------
    fontSize = 200;
    letters["-1"] = font1.textToPoints("·", 0, 0, fontSize, {sampleFactor: 2.021});
    letters["01"] = font1.textToPoints("0", 0, 0, fontSize, {sampleFactor: 0.2285});
    letters["11"] = font1.textToPoints("1", 0, 0, fontSize, {sampleFactor: 0.306});
    letters["21"] = font1.textToPoints("2", 0, 0, fontSize, {sampleFactor: 0.241});
    letters["31"] = font1.textToPoints("3", 0, 0, fontSize, {sampleFactor: 0.243});
    letters["41"] = font1.textToPoints("4", 0, 0, fontSize, {sampleFactor: 0.264});
    letters["51"] = font1.textToPoints("5", 0, 0, fontSize, {sampleFactor: 0.233});
    letters["61"] = font1.textToPoints("6", 0, 0, fontSize, {sampleFactor: 0.2105});
    letters["71"] = font1.textToPoints("7", 0, 0, fontSize, {sampleFactor: 0.349});
    letters["81"] = font1.textToPoints("8", 0, 0, fontSize, {sampleFactor: 0.2005});
    letters["91"] = font1.textToPoints("9", 0, 0, fontSize, {sampleFactor: 0.2129});
    letters["A1"] = font1.textToPoints("A", 0, 0, fontSize, {sampleFactor: 0.2513});
    letters["B1"] = font1.textToPoints("B", 0, 0, fontSize, {sampleFactor: 0.1952});
    letters["C1"] = font1.textToPoints("C", 0, 0, fontSize, {sampleFactor: 0.255});
    letters["D1"] = font1.textToPoints("D", 0, 0, fontSize, {sampleFactor: 0.220});
    letters["E1"] = font1.textToPoints("E", 0, 0, fontSize, {sampleFactor: 0.231});
    letters["F1"] = font1.textToPoints("F", 0, 0, fontSize, {sampleFactor: 0.290});
    letters["G1"] = font1.textToPoints("G", 0, 0, fontSize, {sampleFactor: 0.203});
    letters["H1"] = font1.textToPoints("H", 0, 0, fontSize, {sampleFactor: 0.233});
    letters["I1"] = font1.textToPoints("I", 0, 0, fontSize, {sampleFactor: 0.296});
    letters["J1"] = font1.textToPoints("J", 0, 0, fontSize, {sampleFactor: 0.323});
    letters["K1"] = font1.textToPoints("K", 0, 0, fontSize, {sampleFactor: 0.240});
    letters["L1"] = font1.textToPoints("L", 0, 0, fontSize, {sampleFactor: 0.379});
    letters["M1"] = font1.textToPoints("M", 0, 0, fontSize, {sampleFactor: 0.169});
    letters["N1"] = font1.textToPoints("N", 0, 0, fontSize, {sampleFactor: 0.207});
    letters["O1"] = font1.textToPoints("O", 0, 0, fontSize, {sampleFactor: 0.229});
    letters["P1"] = font1.textToPoints("P", 0, 0, fontSize, {sampleFactor: 0.263});
    letters["Q1"] = font1.textToPoints("Q", 0, 0, fontSize, {sampleFactor: 0.1985});
    letters["R1"] = font1.textToPoints("R", 0, 0, fontSize, {sampleFactor: 0.213});
    letters["S1"] = font1.textToPoints("S", 0, 0, fontSize, {sampleFactor: 0.234});
    letters["T1"] = font1.textToPoints("T", 0, 0, fontSize, {sampleFactor: 0.345});
    letters["U1"] = font1.textToPoints("U", 0, 0, fontSize, {sampleFactor: 0.253});
    letters["V1"] = font1.textToPoints("V", 0, 0, fontSize, {sampleFactor: 0.277});
    letters["W1"] = font1.textToPoints("W", 0, 0, fontSize, {sampleFactor: 0.159});
    letters["X1"] = font1.textToPoints("X", 0, 0, fontSize, {sampleFactor: 0.254});
    letters["Y1"] = font1.textToPoints("Y", 0, 0, fontSize, {sampleFactor: 0.330});
    letters["Z1"] = font1.textToPoints("Z", 0, 0, fontSize, {sampleFactor: 0.257});
    // ---------------------------------------------------------------------------

*/

    // --- Bellbottomlaser-GKwg.ttf ----------------------------------------------
    // fontSize = 200;
    // letters["D3"] = font3.textToPoints("D", 0, 0, fontSize, {sampleFactor: 0.273});
    // letters["E3"] = font3.textToPoints("E", 0, 0, fontSize, {sampleFactor: 0.266});
    // letters["G3"] = font3.textToPoints("G", 0, 0, fontSize, {sampleFactor: 0.250});
    // letters["I3"] = font3.textToPoints("I", 0, 0, fontSize, {sampleFactor: 0.355});
    // letters["N3"] = font3.textToPoints("N", 0, 0, fontSize, {sampleFactor: 0.170});
    // letters["O3"] = font3.textToPoints("O", 0, 0, fontSize, {sampleFactor: 0.282});
    // letters["R3"] = font3.textToPoints("R", 0, 0, fontSize, {sampleFactor: 0.205});
    // letters["S3"] = font3.textToPoints("S", 0, 0, fontSize, {sampleFactor: 0.273});
    // letters["W3"] = font3.textToPoints("W", 0, 0, fontSize, {sampleFactor: 0.178});
    // ---------------------------------------------------------------------------
    

    // --- SuisseIntlMono-Regular.otf --------------------------------------------
    fontSize = 200;
    letters["D4"] = font4.textToPoints("D", 0, 0, fontSize, {sampleFactor: 0.203});
    letters["E4"] = font4.textToPoints("E", 0, 0, fontSize, {sampleFactor: 0.206});
    letters["G4"] = font4.textToPoints("G", 0, 0, fontSize, {sampleFactor: 0.182});
    letters["I4"] = font4.textToPoints("I", 0, 0, fontSize, {sampleFactor: 0.241});
    letters["N4"] = font4.textToPoints("N", 0, 0, fontSize, {sampleFactor: 0.167});
    letters["O4"] = font4.textToPoints("O", 0, 0, fontSize, {sampleFactor: 0.208});
    letters["R4"] = font4.textToPoints("R", 0, 0, fontSize, {sampleFactor: 0.196});
    letters["S4"] = font4.textToPoints("S", 0, 0, fontSize, {sampleFactor: 0.203});
    letters["W4"] = font4.textToPoints("W", 0, 0, fontSize, {sampleFactor: 0.159});
    

    letters["*4"] = font4.textToPoints("*", 0, 0, fontSize, {sampleFactor: 0.493})
    letters["‡4"] = font4.textToPoints("‡", 0, 0, fontSize, {sampleFactor: 0.229})
    letters["Æ4"] = font4.textToPoints("Æ", 0, 0, fontSize, {sampleFactor: 0.182})
    letters["æ4"] = font4.textToPoints("æ", 0, 0, fontSize, {sampleFactor: 0.166})
    letters["~4"] = font4.textToPoints("~", 0, 0, fontSize, {sampleFactor: 0.558})
    letters["&4"] = font4.textToPoints("&", 0, 0, fontSize, {sampleFactor: 0.172})
    letters["14"] = font4.textToPoints("1", 0, 0, fontSize, {sampleFactor: 0.285})
    letters["24"] = font4.textToPoints("2", 0, 0, fontSize, {sampleFactor: 0.215})
    letters["34"] = font4.textToPoints("3", 0, 0, fontSize, {sampleFactor: 0.207})
    letters["44"] = font4.textToPoints("4", 0, 0, fontSize, {sampleFactor: 0.225})
    letters["54"] = font4.textToPoints("5", 0, 0, fontSize, {sampleFactor: 0.195})
    letters["64"] = font4.textToPoints("6", 0, 0, fontSize, {sampleFactor: 0.187})
    letters["74"] = font4.textToPoints("7", 0, 0, fontSize, {sampleFactor: 0.282})
    letters["84"] = font4.textToPoints("8", 0, 0, fontSize, {sampleFactor: 0.182})
    letters["94"] = font4.textToPoints("9", 0, 0, fontSize, {sampleFactor: 0.187})
    letters["04"] = font4.textToPoints("0", 0, 0, fontSize, {sampleFactor: 0.1803})
    letters["×4"] = font4.textToPoints("×", 0, 0, fontSize, {sampleFactor: 0.329})
    letters["⁄4"] = font4.textToPoints("⁄", 0, 0, fontSize, {sampleFactor: 0.390})
    letters["†4"] = font4.textToPoints("†", 0, 0, fontSize, {sampleFactor: 0.306})
    letters["@4"] = font4.textToPoints("@", 0, 0, fontSize, {sampleFactor: 0.125})
    letters["{4"] = font4.textToPoints("{", 0, 0, fontSize, {sampleFactor: 0.308})
    letters["<4"] = font4.textToPoints("<", 0, 0, fontSize, {sampleFactor: 0.331})
    letters["]4"] = font4.textToPoints("]", 0, 0, fontSize, {sampleFactor: 0.296})
    letters["+4"] = font4.textToPoints("+", 0, 0, fontSize, {sampleFactor: 0.346})

    // ---------------------------------------------------------------------------

    // --- Victormoscoso-0dDd.otf ------------------------------------------------
    // fontSize = 200;
    // letters["-2"] = font2.textToPoints("·", 0, 0, fontSize, {sampleFactor: 1.133});
    // letters["02"] = font2.textToPoints("0", 0, 0, fontSize, {sampleFactor: 0.214});
    // letters["12"] = font2.textToPoints("1", 0, 0, fontSize, {sampleFactor: 0.342});
    // letters["22"] = font2.textToPoints("2", 0, 0, fontSize, {sampleFactor: 0.238});
    // letters["32"] = font2.textToPoints("3", 0, 0, fontSize, {sampleFactor: 0.220});
    // letters["42"] = font2.textToPoints("4", 0, 0, fontSize, {sampleFactor: 0.214});
    // letters["52"] = font2.textToPoints("5", 0, 0, fontSize, {sampleFactor: 0.200});
    // letters["62"] = font2.textToPoints("6", 0, 0, fontSize, {sampleFactor: 0.1953});
    // letters["72"] = font2.textToPoints("7", 0, 0, fontSize, {sampleFactor: 0.2775});
    // letters["82"] = font2.textToPoints("8", 0, 0, fontSize, {sampleFactor: 0.196});
    // letters["92"] = font2.textToPoints("9", 0, 0, fontSize, {sampleFactor: 0.201});
    // letters["D2"] = font2.textToPoints("D", 0, 0, fontSize, {sampleFactor: 0.183});
    // letters["E2"] = font2.textToPoints("E", 0, 0, fontSize, {sampleFactor: 0.194});
    // letters["G2"] = font2.textToPoints("G", 0, 0, fontSize, {sampleFactor: 0.194});
    // letters["I2"] = font2.textToPoints("I", 0, 0, fontSize, {sampleFactor: 0.339});
    // letters["N2"] = font2.textToPoints("N", 0, 0, fontSize, {sampleFactor: 0.143});
    // letters["O2"] = font2.textToPoints("O", 0, 0, fontSize, {sampleFactor: 0.209});
    // letters["R2"] = font2.textToPoints("R", 0, 0, fontSize, {sampleFactor: 0.1525});
    // letters["S2"] = font2.textToPoints("S", 0, 0, fontSize, {sampleFactor: 0.223});
    // letters["W2"] = font2.textToPoints("W", 0, 0, fontSize, {sampleFactor: 0.1205});
    // ---------------------------------------------------------------------------

    // --- Moby-Regular.otf ------------------------------------------------------
    // fontSize = 200;
    // letters["D5"] = font5.textToPoints("D", 0, 0, fontSize, {sampleFactor: 0.199});
    // letters["E5"] = font5.textToPoints("E", 0, 0, fontSize, {sampleFactor: 0.186});
    // letters["G5"] = font5.textToPoints("G", 0, 0, fontSize, {sampleFactor: 0.203});
    // letters["I5"] = font5.textToPoints("I", 0, 0, fontSize, {sampleFactor: 0.209});
    // letters["N5"] = font5.textToPoints("N", 0, 0, fontSize, {sampleFactor: 0.191});
    // letters["O5"] = font5.textToPoints("O", 0, 0, fontSize, {sampleFactor: 0.2025});
    // letters["R5"] = font5.textToPoints("R", 0, 0, fontSize, {sampleFactor: 0.189});
    // letters["S5"] = font5.textToPoints("S", 0, 0, fontSize, {sampleFactor: 0.173});
    // letters["W5"] = font5.textToPoints("W", 0, 0, fontSize, {sampleFactor: 0.192});
    // ---------------------------------------------------------------------------



    Object.keys(letters).forEach(k => {
      console.log(k, letters[k].length);
    });

    // V.A
    // wordTitle = {
    //   setupLetters: [
    //     {"letter": "W1", "left": p.width/12*0, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "E1", "left": p.width/12*1, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "I1", "left": p.width/12*2, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "R1", "left": p.width/12*3, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "D1", "left": p.width/12*4, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     // {"letter": "-1", "left": p.width/12*5, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "G1", "left": p.width/12*6, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "N1", "left": p.width/12*7, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "O1", "left": p.width/12*8, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "S1", "left": p.width/12*9, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "I1", "left": p.width/12*10, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "S1", "left": p.width/12*11, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //   ],
    //   words: [
    //     ["W2","E2","I2","R2","D2",/*"-2",*/"G2","N2","O2","S2","I2","S2"],
    //     ["W3","E3","I3","R3","D3",/*"-3",*/"G3","N3","O3","S3","I3","S3"],
    //     ["W1","E1","I1","R1","D1",/*"-1",*/"G1","N1","O1","S1","I1","S1"],
    //   ],
    // };

    // // V.B
    // wordTitle = {
    //   setupLetters: [
    //     {"letter": "W3", "left": p.width/12*0, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "E3", "left": p.width/12*1, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "I3", "left": p.width/12*2, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "R3", "left": p.width/12*3, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "D3", "left": p.width/12*4, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "G3", "left": p.width/12*5, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "N3", "left": p.width/12*6, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "O3", "left": p.width/12*7, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "S3", "left": p.width/12*8, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "I3", "left": p.width/12*9, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //     {"letter": "S3", "left": p.width/12*10, "top": p.height/2+p.width/12/2, "size": p.width/12},
    //   ],
    //   words: [
    //     ["E3","I3","R3","D3","G3","N3","O3","S3","I3","S3","W3"],
    //     ["I3","R3","D3","G3","N3","O3","S3","I3","S3","W3","E3"],
    //     ["R3","D3","G3","N3","O3","S3","I3","S3","W3","E3","I3"],
    //     ["D3","G3","N3","O3","S3","I3","S3","W3","E3","I3","R3"],
    //     ["G3","N3","O3","S3","I3","S3","W3","E3","I3","R3","D3"],
    //     ["N3","O3","S3","I3","S3","W3","E3","I3","R3","D3","G3"],
    //     ["O3","S3","I3","S3","W3","E3","I3","R3","D3","G3","N3"],
    //     ["S3","I3","S3","W3","E3","I3","R3","D3","G3","N3","O3"],
    //     ["I3","S3","W3","E3","I3","R3","D3","G3","N3","O3","S3"],
    //     ["S3","W3","E3","I3","R3","D3","G3","N3","O3","S3","I3"],
    //     ["W3","E3","I3","R3","D3","G3","N3","O3","S3","I3","S3"],
    //   ],
    // };

    // V.C
    wordTitle = {
      setupLetters: [
        {"letter": "W4", "left": 100+p.width/7*0, "top": p.height/2+p.width/7/2, "size": p.width/7},
        {"letter": "E4", "left": 100+p.width/7*1, "top": p.height/2+p.width/7/2, "size": p.width/7},
        {"letter": "I4", "left": 100+p.width/7*2, "top": p.height/2+p.width/7/2, "size": p.width/7},
        {"letter": "R4", "left": 100+p.width/7*3, "top": p.height/2+p.width/7/2, "size": p.width/7},
        {"letter": "D4", "left": 100+p.width/7*4, "top": p.height/2+p.width/7/2, "size": p.width/7},
        {"letter": "D4", "left": 100+p.width/7*5, "top": p.height/2+p.width/7/2, "size": p.width/7},
      ],
      words: [

        ["*4", "‡4", "Æ4", "æ4", "~4", "&4"],
        ["14", "24", "34", "44", "54", "64"],
        ["74", "84", "94", "04", "×4", "⁄4"],
        ["†4", "@4", "{4", "<4", "]4", "+4"],
        
        ["G4","N4","O4","S4","I4","S4"],
        ["W4","W4","E4","I4","R4","D4"],
        ["G4","N4","O4","S4","I4","S4"],
        ["W4","E4","E4","I4","R4","D4"],
        ["G4","N4","O4","S4","I4","S4"],
        ["W4","E4","I4","I4","R4","D4"],
        ["G4","N4","O4","S4","I4","S4"],
        ["W4","E4","I4","R4","R4","D4"],
      ],
    };

    // V.C - Moby-Regular.otf
    // wordTitle = {
    //   setupLetters: [
    //     {"letter": "W5", "left": 100+p.width/8*0, "top": p.height/2+p.width/8/2, "size": p.width/10},
    //     {"letter": "E5", "left": 100+p.width/8*1, "top": p.height/2+p.width/8/2, "size": p.width/10},
    //     {"letter": "I5", "left": 100+p.width/8*2, "top": p.height/2+p.width/8/2, "size": p.width/10},
    //     {"letter": "R5", "left": 100+p.width/8*3, "top": p.height/2+p.width/8/2, "size": p.width/10},
    //     {"letter": "D5", "left": 100+p.width/8*4, "top": p.height/2+p.width/8/2, "size": p.width/10},
    //     {"letter": "D5", "left": 100+p.width/8*5, "top": p.height/2+p.width/8/2, "size": p.width/10},
    //   ],
    //   words: [
    //     ["G5","N5","O5","S5","I5","S5"],
    //     ["W5","W5","E5","I5","R5","D5"],
    //     ["G5","N5","O5","S5","I5","S5"],
    //     ["W5","E5","E5","I5","R5","D5"],
    //     ["G5","N5","O5","S5","I5","S5"],
    //     ["W5","E5","I5","I5","R5","D5"],
    //     ["G5","N5","O5","S5","I5","S5"],
    //     ["W5","E5","I5","R5","R5","D5"],
    //   ],
    // };

    // singleLetter = {
    //   setupLetters: [
    //     {"letter": "E", "left": p.width*0.66 - p.height*0.68/2, "top": p.height*0.44 + p.height*0.68/2, "size": p.height*0.508},
    //   ],
    //   words: [
    //     // ["-"],["Q"],["E"],["6"],["T"],["9"],["C"],["P"],["5"],["O"],["S"],["8"],["0"],["2"],["U"],["3"],["4"],["R"],["7"],["F"],["G"],["I"],["1"],["J"],["K"],["D"],["L"],["M"],["A"],["N"],["V"],["W"],["X"],["Y"],["H"],["Z"],["B"],
    //     // ["B"],["R"],["E"],["W"],["I"],["N"],["G"],["F"],["U"],["N"],["K"],["I"],["N"],["M"],["Y"],["S"],["O"],["U"],["L"],["K"],["I"],["T"],["C"],["H"],["E"],["N"],
    //     ["M"], ["B"], ["R"], ["A"], ["C"], ["E"], ["C"], ["O"], ["M"], ["P"], ["L"], ["E"], ["X"], ["I"], ["T"], ["Y"], ["E"], 
    //   ],
    // };

    // ------------------------
    // ww = singleLetter;
    ww = wordTitle;
    // ------------------------

    w = new MorphWord(ww.setupLetters, ww.words);
    w.setup();
    w.morphAll(); 
  }

  p.draw = function () {
    // background(200);
    // clear();
    w.update();
    w.display();
  }

  // function randomLetterIndex () {
  //   return Object.keys(letters)[Math.floor(Math.random() * Object.keys(letters).length)];
  // }

  // p.getWord = function (name) {
  //   var words = {
  //     wordHome: {
  //       setupLetters: [
  //                                                   // p.height-60
  //         {"letter": "E", "left": p.width/10*0, "top": p.height/2+p.width/11/2, "size": p.width/11},
  //         {"letter": "M", "left": p.width/10*1, "top": p.height/2+p.width/11/2, "size": p.width/11},
  //         {"letter": "B", "left": p.width/10*2, "top": p.height/2+p.width/11/2, "size": p.width/11},
  //         {"letter": "R", "left": p.width/10*3, "top": p.height/2+p.width/11/2, "size": p.width/11},
  //         {"letter": "A", "left": p.width/10*4, "top": p.height/2+p.width/11/2, "size": p.width/11},
  //         {"letter": "C", "left": p.width/10*5, "top": p.height/2+p.width/11/2, "size": p.width/11},
  //         {"letter": "E", "left": p.width/10*6, "top": p.height/2+p.width/11/2, "size": p.width/11},
  //         {"letter": "-", "left": p.width/10*7, "top": p.height/2+p.width/11/2, "size": p.width/11},
  //         {"letter": "-", "left": p.width/10*8, "top": p.height/2+p.width/11/2, "size": p.width/11},
  //         {"letter": "-", "left": p.width/10*9, "top": p.height/2+p.width/11/2, "size": p.width/11},
  //       ],
  //       words: [
  //         ["C","O","M","P","L","E","X","I","T","Y"],
  //         ["-","-","E","M","B","R","A","C","E","-"],
  //         ["C","O","M","P","L","E","X","I","T","Y"],
  //         ["-","-","-","E","M","B","R","A","C","E"],
  //         ["C","O","M","P","L","E","X","I","T","Y"],
  //         ["E","M","B","R","A","C","E","-","-","-"],
  //       ],
  //     },
  //     singleLetter: {
  //       setupLetters: [
  //         {"letter": "E", "left": p.width*0.66 - p.height*0.68/2, "top": p.height*0.44 + p.height*0.68/2, "size": p.height*0.508},
  //       ],
  //       words: [
  //         // ["-"],["Q"],["E"],["6"],["T"],["9"],["C"],["P"],["5"],["O"],["S"],["8"],["0"],["2"],["U"],["3"],["4"],["R"],["7"],["F"],["G"],["I"],["1"],["J"],["K"],["D"],["L"],["M"],["A"],["N"],["V"],["W"],["X"],["Y"],["H"],["Z"],["B"],
  //         // ["B"],["R"],["E"],["W"],["I"],["N"],["G"],["F"],["U"],["N"],["K"],["I"],["N"],["M"],["Y"],["S"],["O"],["U"],["L"],["K"],["I"],["T"],["C"],["H"],["E"],["N"],
  //         ["M"], ["B"], ["R"], ["A"], ["C"], ["E"], ["C"], ["O"], ["M"], ["P"], ["L"], ["E"], ["X"], ["I"], ["T"], ["Y"], ["E"], 
  //       ],
  //     },
  //   };
  //   return words[name];
  // }

  p.morphiesSmall = function () {
    p.clear();
    w.items.forEach(function (item) {
      // item.setParameters({y: p.height + p.width/22 - 35});
      item.setParameters({y: p.height + p.width/16 - 35});
    });
  }
  p.morphiesLarge = function () {
    p.clear();
    w.items.forEach(function (item) {
      item.resetParameters();
    });
  }

  // function mousePressed () { 
  //   if (!w.startedMorphing) {
  //     w.startedMorphing = true;
  //     w.morphAll(); 
  //   }
  // }

  // p.windowResized = function () {
  //   p.resizeCanvas(p.windowWidth, p.windowHeight);
  //   p.clear();
  //   w = null;
  //   ww = (window.state.responsiveVersion === "desktop") ? p.getWord("wordHome") : p.getWord("singleLetter");
  //   w = new MorphWord(ww.setupLetters, ww.words);
  //   w.setup();
  //   w.morphAll(); 
  // }



  // ---------------------------------------------------------------------------
  // MorphLetter class
  // ---------------------------------------------------------------------------

  function MorphLetter (letterFrom, x, y, size = 200) {

    this.letterToString;
    this.letterFrom = JSON.parse(JSON.stringify(letters[letterFrom]));
    this.letterCurr = JSON.parse(JSON.stringify(letters[letterFrom]));
    this.letterTo = null;
    this.morphing = false;
    this.morphedPoints;
    this.x = x;
    this.y = y;
    this.size = size;
    this.xOriginal = x;
    this.yOriginal = y;
    this.sizeOriginal = size;
    this.xCurr = x;
    this.yCurr = y;
    this.completeness = 0.8;
    this.completeness = 1;


    this.init = function () {
      this.display();
    }
    
    this.morphStart = function (letterTo) {
      this.letterTo = JSON.parse(JSON.stringify(letters[letterTo]));
      this.letterToString = letterTo;
      this.morphing = true;
      this.morphedPoints = [];
      this.isDone = false;
      
      // Only used by V2
      this.life = 0;
    }
    this.morphStop = function () {
      this.morphing = false;
    }

    this.update = function () {
      if (this.morphing) {
        for (let i = 0; i < this.letterCurr.length; i++) {
          
          // V1 - LINEAR
          // ---------------------------------------------------------------------
          
          var inc = 0.000045; // SENTENCE
          // var inc = 0.00008; // LETTER

          this.life += inc;
          if (this.life <= 1) {
            
            var finalCompleteness = (this.letterToString === "-") ? 1 : this.completeness;
            // var lifeEased = easeInOutQuad(this.life) * finalCompleteness;
            
            var lifeEased = easeInOutSine(this.life) * finalCompleteness;
            // var lifeEased = easeInOutBack(this.life) * finalCompleteness;

            // var lifeEased = (this.life) * finalCompleteness;
            
            var v1 = p.createVector(this.letterFrom[i].x, this.letterFrom[i].y);
            var v2 = p.createVector(this.letterTo[i].x, this.letterTo[i].y);
            var v = p5.Vector.lerp(v1, v2, lifeEased);
            this.letterCurr[i].x = v.x;
            this.letterCurr[i].y = v.y;
          }
          if (this.life >= 1) {
            this.morphStop();
            this.letterFrom = JSON.parse(JSON.stringify(this.letterCurr));;
            this.isDone = true;
            this.completeness = (p.random() > 0.5) ? (p.random(0.7, 0.9)) : (p.random(1.1, 1.2));
            this.completeness = 1;
            // this.completeness = p.random(0.95, 1.05);
            // this.completeness *= map(mouseY, 0, height, 0,1);
          }
          // ---------------------------------------------------------------------
          
          // V2 - PROPORTIONAL
          // ---------------------------------------------------------------------
          // this.letterCurr[i].x += (this.letterTo[i].x - this.letterCurr[i].x) * 0.05;
          // this.letterCurr[i].y += (this.letterTo[i].y - this.letterCurr[i].y) * 0.05;

          // var tolerance = 0.5;
          // if (Math.abs(this.letterCurr[i].x - this.letterTo[i].x) < tolerance && Math.abs(this.letterCurr[i].x === this.letterTo[i].x) < tolerance) {
          //   if (this.morphedPoints.indexOf(i) === -1) {
          //     this.morphedPoints.push(i);
          //     if (this.morphedPoints.length >= this.letterCurr.length) {
          //       this.morphStop();
          //       console.log(this.morphedPoints.length);
          //       this.isDone = true;
          //     }
          //   }
          // }
          // ---------------------------------------------------------------------

        }
      }
    }

    this.display = function () {
      var scale = this.size/120;
      if (this.xCurr != this.x) { this.xCurr += (this.x - this.xCurr) * 0.1; }
      if (this.yCurr != this.y) { this.yCurr += (this.y - this.yCurr) * 0.1; }
      p.push();
      p.translate(this.xCurr, this.yCurr);
      p.beginShape();
      for (let i = 0; i < this.letterCurr.length; i++) {
        p.vertex(this.letterCurr[i].x * scale, this.letterCurr[i].y * scale);
      }
      p.endShape(p.CLOSE);
      p.pop();
    }

    this.setParameters = function (params) {
      if (params.x !== undefined) { this.x = params.x; }
      if (params.y !== undefined) { this.y = params.y; }
      if (params.size !== undefined) { this.size = params.size; }
    }

    this.resetParameters = function () {
      this.x = this.xOriginal;
      this.y = this.yOriginal;
      this.size = this.sizeOriginal;
    }

    // this.isDone = function() {
    //   return this.pos.y > this.maxY;
    // }
  }


  // ---------------------------------------------------------------------------
  // MorphWord class
  // ---------------------------------------------------------------------------

  function MorphWord (setupLetters, words) {
    
    this.words = words;

    this.startedMorphing = false;
    this.doneMorphingCount = 0;
    this.items = [];
    this.currentWord = -1;

    this.setup = function () {
      var that = this;
      setupLetters.forEach(function (l) {
        that.items.push(new MorphLetter(l.letter, l.left, l.top, l.size));
      });
      this.items.forEach(function (item) {
        item.init();
      });
      
      if (this.words[0].length !== this.items.length) {
        throw new Error("Number of MorphLetters must be equal to length of words");
      }
    }

    this.update = function () {

      // p.erase(100, 100);
      // p.erase();
      p.fill(0, 10);
      p.rect(0, 0, p.width, p.height);
      // p.noErase();

      var that = this;
      this.items.forEach(function (item) {
        if (!item.isDone) {
          item.update();
          if (item.isDone) {
            that.doneMorphingCount++;
            if (that.doneMorphingCount >= that.items.length) {
              that.morphAll();
            }
          }
        }
      });
    }

    this.display = function () {
      this.items.forEach(function (item) {
        item.display();
      });
    }

    this.morphAll = function () {
      this.currentWord++;
      if (this.currentWord >= this.words.length) {
        this.currentWord = 0;
      }
    
      this.doneMorphingCount = 0;
      var word = this.words[this.currentWord];
      this.items.forEach(function (item, i) {
        item.morphStart(word[i]);
      });
    }
  }



  function easeInOutCubic (x) {
    return x < 0.5 ? 4 * x * x * x : 1 - p.pow(-2 * x + 2, 3) / 2;
  }

  function easeInOutQuad (x) {
    return x < 0.5 ? 2 * x * x : 1 - p.pow(-2 * x + 2, 2) / 2;
  }

  function easeInOutSine (x) {
    return -(p.cos(p.PI * x) - 1) / 2;
  }


  function easeInOutBack (x) {
    const c1 = 1.70158;
    const c2 = c1 * 1.525;
    return x < 0.5
      ? (p.pow(2 * x, 2) * ((c2 + 1) * 2 * x - c2)) / 2
      : (p.pow(2 * x - 2, 2) * ((c2 + 1) * (x * 2 - 2) + c2) + 2) / 2;
  }
});
