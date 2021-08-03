"use strict";

var p5Sketch = new p5(function (p) {

  let font1, font2, font3, font4, font5;
  let fontSize;
  let letters = {};
  let w, ww;

  var wordTitle, singleLetter;

  p.preload = function () {
    var f4 = "fonts/SuisseIntlMono/SuisseIntlMono-Regular.otf";
    font4 = p.loadFont(f4, 
      () => {console.log("loadFont(): f4 loaded")},
      () => {console.log("loadFont(): f4 error")},
    );
  }

  p.setup = function () {
    var canvas = p.createCanvas(p.windowWidth, p.windowHeight);
    canvas.parent("p5-sketch");

    p.background(0, 0,0);
    p.background(0, 13,13);

    // v1 - ori
    // p.noFill();
    // p.stroke(0, 255, 147);
    // p.strokeWeight(0.5);

    // v2
    p.fill(0, 255, 147);
    p.stroke(0);
    p.strokeWeight(0);


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

    letters["~4"] = font4.textToPoints("~", 0, 0, fontSize, {sampleFactor: 0.558})
    letters["&4"] = font4.textToPoints("&", 0, 0, fontSize, {sampleFactor: 0.172})
    letters["+4"] = font4.textToPoints("+", 0, 0, fontSize, {sampleFactor: 0.346})
    letters["*4"] = font4.textToPoints("*", 0, 0, fontSize, {sampleFactor: 0.493})
    letters["<4"] = font4.textToPoints("<", 0, 0, fontSize, {sampleFactor: 0.331})
    letters["‡4"] = font4.textToPoints("‡", 0, 0, fontSize, {sampleFactor: 0.229})
    letters["Æ4"] = font4.textToPoints("Æ", 0, 0, fontSize, {sampleFactor: 0.182})
    letters["æ4"] = font4.textToPoints("æ", 0, 0, fontSize, {sampleFactor: 0.166})
    letters["×4"] = font4.textToPoints("×", 0, 0, fontSize, {sampleFactor: 0.329})
    letters["⁄4"] = font4.textToPoints("⁄", 0, 0, fontSize, {sampleFactor: 0.390})
    letters["†4"] = font4.textToPoints("†", 0, 0, fontSize, {sampleFactor: 0.306})
    letters["@4"] = font4.textToPoints("@", 0, 0, fontSize, {sampleFactor: 0.125})
    letters["{4"] = font4.textToPoints("{", 0, 0, fontSize, {sampleFactor: 0.308})
    letters["]4"] = font4.textToPoints("]", 0, 0, fontSize, {sampleFactor: 0.296})

    letters["ø4"] = font4.textToPoints("ø", 0, 0, fontSize, {sampleFactor: 0.200})
    letters["∑4"] = font4.textToPoints("∑", 0, 0, fontSize, {sampleFactor: 0.186})
    letters["∫4"] = font4.textToPoints("∫", 0, 0, fontSize, {sampleFactor: 0.288})
    letters["≠4"] = font4.textToPoints("≠", 0, 0, fontSize, {sampleFactor: 0.19525})

    // ---------------------------------------------------------------------------


    Object.keys(letters).forEach(k => {
      console.log(k, letters[k].length);
    });

    // V.C

    var size = 30;
    var margin = 50;
    wordTitle = {
      setupLetters: [
        {"letter": "W4", "left": 100+size*0 + margin*0, "top": p.height/2+size/2, "size": size},
        {"letter": "E4", "left": 100+size*1 + margin*1, "top": p.height/2+size/2, "size": size},
        {"letter": "I4", "left": 100+size*2 + margin*2, "top": p.height/2+size/2, "size": size},
        {"letter": "R4", "left": 100+size*3 + margin*3, "top": p.height/2+size/2, "size": size},
        {"letter": "D4", "left": 100+size*4 + margin*4, "top": p.height/2+size/2, "size": size},
        {"letter": "D4", "left": 100+size*5 + margin*5, "top": p.height/2+size/2, "size": size},
      ],
      words: [

        ["ø4", "∑4", "∫4", "≠4", "]4", "+4"],
        ["*4", "‡4", "Æ4", "æ4", "~4", "&4"],
        ["14", "24", "34", "44", "54", "64"],
        ["74", "84", "94", "04", "×4", "⁄4"],
        ["†4", "@4", "{4", "<4", "]4", "+4"],
        
        // ["G4","N4","O4","S4","I4","S4"],
        // ["W4","W4","E4","I4","R4","D4"],
        // ["G4","N4","O4","S4","I4","S4"],
        // ["W4","E4","E4","I4","R4","D4"],
        // ["G4","N4","O4","S4","I4","S4"],
        // ["W4","E4","I4","I4","R4","D4"],
        // ["G4","N4","O4","S4","I4","S4"],
        // ["W4","E4","I4","R4","R4","D4"],
      ],
    };

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

      p.fill(0, 10);
      p.rect(0, 0, p.width, p.height);
  
      // v1 - ori
  
      // v2
      p.fill(0, 255, 147);
      p.stroke(0);

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
