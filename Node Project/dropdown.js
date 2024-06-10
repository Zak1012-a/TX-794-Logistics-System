var uniformObject = {
  "BLUES": {
    "HAT":     [],
    "COAT":    [],
    "SHIRT":   [],
    "PANTS":   [],
    "SHOES":   []
  },
  "OCP": {
    "HAT":     [],
    "COAT":    [],
    "BLOUSE":  [],
    "PANTS":   [],
    "BOOTS":   []
  },
  "UCP": {
    "HAT":     [],
    "COAT":    [],
    "BLOUSE":  [],
    "PANTS":   [],
    "BOOTS":   []
  },
  "PT": {
    "SHIRT":   [],
    "SHORTS":  []
  },
  "ACCESSORIES": {
    "RANKS":   [],
    "RIBBONS": [],
    "BADGES":  [],
    "TIE":     ["N/A"],
    "TABS":    ["N/A"]
  },
}
window.onload = function() {
  var uniformSel = document.getElementById("uniform");
  var pieceSel = document.getElementById("piece");
  var sizeSel = document.getElementById("size");
  for (var x in uniformObject) {
    uniformSel.options[uniformSel.options.length] = new Option(x, x);
  }
  uniformSel.onchange = function() {
    //empty sizes- and pieces- dropdowns
    sizeSel.length = 1;
    pieceSel.length = 1;
    //display correct values
    for (var y in uniformObject[this.value]) {
      pieceSel.options[pieceSel.options.length] = new Option(y, y);
    }
  }
  pieceSel.onchange = function() {
    //empty sizes dropdown
    sizeSel.length = 1;
    //display correct values
    var z = uniformObject[uniformSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      sizeSel.options[sizeSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
