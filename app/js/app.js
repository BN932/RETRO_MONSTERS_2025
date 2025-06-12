var sliderPv = document.getElementById("slider-pv");
var minPv = document.getElementById("min-pv");
var maxPv = document.getElementById("max-pv");
var sliderPvValue = document.getElementById("slider-pv-value");

noUiSlider.create(sliderPv, {
    start: [20, 80], // Valeurs initiales pour min et max PV
    connect: true,
    range: {
    min: 0,
    max: 200,
    },
    });

sliderPv.noUiSlider.on("update", function (values, handle) {
    minPv.value = values[0];
    maxPv.value = values[1];
    sliderPvValue.innerHTML = "PV: " + values.join(" - ");
});


              var sliderAttaque = document.getElementById("slider-attaque");
              var minAttaque = document.getElementById("min-attaque");
              var maxAttaque = document.getElementById("max-attaque");
              var sliderAttaqueValue = document.getElementById(
                "slider-attaque-value"
              );

              noUiSlider.create(sliderAttaque, {
                start: [20, 80], // Valeurs initiales pour min et max Attaque
                connect: true,
                range: {
                  min: 0,
                  max: 200,
                },
              });

              sliderAttaque.noUiSlider.on("update", function (values, handle) {
                minAttaque.value = values[0];
                maxAttaque.value = values[1];
                sliderAttaqueValue.innerHTML = "Attaque: " + values.join(" - ");
              });
              