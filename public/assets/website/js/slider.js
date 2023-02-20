let timeObj;
let outObj;

function loadCultureFiles() {
    // Implementation of loadCultureFiles
}

function tooltipChangeHandler(args) {
    
    let letters = ['D', 'E', 'F', 'G', 'H', 'I'];
    let startLetter = letters[args.value[0]];

    let endLetter = letters[args.value[1]];
    args.text = `${startLetter} - ${endLetter}`;
}

function renderingTicksHandler(args) {
    let letters = ['D', 'E', 'F', 'G', 'H', 'I'];
    args.text = letters[args.value];
}

loadCultureFiles();
timeObj = new ej.inputs.Slider({
    min: 0,
    max: 5,
    step: 1,
    value: [1, 4],
    tooltipChange: tooltipChangeHandler,
    tooltip: {
        placement: 'Before',
        isVisible: true,
        cssClass: 'e-tooltip-cutomization'
    },
    renderingTicks: renderingTicksHandler,
    ticks: {
        placement: 'After',
        largeStep: 1,
        smallStep: 1,
        showSmallTicks: true
    },
    type: 'Range'
});
timeObj.appendTo('#default');

function onScroll() {
    timeObj.refreshTooltip(timeObj.tooltipTarget);
    outObj.refreshTooltip(outObj.tooltipTarget);
}
