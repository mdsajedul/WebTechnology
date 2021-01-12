
	var districtDetails = {
  "Dhaka": {
    "Tangail": ["Tangail Sadar Upazila","Sakhipur Upazila","Basail Upazila","Madhupur Upazila","Ghatail Upazila"],
    "Dhaka": ["Dhamrai Upazila","Dohor Upazila","Keraniganj Upazila","Nawabganj Upazila","Savar Upazila","Tejgaon Upazila"],
    "Manikganj": ["Manikganj Sadar Upazila", "Singair Upazila", "Ghior Upazila", "Daulatpur Upazila","Shivalaya Upazila"]    
  },
  "Rangpur": {
    "Dinajpur": ["Birampur Upazila", "Biral Upazila", "Birganj Upazila","Dinaj Sadar Upazila","Fulbari Upazila","Ghoraghat Upazila"],
    "Kurigram": ["Kurigram Sadar Upazila", "Phulbari Upazila", "Rajarhat Upazila","Raomari Upazila","Ulipur Upazila","Chilmari Upazila"],
    "Lalmonirhat": ["Aditmari Upazila", "Hatibandha Upazila", "Kaliganj Upazila","Lalmonirhat Sadar Upazila","Patgram Upazila"]
  }
}
window.onload = function() {
  var divitionSel = document.getElementById("divition");
  var districtSel = document.getElementById("district");
  var subDistrictSel = document.getElementById("subDistrict");
  for (var x in districtDetails) {
    divitionSel.options[divitionSel.options.length] = new Option(x, x);
  }
  divitionSel.onchange = function() {

    subDistrictSel.length = 1;
    districtSel.length = 1;

    for (var y in districtDetails[this.value]) {
      districtSel.options[districtSel.options.length] = new Option(y, y);
    }
  }
  districtSel.onchange = function() {

    subDistrictSel.length = 1;

    var z = districtDetails[divitionSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      subDistrictSel.options[subDistrictSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
