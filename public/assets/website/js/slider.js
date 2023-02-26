let timeObj;
let outObj;

function loadCultureFiles() {
  // Implementation of loadCultureFiles
}

function tooltipChangeHandler(args, startValue, endValue) {
  args.text = `${startValue} - ${endValue}`;
}
function renderingTicksHandler(args, value) {
  args.text = value;
}
loadCultureFiles();
function createSlider(
  min,
  max,
  start,
  end,
  step,
  tooltipChangeHandler,
  renderingTicksHandler,
  values
) {
  return new ej.inputs.Slider({
    min: 0,
    max: values.length - 1,
    step: step,
    value: [values.indexOf(start), values.indexOf(end)],
    tooltipChange: function (args) {
      let startValue = values[args.value[0]];
      let endValue = values[args.value[1]];
      tooltipChangeHandler(args, startValue, endValue);
    },
    tooltip: {
      placement: "Before",
      isVisible: true,
      cssClass: "e-tooltip-cutomization",
    },
    renderingTicks: function (args) {
      let value = values[args.value];
      renderingTicksHandler(args, value);
    },
    ticks: {
      placement: "After",
      largeStep: 1,
      smallStep: 1,
      showSmallTicks: true,
    },
    type: "Range",
  });
}
let colors = ["D", "E", "F", "G", "H", "I"];
let clarities = ["IF", "VVS1", "VVS2", "VS1", "VS2"];
let cut = ["Good", "Very Good", "Ideal"];
let colorSlider = createSlider(
  0,
  colors.length - 1,
  "D",
  "I",
  1,
  tooltipChangeHandler,
  renderingTicksHandler,
  colors
);
let claritySlider = createSlider(
  0,
  clarities.length - 1,
  "IF",
  "VS2",
  1,
  tooltipChangeHandler,
  renderingTicksHandler,
  clarities
);
let cutSlider = createSlider(
  0,
  cut.length - 1,
  "Good",
  "Ideal",
  1,
  tooltipChangeHandler,
  renderingTicksHandler,
  cut
);
colorSlider.appendTo("#color-slider");
claritySlider.appendTo("#clarity-slider");
cutSlider.appendTo("#cut-slider");
function onScroll() {
  timeObj.refreshTooltip(timeObj.tooltipTarget);
  outObj.refreshTooltip(outObj.tooltipTarget);
}
//price range slider

function createSliderprice(start, end, step) {
  return new ej.inputs.Slider({
    min: 0,
    max: 50000,
    step: step,
    value: [start, end],

    tooltip: {
      placement: "Before",
      isVisible: true,
      cssClass: "e-tooltip-cutomization",
    },
    type: "Range",
  });
}
let price = Array.from(Array(501).keys()).map((x) => x * 100);
let priceSlider = createSliderprice(0, 50000, 200, price);
priceSlider.appendTo("#price-slider");

//carat range slider
function renderingTicksHandlercarat(args) {
  args.text = args.value;
}
function createSliderCarat(start, end, step) {
  const values = Array.from(Array((end - start) * 2 + 1).keys()).map(
    (x) => start + x * step
  );

  return new ej.inputs.Slider({
    min: start,
    max: end,
    step: step,
    value: 3.5,
    tooltip: {
      placement: "Before",
      isVisible: true,
      cssClass: "e-tooltip-cutomization",
    },
    renderingTicks: renderingTicksHandlercarat,
    ticks: {
      placement: "After",
      largeStep: 1,
      smallStep: 1,
      showSmallTicks: true,
      value: values,
    },
    type: "Range",
  });
}
let caratSlider = createSliderCarat(1, 7, 0.5);
caratSlider.appendTo("#carat-slider");
const queryString = window.location.search;
console.log(queryString);
