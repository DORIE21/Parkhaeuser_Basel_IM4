const data = {
    labels: [
        'Belegt',
        'Frei'
    ],
    datasets: [{
        label: 'Parkhaus 1',
        data: [55, 355],
        backgroundColor: [
            '#C22424',
            '#019C82'
        ],
        hoverOffset: 4
    }]
};

const config = {
    type: 'doughnut',
    data: data,
};

let graphs = document.getElementById("graphs")

for(let i = 0; i < 5; i++){
    let container = document.createElement("div");
    container.style.width = "200px"
    container.style.height = "200px"
    let cv = document.createElement("canvas");
    container.appendChild(cv);
    let ctx = cv.getContext("2d");
    new Chart(ctx, config);
    graphs.appendChild(container);
}

